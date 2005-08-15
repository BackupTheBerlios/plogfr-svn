<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class AdminNewBlogFilteredContentView extends AdminPluginTemplatedView
	{

		function AdminNewBlogFilteredContentView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "contentfilter", "addblogfilteredcontent" );
		}
		
		function render()
		{
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_contentfilter_enabled" );

            $this->setValue( "pluginEnabled", $pluginEnabled );

            if (!$pluginEnabled) {
                $locale = $this->_blogInfo->getLocale();
                $text = $locale->tr("error_contentfilter_not_enabled");
                $this->setErrorMessage( $text );
            } 
        	// get the content that has been filtered by this blog
			parent::render();
		}
	}
?>