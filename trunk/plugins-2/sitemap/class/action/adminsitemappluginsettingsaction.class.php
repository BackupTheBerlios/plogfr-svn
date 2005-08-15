<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/sitemap/class/view/adminsitemappluginsettingsview.class.php" ); 

    class AdminSiteMapPluginSettingsAction extends BlogOwnerAdminAction 
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminSiteMapPluginSettingsAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
			$this->_view = new AdminSiteMapPluginSettingsView( $this->_blogInfo );

            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
