<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/moblog/class/view/adminmoblogpluginsettingsview.class.php" );

	/**
	 * doesn't do almost anything :))
	 */
	class AdminMoblogPluginSettingsAction extends BlogOwnerAdminAction
	{
		function AdminMoblogPluginSettingsAction( $actionInfo, $request )
		{
			$this->BlogOwnerAdminAction( $actionInfo, $request );
		}

		function perform()
		{
			$this->_view = new AdminMoblogPluginSettingsView( $this->_blogInfo, $this->_userInfo );
			$this->setCommonData();

			return true;
		}
	}
?>