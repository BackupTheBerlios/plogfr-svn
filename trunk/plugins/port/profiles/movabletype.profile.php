<? 
// port2plog profile for bblog 

// profile definitions 
$profile = array(); 
$profile["name"] = "MovableType"; 
$profile["version"] = "2.6.x"; 
$profile["revision"] = 2004070904; 
$profile["std_prefix"] = "mt_"; 
$profile["author"] = "Bradley Liang"; 


$ports = array( 
	"users" => array(
		"query" => "SELECT `author_id`, `author_name`, `author_password`, `author_email` FROM `%s`",
		"table" => "author",
		"params" => array( "author_id", "author_name", "author_password", "author_email")
	),

	"blogs" => array(
		"query" => "SELECT `blog_id`, `blog_name` FROM `%s`",
		"table" => "blog",
		"params" => array("blog_id", "blog_name")
	),
		

	"categories" => array( 
		"query" => "SELECT `category_id`, `category_blog_id`, `category_label` FROM `%s`;", 
		"table" => "category", 
		"params" => array("category_id", "category_blog_id", "category_label") 
	), 
	
	"posts" => array( 
		"query" => "SELECT `entry_id`,`entry_category_id`,`entry_blog_id`,`entry_title`,`entry_text_more`,`entry_text`,`entry_modified_on`,`entry_status`,`entry_allow_comments` FROM `%s`;", 
		"table" => "entry", 
		"params" => array("entry_id","entry_category_id", "entry_blog_id","entry_title","entry_text_more","entry_text","entry_modified_on","entry_status","entry_allow_comments"), 
		"callbacks" => array( 
			"entry_text_more" => "append_text_a",
			"entry_text"	  => "append_text_b",
			"entry_status"   => "determine_status" 
			) 
	), 

	"comments" => array( 
		"query" => "SELECT `comment_entry_id`, `comment_text`, `comment_created_on`, `comment_email`, `comment_url`, `comment_author`, `comment_ip` FROM `%s`;", 
		"table" => "comment", 
		"params" => array("comment_entry_id","comment_text","comment_created_on","comment_email","comment_url","comment_author","comment_ip"),
		"callbacks" => array(
			"comment_text" => "linebreak"
		)
	) 

	); 

// callback functions (prefix always "t_" !) -> you don`t have to specify "t_" in your callback array above! 

function t_linebreak($string) { 
     return str_replace("\r\n","<br />",$string); 
} 

function t_append_text_a($string) 
{ 
    global $_temporary;
    $_temporary = $string;

    return $string;
} 

function t_append_text_b($string) 
{ 
    global $_temporary;
    $_temporary = $string ."[@more@]". $_temporary;
	// echo $_temporary."<br /><br />";

    return t_linebreak($_temporary);
} 

function t_determine_status($string) 
{ 
    switch ($string)
    {
	case 1: $string = POST_STATUS_DRAFT;
		break;
	case 2: $string = POST_STATUS_PUBLISHED;
		break;
    }

    return $string; 
} 

?> 

