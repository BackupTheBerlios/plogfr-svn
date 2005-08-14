<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesets.class.php" );
	include_once( PLOG_CLASS_PATH."class/locale/locales.class.php" );
	
    /**
     * \ingroup View
     * @private
     *
	 * displays the blog settings
	 */
	class AdminBlogSettingsView extends AdminTemplatedView
	{
	
		function AdminBlogSettingsView( $blogInfo )
		{
			$this->AdminTemplatedView( $blogInfo, "blogsettings" );
			
			$blogs = new Blogs();
            $blogSettings = $blogs->getBlogSettings( $this->_blogInfo->getId());
			$this->setValue( "blogAbout", $this->_blogInfo->getAbout());
			$this->setValue( "blogName", $this->_blogInfo->getBlog());
            $this->setValue( "blogLocale", $blogSettings->getValue( "locale" ));
			$this->setValue( "blogMaxRecentItems", $blogSettings->getValue( "recent_posts_max" ));
			$this->setValue( "blogMaxMainPageItems", $blogSettings->getValue( "show_posts_max" ));
			$this->setValue( "blogTemplate", $blogSettings->getValue( "template" ));
			$this->setValue( "blogTimeOffset", $blogSettings->getValue( "time_offset" ));
			$this->setValue( "blogCategoriesOrder", $blogSettings->getValue( "categories_order" ));
			$this->setValue( "blogLinkCategoriesOrder", $blogSettings->getValue( "link_categories_order" ));
			$this->setValue( "blogShowMoreEnabled", $blogSettings->getValue( "show_more_enabled" ));
			$this->setValue( "blogEnableHtmlarea", $blogSettings->getValue( "htmlarea_enabled" ));
			$this->setValue( "blogCommentsEnabled", $blogSettings->getValue( "comments_enabled" ));
			$this->setValue( "blogShowFuturePosts", $blogSettings->getValue( "show_future_posts_in_calendar" ));
			$this->setValue( "blogEnableAutosaveDrafts", $blogSettings->getValue( "new_drafts_autosave_enabled" ));
			$this->setValue( "blogCommentsOrder", $blogSettings->getValue( "comments_order" ));
		}
		
		function render()
		{
            $this->setValue( "blogsettings", $this->_blogInfo->getSettings());

            $ts = new TemplateSets();
            $templates = $ts->getBlogTemplateSets( $this->_blogInfo->getId(), true );
            $this->setValue( "templates", $templates);
			// loading all the locales from disk is a pretty heavy task but doing so, we'll get
			// nice Locale object with things like the encoding, the description, etc... which looks
			// waaaay nicer than just showing the locale code
            $this->setValue( "locales", Locales::getLocales());
			
			parent::render();
		}
	}
?>