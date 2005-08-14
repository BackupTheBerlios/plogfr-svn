<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/trackback.class.php" );

	/**
     * Implementation of a trackback feature.
     * The technical specifications of the trackback protocol can be found
     * here: http://www.movabletype.org/docs/mttrackback.html.
	 *
	 * \ingroup DAO
     */
    class Trackbacks extends Model 
	{

    	var $_blogSettings;
		var $blogSettings;
		var $timeDiff;

    	/**
         * Initializes the connection to the database
         */
    	function Trackbacks()
        {
        	$this->Model();

            // we can keep a little cache of already-fetched BlogSettings
            // objects, so that we don't have to fetch them again when the only
            // thing that we need to know is the time difference once again
            $this->_blogSettings = Array();
			
			$this->blogSettings = null;
			$this->timeDiff = 0;
        }

        /**
         * Adds a trackback to the database.
         *
		 * @param A Trackback object
		 * @return Returns true if successful or false otherwise. Also in case it is successful, it will modify
		 * the original object to include the id of the trackback that was added.
         */
		function addTrackback( &$trackback )
        {
			$artId = $trackback->getArticleId();
			$url = $trackback->getUrl();
			$title = $trackback->getTitle();
			$blog = $trackback->getBlogName();
			$excerpt = $trackback->getExcerpt();
		
        	if( $title == "" )
            	$title = $url;

        	$query = "INSERT INTO ".$this->getPrefix()."trackbacks (url,title,article_id,excerpt,blog_name) 
			          VALUES ('".Db::qstr($url)."','".Db::qstr($title)."',".Db::qstr($artId).",'".
					  Db::qstr($excerpt)."','".Db::qstr($blog)."');";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;

			// set the trackback id
			$trackback->setId( $this->_db->Insert_ID());
			
           	return true;
        }

        /**
         * Returns the trackback items for a given article.
         *
         * @param artId The article identifier.
		 * @param page
		 * @param itemsPerPage
         * @return An array of TrackbackItem objects with the information, or false otherwise.
         */
        function getArticleTrackBacks( $artId, $page = DEFAULT_PAGING_ENABLED, $itemsPerPage = DEFAULT_ITEMS_PER_PAGE )
        {
        	$query = "SELECT * FROM ".$this->getPrefix()."trackbacks WHERE article_id = '".Db::qstr($artId)."'";

            $result = $this->Execute( $query, $page, $itemsPerPage );

            if( !$result )
            	return false;

            $trackbacks = Array();
            while( $row = $result->FetchRow()) {
            	//$trackback = $this->_fillTrackbackInformation( $row );
				
				// find out the blogInfo object (after all, all these comments belong to the same
				// blog so there is no risk of finding different blog_ids anywhere!
				if( $this->blogSettings == null ) {
					$prefix = $this->getPrefix();
					$articleId = $row["article_id"];
					
					$query = "SELECT DISTINCT b.settings AS settings FROM {$prefix}blogs b, {$prefix}articles a,
					         {$prefix}articles_comments c WHERE c.article_id = a.id AND a.blog_id = b.id
							 AND a.id = $articleId";
					$result2 = $this->Execute( $query );
					$tmpRow = $result2->FetchRow();
					$this->blogSettings = Blogs::getBlogSettingsFromField( $tmpRow["settings"] );
					$this->timeDiff = $this->blogSettings->getValue( "time_offset" );
				}
				
				// now that we've got the time difference, we can
				// calculate what would the "real" date...
				$date = $row["date"];				
				$date = Timestamp::getDateWithOffset( $date, $this->timeDiff );

				$trackback = new TrackBack( $row["url"],
									$row["title"],
									$row["article_id"],
									$row["excerpt"],
									$row["blog_name"],
									$date,
									$row["id"] );
				
				$trackbacks[] = $trackback;
            }

            return $trackbacks;
        }
		
		/**
		 * returns the 'x' most recent trackbacks from a blog
		 *
		 * @param blogId the blog id
		 * @param amount the maximum numer of trackbacks to return. By default, it will return all trackbacks.
		 * @return an array of Trackback objects
		 */
		function getBlogTrackbacks( $blogId, $amount = -1 )
		{
			$prefix = $this->getPrefix();

			$query = "SELECT t.id AS id, t.url AS url, t.title AS title, t.article_id AS article_id,
			                 t.excerpt AS excerpt, t.blog_name AS blog_name, t.date AS date
			          FROM {$prefix}trackbacks t, {$prefix}articles a
					  WHERE a.blog_id = '".Db::qstr( $blogId )."' AND a.id = t.article_id
					  ORDER BY t.date DESC";
			if( $amount > 0 )
				$query .= " LIMIT 0, $amount";
				
			$trackbacks = Array();
			
			$result = $this->Execute( $query );
			
			// if there was an error, return an empty array
			if( !$result )
				return( $trackbacks );
				
			// otherwise proceed and loop through the rows
			while( $row = $result->FetchRow()) {
				$trackback = $this->_fillTrackbackInformation( $row );
				array_push( $trackbacks, $trackback );
			}			
			
			return( $trackbacks );
		}
        
		/**
		 * returns a list of trackbacks given an array with article ids
		 *
		 * @param artIds An array of article ids
		 * @return An array of Trackback objects
		 * @see getArticleTrackback
		 */
        function getArticleTrackBacksByIds( $artIds )
        {
            $trackbacks = array();

        	$query = "SELECT * FROM ".$this->getPrefix()."trackbacks WHERE article_id IN (".$artIds.")";

            $result = $this->Execute( $query );

            if( !$result )
            	return Array();
				
			// harmless values, but they mark that we haven't loaded any data yet!
			$blogSettings = null;
			$timeDiff = 0;

            while ($row = $result->FetchRow()) {
			
				// find out the blogInfo object (after all, all these comments belong to the same
				// blog so there is no risk of finding different blog_ids anywhere!
				if( $this->blogSettings == null ) {
					$prefix = $this->getPrefix();
					$articleId = $row["article_id"];
					
					$query = "SELECT DISTINCT b.settings AS settings FROM {$prefix}blogs b, {$prefix}articles a,
					         {$prefix}articles_comments c WHERE c.article_id = a.id AND a.blog_id = b.id
							 AND a.id = $articleId";
					$result2 = $this->Execute( $query );
					$tmpRow = $result2->FetchRow();
					$this->blogSettings = Blogs::getBlogSettingsFromField( $tmpRow["settings"] );
					
					$this->timeDiff = $this->blogSettings->getValue( "time_offset" );
				}
			
            	$lastArticleId=$row["article_id"];
				
				// now that we've got the time difference, we can
				// calculate what would the "real" date...
				$date = $row["date"];				
				$date = Timestamp::getDateWithOffset( $date, $this->timeDiff );

				$trackback = new TrackBack( $row["url"],
									$row["title"],
									$row["article_id"],
									$row["excerpt"],
									$row["blog_name"],
									$date,
									$row["id"] );

                $trackbacks[$lastArticleId][]=$trackback;
			}

            return $trackbacks;
        }

        /**
         * function factored out from the above
         *
         * @private
         * @param row The row with the information
         */
        function _fillTrackbackInformation( $row )
        {
        	// ---
            // there we go again doing dirty things to the poor trackbacks...
            // ---
            $prefix = $this->getPrefix();
            $date = $row["date"];
            $articleId = $row["article_id"];

            // let's try and keep some kind of cache for this...
            if( empty($this->_blogSettings[$articleId])) {
            	$query = "SELECT DISTINCT b.settings AS settings
                          FROM {$prefix}blogs b, {$prefix}articles a,
                          {$prefix}trackbacks t
                          WHERE t.article_id = a.id AND
                          a.blog_id = b.id
                          AND a.id = $articleId";
                $result = $this->Execute( $query );
                $tmpRow = $result->FetchRow();
                $blogSettings = Blogs::getBlogSettingsFromField( $tmpRow["settings"] );
                $this->_blogSettings[$articleId] = $blogSettings;
            }
            else {
            	$blogSettings = $this->_blogSettings[$articleId];
            }

            $timeDiff = $blogSettings->getValue( "time_offset" );
            // now that we've got the time difference, we can
            // calculate what would the "real" date...
            $date = Timestamp::getDateWithOffset( $date, $timeDiff );

        	$trackback = new TrackBack( $row["url"],
                                  $row["title"],
                                  $row["article_id"],
                                  $row["excerpt"],
                                  $row["blog_name"],
                                  $date,
                                  $row["id"] );
								  
			return( $trackback );
        }

        /**
         * Returns how many trackbacks have been received for the given article
         *
         * @param artId The article identifier.
         * @return The number of trackbacks received pointing to that article,
         */
        function getNumTrackbacksArticle( $artId )
        {
        	if( empty($this->totalTrackbacks)) {
        		$query1 = "SELECT article_id, COUNT(*) AS 'count' FROM ".$this->getPrefix()."trackbacks GROUP BY (article_id)";
            	$this->totalTrackbacks = $this->_db->GetAssoc( $query1 );
            }

            $totalTrackbacks = $this->totalTrackbacks[$artId];
            if( $totalTrackbacks == "" ) $totalTrackbacks = 0;

            return $totalTrackbacks;
        }

        /**
         * Removes all the trackbacks from a post
         *
         * @param artId The article identifier
         */
        function deletePostTrackbacks( $artId )
        {
        	$query = "DELETE FROM ".$this->getPrefix()."trackbacks WHERE article_id = $artId";

			$result = $this->Execute( $query );

            return $result;
        }
		
		/**
		 * gets a single trackback from the db
		 *
		 * @param trackbackId
		 * @param postId
		 * @return A Tracback object
		 */
		function getArticleTrackback( $trackbackId, $articleId = -1 )
		{	
			$prefix = $this->getPrefix();
			$query = "SELECT * FROM {$prefix}trackbacks WHERE id = '".Db::qstr($trackbackId)."'";
			if( $articleId > 0 )
				$query .= " AND article_id = '".Db::qstr($articleId)."'";
				
			$result = $this->Execute( $query );
			if( !$result )
				return false;
				
			if( $result->RowCount() == 0 )
				return false;
				
			$row = $result->FetchRow();
			$tb = $this->_fillTrackbackInformation( $row );
			
			return $tb;
		}
		
		/**
		 * removes a trackback from the database
		 *
		 * @param trackbackId
		 * @param articleId
		 * @return True if successful or false otherwise
		 */
		function deletePostTrackback( $trackbackId, $articleId = -1 )
		{
			$prefix = $this->getPrefix();
			$query = "DELETE FROM {$prefix}trackbacks WHERE id = '".Db::qstr($trackbackId)."'";
			if( $articleId > 0 )
				$query .= " AND article_id = '".Db::qstr($articleId)."'";
				
			return $this->Execute( $query );
		}
    }
?>
