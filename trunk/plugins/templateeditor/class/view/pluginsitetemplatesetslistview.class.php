<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesets.class.php" );	

	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginSiteTemplateSetsListView extends AdminPluginTemplatedView
	{

		function PluginSiteTemplateSetsListView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "templateeditor", "sitetemplatesetslist" );
		}
		
		function render()
		{
			// get a list with all the global template sets
        	$ts = new TemplateSets();
            $globalTemplates = $ts->getGlobalTemplateSets();
            
            // Add rss & summary templateset to beginning of templatesets
            $rssTemplate =& new TemplateSet( "rss", TEMPLATE_SET_GLOBAL, 0);
            $summaryTemplate =& new TemplateSet( "summary", TEMPLATE_SET_GLOBAL, 0);
            array_unshift( $globalTemplates, $rssTemplate, $summaryTemplate );
            
            $this->setValue( "templates", $globalTemplates );
		
			parent::render();
		}
	}
?>