<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );	
	include_once( PLOG_CLASS_PATH."plugins/moderate/class/view/adminunmoderatedcommentsview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/moderate/class/dao/unmoderatedcomments.class.php" );

	/**
	 * actions that updates the status of unmoderated comments
	 */
	class AdminUpdateUnmoderatedCommentsAction extends AdminAction
	{
	
		var $_updateComments;
		var $_commentId;
		var $_mode;
	
		function AdminUpdateUnmoderatedCommentsAction( $request, $actionInfo )
		{
			$this->AdminAction( $request, $actionInfo );

			$this->_op = $request->getActionParamValue();
			
			$view = new AdminUnmoderatedCommentsview( $this->_blogInfo );			
			if( $this->_op == "updateUnmoderatedComment" ) {
				$this->registerFieldValidator( "commentId", new IntegerValidator());
				$view->setErrorMessage( $this->_locale->tr("error_incorrect_comment_id"));	
			}
			else {
				$this->registerFieldValidator( "updateComments", new ArrayValidator());
				$view->setErrorMessage( $this->_locale->tr("error_no_unmoderated_comment_selected"));
			}
			$this->setValidationErrorView( $view ); 			
		}
		
		function perform()
		{
			if( $this->_op == "updateUnmoderatedComment" ) {
				$this->_updateComments = Array();
				$this->_commentId = $this->_request->getValue( "commentId" );
				$this->_updateComments[] = $this->_commentId;
				$this->_mode = $this->_request->getValue( "mode" );
			} else {
				$this->_updateComments = $this->_request->getValue( "updateComments" );
				if( $this->_request->getValue( "moderate" )) {
				    $this->_mode = 1;
				} else {
				    $this->_mode = 0;
				}
		    }
				
			$this->_updateComments();
		}

		function _updateComments()
		{
			// and the mode, whether we're allowing them or rejecting them
			if( $this->_mode )
				return $this->_acceptComments();
			else
				return $this->_rejectComments();
		}
		
		/**
		 * changes the status of the comments to be ok
		 */
		function _acceptComments()
		{
			$comments = new UnmoderatedComments();
			
			foreach( $this->_updateComments as $commentId ) {
				$comments->updateCommentStatus( $commentId, COMMENT_STATUS_NONSPAM );
			}
			
			$this->_view = new AdminUnmoderatedCommentsview( $this->_blogInfo );
			$this->_view->setSuccessMessage( $this->_locale->tr("moderate_comments_moderated_ok") );
			$this->setCommonData();

			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());			
			
			return true;
		}
		
		/**
		 * rejects the comments, and removes from the database from the db
		 */
		function _rejectComments()
		{
			$comments = new UnmoderatedComments();
			
			foreach( $this->_updateComments as $commentId ) {
				$comments->deleteComment( $commentId );
			}
			
			$this->_view = new AdminUnmoderatedCommentsview( $this->_blogInfo );
			$this->_view->setSuccessMessage( $this->_locale->tr("moderate_comments_rejected_ok") );
			$this->setCommonData();

			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());			
			
			return true;
		}
	}
?>