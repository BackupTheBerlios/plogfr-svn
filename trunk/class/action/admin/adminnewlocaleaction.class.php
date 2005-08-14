<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Shows a form to add a new locale file
     */
    class AdminNewLocaleAction extends SiteAdminAction 
    {

    	function AdminNewLocaleAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        function perform()
        {
        	$this->_view = new AdminTemplatedView( $this->_blogInfo, "newlocale" );
            $this->setCommonData();

            return true;
        }
    }
?>
