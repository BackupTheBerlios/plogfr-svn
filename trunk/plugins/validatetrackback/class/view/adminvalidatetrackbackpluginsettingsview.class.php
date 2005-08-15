<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class AdminValidateTrackbackPluginSettingsView extends AdminPluginTemplatedView
	{

		function AdminValidateTrackbackPluginSettingsView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "validatetrackback", "pluginsettings" );
		}
		
		function render()
		{
			// load some configuration settings
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_validatetrackback_enabled" );
			
			// create a view and export the settings to the template
			$this->setValue( "pluginEnabled", $pluginEnabled );		
			
			parent::render();
		}
	}
?>