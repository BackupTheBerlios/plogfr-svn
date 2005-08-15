<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/remembercommentdata/class/view/pluginremembercommentdataconfigview.class.php" );

	/**
	 * shows a form with the current configuration
	 */
	class PluginRememberCommentDataConfigAction extends AdminAction
	{

		function PluginRememberCommentDataConfigAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}

		function perform()
		{
            $this->_view = new PluginRememberCommentDataConfigView( $this->_blogInfo );

			$this->setCommonData();

			return true;
		}
	}
?>