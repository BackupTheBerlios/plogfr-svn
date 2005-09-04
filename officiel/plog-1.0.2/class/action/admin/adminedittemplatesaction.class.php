<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminsitetemplateslistview.class.php" );

    /**
     * \ingroup Action
     * @private
     */
    class AdminEditTemplatesAction extends SiteAdminAction 
    {

        function AdminEditTemplatesAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
			$this->_view = new AdminSiteTemplatesListView( $this->_blogInfo );
            $this->setCommonData();

            return true;
        }
    }
?>
