<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admincustomfieldslistview.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfields.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );	

    /**
     * \ingroup Action
     * @private
     *
     * updates a custom field
	 */
    class AdminUpdateCustomFieldAction extends BlogOwnerAdminAction 
	{
	
		var $_fieldName;
		var $_fieldDescription;
		var $_fieldType;
		var $_fieldSearchable;
		var $_fieldId;
		var $_fieldHidden;

        function AdminUpdateCustomFieldAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
			
			// data validation
			$this->registerFieldValidator( "fieldName", new StringValidator());
			$this->registerFieldValidator( "fieldDescription", new StringValidator());
			$this->registerFieldValidator( "fieldType", new IntegerValidator());
			$this->registerFieldValidator( "fieldId", new IntegerValidator());
			$this->_form->registerField( "fieldSearchable" );
			$this->_form->registerField( "fieldHidden" );
			$this->setValidationErrorView( new AdminTemplatedView( $this->_blogInfo, "editcustomfield" ));			
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
			// fetch the fields from the request
			$this->_fieldId = $this->_request->getValue( "fieldId" );
			$this->_fieldName = Textfilter::filterAllHTML($this->_request->getValue( "fieldName" ));
			$this->_fieldDescription = Textfilter::filterAllHTML($this->_request->getValue( "fieldDescription" )); 
			$this->_fieldType = $this->_request->getValue( "fieldType" );
			$this->_fieldSearchable = $this->_request->getValue( "fieldSearchable" );
			$this->_fieldHidden = $this->_request->getValue( "fieldHidden" );			
					
			// and start to update the field
			$fields = new CustomFields();
			$field = $fields->getCustomField( $this->_fieldId );

			// view that we're going to use for all different flows...
			$this->_view = new AdminCustomFieldsListView( $this->_blogInfo );
						
			// field couldn't be loaded...
			if( !$field ) {
				$this->_view->setErrorMessage( $this->_locale->tr("error_updating_custom_field" ));
				return false;			
			}
			
			// ...update its information...
			$field->setName( $this->_fieldName );
			$field->setDescription( $this->_fieldDescription );
			$field->setType( $this->_fieldType );
			$field->setHidden( $this->_fieldHidden );
			
			// fire the pre-event
			$this->notifyEvent( EVENT_PRE_CUSTOM_FIELD_UPDATE, Array( "field" => &$field ));
			
			// ...and finally the data in the database
			$result = $fields->updateCustomField( $field );
											   
			// check the result

			if( !$result ) {
				$this->_view->setErrorMessage( $this->_locale->tr("error_updating_custom_field" ));
			}
			else {
				$this->_view->setSuccessMessage( $this->_locale->pr( "custom_field_updated_ok", $field->getName()));
				// fire the post-event
				$this->notifyEvent( EVENT_POST_CUSTOM_FIELD_UPDATE, Array( "field" => &$field ));
			}
			
			$this->setCommonData();			
		
            return true;
        }
    }
?>