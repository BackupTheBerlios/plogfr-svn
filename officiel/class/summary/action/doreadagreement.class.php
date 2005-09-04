<?php

	include_once( PLOG_CLASS_PATH."class/summary/action/registeraction.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );

	/**
	 * shows a form so that users can register
	 */
    class doReadAgreement extends RegisterAction 
	{
        function perform()
        {
    		if( $this->_config->getValue( "summary_show_agreement" )) {
    		    $this->_view = new SummaryView( "registerstep0" );
	            $this->setCommonData();    		    
	        }
	    	else {
	    		SummaryController::setForwardAction( "RegisterStep1" );
		    }
        }
    }	 
?>
