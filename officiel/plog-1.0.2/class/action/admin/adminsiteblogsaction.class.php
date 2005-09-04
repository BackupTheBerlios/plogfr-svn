<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminsiteblogslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Shows a list with all the blogs available in the site
     */
    class AdminSiteBlogsAction extends SiteAdminAction 
	{

    	function AdminSiteBlogsAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }
        
        function perform()
        {
	        $this->_view = new AdminSiteBlogsListView( $this->_blogInfo );
	        $this->setCommonData();
	        
            return true;
        }
    }
?>