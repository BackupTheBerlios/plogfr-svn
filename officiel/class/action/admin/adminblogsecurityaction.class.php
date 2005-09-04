<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Does nothing yet :)
     */
    class AdminBlogSecurityAction extends BlogOwnerAdminAction {

        function AdminBlogSecurityAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
            $this->_view = new AdminTemplatedView( $this->_blogInfo, "blogsecurity" );
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
