<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/validatetrackback/class/view/adminvalidatetrackbackpluginsettingsview.class.php" ); 

    class AdminValidateTrackbackPluginSettingsAction extends BlogOwnerAdminAction 
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminValidateTrackbackPluginSettingsAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
			$this->_view = new AdminValidateTrackbackPluginSettingsView( $this->_blogInfo );

            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
