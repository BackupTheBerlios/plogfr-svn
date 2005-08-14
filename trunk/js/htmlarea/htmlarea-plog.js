/**
 * This file has all the custom changes made to htmlarea required by plog, such as the 
 * pop-up window that allows to insert a resource into the textbox. Please make here any other
 * change needed, do NOT modify htmlarea.js in any way, it'll make things easier for us
 * when a new version comes out!
 */

HTMLArea.prototype._plogPopupDialog = function(url, action, init) {
    Dialog(url, action, init, true);
};

// load the plugins that we will use
// HTMLArea.loadPlugin("EnterParagraphs");

var postTextEditor = null;
var postExtendedTextEditor = null;

// this function will get called at body.onload
function initEditor() {

    // ------------------------------------------------------
    // Create postText Editor
    // ------------------------------------------------------
    postTextEditor = new HTMLArea("postText");

    // Config postText Toolbar
    postTextEditor.config.registerButton({
        id: "insertresource",
        tooltip: "Insert Resource",
        image: "js/htmlarea/images/ed_resource.gif",
        textMode: false,
        action: insertResource});

    // add our new icon in a place better suited for this task...		
    postTextEditor.config.toolbar = [
    	[ "fontsize", "space","space",
    	  "bold", "italic", "underline", "strikethrough", "separator",
    	  "justifyleft", "justifycenter", "justifyright", "justifyfull", "separator",
    	  "orderedlist", "unorderedlist", "separator",
    	  "createlink", "insertimage", "insertresource", "htmlmode" ]
    ];    
    
    // Config postText Plugins
    // postTextEditor.registerPlugin(EnterParagraphs);

    // Generate postText Editor
    setTimeout(function() {postTextEditor.generate();}, 1000); 

    // ------------------------------------------------------
    // Create postExtendedText Editor
    // ------------------------------------------------------
    postExtendedTextEditor = new HTMLArea("postExtendedText");

    // Config postText Toolbar
    postExtendedTextEditor.config.registerButton({
        id: "insertresource",
        tooltip: "Insert Resource",
        image: "js/htmlarea/images/ed_resource.gif",
        textMode: false,
        action: insertResource});

    // add our new icon in a place better suited for this task...		
    postExtendedTextEditor.config.toolbar = [
    	[ "fontsize", "space","space",
    	  "bold", "italic", "underline", "strikethrough", "separator",
    	  "justifyleft", "justifycenter", "justifyright", "justifyfull", "separator",
    	  "orderedlist", "unorderedlist", "separator",
    	  "createlink", "insertimage", "insertresource", "htmlmode" ]
    ];    
    
    // Config postText Plugins    
    // postExtendedTextEditor.registerPlugin(EnterParagraphs);

    // Generate postExtendedText Editor
    setTimeout(function() {postExtendedTextEditor.generate();}, 1000); 
    
    return false;
};

// The method that will insert a resource
function insertResource(editor, id) {
	//var editor = this;	// for nested functions
	editor._plogPopupDialog("admin.php?op=resourceList&mode=1", function(param) {
		if (!param) {	// user must have pressed Cancel
			return false;
		}
		// otherwise, insert the html code as it came from the dialog window
		htmlCode = param["htmlCode"];
		editor.insertHTML( htmlCode );
	}, null);
};

// Initialize HTMLArea Editor
HTMLArea.init();
HTMLArea.onload = initEditor;