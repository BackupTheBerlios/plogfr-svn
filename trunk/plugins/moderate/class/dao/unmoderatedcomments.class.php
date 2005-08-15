<?php

	include_once( PLOG_CLASS_PATH."class/dao/articlecomments.class.php" );
	
	// value for the status field of a comment, to let us know that it is in unmoderated status
	define( "COMMENT_STATUS_UNMODERATED", 9 );
	
	/**
	 * extends the ArticleComents class to add some methods not available in it
	 */
	class UnmoderatedComments extends ArticleComments
	{
	
		function UnmoderatedComments()
		{
			$this->ArticleComments();
		}
		
		function getUnmoderatedComments( $blogId )
		{
			$prefix = $this->getPrefix();
			$query = "SELECT c.id AS id, c.article_id AS article_id, c.topic AS topic, c.text AS text,
			                 c.date AS date, c.user_email AS user_email, c.user_url AS user_url,
							 c.parent_id AS parent_id, c.client_ip AS client_ip,
							 c.send_notification AS send_notification, c.status AS status,
							 c.spam_rate AS spam_rate
			          FROM {$prefix}articles_comments c, {$prefix}articles a
					  WHERE a.blog_id = $blogId AND c.article_id = a.id AND c.status = ".COMMENT_STATUS_UNMODERATED."
					  ORDER BY date ASC";
					  
			$result = $this->Execute( $query );
			
			// return an empty array if there was any problem
			if( !$result )
				return Array();
				
			// or else, loop through the array
			$comments = Array();
			while( $row = $result->FetchRow()) {
				array_push( $comments, $this->_fillCommentInformation( $row ));
			}
			
			return $comments;
		}
	}
?>