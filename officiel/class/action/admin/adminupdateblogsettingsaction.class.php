<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminblogsettingsview.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
	

    /**
     * \ingroup Action
     * @private
     *
     * Action that shows a form to change the settings of the current blog.
     */
    class AdminUpdateBlogSettingsAction extends BlogOwnerAdminAction 
	{
    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminUpdateBlogSettingsAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
			
			// lots of stuff to register here...
			$this->registerFieldValidator( "blogMaxRecentItems", new IntegerValidator());
			$this->registerFieldValidator( "blogMaxMainPageItems", new IntegerValidator());
			$this->registerFieldValidator( "blogName",  new StringValidator());
			$this->registerFieldValidator( "blogLocale", new StringValidator());
			$this->registerFieldValidator( "blogTemplate", new StringValidator());
			$this->registerField( "blogAbout" );			
			$this->registerField( "blogShowMoreEnabled" );
			$this->registerField( "blogEnableHtmlarea" );
			$this->registerField( "blogCommentsEnabled" );
			$this->registerField( "blogCommentsOrder" );
			$this->registerField( "blogShowFuturePosts" );
			//$this->registerFieldValidator( "blogTimeOffset", new IntegerValidator());
			$this->registerField( "properties" );
			$this->registerField( "blogCategoriesOrder" );
			$this->registerField( "blogLinkCategoriesOrder" );
			$this->registerField( "blogEnableAutosaveDrafts" );
			// set the view that we're going to use
			$view = new AdminBlogSettingsView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("error_updating_settings"));
			$this->setValidationErrorView( $view );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	// fetch the settings from the db and update them accordingly
            $blogs = new Blogs();
            $blogSettings = $blogs->getBlogSettings( $this->_blogInfo->getId());
            $blogSettings->setValue( "locale", $this->_request->getValue( "blogLocale" ));
            $blogSettings->setValue( "show_posts_max", $this->_request->getValue( "blogMaxMainPageItems" ));
            $blogSettings->setValue( "recent_posts_max", $this->_request->getValue( "blogMaxRecentItems" ));
            $blogSettings->setValue( "template", $this->_request->getValue( "blogTemplate" ));
            $blogSettings->setValue( "time_offset", $this->_request->getValue( "blogTimeOffset" ));
			$blogSettings->setValue( "categories_order", $this->_request->getValue( "blogCategoriesOrder" ));
			$blogSettings->setValue( "link_categories_order", $this->_request->getValue( "blogLinkCategoriesOrder" ));			
           	$blogSettings->setValue( "show_more_enabled",  Textfilter::checkboxToBoolean($this->_request->getValue( "blogShowMoreEnabled" )));
           	$blogSettings->setValue( "htmlarea_enabled", Textfilter::checkboxToBoolean($this->_request->getValue( "blogEnableHtmlarea" )));
           	$blogSettings->setValue( "comments_enabled", Textfilter::checkboxToBoolean($this->_request->getValue( "blogCommentsEnabled" )));
           	$blogSettings->setValue( "show_future_posts_in_calendar",  Textfilter::checkboxToBoolean($this->_request->getValue( "blogShowFuturePosts" )));
           	$blogSettings->setValue( "new_drafts_autosave_enabled", Textfilter::checkboxToBoolean($this->_request->getValue( "blogEnableAutosaveDrafts" )));
            $blogSettings->setValue( "comments_order", $this->_request->getValue( "blogCommentsOrder" ));
            $this->_blogInfo->setAbout( Textfilter::filterAllHTML($this->_request->getValue( "blogAbout" )));
            $this->_blogInfo->setBlog( Textfilter::filterAllHTML($this->_request->getValue( "blogName" )));
            $this->_blogInfo->setSettings( $blogSettings );
			$this->_blogInfo->setProperties( $this->_request->getValue( "properties" ));
			$this->_blogInfo->setMangledBlog( Textfilter::urlize( $this->_blogInfo->getBlog()));


            // and now update the settings in the database
            $blogs = new Blogs();
                        
            // and now we can proceed...
			$this->notifyEvent( EVENT_PRE_BLOG_UPDATE, Array( "blog" => &$this->_blogInfo ));						
            if( !$blogs->updateBlog( $this->_blogInfo->getId(), $this->_blogInfo )) {
            	$this->_view = new AdminBlogSettingsView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_settings"));
               	$this->setCommonData();

                return false;
            }

            // do it again, baby :)))
            $this->_blogInfo->setAbout( Textfilter::filterAllHTML(stripslashes($this->_request->getValue( "blogAbout" ))));
            $this->_blogInfo->setBlog( Textfilter::filterAllHTML(stripslashes($this->_request->getValue( "blogName" ))));
            $this->_blogInfo->setSettings( $blogSettings );
			$this->_blogInfo->setProperties( $this->_blogProperties );			
            $this->_session->setValue( "blogInfo", $this->_blogInfo );
            $this->saveSession();

			$this->notifyEvent( EVENT_POST_BLOG_UPDATE, Array( "blog" => &$this->_blogInfo ));
            $this->_view = new AdminBlogSettingsView( $this->_blogInfo );
            $this->_locale =& Locales::getLocale( $blogSettings->getValue( "locale" ));
            $this->_view->setSuccessMessage( $this->_locale->pr("blog_settings_updated_ok", $this->_blogInfo->getBlog()));
            $this->setCommonData();
			
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());			

            // better to return true if everything fine
            return true;
        }
    }
?>
