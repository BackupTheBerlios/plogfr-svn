<?php

    include_once(PLOG_CLASS_PATH."class/data/validator/rules/rule.class.php");
    include_once(PLOG_CLASS_PATH."class/net/dns.class.php");
    include_once(PLOG_CLASS_PATH."class/net/http/httpvars.class.php");

    define( "ERROR_RULE_EMAIL_DNS_SERVER_UNREACHABLE", "error_rule_email_dns_server_unreachable");
    define( "ERROR_RULE_EMAIL_DNS_NOT_PERMITTED", "error_rule_email_dns_not_permitted");

    /**
	 * \ingroup Validator_Rules
	 *
	 * Given an email address it will connect to the MX server listed for the given domain
	 * and check whether the given user name has a valid mailbox in the server. This operation
	 * is a bit costly concerning time, since it takes a while to carry out these operations.
	 *
	 * This class will set one of these errors:
	 *
	 * - ERROR_RULE_EMAIL_DNS_NOT_PERMITTED
	 * - ERROR_RULE_EMAIL_DNS_SERVER_UNREACHABLE
     */
    class EmailDnsRule extends Rule
    {
        /**
         * The constructor does nothing.
         */
        function EmailDnsRule()
        {
            $this->Rule();
        }

        /**
		 * Checks the given email address
         */
        function validate($value)
        {
            if (empty($value))
            {
                $this->_setError(false);
                return true;
            }

            list($userName, $domain) = explode("@", $value);
            $connectAddress          = $domain;

            if (!Dns::checkdnsrr($domain, "A"))
            {
                $this->_setError(ERROR_RULE_EMAIL_DNS_SERVER_UNREACHABLE);
                return false;
            }

            if (Dns::checkdnsrr($domain, "MX") && Dns::getmxrr($domain, $mxHosts))
            {
                $connectAddress = $mxHosts[0];
            }

            if ($connect = fsockopen($connectAddress, 25))
            {
                $out = fgets($connect, 1024);

                if (ereg("^220", $out))
                {
                    $server = &HttpVars::getServer();
                    fputs($connect, "HELO " . $server["HTTP_HOST"] . "\r\n");
                    $out = fgets($connect, 1024);

                    fputs($connect, "MAIL FROM: <" . $value . ">\r\n");
                    $from = fgets($connect, 1024);

                    fputs($connect, "RCPT TO: <" . $value .">\r\n");
                    $to = fgets($connect, 1024);

                    fputs($connect, "QUIT\r\n");
                    fclose($connect);

                    if (!ereg("^250", $from) || !ereg ("^250", $to))
                    {
                         $this->_setError(ERROR_RULE_EMAIL_DNS_NOT_PERMITTED);
                         return false;
                    }
                }
            }
            else
            {
                $this->_setError(ERROR_RULE_EMAIL_DNS_SERVER_UNREACHABLE);
                return false;
            }

            return true;
        }
    }
?>
