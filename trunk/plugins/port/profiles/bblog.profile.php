<? 
// port2plog profile for bblog 

// profile definitions 
$profile = array(); 
$profile["name"] = "bBlog"; 
$profile["version"] = "??"; 
$profile["revision"] = 2004060701; 
$profile["std_prefix"] = "bB_"; 
$profile["author"] = "rdx"; 

// these are defined "ports". 

/* definition syntax 
* 
* array( 
* [identifier] => array( 
"query" => [query], 
"table" => [table name], 
"params" => array([field1], [field2]), 
"callbacks" => array( 
[field_name] => [function_name] 
) 
) 

- remarks - 
"params" => params is an array of field names. they must come the _exact_ order which the equal-named incomping port (look at ports.conf.php) expects. look at the sql query and the order 
"callbacks" => is an _optional_ array with speicified callbacks. a callbacks takes the field [field_name] and gives the value to the function [function_name] and uses the return value for inserting. define the function you need in this file! ;-) 

*/ 

$ports = array( 
"posts" => array( 
"query" => "SELECT *, FROM_UNIXTIME(posttime) AS posttime_plog FROM `%s`;", 
"table" => "posts", 
"params" => array("postid","sections","title","body","posttime_plog","status"), 
"callbacks" => array( 
"sections" => "get_section_id", 
"body" => "linebreak", 
"status" => "determine_status" 
) 
), 
"comments" => array( 
"query" => "SELECT *, FROM_UNIXTIME(posttime) AS posttime_plog FROM `%s`;", 
"table" => "comments", 
"params" => array("postid","title","commenttext","posttime_plog","posteremail","posterwebsite","postername","ip"), 
"callbacks" => array( 
"commenttext" => "linebreak" 
) 
), 
"categories" => array( 
"query" => "SELECT * FROM `%s`;", 
"table" => "sections", 
"params" => array("sectionid","nicename"), 
) 

); 

// callback functions (prefix always "t_" !) -> you don't have to specify "t_" in your callback array above! 

function t_linebreak($string) { 
/* 
converts all \n's to <br> 
*/ 
return str_replace("\n","<br>",$string); 

} 

function t_get_section_id($string) { 
/* 
bblog allows multiple categories and saves them in one string - this is bad for plog so we take the first section 
*/ 
if(strlen($string)<1) { 
$cat = 0; 
}else{ 
$cats = explode(":",$string); 
$cat = $cats[1]; 
} 
return $cat; 
} 

function t_determine_status($string) { 
/* 
we also want to port that.. *g 
*/ 
if($string == "live") $string = "published"; 
return $string; 
// bblog: live & draft, plog = published, draft 
} 

?> 

