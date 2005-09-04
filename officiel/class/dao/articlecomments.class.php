<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/usercomment.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );

	define( "COMMENT_ORDER_OLDEST_FIRST", 1 );
	define( "COMMENT_ORDER_NEWEST_FIRST", 2 );

    /**
	 * \ingroup DAO
	 *
     * Model for the comments each article can have
     */
	class ArticleComments extends Model 
	{

    	var $totalComments;
		var $_blogSettings;
		var $blogSettings;
		var $timeDiff;

    	function ArticleComments()
        {
        	$this->Model();

            $this->totalComments = Array();

            $this->_blogSettings = Array();
			
			$this->blogSettings = null;
			$this->timeDiff = 0;			
        }

        /**
         * Adds a comment to an article
		 *
		 * @param comment the UserComment object that we're going to add.
		 * @return Returns true if successful or false if error. Also in case of success, it will modify the UserComment
		 * object passed by reference and include its new id.
         */
		function addComment( &$comment ) 
        {
			$filter = new Textfilter();
			$t = new Timestamp();
			$timeStamp = $t->getTimestamp();
        	$query = "INSERT INTO ".$this->getPrefix().
			          "articles_comments (article_id,topic,text,user_name,user_email,
					                      user_url,parent_id,client_ip,status,date,normalized_text,normalized_topic) 
					   VALUES (".$comment->getArticleId().",'".Db::qstr($comment->getTopic())."','".
					   Db::qstr($comment->getText())."','".Db::qstr($comment->getUserName())."','".
					   Db::qstr($comment->getUserEmail())."','".Db::qstr($comment->getUserUrl())."',".
					   $comment->getParentId().", '".$comment->getClientIp()."', ".$comment->getStatus().",".
					   $timeStamp.",'".
					   Db::qstr($filter->normalizeText($comment->getText()))."', '".
					   Db::qstr($filter->normalizeText($comment->getTopic()))."');";

            $result = $this->Execute( $query );
			
			if( !$result )
				return false;
			
			// retrieve the last id and save it in the object
			$comment->setId( $this->_db->Insert_ID());
			
			return( true );
        }

		/**
		 * Retrieves all the comments for a post
		 *
		 * @param artid The article identifier
		 * @param order The order in which comments should be retrieved
		 * @param status The status that the comment should have, use COMMENT_STATUS_ALL for
		 * all possible statuses
		 * @param page
		 * @param itemsPerPage
		 * @return False if error or an array of ArticleComments objects
		 */
		function getPostComments( $artid, $order = COMMENT_ORDER_NEWEST_FIRST, $status = COMMENT_STATUS_ALL, $page = -1, $itemsPerPage = DEFAULT_ITEMS_PER_PAGE )
		{
			$query = "SELECT id,article_id,topic,
			                 text,date,user_email,user_url,user_name,parent_id,
			                 client_ip,send_notification,status,spam_rate
			          FROM ".$this->getPrefix()."articles_comments
			          WHERE article_id = ".$artid;
            if( $status != COMMENT_STATUS_ALL )
            	$query .= " AND status = $status";

			// check in which order we should display those comments
			if( $order == COMMENT_ORDER_NEWEST_FIRST )
				$query .= " ORDER BY date DESC";
			else
				$query .= " ORDER BY date ASC";
			
            $result = $this->Execute( $query, $page, $itemsPerPage );

            if( !$result )
            	return Array();

            $comments = Array();
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

				$comment = new UserComment( $row["article_id"],	$row["parent_id"], $row["topic"],
											$row["text"], $date, $row["user_name"], $row["user_email"],
											$row["user_url"], $row["client_ip"], $row["spam_rate"], $row["status"],
											$row["id"] );				
				
                $comments[] = $comment;
			}
			
            $result->Close();			

			return $comments;
		}
		
		/**
		 * Retrieves all the comments for subquery of posts
		 *
		 * @private
		 */
		function getPostCommentsByIds( $ids, $order = COMMENT_ORDER_NEWEST_FIRST, $status = COMMENT_STATUS_ALL )
		{

			$query = "SELECT id,article_id,topic,
			                 text,date,user_email,user_url,user_name,parent_id,
			                 client_ip,send_notification,status,spam_rate
			          FROM ".$this->getPrefix()."articles_comments WHERE article_id IN (".$ids.")";
            if( $status != COMMENT_STATUS_ALL )
            	$query .= " AND status = $status";

			// check in which order we should display those comments
			if( $order == COMMENT_ORDER_NEWEST_FIRST )
				$query .= " ORDER BY date DESC";
			else
				$query .= " ORDER BY date ASC";
			$result = $this->Execute( $query );
			if( !$result )
            	return false;
				
			// initialize these two thingies with harmless values
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

				$comment = new UserComment( $row["article_id"],	$row["parent_id"], $row["topic"],
											$row["text"], $date, $row["user_name"], $row["user_email"],
											$row["user_url"], $row["client_ip"], $row["spam_rate"], $row["status"],
											$row["id"] );
				
				// save the comment in the array
                $comments[$lastArticleId][]=$comment;
			}
			
            $result->Close();			

			return $comments;
		}
		
        /**
         * Returns the total number of comments for a post
		 *
		 * @param artId the post id
		 * @param status
		 * @return The number of comments
         */
        function getNumPostComments( $artId, $status = COMMENT_STATUS_ALL )
        {
            // create the table name
            $prefix = $this->getPrefix();
            $table = "{$prefix}articles_comments";
            // and the condition if any...
            $cond = "article_id = '".Db::qstr($artId)."'";
            if( $status != COMMENT_STATUS_ALL )
                $cond .= " AND status = '".Db::qstr($status)."'";
    
            // get the number of items and return it to the caller
            return( $this->getNumItems( $table, $cond ));
		
        }

        /**
         * Retrieves only one post from a given article
         */
        function getPostComment( $artid, $commentid )
		{
			$query = "SELECT id,article_id,topic,
			                 text,date,user_email,user_url,user_name,parent_id,
			                 client_ip,send_notification,status,spam_rate
			         FROM ".$this->getPrefix()."articles_comments 
			         WHERE id = ".$commentid." AND article_id = '".Db::qstr($artid)."';";

			$result = $this->Execute( $query );

			if( !$result )
				return false;

            $row = $result->FetchRow();
            $comment = $this->_fillCommentInformation( $row );
            
            $result->Close();            

			return $comment;
		}

        /**
         * Returns true if there already is a comment in the database with the same
         * article_id field, topic, text, replying to the same comment, username and so on
         * Useful in case we want to check if the user sent the same comment by mistake
         * by pressing the 'reload' button twice or something...
         *
         * @return Returns true if there already is such comment or false otherwise.
         */
        function getIdenticalComment( $topic, $text, $articleId, $parentId = 0, $userName = "", $userEmail = "", $userUrl = "", $clientIp = "0.0.0.0" )
        {
        	$query = "SELECT COUNT(*) AS total FROM ".$this->getPrefix()."articles_comments
                       WHERE topic = '".Db::qstr($topic)."' AND text = '".Db::qstr($text)."'
                       AND article_id = $articleId AND parent_id = $parentId AND
                       client_ip = '$clientIp' AND user_name = '$userName' AND
                       user_email = '$userEmail' AND user_url = '$userUrl'
                       AND date <= NOW()";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;

            $row = $result->FetchRow();
            
            $result->Close();            

            if( $row["total"] >= 1 )
            	return true;
            else
            	return false;
        }

        /**
         * code factored out and made to be reused through several functions here...
         */
        function _fillCommentInformation( $row )
        {
        	// ---
            // this stuff is another disgusting hack to make comments
            // be aware of time differences that may have been set by
            // users in their blogs... actually, it will make the whole
            // thing run a little bit slower because for every article
            // that we fetch, we need to know the time difference
            // and that means, additional accesses to the database :(
            // But hey, users demand these things and we are not in the position
            // to deny anything, are we? :P
            // ---
            // at the same time, we're going to brake some of our "nicely"
            // implemented bussiness logic with the query below, bypassing all
            // our objects and directly fetching info from the database, just for
            // the sake of being able to do things with a single query rather
            // than needing at least two to do the same. We would have to first
            // find to which blog the given article belongs and then use another
            // query to find its settings... If we do it this way, we can still
            // do it in one query and get a nice BlogSettings object with the
            // information that we need. Dirty but works :S
            // ---
            $prefix = $this->getPrefix();
            $date = $row["date"];
            $articleId = $row["article_id"];

            // let's try and keep some kind of cache for this...
            if( empty($this->_blogSettings[$articleId])) {
            	$query = "SELECT DISTINCT b.settings AS settings
                          FROM {$prefix}blogs b, {$prefix}articles a,
                          {$prefix}articles_comments c
                          WHERE c.article_id = a.id AND
                          a.blog_id = b.id
                          AND a.id = $articleId";
                $result = $this->Execute( $query );
				if( !$result ) 
					return false;
				
                $tmpRow = $result->FetchRow();
                $blogSettings = Blogs::getBlogSettingsFromField( $tmpRow["settings"] );
                $this->_blogSettings[$articleId] = $blogSettings;
                
                $result->Close();                
            }
            else {
            	$blogSettings = $this->_blogSettings[$articleId];
            }

            $timeDiff = $blogSettings->getValue( "time_offset" );
            // now that we've got the time difference, we can
            // calculate what would the "real" date...
            $date = Timestamp::getDateWithOffset( $date, $timeDiff );
		
            $spam_rate = 0;
            if ( array_key_exists( "spam_rate", $row ) )
            {
                $spam_rate = $row["spam_rate"];
            }

            $comment = new UserComment( $row["article_id"],
                                        $row["parent_id"],
                                        $row["topic"],
                                        $row["text"],
                                        $date,
                                        $row["user_name"],
                                        $row["user_email"],
                                        $row["user_url"],
                                        $row["client_ip"],
                                        $spam_rate,
                                        $row["status"],
                                        $row["id"] );

            return $comment;
        }

		/**
		 * Removes a comment from a post. It also updates all the other posts that
         * have this one as the parent and makes them look as if they were 'top level'
         * comments with no parent.
         *
         * @param artid The article identifier.
         * @param commentid The comment identifier.
		 */
		function deletePostComment( $artid, $commentid)
		{
			$query = "DELETE FROM ".$this->getPrefix()."articles_comments WHERE id = ".$commentid." AND article_id = ".$artid.";";

			$result = $this->Execute( $query );

			if( $this->_db->Affected_Rows( $result ) == 0 )
				return;

            // update all the other posts
            $query = "UPDATE ".$this->getPrefix()."articles_comments SET parent_id = 0 WHERE parent_id = ".$commentid." AND article_id = ".$artid.";";
            $result = $this->Execute( $query );

			return $result;
		}
		
		/**
		 * Removes a comment from a post. It also updates all the other posts that
         * have this one as the parent and makes them look as if they were 'top level'
         * comments with no parent.
         *
         * @param artid The article identifier.
         * @param commentid The comment identifier.
		 */
		function deleteComment( $commentid)
		{
			$query = "DELETE FROM ".$this->getPrefix()."articles_comments WHERE id = ".$commentid;

			$result = $this->Execute( $query );

			if( $this->_db->Affected_Rows( $result ) == 0 )
				return;

            // update all the other posts
            $query = "UPDATE ".$this->getPrefix()."articles_comments SET parent_id = 0 WHERE parent_id = ".$commentid." AND article_id = ".$artid.";";
            $result = $this->Execute( $query );

			return $result;
		}		

        /**
         * Removes all the comments from a post.
         *
         * @param artId The article identifier
         */
        function deletePostComments( $artId )
        {
        	$query = "DELETE FROM ".$this->getPrefix()."articles_comments WHERE article_id = $artId";

			$result = $this->Execute( $query );

            return $result;
        }

        /**
         * updates the status of a comment, regarding its spam status...
         *
         * @param commentId
         * @param status
         * @return true or false, depending...
         */
        function updateCommentStatus( $commentId, $status )
        {
        	$query = "UPDATE ".$this->getPrefix()."articles_comments SET
                      status = $status, date = date
                      WHERE id = $commentId";

            $result = $this->Execute( $query );

            return $result;
        }

        /**
         * removes all comments marked as spam from the database
         */
        function purgeSpamComments()
        {
        	$query = "DELETE FROM ".$this->getPrefix()."articles_comments WHERE status = ".COMMENT_STATUS_SPAM;

            return $this->Execute( $query );
        }
		
		
		/**
		 * returns a single comment, identified by its... identifier :)
		 */
		function getComment( $id )
		{
			$query = "SELECT id,article_id,topic,
			                 text,date,user_email,user_url,user_name,parent_id,
			                 client_ip,send_notification,status,spam_rate
			          FROM ".$this->getPrefix()."articles_comments
					  WHERE id = $id";
			$result = $this->Execute( $query );
			
			if( !$result )
				return false;
				
			if( $result->RowCount() == 0 )
				return false;
				
			$row = $result->FetchRow();
			
            $result->Close();			
			
			return $this->_fillCommentInformation( $row );
		}
		
		/**
		 * returns the lastest $maxItems comments received in the blog
		 *
		 * @param blogId
		 * @param maxItems
		 * @return An array of ArticleComment objects
		 */
		function getBlogComments( $blogId, $maxItems = 0, $articleStatus = POST_STATUS_PUBLISHED )
		{
			$prefix = $this->getPrefix();
			$query = "SELECT c.id AS id, c.article_id AS article_id, c.topic AS topic, 
			                 c.text AS text, c.date AS date, c.user_email AS user_email,
							 c.user_url AS user_url, c.user_name AS user_name, c.parent_id AS parent_id,
							 c.client_ip AS client_ip, c.send_notification AS send_notification,
							 c.status AS status      
					  FROM {$prefix}articles_comments c, {$prefix}articles a
			          WHERE a.blog_id = '".Db::qstr($blogId)."' AND a.id = c.article_id
					        AND a.status = $articleStatus 
					  ORDER BY date DESC";
			if( $maxItems > 0 )
				$query .= " LIMIT 0, $maxItems";
					  
			$result = $this->Execute( $query );
			
			if( !$result )
				return false;
				
			if( $result->RowCount() == 0 )
				return Array();
				
			$comments = Array();
			$articles = new Articles();
			while( $row = $result->FetchRow()) {
				// load the article to which this comment belongs
				$comment = $this->_fillCommentInformation( $row );
				$article = $articles->getBlogArticle( $comment->getArticleId(), $blogId );
				$comment->setArticle( $article );
				// and store everything in the array
				$comments[] = $comment;
			}
			
            $result->Close();			
			 
			return $comments;
		}
	}
?>