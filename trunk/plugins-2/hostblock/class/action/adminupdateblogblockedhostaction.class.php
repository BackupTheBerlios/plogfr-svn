<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/dao/blockedhosts.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/view/admineditblogblockedhostview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/view/adminblogblockedhostsview.class.php" );  

    /**
     * Changes the settings of a blocked host
     */
    class AdminUpdateBlogBlockedHostAction extends BlogOwnerAdminAction
    {

    	var $_hostId;
        var $_reason;
        var $_ip1;
        var $_ip2;
        var $_ip3;
        var $_ip4;
        var $_ip;
        var $_mask;
        var $_type;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminUpdateBlogBlockedHostAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );

            // fetch the data
            $this->_hostId = $this->_request->getValue( "hostId" );
			
			// set up the data validators
			// data validation
			$this->registerFieldValidator( "hostId", new IntegerValidator());
			$this->registerFieldValidator( "ip1", new IntegerValidator());
			$this->registerFieldValidator( "ip2", new IntegerValidator());
			$this->registerFieldValidator( "ip3", new IntegerValidator());
			$this->registerFieldValidator( "ip4", new IntegerValidator());
			$this->_form->registerField( "mask" );
			$this->_form->registerField( "blockType" );			
			$this->_form->registerField( "reason" );

			$view = new AdminEditBlogBlockedHostView( $this->_blogInfo, $this->_hostId );
			$view->setErrorMessage( $this->_locale->tr("error_provide_host_to_block" ));
			$this->setValidationErrorView( $view ); 
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	// fetch the data
            $this->_ip1    = $this->_request->getValue( "ip1" );
            $this->_ip2    = $this->_request->getValue( "ip2" );
            $this->_ip3    = $this->_request->getValue( "ip3" );
            $this->_ip4    = $this->_request->getValue( "ip4" );
            $this->_ip     = $this->_ip1.".".$this->_ip2.".".$this->_ip3.".".$this->_ip4;
            $this->_mask   = $this->_request->getValue( "mask" );
            $this->_type   = $this->_request->getValue( "blockType" );
            $this->_reason = $this->_request->getValue( "reason" );
            
        	$blockedHosts = new BlockedHosts();
            $blockedHost = $blockedHosts->getBlockedHost( $this->_hostId, $this->_blogInfo->getId() );

            // check if the info about the blocked host is correct
            if( !$blockedHost ) {
            	$this->_view = new AdminBlogBlockedHostsView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_fetching_blocked_host") );
                $this->setCommonData();

                return false;    
            }

            // set the new information
            $blockedHost->setHost( $this->_ip );
            $blockedHost->setReason( $this->_reason );
            $blockedHost->setType( $this->_type );
            $blockedHost->setMask( $this->_mask );
			$this->notifyEvent( EVENT_PRE_BLOCK_HOST_UPDATE, Array( "host" => &$blockedHost ));
            if( !$blockedHosts->update( $blockedHost )) {
            	$this->_view = new AdminBlogBlockedHostsView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_blocked_host") );
                $this->setCommonData();

                return false; 
            }
			$this->notifyEvent( EVENT_POST_BLOCK_HOST_UPDATE, Array( "host" => &$blockedHost ));
          	$this->_view = new AdminBlogBlockedHostsView( $this->_blogInfo );
            $this->_view->setSuccessMessage( $this->_locale->tr("blocked_host_updated_ok") );
            $this->setCommonData();  
            
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());            
            
            return true;
        }
    }
?>
