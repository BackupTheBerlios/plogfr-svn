<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );    
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/dao/filteredcontents.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminnewblogfilteredcontentview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminblogfilteredcontentview.class.php" );

    /**
     * removes filtered content from a blog
     */
    class AdminDeleteBlogFilteredContentAction extends BlogOwnerAdminAction 
	{

    	var $_deleteFilteredContents;
    	var $_contentId;
    	var $_op;

        function AdminDeleteBlogFilteredContentAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
			
			$this->_op = $actionInfo->getActionParamValue();
			
			$view = new AdminBlogFilteredContentView( $this->_blogInfo );			
			if( $this->_op == "deleteBlogFilteredContent" ) {
				$this->registerFieldValidator( "contentId", new IntegerValidator());
				$view->setErrorMessage( $this->_locale->tr("error_incorrect_content_id"));	
			}
			else {
				$this->registerFieldValidator( "deleteBlogFilteredContent", new ArrayValidator());
				$view->setErrorMessage( $this->_locale->tr("error_no_block_content_selected"));
			}
			$this->setValidationErrorView( $view );          	
        }

        /**
         * Carries out the specified action
         */
		function perform()
		{
			if( $this->_op == "deleteBlogFilteredContent" ) {
				$this->_deleteFilteredContents = Array();
				$this->_contentId = $this->_request->getValue( "contentId" );
				$this->_deleteFilteredContents[] = $this->_contentId;
			}
			else
				$this->_deleteFilteredContents = $this->_request->getValue( "deleteBlogFilteredContent" );
			
			$this->_deleteBlogFilteredContents();
		}
		         
        function _deleteBlogFilteredContents()
        {
        	// get the content that has been filtered by this blog
            $filteredContents = new FilteredContents();

            // loop through the array of things to remove
            $errorMessage = "";
			$successMessage = "";
			$numOk = 0;
            foreach( $this->_deleteFilteredContents as $filteredContentId ) {
            	// fetch the content
                $blogFilteredContent = $filteredContents->getBlogFilteredContent( $filteredContentId, $this->_blogInfo->getId() );
				$this->notifyEvent( EVENT_PRE_FILTERED_CONTENT_DELETE, Array( "content" => &$blogFilteredContent ));
                // first remove it
                if( !$filteredContents->removeBlogFilteredContent( $filteredContentId, $this->_blogInfo->getId()))
                	$errorMessage .= $this->_locale->pr("error_deleting_content", $blogFilteredContent->getRegExp(false))."<br/>";
                else {
					$numOk++;
					if( $numOk > 1 )
						$successMessage = $this->_locale->pr("contents_deleted_ok", $numOk );
					else
						$successMessage = $this->_locale->pr("content_deleted_ok", $blogFilteredContent->getRegExp(false));
					$this->notifyEvent( EVENT_POST_FILTERED_CONTENT_DELETE, Array( "content" => &$blogFilteredContent ));
				}
            }

            $this->_view = new AdminBlogFilteredContentView( $this->_blogInfo );
            if( $errorMessage != "" ) $this->_view->setErrorMessage( $errorMessage );
			if( $successMessage != "" ) $this->_view->setSuccessMessage( $successMessage );
            $this->setCommonData();
       
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());

            // better to return true if everything fine
            return true;
        }
    }
?>
