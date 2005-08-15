Plugin: Article Referers
Author: Mark Wu
Release Date: 2005/01/23
Version: 1.0

This plugin offers you to get the referers of the specific article. Usage as followed:

You can use:
1. $articlereferers->isEnabled() to check the plugin is enabled or not. 
2. $articlereferers->getArticleReferers( $articleId, $maxReferers , $sortByField ) to get the article referers. 

Where:
1. $articleId is the specific ariticle id
2. $maxReferers is the the max referers you want to show. 0 means show all referers. Default is 10.
3. $sortByField is the order of referers. 1 means sort by hits, and 2 means order by last visit date. Default is 1 

Example:
Add the following code to postandcomments.template:
{if $articlereferers->isEnabled()}
<p>
<h3>{$locale->tr("referers")}</h3>
{assign var=postid value=$post->getId()}
{assign var=referers value=$articlereferers->getArticleReferers($postid)}
{foreach from=$referers item=referer}
<li><a href="{$referer->getUrl()}">{$referer->getUrl()|truncate:60:"..."|escape}</a> ({$referer->getCount()})</li>
{/foreach}
</p>
{/if}