<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/view/adminnewblockedhostview.class.php" );

    /**
     * Shows a form to add a new globally blocked host
     */
    class AdminNewBlockedHostAction extends SiteAdminAction
    {

    	function AdminNewBlockedHostAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        function perform()
        {
        	$this->_view = new AdminNewBlockedHostView( $this->_blogInfo );
            
            $this->setCommonData();

            return true;
        }
    }
?>
