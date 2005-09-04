<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admindefaultview.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/httpvars.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Logs the user out, by removing all the information from the session.
     */
    class AdminLogoutAction extends AdminAction 
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminLogoutAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	$this->_view = new AdminDefaultView();
			
			$this->notifyEvent( EVENT_PRE_LOGOUT );

            // remove all the information from the session
            $session = HttpVars::getSession();
            $session["SessionInfo"] = null;
            unset($session["SessionInfo"]);
            $session = Array();
            HttpVars::setSession( $session );
            session_destroy();

            // and pass the locale to the template
            $config =& Config::getConfig();
            $locale =& Locales::getLocale( $config->getValue( "default_locale" ));
            $url =& $this->_blogInfo->getBlogRequestGenerator();
            $blogTitle = $this->_blogInfo->getBlog();
	    $logoutMessage = $this->_locale->tr("logout_message")."<br/>".$locale->pr("logout_message_2", $url->blogLink(), $blogTitle);
	    $this->_view->setSuccessMessage( $logoutMessage );
			
			$this->notifyEvent( EVENT_POST_LOGOUT );

            // better to return true if everything fine
            return true;
        }
    }
?>
