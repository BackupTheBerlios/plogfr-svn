<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminlinkcategorieslistview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Action that shows the list link categories
     */
    class AdminEditLinkCategoriesAction extends AdminAction 
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminEditLinkCategoriesAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
            // get all the link categories
            $this->_view = new AdminLinkCategoriesListView( $this->_blogInfo );
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
