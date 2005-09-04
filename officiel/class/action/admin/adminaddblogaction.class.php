<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admincreateblogview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminsiteblogslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Adds a new user to the database.
     */
    class AdminAddBlogAction extends SiteAdminAction 
	{

    	var $_blogName;
        var $_ownerId;
		var $_blogProperties;

    	function AdminAddBlogAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        	
        	// data validation
        	$this->registerFieldValidator( "blogName", new StringValidator());
        	$this->registerFieldValidator( "blogOwner", new IntegerValidator());
        	$this->setValidationErrorView( new AdminCreateBlogView( $this->_blogInfo ));
        }

        function perform()
        {
	        // fetch the validated data
        	$this->_blogName = Textfilter::filterAllHTML($this->_request->getValue( "blogName" ));
            $this->_ownerId  = $this->_request->getValue( "blogOwner" );
			$this->_blogProperties = $this->_request->getValue( "properties" );	        
			
            // check that the user really exists
            $users = new Users();
            $userInfo = $users->getUserInfoFromId( $this->_ownerId );
            if( !$userInfo ) {
            	$this->_view = new AdminCreateBlogView( $this->_blogInfo );
                $this->_form->setFieldValidationStatus( "blogOwner", false );
                $this->setCommonData( true );
                return false;
            }			
	        
        	// now that we have validated the data, we can proceed to create the user, making
            // sure that it doesn't already exists
            $blogs = new Blogs();
			$blog = new BlogInfo( $this->_blogName, $this->_ownerId, "", "" );
			$blog->setProperties( $this->_blogProperties );
			
			$this->notifyEvent( EVENT_PRE_BLOG_ADD, Array( "blog" => &$blog ));
            $newBlogId = $blogs->addBlog( $blog );
            if( !$newBlogId) {
            	$this->_view = new AdminCreateBlogView( $this->_blogInfo );
                $this->_form->setFieldValidationStatus( "blogName", false );
                $this->setCommonData();

                return false;
            }
            
            // add a default category and a default post
            $articleCategories = new ArticleCategories();
            $articleCategory = new ArticleCategory( "General", "", $newBlogId, true );
            $catId = $articleCategories->addArticleCategory( $articleCategory );
            $config =& Config::getConfig();
            $locale =& Locales::getLocale( $config->getValue( "default_locale" ));
            $articleTopic = $locale->tr( "register_default_article_topic" );
            $articleText  = $locale->tr( "register_default_article_text" );
            $article = new Article( $articleTopic, 
                                    $articleText, 
                                    Array( $catId ), 
                                    $this->_ownerId, 
                                    $newBlogId, 
                                    POST_STATUS_PUBLISHED, 
                                    0, 
                                    Array(), 
                                    "welcome" );
            $t = new Timestamp();
            $article->setDateObject( $t );
            $articles = new Articles();
            $articles->addArticle( $article );            

            // and inform everyone that everything went ok
			$this->notifyEvent( EVENT_POST_BLOG_ADD, Array( "blog" => &$blog ));
            $this->_view = new AdminSiteBlogsListView( $this->_blogInfo );
            $this->_view->setSuccessMessage($this->_locale->pr("blog_added_ok", $blog->getBlog()));
            $this->setCommonData();

            return true;
        }
    }
?>
