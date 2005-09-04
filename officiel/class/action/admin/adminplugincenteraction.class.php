<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminerrorview.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Shows the list of plugins loaded.
     *
     * In the future it'll be possible to do more things from within the
     * "Plugin Center", but for now this is enough... Planned things:
     * <ul>
     * <li>per blog enable/disable plugin</li>
     * <li>add/remove plugins</li>
     * <li>I'll add more when I can think of more :)</li>
     * </ul>
     */
    class AdminPluginCenterAction extends BlogOwnerAdminAction 
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminPluginCenterAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	// initialize the plugin manager and load the plugins
        	$pluginManager =& PluginManager::getPluginManager();

            // check if the plugin manager is enabled or not, since if it's not
            // there is no point in this feature...
            if( !$pluginManager->isEnabled()) {
            	$this->_view = new AdminErrorView( $this->_blogInfo );
                $this->_view->setMessage( $this->_locale->tr("error_plugins_disabled"));
                $this->setCommonData();

                return false;
            }

            // we need to get an array with the plugins
	    $pluginManager->refreshPluginList();
            $pluginManager->setBlogInfo( $this->_blogInfo );
            $pluginManager->setUserInfo( $this->_userInfo );
            $plugins = $pluginManager->getPlugins();

            // create a view and put the plugin objects in the template
            $this->_view = new AdminTemplatedView( $this->_blogInfo, "plugincenter" );
            $this->_view->setValue( "plugins", $plugins );
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
