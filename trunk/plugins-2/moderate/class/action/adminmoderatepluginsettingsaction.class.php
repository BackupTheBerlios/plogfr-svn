<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/moderate/class/view/adminmoderatepluginsettingsview.class.php" );

    class AdminModeratePluginSettingsAction extends BlogOwnerAdminAction 
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminModeratePluginSettingsAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
            $this->_view = new AdminModeratePluginSettingsView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
        }
    }
?>
