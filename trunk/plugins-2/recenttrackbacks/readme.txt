Plugin: Recent Trackbacks
Author: Mark Wu
Release Date: 2005/01/23
Version: 1.0

This plugin offers the most recently article trackbacks. Usage as follow:

You can use:
1. $recenttrackbacks->isEnabled() to check the plugin is enabled or not. 
2. $recenttrackbacks->getRecentTrackbacks( $maxTrackbacks , $based ) to get the recent trackbacks.

Where:
1. $maxTrackbacks is the the max trackbacks you want to show. Default is 10.
2. $based is return the site-wide or blog-wide trackbacks. "BLOG" means blog-wide, and "SITE" means site-wide. Default is "BLOG".

Example:
Add the following code to footer.template or header.template:
{if $recenttrackbacks->isEnabled()}
<h2>Recent Trackbacks</h2>
{assign var=trackbacks value=$recenttrackbacks->getRecentTrackbacks()}
<ul>
{foreach from=$trackbacks item=trackback}
{assign var=trackbackpostid value=$trackback->getArticleId()}
{assign var=trackbackpost value=$recenttrackbacks->getArticle($trackbackpostid)}
<li><a title="View trackbacks by {$trackback->getBlogName()}" href="{$trackback->getUrl()}"><b>{$trackback->getBlogName()}¡G</b>{$trackback->getTitle()}</a></li>
{/foreach}
</ul>            
{/if}
