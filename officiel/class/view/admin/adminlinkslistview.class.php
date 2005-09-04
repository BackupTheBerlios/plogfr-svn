<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/mylinks.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/mylinkscategories.class.php" );    
	include_once( PLOG_CLASS_PATH."class/data/pager/pager.class.php" );	

    /**
     * \ingroup View
     * @private
     *	
     * Shows a list with all the links in the site, also filtering by category
     */
    class AdminLinksListview extends AdminTemplatedView 
	{
		var $_page;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminLinksListview( $blogInfo, $params = Array())
        {
        	$this->AdminTemplatedView( $blogInfo, "editlinks" );
			
			// save the parameters and put them in a nicer place after checking them
			if( $params["showOrder"] == "" ) $params["showOrder"] = MYLINKS_CATEGORIES_NO_ORDER;
			if( $params["showCategory"] == "" ) $params["showCategory"] = 0;
			
			$this->setValue( "showOrder", $params["showOrder"] );
			$this->setValue( "showCategory", $params["showCategory"] );
			$this->_page = $this->getCurrentPageFromRequest();
		}

        /**
         * Carries out the specified action
         */
        function render()
        {
			// get the parameters
			$order = $this->getValue( "showOrder" );
			$categoryId = $this->getValue( "showCategory");			
        	// get all the links and throw the event
        	$links = new MyLinks();
            $blogLinks = $links->getLinks( $this->_blogInfo->getId(), 
			                               $categoryId,
										   $this->_page,
										   DEFAULT_ITEMS_PER_PAGE );
			$this->notifyEvent( EVENT_LINKS_LOADED, Array( "links" => &$blogLinks ));
			// get the number of links
			$numLinks = $links->getNumLinks( $this->_blogInfo->getId(), $categoryId );
            // get all the link categories but we have to respect the order that the user asked
            $linkCategories = new MyLinksCategories();
            $blogLinkCategories = $linkCategories->getMyLinksCategories( $this->_blogInfo->getId(), $order );
			$this->notifyEvent( EVENT_LINK_CATEGORIES_LOADED, Array ( "linkcategories" => &$blogLinkCategories ));
			
			// prepare the pager
			$pager = new Pager( "?op=editLinks&amp;showCategory={$categoryId}&amp;page=",
			                    $this->_page,
								$numLinks,
								DEFAULT_ITEMS_PER_PAGE );

			// put the data in the view
            $this->setValue( "links", $blogLinks );
            $this->setValue( "linkscategories", $blogLinkCategories );
            $this->setValue( "currentcategory", $categoryId );
			$this->setValue( "pager", $pager );
		
			parent::render();
        }
    }
?>