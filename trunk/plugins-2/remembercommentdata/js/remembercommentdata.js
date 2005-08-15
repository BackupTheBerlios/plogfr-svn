function createCookie(name,value,days) {
	if (days)
	{
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}

function setCookies() {
    var theForm = document.forms['NewComment'];
    createCookie("plog_cm_name", theForm.userName.value, 180);
    createCookie("plog_cm_email", theForm.userEmail.value, 180);
    createCookie("plog_cm_url", theForm.userUrl.value, 180);
    return true;
}

function readCookies() {
    var theForm = document.forms['NewComment'];
    var theName = readCookie("plog_cm_name");
    var theAddr = readCookie("plog_cm_email");
    var theUrl = readCookie("plog_cm_url");
    theForm.userName.value = (theName==null)?"":theName;
    theForm.userEmail.value = (theAddr==null)?"":theAddr;
    theForm.userUrl.value = (theUrl==null)?"":theUrl;
}

document.forms['NewComment'].onsubmit = setCookies;

setTimeout("readCookies()", 3000);
