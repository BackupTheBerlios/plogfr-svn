<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfield.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfieldsvalues.class.php" );
	
	/**
	 * different custom field types available
	 *
	 * \ingroup DAO
	 */
	define( "CUSTOM_FIELD_TEXTBOX", 1 );
	define( "CUSTOM_FIELD_TEXTAREA", 2 );
	define( "CUSTOM_FIELD_CHECKBOX", 3 );
	define( "CUSTOM_FIELD_DATE", 4 );
	define( "CUSTOM_FIELD_LIST", 5 );
	define( "CUSTOM_FIELD_MULTILIST", 6 );

	/**
     * Model for the custom fields
     */
	class CustomFields extends Model 
	{
	
		function CustomFields()
		{
			$this->Model();
		}
		
		/**
		 * returns a custom field given its id
		 *
		 * @param id The id of the custom field
		 * @return A CustomField object with information about the custom field
		 */
		function getCustomField( $id )
		{
			$query = "SELECT * FROM ".$this->getPrefix()."custom_fields_definition
			          WHERE id = $id
					  ORDER BY date ASC";
					  
			$result = $this->Execute( $query );
			
			if( !$result )
				return false;
				
			if( $result->RowCount() == 0 )
				return false;
			else
				return $this->_fillCustomFieldInformation( $result->FetchRow());
		}

		/**
		 * returns a custom field given its name and the blog where it belongs
		 *
		 * @param blogId The id of the blog where this field belongs
		 * @param fieldName The name of the custom field
		 * @return A CustomField object with information about the custom field
		 */		
		function getCustomFieldByName( $blogId, $fieldName )
		{
			$query = "SELECT * FROM ".$this->getPrefix()."custom_fields_definition
			          WHERE field_name = '".$fieldName."' AND blog_id = $blogId";
					  
			$result = $this->Execute( $query );
			
			if( !$result )
				return false;
			if( $result->RowCount() == 0 )
				return false;
				
			return $this->_fillCustomFieldInformation( $result->FetchRow());					  
		}
		
		/**
		 * returns all the custom fields defined in a blog
		 *
		 * @param blogId The id of the blog
		 * @param includeHidden Whether to return the fields that have been marked as
		 * hidden or not.
		 * @param page
		 * @param itemsPerPage
		 * @return An array of CustomField objects with information about the different
		 * custom fields defined.
		 */
		function getBlogCustomFields( $blogId, $includeHidden = true, $page = -1, $itemsPerPage = 15 )
		{

			$query = "SELECT * FROM ".$this->getPrefix()."custom_fields_definition
			          WHERE blog_id = $blogId";
			if( !$includeHidden )
				$query .= " AND hidden = 0 ";
			$query .= " ORDER BY date ASC";
					  
			$result = $this->Execute( $query, $page, $itemsPerPage );
			
			$fields = Array();			
			
			if( !$result )
				return $fields;
			
			while( $row = $result->FetchRow()) {
				$field = $this->_fillCustomFieldInformation( $row );
				$fields[$field->getName()] = $field;
			}
		
			return $fields;
		}

		/**
 		 * returns the number of custom fields defined for the blog
		 *
		 * @param blogId
		 * @param includeHidden
		 */
		function getNumBlogCustomFields( $blogId, $includeHidden = true )
		{
			$prefix = $this->getPrefix();
			$table  = "{$prefix}custom_fields_definition";
			$cond = "blog_id = '".Db::qstr($blogId)."'";
			if( !$includeHidden )
				$cond .=  " AND hidden = 0";			
			
			return( $this->getNumItems( $table, $cond ));
		}
		
		/**
		 * returns true if the given field already exists in the database
		 *
		 * @param fieldName
		 * @param blogId
		 * @return True if the field already exists or false otherwise
		 */
		function fieldExists( $fieldName, $blogId )
		{
			$field = $this->getCustomFieldByName( $blogId, $fieldName );
			
			return( $field != false );
		}
		
		/**
		 * adds a custom field to the database
		 *
		 * @param field A CustomField object
		 * @return True if successful or false otherwise.
		 */
		function addCustomField( &$field )
		{		
			if( $this->fieldExists( $field->getName(), $field->getBlogId()))
				return false;
		
			$query = "INSERT INTO ".$this->getPrefix()."custom_fields_definition
			          (field_name, field_description, field_type, blog_id, searchable, hidden) VALUES(
					  '".Db::qstr($field->getName())."','".Db::qstr($field->getDescription()).
					  "', ".$field->getType().", ".$field->getBlogId().", ".$field->isSearchable().
					  ", ".$field->isHidden().");";
					  
			$result = $this->Execute( $query );
			
			if( !$result ) 
				return false;
				
			$fieldId = $this->_db->Insert_ID();
			
			$field->setId( $fieldId );
			
			return( $fieldId );
		}
		
		/**
		 * removes a custom field, but also all the values that have been created
		 * based on this field and that have been assigned to different articles.
		 * Otherwise, we would have data which is not linked to any article... but if still
		 * needed, set the second parameter to false
		 *
		 * @param id
		 * @param deleteValues
		 * @return Returns true if successful or false otherwise
		 */
		function removeCustomField( $id, $deleteValues = true )
		{
			$query = "DELETE FROM ".$this->getPrefix()."custom_fields_definition
			          WHERE id = $id";
			
			$result = $this->Execute( $query );
			
			if( !$result )
				return false;
				
			if( !$deleteValues )
				return true;
			
			// remove the values that were associated to this field
			$fieldValues = new CustomFieldsValues();
			return $fieldValues->removeCustomFieldValues( $id );
		}
		
		/**
		 * update a field in the database
		 *
		 * @param field
		 * @return True if successful or false otherwise
		 */
		function updateCustomField( $field )
		{
			$query = "UPDATE ".$this->getPrefix()."custom_fields_definition
			          SET field_name = '".Db::qstr($field->getName())."',
					  field_description = '".Db::qstr($field->getDescription())."',
					  field_type = ".Db::qstr($field->getType()).",
					  date = date,
					  hidden = ".$field->isHidden()."
					  WHERE id = ".$field->getId();

			$result = $this->Execute( $query );
			
			return $result;
		}
		
		/**
		 * @private
		 */
		function _fillCustomFieldInformation( $row )
		{
			$field = new CustomField( $row["field_name"],
			                          $row["field_description"],
					 				  $row["field_type"],
					   				  $row["blog_id"],
									  $row["hidden"],
									  $row["searchable"],
									  $row["id"] );
									  
			return $field;
		}
	}
?>