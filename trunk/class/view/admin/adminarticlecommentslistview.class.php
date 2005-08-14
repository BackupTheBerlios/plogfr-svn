<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecomments.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecommentstatus.class.php" );	
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );	
	include_once( PLOG_CLASS_PATH."class/data/pager/pager.class.php" );

    /**
     * \ingroup View
     * @private
     *	
	 * shows a list of the comments 
	 */
	class AdminArticleCommentsListView extends AdminTemplatedView
	{
    	var $_article;
		var $_commentStatus;	
		var $_page;
	
		function AdminArticleCommentsListView( $blogInfo, $params = Array())
		{
			$this->AdminTemplatedView( $blogInfo, "editcomments" );
			
			$blogSettings = $blogInfo->getSettings();
			$this->_locale =& Locales::getLocale( $blogSettings->getValue( "locale" ), "en_UK" );			
			
			$this->_setParameters( $params );

			$this->_page = $this->getCurrentPageFromRequest();
		}
		
		/**
		 * @private
		 */
		function _setParameters( $params )
		{
			// fetch the article id
			$this->_article = $params["article"];
			
			// load the status
			$this->_commentStatus = $params["showStatus"];
			if( !ArticleCommentStatus::isValidStatus( $this->_commentStatus )) 
				$this->_commentStatus = COMMENT_STATUS_ALL;			
		}
		
		/**
		 * show the contents of the view
		 */
		function render()
		{
			// load the comments and throw the correct event
			$comments = new ArticleComments();
			$postComments = $comments->getPostComments( $this->_article->getId(),
														COMMENT_ORDER_NEWEST_FIRST,
														$this->_commentStatus, 
														$this->_page, 
														DEFAULT_ITEMS_PER_PAGE );
			$this->notifyEvent( EVENT_COMMENTS_LOADED, Array( "comments", &$postComments ));
			// number of comments
			$numPostComments = $comments->getNumPostComments( $this->_article->getId(), $this->_commentStatus );

			if( $this->_commentStatus > -1 )
				$pagerUrl = "?op=editComments&amp;articleId=".$this->_article->getId()."&amp;showStatus=".$this->_commentStatus."&amp;page=";
			else
				$pagerUrl = "?op=editComments&amp;articleId=".$this->_article->getId()."&amp;page=";
				
			// calculate the pager url
			$pager = new Pager( $pagerUrl,
					    $this->_page,
					    $numPostComments,
					    DEFAULT_ITEMS_PER_PAGE );
														
			// get a list with all the different comment status
			$statusList = ArticleCommentStatus::getStatusList( true );
			// and pass all the information to the templates
			$this->setValue( "comments", $postComments);
			$this->setValue( "commentstatus", $statusList );
			$this->setValue( "currentstatus", $this->_commentStatus );

			// pass the pager to the view
			$this->setValue( "pager", $pager );+
		
			// pass the common data to the templates
			$this->setValue( "post", $this->_article );
						
			parent::render();
		}
	}
?>