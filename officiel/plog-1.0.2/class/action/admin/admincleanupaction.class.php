<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articlecomments.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Action that shows a form to change the settings of the current blog.
     */
    class AdminCleanupAction extends SiteAdminAction
	{
		var $_message;
		var $_op;

		function AdminCleanupAction( $actionInfo, $request )
		{
			$this->SiteAdminAction( $actionInfo, $request );

			// since we've got two submit buttons in that form, we need to decide what to do
			// depending on which button was clicked
			if( $this->_request->getValue( "purgePosts" ))
				$this->_op = "cleanupPosts";
			elseif( $this->_request->getValue( "purgeSpam" ))
				$this->_op = "cleanupSpam";
			
			$this->_message = "";
		}

		/**
		 * cleans up posts. Returns true if successful or false otherwise
		 */
		function cleanupPosts()
		{
	        	$articles = new Articles();
			$articles->purgePosts();

			$this->_message = $this->_locale->tr("posts_purged_ok");

			return true;
		}

		/**
		 * cleans up spam comments. Returns true if successful or false otheriwse
		 */
		function cleanupComments()
		{
			$comments = new ArticleComments();
			$comments->purgeSpamComments();

            		$this->_message = $this->_locale->tr("spam_comments_purged_ok");

			return true;
		}

		function perform()
		{
			// decide what we're going to do...
			if( $this->_op == "cleanupSpam" ) {
				$result = $this->cleanupComments();
			}
			elseif( $this->_op == "cleanupPosts" ) {
				$result = $this->cleanupPosts();
			}

			// create the view and see if there was a success message
			$this->_view = new AdminTemplatedView( $this->_blogInfo, "cleanup" );
			if( $result ) 
				$this->_view->setSuccessMessage( $this->_message );

			$this->setCommonData();

			return true;
		}
	}