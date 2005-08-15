<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/moderate/class/dao/unmoderatedcomments.class.php" );	

	/**
	 * implements the main view of the feed reader plugin
	 */
	class AdminUnmoderatedCommentsview extends AdminPluginTemplatedView
	{

		function AdminUnmoderatedCommentsview( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "moderate", "unmoderatedcomments" );
		}
		
		function render()
		{
			// load some configuration settings
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_moderate_enabled" );

			// fetch the comments that have not been moderated yet
			$comments = new UnmoderatedComments();
			$unmoderatedComments = $comments->getUnmoderatedComments( $this->_blogInfo->getId());			
			
			// create a view and export the settings to the template
			$this->setValue( "pluginEnabled", $pluginEnabled );
			$this->setValue( "comments", $unmoderatedComments );

            if (!$pluginEnabled) {
                $locale = $this->_blogInfo->getLocale();
                $text = $locale->tr("error_moderate_not_enabled");
                $this->setErrorMessage( $text );
            }  						
			
			parent::render();
		}
	}
?>