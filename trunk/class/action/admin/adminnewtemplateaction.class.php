<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesetstorage.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Shows a form to add a new locale file
     */
    class AdminNewTemplateAction extends SiteAdminAction {

    	function AdminNewLocaleAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        function perform()
        {
        	$this->_view = new AdminTemplatedView( $this->_blogInfo, "newglobaltemplate" );
        	$this->_view->setValue( "templateFolder", TemplateSetStorage::getBaseTemplateFolder());
            $this->setCommonData();

            return true;
        }
    }
?>
