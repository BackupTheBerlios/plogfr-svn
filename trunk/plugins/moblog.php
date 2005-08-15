<?php

    // define the entry point
    if (!defined( "PLOG_CLASS_PATH" )) {
    	define( "PLOG_CLASS_PATH", dirname(__FILE__)."/");
    }
    
    //
    // comment this out if you don't want this script to log
    // its steps
    //
    define( "MOBLOG_DEBUG", true );
    
    // bring in some code that we need
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
    include_once( PLOG_CLASS_PATH."class/file/file.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/timestamp.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/httpvars.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/timestamp.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresources.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryalbums.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/moblog/class/log/mobloglogger.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/moblog/class/moblog/moblogrequest.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/moblog/class/moblog/moblogresponse.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/moblog/class/moblog/moblogconstants.properties.php" );
	include_once( PLOG_CLASS_PATH."class/template/cachecontrol.class.php" ); 
    
    // initialize the logging system
    MoblogLogger::log( "-- Initialized");
    
    // get the request
    $request = HttpVars::getRequest();
    $message = $request["message"];    
    if( $message == "" ) {
        MoblogLogger::log( "There was no message!" );
        die();
    }
    
    // check if we need to remove any quotes..
    if( get_magic_quotes_gpc()) {
        $message = stripslashes( $message );
    }
    
    MoblogLogger::log("-- message --");
    MoblogLogger::log($message);
    MoblogLogger::log("-- end --");
    
    // parse the message
    $request = new MoblogRequest( $request );
    
    // let's see what we get...    
    MoblogLogger::log( "user = '".$request->getUser()."'");
    // uncomment the following if you want to see passwords... :)
    //MoblogLogger::log( "pass = ".$request->getPassword()."'");
    MoblogLogger::log( "blog id = ".$request->getBlogId());
    MoblogLogger::log( "topic = ".$request->getTopic());
    MoblogLogger::log( "reply to = ".$request->getReplyTo());
    MoblogLogger::log( "body = ".$request->getBody());
    
    //
    // start processing the message...
    //
    
    //
    // first, try to authenticate the user
    //
    $users = new Users();
    $userInfo = $users->getUserInfo( $request->getUser(), $request->getPassword());
    if( !$userInfo ) {
        $response = new MoblogResponse( $request->getReplyTo(),
                                  "pLog Moblog: Error",
                                  "User or password are not correct."
                                 );
        MoblogLogger::log( "User ".$request->getUser()." did not authenticate correctly." );
        $response->send();         
        return false;
    }
    
    //
    // if user was authenticated, then proceed... and the first thing we should do
    // is see if the blog id is correct and if the user has permissions in that
    // blog
    //
    $blogs = new Blogs();
    if( $request->getBlogId() == "" ) {
        // user gave a blog name instead of a blog id
        $allBlogs = $blogs->getAllBlogs();
        if( $allBlogs ) {
            $found = false;
            $blogName = stripslashes($request->getBlogName());
            while( !$found && !empty($allBlogs)) {
                $blogInfo = array_pop( $allBlogs );
                if( strcasecmp($blogInfo->getBlog(), $blogName) == 0 ) {
                    $found = true;
                    MoblogLogger::log( "Blog '".$blogInfo->getBlog()."' found with id = '".$blogInfo->getId()."'");
                }
            }
            
            if( !$found ) {
                $response = new MoblogResponse( $request->getReplyTo(),
                                          "pLog Moblog: Error",
                                          "Incorrect blog."
                                         );
                MoblogLogger::log( "Blog ".$request->getBlogId()." does not exist." );
                $response->send();         
                return false;                
            }
        }
    }
    else {
        $blogInfo = $blogs->getBlogInfo( $request->getBlogId());
        if( !$blogInfo ) {
            $response = new MoblogResponse( $request->getReplyTo(),
                                      "pLog Moblog: Error",
                                      "Incorrect blog identifier."
                                     );
            MoblogLogger::log( "Blog ".$request->getBlogId()." is not valid." );
            $response->send();         
            return false;    
        }
    }
    
    //
    // check if the plugin has been enabled for this blog
    //
    $blogSettings = $blogInfo->getSettings();
    $pluginEnabled = $blogSettings->getValue( "plugin_moblog_enabled" );
    if( !$pluginEnabled ) {
        $response = new MoblogResponse( $request->getReplyTo(),
                                  "pLog Moblog: Error",
                                  "The plugin has not been enabled for this blog."
                                 );
        MoblogLogger::log( "Plugin not enabled for blog ".$request->getBlogId());
        $response->send();         
        return false;
    }
    
    //
    // now check if the user has permissions over the blog
    //
    $userPermissions = new UserPermissions();
    $userPerm = $userPermissions->getUserPermissions( $userInfo->getId(), $blogInfo->getId());
    if( !$userPerm ) {
        $response = new MoblogResponse( $request->getReplyTo(),
                                  "pLog Moblog: Error",
                                  "You have no permissions in the given blog."
                                 );
        MoblogLogger::log( "User '".$request->getUser()."' has no permissions in blog ".$request->getBlogId());
        $response->send();         
        return false;
    }
    
    //
    // if everything's correct, then we can proceed to find if the category 
    // chosen by the user exists. Since there is no way to fetch a category by its name,
    // we'll have to fetch them all and loop through them
    //
    $articleCategories = new ArticleCategories();    
    // load the category as defined in the plugin settings page
    $categoryId = $blogSettings->getValue( "plugin_moblog_article_category_id" );
    $category = $articleCategories->getCategory( $categoryId, $blogInfo->getId());
    // if there was no such category, we should send an error and to make it more useful, send
    // as part of the error message the list of available categories
    if( !$category ) {
        $response = new MoblogResponse( $request->getReplyTo(),
                                  "pLog Moblog: Error",
                                  "The category does not exist."
                                );
        MoblogLogger::log( "User '".$request->getUser()."' tried to use category '".$categoryId.
                     "' which does not exist.");
        $response->send(); 
        return false;                
    }
    
    //
    // finally, add the resources to the database
    //
    
    // first, create a new album to hold these attachments
    $albums = new GalleryAlbums();
    $userAlbums = $albums->getUserAlbums( $blogInfo->getId());
    $t = new Timestamp();    
    $albumId = $blogSettings->getValue( "plugin_moblog_gallery_resource_album_id" );
    $album = $albums->getAlbum( $albumId, $blogInfo->getId());
    // check if the album was loaded
    if( !$album ) {
        $response = new MoblogResponse( $request->getReplyTo(),
                                  "pLog Moblog: Error",
                                  "The album does not exist."
                                );
        MoblogLogger::log( "User '".$request->getUser()."' tried to use album '".$albumId.
                     "' which does not exist.");
        $response->send(); 
        return false;                
    }
    MoblogLogger::log( "Adding resources to album ".$album->getName());    
    
    $attachments = $request->getAttachments();
    $res = new GalleryResources();
    $resourceIds = Array();
    foreach( $attachments as $attachment ) {
        MoblogLogger::log( "-- Processing attachment ".$attachment->getFileName());
        $result = $res->addResource( $blogInfo->getId(), $albumId, $attachment->getFileName(), $attachment );
        //$filePath = $attachment->getFolder()."/".$attachment->getFileName();
        //MoblogLogger::log( "filename = ".$attachment->getFileName()." - patch = ".$filePath );        
        //$result = $res->addResourceFromDisk( $blogInfo->getId(), $albumId, $attachment->getFileName(), $filePath ); 
        MoblogLogger::log( "   Completed: result = $result" );
        if( $result ) {
            // keep this for later
            array_push( $resourceIds, $result );
        }
    }
    
    //
    // if everything went fine, we can now proceed and publish the post, finally!!!! :)
    //
    
    // before adding the article, we need to add some additional markup 
    // with links to the attachments that were sent
    $rg = $blogInfo->getBlogRequestGenerator();
    $postBody = $request->getBody()."<br/>";
    $numItems = count($resourceIds);
    $curItem = 0;
    foreach( $resourceIds as $resId ) {
        $resource = $res->getResource( $resId );
        $markup = "<a id=\"res_".$resId."\" href=\"".$rg->resourceLink( $resource )."\">";        
        if( $resource->isImage()) {
            $previewType = $blogSettings->getValue( "plugin_moblog_resource_preview_type" );
            if( $previewType == MOBLOG_EMBED_MEDIUM_PREVIEW )
                $link = $rg->resourceMediumSizePreviewLink( $resource );
            elseif( $previewType == MOBLOG_EMBED_FULL_SIZE_VIEW )
                $link = $rg->resourceDownloadLink( $resource );
            else
                $link = $rg->resourcePreviewLink( $resource );          
                
            $markup .= "<img src=\"$link\" alt=\"".$resource->getDescription()."\" />";
        }
        else {
            $markup .= $resource->getDescription();
        }
        $markup .= "</a>";
        $curItem++;
        if( $curItem < $numItems ) 
            $markup .= "<br/><br/>";        
        MoblogLogger::log( "Adding markup $markup" );
        $postBody .= $markup;
        $postBody = TextFilter::autoP( trim( $postBody ));
        $resNames .= $resource->getDescription();        
    }
    
    // add the article
    $articles = new Articles();
    $article = new Article( $request->getTopic(),
                            $postBody,
                            Array( $category->getId()),
                            $userInfo->getId(),
                            $blogInfo->getId(),
                            POST_STATUS_PUBLISHED,
                            0
                            );
    $article->setDateObject( new Timestamp());
    // enable or disable comments by default depending on the current config
    $commentsEnabled = $blogSettings->getValue( "comments_enabled" );
    $article->setCommentsEnabled( $commentsEnabled );
    
    $result = $articles->addArticle( $article );
    
    // add an article notification
    $notifications = new ArticleNotifications();
    $notifications->addNotification( $result, $blogInfo->getId(), $userInfo->getId());
    
    // reset the cache in case it is enabled
    CacheControl::resetBlogCache( $blogInfo->getId());    
    
    if( !$result ) {
        $response = new MoblogResponse( $request->getReplyTo(),
                                  "pLog Moblog: Error",
                                  "There was an error adding the post to the database."
                                 );
        MoblogLogger::log( "There was an error adding the post to the database.");
    }
    else {
        $responseBody = "Post was successfully added to the database with topic '".$request->getTopic()."\n\n";
        if( count($request->getAttachments()) > 0 ) {
            $responseBody .= "The following attachments have been added:\n\n";
            $responseBody .= $resNames;
        }
        $response = new MoblogResponse( $request->getReplyTo(), "pLog Moblog: Success", $responseBody ); 
        MoblogLogger::log( "Post was successfully added to the database." );
    }
    $response->send();
    
    // end of it...
    MoblogLogger::log( "-- End");    
?>
