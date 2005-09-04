<?php

include_once( PLOG_CLASS_PATH."class/summary/action/summaryaction.class.php" );
include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
include_once( PLOG_CLASS_PATH."class/summary/view/summarycachedview.class.php" );

/**
 * Base action that all register actions should extend
 * @package summary
 * @subpackage action
 */
class RegisterAction extends SummaryAction
{
    //{{{ member variables
    var $userName;
    var $userPassword;
    var $userFullName;
    var $userEmail;
    var $blogName;
    var $blogLocale;
    var $templateId;
    //}}}

    //{{{function RegisterAction( $actionInfo, $request )
    function RegisterAction( $actionInfo, $request )
    {
        $this->SummaryAction( $actionInfo, $request );
		
		$tf = new Textfilter();
        $this->blogName = $tf->filterAllHTML( $this->_request->getValue( "blogName" ));
        $this->blogLocale = $this->_request->getValue( "blogLocale" );
        $this->userName = $tf->filterAllHTML($this->_request->getValue( "userName" ));
        $this->userPassword = $tf->filterAllHTML($this->_request->getValue( "userPassword" ));
        $this->userEmail = $tf->filterAllHTML($this->_request->getValue( "userEmail" ));
		$this->userFullName = $tf->filterAllHTML($this->_request->getValue( "userFullName" ));
		
    }
    //}}}
	
	function validationErrorProcessing()
	{
		parent::validationErrorProcessing();
		$this->setValues();
	}
    
    /**
     * make these values tranferred until the last register step
     */
    function setValues(){
        $this->_view->setValue( "userName", $this->userName );
        $this->_view->setValue( "userFullName", $this->userFullName );
        $this->_view->setValue( "userPassword", $this->userPassword );
        $this->_view->setValue( "userEmail", $this->userEmail );
        $this->_view->setValue( "blogName", $this->blogName );
        $this->_view->setValue( "blogLocale", $this->blogLocale );
        $this->_view->setValue( "templateId", $this->templateId );
    }
}
?>
