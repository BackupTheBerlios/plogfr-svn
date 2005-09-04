<?php

	include_once( PLOG_CLASS_PATH."class/summary/view/summarycachedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/pager/pager.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
	include_once( PLOG_CLASS_PATH."class/summary/dao/summarystats.class.php" );
	
	/**
	 * shows a paged list of blogs
	 */
	class SummaryBlogListView extends SummaryCachedView
	{
		var $_numBlogs;
		var $_numBlogsPerPage;
	
		function SummaryBlogListView( $data = Array())
		{
			// get the page
			$this->_page = $this->getCurrentPageFromRequest();
			
			$this->SummaryCachedView( "blogslist", $data );
			
			// items per page
            //$this->_numUsers = $this->_config->getValue( "summary_page_show_max" );
            $config =& Config::getConfig();
			$this->_numBlogsPerPage = $config->getValue( "summary_blogs_per_page", SUMMARY_DEFAULT_ITEMS_PER_PAGE );
		}
		
		function render()
		{
			// do nothing if the contents of our view are cached
			if( $this->isCached()) {
				parent::render();
				return true;
			}

			// get the data itself
			$blogs = new Blogs();
            $siteBlogs = $blogs->getAllBlogs( BLOG_STATUS_ACTIVE, $this->_page, $this->_numBlogsPerPage );
			$numBlogs = $blogs->getNumBlogs( BLOG_STATUS_ACTIVE );
			
            if( !$siteBlogs ) {
                // if there was an error, show the error view
				$siteBlogs = Array();
            }
			
			// calculate the links to the different pages
			$pager = new Pager( "?op=BlogList&amp;page=",
			                    $this->_page, 
								$numBlogs, 
								$this->_numBlogsPerPage );

			$this->setValue( "blogs", $siteBlogs );
			$this->setValue( "pager", $pager );
		
			// let the parent view do its job
			parent::render();
		}
	}
?>