<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Action that adds a new category for the articles to the database
     */
    class AdminNewArticleCategoryAction extends AdminAction 
    {

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminNewPostAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	// initialize the view
        	$this->_view = new AdminTemplatedView( $this->_blogInfo, "newpostcategory" );
            $this->setCommonData();

            // fetch the categories
            $categories = new ArticleCategories();
			$blogSettings = $this->_blogInfo->getSettings();
			$categoriesOrder = $blogSettings->getValue( "categories_order" );
            $blogCategories = $categories->getBlogCategoriesAdmin( $this->_blogInfo->getId(), false, $categoriesOrder );
            $this->_view->setValue( "categories", $blogCategories );
			// this field should be true by default
			$this->_view->setValue( "categoryInMainPage", true );

            // better to return true if everything fine
            return true;
        }
    }
?>