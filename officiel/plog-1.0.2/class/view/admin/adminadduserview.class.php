<?php

	include_once( PLOG_CLASS_PATH.'class/view/admin/admintemplatedview.class.php' );
	include_once( PLOG_CLASS_PATH.'class/dao/blogs.class.php' );
	include_once( PLOG_CLASS_PATH.'class/dao/userstatus.class.php' );
	

    /**
     * \ingroup View
     * @private
     *	
	 * shows a special view to add a user to the site
	 */
	class AdminAddUserView extends AdminTemplatedView
	{
	
		function AdminAddUserView( $blogInfo )
		{
			$this->AdminTemplatedView( $blogInfo, 'createuser' );	
		}
		
		function render()
		{
			// load the list of blogs
			$blogs = new Blogs();
			$siteBlogs = $blogs->getAllBlogs();
			
			$this->setValue( 'siteblogs', $siteBlogs );
			$this->setValue( 'userStatusList', UserStatus::getStatusList());
		
			parent::render();
		}
	}
?>