<? 
$pprofile = array(); 
/*
*  bBlog Ports file (categories > posts > comments)
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
*  users fields:	   username, password, email, about, fullname
*
*/

$pprofile["categories"] = array( 
   "sectionid" => "id",
   "nicename" => "name"
   ); 


$pprofile["posts"] = array( 
   "postid"   => "id",
   "sections" => "category",
   "title"    => "title",
   "body"     => "text",
   "posttime_plog" => "date",
   "status"   => "status"
); 

$pprofile["comments"] = array( 
   "postid" => "article_id", 
   "title" => "topic",
   "commenttext" => "text",
   "posttime_plog" => "date",
   "posteremail" => "user_email",
   "posterwebsite" => "user_url",
   "postername" => "user_name",
   "ip" => "client_ip"
   ); 

?> 
