<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/pager/pager.class.php" );
	
    /**
     * \ingroup View
     * @private
     *
	 * shows a list with the users in the blog
	 */
	class MailCentreUserSelectorView extends AdminPluginTemplatedView
	{
		var $_status;
		var $_page;
		var $_dest;
	
		function MailCentreUserSelectorView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "mailcentre", "userselector" );		
		}
		
		/**
		 * retrieves the current status from the request
		 *
		 * @private
		 * @return nothing
		 */
		function getStatusFromRequest()
		{
			$status = HttpVars::getRequestValue( "status" );
			
			// validate the value 
			$val = new IntegerValidator();
			if( !$val->validate( $status ))
				$status = UserStatus::getDefaultStatus();
				
			// if the value validated, check if it is a valid status
			if( !UserStatus::isValidStatus( $status ))
				$status = UserStatus::getDefaultStatus();
				
			return $status;
		}
				
		/**
		 * @private
		 */
		function _getDestination()
		{
		    $dest = HttpVars::getRequestValue( "dest" );
		    $val = new IntegerValidator();
		    if( !$val->validate( $dest ) || $dest < 1 || $dest > 3 )
		      $dest = 1;
		      
		    return( $dest );
		}
		
		function render()
		{
			// get the current page
			$this->_page = $this->getCurrentPageFromRequest();
			$this->_status = $this->getStatusFromRequest();
			$this->_dest = $this->_getDestination();
			
        	// get the users of the blog
            $users = new Users();
            $siteUsers = $users->getAllUsers( $this->_status, true, $this->_page, DEFAULT_ITEMS_PER_PAGE );
            $numUsers = $users->getNumUsers( $this->_status );
            
            // in case of problems, empty array...
            if( !$siteUsers )
            	$siteUsers = Array();
            
            // notify the event
            $this->notifyEvent( EVENT_USERS_LOADED, Array( "users" => &$blogUsers ));
            
			// calculate the links to the different pages
			$pager = new Pager( "?op=mailcentreUserSelector&amp;&dest=".$this->_dest."&amp;status=".$this->_status."&amp;page=",
			                    $this->_page, 
								$numUsers, 
								DEFAULT_ITEMS_PER_PAGE );
            
            // and generate the view
            $this->setValue( "siteusers", $siteUsers );	
            $this->setValue( "userstatus", UserStatus::getStatusList( true ));
            $this->setValue( "pager", $pager );
            $this->setValue( "currentstatus", $this->_status );
            $this->setValue( "dest", $this->_dest );
			parent::render();
		}
	}	
?>