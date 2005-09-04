<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Defines blog-wide custom fields
     */
    class AdminNewCustomFieldAction extends BlogOwnerAdminAction 
	{

        function AdminBlogCustomFieldsAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	$this->_view = new AdminTemplatedView( $this->_blogInfo, "newcustomfield" );
			$this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
