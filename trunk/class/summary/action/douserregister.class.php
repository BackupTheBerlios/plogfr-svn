<?php

	include_once( PLOG_CLASS_PATH."class/summary/action/registeraction.class.php" );
	include_once( PLOG_CLASS_PATH."class/summary/view/summaryusercreationview.class.php" );

	/**
	 * shows a form so that users can register
	 */
    class doUserRegister extends RegisterAction 
	{
        function perform()
        {
           $this->_view = new SummaryUserCreationView();
           $this->setCommonData();
        }
    }	 
?>
