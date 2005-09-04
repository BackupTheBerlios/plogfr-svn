<?php

	if (!defined( "PLOG_CLASS_PATH" )) {
    	define( "PLOG_CLASS_PATH", dirname(__FILE__)."/");
    }


    // include required classes, dont know what, but it works for me :-)
    include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/xmlrpc/IXR_Library.lib.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/database/db.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php");
    include_once( PLOG_CLASS_PATH."class/dao/article.class.php");
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php");
    include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php");
	include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/cachecontrol.class.php" );
	include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresources.class.php" );
	include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );	
	

    // init database
    $_db = new Db;
    $adodb = $_db->getDb();

    // config object
    $config =& Config::getConfig();

    // users object
    $users = new Users;

    // articles object
    $articles = new Articles;

    // category object
    $category = new ArticleCategories;
    
    // blog object
    $blogsG = new Blogs;



    function newPost($args)
    {	    	
	    global $users, $articles, $blogsG;
        $appkey     = $args[0];
        $blogid     = $args[1];
        $username   = $args[2];
        $password   = $args[3];
        $content    = $args[4];
        $publish    = $args[5]; // true post&publish | false post only
        /*
         int postid
        */

        // -mhe todo security

        $erg = $users->getUserInfo(
            $username,
            $password
        );

        if ($erg != false)
        {
            if ($publish)
            {
                $status = POST_STATUS_PUBLISHED;
            } else
            {
                $status = POST_STATUS_DRAFT;
            }

            // Get the default category
            $cats = $category->getBlogCategories($blogid);
            foreach($cats as $cat)
            {
                $idCategory = $cat->_id;
                // Stop here, we have a category
                break;
            }

            // fake topic
            $dummy = explode("\n", $content);
            $title = $dummy[0];
            unset($dummy[0]);
            $content = implode("\n", $dummy);
            unset($dummy);



            $article = new Article(
                $title,
                $content, // text
                $idCategory, // catid
                $erg->_id, // userid
                $blogid, // blogid
                $status,
                0, // numread
                Array( "comments_enabled" => true ) // enable comments
            );
            
            $article->setDate(date("YmdHis"));

			// Get the plugin manager
			$plugMgr =& PluginManager::getPluginManager();
			$plugMgr->setBlogInfo( $blogsG->getBlogInfo( $blogid ) );
			$plugMgr->setUserInfo( $erg );
			$plugMgr->loadPlugins();
			// Send the PRE_POST_POST_ADD message
			$plugMgr->notifyEvent( EVENT_PRE_POST_ADD, Array( "article" => &$article ));            

            $postid = $articles->addArticle($article);
	    
            if ($postid != 0) {
				// The post was successful
				// Send the EVENT_POST_POST_ADD messages to the plugins
				$plugMgr->notifyEvent( EVENT_POST_POST_ADD, Array( "article" => &$article ));				
				CacheControl::resetBlogCache( $blogid );
				return sprintf( "%d", $postid );
	    	} 
	    	else {
				return new IXR_Error(-1, 'Internal error occured creating your post!');
	    	}
        } 
        else {
            return new IXR_Error(-1, 'You did not provide the correct password');
        }
    }

    function metaWeblogNewPost($args)
    {
        global $users, $articles, $category, $blogsG;
        $blogid     = $args[0];
        $username   = $args[1];
        $password   = $args[2];
        $content    = $args[3];
        $publish    = $args[4]; // true post&publish | false post only
        /*
         int postid
        */

        // -mhe todo security

        $erg = $users->getUserInfo(
            $username,
            $password
        );

        if ($erg != false)
        {
            if ($publish)
            {
                $status = POST_STATUS_PUBLISHED;
            } else
            {
                $status = POST_STATUS_DRAFT;
            }
            
            // Get the default category
            //$cats = $category->getBlogCategories($blogid);
            //foreach($cats as $cat)
            //{
            //    $idCategory = $cat->_id;
            //    // Stop here, we have a category
            //    break;
            //}
            
            $title = $content["title"];
            $body = $content["description"];
            $catList = $content["categories"];
            $categoryName = NULL;

            //
            // :KLUDGE:
            // not exactly the smartest and fastest bit of code ever but it seems to work :-)
            //
            $categories = Array();
            $cats = $category->getBlogCategories($blogid);            
            if ( $catList != NULL )
            {
                foreach( $catList as $categoryName ) {
                    foreach( $cats as $blogCategory ) {
                        if ( strcmp( $categoryName, $blogCategory->getName()) == 0 )
                        {
                            $categories[] = $blogCategory->getId();
                        }
                    }
                }
            }
            else {
                // if no category, let's pick a random one
                $blogCategory = array_pop( $cats );
                $categories[] = $blogCategory->getId();
            }
            
            $article = new Article(
                $title,
                $body, // text
                $categories, // catid
                $erg->_id, // userid
                $blogid, // blogid
                $status,
                0, // numread
                Array( "comments_enabled" => true ) // enable comments
            );

           $dateCreated = $content['dateCreated'];
           
           // there must be a bug in the xmlrpc library, we're getting an object in $dateCreated
           // that does not have a type or anyhting, but it still is an object... kinda weird. Anyway,
           // clients like ecto do not allow to change the time an article is posted so this is not 
           // too annoying, *yet*
            if (!empty($dateCreated))
            {
               // Convert the UTC time to local time, since articleDate is in local time
               $ar = localtime ( $dateCreated->getTimestamp() );
               $ar[5] += 1900; $ar[4]++;
               $localTimeStamp = gmmktime ( $ar[2], $ar[1], $ar[0], $ar[4], $ar[3], $ar[5], $ar[8] );
               $articleDate = date("YmdHis", $localTimeStamp);
            } else
            {
               $articleDate = date("YmdHis");
            }
            
            $article->setDate($articleDate);
            
			// Get the plugin manager
			$plugMgr =& PluginManager::getPluginManager();
			$plugMgr->setBlogInfo( $blogsG->getBlogInfo( $blogid ) );
			$plugMgr->setUserInfo( $erg );
			$plugMgr->loadPlugins();
			// Send the PRE_POST_POST_ADD message
			$plugMgr->notifyEvent( EVENT_PRE_POST_ADD, Array( "article" => &$article ));            
            
            $postid = $articles->addArticle($article);
	    if ($postid != 0)
	    {
			// The post was successful
			
			// Send the EVENT_POST_POST_ADD messages to the plugins
			$plugMgr->notifyEvent( EVENT_POST_POST_ADD, Array( "article" => &$article ));
			
			CacheControl::resetBlogCache( $blogid );
			return sprintf( "%d", $postid );
	    } else
	    {
		return new IXR_Error(-1, 'Internal error occured creating your post!');
	    }
        } else
        {
            return new IXR_Error(-1, 'You did not provide the correct password');
        }
    }

    function metaWeblogGetCategories($args)
    {
        global $users, $category, $blogsG;
        $blogid     = $args[0];
        $username   = $args[1];
        $password   = $args[2];
        /*
         "description" =>
         "htmlUrl" =>
         "rssUrl" =>
        */


        $erg = $users->getUserInfo(
            $username,
            $password
        );

        if ($erg != false)
        {
            $cats = $category->getBlogCategories($blogid);
            $ret = array();
            foreach($cats as $cat)
            {
                $dummy                   = array();
                $dummy["description"]    = $cat->_name;
                
                // We can't use $cat->_url becuase it is not set, so 
                // we have to do this in long way
                $blogInfo = $blogsG->getBlogInfo( $blogid );
                $url = $blogInfo->getBlogRequestGenerator();
                // disable the generation of xhtml content or else the IXR_XMLRPC library will
                // escape things twice!
                $url->setXHTML( false );
                
                $dummy["htmlUrl"]        = $url->categoryLink( $cat );
                $dummy["rssUrl"]         = "http://";
                $ret[$cat->_name]              = $dummy;
            }
            return $ret;
        } else
        {
            return new IXR_Error(-1, 'You did not provide the correct password');
        }
    }


    function getPost($args)
    {
        global $users, $articles;
        $appkey     = $args[0];
        $postid     = $args[1];
        $username   = $args[2];
        $password   = $args[3];

        /*
            "userid" =>
            "dateCreated" =>
            "content" =>
            "postid" =>
        */

        $erg = $users->getUserInfo($username,$password);
        if ($erg != false)
        {
            $item = $articles->getUserArticle($postid, $erg->_id);
            $dateObject = $item->getDateObject();
            $time = $dateObject->getTimestamp();
            $time = mktime(
                substr($time,8,2),
                substr($time,10,2),
                substr($time,12,2),
                substr($time,4,2),
                substr($time,6,2),
                substr($time,0,4)
            );

            $dummy                  = array();
            $dummy["userid"]        = $item->_userInfo->_id;
            $dummy["dateCreated"]   = new IXR_Date($time);
            $dummy["content"]       = $item->_topic . "\r\n" . $item->_text . " ";
            $dummy["postid"]        = $item->_id;
            return $dummy;
        } else
        {
            return new IXR_Error(-1, 'You did not provide the correct password');
        }
    }

    function metaWeblogGetPost($args)
    {
        global $users, $articles;
        $postid     = $args[0];
        $username   = $args[1];
        $password   = $args[2];

        /*
            "userid" =>
            "dateCreated" =>
            "content" =>
            "postid" =>
        */

        $erg = $users->getUserInfo($username,$password);
        if ($erg != false)
        {
            $item = $articles->getUserArticle($postid, $erg->_id);
            $dateObject = $item->getDateObject();
            $time = $dateObject->getTimestamp();
            $time = mktime(
                substr($time,8,2),
                substr($time,10,2),
                substr($time,12,2),
                substr($time,4,2),
                substr($time,6,2),
                substr($time,0,4)
            );
            
            $articleCat = $item->getCategory();
            
            $blogId = $item->getBlog();
            $blogs = new Blogs();
            $blogInfo = $blogs->getBlogInfo( $blogId );
            $url = $blogInfo->getBlogRequestGenerator();

            $dummy                  = array();
            $dummy["userid"]        = $item->_userInfo->_id;
            $dummy["dateCreated"]   = new IXR_Date($time);
            $dummy["title"]         = $item->_topic;
            $dummy["description"]   = $item->_text;
            $dummy["postid"]        = $item->_id;
            
            $dummy["link"]          = $url->postLink( $item );
            $dummy["permaLink"]     = $url->postPermalink( $item );
            
            $catArray               = array();
            foreach( $item->getCategories() as $category ) {
                $catArray[]             = $category->getName();
            }
            $dummy["categories"]      = $catArray;
            return $dummy;
        } else
        {
            return new IXR_Error(-1, 'You did not provide the correct password');
        }
    }

    function editPost($args)
    {
        global $users, $articles, $blogsG;

        $appkey     = $args[0];
        $postid     = $args[1];
        $username   = $args[2];
        $password   = $args[3];
        $content    = $args[4];
        $publish    = $args[5];

        /*
            boolean, true or false
        */

        $erg = $users->getUserInfo($username,$password);
        if ($erg != false)
        {
            if ($publish)
            {
                $status = POST_STATUS_PUBLISHED;
            } else
            {
                $status = POST_STATUS_DRAFT;
            }

            // fake topic
            $dummy = explode("\n", $content);
            $title = $dummy[0];
            unset($dummy[0]);
            $content = implode("\n", $dummy);
            unset($dummy);

            $article = $articles->getUserArticle($postid);
            $article->setText($content);
            $article->setTopic($title);
            $article->setStatus($status);

			// Get the plugin manager
			$plugMgr =& PluginManager::getPluginManager();
			$plugMgr->setBlogInfo( $blogsG->getBlogInfo( $article->getBlog() ) );
			$plugMgr->setUserInfo( $erg );
			$plugMgr->loadPlugins();
			// Send the EVENT_PRE_POST_UPDATE message
			$plugMgr->notifyEvent( EVENT_PRE_POST_UPDATE, Array( "article" => &$article ));            

            $articles->updateArticle($article);

            // Send the EVENT_POST_POST_UPDATE messages to the plugins
            $plugMgr->notifyEvent( EVENT_POST_POST_UPDATE, Array( "article" => &$article ));				
            
    		CacheControl::resetBlogCache( $blogid );            

            return true;
        } else
        {
            return new IXR_Error(-1, 'You did not provide the correct password');
        }
    }

    function metaWeblogEditPost($args)
    {
        global $users, $articles, $category, $blogsG;

        $postid     = $args[0];
        $username   = $args[1];
        $password   = $args[2];
        $content    = $args[3];
        $publish    = $args[4];

        /*
            boolean, true or false
        */

        $erg = $users->getUserInfo($username,$password);
        if ($erg != false)
        {
            if ($publish)
            {
                $status = POST_STATUS_PUBLISHED;
            } else
            {
                $status = POST_STATUS_DRAFT;
            }            

            $title = $content["title"];
            $body = $content["description"];
            
            $article = $articles->getUserArticle($postid);
            
            $catList = $content["categories"];
            //
            // :KLUDGE:
            // not exactly the smartest and fastest bit of code ever but it seems to work :-)
            //
            $categories = Array();
            $blogid = $article->getBlog();
            $cats = $category->getBlogCategories($blogid);
            if ( $catList != NULL )
            {
                foreach( $catList as $categoryName ) {
                    foreach( $cats as $blogCategory ) {
                        if ( strcmp( $categoryName, $blogCategory->getName()) == 0 )
                        {
                            $categories[] = $blogCategory->getId();
                        }
                    }
                }
            }
            else {
                // if no category, let's pick a random one
                $blogCategory = array_pop( $cats );
                $categories[] = $blogCategory->getId();
            }
            
            $article->setText($body);
            $article->setTopic($title);
            $article->setStatus($status);
            $article->setCategoryIds( $categories );

			// Get the plugin manager
			$plugMgr =& PluginManager::getPluginManager();
			$plugMgr->setBlogInfo( $blogsG->getBlogInfo( $blogid ) );
			$plugMgr->setUserInfo( $erg );
			$plugMgr->loadPlugins();
			// Send the EVENT_PRE_POST_UPDATE message
			$plugMgr->notifyEvent( EVENT_PRE_POST_UPDATE, Array( "article" => &$article ));            

            $articles->updateArticle($article);
            
            // Send the EVENT_POST_POST_UPDATE messages to the plugins
            $plugMgr->notifyEvent( EVENT_POST_POST_UPDATE, Array( "article" => &$article ));				

    		CacheControl::resetBlogCache( $blogid );            

            return true;
        } else
        {
            return new IXR_Error(-1, 'You did not provide the correct password');
        }
    }

    function deletePost($args)
    {
        global $users, $articles, $blogsG;

        $appkey     = $args[0];
        $postid     = $args[1];
        $username   = $args[2];
        $password   = $args[3];
        $publish    = $args[4];

        // -mhe todo
        $erg = $users->getUserInfo($username,$password);
        if ($erg != false)
        {

            $article = $articles->getUserArticle($postid, $erg->_id);
            
			// Get the plugin manager
			$plugMgr =& PluginManager::getPluginManager();
			$plugMgr->setBlogInfo( $blogsG->getBlogInfo( $article->getBlog() ) );
			$plugMgr->setUserInfo( $erg );
			$plugMgr->loadPlugins();
			// Send the EVENT_PRE_POST_DELETE message
			$plugMgr->notifyEvent( EVENT_PRE_POST_DELETE, Array( "article" => &$article ));            

            $articles->deleteArticle(
                $postid,
                $erg->_id, // userid
                $article->getBlog(),
                $forever = true // kick 4eva
            );
            
            // Send the EVENT_POST_POST_DELETE messages to the plugins
            $plugMgr->notifyEvent( EVENT_POST_POST_DELETE, Array( "article" => &$article ));				

    		CacheControl::resetBlogCache( $blogid );            
            
            return true;
        } else
        {
            return new IXR_Error(-1, 'You did not provide the correct password');
        }
    }

    function getRecentPosts($args)
    {
        global $users, $articles;
        /*
            "userid" =>
            "dateCreated" =>
            "content" =>
            "postid" =>
        */
        $appkey     = $args[0];
        $blogid     = $args[1];
        $username   = $args[2];
        $password   = $args[3];
        $number     = $args[4];

        $erg = $users->getUserInfo($username,$password);
        if ($erg != false)
        {
            $ret = array();
            $list = $articles->getBlogArticles(
                $blogid,
                -1,
                $number
            );

            foreach($list as $item)
            {
                $dateObject = $item->getDateObject();
                $time = $dateObject->getTimestamp();
                $time = mktime(
                    substr($time,8,2),
                    substr($time,10,2),
                    substr($time,12,2),
                    substr($time,4,2),
                    substr($time,6,2),
                    substr($time,0,4)
                );

                $dummy                  = array();
                $dummy["userid"]        = $item->_userInfo->_id;
                $dummy["dateCreated"]   = new IXR_Date($time);
                $dummy["content"]       = $item->_topic . "\r\n" . $item->_text . " ";
                $dummy["postid"]        = $item->_id;

                $ret[]                  = $dummy;
            }
            return $ret;
        } else
        {
            return new IXR_Error(-1, 'You did not provide the correct password');
        }
    }

    function metaWeblogGetRecentPosts($args)
    {
        global $users, $articles;
        /*
            "userid" =>
            "dateCreated" =>
            "content" =>
            "postid" =>
        */
        $blogid     = $args[0];
        $username   = $args[1];
        $password   = $args[2];
        $number     = $args[3];

        $erg = $users->getUserInfo($username,$password);
        if ($erg != false)
        {
            $ret = array();
            $list = $articles->getBlogArticles(
                $blogid,  
                -1,  // date
                $number, // number of articles
                0,  // category id
                POST_STATUS_PUBLISHED  // only published articles
            );

            foreach($list as $item)
            {
                $dateObject = $item->getDateObject();
                $time = $dateObject->getTimestamp();
                $time = mktime(
                    substr($time,8,2),
                    substr($time,10,2),
                    substr($time,12,2),
                    substr($time,4,2),
                    substr($time,6,2),
                    substr($time,0,4)
                );

                $articleCat = $item->getCategory();

                $dummy                  = array();
                $dummy["userid"]        = $item->_userInfo->_id;
                $dummy["dateCreated"]   = new IXR_Date($time);
                $dummy["title"]         = $item->_topic; 
                $dummy["description"]   = $item->_text;
                $dummy["postid"]        = $item->_id;

                $blogId = $item->getBlog();
                $blogs = new Blogs();
                $blogInfo = $blogs->getBlogInfo( $blogId );
                $url = $blogInfo->getBlogRequestGenerator();
                $dummy["link"]          = $url->postLink( $item );
                $dummy["permaLink"]     = $url->postPermalink( $item );

                $catArray               = array();
                $catArray[]             = $articleCat->getName();
                $dummy["categories"]      = $catArray;

                $ret[]                  = $dummy;
            }
            return $ret;
        } else
        {
            return new IXR_Error(-1, 'You did not provide the correct password');
        }
    }
	
    function metaWeblogNewMediaObject($args)
    {
        global $users, $articles, $blogsG;
        /*
            "userid" =>
            "dateCreated" =>
            "content" =>
            "postid" =>
        */
        $blogid     = $args[0];
        $username   = $args[1];
        $password   = $args[2];
        $file       = $args[3];

        $erg = $users->getUserInfo($username,$password);
        if ($erg != false)
        {
            // Save this file to the tmp directory
            
            // Create a temp file
            // Get the temp directory
            /**if (!$tmp_dir = get_cfg_var('upload_tmp_dir')) {
                $tmp_dir = dirname(tempnam('/tmp', ''));
            }*/
			$config =& Config::getConfig();
			$tmp_dir = $config->getTempFolder();
            
            // Remove all characters that would need to be urlencoded
            // This may not be necessary, but this was causing problems when given file
            // names with spaces in it.
            $tempFile = ereg_replace("[^a-zA-Z0-9._-]", "_", basename($file['name']));
            // Make the tmp name
            $tempFile = $tmp_dir . '/' . $tempFile;

            // Open the file
            if (!$handle = fopen( $tempFile, "wb" ) ) {
                return new IXR_Error(-1, 'Could not open file');
            }    
            
            // It appears that the data has already been decoded, no need to call base64_decode
            $decodedBits = $file['bits'];
            // Write the data to the file
            if ( fwrite( $handle, $decodedBits ) === false ) {
                return new IXR_Error(-1, 'Could not write to file');
            }

            // Close the file
            fclose($handle);
            
            // let the gallery library do its work...
        	$resources = new GalleryResources();

            // Get the first album for this blog
            $albums = new GalleryAlbums();
            // get the list of albums for this blog
            $albumArray = $albums->getUserAlbums( $blogid );
            if ( $albumArray == NULL || count( $albumArray ) == 0 ) {
                return new IXR_Error(-1, 'Could not find album');
            }
            
            // Add the resource to the first album
            $resId = $resources->addResourceFromDisk( $blogid, $albumArray[0]->getId(),
                                                     basename($file['name']), $tempFile );
            // Get the resource from the id
            $resource = $resources->getResource( $resId, $blogid, $albumArray[0]->getId() );
            // Now we need to get the url for the resource
            $blogInfo = $blogsG->getBlogInfo( $blogid );
            $url = $blogInfo->getBlogRequestGenerator();
            
            $ret = $url->resourceDownloadLink( $resource );
                        
            return $ret;
        } else
        {
            return new IXR_Error(-1, 'You did not provide the correct password');
        }
    }	

    function getUserInfo($args)
    {
        $appkeyp    = $args[0];
        $username   = $args[1];
        $password   = $args[2];
        /*
        "nickname" =>
        "firstname" =>
        "lastname" =>
        "email" =>
        "userid" =>
        "url" =>
        */
		
		$users = new Users();
		
        $erg = $users->getUserInfo(
            $username,
            $password
        );

        if ($erg != false)
        {
            $ret                = array();
            $ret["nickname"]    = $erg["_username"];
            $ret["firstname"]   = $erg["_username"];
            $ret["lastname"]    = "";
            $ret["email"]       = $erg["_email"];
            $ret["userid"]      = $erg["_id"];
            $ret["url"]         = "";
            return $ret;
        } else
        {
            return new IXR_Error(-1, 'You did not provide the correct password');
        }
    }

    function getUsersBlogs($args)
    {
        global $users, $category;
        $appkey     = $args[0];
        $username   = $args[1];
        $password   = $args[2];
        /*
            "blogName" =>
            "url" =>
            "blogid" =>
        */

        $erg = $users->getUserInfo(
            $username,
            $password
        );

        if ($erg != false)
        {
            $blogs = $users->getUsersBlogs($erg->_id);
            $ret = array();
            foreach($blogs as $blog)
            {
                $dummy              = array();
                $dummy["blogid"]    = $blog->_id;
                $dummy["blogName"]  = $blog->_blog;
                $url = $blog->getBlogRequestGenerator();
                $dummy["url"]       = $url->blogLink();
                $ret[]              = $dummy;
            }
            return $ret;
        } else
        {
            return new IXR_Error(-1, 'You did not provide the correct password');
        }
    }

    if ($config->getValue("xmlrpc_api_enabled"))
    {
	$xmlrpc = new IXR_Server(
    	    array (
        	"blogger.newPost"           => "newPost",
        	"blogger.getUserInfo"       => "getUserInfo",
        	"blogger.getPost"           => "getPost",
        	"blogger.editPost"          => "editPost",
        	"blogger.deletePost"        => "deletePost",
        	"blogger.getRecentPosts"    => "getRecentPosts",
        	"blogger.getUserInfo"       => "getUserInfo",
        	"blogger.getUsersBlogs"     => "getUsersBlogs",
            "metaWeblog.newPost"        => "metaWeblogNewPost",
            "metaWeblog.editPost"       => "metaWeblogEditPost",
            "metaWeblog.getPost"        => "metaWeblogGetPost",
            "metaWeblog.getRecentPosts" => "metaWeblogGetRecentPosts",
            "metaWeblog.getCategories"  => "metaWeblogGetCategories",
            "metaWeblog.newMediaObject" => "metaWeblogNewMediaObject"			
    	    )
	);
    } else
    {
	// xmlrpc_api disabled, no methods configured
	$xmlrpc = new IXR_Server(
    	    array (
    	    )
	);
    
    }
?>
