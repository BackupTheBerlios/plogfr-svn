<?php

	include_once( PLOG_CLASS_PATH."class/summary/view/summaryview.class.php" );
	include_once( PLOG_CLASS_PATH."class/locale/locales.class.php" );
	
	/**
	 * shows a list with all the locales so that users can choose, too
	 */
	class doBlogRegistrationView extends SummaryView
	{
	
		function doBlogRegistrationView()
		{
			$this->SummaryView( "registerstep2" );
		}
		
		function render()
		{
			// get the list of languages available, so that users can choose
			$locales = Locales::getLocales();
			$this->setValue( "locales", $locales );
            
            $config =& Config::getConfig();
            // assign default Local to template
            $this->setValue( "defaultLocale", $config->getValue("default_locale" ) );
			
			// and render the rest of the contents of the view
			parent::render();
		}
	}
?>