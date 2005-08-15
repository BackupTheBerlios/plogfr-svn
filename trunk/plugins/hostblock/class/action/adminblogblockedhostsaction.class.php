<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/view/adminblogblockedhostsview.class.php" );

    /**
     * Shows the list of hosts that have been blocked by the current blog
     */
    class AdminBlogBlockedHostsAction extends BlogOwnerAdminAction 
	{

        function AdminBlogBlockedHostsAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
            $this->_view = new AdminBlogBlockedHostsView( $this->_blogInfo );

            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
