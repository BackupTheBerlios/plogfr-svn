<?php

	include_once( PLOG_CLASS_PATH."class/data/validator/validator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/rules/uintrule.class.php" );

    /**
     * \ingroup Validator
     *
     * Checks that it is really an integer value.
     *
     * @see UIntRule
     */
    class IntegerValidator extends Validator 
    {
    	function IntegerValidator()
        {
        	$this->Validator();
        	
        	$this->addRule( new UIntRule());
        }
    }
?>