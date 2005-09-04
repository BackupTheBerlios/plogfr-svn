<?php
// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'iso-8859-1';
$messages['locale_description'] = 'Deutsche Sprachdatei für pLog';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %H:%M';

// days of the week
$messages['days'] = Array( 'Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag' );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( 'So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages['months'] = Array( 'Januar', 'Februar', 'M&auml;rz', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember' );
// -- compatibility, do not touch -- //
$messages['January'] = $messages['months'][0];
$messages['February'] = $messages['months'][1];
$messages['March'] = $messages['months'][2];
$messages['April'] = $messages['months'][3];
$messages['May'] = $messages['months'][4];
$messages['June'] = $messages['months'][5];
$messages['July'] = $messages['months'][6];
$messages['August'] = $messages['months'][7];
$messages['September'] = $messages['months'][8];
$messages['October'] = $messages['months'][9];
$messages['November'] = $messages['months'][10];
$messages['December'] = $messages['months'][11];

$messages['message'] = 'Nachricht';
$messages['error'] = 'Fehler';
$messages['date'] = 'Datum';

// miscellaneous texts
$messages['of'] = 'von';
$messages['recently'] = 'Aktuell';
$messages['comments'] = 'Kommentare';
$messages['comment on this'] = 'Kommentare';
$messages['my_links'] = 'meine Links';
$messages['archives'] = 'Archiv';
$messages['search'] = 'suchen';
$messages['calendar'] = 'Kalender';
$messages['search_s'] = 'Suche';
$messages['search_this_blog'] = 'Dieses Weblog durchsuchen:';
$messages['about_myself'] = '&Uuml;ber mich';
$messages['permalink_title'] = 'Permanenter Link zum Archiv';
$messages['permalink'] = 'Permalink';
$messages['posted_by'] = 'geschrieben von';
$messages['reply'] = 'antworten';

// add comment form
$messages['add_comment'] = 'Artikel kommentieren';
$messages['comment_topic'] = 'Betreff';
$messages['comment_text'] = 'Text: ';
$messages['comment_username'] = 'Ihr Name';
$messages['comment_email'] = 'E-Mail Addresse (wenn vorhanden)';
$messages['comment_url'] = 'Homepage (wenn vorhanden)';
$messages['comment_send'] = 'absenden';
$messages['comment_added'] = 'Kommentar hinzugef&uuml;gt.';
$messages['comment_add_error'] = 'Beim Hinzuf&uuml;gen des Kommentars ist ein Fehler aufgetreten.';
$messages['article_does_not_exist'] = 'Dieser Artikel existiert nicht.';
$messages['no_posts_found'] = 'Es wurden keine Artikel gefunden.';
$messages['user_has_no_posts_yet'] = 'Der Benutzer hat noch keine Artikel ver&ouml;ffentlicht.';
$messages['back'] = 'zur&uuml;ck';
$messages['post'] = 'Artikel';
$messages['trackbacks_for_article'] = 'Trackbacks f&uuml;r diesen Artikel';
$messages['trackback_excerpt'] = 'Auszug';
$messages['trackback_weblog'] = 'Weblog';
$messages['search_results'] = 'Suchergebnisse';
$messages['search_matching_results'] = 'Die folgenden Artikel entsprechen Ihrer Suchanfrage: ';
$messages['search_no_matching_posts'] = 'Es wurden keine Artikel gefunden.';
$messages['read_more'] = '(weiter)';
$messages['syndicate'] = 'Meta';
$messages['main'] = '&Uuml;bersicht';
$messages['about'] = '&Uuml;ber';
$messages['download'] = 'Download';

////// error messages /////
$messages['error_fetching_article'] = 'Der gesuchte Artikel kann nicht gefunden werden.';
$messages['error_fetching_articles'] = 'F&uuml;r diese Auswahl k&ouml;nnen keine Artikel angezeigt werden.';
$messages['error_trackback_no_trackback'] = 'F&uuml;r diesen Artikel wurden keine Trackbacks gefunden.';
$messages['error_incorrect_article_id'] = 'Die Artikel-ID ist nicht korrekt.';
$messages['error_incorrect_blog_id'] = 'Die Weblog-ID ist nicht korrekt.';
$messages['error_comment_without_text'] = 'Sie haben keinen Text eingegeben.';
$messages['error_comment_without_name'] = 'Sie sollten zumindest Ihren Namen oder Nick angeben.';
$messages['error_adding_comment'] = 'Beim Hinzuf&uuml;gen des Kommentars ist ein Fehler in der Datenbank aufgetreten.';
$messages['error_incorrect_parameter'] = 'Falsche Parameter.';
$messages['error_parameter_missing'] = 'Es fehlt ein Parameter f&uuml;r diese Anfrage.';
$messages['error_comments_not_enabled'] = 'Die M&ouml;glichkeit Kommentare hinzuzuf&uuml;gen wurde f&uuml;r diese Site gesperrt.';
$messages['error_incorrect_search_terms'] = 'Dies ist keine g&uuml;ltige Suchanfrage.';
$messages['error_no_search_results'] = 'Es wurden keine den Suchbegriffen entsprechenden Ergebnisse gefunden.';
$messages['error_no_albums_defined'] = 'In diesem Blog sind keine Alben verf&uuml;gbar.';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Login';
$messages['welcome_message'] = 'Willkommen bei pLog';
$messages['error_incorrect_username_or_password'] = 'Sie haben einen ung&uuml;ltigen Benutzernamen oder ein ung&uuml;ltiges Kennwort eingegeben. Achten Sie auch auf korrekte Gro&szlig;- und Kleinschreibung.';
$messages['error_dont_belong_to_any_blog'] = 'Entschuldigung, f&uuml;r Sie ist noch kein Weblog freigeschaltet.';
$messages['logout_message'] = 'Sie sind erfolgreich abgemeldet worden.';
$messages['logout_message_2'] = 'Klicken Sie <a href="%1$s">hier</a> um zu "%2$s" zu gelangen.</a>.';
$messages['error_access_forbidden'] = 'Der Zugang ist gesch&uuml;tzt, Sie m&uuml;ssen sich erst <a href="admin.php">anmelden</a>.';
$messages['username'] = 'Benutzername';
$messages['password'] = 'Kennwort';

// dashboard
$messages['dashboard'] = '&Uuml;bersicht';
$messages['recent_articles'] = 'aktuelle Artikel';
$messages['recent_comments'] = 'aktuelle Kommentare';
$messages['recent_trackbacks'] = 'aktuelle Trackbacks';
$messages['blog_statistics'] = 'Blog Statistik';
$messages['total_posts'] = 'Artikel insgesamt';
$messages['total_comments'] = 'Kommentare insgesamt';
$messages['total_trackbacks'] = 'Trackbacks insgesamt';
$messages['total_viewed'] = 'insgesamt gelesene Artikel';
$messages['in'] = 'In';

// menu options
$messages['newPost'] = 'Neuer Artikel';
$messages['Manage'] = 'Verwalten';
$messages['managePosts'] = 'Artikel verwalten';
$messages['editPosts'] = 'Artikel';
$messages['editArticleCategories'] = 'Kategorien';
$messages['newArticleCategory'] = 'Neue Kategorie';
$messages['manageLinks'] = 'Links verwalten';
$messages['editLinks'] = 'Links';
$messages['newLink'] = 'Neuer Link';
$messages['editLink'] = 'Link bearbeiten';
$messages['editLinkCategories'] = 'Link Kategorien';
$messages['newLinkCategory'] = 'Neue Linkkategorie';
$messages['editLinkCategory'] = 'Linkkategorie bearbeiten';
$messages['manageCustomFields'] = 'Benutzerdefinierte Felder verwalten';
$messages['blogCustomFields'] = 'Benutzerdefinierte Felder';
$messages['newCustomField'] = 'Neues benutzerdefiniertes Feld';
$messages['resourceCenter'] = 'Ressourcen';
$messages['resources'] = 'Ressourcen';
$messages['newResourceAlbum'] = 'Neues Album';
$messages['newResource'] = 'Neue Ressource';
$messages['controlCenter'] = 'Kontrollzentrum';
$messages['manageSettings'] = 'Einstellungen';
$messages['blogSettings'] = 'Blogeinstellungen';
$messages['userSettings'] = 'Benutzereinstellungen';
$messages['pluginCenter'] = 'Pluginzentrum';
$messages['Stats'] = 'Statistiken';
$messages['manageBlogUsers'] = 'Blogbenutzer verwalten';
$messages['newBlogUser'] = 'Neuer Blogbenutzer';
$messages['showBlogUsers'] = 'Blogbenutzer';
$messages['manageBlogTemplates'] = 'Blogtemplates';
$messages['newBlogTemplate'] = 'Neues Blogtemplate';
$messages['blogTemplates'] = 'Blogtemplates';
$messages['adminSettings'] = 'Administration';
$messages['Users'] = 'Benutzer';
$messages['createUser'] = 'Benutzer erstellen';
$messages['editSiteUsers'] = 'Benutzer';
$messages['Blogs'] = 'Blogs verwalten';
$messages['createBlog'] = 'Blog erstellen';
$messages['editSiteBlogs'] = 'Blogs';
$messages['Locales'] = 'Sprachdateien verwalten';
$messages['newLocale'] = 'Neue Sprachdatei';
$messages['siteLocales'] = 'Sprachdateien';
$messages['Templates'] = 'Templates verwalten';
$messages['newTemplate'] = 'Neues Template';
$messages['siteTemplates'] = 'Templates';
$messages['GlobalSettings'] = 'Globale Einstellungen';
$messages['editSiteSettings'] = 'globale Einstellungen verwalten';
$messages['summarySettings'] = '&Uuml;bersicht Einstellungen';
$messages['templateSettings'] = 'Templates';
$messages['urlSettings'] = 'URLs';
$messages['emailSettings'] = 'E-Mail';
$messages['uploadSettings'] = 'Uploads';
$messages['helpersSettings'] = 'Externe Tools';
$messages['interfacesSettings'] = 'Interfaces';
$messages['securitySettings'] = 'Sicherheit';
$messages['bayesianSettings'] = 'Bayes\'scher Filter';
$messages['resourcesSettings'] = 'Ressourcen';
$messages['searchSettings'] = 'Suche';
$messages['cleanUpSection'] = 'Aufr&auml;umen';
$messages['cleanUp'] = 'aufr&auml;umen';
$messages['editResourceAlbum'] = 'Album editiern';
$messages['resourceInfo'] = 'Ressource editieren';
$messages['editBlog'] = 'Blog editieren';
$messages['Logout'] = 'Logout';

// new post
$messages['topic'] = '&Uuml;berschrift';
$messages['topic_help'] = '&Uuml;berschrift des Artikels';
$messages['text'] = 'Text';
$messages['text_help'] = 'Text des Artikels. Dieser Text wird auf der Startseite angezeigt';
$messages['extended_text'] = 'Erweiteter Text';
$messages['extended_text_help'] = 'Erweiterter Text des Artikels. Dieser Text wird in der Detailansicht, falls aktivert, angezeigt. In den Blogeinstellungen finden Sie n&auml;here Informationen.';
$messages['post_slug'] = 'Slug';
$messages['post_slug_help'] = 'Der Slug wird verwendet, um dauerhafte Links zu erstellen.';
$messages['date'] = 'Datum';
$messages['post_date_help'] = 'Datum der Artikelver&ouml;ffentlichung.';
$messages['status'] = 'Status';
$messages['post_status_help'] = 'W&auml;hlen Sie, ob der Artikel direkt ver&ouml;ffentlicht, als Entwurf gespeichert oder gel&ouml;scht werden soll.';
$messages['post_status_published'] = 'ver&ouml;ffentlicht';
$messages['post_status_draft'] = 'Entwurf';
$messages['post_status_deleted'] = 'gel&ouml;scht';
$messages['categories'] = 'Kategorien';
$messages['post_categories_help'] = 'W&auml;hlen Sie, in welche Kategorien der Artikel eingeordnet werden soll. Mithilfe der &lt;Strg&gt; Taste k&ouml;nnen Sie mehrere Kategorien gleichzeitig ausw&auml;hlen.';
$messages['post_comments_enabled_help'] = 'Kommentare erlauben';
$messages['send_notification_help'] = 'Benachrichtigung bei neuen Kommentaren';
$messages['send_trackback_pings_help'] = 'Trackbacks verschicken';
$messages['send_xmlrpc_pings_help'] = 'XMLRPC Pings verschicken';
$messages['save_draft_and_continue'] = 'Entwurf speichern';
$messages['preview'] = 'Vorschau';
$messages['add_post'] = 'eintragen';
$messages['error_saving_draft'] = 'Beim Speichern des Entwurfs trat ein Fehler auf.';
$messages['draft_saved_ok'] = 'Der Entwurf wurde erfolgreich gespeichert.';
$messages['error_sending_request'] = 'Beim Senden der Anfrage trat ein Fehler auf.';
$messages['error_no_category_selected'] = 'Bitte w&auml;hlen Sie mindestens eine Kategorie.';
$messages['error_missing_post_topic'] = 'Bitte geben Sie eine &Uuml;berschrift ein.';
$messages['error_missing_post_text'] = 'Sie haben keinen Artikeltext eingegeben.';
$messages['error_adding_post'] = 'Beim Speichern des Artikels trat ein Fehler auf.';
$messages['post_added_not_published'] = 'Der Artikel wurde erfolgreich hinzugef&uuml;gt aber nicht ver&ouml;ffentlicht.';
$messages['post_added_ok'] = 'Der Artikel wurde erfolgreich hinzugef&uuml;gt.';
$messages['send_notifications_ok'] = 'Sie werden bei jedem neuen Kommentar oder Trackback benachrichtigt.';

// send trackbacks
$messages['error_sending_trackbacks'] = 'Beim Senden der folgenden Trackbacks ist ein Fehler aufgetreten: ';
$messages['send_trackbacks_help'] = 'W&auml;hlen Sie die URL\'s, an die Sie Trackbacks senden m&ouml;chten. Stellen Sie sicher, dass die Seite Trackbacks unterst&uuml;tzt.';
$messages['send_trackbacks'] = 'Trackbacks senden' ;
$messages['ping_selected'] = 'Ping ausgew&auml;hlt';
$messages['trackbacks_sent_ok'] = 'Die Trackbacks wurden erfolgreich an die gew&auml;hlten Adressen gesendet.';

// posts page
$messages['show_by'] = 'Ordnen nach';
$messages['category'] = 'Kategorie';
$messages['author'] = 'Autor';
$messages['post_status_all'] = 'Alle';
$messages['author_all'] = 'Alle';
$messages['search_terms'] = 'Suchbegriffe';
$messages['show'] = 'anzeigen';
$messages['delete'] = 'l&ouml;schen';
$messages['actions'] = 'Aktionen';
$messages['all'] = 'Alle';
$messages['category_all'] = 'Alle';
$messages['error_incorrect_article_id'] = 'Falsche Artikel ID';
$messages['error_deleting_article'] = 'Beim L&ouml;schen des Artikels "%s" ist ein Fehler aufgetreten.';
$messages['article_deleted_ok'] = 'Artikel "%s" wurden erfolgreich gel&ouml;scht.';
$messages['articles_deleted_ok'] = '%s Artikel wurden erfolgreich gel&ouml;scht.';
$messages['error_deleting_article2'] = 'Beim L&ouml;schen des Artikels "%s" ist ein Fehler aufgetreten.';

// edit post page
$messages['update'] = 'aktualisieren';
$messages['editPost'] = 'Artikel bearbeiten';
$messages['error_fetching_post'] = 'Beim &Ouml;ffnen des Artikels ist ein Fehler aufgetreten.';
$messages['post_updated_ok'] = 'Der Artikel "%s" wurde erfolgreich aktualisiert.';
$messages['error_updating_post'] = 'Beim Aktualisieren des Artikels ist ein Fehler aufgetreten.';
$messages['notification_added'] = 'Sie werden bei neuen Kommentaren oder Trackbacks benachrichtigt.';
$messages['notification_removed'] = 'Es werden keine Benachrichtigungen bei neuen Kommentaren oder Trackbacks versendet.';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = 'Alle';
$messages['comment_status_spam'] = 'Spam';
$messages['comment_status_nonspam'] = 'Kein Spam';
$messages['error_fetching_comments'] = 'Es wurden keine Kommentare zum Artikel gefunden.';
$messages['error_deleting_comments'] = 'Es trat ein Fehler beim L&ouml;schen des Artikels auf oder es wurde kein Artikel ausgew&auml;hlt.';
$messages['comment_deleted_ok'] = 'Kommentar "%s" wurde erfolgreich gel&ouml;scht.';
$messages['comments_deleted_ok'] = '%s Kommentare wurden erfolgreich gel&ouml;scht.';
$messages['error_deleting_comment'] = 'Beim L&ouml;schen des Kommentars "%s" ist ein Fehler aufgetreten.';
$messages['error_deleting_comment2'] = 'Es gab einen Fehler beim L&ouml;schen des Kommentars "%s".';
$messages['editComments'] = 'Kommentare';
$messages['mark_as_spam'] = 'Als Spam markieren';
$messages['mark_as_no_spam'] = 'Als "kein Spam" markieren';
$messages['error_incorrect_comment_id'] = 'Es existiert kein Kommentar mit dieser ID.';
$messages['error_marking_comment_as_spam'] = 'Beim Markieren des Kommentars als Spam trat ein Fehler auf.';
$messages['comment_marked_as_spam_ok'] = 'Der Kommentar wurde erfolgreich als Spam markiert.';
$messages['error_marking_comment_as_nonspam'] = 'Beim Markieren des Kommentars als "kein Spam" trat ein Fehler auf.';
$messages['comment_marked_as_nonspam_ok'] = 'Der Kommentar wurde erfolgreich als "kein Spam" markiert.';

// post trackbacks
$messages['blog'] = 'Blog';
$messages['excerpt'] = 'Auszug';
$messages['error_fetching_trackbacks'] = 'Beim Abrufen der Trackbacks ist ein Fehler aufgetreten.';
$messages['error_deleting_trackbacks'] = 'Beim L&ouml;schen der Trackbacks ist ein Fehler aufgetreten.';
$messages['error_deleting_trackback'] = 'Beim L&ouml;schen des Trackbacks "%s" ist ein Fehler aufgetreten.';
$messages['error_deleting_trackback2'] = 'Beim L&ouml;schen des Trackbacks mit der ID "%s" ist ein Fehler aufgetreten.';
$messages['trackback_deleted_ok'] = 'Trackback "%s" wurde erfolgreich gel&ouml;scht.';
$messages['trackbacks_deleted_ok'] = '%s Trackbacks wurden erfolgreich gel&ouml;scht.';
$messages['editTrackbacks'] = 'Trackbacks';

// post statistics
$messages['referrer'] = 'Referrer';
$messages['hits'] = 'Aufrufe';
$messages['error_no_items_selected'] = 'Es wurde nichts zum L&ouml;schen ausgew&auml;hlt.';
$messages['error_deleting_referrer'] = 'Beim L&ouml;schen des Referrers "%s" ist ein Fehler aufgetreten.';
$messages['error_deleting_referrer2'] = 'Beim L&ouml;schen des Referrers mit der ID "%s" ist ein Fehler aufgetreten.';
$messages['referrer_deleted_ok'] = 'Referrer "%s" wurde erfolgreich gel&ouml;scht.';
$messages['referrers_deleted_ok'] = '%s Referrer wurden erfolgreich gel&ouml;scht.';

// categories
$messages["posts"] = "Artikel";
$messages['show_in_main_page'] = 'Auf der &Uuml;bersichtsseite anzeigen.';
$messages['error_incorrect_category_id'] = 'Es wurden keine Kategorien ausgew&auml;hlt, oder die entsprechenden IDs sind nicht korrekt.';
$messages['error_category_has_articles'] = 'Der Kategorie "%s" sind noch Artikel zugeordnet. Bitte &auml;ndern Sie erst die entsprechenden Artikel und versuchen Sie anschlie&szlig;end die Kategorie zu l&ouml;schen.';
$messages['category_deleted_ok'] = 'Die Kategorie "%s" wurde erfolgreich gel&ouml;scht.';
$messages['categories_deleted_ok'] = '%s Kategorien wurden erfolgreich gel&ouml;scht.';
$messages['error_deleting_category'] = 'Beim L&ouml;schen der Kategorie "%s" ist ein Fehler aufgetreten.';
$messages['error_deleting_category2'] = 'Beim L&ouml;schen der Kategorie mit der ID "%s" ist ein Fehler aufgetreten.';
$messages['yes'] = 'Ja';
$messages['no'] = 'Nein';

// new category
$messages['name'] = 'Name';
$messages['category_name_help'] = 'Unter diesem Namen wird die Kategorie erreichbar sein';
$messages['description'] = 'Beschreibung';
$messages['category_description_help'] = 'L&auml;ngere Beschreibung f&uuml;r die Kategorie';
$messages['show_in_main_page_help'] = 'Entscheiden Sie, ob Artikel dieser Kategorie in der &Uuml;bersicht angezeigt werden sollen, oder nur, wenn innerhalb dieser Kategorie gesucht wird.';
$messages['error_empty_name'] = 'Sie m&uuml;ssen einen Namen f&uuml;r diese Kategorie eingeben.';
$messages['error_empty_description'] = 'Sie m&uuml;ssen eine Beschreibung f&uuml;r diese Kategorie eingeben.';
$messages['error_adding_article_category'] = 'Beim Anlegen der Kategorie ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['category_added_ok'] = 'Die Kategorie "%s" wurde dem Blog erfolgreich hinzugef&uuml;gt.';
$messages['add'] = 'hinzuf&uuml;gen';
$messages['reset'] = 'Zur&uuml;cksetzen';

// update category
$messages['error_updating_article_category'] = 'Beim Aktualisieren der Kategorie ist ein Fehler aufgetreten.';
$messages['error_fetching_category'] = 'Beim Abrufen der Kategorie ist ein Fehler aufgetreten.';
$messages['article_category_updated_ok'] = 'Die Kategorie "%s" wurde erfolgreich aktualisiert.';

// links
$messages['feed'] = 'Feed';
$messages['error_no_links_selected'] = 'Es wurden keine Links ausgew&auml;hlt, oder die entsprechenden IDs sind nicht korrekt.';
$messages['error_incorrect_link_id'] = 'Es existiert kein Link mit dieser ID.';
$messages['error_removing_link'] = 'Beim L&ouml;schen des Links "%s" ist ein Fehler aufgetreten.';
$messages['error_removing_link2'] = 'Beim L&ouml;schen des Links mit der ID "%s" ist ein Fehler aufgetreten.';
$messages['link_deleted_ok'] = 'Der Link "%s" wurde erfolgreich gel&ouml;scht.';
$messages['links_deleted_ok'] = '%s Links wurden erfolgreich gel&ouml;scht.';

// new link
$messages['link_name_help'] = 'Name des Links';
$messages['link_url_help'] = 'URL, zu dem der Link verweist';
$messages['link_description_help'] = 'Kurze Beschreibung des Links';
$messages['link_feed_help'] = 'Hier k&ouml;nnen Sie einen Link zu einem RSS oder Atom Feed angeben.';
$messages['link_category_help'] = 'W&auml;hlen Sie bitte eine der verf&uuml;gbaren Kategorien.';
$messages['error_adding_link'] = 'Beim Hinzuf&uuml;gen des Links ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['error_invalid_url'] = 'Der URL ist ung&uuml;ltig.';
$messages['link_added_ok'] = 'Der Link "%s" wurde erfolgreich hinzugef&uuml;gt.';

// update link
$messages['error_updating_link'] = 'Beim Aktualisieren des Links ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['error_fetching_link'] = 'Beim Aufrufen des Links ist ein Fehler aufgetreten.';
$messages['link_updated_ok'] = 'Der Link "%s" wurde erfolgreich aktualisiert.';

// link categories
$messages['links'] = 'Links';
$messages['error_invalid_link_category_id'] = 'Es wurde keine Linkkategorie ausgew&auml;hlt, oder die entsprechenden IDs sind nicht korrekt.';
$messages['error_links_in_link_category'] = 'Der Kategorie "%s" sind noch Links zugeordnet. Bitte &auml;ndern Sie erst die entsprechenden Links und versuchen Sie anschlie&szlig;end die Kategorie zu l&ouml;schen.';
$messages['error_removing_link_category'] = 'Beim L&ouml;schen der Kategorie "%s" ist ein Fehler aufgetreten.';
$messages['link_category_deleted_ok'] = 'Die Kategorie "%s" wurde erfolgreich gel&ouml;scht.';
$messages['link_categories_deleted_ok'] = '%s Linkkategorie wurde erfolgreich gel&ouml;scht.';
$messages['error_removing_link_category2'] = 'Beim L&ouml;schen der Kategorie mit der ID "%s" ist ein Fehler aufgetreten.';

// new link category
$messages['link_category_name_help'] = 'Name der Linkkategorie';
$messages['error_adding_link_category'] = 'Beim Hinzuf&uuml;gen der Linkkategorie "%s" ist ein Fehler aufgetreten.';
$messages['link_category_added_ok'] = 'Die Kategorie "%s" wurde erfolgreich hinzugef&uuml;gt.';

// edit link category
$messages['error_updating_link_category'] = 'Beim Aktualisieren der Linkkategorie ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['link_category_updated_ok'] = 'Die Kategorie "%s" wurde erfolgreich aktualisiert.';
$messages['error_fetching_link_category'] = 'Beim Hinzuf&uuml;gen der Linkkategorie ist ein Fehler aufgetreten.';

// custom fields
$messages['type'] = 'Typ';
$messages['hidden'] = 'versteckt';
$messages['fields_deleted_ok'] = '%s benutzerdefinierte Felder wurden erfolgreich gel&ouml;scht.';
$messages['field_deleted_ok'] = 'Benutzerdefiniertes Feld "%s" wurde erfolgreich gel&ouml;scht.';
$messages['error_deleting_field'] = 'Beim L&ouml;schen des benutzerdefinierten Feldes "%s" ist ein Fehler aufgetreten.';
$messages['error_deleting_field2'] = 'Beim L&ouml;schen des benutzerdefinierten Feldes mit der ID "%s" ist ein Fehler aufgetreten.';
$messages['error_incorrect_field_id'] = 'Die ID des benutzerdefinierten Feldes ist ung&uuml;ltig.';

// new custom field
$messages['field_name_help'] = 'ID, die ben&ouml;tigt wird, um in Artikeln auf dieses Feld zu verweisen';
$messages['field_description_help'] = 'Kurze Beschreibung des Feldes, die beim Hinzuf&uuml;gen und Bearbeiten von Artikeln angezeigt wird';
$messages['field_type_help'] = 'W&auml;hlen Sie einen verf&uuml;gbaren Feldtyp';
$messages['field_hidden_help'] = 'Wenn ein Feld versteckt wird, wird es beim Hinzuf&uuml;gen oder Bearbeiten eines Artikels nicht angezeigt. Diese Funktion wird haupts&auml;chlich f&uuml;r Plugins verwendet.';
$messages['error_adding_custom_field'] = 'Beim Hinzuf&uuml;gen des benutzerdefinierten Feldes ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['custom_field_added_ok'] = 'Benutzerdefiniertes Feld "%s" wurde erfolgreich hinzugef&uuml;gt.';
$messages['text_field'] = 'Textfeld';
$messages['text_area'] = 'Textbox';
$messages['checkbox'] = 'Checkbox';
$messages['date_field'] = 'Datumsauswahl';

// edit custom field
$messages['error_fetching_custom_field'] = 'Beim Aufrufen des benutzerdefinierten Feldes "%s" ist ein Fehler aufgetreten.';
$messages['error_updating_custom_field'] = 'Beim Aktualisieren des benutzerdefinierten Feldes ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['custom_field_updated_ok'] = 'Das Benutzerdefinierte Feld "%s" wurde erfolgreich aktualisiert.';

// resources
$messages['root_album'] = 'Root Album';
$messages['num_resources'] = 'Anzahl der Ressourcen';
$messages['total_size'] = 'Gesamtgr&ouml;&szlig;e';
$messages['album'] = 'Album';
$messages['error_incorrect_album_id'] = 'Die ID des Albums ist ung&uuml;ltig.';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'pLog kann die Verzeichnisse nicht erstellen, in denen die Ressourcen gespeichert werden sollen. Dies kann verschiedene Ursachen haben. Eventuell wird PHP bei Ihnen im "safe mode" ausgef&uuml;hrt, oder Sie haben nicht die erforderlichen Berechtigungen. Sie k&ouml;nnen die Operation eventuell manuell ausf&uuml;hren, indem Sie die folgenden Verzeichnisse anlegen: <br/><br/>%s<br/><br/>. Wenn diese Verzeichnisse bereits existieren, stellen Sie sicher, dass Lese- und Schreibzugriff vorhanden ist.';
$messages['items_deleted_ok'] = '%s Positionen erfolgreich gel&ouml;scht.';
$messages['error_album_has_children'] = 'Das Album "%s" konnte nicht gel&ouml;scht werden, da es Unteralben enth&auml;lt. Wenn Sie das Album wirklich l&ouml;schen m&ouml;chten, entfernen Sie zuerst die Unteralben und versuchen es anschlie&szlig;end erneut.';
$messages['item_deleted_ok'] = 'Position "%s" erfolgreich gel&ouml;scht.';
$messages['error_deleting_album'] = 'Beim L&ouml;schen des Albums "%s" ist ein Fehler aufgetreten.';
$messages['error_deleting_album2'] = 'Beim L&ouml;schen des Albums mit der ID "%s" ist ein Fehler aufgetreten.';
$messages['error_deleting_resource'] = 'Beim L&ouml;schen der Ressource "%s" ist ein Fehler aufgetreten.';
$messages['error_deleting_resource2'] = 'Beim L&ouml;schen der Ressource mit der ID "%s" ist ein Fehler aufgetreten.';
$messages['error_no_resources_selected'] = 'Es wurde keine Position zum L&ouml;schen ausgew&auml;hlt.';
$messages['resource_deleted_ok'] = 'Ressource "%s" wurde erfolgreich gel&ouml;scht.';
$messages['album_deleted_ok'] = 'Album "%s"  wurde erfolgreich gel&ouml;scht.';
$messages["add_resource"] = "Ressource hinzuf&uuml;gen";
$messages['add_resource_preview'] = 'Vorschau hinzuf&uuml;gen';
$messages['add_resource_medium'] = 'medium-Thumbnail hinzuf&uuml;gen';
$messages["add_album"] = "Album hinzuf&uuml;gen";

// new album
$messages['album_name_help'] = 'Kurzer Name f&uuml;r das neue Album';
$messages['parent'] = '&Uuml;bergeordnetes Album';
$messages['no_parent'] = 'Kein &Uuml;bergeordnetes Album';
$messages['parent_album_help'] = 'Benutzen Sie &uuml;bergeordnete Alben, um Alben innerhalb von anderen Alben zu erstellen und Ihre Dateien besser organisieren zu k&ouml;nnen.';
$messages['album_description_help'] = 'L&auml;ngere Beschreibung des Albums';
$messages['error_adding_album'] = 'Beim Hinzuf&uuml;gen des Albums ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['album_added_ok'] = 'Das Album wurde "%s" erfolgreich hinzugef&uuml;gt.';

// edit album
$messages['error_incorrect_album_id'] = 'Die ID des Albums ist ung&uuml;ltig.';
$messages['error_fetching_album'] = 'Beim Zugriff auf das Album ist ein Fehler aufgetreten.';
$messages['error_updating_album'] = 'Beim Aktualisieren des Albums ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['album_updated_ok'] = 'Das Album "%s" wurde erfolgreich aktualisiert';
$messages['show_album_help'] = 'Wenn deaktiviert, wird das Album nicht in der Liste verf&uuml;gbarer Alben angezeigt.';

// new resource
$messages['file'] = 'Datei';
$messages['resource_file_help'] = 'Datei, die dem aktuellem Blog hinzugef&uuml;gt wird. Benutzen Sie den "Feld hinzuf&uuml;gen" Link um mehr als eine Datei gleichzeitig hochzuladen.';
$messages['add_field'] = 'Feld hinzuf&uuml;gen';
$messages['resource_description_help'] = 'L&auml;ngere Beschreibung der Datei';
$messages['resource_album_help'] = 'W&auml;hlen Sie das Album, zu dem die Datei hinzugef&uuml;gt werden soll';
$messages['error_no_resource_uploaded'] = 'Es wurde keine Datei zum Hochladen ausgew&auml;hlt';
$messages['resource_added_ok'] = 'Ressource "%s" erfolgreich hinzugef&uuml;gt';
$messages['error_resource_forbidden_extension'] = 'Die Datei konnte nicht hinzugef&uuml;gt werden, da dieser Dateityp nicht erlaubt ist.';
$messages['error_resource_too_big'] = 'Die Datei konnte nicht hinzugef&uuml;gt werden, da sie zu gro&szlig; ist.';
$messages['error_uploads_disabled'] = 'Die Datei konnte nicht hinzugef&uuml;gt werden, da Uploads f&uuml;r diese Site nicht zul&auml;ssig sind.';
$messages['error_quota_exceeded'] = 'Die Datei konnte nicht hinzugef&uuml;gt werden, da Sie den f&uuml;r Sie reservierten Speicherplatz &uuml;berschritten haben';
$messages['error_adding_resource'] = 'Beim Hinzuf&uuml;gen der Datei ist ein Fehler aufgetreten.';

// edit resource
$messages['editResource'] = 'Ressource bearbeiten';
$messages['resource_information_help'] = 'Nachstehend finden Sie einige Informationen &uuml;ber die Ressource';
$messages['information'] = 'Information';
$messages['size'] = 'Dateigr&ouml;&szlig;e';
$messages['format'] = 'Format';
$messages['dimensions'] = 'Gr&ouml;&szlig;e';
$messages['bits_per_sample'] = 'Bits pro Sample';
$messages['sample_rate'] = 'Samplerate';
$messages['number_of_channels'] = 'Anzahl der Kann&auml;le';
$messages['legnth'] = 'L&auml;nge';
$messages['thumbnail_format'] = 'Thumbnail Format';
$messages['regenerate_preview'] = 'Vorschau erneuern';
$messages['error_fetching_resource'] = 'Beim Abrufen der Ressource ist ein Fehler aufgetreten.';
$messages['error_updating_resource'] = 'Beim Aktualisieren der Ressource ist ein Fehler aufgetreten.';
$messages['resource_updated_ok'] = 'Die Ressource %s wurde erfolgreich aktualisiert.';

// blog settings
$messages['blog_link'] = 'Blog Link';
$messages['blog_link_help'] = 'Permanenter Link zu diesem Blog';
$messages['blog_name_help'] = 'Titel f&uuml;r dieses Blog';
$messages['blog_description_help'] = 'L&auml;ngere Beschreibung f&uuml;r dieses Blog';
$messages['language'] = 'Sprache';
$messages['blog_language_help'] = 'Sprache, in der die Texte des Blogs, sowohl auf der &ouml;ffentlichen, als auch auf der administrativen Seite, angezeigt werden.';
$messages['max_main_page_items'] = 'Anzahl der Positionen auf der &Uuml;bersichtsseite';
$messages['max_main_page_items_help'] = 'Anzahl der Artikel, die immer auf der Hauptseite des Blogs angezeigt werden';
$messages['max_recent_items'] = 'Anzahl der aktuellen Positionen';
$messages['max_recent_items_help'] = 'Maximale Anzahl der Artikel, die auf der Hauptseite als aktuell angezeigt werden';
$messages['template'] = 'Template';
$messages['choose'] = 'ausw&auml;hlen';
$messages['blog_template_help'] = 'Template, dass benutzt wird, um den Inhalt des Blogs darzustellen. In der Liste k&ouml;nnen Sie zwischen allen global und den nur f&uuml;r dieses Blog installierten Templates ausw&auml;hlen';
$messages['use_read_more'] = ' "weiter..." Link in Artikeln nutzen';
$messages['use_read_more_help'] = 'Wenn diese Funktion gew&auml;hlt wird, wird nur der Text, der im Text-Feld eingegeben wurde, angezeigt. Um den Text aus dem Feld Erweiteter Text anzeigen zu k&ouml;nnen, wird jedem Artikel ein "weiter..." Link hinzugef&uuml;gt.';
$messages['enable_wysiwyg'] = 'WYSIWYG Editor aktivieren';
$messages['enable_wysiwyg_help'] = 'Erm&ouml;glicht das Bearbeiten der Artikel mit Hilfe eines HTML-Editors. Hierzu ist mindestens Internet Explorer 5.5 oder Mozilla 1.3 erforderlich.';
$messages['enable_comments'] = 'Kommentare standardm&auml;&szlig;ig erlauben';
$messages['enable_comments_help'] = 'Erlaubt das Kommentieren von Artikeln global. Wenn diese Funktion aktiviert ist,  k&ouml;nnen Sie trotzdem f&uuml;r einzelne Artikel Kommentare verbieten.';
$messages['show_future_posts'] = 'Zuk&uuml;nftige Artikel im Kalender anzeigen';
$messages['show_future_posts_help'] = 'W&auml;hlen Sie, ob Artikel mit in der Zukunft liegendem Ver&ouml;ffentlichungsdatum im Kalender angezeigt und so f&uuml;r jeden Besucher sichtbar sein sollen.';
$messages['comments_order'] = 'Kommentar Reihenfolge';
$messages['comments_order_help'] = 'Reihenfolge, in der die Kommentare auf der &Uuml;bersichtsseite angezeigt werden.';
$messages['oldest_first'] = '&auml;lteste zuerst';
$messages['newest_first'] = 'neue zuerst';
$messages['categories_order'] = 'Kategorie Reihenfolge';
$messages['categories_order_help'] = 'Reihenfolge, in der die Kategorien auf der &Uuml;bersichtsseite angezeigt werden.';
$messages['most_recent_updated_first'] = 'zuletzt aktualisierte zuerst';
$messages['alphabetical_order'] = 'alphabetische Reihenfolge';
$messages['reverse_alphabetical_order'] = 'umgekehrt alphabetische Reihenfolge';
$messages['most_articles_first'] = 'meiste Artikel zuerst';
$messages['link_categories_order'] = 'Linkkategorie Reihenfolge';
$messages['link_categories_order_help'] = 'Reihenfolge, in der die Linkkategorien auf der &Uuml;bersichtsseite angezeigt werden.';
$messages['most_links_first'] = 'meiste Links zuerst';
$messages['most_links_last'] = 'meiste Links zuletzt';
$messages['time_offset'] = 'Zeitabgleich';
$messages['time_offset_help'] = 'Zeit, die zu jeder Zeit im Blog hinzugef&uuml;gt wird, um Unterschiede zur Serverzeit auszugleichen.';
$messages['close'] = 'Schlie&szlig;en';
$messages['select'] = 'Ausw&auml;hlen';
$messages['error_updating_settings'] = 'Beim Aktualisieren der Blog-Einstellungen ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['error_invalid_number'] = 'Die Anzahl ist nicht korrekt';
$messages['error_incorrect_time_offset'] = 'Die Einstellung f&uuml;r den Zeitabgleich sind ung&uuml;ltig.';
$messages['blog_settings_updated_ok'] = 'Die Blog-Einstellungen wurden erfolgreich aktualisiert.';

// user settings
$messages['username_help'] = '&Ouml;ffentlicher Benutzername, der nicht ge&auml;ndert werden kann.';
$messages['full_name'] = 'Vollst&auml;ndiger Name';
$messages['full_name_help'] = 'Vollst&auml;ndiger Name';
$messages['password_help'] = 'Geben Sie das neue Kennwort ein und best&auml;tigen Sie es, oder lassen Sie die Felder frei, um das Kennwort nicht zu &auml;ndern.';
$messages['confirm_password'] = 'Kennwort best&auml;tigen';
$messages['email'] = 'E-Mail';
$messages['email_help'] = 'E-Mail Addresse, an die Benachrichtigungen gesendet werden sollen.';
$messages['bio'] = 'Bio';
$messages['bio_help'] = 'Hier k&ouml;nnen Sie eine kurze Selbstdarstellung eingeben.';
$messages['picture'] = 'Bild';
$messages['user_picture_help'] = 'Bitte w&auml;hlen Sie eines der von Ihnen in dieses Blog hochgeladenen Bilder als Ihr pers&ouml;nliches Bild aus.';
$messages['error_invalid_password'] = 'Das Kennwort ist ung&uuml;ltig. Bitte stellen Sie sicher, dass es ausreichend lang ist.';
$messages['error_passwords_dont_match'] = 'Die Kennw&ouml;rter stimmen leider nicht &uuml;berein.';
$messages['error_incorrect_email_address'] = 'Die E-Mail Adresse ist ung&uuml;ltig.';
$messages['error_updating_user_settings'] = 'Beim Aktualisieren der Benutzer-Einstellungen ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['user_settings_updated_ok'] = 'Die Benutzer-Einstellungen wurden erfolgreich aktualisiert.';
$messages['resource'] = 'Ressource';

// plugin centre
$messages['identifier'] = 'ID';
$messages['error_plugins_disabled'] = 'Plugins sind leider deaktiviert.';

// blog users
$messages['revoke_permissions'] = 'Berechtigungen entziehen';
$messages['error_no_users_selected'] = 'Es wurde kein Benutzer ausgew&auml;hlt.';
$messages['user_removed_from_blog_ok'] = 'Der Benutzer %s hat keine Berechtigung mehr, dieses Blog zu bearbeiten.';
$messages['users_removed_from_blog_ok'] = '%s Benutzer haben keinen Zugang mehr zu diesem Blog.';
$messages['error_removing_user_from_blog'] = 'Beim Entziehen der Rechte f&uuml;r dieses Blog von Benutzer %s ist ein Fehler aufgetreten.';
$messages['error_removing_user_from_blog2'] = 'Es ist ein Fehler aufgetreten beim Entziehen der Rechte f&uuml;r dieses Blog vom Benutzer mit der ID %s.';

// new blog user
$messages['new_blog_username_help'] = 'Benutzername des Benutzers, dem Sie Zugang zu diesem Blog geben m&ouml;chten. Neue Benutzer haben lediglich Zugang zu den Einstellungen und Ressourcen.';
$messages['send_notification'] = 'Benachrichtigung senden';
$messages['send_user_notification_help'] = 'E-Mail Benachrichtigung an diesen Benutzer senden';
$messages['notification_text'] = 'Benachrichtigungstext';
$messages['notification_text_help'] = 'Dieser Text wird in die Benachrichtigung eingef&uuml;gt.';
$messages['error_adding_user'] = 'Beim Freischalten des Zugangs f&uuml;r diesen Benutzer ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['error_empty_text'] = 'Sie haben keinen Text eingegeben.';
$messages['error_adding_user'] = 'Beim Hinzuf&uuml;gen des Benutzers ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['error_invalid_user'] = 'Der Benutzername "%s" ist ung&uuml;ltig oder der Benutzer existiert nicht.';
$messages['user_added_to_blog_ok'] = 'Dem Benutzer "%s" wurde erfolgreich Zugang zu diesem Blog einger&auml;umt.';

// blog templates
$messages['error_no_templates_selected'] = 'Es wurden keine Templates ausgew&auml;hlt.';
$messages['error_template_is_current'] = 'Template "%s" kann nicht ausgew&auml;hlt werden, da es bereits verwendet wird.';
$messages['error_removing_template'] = 'Beim L&ouml;schen des Templates "%s" ist ein Fehler aufgetreten.';
$messages['template_removed_ok'] = 'Template "%s" wurde erfolgreich gel&ouml;scht';
$messages['templates_removed_ok'] = '%s Templates wurden erfolgreich gel&ouml;scht.';

// new blog template
$messages['template_installed_ok'] = 'Template "%s" wurde erfolgreich hinzugef&uuml;gt.';
$messages['error_installing_template'] = 'Beim Installieren des Templates "%s" ist ein Fehler aufgetreten.';
$messages['error_missing_base_files'] = 'Die Template-Dateien sind nicht vollst&auml;ndig.';
$messages['error_add_template_disabled'] = 'Es k&ouml;nnen keine Templates hinzugef&uuml;gt werden, da diese Funktion f&uuml;r diese Site deaktiviert wurde.';
$messages['error_must_upload_file'] = 'Es wurde kein Template-Set hochgeladen.';
$messages['error_uploads_disabled'] = 'Die M&ouml;glichkeit, Dateien hochzuladen wurde f&uuml;r diese Site deaktiviert.';
$messages['error_no_new_templates_found'] = 'Es wurden keine neuen Templates gefunden.';
$messages['error_template_not_inside_folder'] = 'Die Dateien des Template-Sets m&uuml;ssen in ein Verzeichniss mit dem gleichen Namen wie das Template-Set geladen werden.';
$messages['error_missing_base_files'] = 'Einige Dateien des Template Sets sind nicht vorhanden.';
$messages['error_unpacking'] = 'Beim Entpacken der Datei ist ein Fehler aufgetreten.';
$messages['error_forbidden_extensions'] = 'Das Template-Set enth&auml;lt Dateien mit verbotenen Erweiterungen.';
$messages['error_creating_working_folder'] = 'Beim Erstellen eines tempor&auml;ren Verzeichnisses zum Entpacken der Dateien ist ein Fehler aufgetreten.';
$messages['error_checking_template'] = 'Beim Pr&uuml;fen des Templates "%s" ist ein Fehler aufgetreten.';
$messages['template_package'] = 'Template-Set';
$messages['blog_template_package_help']  = 'Benutzen Sie dieses Formular, um ein Template hochzuladen, dass nur f&uuml;r Ihr Blog verf&uuml;gbar sein soll. Wenn Sie mit diesem Formular kein Template-Set hochladen k&ouml;nnen, laden Sie es manuell in das Verzeichniss <b>%s</b>. In diesem Verzeichniss sind all Ihre Templates gespeichert. Anschlie&szlig;end klicken Sie auf <b>Templates scannen</b>. pLog scannt daraufhin das Verzeichniss und f&uuml;gt automatisch alle neu erkannten Templates der Auswahl zu.';
$messages['scan_templates'] = 'Templates scannen';

// site users
$messages['user_status_active'] = 'aktiv';
$messages['user_status_disabled'] = 'gesperrt';
$messages['user_status_all'] = 'Alle';
$messages['user_status_unconfirmed'] = 'nicht best&auml;tigt';
$messages['error_invalid_user2'] = 'Es existiert kein Benutzer mit der ID "%s".';
$messages['error_deleting_user'] = 'Beim Sperren des Benutzers "%s" ist ein Fehler aufgetreten';
$messages['user_deleted_ok'] = 'Benutzer "%s" wurde erfolgreich gesperrt';
$messages['users_deleted_ok'] = '%s Benutzer erfolgreich gesperrt.';

// create user
$messages['user_added_ok'] = 'Benutzer "%s" erfolgreich hinzugef&uuml;gt';
$messages['error_incorrect_username'] = 'Der Benutzername ist ung&uuml;ltig oder bereits vergeben.';
$messages['user_status_help'] = 'Aktueller Status des Benutzers';
$messages['user_blog_help'] = 'Blog, welchem der Benutzer anfangs zugeordnet ist';
$messages['none'] = 'Keins';

// edit user
$messages['error_invalid_user'] = 'Die Benutzer-ID ist nicht g&uuml;ltig, oder der Benutzer existiert nicht.';
$messages['error_updating_user'] = 'Beim Aktualisieren der Benutzereinstellungen ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['blogs'] = 'Blogs';
$messages['user_blogs_help'] = 'Blogs des Benutzers oder zu denen der Benutzer Zugang hat.';
$messages['site_admin'] = 'Administrator';
$messages['site_admin_help'] = 'Entscheiden Sie, ob der Benutzer Administrationsrechte zugewiesen bekommt und Zugang zum Administrationsbereich bekommt, um dort Verwaltungsaufgaben durchf&uuml;hren zu d&uuml;rfen.';
$messages['user_updated_ok'] = 'Benutzer "%s" erfolgreich aktualisiert';

// site blogs
$messages['blog_status_all'] = 'Alle';
$messages['blog_status_active'] = 'aktiv';
$messages['blog_status_disabled'] = 'gesperrt';
$messages['blog_status_unconfirmed'] = 'nicht best&auml;tigt';
$messages['owner'] = 'Besitzer';
$messages['quota'] = 'Kontingent';
$messages['bytes'] = 'Bytes';
$messages['error_no_blogs_selected'] = 'Es wurde kein Blog ausgew&auml;hlt.';
$messages['error_blog_is_default_blog'] = 'Blog "%s" konnte nicht gel&ouml;scht werden, weil es das Standardblog ist.';
$messages['blog_deleted_ok'] = 'Das Blog "%s" wurde erfolgreich gesperrt.';
$messages['blogs_deleted_ok'] = '%s blogs erfolgreich gesperrt.';
$messages['error_deleting_blog'] = 'Beim Sperren des Blogs "%s" ist ein Fehler aufgetreten.';
$messages['error_deleting_blog2'] = 'Beim Sperren des Blogs mit der ID "%s" ist ein Fehler aufgetreten.';

// create blog
$messages['error_adding_blog'] = 'Beim Hinzuf&uuml;gen des Blogs ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['blog_added_ok'] = 'Blog "%s" erfolgreich hinzugef&uuml;gt';

// edit blog
$messages['blog_status_help'] = 'Blogstatus';
$messages['blog_owner_help'] = 'Benutzer, der dem Blog als Besitzer mit vollem Zugriff auf die Blogeinstellungen zugewiesen wird.';
$messages['users'] = 'Benutzer';
$messages['blog_quota_help'] = 'Ressourcenkontingent in Bytes. Stellen Sie 0 f&uuml;r unlimitiert ein oder lassen das Feld frei, um die globalen Einstellungen f&uuml;r dieses Blog zu benutzen.';
$messages['blog_users_help'] = 'Benutzer, die Zugang zu diesem Blog haben. W&auml;hlen Sie einen Benutzer aus der linken Liste und f&uuml;gen Sie ihn rechts hinzu, um ihn Zugang zu diesem Blog zu geben.';
$messages['edit_blog_settings_updated_ok'] = 'Das Blog %s wurde erfolgreich aktualisiert.';
$messages['error_updating_blog_settings'] = 'Beim Aktualisieren des Blogs %s ist ein Fehler aufgetreten.';
$messages['error_incorrect_blog_owner'] = 'Der Benutzer, der als Blog-Besitzer ausgew&auml;hlt wurde, ist ung&uuml;ltig.';
$messages['error_fetching_blog'] = 'Beim Aufrufen des Blogs ist ein Fehler aufgetreten.';
$messages['error_updating_blog_settings2'] = 'Beim Aktualisieren des Blogs ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben.';
$messages['add_or_remove'] = 'Benutzer hinzuf&uuml;gen oder entfernen.';

// site locales
$messages['locale'] = 'Sprachdatei';
$messages['locale_encoding'] = 'Kodierung';
$messages['locale_deleted_ok'] = 'Die Sprachdatei %s wurde erfolgreich gel&ouml;scht.';
$messages['error_no_locales_selected'] = 'Es wurden keine Sprachdateien zum L&ouml;schen ausgew&auml;hlt.';
$messages['error_deleting_only_locale'] = 'Die Sprachdatei kann nicht gel&ouml;scht werden, da es die letzte verf&uuml;gare im System ist.';
$messages['locales_deleted_ok']= '%s Sprachdateien wurden erfolgreich gel&ouml;scht.';
$messages['error_deleting_locale'] = 'Beim L&ouml;schen der Sprachdatei %s ist ein Fehler aufgetreten.';
$messages['error_locale_is_default'] = 'Die Sprachdatei %s kann nicht gel&ouml;scht werden, da es die Standarddatei f&uuml;r neue Blogs ist.';

// add locale
$messages['error_invalid_locale_file'] = 'Die Sprachdatei ist ung&uuml;ltig.';
$messages['error_no_new_locales_found'] = 'Es wurden keine neuen Sprachdateien gefunden.';
$messages['locale_added_ok'] = 'Die Sprachdatei %s wurde erfolgreich hinzugef&uuml;gt.';
$messages['error_saving_locale'] = 'Beim Speichern der neuen Sprachdatei ist ein Fehler aufgetreten.';
$messages['scan_locales'] = 'Sprachdateien scannen';
$messages['add_locale_help'] = 'Benutzen Sie dieses Formular, um neue Sprachdateien hinzuzuf&uuml;gen. Wenn Sie mithilfe dieses Formulars keine neuen Dateien hochladen k&ouml;nnen, laden Sie die Sprachdatei manuell in das Standardverzeichniss f&uuml;r Sprachdateien, normalerweise <b>./locales/</b>. Klicken Sie anschlie&szlig;end auf <b>Sprachdateien scannen</b> . pLog scannt dann das Verzeichniss und f&uuml;gt die neuen Sprachdateien automatisch dem System zu.';

// site templates
$messages['error_template_is_default'] = 'Das Template %s kann nicht gel&ouml;scht werden, da es das Standardtemplate f&uuml;r neue Blogs ist.';

// add template
$messages['global_template_package_help'] = 'Benutzen Sie dieses Formular, um ein Template hochzuladen, dass f&uuml;r alle Blogs dieser Site verf&uuml;gbar sein soll. Wenn Sie mit diesem Formular kein Template-Set hochladen k&ouml;nnen, laden Sie es manuell in das Verzeichniss <b>%s</b>, dem Verzeichniss f&uuml;r all Ihre Template-Sets. Anschlie&szlig;end klicken Sie auf <b>Templates scannen</b>. pLog scannt daraufhin das Verzeichniss und f&uuml;gt automatisch alle neu erkannten Templates der Auswahl zu.';

// global settings
$messages['site_config_saved_ok'] = 'Die Einstellungen wurden erfolgreich gespeichert.';
$messages['error_saving_site_config'] = 'Beim Speichern der Einstellungen ist ein Fehler aufgetreten.';
/// general settings
$messages['help_comments_enabled'] = 'Kommentare f&uuml;r neue Blogs als Standard erlauben [Standard = Ja]';
$messages['help_beautify_comments_text'] = 'In Kommentaren automatisch Abs&auml;tze formatieren und URLs verlinken [Standard = Ja]';
$messages['help_temp_folder'] = 'Verzeichniss, in das pLog tempor&auml;re Dateien, wie z.B. kompilierte Templates, speichert. Um die Sicherheit zu erh&ouml;hen, k&ouml;nnen Sie ein Verzeichniss ausserhalb des Webserver-Verzeichnissbaums nutzen. [Standard = ./tmp]';
$messages['help_base_url'] = 'URL unter dem dieses Blog installiert ist';
$messages['help_subdomains_enabled'] = 'Subdomains aktivieren oder deaktivieren. Wenn Sie diese Funktion nutzen m&ouml;chten, lesen Sie bitte vorher die Dokumentation! [Standard = Nein]';
$messages['help_subdomains_base_url'] = 'Wenn Subdomains aktiviert sind, ist dies die URL-Basis. Benutzen Sie {blogname}, um den Blognamen oder {username} um den Benutzernamen zum Generieren des Links zum Blog zu verwenden (z.B. http://{blogname}.yourdomain.com)';
$messages['help_include_blog_id_in_url'] = 'Diese Einstellung ist nur wichtig, wenn Subdomains und "normale" URLs aktiviert sind und bewirkt, dass intern generierte URLs nicht den "Blog-ID" Parameter verwenden. &Auml;ndern Sie diese Einstellung nur, wenn Sie genau wissen, was Sie tun! [Standard = Ja]';
$messages['help_script_name'] = '&Auml;ndern Sie diese Einstellung, falls Sie die Datei index.php umbenennen m&uuml;ssen [Standard = index.php]';
$messages['help_show_posts_max'] = 'Maximale Anzahl der Artikel, die auf der Hauptseite angezeigt werden. Diese Einstellung hat nur Auswirkungen auf neue Blogs. [Standard = 15]';
$messages['help_recent_posts_max'] = 'Maximale Anzahl der Artikel, die auf der Hauptseite als aktuell angezeigt werden. Diese Einstellung hat nur Auswirkungen auf neue Blogs. [Standard = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Einstellung, ob Entw&uuml;rfe via Javascript gespeichert und XMLHTTP-Requests erlaubt werden sollen. [Standard = Ja ]';
$messages['help_locale_folder'] = 'Verzeichniss, in dem die Sprachdateien gespeichert werden [Standard = ./locale]';
$messages['help_default_locale'] = 'Standard Spracheinstellung f&uuml;r neue Blogs [Standard = en_UK]';
$messages['help_default_blog_id'] = 'Standard Blog, das angezeigt wird, wenn kein anderes festgelegt ist [Standard = 1]';
$messages['help_default_time_offset'] = 'Standard Zeitabgleich f&uuml;r neue Blogs [Standard = 0]';
$messages['help_html_allowed_tags_in_comments'] = 'Leerzeichen-getrennte Liste der in Kommentaren erlaubten HTML-Tags [Standard = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'Wenn diese Funktion aktiviert ist, werden die Referrer (verweisenden Seiten) in der Datenbank gespeichert. Deaktivieren Sie diese Funktion, wenn Sie die Performance der Blogs verbessern m&ouml;chten [Standard = Ja]';
$messages['help_show_more_enabled'] = '"weiter..."-Link f&uuml;r neue Blogs freigeben [Standard = Ja]';
$messages['help_update_article_reads'] = 'Aktivieren oder deaktivieren Sie die automatische Aktualisierung des Z&auml;hlers f&uuml;r die H&auml;ufigkeit des Zugriffs auf einzelne Artikel. Deaktivieren Sie diese Funktion, wenn Sie die Performance der Blogs verbessern m&ouml;chten. [Standard = Ja]';
$messages['help_update_cached_article_reads'] = 'Aktivieren oder deaktivieren Sie die automatische Aktualisierung des Z&auml;hlers f&uuml;r die H&auml;ufigkeit des Zugriffs auf einzelne Artikel auch, wenn Caching aktiviert ist [Standard = Ja]';
$messages['help_xmlrpc_ping_enabled'] = 'Aktivieren oder deaktivieren Sie das Senden von XMLRPC-Pings an Sites, die dieses Feature unterst&uuml;tzen [Standard = Ja]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Aktivieren oder deaktivieren Sie das automatische Senden von XMLRPC-Pings an Sites, die dieses Feature unterst&uuml;tzen beim Verfassen oder Aktualisieren von Artikeln [Standard = Ja]';
$messages['help_xmlrpc_ping_hosts'] = 'URL Verweis zum XMLRPC-Interface f&uuml;r Sites, die die XMLRPC-Ping Spezifikation unterst&uuml;tzen. Schreiben Sie jeden URL in eine neue Zeile. [Standard = http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = 'Verarbeiten eingehender Trackbacks aktivieren oder deaktivieren [Standard = Ja]';
$messages['help_htmlarea_enabled'] = 'Den WYSIWYG-Editor f&uuml;r neue Blogs aktivieren oder deaktivieren [Standard = Ja]';
$messages['help_plugin_manager_enabled'] = 'Die Verwendung von Plugins erm&ouml;glichen [Standard = Ja]';
$messages['help_minimum_password_length'] = 'Mindestl&auml;nge f&uuml;r Kennw&ouml;rter [Standard = 4]';
$messages['help_xhtml_converter_enabled'] = 'Wenn aktiviert, versucht pLog s&auml;mtlichen HTML-Code in g&uuml;ltiges XHTML zu konvertieren [Standard = Ja]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'Wenn aktiviert, versucht pLog s&auml;mtlichen HTML-Code agressiv in g&uuml;ltiges XHTML zu konvertieren (diese Einstellung ist sehr fehleranf&auml;llig und mit Vorsicht zu verwenden). [Standard = Nein]';
$messages['help_session_save_path'] = 'Verzeichniss, in das pLog Sessiondaten mithilfe der PHP Funktion session_save_path() speichert. Bitte stellen Sie sicher, dass dieses Verzeichniss f&uuml;r den Webserver beschreibbar ist. Wenn Sie diese Einstellung leer lassen, wird das Standardverzeichniss von PHP benutzt. [Standard = (leer)]';
// summary settings
$messages['help_summary_page_show_max'] = 'Anzahl der Eintr&auml;ge, die auf der &Uuml;bersichtsseite angezeigt werden. Diese Einstellung gilt f&uuml;r alle Listen auf der &Uuml;bersichtsseite (aktuelle Artikel, aktivste Blogs, usw.) [Standard = 10]';
$messages['help_summary_blogs_per_page'] = 'Anzahl der Blogs pro Seite in der "Blog Liste" [Standard = 25]';
$messages['help_forbidden_usernames'] = 'Leerzeichen-getrennte Liste der nicht erlaubten Benutzernamen [Standard = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = 'Begrenzung auf maximal ein Blog pro E-Mail Account [Standard = Nein]';
$messages['help_summary_show_agreement'] = 'Vereinbarung anzeigen und von neuen Benutzern akzeptieren lassen, bevor die Registrierung abgeschlossen wird [Standard = Ja]';
$messages['help_need_email_confirm_registration'] = 'Neue Benutzer zwingen Ihre Registrierung &uuml;ber das Klicken eines Links zu best&auml;tigen, der Ihnen per E-Mail an Ihren Account gesendet wird [Standard = Ja]';
$messages['help_summary_disable_registration'] = 'Benutzern erlauben, neue Blogs zu registrieren [Standard = Ja]';
// templates
$messages['help_template_folder'] = 'Verzeichniss, in dem Templates gespeichert werden [Standard = ./templates]';
$messages['help_default_template'] = 'Standardtemplate f&uuml;r neue Blogs [Standard = standard]';
$messages['help_users_can_add_templates'] = 'Benutzern erm&ouml;glichen, eigene Templates hochzuladen [Standard = Ja]';
$messages['help_template_compile_check'] = 'Aktivieren Sie diese Funktion, um Dateien durch Smarty automatisch auf aktuellere Versionen pr&uuml;fen zu lassen. Deaktivieren Sie diese Funktion, um die Perfomance zu steigern [Standard = Ja]';
$messages['help_template_cache_enabled'] = 'Aktivieren des Template-Cache. Wenn aktiviert, wird, falls m&ouml;glich,  eine zwischengespeicherte Version von Seiten benutzt. Dadurch m&uuml;ssen weniger Daten aus der Datenbank abgerufen und Templates seltener neu gerendert werden. [Standard = Ja]';
$messages['help_template_cache_lifetime'] = 'Verfallszeit des Cache in Sekunden. Setzen Sie den Wert auf -1, um den Cache nie verfallen zu lassen. Wenn Sie den Wert auf 0 setzen, wird der Cache deaktiviert. Setzen Sie hierzu allerdings besser "Aktivieren des Template-Cache" auf "Nein". [Standard = 0]';
$messages['help_template_http_cache_enabled'] = 'Unterst&uuml;tzung f&uuml;r HTTP-Request aktivieren. Wenn aktiviert, f&uuml;gt pLog dem HTTP-Header "If-Modified-Since"-Informationen zu. So mu&szlig; nur unbedingt erforderlicher Inhalt gesendet werden. Benutzen Sie diese Einstellung, um Bandbreite zu sparen. [Standard = Nein]';
$messages['help_allow_php_code_in_templates'] = 'Nativen PHP-Code in Smarty-Templates innerhalb von {php}...{/php} Bl&ouml;cken erlauben [Standard = Nein]';
// urls
$messages['help_request_format_mode'] = 'W&auml;hlen Sie ein URL-Format. Wenn Sie benutzerdefinierte URLs verwenden m&ouml;chten, stellen Sie sicher, dass die folgenden Einstellungen ebenfalls konfiguriert sind. [Standard = einfach]';
$messages['plain'] = 'einfach';
$messages['search_engine_friendly'] = 'Suchmaschinenoptimiert';
$messages['custom_url_format'] = 'benutzerdefinierte URLs';
$messages['help_permalink_format'] = 'Format f&uuml;r Permalinks bei der Verwendung benutzerdefinierter URLs [Standard = /blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = 'Format f&uuml;r Links zu Kategorien bei der Verwendung benutzerdefinierter URLs [Standard = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'Format f&uuml;r Links zu Blogs bei der Verwendung benutzerdefinierter URLs [Standard = /blog/{blogname}$]';
$messages['help_archive_link_format'] = 'Format f&uuml;r Links zu Archiven bei der Verwendung benutzerdefinierter URLs [Standard = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'Format f&uuml;r Links zu Artikeln eines bestimmten Benutzers bei der Verwendung benutzerdefinierter URLs [Standard = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'Format f&uuml;r Links zur Trackback-Seite bei der Verwendung benutzerdefinierter URLs [Standard = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'Format f&uuml;r Links zu benutzerdefinierten statischen Templateseiten bei der Verwendung benutzerdefinierter URLs [Standard = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'Format f&uuml;r Links zu Ressource-Alben bei der Verwendung benutzerdefinierter URLs [Standard = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'Format f&uuml;r Links zu Ressource-Seiten mit Dateien bei der Verwendung benutzerdefinierter URLs [Standard = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'Format f&uuml;r Links zu Ressource-Vorschauen bei der Verwendung benutzerdefinierter URLs [Standard = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'Format f&uuml;r Links zu gr&ouml;&szlig;enreduzierten Ressource-Vorschauen bei der Verwendung benutzerdefinierter URLs [Standard = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'Format f&uuml;r Links zu Dateien bei der Verwendung benutzerdefinierter URLs [Standard = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = 'Beim Pr&uuml;fen von E-Mail Adressen pr&uuml;fen, ob unter der angegebenen Domain MX-Records definiert sind und die Adresse auf eine g&uuml;tige Mailbox verweist [Standard = Nein]';
$messages['help_email_service_enabled'] = 'Versenden von E-Mails erm&ouml;glichen [Standard = Ja]';
$messages['help_post_notification_source_address'] = 'E-Mail Adresse, die als Absenderadresse erscheint, wenn pLog E-Mails versendet [Standard = noreply@your.host.com]';
$messages['help_email_service_type'] = 'System, mit dem E-Mails versendet werden [Standard = PHP]';
$messages['help_smtp_host'] = 'Wenn Sie SMTP zum Versenden von E-Mails verwenden m&ouml;chten, geben Sie hier den SMTP-Server an, der verwendet werden soll [Standard = (empty)]';
$messages['help_smtp_port'] = 'Falls der SMTP-Server unter einem anderen Port als 25 l&auml;uft, geben Sie hier den entsprechenden Port an [Standard = (leer)]';
$messages['help_smtp_use_authentication'] = 'Aktivieren Sie diese Einstellung, falls f&uuml;r das Senden von E-Mails am SMTP-Server Authentifizierung erforderlich ist [Standard = Nein]';
$messages['help_smtp_username'] = 'Falls f&uuml;r das Senden von E-Mails am SMTP-Server Authentifizierung erforderlich ist, geben Sie hier den Benutzernamen an [Standard = (leer)]';
$messages['help_smtp_password'] = 'Falls f&uuml;r das Senden von E-Mails am SMTP-Server Authentifizierung erforderlich ist, geben Sie hier das Kennwort f&uuml;r das angegebene Benutzerkonto an [Standard = (leer)]';
// helpers
$messages['help_path_to_tar'] = 'Pfad zum "tar"-Tool, ben&ouml;tigt zum Entpacken von Template-Sets aus .tar.gz- oder tar.bz2-Dateien [Standard = /bin/tar]';
$messages['help_path_to_gzip'] = 'Pfad zum "gzip"-Tool, ben&ouml;tigt zum Entpacken von Template-Sets aus .tar.gz-Dateien [Standard = /bin/gzip]';
$messages['help_path_to_bz2'] = 'Pfad zum "bzip2"-Tool, ben&ouml;tigt zum Entpacken von Template-Sets aus tar.bz2-Dateien [Standard = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = 'Pfad zum "unzip"-Tool, ben&ouml;tigt zum Entpacken von Template-Sets aus .zip-Dateien [Standard = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'PHP zum entpacken von .zip-Dateien verwenden [Standard = Nein]';
// uploads
$messages['help_uploads_enabled'] = 'Benutzern erlauben, Dateien hochzuladen. Diese Einstellung betrifft die Ressourcenveraltung und das Hochladen benutzerdefinierter Templates und Sprachdateien  [Standard = Ja]';
$messages['help_maximum_file_upload_size'] = 'Maximale Dateigr&ouml;&szlig;e in Bytes. PHP-Beschr&auml;nkungen k&ouml;nnen mit dieser Einstellung nicht umgangen werden. [Standard = 2000000]';
$messages['help_upload_forbidden_files'] = 'Leerzeichen-getrennte Liste der nicht erlaubten Dateitypen. \'*\' und \'?\' k&ouml;nnen verwendet werden [Standard = *.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'Zugang zu Blogs via XMLRPC erm&ouml;glichen [Standard = Ja]';
$messages['help_rdf_enabled'] = 'Atom und RSS Feeds erm&ouml;glichen [Standard = Ja]';
$messages['help_default_rss_profile'] = 'Standardversion von RSS oder Atom, wenn nicht anders festgelegt [Standard = RSS 1.0]';
// security
$messages['help_security_pipeline_enabled'] = 'Sicherheits-Pipeline und alle zugeh&ouml;rigen Filter aktivieren. Diese Einstellung wirkt sich auch auf alle Plugins aus, die neue Filter registrieren [Standard = Ja]';
$messages['help_ip_address_filter_enabled'] = 'IP-Adressfilter aktivieren. Sicherheits-Pipeline mu&szlig; aktiviert sein. [Standard = Ja]';
$messages['help_content_filter_enabled'] = 'Inhalte mit regul&auml;ren Ausdr&uuml;cken filtern. Sicherheits-Pipeline mu&szlig; aktiviert sein. [Standard = Ja]';
$messages['help_maximum_comment_size'] = 'Maximale Gr&ouml;&szlig;e f&uuml;r Kommentare in Bytes. Um die Gr&ouml;&szlig;e nicht zu beschr&auml;nken, stellen Sie 0 ein. [Standard = 0]';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = 'Den bayes\'schen Filter f&uuml;r verbesserte Spam-Filterung verwenden [Standard = Ja]';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'Schwelle, ab der ein Kommentar als Spam betrachtet wird [Standard = 0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'Schwelle, ab der ein Kommentar als "nicht-Spam" betrachtet wird [Standard = 0.2]';
$messages['help_bayesian_filter_min_length_token'] = 'Minimall&auml;nge f&uuml;r Zeichenfolgen, um f&uuml;r den bayes\'schen Filter relevant zu sein [Standard = 3]';
$messages['help_bayesian_filter_max_length_token'] = 'Maximall&auml;nge f&uuml;r Zeichenfolgen, um f&uuml;r den bayes\'schen Filter relevant zu sein  [Standard = 100]';
$messages['help_bayesian_filter_number_significant_tokens'] = 'Anzahl ma&szlig;geblicher Zeichenfolgen [Standard = 15]';
$messages['help_bayesian_filter_spam_comments_action'] = 'Aktion, nachdem ein Kommentar als "Spam" erkannt wurde. W&auml;hlen Sie "L&ouml;schen" erst, wenn der Spam-Filter ausreichend trainiert wurde [Standard = "als Spam makiert speichern"]';
$messages['keep_spam_comments'] = 'In der Datenbank als "Spam" makiert speichern';
$messages['throw_away_spam_comments'] = 'l&ouml;schen (nicht speichern)';
// resources
$messages['help_resources_enabled'] = 'Ressourcenveraltung erm&ouml;glichen [Standard = Ja]';
$messages['help_resources_folder'] = 'Verzeichniss, in das Ressource-Dateien gespeichert werden. W&auml;hlen Sie ein Verzeichniss ausserhalb des Webserver-Verzeichnissbaums, um die Sicherheit zu erh&ouml;hen. [Standard = ./gallery]';
$messages['help_thumbnail_method'] = 'Methode, um Vorschaubilder (Thumbnails) zu erstellen. Falls Sie PHP verwenden, ist GD-Support erforderlich [Standard = PHP]';
$messages['help_path_to_convert'] = 'Pfad zum "convert"-Tool von ImageMagick. Erforderlich, falls die Vorschaubilder mit ImageMagick erstellt werden sollen [Standard = /usr/bin/convert]';
$messages['help_thumbnail_format'] = 'Format, in dem Thumbnails gespeichert werden sollen. [Standard = wie Original]';
$messages['help_thumbnail_height'] = 'Standardh&ouml;he f&uuml;r Thumbnails [Standard = 120]';
$messages['help_thumbnail_width'] = 'Standardbreite f&uuml;r Thumbnails [Standard = 120]';
$messages['help_medium_size_thumbnail_height'] = 'Standardh&ouml;he f&uuml;r Medium-Thumbnails [Standard = 480]';
$messages['help_medium_size_thumbnail_width'] = 'Standardbreite f&uuml;r Medium-Thumbnails  [Standard = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'Seitenverh&auml;hltnis beim Generieren von Thumbnails beibehalten. Generiert eventuell gr&ouml;&szlig;ere Thumbnails als oben eingestellt. [Standard = Ja]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'pLog zwingen nur GD1Funktionen zu nutzen [Standard = Nein]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'Algorithmus um Thumbnails zu gl&auml;tten. Findet nur bei der Erstellung von Thumbnails mit GD Verwendung. [Standard = PHP Imagecopyresampled]';
$messages['help_resources_quota'] = 'Globales Maximalkontingent f&uuml;r Ressource-Dateien in Bytes (z.B. 5242880 Bytes = 5MB), 0 hebt die Beschr&auml;nkung auf. [Standard = 0]';
$messages['help_resource_server_http_cache_enabled'] = 'Support f&uuml;r "If-Modified-Since"-Header und HTTP-conditional Requests aktivieren. Aktivieren Sie diese Einstellung f&uuml;r maximale Bandbreiten Einsparung. [Standard = Nein]';
$messages['help_resource_server_http_cache_lifetime'] = 'Zeit in Mikrosekunden, f&uuml;r die Clients die gecachte Version von Ressourcen nutzen sollen [Standard = 9999999]';
// search
$messages['help_search_engine_enabled'] = 'Suchmaschine aktivieren [Standard = Ja]';
$messages['help_search_in_custom_fields'] = 'Suche in benutzerdefinierten Feldern erm&ouml;glichen [Standard = Ja]';
$messages['help_search_in_comments'] = 'Suche in Kommentaren erm&ouml;glichen [Standard = Ja]';

// cleanup
$messages['purge'] = 'Reinigung';
$messages['cleanup_spam'] = 'Spam Reinigung';
$messages['cleanup_spam_help'] = 'Hiermit werden alle Kommentare entg&uuml;ltig gel&ouml;scht, die als Spam makiert sind. Es ist nicht m&ouml;glich, diese anschlie&szlig;end wiederherzustellen.';
$messages['spam_comments_purged_ok'] = 'Spam Kommentare wurden entg&uuml;ltig gel&ouml;scht';
$messages['cleanup_posts'] = 'Artikel Reinigung';
$messages['cleanup_posts_help'] = 'Hiermit werden alle Artikel entg&uuml;ltig gel&ouml;scht, die von den Benutzern gel&ouml;scht (als "gel&ouml;scht" markiert) worden sind. Es ist nicht m&ouml;glich, diese anschlie&szlig;end wiederherzustellen.';
$messages['posts_purged_ok'] = 'Artikel wurden entg&uuml;ltig gel&ouml;scht';

/// summary ///
// front page
$messages['summary'] = 'Zusammenfassung';
$messages['register'] = 'anmelden';
$messages['summary_welcome'] = 'Willkommen!';
$messages['summary_most_active_blogs'] = 'aktivste Blogs';
$messages['summary_most_commented_articles'] = 'am h&auml;ufigsten kommentierte Artikel';
$messages['summary_most_read_articles'] = 'am h&auml;ufigsten gelesene Artikel';
$messages['password_forgotten'] = 'Haben Sie Ihr Kennwort vergessen?';
$messages['summary_newest_blogs'] = 'Neue Blogs';
$messages['summary_latest_posts'] = 'aktuellste Artikel';
$messages['summary_search_blogs'] = 'Blogs durchsuchen';

// blog list
$messages['updated'] = 'aktualisiert';
$messages['total_reads'] = 'total';

// blog profile
$messages['blog'] = 'Blog';
$messages['latest_posts'] = 'aktuellste Artikel';

// registration
$messages['register_step0_title'] = 'Nutzungsbedingungen akzeptieren';
$messages['decline'] = 'ablehnen';
$messages['accept'] = 'akzeptieren';
$messages['read_service_agreement'] = 'Bitte lesen die Nutzungsbedingungen und klicken auf "akzeptieren, wenn Sie einverstanden sind.';
$messages['register_step1_title'] = 'Benutzerkonto anlegen [1/4]';
$messages['register_step1_help'] = 'Sie m&uuml;ssen zuerst ein neues Benutzerkonto anlegen, wenn Sie ein Blog einrichten m&ouml;chten. Der Benutzer wird der Besitzer dieses Blogs und hat Zugang zu allen Funktionen';
$messages['register_next'] = 'Weiter';
$messages['register_back'] = 'Zur&uuml;ck';
$messages['register_step2_title'] = 'Blog einrichten [2/4]';
$messages['register_blog_name_help'] = 'Name des neuen Blogs';
$messages['register_step3_title'] = 'Template ausw&auml;hlen [3/4]';
$messages['step1'] = 'Schritt 1';
$messages['step2'] = 'Schritt 2';
$messages['step3'] = 'Schritt 3';
$messages['register_step3_help'] = 'W&auml;hlen Sie ein verf&uuml;gbares Template als Standard-Template f&uuml;r Ihr Blog. Es kann sp&auml;ter noch ge&auml;ndert werden.';
$messages['error_must_choose_template'] = 'Bitte w&auml;hlen Sie ein Template';
$messages['select_template'] = 'Template ausw&auml;hlen';
$messages['register_step5_title'] = 'Herzlichen Gl&uuml;ckwunsch! [4/4]';
$messages['finish'] = 'fertig';
$messages['register_need_confirmation'] = 'Eine E-Mail Best&auml;tigung wurde an Ihre E-Mail Adresse geschickt. Klicken Sie auf dendarin enthaltenen Link, sobald Sie die Nachricht erhalten haben, um direkt zu starten!';
$messages['register_step5_help'] = 'Gl&uuml;ckwunsch, das neue Benutzerkonto und das neue Blog wurden erfolgreich angelegt!';
$messages['register_blog_link'] = 'Wenn Sie direkt einen Blick auf Ihr neues Blog werfen m&ouml;chten, gehen Sie zu: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'Wenn Sie direkt einen Artikel verfassen m&ouml;chten, gehen Sie direkt zur <a href="admin.php">Administrationsbereich</a>';
$messages['register_error'] = 'W&auml;hrend des Prozesses ist ein Fehler aufgetreten.';
$messages['error_registration_disabled'] = 'Die Registrierung neuer Blogs ist f&uuml;r diese Site gesperrt worden.';
// registration article topic and text
$messages['register_default_article_topic'] = 'Herzlichen Gl&uuml;ckwunsch!';
$messages['register_default_article_text'] = 'Wenn Sie diesen Artikel lesen k&ouml;nnen, war die Registrierung erfolgreich und Sie k&ouml;nnen direkt mit dem Bloggen beginnen.';
$messages['register_default_category'] = 'Allgemein';
// confirmation email
$messages['register_confirmation_email_text'] = 'Bitte klicken Sie auf den untenstehenden Link, um Ihr Blog zu aktivieren:

%s

Have a nice day';
$messages['error_invalid_activation_code'] = 'Der Best&auml;tigungscode ist leider ung&uuml;ltig.';
$messages['blog_activated_ok'] = 'Herzlichen Gl&uuml;ckwunsch, Ihr neues Benutzerkonto und Ihr neues Blog sind erfolgreich best&auml;tigt!';
// forgot your password?
$messages['reset_password'] = 'Kennwort zur&uuml;cksetzen';
$messages['reset_password_username_help'] = 'Name des Benutzers, dessen Kennwort Sie zur&uuml;cksetzen m&ouml;chten';
$messages['reset_password_email_help'] = 'E-Mail Addresse, die zum Registrieren dieses Benutzers verwendet wurde';
$messages['reset_password_help'] = 'Benutzen Sie dieses Formular, um das Kennwort Ihres Benutzerkontos zur&uuml;ckzusetzen, falls Sie sich daran nicht erinnern k&ouml;nnen. Bitte geben Sie den Benutzernamen und die E-Mail Adresse ein, die zum Registrieren verwendet wurde.';
$messages['error_resetting_password'] = 'Beim Zur&uuml;cksetzen des Kennworts ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingaben und versuchen Sie es erneut.';
$messages['reset_password_error_incorrect_email_address'] = 'Die E-Mail Adresse ist ung&uuml;ltig, oder nicht die Adresse, mit der dieser Benutzer registriert wurde.';
$messages['password_reset_message_sent_ok'] = 'Eine Nachricht mit einem Link wurde an die angegebene E-Mail Adresse gesendet. Bitte klicken Sie auf diesen Link, um Ihr Kennwort zur&uuml;ckzusetzen.';
$messages['error_incorrect_request'] = 'Die URL-Parameter sind ung&uuml;ltig.';
$messages['change_password'] = 'neues Kennwort erstellen';
$messages['change_password_help'] = 'Bitte geben Sie das neue Kennwort ein und best&auml;tigen Sie es.';
$messages['new_password'] = 'Neues Kennwort';
$messages['new_password_help'] = 'Geben Sie hier Ihr neues Kennwort ein.';
$messages['password_updated_ok'] = 'Ihr Kennwort wurde erfolgreich aktualisiert.';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'Diese Seite wird unsch&ouml;n dargestellt, da Sie einen Browser benutzen, der aktelle Web-Standards nicht unterst&uuml;tzt. Um diese Seite richtig darzustellen, empfehlen wir Ihnen den Browser zu <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">aktualisieren</a>. Dies ist kostenlos und wird Sie nicht viel Zeit kosten.';
$messages['jump_to_navigation'] = 'Zur Navigation wechseln.';
$messages['comment_email_never_display'] = 'Zeilenumbr&uuml;che und Abs&auml;tze werden automatisch hinzugef&uuml;gt. Die E-Mail Adresse wird nicht angezeigt.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> erlaubt: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = 'Der <acronym title="Uniform Resource Identifier">URI</acronym> um diesem Artikel einen Trackback hinzuzuf&uuml;gen lautet: ';
$messages['previous_post'] = 'zur&uuml;ck';
$messages['next_post'] = 'vor';
$messages['comment_default_title'] = '(ohne Titel)';
$messages['guestbook'] = 'G&auml;stebuch';
$messages['trackbacks'] = 'Trackbacks';
$messages['menu'] = 'Menu';
$messages['albums'] = 'Alben';
$messages['admin'] = 'Admin';

// Übersetzung von Markus Vortkamp (pLog@markus-vortkamp.de). Bei Fehlern in oder Fragen zur Übersetzung freue ich mich über eine 
// kurze E-Mail. Bei allgemeinen Problemen mit pLog suchen Sie bitte Hilfe auf den offiziellen pLog-Seiten unter:
//
//                                                    http://www.plogworld.net/
//
?>
