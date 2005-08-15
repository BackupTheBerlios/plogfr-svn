<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginNoFollowConfigView extends AdminPluginTemplatedView
	{

		function PluginNoFollowConfigView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "nofollow", "nofollow" );
		}
		
		function render()
		{
			// load some configuration settings
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_nofollow_enabled" );
			
			// create a view and export the settings to the template
			$this->setValue( "pluginEnabled", $pluginEnabled );		
			
			parent::render();
		}
	}
?>