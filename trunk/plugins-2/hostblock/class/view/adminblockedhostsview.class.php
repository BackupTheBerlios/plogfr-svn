<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/dao/blockedhosts.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class AdminBlockedHostsView extends AdminPluginTemplatedView
	{

		function AdminBlockedHostsView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "hostblock", "blockedhosts" );
		}
		
		function render()
		{
			$blogSettings = $this->_blogInfo->getSettings();
			$pluginEnabled = $blogSettings->getValue( "plugin_hostblock_enabled" );

        	// get the content that has been filtered by this blog
            $blockedHosts = new BlockedHosts();
            $hostsBlockedFromPosting = $blockedHosts->getBlogBlacklist( GLOBALLY_BLOCKED_HOST, BLOCK_COMMENT_POSTING );
            $hostsBlocked = $blockedHosts->getBlogBlacklist( GLOBALLY_BLOCKED_HOST, BLOCK_ACCESS );

            $blogBlockedHosts = array_merge( $hostsBlockedFromPosting, $hostsBlocked );

            $this->setValue( "pluginEnabled", $pluginEnabled );
            $this->setValue( "blockedhosts", $blogBlockedHosts );

            if (!$pluginEnabled) {
                $locale = $this->_blogInfo->getLocale();
                $text = $locale->tr("error_hostblock_not_enabled");
                $this->setErrorMessage( $text );
            }            
			
			parent::render();
		}
	}
?>