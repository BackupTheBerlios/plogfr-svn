<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/secret/class/view/adminsecretpluginsettingsview.class.php" );	

    class AdminSecretPluginSettingsAction extends BlogOwnerAdminAction 
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminSecretPluginSettingsAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
            $this->_view = new AdminSecretPluginSettingsView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
        }
    }
?>
