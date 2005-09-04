<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecategory.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
	
	/* 	
	 * different modes in which the listing of categories can be obtained
	 */
	define( "BLOG_CATEGORIES_DEFAULT_ORDER", 0 );
	define( "BLOG_CATEGORIES_MOST_RECENT_UPDATED_FIRST", 1 );
	define( "BLOG_CATEGORIES_OLDEST_FIRST", 2 );
	define( "BLOG_CATEGORIES_NEWEST_FIRST", 3 );
	define( "BLOG_CATEGORIES_ALPHABETICAL_ORDER", 4 );
	define( "BLOG_CATEGORIES_REVERSE_ALPHABETICAL_ORDER", 5 );
	define( "BLOG_CATEGORIES_MOST_ARTICLES_FIRST", 6 );

	/**
	 * \ingroup DAO
	 *	
     * Implementation of the database logic for dealing with article categories. This class offers all the most
	 * common methods: getCategory, addCategory, deleteCategory, etc. 
     */
	class ArticleCategories extends Model
    {

    	/**
         * Constructor, does nothing special.
         */
    	function ArticleCategories()
        {
        	$this->Model();

            $this->totalCategories = Array();
            $this->cache = Array();
        }

        /**
         * Returns an article category from the database, given its id
         *
         * @param categoryId Identifier of the category
         * @param blogId The blog identifier to which the category belongs
         * @return an ArticleCategory object representing a category from the database
         */
        function getCategory( $categoryId, $blogId = -1 )
        {
        	// check if we already loaded that category
            if( isset($this->cache[$categoryId])) {
            	return $this->cache[$categoryId];
            }

            // if not, do the normal process...
            $query = "SELECT * FROM ".$this->getPrefix()."articles_categories WHERE id = ".Db::qstr($categoryId);
            if( $blogId != -1 )
            	$query .= " AND blog_id = ".$blogId;
            $query .= ";";

            return $this->_getCategoryFromQuery( $query );
        }
        
        /**
         * returns a category based on its name
         *
         * @param categoryName
         * @param blogId
         * @return An ArticleCategory object
         */
        function getCategoryByName( $categoryName, $blogId = -1 )
        {
            // if not, do the normal process...
            $query = "SELECT * FROM ".$this->getPrefix()."articles_categories WHERE 
                      mangled_name = '".Db::qstr($categoryName)."'";
            if( $blogId != -1 )
            	$query .= " AND blog_id = ".$blogId;
            $query .= ";";
        
            return $this->_getCategoryFromQuery( $query );
        }
        
        /**
         * @private
         */
        function _getCategoryFromQuery( $query )
        {
            $result = $this->Execute( $query );

            if( !$result )
            	return false;

            if( $result->RowCount() == 0 )
            	return false;

            $row = $result->FetchRow($result);
            if( !array_key_exists('num_articles', $row) )
                $row['num_articles'] = 0;
            $category = $this->_fillCategoryInformation( $row );
            $categoryId = $category->getId();

            // ...and store the result
            $this->cache[$categoryId] = $category;
            
            $result->Close();            

            return $category;        
        }

        /**
         * Returns all the categories in the database
         *
		 * @param onlyInMainPage Whether we should return only the categories that are meant to appear in the 
		 * main page. Disabled by default.
         * @return An array containing <b>all</b> the categories from the database.
         */
        function getAllCategories( $onlyInMainPage = false )
        {
			$query = "SELECT * FROM ".$this->getPrefix()."articles_categories ";
			if( $onlyInMainPage ) 
				$query .= " WHERE in_main_page = 1 ";
			$query .= " ORDER BY id ASC;";

			$result = $this->Execute( $query );
			
			if( !$result )
				return Array();

			$categories = array();
			while( $row = $result->FetchRow( $result )) {
            	$category = $this->_fillCategoryInformation( $row );
                $categories[$category->getId()] = $category;
            }
            
            $result->Close();            

			return $categories;
        }

        /**
         * Returns the categories that belong to a given blog
         *
         * @param blogId The identifer of the blog from which we want to fetch the
         * categories.
         * @param onlyInMainPage Returns only the categories that have been configured
         * to be shown in the main page (attribute in_main_page is '1') By default
         * it is set to 'false', so that we always return all the categories of the given
         * blog.
		 * @param In which order the list of categories should be returned. It can be any of the following
		 * options:
		 * <ul>
		 * <li>BLOG_CATEGORIES_DEFAULT_ORDER</li>
		 * <li>BLOG_CATEGORIES_MOST_RECENT_UPDATED_FIRST</li>
		 * <li>BLOG_CATEGORIES_OLDEST_FIRST</li>
		 * <li>BLOG_CATEGORIES_NEWEST_FIRST</li>
		 * <li>BLOG_CATEGORIES_ALPHABETICAL_ORDER</li>
		 * <li>BLOG_CATEGORIES_REVERSE_ALPHABETICAL_ORDER</li>
		 * <li>BLOG_CATEGORIES_MOST_ARTICLES_FIRST</li>
		 *</ul>
		 * The default value is BLOG_CATEGORIES_DEFAULT_ORDER
		 * @param page
		 * @param itemsPerPage
         * @return An array containing all the categories from a given blog.
         */
        function getBlogCategories( $blogId, $onlyInMainPage = false, $order = BLOG_CATEGORIES_DEFAULT_ORDER, $page = -1, $itemsPerPage = 15 )
        {
			// this part of the query is the same in all the cases
			$prefix = $this->getPrefix();		
			$query = "SELECT c.id AS id, c.name AS name, c.url AS url, c.blog_id AS blog_id, 
				          c.last_modification AS last_modification, c.in_main_page AS in_main_page, 
						  c.parent_id AS parent_id, c.description AS description, c.properties AS properties, 
						  c.mangled_name AS mangled_name, IF(a.id IS NULL, 0, COUNT(*)) AS num_articles, a.date AS last_update 
						  FROM {$prefix}articles_categories c LEFT JOIN {$prefix}article_categories_link l
						  ON c.id=l.category_id LEFT JOIN {$prefix}articles a ON a.id = l.article_id 
						  WHERE c.blog_id = '".Db::qstr($blogId)."'";
						  
			if( $onlyInMainPage )
				$query .= " AND c.in_main_page = 1 ";
				
			$query .= " GROUP BY c.id ";
			
			// and now we simply have to change select the correct way of ordering things
			if( $order == BLOG_CATEGORIES_OLDEST_FIRST ) {
				$query .= " ORDER BY c.last_modification ASC;";
			}
			elseif( $order == BLOG_CATEGORIES_NEWEST_FIRST ) {
				$query .= " ORDER BY c.last_modification DESC;";
			}
			elseif( $order == BLOG_CATEGORIES_ALPHABETICAL_ORDER ) {
				$query .= " ORDER BY c.name ASC";
			}
			elseif( $order == BLOG_CATEGORIES_REVERSE_ALPHABETICAL_ORDER ) {
				$query .= " ORDER BY c.name DESC";
			}
			elseif( $order == BLOG_CATEGORIES_MOST_ARTICLES_FIRST ) {
				$query .= " ORDER BY num_articles DESC, name ASC;";
			}
			elseif( $order == BLOG_CATEGORIES_MOST_RECENT_UPDATED_FIRST ) {
				$query .= "ORDER BY last_update DESC, name ASC;";
			}			
			
			return $this->_getBlogCategoriesFromQuery( $query, $page, $itemsPerPage );
		}
		
		/**
		 * @see getBlogCategories
		 */
        function getBlogCategoriesAdmin( $blogId, $onlyInMainPage = false, $order = BLOG_CATEGORIES_DEFAULT_ORDER, $page = -1, $itemsPerPage = 15 )
        {
			// this part of the query is the same in all the cases
			$prefix = $this->getPrefix();			
			$query = "SELECT c.id AS id, c.name AS name, c.url AS url, c.blog_id AS blog_id, 
				          c.last_modification AS last_modification, c.in_main_page AS in_main_page, 
						  c.parent_id AS parent_id, c.properties AS properties, c.description AS description,
						  c.mangled_name AS mangled_name, IF(a.id IS NULL, 0, COUNT(*)) AS num_articles, a.date AS last_update 
						  FROM {$prefix}articles_categories c LEFT JOIN {$prefix}article_categories_link l
						  ON c.id=l.category_id LEFT JOIN {$prefix}articles a ON a.id = l.article_id 
						  WHERE c.blog_id = $blogId";
						  
			if( $onlyInMainPage )
				$query .= " AND c.in_main_page = 1 ";
				
			$query .= " GROUP BY c.id ";
			
			// and now we simply have to change select the correct way of ordering things
			if( $order == BLOG_CATEGORIES_OLDEST_FIRST ) {
				$query .= " ORDER BY c.last_modification ASC";
			}
			elseif( $order == BLOG_CATEGORIES_NEWEST_FIRST ) {
				$query .= " ORDER BY c.last_modification DESC";
			}
			elseif( $order == BLOG_CATEGORIES_ALPHABETICAL_ORDER ) {
				$query .= " ORDER BY c.name ASC";
			}
			elseif( $order == BLOG_CATEGORIES_REVERSE_ALPHABETICAL_ORDER ) {
				$query .= " ORDER BY c.name DESC";
			}
			elseif( $order == BLOG_CATEGORIES_MOST_ARTICLES_FIRST ) {
				$query .= " ORDER BY num_articles DESC, name ASC";
			}
			elseif( $order == BLOG_CATEGORIES_MOST_RECENT_UPDATED_FIRST ) {
				$query .= "ORDER BY last_update DESC, name ASC";
			}
			
			return $this->_getBlogCategoriesFromQuery( $query, $page, $itemsPerPage );
        }
		
		/**
		 * @private
		 */
		function _getBlogCategoriesFromQuery( $query, $page = -1, $itemsPerPage = DEFAULT_ITEMS_PER_PAGE )
		{
            $result = $this->Execute( $query, $page, $itemsPerPage );

            if( !$result )
            	return false;

            $categories = Array();
            while( $row = $result->FetchRow( $result )) {
            	$category = $this->_fillCategoryInformation( $row );
                $categories[$category->getId()] = $category;

                // we can cache this information for later...
                $this->cache[$category->getId()] = $category;
            }
            
            $result->Close();            

            return $categories;		
		}
		

        /**
         * Private function that takes an associative array from the database and returns
         * an object of the type ArticleCategory properly filled
         *
         * @param query_result Resulting resource of executing a query
         * @return Returns an ArticleCategory object
		 * @private
         */
        function _fillCategoryInformation( $query_result )
        {
        	$category = new ArticleCategory( $query_result["name"],
                                             $query_result["url"],
                                             $query_result["blog_id"],
                                             $query_result["in_main_page"],
											 $query_result["description"],
                                             $query_result["num_articles"],
											 unserialize($query_result["properties"]),
                                             $query_result["id"]);											 

            return $category;
        }

        /**
         * Adds an article category to the database.
         *
         * @param category A Category object with all the information needed to add it
         * to the database
         * @return False if error or the article category identifier if successful.
		 * @see Category
         */
        function addArticleCategory( $articleCategory )
        {
        	$query = "INSERT INTO ".$this->getPrefix()."articles_categories
                      (name,url,blog_id,in_main_page,properties,mangled_name,description) VALUES 
					  ('".Db::qstr($articleCategory->getName()).
                      "','".Db::qstr($articleCategory->getURL()).
                      "','".Db::qstr($articleCategory->getBlogId()).
                      "','".Db::qstr($articleCategory->isInMainPage()).
					  "','".Db::qstr(serialize($articleCategory->getProperties())).
					  "', '".TextFilter::urlize($articleCategory->getName()).
					  "', '".Db::qstr($articleCategory->getDescription()).
					  "');";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;
				
			// return the id of the last row inserted
			return $this->_db->Insert_ID();
        }

        /**
         * Returns how many articles have been classified under this category
         *
         * @param categoryId The identifier of that category.
		 * @param status The status that posts of that category should have. If none specified,
		 * POST_STATUS_PUBLISHED will be used.
         * @return The number of articles, or 0 if none.
         */
        function getNumArticlesCategory( $categoryId, $status = POST_STATUS_PUBLISHED )
        {
            $prefix = $this->getPrefix();
       		$query1 = "SELECT COUNT(*) AS 'count' FROM
       		           {$prefix}article_categories_link AS l, {$prefix}articles AS a
       		           WHERE l.article_id = a.id AND l.category_id = '".Db::qstr($categoryId)."'";
			if( $status != POST_STATUS_ALL )
				$query1 .= " AND a.status = '".Db::qstr($status)."'";

			$result = $this->Execute( $query1 );
			
			if( !$result )
				return 0;
				
			$row = $result->FetchRow();
			$total = $row["count"];
			if( $total == "" ) $total = 0;
			else $result->Close();			
			
			return( $total );
        }

        /**
         * Removes a category from the database. We should check <b>beforehand</b> that such category
         * does not have any article classified under it, since then we would have problems
         * with the database.
         *
         * @param $categoryId The identifier of the category
         * @param $blogId The blog identifier to which the article belongs
         * @return True if success or false otherwise.
         */
        function deleteCategory( $categoryId, $blogId )
        {
        	$query = "DELETE FROM ".$this->getPrefix()."articles_categories
			          WHERE id = ".Db::qstr($categoryId)." AND blog_id = ".$blogId;

            $result = $this->Execute( $query );

            if( !$result )
            	return false;
            else
            	return true;
        }

        /**
         * Removes all the posts from the given blog
         *
         * @param blogId The blog identifier
         */
        function deleteBlogCategories( $blogId )
        {
            // first delete all article category links
            $query = "DELETE FROM ".$this->getPrefix()."article_categories_link 
                      WHERE category_id IN 
                          (SELECT id FROM ".$this->getPrefix()."articles_categories 
                              WHERE blog_id = $blogId)";
            $this->Execute( $query );

        	$query = "DELETE FROM ".$this->getPrefix()."articles_categories 
			          WHERE blog_id = $blogId";

            $result = $this->Execute( $query );

            return $result;
        }

        /**
         * Updates a category.
         *
         * @param category An ArticleCategory object with the information about the category we're
         * going to update.
         * @return True if successful or false otherwise.
         */
        function updateCategory( $category )
        {
        	$query = "UPDATE ".$this->getPrefix()."articles_categories
                      SET name = '".Db::qstr($category->getName())."',
                      url = '".Db::qstr($category->getUrl())."',
                      in_main_page = ".$category->isInMainPage().",
					  properties = '".Db::qstr(serialize($category->getProperties()))."',
					  mangled_name = '".Db::qstr(TextFilter::urlize($category->getName()))."',
					  description = '".Db::qstr($category->getDescription())."' 
                      WHERE id = ".$category->getId().";";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;
            else
            	return true;
        }
		
		
		/**
         * returns all the categories that an article has been assigned to an article
         *
         * @param artcleId The artcle id
         * @param blogId The blog id. This is an optiona parameter however, it is recommended to
         * include the blog id parameter in order to speed up the SQL query!
         * @return An aray of ArticleCategories object that were assigned to this article.         
         */
        function getArticleCategories( $articleId, $blogId = -1 )
        {
			$prefix = $this->getPrefix();
			$query = "SELECT c.id AS id, c.name AS name, c.url AS url, c.blog_id AS blog_id, 
				          c.last_modification AS last_modification, c.in_main_page AS in_main_page, 
						  c.parent_id AS parent_id, c.properties AS properties, c.description AS description,
						  c.mangled_name AS mangled_name, IF(a.id IS NULL, 0, COUNT(*)) AS num_articles, a.date AS last_update 
						  FROM {$prefix}articles_categories c LEFT JOIN {$prefix}article_categories_link l
						  ON c.id=l.category_id LEFT JOIN {$prefix}articles a ON a.id = l.article_id 
						  WHERE a.id = $articleId ";
			if( $blogId > -1 ) {
				$query .= " AND a.blog_id = '".Db::qstr($blogId)."' AND c.blog_id = '".Db::qstr($blogId)."'";	
			}
						  
			$query .= " GROUP BY c.id";
            
            $result = $this->Execute( $query );

            // it's impossible that an article has no categories, but
            // we'll bear with it...
            if( !$result )
                return Array();

            // otherwise, fetch them
            $categories = Array();
            while( $row = $result->FetchRow()) {
				$category = $this->_fillCategoryInformation( $row );            	
                array_push( $categories, $category );
            }
            
            $result->Close();            

            return $categories;
        }
        
		/**
		 * returns all the article categories given an array of category ids
		 *
		 * @param articleIds an array of category ids
		 * @param blogId The blog id to which these article categories belong. It is recommeded to pass this
		 * parameter as it will greatly speed up the query.
		 * @return an array of ArticleCategory objects
		 */
        function getArticleCategoriesByIds( $articleIds, $blogId = -1 )
        {
        	
			$prefix = $this->getPrefix();
			$query = "SELECT a.id as article_id, c.id AS id, c.name AS name, c.url AS url, c.blog_id AS blog_id, 
				          c.last_modification AS last_modification, c.in_main_page AS in_main_page, 
						  c.parent_id AS parent_id, c.properties AS properties, c.description AS description,
						  c.mangled_name AS mangled_name, IF(a.id IS NULL, 0, COUNT(*)) AS num_articles, a.date AS last_update 
						  FROM {$prefix}articles_categories c LEFT JOIN {$prefix}article_categories_link l
						  ON c.id=l.category_id LEFT JOIN {$prefix}articles a ON a.id = l.article_id 
						  WHERE a.id IN (".$articleIds.") ";
			if( $blogId > -1 ) {
				$query .= " AND a.blog_id = '".Db::qstr( $blogId )."' AND c.blog_id = '".Db::qstr( $blogId )."'";	
			}			
						    
			$query .= " GROUP BY c.id, a.id";
			            
            $result = $this->Execute( $query );

            // it's impossible that an article has no categories, but
            // we'll bear with it...
            if( !$result )
                return Array();

            // otherwise, fetch them
            while ($row = $result->FetchRow()) {
            	$lastArticleId=$row["article_id"];
                $category = $this->_fillCategoryInformation( $row );            	
                $categories[$lastArticleId][]=$category;
			}

            $result->Close();

            return $categories;
        }
		
		/**
		 * returns how many categories a blog has
		 *
		 * @param blogId
		 * @param includeHidden
		 * @return an integer
		 */
		function getBlogNumCategories( $blogId, $includeHidden = false )
		{
			// table name
			$prefix = $this->getPrefix();
			$table = "{$prefix}articles_categories";

			// conditions
			$cond = "blog_id = '".Db::qstr($blogId)."'";
			if( !$includeHidden )
				$cond .=  " AND in_main_page = 1";
				
			// return the total number
			$total = $this->getNumItems( $table, $cond );

			return( $total );
		}
    }
?>
