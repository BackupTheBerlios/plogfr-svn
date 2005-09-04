<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admincreateblogview.class.php" );

    /**
     * \ingroup Action
     * @private
     */
    class AdminCreateBlogAction extends SiteAdminAction 
	{

    	function AdminCreateBlogAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        function perform()
        {
	        $this->_view = new AdminCreateBlogView( $this->_blogInfo );
            $this->setCommonData();

            return true;
        }
    }
?>