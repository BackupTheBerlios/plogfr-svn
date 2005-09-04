<?php
// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "iso-8859-2";
$messages["locale_description"] = "pLog magyar nyelvi file";
// days of the week
$messages["days"] = Array( "Vas�rnap", "H�tf�", "Kedd", "Szerda", "Cs�t�rt�k", "P�ntek", "Szombat" );
// -- compatibility, do not touch -- //
$messages["Monday"] = $messages["days"][1];
$messages["Tuesday"] = $messages["days"][2];
$messages["Wednesday"] = $messages["days"][3];
$messages["Thursday"] = $messages["days"][4];
$messages["Friday"] = $messages["days"][5];
$messages["Saturday"] = $messages["days"][6];
$messages["Sunday"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "Vas", "H�t", "Ked", "Sze", "Cs�", "P�n", "Szo" );
// -- compatibility, do not touch -- //
$messages["Mo"] = $messages["daysshort"][1];
$messages["Tu"] = $messages["daysshort"][2];
$messages["We"] = $messages["daysshort"][3];
$messages["Th"] = $messages["daysshort"][4];
$messages["Fr"] = $messages["daysshort"][5];
$messages["Sa"] = $messages["daysshort"][6];
$messages["Su"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "Janu�r", "Febru�r", "M�rcius", "�prilis", "M�jus", "J�nius", "J�lius", "Augusztus", "Szeptember", "Okt�ber", "November", "December" );
// -- compatibility, do not touch -- //
$messages["January"] = $messages["months"][0];
$messages["February"] = $messages["months"][1];
$messages["March"] = $messages["months"][2];
$messages["April"] = $messages["months"][3];
$messages["May"] = $messages["months"][4];
$messages["June"] = $messages["months"][5];
$messages["July"] = $messages["months"][6];
$messages["August"] = $messages["months"][7];
$messages["September"] = $messages["months"][8];
$messages["October"] = $messages["months"][9];
$messages["November"] = $messages["months"][10];
$messages["December"] = $messages["months"][11];

$messages["message"] = "�zenet";
$messages["error"] = "Hiba";

$messages["date"] = "D�tum";

// miscellaneous texts
$messages["of"] = "of";
$messages["recently"] = "Mostan�ban...";
$messages["comments"] = "Hozz�sz�l�sok";
$messages["comment on this"] = "Hozz�sz�l�s";
$messages["my_links"] = "Saj�t linkek";
$messages["archives"] = "Arch�vum";
$messages["search"] = "Keres�s";
$messages["calendar"] = "Napt�r";
$messages["categories"] = "Kateg�ri�k";
$messages["search_s"] = "Keres�s";
$messages["link_tracker"] = "Link Tracker";
$messages["search_this_blog"] = "Keres�s ezen a blogon:";
$messages["about_myself"] = "Ki vagyok?";
$messages["permalink_title"] = "�lland� link az arch�vumra";
$messages["permalink"] = "Permalink";
$messages["posted_by"] = "Bek�ldte:";
$messages["on_the"] = "on the";
$messages["page"] = "oldal";
$messages["posted"] = "bek�ldve";

$messages["reply"] = "V�lasz";


// add comment form
$messages["add_comment"] = "Hozz�sz�l�s �r�sa";
$messages["comment_topic"] = "T�ma";
$messages["comment_text"] = "Sz�veg";
$messages["comment_username"] = "Neved";
$messages["comment_email"] = "Email c�med (ha van)";
$messages["comment_url"] = "Weboldalad (ha van)";
$messages["comment_send"] = "Mehet";
$messages["comment_added"] = "Hozz�sz�l�s r�gz�tve!";
$messages["comment_add_error"] = "Hiba a hozz�sz�l�s r�gz�t�se sor�n";


$messages["article_does_not_exist"] = "A cikk nem l�tezik";
$messages["no_posts_found"] = "Nem tal�lhat� �zenet";
$messages["user_has_no_posts_yet"] = "A felhaszn�l� m�g nem k�ld�tt �zeneteket";

$messages["info_about_myself"] = "N�mi inform�ci� magamr�l...";
$messages["back"] = "Vissza";

$messages["back_top"] = "Ugr�s a tetej�re";

$messages["post"] = "post";

$messages["trackbacks_for_article"] = "Trackback-ek a k�vetkez� �zenetben:";
$messages["trackback_excerpt"] = "Excerpt";
$messages["trackback_weblog"] = "Weblog";

$messages["search_results"] = "A keres�s eredm�nye";
$messages["search_matching_results"] = "Az al�bbi �zenetek felelnek meg a keres�si felt�teleknek: ";
$messages["search_no_matching_posts"] = "Nincs tal�lat";

$messages["see_all_link"] = "Kattints ide az �sszes eddigi �zenet megtekint�s�hez";

$messages["read_more"] = "(B�vebben)";

$messages["anonymous_poster"] = "Anonymous Poster";

$messages["syndicate"] = "SYNDICATE";

$messages["main"] = "Kezd�";

////// error messages /////
$messages["error_fetching_article"] = "A megadott cikk nem tal�lhat�.";
$messages["error_fetching_articles"] = "Az �zenetek nem k�rhet�ek le.";
$messages["error_trackback_no_trackback"] = "Nem tal�lhat� trackback ezen �zenetben.";
$messages["error_incorrect_article_id"] = "�rv�nytelen �zenet azonos�t�.";
$messages["error_incorrect_blog_id"] = "�rv�nytelen �js�g azonos�t�.";
$messages["error_comment_without_text"] = "N�mi sz�veget mindenk�ppen meg kell adnod.";
$messages["error_comment_without_name"] = "A neved/beceneved mindenk�pp meg kell adnod.";
$messages["error_adding_comment"] = "Hiba a hozz�sz�l�s r�gz�t�se sor�n.";
$messages["error_incorrect_parameter"] = "�rv�nytelen param�ter.";
$messages["error_parameter_missing"] = "Hi�nyzik egy param�ter a k�relemb�l.";
$messages["error_blog_has_no_links"] = "M�g nincsenek linkek.";
$messages["error_comments_not_enabled"] = "A hozz�sz�l�s lehet�s�ge kikapcsolva.";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////


////// help messages for the administration interface /////
$messages["newPost"] = "<p>Use this page to add a new post to your journal. You should provide a topic or subject
for your post as well as some text for your post. Once you have finished, press the <b>'Add'</b> button and the post
will automatically be included in your page. Please note that you have to set the status of the post
to <b>'Published'</b> if you want it to appear in front page. Use the <b>'Draft'</b> status when you can't finish posting
now but you would like to save what you have typed so far for later revision.</p>
<p>You can also classify the post under any of the categories you have previously created. Simply set
the <b>'Category'</b> field to the one you most like.</p>
<p>If you would like to receive an email notifying about a new post, please check the corresponding
checkbox.</p>
<p>Check the box where it says </b>'Find links in the post...'</b> if after adding the post, you
would like to send trackback pings to the hosts that support it. Your post will be scanned for
links and you will have the possibility to choose which ones to send trackback pings to.</p>";

$messages["addPost"] = "<p>Your post has been successfully added to the database. Now you can select
to which hosts you would like to send a trackback ping, so that they know you have written about them
and can <i>track you back</i>.</p>";

$messages["editComments"] = "There are all the comments that have been posted for the given post. Comments
can not be edited but they can be deleted. The only mandatory field when posting comments is the
\"name\" field, so the E-mail and Url columns could be empty. The IP Address field is the
original IP address where this comment was posted from. You can delete
as many as you need by checking the corresponding <b>'Delete'</b> checkbox and pressing the
<b>'Delete selected'</b> button.";

$messages["postStats"] = "<p>These are the statistics about the selected post. The first one is how
many times this article has been read, but please keep in mind that this statistic might be
meaningless if you have disabled the <b>'Read more...'</b> feature in the <b>'Blog Settings'</b>
section.</p>
<p>The referrers are the urls of all the hosts that visited this post, and the trackbacks table represents
how many trackback pings have been received for this post. They can't be deleted or modified.</p>";

$messages["editLinks"] = "<p>Itt tal�lhatod a r�gz�tett linkek list�j�t. Az �zenetekhez hasonl�an minden
link kateg�ri�kba sorolhat�, a f�oldalon t�rt�n� megjelen�t�s �rdek�ben..</p>
<p>Minden linkn�l l�that� a neve az URL ahova mutat, a ketag�ria. V�g�l pedig lehet�s�ged van b�rmelyik link t�rl�sre is.</p>";

$messages["newLink"] = "<p>Itt r�gz�thetsz �j linkeket. Az URL c�met �s a nevet mindenk�pp meg kell adnod. 
A le�r�s megad�sa opcion�lis. Tov�bb� legal�bb egy link kateg�ri�val is rendelkezned kell link r�gz�t�se el�tt.</p>";

$messages["editLinkCategories"] = "<p>This is a list with all the link categories that have been
created. Like with posts, you need at least one link category before you can add any link. Clicking
on the <b>'Links'</b> column will show all the links that belong to the category.</p>";

$messages["newLinkCategory"] = "<p>The only thing you need to provide in order to have a new
link category is a descriptive name for the category. Once the link category has been created,
it will be available for links to be categorized under.</p>";

$messages["userSettings"] = "<p>Things related to your user profile can be changed from this
page. Please note that your username cannot be changed.<ul>
<li><b>Password, Confirm Password</b>: If you would like to change your password, please type it in
the first text box. Do the same in the second box to confirm that you entered the same password.</li>
<li><b>Email address</b>: Please set this to a valid email address if you would like to use features
such as the notification when a comment is received to a post. It is used only for internal
purposes and will not be publicly displayed.</li>
<li><b>Bio</b>: You can type here some information about yourself. It can be left empty.</li>
</ul></p>";

$messages["Stats"] = "<p>You can see from here all the referrers that have hit this site in the past.
The <b>'Article'</b> column reflects which article was visited by the referrer or the value <b>'0'</b>
if the referrer visited the main page or any other page which was not an article. Finally, the
<b>'Last hit date'</b> column is the time of the last hit received from that referrer.</p>";

$messages["editLink"] = "<p>You have to provide at least a url and a name for the link. The link must also
be categorized under a category.</p>";

$messages["editLinkCategory"] = "Please provide a new name for the link category you are updating.</p>";

$messages["blogSelect"] = "Please select one of the operations from the menu.";

$messages["Error"] = "There was an error while executing the requested operation. Please see
the main page for more information regarding the error.";

$messages["Message"] = "Please see the main page for more information regarding the message.";

//////// strings for the administration interface ///////



$messages["admin_interface_title"] = "pLog Adminisztr�ci�s fel�let";
$messages["administration"] = "Adminisztr�ci�";
$messages["help"] = "S�g�";
$messages["plog_help"] = "pLog S�g�";
$messages["new_post"] = "�j �zenet";
$messages["posts"] = "�zenetek";
$messages["admin_categories"] = "Kateg�ri�k";
$messages["admin_links"] = "Linkek";
$messages["link_categories"] = "Link kateg�ri�k";
$messages["settings"] = "Be�ll�t�sok";
$messages["logout"] = "Kijelentkez�s";

// new post page
$messages["topic"] = "T�ma";
$messages["text"] = "Sz�veg";
$messages["category"]  = "Kateg�ria";
$messages["status"] = "�llapot";
$messages["status_draft"] = "Piszkozat";
$messages["status_published"] = "Publik�lva";
$messages["status_deleted"] = "T�r�lve";
$messages["status_all"] = "�sszes";
$messages["send_notification"] = "�rtes�t�s minden egyes hozz�sz�l�s �rkez�sekor.";
$messages["send_trackback_pings"] = "Megkeresi a linkeket az �zenetben �s trackback pinget k�ld azok fel�, melyek t�mogatj�k ezt a lehet�s�get.";
$messages["add_post"] = "Mehet!";

$messages["xmlrpc_ping_ok"] = "XML-RPC Ping sikeresen elk�dve: ";
$messages["error_sending_xmlrpc_ping"] = "Hiba az XML-RPC Ping k�ld�se k�zben: ";
$messages["error_sending_xmlrpc_ping_message"] = "A hiba�zenet: ";

$messages["preview"] = "El�n�zet";
$messages["post_added"] = "�zenet r�gz�tve";
$messages["you_will_be_notified"] = "Tov�bb� �rtes�t�st kapsz minden egyes, ezen �zenethez �rkez� hozz�sz�l�sr�l is.";
$messages["post_added_not_published"] = "�zenet r�gz�tve, de nincs publik�lva.";
$messages["error_adding_post"] = "Hiba az �zenet r�gz�t�se sor�n!";
$messages["error_must_fill_all_fields"] = "Ki kell t�ltened az �sszes mez�t!";
$messages["error_must_have_one_category"] = "Legal�bb egy kateg�ri�val rendelkezned kell az �zenet bek�ld�se el�tt";

// send trackbacks page
$messages["send_trackback_pings"] = "Trackback Ping k�ld�se";
$messages["links_found"] = "Az al�bbi linkek tal�lhat�ak az �zenetben. V�laszd ki, melyek fel� szeretn�l trackback pinget k�ldeni (ez eltarthat egy ideig)";
$messages["trackbacks_no_urls_selected"] = "Nem lett url kiv�lasztva, enn�lfogva trackback ping se lett k�ldve.";
$messages["trackbacks_received_ok"] = "Az al�bbi c�mek fogadt�k sikeresen a trackback pinget:";
$messages["trackbacks_no_trackback"] = "Az al�bbi c�meknek nincs �rv�nyes trackback url c�m�k: ";
$messages["trackbacks_problems_sending"] = "Probl�m�k voltak a trackback ping k�ld�s�vel az al�bbi c�mekre.
Megpr�b�lhatod k�s�bb el�rni �ket.";
$messages["trackbacks_received_all_hosts"] = "Az �sszes c�mre sikeres volt a trackback ping k�ld�se.";
$messages["ping_selected"] = "A kiv�lasztott oldalak pingel�se";

// edit posts
$messages["author"] = "Szerz�";
$messages["category_all"] = "�sszes";
$messages["author_all"] = "�sszes";
$messages["update"] = "Friss�t�s";
$messages["date"] = "D�tum";
$messages["stats"] = "Statisztika";
$messages["delete"] = "T�rl�s";

$messages["delete_selected"] = "Kiv�lasztott t�rl�se";

// edit post
$messages["edit_post"] = "�zenet m�dos�t�sa";
$messages["error_getting_post_to_update"] = "Hiba a friss�tend� �zenet lek�r�se sor�n.";
$messages["error_updating_post_in_database"] = "Hiba az �zenet friss�t�se sor�n.";
$messages["post_successfully_updated"] = "�zenet sikeresen friss�tve.";
$messages["notification_removed"] = "Ezen �zenetre az �rtes�t�s k�ld�s kikapcsolva.";

// post statistics
$messages["statistics_for_post"] = "Statisztika: ";
$messages["error_fetching_post"] = "Hiba az �zenet lek�r�se k�zben.";
$messages["times_post_has_been_read"] = "Olvas�sok sz�ma: ";
$messages["referers"] = "Aj�nl�k";
$messages["id"] = "Id";
$messages["url"] = "Url";
$messages["hits"] = "Tal�latok";
$messages["trackbacks"] = "Trackbacks";

// post comments
$messages["error_fetching_comments"] = "Hiba a hozz�sz�l�sok lek�r�se sor�n";
$messages["comments_for_post"] = "Hozz�sz�l�sok: ";
$messages["email"] = "E-Mail";
$messages["ip_address"] = "IP c�m";

// delete comments
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_no_comments_selected"] = "Nem lett hozz�sz�l�s kijel�lve.";
$messages["error_deleting_comment"] = "Hiba a hozz�sz�l�s t�rl�se sor�n: ";
$messages["comment_deleted_ok"] = "A(z) - \"%s\" - t�m�j� hozz�sz�l�s sikeresen t�r�lve.";
//*** NEW ***//
// please remove these comments after translating these lines


// categories list
$messages["category_name"] = "N�v";

// removing posts
$messages["post_cannot_be_deleted"] = "�zenet nem t�r�lhet�";
$messages["no_posts_selected"] = "Nincsenek t�rl�sre megjel�lt �zenetek.";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "Hiba a(z) \"%s\" t�rl�se sor�n (id = %d)";
$messages["post_deleted_ok"] = "\"%2\$s\" sikeresen t�r�lve (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "Nincsenek t�rl�sre megjel�lt kateg�ri�k.";
$messages["error_category_has_articles"] = "A(Z) \"%s\" kateg�ria nem t�r�lhet�, mivel legal�bb egy �zenetet tartalmaz. T�r�ld az �zenet(ek)et �s pr�b�ld �jra.";
$messages["error_deleting_category"] = "Hiba a(z) \"%s\" kateg�ria adatb�zisb�l t�rt�n� elt�vol�t�sa sor�n.";
$messages["category_deleted_ok"] = "A(z) \"%s\" kateg�ria sikeresen t�r�lve.";

// add category
$messages["add_new_category"] = "�j kateg�ria";
$messages["add_new_category_info"] = "Adj meg egy �rv�nyes nevet az �j kateg�ria sz�m�ra.";
$messages["category_added_ok"] = "Kateg�ria sikeresn r�gz�tve.";
$messages["error_adding_article_category"] = "Hiba a kateg�ria r�gz�t�se sor�n.";

// edit categories
$messages["edit_category"] = "Kateg�ria m�dos�t�sa";
$messages["please_provide_valid_category_name"] = "Adj meg egy �rv�nyes nevet a kateg�ria sz�m�ra.";

// edit category

$messages["error_incorrect_category_id"] = "�rv�nytelen kateg�ria azonos�t�";


// update the category
$messages["error_fetching_category"] = "Hiba a kateg�ria lek�r�se sor�n.";
$messages["error_updating_category"] = "Hiba a kateg�ria friss�t�se sor�n.";
$messages["error_empty_category_name"] = "�rv�nyes nevet kell megadnod a kateg�ria sz�m�ra.";
$messages["category_updated_ok"] = "Kateg�ria sikeresen friss�tve.";

// edit links
$messages["link_name"] = "N�v";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["category"];
$messages["link_description"] = "Le�r�s";
$messages["links"] = "Linkek";

// edit a link
$messages["error_provide_name_and_url"] = "A link nev�t �s az url c�m�t mindenk�pp meg kell adnod.";
$messages["error_invalid_link_id"] = "�rv�nytelen vagy hi�nyz� link azonos�t�.";
$messages["error_fetching_link"] = "Hiba a link lek�r�se sor�n.";
$messages["error_updating_link"] = "Hiba a link friss�t�se sor�n.";
$messages["link_updated_ok"] = "Link sikeresen friss�tve!";
$messages["error_fetching_link_categories"] = "Hiba a linkkateg�ri�k lek�r�se sor�n.";

// add a link
$messages["add_new_link"] = "�j link";
$messages["add_link"] = "Mehet";
$messages["error_adding_link"] = "Hiba a link r�gz�t�se sor�n.";
$messages["link_added_ok"] = "Link sikeresen r�gz�tve.";
$messages["error_provide_name_and_url"] = "Meg kell adnod legal�bb egy �rv�nyes nevet �s c�met.";
$messages["error_must_have_one_link_category"] = "Legal�bb egy link kateg�ri�val rendelkezned kell a link r�gz�t�s�hez.";

// delete a link
$messages["error_no_links_selected"] = "Nincsenek t�rl�sre megjel�lt linkek.";
$messages["error_removing_link"] = "Hiba a(z) \"%s\" link t�rl�se sor�n.";
$messages["link_deleted_ok"] = "A(z) \"%s\" link sikeresen t�r�lve.";

// edit link categories
$messages["add_link_category"] = "�j link kateg�ria";
$messages["link_categories_help"] = "Legal�bb egy link kateg�ri�val rendelkezned kell a link r�gz�t�s�hez.";
$messages["link_category_name"] = "N�v";
$messages["link_category_links"] = "Link(ek)";

// new link category
$messages["new_link_category_info"] = "A link kateg�ri�k seg�tenek oszt�lyozni a megl�v� linkeket. Seg�ts�g�kkel csoportos�thatva is megjelen�theted �ket a f�oldalon.";
$messages["add_link_category"] = "�j kateg�ria";
$messages["error_provide_link_category_name"] = "Meg kell adnod egy �rv�nyes nevet.";
$messages["error_adding_link_category"] = "Hiba a kateg�ria r�gz�t�se sor�n.";
$messages["link_category_added_ok"] = "Link kateg�ria sikeresen r�gz�tve.";

// edit link category
$messages["edit_link_category"] = "Link kateg�ria m�dos�t�sa";
$messages["error_updating_link_category"] = "Hiba a link kateg�ria m�dos�t�sa sor�n.";
$messages["link_category_updated_ok"] = "Link kateg�ria sikeresen friss�tve.";
$messages["error_fetching_link_category"] = "Hiba a link kateg�ria lek�r�se sor�n.";
$messages["error_incorrect_link_category_id"] = "�rv�nytelen azonos�t�";


// delete link categories
$messages["error_no_link_category_selected"] = "Nincsenek t�rl�sre megjel�lt kateg�ri�k.";
$messages["error_links_in_link_category"] = "A(z) \"%s\" kateg�ria nem t�r�lhet�, mivel linkeket tartalmaz. El�sz�r t�vol�tsd el a linkeket, majd pr�b�ld �jra.";
$messages["error_removing_link_category"] = "Hiba a(z) \"%s\" kateg�ria t�rl�se sor�n.";
$messages["link_category_deleted_ok"] = "A(z) \"%s\" kateg�ria sikeresen t�r�lve.";
// this error is shown when for some reason the category could not be fetched from the database
// and we can't show its name
$messages["error_removing_link_category_2"] = "Hiba az al�bbi azonos�t�j� kateg�ria elt�vol�t�sa sor�n: id = %d";

// blog settings page
$messages["blog_settings"] = "Blog be�ll�t�sok";
$messages["user_profile"] = "Felhaszn�l�i profil";
$messages["plugin_center"] = "Pluginok";
$messages["statistics"] = "Statisztika";
$messages["blog_name"] = "Blog n�v";
$messages["long_blog_name"] = "Hoszabb, r�szletesebb le�r�s err�l a blogr�l";
$messages["language_used"] = "A haszn�land� nyelv";
$messages["items_main_page"] = "H�ny elem l�tsz�djon a f�oldalon?";
$messages["items_as_recent"] = "H�ny elem l�tsz�djon \"Friss\"-k�nt?";
$messages["template_used"] = "V�lassz sablont, mely meghat�rozza a blog kin�zet�t";
$messages["cut_posts"] = "A t�l hossz� �zenetek k�t r�szre oszt�sa egy \"Tov�bb...\" linkkel?";
$messages["cut_posts_after_characters"] = "H�ny karakter ut�n t�rt�njen a k�t r�szre oszt�s?";
$messages["enable_wysiwyg_edition"] = "A WYSIWYG szerkeszt�s enged�lyez�se (csak Internet Explorer 5.5 vagy �jabb �s Mozilla 1.3b vagy �jabb eset�n)?";
$messages["enable_comments"] = "Hozz�sz�l�s enged�lyez�se minden �zenetn�l?";
$messages["yes"] = "Igen";
$messages["no"] = "Nem";
$messages["error_invalid_locale"] = "�rv�nytelen �rt�k a be�ll�t�sokn�l";
$messages["error_incorrect_max_recent_items"] = "�rv�nyes sz�mot adj�l meg a friss elemek sz�m�nak.";
$messages["error_incorrect_number_of_posts"] = "�rv�nyes sz�mot adj�l meg a f�oldalon megjelen�tend� elemek sz�m�nak.";
$messages["error_incorrect_template"] = "�rv�nytelen sablon �rt�k.";
$messages["error_no_blog_name"] = "�rv�nyes nevet kell megadnod a blog nev�nek.";
$messages["error_incorrect_show_more_threshold"] = "�rv�nyes sz�mot kell megadnod, hogy az �zenet kett�v�g�sa rendesen m�k�dj�n.";
$messages["error_updating_settings"] = "Hiba a be�ll�t�sok friss�t�se sor�n.";
$messages["blog_settings_updated_ok"] = "Blog be�ll�t�sok sikeresen friss�tve!";
$messages["permanent_blog_url"] = "A blog �lland� URL c�me (nem m�dos�that�)";

// user profile page
$messages["username"] = "Felhaszn�l�n�v";
$messages["password"] = "Jelsz�";
$messages["confirm_password"] = "Jelsz� meger�s�t�se";
$messages["email_address"] = "Email c�m";
$messages["bio"] = "Bio";
$messages["empty_no_change"] = "Hagyd �resen, ha nem v�ltoztatod";
$messages["user_settings_updated_ok"] = "Felhaszn�l�i be�ll�t�sok sikeresen friss�tve.";
$messages["error_updating_user_settings"] = "Hiba a felhaszn�l�i be�ll�t�sok friss�t�se sor�n.";
$messages["error_passwords_dont_match"] = "A k�t jelsz� nem egyezik.";
$messages["error_incorrect_password"] = "�rv�nytelen jelsz�.";
$messages["error_incorrect_email_address"] = "�rv�nytelen Email c�m.";

// plugin center page
$messages["plugins_available"] = "A sablonokban alkalmazhat� pluginek list�ja";
$messages["identifier"] = "Azonos�t�";
$messages["description"] = "Le�r�s";
$messages["error_plugins_disabled"] = "A pluginek haszn�lata letiltva ezen az oldalon.";

// statistics page
$messages["statistics_info"] = "A nulla azonos�t�j� cikk a f�oldalra �rkez� tal�latot jelenti, �s nem egy cikkre vonatkozik.";
$messages["article_id"] = "Cikk Id";
$messages["last_hit_date"] = "Utols� tal�lat id�pontja";
$messages["error_fetching_referers"] = "Hiba az oldal lek�r�se sor�n.";


// login screen
$messages["login_page_title"] = "pLog Adminisztr�ci�s fel�let";
$messages["login"] = "Bejelentkez�s";
$messages["welcome_message"] = "�dv�z�llek a pLog-ban";
$messages["error_incorrect_username_or_password"] = "�rv�nytelen felhaszn�l�n�v vagy jelsz�.";
$messages["error_dont_belong_to_any_blog"] = "Nem tartozol egyetlen bloghoz sem.";
$messages["error_no_username_or_password"] = "K�rlek adj meg egy �rv�nyes felhaszn�l�nevet �s jelsz�t.";
$messages["choose_one_blog"] = " Az al�bbi blogokhoz f�rsz hozz�. V�laszd ki amelyiken dolgozni akarsz";
$messages["continue"] = "Tov�bb";
$messages["logout_message"] = "Sikeersen kijelentkezt�l.";
$messages["logout_message_2"] = "<a href=\"admin.php\">Kattints ide</a> az �jboli bejelentkez�shez, vagy
<a href=\"%1\$s\">ide, hogy visszat�rj a(z) %2\$s kezd�oldal�ra</a>.";
$messages["logout_title"] = "Kijelentkezve";
$messages["error_access_forbidden"] = "Hozz�f�r�s megtagadva. El�sz�r azonos�tanod kell magad ITT.";

/////////////////////////////////////////////////////////////////////
//
//
// new strings added for 0.2
//
//
////////////////////////////////////////////////////////////////////
$messages["site_admin"] = "Oldal Admin";
$messages["site_stats"] = "Oldal statisztik�k";
$messages["add_user"] = "�j felhaszn�l�/szerkeszt�";
$messages["users"] = "Felhaszn�l�k/Szerkeszt�k";
$messages["add_blog"] = "�j blog";
$messages["blogs"] = "Blogok";
$messages["locales"] = "Nyelvi be�ll�t�sok";
$messages["add_locale"] = "�j nyelv hozz�ad�sa";
$messages["templates"] = "Sablonok";
$messages["add_template"] = "Sablonok hozz�ad�sa";
$messages["global_settings"] = "�ltal�nos be�ll�t�sok";
$messages["site_settings"] = "Oldal be�ll�t�sok";
$messages["help_comments_enabled"] = "Hozz�sz�l�sok enged�lyez�se/tilt�sa az eg�sz oldalon.";
$messages["help_beautify_comments_text"] = "A felhaszn�l�i sz�vegform�z�s enged�lyez�se.";
$messages["help_rdf_enabled"] = "RDF folyam enged�lyez�se a legut�bbi �zenetekhez.";
$messages["help_temp_folder"] = "A pLog ideiglenes m�veletekhez haszn�lt k�nyvt�ra.";
$messages["help_base_url"] = "A helyes c�mek el��ll�t�s�hoz haszn�lt URL. Helyes �rt�ket �ll�ts be.";
$messages["help_show_posts_max"] = "Az alap�rtelmez�s szerint a f�oldalon megjelen�tett �zenetek sz�ma.";
$messages["help_recent_posts_max"] = "Az alap�rtelmez�s szerint frissk�nt megjel�lt �zenetek sz�ma.";
$messages["help_template_folder"] = "A pLog �ltal haszn�l sablonok el�r�si �tvonala.";
$messages["help_default_template"] = "Az alap�rtelmezett sablon.";
$messages["help_default_locale"] = "Az alap�rtelmezett nyelvi file.";
$messages["help_html_allowed_tags_in_comments"] = "A hozz�sz�l�sokban enged�lyezett HTML k�dok.";
$messages["help_referer_tracker_enabled"] = "Alapvet� inform�ci�k r�gz�t�se az aj�nl�rol az adatb�zisban, ha ez lehets�ges.";
$messages["help_rss_parser_enabled"] = "A sablonban tal�lhat� RSS parser enged�lyez�se.";
$messages["help_show_more_enabled"] = "A \"Tov�bb...\" opci� alap�rtelmez�s szerinti enged�lyez�se.";
$messages["help_show_more_threshold"] = "Milyen hossz� legyen a sz�veg a t�rdel�s el�tt.";
$messages["help_update_article_reads"] = "Sz�molja-e a rendszer a cikkek olvas�s�nak sz�m�t?";
$messages["help_request_format_mode"] = "\"Sima\" m�d eset�n hagyom�nyos URL c�meket gener�l, m�g \"Keres� bar�t\" m�d keres� motorok szempontj�b�l el�ny�sebb URL c�meket hoz l�tre. Sz�ks�ges: Apache �s .htaccess file haszn�lat�nak enged�lyez�se.";
$messages["help_xmlrpc_ping_enabled"] = "XMLRPC �rtes�t�s k�ld�se minden egyes �zenet ut�n a lent be�ll�tott c�mekre.";
$messages["help_xmlrpc_ping_hosts"] = "XMLRPC �rtes�t�s t�mogat�ssal rendelkez� c�mek. Minden egyes c�m �j sorba ker�lj�n. Annyit adhatsz meg, amennyi sz�ks�ges.";
$messages["help_trackback_server_enabled"] = "Bej�v� trackback k�relmek fogad�s�nak enged�lyez�se.";
$messages["help_htmlarea_enabled"] = "A WYSIWYG szerkeszt� enged�lyez�se.";
$messages["help_plugin_manager_enabled"] = "Pluginok enged�lyez�se.";
$messages["help_check_email_address_validity"] = "�j blog regisztr�l�sa sor�n a felhaszn�l�kt�l egy �rv�nyes email c�m lesz bek�rve, a j�v�hagy�s �rdek�ben, ha ez az opci� enged�lyezve van.";
$messages["help_summary_page_show_max"] = "Az �sszegz�s oldalon megjelen�tend� elemek sz�ma.";
$messages["help_minimum_password_length"] = "A jelsz� minim�lis hossza.";
$messages["help_users_can_add_templates"] = "Felhaszn�l�k be�ll�thatnak-e �j sablont a blogjuk sz�m�ra, vagy sem.";
$messages["help_email_service_enabled"] = "Email k�ld� ki/bekapcsol�sa. Ezen kereszt�l t�rt�nik pl. a cikkekre �rkez� hozz�sz�l�sok jelent�se.";
$messages["post_notification_source_address"] = "Az email k�ld�jek�nt felt�ntetett c�m.";
$messages["help_email_service_type"] = "Az email k�ld�s�nek m�dja. V�lassz ki egyet �s ne feledd ellen�rizni a lenti be�ll�t�sokat.";
$messages["help_smtp_host"] = "SMTP haszn�lata eset�n ez a host, ami k�ldeni fogja a leveleket.";
$messages["help_smtp_port"] = "Az SMTP szerver portja.";
$messages["help_smtp_use_authentication"] = "Ha az SMTP szerver t�mogatja az azonos�t�st, akkor kapcsold be ezt az opci�t �s ellen�rid lent a k�t be�ll�t�st.";
$messages["help_smtp_username"] = "Felhaszn�l�n�v - csak akkor kell, ha az azonos�t�s be van kapcsolva.";
$messages["help_smtp_password"] = "Jelsz� - csak akkor kell, ha az azonos�t�s be van kapcsolva.";
$messages["help_uploads_enabled"] = "Filefelt�lt�s enged�lyez�se. Hat�ssal van a sablonok illetve a sablonokhoz ut�lagosan felt�ltend� kieg�sz�t�k felt�lt�sre is.";
$messages["help_maximum_file_upload_size"] = "A felhaszn�l�k �ltal felt�lthet� maxim�lis filem�ret byte-ban megadva.";
$messages["help_upload_forbidden_files"] = "Tiltott filet�pusok list�ja. Tetsz�leges menny�s�get megadhatsz, sz�k�zzel elv�lasztva.";
$messages["help_path_to_tar"] = "A 'tar' el�r�si �tvonala.";
$messages["help_path_to_gzip"] = "A 'gzip' el�r�si �tvonala.";
$messages["help_path_to_bz2"] = "A 'bzip2' el�r�si �tvonala.";
$messages["help_path_to_unzip"] = "Az 'unzip'  el�r�si �tvonala.";

$messages["add_user_give_information"] = "Add meg az al�bbi adatokat �j felhaszn�l� regisztr�l�s�hoz.";

$messages["site_registered_users"] = "Az �sszes regisztr�lt felhaszn�l�.";

$messages["add_blog_give_information"] = "Add meg az al�bbi adatokat �j blog l�trehoz�s�hoz.";
$messages["blog_title"] = "Blog neve";
$messages["blog_owner"] = "Blog tulajdonosa";

$messages["site_registered_blogs"] = "Az �sszes regisztr�lt blog.";
$messages["edit_users"] = "Felhaszn�l�k m�dos�t�sa";

$messages["upload_locale"] = "Nyelvi file felt�lt�se";
$messages["use_this_form_to_upload_locale"] = "  Haszn�ld ezen mez�t �j nyelvi file hozz�ad�s�hoz. Ha nincs lehet�s�ged fle felt�lt�s�re, haszn�ld a lenti mez�t.";
$messages["locale_file"] = "File";
$messages["manually_add_locale"] = "Nyelvi file k�zi hozz�ad�sa";
$messages["use_this_form_if_cant_upload_locale"] = "Haszn�ld ezen mez�t, ha nincs lehet�s�ged file felt�lt�s�re. A file-t fell kell t�lteni a nyelvi mapp�ba a m�velet megkezd�se el�tt.";
$messages["locale_code"] = "Nyelvi k�d";
$messages["locale_encoding"] = "K�dol�s";

$messages["template_will_be_available_for_all"] = "Az �j sablon file el�rhet� lesz az �sszes blog sz�m�ra.";

$messages["use_this_form_to_upload_template"] = "  Haszn�ld ezt a mez�t sablon szettek felt�lt�s�re. Ha nincs lehet�s�ged file-ok felt�lt�s�re, akkor haszn�ld a lenti mez�t. A szetteknek zip, tar.gz vagy tar.bz2 form�tumban kell lenni�k.";
$messages["locale_file"] = "File";
$messages["upload_template"] = "Sablon felt�lt�se";
$messages["manually_add_template"] = "Sablon hozz�ad�sa k�zzel";
$messages["use_this_form_if_cannot_upload_template"] = " Ha nincs lehet�s�ged file-ok felt�lt�s�re, akkor haszn�ld ezt a mez�t. A file-t be kell m�solnod az alap�rtelmezett sablon mapp�ba a m�velet megkezd�se el�tt.";
$messages["template_id"] = "Sablon azonos�t�";

$messages["templates_available_for_all"] = "Az oldal �sszes blogja �ltal el�rhet� sablonok";
$messages["add_file"] = "File hozz�ad�sa";

$messages["setting_name"] = "Be�ll�t�s";
$messages["setting_value"] = "�rt�k";
$messages["setting_description"] = "Le�r�s";

$messages["plain"] = "Sima";
$messages["search_engine_friendly"] = "Keres� bar�t";

$messages["general_settings"] = "�ltal�nos be�ll�t�sok";
$messages["helper_tools_settings"] = "A seg�deszk�z�k be�ll�t�sai";
$messages["uploads_settings"] = "Felt�lt�ssel kapcsolatos be�ll�t�sok";
$messages["email_settings"] = "Email be�ll�t�sok";

$messages["number_blogs"] = "Blogok sz�ma";
$messages["number_users"] = "Felhaszn�l�k sz�ma";
$messages["number_posts"] = "�zenetek sz�ma";
$messages["number_posts_today"] = "�zenetek a mai napon";
$messages["number_posts_this_month"] = "�zenetek ezen h�napban";

$messages["date"] = "D�tum";
$messages["time"] = "Id�";

$messages["comments_order"] = "Hozz�sz�l�sok sorrendje:";
$messages["oldest_first"] = "R�gebbi el�re";
$messages["newest_first"] = "�jabb el�re";

$messages["blog"] = "Blog";
$messages["blog_id"] = "Numerikus blog azonos�t�";

$messages["blog_users"] = "Blog felhaszn�l�k";
$messages["available_users"] = "El�rhet� felhaszn�l�k";
$messages["add"] = "Hozz�ad�s";
$messages["remove"] = "Elt�vol�t�s";

$messages["user_id"] = "Numerikus felhaszn�l� azonos�t�";

$messages["new_password"] = "�j jelsz�";
$messages["has_administrator_privileges"] = "Adminisztr�tori privil�giumokkal rendelkezik";
$messages["related_to_the_following_blogs"] = "A k�vetkez� blogokhoz kapcsol�dik";

$messages["add_user_to_blog_form"] = " Ezen oldal seg�ts�g�vel adhatsz �j szerkeszt�t a bloghoz. Ezen felhaszn�l� �rhat �j �zeneteket �s a megl�v�ket is m�dos�thatja, de a blog be�ll�t�saihoz nem f�r hozz�.";
$messages["add_user_enter_username"] = " Add meg a leend� szerkeszt� felhaszn�l�i nev�t. A felhaszn�l�nak m�r regisztr�lva kell lennie a rendszerben, k�l�nben hiba�zenetet fogsz kapni.";
$messages["add_user_send_notification"] = "Felhaszn�l� �rtes�t�se emailben.";
$messages["add_user_type_notification"] = "Az emailben elk�ldend� �rtes�t�s sz�vege";

$messages["following_users_have_permissions"] = " Az al�bbi felhaszn�l�k k�pzik a blog szerkeszt�s�g�t. �rhatnak �s m�dos�thatnak �zeneteket, de a blog be�ll�t�saihoz nem f�rnek hozz�.";
$messages["revoke_permissions"] = "Jogosults�g visszavon�sa";

$messages["add_blog_template"] = "�j sablon";
$messages["manually_add_blog_template"] = "Sablon hozz�ad�sa k�zzel";
$messages["template_available_only_for_this_blog"] = "Ez a sablon csak ezen blog sz�m�ra lesz el�rhet�.";
$messages["use_form_to_upload_blog_template"] = "Haszn�ld ezt a mez�t sablon szettek felt�lt�s�re. Ha nincs lehet�s�ged file-ok felt�lt�s�re, akkor haszn�ld a lenti mez�t. A szetteknek zip, tar.gz vagy tar.bz2 form�tumban kell lenni�k.";
$messages["use_form_if_cannot_upload_blog_template"] = "Ha nincs lehet�s�ged file-ok felt�lt�s�re, akkor haszn�ld ezt a mez�t. A file-t be kell m�solnod az alap�rtelmezett sablon mapp�ba a m�velet megkezd�se el�tt.";

$messages["blog_templates"] = "Blog sablonok";
$messages["templates_only_available_for_this_blog"] = "Az al�bbi sablonok csak ezen blog sz�m�ra el�rhet�ek.";

$messages["add_file_to_blog_template"] = "File hozz�ad�sa sablonhoz"; $messages["upload_file_to_blog_template"] = "T�ltsd fel a file-t, amit hozz� akarsz adni a szetthez.";

$messages["error_user_id_incorrect"] = "�rv�nytelen felhaszn�l� azonos�t�.";
$messages["error_incorrect_user_id"] = $messages["error_user_id_incorrect"];
$messages["error_fetching_user_information"] = "Hiba a felhaszn�l�i inform�ci�k lek�r�se sor�n.";
$messages["error_password_incorrect"] = "�rv�nytelen, vagy t�l r�vid jelsz�.";
$messages["error_updating_user_settings"] = "A felhaszn�l� be�ll�t�sainak friss�t�se sikertelen.";
$messages["user_settings_updated_ok"] = "A(z) \"%s\" felhaszn�l� be�ll�t�sai sikeresen friss�tve.";
$messages["error_no_users_selected_to_add"] = "Nem lettek felhaszn�l�k kijel�lve.";
$messages["user_added_to_blog_ok"] = "A(z) \"%s\" felhaszn�l� hozz�adva a bloghoz.";
$messages["error_adding_user_to_blog"] = "Hiba a(z) \"%s\" felhaszn�l� felv�tele sor�n.";
$messages["error_no_users_selected_to_remove"] = "Nincsenek t�rl�sre megjel�lt felhaszn�l�k.";
$messages["user_removed_from_blog_ok"] = "\"%s\" t�r�lve a blogr�l.";
$messages["error_removing_user_from_blog"] = "Hiba a(z) \"%s\" felhaszn�l� t�rl�se sor�n.";

$messages["error_incorrect_plugin_id"] = "�rv�nytelen plugin azonos�t�.";
$messages["error_configuring_plugin"] = "Hiba a plugin be�ll�t�sa sor�n: ";
$messages["site_config_saved_ok"] = "Az oldal be�ll�t�sai sikeresen elmentve.";
$messages["error_saving_site_config"] = "Hiba a be�ll�t�sok elment�se sor�n.";

$messages["error_incorrect_blog_owner"] = "A blog tulajdonos�nak v�lasztott felhaszn�l� nem l�tezik.";
$messages["error_updating_blog_settings"] = "Hiba a(z) \"%s\" blog be�ll�t�sainak friss�t�se sor�n";
$messages["blog_settings_updated_ok"] = "A(z) \"%s\" sikeresen friss�tve.";

$messages["error_fetching_users"] = "Hiba a felhaszn�l�k lek�r�se sor�n.";

$messages["error_fetching_blogs"] = "Hiba a blogok lek�r�se sor�n.";

$messages["error_incorrect_template_id"] = "�rv�nytelen vagy nem l�tez� sablon azonos�t�.";

$messages["error_no_users_selected"] = "Nincsenek t�rl�sre megjel�lt felhaszn�l�k.";
$messages["error_could_not_find_user"] = "A(z) \"%s\" felhaszn�l� nem tal�lhat�.";
$messages["error_deleting_user"] = "Hiba a(z) \"%s\" felhaszn�l� t�rl�se sor�n";
$messages["user_deleted_ok"] = "\"%s\" sikeresen t�r�lve.";

$messages["error_must_give_blog_name"] = "�rv�nyes nevet kell adnod a blognak.";
$messages["error_adding_blog"] = "Hiba a blog r�gz�t�se sor�n.";
$messages["blog_added_ok"] = "A(z) \"%s\" nev� blog sikeresen l�trehozva.";

$messages["error_template_not_inside_folder"] = "A sablon filejainak egy mapp�ban kell lenni�k.";
$messages["error_missing_base_files"] = "N�h�ny alapvet� file hi�nyzik a szettb�l.";
$messages["error_unpacking"] = "Hiba a file kicsomagol�sa sor�n.";
$messages["error_forbidden_extensions"] = "A sablon bizonyos filejai tiltottak.";
$messages["error_creating_working_folder"] = "Hiba a sablon szett ellen�rz�se sor�n";
$messages["error_checking_template"] = "Hiba van a sablon szettel (code = %s)";
$messages["error_add_template_disabled"] = "Felhaszn�l�k nem r�gz�thetnek �j sablont.";
$messages["error_must_upload_file"] = "Meg kell adnod egy file-t.";
$messages["error_no_template_name"] = "Meg kell adnod a sablon nev�t.";
$messages["error_uploads_disabled"] = "A felt�lt�s szolg�ltat�s kikapcsolva ezen az oldalon.";
$messages["error_installing_template"] = "Hiba a sablon szett telep�t�se k�zben.";
$messages["template_installed_ok"] = "Az �j sablon szett sikeresen telep�tve, mint: \"%s\".";

$messages["error_adding_template_file"] = "Hiba a file sablon szetthez t�rt�n� hozz�ad�sa sor�n.";
$messages["error_file_forbidden"] = "Ezen t�pus� file-ok tiltottak ezen az oldalon.";
$messages["error_file_too_big"] = "A file t�l nagy. A maxim�lis m�ret \"%s\" byte.";
$messages["template_file_added_ok"] = "A file sikeresen hozz�adva a(z) \"%s\" sablonhoz.";

$messages["error_plugin_cannot_be_configured"] = "A plugin nem be�ll�that�.";

$messages["error_incorrect_username"] = "�rv�nytelen felhaszn�l�n�v";
$messages["error_username_already_exists"] = "M�r van regisztr�lt tag ilyen felhaszn�l�i n�vvel.";
$messages["error_adding_user"] = "Hiba az �j felhaszn�l� r�gz�t�se sor�n.";
$messages["user_added_ok"] = "�j felhaszn�l� - \"%s\" - sikeresen r�gz�tve.";

$messages["error_no_blogs_selected"] = "Legal�bb egy blogot meg kell jel�ln�d t�rlend�k�nt.";
$messages["error_blog_is_default_blog"] = "\"%s\" nem t�r�lhet�, mivel ez az alap�rtelmezett blog.";
$messages["blog_deleted_ok"] = "\"%s\" sikeresen t�r�lve.";
$messages["error_deleting_blog"] = "Hiba a t�rl�s sor�n: \"%s\".";

$messages["error_no_templates_selected"] = "Nincsenek t�rl�sre megjel�lt sablonok.";
$messages["error_removing_template"] = "Hiba a(z) \"%s\" sablon t�rl�se sor�n";
$messages["template_removed_ok"] = "A(z) \"%s\" sablon sikeresen t�r�lve.";

$messages["error_no_users_selected_to_remove_from_blog"] = "Nem lett felhaszn�l� kiv�lasztva.";
$messages["error_removing_user_from_blog"] = "Hiba a(z) \"%s\" felhaszn�l� t�rl�se sor�n.";
$messages["user_removed_from_blog_ok"] = "A(z) \"%s\" felhaszn�l� sikeresen t�r�lve.";

$messages["error_incorrect_locale_code"] = "�rv�nytelen nyelvi k�d";
$messages["error_invalid_locale_file"] = "A file nem t�nik �rv�nyes nyelvi file-nak";
$messages["error_adding_locale_file"] = "Hiba a nyelvi file r�gz�t�se sor�n. Bizonyosodj meg r�la, hogy a nyelvi file fel legyen t�ltve a m�velet megkezd�se el�tt �s megfelel� jogosults�gokkal rendelkezzen.";
$messages["locale_added_ok"] = "Az �j nyelv - \"%s\" - sikeresn hozz�adva.";
$messages["error_saving_locale"] = "Hiba a nyelvi file ment�se sor�n. Bizonyosodj meg r�la, hogy a nyelvi file-okat tartalmaz� mappa megfelel� jogosults�gokkal rendelkezik.";

$messages["error_no_locales_selected"] = "Nincsenek t�rl�sre megjel�lt nyelvi file-ok.";
$messages["error_deleting_only_locale"] = "Ez az egyetlen rendelkez�sre �ll� nyelvi file, enn�lfogva nem t�r�lhet�.";
$messages["locale_deleted_ok"] = "\"%s\" nyelvi file sikeresen t�r�lve.";
$messages["error_deleting_locale"] = "Hiba a(z) \"%s\" nyelvi file t�rl�se sor�n";
$messages["error_cant_delete_default_locale"] = "\"%s\" nem t�r�lhet�, mivel jelenleg ez az alap�rtelmezett nyevi file.";

$messages["plugin_config"] = "Plugin be�ll�t�sok";

$messages["use_read_more_feature"] = "Csak az �zenet els� r�sz�nek megjelen�t�se a f�oldalon? (Ha a 'Nem' -et v�lasztod, akkor az eg�sz �zenet megjelenik";

$messages["extended_text"] = "Kib�v�tett h�r. Tartalma a f�oldalon csak akkor jelenik meg, ha ezt k�l�n k�rj�k. ('Be�ll�t�sok' f�l)";

$messages["error_must_give_post_intro"] = "A bevezet� sz�veget mindenk�pp meg kell adnod.";
$messages["error_no_albums_defined"] = "Nincsenek albumok.";
$messages["error_fetching_album"] = "Hiba a k�rt album lek�r�se sor�n";
$messages["comment_marked_as_spam_ok"] = "Hozz�sz�l�s sikeresen megjel�lve mint spam.";
$messages["comment_marked_as_nonspam_ok"] = "Hozz�sz�l�s sikeresen megjel�lve mint nem spam.";
$messages["error_marking_comment_as_nonspam"] = "Hiba a hozz�sz�l�s nem spamk�nt t�rt�n� megjel�l�se sor�n.";
$messages["error_marking_comment_as_spam"] = "Hiba a hozz�sz�l�s spamk�nt t�rt�n� megjel�l�se sor�n.";
$messages["error_incorrect_comment_id"] = "�rv�nytelen hozz�sz�l�s azonos�t�.";
$messages["error_base_storage_folder_missing_or_unreadable"] = "A pLog nem tudta l�trehozni a tartalom t�rol�s�hoz sz�ks�ges mapp�kat. Ennek t�bb oka is lehet. P�ld�ul a PHP telep�t�s safe mode bekapcsol�sa mellett fut, vagy a felhaszn�l�idnak nincs megfelel� jogosults�guk. Megpr�b�lhatod saj�t magad l�trehozni a k�vetkez� mapp�kat
: <br/><br/>%s<br/><br/>Ha m�r l�teznek, akkor gy�z�dj meg r�la, hogy a webszerver rendelkezik olvas�si �s �r�si jogokkal.";


///// new help messages ////

//
// translators: this one has changed too since we now have two text boxes: one for the
// text that we'd like to appear in the main page and another one for the text that
// will only be shown in the 'post' page (that is, when the users clicks on the
// permalink, for example)
//
$messages["newPost"] = "<p>Use this page to add a new post to your journal. You should provide a topic or subject
for your post as well as some text for your post. Once you have finished, press the <b>'Add'</b> button and the post
will automatically be included in your page. Please note that you have to set the status of the post
to <b>'Published'</b> if you want it to appear in front page. Use the <b>'Draft'</b> status when you can't finish posting
now but you would like to save what you have typed so far for later revision.</p>
<p>The text typed in the first text box will always appear in the main page. You can use
the second text box if you want to have some text not to be included in the main page
but that should be shown once the users clicks on the permalink or on the
\"Read More...\" link. This link will be automatically added to the end of the text. This
field is not mandatory and its behaviour can be controlled in the \"Settings\" tab,
where you can force both text text boxes to be shown in the main page.</p>
<p>You can also classify the post under any of the categories you have previously created. Simply set
the <b>'Category'</b> field to the one you most like.</p>
<p>If you would like to receive an email notifying about a new post, please check the corresponding
checkbox.</p>
<p>Check the box where it says </b>'Find links in the post...'</b> if after adding the post, you
would like to send trackback pings to the hosts that support it. Your post will be scanned for
links and you will have the possibility to choose which ones to send trackback pings to.</p>";

$messages["updatePost"] = $messages["newPost"];

$messages["newBlogUser"] = "This option allows you to easily give editing permissions to other
users in this blog. To do so, you only have to know its username. If you already know it,
simply type it in the text field below and press the \"Add User\" button. If you wish, you can
also send an email to this user (as long as he or she used the right address when
registering) notifying him or her that he has now been granted permissions to add, edit
and delete posts in this blog.";

$messages["showBlogUsers"] = "This is a list of the users that have been given editing permissions
in this blog. You can see their profile if you wish or you can also revoke their permissions
by selectin them and then clicking on the \"Revoke Permissions\" button. Once you do that,
the selected users will no longer be able to publish anything in this blog.";

//
// note to translators:
//
// added some additional text here to inform about the new "configure" feature
//
$messages["pluginCenter"] = "<p>From here you can see which plugins have been installed. For every
plugin, you will see its identifier (the identifier you have to use when developing templates and
want to make use of the plugin features), the author of the plugin, and some descriptive text with
various information about the plugin, mainly how to use it.</p>
<p>Some plugins offer also their own configuration page from wich you can modify some
aspects of its behaviour. To access such page, please click on the \"configure\" link
next to every plugin.</p>";

$messages["configurePlugin"] = "This plugin provides some settings that can be configured
by the user.";

$messages["newBlogTemplate"] = "<p>It is possible to easily add new templates to the system. To do
so, there are two possibilities: the template can either be uploaded as a compressed file
(tar.gz, tar.bz2 and zip files are supported) to the server or it canbe manually
uploaded using any available method.</p>
<p>If the first method is chosen, the contents of the file must have all been packaged
under a folder which will be the name given to the template.</p>
<p>If the second method is chosen, simply upload the files to a folder under your blog-specific folder
and type in the name of the folder in the text box below.</p>
<p>Plugins added here will only be available to this specific below and will not be able to
be accessed by other blogs.</p>";

$messages["blogTemplates"] = "<p>This is a list with all the templates that have been added to
this blog. If you wish to remove any of them, please select them and click on the
\"Delete Selected\" button below the list. Once a template is deleted it cannot be
recovered, since it is removed from the disk.</p>";

$messages["adminSettings"] = "<p>These are some very basic statistics about the site.</p>";

$messages["createUser"] = "<p>We can easily register new users in the system by using this form.
We only need to provide with a valid username and a password, and optionally an email address.
Users registered here will not be attached to any blog unless we explicitly do so in the
\"User\" section or until we create a blog specially for this new user.</p>";

$messages["editUserProfile"] = "<p>From here we can edit the profile of any user in this blog. We can
also grant administrator privileges to the user (or revoke them). A list of the blogs to which
the user belogs is also displayed.</p>";

$messages["editSiteUsers"] = "<p>These are all the users that are registered in this site. You can see and edit
their profile by clicking on the username or you can delete any of them by clicking on the
checkbox of the user(s) and then click on the \"Delete Selected\" button. Once a user
has been deleted, it can <b>not</b> be recovered, so please be careful.</p>";

$messages["createBlog"] = "<p>Unlimited blogs can be added to a single installation of pLog. Users
can use the registration script provided in the main package but administrator can also
register new blogs by using this form. The only things needed to know are the name that will
 be given to the blog and the user who will be the owner, having the maximum privileges
 over that blog.</p>";

 $messages["editSiteBlogs"] = "<p>This is a list with all the blogs that have been registered
 so far in this site. Any blog can be deleted selecting it and clicking on the \"Delete
 Selected\" button. If we try to delete the blog that has been set as the default one
 (see the \"Global Settings\" tab in \"Site Admin\") we will get an error message.</p>
 <p>We can also edit the settings of any blog by clicking on it.</p>
 <p>Finally, we can edit the users that have permissions on a given blog by clicking
 on the \"Edit Users\" link</p>";

$messages["editBlog"] = "<p>The settings of the blog can be edited from here in the same way
a normal user can do. Everything is exactly the same except that administrator users can also
change who is the owner of the blog, anytime.</p>";

$messages["editBlogUsers"] = "<p>This feature allows to visually add and remove users from
any blog. On the left side we will see a list containing all the users that have not
been given editing privileges in this blog yet, while on the right side we will see a list of the
users that have already been given privileges. To a user (or more than one if necessary)
we only have to select them from the list of the left and click on the \"Add\" button. To do
the opposite process, we will have to select the users from the list of the right and
click on the \"Remove\" button.</p>
<p>It is also possible to change the user who is the owner of the blog by selecting
another from the drop-down list on top.</p>";

$messages["newLocale"] = "<p>Now locales can be easily added to the site using this feature. If
we have the possibility of uploading files, then we can use the first form, \"Upload Locale\"
simply pointing the browser to the locale file we'd like to upload. pLog will take care
of everything else, including copying the file to the folder with the other language files, but
please bear in mind that the folder must be writable by the user who is running the web server in
order for this feature to work properly. If the language file already exists, <b>it will
be overwritten and replaced by the new one</b>.</p>
<p>If files cannot be uploaded to the server, then the file will have to be
manually uploaded and placed in the same folder with the other language files. Once the file
has been placed there, we will have to type in the second form its code omitting the
\"locale_\".</p>
<p>Locale files must follow the naming convention of locale_ll_CC, where 'll' is the
2-digit ISO code for the language, while CC is the 2-digit ISO code for the country. If the file
does not conform to those rules, it will be rejected as a valid locale file.</p>";

$messages["siteLocales"] = "<p>This is a list with all the language files that have been
installed in this site. For each one of them, the encoding used by it and a brief
description can be seen. Also, language files can be removed from the system by selecting
them and clicking on the \"Delete Selected\" button.</p>";

$messages["newTemplate"] = "<p>It is possible to easily add new templates to the system. To do
so, there are two possibilities: the template can either be uploaded as a compressed file
(tar.gz, tar.bz2 and zip files are supported) to the server or it can be manually
uploaded using any available method.</p>
<p>If the first method is chosen, the contents of the file must have all been packaged
under a folder which will be the name given to the template.</p>
<p>If the second method is chosen, simply upload the files to a folder under your blog-specific folder
and type in the name of the folder in the text box below.</p>
<p>Plugins added here will be available to <b>all</b> the blogs in this site.</p>";

$messages["siteTemplates"] = "<p>This is a list with all the templates that are globally
available to all blogs. If you wish to remove any of them, please select them and click on the
\"Delete Selected\" button below the list. Once a template is deleted it cannot be
recovered, since it is removed from the disk.</p>";

$messages["editSiteSettings"] = "These are all the global settings that control many aspects of the
behaviour of pLog.";

$messages["newBlogTemplateFile"] = "Single files can be added to an already existing template
set without having to upload the whole set again. Simply find the file you would like to
upload in your disk and click on the \"Add File\" button.";

// text is the same, so we can save a few bytes
$messages["newTemplateFile"] = $messages["newBlogTemplateFile"];


////////////////////////////////////////////
///
///
/// NEW STRINGS ADDED IN 0.3!!
///
///
////////////////////////////////////////////
$messages["show_category_in_main_page"] = "Megjelen�t�s a f�oldalon";
$messages["welcome_resource_center"] = "Welcome to the resource center!";
$messages["resource_center"] = "Albumok";
$messages["resource_albums"] = "Albumok";
$messages["resources"] = "Tartalom";
$messages["add_resource"] = "�j tartalom";
$messages["add_album"] = "�j album";
$messages["album"] = "Album";
$messages["album_name"] = "Album neve";
$messages["parent_album"] = "Sz�l� album";
$messages["no_parent_album"] = "Nincs sz�l� album";
$messages["resource_info"] = "Tartalom inform�ci�";
$messages["size"] = "M�ret";
$messages["format"] = "Form�tum";
$messages["dimensions"] = "M�ret";
$messages["bits_per_sample"] = "Bit/pixel";
$messages["bytes"] = "byte";
$messages["pixels"] = "pixel";
$messages["time_offset"] = "Id�eltol�d�s - �r�ban - a tart�zkod�si helyed �s a szerver k�z�tt";
$messages["hours"] = "�ra";
$messages["album_added_ok"] = "Az �j album sikeresen l�trehova.";
$messages["name"] = "N�v";
$messages["children"] = "Gyermek";
$messages["see"] = "See";
$messages["view"] = "Megtekint�s";
$messages["resource_info"] = "Tartalom inform�ci�";
$messages["number_of_channels"] = "Csatorn�k sz�ma";
$messages["length"] = "Hossza";
$messages["number_of_files"] = "File-ok sz�ma";
$messages["compressed_size"] = "T�m�r�tett m�ret";
$messages["uncompressed_size"] = "T�m�r�tetlen m�ret";
$messages["resource_file"] = "Hozz�adand� file-ok:";
$messages["add_to_album"] = "File hozz�ad�sa a k�vetkez� albumhoz:";
$messages["edit_resource_album"] = "Album m�dos�t�sa";
$messages["error_loading_resource_album"] = "Hiba az album lek�r�se sor�n.";
$messages["error_album_id_parameter_missing"] = "�rv�nytelen album azonos�t�.";
$messages["error_album_parent_id_parameter_missing"] = "Sz�l� album azonos�t�ja nem tal�lhat�.";
$messages["error_updating_resource_album"] = "Hiba az album friss�t�se sor�n.";
$messages["resource_album_updated_ok"] = "A(z) \"%s\" album sikeresen friss�tve.";
$messages["error_must_give_album_name"] = "Meg kell adnod egy nevet.";
$messages["error_adding_album"] = "Hiba az album r�gz�t�se sor�n.";
$messages["album_added_ok"] = "A(z) \"%s\" album sikeresen r�gz�tve.";
$messages["resource_added_ok"] = "Tartalom hozz�ad�sa sikeres volt.";
$messages["error_resource_forbidden_extension"] = "A tartalom nem adhat� az albumhoz, mivel tiltott kiterjeszt�ssel rendelkezik.";
$messages["error_resource_too_big"] = "A tartalom t�l nagy.";
$messages["error_uploads_disabled"] = "A tartalom nem r�gz�thet�, mivel a felt�lt�s le van tiltva.";
$messages["error_adding_resource"] = "Hiba a tartalom hozz�sad�sa sor�n.";
$messages["error_loading_resource"] = "Hiba a tartalom lek�r�se sor�n";
$messages["error_updating_resource"] = "Hiba a tartalom friss�t�se sor�n.";
$messages["resource_updated_ok"] = "Tartalom - \"%s\" - sikeresen friss�tve.";
$messages["error_no_resources_selected"] = "Nincs t�rl�sre megjel�lt tartalom.";
$messages["resource_deleted_ok"] = "Tartalom - \"%s\" - sikeresen t�r�lve.";
$messages["error_deleting_resource"] = "Hiba a(z) \"%s\" t�rl�se sor�n.";
$messages["error_no_resource_uploaded"] = "Nincs felt�lt�tt tartalom.";
$messages["filtered_content"] = "Sz�rt tartalom";
$messages["global_filtered_content"] = "Glob�lisan sz�rt tartalom";
$messages["block_content"] = "Tartalom sz�r�se";
$messages["blocked_hosts"] = "Blokkolt c�mek";
$messages["global_blocked_hosts"] = "Glob�lisan blokkolt c�mek";
$messages["block_host"] = "C�m blokkol�sa";
$messages["security"] = "Biztons�g";
$messages["security_welcome"] = "�dv�zlet a Biztons�g r�szlegben!";
$messages["filtered_content_intro"] = "Az al�bbi tartalom �s regul�ris kifejez�sek ker�lnek sz�r�sre.";
$messages["global_filtered_content_intro"] = "Az al�bbi tartalmak �s regul�ris kifejez�sek ker�lnek sz�r�sre glob�lis szinten";
$messages["content"] = "Tartalom";
$messages["reason"] = "Ok";
$messages["add_filtered_content"] = "Sz�rend� tartalom be�ll�t�sa";
$messages["add_filtered_content_intro"] = "Az itt felsorolt tartalmak nem ker�lnek megjelen�t�sre a hozz�sz�l�sokban. Ha egy sima felhaszn�l� blokkolt tartalmat is tartalmaz� hozz�sz�l�st �r, akkor az �zenet nem jelenik meg. Regul�ris kifejez�sek �pp�gy haszn�lhat�k, mint egyszer� szavak. A regul�ris kifejez�sek sokkal hat�konyabbak, ugyanakkor sokkal �sszetettebbek is, �ppen ez�rt haszn�latuk sor�n megfelel� k�r�ltekint�ssel j�rj el, nehogy v�letlen�l olyan kifejez�st szerkessz�l, amivel minden hozz�sz�l�st blokkolsz.";
$messages["global_add_filtered_content_intro"] = "Az itt felsorolt tartalmak nem ker�lnek megjelen�t�sre a hozz�sz�l�sokban. Ha egy sima felhaszn�l� blokkolt tartalmat is tartalmaz� hozz�sz�l�st �r, akkor az �zenet nem jelenik meg. Regul�ris kifejez�sek �pp�gy haszn�lhat�k, mint egyszer� szavak. A regul�ris kifejez�sek sokkal hat�konyabbak, ugyanakkor sokkal �sszetettebbek is, �ppen ez�rt haszn�latuk sor�n megfelel� k�r�ltekint�ssel j�rj el, nehogy v�letlen�l olyan kifejez�st szerkessz�l, amivel minden hozz�sz�l�st blokkolsz.";
$messages["content_to_block"] = "Blokkoland� tartalom:";
$messages["block_this"] = "Hozz�ad�s";
$messages["mask"] = "Mask";
$messages["access_blocked"] = "Hozz�f�r�s tilt�sa";
$messages["posting_blocked"] = "Hozz�sz�l�s tilt�sa";
$messages["block_host_intro"] = "Az itt megadott c�mek csak ezen blogot nem �rik el. B�vebb inform�ci�k�rt n�zd �t a <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">S�g�t</a>.";
$messages["global_block_host_intro"] = "Az itt megadott c�mekr�l �rkez�k az oldal egyetlen blogj�hoz sem f�rnek hozz�s. B�vebb le�r�s�rt n�zd at a szolg�ltat�s <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">s�g�j�t</a>.";
$messages["block_type"] = "Blokkol�s t�pusa";
$messages["error_invalid_ip_address"] = "�rv�nytelen IP c�m.";
$messages["error_provide_content_to_block"] = "Meg kell adnod a sz�rend� tartalmat.";
$messages["error_must_create_album_first"] = "Tartalom hozz�ad�sa el�tt l�tre kell hoznod egy albumot.";
$messages["error_resource_is_not_an_image"] = "A kijel�lt tartalom nem k�p.";
$messages["error_generating_resource_preview"] = "Hiba az el�n�zet �jragener�l�sa sor�n.";
$messages["resource_preview_generated_ok"] = "El�n�zet sikeresen l�trehozva.";
$messages["regenerate_preview"] = "El�n�zet �jragener�l�sa";
$messages["show_album"] = "Album megjelen�t�se";
$messages["show_album_when_browsing"] = "Album megjelen�t�se a felhaszn�l�knak";
$messages["assigned_to_blog"] = "Beoszt�s a kijel�lt bloghoz";
$messages["clean_up"] = "Karbantart�s";
$messages["purge_info"] = "A t�rl�s funkci� v�glegesen kit�rli a \"T�r�lt\" k�nt megjel�lt �zeneteket az adatb�zisb�l. En�lk�l ezen �zenetek az adatb�zisban maradnak - h�tha a felhaszn�l� vissza akarja �ll�tani �ket - enn�lfogva adott esetben jelent�sen - �s nagy val�sz�n�s�ggel feleslegesen - megn�velik az adatb�zis m�ret�t. Ha t�r�lni akarod ezen hozz�sz�l�sokat, kattints az al�bbi gombra..";
$messages["spam_info"] = "A spamk�nt megjel�lt hozz�sz�l�sok az adatb�zisban tarthat�ak, a spam filter b�v�t�se �rdek�ben. Amint ez megt�rt�nt, m�r haszontalanok, s enn�lfogva c�lszer� a t�rl�s�k. Ha t�r�lni akarod �ket kattints az al�bbi gombra.";
$messages["no_spam"] = "Nem Spam";
$messages["spam"] = "Spam";
$messages["mark_as_spam"] = "Megjel�l�s mint spam";
$messages["mark_as_no_spam"] = "Megjel�l�s, mint nem spam";
$messages["enable_comments_for_post"] = "Hozz�sz�l�s enged�lyez�se";
$messages["close_window"] = "Abalak bez�r�sa";
$messages["add_resource"] = "Tartalom hozz�ad�sa";
$messages["add_resource_preview"] = "El�n�zet hozz�ad�sa";
$messages["add_album"] = "Album hozz�ad�sa";
$messages["show_main_page"] = "Megjelen�t�s a f�oldalon";
$messages["purge_spam_comments"] = "Spam hozz�sz�l�sok t�rl�se";
$messages["purge_posts"] = "Hozz�sz�l�sok t�rl�se";
$messages["keep_spam_comments"] = "Spam hozz�sz�l�sok megtart�sa";
$messages["throw_away_spam_comments"] = "Spam hozz�sz�l�sok eldob�sa";
$messages["error_adding_blocked_host"] = "Hiba a megadott hoszt blokkol�sa sor�n.";
$messages["blocked_host_added_ok"] = "A(z) %s hoszt sikeresen hozz�adva a blokkoland� c�mek list�j�hoz.";
$messages["error_no_blocked_hosts_selected"] = "Nincsen t�rl�sre megjel�lt hoszt.";
$messages["blocked_host_deleted_ok"] = "A(z) \"%s\" hoszt sikeresen t�r�lve.";
$messages["error_deleting_blocked_host"] = "Hiba a(z) \"%s\" blokkolt hoszt t�rl�se sor�n.";
$messages["edit_blocked_host"] = "Blokkolt hosztok m�dos�t�sa";
$messages["error_fetching_blocked_host"] = "Hiba a blokkolt hosztok lek�r�se sor�n.";
$messages["error_updating_blocked_host"] = "Hiba a blokkolt hosztok friss�t�se sor�n.";
$messages["thumbnail_format"] = "Indexk�p form�tum";
$messages["same_as_image"] = "Ugyanaz, mint az eredeti";
$messages["same"] = $messages["same_as_image"];



$messages["help_locale_folder"] = "A nyelvi file-ok mapp�ja.";
$messages["help_default_locale"] = "Alap�rtelmezett nyelvi be�ll�t�sok �j blog regisztr�l�sakor.";
$messages["help_xmlrpc_api_enabled"] = "Enables or disables the XMLRPC interface, for posting from your desktop.";
$messages["default_rss_profile"] = "RSS/RDF profile that will be used by default to generate feeds, if no special profile is specified";
$messages["help_security_pipeline_enabled"] = "A biztons�gi szolg�ltat�sok bekapcsol�sa. A kikapcsol�sa az �sszes biztons�gi szolg�ltat�s kikapcsols�t jelenti. �ppen ez�rt azt javasoljuk, hogy legyen bekapcsolva, s csak azon szolg�ltat�sokat kapcsold ki, melyekre nincs sz�ks�ged.";
$messages["help_ip_address_filter_enabled"] = "Az IP sz�r�s bekapcsol�s�val megakad�lyozhatsz bizonyos c�meeket az oldal el�r�s�ben.";
$messages["help_content_filter_enabled"] = "Bekapcsol egy nagyon egyszer� regul�ris kifejez�s alap� tartalom sz�r�t. A Bayesian sz�r� jobb v�laszt�s lehet.";
$messages["help_maximum_comment_size"] = "A hozz�sz�l�sok maxim�lis m�rete byte-ban megadva.";
$messages["help_bayesian_filter_enabled"] = "Bayesian sz�r� be/kikapcsol�sa.";
$messages["help_bayesian_filter_spam_probability_treshold"] = "Hozz�sz�l�s spamm� ny�lv�n�t�s�nak muinim�lis �rt�ke. C�lszer� 0.01 �s 0.99 k�z� be�ll�tani.";
$messages["help_bayesian_filter_nonspam_probability_treshold"] = "Maxim�lis �rt�k, melyn�l a hozz�sz�l�s biztosan nem spam. Ezen k�t hat�r�rt�k k�zti hozz�sz�l�sok sem bizonyulnak spamnek, de elk�pzelhet�, hogy tov�bbi be�ll�t�sok sz�ks�gesek.";
$messages["help_bayesian_filter_min_length_token"] = "A sz�veg�rtelmez� �ltal �rv�nyesnek tekintett egys�g minim�lis hossza.";
$messages["help_bayesian_filter_max_length_token"] = "Illetve maxim�lis hossza.";
$messages["help_bayesian_filter_number_significant_tokens"] = "A sz�ks�ges, jelent�s egys�gek sz�ma a hozz�sz�l�sban";
$messages["help_bayesian_filter_spam_comments_action"] = "Mi t�rt�njen a spam -el? Azonnali eldob�sra is ker�lhetnek - ilyenkor be se ker�l az adatb�zsiba - de puszt�n megjel�lhet�ek spamk�nt is. Ut�bbi lehet�s�g akkor aj�nlott, ha a spam sz�r� m�g t�k�letes�t�s alatt �ll, s alakalomadt�n m�g hib�zik.";
$messages["help_path_to_convert"] = "A 'convert' program sz�ks�ges, ha az ImageMagick vsomagot haszn�ljuk az indexk�pek el��ll�t�s�ra.";
$messages["help_thumbnail_height"] = "Indexk�pek maxim�lis magass�ga.";
$messages["help_resources_folder"] = "A k�l�nf�le file-ok t�rol�s�ra szolg�l� mappaFolder where the resources will be stored. Does not have to be in the web server tree, if you don't feel like letting people browse your resources folder. The resource server will take care of serving
the files wherever they are.";

$messages["help_thumbnails_keep_aspect_ratio"] = "K�p oldalar�ny�nak megtart�sa.";
$messages["help_resources_enabled"] = "'Tartalom albumok' be/kikapcsol�sa.";
$messages["help_thumbnail_method"] = "Az indexk�pek gener�l�s�hoz haszn�lt rendszer. Az ImageMagick eset�n p�r k�ls� eszk�z is sz�ks�ges. L�sd lentebb.";
$messages["help_thumbnail_width"] = "Indexk�pek maxim�lis sz�less�ge.";
$messages["external_interfaces"] = "K�ls� interf�szek";
$messages["security_settings"] = "Biztons�gi be�ll�t�sok";
$messages["bayesian_filter_settings"] = "Bayesian sz�r� be�ll�t�sai";
$messages["resources_settings"] = "Tartalom be�ll�t�sok";
$messages["help_thumbnail_format"] = "Az indexk�pek alap�rtelmezett fileform�tuma. 'Ugyanaz, mint az eredeti' eset�n az indexk�p form�tuma az eredeti k�p�vel egyezik meg.";
$messages["edit"] = "M�dos�t�s";
$messages["blocked_content_added_ok"] = "Blokkoland� tartalom sikeresen r�gz�tve.";
$messages["blocked_content_updated_ok"] = "Blokkoland� tartalom sikeresen friss�tve.";
$messages["help_disable_javascript_calendar"] ="A javascript �s DHTML-alap� napt�r kikapcsol�sa. Alap�rtelmez�s szerint ez haszn�lhat� a d�tum kiv�laszt�s�hoz az �zenetek �r�sakor/m�dos�t�sakor, de esetleges kompatibilit�si gondokat okozhat bizonyos b�ng�sz�k eset�n.";
$messages["edit_filtered_content"] = "Sz�rt tartalom m�dos�t�sa";
$messages["error_updating_blocked_content"] = "Hiba a sz�rt tartalom m�dos�t�sa sor�n.";
$messages["audio_codec"] = "Audio Codec";
$messages["video_codec"] = "Video Codec";
$messages["sample_rate"] = "Mintav�tel";
$messages["files"] = "File-ok";
$messages["created"] = "L�trehozva:";
$messages["generated"] = "L�trehozva:";
$messages["about"] = "About";
$messages["menu"] = "Men�";
$messages["albums"] = "Albumok";
$messages["template_file"] = "File";
$messages["download"] = "Let�lt�s";
$messages["error_you_have_been_blocked"] = "Nincs jogosults�god ezen k�relemre.";

//
// help messages //
//

//
// translators: the following help messages have changed a little since last version, due to a few
// new features built on top of previous features
//
$messages["editArticleCategories"] = "<p>This is a listing with all the post categories that
have been created so far. There must be at least one category before you can add an article, since
every article has to be categorized under a category. The <b>'Articles'</b> column shows how many
articles have been categorized under the given category. In the same way, a category can't be deleted
if it has an article assigned it; you must first remove all the articles and then you will be allowed
to remove the category.</p>
<p>You can delete more than one category at the same time by cheching their <b>'Delete'</b> column
and then clickin on the <b>'Delete Selected'</b> button.</p>
<p>The <b>'Show In Main Page'</b> column shows whether this category is included in the main page or if alternatively,
it can also be seen when clicking its link. Edit the category itself to enable/disable this feature.</p>";

$messages["newArticleCategory"] = "<p>From here you can add a new post category to the blog. All
what you need to provide is a name for the new category. Once it has been created, it will be available
for posts to be categorized under.</p>
<p>You can disable the 'Show cateory in main page' checkbox if you don't want this category to be shown in the
main page of the site. If disabled, posts included in this category will only be shown when browsing this
specific category, by clicking its link.</p>";

$messages["editArticleCategory"] = "<p>Please provide a new name for the category you are updating. Also, 
define whether you would like to show posts belonging to this cateogry in the main page or not.</p>";

$messages["editPost"] = "<p>Use this page to edit a post from your journal. The information from the
post has already been provided and now you can make your changes. Once you have finished, press the <b>'Update'</b> button and the post
will updated. Please note that you have to set the status of the post
to <b>'Published'</b> if you want it to appear in front page. Use the <b>'Draft'</b> status when you can't finish posting
now but you would like to save what you have typed so far for later revision.</p>
<p>If you would like to receive an email notifying about a new post, please check the corresponding
checkbox.</p>
<p>More information about the different options <a href=\"admin.php?op=Help&amp;helpId=newPost\">here</a>.</p>";

$messages["blogSettings"] = "<p>From this page you can change some of the settings that control the
behaviour or appearance of this journal. These are the settings: <ul>
<li><b>Permanent URL</b>: This is the URL where this blog is running and that can be used to
link to it. It can't be changed.</li>
<li><b>Name of the blog</b>: This is a text string with a descriptive name of the blog. If using the
default templates, it is the text displayed on top of every page.</li>
<li><b>Long descriptive text about this blog</b>: This is a longer text that can optionally be
displayed in some kind of page giving more detailed information about the page. It can be left
blank if not needed.</li>
<li><b>Language used to display the texts</b>: You can select one of the available languages. This
language will be used to display the texts (not your own articles!) and format things like dates
and numbers using the correct settings. More languages can be installed at any time.</li>
<li><b>Items in the main page</b>: Set this to the number of posts you would like to have
in the main page. The more posts, the longer it will take for users to download your page. Minimum
number of posts it one.</li>
<li><b>Items shown as recent</b>: Set this to the number of posts you would like to be shown as
<b>'Recent'</b>, that is, the posts that have been posted earlier. Minimun amount is one.</li>
<li><b>Template used to render the contents</b>: pLog allows to have more than one template
to show the same content. You can choose here the most appropiate one for you journal, from the ones
that have been installed by the administrator.</li>
<li><b>Show the whole post int he main or only the part that was typed in the 'Text' box?</b>: Set this to <b>'Yes'</b> if you would like pLog
to automatically add a 'More...' link to your posts on the main page just after the text you typed
in the text box labeled 'Text'. The text typed in the second text box will only be shown to the user
when clicking on the
setting below) This feature is useful since it makes your frontpage less cluttered and also
smaller. However, it has some problems if there is a lot of HTML code in the page.</li>
<li><b>Enable WYSIWYG edition of texts</b>: Set this to yes if you would like to have the possibility
to see how your posts look in real time. This feature is only available for users using either
Internet Explorer 5.5 or higer and Mozilla 1.3b or higher.</li>
<li><b>Enable comments</b>: Set this to yes if you would like to allow your users to make comments to your
posts. This will globally affect all your posts and all your users.</li>
<li><b>Order in which comments appear</b>: Set it to \"Oldest first\" if you would like to see
the older comments first in the list, or set it to \"Newest first\" to see them in
reverse chronological order.</li>
<li><b>Time difference in hours between the server and you</b>: You can use this setting to make pLog automatically
add or substract an amount of hours to each date in the blog. It is useful for example when the server where the blog
is hosted and the person who is using it are in different time zones. Telling pLog that there is a difference of
+3 hours, will make that all dates appear with such time difference applied.</li>
</ul></p>";

//
// translators: the ones below are already new
//
$messages["resourceCenter"] = "From the resource center, you will be able to manage your files, group them in albums,
manage those albums and edit any of them.";

$messages["newResourceAlbum"] = "<p>You need at least one album to group your resources. From here you will be allowed
to add a new album, simply providing a name and a description for it. Only the name field is mandatory, being
the description field optional.</p>
<p>Use the <b>'Parent album'</b> field to set whether this is a top-level album or if it is a sub-album and has
another album as a parent.</p>";

$messages["resourceAlbums"] = "<p>This is a list including all the resource albums that have been created so far
in this site. For each album, several of its properties can be seen at a glance: its name, a link to its child 
albums (if any) and its amount, a link to its resources and its amount, whether the album is public or
private and a checkbox to delete as many of them as needed.</p>
<p>You can read more on the <b>'Show Album'</b> feature here <a href=\"admin.php?op=Help&amp;helpId=editResourceAlbum\">here</a></p>";

$messages["editResourceAlbum"] = "<p>From here you can edit the properties of a resource album. Almost all the fields
are the same as <a href=\"admin.php?op=Help&amp;helpId=newResourceAlbum\">here</a> except the 
<b>'Show album to users'</b> checkbox. If enabled, this album will be visible to users who browse our 
collection of albums and resources. If not, it will not be shown in the public side. This is useful in cases when
we want to keep some of the albums secret and don't want users peeking at them.</p>";

$messages["newResource"] = "<p>You will be able to upload new resources to your blog from this section. Any kind of file
can be uploaded to the site but pLog is capable of handling and extracting some useful information from some
of them, such as images, videos, zip files and music files.</p>
<p>First of all, find the file you would like to upload. Then, provide a description for it (mandatory field)
and finally select to which album would you like this resource to belong to. It is not possible to have a resource
file that does not belong to any album. Once you are ready, click the <b>'Add Resource'</b> button and the file
will be added to the blog.</p>
<p>Please keep in mind that uploads need to be enabled for this to work, and if the blog administrator has
set a list of forbidden file types that cannot be uploaded, the file will not be allowed in the site. The resource
framework also needs to be enabled. All these settings can be modified by a user with administrator privileges
from the <b>'Global Settings'</b> section.</p>
<p>This feature requires a folder with write permission in the web server.</p>";

$messages["Resources"] = "<p>From here you will have access to all the resource files that have been uplaoded
in the blog. Files will be shown under the album to which they belong. For every resource file, it will be
possible to edit its properties, view it as any normal user will see it and mark it for deletion. Pressing the 
<b>'Delete Selected'</b> button from the bottom of the screen will delete those resources that have been
marked.</p>
<p>Click the folder icon to navigate to the contents of an albu, or the <b>'Edit'</b> to go to the album
properties page. Use the <b>'..'</b> link to go up one level. Clicking a resource name or preview (if available)
will take you to the resource properties page where you will be able to change some of the settings of the 
selected resource.";

$messages["blogSecurity"] = "From this section you will be able to edit set up some basic security mechanisms that
are provided by pLog. The changes you make here will only affect your blog and not everybody else's.";

$messages["blogFilteredContent"] = "<p>This is a list of all the rules for content filtering that have been added 
to this particular blog. Clicking any of them will take you to a page where you will be able to edit any of them.
Use the <b>'Delete'</b> checkbox to mark any of them for deletion, and press the <b>'Delete Selected'</b> button
once you are sure you want to delete those.</p>";

$messages["newBlogFilteredContent"] = "<p>You can add here a new rule for blocking undesired content from being
included in comments. You can use here single words or sentence or if you wish, you can use the power
of regular expressions if you know how to use them. You can also add a description to the rule so that you remember
in the future what it is about, but it is not a mandatory field.</p>";

$messages["blogBlockedHosts"] = "This is a list with all the hosts that have been blocked so far in this blog. At
a glance, it is possible to see for each host the reason why it was blocked, the date when it was blocked and
the type of the block applied. Lastly, you can also select any of the host blocking rules and press the
<b>'Delete Selected'</b> button when you are sure that you want to remove those rules.";

$messages["newBlogBlockedHost"] = "<p>This section will allow you to block a specific address or entire subnet from your Blog. You can select if you want them to be able to see it, but unable to post or simply unable to access it at all. Copy the offending address into the spaces provided and choose the proper subnet address space if necessary. Example: To block just the address of 192.168.1.123 you would choose the '32 bit' option to match the entire address. This blocks just this one address and works well for banning someone with a Static IP address. If you're seeing multiple IP Addresses for a particular individual (say 192.168.1.123, 192.168.1.225, 192.168.1.21 and 192.168.1.67) then you will want to ban a particular subnet range. Enter one of the IP Addresses that you see and choose '24 bit', '16 bit' or '8 bit'  to match the first 3 sections, first 2 sections or the first section respectively.<br/>
<br/>
<b>EXAMPLES</b>:<br/>
<br/>
192.168.1.123 - 32 bit: Matches only the 192.168.1.123 address<br/>
192.168.1.123 - 24 bit: Matches any address that starts with 192.168.1<br/>
192.168.1.123 - 16 bit: Matches any address that starts with 192.168<br/>
192.168.1.123 - 8 bit: Matches any address that starts with 192<br/>
</p>
<p>The <b>'Block type'</b> drop-down list will allow you to choose whether to block this host from 
completely accessign the site (an error page will be sent to the client's browser whenever trying to access) or
simply block it from posting new comments. If the latter is chosen, the host will still be allowed to read
articles and other people's comments.</p>
<p>You can also attach a reason/description to this host blocking rule, so that you can remember in the future why
it was set up.</p>";

$messages["editBlogBlockedHost"] = "You will be able to edit a host blocking rule from this section. The options
available are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">here</a>.";

$messages["editBlogFilteredContent"] = "This page will allow you to edit a content filtering rule. The options
are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">here</a>.";

$messages["filteredContent"] = "<p>This is a list of all the rules for content filtering that have been added 
to this site. These rules are site-wide and take precedence before any blog-specific rule that may have been
set by blog owners. The options and its meaning is the same as 
<a href=\"admin.php?op=Help&amp;helpId=blogFilteredContent\">here</a>.";

$messages["newFilteredContent"] = "<p>You can add here a new rule for blocking undesired content from being
included in comments. This rule will be used system-wide and will take preference before blog-specific
rules. See <a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">this</a> for more information
on the options.";

$messages["blockedHosts"] = "This is a list with all the hosts that have been blocked so far system-wide. 
Clicking a rule IP address will allow us to edit the settings of that rule. These rules always take
precedence over blog-speficic rules, so that if one these global rules matches a host, all the other after
it will be ignored.";

$messages["newBlockedHost"] = "From here it is possible to add a new <b>global</b> host-blocking rule. See
<a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">here</a> for more information about the options
available.";

$messages["editBlockedHost"] = "You will be able to edit a host blocking rule from this section. The options
available are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">here</a>.";

$messages["editFilteredContent"] = "This page will allow you to edit a content filtering rule. The options
are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">here</a>.";

//
// text of the post that will be added to each blog when they sign-up via the register.php script
//
$messages["register_default_category"] = "H�rek";
$messages["register_default_article_text"] = "Ha ezt olvasod, az azt jelenti, hogy a blog regisztr�ci� sikeres volt. Kellemes bloggol�st!";
$messages["register_default_article_topic"] = "Gratul�lok, m�k�dik!";
?>
