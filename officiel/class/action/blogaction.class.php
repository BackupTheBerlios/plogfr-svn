<?php

	include_once( PLOG_CLASS_PATH."class/action/action.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/httpvars.class.php" );
    include_once( PLOG_CLASS_PATH."class/security/pipeline.class.php" );
	include_once( PLOG_CLASS_PATH."class/net/http/subdomains.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/referers.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );	

    /**
     * \ingroup Action
     *
     * Extends the BlogAction class so that some common operations for all the actions
     * can be done in one common place, for example to fetch the SessionInfo object
     * from the HTTP session.
     *
     * It is recommended that all the classes implementing actions for the public
     * side of the blog extend this one, and do not forget to call BlogView::setCommonData()
     * once done with the processing.
     */
	class BlogAction extends Action 
	{

    	var $_session;
        var $_config;
        var $_blogInfo;
        var $_locale;
        var $_pm;
        var $_articles;

        /**
         * Constructor. Additionally, it fetches the SessionInfo object from
         * the session information
         *
         *
         */
		function BlogAction( $actionInfo, $request )
        {
        	$this->Action( $actionInfo, $request );

            // we use the HttpVars package since then we can access the session object
            // independently wether we're using php ver. < 4.1.0 or not
            $session = HttpVars::getSession();
        	$this->_session = $session['SessionInfo'];

            $this->_config =& Config::getConfig();

            $this->_getBlogInfo();

            // save the blogid in the session
            $this->_session->setValue( 'blogId', $this->_blogInfo->getId());

            $this->checkDateParameter();
			
            // initialize the plugin manager
            $this->_pm =& PluginManager::getPluginManager();
            $this->_pm->setBlogInfo( $this->_blogInfo );
            $this->_pm->setUserInfo( $this->_userInfo );
            
            // locale
            $this->_locale = $this->_blogInfo->getLocale();

            //
            // security stuff
            //
            $pipeline = new Pipeline( $request, $this->_blogInfo );
            $result = $pipeline->process();
            //
            // if the pipeline blocked the request, then we have
            // to let the user know
            if( !$result->isValid()) {
				$message = $this->_locale->tr('error_you_have_been_blocked').'<br/><br/>';
				$message .= $result->getErrorMessage();
            	$this->_view = new ErrorView( $this->_blogInfo, $message );
                $this->setCommonData();
                $this->_view->render();

                die();
            }
			
			// update the referrers, if needed
			$this->_updateReferrer();
			
			$this->articles = new Articles();	
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

        /**
         * Saves the information from the session
         */
        function saveSession()
        {
        	//$_SESSION['SessionInfo'] = $this->_session;
            $session = HttpVars::getSession();
            $session['SessionInfo'] = $this->_session;
            HttpVars::setSession( $session );
        }

        /**
         * Sets some common information (dirty dirty...)
		 * @param copyFormValues Whether the values from fields that were registered via
		 * Action::registerFieldValidator() and Action::registerField() should be passed back to the view
		 * as variables or not. It defaults to 'false' but this parameter is useful in those cases
		 * when we would like to force an error to happen (not a validation error) and still keep the
		 * form values.
         * @see Action::setCommonData()
         */
        function setCommonData( $copyFormValues = false )
        {
            $this->_view->setValue( "Year", $this->_session->getValue( 'Year'));
            $this->_view->setValue( "Month", $this->_session->getValue( 'Month' ));
            
            parent::setCommonData( $copyFormValues );
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

            // security checks...
            if( $this->_blogInfo == false ) {
            	print( 'ERROR: The blog does not exist.' );
                die;
            }
            
            // non-active blogs shoulnd't be shown either!
            if( $this->_blogInfo->getStatus() != BLOG_STATUS_ACTIVE ) {
            	print( 'ERROR: The blog does not exist.' );
                die;	            
            }
        }

        /**
         * Checks if there is at least a year and a month in the request
         */
        function checkDateParameter()
        {
        	$date = $this->_request->getValue( 'Date' );
        	if( $date ) {
            	$year = substr( $date, 0, 4);
                $month = substr( $date, 4,2 );
                $day = substr( $date, 6, 2);
            }
            else {
            		$t = new Timestamp();
                	$year = $t->getYear();
                	$month = $t->getMonth();
                	$day = $t->getDay();
            }

            $this->_session->setValue( 'Year', $year );
            $this->_session->setValue( 'Month', $month );
            $this->_session->setValue( 'Day', $day );
        }
		
		/**
		 * updates the referrers but only if there is no $articleId parameter in the request. If that's the case,
		 * it will be left up to the correct action to take care of updating the referrers
		 *
		 * @private
		 */
		function _updateReferrer()
		{
			if( $this->_request->getValue( "articleId" ) != "" || $this->_request->getValue( "articleName" ) != "" ) 
				return true;
				
        	// update the referer statistics
            $referers = new Referers();
            if (array_key_exists( 'HTTP_REFERER', $_SERVER ))
                $referers->addReferer( $_SERVER['HTTP_REFERER'], 0, $this->_blogInfo->getId());
			
			return true;
		}
    }
?>
