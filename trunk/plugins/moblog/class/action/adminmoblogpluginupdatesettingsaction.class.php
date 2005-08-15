<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/moblog/class/view/adminmoblogpluginsettingsview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/moblog/class/moblog/moblogconstants.properties.php" );

	class AdminMoblogPluginUpdateSettingsAction extends BlogOwnerAdminAction
	{
	
	   var $_pluginEnabled;

		function AdminMoblogPluginUpdateSettingsAction( $actionInfo, $request )
		{
			$this->BlogOwnerAdminAction( $actionInfo, $request );
		}
	
		function validate()
		{
		    $this->_pluginEnabled = $this->_request->getValue( "pluginEnabled" );
			$this->_categoryId = $this->_request->getValue( "categoryId" );
			$this->_albumId = $this->_request->getValue( "albumId" );
			$this->_password = $this->_request->getValue( "password" );
			// check how images should be embedded
			$this->_previewType = $this->_request->getValue( "resourcePreviewType" );
			if( $this->_previewType < MOBLOG_EMBED_SMALL_PREVIEW ||
			    $this->_previewType > MOBLOG_EMBED_FULL_SIZE )
			    $this->_previewType = MOBLOG_EMBED_SMALL_PREVIEW;		    

			return true;
		}

		function perform()
		{		
			// save the settings
			$blogSettings = $this->_blogInfo->getSettings();
			$blogSettings->setValue( "plugin_moblog_article_category_id", $this->_categoryId );
			$blogSettings->setValue( "plugin_moblog_gallery_resource_album_id", $this->_albumId );
			$blogSettings->setValue( "plugin_moblog_resource_preview_type", $this->_previewType );					
			$blogSettings->setValue( "plugin_moblog_enabled", $this->_pluginEnabled );
			// update the settings in the database *and* in the session, otherwise we will
			// keep using the old settings!!
			$blogs = new Blogs();
			$this->_blogInfo->setSettings( $blogSettings );
			$blogs->updateBlogSettings( $this->_blogInfo->getId(), $this->_blogInfo->getSettings());
			$this->_session->setValue( "blogInfo", $this->_blogInfo );
			$this->saveSession();

			// show an informative message
			$this->_view = new AdminMoblogPluginSettingsView( $this->_blogInfo, $this->_userInfo );
			$this->_view->setSuccessMessage( $this->_locale->tr("atom_plugin_settings_saved_ok"));
			$this->setCommonData();
		
			return true;
		}
	}
?>