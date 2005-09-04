<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );

    /**
     * \ingroup Action
     *
     * Extends the AdminAction class in a way that any class subclassing this one,
     * will check if the user has BLOG_OWNER privileges to be here. The implementation is
     * quite simple in the sense that if the UserInfo object that was trying to access
     * this action doesn't have enough privileges, the action will show a really
     * ugly message and all processing will stop. 
     *
     * Hopefully future versions will improve this area and show a friendlier message.
     */
    class BlogOwnerAdminAction extends AdminAction 
    {

    	/**
         * The constructor calls AdminAction so that we can fetch the information we need
         * from the session (blogInfo and userInfo) and then check if the owner of the blog
         * is the same as the user who is currently trying to access. If so, we continue. If not,
         * then we show an error message and quit.
         */   
    	function BlogOwnerAdminAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );

            // we should check if the user has permissions to be here...
            if( $this->_blogInfo->getOwner() != $this->_userInfo->getId()) {
            	print("Sorry, only the owner of the blog can access this area." );
                die();
            }
        }
    }
?>
