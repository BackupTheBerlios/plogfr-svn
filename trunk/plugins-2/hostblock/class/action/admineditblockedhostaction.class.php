<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/dao/blockedhosts.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/view/admineditblockedhostview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/view/adminblockedhostsview.class.php" );      

    /**
     * Changes the settings of a blocked host
     */
    class AdminEditBlockedHostAction extends SiteAdminAction
    {

    	var $_hostId;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminEditBlockedHostAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );

			// data validation stuff
			$this->registerFieldValidator( "hostId", new IntegerValidator());
			$view = new AdminBlockedHostsView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("error_incorrect_host_id") );
			$this->setValidationErrorView( $view );             	
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	// fetch the data
        	$this->_hostId = $this->_request->getValue( "hostId" );

        	$blockedHosts = new BlockedHosts();
            $blockedHost = $blockedHosts->getBlockedHost( $this->_hostId );

            // check if the info about the blocked host is correct
            if( !$blockedHost ) {
            	$this->_view = new AdminBlockedHostsView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_fetching_blocked_host"));
                $this->setCommonData();

            	return false;                
            }

            // if so, continue
            $this->_view = new AdminEditBlockedHostView( $this->_blogInfo, $this->_hostId );

            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
