<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/pager/pager.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
		
    /**
     * \ingroup View
     * @private
     *
	 * shows a list with all the blogs from the site
	 */
	class AdminSiteBlogsListView extends AdminTemplatedView
	{
		var $_page;
		var $_status;
		
		function AdminSiteBlogsListView( $blogInfo )
		{
			$this->AdminTemplatedView( $blogInfo, "siteblogs" );
			
			$this->_page = $this->getCurrentPageFromRequest();
		}
		
		/**
		 * retrieves the current status from the request
		 *
		 * @private
		 * @return nothing
		 */
		function getStatusFromRequest()
		{
			$status = HttpVars::getRequestValue( "status" );
			
			// validate the value 
			$val = new IntegerValidator();
			if( !$val->validate( $status ))
				$status = BlogStatus::getDefaultStatus();
				
			// if the value validated, check if it is a valid status
			if( !BlogStatus::isValidStatus( $status ))
				$status = BlogStatus::getDefaultStatus();
				
			return $status;
		}		
		
		function render()
		{			
            // we need to get all the blogs
			// get the data itself
			$this->_status = $this->getStatusFromRequest();
			$blogs = new Blogs();
            $siteBlogs = $blogs->getAllBlogs( $this->_status, $this->_page, DEFAULT_ITEMS_PER_PAGE );
			$numBlogs = $blogs->getNumBlogs( $this->_status );
            if( !$siteBlogs ) {
            	$siteBlogs = Array();
            }
            
            // throw the right event
			$this->notifyEvent( EVENT_BLOGS_LOADED, Array( "blogs" => &$siteBlogs ));            
            
			// calculate the links to the different pages
			$pager = new Pager( "?op=editSiteBlogs&amp;status=".$this->_status."&amp;page=",
			                    $this->_page, 
								$numBlogs, 
								DEFAULT_ITEMS_PER_PAGE );

			$this->setValue( "siteblogs", $siteBlogs );
			$this->setValue( "pager", $pager );
			$this->setValue( "currentstatus", $this->_status );
			$this->setValue( "blogstatus", BlogStatus::getStatusList( true ));
		
			// let the parent view do its job
			parent::render();                        
		}
	}
?>