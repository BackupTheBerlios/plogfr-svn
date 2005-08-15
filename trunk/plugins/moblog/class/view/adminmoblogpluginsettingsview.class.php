<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryalbums.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );
	
	/**
	 * loads and displays the plugin settings
	 */
	class AdminMoblogPluginSettingsView extends AdminPluginTemplatedView
	{
	
		var $_userInfo;
	
		function AdminMoblogPluginSettingsView( $blogInfo, $userInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "moblog", "pluginsettings" );
			
			$this->_userInfo = $userInfo;
		}
		
		function render()
		{
			// fetch the current settings
			$blogSettings = $this->_blogInfo->getSettings();			
			$pluginEnabled = $blogSettings->getValue( "plugin_moblog_enabled" );
			$categoryId = $blogSettings->getValue( "plugin_moblog_article_category_id" );
			$albumId = $blogSettings->getValue( "plugin_moblog_gallery_resource_album_id" );
			$resourcePreviewType = $blogSettings->getValue( "plugin_moblog_resource_preview_type" );

			// fetch all the current article categories
			$categories = new ArticleCategories();
			$blogCategories = $categories->getBlogCategories( $this->_blogInfo->getId());
			// fetch all the current gallery albums
			$albums = new GalleryAlbums();
			$blogAlbums = $albums->getUserAlbums( $this->_blogInfo->getId());					
			
			// finally pass all these things to the templates
			$this->setValue( "pluginEnabled", $pluginEnabled );			
			$this->setValue( "categoryId", $categoryId );
			$this->setValue( "albumId", $albumId );
			$this->setValue( "albums", $blogAlbums );
			$this->setValue( "categories", $blogCategories );
			$this->setValue( "resourcePreviewType", $resourcePreviewType );						
		
			parent::render();
		}
	}
?>