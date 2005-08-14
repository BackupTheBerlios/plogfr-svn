<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminglobalsettingslistview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Updates the settings of the site
     */
    class AdminUpdateGlobalSettingsAction extends SiteAdminAction 
    {

    	var $_newConfigOpts;

    	function AdminUpdateGlobalSettingsAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        function validate()
        {
	    	// all the seettings come from a very nice array from the html form
            $this->_newConfigOpts = Array();
            $this->_newConfigOpts = $this->_request->getValue( "config" );

            // the xmlrpc_ping_hosts requires special treatment, since we need to
            // split the input returned from the textbox into an array
            if( isset( $this->_newConfigOpts["xmlrpc_ping_hosts"])) {
                $array = Array();
                foreach(explode( "\r\n", $this->_newConfigOpts["xmlrpc_ping_hosts"] ) as $host ) {
                	trim($host);
                	if( $host != "" && $host != "\r\n" && $host != "\r" && $host != "\n" )
                    	array_push( $array, $host );
                }
                $this->_newConfigOpts["xmlrpc_ping_hosts"] = $array;
            }

            // the 'locales' and 'arrays' settings are not coming from the request
            $configOpts = $this->_config->getAsArray();
            $locales = new Locales();
            $this->_newConfigOpts["locales"] = $locales->getAvailableLocales();
            $this->_newConfigOpts["templates"] = $configOpts["templates"];

            return true;
        }

        function perform()
        {
        	// we can proceed to update the config
            foreach( $this->_newConfigOpts as $key => $value ) {
            	$this->_config->setValue( $key, $value );
            }
            // and finally save everything
            $res = $this->_config->save();

            // depending on the result, we shall show one thing or another...
            if( $res ) {
            	$this->_view = new AdminGlobalSettingsListView( $this->_blogInfo );
                $this->_view->setSuccessMessage( $this->_locale->tr("site_config_saved_ok"));
                $this->setCommonData();
				// clear the contents of all the caches
				CacheControl::resetAllCaches();
            }
            else {
            	$this->_view = new AdminGlobalSettingsListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_saving_site_config"));
                $this->setCommonData();
            }

            return $res;
        }
    }
?>
