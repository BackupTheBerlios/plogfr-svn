<?php

    include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
    
    /**
     * Shows the main initial screen of the Port Plugin
     */
    class AdminPluginPortConfigAction extends SiteAdminAction 
    {
    
        function AdminPluginPortConfigAction ( $actionInfo, $request )
        {
            $this->SiteAdminAction( $actionInfo, $request );
        }
        
        function perform()
        {
	    // load template for initial configuration, let the other actions handle
	    // the actual 'porting.'
	    $this->_view = new AdminPluginTemplatedView( $this->_blogInfo, "port", "pluginsettings" );
	    $this->setCommonData();
	    // everything ok, return true
            return true;
        }
    }
?>