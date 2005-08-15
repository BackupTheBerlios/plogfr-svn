<?php
	include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
	include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );

	class PluginRememberCommentData extends PluginBase
	{
		var $pluginEnabled;

		function PluginRememberCommentData()
		{
			$this->PluginBase();

			$this->id      = "remembercommentdata";
			$this->author  = "Andres Bianciotto";
			$this->desc    = "Fills the comment form fields with last entered data (cookie based)";

			$this->locales = Array( "en_UK" , "es_ES" );

			$this->init();
		}

		function init()
		{
            $this->registerAdminAction( "remembercommentdata", "PluginRememberCommentDataConfigAction" );
			$this->registerAdminAction( "updateRememberCommentDataConfig", "PluginRememberCommentDataUpdateConfigAction" );

			$menu =& Menu::getMenu();
			if( !$menu->entryExists( "/menu/controlCenter/manageAppearancePlugins" ))
				$this->addMenuEntry( "/menu/controlCenter", "manageAppearancePlugins", "", "", true, false );
            $this->addMenuEntry( "/menu/controlCenter/manageAppearancePlugins", "RememberCommentData", "?op=remembercommentdata", "" );
		}

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
			$this->pluginEnabled = $blogSettings->getValue( "plugin_remembercommentdata_enabled" );
		}

	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }

		function show()
		{
		    $rg = $this->blogInfo->getBlogRequestGenerator();
            $baseUrl = $rg->getBaseUrl();
            $retValue = "<script src=\"$baseUrl/plugins/remembercommentdata/js/remembercommentdata.js\" language=\"JavaScript\" type=\"text/javascript\"></script>";
		    return $retValue;
		}

	}
?>