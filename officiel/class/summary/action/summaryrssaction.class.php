<?php

	include_once( PLOG_CLASS_PATH."class/summary/action/summaryaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/summary/dao/summarystats.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/timestamp.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
	include_once( PLOG_CLASS_PATH."class/summary/view/summaryrssview.class.php" );
	include_once( PLOG_CLASS_PATH."class/net/rawrequestgenerator.class.php" );
	
	define( "SUMMARY_RSS_TYPE_DEFAULT", "default" );
	define( "SUMMARY_RSS_TYPE_MOST_COMMENTED", "mostcommented" );
	define( "SUMMARY_RSS_TYPE_MOST_READ", "mostread" );
	define( "SUMMARY_RSS_TYPE_MOST_ACTIVE_BLOGS", "mostactiveblogs" );
	define( "SUMMARY_RSS_TYPE_NEWEST_BLOGS", "newestblogs" );

     /**
      * This is the one and only default action. It simply fetches all the most recent
      * posts from the database and shows them. The default locale is the one specified
      * in the configuration file and the amount of posts shown in this page is also
      * configurable through the config file.
      */
     class SummaryRssAction extends SummaryAction
     {

        var $_numPosts;

        function SummaryRssAction( $actionInfo, $request )
        {
            $this->SummaryAction( $actionInfo, $request );
            $this->_numPosts = $this->_config->getValue( "summary_page_show_max" );
        }
		
		function validate()
		{
			// make sure that the mode is set to something meaningful...
			$this->_mode = $this->_request->getValue( "type" );
			if( $this->_mode != SUMMARY_RSS_TYPE_DEFAULT &&
			    $this->_mode != SUMMARY_RSS_TYPE_MOST_COMMENTED &&
				$this->_mode != SUMMARY_RSS_TYPE_MOST_READ &&
				$this->_mode != SUMMARY_RSS_TYPE_MOST_ACTIVE_BLOGS &&
				$this->_mode != SUMMARY_RSS_TYPE_NEWEST_BLOGS ) {
				
				// in case the parameter looks weird, let's use a default one...
				$this->_mode = SUMMARY_RSS_TYPE_DEFAULT;
			}
			
			$this->_profile = $this->_request->getValue( "profile" );			
			
			return true;
		}

        /**
         * Loads the posts and shows them.
         */
        function perform()
        {
            if( $this->_mode == SUMMARY_RSS_TYPE_MOST_COMMENTED ||
                $this->_mode == SUMMARY_RSS_TYPE_MOST_READ ||
                $this->_mode == SUMMARY_RSS_TYPE_DEFAULT ) {	                
	                
	            // RSS feeds for posts stuff
	            $this->_view = new SummaryRssView( $this->_profile, Array( "summary" => "rss", 
			                                       "mode" => $this->_mode,
												   "profile" => $this->_profile ));
				if( $this->_view->isCached()) {
					return true;
				}
		
            	$blogs       = new Blogs();
            	$stats       = new SummaryStats();
	                
				if( $this->_mode == SUMMARY_RSS_TYPE_MOST_COMMENTED ) {
					$posts = $stats->getMostCommentedArticles( $this->_numPosts);
				}
				elseif( $this->_mode == SUMMARY_RSS_TYPE_MOST_READ ) {
					$posts = $stats->getMostReadArticles( $this->_numPosts);			
				}
				else {
					// load the most recent posts, filtering out all those registration messages...
					$registerTopic = $this->_locale->tr( "register_default_article_topic" );
					$registerText = $this->_locale->tr( "register_default_article_text" );
					$posts = $stats->getRecentArticles( $this->_numPosts, $registerTopic, $registerText );
				}
	
	            if( !$posts ) {
					$posts = Array();
	            }
	
				$this->_view->setValue( "posts", $posts );
			}
			elseif( $this->_mode == SUMMARY_RSS_TYPE_MOST_ACTIVE_BLOGS ||
			        $this->_mode == SUMMARY_RSS_TYPE_NEWEST_BLOGS ) {
				// RSS feeds for blogs, need different template sets...
				
	            $this->_view = new SummaryRssView( "blogs_".$this->_profile, Array( "summary" => "rss", 
			                                       "mode" => $this->_mode,
												   "profile" => $this->_profile ));
				if( $this->_view->isCached()) {
					return true;
				}
				
				// load the stuff
				$stats = new SummaryStats();
				
				if( $this->_mode == SUMMARY_RSS_TYPE_MOST_ACTIVE_BLOGS ) {
					$blogs = $stats->getMostActiveBlogs( $this->_numPosts );	
				}
				else {
					$blogs = $stats->getRecentBlogs( $this->_numPosts);
				}
				
				// in case there is really no data to fetch...
				if( !$blogs )
					$blogs = Array();
					
				// this 'url' object is just a dummy one... But we cannot get it from the list
				// of blogs that we fetched because it could potentially be null! Besides, we only
				// need it to generate the base url to rss.css and to summary.php, so no need to
				// have a fully-featured object
				$this->_view->setValue( "url", new RawRequestGenerator( null ));
				$this->_view->setValue( "blogs", $blogs );								
			}
			
			$this->_view->setValue( "type", $this->_mode );
			$this->_view->setValue( "summary", true );
			
			$this->setCommonData();		

            return true;
        }
     }
?>