<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginRememberCommentDataConfigView extends AdminPluginTemplatedView
	{

		function PluginRememberCommentDataConfigView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "remembercommentdata", "remembercommentdata" );
		}

		function render()
		{
			// load some configuration settings
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_remembercommentdata_enabled" );

			// create a view and export the settings to the template
			$this->setValue( "pluginEnabled", $pluginEnabled );

			parent::render();
		}
	}
?>