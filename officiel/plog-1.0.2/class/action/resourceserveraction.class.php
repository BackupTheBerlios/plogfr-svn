<?php

	include_once( PLOG_CLASS_PATH."class/action/action.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/resourceserverview.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresources.class.php" );	
	include_once( PLOG_CLASS_PATH."class/net/url.class.php" );
    include_once( PLOG_CLASS_PATH."class/security/pipeline.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );	

    /**
     * \ingroup Action
     * @private
     */	
	class ResourceServerAction extends Action
	{
		var $_mode;
		var $_resource;
		var $_resId;
		var $_album;
		var $_config;
		var $_blogInfo;
	
		function ResourceServerAction( $actionInfo, $request )
		{
			$this->Action( $actionInfo, $request );
			
			// keep the session for later use
            $session = HttpVars::getSession();
        	$this->_session = $session['SessionInfo'];			
			
			$this->_config =& Config::getConfig();
		}
		
        /**
         * Fetches the information for this blog from the database since we are going to need it
         * almost everywhere.
         */
        function _getBlogInfo()
        {			
			// see if we're using subdomains
			$config =& Config::getConfig();
			if( $config->getValue( "subdomains_enabled" )) {
				$subdomainInfo = Subdomains::getSubdomainInfoFromRequest();

				if( $subdomainInfo["username"] != "" && $this->_request->getValue( 'blogUserName' ) == "" )
					$this->_request->setValue( 'blogUserName', $subdomainInfo["username"] );
				if( $subdomainInfo["blogname"] != "" && $this->_request->getValue( 'blogName' ) == "" ) 
					$this->_request->setValue( 'blogName', $subdomainInfo["blogname"] );				
			}

    		$blogId = $this->_request->getValue( 'blogId' );
    		$blogName = $this->_request->getValue( 'blogName' );
    		$userId = $this->_request->getValue( 'userId' );
    		$userName = $this->_request->getValue( 'blogUserName' );
			
            // if there is a "blogId" parameter, it takes precedence over the
            // "user" parameter.
            if( !$blogId && !$blogName ) {
            	// check if there was a user parameter
                 if( !empty($userName) ) {
                	// if so, check to which blogs the user belongs
                	$users = new Users();
                 	$userInfo = $users->getUserInfoFromUsername( $userName );
                    // if the user exists and is valid...
                	if( $userInfo ) {
                    	$userBlogs = $users->getUsersBlogs( $userInfo->getId(), BLOG_STATUS_ACTIVE );
                        // check if he or she belogs to any blog. If he or she does, simply
                        // get the first one (any better rule for this?)
                    	if( !empty($userBlogs)) {						
	                		$blogId = $userBlogs[0]->getId();
                        }
                    }
                }
                else {
                    // if there is no user parameter, we take the blogId from the session
                    if( $this->_session->getValue('blogId') != '' ) {
                    	$blogId = $this->_session->getValue('blogId');
                    }
                    else {
                        // get the default blog id from the database
                        $blogId = $this->_config->getValue('default_blog_id');                        
                    }
                }
            }
			
            // fetch the BlogInfo object
            $blogs = new Blogs();
            if( $blogId )
                $this->_blogInfo = $blogs->getBlogInfo( $blogId );
            else
                $this->_blogInfo = $blogs->getBlogInfoByName( $blogName );
        }
		
		function validate()
		{
			// before we do anything, let's find out the blogId and if there isn't any, quit
			$this->_getBlogInfo();
			if( $this->_blogInfo == false ) {
				// return 404 not found because the blog id is not correct!
				$this->_view = new ResourceServerView();
				$this->_view->addHeaderResponse( "HTTP/1.1 404 Not Found" );
				$this->_view->addHeaderResponse( "Status: 404 Not Found" );
				$this->_view->addHeaderResponse( "X-pLog-Error: Blog $resId is not correct" );
				
				return false;			
			}

			//
            // security stuff
			//
			// :KLUDGE: the problem with the security Pipeline and the PluginManager in this
			// action is that we need to reimplement the whole stuff because... this action does not
			// inherit from BlogAction and therefore nobody is doing these things for us! I don't really
			// like to do it like this but while I think of a better way, let's leave like it
			//
            $pipeline = new Pipeline( $this->_request, $this->_blogInfo );
            $result = $pipeline->process();
			
            // if the pipeline blocked the request, then we have to let the user know and quit
			// processing
            if( !$result->isValid()) {
				$this->_view = new ResourceServerView();
				$this->_view->addHeaderResponse( "HTTP/1.1 403 Forbidden" );
				$this->_view->addHeaderResponse( "Status: 403 Forbidden" );
				$this->_view->addHeaderResponse( "X-pLog-Error: Access is blocked" );
			
				return false;
            }
						
			// now if the blog id was correct, then we can proceed to get the rest of the parameters
			$this->_resName = $this->_request->getValue( "resource" );
			$this->_resId = $this->_request->getValue( "resId" );
			$this->_albumId = $this->_request->getValue( "albumId" );
			$this->_albumName = $this->_request->getValue( "albumName" );
			$this->_mode = $this->_request->getValue( "mode" );
			
			// check if we need to load the album to figure out the correct album id
			// because we got an album name instead of an album id
			if( !empty($this->_albumId) || !empty($this->_albumName)) {
				if( $this->_albumName ) {
					$albums = new GalleryAlbums();
					$album = $albums->getAlbumByName( $this->_albumName );
					if( !$album ) {
						$this->_view = new ResourceServerView();
						$this->_view->addHeaderResponse( "HTTP/1.1 404 Not Found" );
						$this->_view->addHeaderResponse( "Status: 404 Not Found" );
						$this->_view->addHeaderResponse( "X-pLog-Error: Album $albumId not found" );
						return false;
					}
					$this->_albumId = $album->getId();
				}
			}
			
			return true;
		}
		
		/**
		 * notifies of events using the plugin manager. It also adds a couple of useful parameters!
		 *
		 * @see PluginManager
		 */
		function notifyEvent( $eventType, $params = Array())
		{
			$params[ 'from' ] = $this->_actionInfo->getActionParamValue();
			$params[ 'request' ] = $this->_request;
					
			return $this->_pm->notifyEvent( $eventType, $params );
		}		
		
		function perform()
		{
			// initialize the plugin manager, needed to inform plugins of the EVENT_RESOURCE_LOADED
			// event, in case any of them is waiting for it! This obviously slows things down but
			// hey, what can I do? Users ask and I deliver...
            $this->_pm =& PluginManager::getPluginManager();
            $this->_pm->setBlogInfo( $this->_blogInfo );
			$this->_userInfo = $this->_blogInfo->getOwnerInfo();
            $this->_pm->setUserInfo( $this->_userInfo );

			// and fetch the resource
			$resources = new GalleryResources();
			if( $this->_resName ) {
				$resource = $resources->getResourceFile( $this->_blogInfo->getId(), $this->_resName );
			}
			else {
				$resource = $resources->getResource( $this->_resId, $this->_blogInfo->getId());
			}

			if( !$resource ) {
				// return 404 not found because the resource wasn't found
				$this->_view = new ResourceServerView();
				$this->_view->addHeaderResponse( "HTTP/1.1 404 Not Found" );
				$this->_view->addHeaderResponse( "Status: 404 Not Found" );
				$this->_view->addHeaderResponse( "X-pLog-Error: Resource $this->_resId not found" );		
				
				return false;
			}
			
			// we need to let plugins know that we have successfully loaded a resource
			$this->notifyEvent( EVENT_RESOURCE_LOADED, Array( "resource" => &$resource ));
			
			// generate the correct view with the resource data...
			$this->_view = new ResourceServerView( $resource, $this->_mode );
			
			return true;
		}
	}
?>