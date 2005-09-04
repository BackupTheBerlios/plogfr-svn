<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminbloguserslistview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Shows the list of users that belong to this blog
     */
    class AdminShowBlogUsersAction extends BlogOwnerAdminAction 
	{

    	function AdminShowBlogUsersAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        function perform()
        {
			// load the right view... and that's it :-)
			$this->_view = new AdminBlogUsersListView( $this->_blogInfo );
            $this->setCommonData();

            return true;
        }
    }
?>