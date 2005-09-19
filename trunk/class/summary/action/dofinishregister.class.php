<?php

	include_once( PLOG_CLASS_PATH."class/summary/action/registeraction.class.php" );
	include_once( PLOG_CLASS_PATH."class/summary/mail/confirmemailmessage.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/cachecontrol.class.php" );	
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );

    /**
     * finish the user and blog registration process
     * @package summary
     * @subpackage action
     */
    class doFinishRegister extends RegisterAction 
	{
        var $need_confirm;

		//{{{function doFinishRegister( $actionInfo, $request )
        /**
         * constructor
         */
		function doFinishRegister( $actionInfo, $request )
		{
			$this->RegisterAction( $actionInfo, $request );			
            $this->_view = new SummaryView( "registererror" );
            $this->need_confirm = $this->_config->getValue("need_email_confirm_registration");
		}	
        //}}}

        //{{{function perform()
        /**
         * perform
         */
        function perform()
        {
            $userId = $this->createUser();
			if( !$userId )
				return false;
				
            $blogId = $this->createBlog($userId);
			if( !$blogId )
				return false;

			// let's assume that everything went fine at this point...
            $this->doneRegister();
            
            // reset the summary cache, since there's new information to show
			CacheControl::resetSummaryCache();	            
        }
        //}}}

        //{{{function createUser(){
        /**
         * create the user
         */
        function createUser(){
            // all data is already correct
            $this->userName = $this->_request->getValue("userName");
            $this->userFullName = $this->_request->getValue("userFullName");
            $this->userPassword = $this->_request->getValue("userPassword");
            $this->userEmail = $this->_request->getValue("userEmail");

            $users = new Users();
			$user = new UserInfo( $this->userName, 
                        $this->userPassword, 
                        $this->userEmail, 
                        "", // about myself
                        $this->userFullName );

            // if user registration need email confirm, that is
            // user must active his account 
            if($this->need_confirm == true){
                $user->setStatus(USER_STATUS_UNCONFIRMED);
            } else {
                $user->setStatus(USER_STATUS_ACTIVE);
            }

            $userId = $users->addUser( $user );
            if( !$userId ) {
                $this->_view = new SummaryView( "registererror" );
                $this->_view->setErrorMessage( $this->_locale->tr("error_adding_user" ));
                $this->setCommonData( true );
                return false;
            }

            return $userId;
        }
        //}}}

        //{{{function createBlog($userId){
        /**
         * create the blog
         */
        function createBlog($userId){
            $this->blogName = stripslashes($this->_request->getValue("blogName"));
            $this->blogLocale = $this->_request->getValue("blogLocale");
            $this->templateId = $this->_request->getValue("templateId");
		
            // get the default locale configured for the site
            $blogs = new Blogs();
			$blogInfo = new BlogInfo( $this->blogName, $userId, "", "" );

            if($this->need_confirm == 1){
			    $blogInfo->setStatus( BLOG_STATUS_UNCONFIRMED );
            } else {
			    $blogInfo->setStatus( BLOG_STATUS_ACTIVE );
            }

			$locale = Locales::getLocale( $this->blogLocale );
			$blogInfo->setLocale( $locale );
			$blogInfo->setTemplate( $this->templateId );
            $newblogId = $blogs->addBlog( $blogInfo );

            if( !$newblogId ) {
                $this->_view = new SummaryView( "registererror" );
                $this->_view->setErrorMessage( $this->_locale->tr("error_creating_blog"));
                return false;
            }

            // get info about the blog
            $blogInfo = $blogs->getBlogInfo( $newblogId );
			
			$this->_blogInfo = $blogInfo;

            // if the blog was created, we can add some basic information
            // add a category
            $articleCategories = new ArticleCategories();
            $articleCategory = new ArticleCategory( $locale->tr("register_default_category" ), "", $newblogId, true );
            $catId = $articleCategories->addArticleCategory( $articleCategory );

            // add an article based on that category
            $articleTopic = $locale->tr( "register_default_article_topic" );
            $articleText  = $locale->tr("register_default_article_text" );
            $article = new Article( $articleTopic, $articleText, Array( $catId ), $userId, $newblogId, POST_STATUS_PUBLISHED, 0, Array(), "welcome" );
            $article->setDateObject( new Timestamp());  // set it to the current date
            $article->setCommentsEnabled( true ); // enable comments
            $articles = new Articles();
            $articles->addArticle( $article );

            return true;
        }
        //}}}

        //{{{function doneRegister(){
        /**
         * finished registaration
         */
        function doneRegister(){
            $this->_view = new SummaryView("registerstep5");
            
            if($this->need_confirm == 1){
                $this->_view->setValue("need_email_confirm",1);
                $this->sendConfirmEmail();
            }
			else {
				// add the blog object to the template
				$this->_view->setValue( "blog", $this->_blogInfo );
			}
            
            $this->setCommonData();
            return true;
        }
        //}}}

        //{{{function sendConfirmEmail(){
        /**
         * send confirm email to user.
         * user will active his/her account according to this email
         */
        function sendConfirmEmail(){
            $activeCode = $this->generateActiveCode();

            // store the active code to the backend db in the properties field of user table
            $users = new Users();
            $userInfo = $users->getUserInfoFromUsername($this->userName);
            $userInfo->setProperties(Array("activeCode"=>$activeCode));
            $users->updateUser($userInfo);


            $message = new ConfirmEmailMessage();
            $message->setFrom( $this->_config->getValue( "post_notification_source_address" ));
            $message->addTo( $this->userEmail);
            $message->setSubject( "pLog user registration confirmation for: ".$this->userName);
            $message->setUsername($this->userName);
            $message->setActiveCode($activeCode);

            // create active Link
            $base_url = $this->_config->getValue("base_url");
            $message->setActiveLink($base_url."/summary.php?op=activeAccount&username="
                    .$this->userName."&activeCode=".$activeCode);
            $message->createBody();

            $service = new EmailService();
            $service->sendMessage( $message );

        }
        //}}}

        //{{{function generateActiveCode(){
        /**
         * generate a random active code based on current time
         * @return a string that random generated
         * @access private
         */
        function generateActiveCode(){
            srand((double)microtime() * 10000000);  
            $activeCode = md5(time() . rand(1, 10000000));
            return $activeCode;
        }
        //}}}
    }

    /*
     * vim600:  et sw=4 ts=4 fdm=marker expandtab
     * vim<600: et sw=4 ts=4 expandtab
     */
?>
