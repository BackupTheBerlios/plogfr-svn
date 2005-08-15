Plugin: Recent Comments
Author: Mark Wu
Release Date: 2005/01/23
Version: 1.0

This plugin offers the most recently article comments. Usage as follow:

You can use:
1. $recentcomments->isEnabled() to check the plugin is enabled or not. 
2. $recentcomments->getRecentComments( $maxComments , $based ) to get the recent comments.

Where:
1. $maxComments is the the max comments you want to show. Default is 10.
2. $based is return the site-wide or blog-wide comments. "BLOG" means blog-wide, and "SITE" means site-wide. Default is "BLOG".

Example:
Add the following code to footer.template or header.template:
{if $recentcomments->isEnabled()}
<h2>Recent Comments</h2>
{assign var=comments value=$recentcomments->getRecentComments()}
<ul>
{foreach from=$comments item=comment}
{assign var=commentpostid value=$comment->getArticleId()}
{assign var=commentpost value=$recentcomments->getArticle($commentpostid)}
<li><a title="View comments by {$comment->getUsername()}" href="{$url->postPermalink($commentpost)}#{$comment->getId()}"><b>{$comment->getUsername()}¡G</b>{$comment->getText()|truncate:100:"..."|strip_tags}</a></li>
{/foreach}
</ul>            
{/if}