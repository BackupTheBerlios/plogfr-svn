<?php

include_once(PLOG_CLASS_PATH.'class/summary/action/summaryaction.class.php');
include_once(PLOG_CLASS_PATH.'class/data/validator/stringvalidator.class.php');
include_once(PLOG_CLASS_PATH.'class/dao/users.class.php');
include_once(PLOG_CLASS_PATH.'class/dao/blogs.class.php');
include_once(PLOG_CLASS_PATH.'class/summary/view/summarymessageview.class.php');
include_once(PLOG_CLASS_PATH.'class/logger/LogUtil.php');

class ActiveAccountAction extends SummaryAction 
{

    var $username;
    var $activeCode;

    function ActiveAccountAction($actionInfo,$httpRequest)
    {
        $this->SummaryAction($actionInfo,$httpRequest);

        $this->registerFieldValidator("username",new StringValidator());
        $this->registerFieldValidator("activeCode",new StringValidator());
    }

    function perform(){
        $this->username = $this->_request->getValue("username");
        $this->activeCode = $this->_request->getValue("activeCode");

        $users = new Users();
        $userInfo = $users->getUserInfoFromUsername($this->username);
        
        if(!$userInfo){
            $this->_view = new SummaryView( "summaryerror" );
                        $this->_view->setErrorMessage( $this->_locale->tr("error_invalid_user"));
            return false;
        }
		        
        $activeCode = $userInfo->getValue("activeCode");
        if($activeCode != $this->activeCode){
            $this->_view = new SummaryView( "summaryerror", $this->_locale->tr("error_invalid_activation_code"));
            return false;
        }
        
        // active user
        $userInfo->setStatus(USER_STATUS_ACTIVE);
        $users->updateUser($userInfo);
        // also active the blog that user owned
        // FIXME: how about other blogs that this user take part in?
        $blogId = $users->getUserBlogId( $this->username);
        $blogs = new Blogs();
        $blog = $blogs->getBlogInfo($blogId);
        $blog->setStatus(BLOG_STATUS_ACTIVE);
        $blogs->updateBlog($blogId,$blog);
        $blogUrl = $blog->getBlogRequestGenerator();
		
		// create the message that we're going to show
		$message = "<p>".$this->_locale->tr("blog_activated_ok")."</p><p>".
		           $this->_locale->pr("register_blog_link", $blog->getBlog(), $blogUrl->blogLink())."</p><p>".
				   $this->_locale->tr("register_blog_admin_link")."</p>";

        $this->_view = new SummaryMessageView($message);
        $this->setCommonData();
        return true;
    }
}
?>
