<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
	
    /**
     * \ingroup View
     * @private
     *	
	 * shows a list with all the global parameters
	 */
	class AdminGlobalSettingsListView extends AdminTemplatedView
	{
		var $_section;
		
	    // list with the defined sections
	
		function AdminGlobalSettingsListView( $blogInfo, $section = "all" )
		{
			$this->AdminTemplatedView( $blogInfo, "globalsettings" );
			
			$this->_section = $section;
			
			// array with the defined sections
			$this->_sections = Array( "general", "summary", "templates", "url", "email",
	                                  "uploads", "helpers", "interfaces", "security",
	                                  "bayesian", "resources", "search" );			
		}
		
		function render()
		{
			// if the section is not correct, then use the default "general"
			if( !in_array( $this->_section, $this->_sections ))
				$this->_section = "general";
			 
			// export all the config parameters
            $config =& Config::getConfig();
            $settings = $config->getAsArray();
            $this->setValue( "settings", $settings );
            foreach( $settings as $key => $value ) {
            	$this->setValue( $key, $value );
            }

            // set the section too
            $this->setValue( "section", $this->_section );
            
            parent::render();
		}
	}
?>