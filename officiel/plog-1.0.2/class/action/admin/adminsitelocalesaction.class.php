<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminsitelocaleslistview.class.php" );
	
    /**
     * \ingroup Action
     * @private
     *
	 * displays a list with all the locales available in this site
	 */
    class AdminSiteLocalesAction extends SiteAdminAction {

    	function AdminSiteLocalesAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        function perform()
        {
            $this->_view = new AdminSiteLocalesListView( $this->_blogInfo );
            $this->setCommonData();
            
            return true;
        }
    }
?>