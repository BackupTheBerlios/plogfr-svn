<?php

	include_once( PLOG_CLASS_PATH.'class/view/smartyview.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/bloginfo.class.php' );
    include_once( PLOG_CLASS_PATH.'class/data/plogcalendar.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/articles.class.php' );
	include_once( PLOG_CLASS_PATH.'class/dao/archivelink.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/articles.class.php' );
    include_once( PLOG_CLASS_PATH.'class/data/timestamp.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/mylinks.class.php' );
    include_once( PLOG_CLASS_PATH.'class/misc/version.class.php' );
    include_once( PLOG_CLASS_PATH.'class/dao/mylinkscategories.class.php' ); 
    include_once( PLOG_CLASS_PATH.'class/plugin/pluginmanager.class.php' );
    include_once( PLOG_CLASS_PATH.'class/xml/rssparser/rssparser.class.php' );    
    
    /**
     * default date format used for the archive links
     */
    define( "ARCHIVE_DEFAULT_DATE_FORMAT", '%B %Y' );

    /**
     * \ingroup View
     *
     * Extends the SmartyView class to provide support for common operations, for example
     * to automatically add support for locale. It is recommended
     * that all classes that generate a view extend from this unless strictly necessary.
     */
	class BlogView extends SmartyView
	{

        var $_pm;

		/**
		 * @see SmartyView
		 */
		function BlogView( $blogInfo, $template, $cachingEnabled = SMARTY_VIEW_CACHE_CHECK, $data = Array())
        {
			// the SmartyView will generate the right Template object for us
        	$this->SmartyView( $blogInfo, $template, $cachingEnabled, $data );
			
			$this->articles = new Articles();
			
			$this->_pm =& PluginManager::getPluginManager();
			$this->_pm->setBlogInfo( $this->_blogInfo );
			
			// set the character set in the request based on the blog locale
			$locale = $this->_blogInfo->getLocale();
			$this->setCharset( $locale->getCharset());			
        }

        /**
         * Generates an html calendar based on the posts for the given month
         *
         * @param year
         * @param month
         * @private
         */
        function generateCalendar( $year = null, $month = null )
        {
			$monthPosts = $this->getValue( 'monthposts' );
            $locale     = $this->_blogInfo->getLocale();

            $calendar = new PlogCalendar( $monthPosts, $this->_blogInfo, $locale->getLocaleCode());

			$this->setValue( 'calendar', $calendar->getMonthView( $month, $year ));
        }
        
        /**
         * notifies of a throwable event
         *
         * @param eventType The code of the event we're throwing
         * @param params Array with the event parameters
         */
		function notifyEvent( $eventType, $params = Array())
		{
			$params[ 'from' ] = $this->className();
					
			return $this->_pm->notifyEvent( $eventType, $params );
		}        
        
        /**
         * Fetches the stats for the archives
         *
         * @private
         */
        function _getArchives()
        {
            $archiveStats = $this->articles->getNumberPostsPerMonth( $this->_blogInfo->getId());

            if( $archiveStats == '' )
            	return false;

            $links = Array();
            $locale = $this->_blogInfo->getLocale();
            $urls = $this->_blogInfo->getBlogRequestGenerator();
            
            // format of dates used in the archive, but it defaults to '%B %Y' if none specified
            $archiveDateFormat = $locale->tr( 'archive_date_format' );      
            // need to check whether we got the same thing back, since that's the way Locale::tr() works instead of
            // returning an empty string      
            if( $archiveDateFormat == "archive_date_format" ) $archiveDateFormat = ARCHIVE_DEFAULT_DATE_FORMAT;
            
            foreach( $archiveStats as $yearName => $year) {
            	foreach( $year as $monthName => $month ) {
                	// we can use the Timestamp class to help us with this...
                	$t = new Timestamp();
                    $t->setYear( $yearName );
                    $t->setMonth( $monthName );
                    $archiveUrl = $urls->getArchiveLink( $t->getYear().$t->getMonth());
                    $linkName = $locale->formatDate( $t, $archiveDateFormat );
                	$link = new ArchiveLink( $linkName, '', $archiveUrl, $this->_blogInfo->getId(), 0, $month, 0);
                    $links[] = $link;
                }
            }

            return $links;
        }
        
        /**
         * Retrieves the most recent posts
         *
         * @private
         */
        function _getRecentPosts()
        {
            $blogSettings = $this->_blogInfo->getSettings();

            $t = new Timestamp();
            $todayTimestamp = $t->getTimestamp();
            
        	$recentPosts = $this->articles->getBlogArticles( $this->_blogInfo->getId(), -1, $blogSettings->getValue( 'recent_posts_max' ), 0, 1, 0, $todayTimestamp);
        	
        	$this->_pm->notifyEvent( EVENT_POSTS_LOADED, Array( 'articles' => &$recentPosts ));        	
        	
        	return $recentPosts;
        }
        
        /**
         * Retrieves all the posts for the current month
         *
         * @private
         */
        function _getMonthPosts()
        {
        	$t = new Timestamp();
            $blogSettings = $this->_blogInfo->getSettings();
            // the values for the month and the year have been included in the session
            $month = $this->getValue( 'Month' );
            $year = $this->getValue( 'Year' );

            return( $this->articles->getNumberPostsPerDay( $this->_blogInfo->getId(), $year, $month ));
    	}

        /**
         * Retrieves the links
         *
         * @private
         */
        function _getLinkCategories()
        {
			$blogSettings = $this->_blogInfo->getSettings();
			$linkCategoriesOrder = $blogSettings->getValue( 'link_categories_order', MYLINKS_CATEGORIES_NO_ORDER );		
            $myLinksCategories = new MyLinksCategories();
            $blogLinksCategories = $myLinksCategories->getMyLinksCategories( $this->_blogInfo->getId(), $linkCategoriesOrder);
			$this->notifyEvent( EVENT_LINK_CATEGORIES_LOADED, Array( 'linkcategories' => &$blogLinksCategories )); 
			
			return $blogLinksCategories;
        }
        
        /**
         * Fetches the article categories for the given blog
         *
         * @private
         */
        function _getArticleCategories()
        {
			$blogSettings = $this->_blogInfo->getSettings();
			$categoryOrder = $blogSettings->getValue( 'categories_order' );
        	$categories = new ArticleCategories();
			// we want a list with all the categories, sorted in the way that was configured
            $categories = $categories->getBlogCategories( $this->_blogInfo->getId(), false, $categoryOrder );
            
            return $categories;
        }
		
		/**
		 * Sets some  in this case, we leave it all up to the child classes to reimplement
		 * this and by default call View::render()
		 *
		 * @returns always true
		 */
		function render()
		{		
			if( !$this->isCached()) {
				// and then add our stuff to the view...
				$this->setValue( 'archives', $this->_getArchives());
				$this->setValue( 'recentposts', $this->_getRecentPosts());
				$this->setValue( 'mylinkscategories', $this->_getLinkCategories());
				$this->setValue( 'monthposts', $this->_getMonthPosts());
				$this->setValue( 'articlecategories', $this->_getArticleCategories());
				$this->generateCalendar( $this->getValue( 'Year' ), $this->getValue( 'Month' ));
				
				// also, let's not forget about the plugins...
				// put the plugins in the context
				$plugins = $this->_pm->getPlugins();
				foreach( $plugins as $name => $plugin ) {
					$this->setValue( $name, $plugin );
				}
			}

			//
			// these things can go in since they do not mean much overhead when generating the view...
			//
			$this->setValue( 'locale', $this->_blogInfo->getLocale());			
			$this->setValue( 'version', Version::getVersion());
			$this->setValue( 'now', new Timestamp());			
			$this->setValue( 'blog', $this->_blogInfo );			
			$this->setValue( 'url', $this->_blogInfo->getBlogRequestGenerator());
			$this->setValue( 'utils', $this->_blogInfo->getBlogRequestGenerator());
			$this->setValue( 'blogsettings', $this->_blogInfo->getSettings());
			$this->setValue( 'rss', new RssParser());
			
			// ask the parent to do something, if needed
			parent::render();
		}
    }
?>