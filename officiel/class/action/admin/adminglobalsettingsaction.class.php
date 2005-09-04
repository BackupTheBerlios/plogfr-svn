<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminglobalsettingslistview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * List of all the available settings for the site
     */
    class AdminGlobalSettingsAction extends SiteAdminAction {

    	function AdminGlobalSettingsAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        function perform()
        {
            // if no problem, continue
            $section = $this->_request->getValue( "section" );
            $this->_view = new AdminGlobalSettingsListView( $this->_blogInfo, $section );
            $this->setCommonData();

            return true;
        }
    }
?>
