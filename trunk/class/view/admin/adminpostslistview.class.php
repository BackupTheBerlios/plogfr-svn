<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/locale/locales.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlestatus.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/pager/pager.class.php" );
	
    /**
     * \ingroup View
     * @private
     *
     * shows a list of posts
     */
	class AdminPostsListView extends AdminTemplatedView
	{

		var $_showCategory = 0;
        var $_showStatus = 1;
        var $_showUser   = 0;
        var $_showMonth;
		var $_searchTerms;	
		var $_page;
	
		function AdminPostsListView( $blogInfo, $params = Array())
		{
			$this->AdminTemplatedView( $blogInfo, "editposts" );
			
			// we're going to need a locale...
			$this->_locale =& $blogInfo->getLocale();
			
			// prepare the parameters that the view is going to use
			$this->_setViewParameters( $params );
			
			$this->_page = $this->getCurrentPageFromRequest();		
			$blogSettings = $blogInfo->getSettings();
			$this->_itemsPerPage = $blogSettings->getValue( "show_posts_max" );
		}
		
		
		
		/** 
		 * calculates the array to display with the months
		 *
		 * @private
		 */
        function _getMonths()
        {
        	$articles = new Articles();
            $archiveStats = $articles->getNumberPostsPerMonthAdmin( $this->_blogInfo->getId());
            
            if( !$archiveStats )
            	return Array();          
            	
            $result = Array();
            
            $t = new Timestamp();
            $curyear = (int)$t->getYear();
            $curmonth = (int)$t->getMonth();
            
            $archiveDateFormat = $this->_locale->tr( "archive_date_format" );
            if( $archiveDateFormat == "archive_date_format" ) $archiveDateFormat = "%B %Y";

            foreach( $archiveStats as $yearName => $year) {
            	foreach( $year as $monthName => $month ) {
            	   // the next bit is so disgustingly ugly that I am ashamed of it... 
            	   // what I'm trying to do here is that the getNumberPostsPerMonthAdmin() method
            	   // won't return the current month if there wasn't anything posted during it but
            	   // we still should show the current month even if there's nothing in it, because otherwise
            	   // when generating page where the posts are listed, it will end up saying "Date: All" 
            	   // but no posts at all shown (it didn't have anything to show) This is a way of
            	   // "introducing" a month in the array without fucking it up. In fact, PHP *was*
            	   // indeed fucking it up... it didn't just want to keep the order! Oh well, it's a very
            	   // long and stupid story but we need this hack, ok? :)
            	    if( $archiveStats[$curyear][$curmonth] == "" && !$alreadyAdded ) {
            	       // there goes the dirty hack :P
            	       if( $yearName == $curyear && $monthName < $curmonth ) {
            	            $t = new Timestamp();
                            $name = $this->_locale->formatDate( $t, $archiveDateFormat );
                            $monthStr = Array( "name" => $name, 
                                       "date" => $this->_locale->formatDate($t, "%Y%m"));
                            array_push( $result, $monthStr );
                            $alreadyAdded = true;    
            	       }
            	    }
            	
            	
                	// we can use the Timestamp class to help us with this...
                	$t = new Timestamp( "" );
                    $t->setYear( $yearName );
                    $t->setMonth( $monthName );
                    $name = $this->_locale->formatDate( $t, $archiveDateFormat );
                    $monthStr = Array( "name" => $name, 
                                       "date" => $this->_locale->formatDate($t, "%Y%m"));
                    array_push( $result, $monthStr );                    
                }
            }
            
            return $result;
        }
		
		/**
		 * gets the value of a parameter
		 * @private
		 */
        function _getParameter( $params, $paramId, $defaultValue )
        {
            $value = "";
            if( array_key_exists( $paramId, $params ) )
            {
                $value = $params["$paramId"];
            }
            if( $value == "" )
                $value = $this->getSessionValue( $paramId, $defaultValue );
            
            return $value;
        }
		
		function _setViewParameters( $params )
		{
			// fetch the different parameters that we are going to need
			// to show the view...
			$this->_showCategory = $this->_getParameter( $params, "showCategory", -1 );
			$this->_showStatus   = $this->_getParameter( $params, "showStatus", 0 );
            $this->_showUser   = $this->_getParameter( $params, "showUser", 0 );			
            $this->_showMonth = $this->_getParameter( $params, "showMonth", $this->_locale->formatDate( new Timestamp(), "%Y%m" ));
			$this->_searchTerms = $this->_getParameter( $params, "searchTerms", "");
		}
		
		/**
		 * renders the view
		 */
		function render()
		{

            // fetch all the articles for edition, but we need to know whether we are trying to 
			// search for some of them or simply filter them based on certain criteria
            $articles = new Articles();			
			$posts = $articles->getBlogArticles( $this->_blogInfo->getId(), // the blog id
			                                     $this->_showMonth, // current month
												 $this->_itemsPerPage,
			                                     $this->_showCategory, // current category
												 $this->_showStatus,  // current status
												 $this->_showUser,  // current user
												 0,  // no maxdate
												 $this->_searchTerms, // current search terms
												 $this->_page // current page
												 );
			// get the total number of posts
			$numPosts = $articles->getNumBlogArticles( $this->_blogInfo->getId(), // the blog id
			                                     $this->_showMonth, // current month
												 $this->_itemsPerPage,
			                                     $this->_showCategory, // current category
												 $this->_showStatus,  // current status
												 $this->_showUser,  // current user
												 0,  // no maxdate
												 $this->_searchTerms, // current search terms
												 $this->_page // current page
												 );			
												 
			//print("number = $numPosts<br/>");
			
			$pager = new Pager( "?op=editPosts&amp;showStatus={$this->_showStatus}&amp;showCategory={$this->_showCategory}&amp;showUser={$this->_showUser}&amp;searchTerms={$this->_searchTerms}&amp;page=",
			                    $this->_page, 
								$numPosts, 
								$this->_itemsPerPage );

            $this->setValue( "posts", $posts );
			
			// throw the even in case somebody is listening to it
			$this->notifyEvent( EVENT_POSTS_LOADED, Array( "posts" => &$posts ));
			
            // and the categories
            $categories = new ArticleCategories();
			$blogSettings = $this->_blogInfo->getSettings();
			$categoriesOrder = $blogSettings->getValue( "categories_order" );
            $blogCategories = $categories->getBlogCategories( $this->_blogInfo->getId(), false, $categoriesOrder );
			$this->notifyEvent( EVENT_CATEGORIES_LOADED, Array( "categories" => &$blogCategories ));
			
            // and all the users that belong to this blog
            $users = new Users();
            $blogUsers = $users->getBlogUsers( $this->_blogInfo->getId());
			
			// and all the post status available
			$postStatusList = ArticleStatus::getStatusList( true );

            $this->setValue( "categories", $blogCategories );
			// values for the session, so that we can recover the status
			// of the filters later on in subsequent requests
            $this->setSessionValue( "showCategory", $this->_showCategory );
            $this->setSessionValue( "showStatus", $this->_showStatus );
            $this->setSessionValue( "showUser", $this->_showUser );
            $this->setSessionValue( "showMonth", $this->_showMonth );			
			// values for the view
            $this->setValue( "currentcategory", $this->_showCategory );
            $this->setValue( "currentstatus", $this->_showStatus );
            $this->setValue( "currentuser", $this->_showUser );
            $this->setValue( "currentmonth", $this->_showMonth );
            $this->setValue( "users", $blogUsers );
            $this->setValue( "months", $this->_getMonths());			
			$this->setValue( "poststatus", $postStatusList );
			$this->setValue( "searchTerms", $this->_searchTerms );
			$this->setValue( "pager", $pager );
			
			parent::render();
		}
	}
?>