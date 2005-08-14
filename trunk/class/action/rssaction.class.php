<?php

	include_once( PLOG_CLASS_PATH."class/action/blogaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/rssview.class.php" );
    include_once( PLOG_CLASS_PATH."class/locale/locale.class.php" );
    include_once( PLOG_CLASS_PATH."class/locale/locales.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * This class is used by the controller that takes care of handling the requests for the
     * RSS feed.
     */
	class RssAction extends BlogAction 
	{

    	/**
         * Constructor.
         */
    	function RssAction( $blogInfo, $request )
        {
        	$this->BlogAction( $blogInfo, $request );
        }

        /**
         * Performs the action.
         */
        function perform()
        {
        	// fetch the articles for the given blog
        	$articles = new Articles();
            $blogSettings = $this->_blogInfo->getSettings();
            $localeCode = $blogSettings->getValue( "locale" );

            // fetch the default profile as chosen by the administrator
            $defaultProfile = $this->_config->getValue( "default_rss_profile" );
            if( $defaultProfile == "" || $defaultProfile == null )
            	$defaultProfile = DEFAULT_PROFILE;

            // fetch the profile
            // if the profile specified by the user is not valid, then we will
            // use the default profile as configured
            $profile = $this->_request->getValue( "profile" );
			if( $profile == "" ) $profile = $defaultProfile;

            // fetch the category, or set it to '0' otherwise, which will mean
            // fetch all the most recent posts from any category
            $categoryId = $this->_request->getValue( "categoryId" );
            if( !is_numeric($categoryId))
            	$categoryId = 0;
				
            // check if the template is available
            $this->_view = new RssView( $this->_blogInfo, $profile, 
			                            Array( "profile" => $profile,
										       "categoryId" => $categoryId ));
			
			// do nothing if the view was already cached
			if( $this->_view->isCached()) {
				return true;
			}

            // create an instance of a locale object
            $locale = Locales::getLocale( $localeCode );

            // fetch the posts, though we are going to fetch the same amount in both branches
			$amount = $blogSettings->getValue( "recent_posts_max", 15 );            
			$t = new Timestamp();
			if( $blogSettings->getValue( 'show_future_posts_in_calendar' )) {
				$blogArticles = $articles->getBlogArticles( $this->_blogInfo->getId(), -1, $amount, 
															$categoryId, POST_STATUS_PUBLISHED, 0 );
			}
			else {
				$today = $t->getTimestamp();
				$blogArticles = $articles->getBlogArticles( $this->_blogInfo->getId(), -1, $amount, 
															$categoryId, POST_STATUS_PUBLISHED, 0, $today );			
			}
														
			$pm =& PluginManager::getPluginManager();
			$pm->setBlogInfo( $this->_blogInfo );
			$pm->setUserInfo( $this->_userInfo );
			$result = $pm->notifyEvent( EVENT_POSTS_LOADED, Array( 'articles' => &$blogArticles ));
			$articles = Array();
			foreach( $blogArticles as $article ) {
				$postText = $article->getIntroText();
				$postExtendedText = $article->getExtendedText();
				$pm->notifyEvent( EVENT_TEXT_FILTER, Array( "text" => &$postText ));
				$pm->notifyEvent( EVENT_TEXT_FILTER, Array( "text" => &$postExtendedText ));
				$article->setIntroText( $postText );
				$article->setExtendedText( $postExtendedText );
				array_push( $articles, $article );
			}														
            
            $this->_view->setValue( "locale", $locale );
            $this->_view->setValue( "posts", $articles );
            $this->setCommonData();

            return true;
        }
    }
?>