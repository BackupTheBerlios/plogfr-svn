<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/dao/filteredcontents.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class AdminEditBlogFilteredContentView extends AdminPluginTemplatedView
	{
        var $_contentId;
		
		function AdminEditBlogFilteredContentView( $blogInfo, $contentId )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "contentfilter", "editblogfilteredcontent" );
			
			$this->_contentId = $contentId;
		}
		
		function render()
		{
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_contentfilter_enabled" );
			
            $contents = new FilteredContents();
            $filteredContent = $contents->getBlogFilteredContent( $this->_contentId, $this->_blogInfo->getId());
            
            $this->setValue( "pluginEnabled", $pluginEnabled );
            $this->setValue( "filteredcontent", $filteredContent ); 
            
            if (!$pluginEnabled) {
                $locale = $this->_blogInfo->getLocale();
                $text = $locale->tr("error_contentfilter_not_enabled");
                $this->setErrorMessage( $text );
            }            
			
			parent::render();
		}
	}
?>