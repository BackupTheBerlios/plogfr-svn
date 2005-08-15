<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginTopCommentPostsConfigView extends AdminPluginTemplatedView
	{

		function PluginTopCommentPostsConfigView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "topcommentposts", "topcommentposts" );
		}
		
		function render()
		{
			// load some configuration settings
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_topcommentposts_enabled" );
			$maxPosts = $blogSettings->getValue( "plugin_topcommentposts_maxposts" );
			if ($maxPosts == "") $maxPosts = 10;
			
			// create a view and export the settings to the template
			$this->setValue( "pluginEnabled", $pluginEnabled );
			$this->setValue( "maxPosts", $maxPosts );	
			
			parent::render();
		}
	}
?>