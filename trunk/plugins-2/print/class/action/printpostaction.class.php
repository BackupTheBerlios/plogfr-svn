<?php
    include_once( PLOG_CLASS_PATH."class/net/http/httpvars.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/plugintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/errorview.class.php" );    
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	
	
	class PrintPostAction extends BlogAction
	{
	   var $_articleId;
	
	   function PrintPostAction( $actionInfo, $request )
	   {
	       $this->BlogAction( $actionInfo, $request );
	   }
	   
	   function validate()
	   {
	       $this->_articleId = $this->_request->getValue( "articleId" );
	       
	       $val = new IntegerValidator();
	       if( !$val->validate( $this->_articleId )) {
	           $this->_view = new nErrorView( $this->_blogInfo );
	           $this->_view->setMessage( $this->_locale->tr( "error_incorrect_article_id" ));
	           $this->setCommonData();
	           
	           return false;
	       }
	       
	       return true;
	   }
	   
	   function perform()
	   {
	       // try to fetch the article
	       $articles = new Articles();
	       $article = $articles->getBlogArticle( $this->_articleId, $this->_blogInfo->getId());
	       
	       // if there was an error, show a message and quit
	       if( !$article ) {
	           $this->_view = new AdminErrorView( $this->_blogInfo );
	           $this->_view->setMessage( $this->_locale->tr( "error_fetching_article" ));
	           $this->setCommonData();
	           
	           return false;
	       }
	       
	       // otherwise continue...
	       $this->_view = new PluginTemplatedView( $this->_blogInfo, "print", "printview", false );
	       $this->_view->setValue( "article", $article );
	       $this->setCommonData();
	       
	       return true;
	   }
	}
	
