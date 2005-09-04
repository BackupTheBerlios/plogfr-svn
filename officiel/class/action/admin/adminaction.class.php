<?php

	include_once( PLOG_CLASS_PATH."class/action/action.class.php" );
    include_once( PLOG_CLASS_PATH."class/locale/locales.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/httpvars.class.php" );
    include_once( PLOG_CLASS_PATH."class/template/templateservice.class.php" );
    include_once( PLOG_CLASS_PATH."class/misc/version.class.php" );
	include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/cachecontrol.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/admindefaultview.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );

    /**
     * \ingroup Action
     *
     * In the same way BlogAction sets some predefined information to be available for every action
     * for the public side of the blog, this one does the same but for the administrative interface.
     * So far it fetches information from the session, such as the UserInfo and the BlogInfo objects
     * so that they are available for every template.
     *
     * This is the most basic action for the admin interface and it allows all users to see them. If you
     * need to create an action that can only be accessed by users with certain privileges,
     * please use BlogOwnerAdminAction and SiteAdminAction.
     *
     * @see BlogOwnerAdminAction
     * @see SiteAdminAction
     */
    class AdminAction extends Action 
	{

    	var $_blogInfo;
        var $_userInfo;
        var $_session;
        var $_config;
        var $_locale;
		var $_pm;
		var $_userBlogs;

        /**
         * Constructor.
         *
         * @param actionInfo An ActionInfo object as provided by the constroller
         * @param request A valid HTTP request
         */
        function AdminAction( $actionInfo, $request )
        {
        	$this->Action( $actionInfo, $request );
	
            // get information about the session
            $session = HttpVars::getSession();
            $this->_session = $session["SessionInfo"];

            $this->_config  =& Config::getConfig();

            // get the information about the user and quit if we don't have it...
            $this->_getUserInfo();
            if( $this->_userInfo == "" ) {
            	header( "HTTP/1.0 403 Forbidden" );
                print($this->mustAuthenticatePage());
                die();
            }

            // do the same with the information about the blog
            $this->_getBlogInfo();
            if( $this->_blogInfo == "" ) {
            	if( $this->_actionInfo->getActionParamValue() != "blogSelect" ) {
                	header( "HTTP/1.0 403 Forbidden" );
                	print($this->mustAuthenticatePage());
                    die();
                }
            }
			
			// prepare the plugin manager in case we'd like to throw events
			$this->_pm =& PluginManager::getPluginManager();			
			
			// fetch the site locale
            $this->_locale =& $this->getLocale();

			$users =& new Users();
            $this->_userBlogs = $users->getUsersBlogs( $this->_userInfo->getId(), BLOG_STATUS_ACTIVE );            
        }

        /**
         * Retrieves the blogInfo object from the session
         * @private
         */
        function _getBlogInfo()
        {
            $session = HttpVars::getSession();
            $sessionInfo = $session["SessionInfo"];

            $this->_blogInfo = $sessionInfo->getValue( "blogInfo" );
        }

        /**
         * Retrieves the userInfo object from the session
         * @private
         */
        function _getUserInfo()
        {
            $session = HttpVars::getSession();
            $sessionInfo = $session["SessionInfo"];
            $this->_userInfo = $sessionInfo->getValue("userInfo");
        }

        /**
         * sets the default locale, in case we want to send localized messages to the user.
         * @private
         */
        function &getLocale()
        {
        	// don't like this so much...
        	if( $this->_blogInfo != "" ) {
        		$this->_blogSettings = $this->_blogInfo->getSettings();
            	//$locale =& Locales::getLocale( $this->_blogSettings->getValue("locale"));
				$locale =& $this->_blogInfo->getLocale();
            }
            else {
            	$locale =& Locales::getLocale( $this->_config->getValue("default_locale"));
            }
			
			return $locale;
        }

        /**
         * Adds some common data to the view. this function must be manually called once
         * we've set up a view.
         *
         * @param copyFormValues
         * @see Action::setCommonData()
         */
        function setCommonData( $copyFormValues = false )
        {	
			parent::setCommonData( $copyFormValues );

			// initialiaze plugins
			$this->_pm->setBlogInfo( $this->_blogInfo );
			$this->_pm->setUserInfo( $this->_userInfo );
			$this->_pm->getPlugins();			
			
        	$this->_view->setValue( "user", $this->_userInfo );
        	$this->_view->setValue( "userBlogs", $this->_userBlogs);
			$this->_view->setUserInfo( $this->_userInfo );
            $this->_view->setValue( "blog", $this->_blogInfo );
            $this->_view->setValue( "blogsettings", $this->_blogInfo->getSettings());
            $this->_view->setValue( "op", $this->_actionInfo->_actionParamValue );
			$this->_view->setValue( "locale", $this->_locale );
			$this->_view->setValue( "config", $this->_config );
        }

        /**
         * Saves the session data
         * @private
         */
        function saveSession()
        {
        	$this->_session->setValue( "blogInfo", $this->_blogInfo );
            $this->_session->setValue( "userInfo", $this->_userInfo );
        	//$_SESSION["SessionInfo"] = $this->_session;
            $session = HttpVars::getSession();
            $session["SessionInfo"] = $this->_session;
            HttpVars::setSession( $session );
        }

        /**
         * Generates a page which shows an "access forbidden" message, prompting the user to
         * authenticate first using the login page.
         * @private
         */
        function mustAuthenticatePage()
        {
			$view = new AdminDefaultView();
			$locale = $this->getLocale();
			$view->setErrorMessage( $locale->tr("error_access_forbidden" ));
			return $view->render();
        }
		
		/**
		 * centralized way of throwing events, it also adds some useful information so that
		 * child classes do not have to do it
		 *
		 * @param eventType
		 * @param params
		 *
		 * @see PluginManager::notifyEvent()
		 */
		function notifyEvent( $eventType, $params = Array())
		{
			$params[ "from" ] = $this->_actionInfo->getActionParamValue();
			$params[ "request" ] = $this->_request;
			
			return $this->_pm->notifyEvent( $eventType, $params );
		}
    }
?>
