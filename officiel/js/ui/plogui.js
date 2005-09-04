/**
 * when adding a new form, checks that there is at least one category selected
 */
function submitNewPost(form)
{
	if( form.postCategories.selectedIndex == -1 ) {
		// we have no category selected!
		window.alert(msgErrorNoCategorySelected);
		return false;
    }  
    
	return true;
}

// object that we're going to use 
var xmlhttp;
xmlhttp = false;

/**
 * the following functions take care of sending requests to
 * save drafts of the current post using the XmlHttpRequest object
 *
 * @param req A valid XmlHttpRequest object
 * @param url The url to which we'd like to send the data
 * @param data The data we'd like to send
 * @return Returns always true, please see the processResponse method
 */
function sendData(url, data) 
{
	xmlhttp.onreadystatechange = processResponse;
	xmlhttp.open("POST", url, true, null, null);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    xmlhttp.setRequestHeader("Content-Length", data.length); 
	xmlhttp.send(data);

	return true;
}

/**
 * sets the 'xmlhttp' var as an XmlHttpRequest obejct or 'false' if it is not supported
 *
 * @return nothing
 */
function initXmlHttpRequestObject()
{
	// --
	// the code below uses IE's conditional compilation via jscript... it should
	// not affect other browsers such as Safari or Mozilla
	// --

	/*@cc_on @*/
	/*@if (@_jscript_version >= 5)
	// JScript gives us Conditional compilation, we can cope with old IE versions.
	// and security blocked creation of the objects.
	 try {
	  xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	 } catch (e) {
	  try {
	   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	  } catch (E) {
	   xmlhttp = false;
	  }
	 }
	@end @*/
	if (!xmlhttp && typeof XMLHttpRequest!='undefined' && xmlHttpRequestSupportEnabled ) {
	  xmlhttp = new XMLHttpRequest();
	}
	
	return true;
}

/**
 * handler that processes asynchronous responses
 */
function processResponse()
{
    // only if req shows "loaded"
    if (xmlhttp.readyState == 4) {
        // only if "OK"
        if (xmlhttp.status == 200) {
			// response successful, let's process the return message
			processResponseMessage( xmlhttp.responseText );
        } else {
            window.status = msgErrorMakingRequest;
            alert("There was a problem retrieving the XML data:\n" + xmlhttp.statusText);
        }
    }
}

/**
 * processes a successful xml message
 */
function processResponseMessage( message )
{
	// define the regexp... we should problaby be using the dom model for parsing this but I'm too lazy to 
	// learn dom. Besides, in this case the format of the response is very easy :)
	var regexp = /^.*<\?xml version="1.0"\?>\n* *<response>\n* *<method>saveXmlDraft<\/method>\n* *<result>(.*)<\/result>\n* *<\/response>$/ig;
	
	// execute the regexp and get the results
	matches = regexp.exec( message );
	
	if( !matches ) {
		postId = "";
		//window.alert( "There was an error in the following response message:\n" + message );
		window.alert( msgErrorSavingDraft );
		window.status = msgErrorSavingDraft;
	}
	else {
		postId = matches[1];
		if( postId > 0 ) {
			// set the value of the new post identifier
			document.newPost.postId.value = postId;
			// show a message
			window.alert( msgDraftSavedOk + " ( id = " + postId + ")" );
			// and update the status bar
			window.status = msgDraftSavedOk + " ( id = " + postId + ")";
		}
	}
}

/**
 * this function is the one called when clicking the "save draft and continue" button
 */
function saveDraft()
{
	// if there is no category selected, then we won't save a draft!
	form = document.getElementById( "newPost" );
	
	if( form.postTopic.value == '' ) {
		window.alert( msgErrorPostTopic );
		return false;
	}
	
    // Can't use form.postText.value, becasue the form.postText.value still "null"
    if( htmlAreaEnabled ) {
		postText = postTextEditor.getHTML();
	} else {
		postText = form.postText.value;
    }
    
    if (postText == '') {
		window.alert( msgErrorPostText );
		return false;
	}
	
	if( !submitNewPost( form ))
		return false;	
	
	// check if xmlhttprequest is supported in our browser by initializing the object
	initXmlHttpRequestObject();
	
	if( !xmlhttp ) {
		// if there is no support for xmlhttprequest, then there's nothing to do!
		window.alert("XmlHttpRequest is not available in this browser!");
		return false;
	}
	
	// if not, then continue as usual...
    var formData = getPostEditFormElements( "newPost" );
	
	// build up the final url
    url = plogAdminBaseUrl;
    data = "op=saveXmlDraft&"+formData; 
    //window.alert(url);
    sendData( url, data );
}