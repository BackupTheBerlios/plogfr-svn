function externalLinks() {
	if (!document.getElementsByTagName) return; 
	var anchors = document.getElementsByTagName("a"); 
	for (var i=0; i<anchors.length; i++) { 
		var anchor = anchors[i]; 
		if (anchor.getAttribute("href") && 
			anchor.getAttribute("rel") == "external") 
		anchor.target = "_blank"; 
 	}
}

function adjustlayout() {
	var hdr = xHeight("header");
	var men = xHeight("menu");
	var totalhdr = men + hdr + 10;
	var col1h = xHeight("col1");
	var col2h = xHeight("col2");
	var col3h = xHeight("col3") + 114;
	if (col3h > col1h) col1h = col3h;
	if (col1h > col2h) col2h = col1h;
	xTop("footer", totalhdr + col2h + 5);
	xShow("footer");
}

window.onload = function() {
	externalLinks();
	adjustlayout();
}