<? 
$pprofile = array(); 
/*
*  movabletype Ports file (categories > posts > comments)
*  
*  The ports file provides a map for fields from the source table to the 
*  fields existing in pLog.  They must be listed in the same order as in
*  your profile, and must go in the order:  users > blogs > categories > 
*  posts > comments, though you don't necessarily need to include all
*  of these sections.
*
*
*  category fields:  id, name, blog_id, modified, main_page
*  comments fields:  article_id, parent_id, topic, text, date, user_name,
*			   user_email, user_url, client_ip
*  blogs fields:	   name, owner, about, blog_id
*  posts fields:	   id, title, text, category, user_id, blog_id, status, 
*			   date, comments
*  users fields:	   id, username, password, email, about, fullname
*
*/
$pprofile["users"] = array(
	"author_id" 	=> "id",
	"author_name" 	=> "username",
	"author_password" => "password",
	"author_email"	=> "email",
   );

$pprofile["blogs"] = array(
  	"blog_id" => "blog_id",
	"blog_name" => "name",
   );

$pprofile["categories"] = array( 
	"category_id" 	 => "id",
	"category_blog_id" => "blog_id",
	"category_label"	 => "name"	
   ); 

$pprofile["posts"] = array( 
	"entry_id"   	=> "id",
	"entry_category_id" => "category",
	"entry_blog_id"	=> "blog_id",
	"entry_title"	=> "title",
	"entry_text"	=> "text",
	"entry_modified_on" => "date",
	"entry_status"	=> "status",
	"entry_allow_comments" => "comments"
   ); 

$pprofile["comments"] = array( 
	"comment_entry_id" => "article_id", 
	"comment_text" 	=> "text",
	"comment_created_on" => "date",
	"comment_email" 	=> "user_email",
	"comment_url" 	=> "user_url",
	"comment_author" 	=> "user_name",
	"comment_ip" 	=> "client_ip"
   ); 

?> 
