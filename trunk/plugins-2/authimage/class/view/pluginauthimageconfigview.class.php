<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/authimage/class/authimage/authimage.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginAuthImageConfigView extends AdminPluginTemplatedView
	{

		function PluginAuthImageConfigView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "authimage", "authimage" );
		}
		
		function render()
		{
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_authimage_enabled" );
			$length = $blogSettings->getValue( "plugin_authimage_length" );
			if ($length == "") $length = 6;
			$key = $blogSettings->getValue( "plugin_authimage_key" );
			if ($key == "") $key = "pLog";
			$expiredTime = $blogSettings->getValue( "plugin_authimage_expiredtime" );
			if ($expiredTime == "") $expiredTime = 3600;	
			$default = $blogSettings->getValue( "plugin_authimage_default" );
			if ($default == "") $default = "marble.gif";

			$backgrounds = AuthImage::scanBackgoundImages();
			
			// create a view and export the settings to the template
			$this->setValue( "pluginEnabled", $pluginEnabled );
			$this->setValue( "length", $length );
			$this->setValue( "key", $key );
			$this->setValue( "expiredTime", $expiredTime );
			$this->setValue( "default", $default );
			$this->setValue( "backgrounds", $backgrounds );
			
			parent::render();
		}
	}
?>