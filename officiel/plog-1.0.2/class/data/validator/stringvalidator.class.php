<?php

	include_once( PLOG_CLASS_PATH."class/data/validator/validator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/rules/nonemptyrule.class.php" );

    /**
     * \ingroup Validator
     *
     * Checks that a string is not empty. 
     *
     * @see NonEmptyRule
     */
    class StringValidator extends Validator 
    {
    	function StringValidator()
        {
        	$this->Validator();
        	
        	$this->addRule( new NonEmptyRule());
        }
    }
?>