<?php

	include_once( PLOG_CLASS_PATH."class/view/blogview.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );

	define( "MAIN_TEMPLATE", "main" );

    /**
     * @private
     * \ingroup View
     *
     * Main default view that simply shows all the posts in the database
     * of a blog
     */
    class DefaultView extends BlogView 
	{

   		/**
         * Initializes the parent class
         */
    	function DefaultView( $blogInfo, $data = Array())
        {
        	$this->BlogView( $blogInfo, MAIN_TEMPLATE, SMARTY_VIEW_CACHE_CHECK, $data );
        }

        /**
         * Takes all the posts and determines if we have to add the "show more" after
         * show_more_threshold words have been counted. If so, clicking on the link
         * will show the whole post using the ViewArticle action.
         *
         * @param maxWords The amount of words we tollerate before showing the link.
         * @return nothing.
         */
        function _addShowMoreLink()
        {
        	$posts = $this->_params->getValue( 'posts' );
            $locale = $this->_blogInfo->getLocale();

            //$textFilter = new TextFilter();
            $modifPosts = Array();
            $rg = RequestGenerator::getRequestGenerator( $this->_blogInfo );
            foreach( $posts as $post ) {
                if( $post->hasExtendedText()) {				
                	$result = $post->getIntroText();
                	$showMoreText = $locale->tr( 'read_more' );
                	$showMoreLink = "&nbsp;<a href=\"".$rg->postPermalink($post)."\">".$showMoreText."</a>";
            		$post->setText( $result. $showMoreLink );
                }

                array_push( $modifPosts, $post );
            }

            $this->_params->setValue( 'posts', $modifPosts );
        }

    	/**
		 * This view shows a list of the posts for the blog.
         *
         * The blog we are going to show is determined by:
         * 1) blogId parameter in the $_REQUEST
         * 2) blogId parameter in the session
         * 3) default_blog_id parameter from the configuration file
         */
		function render()
        {
            // load the contents into the template context
            $blogSettings = $this->_blogInfo->getSettings();
			
			// we have to keep in mind that the things below only need to be done
			// in case that the view is not cached, otherwise we will get a warning message
			// because there are no posts to process! (the action will not load any data if the
			// view is cached)
			if( !$this->isCached()) {
				// check if we have to cut the posts to a determined amount of words and
				// then show the "show more" link...
				//if( $blogSettings->getValue( 'show_more_enabled' ) == true && !$this->isCached()) {			
				if( $blogSettings->getValue( 'show_more_enabled' ) == true ) {
					$this->_addShowMoreLink();
				}
			}
            
            parent::render();
        }
    }
?>