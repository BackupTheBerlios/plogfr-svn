<?php

    include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    
    class SecretItems extends Model
    {
    
        function SecretItems()
        {
            $this->Model();
        }
        
        function articleIsSecret( $articleId )
        {
			$articles = new Articles();
			if( is_numeric($articleId))
				$article = $articles->getBlogArticle( $articleId );
			else
				$article = $articles->getBlogArticleByTitle( $articleId );

			if( !$article )
				return false;
			
			if( !$article->hasField( "password_protected" ))
				return false;
				
			$isSecretField = $article->getFieldObject( "password_protected" );
			
			return( $isSecretField->getValue() == "1" );
        }
		
		function authenticateItem( $articleId, $password )
		{
			$articles = new Articles();
			$article = $articles->getBlogArticle( $articleId );
						
			if( !$article->hasField( "password_field" ))
				return false;
				
			$passwordField = $article->getFieldObject( "password_field" );
			
			return( $passwordField->getValue() == $password );		
		}
		
		function authenticateItemHash( $articleId, $password )
		{
			$articles = new Articles();
			$article = $articles->getBlogArticle( $articleId );
			
			$passwordField = $article->getFieldObject( "password_field" );
			
			return( md5($passwordField->getValue()) == $password );		
		}		

    }
?>
