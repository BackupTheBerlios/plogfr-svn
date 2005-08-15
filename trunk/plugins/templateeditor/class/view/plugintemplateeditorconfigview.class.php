<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginTemplateEditorConfigView extends AdminPluginTemplatedView
	{

		function PluginTemplateEditorConfigView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "templateeditor", "pluginsettings" );
		}
		
		function render()
		{
			// load some configuration settings
			$config =& Config::getConfig();
			$pluginEnabled = $config->getValue( "plugin_templateeditor_enabled" );
			$maxBackupFiles = $config->getValue( "plugin_templateeditor_maxbackupfiles" );
			if ($maxBackupFiles == "") $maxBackupFiles = 5;
			$allowedExtension = $config->getValue( "plugin_templateeditor_allowedextension" );
            if ($allowedExtension == "") $allowedExtension = "css,inc,template,txt";
			
			// create a view and export the settings to the template
			$this->setValue( "pluginEnabled", $pluginEnabled );
			$this->setValue( "maxBackupFiles", $maxBackupFiles );		
			$this->setValue( "allowedExtension", $allowedExtension );
			
			parent::render();
		}
	}
?>