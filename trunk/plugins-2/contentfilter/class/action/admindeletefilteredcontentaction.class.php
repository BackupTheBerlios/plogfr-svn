<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );    
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/dao/filteredcontents.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminnewfilteredcontentview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminfilteredcontentview.class.php" );    

    /**
     * removes globally filtered content
     */
    class AdminDeleteFilteredContentAction extends SiteAdminAction 
	{

    	var $_deleteFilteredContents;
    	var $_contentId;
    	var $_op;

        function AdminDeleteFilteredContentAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );

			$this->_op = $actionInfo->getActionParamValue();
			
			$view = new AdminFilteredContentView( $this->_blogInfo );			
			if( $this->_op == "deleteFilteredContent" ) {
				$this->registerFieldValidator( "contentId", new IntegerValidator());
				$view->setErrorMessage( $this->_locale->tr("error_incorrect_content_id"));	
			}
			else {
				$this->registerFieldValidator( "deleteFilteredContent", new ArrayValidator());
				$view->setErrorMessage( $this->_locale->tr("error_no_block_content_selected"));
			}
			$this->setValidationErrorView( $view );        	
        }

        /**
         * Carries out the specified action
         */
		function perform()
		{
			if( $this->_op == "deleteFilteredContent" ) {
				$this->_deleteFilteredContents = Array();
				$this->_contentId = $this->_request->getValue( "contentId" );
				$this->_deleteFilteredContents[] = $this->_contentId;
			}
			else
				$this->_deleteFilteredContents = $this->_request->getValue( "deleteFilteredContent" );
				
			$this->_deleteFilteredContents();
		}
		       
        function _deleteFilteredContents()
        {
        	// get the content that has been filtered by this blog
            $filteredContents = new FilteredContents();

            // loop through the array of things to remove
            $errorMessage = "";
			$successMessage = "";
			$numOk = 0;
            foreach( $this->_deleteFilteredContents as $filteredContentId ) {
            	// fetch the content
                $filteredContent = $filteredContents->getBlogFilteredContent( $filteredContentId, 0 );
				$this->notifyEvent( EVENT_PRE_FILTERED_CONTENT_DELETE, Array( "content" => &$filteredContent ));				
                // first remove it
                if( !$filteredContents->removeBlogFilteredContent( $filteredContentId, $filteredContent->getBlogId()))
                	$errorMessage .= $this->_locale->pr("error_deleting_content", $filteredContent->getRegExp(false))."<br/>";
                else {
					$numOk++;
					if( $numOk > 1 )
						$successMessage = $this->_locale->pr("contents_deleted_ok", $numOk );
					else
						$successMessage = $this->_locale->pr("content_deleted_ok", $filteredContent->getRegExp(false));
					$this->notifyEvent( EVENT_POST_FILTERED_CONTENT_DELETE, Array( "content" => &$filteredContent ));
				}
            }

            $this->_view = new AdminFilteredContentView( $this->_blogInfo );
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
