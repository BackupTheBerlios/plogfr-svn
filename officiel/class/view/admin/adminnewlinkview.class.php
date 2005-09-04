<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/mylinkscategories.class.php" );    


    /**
     * \ingroup View
     * @private
     *
     * shows the view to add a new link
     */
    class AdminNewLinkView extends AdminTemplatedView 
	{
		var $_templateName;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminNewLinkView( $blogInfo, $params = Array())
        {
			if( $this->_templateName == "" )
				$this->_templateName = "newlink";
        	$this->AdminTemplatedView( $blogInfo, $this->_templateName );
			
			// save the parameters and put them in a nicer place after checking them
			if( $params["showOrder"] == "" ) $params["showOrder"] = MYLINKS_CATEGORIES_NO_ORDER;
			
			$this->setValue( "showOrder", $params["showOrder"] );			
        }

        /**
         * Carries out the specified action
         */
        function render()
        {
            // get all the link categories but we have to respect the order that the user asked
			$order = $this->getValue( "showOrder" );			
            $linkCategories = new MyLinksCategories();
            $blogLinkCategories = $linkCategories->getMyLinksCategories( $this->_blogInfo->getId(), $order );
			$this->notifyEvent( EVENT_LINK_CATEGORIES_LOADED, Array( "linkcategories" => &$blogLinkCategories ));

			// put the data in the view
            $this->setValue( "linkcategories", $blogLinkCategories );

			parent::render();
        }
    }
?>