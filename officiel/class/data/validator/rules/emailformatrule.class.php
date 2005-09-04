<?php

    include_once(PLOG_CLASS_PATH."class/data/validator/rules/regexprule.class.php");

    define( "EMAIL_FORMAT_RULE_REG_EXP", "^[a-z0-9]*([-_\.]?[a-z0-9])+@[a-z0-9]+([-_\.]?[a-z0-9])+\.[a-z]{2,4}");
    define( "ERROR_RULE_EMAIL_FORMAT_WRONG", "error_rule_email_format_wrong");

    /**
	 * \ingroup Validator_Rules
	 *
	 * Given an email address, returns true if it looks like a valid email address (if it has the 
	 * valid format) If not, it will return ERROR_RULE_EMAIL_FORMAT_WRONG
     */
    class EmailFormatRule extends RegExpRule
    {
        /**
         * The constructor does nothing.
         */
        function EmailFormatRule()
        {
            $this->RegExpRule(EMAIL_FORMAT_RULE_REG_EXP, false);
        }

        /**
		 * Validates the format of the given email address
         */
        function validate($value)
        {
            if (parent::validate($value))
            {
                $this->_setError(false);
                return true;
            }
            else
            {
                $this->_setError(ERROR_RULE_EMAIL_FORMAT_WRONG);
                return false;
            }
        }
    }
?>