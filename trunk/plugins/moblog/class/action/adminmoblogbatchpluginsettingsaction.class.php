<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/moblog/class/view/adminmoblogbatchpluginsettingsview.class.php" );

	/**
	 * doesn't do almost anything :))
	 */
	class AdminMoblogBatchPluginSettingsAction extends SiteAdminAction
	{
		function AdminMoblogBatchPluginSettingsAction( $actionInfo, $request )
		{
			$this->SiteAdminAction( $actionInfo, $request );
		}

		function perform()
		{
			$this->_view = new AdminMoblogBatchPluginSettingsView( $this->_blogInfo, $this->_userInfo );
			$this->setCommonData();

			return true;
		}
	}
?>