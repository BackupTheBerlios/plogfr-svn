<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class AdminModeratePluginSettingsView extends AdminPluginTemplatedView
	{

		function AdminModeratePluginSettingsView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "moderate", "pluginsettings" );
		}
		
		function render()
		{
			// load some configuration settings
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_moderate_enabled" );
			
			// create a view and export the settings to the template
			$this->setValue( "pluginEnabled", $pluginEnabled );		
			
			parent::render();
		}
	}
?>