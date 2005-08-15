<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/sitemap/class/view/adminsitemappluginsettingsview.class.php" ); 

    class AdminSiteMapPluginUpdateSettingsAction extends BlogOwnerAdminAction 
	{
	
		var $_pluginEnabled;
		var $_notifyGoogle;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminSiteMapPluginUpdateSettingsAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }
		
		function validate()
		{
            $this->_pluginEnabled = $this->_request->getValue( "pluginEnabled" );
            $this->_pluginEnabled = ($this->_pluginEnabled != "" );	
            
            $this->_notifyGoogle = $this->_request->getValue( "notifyGoogleEnabled" );
            $this->_notifyGoogle = ($this->_notifyGoogle != "" );	
			
			return true;
		}
		
        /**
         * Carries out the specified action
         */
        function perform()
        {
            // update the plugin configurations to blog setting
			$blogSettings = $this->_blogInfo->getSettings();
            $blogSettings->setValue( "plugin_sitemap_enabled", $this->_pluginEnabled );
            $blogSettings->setValue( "plugin_sitemap_notify_google_enabled", $this->_notifyGoogle );
            $this->_blogInfo->setSettings( $blogSettings ); 
		
			// save the blogs settings
			$blogs = new Blogs();
            if( !$blogs->updateBlog( $this->_blogInfo->getId(), $this->_blogInfo )) {
                $this->_view = new AdminSiteMapPluginSettingsView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_settings"));
                $this->setCommonData();

                return false;                       
            }
			
			// if everything went ok...
            $this->_blogInfo->setSettings( $blogSettings );
            $this->_session->setValue( "blogInfo", $this->_blogInfo );
            $this->saveSession();
			
			$this->_view = new AdminSiteMapPluginSettingsView( $this->_blogInfo );
			$this->_view->setSuccessMessage( $this->_locale->tr("sitemap_settings_saved_ok"));			
			$this->setCommonData();
			
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());					
            
            return true;		
        }
    }
?>
