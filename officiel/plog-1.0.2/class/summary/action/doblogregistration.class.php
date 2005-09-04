<?php

	include_once( PLOG_CLASS_PATH."class/summary/action/registeraction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );	 		
	include_once( PLOG_CLASS_PATH."class/summary/view/doblogregistrationview.class.php" );
	include_once( PLOG_CLASS_PATH."class/summary/view/blogtemplatechooserview.class.php" );
	include_once( PLOG_CLASS_PATH."class/locale/locales.class.php" );

	/**
	 * registers a blog
	 */
    class doBlogRegistration extends RegisterAction 
	{
        
        function doBlogRegistration( $actionInfo, $request )
        {
	    	$this->RegisterAction( $actionInfo, $request );
	    	
	    	// data validation
	    	//$this->registerFieldValidator( "userId", new IntegerValidator());
	    	$this->registerFieldValidator( "blogName", new StringValidator());
	    	$this->registerFieldValidator( "blogLocale", new StringValidator());
	    	$view = new doBlogRegistrationView();
	    	$view->setErrorMessage( $this->_locale->tr("register_error_creating_blog"));
	    	$this->setValidationErrorView( $view );   
        }

        function perform()
        {
            // validated values
            $tf = new Textfilter();
			
            // create the new view and clean the cache
            $this->_view = new BlogTemplateChooserView();
            $this->setValues();
            $this->setCommonData();
        }
    }
?>
