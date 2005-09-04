<?php
// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "iso-8859-2";
$messages["locale_description"] = "pLog magyar nyelvi file";
// days of the week
$messages["days"] = Array( "Vasárnap", "Hétfõ", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat" );
// -- compatibility, do not touch -- //
$messages["Monday"] = $messages["days"][1];
$messages["Tuesday"] = $messages["days"][2];
$messages["Wednesday"] = $messages["days"][3];
$messages["Thursday"] = $messages["days"][4];
$messages["Friday"] = $messages["days"][5];
$messages["Saturday"] = $messages["days"][6];
$messages["Sunday"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "Vas", "Hét", "Ked", "Sze", "Csü", "Pén", "Szo" );
// -- compatibility, do not touch -- //
$messages["Mo"] = $messages["daysshort"][1];
$messages["Tu"] = $messages["daysshort"][2];
$messages["We"] = $messages["daysshort"][3];
$messages["Th"] = $messages["daysshort"][4];
$messages["Fr"] = $messages["daysshort"][5];
$messages["Sa"] = $messages["daysshort"][6];
$messages["Su"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "Január", "Február", "Március", "Április", "Május", "Június", "Július", "Augusztus", "Szeptember", "Október", "November", "December" );
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

$messages["message"] = "Üzenet";
$messages["error"] = "Hiba";

$messages["date"] = "Dátum";

// miscellaneous texts
$messages["of"] = "of";
$messages["recently"] = "Mostanában...";
$messages["comments"] = "Hozzászólások";
$messages["comment on this"] = "Hozzászólás";
$messages["my_links"] = "Saját linkek";
$messages["archives"] = "Archívum";
$messages["search"] = "Keresés";
$messages["calendar"] = "Naptár";
$messages["categories"] = "Kategóriák";
$messages["search_s"] = "Keresés";
$messages["link_tracker"] = "Link Tracker";
$messages["search_this_blog"] = "Keresés ezen a blogon:";
$messages["about_myself"] = "Ki vagyok?";
$messages["permalink_title"] = "Állandó link az archívumra";
$messages["permalink"] = "Permalink";
$messages["posted_by"] = "Beküldte:";
$messages["on_the"] = "on the";
$messages["page"] = "oldal";
$messages["posted"] = "beküldve";

$messages["reply"] = "Válasz";


// add comment form
$messages["add_comment"] = "Hozzászólás írása";
$messages["comment_topic"] = "Téma";
$messages["comment_text"] = "Szöveg";
$messages["comment_username"] = "Neved";
$messages["comment_email"] = "Email címed (ha van)";
$messages["comment_url"] = "Weboldalad (ha van)";
$messages["comment_send"] = "Mehet";
$messages["comment_added"] = "Hozzászólás rögzítve!";
$messages["comment_add_error"] = "Hiba a hozzászólás rögzítése során";


$messages["article_does_not_exist"] = "A cikk nem létezik";
$messages["no_posts_found"] = "Nem található üzenet";
$messages["user_has_no_posts_yet"] = "A felhasználó még nem küldött üzeneteket";

$messages["info_about_myself"] = "Némi információ magamról...";
$messages["back"] = "Vissza";

$messages["back_top"] = "Ugrás a tetejére";

$messages["post"] = "post";

$messages["trackbacks_for_article"] = "Trackback-ek a következõ üzenetben:";
$messages["trackback_excerpt"] = "Excerpt";
$messages["trackback_weblog"] = "Weblog";

$messages["search_results"] = "A keresés eredménye";
$messages["search_matching_results"] = "Az alábbi üzenetek felelnek meg a keresési feltételeknek: ";
$messages["search_no_matching_posts"] = "Nincs találat";

$messages["see_all_link"] = "Kattints ide az összes eddigi üzenet megtekintéséhez";

$messages["read_more"] = "(Bõvebben)";

$messages["anonymous_poster"] = "Anonymous Poster";

$messages["syndicate"] = "SYNDICATE";

$messages["main"] = "Kezdõ";

////// error messages /////
$messages["error_fetching_article"] = "A megadott cikk nem található.";
$messages["error_fetching_articles"] = "Az üzenetek nem kérhetõek le.";
$messages["error_trackback_no_trackback"] = "Nem található trackback ezen üzenetben.";
$messages["error_incorrect_article_id"] = "Érvénytelen üzenet azonosító.";
$messages["error_incorrect_blog_id"] = "Érvénytelen újság azonosító.";
$messages["error_comment_without_text"] = "Némi szöveget mindenképpen meg kell adnod.";
$messages["error_comment_without_name"] = "A neved/beceneved mindenképp meg kell adnod.";
$messages["error_adding_comment"] = "Hiba a hozzászólás rögzítése során.";
$messages["error_incorrect_parameter"] = "Érvénytelen paraméter.";
$messages["error_parameter_missing"] = "Hiányzik egy paraméter a kérelemböl.";
$messages["error_blog_has_no_links"] = "Még nincsenek linkek.";
$messages["error_comments_not_enabled"] = "A hozzászólás lehetõsége kikapcsolva.";

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

$messages["editLinks"] = "<p>Itt találhatod a rögzített linkek listáját. Az üzenetekhez hasonlóan minden
link kategóriákba sorolható, a fõoldalon történõ megjelenítés érdekében..</p>
<p>Minden linknél látható a neve az URL ahova mutat, a ketagória. Végül pedig lehetõséged van bármelyik link törlésre is.</p>";

$messages["newLink"] = "<p>Itt rögzíthetsz új linkeket. Az URL címet és a nevet mindenképp meg kell adnod. 
A leírás megadása opcionális. Továbbá legalább egy link kategóriával is rendelkezned kell link rögzítése elött.</p>";

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



$messages["admin_interface_title"] = "pLog Adminisztrációs felület";
$messages["administration"] = "Adminisztráció";
$messages["help"] = "Súgó";
$messages["plog_help"] = "pLog Súgó";
$messages["new_post"] = "Új üzenet";
$messages["posts"] = "Üzenetek";
$messages["admin_categories"] = "Kategóriák";
$messages["admin_links"] = "Linkek";
$messages["link_categories"] = "Link kategóriák";
$messages["settings"] = "Beállítások";
$messages["logout"] = "Kijelentkezés";

// new post page
$messages["topic"] = "Téma";
$messages["text"] = "Szöveg";
$messages["category"]  = "Kategória";
$messages["status"] = "Állapot";
$messages["status_draft"] = "Piszkozat";
$messages["status_published"] = "Publikálva";
$messages["status_deleted"] = "Törölve";
$messages["status_all"] = "Összes";
$messages["send_notification"] = "Értesítés minden egyes hozzászólás érkezésekor.";
$messages["send_trackback_pings"] = "Megkeresi a linkeket az üzenetben és trackback pinget küld azok felé, melyek támogatják ezt a lehetõséget.";
$messages["add_post"] = "Mehet!";

$messages["xmlrpc_ping_ok"] = "XML-RPC Ping sikeresen elküdve: ";
$messages["error_sending_xmlrpc_ping"] = "Hiba az XML-RPC Ping küldése közben: ";
$messages["error_sending_xmlrpc_ping_message"] = "A hibaüzenet: ";

$messages["preview"] = "Elõnézet";
$messages["post_added"] = "Üzenet rögzítve";
$messages["you_will_be_notified"] = "Továbbá értesítést kapsz minden egyes, ezen üzenethez érkezõ hozzászólásról is.";
$messages["post_added_not_published"] = "Üzenet rögzítve, de nincs publikálva.";
$messages["error_adding_post"] = "Hiba az üzenet rögzítése során!";
$messages["error_must_fill_all_fields"] = "Ki kell töltened az összes mezõt!";
$messages["error_must_have_one_category"] = "Legalább egy kategóriával rendelkezned kell az üzenet beküldése elött";

// send trackbacks page
$messages["send_trackback_pings"] = "Trackback Ping küldése";
$messages["links_found"] = "Az alábbi linkek találhatóak az üzenetben. Válaszd ki, melyek felé szeretnél trackback pinget küldeni (ez eltarthat egy ideig)";
$messages["trackbacks_no_urls_selected"] = "Nem lett url kiválasztva, ennélfogva trackback ping se lett küldve.";
$messages["trackbacks_received_ok"] = "Az alábbi címek fogadták sikeresen a trackback pinget:";
$messages["trackbacks_no_trackback"] = "Az alábbi címeknek nincs érvényes trackback url címük: ";
$messages["trackbacks_problems_sending"] = "Problémák voltak a trackback ping küldésével az alábbi címekre.
Megpróbálhatod késöbb elérni õket.";
$messages["trackbacks_received_all_hosts"] = "Az összes címre sikeres volt a trackback ping küldése.";
$messages["ping_selected"] = "A kiválasztott oldalak pingelése";

// edit posts
$messages["author"] = "Szerzõ";
$messages["category_all"] = "Összes";
$messages["author_all"] = "Összes";
$messages["update"] = "Frissítés";
$messages["date"] = "Dátum";
$messages["stats"] = "Statisztika";
$messages["delete"] = "Törlés";

$messages["delete_selected"] = "Kiválasztott törlése";

// edit post
$messages["edit_post"] = "Üzenet módosítása";
$messages["error_getting_post_to_update"] = "Hiba a frissítendõ üzenet lekérése során.";
$messages["error_updating_post_in_database"] = "Hiba az üzenet frissítése során.";
$messages["post_successfully_updated"] = "Üzenet sikeresen frissítve.";
$messages["notification_removed"] = "Ezen üzenetre az értesítés küldés kikapcsolva.";

// post statistics
$messages["statistics_for_post"] = "Statisztika: ";
$messages["error_fetching_post"] = "Hiba az üzenet lekérése közben.";
$messages["times_post_has_been_read"] = "Olvasások száma: ";
$messages["referers"] = "Ajánlók";
$messages["id"] = "Id";
$messages["url"] = "Url";
$messages["hits"] = "Találatok";
$messages["trackbacks"] = "Trackbacks";

// post comments
$messages["error_fetching_comments"] = "Hiba a hozzászólások lekérése során";
$messages["comments_for_post"] = "Hozzászólások: ";
$messages["email"] = "E-Mail";
$messages["ip_address"] = "IP cím";

// delete comments
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_no_comments_selected"] = "Nem lett hozzászólás kijelölve.";
$messages["error_deleting_comment"] = "Hiba a hozzászólás törlése során: ";
$messages["comment_deleted_ok"] = "A(z) - \"%s\" - témájú hozzászólás sikeresen törölve.";
//*** NEW ***//
// please remove these comments after translating these lines


// categories list
$messages["category_name"] = "Név";

// removing posts
$messages["post_cannot_be_deleted"] = "Üzenet nem törölhetõ";
$messages["no_posts_selected"] = "Nincsenek törlésre megjelölt üzenetek.";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "Hiba a(z) \"%s\" törlése során (id = %d)";
$messages["post_deleted_ok"] = "\"%2\$s\" sikeresen törölve (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "Nincsenek törlésre megjelölt kategóriák.";
$messages["error_category_has_articles"] = "A(Z) \"%s\" kategória nem törölhetõ, mivel legalább egy üzenetet tartalmaz. Töröld az üzenet(ek)et és próbáld újra.";
$messages["error_deleting_category"] = "Hiba a(z) \"%s\" kategória adatbázisból történõ eltávolítása során.";
$messages["category_deleted_ok"] = "A(z) \"%s\" kategória sikeresen törölve.";

// add category
$messages["add_new_category"] = "Új kategória";
$messages["add_new_category_info"] = "Adj meg egy érvényes nevet az új kategória számára.";
$messages["category_added_ok"] = "Kategória sikeresn rögzítve.";
$messages["error_adding_article_category"] = "Hiba a kategória rögzítése során.";

// edit categories
$messages["edit_category"] = "Kategória módosítása";
$messages["please_provide_valid_category_name"] = "Adj meg egy érvényes nevet a kategória számára.";

// edit category

$messages["error_incorrect_category_id"] = "Érvénytelen kategória azonosító";


// update the category
$messages["error_fetching_category"] = "Hiba a kategória lekérése során.";
$messages["error_updating_category"] = "Hiba a kategória frissítése során.";
$messages["error_empty_category_name"] = "Érvényes nevet kell megadnod a kategória számára.";
$messages["category_updated_ok"] = "Kategória sikeresen frissítve.";

// edit links
$messages["link_name"] = "Név";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["category"];
$messages["link_description"] = "Leírás";
$messages["links"] = "Linkek";

// edit a link
$messages["error_provide_name_and_url"] = "A link nevét és az url címét mindenképp meg kell adnod.";
$messages["error_invalid_link_id"] = "Érvénytelen vagy hiányzó link azonosító.";
$messages["error_fetching_link"] = "Hiba a link lekérése során.";
$messages["error_updating_link"] = "Hiba a link frissítése során.";
$messages["link_updated_ok"] = "Link sikeresen frissítve!";
$messages["error_fetching_link_categories"] = "Hiba a linkkategóriák lekérése során.";

// add a link
$messages["add_new_link"] = "Új link";
$messages["add_link"] = "Mehet";
$messages["error_adding_link"] = "Hiba a link rögzítése során.";
$messages["link_added_ok"] = "Link sikeresen rögzítve.";
$messages["error_provide_name_and_url"] = "Meg kell adnod legalább egy érvényes nevet és címet.";
$messages["error_must_have_one_link_category"] = "Legalább egy link kategóriával rendelkezned kell a link rögzítéséhez.";

// delete a link
$messages["error_no_links_selected"] = "Nincsenek törlésre megjelölt linkek.";
$messages["error_removing_link"] = "Hiba a(z) \"%s\" link törlése során.";
$messages["link_deleted_ok"] = "A(z) \"%s\" link sikeresen törölve.";

// edit link categories
$messages["add_link_category"] = "Új link kategória";
$messages["link_categories_help"] = "Legalább egy link kategóriával rendelkezned kell a link rögzítéséhez.";
$messages["link_category_name"] = "Név";
$messages["link_category_links"] = "Link(ek)";

// new link category
$messages["new_link_category_info"] = "A link kategóriák segítenek osztályozni a meglévõ linkeket. Segítségükkel csoportosíthatva is megjelenítheted õket a fõoldalon.";
$messages["add_link_category"] = "Új kategória";
$messages["error_provide_link_category_name"] = "Meg kell adnod egy érvényes nevet.";
$messages["error_adding_link_category"] = "Hiba a kategória rögzítése során.";
$messages["link_category_added_ok"] = "Link kategória sikeresen rögzítve.";

// edit link category
$messages["edit_link_category"] = "Link kategória módosítása";
$messages["error_updating_link_category"] = "Hiba a link kategória módosítása során.";
$messages["link_category_updated_ok"] = "Link kategória sikeresen frissítve.";
$messages["error_fetching_link_category"] = "Hiba a link kategória lekérése során.";
$messages["error_incorrect_link_category_id"] = "Érvénytelen azonosító";


// delete link categories
$messages["error_no_link_category_selected"] = "Nincsenek törlésre megjelölt kategóriák.";
$messages["error_links_in_link_category"] = "A(z) \"%s\" kategória nem törölhetõ, mivel linkeket tartalmaz. Elõször távolítsd el a linkeket, majd próbáld újra.";
$messages["error_removing_link_category"] = "Hiba a(z) \"%s\" kategória törlése során.";
$messages["link_category_deleted_ok"] = "A(z) \"%s\" kategória sikeresen törölve.";
// this error is shown when for some reason the category could not be fetched from the database
// and we can't show its name
$messages["error_removing_link_category_2"] = "Hiba az alábbi azonosítójú kategória eltávolítása során: id = %d";

// blog settings page
$messages["blog_settings"] = "Blog beállítások";
$messages["user_profile"] = "Felhasználói profil";
$messages["plugin_center"] = "Pluginok";
$messages["statistics"] = "Statisztika";
$messages["blog_name"] = "Blog név";
$messages["long_blog_name"] = "Hoszabb, részletesebb leírás erröl a blogról";
$messages["language_used"] = "A használandó nyelv";
$messages["items_main_page"] = "Hány elem látszódjon a fõoldalon?";
$messages["items_as_recent"] = "Hány elem látszódjon \"Friss\"-ként?";
$messages["template_used"] = "Válassz sablont, mely meghatározza a blog kinézetét";
$messages["cut_posts"] = "A túl hosszú üzenetek két részre osztása egy \"Tovább...\" linkkel?";
$messages["cut_posts_after_characters"] = "Hány karakter után történjen a két részre osztás?";
$messages["enable_wysiwyg_edition"] = "A WYSIWYG szerkesztés engedélyezése (csak Internet Explorer 5.5 vagy újabb és Mozilla 1.3b vagy újabb esetén)?";
$messages["enable_comments"] = "Hozzászólás engedélyezése minden üzenetnél?";
$messages["yes"] = "Igen";
$messages["no"] = "Nem";
$messages["error_invalid_locale"] = "Érvénytelen érték a beállításoknál";
$messages["error_incorrect_max_recent_items"] = "Érvényes számot adjál meg a friss elemek számának.";
$messages["error_incorrect_number_of_posts"] = "Érvényes számot adjál meg a fõoldalon megjelenítendõ elemek számának.";
$messages["error_incorrect_template"] = "Érvénytelen sablon érték.";
$messages["error_no_blog_name"] = "Érvényes nevet kell megadnod a blog nevének.";
$messages["error_incorrect_show_more_threshold"] = "Érvényes számot kell megadnod, hogy az üzenet kettévágása rendesen mûködjön.";
$messages["error_updating_settings"] = "Hiba a beállítások frissítése során.";
$messages["blog_settings_updated_ok"] = "Blog beállítások sikeresen frissítve!";
$messages["permanent_blog_url"] = "A blog állandó URL címe (nem módosítható)";

// user profile page
$messages["username"] = "Felhasználónév";
$messages["password"] = "Jelszó";
$messages["confirm_password"] = "Jelszó megerõsítése";
$messages["email_address"] = "Email cím";
$messages["bio"] = "Bio";
$messages["empty_no_change"] = "Hagyd üresen, ha nem változtatod";
$messages["user_settings_updated_ok"] = "Felhasználói beállítások sikeresen frissítve.";
$messages["error_updating_user_settings"] = "Hiba a felhasználói beállítások frissítése során.";
$messages["error_passwords_dont_match"] = "A két jelszó nem egyezik.";
$messages["error_incorrect_password"] = "Érvénytelen jelszó.";
$messages["error_incorrect_email_address"] = "Érvénytelen Email cím.";

// plugin center page
$messages["plugins_available"] = "A sablonokban alkalmazható pluginek listája";
$messages["identifier"] = "Azonosító";
$messages["description"] = "Leírás";
$messages["error_plugins_disabled"] = "A pluginek használata letiltva ezen az oldalon.";

// statistics page
$messages["statistics_info"] = "A nulla azonosítójú cikk a fõoldalra érkezõ találatot jelenti, és nem egy cikkre vonatkozik.";
$messages["article_id"] = "Cikk Id";
$messages["last_hit_date"] = "Utolsó találat idõpontja";
$messages["error_fetching_referers"] = "Hiba az oldal lekérése során.";


// login screen
$messages["login_page_title"] = "pLog Adminisztrációs felület";
$messages["login"] = "Bejelentkezés";
$messages["welcome_message"] = "Üdvözöllek a pLog-ban";
$messages["error_incorrect_username_or_password"] = "Érvénytelen felhasználónév vagy jelszó.";
$messages["error_dont_belong_to_any_blog"] = "Nem tartozol egyetlen bloghoz sem.";
$messages["error_no_username_or_password"] = "Kérlek adj meg egy érvényes felhasználónevet és jelszót.";
$messages["choose_one_blog"] = " Az alábbi blogokhoz férsz hozzá. Válaszd ki amelyiken dolgozni akarsz";
$messages["continue"] = "Tovább";
$messages["logout_message"] = "Sikeersen kijelentkeztél.";
$messages["logout_message_2"] = "<a href=\"admin.php\">Kattints ide</a> az újboli bejelentkezéshez, vagy
<a href=\"%1\$s\">ide, hogy visszatérj a(z) %2\$s kezdõoldalára</a>.";
$messages["logout_title"] = "Kijelentkezve";
$messages["error_access_forbidden"] = "Hozzáférés megtagadva. Elõször azonosítanod kell magad ITT.";

/////////////////////////////////////////////////////////////////////
//
//
// new strings added for 0.2
//
//
////////////////////////////////////////////////////////////////////
$messages["site_admin"] = "Oldal Admin";
$messages["site_stats"] = "Oldal statisztikák";
$messages["add_user"] = "Új felhasználó/szerkesztõ";
$messages["users"] = "Felhasználók/Szerkesztõk";
$messages["add_blog"] = "Új blog";
$messages["blogs"] = "Blogok";
$messages["locales"] = "Nyelvi beállítások";
$messages["add_locale"] = "Új nyelv hozzáadása";
$messages["templates"] = "Sablonok";
$messages["add_template"] = "Sablonok hozzáadása";
$messages["global_settings"] = "Általános beállítások";
$messages["site_settings"] = "Oldal beállítások";
$messages["help_comments_enabled"] = "Hozzászólások engedélyezése/tiltása az egész oldalon.";
$messages["help_beautify_comments_text"] = "A felhasználói szövegformázás engedélyezése.";
$messages["help_rdf_enabled"] = "RDF folyam engedélyezése a legutóbbi üzenetekhez.";
$messages["help_temp_folder"] = "A pLog ideiglenes mûveletekhez használt könyvtára.";
$messages["help_base_url"] = "A helyes címek elõállításához használt URL. Helyes értéket állíts be.";
$messages["help_show_posts_max"] = "Az alapértelmezés szerint a fõoldalon megjelenített üzenetek száma.";
$messages["help_recent_posts_max"] = "Az alapértelmezés szerint frissként megjelölt üzenetek száma.";
$messages["help_template_folder"] = "A pLog által használ sablonok elérési útvonala.";
$messages["help_default_template"] = "Az alapértelmezett sablon.";
$messages["help_default_locale"] = "Az alapértelmezett nyelvi file.";
$messages["help_html_allowed_tags_in_comments"] = "A hozzászólásokban engedélyezett HTML kódok.";
$messages["help_referer_tracker_enabled"] = "Alapvetõ információk rögzítése az ajánlórol az adatbázisban, ha ez lehetséges.";
$messages["help_rss_parser_enabled"] = "A sablonban található RSS parser engedélyezése.";
$messages["help_show_more_enabled"] = "A \"Tovább...\" opció alapértelmezés szerinti engedélyezése.";
$messages["help_show_more_threshold"] = "Milyen hosszú legyen a szöveg a tördelés elött.";
$messages["help_update_article_reads"] = "Számolja-e a rendszer a cikkek olvasásának számát?";
$messages["help_request_format_mode"] = "\"Sima\" mód esetén hagyományos URL címeket generál, míg \"Keresõ barát\" mód keresõ motorok szempontjából elõnyösebb URL címeket hoz létre. Szükséges: Apache és .htaccess file használatának engedélyezése.";
$messages["help_xmlrpc_ping_enabled"] = "XMLRPC értesítés küldése minden egyes üzenet után a lent beállított címekre.";
$messages["help_xmlrpc_ping_hosts"] = "XMLRPC értesítés támogatással rendelkezõ címek. Minden egyes cím új sorba kerüljön. Annyit adhatsz meg, amennyi szükséges.";
$messages["help_trackback_server_enabled"] = "Bejövõ trackback kérelmek fogadásának engedélyezése.";
$messages["help_htmlarea_enabled"] = "A WYSIWYG szerkesztõ engedélyezése.";
$messages["help_plugin_manager_enabled"] = "Pluginok engedélyezése.";
$messages["help_check_email_address_validity"] = "Új blog regisztrálása során a felhasználóktól egy érvényes email cím lesz bekérve, a jóváhagyás érdekében, ha ez az opció engedélyezve van.";
$messages["help_summary_page_show_max"] = "Az összegzés oldalon megjelenítendõ elemek száma.";
$messages["help_minimum_password_length"] = "A jelszó minimális hossza.";
$messages["help_users_can_add_templates"] = "Felhasználók beállíthatnak-e új sablont a blogjuk számára, vagy sem.";
$messages["help_email_service_enabled"] = "Email küldõ ki/bekapcsolása. Ezen keresztül történik pl. a cikkekre érkezõ hozzászólások jelentése.";
$messages["post_notification_source_address"] = "Az email küldõjeként feltüntetett cím.";
$messages["help_email_service_type"] = "Az email küldésének módja. Válassz ki egyet és ne feledd ellenõrizni a lenti beállításokat.";
$messages["help_smtp_host"] = "SMTP használata esetén ez a host, ami küldeni fogja a leveleket.";
$messages["help_smtp_port"] = "Az SMTP szerver portja.";
$messages["help_smtp_use_authentication"] = "Ha az SMTP szerver támogatja az azonosítást, akkor kapcsold be ezt az opciót és ellenõrid lent a két beállítást.";
$messages["help_smtp_username"] = "Felhasználónév - csak akkor kell, ha az azonosítás be van kapcsolva.";
$messages["help_smtp_password"] = "Jelszó - csak akkor kell, ha az azonosítás be van kapcsolva.";
$messages["help_uploads_enabled"] = "Filefeltöltés engedélyezése. Hatással van a sablonok illetve a sablonokhoz utólagosan feltöltendõ kiegészítõk feltöltésre is.";
$messages["help_maximum_file_upload_size"] = "A felhasználók által feltölthetõ maximális fileméret byte-ban megadva.";
$messages["help_upload_forbidden_files"] = "Tiltott filetípusok listája. Tetszõleges mennyíséget megadhatsz, szóközzel elválasztva.";
$messages["help_path_to_tar"] = "A 'tar' elérési útvonala.";
$messages["help_path_to_gzip"] = "A 'gzip' elérési útvonala.";
$messages["help_path_to_bz2"] = "A 'bzip2' elérési útvonala.";
$messages["help_path_to_unzip"] = "Az 'unzip'  elérési útvonala.";

$messages["add_user_give_information"] = "Add meg az alábbi adatokat új felhasználó regisztrálásához.";

$messages["site_registered_users"] = "Az összes regisztrált felhasználó.";

$messages["add_blog_give_information"] = "Add meg az alábbi adatokat új blog létrehozásához.";
$messages["blog_title"] = "Blog neve";
$messages["blog_owner"] = "Blog tulajdonosa";

$messages["site_registered_blogs"] = "Az összes regisztrált blog.";
$messages["edit_users"] = "Felhasználók módosítása";

$messages["upload_locale"] = "Nyelvi file feltöltése";
$messages["use_this_form_to_upload_locale"] = "  Használd ezen mezõt új nyelvi file hozzáadásához. Ha nincs lehetõséged fle feltöltésére, használd a lenti mezõt.";
$messages["locale_file"] = "File";
$messages["manually_add_locale"] = "Nyelvi file kézi hozzáadása";
$messages["use_this_form_if_cant_upload_locale"] = "Használd ezen mezõt, ha nincs lehetõséged file feltöltésére. A file-t fell kell tölteni a nyelvi mappába a mûvelet megkezdése elött.";
$messages["locale_code"] = "Nyelvi kód";
$messages["locale_encoding"] = "Kódolás";

$messages["template_will_be_available_for_all"] = "Az új sablon file elérhetõ lesz az összes blog számára.";

$messages["use_this_form_to_upload_template"] = "  Használd ezt a mezõt sablon szettek feltöltésére. Ha nincs lehetõséged file-ok feltöltésére, akkor használd a lenti mezõt. A szetteknek zip, tar.gz vagy tar.bz2 formátumban kell lenniük.";
$messages["locale_file"] = "File";
$messages["upload_template"] = "Sablon feltöltése";
$messages["manually_add_template"] = "Sablon hozzáadása kézzel";
$messages["use_this_form_if_cannot_upload_template"] = " Ha nincs lehetõséged file-ok feltöltésére, akkor használd ezt a mezõt. A file-t be kell másolnod az alapértelmezett sablon mappába a mûvelet megkezdése elött.";
$messages["template_id"] = "Sablon azonosító";

$messages["templates_available_for_all"] = "Az oldal összes blogja által elérhetõ sablonok";
$messages["add_file"] = "File hozzáadása";

$messages["setting_name"] = "Beállítás";
$messages["setting_value"] = "Érték";
$messages["setting_description"] = "Leírás";

$messages["plain"] = "Sima";
$messages["search_engine_friendly"] = "Keresõ barát";

$messages["general_settings"] = "Általános beállítások";
$messages["helper_tools_settings"] = "A segédeszközök beállításai";
$messages["uploads_settings"] = "Feltöltéssel kapcsolatos beállítások";
$messages["email_settings"] = "Email beállítások";

$messages["number_blogs"] = "Blogok száma";
$messages["number_users"] = "Felhasználók száma";
$messages["number_posts"] = "Üzenetek száma";
$messages["number_posts_today"] = "Üzenetek a mai napon";
$messages["number_posts_this_month"] = "Üzenetek ezen hónapban";

$messages["date"] = "Dátum";
$messages["time"] = "Idõ";

$messages["comments_order"] = "Hozzászólások sorrendje:";
$messages["oldest_first"] = "Régebbi elõre";
$messages["newest_first"] = "Újabb elõre";

$messages["blog"] = "Blog";
$messages["blog_id"] = "Numerikus blog azonosító";

$messages["blog_users"] = "Blog felhasználók";
$messages["available_users"] = "Elérhetõ felhasználók";
$messages["add"] = "Hozzáadás";
$messages["remove"] = "Eltávolítás";

$messages["user_id"] = "Numerikus felhasználó azonosító";

$messages["new_password"] = "Új jelszó";
$messages["has_administrator_privileges"] = "Adminisztrátori privilégiumokkal rendelkezik";
$messages["related_to_the_following_blogs"] = "A következõ blogokhoz kapcsolódik";

$messages["add_user_to_blog_form"] = " Ezen oldal segítségével adhatsz új szerkesztõt a bloghoz. Ezen felhasználó írhat új üzeneteket és a meglévõket is módosíthatja, de a blog beállításaihoz nem fér hozzá.";
$messages["add_user_enter_username"] = " Add meg a leendõ szerkesztõ felhasználói nevét. A felhasználónak már regisztrálva kell lennie a rendszerben, különben hibaüzenetet fogsz kapni.";
$messages["add_user_send_notification"] = "Felhasználó értesítése emailben.";
$messages["add_user_type_notification"] = "Az emailben elküldendõ értesítés szövege";

$messages["following_users_have_permissions"] = " Az alábbi felhasználók képzik a blog szerkesztõségét. Írhatnak és módosíthatnak üzeneteket, de a blog beállításaihoz nem férnek hozzá.";
$messages["revoke_permissions"] = "Jogosultság visszavonása";

$messages["add_blog_template"] = "Új sablon";
$messages["manually_add_blog_template"] = "Sablon hozzáadása kézzel";
$messages["template_available_only_for_this_blog"] = "Ez a sablon csak ezen blog számára lesz elérhetõ.";
$messages["use_form_to_upload_blog_template"] = "Használd ezt a mezõt sablon szettek feltöltésére. Ha nincs lehetõséged file-ok feltöltésére, akkor használd a lenti mezõt. A szetteknek zip, tar.gz vagy tar.bz2 formátumban kell lenniük.";
$messages["use_form_if_cannot_upload_blog_template"] = "Ha nincs lehetõséged file-ok feltöltésére, akkor használd ezt a mezõt. A file-t be kell másolnod az alapértelmezett sablon mappába a mûvelet megkezdése elött.";

$messages["blog_templates"] = "Blog sablonok";
$messages["templates_only_available_for_this_blog"] = "Az alábbi sablonok csak ezen blog számára elérhetõek.";

$messages["add_file_to_blog_template"] = "File hozzáadása sablonhoz"; $messages["upload_file_to_blog_template"] = "Töltsd fel a file-t, amit hozzá akarsz adni a szetthez.";

$messages["error_user_id_incorrect"] = "Érvénytelen felhasználó azonosító.";
$messages["error_incorrect_user_id"] = $messages["error_user_id_incorrect"];
$messages["error_fetching_user_information"] = "Hiba a felhasználói információk lekérése során.";
$messages["error_password_incorrect"] = "Érvénytelen, vagy túl rövid jelszó.";
$messages["error_updating_user_settings"] = "A felhasználó beállításainak frissítése sikertelen.";
$messages["user_settings_updated_ok"] = "A(z) \"%s\" felhasználó beállításai sikeresen frissítve.";
$messages["error_no_users_selected_to_add"] = "Nem lettek felhasználók kijelölve.";
$messages["user_added_to_blog_ok"] = "A(z) \"%s\" felhasználó hozzáadva a bloghoz.";
$messages["error_adding_user_to_blog"] = "Hiba a(z) \"%s\" felhasználó felvétele során.";
$messages["error_no_users_selected_to_remove"] = "Nincsenek törlésre megjelült felhasználók.";
$messages["user_removed_from_blog_ok"] = "\"%s\" törölve a blogról.";
$messages["error_removing_user_from_blog"] = "Hiba a(z) \"%s\" felhasználó törlése során.";

$messages["error_incorrect_plugin_id"] = "Érvénytelen plugin azonosító.";
$messages["error_configuring_plugin"] = "Hiba a plugin beállítása során: ";
$messages["site_config_saved_ok"] = "Az oldal beállításai sikeresen elmentve.";
$messages["error_saving_site_config"] = "Hiba a beállítások elmentése során.";

$messages["error_incorrect_blog_owner"] = "A blog tulajdonosénak választott felhasználó nem létezik.";
$messages["error_updating_blog_settings"] = "Hiba a(z) \"%s\" blog beállításainak frissítése során";
$messages["blog_settings_updated_ok"] = "A(z) \"%s\" sikeresen frissítve.";

$messages["error_fetching_users"] = "Hiba a felhasználók lekérése során.";

$messages["error_fetching_blogs"] = "Hiba a blogok lekérése során.";

$messages["error_incorrect_template_id"] = "Érvénytelen vagy nem létezõ sablon azonosító.";

$messages["error_no_users_selected"] = "Nincsenek törlésre megjelölt felhasználók.";
$messages["error_could_not_find_user"] = "A(z) \"%s\" felhasználó nem található.";
$messages["error_deleting_user"] = "Hiba a(z) \"%s\" felhasználó törlése során";
$messages["user_deleted_ok"] = "\"%s\" sikeresen törölve.";

$messages["error_must_give_blog_name"] = "Érvényes nevet kell adnod a blognak.";
$messages["error_adding_blog"] = "Hiba a blog rögzítése során.";
$messages["blog_added_ok"] = "A(z) \"%s\" nevû blog sikeresen létrehozva.";

$messages["error_template_not_inside_folder"] = "A sablon filejainak egy mappában kell lenniük.";
$messages["error_missing_base_files"] = "Néhány alapvetõ file hiányzik a szettbõl.";
$messages["error_unpacking"] = "Hiba a file kicsomagolása során.";
$messages["error_forbidden_extensions"] = "A sablon bizonyos filejai tiltottak.";
$messages["error_creating_working_folder"] = "Hiba a sablon szett ellenörzése során";
$messages["error_checking_template"] = "Hiba van a sablon szettel (code = %s)";
$messages["error_add_template_disabled"] = "Felhasználók nem rögzíthetnek új sablont.";
$messages["error_must_upload_file"] = "Meg kell adnod egy file-t.";
$messages["error_no_template_name"] = "Meg kell adnod a sablon nevét.";
$messages["error_uploads_disabled"] = "A feltöltés szolgáltatás kikapcsolva ezen az oldalon.";
$messages["error_installing_template"] = "Hiba a sablon szett telepítése közben.";
$messages["template_installed_ok"] = "Az új sablon szett sikeresen telepítve, mint: \"%s\".";

$messages["error_adding_template_file"] = "Hiba a file sablon szetthez történõ hozzáadása során.";
$messages["error_file_forbidden"] = "Ezen típusú file-ok tiltottak ezen az oldalon.";
$messages["error_file_too_big"] = "A file túl nagy. A maximális méret \"%s\" byte.";
$messages["template_file_added_ok"] = "A file sikeresen hozzáadva a(z) \"%s\" sablonhoz.";

$messages["error_plugin_cannot_be_configured"] = "A plugin nem beállítható.";

$messages["error_incorrect_username"] = "Érvénytelen felhasználónév";
$messages["error_username_already_exists"] = "Már van regisztrált tag ilyen felhasználói névvel.";
$messages["error_adding_user"] = "Hiba az új felhasználó rögzítése során.";
$messages["user_added_ok"] = "Új felhasználó - \"%s\" - sikeresen rögzítve.";

$messages["error_no_blogs_selected"] = "Legalább egy blogot meg kell jelölnöd törlendõként.";
$messages["error_blog_is_default_blog"] = "\"%s\" nem törölhetõ, mivel ez az alapértelmezett blog.";
$messages["blog_deleted_ok"] = "\"%s\" sikeresen törölve.";
$messages["error_deleting_blog"] = "Hiba a törlés során: \"%s\".";

$messages["error_no_templates_selected"] = "Nincsenek törlésre megjelölt sablonok.";
$messages["error_removing_template"] = "Hiba a(z) \"%s\" sablon törlése során";
$messages["template_removed_ok"] = "A(z) \"%s\" sablon sikeresen törölve.";

$messages["error_no_users_selected_to_remove_from_blog"] = "Nem lett felhasználó kiválasztva.";
$messages["error_removing_user_from_blog"] = "Hiba a(z) \"%s\" felhasználó törlése során.";
$messages["user_removed_from_blog_ok"] = "A(z) \"%s\" felhasználó sikeresen törölve.";

$messages["error_incorrect_locale_code"] = "Érvénytelen nyelvi kód";
$messages["error_invalid_locale_file"] = "A file nem tûnik érvényes nyelvi file-nak";
$messages["error_adding_locale_file"] = "Hiba a nyelvi file rögzítése során. Bizonyosodj meg róla, hogy a nyelvi file fel legyen töltve a mûvelet megkezdése elött és megfelelõ jogosultságokkal rendelkezzen.";
$messages["locale_added_ok"] = "Az új nyelv - \"%s\" - sikeresn hozzáadva.";
$messages["error_saving_locale"] = "Hiba a nyelvi file mentése során. Bizonyosodj meg róla, hogy a nyelvi file-okat tartalmazó mappa megfelelõ jogosultságokkal rendelkezik.";

$messages["error_no_locales_selected"] = "Nincsenek törlésre megjelölt nyelvi file-ok.";
$messages["error_deleting_only_locale"] = "Ez az egyetlen rendelkezésre álló nyelvi file, ennélfogva nem törölhetõ.";
$messages["locale_deleted_ok"] = "\"%s\" nyelvi file sikeresen törölve.";
$messages["error_deleting_locale"] = "Hiba a(z) \"%s\" nyelvi file törlése során";
$messages["error_cant_delete_default_locale"] = "\"%s\" nem törölhetõ, mivel jelenleg ez az alapértelmezett nyevi file.";

$messages["plugin_config"] = "Plugin beállítások";

$messages["use_read_more_feature"] = "Csak az üzenet elsõ részének megjelenítése a fõoldalon? (Ha a 'Nem' -et választod, akkor az egész üzenet megjelenik";

$messages["extended_text"] = "Kibõvített hír. Tartalma a fõoldalon csak akkor jelenik meg, ha ezt külön kérjük. ('Beállítások' fül)";

$messages["error_must_give_post_intro"] = "A bevezetõ szöveget mindenképp meg kell adnod.";
$messages["error_no_albums_defined"] = "Nincsenek albumok.";
$messages["error_fetching_album"] = "Hiba a kért album lekérése során";
$messages["comment_marked_as_spam_ok"] = "Hozzászólás sikeresen megjelölve mint spam.";
$messages["comment_marked_as_nonspam_ok"] = "Hozzászólás sikeresen megjelülve mint nem spam.";
$messages["error_marking_comment_as_nonspam"] = "Hiba a hozzászólás nem spamként történõ megjelölése során.";
$messages["error_marking_comment_as_spam"] = "Hiba a hozzászólás spamként történõ megjelölése során.";
$messages["error_incorrect_comment_id"] = "Érvénytelen hozzászólás azonosító.";
$messages["error_base_storage_folder_missing_or_unreadable"] = "A pLog nem tudta létrehozni a tartalom tárolásához szükséges mappákat. Ennek több oka is lehet. Például a PHP telepítés safe mode bekapcsolása mellett fut, vagy a felhasználóidnak nincs megfelelõ jogosultságuk. Megpróbálhatod saját magad létrehozni a következõ mappákat
: <br/><br/>%s<br/><br/>Ha már léteznek, akkor gyõzõdj meg róla, hogy a webszerver rendelkezik olvasási és írási jogokkal.";


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
$messages["show_category_in_main_page"] = "Megjelenítés a fõoldalon";
$messages["welcome_resource_center"] = "Welcome to the resource center!";
$messages["resource_center"] = "Albumok";
$messages["resource_albums"] = "Albumok";
$messages["resources"] = "Tartalom";
$messages["add_resource"] = "Új tartalom";
$messages["add_album"] = "Új album";
$messages["album"] = "Album";
$messages["album_name"] = "Album neve";
$messages["parent_album"] = "Szülõ album";
$messages["no_parent_album"] = "Nincs szülõ album";
$messages["resource_info"] = "Tartalom információ";
$messages["size"] = "Méret";
$messages["format"] = "Formátum";
$messages["dimensions"] = "Méret";
$messages["bits_per_sample"] = "Bit/pixel";
$messages["bytes"] = "byte";
$messages["pixels"] = "pixel";
$messages["time_offset"] = "Idõeltolódás - órában - a tartózkodási helyed és a szerver között";
$messages["hours"] = "Óra";
$messages["album_added_ok"] = "Az új album sikeresen létrehova.";
$messages["name"] = "Név";
$messages["children"] = "Gyermek";
$messages["see"] = "See";
$messages["view"] = "Megtekintés";
$messages["resource_info"] = "Tartalom információ";
$messages["number_of_channels"] = "Csatornák száma";
$messages["length"] = "Hossza";
$messages["number_of_files"] = "File-ok száma";
$messages["compressed_size"] = "Tömörített méret";
$messages["uncompressed_size"] = "Tömörítetlen méret";
$messages["resource_file"] = "Hozzáadandó file-ok:";
$messages["add_to_album"] = "File hozzáadása a következõ albumhoz:";
$messages["edit_resource_album"] = "Album módosítása";
$messages["error_loading_resource_album"] = "Hiba az album lekérése során.";
$messages["error_album_id_parameter_missing"] = "Érvénytelen album azonosító.";
$messages["error_album_parent_id_parameter_missing"] = "Szülõ album azonosítója nem található.";
$messages["error_updating_resource_album"] = "Hiba az album frissítése során.";
$messages["resource_album_updated_ok"] = "A(z) \"%s\" album sikeresen frissítve.";
$messages["error_must_give_album_name"] = "Meg kell adnod egy nevet.";
$messages["error_adding_album"] = "Hiba az album rögzítése során.";
$messages["album_added_ok"] = "A(z) \"%s\" album sikeresen rögzítve.";
$messages["resource_added_ok"] = "Tartalom hozzáadása sikeres volt.";
$messages["error_resource_forbidden_extension"] = "A tartalom nem adható az albumhoz, mivel tiltott kiterjesztéssel rendelkezik.";
$messages["error_resource_too_big"] = "A tartalom túl nagy.";
$messages["error_uploads_disabled"] = "A tartalom nem rögzíthetõ, mivel a feltöltés le van tiltva.";
$messages["error_adding_resource"] = "Hiba a tartalom hozzásadása során.";
$messages["error_loading_resource"] = "Hiba a tartalom lekérése során";
$messages["error_updating_resource"] = "Hiba a tartalom frissítése során.";
$messages["resource_updated_ok"] = "Tartalom - \"%s\" - sikeresen frissítve.";
$messages["error_no_resources_selected"] = "Nincs törlésre megjelölt tartalom.";
$messages["resource_deleted_ok"] = "Tartalom - \"%s\" - sikeresen törölve.";
$messages["error_deleting_resource"] = "Hiba a(z) \"%s\" törlése során.";
$messages["error_no_resource_uploaded"] = "Nincs feltöltött tartalom.";
$messages["filtered_content"] = "Szûrt tartalom";
$messages["global_filtered_content"] = "Globálisan szûrt tartalom";
$messages["block_content"] = "Tartalom szûrése";
$messages["blocked_hosts"] = "Blokkolt címek";
$messages["global_blocked_hosts"] = "Globálisan blokkolt címek";
$messages["block_host"] = "Cím blokkolása";
$messages["security"] = "Biztonság";
$messages["security_welcome"] = "Üdvözlet a Biztonság részlegben!";
$messages["filtered_content_intro"] = "Az alábbi tartalom és reguláris kifejezések kerülnek szûrésre.";
$messages["global_filtered_content_intro"] = "Az alábbi tartalmak és reguláris kifejezések kerülnek szûrésre globális szinten";
$messages["content"] = "Tartalom";
$messages["reason"] = "Ok";
$messages["add_filtered_content"] = "Szûrendõ tartalom beállítása";
$messages["add_filtered_content_intro"] = "Az itt felsorolt tartalmak nem kerülnek megjelenítésre a hozzászólásokban. Ha egy sima felhasználó blokkolt tartalmat is tartalmazó hozzászólást ír, akkor az üzenet nem jelenik meg. Reguláris kifejezések éppúgy használhatók, mint egyszerû szavak. A reguláris kifejezések sokkal hatékonyabbak, ugyanakkor sokkal összetettebbek is, éppen ezért használatuk során megfelelõ körültekintéssel járj el, nehogy véletlenül olyan kifejezést szerkesszél, amivel minden hozzászólást blokkolsz.";
$messages["global_add_filtered_content_intro"] = "Az itt felsorolt tartalmak nem kerülnek megjelenítésre a hozzászólásokban. Ha egy sima felhasználó blokkolt tartalmat is tartalmazó hozzászólást ír, akkor az üzenet nem jelenik meg. Reguláris kifejezések éppúgy használhatók, mint egyszerû szavak. A reguláris kifejezések sokkal hatékonyabbak, ugyanakkor sokkal összetettebbek is, éppen ezért használatuk során megfelelõ körültekintéssel járj el, nehogy véletlenül olyan kifejezést szerkesszél, amivel minden hozzászólást blokkolsz.";
$messages["content_to_block"] = "Blokkolandó tartalom:";
$messages["block_this"] = "Hozzáadás";
$messages["mask"] = "Mask";
$messages["access_blocked"] = "Hozzáférés tiltása";
$messages["posting_blocked"] = "Hozzászólás tiltása";
$messages["block_host_intro"] = "Az itt megadott címek csak ezen blogot nem érik el. Bõvebb információkért nézd át a <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">Súgót</a>.";
$messages["global_block_host_intro"] = "Az itt megadott címekröl érkezõk az oldal egyetlen blogjához sem férnek hozzás. Bõvebb leírásért nézd at a szolgáltatás <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">súgóját</a>.";
$messages["block_type"] = "Blokkolás típusa";
$messages["error_invalid_ip_address"] = "Érvénytelen IP cím.";
$messages["error_provide_content_to_block"] = "Meg kell adnod a szûrendõ tartalmat.";
$messages["error_must_create_album_first"] = "Tartalom hozzáadása elött létre kell hoznod egy albumot.";
$messages["error_resource_is_not_an_image"] = "A kijelölt tartalom nem kép.";
$messages["error_generating_resource_preview"] = "Hiba az elõnézet újragenerálása során.";
$messages["resource_preview_generated_ok"] = "Elõnézet sikeresen létrehozva.";
$messages["regenerate_preview"] = "Elõnézet újragenerálása";
$messages["show_album"] = "Album megjelenítése";
$messages["show_album_when_browsing"] = "Album megjelenítése a felhasználóknak";
$messages["assigned_to_blog"] = "Beosztás a kijelölt bloghoz";
$messages["clean_up"] = "Karbantartás";
$messages["purge_info"] = "A törlés funkció véglegesen kitörli a \"Törölt\" ként megjelölt üzeneteket az adatbázisból. Enélkül ezen üzenetek az adatbázisban maradnak - hátha a felhasználó vissza akarja állítani õket - ennélfogva adott esetben jelentõsen - és nagy valószínûséggel feleslegesen - megnövelik az adatbázis méretét. Ha törölni akarod ezen hozzászólásokat, kattints az alábbi gombra..";
$messages["spam_info"] = "A spamként megjelölt hozzászólások az adatbázisban tarthatóak, a spam filter bõvítése érdekében. Amint ez megtörtént, már haszontalanok, s ennélfogva célszerû a törlésük. Ha törölni akarod õket kattints az alábbi gombra.";
$messages["no_spam"] = "Nem Spam";
$messages["spam"] = "Spam";
$messages["mark_as_spam"] = "Megjelölés mint spam";
$messages["mark_as_no_spam"] = "Megjelölés, mint nem spam";
$messages["enable_comments_for_post"] = "Hozzászólás engedélyezése";
$messages["close_window"] = "Abalak bezárása";
$messages["add_resource"] = "Tartalom hozzáadása";
$messages["add_resource_preview"] = "Elõnézet hozzáadása";
$messages["add_album"] = "Album hozzáadása";
$messages["show_main_page"] = "Megjelenítés a fõoldalon";
$messages["purge_spam_comments"] = "Spam hozzászólások törlése";
$messages["purge_posts"] = "Hozzászólások törlése";
$messages["keep_spam_comments"] = "Spam hozzászólások megtartása";
$messages["throw_away_spam_comments"] = "Spam hozzászólások eldobása";
$messages["error_adding_blocked_host"] = "Hiba a megadott hoszt blokkolása során.";
$messages["blocked_host_added_ok"] = "A(z) %s hoszt sikeresen hozzáadva a blokkolandó címek listájához.";
$messages["error_no_blocked_hosts_selected"] = "Nincsen törlésre megjelölt hoszt.";
$messages["blocked_host_deleted_ok"] = "A(z) \"%s\" hoszt sikeresen törölve.";
$messages["error_deleting_blocked_host"] = "Hiba a(z) \"%s\" blokkolt hoszt törlése során.";
$messages["edit_blocked_host"] = "Blokkolt hosztok módosítása";
$messages["error_fetching_blocked_host"] = "Hiba a blokkolt hosztok lekérése során.";
$messages["error_updating_blocked_host"] = "Hiba a blokkolt hosztok frissítése során.";
$messages["thumbnail_format"] = "Indexkép formátum";
$messages["same_as_image"] = "Ugyanaz, mint az eredeti";
$messages["same"] = $messages["same_as_image"];



$messages["help_locale_folder"] = "A nyelvi file-ok mappája.";
$messages["help_default_locale"] = "Alapértelmezett nyelvi beállítások új blog regisztrálásakor.";
$messages["help_xmlrpc_api_enabled"] = "Enables or disables the XMLRPC interface, for posting from your desktop.";
$messages["default_rss_profile"] = "RSS/RDF profile that will be used by default to generate feeds, if no special profile is specified";
$messages["help_security_pipeline_enabled"] = "A biztonsági szolgáltatások bekapcsolása. A kikapcsolása az összes biztonsági szolgáltatás kikapcsolsát jelenti. Éppen ezért azt javasoljuk, hogy legyen bekapcsolva, s csak azon szolgáltatásokat kapcsold ki, melyekre nincs szükséged.";
$messages["help_ip_address_filter_enabled"] = "Az IP szûrés bekapcsolásával megakadályozhatsz bizonyos címeeket az oldal elérésében.";
$messages["help_content_filter_enabled"] = "Bekapcsol egy nagyon egyszerû reguláris kifejezés alapú tartalom szûrõt. A Bayesian szûrõ jobb választás lehet.";
$messages["help_maximum_comment_size"] = "A hozzászólások maximális mérete byte-ban megadva.";
$messages["help_bayesian_filter_enabled"] = "Bayesian szûrõ be/kikapcsolása.";
$messages["help_bayesian_filter_spam_probability_treshold"] = "Hozzászólás spammé nyílvánításának muinimális értéke. Célszerû 0.01 és 0.99 közé beállítani.";
$messages["help_bayesian_filter_nonspam_probability_treshold"] = "Maximális érték, melynél a hozzászólás biztosan nem spam. Ezen kát határérték közti hozzászólások sem bizonyulnak spamnek, de elképzelhetõ, hogy további beállítások szükségesek.";
$messages["help_bayesian_filter_min_length_token"] = "A szövegértelmezõ által érvényesnek tekintett egység minimális hossza.";
$messages["help_bayesian_filter_max_length_token"] = "Illetve maximális hossza.";
$messages["help_bayesian_filter_number_significant_tokens"] = "A szükséges, jelentõs egységek száma a hozzászólásban";
$messages["help_bayesian_filter_spam_comments_action"] = "Mi történjen a spam -el? Azonnali eldobásra is kerülhetnek - ilyenkor be se kerül az adatbázsiba - de pusztán megjelölhetõek spamként is. Utóbbi lehetõség akkor ajánlott, ha a spam szûrû még tökéletesítés alatt áll, s alakalomadtán még hibázik.";
$messages["help_path_to_convert"] = "A 'convert' program szükséges, ha az ImageMagick vsomagot használjuk az indexképek elõállítására.";
$messages["help_thumbnail_height"] = "Indexképek maximális magassága.";
$messages["help_resources_folder"] = "A különféle file-ok tárolására szolgáló mappaFolder where the resources will be stored. Does not have to be in the web server tree, if you don't feel like letting people browse your resources folder. The resource server will take care of serving
the files wherever they are.";

$messages["help_thumbnails_keep_aspect_ratio"] = "Kép oldalarányának megtartása.";
$messages["help_resources_enabled"] = "'Tartalom albumok' be/kikapcsolása.";
$messages["help_thumbnail_method"] = "Az indexképek generálásához használt rendszer. Az ImageMagick esetén pár külsõ eszköz is szükséges. Lásd lentebb.";
$messages["help_thumbnail_width"] = "Indexképek maximális szélessége.";
$messages["external_interfaces"] = "Külsõ interfészek";
$messages["security_settings"] = "Biztonsági beállítások";
$messages["bayesian_filter_settings"] = "Bayesian szûrû beállításai";
$messages["resources_settings"] = "Tartalom beállítások";
$messages["help_thumbnail_format"] = "Az indexképek alapértelmezett fileformátuma. 'Ugyanaz, mint az eredeti' esetén az indexkép formátuma az eredeti képével egyezik meg.";
$messages["edit"] = "Módosítás";
$messages["blocked_content_added_ok"] = "Blokkolandó tartalom sikeresen rögzítve.";
$messages["blocked_content_updated_ok"] = "Blokkolandó tartalom sikeresen frissítve.";
$messages["help_disable_javascript_calendar"] ="A javascript és DHTML-alapú naptár kikapcsolása. Alapértelmezés szerint ez használható a dátum kiválasztásához az üzenetek írásakor/módosításakor, de esetleges kompatibilitási gondokat okozhat bizonyos böngészõk esetén.";
$messages["edit_filtered_content"] = "Szûrt tartalom módosítása";
$messages["error_updating_blocked_content"] = "Hiba a szûrt tartalom módosítása során.";
$messages["audio_codec"] = "Audio Codec";
$messages["video_codec"] = "Video Codec";
$messages["sample_rate"] = "Mintavétel";
$messages["files"] = "File-ok";
$messages["created"] = "Létrehozva:";
$messages["generated"] = "Létrehozva:";
$messages["about"] = "About";
$messages["menu"] = "Menü";
$messages["albums"] = "Albumok";
$messages["template_file"] = "File";
$messages["download"] = "Letöltés";
$messages["error_you_have_been_blocked"] = "Nincs jogosultságod ezen kérelemre.";

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
$messages["register_default_category"] = "Hírek";
$messages["register_default_article_text"] = "Ha ezt olvasod, az azt jelenti, hogy a blog regisztráció sikeres volt. Kellemes bloggolást!";
$messages["register_default_article_topic"] = "Gratulálok, mûködik!";
?>
