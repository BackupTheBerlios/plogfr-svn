<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/authimage/class/view/pluginauthimageconfigview.class.php" );		

	/**
	 * shows a form with the current configuration
	 */
	class PluginAuthImageConfigAction extends AdminAction
	{
		
		function PluginAuthImageConfigAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_view = new PluginAuthImageConfigView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
		}
	}
?>