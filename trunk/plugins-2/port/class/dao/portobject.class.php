<?php

	include_once( PLOG_CLASS_PATH."plugins/port/class/dao/extmodel.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/userinfo.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/bloginfo.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articlecategory.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/article.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articlecomments.class.php");
	include_once( PLOG_CLASS_PATH."class/dao/usercomment.class.php");



	define( "PORT_CLASS_FILE_PATH",   PLOG_CLASS_PATH."plugins/port/");
      define( "PORT_PROFILE_FILE_PATH", PLOG_CLASS_PATH."plugins/port/profiles/" );

        /**
     * Class that implements the external data access model to read information
     * from a possibly non-pLog defined database for retrieving information from
     * other blogging software.
     */
	class PortObject extends ExtModel
	{
		var $_conf;
		var $_profile;
		var $_profile_conf;
		var $_ports;
		var $_stats;
		var $_container;
		var $_t_container;
		var $_debug;
		var $_db;
		var $_prefix;
		var $_temporary;

		// Constructor
    		function PortObject($hostname, $username, $password, $dbname, $profile, $tableprefix, $debugg)
        	{
        	    $this->ExtModel($hostname, $username, $password, $dbname, $tableprefix);
		
		    $this->_profile = $profile;
		    $this->_container = array();
		    $this->_t_container = array();
		    $this->_debug = $debugg;
		    $this->_prefix = $tableprefix;

		    $this->_loadProfile($this->_debug);
		    $this->_loadConf($this->_debug);
		    $this->_db->debug = $this->_debug;

        	}

		/*
		* PUBLIC METHODS
		*/

		function GetEntries($_debug)
		{
			$this->_loadForeignEntries($_debug);
			$this->_mapKeys($_debug);

			return true;
      	}

		function getStats()
		{
			return $this->_stats;
		}

		function getProfile()
		{
			return $this->_profile_conf;
		}

		function WriteEntries($_debug)
		{

			if ($_debug) print "<h3>Begin Writing Entries</h3>\n\r";

			foreach($this->_container as $key => $val)
			{
				$this->_t_container[$key] = $this->_container[$key];
			}

			foreach($this->_container as $key => $val)
			{
			   if ($val) 
			   {

				foreach($val as $insertdata => $fields)
				{
					if ($_debug) {
						print "<br />--- key=" . $key . ",  insertdata=";
						print_r($this->_container[$key][$insertdata]);
						print "<br />\n\r";
					}

					switch ($key)
					{
					case "blogs":
						$this->_addJournal($this->_container[$key][$insertdata], $_debug);
						break;
					case "categories":
						$this->_addCategory($this->_container[$key][$insertdata], $_debug);
						break;
					case "comments":
						$this->_addComment($this->_container[$key][$insertdata], $_debug);
						break;
					case "posts":
						$this->_addPost($this->_container[$key][$insertdata], $_debug);
						break;
					case "users":
						$this->_addUser($this->_container[$key][$insertdata], $_debug);
						break;
					}
				}
			   }

			}
		    return true;

		}




		/*
		*  PRIVATE METHODS
		*/

		function _loadConf($_debug)
		{
		    if ($_debug) print ("<h3>Loading Ports Configuration.</h3>\n\r\n\r");

		    include(PORT_PROFILE_FILE_PATH.$this->_profile.".profile.ports.php");
		    $this->_conf = $pprofile;

		    if($_debug) {
			print_r ($pprofile);
		      print  ("\n\r<h3>Done Loading Ports </h3><br />\n\r\n\r");
		    }
		    return true;
		}


 		function _loadForeignEntries($_debug)
		{
		    if ($_debug) print ("<h3>Loading Foreign Entries Specified in Profile.</h3>\n\r\n\r");

		    foreach($this->_ports as $key => $val)    {
	
			if ($_debug) echo "<br />".sprintf( $val["query"], $this->_prefix.$val["table"]).", ".$key."<br />\n\r";

		        $this->_container[$key] = $this->_loadQueryData( sprintf( $val["query"], $this->_prefix.$val["table"]), $key , $_debug);
		    }

		    if ($_debug) print ("\n\r<h3>Done Loading Entries </h3><br />\n\r\n\r");
			  
		    return true;
		}


		function _loadProfile($_debug)
		{
		    if ($_debug) print ("<h3>Loading Profile Settings:  ".$this->_profile."</h3>\n\r");

		    $file = PORT_PROFILE_FILE_PATH.$this->_profile.".profile.php";
	       
		    if ($_debug) print ("Opening:  ".$file."<br />\n\r");

		    if(!file_exists($file))
		    {
			die("Error: Could not find profile file.");
			return false;
		    }
		    else
		    {
			include($file);
			$this->_ports = $ports;
			$this->_profile_conf= $profile;

			if( (is_null($this->_prefix)) || (trim($this->_prefix == "")) )
			{
			    $this->_prefix = trim($this->_profile_conf["std_prefix"]);
			}
		    }

		    if ($_debug) print ("<h3>Profile Loaded</h3><br />\n\r\n\r");
		    return true;
		}


		function _loadQueryData($query, $port, $_debug)
		{
		    $result = $this->Execute( $query );
		    $tmp = array();

		    if (!$result) {
			if ($_debug) print "--- No entries exist, aborting.<br />\n\r";
			return NULL;
		    }

		    $this->_stats[$port]["read"] = $result->RowCount();

		    while( $row = $result->FetchRow($result) )
		    {
		        $tmp[] = $this->_transformCallbacks($row, $port);
		    }

			if ($_debug) {
			 print "--- ";
			 print_r($tmp);
			 print "<br />\n\r";
			}

		    return $tmp;
		}


		function _mapKeys($_debug)
		{
		    if ($_debug) print ("<h3>Mapping Keys</h3>\n\r");


		    foreach ( ($this->_conf) as $key => $entry)
		    {
			if ($_debug) {
				print "<br />-----------------<br />\n\r";
				print_r ($key);
				print "<br />\n\r";
				print_r ($entry);
				print "<br />-----------------<br />\n\r";
			}

			if (!$this->_container[$key] == NULL) 
			{

			   foreach ($this->_container[$key] as $index => $indexval)
			   {

				foreach ($entry as $data => $val)
				{
			   	   $keydata[$val] = $this->_container[$key][$index][$data];
			   	   if ($_debug) {
					print ($index."--- [".$val."] => ".$keydata[$val]."<br />\n\r"); 
				   }

				}
				   $this->_container[$key][$index] = $keydata;
				   // overkill?  print_r($this->_container[$key][$index]);

				   $keydata = NULL;
			   }
			}
			else
			{
				if($_debug) print ("\n\rThere are no entries for ".$key."; aborting operation.<br /><br />\n\r\n\r");
			}
		    }

		    if ($_debug) print ("<h3>Done Mapping</h3><br />\n\r\n\r");
		    return true;
		}


		function _transformCallbacks($resultset, $port)
		{
		    $callbacks = $this->_ports[$port]["callbacks"];

		    if(is_array($callbacks) && (count($callbacks) > 0))
		    {

			foreach($resultset as $key => $val)
			{
			    if(array_key_exists($key, $callbacks)) {
				$functionname = "t_".$callbacks[$key];
				$resultset[$key] = $functionname($resultset[$key]);
			    }
		          $resultset[$key] = mysql_escape_string($resultset[$key]);
			}

		    }

		    return $resultset;
		}





		/*
		*  PRIVATE FUNCTIONS::_add*
		*  these functions handle the creation and verifying process for adding articles,
		*  comments, categories, users, and blogs.
		*/





		/*
		*  Input $data[] has multiple fields.  If any are not submitted, default values
		*  are automatically entered.
		*
		*	id 		= category id     REQUIRED
		*	name		= category name
		*	blog_id 	= category is child to this journal
		*	main_page	= show this category on the main blog page
		*
		*/
		function _addCategory($data, $_debug)
		{
			if ($data["name"] 	== NULL) $data["name"] 		= "Category";
			if ($data["url"]		== NULL) $data["url"]		= "";
			if ($data["blog_id"]	== NULL) $data["blog_id"]	= 1;
			if ($data["mainpage"]	== NULL) $data["mainpage"]	= 1;

			$cat = new ArticleCategory(
				$data["name"],
				$data["url"],
				$data["blog_id"],
				$data["mainpage"]
				);

			$cats = new ArticleCategories();
			if (!($cat_id = $cats->getCategoryByName( TextFilter::urlize($data["name"]), $data["blog_id"])) )
			{
				$cat_id = $cats->addArticleCategory($cat);
				if ($_debug) print("--- --- category ".$data["name"]." added with id:  ". $cat_id ."<br />\n\r");
				 $this->_stats["categories"]["write"]++;
			}
			else
			{
				if ($_debug) print("--- --- category ".$data["name"]." already exists with id:  ". $cat_id->getId() ."<br />\n\r");
				$cat_id = $cat_id->getId();
			}

			// remap posts' category attribute to the correct ids.
			foreach ( $this->_t_container["posts"] as $post => $val) {
				if ( ($val["category"] == $data["id"] ) ||
				     ( ($val["category"] == NULL ) &&
					 ($this->_container["posts"][$post]["blog_id"] == $data["blog_id"]) )
				   )
				{
					if ($_debug) print("--- --- --- remapping post entry #".$post." to proper category id<br />\n\r");
					$this->_container["posts"][$post]["category"] = $cat_id;
				}
			}
			return $cat_id;
		}


		/*
		*  Input $data[] has multiple fields.  If any are not submitted, default values
		*  are automatically entered.
		*
		*	article_id 	= category id     REQUIRED
		*	parent_id	= category name
		*	topic 	= category is child to this journal
		*	text		= last modification
		*	date		= show this category on the main blog page
		*	user_name	= poster's inputted name
		*	user_email  = poster's inputted email
		*	user_url	= poster's inputted webpage
		*	client_ip	= poster's recorded IP address
		*/
		function _addComment($data, $_debug)
		{
			if ($data["article_id"]	== NULL) $data["article_id"] 	= 1;
			if ($data["parent_id"]	== NULL) $data["parent_id"]	= 0;
			if ($data["topic"]	== NULL) $data["topic"]		= "No Topic";
			if ($data["text"]		== NULL) $data["text"]		= "No Comment";
			if ($data["date"]		== NULL) $data["date"]		= now();
			if ($data["user_name"]	== NULL) $data["user_name"]	= "";
			if ($data["user_email"]	== NULL) $data["user_email"]	= "";
			if ($data["user_url"]	== NULL) $data["user_url"]	= "";
			if ($data["client_ip"]	== NULL) $data["client_ip"]	= "0.0.0.0";

			$coms = new ArticleComments();
			$com = $coms->getPostComments($data["article_id"]);
			if ($com)
			{
				foreach ($com as $artcom)
				{
					if ( $artcom->getText() == $data["text"] )
					{
						if ($_debug) print "--- --- comment already exists, abort.<br />\n\r";						
						return $artcom->getId();
					}
				}
			}

			//(article_id, `topic`, `text`, `date`, user_email, user_url, user_name, client_ip)
			$com = new UserComment(
				$data["article_id"],
				$data["parent_id"],
				$data["topic"],
				$data["text"],
				$data["date"],
				$data["user_name"],
				$data["user_email"],
				$data["user_url"],
				$data["client_ip"]
				);
			$comments = new ArticleComments();
			$comment_id = $comments->addComment($com);

			 $this->_stats["comments"]["write"]++;
			return $comment_id;
		}


		/*
		*  Input $data[] has multiple fields.  If any are not submitted, default values
		*  are automatically entered.
		*
		*	name		= name of journal
		*	owner 	= journal owner
		*	about		= short about text
		*	blog_id	= desired id
		*
		*/
		function _addJournal($data, $_debug)
		{
			// blog, $owner, $about, $settings, $id = -1      * <li>locale</li>

			if ($data["name"]	    	== NULL)  $data["name"] 	= "Journal";
			if ($data["owner"]   	== NULL)  $data["owner"]	= 1;
			if ($data["about"]    	== NULL)  $data["about"]    	= "About...";
			// if ($data["blog_id"]	== NULL)  $data["blog_id"]	= NULL;

			/*
				Individual Blog Settings have been disabled in favor of using the
				BlogSettings::_setDefaults() method to generate preferences based
				on admin settings.

				if ($data["locale"]   	== NULL)  $data["locale"]	= "EN_UK";
				if ($data["template"] 	== NULL)  $data["template"] 	= "blueish";
				if ($data["show_more"]	== NULL)  $data["show_more"]	= 0;
				if ($data["threshold"]	== NULL)  $data["threshold"]	= 50;
				if ($data["recent"]	== NULL)  $data["recent"]	= 10;
				if ($data["xmlrpc"]	== NULL)  $data["xmlrpc"]	= 0;
				if ($data["htmlarea"]	== NULL)  $data["htmlarea"]	= 1;
				if ($data["comments"]	== NULL)  $data["comments"]	= 1;
				if ($data["order"]	== NULL)  $data["order"]	= 1;

			*/


			$blogs = new Blogs();
  		    
			if ($data["blog_id"])
			{

			    $blog = $blogs->getBlogInfoByName( TextFilter::urlize($data["name"]) );
			    if ($blog) 
			    {
			    	if ($blog->getId() == $data["blog_id"])
			   	{
					if ($_debug) print "--- --- blog ".$blog->getBlog()." already exists at the proper id (".$blog->getId().").  next entry.<br />\n\r";
					return $blog->getId();
    			    	}
				else
				{
					if ($_debug) print "--- --- blog ".$blog->getBlog()." already exists, but at a new id (".$blog->getId().").  skip to remap.<br />\n\r";
					$blog_id = $blog->getId();
				}
			    }

			}

			if (!$blog_id) 
			{
				$blog = new BlogInfo(
					$data["name"],
					$data["owner"],
					$data["about"],
					"",
					$data["blog_id"] );

				$blog_id = $blogs->addBlog($blog);
				if ($_debug) print "--- blog ".$blog->getBlog()." created at a new id (".$blog_id.").  proceed to remap.<br />\n\r";
				 $this->_stats["blogs"]["write"]++;
			}

			// remap categories
			foreach ($this->_t_container["categories"] as $category => $val)
			{
				if ( ($val["blog_id"] == $data["blog_id"]) ||
				     ($val["blog_id"] == NULL) )
				{
					if ($_debug) print "--- --- --- remapping category #".$category." to the proper blog id.<br />\n\r";
					$this->_container["categories"][$category]["blog_id"] = $blog_id;
				}
			}
			// remap articles
			foreach ($this->_t_container["posts"] as $post => $val)
			{
				if ( ($val["blog_id"] == $data["blog_id"]) ||
				     ($val["blog_id"] == NULL) )
				{
					if ($_debug) print "--- --- --- remapping post #".$post." to the proper blog id.<br />\n\r";
					$this->_container["posts"][$post]["blog_id"] = $blog_id;
				}
			}

			return $blog_id;
		}


		/*
		*  Input $data[] has multiple fields.  If any are not submitted, default values
		*  are automatically entered.
		*
		*	id		= original article id
		*     title 	= article title
		*	text  	= (extended)body text
		*	category 	= category id
		*	user_id	= poster's user id
		*     blog_id 	= blog that post is a child to
		*	status	= published/draft/deleted
		*	date		= formatted in plog time
		*	comments	= comments enabled? (true/false)
		*
		*  ##TODO##
		*	Other article properties are not set at all.  Need to add the
		*	option of properties field (hard to determine because of the
		*	methods which other blogging software stores this data
		*/
		function _addPost($data, $_debug)
		{

			if ($data["title"]   == NULL)  $data["title"]   = "No Title Entered.";
                  if ($data["text"]	   == NULL)  $data["text"]    = "No Body Entered.";
                  if ($data["category"]== NULL)  $data["category"]= 1;
			if ($data["user_id"] == NULL)  $data["user_id"] = 1;
			if ($data["blog_id"] == NULL)  $data["blog_id"] = 1;
			if ($data["status"]  == NULL)  $data["status"]  = POST_STATUS_PUBLISHED;
                  if ($data["comments"]== NULL)  $data["comments"]= true;

			$articles = New Articles;

			// verify that article does not exist in database
			$artss = $articles->getBlogArticles($data["blog_id"]);
			$exists = 0;

			foreach ($artss as $art)
			{
				if ($art->getTopic() == $data["title"])
				{
					$exists = $art->getId();
					break;
				}
			}

			/*
			$exists = $articles->getBlogArticleByTitle( 
						TextFilter::urlize($data["title"]) ,
						$data["blog_id"], 
						true, -1 -1 -1, POST_STATUS_PUBLISHED );

			if (!$exists) 
			{
				$exists = $articles->getBlogArticleByTitle( 
						TextFilter::urlize($data["title"]) ,
						$data["blog_id"], 
						true, -1 -1 -1, POST_STATUS_DRAFT );
			}
			*/

			if (!$exists) 
			{
				// verify that desired post id does not exist.  Otherwise, create new id.
				if (!($articles->getUserArticle($data["id"])) )  $post_id = $data["id"];

				if ($_debug) print "--- --- adding post ".$data["title"]." to db.<br />\n\r";

				$cat[0] = $data["category"];

				$article = New Article(
							$data["title"],
							$data["text"],
							$cat,
							$data["user_id"],
							$data["blog_id"],
							$data["status"],
							 0 );

				if ($data["date"]) 	$article->setDate($data["date"]);
				if ($post_id)		$article->setId($post_id);

				$article->setCommentsEnabled($data["comments"]);

				$artId = $articles->addArticle($article);

				 $this->_stats["posts"]["write"]++;

				// remap comments to $artId
				if ($this->_container["comments"]) {

				   foreach ($this->_t_container["comments"] as $comment => $val)
				   {
					if ( ($this->container["comments"][$comment]["article_id"] == $data["id"]) ||
					     ($val["article_id"] == NULL)            )
					{
						$this->_container["comments"][$comment]["article_id"] = $artId;
						if ($_debug) print("--- --- remapping comment entry #".$comment." to proper article id<br />\n\r");
					}
				   }

				}


			} else {
				$artId = $exists;
				if ($_debug) print "--- --- post already exists, aborting operation.<br />\n\r";
			}

			return $artId;
		}


		/*
		*  Input $data[] has multiple fields.  If any are not submitted, default values
		*  are automatically entered.
		*
		*	username	= login
		*	password	= password (should leave it as nothing)
		*	email		= user's inputted email
		*	about		= user's inputted about text
		*	fullname	= user's inputted full name
		*/
		function _addUser($data, $_debug)
		{
			if ($data["username"]   == NULL)  $data["username"] 	= "username";
			if ($data["password"]	== NULL)  $data["password"]	= "changeme";
			if ($data["email"]	== NULL)  $data["email"]	= "email address";
			if ($data["about"]	== NULL)  $data["about"]	= "NA";
			if ($data["fullname"] 	== NULL)  $data["fullname"] 	= "Full Name";

			$users = new Users();

			if ($data["id"])
			{
				$user = $users->getUserInfoFromId($data["id"]);
				if ($user)
				{
				    if ($user->getUsername() == $data["username"])
				    {
					if ($_debug) print "--- user ".$data["username"]." already exists, at the proper id (".$data["id"].").  next entry.<br />\n\r";
					return $data["id"];
				    }
				}
			}

			$user = $users->getUserInfoFromUsername($data["username"]);
			if ($user) 
			{
				if ($user->getUsername() == $data["username"])
				{
					$user_id = $user->getId();
				}
			}
			else 
			{
				$user = new UserInfo(
					$data["username"],
					$data["password"],
					$data["email"],
					$data["about"],
					$data["fullname"],
					 "" );

				$user_id = $users->addUser($user);
				 $this->_stats["users"]["write"]++;
			}
		
			
			if ($_debug) print "--- user ".$data["username"]." has id number: ".$user_id."<br />\n\r";

			if ( !($user_id == $data["id"]) )
			{
				// remap blogs
				foreach($this->_t_container["blogs"] as $blog => $val)
				{
					if ( ($val["owner"] == $data["id"]) ||
					     ($val["owner"] == NULL             ) )
					{
						$this->_container["blogs"][$blog]["owner"] = $user_id;
						if ($_debug) print("--- --- remapping blog entry #".$blog." to proper user id<br />\n\r");
					}
				}

				// remap posts
				foreach($this->_t_container["posts"] as $post => $val)
				{
					if ( ($val["user_id"] == $data["id"]) ||
					     ($val["user_id"] == NULL             ) )
					{
						$this->_container["posts"][$post]["user_id"] = $user_id;
						if ($_debug) print("--- --- remapping post entry #".$post." to proper user id<br />\n\r");
					}
				}
			}

			return $user_id;
		}

    }
?>