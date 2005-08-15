<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminmessageview.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminerrorview.class.php" );	
	include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php");
	include_once( PLOG_CLASS_PATH."plugins/port/class/dao/portobject.class.php" );

    class AdminPluginPortUpdateConfigAction extends SiteAdminAction 
	{
	
		var $_hostname;
		var $_username;
		var $_password;
		var $_dbname;
		var $_prefix;
		var $_profile;
		var $_debug;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminPluginPortUpdateConfigAction ( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }
		
		function validate()
		{
			$this->_debug 	= false;
			$this->_hostname 	= $this->_request->getValue( "hostname" );
			$this->_username 	= $this->_request->getValue( "username" );
			$this->_password 	= $this->_request->getValue( "password" );
			$this->_dbname 	= $this->_request->getValue( "dbname" );
			$this->_prefix 	= $this->_request->getValue( "prefix" );
			$this->_profile 	= $this->_request->getValue( "profile" );

			$val = new StringValidator();
			if (	(!$val->validate($this->_hostname)	) || 
				(!$val->validate($this->_username)	) ||
				(!$val->validate($this->_password )	) ||
				(!$val->validate($this->_dbname ) 	) ||
				(!$val->validate($this->_profile )	)    )
			{
				$this->_view = new AdminErrorView( $this->_blogInfo );
				$this->_view->setMessage( "There was an error:  either your inputted hostname, usernae, password, dbname, or profile were invalid.  Please try again." );
				$this->setCommonData();
				return false;
			}

			return true;
		}
		
        /**
         * Carries out the specified action
         */
        function perform()
        {
			$port = new PortObject(
				   $this->_hostname,
				   $this->_username,
				   $this->_password,
				   $this->_dbname,
				   $this->_profile,
				   $this->_prefix,
				   $this->_debug
				);
			
			$port->GetEntries($this->_debug);
			$port->WriteEntries($this->_debug);
			$stats = $port->getStats();
			$pinfo = $port->getProfile();

			if ($stats)
			{
			    foreach($stats as $key=>$val) { 
				if (!$val["read"]) $val["read"] = 0;
				if (!$val["write"]) $val["write"] = 0;	
        			$message_stats .= "<strong>{$key}</strong> -- read {$val["read"]} and wrote {$val["write"]} item(s).<br />\n\r"; 
			    } 
			}
			else
			{
				$message_stats = "<strong>There was an error adding entries to the database.</strong><br />";
			}

			if ($pinfo)
			{
				foreach ($pinfo as $key => $val)
				{
					$message_profile .= $key. ":  ". $val ."<br />\r\n";
				}
			}
			else
			{
				$message_profile = "<strong>No Profile Information given</strong><br />\r\n";
			}

			$this->_view = new AdminMessageView( $this->_blogInfo );
			$this->_view->setMessage( "<h3>Import Entries Complete!</h3>  Profile Information:<br /><br />". $message_profile . "<br />See below for statistics:<br /><br />".$message_stats );

			$this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
