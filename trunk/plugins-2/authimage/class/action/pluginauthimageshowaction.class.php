<?php

	include_once( PLOG_CLASS_PATH."class/action/blogaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/plugintemplatedview.class.php");

	/**
	 * shows a flickr template without smarty cache
	 */
	class PluginAuthImageShowAction extends BlogAction
	{
		
		function PluginAuthImageShowAction( $actionInfo, $request )
		{
        	$this->BlogAction( $actionInfo, $request );
		}
		
		function perform()
		{
			$this->_view = new PluginTemplatedView( $this->_blogInfo, "authimage", "authimageshow", SMARTY_VIEW_CACHE_DISABLED );
            $this->_view->setValue( "request", $this->_request );
            // add all the common information to the view
            $this->setCommonData();

            return true;
		}
	}
?>