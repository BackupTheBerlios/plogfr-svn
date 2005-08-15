<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminblogfilteredcontentview.class.php" );

    /**
     * Shows the list of content that has been blocked by the current blog
     */
    class AdminBlogFilteredContentsAction extends BlogOwnerAdminAction 
	{

        function AdminBlogFilteredContentsAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
            $this->_view = new AdminBlogFilteredContentView( $this->_blogInfo );
            
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
