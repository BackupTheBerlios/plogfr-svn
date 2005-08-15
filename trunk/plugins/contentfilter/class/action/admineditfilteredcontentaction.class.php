<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/dao/filteredcontents.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/admineditfilteredcontentview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminfilteredcontentview.class.php" );     

    /**
     * Shows a form to add a new blocked content to the blog
     */
    class AdminEditFilteredContentAction extends SiteAdminAction
    {

    	var $_contentId;

    	function AdminEditFilteredContentAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        	
			// data validation stuff
			$this->registerFieldValidator( "contentId", new IntegerValidator());
			$view = new AdminFilteredContentView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("error_incorrect_content_id") );
			$this->setValidationErrorView( $view );        	
        }

        function perform()
        {
        	// fetch the data
        	$this->_contentId = $this->_request->getValue( "contentId" );

        	// fetch the filtered content that we're going to edit
            $contents = new FilteredContents();
            $filteredContent = $contents->getBlogFilteredContent( $this->_contentId, 0 );

            if( !$filteredContent ) {
            	$this->_view = new AdminFilteredContentView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_fetching_filtered_content"));
                $this->setCommonData();

            	return false;
            }

        	$this->_view = new AdminEditFilteredContentView( $this->_blogInfo , $this->_contentId );
            $this->setCommonData();

            return true;
        }
    }
?>
