<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/mylinkscategory.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/mylinks.class.php" );
	
	define( "MYLINKS_CATEGORIES_NO_ORDER", 0 );
	define( "MYLINKS_CATEGORIES_ALPHABETICAL_ORDER", 1 );
	define( "MYLINKS_CATEGORIES_REVERSE_ALPHABETICAL_ORDER", 2 );
	define( "MYLINKS_CATEGORIES_MOST_LINKS_FIRST", 3 );
	define( "MYLINKS_CATEGORIES_LESS_LINKS_FIRST", 4 );
	define( "MYLINKS_CATEGORIES_LAST_UPDATED_FIRST", 5 );
	define( "MYLINKS_CATEGORIES_LAST_UPDATED_LAST", 6 );

    /**
	 * \ingroup DAO
	 *
     * Model for retrieving MyLinksCategory objects from the database
     */
	class MyLinksCategories extends Model 
	{

        /**
         * Returns the categories for my_links for a given blog
         *
         * @param blogId Identifier of the blog.
		 * @param order
		 * @param page
		 * @param itemsPerPage
         */
        function getMyLinksCategories( $blogId, $order = MYLINKS_CATEGORIES_NO_ORDER, $page = -1, $itemsPerPage = DEFAULT_ITEMS_PER_PAGE )
        {
			$prefix = $this->getPrefix();			
			// basic query
			$query = "SELECT c.id AS id, c.name AS name, c.blog_id AS blog_id, 
							c.last_modification AS last_modification, c.properties AS properties, 
							IF(l.id IS NULL, 0, COUNT(*)) AS num_links
						FROM {$prefix}mylinks_categories c LEFT JOIN {$prefix}mylinks l
						ON l.blog_id = c.blog_id AND l.category_id = c.id 
						WHERE c.blog_id= $blogId
						GROUP BY c.id";
			
			if( $order == MYLINKS_CATEGORIES_ALPHABETICAL_ORDER ) {
				$query .= " ORDER BY c.name ASC";
			}
			elseif( $order == MYLINKS_CATEGORIES_REVERSE_ALPHABETICAL_ORDER ) {
				$query .= " ORDER BY c.name DESC";
			}
			elseif( $order == MYLINKS_CATEGORIES_MOST_LINKS_FIRST ) {
				$query .= " ORDER BY num_links DESC";
			}
			elseif( $order == MYLINKS_CATEGORIES_LESS_LINKS_FIRST ) {
				$query .= " ORDER BY num_links ASC";
			}
			elseif( $order == MYLINKS_CATEGORIES_LAST_UPDATED_FIRST ) {
				$query .= " ORDER BY c.last_modification ASC";			
			}
			elseif( $order == MYLINKS_CATEGORIES_LAST_UPDATED_LAST ) {
				$query .= " ORDER BY c.last_modification ASC";			
			}			
			
			// execute the query
            $result = $this->Execute( $query, $page, $itemsPerPage );

            if( !$result )
            	return Array();
				
			if( $result->RowCount() == 0 )
				return Array();
				
            $myLinks = new MyLinks();
            $blogLinks = $myLinks->getLinks( $blogId );

            $myLinksCategories = Array();
            while( $row = $result->fetchRow($result)) {
				// configure the data for the category
			   	$myLinksCategory = new MyLinksCategory( $row["name"], $row["blog_id"], $row["num_links"],
													        unserialize($row["properties"]), $row["id"] );
                $myLinksCategories[$myLinksCategory->getId()] = $myLinksCategory;
            }
			
			// now assign the links to the correct category
			foreach( $blogLinks as $blogLink ) {
				if( $myLinksCategories[$blogLink->getCategoryId()] )
					$myLinksCategories[$blogLink->getCategoryId()]->addLink( $blogLink );
			}

            return $myLinksCategories;
        }

        /**
         * Adds a category to the database of link categories.
         *
         * @param linkCategory A MyLinkCategory object with the information we need.
         * @return Returns true if successful or false otherwise.
         */
        function addMyLinksCategory( $myLinksCategory )
        {
        	$query = "INSERT INTO ".$this->getPrefix()."mylinks_categories (name, blog_id, properties) 
			          VALUES ('".
			          Db::qstr($myLinksCategory->getName())."', ".
					  $myLinksCategory->getBlogId().", '".
					  Db::qstr(serialize($myLinksCategory->getProperties()))."');";

            $result = $this->Execute( $query );

            return $result;
        }

        /**
         * Removes a link category from the database.
         *
         * @param categoryId Category identifier.
         * @param blogId Blog identifier.
         * @return True if successful or false otherwise.
         */
        function deleteMyLinksCategory( $categoryId, $blogId )
        {
        	$query = "DELETE FROM ".$this->getPrefix()."mylinks_categories 
			          WHERE id = '".Db::qstr($categoryId)."' 
					  AND blog_id = '".Db::qstr($blogId)."';";

            $result = $this->Execute( $query );

            return $result;
        }

        /**
         * Removes all the links categories from the given blog
         *
         * @param blogId The blog identifier
         */
        function deleteBlogMyLinksCategories( $blogId )
        {
        	$query = "DELETE FROM ".$this->getPrefix()."mylinks_categories WHERE blog_id = $blogId";

			$result = $this->Execute( $query );

            return $result;
        }        

        /**
         * Retrieves a single link category from the database
         *
         * @param categoryId Category identifier.
         * @param blogId Blog identifier.
         * @return The MyLinksCategory object containing the information.
         */
        function getMyLinksCategory( $categoryId, $blogId = 0 )
        {
			$prefix = $this->getPrefix();
//			$query = "SELECT c.id AS id, c.name AS name, c.blog_id AS blog_id, 
//							 c.last_modification AS last_modification, c.properties AS properties, 
//							 COUNT(*) AS num_links 
//					  FROM {$prefix}mylinks l, {$prefix}mylinks_categories c 
//					  WHERE c.id = ".Db::qstr($categoryId)." AND l.category_id = c.id ";
//
//          if( $blogId > 0 )
//          	$query .= " AND c.blog_id = ".Db::qstr($blogId)." AND l.blog_id = c.blog_id";

            $query = "SELECT c.id AS id, c.name AS name, c.blog_id AS blog_id, 
                             c.last_modification AS last_modification, c.properties AS properties, 
                             IF(l.id IS NULL, 0, COUNT(*)) AS num_links 
                      FROM {$prefix}mylinks_categories c LEFT JOIN {$prefix}mylinks l ON l.blog_id = c.blog_id AND l.category_id = c.id
                      WHERE c.id = ".Db::qstr($categoryId)." ";
            
			$query .= " GROUP BY c.id;";

            $result = $this->Execute( $query );

            if( !$result || $result->RecordCount() == 0 )
            	return false;

            $row = $result->FetchRow();
            $myLinksCategory = $this->_fillMyLinksCategoryFromRow( $row );

            return $myLinksCategory;
        }

        /**
         * Updates a category.
         *
         * @param category The MyLinkCategory object we're trying to update.
         * @return True if successful or false otherwise.
         */
        function updateMyLinksCategory( $category )
        {
        	$query = "UPDATE ".$this->getPrefix()."mylinks_categories SET
                      name = '".Db::qstr($category->getName())."',
					  properties = '".Db::qstr(serialize($category->getProperties()))."'
                      WHERE id = ".$category->getId()." AND blog_id = ".$category->getBlogId().";";

            $result = $this->Execute( $query );

            return $result;
        }

		/**
		 * returns how many link categories a blog has
		 *
		 * @param blogId
		 * @return an integer
		 */		
		function getNumMyLinksCategories( $blogId )
		{
			$prefix = $this->getPrefix();
			$table = "{$prefix}mylinks_categories";
			$cond = "blog_id = '".Db::qstr($blogId)."';";
			
			return( $this->getNumItems( $table, $cond ));		
		}

        /**
         * Returns how many links are under the given category.
         *
         * @param categoryId the category identifier.
         * @return The number of links under this category or 0 if none.
         */
        function getNumMyLinksCategory( $categoryId )
        {
			$prefix = $this->getPrefix();
			$table = "{$prefix}mylinks";
			$cond = "category_id = '".Db::qstr($categoryId)."';";
			
			return( $this->getNumItems( $table, $cond ));
        }
		
		/**
		 * marks a category as updated now, changing the last_modfication field to
		 * NOW()
		 *
		 * @param categoryId the id of the category we're trying to update
		 * @return true if successful or false otherwise
		 */
		function updateCategoryModificationDate( $categoryId )
		{
			$query = "UPDATE ".$this->getPrefix()."mylinks_categories
					  SET last_modification = NOW()
					  WHERE id = '".Db::qstr( $categoryId )."'";
			$this->_db->debug=false;
			$result = $this->_db->Execute( $query );
			
			return $result;
		}

        /**
         * update last modification field
         */
		function updateLastModification( $categoryId , $lastModification)
		{
			$query = "UPDATE ".$this->getPrefix()."mylinks_categories
					  SET last_modification = '".Db::qstr( $lastModification )."' 
					  WHERE id = '".Db::qstr( $categoryId )."'";
			$this->_db->debug=false;
			$result = $this->_db->Execute( $query );
			
			return $result;
		}

		/**
		 * @private
		 */
        function _fillMyLinksCategoryFromRow( $row )
        {
        	$myLinksCategory = new MyLinksCategory( $row["name"],
                                                    $row["blog_id"],
                                                    $row["num_links"],
													unserialize($row["properties"]),
                                                    $row["id"] );

			$myLinksCategory->setLastModification( new Timestamp( $row["last_modification"] ));

            return $myLinksCategory;
        }
    }
?>
