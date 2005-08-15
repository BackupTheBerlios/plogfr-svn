<?php

	include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/security/contentfilter.class.php" );
	
	/**
	 * events that this plugin generates
	 */
	define( "EVENT_PRE_FILTERED_CONTENT_ADD", 500 );
	define( "EVENT_POST_FILTERED_CONTENT_ADD", 501 );
	define( "EVENT_PRE_FILTERED_CONTENT_DELETE", 502 );
	define( "EVENT_POST_FILTERED_CONTENT_DELETE", 503 );
	define( "EVENT_PRE_FILTERED_CONTENT_UPDATE", 504 );
	define( "EVENT_POST_FILTERED_CONTENT_UPDATE", 505 );
	
	/**
	 * implements host blocking features
	 */
	class PluginContentFilter extends PluginBase
	{
        var $pluginEnabled;	
	
		function PluginContentFilter()
		{
			$this->PluginBase();
			
			$this->id = "contentfilter";
			$this->description = "This plugin offers you to filter specific content when comment submitted.";
			$this->author = "The pLog Team";
			$this->locales = Array( "en_UK", "zh_TW" , "zh_CN" );
			
			$this->init();
		}
		
		/**
		 * registers all the filters and actions that we're going to use
		 */
		function init()
		{
			// register the filter
			$this->registerFilter( "ContentFilter" );
	
			// register the superadmin actions
			$this->registerAdminAction( "filteredContent", "AdminFilteredContentAction" );
			$this->registerAdminAction( "newFilteredContent", "AdminNewFilteredContentAction" );
			$this->registerAdminAction( "addFilteredContent", "AdminAddFilteredContentAction" );			
			$this->registerAdminAction( "editFilteredContent", "AdminEditFilteredContentAction" );
			$this->registerAdminAction( "updateFilteredContent", "AdminUpdateFilteredContentAction" );
			$this->registerAdminAction( "deleteFilteredContent", "AdminDeleteFilteredContentAction" );
			$this->registerAdminAction( "deleteFilteredContents", "AdminDeleteFilteredContentAction" );
			
			// register the blog owner actions
			$this->registerAdminAction( "blogFilteredContent", "AdminBlogFilteredContentsAction" );
			$this->registerAdminAction( "newBlogFilteredContent", "AdminNewBlogFilteredContentAction" );
			$this->registerAdminAction( "addBlogFilteredContent", "AdminAddBlogFilteredContentAction" );
			$this->registerAdminAction( "editBlogFilteredContent", "AdminEditBlogFilteredContentAction" );
			$this->registerAdminAction( "updateBlogFilteredContent", "AdminUpdateBlogFilteredContentAction" );
			$this->registerAdminAction( "deleteBlogFilteredContent", "AdminDeleteBlogFilteredContentAction" );
			$this->registerAdminAction( "deleteBlogFilteredContents", "AdminDeleteBlogFilteredContentAction" );

			// register the plugin settings actions
			$this->registerAdminAction( "filteredContentSettings", "AdminFilteredContentSettingsAction" );
			$this->registerAdminAction( "updateFilteredContentSettings", "AdminUpdateFilteredContentSettingsAction" );
			
			$menu =& Menu::getMenu();

			if( !$menu->entryExists( "/menu/Manage/blogSecurity" ))
				$this->addMenuEntry( "/menu/Manage", "blogSecurity", "", "", true, false );
            $this->addMenuEntry( "/menu/Manage/blogSecurity", "blogFilteredContent", "admin.php?op=blogFilteredContent", "blogFilteredContent", true, false );
            $this->addMenuEntry( "/menu/Manage/blogSecurity", "newBlogFilteredContent", "admin.php?op=newBlogFilteredContent", "newBlogFilteredContent", true, false );	

			if( !$menu->entryExists( "/menu/adminSettings/siteSecurity" ))
				$this->addMenuEntry( "/menu/adminSettings", "siteSecurity", "", "", true, false );
			$this->addMenuEntry( "/menu/adminSettings/siteSecurity", "filteredContent", "admin.php?op=filteredContent", "filteredContent", false, true );
			$this->addMenuEntry( "/menu/adminSettings/siteSecurity", "newFilteredContent", "admin.php?op=newFilteredContent", "newFilteredContent", false, true );

            if( !$menu->entryExists( "/menu/controlCenter/manageSecurityPlugins" ))                     
                $this->addMenuEntry( "/menu/controlCenter", "manageSecurityPlugins", "", "", true, false );
            $this->addMenuEntry( "/menu/controlCenter/manageSecurityPlugins", "filteredContentSettings", "admin.php?op=filteredContentSettings", "", true, false );
		}

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
			$this->pluginEnabled = $blogSettings->getValue( "plugin_contentfilter_enabled" );
		}

	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }		
	}  
?>