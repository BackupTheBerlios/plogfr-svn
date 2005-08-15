Plugin: Remember Comment Data	
Author: Andres Bianciotto
Release Date: 2005/05/15
Version: 1.0

This plugin makes the blog "remember" the personal information users enter on the comments form.

Install:
1. Configurate your Remember Comment Data plugin in your pLog control center


Usage:
Place this BELOW the </form> tag in the commentform.template file

{if $remembercommentdata->isEnabled()}
{$remembercommentdata->show()}
{/if}

Notes:
The form MUST be named "NewComment".
The users must enable cookies for this plugin to work
