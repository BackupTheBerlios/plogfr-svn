function _generateBaseLink( dest, blogId, type, resourceName, resourceDesc, preview )
{
    if( type == 2 ) {
	    if( preview == 1 ) {
	        htmlCode = plogBaseUrl+'/resserver.php?blogId='+blogId+'&resource='+encodeURIComponent(resourceName)+'&mode=preview';
	    }
		else if( preview == 2) {
			htmlCode = plogBaseUrl+'/resserver.php?blogId='+blogId+'&resource='+encodeURIComponent(resourceName)+'&mode=medium';
		}
	    else {
	        htmlCode = plogBaseUrl+'/resserver.php?blogId='+blogId+'&resource='+encodeURIComponent(resourceName);
	    }
    }
    else {
	    // if not an image, there is not much we can do
	    htmlCode = '<a title="'+resourceDesc+'" href="'+plogBaseUrl+'/resserver.php?blogId='+blogId+'&amp;resource='+encodeURIComponent(resourceName)+'">'+resourceName+'</a>';
    }
  
    return htmlCode;
}

function _generateResourceLink( dest, blogId, type, resourceName, resourceDesc, preview, mimeType, resId )
{
    var htmlCode = '';
    if( type == 1 ) {
	    // if the resource is an image, check the second parameter to see wether we'd like
	    // to show the preview with a link to the real size image or the real image
	    // inlined with the text
	    if( preview == 1 ) {
		    htmlCode = '<a class="nodecoration" id="res_' + resId+ '" href="'+plogBaseUrl+'/resserver.php?blogId='+blogId+'&amp;resource='+encodeURIComponent(resourceName)+'" type="'+mimeType+'">';
		    htmlCode += '<img class="res_image_small" style="margin: 5px;" border="0" alt="'+resourceDesc+'" src="'+plogBaseUrl+'/resserver.php?blogId='+blogId+'&amp;resource='+encodeURIComponent(resourceName)+'&amp;mode=preview" />';
		    htmlCode += '</a>';
	    }
		else if ( preview == 2 ) {
		    htmlCode = '<a class="nodecoration" id="res_' + resId+ '" href="'+plogBaseUrl+'/resserver.php?blogId='+blogId+'&amp;resource='+encodeURIComponent(resourceName)+'" type="'+mimeType+'">';
		    htmlCode += '<img class="res_image_medium" style="margin: 5px;" border="0" alt="'+resourceDesc+'" src="'+plogBaseUrl+'/resserver.php?blogId='+blogId+'&amp;resource='+encodeURIComponent(resourceName)+'&amp;mode=medium" />';
		    htmlCode += '</a>';
		}
	    else {
		    htmlCode = '<img class="res_image" style="margin: 5px;" alt="'+resourceDesc+'" src="'+plogBaseUrl+'/resserver.php?blogId='+blogId+'&amp;resource='+encodeURIComponent(resourceName)+'" />';
	    }
    }
    else {
	    // if not an image, there is not much we can do
	    htmlCode = '<a id="res_'+resId+'" title="'+resourceDesc+'" href="'+plogBaseUrl+'/resserver.php?blogId='+blogId+'&amp;resource='+encodeURIComponent(resourceName)+'" type="'+mimeType+'">'+resourceName+'</a>';
    }
  
    return htmlCode;

}

function addResourceLink( dest, reqFormat, blogId, type, resourceName, resourceDesc, preview, mimeType, resId ) 
{
    // generate the link
    var htmlCode = _generateResourceLink( dest, reqFormat, blogId, type, resourceName, resourceDesc, preview, mimeType, resId );
  
    // and now send the value to the text area where we are typing the post
    if( dest == 1 ) {
	    //parent.opener.document.newPost.postText.value += htmlCode;
	    addText( parent.opener.document.newPost.postText, htmlCode );
    }
    else {
	    //parent.opener.document.newPost.postExtendedText.value += htmlCode;
	    addText( parent.opener.document.newPost.postExtendedText, htmlCode );
    }	

    // finally close this window since we don't need it anymore
    //window.close();
}

function _generateAlbumLink( dest, blogId, albumId, albumName, albumDesc ) 
{
    var htmlCode = '';
    
    // if no other global variable called 'indexPage' is defined, use the
    // default one
    if( indexPage == '' )
        indexPage = 'index.php';

    htmlCode = '<a title="'+albumDesc+'" href="'+plogBaseUrl+'/index.php?op=ViewAlbum&amp;blogId='+blogId+'&amp;albumId='+albumId+'">'+albumName+'</a>';
	
    return htmlCode;      
}

/**
 * generates and adds a link to an album to the textarea
 *
 * @param dest
 * @param blogId
 * @param albumId
 * @param albumName
 * @param albumDesc
 */
function addAlbumLink( dest, blogId, albumId, albumName, albumDesc ) 
{
    albumLink = _generateAlbumLink( dest, blogId, albumId, albumName, albumDesc );

    // and now send the value to the text area where we are typing the post
    if( dest == 1 ) {
        addText( parent.opener.document.newPost.postText, albumLink );
    }	
    else {
		addText( parent.opener.document.newPost.postExtendedText, albumLink );
    }
}

// ------
//
// htmlarea-related code
//
// -------
//

function resourceListWindowInit(htmlarea) {
    // if we use this method, the dialog will be resized to its full size and I don't like that...
    if( htmlarea ) {
	    __dlg_init();
	    window.resizeTo(450,600);
    }
}

function addHtmlareaLink(dest, blogId, type, resourceName, resourceDesc, preview, mimeType, resId ) {
    //var param = _generateResourceLink( dest, blogId, type, resourceName, resourceDesc, preview );
    param = new Object();
    param["htmlCode"] = _generateResourceLink( dest, blogId, type, resourceName, resourceDesc, preview, mimeType, resId );
    __dlg_close(param);
    return false;
};

function addHtmlareaAlbumLink( dest, blogId, albumId, albumName, albumDesc ) 
{
    param = new Object();
    param["htmlCode"] = _generateAlbumLink( dest, blogId, albumId, albumName, albumDesc );
    __dlg_close(param)
    return false;
}

function onCancel() {
    __dlg_close(null);
    return false;
};