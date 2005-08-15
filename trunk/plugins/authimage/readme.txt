Plugin: AuthImage
Author: Mark Wu
Idea From: Gudlyf
Release Date: 2005/02/15
Version: 1.0

This plugin offers extra comment authentication for pLog. The idea is inspired by <a href="http://www.gudlyf.com/index.php?p=376">WordPress AuthImage Plugin</a> written by Gudlyf.

In order to use, simply include the following:
1. $authimage->isEnabled() to check the plugin is enabled or not. 
2. $authimage->show() to get the authentication image.

Install:
Add the following code to commentform.template:
{if $authimage->isEnabled()}
<div><label for="authImage">AuthImage</label><input type="text" name="authImage" id="authImage" value="" />&nbsp;{$authimage->show()}</div>
{/if}

You can add your own default background image to /plugin/authimage/backgrounds. This plugin only support GIF format currently.