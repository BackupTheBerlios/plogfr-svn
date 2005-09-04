<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminsiteuserslistview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * This one only shows some statistics about the site...
     */
    class AdminSiteUsersAction extends SiteAdminAction 
	{

    	function AdminSiteUsersAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        function perform()
        {
	        $this->_view = new AdminSiteUsersListView( $this->_blogInfo );
	        $this->setCommonData();

            return true;
        }
    }
?>
