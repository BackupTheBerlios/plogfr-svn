<?php

	include_once( PLOG_CLASS_PATH."class/data/validator/validator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/rules/arrayrule.class.php" );

    /**
     * \ingroup Validator
     *
     * validates if a value is a php array. Useful when we are expecting
	 * parameters as array in a request and we'd like to know whether we're really
	 * receiving an array.
	 *
	 * @see ArrayRule
     */
    class ArrayValidator extends Validator
    {
        function ArrayValidator()
        {
            $this->Validator();

            $this->addRule(new ArrayRule());
        }
    }
?>
