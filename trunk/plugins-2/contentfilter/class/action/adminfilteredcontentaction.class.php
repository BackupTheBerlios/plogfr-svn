<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminfilteredcontentview.class.php" );

    /**
     * Shows the list of content that has been blocked by the current blog
     */
    class AdminFilteredContentAction extends SiteAdminAction 
	{

        function AdminFilteredContentAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
            $this->_view = new AdminFilteredContentView( $this->_blogInfo );
            
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
