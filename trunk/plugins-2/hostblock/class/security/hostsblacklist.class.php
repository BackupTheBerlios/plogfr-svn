<?php

	include_once( PLOG_CLASS_PATH."class/security/pipelinefilter.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/dao/blockedhosts.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/dao/blockedhost.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/client.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/ipmatchvalidator.class.php" );

    define( "HOST_BLACKLIST_BLOCKED_HOST_FOUND", 300 );
    define( "HOST_BLACKLIST_COMMENT_BLOCKED_HOST_FOUND", 301 );

	class HostsBlacklist extends PipelineFilter 
	{

    	function HostsBlacklist( $pipelineRequest )
        {
        	$this->PipelineFilter( $pipelineRequest );
        }

        function filter()
        {
        	// get all the hosts that have been blacklisted
            // by this blog
            $blogInfo = $this->_pipelineRequest->getBlogInfo();
            $request  = $this->_pipelineRequest->getHttpRequest();
            
        	// check if this section has been enabled or disabled
            $blogSettings = $blogInfo->getSettings();
		    $pluginEnabled = $blogSettings->getValue( "plugin_hostblock_enabled" );
            if( !$pluginEnabled) {
            	// if not, nothing to do here...
                //_debug("ip address filter not enabled! quitting...<br/>");
            	return new PipelineResult();
            }            

            // get the list of blocked hosts for this blog
            $blockedHosts = new BlockedHosts();
            $hostsAccessBlocked = $blockedHosts->getBlogBlacklist( $blogInfo->getId(), BLOCK_ACCESS, true );
            $hostsPostCommentBlocked = $blockedHosts->getBlogBlacklist( $blogInfo->getId(), BLOCK_COMMENT_POSTING, true );

            // and now check one by one, comparing with the ip we just got
            $clientIp = Client::getIp();

            //
            // check the hosts that are not even allowed to access
            //
            $ipMatchValidator = new IpMatchValidator();
            foreach( $hostsAccessBlocked as $hostAccessBlocked ) {
            	if( $ipMatchValidator->validate( $clientIp, $hostAccessBlocked->getCidrAddress())) {
                	return new PipelineResult( false, HOST_BLACKLIST_BLOCKED_HOST_FOUND, $hostAccessBlocked->getReason());
                }
            }

            //
            // and now if we're posting a comment, check the ips
            //
            if( $request->getValue( "op" ) == "AddComment" ) {
            	foreach( $hostsPostCommentBlocked as $hostPostCommendBlocked ) {
                	if( $ipMatchValidator->validate( $clientIp, $hostPostCommendBlocked->getCidrAddress())) {
                    	return new PipelineResult( false, HOST_BLACKLIST_COMMENT_BLOCKED_HOST_FOUND, $hostPostCommendBlocked->getReason());
                    }
                }
            }

            $result = new PipelineResult();

            return $result;
        }
    }
?>
