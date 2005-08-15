<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesets.class.php" );	

	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginBlogTemplateSetsListView extends AdminPluginTemplatedView
	{

		function PluginBlogTemplateSetsListView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "templateeditor", "blogtemplatesetslist" );
		}
		
		function render()
		{
        	$ts = new TemplateSets();
            // get a list with all the site template sets
            $globalTemplateSets = $ts->getGlobalTemplateSets();

			// get a list with all the blog template sets
            $blogTemplateSets = $ts->getBlogTemplateSets( $this->_blogInfo->getId(), false );
            
            $this->setValue( "globalTemplateSets", $globalTemplateSets );
            $this->setValue( "blogTemplateSets", $blogTemplateSets );
		
			parent::render();
		}
	}
?>