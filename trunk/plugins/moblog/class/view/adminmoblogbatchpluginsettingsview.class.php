<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryalbums.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );
	
	/**
	 * loads and displays the plugin settings
	 */
	class AdminMoblogBatchPluginSettingsView extends AdminPluginTemplatedView
	{
		function AdminMoblogBatchPluginSettingsView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "moblog", "moblogbatchsettings" );
		}
		
		function render()
		{
			// load some configuration settings
			$config =& Config::getConfig();
			$mailServer = $config->getValue( "plugin_moblog_mailserver" );
			$port = $config->getValue( "plugin_moblog_port" );
			if ($port == "") $port = "110";
			$userName = $config->getValue( "plugin_moblog_username" );
			$password = $config->getValue( "plugin_moblog_password" );
			$pseudoBatch = $config->getValue( "plugin_moblog_pseudobatch" );
			if ($pseudoBatch == "") $pseudoBatch = "Off";
			$lastUpdate = $config->getValue( "plugin_moblog_lastupdate" );			
			
			// create a view and export the settings to the template
			$this->setValue( "mailServer", $mailServer );
			$this->setValue( "port", $port );
			$this->setValue( "userName", $userName );
			$this->setValue( "password", $password );
			$this->setValue( "pseudoBatch", $pseudoBatch );
			$this->setValue( "lastUpdate", $lastUpdate );
			
			parent::render();
		}
	}
?>