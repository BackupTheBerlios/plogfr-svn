<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminblogtemplatesetslistview.class.php" );

    /**
     * \ingroup Action
     * @private
     */
    class AdminEditBlogTemplatesAction extends BlogOwnerAdminAction 
	{

        function AdminEditBlogTemplatesAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
            $this->_view = new AdminBlogTemplateSetsListView( $this->_blogInfo );
            $this->setCommonData();

            return true;
        }
    }
?>
