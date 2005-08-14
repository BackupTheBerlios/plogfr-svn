<?php

						include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfields.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfieldvaluefactory.class.php" );		   

	/**
     * Model for the values given to certain custom fields
	 *
	 * \ingroup DAO
     */
	class CustomFieldsValues extends Model 
	{
	
		function CustomFieldsValues()
		{
			$this->Model();
		}
		
		/**
		 * gets the value associated to the custom field with the given id
		 *
		 * @param id The id of the custom field value
		 * @return A CustomFieldValue object
		 */
		function getCustomFieldValue( $id )
		{
			$query = "SELECT * FROM ".$this->getPrefix()."custom_fields_values
			          WHERE id = $id ORDER BY date ASC";
					  
			$result = $this->Execute( $query );
			
			if( !$result )
				return false;
			else
				return $this->_fillCustomFieldInformation( $result->FetchRow());
		}
		
		/**
		 * returns an array of CustomFieldValue objects with information about all
		 * the custom fields available for an article
		 *
		 * @param articleId The id of the article
		 * @param the blog id to which the fields belong	 
		 * @param includeHidden Whether to return hidden fields or not
		 * @return An array of CustomFieldValue objects, or false if error
		 */
		function getArticleCustomFieldsValues( $articleId, $blogId, $includeHidden = true )
		{					
			//
			// it's quite a big query and has a 'right outer join', but the whole point is that
			// we want to obtain as many rows as fields we have available. If there is no value
			// for this article for one of the fields, we still want to get a row with the name
			// of the field, its type and so on, with 'null' values where there is no value.
			//
			$prefix = $this->getPrefix();
			$query = "SELECT v.id AS id, d.id AS field_id, v.field_value AS field_value, 
			                 d.field_name AS field_name, d.field_type AS field_type, 
							 d.field_description AS field_description 
							 FROM {$prefix}custom_fields_values v 
							 RIGHT OUTER JOIN {$prefix}custom_fields_definition d 
							 ON v.article_id = $articleId AND v.field_id = d.id
							 WHERE d.blog_id = '".Db::qstr($blogId)."'";
			if( !$includeHidden )
				$query .= " AND d.hidden = 0 ";
			$query .= " ORDER BY date ASC";
					  
			$result = $this->Execute( $query );
			
			$fields = Array();
						
			// return empty array if no fields
			if( !$result )
				return $fields;
			
			while( $row = $result->FetchRow()) {
				$field = $this->_fillCustomFieldValueInformation( $row );
				$fields[$field->getName()] = $field;
			}
		
			return $fields;
		}
		
		/**
		 * @private
		 * @see getArticleCustomFieldsValues
		 */
		function getArticleCustomFieldsValuesByIds( $articleIds, $blogId, $includeHidden = true )
		{					
			//
			// it's quite a big query and has a 'right outer join', but the whole point is that
			// we want to obtain as many rows as fields we have available. If there is no value
			// for this article for one of the fields, we still want to get a row with the name
			// of the field, its type and so on, with 'null' values where there is no value.
			//
			$prefix = $this->getPrefix();
			$query = "SELECT v.article_id as article_id, v.id AS id, d.id AS field_id, v.field_value AS field_value, 
			                 d.field_name AS field_name, d.field_type AS field_type, 
							 d.field_description AS field_description 
							 FROM {$prefix}custom_fields_values v 
							 RIGHT OUTER JOIN {$prefix}custom_fields_definition d 
							 ON v.article_id IN (".$articleIds.") AND v.field_id = d.id
							 WHERE d.blog_id = '".Db::qstr($blogId)."'";
			if( !$includeHidden )
				$query .= " AND d.hidden = 0 ";
			$query .= " ORDER BY date ASC";
					  
			$result = $this->Execute( $query );
			
			//$fields = Array();
						
			// return empty array if no fields
			if( !$result )
				return $fields;
			
            while ($row = $result->FetchRow()) {
            	$lastArticleId=$row["article_id"];
                $field = $this->_fillCustomFieldValueInformation( $row );
                $fields[$lastArticleId][$field->getName()] = $field;
			}
		
			return $fields;
		}
				
		
		/**
		 * @param fieldId
		 * @param articleId
		 * @return A CustomFieldValue object
		 */
		function getArticleCustomFieldValue( $fieldId, $articleId )
		{
			$query = "SELECT * FROM ".$this->getPrefix()."custom_fields_values
			          WHERE field_id = $fieldId AND article_id = $articleId
					  ORDER BY date ASC";
					  
			$result = $this->Execute( $query );
						
			if( !$result )
				return false;
			
			$row = $result->FetchRow();
			$fieldValue = $this->_fillCustomFieldValueInformation( $row );
		
			return $fieldValue;
		}
		
		/**
		 * adds a custom field value to the given article
		 *
		 * @param fieldId
		 * @param fieldValue
		 * @param articleId
		 * @param blogId
		 * @return True if successful or false otherwise
		 */
		function addCustomFieldValue( $fieldId, $fieldValue, $articleId, $blogId )
		{
			$filter = new Textfilter();
			$query = "INSERT INTO ".$this->getPrefix()."custom_fields_values
			          (field_id, field_value, normalized_value, blog_id, article_id)
					  VALUES (
					  $fieldId, '".Db::qstr($fieldValue)."','".
					  $filter->normalizeText(Db::qstr($fieldValue))."',
					  $blogId, $articleId
					  )";
					  
			$result = $this->Execute( $query );
			
			return $result;
		}
		
		
		/**
		 * removes a value of a custom field, given its id.
		 *
		 * @param id
		 * @return True if deleted successfully or false otherwise.
		 */
		function removeCustomFieldValue( $id )
		{
			$query = "DELETE FROM ".$this->getPrefix()."custom_fields_values
			          WHERE id = $id";
					  
			$result = $this->Execute( $query );
			
			return $result;
		}
		
		/**
		 * Removes all the values associated to a certain custom field
		 *
		 * @param fieldId
		 * @return True if successful or false otherwise.
		 */
		function removeCustomFieldValues( $fieldId )
		{
			$query = "DELETE FROM ".$this->getPrefix()."custom_fields_values
			          WHERE field_id = $fieldId";
					  
			$result = $this->Execute( $query );
			
			return $result;
		}

		
		/**
		 * Removes all the values associated to an article
		 *
		 * @param articleId
		 * @return True if deleted successfully or false otherwise.
		 */
		function removeArticleCustomFields( $articleId )
		{
			$query = "DELETE FROM ".$this->getPrefix()."custom_fields_values
			          WHERE article_id = $articleId"; 
					  
			$result = $this->Execute( $query );
			
			return $result;
		}
		
		function updateCustomFieldValue( $fieldValue )
		{
		
		}
		
		/**
		 * @private
		 */
		function _fillCustomFieldValueInformation( $row )
		{
			return CustomFieldValueFactory::getCustomFieldValueObject( $row );
		}
	}
?>