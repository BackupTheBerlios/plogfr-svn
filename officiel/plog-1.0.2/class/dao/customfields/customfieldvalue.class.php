<?php

	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfield.class.php" );

	/**
     * Defines a value assigned to a custom field
	 *
	 * \ingroup DAO
     */
	class CustomFieldValue extends CustomField
	{
		var $_fieldId;
		var $_fieldValue;
		var $_id;
		var $_blogId;
		var $_articleId;
		var $_field;
	
		function CustomFieldValue( $fieldId, $fieldValue, $fieldName, $fieldType, $fieldDescription, $articleId, $blogId, $id = -1 )
		{
			// call the parent constructor
			$this->CustomField( $fieldName, $fieldDescription, $fieldType, $blogId, false );
			// and save some other values
			$this->_fieldId = $fieldId;
			if( $fieldValue == null ) $fieldValue = "";
			$this->_fieldValue = $fieldValue;
			$this->_articleId = $articleId;
			$this->_id = $id;
		}
		
		function getBlogId()
		{
			return $this->_blogId;
		}
		
		function getId()
		{
			return $this->_id;
		}
		
		function getFieldId()
		{
			return $this->_fieldId;
		}
		
		function getArticleId()
		{
			return $this->_articleId;
		}
		
		function getValue()
		{			
			return $this->_fieldValue;
		}
		
		function setValue( $value )
		{
			$this->_fieldValue = $value;
		}
	}
?>