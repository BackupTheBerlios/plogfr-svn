<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/dao/filteredcontents.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminnewblogfilteredcontentview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminblogfilteredcontentview.class.php" );

    /**
     * Adds new blocked content to the blog
     */
    class AdminAddBlogFilteredContentAction extends BlogOwnerAdminAction 
	{

    	var $_newFilteredContent;
        var $_reason;

    	function AdminAddBlogFilteredContentAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );

			// data validation
			$this->registerFieldValidator( "filteredContent", new StringValidator());
			$this->_form->registerField( "reason" );
			$view = new AdminNewBlogFilteredContentView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("error_provide_content_to_block" ));
			$this->setValidationErrorView( $view );          	
        }

        function perform()
        {
            // fetch the data
        	$this->_newFilteredContent = $this->_request->getValue( "filteredContent" );
            $this->_reason = $this->_request->getValue( "reason" );

        	// create the dao object and add the info to the db
        	$filteredContents = new FilteredContents();
			$filteredContent = new FilteredContent( $this->_newFilteredContent, $this->_blogInfo->getId(), $this->_reason );			
			
			// throw the pre-event
			$this->notifyEvent( EVENT_PRE_FILTERED_CONTENT_ADD, Array( "content" => &$filteredContent ));
			// and add the filtered content to the database			
            $result = $filteredContents->addBlogFilteredContent( $filteredContent );

            // and give some feedback to the user
            if( !$result ) {
                $this->_view = new AdminNewBlogFilteredContentView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_adding_blocked_content"));
                $this->setCommonData();							

                return false;                
            }

			$this->notifyEvent( EVENT_POST_FILTERED_CONTENT_ADD, Array( "content" => &$filteredContent ));

            $this->_view = new AdminBlogFilteredContentView( $this->_blogInfo );
            $this->_view->setSuccessMessage( $this->_locale->tr("blocked_content_added_ok") );
            $this->setCommonData();

			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());

            // better to return true if everything fine
            return true;
        }
    }
?>
