<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/dao/filteredcontents.class.php" );	

	/**
	 * implements the main view of the feed reader plugin
	 */
	class AdminBlogFilteredContentView extends AdminPluginTemplatedView
	{

		function AdminBlogFilteredContentView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "contentfilter", "blogfilteredcontent" );
		}
		
		function render()
		{
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_contentfilter_enabled" );

        	// get the content that has been filtered by this blog
            $filteredContents = new FilteredContents();
            $blogFilteredContents = $filteredContents->getBlogFilteredContents( $this->_blogInfo->getId());

            $this->setValue( "pluginEnabled", $pluginEnabled );
            $this->setValue( "filteredcontent", $blogFilteredContents );

            if (!$pluginEnabled) {
                $locale = $this->_blogInfo->getLocale();
                $text = $locale->tr("error_contentfilter_not_enabled");
                $this->setErrorMessage( $text );
            }            
			
			parent::render();
		}
	}
?>