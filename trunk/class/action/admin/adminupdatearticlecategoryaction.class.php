<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/emptyvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminarticlecategorieslistview.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Updates an article category.
     */
    class AdminUpdateArticleCategoryAction extends AdminAction 
	{

    	var $_categoryName;
        var $_categoryUrl;
        var $_categoryId;
		var $_categoryDescription;
        var $_categoryInMainPage;
		var $_properties;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminUpdateArticleCategoryAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
			
			// data validation settings
			$this->registerFieldValidator( "categoryName", new StringValidator());
			$this->registerFieldValidator( "categoryId", new IntegerValidator());
			$this->registerFieldValidator( "categoryDescription", new StringValidator());
			$this->registerFieldValidator( "categoryInMainPage", new EmptyValidator());
			$errorView = new AdminTemplatedView( $this->_blogInfo, "editarticlecategory" );
			$errorView->setErrorMessage( $this->_locale->tr("error_updating_article_category" ));
			$this->setValidationErrorView( $errorView );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
			// get the data from the form
        	$this->_categoryName = Textfilter::filterAllHTML($this->_request->getValue( "categoryName" ));
            $this->_categoryId   = $this->_request->getValue( "categoryId" );
			$this->_categoryDescription = Textfilter::filterAllHTML($this->_request->getValue( "categoryDescription" ));
            $this->_categoryInMainPage = $this->_request->getValue( "categoryInMainPage" );
			$this->_properties = Array();		
		
        	// fetch the category we're trying to update
            $categories = new ArticleCategories();
            $category   = $categories->getCategory( $this->_categoryId, $this->_blogInfo->getId());
            if( !$category ) {
            	$this->_view = new AdminArticleCategoriesListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_fetching_category"));
                $this->setCommonData();

                return false;
            }
			
			// fire the pre-event
			$this->notifyEvent( EVENT_PRE_CATEGORY_UPDATE, Array( "category" => &$category ));			

            // update the fields
            $category->setName( $this->_categoryName );
            $category->setUrl( "" );
            $category->setInMainPage( $this->_categoryInMainPage );
			$category->setProperties( $this->_properties );
			$category->setDescription( $this->_categoryDescription );
			
			// this is view we're going to use to show our messages
			$this->_view = new AdminArticleCategoriesListView( $this->_blogInfo );			
			
            if( !$categories->updateCategory( $category )) {
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_article_category"));
            }
			else {
				// if everything fine, load the list of categories
				$this->_view->setSuccessMessage( $this->_locale->pr("article_category_updated_ok", $category->getName()));
				
				// fire the post-event
				$this->notifyEvent( EVENT_POST_CATEGORY_UPDATE, Array( "category" => &$category ));			
				
				// clear the cache
				CacheControl::resetBlogCache( $this->_blogInfo->getId());			
			}
			
			$this->setCommonData();			
			
            // better to return true if everything fine
            return true;
        }
    }
?>
