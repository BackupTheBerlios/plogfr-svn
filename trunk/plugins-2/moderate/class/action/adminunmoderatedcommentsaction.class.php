<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/moderate/class/view/adminunmoderatedcommentsview.class.php" );

	/**
	 * actions that displays the list of unmoderated comments in the blog.
	 */
	class AdminUnmoderatedCommentsAction extends AdminAction
	{
	
		function AdminUnmoderatedCommentsAction( $request, $actionInfo )
		{
			$this->AdminAction( $request, $actionInfo );
		}
		
		function perform()
		{
			$this->_view = new AdminUnmoderatedCommentsview( $this->_blogInfo );

			$this->setCommonData();
			
			return true;
		}
	}
?>