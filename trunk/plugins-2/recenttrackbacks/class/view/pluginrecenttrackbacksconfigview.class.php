<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginRecentTrackbacksConfigView extends AdminPluginTemplatedView
	{

		function PluginRecentTrackbacksConfigView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "recenttrackbacks", "recenttrackbacks" );
		}
		
		function render()
		{
			// load some configuration settings
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_recenttrackbacks_enabled" );
			$maxTrackbacks = $blogSettings->getValue( "plugin_recenttrackbacks_maxtrackbacks" );
			if ($maxTrackbacks == "") $maxTrackbacks = 10;
			
			// create a view and export the settings to the template
			$this->setValue( "pluginEnabled", $pluginEnabled );
			$this->setValue( "maxTrackbacks", $maxTrackbacks );
			
			parent::render();
		}
	}
?>