function addText( id, insText ) 
{
    input = document.getElementById(id); 
	input.focus();
	if( input.createTextRange ) {
		document.selection.createRange().text += insText;
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
