<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	
	class MailCentreSendMessageView extends AdminPluginTemplatedView
	{
	    var $_editable;
			
		function MailCentreSendMessageView( $blogInfo, $editable = true )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "mailcentre", "sendmail" );
			
			$this->_editable = $editable;
		}
		
		function render()
		{
		    $this->setValue( "editable", $this->_editable );
		    
		    parent::render();
		}
	}
?>