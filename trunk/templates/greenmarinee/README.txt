This is the readme file and change log file for "Green Marinee" template for Plog

Green Marinee 1.0 - Designed by Ian Main | http://e-lusion.com
[Theme built for WordPress 1.5 - Alex King - The WordPress 1.5 Themes Competition 2005] 
[Licensed under GPL]
[March 2005]

Modified By Knight from http://www.ahknight.net, 
Email me at me@ahknight.net if you found any error doe this template

====================================================================


# remove the <!-- and --> in panel.template if you wan to add a small box for self intro
  <!--
       <div id="author">
	Here is a section you can use to briefly talk about yourself or your site. Uncomment and delete this line to use.
	<p>Your description here.</p>
       </div>
       <div class="line"></div>
   -->
   
# to add more grey box link at right hand bottom, you can edit the footer.template
        <div class="extras">
	<ul>
	<li><a title="Link to the RSS 0.90 feed." href="{$url->rssLink("rss090")}">RSS</a></li>
          <li><a href="http://www.plogworld.net/" title="Powered by pLog, multilingual multiuser multi-blog publishing platform.">pLog</a></li>
          <li><a href="http://validator.w3.org/check/referer">XHTML 1.0 Strict</a></li>
          <li><a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a></li>
          <li> ADD MORE LINK HERE </li>
        </ul>
	</div>

23 april 2005
fix the title not display current entry 

20 april 2005
fix the comments locale problem
fix the template footer problem

9 april 2005
template port over