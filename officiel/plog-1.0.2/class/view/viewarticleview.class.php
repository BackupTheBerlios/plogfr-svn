<?php

	include_once( PLOG_CLASS_PATH."class/view/blogview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );	
    
	define( "VIEW_ARTICLE_TEMPLATE", "postandcomments" );    
	
    /**
     * \ingroup View
     * @private
     *
     * this view renders an article on the screen, with support for caching
     *
	 * @see BlogView
     */
	class ViewArticleView extends BlogView
	{
	
		/**
		 * creates the view
		 */
		function ViewArticleView( $blogInfo, $data = Array())
		{
			$this->BlogView( $blogInfo, VIEW_ARTICLE_TEMPLATE, SMARTY_VIEW_CACHE_CHECK, $data );
		}
		
		/**
		 * sets the article that we're going to show
		 *
		 * @param an Article object
		 * @return true
		 */
		function setArticle( $article )
		{
			$this->setValue( "post", $article );	
			
			return true;
		}
		
		/**
		 * renders this view
		 *
		 * @return nothing
		 */
		function render()
		{
			// if our view is cached, there is not much to do here...
			if( $this->isCached()) {
				parent::render();
				return true;	
			}
			
			// get the next and previous articles, based on the article we're going to show
			$article = $this->getValue( 'post' );
			
            // notify of certain events
			$postText = $article->getIntroText();
			$postExtendedText = $article->getExtendedText();
			$this->_pm->notifyEvent( EVENT_TEXT_FILTER, Array( 'text' => &$postText ));
			$this->_pm->notifyEvent( EVENT_TEXT_FILTER, Array( 'text' => &$postExtendedText ));
			$article->setIntroText( $postText );
			$article->setExtendedText( $postExtendedText );            
			// and yet one event more
			$this->_pm->notifyEvent( EVENT_POST_LOADED, Array( 'article' => &$article ));
			
			// once ready, put the article back to the context of the view
			$this->setValue( 'post', $article );			
            $this->setValue( 'comments', $article->getComments());
            $this->setValue( 'user', $article->getUser());
            $this->setValue( 'trackbacks', $article->getTrackbacks());
            
            // render the main view
            parent::render();		
		}
	}
?>