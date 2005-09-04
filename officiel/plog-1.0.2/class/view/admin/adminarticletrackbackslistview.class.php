<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminpostslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );	
	include_once( PLOG_CLASS_PATH."class/dao/trackbacks.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/pager/pager.class.php" );
	
    /**
     * \ingroup View
     * @private
     *
	 * shows a list with all the trackbacks received for a certain article
	 */
	class AdminArticleTrackbacksListView extends AdminTemplatedView
	{
    	var $_articleId;
	
		function AdminArticleTrackbacksListView( $blogInfo, $params = Array())
		{
			$this->AdminTemplatedView( $blogInfo, "edittrackbacks" );
						
			// fetch the article id
			$this->_article = $params["article"];
			
			// page
			$this->_page = $this->getCurrentPageFromRequest();
		}
		
		/**
		 * show the contents of the view
		 */
		function render()
		{
			$trackbacks = new Trackbacks();
			// get the trackbacks
			$postTrackbacks = $trackbacks->getArticleTrackbacks( $this->_article->getId(), $this->_page, DEFAULT_ITEMS_PER_PAGE );
			$this->notifyEvent( EVENT_TRACKBACKS_LOADED, Array( "trackbacks" => &$postTrackbacks ));
			$this->setValue( "trackbacks", $postTrackbacks);
			// and the total number of trackbacks
			$numTrackbacks = $trackbacks->getNumTrackbacksArticle( $this->_article->getId());
			
			// create and export the pager to the view
			$pager = new Pager( "?op=editTrackbacks&amp;articleId=".$this->_article->getId()."&amp;page=",
			                    $this->_page,
								$numTrackbacks,
								DEFAULT_ITEMS_PER_PAGE );
			$this->setValue( "pager", $pager );
				
			// pass the common data to the templates
			$this->setValue( "post", $this->_article );
			parent::render();
		}
	}
?>