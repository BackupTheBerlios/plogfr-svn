<?php

	include_once( PLOG_CLASS_PATH."class/summary/action/summaryaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/summary/dao/summarystats.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );   	
    include_once( PLOG_CLASS_PATH."class/summary/view/summarycachedview.class.php" );   	    

	/**
	 * shows a user profile
	 */
     class UserProfileAction extends SummaryAction
     {
	 
		var $_userId;

        function UserProfileAction( $actionInfo, $request )
        {
            $this->SummaryAction( $actionInfo, $request );
            
            // data validaiton
            $this->registerFieldValidator( "userId", new IntegerValidator());
            $this->setValidationErrorView( new SummaryCachedView( "userlist", Array( "summary" => "UserList", "page" => 1, "locale" => $this->_locale->getLocaleCode())));
        }
		
        /**
         * Loads the user info and show it
         */
        function perform()
        {
			$this->_userId = $this->_request->getValue( "userId" );	        
	        
			$this->_view = new SummaryCachedView( "userprofile", Array( "summary" => "userProfile", "userId" => $this->_userId, "locale" => $this->_locale->getLocaleCode()));
			if( $this->_view->isCached()) {
				// nothing to do, the view is cached
				return true;
			}
			
			// load some information about the user
			$users = new Users();
			$userInfo = $users->getUserInfoFromId( $this->_userId, true );
			
			if( !$userInfo ) {
				$this->_view = new SummaryCachedView( "userlist", Array( "summary" => "UserList", "page" => 1, "locale" => $this->_locale->getLocaleCode()));
				$this->setCommonData();
				return false;			
			}
			
			$this->_view->setValue( "user", $userInfo );

			$this->setCommonData();
		
            return true;
        }
     }	 
?>