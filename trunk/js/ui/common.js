/**
 * opens a window with some help information
 *
 * @param helpurl The destination url
 * @return nothing
 */ 
function help_window(helpurl)
{
	HelpWin = window.open( helpurl,'HelpWindow','scrollbars=yes,resizable=yes,toolbar=no,height=400,width=400');
}

/**
 * opens a window pointing to the list of resources so that we can easily add one to our current
 * article
 *
 * @param type
 * @return nothing
 */
function resource_list_window( type ) {
	// type == 1 => intro text
	// type == 2 => extended text
	HelpWin = window.open( '?op=resourceList&mode='+type,'ResourceListWindow','scrollbars=yes,resizable=yes,toolbar=no,height=600,width=450');

}

function userPictureSelectWindow()
{
	UserPicture = window.open( '?op=userPictureSelect', 'UserPictureSelect','scrollbars=yes,resizable=yes,toolbar=no,height=600,width=400');
}

/**
 * empties a drop-down list
 *
 * @param box The form object representing the drop-down list
 * @return nothing
 */
function emptyList( box )
{
	while ( box.options.length ) box.options[0] = null;
}

/**
 * fill a list with data
 *
 * @param box
 * @param numElems
 * @return nothing
 */
function fillList( box, numElems )
{
	for ( i = 1; i <= numElems; i++ ) {
		option = new Option( i, i );
		box.options[box.length] = option;
	}
	
	box.selectedIndex=0;
}

/**
 * @private 
 * @param box
 * @return nothing
 */
function changeList( box )
{
	daysMonth = days[box.options[box.selectedIndex].value-1];
	emptyList( box.form.postDay );
	fillList( box.form.postDay, daysMonth );
}

/**
 * Adds some text where the cursor is.
 *
 * Works in IE and Mozilla 1.3b+
 * In other browsers, it simply adds the text at the end of the current text
 */
function addText( input, insText ) 
{
	input.focus();
	if( input.createTextRange ) {
		parent.opener.document.selection.createRange().text += insText;
	} 
	else if( input.setSelectionRange ) {
		var len = input.selectionEnd;
		input.value = input.value.substr( 0, len ) + insText + input.value.substr( len );
		input.setSelectionRange(len+insText.length,len+insText.length);
	} 
	else { 
		input.value += insText; 
	}
}

/**
 * Used in the' user profile' screen where users can pick an image from their collection
 * and set it as their 'avatar'
 *
 * @param resId
 * @param url
 * @return nothing
 */
function returnResourceInformation(resId, url)
{
	// set the picture id
    parent.opener.document.userSettings.userPictureId.value = resId;
    // and reload the image path
    parent.opener.document.userSettings.userPicture.src = url;
}

/**
 * opens a window to see an screenshot from a template
 *
 * @param destination url
 */
function openScreenshotWindow( destUrl )
{
	ScreenshotWindow = window.open( destUrl, 'Screenshot','scrollbars=yes,resizable=yes,toolbar=no,height=600,width=800');
}

/**
 * opens the window where users can choose their own template. The destination url is hardcoded
 */
function openTemplateChooserWindow()
{
	TemplateSelectorWindow = window.open( '?op=blogTemplateChooser', 'TemplateChooser','scrollbars=yes,resizable=yes,toolbar=no,height=800,width=450');
}

/**
 * tells the parent window which template we chose
 */
function blogTemplateSelector( templateId )
{
	templateSelectList = parent.opener.document.blogSettings.blogTemplate;
	
	// loop throough the array with the different template sets and if we find the
	// one that the use just selected, then automatically select it and quit the loop
	for( i = 0; i < templateSelectList.options.length; i++ ) {
		if( templateSelectList.options[i].value == templateId ) {
			templateSelectList.selectedIndex = i;
			break;
		}
	}
	
	window.close();
}

/**
 * in the "newBlogUser" screen, shows and hides the 'notification area', a textbox
 * where users can type some text that will be included in an email sent to the user that is
 * going to be invited to the blog
 */
function toggleNotificationArea()
{
    var elem = document.getElementById('emailTextNotification');
    if( elem.style.display == 'none' )
      elem.style.display = '';
    else
      elem.style.display = 'none';
      
    return true;  
}

/**
 * the functions below are used in the "global settings" page, so that 
 * whole blocks of the html page can appear and disappear when needed
 */
// there is no current section selected
var currentSection='';
sections = ["general","summary","templates","urls","email","uploads","helpers","interfaces","security","bayesian","resources","search"];

function _toggle( sectionId )
{
 // get the dom object with such section
 element = document.getElementById( sectionId );
 
 currentStatus = element.style.display;
 window.alert('sectionId = '+sectionId+' - current status ='+currentStatus);
 
 // and toggle its visibility
 if( element.style.display == 'none' )
   element.style.display = 'block';
 else
   element.style.display = 'none';
  
 return true;
}

function toggleSection(sectionId)
{
 // if no section selected, do nothing
 if( sectionId == 'none' )
   return;

 toggleAll( false );
 
 // and toggle the new one
 _toggle(sectionId);

 // now we have a new current section
 currentSection = sectionId;
   
 return true;  
}

function toggleAll( enabled )
{
  if( enabled ) statusString = 'block';
  else statusString = 'none';
  
  for( i = 0; i < sections.length; i++ ) {
    element = document.getElementById( sections[i] );
    element.style.display = statusString;
  }
}

function getPostEditFormElements( formId )
{
	var formData = '';
	
	form = document.getElementById( formId );
	
	for(i = 0; i < form.elements.length; i++ ) {
		itemName = form.elements[i].name;
		itemValue = form.elements[i].value;
		
		if( itemName != "op" ) {
			// we don't want to send more than one "op" parameter... do we?
			if( itemName == "postCategories[]" ) {
				// we need to have a special case for this one because it's a list that
				// allows multiple selection... only using the "value" attribute will
				// return one of the items and we would like to have them all
				for (var j = 0; j < form.elements[i].options.length; j++) {
					if (form.elements[i].options[j].selected) 
						formData = formData + itemName + "=" + form.elements[i].options[j].value + "&";
				}
			}
			else if( itemName == "postText" && htmlAreaEnabled ) {
			    if ( blogLocale == "UTF-8" ) {
				    formData = formData + itemName + "=" + encodeURIComponent(postTextEditor.getHTML()) + "&";
				} else {
				    formData = formData + itemName + "=" + escape(postTextEditor.getHTML()) + "&";
				}
			}
			else if( itemName == "postExtendedText" && htmlAreaEnabled ) {
				if ( blogLocale == "UTF-8" ) {
				    formData = formData + itemName + "=" + encodeURIComponent(postExtendedTextEditor.getHTML()) + "&";
			    } else {
				    formData = formData + itemName + "=" + escape(postExtendedTextEditor.getHTML()) + "&";
                }
			}
			else {
				// for all other elements, normal handling
				if ( blogLocale == "UTF-8" ) {
				    formData = formData + itemName + "=" + encodeURIComponent(itemValue) + "&";
				} else {
				    formData = formData + itemName + "=" + escape(itemValue) + "&";
			    }
			}
		}
    }	
    
    return formData;
}

/**
 * opens a new window where the post preview will be shown
 */
function previewNewPost()
{
	previewPost( "newPost" );
}

function previewUpdatedPost()
{
	previewPost( "editPost" );
}
	
function previewPost_old( formId )
{
	form = document.getElementById( formId );
	
	// we will only open this window if there is at least one category selected, otherwise it
	// will cause problems!
	if( submitNewPost( form )) {
		url = "?op=previewPost&" + getPostEditFormElements( formId );
		//window.alert(url);
		postPreview = window.open( url,'Preview','scrollbars=yes,resizable=yes,toolbar=no');
	}
	
	return true;
}

function previewPost( formId )
{

    form = document.getElementById( formId )
    
    if( submitNewPost( form )) { 
        preview = window.open( '', '', 'scrollbars=yes,resizable=yes,toolbar=no' );
        preview.focus();
        
        // write the contents as a form with hidden fields        
        preview.document.open();
        preview.document.write( '<html><body><div style="display:none">' +
                                '<form name="previewForm" method="post" action="admin.php">' +
                                '<input type="hidden" name="op" value="previewPost">' );
        // post text, slug and topic... if we put everything in textareas, we avoid the need to escape things
        // also we should keep in mind whether we're using htmlarea or not, since then we should use a different method
        // to get the value out of the textareas
        if( htmlAreaEnabled ) {
        	postText = postTextEditor.getHTML();
        	postExtendedText = postExtendedTextEditor.getHTML();
		}
        else {
        	postText = form.postText.value;
        	postExtendedText = form.postExtendedText.value;
    	}    	
        preview.document.write( '<textarea name="postText">' + postText + '</textarea>' +
                                '<textarea name="postTopic">' + form.postTopic.value + '</textarea>' +
                                '<textarea name="postExtendedText">' + postExtendedText + '</textarea>' +
                                '<input type="hidden" name="postSlug" value="' + form.postSlug.value + '" />' );
        // post date and time
        preview.document.write( '<input type="hidden" name="postDateTime" value="' + form.postDateTime.value + '" /> ' );
        
        // article categories
        preview.document.write( '<select name="postCategories[]" multiple="multiple">' );
        for( var i = 0; i < form.postCategories.options.length; i++ ) {
            if( form.postCategories.options[i].selected )
                preview.document.write( '<option selected="selected" value="' + form.postCategories.options[i].value + '">test</option>' );
        }
        
        preview.document.write( '</select>' );                        
        // custom fields -- since we don't know their exact names and amount, we need to loop through the whole form to find them!        
        for(var i = 0; i < form.elements.length; i++ ) {
            var itemName = form.elements[i].name;
            if( itemName ) {
                if( itemName.substr(0,11) == "customField" ) {
                    if( form.elements[i].type == "checkbox" ) 
                        preview.document.write( '<input type="hidden" name="' + itemName + '" value="' + form.elements[i].value + '" />' );
                    else
                        preview.document.write( '<textarea name="' + itemName + '">' + form.elements[i].value + '</textarea>' );
                }
            }
        }
                                
        // footer
        preview.document.write( '</form></div>' +
                                '<b>Loading preview, please wait...</b>' +
                                '</body></html>' );
        preview.document.close();
    
        // and submit the form
        preview.document.previewForm.submit();
    }
}

/*****
 *
 * functions for dealing with the "edit blog" screen
 *
 *****/

/**
 * generic function for moving elements from one list to another!
 */
function moveElement(srcList, dstList)
{
	
	// now find out which user we've selected from the first list
	indexId = srcList.selectedIndex;
	
	// if no element was selected, quit
	if( indexId == -1 )
		return false;
	
	optText = srcList.options[indexId].text;
	optId  = srcList.options[indexId].value;
	
	if( optId == -1 ) {
		// do nothing, this is our special marker!
		return;
	}
	
	// add the option to the opposite box
	newOpt = new Option( optText, optId );
	dstList.options[dstList.options.length] = newOpt;
	
	// and remove it from the current box
	srcList.options[indexId] = null;
	
	return true;
}

/**
 * moves one user from the list of avialable users to the list of users
 * that belong to this blog
 */
function removeUserFromBlog()
{
	// find the lists in the page
	siteUsersList = document.getElementById( "availableUsersList" );
	blogUsersList = document.getElementById( "blogUsersList" );
	
	moveElement( siteUsersList, blogUsersList );
}

/**
 * the same as above but the other way around...
 */
function addUserToBlog()
{
	// find the lists in the page
	siteUsersList = document.getElementById( "availableUsersList" );
	blogUsersList = document.getElementById( "blogUsersList" );
	
	moveElement( blogUsersList, siteUsersList );
}

/**
 * automatically selects all the elements of a list
 */
function listSelectAll(listId)
{
	list = document.getElementById( listId );
	for( i = 0; i < list.options.length; i++ ) {
		list.options[i].selected = true;
	}

	return true;
}
