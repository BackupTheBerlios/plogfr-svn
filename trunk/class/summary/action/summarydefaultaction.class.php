<?php

	include_once( PLOG_CLASS_PATH."class/summary/action/summaryaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/summary/dao/summarystats.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/timestamp.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/logger/LogUtil.php" );

     /**
      * This is the one and only default action. It simply fetches all the most recent
      * posts from the database and shows them. The default locale is the one specified
      * in the configuration file and the amount of posts shown in this page is also
      * configurable through the config file.
      */
     class SummaryDefaultAction extends SummaryAction
     {

        var $_numPosts;

        function SummaryDefaultAction( $actionInfo, $request )
        {
            $this->SummaryAction( $actionInfo, $request );
            $this->_numPosts = $this->_config->getValue( "summary_page_show_max" );
        }

        /**
         * Loads the posts and shows them.
         */
        function perform()
        {
			$this->_view = new SummaryCachedView( "index", Array( "summary" => "default", "locale" => $this->_locale->getLocaleCode()));
			if( $this->_view->isCached()) {
				// if the view is already cached... move along! nothing to see here
				return true;
			}
			
            $blogs       = new Blogs();
            $stats       = new SummaryStats();

            // load the posts, filtering out all those registration messages...
			$registerTopic = $this->_locale->tr( "register_default_article_topic" );
			$registerText = $this->_locale->tr( "register_default_article_text" );
            $recentPosts = $stats->getRecentArticles( $this->_numPosts, $registerTopic, $registerText );
            // get all the blogs
            $siteBlogs   = $blogs->getAllBlogs( true );
            $recentBlogs = $stats->getRecentBlogs( $this->_numPosts );

            $activeBlogs    = $stats->getMostActiveBlogs( $this->_numPosts);
            $commentedPosts = $stats->getMostCommentedArticles( $this->_numPosts, $registerTopic, $registerText );
            $readestBlogs   = $stats->getMostReadArticles( $this->_numPosts, $registerTopic, $registerText );

			
			// export all these things to the view
			$this->_view->setValue( "posts", $recentPosts );
			$this->_view->setValue( "recentBlogs", $recentBlogs );
			$this->_view->setValue( "activeBlogs", $activeBlogs );
			$this->_view->setValue( "commentedPosts", $commentedPosts );
			$this->_view->setValue( "readestBlogs", $readestBlogs );
			$this->_view->setValue( "blogs", $siteBlogs );
		
			//
			// :KLUDGE:
			// we just need a random blog so... we'll get one :)
			//
			$randomBlog = array_pop($siteBlogs);
			$url = $randomBlog->getBlogRequestGenerator();
			$this->_view->setValue( "url", $url );
			
			$this->setCommonData();

            return true;
        }
     }
?>
