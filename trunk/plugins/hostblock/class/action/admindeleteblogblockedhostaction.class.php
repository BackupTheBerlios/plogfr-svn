<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );    
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/dao/blockedhosts.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/view/adminnewblogblockedhostview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/view/adminblogblockedhostsview.class.php" );    

    /**
     * Deletes a post from the database
     */
    class AdminDeleteBlogBlockedHostAction extends BlogOwnerAdminAction 
	{

    	var $_blockedIds;
    	var $_hostId;
    	var $_op;    	

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminDeleteBlogBlockedHostAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );

			$this->_op = $actionInfo->getActionParamValue();
			
			$view = new AdminBlogBlockedHostsView( $this->_blogInfo );			
			if( $this->_op == "deleteBlogBlockedHost" ) {
				$this->registerFieldValidator( "hostId", new IntegerValidator());
				$view->setErrorMessage( $this->_locale->tr("error_incorrect_host_id"));	
			}
			else {
				$this->registerFieldValidator( "deleteBlogBlockedHost", new ArrayValidator());
				$view->setErrorMessage( $this->_locale->tr("error_no_block_host_selected"));
			}
			$this->setValidationErrorView( $view );          	
        }

        /**
         * Carries out the specified action
         */
		function perform()
		{
			if( $this->_op == "deleteBlogBlockedHost" ) {
				$this->_blockedIds = Array();
				$this->_hostId = $this->_request->getValue( "hostId" );
				$this->_blockedIds[] = $this->_hostId;
			}
			else
				$this->_blockedIds = $this->_request->getValue( "deleteBlogBlockedHost" );
				
			$this->_deleteBlogBlockedHosts();
		}

        function _deleteBlogBlockedHosts()
        {
            $blockedHosts = new BlockedHosts();

            // loop through the array of things to remove
            $errorMessage = "";
			$successMessage = "";
			$numOk = 0;
            foreach( $this->_blockedIds as $blockedId ) {
            	// get the post
                $blockedHost = $blockedHosts->getBlockedHost( $blockedId, $this->_blogInfo->getId());
				$this->notifyEvent( EVENT_PRE_BLOCK_HOST_DELETE, Array( "host" => &$blockedHost ));
            	$result = $blockedHosts->remove( $blockedId, $this->_blogInfo->getId());
                if( !$result )
                    $errorMessage .= $this->_locale->pr("error_deleting_blocked_host", $blockedHost->getHost())."<br/>";
                else {
					$numOk++;
					if( $numOk > 1 )
						$successMessage = $this->_locale->pr("blocked_hosts_deleted_ok", $numOk );
					else
						$successMessage = $this->_locale->pr("blocked_host_deleted_ok", $blockedHost->getHost());
					$this->notifyEvent( EVENT_POST_BLOCK_HOST_DELETE, Array( "host" => &$blockedHost ));					
				}
            }

            $this->_view = new AdminBlogBlockedHostsView( $this->_blogInfo );
            if( $errorMessage != "" ) $this->_view->setErrorMessage( $errorMessage );
			if( $successMessage != "" ) $this->_view->setSuccessMessage( $successMessage );
            $this->setCommonData();
       
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());

            // better to return true if everything fine
            return true;                    

        }
    }
?>
