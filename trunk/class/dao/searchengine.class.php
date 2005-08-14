<?php

    include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/searchresult.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    
    /**
	 * \ingroup DAO
	 *
	 * Provides search facilities. At the moment it does not use MySQL's FULLTEXT index features because we are
	 * targetting as many people as possible and believe it or not, many people are still running MySQL 3.x.
	 *
	 * This class provides methods for searching through articles, comments and custom fields.
	 *
	 * @see Articles
	 * @see ArticleComments
	 * @see CustomFields
     */
    class SearchEngine extends Model
    {
    
        function SearchEngine()
        {
            $this->Model();
        }

        /**
         * takes the search string as originally input by a user and makes it "better", in the sense
         * that for example converts it to "term1 AND term2" instead of "term1 OR term2" which is the
         * default behaviour. In order to do so, the "+" operator must be added before each one of the
         * search terms as long as it is not already there.
         *
         * @param searchTerms The original search string
         * @return Returns an 'improved' version of the search terms
         */ 
        function _adaptSearchString( $searchTerms )
        {
			// load this module only if needed...
			include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );		
			$tf = new Textfilter();
			$resultTerms = $tf->filterCharacters( $searchTerms, Array( '"', ';', '.' ));
            $resultTerms = Db::qstr($resultTerms);			
			
            $resultTerms = trim($resultTerms);
            return $resultTerms;
        }

        /**
         * MARKWU:
         * takes the search string as originally input by a user and makes it "better", in the sense
         * that for example converts it to "term1 AND term2" instead of "term1 OR term2" which is the
         * default behaviour. In order to do so, the "+" operator must be added before each one of the
         * search terms as long as it is not already there. This one is for public use, and will also 
         * convert the search string to a search terms array.
         *
         * @param searchTerms The original search string
         * @return Returns an 'improved' and 'arraized' version of the search terms
         */ 
        function getAdaptSearchTerms ( $searchTerms )
        {
            $resultTerms = Db::qstr($searchTerms);          
            $resultTerms = trim($resultTerms);
            $resultTerms = explode(' ',$resultTerms);
            return $resultTerms;
        }
		
		/**
		 * Searches through articles, custom fields and comments only if enabled
		 *
		 * @param blogId
		 * @param query
		 * @param minRelevance
		 * @param maxResults
		 * @param status
		 * @param userId
		 * @param date
		 * @return
		 * @see searchArticles
		 * @see searchCustomFields
		 * @see searchComments
		 */
		function search( $blogId, $query, $minRelevance = 0, $maxResults = 0, $status = POST_STATUS_PUBLISHED, $userId = -1, $date = 0 )
		{
			$matchingArticles = $this->searchArticles( $blogId, $query, $minRelevance, $maxResults, $status, $userId, $date );
			$matchingComments = $this->searchComments( $blogId, $query, $minRelevance, $maxResults, $status, $userId, $date );
			$matchingFields   = $this->searchCustomFields( $blogId, $query, $minRelevance, $maxResults, $status, $userId, $date );
			
			$results = array_merge( $matchingArticles, $matchingComments, $matchingFields ); 
			
			//
			// remove duplicated (or triplicated!) articles
			//
			$results = $this->_filterResults( $results );
			
			return $results;
		}
		
		/**
		 * performs a site-wide search
		 * @param query
		 * @param minRelevance
		 * @param maxResults
		 * @param status
		 * @param userId
		 * @param date
		 * @return
		 * @see search
		 * @see searchArticles
		 * @see searchCustomFields
		 * @see searchComments
		 */
		function siteSearch( $query, $minRelevance = 0, $maxResults = 0, $status = POST_STATUS_PUBLISHED, $userId = -1, $date = 0 )
		{
			return $this->search( -1, $query, $minRelevance = 0, $maxResults = 0, $status = POST_STATUS_PUBLISHED, $userId = -1, $date = 0 );
		}
		
		/**
		 * this method will generate the correct WHERE string depending on the $query parameter. The $query
		 * parameter is an array including all the search terms that were received from the user.
		 * It has been moved to its own method so that it can be be reused by other methods from this class
		 * and from other classes.
		 *
		 * @param query An string containing the search terms
		 * @private
		 * @return An string with the correct WHERE conditions ready to be used in a query
		 */
		function _generateSearchArticlesWhereString( $query )
		{
            // Split the search term by space
            $query_array = explode(' ',$query);

            // For each search terms, I should make a like query for it   
            $where_string = "(";
            $where_string .= "((t.normalized_topic LIKE '%{$query_array[0]}%') OR (t.normalized_text LIKE '%{$query_array[0]}%'))";
            for ( $i = 1; $i < count($query_array); $i = $i + 1) {
				
                $where_string .= " AND ((t.normalized_topic LIKE '%{$query_array[$i]}%') OR (t.normalized_text LIKE '%{$query_array[$i]}%'))";
            }
            $where_string .= " OR ((t.normalized_topic LIKE '%{$query}%') OR (t.normalized_text LIKE '%{$query}%'))";
            $where_string .= ")";
			
			return $where_string;
		}
		
		/**
		 * @private
		 *
		 * Generates an SQL query that can be used to search articles. This method was originally part of searchArticles but it was moved
		 * so that it is possible to have a method such as searchArticles that returns an array of SearchResult objects and searchBlogArticles
		 * that returns an array of Article objects.
		 * It has been moved to its own method so that it can be used by other classes and methods
		 * @see Articles::searchBlogArticles
		 * @see Articles::getBlogArticles
		 * @see searchArticles
		 */
		function _generateSearchArticlesQuery( $blogId, $query, $minRelevance = 0, $maxResults = 0, $status = POST_STATUS_PUBLISHED, $userId = -1, $date = 0 )
		{
            $prefix      = $this->getPrefix();
			$query       = $this->_adaptSearchString($query);            

            // MARKWU: I also need to take care when there are multiplu search term
			$where_string = $this->_generateSearchArticlesWhereString( $query );

            // Make the whole sql query string
            $searchQuery = "SELECT a.id AS id, a.date AS date,
			                a.user_id AS user_id, a.blog_id AS blog_id, a.num_reads AS num_reads, 
							a.properties AS properties, t.normalized_text AS normalized_text,
							t.normalized_topic AS normalized_topic, a.status AS status, a.slug AS slug,
							1 AS relevance
                            FROM {$prefix}articles a, {$prefix}articles_text t
                            WHERE {$where_string} AND a.id = t.article_id AND a.status = $status";
			if( $blogId > 0 ) 
				$searchQuery .= " AND a.blog_id = '".Db::qstr($blogId)."'";
			if( $userId > 0 ) 
				$searchQuery .= " AND a.user_id = $userId ";
			if( $date > 0 )	
				$searchQuery .= " AND a.date+0 LIKE '$date%' ";
				
            $searchQuery .=" ORDER BY relevance DESC";
			
			return $searchQuery;
		}
        
        /**
         * Returns an array of SearchResult objects containing information about the search, such as the
         * relevance (not very relevant, though :)), and the ArticleObject
         *
         * @param blogId The id of the blog whose articles we would like to search
         * @param query The query string we'd like to use.
         * @param minRelevance Minimum value of the relevance field, to get rid of less meaningful
         * results
         * @param maxResults Maximum number of results that will be returned.
		 * @param status
		 * @param userId
		 * @param date
         * @return An array of SearchResult objects
         */
        function searchArticles( $blogId, $query, $minRelevance = 0, $maxResults = 0, $status = POST_STATUS_PUBLISHED, $userId = -1, $date = 0 )
        {
			// build the search query
			$searchQuery = $this->_generateSearchArticlesQuery( $blogId, $query, $minRelevance = 0, $maxResults = 0, $status = POST_STATUS_PUBLISHED, $userId = -1, $date = 0 );
			
			return $this->_getQueryResults( $searchQuery, SEARCH_RESULT_ARTICLE );
        }

        /**
         * Returns an array of Article objects with the articles that matched the search terms
         *
         * @param blogId The id of the blog whose articles we would like to search
         * @param query The query string we'd like to use.
         * @param minRelevance Minimum value of the relevance field, to get rid of less meaningful
         * results
         * @param maxResults Maximum number of results that will be returned.
		 * @param status
		 * @param userId
		 * @param date
         * @return An array of Article objects
         */		
		function searchBlogArticles( $blogId, $query, $minRelevance = 0, $maxResults = 0, $status = POST_STATUS_PUBLISHED, $userId = -1, $date = 0 )
		{
			// build the search query
			$searchQuery = $this->_generateSearchArticlesQuery( $blogId, $query, $minRelevance = 0, $maxResults = 0, $status = POST_STATUS_PUBLISHED, $userId = -1, $date = 0 );
            $result = $this->_db->Execute( $query );
            
            // return an empty array if nothing available
            if( !$result )
                return Array();
             
            $results = Array();
            $articles = new Articles();
            while( $row = $result->FetchRow()) {
                $article = $articles->_fillArticleInformation( $row );
				array_push( $results, $article );
            }
            
            return $results;
			
		}
				
        /**
         * Returns an array of SearchResult objects containing information about the search, such as the
         * relevance (not very relevant, though :)), and the ArticleObject
         *
         * @param blogId The id of the blog whose articles we would like to search
         * @param query The query string we'd like to use.
         * @param minRelevance Minimum value of the relevance field, to get rid of less meaningful
         * results
         * @param maxResults Maximum number of results that will be returned.
         * @return An array of SearchResult objects
         */
		 function searchCustomFields( $blogId, $query, $minRelevance = 0, $maxResults = 0, $status = POST_STATUS_PUBLISHED, $userId = -1, $date = 0 )
         { 
            $prefix      = $this->getPrefix();
			$query       = $this->_adaptSearchString($query);

            $searchQuery = "SELECT a.id AS id, t.topic AS topic, t.text AS text, a.date AS date,
			                       a.user_id AS user_id, a.blog_id AS blog_id, a.num_reads AS num_reads, 
							       a.properties AS properties, t.normalized_text AS normalized_text,
							       t.normalized_topic AS normalized_topic, a.status AS status, a.slug AS slug,
							       1 AS relevance 
							 FROM {$prefix}custom_fields_values v, {$prefix}articles a, {$prefix}articles_text t
							 WHERE (v.field_value LIKE '%{$query}%') AND v.article_id = a.id AND a.status = $status
							       AND t.article_id = a.id";
			if( $blogId > 0 ) 
				$searchQuery .= " AND a.blog_id = '".Db::qstr($blogId)."' ";
			if( $userId > 0 ) 
				$searchQuery .= " AND a.user_id = '".Db::qstr($userId)."' ";
			if( $date > 0 )	
				$searchQuery .= " AND a.date+0 LIKE '$date%' ";
				
			$searchQuery .= " ORDER BY relevance";
							 
							 
			//print $searchQuery;
			//print "<hr />";
			return $this->_getQueryResults( $searchQuery, SEARCH_RESULT_CUSTOM_FIELD );
        }
		
        /**
         * Returns an array of SearchResult objects containing information about the search, such as the
         * relevance (not very relevant, though :)), and the ArticleObject
         *
         * @param blogId The id of the blog whose articles we would like to search
         * @param query The query string we'd like to use.
         * @param minRelevance Minimum value of the relevance field, to get rid of less meaningful
         * results
         * @param maxResults Maximum number of results that will be returned.
         * @return An array of SearchResult objects
         */
        function searchComments( $blogId, $query, $minRelevance = 0, $maxResults = 0, $status = POST_STATUS_PUBLISHED, $userId = -1, $date = 0 )
        {
            $prefix      = $this->getPrefix();
			$query       = $this->_adaptSearchString($query);

            // MARKWU: I also need to take care when there are multiplu search term

            // Split the search term by space
            $query_array = explode(' ',$query);

            // For each search terms, I should make a like query for it   
            $where_string = "(";
            $where_string .= "((c.normalized_topic LIKE '%{$query_array[0]}%') OR (c.normalized_text LIKE '%{$query_array[0]}%'))";
            for ( $i = 1; $i < count($query_array); $i = $i + 1) {
                $where_string .= " AND ((c.normalized_topic LIKE '%{$query_array[$i]}%') OR (c.normalized_text LIKE '%{$query_array[$i]}%'))";
            }
            $where_string .= " OR ((c.normalized_topic LIKE '%{$query}%') OR (c.normalized_text LIKE '%{$query}%'))";
            $where_string .= ")";            

            // Make the whole sql query string
            $searchQuery = "SELECT a.id AS id, t.topic AS topic, t.text AS text, a.date AS date,
			                       a.user_id AS user_id, a.blog_id AS blog_id, a.num_reads AS num_reads, 
							       a.properties AS properties, t.normalized_text AS normalized_text,
							       t.normalized_topic AS normalized_topic, a.status AS status, a.slug AS slug, 
							       1 AS relevance 
							 FROM {$prefix}articles_comments c, {$prefix}articles a, {$prefix}articles_text t
							 WHERE {$where_string} AND c.article_id = a.id AND a.status = $status AND c.status = 0
							       AND t.article_id = a.id"; 
			if( $blogId > 0 )
				$searchQuery .=" AND a.blog_id = '".Db::qstr($blogId)."' ";
			if( $userId > 0 )
				$searchQuery .= " AND a.user_id = '".Db::qstr($userId)."' ";
			if( $date > 0 )	
				$searchQuery .= " AND a.date+0 LIKE '$date%' ";
				
			$searchQuery .= " ORDER BY relevance";
			
			// print $searchQuery;
			// print "<hr />";
			return $this->_getQueryResults( $searchQuery, SEARCH_RESULT_COMMENT );
        }
		
		/**
		 * Filters duplicated or triplicated results.
		 *
		 * @param results
		 * @return An array with duplicated items listed more than once
		 * @private
		 * @see search
		 */
		function _filterResults( $results )
		{
			$alreadySeen = Array();
			$result = Array();
			
			foreach( $results as $item ) {
				$article = $item->getArticle();
				if( !array_key_exists( $article->getId(), $alreadySeen ) || $alreadySeen[$article->getId()] == false ) {
					array_push( $result, $item );
					$alreadySeen[$article->getId()] = true;
				}
			}
			
			return $result;
		}
		
		/**
		 * 
		 * @param query
		 * @param queryType Whether we got these results searching in the articles, comments, 
		 * or custom fields.
		 * @private
		 * @return 
		 */
		function _getQueryResults ( $query, $queryType )
		{
            $result = $this->_db->Execute( $query );
            
            // return an empty array if nothing available
            if( !$result )
                return Array();
             
            $results = Array();
            $articles = new Articles();
            while( $row = $result->FetchRow()) {
                $article = $articles->_fillArticleInformation( $row );
                $searchResult = new SearchResult( $row["relevance"], $article, $queryType );
                
                // print_r(array_keys($row));
                // print "<hr />";
                array_push( $results, $searchResult );
            }
            
            return $results;
		}
    }
?>
