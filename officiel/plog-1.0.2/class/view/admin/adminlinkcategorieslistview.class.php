<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/mylinkscategories.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/pager/pager.class.php" );

    /**
     * \ingroup View
     * @private
     *	
	 * shows a list of link categories
	 */
	class AdminLinkCategoriesListView extends AdminTemplatedView
	{
		var $_page;
	
		function AdminLinkCategoriesListView( $blogInfo )
		{
			$this->AdminTemplatedView( $blogInfo, "editlinkcategories" );
			
			$this->_page = $this->getCurrentPageFromRequest();
		}
		
		function render()
		{
            // get all the link categories
			$blogSettings = $this->_blogInfo->getSettings();
			$linkCategoriesOrder = $blogSettings->getValue( "link_categories_order", MYLINKS_CATEGORIES_NO_ORDER );			
			// get the link categories
            $linkCategories = new MyLinksCategories();
            $blogLinkCategories = $linkCategories->getMyLinksCategories( $this->_blogInfo->getId(), 
			                                                             $linkCategoriesOrder,
																		 $this->_page,
																		 DEFAULT_ITEMS_PER_PAGE );
			// get the total number of link categories
			$numLinkCategories = $linkCategories->getNumMyLinksCategories( $this->_blogInfo->getId());
			
			// throw the event
			$this->notifyEvent( EVENT_LINK_CATEGORIES_LOADED, Array( "linkcategories" => &$blogLinkCategories ));
			
			// create the pager
			$pager = new Pager( "?op=editLinkCategories&amp;page=",
			                    $this->_page,
								$numLinkCategories,
								DEFAULT_ITEMS_PER_PAGE );

            // create the view and fill the template context
            $this->setValue( "linkcategories", $blogLinkCategories );
			$this->setValue( "pager", $pager );
			
			// transfer control to the parent class
			parent::render();
		}
	}
?>