<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/view/adminblockedhostsview.class.php" );

    /**
     * Shows the list of hosts that have been globally blocked
     */
    class AdminBlockedHostsAction extends SiteAdminAction 
	{

        function AdminBlockedHostsAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
            $this->_view = new AdminBlockedHostsView( $this->_blogInfo );

            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
