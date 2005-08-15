<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/dao/blockedhosts.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/view/adminnewblogblockedhostview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/view/adminblogblockedhostsview.class.php" );        

    /**
     * Adds new blocked content to the blog
     */
    class AdminAddBlogBlockedHostAction extends BlogOwnerAdminAction 
	{
        var $_ip1;
        var $_ip2;
        var $_ip3;
        var $_ip4;
        var $_hostIp;
        var $_blockType;
		var $_mask;
        var $_reason;

    	function AdminAddBlogBlockedHostAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );

			// set up the data validators
			// data validation
			$this->registerFieldValidator( "ip1", new IntegerValidator());
			$this->registerFieldValidator( "ip2", new IntegerValidator());
			$this->registerFieldValidator( "ip3", new IntegerValidator());
			$this->registerFieldValidator( "ip4", new IntegerValidator());
			$this->_form->registerField( "mask" );
			$this->_form->registerField( "blockType" );			
			$this->_form->registerField( "reason" );

			$view = new AdminNewBlogBlockedHostView( $this->_blogInfo, $this->_hostId );
			$view->setErrorMessage( $this->_locale->tr("error_provide_host_to_block" ));
			$this->setValidationErrorView( $view );          	
        }

        function perform()
        {
        	// fetch the data
            $this->_ip1         = $this->_request->getValue( "ip1" );
            $this->_ip2         = $this->_request->getValue( "ip2" );
            $this->_ip3         = $this->_request->getValue( "ip3" );
            $this->_ip4         = $this->_request->getValue( "ip4" );
            $this->_hostIp      = $this->_ip1.".".$this->_ip2.".".$this->_ip3.".".$this->_ip4;
            $this->_mask        = $this->_request->getValue( "mask" );
            $this->_blockType   = $this->_request->getValue( "blockType" );
            $this->_reason      = $this->_request->getValue( "reason" );
            
        	// create the dao object and add the info to the db
            $blockedHosts = new BlockedHosts();
			$t = new Timestamp();
			$blockedHost = new BlockedHost( $this->_hostIp, $this->_mask, $this->_reason, 
											$t->getTimestamp(), $this->_blogInfo->getId(), 
											$this->_blockType, BLOCK_BLACKLIST );
			$this->notifyEvent( EVENT_PRE_BLOCK_HOST_ADD, Array( "host" => &$blockedHost ));			
            $result = $blockedHosts->add( $blockedHost );

            // and give some feedback to the user
            if( !$result ) {
            	$this->_view = new AdminNewBlogBlockedHostView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_adding_blocked_host") );
                $this->setCommonData();

                return false; 
            }
			$this->notifyEvent( EVENT_POST_BLOCK_HOST_ADD, Array( "host" => &$blockedHost ));
          	$this->_view = new AdminBlogBlockedHostsView( $this->_blogInfo );
            $this->_view->setSuccessMessage( $this->_locale->tr("blocked_host_updated_ok") );
            $this->setCommonData();

			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());                        

            return true;
        }
    }
?>
