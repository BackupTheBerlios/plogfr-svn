<?php

	include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/moderate/class/dao/unmoderatedcomments.class.php" );
	
	/**
	 * implements moderation of comments
	 */
	class PluginModerate extends PluginBase
	{
        var $pluginEnabled;		
		
		function PluginModerate()
		{
			$this->PluginBase();
			
			$this->id = "moderate";
			$this->description = "Provides moderation of comments";
			$this->author = "The pLog Team";
			$this->locales = Array( "en_UK", "zh_TW", "es_ES" );
			
			$this->init();
		}
		
		/**
		 * process the events that we have registered
		 *
		 * @see PluginBase::process
		 * @see PluginManager
		 */
		function process( $eventType, $params )
		{
		    // make sure we're processing the right event!
		    if( $eventType != EVENT_PRE_COMMENT_ADD ) 
		      return true;
			  
			// do nothing if the plugin is not enabled!
			$blogSettings = $this->blogInfo->getSettings();
			if( !$blogSettings->getValue( "plugin_moderate_enabled" ))
				return true;
			  
			// change the stauts of the comment, as is easy as it seems...
			$comment = $params["comment"];
			$comment->setStatus( COMMENT_STATUS_UNMODERATED );
			$params["comment"] = $comment;
		      
			return true;
		}
		
		/**
		 * registers all the filters and actions that we're going to use
		 */
		function init()
		{			
			// register the events we want
			$this->registerNotification( EVENT_PRE_COMMENT_ADD );
			
			// register an action that will allow users to see which comments have not been
			// accepted yet
			$this->registerAdminAction( "unmoderatedComments", "AdminUnmoderatedCommentsAction" );
			$this->registerAdminAction( "updateUnmoderatedComment", "AdminUpdateUnmoderatedCommentsAction" );
			$this->registerAdminAction( "updateUnmoderatedComments", "AdminUpdateUnmoderatedCommentsAction" );
			$this->registerAdminAction( "moderatePluginSettings", "AdminModeratePluginSettingsAction" );
			$this->registerAdminAction( "moderatePluginUpdateSettings", "AdminModeratePluginUpdateSettingsAction" );
			
			// add a menu entry
			$this->addMenuEntry( "/menu/Manage/managePosts", "unmoderatedComments", "admin.php?op=unmoderatedComments", "", false, false );

			$menu =& Menu::getMenu();
            if( !$menu->entryExists( "/menu/controlCenter/manageAntiSpamPlugins" ))                     
                $this->addMenuEntry( "/menu/controlCenter", "manageAntiSpamPlugins", "", "", true, false );
            $this->addMenuEntry( "/menu/controlCenter/manageAntiSpamPlugins", "moderatePluginSettings", "admin.php?op=moderatePluginSettings", "", true, false );
		}

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
			$this->pluginEnabled = $blogSettings->getValue( "plugin_moderate_enabled" );
		}

	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }		
	}  
?>