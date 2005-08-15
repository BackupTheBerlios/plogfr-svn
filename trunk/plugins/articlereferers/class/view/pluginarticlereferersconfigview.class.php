<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginArticleReferersConfigView extends AdminPluginTemplatedView
	{

		function PluginArticleReferersConfigView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "articlereferers", "articlereferers" );
		}
		
		function render()
		{
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_articlereferers_enabled" );
			$sortByField = $blogSettings->getValue( "plugin_articlereferers_sortbyfield" );
			if ($sortByField == "") $sortByField = 1;
			$maxReferers = $blogSettings->getValue( "plugin_articlereferers_maxreferers" );
			if ($maxReferers == "") $maxReferers = 10;
			
			// create a view and export the settings to the template
			$this->setValue( "pluginEnabled", $pluginEnabled );
			$this->setValue( "sortByField", $sortByField );
			$this->setValue( "maxReferers", $maxReferers );			
			
			parent::render();
		}
	}
?>