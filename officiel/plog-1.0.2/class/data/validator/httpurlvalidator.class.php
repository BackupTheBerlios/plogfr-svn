<?php

	include_once( PLOG_CLASS_PATH."class/data/validator/validator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/rules/regexprule.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/rules/nonemptyrule.class.php" );

    /**
     * \ingroup Validator
     *
     * Checks whether the string is a valid http/https url
     *
     * @see NonEmptyRule
     */
    class HttpUrlValidator extends Validator 
    {
    	function HttpUrlValidator()
        {
		    // trying to be RFC 1736 compatible, except where common
			// usage goes against it, such as allowing unencoded 
			// '~', '^', ' ', etc.

			$prefix = "^([[:alnum:]\-\+\.]+)\://";
			$ftp_login = "([[:alnum:]\.\-]+(\:[[:alnum:]\.&%\$\-]+)*@)*";
			$ip_num = "(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[1-9][0-9]?)";
			$ip_address = "($ip_num\.($ip_num|0)\.($ip_num|0)\.$ip_num)";
			$tld = "(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|([[:alpha:]]{2}))";
			$port = "(\:[[:digit:]]+)*";
			$path = "(/($|[[:alnum:] \.\,\?\'\"\\\+^&%\$#\=~_\-]+))*";

			// allow underscores, even though we shouldn't
			$domain_part = "([[:alnum:]_\-]+\.)+";
			
        	$this->Validator();
			$this->addRule( new NonEmptyRule());
        	$this->addRule( new RegExpRule("(" . $prefix . $ftp_login . "(" . $ip_address . "|localhost|(" .
										         $domain_part . $tld . "))" . $port . ")?" . $path . "$",
										   false ));
        }
    }
?>
