<?php

    include_once( PLOG_CLASS_PATH."class/object/object.class.php");

    define(ERROR_RULE_IS_EMPTY, "error_rule_is_empty");

    /**
     * @private
     */
    class ValidationList extends Object
    {
        var $_validations;
        var $_required;
        var $_errors;

        /**
         * The constructor does nothing.
         */
        function ValidationList()
        {
            $this->Object();

            $this->_validations = array();
            $this->_required    = array();
            $this->_errors      = array();
        }

        /**
        *    Add function info here
        **/
        function isRequired($name)
        {
            if (!array_key_exists($name, $this->_required))
            {
                return false;
            }

            return $this->_required[$name];
        }

        /**
        *    Add function info here
        **/
        function setRequired($name, $required = true)
        {
            $this->_required[$name] = $required;
        }

        /**
        *    Add function info here
        **/
        function addValidation($name, &$validation)
        {
            $this->_validations[$name][] = &$validation;
        }

        /**
        *    Add function info here
        **/
        function &getValidations($name = null)
        {
            if (empty($name) || !array_key_exists($name, $this->_validations))
            {
                return $this->_validations;
            }
            else
            {
                return $this->_validations[$name];
            }
        }

        /**
        *    Add function info here
        **/
        function _setError($name, $error)
        {
            $this->_errors[$name] = $error;
        }

        /**
        *    Add function info here
        **/
        function &getErrors($name = null)
        {
            if (empty($name) || !array_key_exists($name, $this->_errors))
            {
                return $this->_errors;
            }
            else
            {
                return $this->_errors[$name];
            }
        }

        /**
        *    Add function info here
        **/
        function _validateValue($name, $value)
        {
            if (empty($value) && $this->isRequired($name))
            {
                $this->_setError($name, ERROR_RULE_IS_EMPTY);
                return false;
            }

            if (array_key_exists($name, $this->_validations) && is_array($this->_validations[$name]))
            {
                foreach ($this->_validations[$name] as $validation)
                {
                    if (!$validation->validate($value))
                    {
                         $this->_setError($name, $validation->getError());
                         return false;
                    }
                }
            }

            return true;
        }

        /**
        *    Add function info here
        **/
        function validate($values)
        {
            $result = true;

            foreach ($this->_required as $name => $required)
            {
                if ($required && !array_key_exists($name, $values))
                {
                    $this->_setError($name, ERROR_RULE_IS_EMPTY);
                    $result = false;
                }
            }

            foreach ($values as $name => $value)
            {
                $result &= $this->_validateValue($name, $value);
            }

            return $result;
        }
    }
?>
