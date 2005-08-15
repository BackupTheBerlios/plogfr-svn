<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginRecentCommentsConfigView extends AdminPluginTemplatedView
	{

		function PluginRecentCommentsConfigView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "recentcomments", "recentcomments" );
		}
		
		function render()
		{
			// load some configuration settings
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_recentcomments_enabled" );
			$maxComments = $blogSettings->getValue( "plugin_recentcomments_maxcomments" );
			if ($maxComments == "") $maxComments = 10;
			
			// create a view and export the settings to the template
			$this->setValue( "pluginEnabled", $pluginEnabled );
			$this->setValue( "maxComments", $maxComments );		
			
			parent::render();
		}
	}
?>