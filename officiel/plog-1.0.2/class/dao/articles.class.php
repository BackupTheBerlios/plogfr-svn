<?php

    include_once( PLOG_CLASS_PATH.'class/dao/model.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/article.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/articlecategories.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/articlenotifications.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/articlecomments.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/articlecommentstatus.class.php' );	
    include_once( PLOG_CLASS_PATH.'class/dao/users.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/trackbacks.class.php' );
    include_once( PLOG_CLASS_PATH.'class/data/timestamp.class.php' );
    include_once( PLOG_CLASS_PATH.'class/config/config.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/blogs.class.php' );
    include_once( PLOG_CLASS_PATH.'class/data/textfilter.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/customfields/customfieldsvalues.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/customfields/customfields.class.php' );

    include_once( PLOG_CLASS_PATH.'class/logger/LogUtil.php' );

    /**
	 * \ingroup DAO
	 *
     * Model for the Articles
     */
    class Articles extends Model
    {

        // DAO objects that we keep for later, so that we don't have
        // to create them eeeeevery time!
        var $categories;
        var $comments;
        var $trackbacks;
        var $users;
        var $blogs;
		var $customfields;		
		var $_blogInfo;
		var $_blogSettings;
		var $_timeDiff;

        function Articles()
        {
            $this->Model();
            $this->categories = new ArticleCategories();
            $this->comments = new ArticleComments();
            $this->trackbacks = new Trackbacks();
            $this->users      = new Users();
            $this->blogs      = new Blogs();
			$this->customfields = new CustomFieldsValues();			
			// fine, this is not very nice but it helps a lot, specially if all the classes
			// that need to load articles share the same instance		
			$this->cache      = Array();	
			$this->_blogInfo  = null;
			$this->_timeDiff  = 0;
			$this->_blogsettings = null;
        }

        /**
         * Gets an article from the database, given its id
         *
         * @param artId Identifier of the article we want to fetch
         * @param userId If set, the article must belong to user identified by
         ** such id.
         * @return Returns an Article object or 'false' otherwise.
         */
        function getUserArticle( $artId, $userId = -1 )
        {
            $query = "SELECT * FROM ".$this->getPrefix()."articles WHERE id = '".Db::qstr($artId)."'";
            if( $userId != -1 )
                $query .= " AND user_id = '".Db::qstr($userId)."'";
            $query .= ";";

            // we send the query and then fetch the first array with the result
            $result = $this->Execute( $query );

            if ( $result->RecordCount() == 0)
                return false;

            $row = $result->FetchRow( $result );

            $article = $this->_fillArticleInformation( $row );
            
            $result->Close();            

            return $article;
        }

        /**
         * Gets an article from the database, given its id
         *
         * @param artId Identifier of the article we want to fetch
         * @param blogId If set, the article must belong to the given blog
         * @return Returns an Article object or 'false' otherwise.
         */
        function getBlogArticle( $artId, $blogId = -1, $includeHiddenFields = true, $date = -1, $categoryId = -1, $userId = -1, $status = POST_STATUS_ALL, $maxDate = -1 )
        {
			$prefix = $this->getPrefix();
            $query = "SELECT a.id, a.date,
			                 a.user_id,a.blog_id,a.status,a.properties,
							 a.num_reads, a.slug FROM {$prefix}articles a ";
			// thanks jon for the tip :) You're right that the amount of rows will be too big if we don't really need these
			// fields!
			if($categoryId != -1 && $blogId != -1) {
				$query .= ", {$prefix}articles_categories c, {$prefix}article_categories_link l ";
			}
			
			$query .= "WHERE a.id = ".Db::qstr($artId);
					 
            if( $blogId != -1 )
                $query .= " AND a.blog_id = ".Db::qstr($blogId);
			if( $date != -1 && $maxDate == -1 ) {
                $query .= " AND a.date+0 LIKE '$date%'";
			} elseif ( $date != -1 && $maxDate != -1 ) {
				$query .= " AND a.date+0 >= $date AND a.date+0 <= $maxDate";
			}
			if( $userId != -1 ) 
				$query .= " AND a.user_id = ".Db::qstr($userId);
			if( $categoryId != -1 )
				$query .= " AND c.id = ".Db::qstr($categoryId)." AND c.id = l.category_id AND a.id = l.article_id";
			if( $status != POST_STATUS_ALL )
				$query .= " AND a.status = $status;";
				
            return $this->_getBlogArticleFromQuery( $query, $includeHiddenFields );
        }
        
        /**
         * Gets an article from the database, given its slug, this is used
         * with the fancy permalinks
         *
         * @param artTitle Identifier of the article we want to fetch
         * @param blogId If set, the article must belong to the given blog
         * @return Returns an Article object or 'false' otherwise.
         */        
        function getBlogArticleByTitle( $artTitle, $blogId = -1, $includeHiddenFields = true, $date = -1, $categoryId = -1, $userId = -1, $status = POST_STATUS_PUBLISHED, $maxDate = -1 )
        {
			$prefix = $this->getPrefix();
            $query = "SELECT a.id, a.date,
			                 a.user_id,a.blog_id,a.status,a.properties,
							 a.num_reads, a.slug FROM {$prefix}articles a ";
			// thanks jon once again :)
			if($categoryId != -1 && $blogId != -1) {
				$query .= ",{$prefix}articles_categories c, {$prefix}article_categories_link l ";
			}
			$query .= "WHERE a.slug = '".Db::qstr($artTitle)."'";
            if( $blogId != -1 )
                $query .= " AND a.blog_id = ".Db::qstr($blogId);
			if( $date != -1 && $maxDate == -1 ) {
                $query .= " AND a.date+0 LIKE '$date%'";
			} elseif ( $date != -1 && $maxDate != -1 ) {
				$query .= " AND a.date+0 >= $date AND a.date+0 <= $maxDate";
			}
			if( $userId != -1 ) 
				$query .= " AND a.user_id = ".Db::qstr($userId);
			if( $categoryId != -1 ) {
				$query .= " AND c.id = ".Db::qstr($categoryId)." AND c.id = l.category_id AND a.id = l.article_id";
			}
				
            $query .= " AND a.status = $status;";
            
            return $this->_getBlogArticleFromQuery( $query, $includeHiddenFields );
        }
        
        /**
         * @private
         */
        function _getBlogArticleFromQuery( $query, $includeHiddenFields )
        {
            // we send the query and then fetch the first array with the result
            $result = $this->Execute( $query );

            if( $result == false )
                return false;

            if ( $result->RecordCount() == 0)
                return false;

            $row = $result->FetchRow( $result );

            $article = $this->_fillArticleInformation( $row, $includeHiddenFields );
            
            $result->Close();            

            return $article;        
        }

        /**
         * Returns the article that goes after the one we give as the parameter.
         *
         * @param article An article object         
		 * @return An Article object with the next article or false if there was no article.
         */
        function getBlogNextArticle( $article )
        {
			// we need to keep the timestamp in mind
			$date = $article->getDateObject();
			$articleCorrectedDate = Timestamp::getDateWithOffset( $article->getDate(), -($article->getTimeOffset()));
			$blogId = $article->getBlog();

            // gets the article that is just next in time
            $query = "SELECT * FROM ".$this->getPrefix()."articles 
			                  WHERE date > '".$articleCorrectedDate."' AND status = '".Db::qstr(POST_STATUS_PUBLISHED)."' 
							        AND blog_id = '".Db::qstr($blogId)."' ORDER BY date ASC LIMIT 1;";
			
			return( $this->_getBlogArticleFromQuery( $query, false ));
        }

        /**
         * Returns the article that goes before the one we give as the parameter.
         *
         * @param article An article object
         * @return An Article object with the previous article or false if there was no article.
         */
        function getBlogPrevArticle( $article )
        {
			// we need to keep the timestamp in mind
			$date = $article->getDateObject();
			$articleCorrectedDate = Timestamp::getDateWithOffset( $article->getDate(), -($article->getTimeOffset()));
			$blogId = $article->getBlog();			
		
            // gets the article that is just previous in time
            $query = "SELECT * FROM ".$this->getPrefix()."articles 
			                   WHERE date < '".$articleCorrectedDate."' AND status = ".POST_STATUS_PUBLISHED." 
									 AND blog_id = '".Db::qstr($blogId)."' ORDER BY date DESC LIMIT 1;";
									 
			return( $this->_getBlogArticleFromQuery( $query, false ));
		}
		
		/**
		 * a shortcut for getBlogArticles in case we're only interested in searching all the items
		 * without further refining the search (which is possible if we use the one below)
		 *
		 * @param blogId
		 * @param searchTerms
		 * @return An array of Article objects or an empty array if no article matched the search terms
		 */
		function searchBlogArticles( $blogId, $searchTerms )
		{
			$posts = $this->getBlogArticles( $blogId,
			                                 -1, // no date
											 -1, // no amount
											 0, // no category id
											 0, // not any status
											 0, // not belonging to any user id in particular
											 0, // no maximum date
											 $searchTerms // the only thing we're taking into account: the search terms!!
											 );
												 
			return $posts;
		}
		
		/**
		 * builds a WHERE clause for a query
		 *
		 * @private
		 */
		function buildWhere( $blogid, $date = -1, $amount = -1, $categoryId = 0, $status = 0, $userId = 0, $maxDate = 0, $searchTerms = "" )
		{
            $postStatus = $status;
		    $prefix = $this->getPrefix();
            if($blogid == -1){
                $query = "a.blog_id = a.blog_id";
            }
            else{
                $query = "a.blog_id = ".Db::qstr($blogid);
            }
            if( $date != -1 ) {
				// consider the time difference
    	        $blogSettings = $this->blogs->getBlogSettings( $blogid );
        	    $timeDifference = $blogSettings->getValue( "time_offset" );
				$SecondsDiff = $timeDifference * 3600;
                $query .= " AND FROM_UNIXTIME(UNIX_TIMESTAMP(a.date)+$SecondsDiff)+0 LIKE '$date%'";
            }

            // the common part "c.id = a.category_id" is needed so that
            // we don't get one article row as many times as the amount of categories
            // we have... due to the sql 'join' operation we're carrying out
            if( $categoryId == -1 )
                $query .= " AND c.id = l.category_id AND a.id = l.article_id ";
            else {
                if( $categoryId > 0 )
                    $query .= " AND a.id = l.article_id AND l.category_id = $categoryId AND c.id = l.category_id";
                else {
                    $query .= " AND c.id = l.category_id AND a.id = l.article_id AND c.in_main_page = 1";
                }
            }

            if( $status > 0 )
                $query .= " AND a.status = '$postStatus'";
            if( $userId > 0 )
                $query .= " AND a.user_id = ".Db::qstr($userId);
            if( $maxDate > 0 )
                $query .= " AND a.date <= '$maxDate'";
				
			// in case there were some search terms specified as parameters...
			if( $searchTerms != "" ) {
				// load the class dynamically so that we don't have to waste memory
				// if we're not going to need it!
				include_once( PLOG_CLASS_PATH."class/dao/searchengine.class.php" );			
				$searchEngine = new SearchEngine();
				
				// prepare the query string
				$searchTerms = $searchEngine->_adaptSearchString( $searchTerms );
				$whereString = $searchEngine->_generateSearchArticlesWhereString( $searchTerms );
				
				// and add it to the current search
				$query .=" AND {$whereString} ";	
			}
				
            if( $categoryId <= 0 )
                $query .= " GROUP BY a.id ";

                
            return $query;
		}
		
		/**
		 * @see getBlogArticles
		 */
		function getNumBlogArticles( $blogid, $date = -1, $amount = -1, $categoryId = -1, $status = 0, $userId = 0, $maxDate = 0, $searchTerms = "" )
		{		
            $postStatus = $status;
		    $prefix = $this->getPrefix();			
			$where = $this->buildWhere( $blogid, $date, $amount, $categoryId, $status, $userId, $maxDate, $searchTerms );	
			$query = "SELECT COUNT(*) AS total FROM {$prefix}articles a, {$prefix}articles_categories c, 
                             {$prefix}article_categories_link l";
			if( $searchTerms != "" )
				$query .= ", {$prefix}articles_text t ";
				
			if( $searchTerms != "" )
				$query .= "WHERE t.article_id = a.id AND $where";
			else
				$query .= " WHERE $where";			
				
			if( $categoryId != -1 )
				$query .= " GROUP BY a.id";
                                                              
            $result = $this->_db->Execute( $query );
            
            if( !$result )
            	return 0;
            	            	
            $number = $result->RowCount();
            
            $result->Close();
            
            return( $number );            
		}

        /**
         * Returns all the articles for a given blog, according to the conditions specified in the call. If
         * this function is too cumbersome to use (I reckon it might be, too many parameters that have been
         * added over time due to new requirements) you may want to have a look at getBlogArticlesByQuery below.
         * It's some kind of straight-through method that allows free-form SQL queries to be passed.
         *
         * @param blogId Identifier of the blog from where we want to fetch the articles
         * @param date date in MySQL TIMESTAMP(14) format
         * @param amount The maximum amount of posts that we would like to be returned.
         * @param categoryId A category identifier. If specified, only the posts of the given category will be returned
         * @param status If specified, only the posts with given status will be returned.
         * @param userId If specified, only the posts that belong to the specified user will be returned
         * @param maxDate a date in MySQL TIMESTAMP(14)
		 * @param searchTerms in case we would like to further refine the filtering, we can also use search features
         * @return Returns an array with all the articles from the given blog
         */
        function getBlogArticles( $blogid, $date = -1, $amount = -1, $categoryId = 0, $status = 0, $userId = 0, 
                                  $maxDate = 0, $searchTerms = "", $page = -1 )
        {
            // build the query
            // the query gets quite complicated to build because we have to take care of plenty
            // of conditions, such as the maximum date, the amount, the category,
            // wether the category has to be shown in the main page or not, etc...
            $postStatus = $status;
		    $prefix = $this->getPrefix();
		    $where = $this->buildWhere( $blogid, $date, $amount, $categoryId, $status, $userId, $maxDate, $searchTerms );
            $query = "SELECT a.id as id, a.id, a.date,
                             a.user_id,a.blog_id,a.status,a.properties,
                             a.num_reads, a.slug, 1 AS relevance FROM {$prefix}articles a, {$prefix}articles_categories c, 
                             {$prefix}article_categories_link l";
			if( $searchTerms != "" )
				$query .= ", {$prefix}articles_text t ";
			$query .= " WHERE ";
			if( $searchTerms != "" )
				$query .= " t.article_id = a.id AND ";
			$query .= " $where";
                      
	
			// if we're doing a search, we should sort by relevance
			if( $searchTerms != "" ) {
				$query .= " ORDER BY relevance";			
			}
			else {
				$query .= " ORDER BY a.date DESC";				
			}
			
            // we don't need limits if we're getting the posts for a given day
            if( ($amount > 0) && ($date == -1) && ($page == -1 ))
                $query .= " LIMIT $amount;"; 
            
            // in case we're using a paged display
            if( $page > 0 ) {
				$start = (($page - 1) * $amount);		        
				$query .= " LIMIT $start, $amount";   
            }

			// execute the query
            $result = $this->Execute( $query );

            if( !$result )
                return Array();
				
			if( $result->RowCount() == 0 )
				return Array();
            
			$ids='';

            while( $row = $result->FetchRow()) {
            	$ids.='"'.$row["id"].'",';
                $article = $this->_fillArticleHeaderInformation( $row );
		        $articles[] =$article;
            }

            $ids = substr($ids, 0, -1);          
            //$articleComments = $this->comments->getPostCommentsByIds( $ids, COMMENT_ORDER_NEWEST_FIRST, COMMENT_STATUS_ALL );
			//$articleTrackbacks = $this->trackbacks->getArticleTrackbacksByIds( $ids );
			$articleCategories = $this->categories->getArticleCategoriesByIds( $ids, $blogid );
			$articleTexts = $this->getArticlesText( $ids );
            
            foreach( $articles as $article ) {
            	$lastArticleId=$article->getId();
            	// These are functions normally called by _fillArticleInformation
				// But now I moved to test getPostCommentsByIds
				$categoryIds = Array();
				
				// fill in the article texts
				$article->setText( $articleTexts[$lastArticleId]['text'] );
				$article->setTopic( $articleTexts[$lastArticleId]['topic'] );
				
				foreach( $articleCategories[$lastArticleId] as $category )
					$categoryIds[] = $category->getId();
					
				$article->setCategoryIds( $categoryIds );
				$article->setCategories( $articleCategories[$lastArticleId] );
				//$article->setNumTrackbacks(sizeof($articleTrackbacks[$lastArticleId]));
				//$article->setTrackbacks($articleTrackbacks[$lastArticleId]);
				//$article->setTotalComments(sizeof($articleComments[$lastArticleId]));
				//$article->setComments($articleComments[$lastArticleId]);
				//$article->setFields( $fields[$lastArticleId] );

				$fullarticles[]=$article;
				$this->cache[$lastArticleId] = $article;       
            }
            
            $result->Close();            
            
            return $fullarticles;
        }

		/**
		 * Takes an article name and returns the id
		 * @param articleName an article "name" (the post 'slug')
		 * @return articleId or 0 if unsuccessful
		 */
        function getArticleIdFromName($articleName){
            $query = "SELECT id FROM ".$this->getPrefix()."articles ".
                     " WHERE slug = '".Db::qstr($articleName)."'";

            $result = $this->Execute($query);

            if($row = $result->FetchRow()){
              $result->Close();            
			  if($row["id"])
				return $row["id"];
			}
            return 0;
        }		


		
		/**
		 * returns the text of a bunch of articles, given their ids
		 *
		 * @param articleIds
		 * @return an array, where the key is the article id and the value is an another associative array with the
		 * text and topics of the articles
		 */
		function getArticlesText( $articleIds )
		{
			$prefix = $this->getPrefix();
			$query = "SELECT article_id,text,topic FROM {$prefix}articles_text WHERE
			          article_id IN (".$articleIds.")";
					  
            $result = $this->Execute( $query );

            // it's impossible that an article has no categories, but
            // we'll bear with it...
            if( !$result )
                return Array();

            // otherwise, fetch them
            while ($row = $result->FetchRow()) {
            	$lastArticleId=$row["article_id"];
                $postTexts[$lastArticleId]=$row;
			}
			
            $result->Close();			
			
			return( $postTexts );
		}

        /**
         * Returns all the articles for a given blog (takes a query string as an argument).
         *
         * @param query A valid SQL query that will be used to generate a list of articles to fetch.
         * @return Returns an Array filled with Article objects or an empty array if none could be found or
         * the query was invalid.
         */
        function getBlogArticlesByQuery( $query )
        {
            $result = $this->Execute( $query );
            if( !$result ) return Array();
            $articles = Array();
            while( $row = $result->FetchRow()) {
                $article = $this->_fillArticleInformation( $row );
				$articles[] = $article;
            }
            
            $result->Close();            
            
            return $articles;
        }

        /**
         * Gets the number of posts per month per year from the database
         *
         * @param blogId The numeric identifier of the blog from which we'd like to calculate this values
         * @return A 2-dimensional associative array where the first index is the year and the second
         * index is the number of the month: result[2003][11] = _posts for november 2003_
         */
        function getNumberPostsPerMonth( $blogId )
        {
            // query to get the earliest post
            // this must be my longest and most complex SQL query ever :)
            // $blogs = new Blogs();
            $blogSettings = $this->blogs->getBlogSettings( $blogId );
            if( $blogSettings->getValue( "show_future_posts_in_calendar" ))
                $numPostsPerMonthQuery = "SELECT COUNT(*) AS 'count',YEAR(date) AS 'year',MONTH(date) AS 'month',DAYOFMONTH(date) AS 'daymonth' FROM ".$this->getPrefix()."articles WHERE status = 1 AND blog_id = ".$blogId." GROUP BY YEAR(date),MONTH(date) ORDER BY YEAR(date) DESC,MONTH(date) DESC;";
            else
                $numPostsPerMonthQuery = "SELECT COUNT(*) AS 'count',YEAR(date) AS 'year',MONTH(date) AS 'month',DAYOFMONTH(date) AS 'daymonth' FROM ".$this->getPrefix()."articles WHERE status = 1 AND blog_id = ".$blogId." AND date <= NOW() GROUP BY YEAR(date),MONTH(date) ORDER BY YEAR(date) DESC,MONTH(date) DESC;";

            $result = $this->Execute( $numPostsPerMonthQuery);
            if( $result == false )
                return false;

            $archives = Array();
            while( $row = $result->FetchRow()) {
                $archives[$row["year"]][$row["month"]] = $row["count"];
            }
            
            $result->Close();            

            return $archives;
        }
		
        /**
         * like the one above but with a few changes, such as always showing posts in the future
         * and returning all the months in the array, even if the total amount was '0'
         * Only used in the "editPosts" screen of the admin interface
         */
        function getNumberPostsPerMonthAdmin( $blogId )
        {
        	// query to get the earliest post
            // this must be my longest and most complex SQL query ever :)
			$numPostsPerMonthQuery = "SELECT COUNT(*) AS 'count', YEAR(date) AS 'year',
			                          MONTH(date) AS 'month', DAYOFMONTH(date) AS 'daymonth' 
			                          FROM ".$this->getPrefix()."articles 
			                          WHERE blog_id = $blogId 
			                          GROUP BY YEAR(date), MONTH(date) 
			                          ORDER BY YEAR(date) DESC,MONTH(date) DESC;";

            $result = $this->Execute( $numPostsPerMonthQuery);
            if( $result == false )
            	return false;
            	
            while( $row = $result->FetchRow()) {
            	$archives[$row["year"]][$row["month"]] = $row["count"];
            }
            
            $result->Close();            

            return $archives;
        }

        /**
         * The same as the one above but for just one month
         *
         * @param blogId The identifier of the blog from which we'd like to calculate this
         * @param year Year
         * @param month Month from which we'd like to calculate this
         * @return An associative array where the index is the day of the month and the value
         * is the number of posts made that day.
         */
        function getNumberPostsPerDay( $blogId, $year = null , $month = null )
        {
            // if month and/or year are empty, get the current ones
            if( $year == null ) {
                $t = new Timestamp();
                $year = $t->getYear();
            }
            if( $month == null ) {
                $t = new Timestamp();
                $month = $t->getMonth();
            }

            // another long sql query :) the id and date fields are there just in case we need to debug
            // but they're not included in the resulting array
            // $blogs = new Blogs();
            $blogSettings = $this->blogs->getBlogSettings( $blogId );
			// consider the time difference
            $timeDifference = $blogSettings->getValue( "time_offset" );
			$SecondsDiff = $timeDifference * 3600;
            // check whether we're supposed to show posts that happen in the future or not
			if( $blogSettings->getValue( "show_future_posts_in_calendar" ))
                $numPostsPerDayQuery = "SELECT COUNT(*) AS 'count', DAYOFMONTH(FROM_UNIXTIME(UNIX_TIMESTAMP(date) + $SecondsDiff)) AS 'day', id AS 'id', date AS 'date' FROM ".$this->getPrefix()."articles WHERE status = 1 AND blog_id = ".$blogId." AND MONTH(FROM_UNIXTIME(UNIX_TIMESTAMP(date) + $SecondsDiff)) = ".$month." AND YEAR(FROM_UNIXTIME(UNIX_TIMESTAMP(date) + $SecondsDiff)) = ".$year." GROUP BY DAYOFMONTH(FROM_UNIXTIME(UNIX_TIMESTAMP(date) + $SecondsDiff));";
            else
                $numPostsPerDayQuery = "SELECT COUNT(*) AS 'count', DAYOFMONTH(FROM_UNIXTIME(UNIX_TIMESTAMP(date) + $SecondsDiff)) AS 'day', id AS 'id', date AS 'date' FROM ".$this->getPrefix()."articles WHERE status = 1 AND blog_id = ".$blogId." AND date <= NOW() AND MONTH(FROM_UNIXTIME(UNIX_TIMESTAMP(date) + $SecondsDiff)) = ".$month." AND YEAR(FROM_UNIXTIME(UNIX_TIMESTAMP(date) + $SecondsDiff)) = ".$year." GROUP BY DAYOFMONTH(FROM_UNIXTIME(UNIX_TIMESTAMP(date) + $SecondsDiff));";

            $result = $this->Execute( $numPostsPerDayQuery );

            if( $result == false )
                return 0;

            $postsPerDay = Array();
            while( $row = $result->FetchRow()) {
                $postsPerDay[$row["day"]] = $row["count"];
            }
            
            $result->Close();            

            return $postsPerDay;
        }

        /**
         * adds records to the table that holds the many-to-many relationship between
         * categories and posts in the blog.
		 *
		 * @param articleId
		 * @param categories
		 * @return True
         */
        function addPostCategoriesLink( $articleId, $categories )
        {
			// nothing to do if the $categories array is not ehem, an array :)
			if( !is_array( $categories ))
				return true;
				
            foreach( $categories as $categoryId ) {
                $query = "INSERT INTO ".$this->getPrefix()."article_categories_link
                          (article_id, category_id) VALUES ($articleId, $categoryId )";
                $this->Execute( $query );
            }

            return true;
        }

        /**
         * removes the relationship between posts and categories from the database. This
         * method should only be used when removing an article!!
         */
        function deletePostCategoriesLink( $articleId )
        {
            $query = "DELETE FROM ".$this->getPrefix()."article_categories_link
                      WHERE article_id = $articleId";

            return $this->Execute( $query );
        }

        /**
         * update the links between a post and its categories
         * (basically, we use brute force here: first remove them and then recreate them again...
         * It takes less time than going through all of them and checking if they exist or not.
         */
        function updatePostCategoriesLink( $articleId, $categories )
        {
            if( !$this->deletePostCategoriesLink( $articleId ))
                return false;

            return $this->addPostCategoriesLink( $articleId, $categories );
        }

        /**
         * Adds a new article to the database
         *
         * @param newArticle An Article object with all the necessary information.
         * @return Returns true if article was added successfully or false otherwise. If successful, it will modify the parmeter
		 * passed by reference and set its database id.
         */
        function addArticle( &$newArticle )
        {
            // first, we build up the query
            $filter = new Textfilter();
            $query = "INSERT INTO ".$this->getPrefix()."articles( user_id,blog_id,status,date,properties, slug )
                      VALUES ( ".$newArticle->getUser().",".
                      $newArticle->getBlog().",'".
                      $newArticle->getStatus()."','".
                      $newArticle->getDate()."','".
                      serialize($newArticle->getProperties())."','".
					  $newArticle->getPostSlug()."');";
            // and then we send it to the db
            //$this->_db->debug=true;
            $result = $this->Execute( $query );

            if( !$result ){
                return false;
            }

            // get id of the post from the database
            $postId = $this->_db->Insert_ID();
			
			// save the post text
			$newArticle->setId( $postId );
			$this->addArticleText( $newArticle );

            // and create the link between the post and its categories?
            $this->addPostCategoriesLink( $postId, $newArticle->getCategoryIds());

            // and save the custom fields
            $this->addArticleCustomFields( $postId, $newArticle->getBlog(), $newArticle->getFields());

            return $postId;
        }
		
		/**
		 * saves the text of an article to the database
		 *
		 * @param newArticle the Article object that we have just saved
		 * @param 
		 * @return true if successful or false otherwise
		 */
		function addArticleText( $newArticle )
		{
			$filter = new Textfilter();
			$prefix = $this->getPrefix();
			$query = "INSERT INTO {$prefix}articles_text
			                      (article_id, topic, text, normalized_text, normalized_topic)
					  VALUES( '".Db::qstr( $newArticle->getId())."', '".
					            Db::qstr($newArticle->getTopic())."','".
                                Db::qstr($newArticle->getText(false))."','".
                                $filter->normalizeText(Db::qstr($newArticle->getText(false)))."', '".
                                $filter->normalizeText(Db::qstr($newArticle->getTopic()))."')";
								
			return( $this->Execute( $query ));
		}
		
		/**
		 * returns the text fields of an article
		 *
		 * @param articleId
		 * @return an array
		 */
		function getArticleText( $articleId )
		{
			$prefix = $this->getPrefix();
			$query = "SELECT text,topic FROM {$prefix}articles_text
			          WHERE article_id = '".Db::qstr($articleId)."'";
					  
			$result = $this->Execute( $query );
			
			if( !$result ) 
				return false;
				
			$row = $result->FetchRow();
			
            $result->Close();
            
            return( $row );			
		}
		
		/**
		 * updates the text of an article
		 *
		 * @param article an Article object
		 * @return true if successful or false otherwise
		 */
		function updateArticleText( $article )
		{
			$filter = new Textfilter();
            $query = "UPDATE ".$this->getPrefix()."articles_text SET 
                        topic = '".Db::qstr($article->getTopic())."'".
                     ", text = '".Db::qstr($article->getText(false))."'".
                     ", normalized_text = '".$filter->normalizeText(Db::qstr($article->getText(false)))."'".
                     ", normalized_topic = '".$filter->normalizeText(Db::qstr($article->getTopic()))."'".
                     " WHERE article_id = ".$article->getId().";";
			
			return($this->Execute( $query ));
		}

        /**
         * Saves the custom fields of an article
         *
         * @param artId
         * @param blogId
         * @param fields
         * @return True if successful or false otherwise
         */
        function addArticleCustomFields( $artId, $blogId, $fields )
        {
            $customFields = new CustomFieldsValues();

            foreach( $fields as $field ) {
                $customFields->addCustomFieldValue( $field->getFieldId(), $field->getValue(), $artId, $blogId );
            }

            return true;
        }

        /**
         * Updates an article in the database
         *
         * @param article The Article object that we'd like to update in the database.
         * @return Returns true if update was successful or false otherwise.
         */
        function updateArticle( $article )
        {
            // we have to build up the query, which will be pretty long...
            $articleDate = Timestamp::getDateWithOffset( $article->getDate(), -($article->getTimeOffset()));
            $filter = new Textfilter();

            $query = "UPDATE ".$this->getPrefix()."articles SET id = ".$article->getId().
                     ", user_id = ".$article->getUser().
                     ", date = '".$articleDate. "'".
                     ", blog_id = ".$article->getBlog().
                     ", status = '".$article->getStatus()."'".
                     ", num_reads = ".$article->getNumReads().
                     ", properties = '".serialize($article->getProperties())."'".
					 ", slug = '".$article->getPostSlug()."'".
                     " WHERE id = ".$article->getId().";";

            $result = $this->Execute( $query );

            // we don't bother doing anything else if the query above failed...
            if( !$result )
                return false;
				
			// update the article text
			$this->updateArticleText( $article );

            if( !$this->updatePostCategoriesLink( $article->getId(), $article->getCategoryIds()))
                return false;

            if( !$this->updateArticleCustomFields( $article->getId(), $article->getBlog(), $article->getFields()))
                return false;

            return true;
        }

        /**
         * updates the custom fields used by an article. It's actually easier to remove them all
         * and readd them again than check one by one if it already exists and if so updating it
         * and if not, add it
         *
         * @param artId
         * @param blogId
         * @param fields
         * @return True if successful or false otherwise
         */
        function updateArticleCustomFields( $artId, $blogId, $fields )
        {
            $customFields = new CustomFieldsValues();

            // first remove the values
            if( !$customFields->removeArticleCustomFields( $artId ))
                return false;

            foreach( $fields as $field ) {
                $customFields->addCustomFieldValue( $field->getFieldId(), $field->getValue(), $artId, $blogId );
            }

            return true;
        }

        /**
         * Updates the number of times a post has been read. This method does not just increase the num_read
         * counter by one but it can set it to whatever we want... Usually the value we pass in '$numReads' will
         * be the old value + 1, but it could be whatever.
         *
         * @param articleId A valid article identifier.
         * @param numReads A value, meaning how many times the post has been read.
         * @return Returns true if successful or false otherwise.
         */
        function updateArticleNumReads( $articleId )
        {
            // we have to build up the query, which will be pretty long...
            $query = "UPDATE ".$this->getPrefix()."articles SET ".
                     " num_reads = num_reads+1 ".
                     ", date = date ".
                     " WHERE id = '".Db::qstr($articleId)."'";

            $result = $this->Execute( $query );

            return $result;
        }
		
		/**
		 * similar as the one above but it takes an article 'name' instead of an article id
		 * @see updateArticleNumReads
		 * @param articleName an article "name" (the post 'slug')
		 * @return true if successful or false otherwise
		 */
        function updateArticleNumReadsByName( $articleName )
        {
            // we have to build up the query, which will be pretty long...
            $query = "UPDATE ".$this->getPrefix()."articles SET ".
                     " num_reads = num_reads+1 ".
                     ", date = date ".
                     " WHERE slug = '".Db::qstr($articleName)."'";

            $result = $this->Execute( $query );

            return $result;
        }		

        /**
         * Removes an article from the database
         *
         * If forever == true, the article is physically removed from the database.
         * Otherwise, the 'status' field is set to 'deleted'
         *
         * Problem is, that MySQL will automatically update the 'date' field because he feels
         * like it... even if we explicitely say date = old_date... grrreat :P
         *
         * Valid article identifier, blog identifier and user identifier are required to remove an
         * article. It was done for security reasons and to make perfectly clear that we are removing
         * an article (so that we wouldn't be deleting the wrong one if there was any bug!)
         *
         * @param artId A valid article identifier
         * @param userid A valid user identifier
         * @param blogId A valid blog identifier
         * @param forever A boolean meaning whether the post should be removed forever or simply its status
         * should be set to 'deleted'
         * @return Returns true if successful or false otherwise.
         */
        function deleteArticle( $artId, $userId, $blogId, $forever = false )
        {
            if( $forever ) {
                $query = "DELETE FROM ".$this->getPrefix()."articles WHERE id = ".$artId." AND user_id = ".$userId." AND blog_id = ".$blogId.";";
				// -- text --
				$this->deleteArticleText( $artId );
                // we also have to remove its comments and trackbacks if the article is being deleted forever
                // -- comments --
                $comments = new ArticleComments();
                $comments->deletePostComments( $artId );
                // -- trackbacks --
                $trackbacks = new Trackbacks();
                $trackbacks->deletePostTrackbacks( $artId );
                // -- post-to-categories mappings --
                $this->deletePostCategoriesLink( $artId );
                // -- custom fields --
                $customFields = new CustomFieldsValues();
                $customFields->removeArticleCustomFields( $artId );
            }
            else {
                $query = "UPDATE ".$this->getPrefix()."articles SET date = date, status = 3 WHERE id = ".$artId." AND user_id = ".$userId." AND blog_id = ".$blogId.";";
            }

            $result = $this->Execute( $query );

            if( !$result )
                return false;

            if( $this->_db->Affected_Rows() == 0 )
                return false;

            return true;
        }
		
		/**
		 * removes the text of an article
		 * 
		 * @param articleId
		 * @private
		 * @return true if successful or false otherwise
		 * @see Articles::deleteArticle
		 */
		function deleteArticleText( $articleId )
		{
			$query = "DELETE FROM ".$this->getPrefix()."articles_text WHERE article_id = '".Db::qstr($articleId)."'";
			
			return( $this->Execute( $query ));
		}

        /**
         * returns true if the user posted this article/post, or false
         * if he or she doesn't own it
         *
         * @param userInfo A UserInfo object with information about the user
         * @param artId A valid article identifier
         * @return Returns true if the article is owned by the user or false otherwise.
         */
        function doesUserOwnArticle( $userinfo, $artid )
        {
            $article = $this->getArticle( $artid );
            $articleOwnerInfo = $article->getUserInfo();

            if( $articleOwnerInfo->getId() == $userinfo->getId())
                return true;
            else
                return false;
        }

        /**
         * Returns all the posts in the database or the 'maxPosts' recent ones that have been
         * published (status=='published')
         *
         * @param maxPosts The amount of post we want.
         * @return Returns an array of Article objects containing the information about the posts.
         */
        function getAllArticles( $maxPosts = 0, $date = 0)
        {
            $query = "SELECT * FROM ".$this->getPrefix()."articles WHERE status = 1";
            if( $date > 0 )
                $query .= " AND date < '$date'";

            $query .= " ORDER BY date DESC";

            if( $maxPosts > 0 )
                $query .= " LIMIT 0,".$maxPosts;

            $result = $this->Execute( $query );

            if( !$result )
                return false;

            $posts = Array();
            while( $row = $result->FetchRow()) {
				$posts[] = $this->_fillArticleInformation( $row );
            }
            
            $result->Close();            

            return $posts;
        }

        /**
         * Removes all the posts from the given blog
         *
         * @param blogId The blog identifier
         */
        function deleteBlogPosts( $blogId )
        {
            $blogArticles = $this->getBlogArticles( $blogId );

            foreach( $blogArticles as $article ) {
                // the deleteArticle method will also take care of removing comments and
                // trackbacks
                $this->deleteArticle( $article->getId(), $article->getUser(), $article->getBlog(), true );
            }

            return true;
        }

        /**
         * removes all posts that have 'deleted' status
         *
         * @return Returns true if all posts were deleted or false otherwise.
         */
        function purgePosts()
        {
            $query = "SELECT * FROM ".$this->getPrefix()."articles WHERE status = 3";

            $result = $this->Execute( $query );
            if( !$result )
                return false;

            while( $row = $result->FetchRow()) {
                $this->deleteArticle( $row["id"], $row["user_id"], $row["blog_id"], true );
            }
            
            $result->Close();            

            return true;
        }

        /**
         * returns all the categories that an article has been assigned to
         */
        function getArticleCategories( $articleId, $blogId = -1 )
        {
			return $this->categories->getArticleCategories( $articleId, $blogId );
        }

        /**
         * returns all the categories that an article has been assigned to
         */
        function getArticleCategoryIds( $articleId )
        {
            $query = "SELECT category_id FROM ".$this->getPrefix()."article_categories_link
                      WHERE article_id = $articleId";

            $result = $this->Execute( $query );

            // it's impossible that an article has no categories, but
            // we'll bear with it...
            if( !$result )
                return Array();

            // otherwise, fetch them
            $categories = Array();
            while( $row = $result->FetchRow()) {
				$categories[] = $row['category_id'];
            }
            
            $result->Close();            

            return $categories;
        }

        /**
         * Does exactly the same as _fillUserInformation, so that it can be reused
         * by the different functions that work on articles from the database. This method is
         * private and shouldn't be used outside this class.
         *
         * @private
         */
        function _fillArticleInformation( $query_result, $includeHiddenFields = true )
        {
			$id = $query_result['id'];
			if( isset($this->cache[$id])) {
				return($this->cache[$id]);
			}

            // this is a little dirty trick or otherwise the old
            // that don't have the 'properties' field will not work
            // as they will appear to have comments disabled
            if( $query_result['properties'] == "" ) {
                $tmpArray = Array( 'comments_enabled' => true );
                $query_result['properties'] = serialize($tmpArray);
            }

            // ---
            // this, i do not like... but I couldn't find a more
            // "elegant" way to arrange it! This makes this method
            // totally dependant on the blog configuration so it basically
            // means an additional query every time we fetch an article
            // (just in case we didn't have enough!)
            // ---

            //
            // if there's a time difference applied to all dates, then we'd better
            // calculate it here!!
            //
            $blogId = $query_result['blog_id'];
            $blogInfo = $this->blogs->getBlogInfo( $blogId );
			$blogSettings = $blogInfo->getSettings();
            $timeDiff = $blogSettings->getValue( 'time_offset' );

            // we can use this auxiliary function to help us...
            $date = Timestamp::getDateWithOffset( $query_result['date'], $timeDiff );

			$articleCategories = $this->getArticleCategories( $query_result['id'], $query_result['blog_id'] );
            $categoryIds = Array();
			foreach( $articleCategories as $category )
				array_push( $categoryIds, $category->getId());
				
			// get the article text
			$postText = $this->getArticleText( $query_result['id'] );

            $article = new Article( $postText['topic'],
                                    $postText['text'],
                                    $categoryIds,
                                    $query_result['user_id'],
                                    $query_result['blog_id'],
                                    $query_result['status'],
                                    $query_result['num_reads'],
                                    unserialize($query_result['properties']),
									$query_result['slug'],
                                    $query_result['id'] );
									
            // and fill in all the fields with the information we just got from the db
            $article->setDate( $date );
            $article->setTimeOffset( $timeDiff );
            // get information about the categories of the article
            $article->setCategories( $articleCategories );
			$article->setBlogInfo( $blogInfo );
			$article->setUserInfo( $this->users->getUserInfoFromId( $query_result['user_id'] ));			

			// fill in the cache with the result we just loaded
			$this->cache[$query_result['id']] = $article;

            return $article;
        }

		/**
		 * @private
		 */
		function _fillArticleHeaderInformation( $query_result, $includeHiddenFields = true )
        {
			$id = $query_result['id'];
			if( isset($this->cache[$id])) {
				return($this->cache[$id]);
			}

            // this is a little dirty trick or otherwise the old
            // that don't have the 'properties' field will not work
            // as they will appear to have comments disabled
            if( $query_result['properties'] == "" ) {
                $tmpArray = Array( 'comments_enabled' => true );
                $query_result['properties'] = serialize($tmpArray);
            }

            // ---
            // this, i do not like... but I couldn't find a more
            // "elegant" way to arrange it! This makes this method
            // totally dependant on the blog configuration so it basically
            // means an additional query every time we fetch an article
            // (just in case we didn't have enough!)
            // ---

            //
            // if there's a time difference applied to all dates, then we'd better
            // calculate it here!!
            //
			if( $this->_blogInfo == null ) {
				$blogId = $query_result['blog_id'];
				$this->_blogInfo = $this->blogs->getBlogInfo( $blogId );
				$this->_blogSettings = $this->_blogInfo->getSettings();
				$this->_timeDiff = $this->_blogSettings->getValue( 'time_offset' );
			}
			
            // we can use this auxiliary function to help us...
            $date = Timestamp::getDateWithOffset( $query_result['date'], $this->_timeDiff );

            // postText does not exist here.. maybe a copy/paste problem? 
            // anyway.. it works without postText, so i'll just set this to
            // null. oscar, pls double check.. original code:
            // $article = new Article( $postText['topic'],
            //                         $postText['text'],
            //                         NULL,
            $article = new Article( NULL,
                                    NULL,
                                    NULL,
                                    $query_result['user_id'],
                                    $query_result['blog_id'],
                                    $query_result['status'],
                                    $query_result['num_reads'],
                                    unserialize($query_result['properties']),
									$query_result['slug'],
                                    $query_result['id'] );
									
            // and fill in all the fields with the information we just got from the db
            $article->setDate( $date );
            $article->setTimeOffset( $this->_timeDiff );
			$article->setBlogInfo( $this->_blogInfo );
			$article->setUserInfo( $this->users->getUserInfoFromId( $query_result['user_id'] ));			
            
            return $article;
        }		

        /**
         * sets a time difference that will be added to each
         * date and time
         *
         * @param timeDiff The time difference. IT should be between +12 and -12
         * @return Always returns true.
         */
        function setTimeDiff( $timeDiff )
        {
            $this->_timeDiff = $timeDiff;

            return true;
        }
    }
?>