<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/dao/blockedhosts.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class AdminEditBlockedHostView extends AdminPluginTemplatedView
	{
        var $_hostId;
		
		function AdminEditBlockedHostView( $blogInfo, $hostId )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "hostblock", "editblockedhost" );
			
			$this->_hostId = $hostId;
		}
		
		function render()
		{
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_hostblock_enabled" );
			
        	$blockedHosts = new BlockedHosts();
            $blockedHost = $blockedHosts->getBlockedHost( $this->_hostId );

            $this->setValue( "pluginEnabled", $pluginEnabled );
            $this->setValue( "blockedhost", $blockedHost );
            // to make things easier in the template, let's do the following:
            $ipParts = explode( ".", $blockedHost->getHost());
            $this->setValue( "ip1", $ipParts[0] );
            $this->setValue( "ip2", $ipParts[1] );
            $this->setValue( "ip3", $ipParts[2] );
            $this->setValue( "ip4", $ipParts[3] );

            if (!$pluginEnabled) {
                $locale = $this->_blogInfo->getLocale();
                $text = $locale->tr("error_hostblock_not_enabled");
                $this->setErrorMessage( $text );
            }            
            
            parent::render();
		}
	}
?>