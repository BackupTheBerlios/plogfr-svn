<?php

	include_once( PLOG_CLASS_PATH."class/view/view.class.php" );
    include_once( PLOG_CLASS_PATH."class/template/templateservice.class.php" );
	include_once( PLOG_CLASS_PATH."class/locale/locales.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );

    class SummaryView extends View 
	{

        var $_templateName;

        function SummaryView( $templateName )
        {
            $this->View();
            $this->_templateName = $templateName;            
        }
        
        /**
         * @private
         */
        function _getLocale()
        {
            // load the Locale object from the view context or initialize it now            
            if( $this->_params->keyExists( "locale" )) {
                $this->_locale = $this->_params->getValue( "locale" );
            }
            else {	        
                $config =& Config::getConfig();
                $this->_locale =& Locales::getLocale( $config->getValue("default_locale" ));		        
            }
        }        

        function render()
        {
			// load the locale
			$this->_getLocale();
			// set the view character set based on the locale			
			$this->setCharset( $this->_locale->getCharset());

			parent::render();
		
            $templateService = new TemplateService();
            $template = $templateService->customTemplate( $this->_templateName, "summary" );

            $this->_params->setValue( "version", new Version());
            $this->_params->setValue( "locale", $this->_locale );
            $template->assign( $this->_params->getAsArray());
            print $template->fetch();
        }
    }
?>