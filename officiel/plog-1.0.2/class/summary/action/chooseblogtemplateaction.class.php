<?php

	include_once( PLOG_CLASS_PATH."class/summary/action/registeraction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/summary/view/summaryview.class.php" );
    include_once( PLOG_CLASS_PATH."class/summary/view/blogtemplatechooserview.class.php" );

	/**
	 * shows a form where users can choose a new blog template
	 * for their blog, to start with
	 */
    class ChooseBlogTemplateAction extends RegisterAction 
	{


        function ChooseBlogTemplateAction( $actionInfo, $request )
        {
        	$this->RegisterAction( $actionInfo, $request );
        	
        	// data validation, but very simple... this is not meant to 
        	// be ever triggered
        	$this->registerFieldValidator( "templateId", new StringValidator());
        	//$this->registerFieldValidator( "blogId", new IntegerValidator());
        	$this->setValidationErrorView( new BlogTemplateChooserView());
        }

        function perform()
        {
	        // get the data from the request, as it's already been validated
			$this->templateId = $this->_request->getValue( "templateId" );
            $this->blogName = $this->_request->getValue( "blogName" );
            $this->blogLocale = $this->_request->getValue( "blogLocale" );
            $this->userName = $this->_request->getValue( "userName" );
            $this->userPassword = $this->_request->getValue( "userPassword" );
            $this->userEmail = $this->_request->getValue( "userEmail" );
			$this->userFullName = $this->_request->getValue( "userFullName" );
			
			// show some info, and we're all happy!
			//$this->_view = new SummaryView( "registerstep4" );
            //$rg =$blogInfo->getBlogRequestGenerator();
            //$blogUrl = $rg->blogLink($blogInfo);
            //$this->_view->setValue( "blogurl", $blogUrl );
            //$this->setValues();
			
			SummaryController::setForwardAction( "RegisterStep5" );
        }
    }
?>
