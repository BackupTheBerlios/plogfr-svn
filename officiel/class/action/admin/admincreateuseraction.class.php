<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminadduserview.class.php" );

    /**
     * \ingroup Action
     * @private
     */
    class AdminCreateUserAction extends SiteAdminAction 
    {

    	function AdminCreateUserAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        function perform()
        {
			// get a list of all the blogs available
            $this->_view = new AdminAddUserView( $this->_blogInfo );
            $this->setCommonData();

            return true;
        }
    }
?>