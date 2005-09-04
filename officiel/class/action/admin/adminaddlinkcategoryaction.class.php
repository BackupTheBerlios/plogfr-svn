<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/mylinkscategories.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminlinkcategorieslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );	

    /**
     * \ingroup Action
     * @private
     *
     * Action that takes care of adding a new link category
     */
    class AdminAddLinkCategoryAction extends AdminAction 
	{

    	var $_linkCategoryName;
		var $_properties;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminAddLinkCategoryAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
			
			// data validation
			$this->registerFieldValidator( "linkCategoryName", new StringValidator());
			$this->setValidationErrorView( new AdminTemplatedView( $this->_blogInfo, "newlinkcategory" ));
        }


        /**
         * Carries out the specified action
         */
        function perform()
        {
        	// add the new link category to the database
			$this->_linkCategoryName = Textfilter::filterAllHTML($this->_request->getValue( "linkCategoryName" ));
            $mylinksCategories = new MyLinksCategories();
            $mylinksCategory = new MyLinksCategory( $this->_linkCategoryName, 
			                                        $this->_blogInfo->getId(), 
													0, 
													$this->_properties );
			// the view is the same for both conditions										
           	$this->_view = new AdminLinkCategoriesListView( $this->_blogInfo );													
													
            if( !$mylinksCategories->addMyLinksCategory( $mylinksCategory, $this->_blogInfo->getId())) {
				// set an error message
                $this->_view->setErrorMessage( $this->_locale->tr("error_adding_link_category"));
            }
			else {
				// clear the cache
				CacheControl::resetBlogCache( $this->_blogInfo->getId(), false );
				$this->_view->setSuccessMessage( $this->_locale->pr("link_category_added_ok", $mylinksCategory->getName()));	
			}
			
            $this->setCommonData();

            return true;
        }
    }
?>
