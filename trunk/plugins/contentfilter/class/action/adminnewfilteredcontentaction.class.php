<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminnewfilteredcontentview.class.php" );

    /**
     * Shows a form to add a new blocked content to the blog
     */
    class AdminNewFilteredContentAction extends SiteAdminAction {

    	function AdminNewFilteredContentAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        function perform()
        {
        	$this->_view = new AdminNewFilteredContentView( $this->_blogInfo );
        	
            $this->setCommonData();

            return true;
        }
    }
?>
