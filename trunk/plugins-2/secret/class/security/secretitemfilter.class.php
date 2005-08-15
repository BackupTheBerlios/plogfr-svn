<?php

    include_once( PLOG_CLASS_PATH."class/security/pipelinefilter.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/secret/class/dao/secretitems.class.php" );
    include_once( PLOG_CLASS_PATH."class/template/templateservice.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/requestgenerator.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/httpvars.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );

    /**
     * Filters the text posted in a comment by a user, to prevent spam-bots. This
     * filter only works if the incoming request has the "op" parameter as
     * "AddComment", because then it means that we're posting a comment. If it's not
     * like that, then we'll quit. Otherwise, the process will continue as normally.
     */
    class SecretItemFilter extends PipelineFilter 
    {

        function SecretItemFilter( $pipelineRequest )
        {
            $this->PipelineFilter( $pipelineRequest );
        }

        function filter()
        {
            // get some info
            $blogInfo = $this->_pipelineRequest->getBlogInfo();
            $request  = $this->_pipelineRequest->getHttpRequest();
            $session  = HttpVars::getSession();         
            
            // get the article id from the request, since if it is available, then we know
            // that we have to ask for the password before we can let users watch it
            $articleId = $request->getValue( "articleId" );

            // If we use custom url mode, the article id is not available, we need to use
            // - articleName
            // - userId
            // - categoryId
            // - date
            // and $articles->getBlogArticleByTitle() to find the value
            if( $articleId == "" ) {
                $articleName = $request->getValue( "articleName" );
                $categoryId = $request->getValue( "postCategoryId", -1 );
                $categoryName = $request->getValue( "postCategoryName" );
                $userId = $request->getValue( "userId", -1 );
                $userName = $request->getValue( "userName" );
                $date = $request->getValue( "Date", -1 );

                // If userName available, use it to find userId
                if( $userName ) {
                    $users =& new Users();
                    $user = $users->getUserInfoFromUsername( $userName );
                    if( !$user ) {
                        $result = new PipelineResult( true );
                        return $result;         
                    }
                    // if there was a user, use his/her id
                    $userId = $user->getId();
                }
                // If categoryName available, use it to find categoryId
                if( $categoryName ) {
                    $categories =& new ArticleCategories();
                    $category = $categories->getCategoryByName( $categoryName, $blogInfo->getId());
                    if( !$category ) {
                        $result = new PipelineResult( true );
                        return $result; 
                    }
                    // if there was a user, use his/her id
                    $categoryId = $category->getId();
                }
        
                // fetch the article
                // the article identifier can be either its internal id number or its mangled topic
                $articles =& new Articles();
                $article  = $articles->getBlogArticleByTitle( $articleName, $blogInfo->getId(), false,
                                                              $date, $categoryId, $userId, POST_STATUS_PUBLISHED );

                if( $article ) {
                    $articleId = $article->getId();
                } else {
                    $result = new PipelineResult( true );
                    return $result;
                }
            }
            
            // check if the article should be protected or not
            $secretItems = new SecretItems();
            if( $secretItems->articleIsSecret( $articleId )) {
                // if so, first check if the password does not already exist in the session
                $itemPassword = $request->getValue( "itemPassword" );
                
                // do we already have this information in the session?
                $sessionKey = "article_".$articleId."_auth";
                if( $session[ "$sessionKey" ] != "" ) {
                    // check if the information is correct
                    if( $secretItems->authenticateItemHash( $articleId, $session[ "$sessionKey" ] )) {
                        // if all correct, go ahead!
                        $result = new PipelineResult( true );
                        return $result;
                    }
                }
                
                // if not, check if we are authenticating now...
                if( $itemPassword != "" ) {
                    // authenticate using the given password
                    if( !$secretItems->authenticateItem( $articleId, $itemPassword )) {
                        $result = new PipelineResult( false, 500, "Better luck next time!" );
                    }
                    else {
                        // if the user authenticated correctly, then put the information in the session
                        _debug("authenticated correctly!");
                        $session = HttpVars::getSession();
                        $session[ "$sessionKey" ] = md5( $itemPassword );
                        $result = new PipelineResult( true );
                        HttpVars::setSession( $session );
                    }
                }
                else {
                    $ts = new TemplateService();
                    $t = $ts->PluginTemplate( "secret", "passwordform" );
                    $t->assign( "locale", $blogInfo->getLocale() );
                    $t->assign( "params", $request->getAsArray());
                    $t->assign( "articleId", $articleId );
                    $t->assign( "url", RequestGenerator::getRequestGenerator( $blogInfo ));
                    $message = $t->fetch();
                    $result =  new PipelineResult( false, 500, $message );
                }
                
                return $result;
            }

            // if everything went fine, we can say so by returning
            // a positive PipelineResult object
            $result = new PipelineResult( true );
            
            return $result;
        }
    }
?>
