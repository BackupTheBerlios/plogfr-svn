<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/dao/filteredcontents.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/admineditblogfilteredcontentview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminblogfilteredcontentview.class.php" );     

    /**
     * Shows a form to add a new blocked content to the blog
     */
    class AdminEditBlogFilteredContentAction extends BlogOwnerAdminAction
    {

    	var $_contentId;

    	function AdminEditBlogFilteredContentAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        	
			// data validation stuff
			$this->registerFieldValidator( "contentId", new IntegerValidator());
			$view = new AdminBlogFilteredContentView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("error_incorrect_content_id") );
			$this->setValidationErrorView( $view );            	
        }

        function perform()
        {
        	// fetch the data
        	$this->_contentId = $this->_request->getValue( "contentId" );

        	// fetch the filtered content that we're going to edit
            $contents = new FilteredContents();
            $filteredContent = $contents->getBlogFilteredContent( $this->_contentId, $this->_blogInfo->getId());

            if( !$filteredContent ) {
            	$this->_view = new AdminBlogFilteredContentView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_fetching_filtered_content"));
                $this->setCommonData();

            	return false;
            }

        	$this->_view = new AdminEditBlogFilteredContentView( $this->_blogInfo , $this->_contentId );
            $this->setCommonData();

            return true;
        }
    }
?>