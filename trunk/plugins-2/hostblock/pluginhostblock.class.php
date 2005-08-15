<?php

	include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/hostblock/class/security/hostsblacklist.class.php" );
	
	/**
	 * events that this plugin generates
	 */
	define( "EVENT_PRE_BLOCK_HOST_ADD", 600 );
	define( "EVENT_POST_BLOCK_HOST_ADD", 601 );
	define( "EVENT_PRE_BLOCK_HOST_DELETE", 602 );
	define( "EVENT_POST_BLOCK_HOST_DELETE", 603 );
	define( "EVENT_PRE_BLOCK_HOST_UPDATE", 604 );
	define( "EVENT_POST_BLOCK_HOST_UPDATE", 605 );
	
	
	/**
	 * implements host blocking features
	 */
	class PluginHostBlock extends PluginBase
	{
	    var $pluginEnabled;
		
		function PluginHostBlock()
		{
			$this->PluginBase();
			
			$this->id = "hostblock";
			$this->description = "Allows to block hosts";
			$this->author = "The pLog Team";
			$this->locales = Array( "en_UK" , "zh_TW" , "zh_CN" );
			
			$this->init();
		}
		
		/**
		 * registers all the filters and actions that we're going to use
		 */
		function init()
		{
			// register the filter
			$this->registerFilter( "HostsBlackList" );

			// register the superadmin actions
			$this->registerAdminAction( "blockedHosts", "AdminBlockedHostsAction" );
			$this->registerAdminAction( "newBlockedHost", "AdminNewBlockedHostAction" );
			$this->registerAdminAction( "addBlockedHost", "AdminAddBlockedHostAction" );
			$this->registerAdminAction( "editBlockedHost", "AdminEditBlockedHostAction" );
			$this->registerAdminAction( "updateBlockedHost", "AdminUpdateBlockedHostAction" );
			$this->registerAdminAction( "deleteBlockedHost", "AdminDeleteBlockedHostAction" );
			$this->registerAdminAction( "deleteBlockedHosts", "AdminDeleteBlockedHostAction" );

			// register the blog owner actions
			$this->registerAdminAction( "blogBlockHostFromPosting", "AdminBlogBlockHostFromPostingAction" );
			$this->registerAdminAction( "blogBlockedHosts", "AdminBlogBlockedHostsAction" );
			$this->registerAdminAction( "newBlogBlockedHost", "AdminNewBlogBlockedHostAction" );
			$this->registerAdminAction( "addBlogBlockedHost", "AdminAddBlogBlockedHostAction" );
			$this->registerAdminAction( "editBlogBlockedHost", "AdminEditBlogBlockedHostAction" );
			$this->registerAdminAction( "updateBlogBlockedHost", "AdminUpdateBlogBlockedHostAction" );
			$this->registerAdminAction( "deleteBlogBlockedHost", "AdminDeleteBlogBlockedHostAction" );
			$this->registerAdminAction( "deleteBlogBlockedHosts", "AdminDeleteBlogBlockedHostAction" );

			// register the plugin settings actions
			$this->registerAdminAction( "blockedHostSettings", "AdminBlockedHostSettingsAction" );
			$this->registerAdminAction( "updateBlockedHostSettings", "AdminUpdateBlockedHostSettingsAction" );
			
			// register the menu entries, but the first one is only registered if it hasn't been
			// created yet
			$menu =& Menu::getMenu();
			if( !$menu->entryExists( "/menu/Manage/blogSecurity" ))						
				$this->addMenuEntry( "/menu/Manage", "blogSecurity", "", "", true, false );
			$this->addMenuEntry( "/menu/Manage/blogSecurity", "blogBlockedHosts", "admin.php?op=blogBlockedHosts", "blogBlockedHosts", true, false );
			$this->addMenuEntry( "/menu/Manage/blogSecurity", "newBlogBlockedHost", "admin.php?op=newBlogBlockedHost", "newBlogBlockedHost", true, false );

			if( !$menu->entryExists( "/menu/adminSettings/siteSecurity" ))			
				$this->addMenuEntry( "/menu/adminSettings", "siteSecurity", "", "", true, false );			
            $this->addMenuEntry( "/menu/adminSettings/siteSecurity", "blockedHosts", "admin.php?op=blockedHosts", "blockedHosts", false, true );
            $this->addMenuEntry( "/menu/adminSettings/siteSecurity", "newBlockedHost", "admin.php?op=newBlockedHost", "newBlockedHost", false, true );			

            if( !$menu->entryExists( "/menu/controlCenter/manageSecurityPlugins" ))                     
                $this->addMenuEntry( "/menu/controlCenter", "manageSecurityPlugins", "", "", true, false );
            $this->addMenuEntry( "/menu/controlCenter/manageSecurityPlugins", "blockedHostSettings", "admin.php?op=blockedHostSettings", "", true, false );
		}

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
			$this->pluginEnabled = $blogSettings->getValue( "plugin_hostblock_enabled" );
		}

	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }		
	}  
?>