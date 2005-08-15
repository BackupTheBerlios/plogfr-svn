<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/view/adminnewblogblockedhostview.class.php" );

    /**
     * Shows a form to add a new blocked content to the blog
     */
    class AdminNewBlogBlockedHostAction extends BlogOwnerAdminAction 
	{

    	function AdminNewBlogBlockedHostAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        function perform()
        {
        	$this->_view = new AdminNewBlogBlockedHostView( $this->_blogInfo );
        	
            $this->setCommonData();

            return true;
        }
    }
?>
