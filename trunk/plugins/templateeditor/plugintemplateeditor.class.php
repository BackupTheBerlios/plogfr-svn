<?php
	include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
	include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );

	class PluginTemplateEditor extends PluginBase
	{
		var $pluginEnabled;
		
		function PluginTemplateEditor()
		{
			$this->PluginBase();

			$this->id      = "templateeditor";
			$this->author  = "Mark Wu";
			$this->desc    = "The plugin offer online template editor function for pLog";

            $config =& Config::getConfig();
            $this->pluginEnabled = $config->getValue( "plugin_templateeditor_enabled" );

			$this->locales = Array( "en_UK" , "zh_TW" , "zh_CN", "es_ES" );

			$this->init();
		}

		function init()
		{
            $this->registerAdminAction( "siteTemplateSetsList", "PluginSiteTemplateSetsListAction" );
            $this->registerAdminAction( "siteDeleteTemplateSet", "PluginSiteDeleteTemplateSetsAction" );
            $this->registerAdminAction( "siteDeleteTemplateSets", "PluginSiteDeleteTemplateSetsAction" );
            $this->registerAdminAction( "siteCopyTemplateSet", "PluginSiteCopyTemplateSetAction" );
            $this->registerAdminAction( "siteArchiveTemplateSet", "PluginSiteArchiveTemplateSetAction" );
            $this->registerAdminAction( "siteTemplatesList", "PluginSiteTemplatesListAction" );
            $this->registerAdminAction( "siteDeleteTemplateFile", "PluginSiteDeleteTemplateFilesAction" );
            $this->registerAdminAction( "siteDeleteTemplateFiles", "PluginSiteDeleteTemplateFilesAction" );
            $this->registerAdminAction( "siteCopyTemplateFile", "PluginSiteCopyTemplateFileAction" );
            $this->registerAdminAction( "siteEditTemplateFile", "PluginSiteEditTemplateFileAction" );
            $this->registerAdminAction( "siteUpdateTemplateFile", "PluginSiteUpdateTemplateFileAction" );
            $this->registerAdminAction( "siteUploadTemplateFile", "PluginSiteUploadTemplateFileAction" );

            $this->registerAdminAction( "blogTemplateSetsList", "PluginBlogTemplateSetsListAction" );
            $this->registerAdminAction( "blogDeleteTemplateSet", "PluginBlogDeleteTemplateSetsAction" );
            $this->registerAdminAction( "blogDeleteTemplateSets", "PluginBlogDeleteTemplateSetsAction" );
            $this->registerAdminAction( "blogCopyTemplateSet", "PluginBlogCopyTemplateSetAction" );
            $this->registerAdminAction( "blogArchiveTemplateSet", "PluginBlogArchiveTemplateSetAction" );
            $this->registerAdminAction( "blogTemplatesList", "PluginBlogTemplatesListAction" );
            $this->registerAdminAction( "blogDeleteTemplateFile", "PluginBlogDeleteTemplateFilesAction" );
            $this->registerAdminAction( "blogDeleteTemplateFiles", "PluginBlogDeleteTemplateFilesAction" );
            $this->registerAdminAction( "blogCopyTemplateFile", "PluginBlogCopyTemplateFileAction" );
            $this->registerAdminAction( "blogEditTemplateFile", "PluginBlogEditTemplateFileAction" );
            $this->registerAdminAction( "blogUpdateTemplateFile", "PluginBlogUpdateTemplateFileAction" );
            $this->registerAdminAction( "blogUploadTemplateFile", "PluginBlogUploadTemplateFileAction" );
            
            $this->registerAdminAction( "templateEditorConfig", "PluginTemplateEditorConfigAction" );
            $this->registerAdminAction( "updateTemplateEditorConfig", "PluginTemplateEditorUpdateConfigAction" );
			
			$this->addMenuEntry( "/menu/adminSettings/Templates", "SiteTemplateEditor", "admin.php?op=siteTemplateSetsList", "" );
			$this->addMenuEntry( "/menu/adminSettings/Templates", "TemplateEditorConfig", "admin.php?op=templateEditorConfig", "" );
			
			if ($this->pluginEnabled) {
			    $this->addMenuEntry( "/menu/controlCenter/manageBlogTemplates", "BlogTemplateEditor", "admin.php?op=blogTemplateSetsList", "" );
    	    }
		}
	}
?>