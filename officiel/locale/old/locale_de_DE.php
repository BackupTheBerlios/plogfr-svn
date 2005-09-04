<?php
//
// German translation by Markus Vortkamp,
// plog@markus-vortkamp.de
// Wenn Sie Rechtschreibfehler in diesem Dokument finden, w&auml;re ich Ihnen f&uuml;r eine kurze Nachricht dankbar.
// F&uuml;r Fragen zu pLog wenden Sie sich bitte an die pLog group unter: http://plog.sourceforge.net/
//
// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "iso-8859-1";
$messages["locale_description"] = "Deutsche (german) Lokalisierung f&uuml;r pLog";

// days of the week
$messages["days"] = Array( "Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag" );
// -- compatibility, do not touch -- //
$messages["Monday"] = $messages["days"][1];
$messages["Tuesday"] = $messages["days"][2];
$messages["Wednesday"] = $messages["days"][3];
$messages["Thursday"] = $messages["days"][4];
$messages["Friday"] = $messages["days"][5];
$messages["Saturday"] = $messages["days"][6];
$messages["Sunday"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "So", "Mo", "Di", "Mi", "Do", "Fr", "Sa" );
// -- compatibility, do not touch -- //
$messages["Mo"] = $messages["daysshort"][1];
$messages["Tu"] = $messages["daysshort"][2];
$messages["We"] = $messages["daysshort"][3];
$messages["Th"] = $messages["daysshort"][4];
$messages["Fr"] = $messages["daysshort"][5];
$messages["Sa"] = $messages["daysshort"][6];
$messages["Su"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "Januar", "Februar", "M&auml;rz", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember" );
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

$messages["message"] = "Nachricht";
$messages["error"] = "Fehler";

$messages["date"] = "Datum";

// miscellaneous texts
$messages["of"] = "von";
$messages["recently"] = "Aktuell";
$messages["comments"] = "Kommentare";
$messages["comment on this"] = "kommentieren";
$messages["my_links"] = "externe Links";
$messages["archives"] = "Archiv";
$messages["search"] = "Suche";
$messages["calendar"] = "Kalender";
$messages["editLinkCategories"] = "Kategorien";
$messages["search_s"] = "Suche";
$messages["link_tracker"] = "Link Tracker";
$messages["search_this_blog"] = "Dieses Weblog durchsuchen:";
$messages["about_myself"] = "Wer bin ich?";
$messages["permalink_title"] = "Permanenter Link zum Archiv";
$messages["permalink"] = "Permalink";
$messages["posted_by"] = "geschrieben von";
$messages["on_the"] = "am";
$messages["page"] = "Seite";
$messages["posted"] = "ver&ouml;ffentlicht";

$messages["reply"] = "antworten";

// add comment form
$messages["add_comment"] = "Artikel kommentieren";
$messages["comment_topic"] = "Betreff: ";
$messages["comment_text"] = "Text: ";
$messages["comment_username"] = "Ihr Name: ";
$messages["comment_email"] = "Ihre E-Mail Addresse (wenn vorhanden): ";
$messages["comment_url"] = "Ihre Homepage (wenn vorhanden): ";
$messages["comment_send"] = "absenden";
$messages["comment_added"] = "Kommentar hinzugef&uuml;gt.";
$messages["comment_add_error"] = "Fehler beim ";

$messages["article_does_not_exist"] = "Dieser Artikel existiert nicht.";
$messages["no_posts_found"] = "Keine Artikel gefunden.";
$messages["user_has_no_posts_yet"] = "Der Benutzer hat noch keine Artikel ver&ouml;ffentlicht.";

$messages["info_about_myself"] = "Einige Informationen &uuml;ber mich...";
$messages["back"] = "zur&uuml;ck";

$messages["back_top"] = "zur&uuml;ck nach oben";

$messages["post"] = "Artikel";

$messages["trackbacks_for_article"] = "Trackbacks f&uuml;r diesen Artikel";
$messages["trackback_excerpt"] = "Auszug";
$messages["trackback_weblog"] = "Weblog";

$messages["search_results"] = "Suchergebnisse";
$messages["search_matching_results"] = "Die folgenden Artikel entsprechen Ihrer Suchanfrage: ";
$messages["search_no_matching_posts"] = "Es wurden keine Artikel gefunden.";

$messages["see_all_link"] = "Klicken Sie hier um alle bisher ver&ouml;ffentlichten Nachrichten zu sehen.";

$messages["read_more"] = "&nbsp;&nbsp;...weiter";

$messages["anonymous_poster"] = "anonym";

$messages["syndicate"] = "SYNDICATE";

$messages["main"] = "&Uuml;bersicht";

////// error messages /////
$messages["error_fetching_article"] = "Der angegebene Artikel kann nicht gefunden werden.";
$messages["error_fetching_articles"] = "Die angegebenen Artikel k&ouml;nnen nicht gefunden werden.";
$messages["error_trackback_no_trackback"] = "F&uuml;r diesen Artikel wurden keine Trackbacks gefunden.";
$messages["error_incorrect_article_id"] = "Die Artikel-ID ist nicht korrekt.";
$messages["error_incorrect_blog_id"] = "Die Weblog-ID ist nicht korrekt.";
$messages["error_comment_without_text"] = "Sie haben keinen Text eingegeben.";
$messages["error_comment_without_name"] = "Sie sollten zumindest Ihren Namen oder Nick angeben.";
$messages["error_adding_comment"] = "Beim Hinzuf&uuml;gen des Kommentars ist ein Fehler in der Datenbank aufgetreten.";
$messages["error_incorrect_parameter"] = "Falsche Parameter.";
$messages["error_parameter_missing"] = "Es fehlt ein Parameter f&uuml;r diese Anfrage.";
$messages["error_blog_has_no_links"] = "Dieses Weblog hat bisher keine Links.";
$messages["error_comments_not_enabled"] = "Die M&ouml;glichkeit Kommentare hinzuzuf&uuml;gen wurde f&uuml;r diese Site gesperrt.";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////


////// help messages for the administration interface /////
$messages["help_newPost"] = "<p>Hier k&ouml;nnen Sie neue Artikel zu Ihrem Journal hinzuf&uuml;gen. Sie m&uuml;ssen f&uuml;r 
jeden Artikel ein Betreff und Text eingeben. Wenn Sie die Arbeit am Artikel beenden m&ouml;chten, dr&uuml;cken 
Sie auf '<b>Artikel hinzuf&uuml;gen</b>' um ihn in der Datenbank zu speichern. Beachten Sie, dass Sie den Status 
des Artikels auf '<b>ver&ouml;ffentlicht</b>' &auml;ndern m&uuml;ssen, damit er auf der &Uuml;bersichtsseite erscheint. Benutzen 
Sie den Status '<b>Entwurf</b>', wenn Sie den Artikel noch nicht ver&ouml;ffentlichen m&ouml;chten, er aber in der 
Datenbank gespeichert werden soll. Sie k&ouml;nnen die Arbeit an diesen Artikel dann jederzeit fortsetzen 
und ihn sp&auml;ter ver&ouml;ffentlichen.</p>
<p>Unter '<b>Kategorien</b>' k&ouml;nnen Sie Artikel jeder der Kategorien zuordnen, die Sie zuvor erstellt 
haben. </p>
<p>Wenn Sie eine E-Mail Benachrichtigung w&uuml;nschen, falls Kommentare zu Ihrem Artikel ver&ouml;ffentlicht werden,
markieren Sie bitte die entsprechende Auswahlbox.</p>
<p>Wenn Sie die Auswahlbox '<b>Trackback Pings senden</b>' markieren, wird Ihr Artikel nach Links gescannt, und Sie 
haben anschlie&szlig;end die M&ouml;glichkeit auszuw&auml;hlen, zu welchen Sie Pings senden m&ouml;chten.</p>";

$messages["addPost"] = "<p>Ihre Nachricht wurde erfolgreich in der Datenbank gespeichert. Sie k&ouml;nnen nun w&auml;hlen,
welchen Hosts Sie Trackback Pings senden m&ouml;chten, so dass der Autor des anderen Artikels wei&szlig;, dass Sie &uuml;ber 
seinen Artikel geschrieben haben, und er den Ping zur&uuml;ckverfolgen kann.</p>";

$messages["help_editPosts"] = "<p>Klicken Sie auf die &Uuml;berschrift eines Artikels, um diesen zu bearbeiten. Sie k&ouml;nnen 
Ihre Artikel zuvor nach Kategorie, Status, oder Autor filtern. Wenn Sie auf die Anzahl der Kommentare klicken, 
bekommen Sie Zugang zu den entsprechenden Kommentaren. F&uuml;r diese k&ouml;nnen Sie neben den &ouml;ffentlichen Informationen 
auch die IP-Adresse einsehen. In der Statistik sehen Sie z.B. wie h&auml;ufig ein Artikel aufgerufen wurde, von wo aus 
ein Link gesetzt wurde oder ob Trackbackpings empfangen wurden.</p>";

$messages["editPosts"] = "Hier k&ouml;nnen Sie in Ihrem Journal gespeichert Artikel bearbeiten. Wenn die Bearbeitung 
abgeschlossen ist, klicken Sie auf 'speichern', um die &Auml;nderungen zu sichern. M&ouml;chten Sie einen zuvor als Entwurf 
gespeicherten Artikel ver&ouml;ffentlichen, denken Sie daran, den Status von 'Entwurf' auf 'ver&ouml;ffentlicht' zu &auml;ndern.</p>";

$messages["editComments"] = "<p>Hier finden Sie alle Kommentare zum ausgew&auml;hlten Artikel. Kommentare k&ouml;nnen nicht 
bearbeitet sondern nur gel&ouml;scht werden. Das einzige Pflichtfeld beim kommentieren eines Ihrer Artikel ist das 
Feld '<b>Ihr Name</b>'. Es ist also m&ouml;glich, dass die Felder E-Mail Adresse und URL leer sind. Im Feld IP Adresse 
finden Sie die IP Adresse, von der aus der Kommentar geschrieben wurde.</p>
<p>Sie k&ouml;nnen soviel Kommentare gleichzeitig l&ouml;schen, wie Sie m&ouml;chten. W&auml;hlen Sie die entsprechenden Checkboxen aus 
und klicken Sie anschlie&szlig;end auf '<b>ausgew&auml;hlte l&ouml;schen</b>'.</p>";

$messages["postStats"] = "<p>Hier finden Sie die Statistik des ausgew&auml;hlten Artikels. Die Anzahl der Aufrufe gibt an, 
wie h&auml;ufig ein bestimmter Artikel aufgerufen wurde. Beachten Sie jedoch, dass nur direkte Aufrufe gez&auml;hlt werden,
d.h. es wird nicht erfasst, wie h&auml;ufig ein Artikel auf der &Uuml;bersichtsseite gelesen wurde.</p>
<p>Unter 'Referers' sehen Sie von welchen Seiten die Leser des Artikels zu Ihnen gelangt sind, und die 'Trackbacks'
zeigen Ihnen Informationen &uuml;ber gesetzte Trackback-Pings.</p>";

$messages["help_editArticleCategories"] = "<p>Hier sehen Sie eine Liste mit allen Artikel Kategorien, die 
bisher erstellt worden sind. Bevor Sie einen Artikel hinzuf&uuml;gen k&ouml;nnen, mu&szlig; mindestens eine Kategorie 
eingerichtet sein. Eine Kategorie, der Artikel zugeordnet sind, kann folglich auch nicht gel&ouml;scht 
werden. Um eine leere Kategorie zu l&ouml;schen, markieren Sie die entsprechende Checkbox und klicken Sie
anschlie&szlig;end auf '<b>ausgew&auml;hlte l&ouml;schen</b>'.</p>";

$messages["help_newArticleCategory"] = "<p>Hier k&ouml;nnen Sie eine neue Artikel-Kategorie f&uuml;r Ihr Weblog erstellen.
Geben Sie einen Namen  ein und klicken Sie anschlie&szlig;end auf 'Kategorie hinzuf&uuml;gen'. Einer einmal erstellten 
Kategorie k&ouml;nnen Sie beliebig viele Artikel (auch &auml;ltere) zuordnen.</p>";

$messages["help_editLinks"] = "<p>Dies ist die Liste mit allen in der Datenbank gespeicherten Links. Wie die
Artikel, k&ouml;nnen auch die Links verschiedenen Kategorien zugeordnet werden. F&uuml;r jeden Link sehen Sie in 
der Liste den Namen, den URL und die Kategorie. Wenn Sie auf den Namen klicken, k&ouml;nnen Sie auch die 
Beschreibung, die als Tooltip angezeigt wird, &auml;nden.</p>";

$messages["help_newLink"] = "<p>Hier k&ouml;nnen Sie Links hinzuf&uuml;gen. Sie m&uuml;ssen minddestens einen Namen und den URL 
angeben. Die Beschreibung ist nicht erforderlich, aber n&uuml;tzlich - sie wird als Tooltip angezeigt, wenn der 
Beucher mit der Maus &uuml;ber den entsprechenden Link f&auml;hrt.</p>";

$messages["help_editLinkCategories"] = "<p>Hier sehen Sie alle eingerichteten Link Kategorien. Wie bei 
den Artikeln m&uuml;ssen Sie auch f&uuml;r die Links mindestens eine Kategorie erstellt haben um Links 
hinzuf&uuml;gen zu k&ouml;nnen.</p>";

$messages["help_newLinkCategory"] = "<p>Um eine neue Link Kategorie zu erstellen, ben&ouml;tigen Sie lediglich 
einen beschreibenden Namen. Einer einmal erstellten Kategorie lassen sich beliebig viele Links 
zuordnen.</p>";

$messages["help_blogSettings"] = "   <p>Hier k&ouml;nnen Sie zentral Einstellungen zu Erscheinungsbild und 
Verhalten Ihres Weblogs ver&auml;ndern: <ul>
<li><b>Permanenter Link zu diesem Weblog</b>: Der URL unter dem Ihr Weblog erreichbar ist und der als 
permanenter Link benutzt werden kann. Er kann nicht ver&auml;ndert werden.</li>
<li><b>Weblogname</b>: Der Name des Weblogs - w&auml;hlen Sie eine kurze beschreibende &Uuml;berschrift f&uuml;r Ihr 
Weblog. Wenn Sie die Standardtemplates nutzen, wird dieser Name oben auf jeder Seite angezeigt.</li>
<li><b>L&auml;ngere Beschreibung f&uuml;r dieses Weblog</b>: In diesem Textfeld k&ouml;nnen Sie eine l&auml;ngere Beschreibung 
f&uuml;r Ihr Weblog eingeben. Diese kann auf einigen Seiten als Zusatzinformation eingeblendet werden. Wenn 
Sie das Feld nicht ben&ouml;tigen, k&ouml;nnen Sie es einfach freilassen.</li>
<li><b>Spracheinstellungen</b>: Hier k&ouml;nnen Sie die Sprache des Weblogs einstellen. In dieser Sprache werden
dann die Standardtexte (nicht Ihre Artikel!) und Formatangaben (z.B. Datum und Uhrzeit) angezeigt.</li>
<li><b>Eintr&auml;ge auf der &Uuml;bersichtsseite</b>: Hier k&ouml;nnen Sie angeben, wieviele Artikel auf der Startseite 
angezeigt werden sollen. Beachten Sie, das sich die Ladezeit der Seite mit der Anzahl der Artikel erh&ouml;ht. 
Mindesteinstellung ist 1.</li>
<li><b>Als aktuell angezeigte Eintr&auml;ge</b>: Hiermit stellen Sie ein, wieviel Artikel als aktuelle Artikel angezeigt
werden. Wenn Sie die Standardtemplates nutzen, werden diese mit ihrer &Uuml;berschrift auf der &Uuml;bersichtsseite verlinkt.</li>
<li><b>Designtemplate</b>: pLog erlaubt einen schnellen Designwechsel mittels Templates. Sie k&ouml;nnen zwischen 
verschiedenen Templates w&auml;hlen, die den gleichen Inhalt in einem jeweils anderem Design anzeigen.</li>
<li><b>Sollen lange Artikel abgeschnitten werden und ein 'weiter...'-Link eingef&uuml;gt werden?</b>: Wenn Sie hier 'ja' 
angeben, werden Ihre Artikel auf der &Uuml;bersichtsseite nach einer bestimmten Anzahl Zeichen (siehe folgende Einstellung) 
abgeschnitten und ein 'weiter'-Link zum kompletten Artikel wird eingef&uuml;gt. Allerdings kann es einige Probleme bei der 
Darstellung geben, falls Sie sehr viel HTML Code in Ihren artikeln nutzen.</li>
<li><b>Nach wieviel Zeichen soll ein Artikel abgeschnitten werden?</b>: Geben Sie hier an, nach wie vielen Zeichen Ihre 
Artikel abgeschnitten, und entsprechende '...weiter'-Links eingef&uuml;gt werden sollen. Diese Einstellung hat nur Auswirkungen, 
wenn Sie die vorherige Funktion aktiviert haben.</li>
<li><b>Soll die WYSIWYG-Bearbeitung der Artikel erlaubt werden?</b>: Aktivieren Sie diese Funktion um bereits beim Erstellen 
Ihrer Artikel das Aussehen beurteilen zu k&ouml;nnen. Nur m&ouml;glich mit Internet Explorer ab Version 5.5 oder Mozilla ab 
Version 1.3b.</li>
<li><b>Kommentare eralauben</b>: Aktivieren oder deaktivieren Sie diese Funktion, um Ihren Besuchern zu erlauben/verbieten 
Kommentare zu Ihren Artikeln hinzuzuf&uuml;gen. Diese Einstellung gilt f&uuml;r alle Benutzer und alle Artikel.</li>
</ul></p>";

$messages["help_userSettings"] = "<p>Hier k&ouml;nnen Sie Ihr Benutzerprofil anpassen. Ihren Benutzernamen k&ouml;nnen Sie
nicht &auml;ndern.
<ul><li><b>Kennwort, Kennwort best&auml;tigen</b>: Wenn Sie Ihr Kennwort &auml;ndern m&ouml;chten, geben Sie das neue 
Kennwort bitte in das erste Feld ein. Sie m&uuml;ssen das neue Kennwort aus Sicherheitsgr&uuml;nden im zweiten Feld 
best&auml;tigen.</li>
<li><b>E-Mail Adresse</b>: Geben Sie ein g&uuml;ltige E-Mail Adresse ein, wenn Sie z.B. Benachrichtigungen &uuml;ber 
neue Kommentare erhalten m&ouml;chten. Diese E-Mail Adresse wird nur f&uuml;r interne Zwecke benutzt und ist nicht 
&ouml;ffentlich sichtbar.</li>
<li><b>Bio</b>: Hier k&ouml;nnen Sie einige Informationen &uuml;ber sich eingeben. Das Feld kann aber auch 
freigelassen werden.</li></ul></p>";

$messages["help_pluginCenter"] = "<p>Hier sehen Sie, welche Plugins installiert sind. F&uuml;r jedes Plugin 
ist der Autor, eine kurze Beschreibung und eine ID angegeben. Diese ID benutzen Sie bitte, um das 
Plugin in Ihre Templates einzubinden.</p>";

$messages["help_Stats"] = "<p>Hier k&ouml;nnen Sie sehen, von welchen Seiten Ihre Besucher zu Ihren Artikeln verwiesen 
worden sind. Die 'Artikel'-Spalte zeigt an, welcher Artikel, von welchem Verweis aus erreicht wurde. Der 
Wert '0' bedeutet einen direkten Aufruf des Artikels. Unter 'letzter Aufruf' sehen Sie, wann der Artikel zum letzten 
Mal vom jeweiligen Verweis aufgerufen wurde.</p>";

$messages["editArticleCategory"] = "<p>Geben Sie bitte einen neuen Namen f&uuml;r die Kategorie ein, die Sie
&auml;ndern m&ouml;chten.</p>";

$messages["editLink"] = "<p>Sie m&uuml;ssen mindestens Namen und URL f&uuml;r den Link angeben. Der Link mu&szlig; 
au&szlig;erdem einer Kategorie zugeordnet werden.</p>";

$messages["editLinkCategory"] = "<p>Geben Sie bitte einen neuen Namen f&uuml;r die Link Kategorie ein, die Sie
&auml;ndern m&ouml;chten.</p>";

$messages["blogSelect"] = "Bitte w&auml;hlen Sie eine Aktion aus.";

$messages["Error"] = "Beim Ausf&uuml;hren der gew&uuml;nschten Aktion ist ein Fehler aufgetreten. N&auml;here Informationen 
finden Sie auf der &Uuml;bersichtsseite.";

$messages["Message"] = "N&auml;here Informationen zu dieser Nachricht finden Sie im Hauptfenster.";

//////// strings for the administration interface ///////

$messages["admin_interface_title"] = "pLog Admin Interface";
$messages["administration"] = "Administration";
$messages["help"] = "Hilfe";
$messages["plog_help"] = "pLog Hilfe";
$messages["newPost"] = "Neuer Artikel";
$messages["editPosts"] = "Artikel";
$messages["editArticleCategories"] = "Kategorie";
$messages["admin_links"] = "Links";
$messages["editLinkCategories"] = "Link Kategorien";
$messages["settings"] = "Einstellungen";
$messages["Logout"] = "Logout";

// new post page
$messages["topic"] = "Betreff";
$messages["text"] = "Text";
$messages["category"]  = "Kategorien";
$messages["status"] = "Status";
$messages["post_status_draft"] = "Entwurf";
$messages["post_status_published"] = "ver&ouml;ffentlicht";
$messages["post_status_deleted"] = "gel&ouml;scht";
$messages["post_status_all"] = "Alle";
$messages["send_notification"] = "Ich m&ouml;chte benachrichtigt werden, sobald ein Kommentar hinzugef&uuml;gt wird.";
$messages["send_trackback_pings"] = "Links im Artikel suchen und Trackback Pings an die Links senden, die Trackback Pings unterst&uuml;tzen.";
$messages["add_post"] = "Artikel hinzufügen";

$messages["xmlrpc_ping_ok"] = "XML-RPC Ping ist korrekt gesendet worden an: ";
$messages["error_sending_xmlrpc_ping"] = "There was an error sending an XML-RPC Ping to ";
$messages["error_sending_xmlrpc_ping_message"] = "Die Fehlermeldung lautet: ";

$messages["preview"] = "Vorschau";
$messages["post_added"] = "Artikel ver&ouml;ffentlicht";
$messages["you_will_be_notified"] = "Sie werden benachrichtigt, sobald zu diesem Artikel Kommentare erscheinen.";
$messages["post_added_not_published"] = "Artikel gespeichert, aber nicht ver&ouml;ffentlicht";
$messages["error_adding_post"] = "Fehler beim Speichern des Artikels";
$messages["error_must_fill_all_fields"] = "Sei m&uuml;ssen alle Felder ausf&uuml;llen";
$messages["error_must_have_one_category"] = "Sie m&uuml;ssen mindestens eine Artikel-Kategorie eingerichtet haben,
bevor Sie einen Artikel hinzuf&uuml;gen k&ouml;nnen.";

// send trackbacks page
$messages["send_trackback_pings"] = "Trackback Pings senden";
$messages["links_found"] = "Die folgenden Links wurden in Ihrem Artikel gefunden. Bitte w&auml;hlen Sie diejenigen aus,
denen Sie einen Trackbackping zusenden m&ouml;chten (Beachten Sie, das dieses eine gewisse Zeit in Anspruch nehmen kann).";
$messages["trackbacks_no_urls_selected"] = "Es wurden keine URL's ausgew&auml;hlt und keine Trackback Pings gesendet.";
$messages["trackbacks_received_ok"] = "Die folgenden Hosts haben Ihren Trackbackping erfolgreich empfangen:";
$messages["trackbacks_no_trackback"] = "Die folgenden Links haben keinen g&uuml;ltigen Trackback URL: ";
$messages["trackbacks_problems_sending"] = "Beim Senden der Trackback Pings zu den folgenden Hosts gab es Schwierigkeiten.
Wenn Sie m&ouml;chten, k&ouml;nnen Sie es noch einmal versuchen.";
$messages["trackbacks_received_all_hosts"] = "Alle Hosts haben den Trackback Ping empfangen.";
$messages["ping_selected"] = "Ping an ausgew&auml;hlte Sites senden";

// edit posts
$messages["author"] = "Autor";
$messages["category_all"] = "Alle";
$messages["author_all"] = "Alle";
$messages["update"] = "speichern";
$messages["date"] = "Datum";
$messages["help_Stats"] = "Statistik";
$messages["delete"] = "L&ouml;schen";

$messages["delete_selected"] = "ausgew&auml;hlte l&ouml;schen";

// edit post
$messages["edit_post"] = "Artikel bearbeiten";
$messages["error_getting_post_to_update"] = "Beim Ausw&auml;hlen des Artikels ist ein Fehler aufgetreten.";
$messages["error_updating_post_in_database"] = "Beim Speichern des Artikels ist ein Fehler aufgetreten.";
$messages["post_successfully_updated"] = "Artikel erfolgreich ge&auml;ndert.";
$messages["notification_removed"] = "Die Benachrichtigung f&uuml;r diesen Artikel wurde gel&ouml;scht";

// post statistics
$messages["statistics_for_post"] = "Statistik f&uuml;r Artikel ";
$messages["error_fetching_post"] = "Beim Ausw&auml;hlen des Artikels ist ein Fehler aufgetreten.";
$messages["times_post_has_been_read"] = "Anzahl der Artikelaufrufe: ";
$messages["referers"] = "Referers";
$messages["id"] = "ID";
$messages["url"] = "URL";
$messages["hits"] = "Aufrufe";
$messages["trackbacks"] = "Trackbacks";

// post comments
$messages["error_fetching_comments"] = "Es wurden keine Kommentare zum Artikel gefunden.";
$messages["comments_for_post"] = "Kommentare zum Artikel: ";
$messages["email"] = "E-Mail";
$messages["ip_address"] = "IP Adresse";
$messages["error_no_comments_selected"] = "Es wurden keine Kommentare ausgew&auml;hlt.";
$messages["error_deleting_comment"] = "Beim L&ouml;schen des Kommentars ist ein Fehler aufgetreten";
$messages["comment_deleted_ok"] = "Kommentar mit Betreff \"%s\" erfolgreich gel&ouml;scht.";


// categories list
$messages["category_name"] = "Name";

// removing posts
$messages["post_cannot_be_deleted"] = "Artikel kann nicht gel&ouml;scht werden.";
$messages["no_posts_selected"] = "Es wurden keine Artikel ausgew&auml;hlt.";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "Fehler beim L&ouml;schen des Artikels: \"%s\" (id = %d)";
$messages["post_deleted_ok"] = "Artikel \"%2\$s\" erfolgreich gel&ouml;scht (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "Es wurden keine Kategorien ausgew&auml;hlt.";
$messages["error_category_has_articles"] = "Kategorie \"%s\" konnte nicht gel&ouml;scht werden weil ihr 
noch mindestens ein Artikel zugeordnet ist. L&ouml;schen Sie erst die entsprechenden Artikel und versuchen Sie es erneut.";
$messages["error_deleting_category"] = "Fehler beim L&ouml;schen der Kategorie \"%s\".";
$messages["category_deleted_ok"] = "Kategorie \"%s\" erfolgreich gel&ouml;scht.";

// add category
$messages["newArticleCategory"] = "Kategorie hinzuf&uuml;gen";
$messages["add_new_category_info"] = "Bitte w&auml;hlen Sie einen g&uuml;ltigen Namen f&uuml;r die neue Kategorie";
$messages["category_added_ok"] = "Kategorie erfolgreich hinzugef&uuml;gt.";
$messages["error_adding_article_category"] = "Beim Hinzuf&uuml;gen der Kategorie ist ein Fehler aufgetreten.";

// edit categories
$messages["edit_category"] = "Kategorie bearbeiten";
$messages["please_provide_valid_category_name"] = "Bitte w&auml;hlen Sie einen g&uuml;ltigen Namen f&uuml;r die neue Kategorie.";

// edit category
$messages["error_incorrect_category_id"] = "Falsche Kategorie-ID";

// update the category
$messages["error_fetching_category"] = "Beim Ausw&auml;hlen der Kategorie ist ein Fehler aufgetreten.";
$messages["error_updating_category"] = "Beim &Auml;ndern der Kategorie ist ein Fehler aufgetreten.";
$messages["error_empty_category_name"] = "Bitte w&auml;hlen Sie einen g&uuml;ltigen Namen f&uuml;r die Kategorie";
$messages["category_updated_ok"] = "Kategorie erfolgreich ge&auml;ndert.";

// edit links
$messages["link_name"] = "Name";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["category"];
$messages["link_description"] = "Beschreibung";
$messages["editLinks"] = "Links";

// edit a link
$messages["edit_link"] = "Link bearbeiten";
$messages["error_provide_name_and_url"] = "Sie m&uuml;ssen einen g&uuml;ltigen Namen und einen URL angeben.";
$messages["error_invalid_link_id"] = "Die Link-ID ist ung&uuml;ltig oder fehlt.";
$messages["error_fetching_link"] = "Beim Ausw&auml;hlen des Links ist ein Fehler aufgetreten.";
$messages["error_updating_link"] = "Beim &Auml;ndern des Links ist ein Fehler aufgetreten.";
$messages["link_updated_ok"] = "Link erfolgreich ge&auml;ndert.";
$messages["error_fetching_link_categories"] = "Beim Ausw&auml;hlen der Link-Kategorie ist ein Fehler aufgetreten.";

// add a link
$messages["add_new_link"] = "Link hinzuf&uuml;gen";
$messages["newLink"] = "Link hinzuf&uuml;gen";
$messages["error_adding_link"] = "Beim Hinzuf&uuml;gen des Links ist ein Fehler aufgetreten.";
$messages["link_added_ok"] = "Link erfolgreich hinzugef&uuml;gt.";
$messages["error_provide_name_and_url"] = "Sie m&uuml;ssen einen g&uuml;ltigen Namen und URL angeben.";
$messages["error_must_have_one_link_category"] = "Sie m&uuml;ssen mindestens eine Link-Kategorie eingerichtet haben,
bevor Sie einen Link hinzuf&uuml;gen k&ouml;nnen.";

// delete a link
$messages["error_no_links_selected"] = "Es wurden keine Links ausgew&auml;hlt.";
$messages["error_removing_link"] = "Beim L&ouml;schen des Links \"%s\" ist ein Fehler aufgetreten.";
$messages["link_deleted_ok"] = "Link \"%s\" wurde erfolgreich gel&ouml;scht.";

// edit link categories
$messages["newLinkCategory"] = "Link-Kategorie hinzuf&uuml;gen";
$messages["link_categories_help"] = "Sie m&uuml;ssen mindestens eine Link-Kategorie eingerichtet haben,
bevor Sie einen Link hinzuf&uuml;gen k&ouml;nnen.";
$messages["link_category_name"] = "Name";
$messages["link_category_links"] = "Links";

// new link category
$messages["new_link_category_info"] = "Link Kategorien sollen Ihnen helfen, einen &Uuml;berblick &uuml;ber Ihre 
Links zu bealten. In sp&auml;teren Versionen k&ouml;nnen Sie Ihre Links auch auf der &Uuml;bersichtsseite nach diesen Kategorien 
geordnet anzeigen lassen.";
$messages["newLinkCategory"] = "Link-Kategorie hinzuf&uuml;gen";
$messages["error_provide_link_category_name"] = "Sie m&uuml;ssen einen g&uuml;ltigen Namen f&uuml;r die Link-Kategorie angeben.";
$messages["error_adding_link_category"] = "Beim Hinzuf&uuml;gen der Link-Kategorie ist ein Fehler aufgetreten.";
$messages["link_category_added_ok"] = "Link-Kategorie erfolgreich hinzugef&uuml;gt.";

// edit link category
$messages["edit_link_category"] = "Link-Kategorie bearbeiten";
$messages["error_updating_link_category"] = "Beim &Auml;ndern der Link-Kategorie ist ein Fehler aufgetreten.";
$messages["link_category_updated_ok"] = "Link-Kategorie erfolgreich ge&auml;ndert.";
$messages["error_fetching_link_category"] = "Beim Ausw&auml;hlen der Link-Kategorie ist ein Fehler aufgetreten.";
$messages["error_incorrect_link_category_id"] = "Falsche ID f&uuml;r die Link-Kategorie";

// delete link categories
$messages["error_no_link_category_selected"] = "Es wurde keine Link-Kategorie ausgew&auml;hlt";
$messages["error_links_in_link_category"] = "Link-Kategorie \"%s\" konnte nicht gel&ouml;scht werden weil ihr 
noch mindestens ein Link zugeordnet ist. L&ouml;schen Sie erst die entsprechenden Links und versuchen Sie es erneut.";
$messages["error_removing_link_category"] = "Fehler beim Entfernen der Kategorie \"%s\".";
$messages["link_category_deleted_ok"] = "Link-Kategorie \"%s\" erfolgreich gel&ouml;scht.";
// this error is shown when for some reason the category could not be fetched from the database
// and we can't show its name
$messages["error_removing_link_category_2"] = "Fehler beim Entfernen der Kategorie mit der ID = %d";

// blog settings page
$messages["blogSettings"] = "Weblogeinstellungen";
$messages["userSettings"] = "Benutzereinstellungen";
$messages["pluginCenter"] = "Plugin Center";
$messages["Stats"] = "Statistiken";
$messages["blog_name"] = "Weblog Name";
$messages["long_blog_name"] = "L&auml;ngere Beschreibung f&uuml;r dieses Weblog";
$messages["language_used"] = "Spracheinstellungen";
$messages["items_main_page"] = "Eintr&auml;ge sollen auf der &Uuml;bersichtsseite: ";
$messages["items_as_recent"] = "Als \"aktuell\" angezeigte Eintr&auml;ge: ";
$messages["template_used"] = "W&auml;hlen Sie ein Template aus, dass das Design Ihres Weblogs bestimmt";
$messages["cut_posts"] = "Sollen lange Artikel abgeschnitten werden und ein \"...weiter\"-Link eingef&uuml;gt werden?";
$messages["cut_posts_after_characters"] = "Nach wieviel Zeichen soll ein Artikel abgeschnitten werden?";
$messages["enable_wysiwyg_edition"] = "Soll die WYSIWYG-Bearbeitung der Artikel (nur mit Internet Explorer ab 5.5 
und Mozilla ab 1.3b) erlaubt werden?";
$messages["enable_comments"] = "M&ouml;chten Sie Kommentare zu allen Artikeln erlauben?";
$messages["yes"] = "ja";
$messages["no"] = "Nein";
$messages["error_invalid_locale"] = "Ung&uuml;ltiger Wert f&uuml;r die Spracheinstellung";
$messages["error_incorrect_max_recent_items"] = "Sie m&uuml;ssen einen g&uuml;ltigen Wert f&uuml;r die Anzahl der Entr&auml;ge, die als 
\"aktuell\" angezeigt werden sollen, eingeben.";
$messages["error_incorrect_number_of_posts"] = "Sie m&uuml;ssen einen g&uuml;ltigen Wert f&uuml;r die Anzahl der Entr&auml;ge, die auf 
der Hauptseite angezeigt werden sollen, eingeben.";
$messages["error_incorrect_template"] = "Der Wert f&uuml;r das Template ist falsch.";
$messages["error_no_blog_name"] = "Sie m&uuml;ssen einen g&uuml;ltigen Namen f&uuml;r das Weblog eingeben.";
$messages["error_incorrect_show_more_threshold"] = "Sie m&uuml;ssen einen g&uuml;ltigen Wert f&uuml;r die Anzahl der Zeichen, nach 
denen ein Artikel abgeschnitten werden soll, eingeben.";
$messages["error_updating_settings"] = "Beim &Auml;ndern der Weblogeinstellungen ist ein Fehler aufgetreten.";
$messages["blog_settings_updated_ok"] = "Weblogeinstellungen wurden erfolgreich ge&auml;ndert.";
$messages["permanent_blog_url"] = "Permanenter Link zu diesem Weblog";

// user profile page
$messages["username"] = "Benutzername";
$messages["password"] = "Kennwort";
$messages["confirm_password"] = "Best&auml;tigen Sie das Kennwort";
$messages["email_address"] = "E-Mail Addresse";
$messages["bio"] = "Bio";
$messages["empty_no_change"] = "Lassen Sie die Felder frei, wenn Sie nichts &auml;ndern m&ouml;chten.";
$messages["user_settings_updated_ok"] = "Benutzereinstellungen wurden erfolgreich ge&auml;ndert.";
$messages["error_updating_user_settings"] = "Beim &Auml;ndern der Benutzereinstellungen ist ein Fehler aufgetreten.";
$messages["error_passwords_dont_match"] = "Entschuldigung, die Kennw&ouml;rter stimmen nicht &uuml;berein.";
$messages["error_incorrect_password"] = "Entschuldigung, das Kennwort ist falsch.";
$messages["error_incorrect_email_address"] = "Entschuldigung, die angegebene E-Mail Addresse ist ung&uuml;ltig.";

// plugin center page
$messages["plugins_available"] = "Dies ist eine Liste mit den f&uuml;r die Templates zur Verf&uuml;gung stehenden Plugins";
$messages["identifier"] = "ID";
$messages["description"] = "Beschreibung";
$messages["error_plugins_disabled"] = "Es werden auf dieser Site keine Plugins unterst&uuml;tzt.";

// statistics page
$messages["statistics_info"] = "Wenn die Artikel-ID auf 0 gesetzt ist, werden Besucher zur &Uuml;bersichtsseite und 
nicht zu einem bestimmten Artikel gef&uuml;hrt.";
$messages["article_id"] = "Artikel ID";
$messages["last_hit_date"] = "Datum des letzten Aufrufs";
$messages["error_fetching_referers"] = "Es konnten keine Links f&uuml;r diese Site gefunden werden.";

// login screen
$messages["login_page_title"] = "pLog Administrations-Interface";
$messages["login"] = "Login";
$messages["welcome_message"] = "Willkommen bei pLog";
$messages["error_incorrect_username_or_password"] = "Entschuldigung, falscher Benutzername oder falsches Kennwort.";
$messages["error_dont_belong_to_any_blog"] = "Entschuldigung, f&uuml;r Sie ist noch ein Weblog freigeschaltet.";
$messages["error_no_username_or_password"] = "Bitte geben Sie einen g&uuml;ltigen Benutzernamen und ein g&uuml;ltiges Kennwort ein.";
$messages["choose_one_blog"] = "F&uuml;r Sie sind folgende Weblogs freigeschaltet. Bitte w&auml;hlen Sie, wo Sie arbeiten m&ouml;chten.";
$messages["continue"] = "Fortsetzen";
$messages["logout_message"] = "Sie sind erfolgreich abgemeldet worden.";
$messages["logout_message_2"] = "<a href=\"admin.php\">Klicken Sie hier</a> um sich erneut anzumelden, oder
<a href=\"%1\$s\">hier um zum %2\$s</a> zu gehen.";
$messages["logout_title"] = "abgemeldet";
$messages["error_access_forbidden"] = "Zugang gesch&uuml;tzt, Sie m&uuml;ssen sich erst hier anmelden.";

/////
$messages["blogFilteredContent"] = $messages["filteredContent"];
$messages["newBlogFilteredContent"] = $messages["newFilteredContent"];
$messages["blogBlockedHosts"] = $messages["blockedHosts"];
$messages["newBlogBlockedHost"] = $messages["newBlockedHost"];
$messages["newBlogUser"] = $messages["createUser"];

//
// text of the post that will be added to each blog when they sign-up via the register.php script
//
$messages["register_default_category"] = "General";
$messages["register_default_article_text"] = "If you can read this, it means that your signup and registration was successful and that you can start blogging.";
$messages["register_default_article_topic"] = "Congratulations, it worked!";

//
// summary templates text
//

$messages["summary_title"] = "Blogs Summary";
$messages["summary_section_main"] = "Summary";
$messages["summary_section_main_link_title"] = "Main Page";
$messages["summary_section_register"] = "Register!";
$messages["summary_section_register_link_title"] = "Register a new blog";
$messages["summary_section_blog_list"] = "Blog list";
$messages["summary_section_blog_list_link_title"] = "Blogs hosted in this site";
$messages["summary_section_faq"] = "F.A.Q.";
$messages["summary_section_faq_link_title"] = "Frequently Asked Questions";
$messages["summary_welcome_title"] = "Welcome to pLog!";

$messages["summary_most_active_blogs"] = "Most active blogs";
$messages["summary_newest_blogs"] = "Newest blogs";
$messages["summary_most_commented_articles"] = "Most commented articles";
$messages["summary_most_read_articles"] = "Most read articles";

$messages["summary_faq"] = "Frequently Asked Questions";
$messages["summary_faq_question"] = "What is this?";
$messages["summary_faq_description"] = "You could use this section to add some frequently asked questions about your service. It is all up to you and this is only a suggestion so feel free to make changes :) Edit the file templates/summary/faq.template to change the contents of this page.";

$messages["summary_login"] = "Log-in";
$messages["summary_other_stuff"] = "Other Stuff";
$messages["summary_plog_logo"] = "How about a logo here?";

$messages["summary_blog_list"] = "Blog List";
$messages["summary_last_updated"] = "Last Updated";
$messages["summary_author"] = "Author";
$messages["summary_articles"] = "articles";
$messages["summary_reads"] = "reads";

$messages["summary_welcome_message"] = "<h4 class=\"question\">What is this site?</h4>
                            <p>You could use this area to give some information about this site.</p>

                            <ul>
                                <li>See the following links for more information: <br />
                                    <a href=\"summary.php?op=Faq\">FAQ</a></li>
                                <li><a href=\"register.php\">Register a new blog here</a></li>
                            </ul>";

$messages["summary_latest_posts"] = "Latest Posts";
$messages["summary_in"] = "in";
$messages["summary_posted_by"] = "Posted by";

//
// register templates text
//
$messages["register_error"] = "Error";
$messages["register_error_message"] = "There has been an error:";
$messages["register_errors"] = "There were some errors during the process, please have a look:";
$messages["register_new_blog_step1_title"] = "Register a new blog (1/3)";
$messages["register_step1_fill_in_title"] = "Please fill in this form to create a new blog in this site.";
$messages["register_step1_description"] = "<p>
First of all, we need to create a user for you. Please choose a username (which should not exist in the system but if it does, we will let you know) This user will be considered as the owner of the blog and will have full powers over it.
</p>
<p>
And please do not forget your password! There is no way it can be recovered once you have signed up.
</p>";
$messages["register_step1_legend"] = "Please fill in the following fields";
$messages["register_username"] = "Username:";
$messages["register_password"] = "Password:";
$messages["register_password_confirmation"] = "Confirm password:";
$messages["register_email"] = "Email address:";
$messages["register_email_comment"] = "(user for notifications of new comments)";

$messages["register_next"] = "Next &raquo;";

$messages["register_new_blog_step2_title"] = "Register a new blog (2/3)";
$messages["register_user_created"] = "Your new user has been successfully created! Now we can proceed and create your new personal blog.";
$messages["register_step2_description"] = " <p>
  The only thing we need to know is the name you would like to give to your diary. Later on once this
  process is complete, you will be able to change things like its description, but now that is not needed.
 </p>";
$messages["register_step2_blog_name"] = "Name of your new blog:";

$messages["register_new_blog_step4_title"] = "Thank you! (3/3)";
$messages["register_new_blog_step3_description"] = "
 <p>
    Registration is complete. Your new user and diary have been registered successfully in this site,
    and you can log in now into your blog and start blogging!
 </p>";
$messages["register_step4_admin_link"] = "
  <p>
    Click here <a href=\"admin.php\">to go the admin interface</a>, if you want to start blogging.
 </p>";
$messages["register_step4_blog_link1"] = "
 <p>
    Or click <a href=\"";

$messages["register_step4_blog_link2"] = "
\">here to go and see your new blog</a>.
 </p>";

$messages["register_step4_final_message"] = "
 <p>
  Happy blogging!
 </p>";


$messages["register_error_incorrect_username"] = "Incorrect user name, please try again.<br/>";
$messages["register_error_incorrect_email"] = "Email address is invalid, please try again. <br/>";
$messages["register_error_user_already_exist"] = "There is already a user with that name, please try again.<br/>";
$messages["register_error_incorrect_password"] = "Password is invalid, please try again. <br/>";
$messages["register_error_passwords_dont_match"] = "Passwords do not match, please try again. <br/>";
$messages["register_error_adding_user"] = "Error adding the user: ";
$messages["register_error_creating_blog"] = "There was an error creating the new blog";
$messages["register_error_blog_name"] = "You should choose a better name for the blog.<br/>" ;
?>
