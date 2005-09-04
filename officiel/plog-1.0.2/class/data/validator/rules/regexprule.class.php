<?php

    include_once( PLOG_CLASS_PATH."class/data/validator/rules/rule.class.php");

    define( "DEFAULT_RULE_CASE_SENSITIVE", true);
    define( "ERROR_RULE_REGEXP_NOT_MATCH", "error_rule_regexp_not_match");

    /**
     * This is an implementation of the 'Strategy' pattern as it can be seen
     * http://www.phppatterns.com/index.php/article/articleview/13/1/1/. Here we use
     * this pattern to validate data received from forms. Its is useful since for example
     * we check in many places if a 'postId' is valid or not. We can put the
     * checkings inside the class and simply reuse this class wherever we want. If we ever
     *`change the format of the postId parameter, we only have to change the code of the
     * class that validates it and it will be automatically used everywhere.
     */
    class RegExpRule extends Rule
    {
        var $_regExp;
        var $_caseSensitive;

        /**
         * The constructor does nothing.
         */
        function RegExpRule($regExp, $caseSensitive = DEFAULT_RULE_CASE_SENSITIVE)
        {
            $this->Rule();

            $this->_regExp        = $regExp;
            $this->_caseSensitive = $caseSensitive;
        }

        /**
         * Add function info here
         */
        function getRegExp()
        {
            return $this->_regExp;
        }

        /**
         * Add function info here
         */
        function setRegExp($regExp)
        {
            $this->_regExp = $regExp;
        }

        /**
         * Add function info here
         */
        function isCaseSensitive()
        {
            return $this->_caseSensitive;
        }

        /**
         * Add function info here
         */
        function setCaseSensitive($caseSensitive = DEFAULT_RULE_CASE_SENSITIVE)
        {
            $this->_caseSensitive = $caseSensitive;
        }

        /**
         * Validates the data. Does nothing here and it must be reimplemented by
         * every child class.
         */
        function validate($value)
        {
            if ($this->_caseSensitive && ereg($this->_regExp, $value))
            {
                $this->_setError(false);
                return true;
            }
            else if (!$this->_caseSensitive && eregi($this->_regExp, $value))
            {
                $this->_setError(false);
                return true;
            }
            else
            {
                $this->_setError(ERROR_RULE_REGEXP_NOT_MATCH);
                return false;
            }
        }
    }
?>
