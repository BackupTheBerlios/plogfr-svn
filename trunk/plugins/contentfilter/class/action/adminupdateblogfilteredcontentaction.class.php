<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/dao/filteredcontents.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/admineditblogfilteredcontentview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminblogfilteredcontentview.class.php" ); 

    /**
     * updates filtered content from a blog
     */
    class AdminUpdateBlogFilteredContentAction extends BlogOwnerAdminAction
    {

    	var $_filteredContentRule;
        var $_reason;
        var $_contentId;

    	function AdminUpdateBlogFilteredContentAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
			
            // fetch the data
            $this->_contentId = $this->_request->getValue( "contentId" );
			
			// set up the data validators
			// data validation
			$this->registerFieldValidator( "contentId", new IntegerValidator());
			$this->registerFieldValidator( "filteredContent", new StringValidator());
			$this->_form->registerField( "reason" );
			$view = new AdminEditBlogFilteredContentView( $this->_blogInfo, $this->_contentId );
			$view->setErrorMessage( $this->_locale->tr("error_provide_content_to_block" ));
			$this->setValidationErrorView( $view );            	
        }

        function perform()
        {
        	// fetch the data
        	$this->_filteredContentRule = $this->_request->getValue( "filteredContent" );
            $this->_reason = $this->_request->getValue( "reason" );

        	// create the dao object and add the info to the db
        	$filteredContents = new FilteredContents();
            $content = $filteredContents->getBlogFilteredContent( $this->_contentId, $this->_blogInfo->getId());

            // check if we could find the information, or give up otherwise...
            if( !$content ) {
            	$this->_view = new AdminBlogFilteredContentView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_fetching_filtered_content") );
                $this->setCommonData();

                return false;   
            }

            $content->setRegExp( $this->_filteredContentRule );
            $content->setReason( $this->_reason );
			
			$this->notifyEvent( EVENT_PRE_FILTERED_CONTENT_UPDATE, Array( "content" => &$content ));

            $result = $filteredContents->updateFilteredContent( $content );

            // and give some feedback to the user
            if( !$result ) {
            	$this->_view = new AdminBlogFilteredContentView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_blocked_content") );
                $this->setCommonData();

                return false; 
            }

			$this->notifyEvent( EVENT_POST_FILTERED_CONTENT_UPDATE, Array( "content" => &$content ));
          	$this->_view = new AdminBlogFilteredContentView( $this->_blogInfo );
            $this->_view->setSuccessMessage( $this->_locale->tr("blocked_content_updated_ok") );
            $this->setCommonData();
            
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());            

            return true;
        }
    }
?>
