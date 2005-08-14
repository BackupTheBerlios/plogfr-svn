<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminnewpostview.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminsimpleerrorview.class.php" );	
    include_once( PLOG_CLASS_PATH."class/view/admin/admindashboardview.class.php" );	
	include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Sample action on how to develop our own actions.
     *
     * Please also refer to SampleView.class.php for more information
     */
    class AdminMainAction extends AdminAction 
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminMainAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
        }

        /**
         * Validate if everything is correct
         */
        function validate()
        {
	        // first of all, check if we have a valid blog id
	        $this->_blogId = $this->_request->getValue( "blogId" );
            if( $this->_blogId == "" || $this->_blogId < 0 ) {
				
				// check if the user really belongs to one or more blogs and if not, quit
				$users = new Users();
				$userBlogs = $users->getUsersBlogs( $this->_userInfo->getId(), BLOG_STATUS_ACTIVE );
				if( count($userBlogs) == 0 ) {
					$this->_view = new AdminSimpleErrorView();
					$this->_view->setValue( "message", $this->_locale->tr("error_dont_belong_to_any_blog" ));
					
					return false;
				}
				
				// if everything went fine, then we can continue...
				$this->_view = new AdminDashboardView( $this->_userInfo, $userBlogs );
				return false;
            }

			// load the blog
            $blogs = new Blogs();
            $this->_blogInfo = $blogs->getBlogInfo( $this->_blogId );
			 
			// check if the blog really exists
			if( !$this->_blogInfo ) {
				$this->_view = new AdminSimpleErrorView();
				$this->_view->setValue( "message", $this->_locale->tr("error_incorrect_blog_id" ));
				
				return false;		 			 
			}
			
			// if so, check that it is active
			if( $this->_blogInfo->getStatus() != BLOG_STATUS_ACTIVE ) {
				$this->_view = new AdminSimpleErrorView();
				$this->_view->setValue( "message", $this->_locale->tr("error_incorrect_blog_id" ));
				
				return false;				
			}

            // if the blog identifier is valid, now we should now check if the user belongs
            // to that blog so that we know for sure that nobody has tried to forge the
            // parameter in the meantime			 
            $userPermissions = new UserPermissions();
			$blogUserPermissions = $userPermissions->getUserPermissions( $this->_userInfo->getId(), $this->_blogInfo->getId());
			if( !$blogUserPermissions ) {
				$this->_view = new AdminSimpleErrorView();
				$this->_view->setValue( "message", $this->_locale->tr("error_no_permissions" ));
				
				return false;		 
			}

            // if all correct, we can now set the blogInfo object in the session for later
            // use
            $this->_session->setValue( "blogInfo", $this->_blogInfo );
            $session = HttpVars::getSession();
            $session["SessionInfo"] = $this->_session;
            HttpVars::setSession( $session );

            return true;
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
			// we don't have to worry about much more here, we can let the
			// $this->_nextAction action take care of everytyhing now...
			// If $this->_nextAction is null, we use "newPost" as default nextAction
				        
	        $this->_nextAction = $this->_request->getValue( "action" );

			if ( $this->_nextAction ) {
				AdminController::setForwardAction( $this->_nextAction );
		    } else {
				AdminController::setForwardAction( "newPost" );
			}
			
            // better to return true if everything fine
            return true;
        }
    }
?>
