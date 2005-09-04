<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Shows a form to add a user to the blog
     */
    class AdminNewBlogUserAction extends BlogOwnerAdminAction 
    {

    	function AdminNewBlogUserAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        function perform()
        {
        	$this->_view = new AdminTemplatedView( $this->_blogInfo, "addbloguser" );
            $this->setCommonData();

            return true;
        }
    }
?>