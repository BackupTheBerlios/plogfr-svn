<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/sitestatistics.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * This one only shows some statistics about the site...
     */
    class AdminSiteSettingsAction extends SiteAdminAction 
    {   
    	function AdminSiteSettingsAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        function perform()
        {
        	$this->_view = new AdminTemplatedView( $this->_blogInfo, "adminsettings" );

            // get some stupid statistics
            $stats = new SiteStatistics();
            $statistics = $stats->getAllStatistics();

            $this->_view->setValue( "stats", $statistics );

            $this->setCommonData();

            return true;
        }
    }
?>
