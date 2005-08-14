<?php

    if (!defined( "PLOG_CLASS_PATH" )) {
        define( "PLOG_CLASS_PATH", dirname(__FILE__)."/");
    }

    include_once( PLOG_CLASS_PATH."class/dao/trackbacks.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/properties.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/httpvars.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articlenotifications.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/cachecontrol.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );	

    //
    // set this to 'true' if you want this script to log whatever it is
    // doing... (useful for debugging)
    //
    define( "TRACKBACK_DEBUG_ENABLED", true );

	/**
	 * shorthand function for creating an error response to a client
	 *
	 * @param message the error message
	 * @return returns the xml error message
	 */
    function errorResponse( $message )
    {
        $result = '<?xml version="1.0" encoding="iso-8859-1"?>';
        $result .= '<response>';
        $result .= '<error>1</error>';
        $result .= '<message>'.$message.'</message>';
        $result .= '</response>';

        return $result;
    }
	
	/**
	 * dumps a whole request to the log file
	 *
	 * @param request
	 * @return always true
	 */
	function dumpRequest( $request ) 
	{

		trackbackLog( "-- dump of trackback request --" );
		$params = $request->getAsArray();
		foreach( $params as $key => $value )
		{
			trackbackLog( "  $key = $value" );
		}
		trackbackLog( "-- end of dump --" );
		
		return true;
	}
	
	/**
	 * shorthand function for getting a logger and sending a message to the log file
	 *
	 * @param message
	 * @return always true
	 * @see LoggerManager
	 */
	function trackbackLog( $message )
	{
		if( TRACKBACK_DEBUG_ENABLED ) {
			$logger =& LoggerManager::getLogger( "trackback" );
			$logger->debug( $message );
		}
		
		return true;
	}
	
	/**
	 *
	 * whoa believe it or not, in pLog you can also find php code that is not within a class! :-)
	 *
	 * perhaps the code below should be cleaned up and put into a TrackbackServer class or something
	 * like that but since it works the way it is, we'll leave it like it is!
	 *
	 */

    // prepare everything...
    $config =& Config::getConfig();
    // get the post and get parameters
    trackbackLog( "** Request received" );
    $params = new Properties( HttpVars::getRequest());
    dumpRequest( $params );

    // check that they are correct and quit if they're not
    if( $params->getValue("id") == "" || $params->getValue("id") <= 0 ) {
        $result = errorResponse( "Incorrect or missing id parameter." );
        print($result);
        trackbackLog( "Sending error response: $result" );
        trackbackLog( "** End" );
        die;
    }

    if( $params->getValue( "url" ) == "" ) {
        $result = errorResponse( "The url parameter must be present." );
        print($result);
        trackbackLog( "Sending error response: $result" );
        trackbackLog( "** End" );
        die;
    }

    if( !$config->getValue( "trackback_server_enabled" )) {
		trackbackLog( "Trackback server disabled by administrator" );
        $result = errorResponse( "Trackback feature has been disabled by the administrator." );
		die( $result );	
	}

	// for security, we will strip _ANY_ html tag from the tags
	$tf = new TextFilter();
	$blogName  = $tf->filterAllHTML( $params->getValue( "blog_name" ));
	$excerpt   = $tf->filterAllHTML( $params->getValue( "excerpt" ));
	$title     = $tf->filterAllHTML( $params->getValue( "title" ));
	$articleId = $params->getValue( "id" );
	$url       = $tf->filterAllHTML( $params->getValue( "url" ));
		
	// try to see if the article is correct
	$articles = new Articles();
	$article = $articles->getBlogArticle( $articleId );
	if( !$article ) {
		trackbackLog( "ERROR: Incorrect error identifier" );
		$result = errorResponse( "Incorrect article identifier" );
		die( $result );
	}
	
	// try to load the blog info too, as we are going to need it
	$blogs = new Blogs();
	$blogInfo = $blogs->getBlogInfo( $article->getBlog());
	
	// a bit of protection...
	if( !$blogInfo ) {
		trackbackLog( "ERROR: Article id ".$article->getId()." points to blog ".$article->getBlog()." that doesn't exist!" );
		$result = errorResponse( "The blog does not exist" );
		die( $result );
	}
	
	// if the blog is disabled, then we shoulnd't take trackbacks...
	if( $blogInfo->getStatus() != BLOG_STATUS_ACTIVE ) {
		trackbackLog( "ERROR: The blog ".$blogInfo->getBlog()." is set as disabled and cannot receive trackbacks!" );
		$result = errorResponse( "The blog is not active" );
		die( $result );
	}
	
	// if everything went fine, load the plugins so that we can throw some events...
    $pm =& PluginManager::getPluginManager();
    $pm->loadPlugins();
	// and also configure the BlogInfo and UserInfo objects so that they know
	// who threw the events...
    $pm->setBlogInfo( $blogInfo );
	$userInfo = $blogInfo->getOwnerInfo();
    $pm->setUserInfo( $userInfo );
	
	// receives the request and adds it to the database
	$trackbacks = new TrackBacks();
	// create teh trackback object
	$now = new Timestamp();
	$trackback = new Trackback( $url, $title, $articleId, $excerpt, $blogName, $now->getTimestamp());
	// throw the event in case somebody is listening to it!
	$pm->notifyEvent( EVENT_PRE_TRACKBACK_ADD, Array( "trackback" => &$trackback ));
	$result = $trackbacks->addTrackBack( $trackback );
	if( !$result ) {
		trackbackLog( "There was an error saving the trackback!" );
	}
	// throw the post event too...
	$pm->notifyEvent( EVENT_POST_TRACKBACK_ADD, Array( "trackback" => &$trackback ));

	// result
	$result = '<?xml version="1.0" encoding="iso-8859-1"?>';
	$result .= '<response>';
	$result .= '<error>0</error>';
	$result .= '</response>';

	// notify the user that a new trackback has been received, if the article was
	// configured to receive notifications
	// but first make sure, the trackback was not removed by some plugins like validatetrackback...
	if( $trackbacks->getArticleTrackback( $trackback->getId() ) ) {
		$notifier = new ArticleNotifications();
		$notifier->notifyUsers( $article->getId(), $blogInfo);
	}
	
	// clear the blog cache
	CacheControl::resetBlogCache( $article->getBlog());

    // return the result
    print($result);

    trackbackLog( "Sending response: $result" );
    trackbackLog( "** End" );
	
	die();
?>