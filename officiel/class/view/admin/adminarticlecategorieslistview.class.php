<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/pager/pager.class.php" );
	
    /**
     * \ingroup View
     * @private
     *
     * Action that shows a form to add a link for the blogroll feature
     */
    class AdminArticleCategoriesListView extends AdminTemplatedView 
	{
		var $_page;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminArticleCategoriesListView( $blogInfo, $page = 1 )
        {
        	$this->AdminTemplatedView( $blogInfo, "editarticlecategories" );			
        }

        /**
         * Carries out the specified action
         */
        function render()
        {
			// prepare a few parameters
            $categories = new ArticleCategories();
			$blogSettings = $this->_blogInfo->getSettings();
			$categoriesOrder = $blogSettings->getValue( "categories_order" );
			
			// get the page too
			$this->_page = $this->getCurrentPageFromRequest();			
			
			// retrieve the categories in an paged fashion
			$totalCategories = $categories->getBlogNumCategories( $this->_blogInfo->getId(), true );
            $blogCategories = $categories->getBlogCategoriesAdmin( $this->_blogInfo->getId(), 
			                                                       false, 
																   $categoriesOrder,
																   $this->_page,
																   DEFAULT_ITEMS_PER_PAGE );
			if( !$blogCategories ) {
				$blogCategories = Array();
			}
			
			// throw the even in case somebody's waiting for it!
			$this->notifyEvent( EVENT_CATEGORIES_LOADED, Array( "categories" => &$blogCategories ));
            $this->setValue( "categories", $blogCategories );
			
			// the pager that will be used
			$pager = new Pager( "?op=editArticleCategories&amp;page=",
			                    $this->_page,
								$totalCategories,
								DEFAULT_ITEMS_PER_PAGE );
			$this->setValue( "pager", $pager );
			
			parent::render();
        }
    }
?>
