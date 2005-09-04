<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminsiteblogslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admineditsiteblogview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/userpermissions.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Action that shows a form to change the settings of the current blog.
     */
    class AdminUpdateEditBlogAction extends SiteAdminAction 
	{

    	var $_blogLocale;
        var $_editBlogId;
        var $_blogOwner;
        var $_blogTemplate;
		var $_blogTimeOffset;
		var $_blogProperties;
		var $_blogUsers;
		var $_blogQuota;
		var $_blogName;
		var $_blogStatus;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminUpdateEditBlogAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
			
			// data validation
			$this->registerFieldValidator( "blogUsers", new ArrayValidator(), true );
			$this->registerFieldValidator( "blogId", new IntegerValidator());
			$this->registerFieldValidator( "blogStatus", new IntegerValidator());
			$this->registerFieldValidator( "blogLocale", new StringValidator());
			$this->registerFieldValidator( "blogTemplate", new StringValidator());
			$this->registerFieldValidator( "blogResourcesQuota", new IntegerValidator(), true );
			$this->registerFieldValidator( "blogOwner", new IntegerValidator());
			$this->registerField( "blogTimeOffset" );
			$view = new AdminEditSiteBlogView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("error_updating_blog_settings2" ));
			$this->setValidationErrorView( $view );
        }
		
		/**
		 * updates the users of the blog
		 * @private
		 */
		function updateBlogUsers()
		{

		}

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	// fetch the values from the form which have already been validated
		$this->_blogName = Textfilter::filterAllHTML($this->_request->getValue( "blogName" ));
        	$this->_blogLocale = $this->_request->getValue( "blogLocale" );
            $this->_blogTemplate = $this->_request->getValue( "blogTemplate" );
            $this->_blogOwner = $this->_request->getValue( "blogOwner" );
            $this->_editBlogId = $this->_request->getValue( "blogId" );
            $this->_blogTimeOffset = $this->_request->getValue( "blogTimeOffset" );			
			$this->_blogProperties = $this->_request->getValue( "properties" );
			$this->_blogQuota = $this->_request->getValue( "blogResourcesQuota" );
			$this->_blogUsers = $this->_request->getValue( "blogUsers" );
			$this->_blogStatus = $this->_request->getValue( "blogStatus" );
			//print_r($_REQUEST);
		
        	// get the blog we're trying to update
            $blogs = new Blogs();
            $blogInfo = $blogs->getBlogInfo( $this->_editBlogId );
            if( !$blogInfo ) {
            	$this->_view = new AdminSiteBlogsListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_fetching_blog"));
                $this->setCommonData();

                return false;
            }
			
			$this->notifyEvent( EVENT_BLOG_LOADED, Array( "blog" => &$blogInfo ));

            // make sure that the user we'd like to set as owner exists
            $users = new Users();
            $userInfo = $users->getUserInfoFromId( $this->_blogOwner );
            if( !$userInfo ) {
            	$this->_view = new AdminSiteBlogsListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_incorrect_blog_owner"));
                $this->setCommonData();
                return false;
            }
			
			$this->notifyEvent( EVENT_USER_LOADED, Array( "user" => &$userInfo ));

			// set the different settings
            $blogSettings = $blogInfo->getSettings();
            $blogSettings->setValue( "locale", $this->_blogLocale );
            $blogSettings->setValue( "template", $this->_blogTemplate );
            $blogSettings->setValue( "time_offset", $this->_blogTimeOffset );
            $blogInfo->setSettings( $blogSettings );
			$blogInfo->setResourcesQuota( $this->_blogQuota );
			$blogInfo->setBlog( $this->_blogName );
			$blogInfo->setProperties( $this->_blogProperties );
            $blogInfo->setOwner( $this->_blogOwner );
			$blogInfo->setStatus( $this->_blogStatus );
            $blogInfo->setMangledBlog( Textfilter::urlize( $blogInfo->getBlog()));
       
            
			$this->notifyEvent( EVENT_PRE_BLOG_UPDATE, Array( "blog" => &$blogInfo ));
            if( !$blogs->updateBlog( $blogInfo->getId(), $blogInfo )) {
            	$this->_view = new AdminSiteBlogsListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->pr( "error_updating_blog_settings", $blogInfo->getBlog()));
               	$this->setCommonData();
                return false;
            }

			// update the user permissions, even if they didn't change (but we have no way to 
			// check that anyway!)
			$permissions = new UserPermissions();
			if( !$permissions->updateBlogUserPermissions( $this->_editBlogId, $this->_blogUsers )) {
		            	$this->_view = new AdminSiteBlogsListView( $this->_blogInfo );
                		$this->_view->setErrorMessage( $this->_locale->pr( "error_updating_blog_settings", $blogInfo->getBlog()));
		               	$this->setCommonData();
                		return false;
			}

			$this->notifyEvent( EVENT_POST_BLOG_UPDATE, Array( "blog" => &$blogInfo ));			

            // do it again, baby :)))
            if( $this->_blogInfo->getId() == $blogInfo->getId()) {
            	$this->_blogInfo->setSettings( $blogSettings );
				$blogInfo->setProperties( $this->_blogProperties );
            	$this->_session->setValue( "blogInfo", $this->_blogInfo );
            	$this->saveSession();
            }

            // if everything went fine, we can show a nice message
            $this->_view = new AdminSiteBlogsListView( $this->_blogInfo );
            $this->_view->setSuccessMessage( $this->_locale->pr( "edit_blog_settings_updated_ok", $blogInfo->getBlog()));
            $this->setCommonData();
			
			// clear the cache
			CacheControl::resetBlogCache( $blogInfo->getId());			

            // better to return true if everything fine
            return true;
        }
    }
?>
