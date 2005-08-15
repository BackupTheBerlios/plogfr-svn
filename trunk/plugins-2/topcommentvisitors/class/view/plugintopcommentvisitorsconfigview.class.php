<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginTopCommentVisitorsConfigView extends AdminPluginTemplatedView
	{

		function PluginTopCommentVisitorsConfigView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "topcommentvisitors", "topcommentvisitors" );
		}
		
		function render()
		{
			// load some configuration settings
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_topcommentvisitors_enabled" );
			$maxVisitors = $blogSettings->getValue( "plugin_topcommentvisitors_maxvisitors" );
			if ($maxVisitors == "") $maxVisitors = 10;
			
			// create a view and export the settings to the template
			$this->setValue( "pluginEnabled", $pluginEnabled );
			$this->setValue( "maxVisitors", $maxVisitors );
			
			parent::render();
		}
	}
?>