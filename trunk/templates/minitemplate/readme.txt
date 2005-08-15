Minitemplate v 0.1
Designed for pLog0.3.2<http://www.plogworld.net>
Designed by Third<Third@minibird.com><http://www.minibird.com>
Released in GPL<http://www.gnu.org/copyleft/gpl.html>.
aug 2004.

1.there is three main content templates:
	topmenu.template: you can add your own link.
	sidebar.template: all sidebar content such as recently gallery.... 
	copyright.template: you could add your own logo .

2.In sidebar.template, there is 2 block for plugin :search and statistics, 
i hide them ,if you installed that plugin, you can make it displayed.

3.In style.css, find "http://www.minibird.com/blog/templates/minitemplate/img/mouse.ani" 
and modify it to your own url for ani file.

4.there is a random image in topmenu, if you don't like that, you can find
"<SCRIPT LANGUAGE="JavaScript" SRC="{$url->getTemplateFile("bgimg.js")}"></SCRIPT>" 
in header.template and remove it , the image will be static. If you want replace with 
your own static image, your can modify the style.css ,find "url(./img/topic_dewdrop.jpg)" 
and change it to your own url.
