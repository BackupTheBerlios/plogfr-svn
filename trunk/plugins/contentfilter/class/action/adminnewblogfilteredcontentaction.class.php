<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminnewblogfilteredcontentview.class.php" );

    /**
     * Shows a form to add a new blocked content to the blog
     */
    class AdminNewBlogFilteredContentAction extends BlogOwnerAdminAction {

    	function AdminNewBlogFilteredContentAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        function perform()
        {
        	$this->_view = new AdminNewBlogFilteredContentView( $this->_blogInfo );
        	
            $this->setCommonData();

            return true;
        }
    }
?>
