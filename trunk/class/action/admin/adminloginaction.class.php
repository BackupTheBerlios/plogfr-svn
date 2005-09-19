<?php

	include_once( PLOG_CLASS_PATH."class/action/action.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admindashboardview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admindefaultview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/session/sessioninfo.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
	include_once( PLOG_CLASS_PATH."class/misc/version.class.php" );
	include_once( PLOG_CLASS_PATH."class/locale/locales.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminnewpostview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * When the user fills in the login form, we jump to this action which will show
     * another form when the user will choose to which of the blog he or she wants to
     * carry out administrative tasks.
     */
    class AdminLoginAction extends Action 
	{

    	var $_userName;
        var $_userPassword;
        var $_op;
        var $_locale;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminLoginAction( $actionInfo, $request )
        {
        	$this->Action( $actionInfo, $request );

            $this->_config =& Config::getConfig();
            $this->_locale =& Locales::getLocale( $this->_config->getValue( "default_locale" ));

		// data validation
		$this->registerFieldValidator( "userName", new StringValidator());
		$this->registerFieldValidator( "userPassword", new StringValidator());
		$view = new AdminDefaultView();
		$view->setErrorMessage( $this->_locale->tr("error_incorrect_username_or_password"));
		$this->setValidationErrorView( $view );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	// get the parameters, which have already been validated
            $this->_userName     = Textfilter::filterAllHTML($this->_request->getValue( "userName" ));
            $this->_userPassword = $this->_request->getValue( "userPassword" );
            $this->_op           = Textfilter::filterAllHTML($this->_request->getValue( "op" ));

		// create a plugin manager
			$pm =& PluginManager::getPluginManager();	
		
        	// try to authenticate the user
            $users = new Users();
            if( !$users->authenticateUser( $this->_userName, $this->_userPassword )) {
            	$this->_view = new AdminDefaultView();
                $this->_view->setErrorMessage( $this->_locale->tr("error_incorrect_username_or_password"));
				$this->setCommonData();
				
				$pm->notifyEvent( EVENT_LOGIN_FAILURE, Array( "user" => $this->_userName ));
                return false;
            }
			
            // if the user is correct, get and put his or her information in the session
            $userInfo = $users->getUserInfo( $this->_userName, $this->_userPassword );
			
			if( !$userInfo ) {
            	$this->_view = new AdminDefaultView();
                $this->_view->setErrorMessage( $this->_locale->tr("error_incorrect_username_or_password"));
				$this->setCommonData();
				
				$pm->notifyEvent( EVENT_LOGIN_FAILURE, Array( "user" => $this->_userName ));
                return false;
			}
			
			$pm->notifyEvent( EVENT_USER_LOADED, Array( "user" => &$userInfo, "from" => "Login" ));
            //$sessionInfo = $_SESSION["SessionInfo"];
            $session = HttpVars::getSession();
            $sessionInfo = $session["SessionInfo"];

            $sessionInfo->setValue( "userInfo", $userInfo );
            $session["SessionInfo"] = $sessionInfo;
            HttpVars::setSession( $session );

            // get the list of blogs to which the user belongs
            $userBlogs = $users->getUsersBlogs( $userInfo->getId(), BLOG_STATUS_ACTIVE );

            // but if he or she does not belong to any yet, we quit
            if( empty($userBlogs)) {
            	$this->_view = new AdminDefaultView();
                $this->_view->setErrorMessage( $this->_locale->tr("error_dont_belong_to_any_blog"));
				$this->setCommonData();

                return false;
            }
			
			$pm->notifyEvent( EVENT_BLOGS_LOADED, Array( "blogs" => &$userBlogs, "from" => "Login" ));			
			
			// check if we are skipping the dashboard
			if( $this->_config->getValue( "skip_dashboard" )) {
				// get the first blog that came
				$this->_blogInfo = end( $userBlogs );			
				// set it in the session
            	$session = HttpVars::getSession();
            	$session["SessionInfo"]->setValue( "blogInfo", $this->_blogInfo );
            	HttpVars::setSession( $session );			
            	// and then continue...
				AdminController::setForwardAction( "newPost" );
			}
			else {
				$this->_view = new AdminDashboardView( $userInfo, $userBlogs );	
			}
            // better to return true if everything's fine
            return true;
        }
    }
?>
