<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/mylink.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/mylinkscategories.class.php" );

    /**
	 * \ingroup DAO
	 *
     * Model for the myLinks feature
     */
    class MyLinks extends Model 
	{

        /**
		 * Retrieves the links of the given blog.
         *
         * @param blogId Identifier of the blog
         * @param categoryId Category of the links
		 * @param page
		 * @param itemsPerPage
		 */
		function getLinks( $blogId, $categoryId = 0, $page = -1, $itemsPerPage = 15 )
		{
			// check if we're using any paging
	        if( $page > -1 ) {
				$start = (($page - 1) * $itemsPerPage);
				$limits = " LIMIT $start, $itemsPerPage";
			}
	    	else
	    		$limits = "";
		
			$query = "SELECT * FROM ".$this->getPrefix()."mylinks WHERE blog_id = '".Db::qstr($blogId)."'";
            if( $categoryId != 0 )
            	$query .= " AND category_id = '".Db::qstr($categoryId)."'";
            $query .= " ORDER BY id ASC $limits;";
			
			$result = $this->Execute( $query );

			if( !$result )
				return false;

			$blogLinks = Array();

			while( $row = $result->FetchRow()) {
				$blogLink = $this->_fillMyLinkInformation( $row );
                array_push( $blogLinks, $blogLink );
			}

			return $blogLinks;
		}
		
		/**
		 * returns how many links a blog has
		 *
		 * @param blogId
		 * @param categoryId
		 * @return an integer
		 */
		function getNumLinks( $blogId, $categoryId = 0 )
		{
			$prefix = $this->getPrefix();
			$table = "{$prefix}mylinks";
			$cond = "blog_id = '".Db::qstr($blogId)."'";
			if( $categoryId > 0 )
				$cond .=  " AND category_id = '".Db::qstr($categoryId)."'";
				
			return( $this->getNumItems( $table, $cond ));
		}		

        /**
         * Adds a link to the database
         *
         * @param myLink a MyLink object
         * @param blogId The blog id
         * @return True if successful or false otherwise.
         */
        function addMyLink( $myLink, $blogId )
        {
        	$query = "INSERT INTO ".$this->getPrefix()."mylinks (name,url,description,category_id,blog_id,properties,rss_feed) 
			          VALUES ('".Db::qstr($myLink->getName())."','".
					  Db::qstr($myLink->getUrl())."','".
					  Db::qstr($myLink->getDescription())."',".
					  $myLink->getCategoryId().",".
					  $blogId.",'".
					  Db::qstr(serialize($myLink->getProperties()))."','".
					  Db::qstr($myLink->getRssFeed())."');";

            $result = $this->Execute( $query );
			
			if( $result ) {
				// mark the corresponding link categories as modified now
				$linkCategories = new MyLinksCategories();
				$linkCategories->updateCategoryModificationDate( $myLink->getCategoryId());
			}

            return $result;
        }

        /**
         * Removes a MyLink object from the database.
         *
         * @param linkId The link identifier.
         * @param blogId The blog identifier.
         * @return True if successful or false otherwise.
         */
        function deleteMyLink( $linkId, $blogId )
        {
        	$query = "DELETE FROM ".$this->getPrefix()."mylinks WHERE id = '".Db::qstr($linkId)."' AND blog_id = ".$blogId.";";

            $result = $this->Execute( $query );

			/*if( $result ) {
				// mark the corresponding link categories as modified now
				$linkCategories = new MyLinksCategories();
				$linkCategories->updateCategoryModificationDate( $myLink->getCategoryId());
			}*/

            return $result;
        }

        /**
         * Removes all the posts from the given blog
         *
         * @param blogId The blog identifier
         */
        function deleteBlogMyLinks( $blogId )
        {
        	$query = "DELETE FROM ".$this->getPrefix()."mylinks WHERE blog_id = $blogId";

			$result = $this->Execute( $query );

            return $result;
        }        

        /**
         * Retrieves a single link from disk.
         *
         * @param linkId The link identifier
         * @param blogId The blog identifier
         * @return The MyLink object containing information or false if it didn't exist
         */
        function getMyLink( $linkId, $blogId = -1 )
        {
        	$query = "SELECT * FROM ".$this->getPrefix()."mylinks WHERE id = ".Db::qstr($linkId);
			if( $blogId > 0 )
				$query .= " AND blog_id = '".$blogId."';";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;

            if( $result->RecordCount() == 0 )
            	return false;

            $row = $result->FetchRow();
			$blogLink = $this->_fillMyLinkInformation( $row );

            return $blogLink;
        }

        /**
         * Updates a link in the database.
         *
         * @param myLink A MyLink object with the information we'd like to update.
         * @return True if successful or false otherwise.
         */
        function updateMyLink( $myLink )
        {
        	$query = "UPDATE ".$this->getPrefix()."mylinks SET
                      name = '".Db::qstr($myLink->getName())."',
                      description = '".Db::qstr($myLink->getDescription())."',
                      url = '".Db::qstr($myLink->getUrl())."',
                      category_id = ".$myLink->getCategoryId().",
                      date = date,
					  properties = '".Db::qstr(serialize($myLink->getProperties()))."',
					  rss_feed = '".Db::qstr($myLink->getRssFeed())."'
                      WHERE id = ".$myLink->getId()." AND blog_id = ".$myLink->getBlogId().";";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;
            else {
				if( $result ) {
					// mark the corresponding link categories as modified now
					$linkCategories = new MyLinksCategories();
					$linkCategories->updateCategoryModificationDate( $myLink->getCategoryId());
				}
			
            	return true;
			}
        }
		
		/**
		 * @private
		 */
		function _fillMyLinkInformation( $row )
		{
            $blogLink = new MyLink( $row["name"], $row["description"], 
			                        $row["url"], $row["blog_id"], $row["category_id"], 
									$row["date"], $row["rss_feed"],
									unserialize($row["properties"]),
									$row["id"] );
									
			return $blogLink;
		}
    }
?>