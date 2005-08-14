<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admincustomfieldslistview.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfields.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Custom fields that have been defined so far 
     */
    class AdminBlogCustomFieldsAction extends BlogOwnerAdminAction 
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
			// the view will do everything for us anyway... :)
			$this->_view = new AdminCustomFieldsListView( $this->_blogInfo );
			$this->setCommonData();
        }
    }
?>