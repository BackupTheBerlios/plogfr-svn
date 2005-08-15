<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminerrorview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminmessageview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/dao/blockedhosts.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );

    /**
     * blocks the given host from posting comments
     */
    class AdminBlogBlockHostFromPostingAction extends BlogOwnerAdminAction 
	{

    	var $_host;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminBlogBlockHostFromPostingAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        function validate()
        {
        	$this->_host = $this->_request->getValue( "hostIp" );

            $val = new StringValidator();
            if( !$val->validate( $this->_host )) {
            	$this->_view = new AdminErrorView( $this->_blogInfo );
                $this->_view->setMessage( "The host address is not correct." );
                $this->setCommonData();

                return false;
            }

            return true;
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	// if we're blocking a single host, then the mask should be
            // as long as 32 bits
            $blockedHosts = new BlockedHosts();
			$t = new Timestamp();
			$blockedHost = new BlockedHost( $this->_host, 32, "Host blocked from posting", 
											$t->getTimestamp(), $this->_blogInfo->getId(), 
											BLOCK_COMMENT_POSTING, BLOCK_BLACKLIST );
            $result = $blockedHosts->add( $blockedHost );

            // if there was an error, let the user know about it...
            if( !$result ) {
            	$this->_view = new AdminErrorView( $this->_blogInfo );
                $this->_view->setMessage( "There was an error adding this host to the list of blocked hosts." );
                $this->setCommonData();

                return false;
            }

            $this->_view = new AdminMessageView( $this->_blogInfo );
            $this->_view->setMessage( "Host ".$this->_host." blocked from posting comments successfully." );
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
