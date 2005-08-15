<?php

    include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/secret/class/security/secretitemfilter.class.php" );
    
    /**
     * implements secret posts and categories
     */
    class PluginSecret extends PluginBase
    {
        var $pluginEnabled;
        
        function PluginSecret()
        {
            $this->PluginBase();
            
            $this->id = "secret";
            $this->description = "This plugin offers the password protect to specific articles, unless user provide the right password or they can not see the articles.";
            $this->locales = Array( "en_UK" , "zh_TW" , "zh_CN" );
            $this->author = "The pLog Team";
            
            $this->init();
        }
                
        /**
         * registers all the filters and actions that we're going to use
         */
        function init()
        {
            // we only need to register a filter
            $this->registerFilter( "SecretItemFilter" );

			// register our action and menu entry
			$this->registerAdminAction( "pluginSecretSettings", "AdminSecretPluginSettingsAction" );
			$this->registerAdminAction( "pluginSecretUpdateSettings", "AdminSecretPluginUpdateSettingsAction" );			  
              
            // register our action and menu entry
            $menu =& Menu::getMenu();
            if( !$menu->entryExists( "/menu/controlCenter/manageSecurityPlugins" ))                     
                $this->addMenuEntry( "/menu/controlCenter", "manageSecurityPlugins", "", "", true, false );
            $this->addMenuEntry( "/menu/controlCenter/manageSecurityPlugins", "pluginSecretSettings", "admin.php?op=pluginSecretSettings", "", true, false );
        }

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
			$this->pluginEnabled = $blogSettings->getValue( "plugin_secret_enabled" );
		}

	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }        
    }  
?>