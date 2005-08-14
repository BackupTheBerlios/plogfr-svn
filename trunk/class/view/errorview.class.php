<?php

	include_once( PLOG_CLASS_PATH."class/view/blogview.class.php" );

	define( "ERROR_TEMPLATE", "error" );

    /**
     * \ingroup View
     *
     * The ErrorView class takes care of showing error messages. Use this view whenever you need to
     * show an error message in the public side of the blog.
     */
    class ErrorView extends BlogView 
    {

		function ErrorView( $blogInfo, $message = null )
        {
        	$this->BlogView( $blogInfo, ERROR_TEMPLATE, SMARTY_VIEW_CACHE_DISABLED );

            $this->_message = $message;
        }
		
		/**
		 * overriden from View::setErrorMessage, it simply sets the "message"
		 * variable to the error message that we're being given
		 *
		 * @param message the new error message
		 * @see View::setErrorMessage()
		 * @return Always true
		 */
		function setErrorMessage( $message )
		{
			$this->setValue( "message", $message );
			
			return( parent::setErrorMessage( $message ));
		}

        /** 
         * renders the error message
         */
        function render()
        {
            if(!empty($this->_message))
	            $this->setValue( "message", $this->_message );
	        
			parent::render();
        }
    }
?>