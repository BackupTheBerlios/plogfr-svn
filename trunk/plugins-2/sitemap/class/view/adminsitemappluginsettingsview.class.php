<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class AdminSiteMapPluginSettingsView extends AdminPluginTemplatedView
	{

		function AdminSiteMapPluginSettingsView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "sitemap", "pluginsettings" );
		}
		
		function render()
		{
			// load some configuration settings
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_sitemap_enabled" );
			$notifyGoogle = $blogSettings->getValue( "plugin_sitemap_notify_google_enabled" );
			
			// create a view and export the settings to the template
			$this->setValue( "pluginEnabled", $pluginEnabled );		
			$this->setValue( "notifyGoogleEnabled", $notifyGoogle );		
			
			parent::render();
		}
	}
?>