<?php
// Modified 24-07-2005 - MvO

// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'iso-8859-1';
$messages['locale_description'] = 'Nederlands locale bestand voor pLog';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d-%m-%Y %H:%M';

// days of the week
$messages['days'] = Array('Zondag', 'Maandag', 'Dindsag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag' );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( 'Zo', 'Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages['months'] = Array( 'Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December' );
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
$messages['message'] = 'Message';
$messages['error'] = 'Error';
$messages['date'] = 'Date';

// miscellaneous texts
$messages['of'] = 'van';
$messages['recently'] = 'recent...';
$messages['comments'] = 'reacties';
$messages['comment on this'] = 'Reacties';
$messages['my_links'] = 'mijn links';
$messages['archives'] = 'archief';
$messages['search'] = 'zoeken';
$messages['calendar'] = 'Kalender';
$messages['search_s'] = 'Zoeken';
$messages['search_this_blog'] = 'Doorzoek deze blog:';
$messages['about_myself'] = 'Wie ben ik?';
$messages['permalink_title'] = 'PermaLink naar het archief';
$messages['permalink'] = 'PermaLink';
$messages['posted_by'] = 'Geplaatst door';
$messages['reply'] = 'Reacties';

// add comment form
$messages['add_comment'] = 'Voeg reactie toe';
$messages['comment_topic'] = 'Onderwerp';
$messages['comment_text'] = 'Tekst';
$messages['comment_username'] = 'Je naam';
$messages['comment_email'] = 'Je e-mail adres (indien aanwezig)';
$messages['comment_url'] = 'Je persoonlijke website (indien aanwezig)';
$messages['comment_send'] = 'Verstuur';
$messages['comment_added'] = 'Reactie toegevoegd!';
$messages['comment_add_error'] = 'Fout tijdens toevoegen reactie';
$messages['article_does_not_exist'] = 'Het artikel bestaat niet';
$messages['no_posts_found'] = 'Geen documenten gevonden';
$messages['user_has_no_posts_yet'] = 'De gebruiker heeft nog geen documenten geplaatst';
$messages['back'] = 'Terug';
$messages['post'] = 'document';
$messages['trackbacks_for_article'] = 'Trackbacks voor artikel: ';
$messages['trackback_excerpt'] = 'Samenvatting';
$messages['trackback_weblog'] = 'Weblog';
$messages['search_results'] = 'Zoekresultaten';
$messages['search_matching_results'] = 'De volgende documenten voldoen aan de zoekcriteria: ';
$messages['search_no_matching_posts'] = 'Er zijn geen documenten gevonden';
$messages['read_more'] = '(Meer)';
$messages['syndicate'] = 'Verkort lezen';
$messages['main'] = 'Hoofdmenu';
$messages['about'] = 'Over...';
$messages['download'] = 'Download';

////// error messages /////
$messages['error_fetching_article'] = 'Het opgevraagde artikel is niet gevonden.';
$messages['error_fetching_articles'] = 'Het artikel kan niet worden opgevraagd.';
$messages['error_trackback_no_trackback'] = 'Er zijn geen trackbacks gevonden voor dit artikel.';
$messages['error_incorrect_article_id'] = 'Het artikel ID bestaat.';
$messages['error_incorrect_blog_id'] = 'Het blog ID gestaat niet.';
$messages['error_comment_without_text'] = 'Je moet tenminste enige tekst invoeren.';
$messages['error_comment_without_name'] = 'Je moet tenminste je naam of bijnaam invoeren.';
$messages['error_adding_comment'] = 'Fout tijdens het toevoegen van commentaar.';
$messages['error_incorrect_parameter'] = 'Foute parameter.';
$messages['error_parameter_missing'] = 'Er ontbreek een parameter missing uit het verzoek.';
$messages['error_comments_not_enabled'] = 'de commentaar functionaliteit is op deze site uitgeschakeld.';
$messages['error_incorrect_search_terms'] = 'Foutieve zoekopdracht opgegeven';
$messages['error_no_search_results'] = 'Er zijn geen resultaten gevonden die voldoen aan de zoekopdracht';
$messages['error_no_albums_defined'] = 'Er zijn geen albums beschikbaar in deze blog.';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Login';
$messages['welcome_message'] = 'Welkme bij pLog';
$messages['error_incorrect_username_or_password'] = 'Foutieve inlognaam of wachtwoord.';
$messages['error_dont_belong_to_any_blog'] = 'Sorry, je bent nog niet aan een blog gekoppeld.';
$messages['logout_message'] = 'Je bent uitgelogd..';
$messages['logout_message_2'] = 'Klik <a href="%1$s">hier</a> om naar %2$s te gaan</a>.';
$messages['error_access_forbidden'] = 'Geen toegang. Je moet eerst hier inloggen.';
$messages['username'] = 'Inlognaam';
$messages['password'] = 'Wachtwoord';

// dashboard
$messages['dashboard'] = 'Onderhoud';
$messages['recent_articles'] = 'Meest recente artikelen';
$messages['recent_comments'] = 'Meest recente commentaar';
$messages['recent_trackbacks'] = 'Meest recente Trackbacks';
$messages['blog_statistics'] = 'Blog statistieken';
$messages['total_posts'] = 'Aantal artikelen';
$messages['total_comments'] = 'Aantal commentaar';
$messages['total_trackbacks'] = 'Aantal Trackbacks';
$messages['total_viewed'] = 'Aantal bekeken documenten';
$messages['in'] = 'in';

// menu options
$messages['newPost'] = 'Nieuw document';
$messages['Manage'] = 'Beheer documenten';
$messages['managePosts'] = 'Beheer documenten';
$messages['editPosts'] = 'Documenten';
$messages['editArticleCategories'] = 'Categorieen';
$messages['newArticleCategory'] = 'Nieuwe categorie';
$messages['manageLinks'] = 'Beheer links';
$messages['editLinks'] = 'Links';
$messages['newLink'] = 'Niewe link';
$messages['editLink'] = 'Wijzig link';
$messages['editLinkCategories'] = 'Link categorie';
$messages['newLinkCategory'] = 'Nieuwe link categorie';
$messages['editLinkCategory'] = 'Wijzig link category';
$messages['manageCustomFields'] = 'Beheer eigen velden';
$messages['blogCustomFields'] = 'Eigen velden';
$messages['newCustomField'] = 'Nieuw eigen veld';
$messages['resourceCenter'] = 'Bestandsbeheer';
$messages['resources'] = 'Bestanden';
$messages['newResourceAlbum'] = 'Nieuw album';
$messages['newResource'] = 'Nieuw bestand';
$messages['controlCenter'] = 'Beheer blog';
$messages['manageSettings'] = 'Instellingen';
$messages['blogSettings'] = 'Blog instellingen';
$messages['userSettings'] = 'Gebruikersinstellingen';
$messages['pluginCenter'] = 'Plugin beheer';
$messages['Stats'] = 'Statistieken';
$messages['manageBlogUsers'] = 'Beheer blog gebruikers';
$messages['newBlogUser'] = 'Nieuwe blog gebruiker';
$messages['showBlogUsers'] = 'Blog gebruikers';
$messages['manageBlogTemplates'] = 'Beheer blog templates';
$messages['newBlogTemplate'] = 'Nieuwe blog template';
$messages['blogTemplates'] = 'Blog templates';
$messages['adminSettings'] = 'Site beheer';
$messages['Users'] = 'Gebruikers';
$messages['createUser'] = 'Maak gebruiker aan';
$messages['editSiteUsers'] = 'Site gebruikers';
$messages['Blogs'] = 'Beheer blogs';
$messages['createBlog'] = 'Maak blog aan';
$messages['editSiteBlogs'] = 'Blogs';
$messages['Locales'] = 'Beheer locales';
$messages['newLocale'] = 'Nieuwe locale';
$messages['siteLocales'] = 'Site locales';
$messages['Templates'] = 'Beheer templates';
$messages['newTemplate'] = 'Nieuwe template';
$messages['siteTemplates'] = 'Site templates';
$messages['GlobalSettings'] = 'Site instellingen';
$messages['editSiteSettings'] = 'Algemeen';
$messages['summarySettings'] = 'Samenvatting';
$messages['templateSettings'] = 'Templates';
$messages['urlSettings'] = 'URLs';
$messages['emailSettings'] = 'E-mail';
$messages['uploadSettings'] = 'Uploads';
$messages['helpersSettings'] = 'Externe helpers';
$messages['interfacesSettings'] = 'Interfaces';
$messages['securitySettings'] = 'Beveiliging';
$messages['bayesianSettings'] = 'Bayesiaans filter';
$messages['resourcesSettings'] = 'Bestanden';
$messages['searchSettings'] = 'Zoeken';
$messages['cleanUpSection'] = 'Opschonen';
$messages['cleanUp'] = 'Opschonen';
$messages['editResourceAlbum'] = 'Wijzig album';
$messages['resourceInfo'] = 'Wijzig bestand';
$messages['editBlog'] = 'Wijzig blog';
$messages['Logout'] = 'Uitloggen';

// new post
$messages['topic'] = 'Onderwerp';
$messages['topic_help'] = 'Titel van dit document';
$messages['text'] = 'Tekst';
$messages['text_help'] = 'Tekst van het document. Dit gedeelte verschijnt altijd op de voorpagina';
$messages['extended_text'] = 'Uitgebreide tekst';
$messages['extended_text_help'] = 'Uitgebreide tekst. Wanneer dit ingevuld wordt, kan dit alleen in het artikel of op de voorpagina verschijnen. Zie de blog instellingen voor meer informatie';
$messages['post_slug'] = 'Slug';
$messages['post_slug_help'] = 'Een slug wordt gebruikt om fraaie permanente links te maken';
$messages['date'] = 'Datum';
$messages['post_date_help'] = 'De datum vanaf wanneer dit document wordt gepubliceerd';
$messages['status'] = 'Status';
$messages['post_status_help'] = 'Kies één van de volgende statussen';
$messages['post_status_published'] = 'Gepubliceerd';
$messages['post_status_draft'] = 'Ontwerp';
$messages['post_status_deleted'] = 'Verwijderd';
$messages['categories'] = 'Categorieën';
$messages['post_categories_help'] = 'Kies één of meer categorieen';
$messages['post_comments_enabled_help'] = 'Sta commentaar toe';
$messages['send_notification_help'] = 'Bericht bij nieuw commentaar';
$messages['send_trackback_pings_help'] = 'Verstuur Trackbacks';
$messages['send_xmlrpc_pings_help'] = 'Verstuur XMLRPC pings';
$messages['save_draft_and_continue'] = 'Sla op als ontwerp';
$messages['preview'] = 'Bekijk';
$messages['add_post'] = 'Publiceer document';
$messages['error_saving_draft'] = 'Er is een fout opgetreden tijdens het opslaan als ontwerp';
$messages['draft_saved_ok'] = 'Document is opgeslagen als ontwerp';
$messages['error_sending_request'] = 'Er is een fout opgetreden tijdens de verwerking';
$messages['error_no_category_selected'] = 'Selecteer tenminste één categorie';
$messages['error_missing_post_topic'] = 'Voer een onderwerp in';
$messages['error_missing_post_text'] = 'Voer wat tekst in';
$messages['error_adding_post'] = 'Er is een fout opgetreden tijdens het opslaan van het bericht';
$messages['post_added_not_published'] = 'Het document is opgeslagen maar niet gepubliceerd';
$messages['post_added_ok'] = 'Het document is opgeslagen.';
$messages['send_notifications_ok'] = 'Er wordt een bericht verstuurd zodra er commentaar of een Trackback is geplaatst.';

// send trackbacks
$messages['error_sending_trackbacks'] = 'Er is een fout opgetreden bij het versturen van de volgende Trackbacks';
$messages['send_trackbacks_help'] = 'Selecteer de URLs waarnaar de Trackback pings moeten worden verstuurd. Controleer dat deze sites Trackback ondersteunt.';
$messages['send_trackbacks'] = 'Verstuur Trackbacks';
$messages['ping_selected'] = 'Ping geselecteerd';
$messages['trackbacks_sent_ok'] = 'Trackbacks zijn naar de geselecteerde URLs verstuurd';

// posts page
$messages['show_by'] = 'Sorteer op';
$messages['category'] = 'Categorie';
$messages['author'] = 'Auteur';
$messages['post_status_all'] = 'Alles';
$messages['author_all'] = 'Allen';
$messages['search_terms'] = 'Zoekopdracht';
$messages['show'] = 'Toon';
$messages['delete'] = 'Verwijder';
$messages['actions'] = 'Acties';
$messages['all'] = 'Alles';
$messages['category_all'] = 'Allen';
$messages['error_incorrect_article_id'] = 'Foutief artikel ID';
$messages['error_deleting_article'] = 'Fout tijdens het verwijderen van document "%s"';
$messages['article_deleted_ok'] = 'Document "%s" verwijderd';
$messages['articles_deleted_ok'] = '%s documenten verwijderd';
$messages['error_deleting_article2'] = 'Fout tijdens het verwijderen van het document met ID  "%s"';

// edit post page
$messages['update'] = 'Wijzigen';
$messages['editPost'] = 'Wijzig document';
$messages['error_fetching_post'] = 'Fout tijdens ophalen van het document';
$messages['post_updated_ok'] = 'Document "%s" is gewijzigd';
$messages['error_updating_post'] = 'Fout tijdens wijzigen van het document';
$messages['notification_added'] = 'Er wordt een bericht verstuurd zodra er commentaar of een Trackback is geplaatst';
$messages['notification_removed'] = 'Er wordt geen bericht verstuurd na plaatsing van commentaar of Trackbacks';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = 'Alles';
$messages['comment_status_spam'] = 'Spam';
$messages['comment_status_nonspam'] = 'geen spam';
$messages['error_fetching_comments'] = 'Fout tijdens ophalen van commentaar';
$messages['error_deleting_comments'] = 'Fout tijdens verwijderen van commentaar, of niets geselecteerd';
$messages['comment_deleted_ok'] = 'Commentaar "%s" verwijderd';
$messages['comments_deleted_ok'] = '%s stuks commentaar verwijderd';
$messages['error_deleting_comment'] = 'Fout tijdens verwijderen van commentaar "%s"';
$messages['error_deleting_comment2'] = 'Fout tijdens verwijderen van commentaar met ID %s';
$messages['editComments'] = 'Commentaar';
$messages['mark_as_spam'] = 'Markeer als spam';
$messages['mark_as_no_spam'] = 'Markeer als geen spam';
$messages['error_incorrect_comment_id'] = 'Het commentaar ID is niet correct';
$messages['error_marking_comment_as_spam'] = 'Fout tijdens het markeren als spam';
$messages['comment_marked_as_spam_ok'] = 'Het commentaar is gemarkeerd als spam';
$messages['error_marking_comment_as_nonspam'] = 'Fout tijdens het markeren als geen spam';
$messages['comment_marked_as_nonspam_ok'] = 'Hete commentaar is gemarkeerd als geen spam';

// post trackbacks
$messages['blog'] = 'Blog';
$messages['excerpt'] = 'Samenvatting';
$messages['error_fetching_trackbacks'] = 'Fout tijdens het ophalen van Trackbacks';
$messages['error_deleting_trackbacks'] = 'Fout tijdens verwijderen van Trackbacks, of geen items geselecteerd';
$messages['error_deleting_trackback'] = 'Fout tijdens verwijderen van Trackback "%s"';
$messages['error_deleting_trackback2'] = 'Fout tijdens verwijderen van Trackback met ID "%s"';
$messages['trackback_deleted_ok'] = 'Trackback "%s" verwijderd';
$messages['trackbacks_deleted_ok'] = '%s Trackbacks verwijderd';
$messages['editTrackbacks'] = 'Trackbacks';

// post statistics
$messages['referrer'] = 'Verwijzing';
$messages['hits'] = 'Hits';
$messages['error_no_items_selected'] = 'Er zijn geen items geselecteerd om te verwijderen';
$messages['error_deleting_referrer'] = 'Fout tijdens verwijderen van verwijzing "%s"';
$messages['error_deleting_referrer2'] = 'Fout tijden verwijderen van de verwijzing met ID "%s"';
$messages['referrer_deleted_ok'] = 'Verwijzing "%s" verwijderd';
$messages['referrers_deleted_ok'] = '%s verwijzingen verwijderd';

// categories
$messages['posts'] = 'Documenten';
$messages['show_in_main_page'] = 'Toon op de voorpagina';
$messages['error_incorrect_category_id'] = 'Incorrecte categorie of geen items geselecteerd';
$messages['error_category_has_articles'] = 'De categorie "%s" wordt momenteel gebruikt door sommige artikelen. Deze artikelen moeten eerst worden aangepast voordat de categorie verwijderd kan worden';
$messages['category_deleted_ok'] = 'Categorie "%s" verwijderd';
$messages['categories_deleted_ok'] = '%s categorieen verwijderd';
$messages['error_deleting_category'] = 'Fout tijdens verwijderen van categorie "%s"';
$messages['error_deleting_category2'] = 'Fout tijdens verwijderen van de categorie met ID "%s"';
$messages['yes'] = 'Ja';
$messages['no'] = 'Nee';

// new category
$messages['name'] = 'Naam';
$messages['category_name_help'] = 'Naam waaronder de categorie wordt weergegeven';
$messages['description'] = 'Omschrijving';
$messages['category_description_help'] = 'Waarvoor wordt deze categorie gebruikt';
$messages['show_in_main_page_help'] = 'Moeten documenten in deze categorie worden getoond op de hoofdpagina, of alleen als er in deze categorie wordt gekeken';
$messages['error_empty_name'] = 'Voer een naam in';
$messages['error_empty_description'] = 'Voer een omschrijving in';
$messages['error_adding_article_category'] = 'Fout tijdens toevoegen van de categorie. Controleer het ingevoerde en probeer het opnieuw';
$messages['category_added_ok'] = 'Categorie "%s" is toegevoegd aan de blog';
$messages['add'] = 'Toevoegen';
$messages['reset'] = 'Opnieuw';

// update category
$messages['error_updating_article_category'] = 'Fout tijdens aanpassen van de categorie';
$messages['error_fetching_category'] = 'Fout tijdens ophalen van categorieen';
$messages['article_category_updated_ok'] = 'Categorie "%s" is aangepast';

// links
$messages['feed'] = 'Verkort lezen';
$messages['error_no_links_selected'] = 'Het link ID is incorrect of geen items geselecteerd';
$messages['error_incorrect_link_id'] = 'Het link ID is incorrect';
$messages['error_removing_link'] = 'Fout tijdens verwijderen van link "%s"';
$messages['error_removing_link2'] = 'Fout tijdens verwijderen van de link met ID "%s"';
$messages['link_deleted_ok'] = 'Link "%s" is verwijderd';
$messages['links_deleted_ok'] = '%s links verwijderd';

// new link
$messages['link_name_help'] = 'Naam voor deze link';
$messages['link_url_help'] = 'Adres waar de link naar verwijst';
$messages['link_description_help'] = 'Korte omschrijving van de link';
$messages['link_feed_help'] = 'Er kan ook een link naar één van de RSS of Atom feeds worden opgegeven';
$messages['link_category_help'] = 'Kies een categorie voor deze link';
$messages['error_adding_link'] = 'Fout tijdens toevoegen van de link. Controleer de gegevens en probeer het opnieuw';
$messages['error_invalid_url'] = 'Het adres is incorrect';
$messages['link_added_ok'] = 'Link "%s" is toegevoegd';

// update link
$messages['error_updating_link'] = 'Fout tijdens het aanpassen van de link. Controleer de gegevens en probeer het opnieuw';
$messages['error_fetching_link'] = 'Fout tijdens ophalen van de link';
$messages['link_updated_ok'] = 'Link "%s" is aangepast';

// link categories
$messages['links'] = 'Links';
$messages['error_invalid_link_category_id'] = 'De link categorie is incorrect of niet geselecteerd';
$messages['error_links_in_link_category'] = 'Link categorie "%s" wordt gebruikt door sommige links. Pas deze links eerst aan en probeer het opnieuw';
$messages['error_removing_link_category'] = 'Fout tijdens verwijderen van link categorie "%s"';
$messages['link_category_deleted_ok'] = 'Link categorie "%s" verwijderd';
$messages['link_categories_deleted_ok'] = '%s link categorieen verwijderd';
$messages['error_removing_link_category2'] = 'Fout tijdens verwijderen van link categorie met ID "%s"';

// new link category
$messages['link_category_name_help'] = 'Naam voor deze link categorie';
$messages['error_adding_link_category'] = 'Fout tijdens toevoegen van de link categorie';
$messages['link_category_added_ok'] = 'Link categorie "%s" is toegevoegd';

// edit link category
$messages['error_updating_link_category'] = 'Fout tijdens aanpassen van de link categorie. Controleer de gegevens en probeer het opnieuw.';
$messages['link_category_updated_ok'] = 'Link categorie "%s" aangepast';
$messages['error_fetching_link_category'] = 'Fout tijdens ophalen van de link categorie';

// custom fields
$messages['type'] = 'Type';
$messages['hidden'] = 'Verborgen';
$messages['fields_deleted_ok'] = '%s eigen velden verwijderd';
$messages['field_deleted_ok'] = 'Eigen veld "%s" verwijderd';
$messages['error_deleting_field'] = 'Fout tijdens verwijderen eigen veld "%s"';
$messages['error_deleting_field2'] = 'Fout tijdens verwijderen eigen veld met ID "%s"';
$messages['error_incorrect_field_id'] = 'De naam van het eigen veld is incorrect';

// new custom field
$messages['field_name_help'] = 'Naam die wordt gebruikt om naar dit veld te verwijzen';
$messages['field_description_help'] = 'Korte omschrijving van het eigen veld, dat wordt getoond bij het toevoegen of aanpassen van berichten';
$messages['field_type_help'] = 'Kies één van de veldtypes';
$messages['field_hidden_help'] = 'Verborgen velden worden niet getoond bij het aanmaken of wijzigen van berichten. Deze worde voornamelijk gebruikt door plugins';
$messages['error_adding_custom_field'] = 'Fout tijdens toevoegen van het eigen veld. Controleer de gegevens en probeer het opnieuw';
$messages['custom_field_added_ok'] = 'Eigen veld "%s" toegevoegd';
$messages['text_field'] = 'Tekstveld';
$messages['text_area'] = 'Textblok';
$messages['checkbox'] = 'Keuzeveld';
$messages['date_field'] = 'Datumveld';

// edit custom field
$messages['error_fetching_custom_field'] = 'Fout tijdens ophalen van het eigen veld';
$messages['error_updating_custom_field'] = 'Fout tijdens aanpassen van het eigen veld. Controleer de gegevens en probeer het opnieuw';
$messages['custom_field_updated_ok'] = 'Eigen veld "%s" is aangepast';

// resources
$messages['root_album'] = 'Hoofdalbum';
$messages['num_resources'] = 'Aantal bestanden';
$messages['total_size'] = 'Totale grootte';
$messages['album'] = 'Album';
$messages['error_incorrect_album_id'] = 'Het album ID is niet correct';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'Het is niet mogelijk om de noodzakelijke folders aan te maken. Hiervoor kunnen diverse redenen zijn, zoals een PHP installatie in safe mode, of onvoldoende rechten op het systeem. Er kan geprobeerd worden om deze operatie zelf uit te voeren, door handmatig de volgende folders aan te maken: <br/><br/>%s<br/><br/>Als deze folders al bestaan, controleer dan dat de webserver in deze folders kan lezen en schrijven.';
$messages['items_deleted_ok'] = '%s items verwijderd';
$messages['error_album_has_children'] = 'Album "%s" heeft elementen in zich. Verwijderd deze eerst, en probeer het dan opnieuw';
$messages['item_deleted_ok'] = 'Item "%s" verwijderd';
$messages['error_deleting_album'] = 'Fout tijdens verwijderen van album "%s"';
$messages['error_deleting_album2'] = 'Fout tijdens verwijderen van album met ID "%s"';
$messages['error_deleting_resource'] = 'Fout tijdens verwijderen van bestand "%s"';
$messages['error_deleting_resource2'] = 'Fout tijdens verwijderen van bestand met ID "%s"';
$messages['error_no_resources_selected'] = 'Er zijn niets geselecteerd om te verwijderen';
$messages['resource_deleted_ok'] = 'Bestand "%s" verwijderd';
$messages['album_deleted_ok'] = 'Album "%s" verwijderd';
$messages['add_resource'] = 'Voeg bestand toe';
$messages['add_resource_preview'] = 'Voeg kleine thumbnail toe';
$messages['add_resource_medium'] = 'Voeg middelgrote thumbnail toe';
$messages['add_album'] = 'Voeg album toe';

// new album
$messages['album_name_help'] = 'Verkorte naam voor het nieuwe album';
$messages['parent'] = 'Parent';
$messages['no_parent'] = 'Geen parent';
$messages['parent_album_help'] = 'Gebruik dit voor albums in albums, om zo beter bestanden te kunnen organiseren';
$messages['album_description_help'] = 'Omschrijving van de inhoud van dit album';
$messages['error_adding_album'] = 'Fout tijdens toevoegen van het album. Controleer de gegevens en probeer het opnieuw';
$messages['album_added_ok'] = 'Album "%s" toegevoegd';

// edit album
$messages['error_incorrect_album_id'] = 'Het album ID is niet correct';
$messages['error_fetching_album'] = 'Fout tijdens ophalen van het album';
$messages['error_updating_album'] = 'Fout tijdens het aanpassen van het album. Controleer de gegevens en probeer het opnieuw';
$messages['album_updated_ok'] = 'Album "%s" aangepast';
$messages['show_album_help'] = 'Indien uitgeschakeld wordt het album niet getoond in de lijst van beschikbare albums voor deze blog';

// new resource
$messages['file'] = 'Bestand';
$messages['resource_file_help'] = 'Bestand dat aan deze blog wordt toegevoegd. Klik op "Veld toevoegen" om meerdere bestanden ineens toe te voegen';
$messages['add_field'] = 'Veld toevoegen';
$messages['resource_description_help'] = 'Omschrijving van de inhoud van dit veld';
$messages['resource_album_help'] = 'Kies het album waar dit bestand in wordt geplaatst';
$messages['error_no_resource_uploaded'] = 'Er is geen bestand opgegeven om toe te voegen';
$messages['resource_added_ok'] = 'Bestand "%s" toegevoegd';
$messages['error_resource_forbidden_extension'] = 'Bestand niet toegevoed omdat het type ervan niet is toegestaan';
$messages['error_resource_too_big'] = 'Bestand niet toegevoegd omdat het te groot is';
$messages['error_uploads_disabled'] = 'Bestand niet toegevoegd omdat deze functionaliteit is uitgeschakeld';
$messages['error_quota_exceeded'] = 'Bestand niet toegevoegd omdat de toegewezen schijfruimte is overschreden';
$messages['error_adding_resource'] = 'Fout tijdens toevoegen van het bestand';

// edit resource
$messages['editResource'] = 'Bestand aanpassen';
$messages['resource_information_help'] = 'Hieronder kun je informatie over dit bestand terugvinden';
$messages['information'] = 'Informatie';
$messages['size'] = 'Grootte';
$messages['format'] = 'Formaat';
$messages['dimensions'] = 'Afmetingen';
$messages['bits_per_sample'] = 'Bits per sample';
$messages['sample_rate'] = 'Sample rate';
$messages['number_of_channels'] = 'Aantal kanalen';
$messages['legnth'] = 'Lengte';
$messages['thumbnail_format'] = 'Thumbnail formaat';
$messages['regenerate_preview'] = 'Herbereken preview';
$messages['error_fetching_resource'] = 'Fout tijdens ophalen van het bestand';
$messages['error_updating_resource'] = 'Fout tijdens aanpassen van het bestand';
$messages['resource_updated_ok'] = 'Bestand "%s" aangepast';

// blog settings
$messages['blog_link'] = 'Blog link';
$messages['blog_link_help'] = 'Permanente link naar deze blog';
$messages['blog_name_help'] = 'Titel van deze blog';
$messages['blog_description_help'] = 'Omschrijving van de inhoud van deze blog';
$messages['language'] = 'Taal';
$messages['blog_language_help'] = 'Gebruikte taal van deze blog, voor zowel de publieke als administratieve kant';
$messages['max_main_page_items'] = 'Aantal items op de hoofdpagina';
$messages['max_main_page_items_help'] = 'Aantal documenten dat minimaal op de hoofdpagina moet worden getoond';
$messages['max_recent_items'] = 'Aantal recente items';
$messages['max_recent_items_help'] = 'Maximum aantal documenten dat als recent op de hoofdpagina wordt getoond';
$messages['template'] = 'Template';
$messages['choose'] = 'Kies';
$messages['blog_template_help'] = 'Template dat wordt gebruikt om de inhoud van deze blog weer te geven. Deze lijst bevat globale templates plus alle templates die voor deze blog zijn geupload';
$messages['use_read_more'] = 'Gebruik "meer..." link in berichten';
$messages['use_read_more_help'] = 'Indien aangeschakeld wordt alleen de tekst uit het bovenste tekstkader weergegeven op de hoofdpagina. Om de tekst uit het onderste tekstkader weer te geven wordt een "meer..." link onderaan het bericht toegevoegd';
$messages['enable_wysiwyg'] = 'Gebruik de WYSIWYG invoermogelijkheid';
$messages['enable_wysiwyg_help'] = 'Maakt gebruik van een krachtige ("What You See Is What You Get" berichteninvoer om berichten als tekst of HTML op te maken. Dit werkt alleen voor browsers vanaf Internet Explorer 5.5 of Mozilla/Firefox 1.3';
$messages['enable_comments'] = 'Voeg commentaar toe';
$messages['enable_comments_help'] = 'Maak commentaar standaard beschikbaar voor alle berichten. Dit kan later per bericht aan/uitgeschakeld worden voor nieuwe of bestaande berichten';
$messages['show_future_posts'] = 'Toon toekomstige berichten in de kalender';
$messages['show_future_posts_help'] = 'Zorgt ervoor dat berichten met een plaatsingsdatum in de toekomst in de kalender zichtbaar zijn voor gebruikers';
$messages['comments_order'] = 'Volgorde commentaar';
$messages['comments_order_help'] = 'Volgorde waarop commentaar op de voorpagina getoond wordt';
$messages['oldest_first'] = 'Oude berichten eerst';
$messages['newest_first'] = 'Nieuwe berichten eerst';
$messages['categories_order'] = 'Volgorde commentaar';
$messages['categories_order_help'] = 'Volgorde waarop categorieen op de voorpagina getoond worden';
$messages['most_recent_updated_first'] = 'Laatst aangepaste eerst';
$messages['alphabetical_order'] = 'Alfabetisch, A eerst';
$messages['reverse_alphabetical_order'] = 'Alfabetisch, Z eerst';
$messages['most_articles_first'] = 'Meeste artikelen eerst';
$messages['link_categories_order'] = 'Volgorde link categorieen';
$messages['link_categories_order_help'] = 'Volgorde waarop link categorieen op de voorpagina worden getoond';
$messages['most_links_first'] = 'Meeste links eerst';
$messages['most_links_last'] = 'Meeste links laatst';
$messages['time_offset'] = 'Tijd offset';
$messages['time_offset_help'] = 'Tijdverschil in uren dat dynamisch aan elk bericht wordt toegevoegd';
$messages['close'] = 'Sluiten';
$messages['select'] = 'Kiezen';
$messages['error_updating_settings'] = 'Fout tijdens aanpassen van de blog instellingen. Controleer de gegevens en probeer het opnieuw';
$messages['error_invalid_number'] = 'Het nummer is niet correct';
$messages['error_incorrect_time_offset'] = 'De tijd offset is niet correct';
$messages['blog_settings_updated_ok'] = 'Blog instellingen aangepast';
$messages['hours'] = 'Uur';

// user settings
$messages['username_help'] = 'Algemene gebruikersnaam. Deze kan niet worden aangepast';
$messages['full_name'] = 'Volledige naam';
$messages['full_name_help'] = 'De volledige naam van de gebruiker';
$messages['password_help'] = 'Typ en bevestig een nieuw wachtwoord, of laat deze leeg als het niet gewijzigd hoeft te worden';
$messages['confirm_password'] = 'Bevestig wachtwoord';
$messages['email'] = 'E-mail';
$messages['email_help'] = 'E-mail adres waar notificaties naartoe worden verstuurd';
$messages['bio'] = 'Wie ben je';
$messages['bio_help'] = 'Hier kun je een uitgebreide beschrijving en biografie van jezelf ingeven';
$messages['picture'] = 'Foto';
$messages['user_picture_help'] = 'Kies één van de geuploade bestanden als persoonlijke foto';
$messages['error_invalid_password'] = 'Het wachtwoord is niet correct. Zorg dat het niet te kort is.';
$messages['error_passwords_dont_match'] = 'De wachtwoorden komen niet overeen';
$messages['error_incorrect_email_address'] = 'Het e-mail adres is niet correct';
$messages['error_updating_user_settings'] = 'Fout tijdens aanpassen van de gebruikergegevens. Controleer de gegevens en probeer het opnieuw';
$messages['user_settings_updated_ok'] = 'Gebruikersinstellingen aangepast';
$messages['resource'] = 'Bestand';

// plugin centre
$messages['identifier'] = 'ID';
$messages['error_plugins_disabled'] = 'Sorry, Plugins zijn voor deze site uitgeschakeld.';

// blog users
$messages['revoke_permissions'] = 'Rechten intrekken';
$messages['error_no_users_selected'] = 'Er zijn geen gebruikers geselecteerd';
$messages['user_removed_from_blog_ok'] = 'Gebruiker "%s" heeft geen rechten meer om deze blog aan te passen';
$messages['users_removed_from_blog_ok'] = '%s gebruikers hebben geen rechten meer om deze blog aan te passen';
$messages['error_removing_user_from_blog'] = 'Fout tijdens verwijderen van rechten voor gebruiker "%s"';
$messages['error_removing_user_from_blog2'] = 'Fout tijdens verwijderen van rechten van de gebruiker met ID "%s"';

// new blog user
$messages['new_blog_username_help'] = 'Gebruikersnaam van de persoon die je toegang tot deze blog wilt geven. Deze gebruikers krijgen alleen toegang tot de "Beheer" and "Bestanden" gedeelten.';
$messages['send_notification'] = 'Stuur bericht';
$messages['send_user_notification_help'] = 'Stuur een e-mail naar deze gebruiker';
$messages['notification_text'] = 'Tekst voor dit bericht';
$messages['notification_text_help'] = 'Tekst die aan dit bericht wordt toegevoegd';
$messages['error_adding_user'] = 'Fout tijdens toekennen van rechten voor de gebruiker. Controleer de gegevens en probeer het opnieuw';
$messages['error_empty_text'] = 'Voer een bericht in';
$messages['error_adding_user'] = 'Fout tijdens toevoegen van de gebruiker. Controleer de gegevens en probeer het opnieuw';
$messages['error_invalid_user'] = 'Gebruiker "%s" is niet toe te voegen of bestaat niet';
$messages['user_added_to_blog_ok'] = 'Gebruiker "%s" heeft rechten tot deze blog gekregen';

// blog templates
$messages['error_no_templates_selected'] = 'Er zijn geen templated geselecteerd';
$messages['error_template_is_current'] = 'Template "%s" kan iet worden verwijderd omdat deze nu in gebruik is';
$messages['error_removing_template'] = 'Fout tijdens verwijderen van template "%s"';
$messages['template_removed_ok'] = 'Template "%s" verwijderd';
$messages['templates_removed_ok'] = '%s templates verwijderd';

// new blog template
$messages['template_installed_ok'] = 'Template "%s" is toegevoegd';
$messages['error_installing_template'] = 'Fout tijdens installatie van template "%s"';
$messages['error_missing_base_files'] = 'Sommige van de bestanden voor deze template ontbreken';
$messages['error_add_template_disabled'] = 'Nieuwe templates kunnen niet worden toegevoegd omdat dit voor deze site is uitgeschakeld';
$messages['error_must_upload_file'] = 'Er is geen template geupload';
$messages['error_uploads_disabled'] = 'Uploads zijn voor deze site uitgeschakeld';
$messages['error_no_new_templates_found'] = 'Geen nieuwe templates gevonden';
$messages['error_template_not_inside_folder'] = 'Alle bestanden in een template moeten in één folder met de naam van die template worden geplaatst';
$messages['error_missing_base_files'] = 'Enkele standaard bestanden voor deze template ontbreken';
$messages['error_unpacking'] = 'Fout tijdens uitpakken van het bestand';
$messages['error_forbidden_extensions'] = 'De template bevat bestanden met niet-toegestane extensies';
$messages['error_creating_working_folder'] = 'Fout tijdens aanmaken van een tijdelijke map voor het uitpakken van de bestanden';
$messages['error_checking_template'] = 'Fout tijdens controle van de template %s';
$messages['template_package'] = 'Templatebestand';
$messages['blog_template_package_help']  = 'Gebruik dit formulier om nieuwe templates te uploaden. Deze worden alleen beschikbaar voor deze blog. Als het niet mogelijk is om te uploden via dit formulier kan het handmatig worden geplaatst in de <b>%s</b> folder. Klik vervolgens op de "<b>Scan templates</b>" knop. pLog doorloopt deze folder en voegt automatisch alle nieuwe templates toe.';
$messages['scan_templates'] = 'Scan templates';

// site users
$messages['user_status_active'] = 'Actief';
$messages['user_status_disabled'] = 'Geblokkeerd';
$messages['user_status_all'] = 'Alle';
$messages['user_status_unconfirmed'] = 'Onbekend';
$messages['error_invalid_user2'] = 'Gebruiker met ID "%s" bestaat niet';
$messages['error_deleting_user'] = 'Fout tijdens blokkeren van gebruiker "%s"';
$messages['user_deleted_ok'] = 'Gebruiker "%s" geblokkeerd';
$messages['users_deleted_ok'] = '%s gebruikers geblokkeerd';

// create user
$messages['user_added_ok'] = 'Gebruiker "%s" aangemaakt';
$messages['error_incorrect_username'] = 'De gebruikersnaam is niet correct of al in gebruik';
$messages['user_status_help'] = 'Huidige status voor deze gebruiker';
$messages['user_blog_help'] = 'Blog die initieel aan deze gebruiker wordt toegewezen';
$messages['none'] = 'Geen';

// edit user
$messages['error_invalid_user'] = 'Het gebruikers ID is niet correct of de gebruiker bestaat niet';
$messages['error_updating_user'] = 'Fout tijdens aanpassen van gebruikersinstellingen. Controleer de gegevens en probeer het opnieuw';
$messages['blogs'] = 'Blogs';
$messages['user_blogs_helps'] = 'Blogs van deze gebruiker of waartoe deze toegang heeft';
$messages['site_admin'] = 'Beheerder';
$messages['site_admin_help'] = 'Bepaalt of deze gebruiker beheersrechten tot de site krijgt en daartoe toegang tot het beheersgedeelte, om zo de nodige beheerstaken uit te voeren.';
$messages['user_updated_ok'] = 'Gebruiker "%s" aangepast';

// site blogs
$messages['blog_status_all'] = 'Alle';
$messages['blog_status_active'] = 'Actief';
$messages['blog_status_disabled'] = 'Geblokkeerd';
$messages['blog_status_unconfirmed'] = 'Onbekend';
$messages['owner'] = 'Eigenaar';
$messages['quota'] = 'Limiet';
$messages['bytes'] = 'bytes';
$messages['error_no_blogs_selected'] = 'Geen blogs geselecteerd om te verwijderen';
$messages['error_blog_is_default_blog'] = 'Blog "%s" kan niet worden verwijderd; het is de standaard blog';
$messages['blog_deleted_ok'] = 'Blog "%s" verwijderd';
$messages['blogs_deleted_ok'] = '%s blogs verwijderd';
$messages['error_deleting_blog'] = 'Fout tijdens verwijderen van blog "%s"';
$messages['error_deleting_blog2'] = 'Fout tijdens verwijderen van blog met ID "%s"';

// create blog
$messages['error_adding_blog'] = 'Fout tijdens toevoegen van de blog. Controleer de gegevens en probeer het opnieuw';
$messages['blog_added_ok'] = 'Blog "%s" toegevoegd';

// edit blog
$messages['blog_status_help'] = 'Blog status';
$messages['blog_owner_help'] = 'Gebruiker die eigenaar van de blog is, met volledige controle over de blog';
$messages['users'] = 'Gebruikers';
$messages['blog_quota_help'] = 'Bestandslimiet in bytes. Zet op 0 voor ongelimiteerd of vul niets in voor de standaard limiet';
$messages['blog_users_help'] = 'Gebruikers met onderhoudstoegang tot deze blog. Kies een gebruiker uit de linkerkolom en verplaats deze naar rechts om deze rechten tot de blog te geven';
$messages['edit_blog_settings_updated_ok'] = 'Blog "%s" is aangepast';
$messages['error_updating_blog_settings'] = 'Fout tijdens aanpassen van blog "%s"';
$messages['error_incorrect_blog_owner'] = 'De gebruiker opgegeven als blog eigenaar is incorrect';
$messages['error_fetching_blog'] = 'Fout tijdens ophalen van bloggegevens';
$messages['error_updating_blog_settings2'] = 'Fout tijdens aanpassen van de blog. Controleer de gegevens en probeer het opnieuw';
$messages['add_or_remove'] = 'Toevoegen of verwijderen van gebruikers';

// site locales
$messages['locale'] = 'Locale';
$messages['locale_encoding'] = 'Encoding';
$messages['locale_deleted_ok'] = 'Locale "%s" verwijderd';
$messages['error_no_locales_selected'] = 'Er zijn geen locales geselecteerd om te verwijderen';
$messages['error_deleting_only_locale'] = 'De locale kan niet worden verwijderd omdat deze als enige is overgebleven';
$messages['locales_deleted_ok']= '%s locales verwijderd';
$messages['error_deleting_locale'] = 'Fout tijdens verwijderen van locale "%s"';
$messages['error_locale_is_default'] = 'Locale "%s" kan niet worden verwijderd omdat dit de standaard locale voor nieuwe blogs is';

// add locale
$messages['error_invalid_locale_file'] = 'The locale file is incorrect';
$messages['error_no_new_locales_found'] = 'Geen nieuwe locale bestanden gevonden';
$messages['locale_added_ok'] = 'Locale "%s" toegevoegd';
$messages['error_saving_locale'] = 'Fout tijdens opslaan van de nieuwe locale';
$messages['scan_locales'] = 'Scan locales';
$messages['add_locale_help'] = 'Gebruik dit formulier om een nieuwe locale te uploaden. Als het niet mogelijk is om dit via dit formulier te doen, voer het dan handmatig uit door het in de <b>./locales/</b> folder te plaatsen, welke de standaard locatie voor locale bestanden is, en klik op de "<b>Scan locales</b>" knop. pLog doorzoekt deze folder en voegt dan automatich nieuw gevonden locales toe.';

// site templates
$messages['error_template_is_default'] = 'Template "%s" kan niet worden verwijderd omdat het de standaard template voor nieuwe blogs is';

// add template
$messages['global_template_package_help'] = 'Gebruik dit formulier om een nieuwe templates te uploaden. Als het niet mogelijk is om dit via dit formulier te doen, voer het dan handmatig uit door het in de <b>%s</b> folder te plaatsen, welke de standaard locatie voor globaal beschikbare templates is, en klik op de "<b>Scan templates</b>" knop. pLog doorzoekt deze folder en voegt dan automatich nieuw gevonden templaes toe.';

// global settings
$messages['site_config_saved_ok'] = 'Site instellingen opgeslagen';
$messages['error_saving_site_config'] = 'Fout tijdens opslaan van site gegevens';
/// general settings
$messages['help_comments_enabled'] = 'Standaard toevoegen van commentaar aan nieuwe blogs [Standaard = Ja]';
$messages['help_beautify_comments_text'] = 'Standaard opmaken van paragrafen en URL links in commentaarberichten [Standaard = Ja]';
$messages['help_temp_folder'] = 'Folder die pLog gebruikt om tijdelijke data op te slaan, zoals vertaalde templates. Gebruik een folder die niet te benaderen is door de webserver voor extra beveiliging [Standaard = ./tmp]';
$messages['help_base_url'] = 'Start-URL voor deze blog';
$messages['help_subdomains_enabled'] = 'Ondersteuning voor subdomeinen. Zie de documentatie voor meer informatie hierover [Standaard = Nee]';
$messages['help_subdomains_base_url'] = 'Indien aangeschakeld, gebruik deze start-URL in plaats van base_url. Gebruik {blogname} voor de blognaam en {username} voor de naam van de eigenaar van de blog om de naam te vormen. (bijvoorbeeld http://{blogname}.mijndomein.nl)';
$messages['help_include_blog_id_in_url'] = 'Alleen van toepassing wanneer subdomeinen worden gebruikt en "normale" URLs aangeschakeld zijn. Forceert intern gegenereerde URLs die de "blogId" parameter niet tonen. Pas dit alleen aan als je zeker weet waar je mee bezig bent! [Standaard = Ja]';
$messages['help_script_name'] = 'Vul hier iets in als index.php moet worden hernoemd naar een andere naam [Standaard = index.php]';
$messages['help_show_posts_max'] = 'Maximum aantal berichten in de hoofdpagina als standaard voor nieuwe blogs [Standaard = 15]';
$messages['help_recent_posts_max'] = 'Maximum aantal recente berichten in de hoofdpagina als standaard voor nieuwe blogs [Standaard = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Bepaalt of het opslaan van  ontwerpdocumenten via Javascript en XmlHttpRequest gebruikt kan worden [Standaard = Ja]';
$messages['help_locale_folder'] = 'Folder waar de locale bestanden worden opgeslagen [Standaard = ./locale]';
$messages['help_default_locale'] = 'Standaard locale voor nieuwe blogs [Standaard = en_UK]';
$messages['help_default_blog_id'] = 'Standaard blog ID dat wordt getoond als er geen wordt gespecificeerd [Standaard = 1]';
$messages['help_default_time_offset'] = 'Standaard tijd-offset voor nieuwe blogs [Standaard = 0]';
$messages['help_html_allowed_tags_in_comments'] = 'Lijst met HTML tags die toegestaan zijn in commentaar, gescheiden door spaties [Standaard = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'Toestaan van de optie om referrers in de database op te slaan. Schakel dit uit voor een betere performance [Standaard = Ja]';
$messages['help_show_more_enabled'] = 'Toestaan van de "meer..." link voor nieuwe blogs [Standaard = Ja]';
$messages['help_update_article_reads'] = 'Toestaan van het aanpassen van de lees-teller. Schakel dit uit voor een betere performance [Standaard = Ja]';
$messages['help_update_cached_article_reads'] = 'Toestaan van het aanpassen van de lees-teller, zelfs wanneer caching is aangeschakeld [Standaard = Ja]';
$messages['help_xmlrpc_ping_enabled'] = 'Toestaan dat XMLRPC pings worden verzonden naar sites die deze optie ondersteunen [Standaard = Ja]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Toestaan dat deze optie standaard wordt gebruikt bij het plaatsen of aanpassen van een artikel [Standaard = Ja]';
$messages['help_xmlrpc_ping_hosts'] = 'URL verwijzing naar de XMLRPC interface voor sites die de XMLRPC ping specificatie ondersteunen. Plaats meerdere URLs op een nieuwe regel [Standaard = http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = 'Toestaan dat inkomen Trackbacks worden ontvangen [Standaard = Ja]';
$messages['help_htmlarea_enabled'] = 'Toestaan dat de WYSIWYG editor standaard in nieuwe blogs wordt gebruikt [Standaard = Ja]';
$messages['help_plugin_manager_enabled'] = 'Toestaan dat plugins worden gebruikt [Standaard = Ja]';
$messages['help_minimum_password_length'] = 'Minimum password lengte [Standaard = 4]';
$messages['help_xhtml_converter_enabled'] = 'Indien aangeschakeld zal pLog proberen alle HTML code in XHTML code om te zetten [Standaard = Ja]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'Indien aangeschakeld zal pLog extra goed proberen om XHTML van HTML code te maken. Dit geeft een vergroot risico op fouten [Standaard = Nee]';
$messages['help_session_save_path'] = 'Pad waar pLog session data opslaat via de PHP functie session_save_path(). Deze folder moet schrijfbaar zijn voor de webserver. Laat leeg om het standaard pad te gebruiken [Standaard = (leeg)]';
// summary settings
$messages['help_summary_page_show_max'] = 'Aantal items dat in de samenvattingspagina getoond wordt. Deze instelling geldt voor alle samengevatte lijsten (recente artikelen, meest actieve blogs etc) [Standaard = 10]';
$messages['help_summary_blogs_per_page'] = 'Aantal blogs per pagina in de "Blogs lijst" sectie [Standaard = 25]';
$messages['help_forbidden_usernames'] = 'Lijst van gebruikersnamen die niet geregistreerd mogen worden, gescheiden door een spatie [Standaard = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = 'Beperk het aantal blogs tot één per e-mail account [Standaard = Nee]';
$messages['help_summary_show_agreement'] = 'Toon een overeenkomsttekst en laat toekomstige gebruikers deze accepteren voorafgaand aan het registratieproces [Standaard = Ja]';
$messages['help_need_email_confirm_registration'] = 'Laat gebruikers hun registratie bevestigen door op een link te klikken die hen via e-mail wordt toegestuurd [Standaard = Ja]';
$messages['help_summary_disable_registration'] = 'Laat gebruikers nieuwe blogs op deze site aanmaken [Standaard = Ja]';
// templates
$messages['help_template_folder'] = 'Folder waar templates worden opgeslagen [Standaard = ./templates]';
$messages['help_default_template'] = 'Standaard template voor nieuwe blogs [Standaard = standard]';
$messages['help_users_can_add_templates'] = 'Sta toe dat gebruikers hun eigen templates uploaden [Standaard = Ja]';
$messages['help_template_compile_check'] = 'Controleer regelmatig of templates zijn aangepast, en gebruik deze wanneer dat het geval is. Schakel dit uit voor een betere performance [Standaard = Ja]';
$messages['help_template_cache_enabled'] = 'Schakel template caching in. Dit zorgt ervoor dat er geen gegevens uit de database hoeven worden opgehaald en templates niet opnieuw vertaald te hoeven worden [Standaard = Ja]';
$messages['help_template_cache_lifetime'] = 'Tijdsduur in seconden voor de template cache. Kies -1 om de cache zoveel mogelijk te benutten. Als de waarde op 0 staat, wordt caching uitgeschakeld. Het wordt echter aangeraden om in plaats daarvan template_cache_enabled op "Nee" te zetten [Standaard = 0]';
$messages['help_template_http_cache_enabled'] = 'Schakel ondersteuning voor HTTP conditional requests in. Dit zorgt ervoor dat pLog de "If-Modified-Since" HTTP header gebruikt en alleen gegevens verstuurt indien dit strikt noodzakelijk is. Schakel dit aan om bandbreedte te besparen [Standaard = Nee]';
$messages['help_allow_php_code_in_templates'] = 'Sta toe dat PHP code in Smarty templates wordt gebruikt binnen {php}...{/php} blokken [Standaard = Nee]';
// urls
$messages['help_request_format_mode'] = 'Selecteer één van onderstaande URL formaten. Als voor aangepaste URLs wordt gekozen, moeten alle onderstaande instellingen worden geconfigureerd [Standaard = Kaal]';
$messages['plain'] = 'Kaal';
$messages['search_engine_friendly'] = 'Zoekmachine-vriendelijk';
$messages['custom_url_format'] = 'Aangepaste URLs';
$messages['help_permalink_format'] = 'Formaat voor Permalinks bij gebruik van aangepaste URLs [Standaard = /blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = 'Formaat voor links naar categorieen bij gebruik van aangepaste URLs [Standaard = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'Formaat voor links naar blog bij gebruik van aangepaste URLs [Standaard = /blog/{blogname}$]';
$messages['help_archive_link_format'] = 'Formaat voor links naar archieven bij gebruik van aangepaste URLs [Standaard = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'Formaat voor artikelen geplaatst door een bepaalde gebruiker bij gebruik van aangepaste URLs [Standaard = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'Formaat voor links naar de Trackbacks pagina bij gebruik van aangepaste URLs [Standaard = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'Formaat voor links naar aangepaste statische template pagina\'s bij gebruik van aangepaste URLs [Standaard = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'Formaat voor links naar albums bij gebruik van aangepaste URLs [Standaard = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'Formaat voor links naar afbeeldingen bij gebruik van aangepaste URLs [Standaard = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'Formaat voor links naar verkleinde plaatjes bij gebruik van aangepaste URLs [Standaard = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'Formaat voor links naar middelgrote plaatjes bij gebruik van aangepaste URLs [Standaard = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'Formaat voor links naar te downloaden bestanden bij gebruik van aangepaste URLs [Standaard = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = 'Controleer bij opgave van een e-mail adres of er een MX record voor bestaat en of de opgegeven  mailbox ook bestaat [Standaard = Nee]';
$messages['help_email_service_enabled'] = 'Verstuur e-mails vanaf deze website [Standaard = Ja]';
$messages['help_post_notification_source_address'] = 'Email adres dat verschijnt in het "From:" veld bi het versturen van e-mails [Standaard = noreply@mijndomein.nl]';
$messages['help_email_service_type'] = 'Welk systeem moet er gebruikt worden om de e-mails te versturen [Standaard = PHP]';
$messages['help_smtp_host'] = 'Bij gebruik van SMTP als mailsysteem, gebruik het onderstaande adres als SMTP server [Standaard = (leeg)]';
$messages['help_smtp_port'] = 'Wanneer de SMTP server een andere poort gebruikt dan 25, gebruik dan onderstaande poort [Standaard = (leeg)]';
$messages['help_smtp_use_authentication'] = 'Vereist de opgegeven SMTP server authenticatie  [Standaard = Nee]';
$messages['help_smtp_username'] = 'Wanneer de SMTP server authenticatie vereist, gebruik dan onderstaande gebruikersnaam [Standaard = (leeg)]';
$messages['help_smtp_password'] = 'Wanneer de SMTP server authenticatie vereist, gebruik dan onderstaand wachtwoord [Standaard = (leeg)]';
// helpers
$messages['help_path_to_tar'] = 'Pad naar de "tar" applicatie, benodigd voor het uitpakken van templates in .tar.gz of tar.bz2 formaten [Standaard = /bin/tar]';
$messages['help_path_to_gzip'] = 'Pad naar de "gzip" applicatie, benodigd voor het uitpakken van templates in .tar.gz formaat [Standaard = /bin/gzip]';
$messages['help_path_to_bz2'] = 'Pad naar de "bzip2" applicatie, benodigd voor het uitpakken van templates in .tar.bz2 formaat [Standaard = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = 'Pad naar de "unzip" applicatie, benodigd voor het uitpakken van templates in .zip formaat [Standaard = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'gebruik de standaard PHP oplossing om .zip bestanden uit te pakken [Standaard = Nee]';
// uploads
$messages['help_uploads_enabled'] = 'Geef op of gebruikers bestanden mogen uploaden. Dit heeft invloed op het gedeelte met bestanden en het uploaden van aangepaste templates en locales [Standaard = Ja]';
$messages['help_maximum_file_upload_size'] = 'Maximum te uploaden bestandsgrootte in bytes. Deze limiet mag nooit groter zijn dan de serverinstelling [Standaard = 2000000]';
$messages['help_upload_forbidden_files'] = 'Lijst van bestanden die niet geupload mogen worden, gescheiden door spaties. Gebruik van \'*\' and \'?\' als woldcard is toegestaan [Standaard = *.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'Sta toegang tot blogs via XMLRPC toe [Standaard = Ja]';
$messages['help_rdf_enabled'] = 'Sta streaming content toe via Atom of RSS feeds [Standaard = Ja]';
$messages['help_default_rss_profile'] = 'Standaard versie voor streaming content [Standaard = RSS 1.0]';
// security
$messages['help_security_pipeline_enabled'] = 'Schakel het gebruik van security pipelining en gerelateerde filters in. Dit heeft ook effect op plugins die nieuwe filters registreren [Standaard = Ja]';
$messages['help_ip_address_filter_enabled'] = 'Schakel het gebruik van IP adres filters in. Dit werkt alleen wanneer security pipelining is ingeschakeld [Standaard = Ja]';
$messages['help_content_filter_enabled'] = 'Schakel content filters op basis van reguliere expressies in. Dit werkt alleen wanneer security pipelining is ingeschakeld [Standaard = Ja]';
$messages['help_maximum_comment_size'] = 'Maximum grootte in bytes dat een commentaar kan hebben. Voer 0 in om dit uit te schakelen [Standaard = 0]';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = 'Schakel de Bayesian filter aan voor verbeterde automatische spam filtering [Standaard = Ja]';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'Bovengrens waarop een commentaar wordt gezien als spam [Standaard = 0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'Ondergrens waarbij een bericht wordt gezien als niet-spam [Standaard = 0.2]';
$messages['help_bayesian_filter_min_length_token'] = 'Minimum lengte van een token waarbij deze als zinvol wordt beschouwd voor het Bayesian filter [Standaard = 3]';
$messages['help_bayesian_filter_max_length_token'] = 'Maximum lengte van een token waarbij deze als zinvol wordt beschouwd voor het Bayesian filter [Standaard = 100]';
$messages['help_bayesian_filter_number_significant_tokens'] = 'Aantal significante tokens [Standaard = 15]';
$messages['help_bayesian_filter_spam_comments_action'] = 'Wat moet er gebeuren met commentaar dat als spam wordt beschouwd. Selecteer "Weggooien" pas als het filter voldoende is getraind [Standaard = Bewaren]';
$messages['keep_spam_comments'] = 'Bewaren, markeer als "Spam"';
$messages['throw_away_spam_comments'] = 'Weggooien (niet opslaan)';
// resources
$messages['help_resources_enabled'] = 'Sta het gebruik van bestanden toe [Standaard = Ja]';
$messages['help_resources_folder'] = 'Folder waar bestanden worden opgeslagen. Gebruik een folder die niet te benaderen is door de webserver voor extra beveiliging [Standaard = ./gallery]';
$messages['help_thumbnail_method'] = 'Methode voor het genereren van thumbnails. Wanneer PHP wordt gebruikt is ondersteuning voor GD vereist [Standaard = PHP]';
$messages['help_path_to_convert'] = 'Pad naar de "convert" applicatie van ImageMagick. Vereist bij de selectie van "ImageMagick" voor het genereren van thumbnails [Standaard = /usr/bin/convert]';
$messages['help_thumbnail_format'] = 'Formaat waarin thumbnails worden opgeslagen [Standaard = Same as image]';
$messages['help_thumbnail_height'] = 'Standaard hoogte voor kleine thumbnails [Standaard = 120]';
$messages['help_thumbnail_width'] = 'Standaard breedte voor kleine thumbnails [Standaard = 120]';
$messages['help_medium_size_thumbnail_height'] = 'Standaard hoogte voor middelgrote thumbnails [Standaard = 480]';
$messages['help_medium_size_thumbnail_width'] = 'Standaard breedte voor middelgrote thumbnails [Standaard = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'Bewaar de formaatverhouding van het origineel bij het aanmaken van thumbnails. [Standaard = Ja]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'Forceer pLog om alleen GD1 functies te gebruiken [Standaard = Nee]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'Algoritme om mooie thumbnails te genereren, bij de keuze van GD als methode [Standaard = PHP ImageCopyResampled]';
$messages['help_resources_quota'] = 'Algemene limiet voor blogs in bytes, of specificeer 0 voor geen limiet [Standaard = 0]';
$messages['help_resource_server_http_cache_enabled'] = 'Ondersteuning van de "If-Modified-Since" HTTP header en HTTP conditionele verzoeken. Aanschakelen voor efficiënter gebruik van bandbreedte [Standaard = Nee]';
$messages['help_resource_server_http_cache_lifetime'] = 'Tijd in microseconden dat gebruikers de bestandsversie in cache moeten gebruiken [Standaard = 9999999]';
$messages['same_as_image'] = 'Hetzelfde als het originele bestand';
// search
$messages['help_search_engine_enabled'] = 'Sta het gebruik van de zoekmachine toe [Standaard = Ja]';
$messages['help_search_in_custom_fields'] = 'Zoek in eigen velden [Standaard = Ja]';
$messages['help_search_in_comments'] = 'Zoek in commentaar [Standaard = Ja]';

// cleanup
$messages['purge'] = 'Verwijderen';
$messages['cleanup_spam'] = 'Verwijder spam';
$messages['cleanup_spam_help'] = 'Dit verwijdert alle commentaar die door gebruikers als spam zijn gemarkeerd. Het is na bevestiging niet meer mogelijk om deze actie herstellen.';
$messages['spam_comments_purged_ok'] = 'Alle berichten gemarkeerd als spam zijn verwijderd';
$messages['cleanup_posts'] = 'Verwijder berichten';
$messages['cleanup_posts_help'] = 'Dit verwijdert alle berichten die door gebruikers zijn gemarkeerd als "Verwijderd". Het is na bevestiging niet meer mogelijk om deze actie herstellen.';
$messages['posts_purged_ok'] = 'Alle berichten gemarkeerd ter verwijderingen zijn daadwerkelijk verwijderd';

/// summary ///
// front page
$messages['summary'] = 'Samenvatting';
$messages['register'] = 'Registreer';
$messages['summary_welcome'] = 'Welkom!';
$messages['summary_most_active_blogs'] = 'Meest actieve blogs';
$messages['summary_most_commented_articles'] = 'Meest becommentarieerd';
$messages['summary_most_read_articles'] = 'Best gelezen artikelen';
$messages['password_forgotten'] = 'Wachtwoord vergeten?';
$messages['summary_newest_blogs'] = 'Nieuwste blogs';
$messages['summary_latest_posts'] = 'Nieuwste berichten';
$messages['summary_search_blogs'] = 'Doorzoek blogs';

// blog list
$messages['updated'] = 'Aangepast';
$messages['total_reads'] = 'tot.';

// blog profile
$messages['blog'] = 'Blog';
$messages['latest_posts'] = 'Laatste bericht';

// registration
$messages['register_step0_title'] = 'Gebruikersvoorwaarden';
$messages['agreement'] = 'Overeenkomst';
$messages['decline'] = 'Afwijzen';
$messages['accept'] = 'Accepteren';
$messages['read_service_agreement'] = 'Lees de gebrukkersvoorwaarden voor deze dienst en klik op "Accepteren" als je ermee accoord gaat';
$messages['register_step1_title'] = 'Nieuwe gebruiker [1/4]';
$messages['register_step1_help'] = 'Allereerst moet een nieuwe gebruiker worden gedefinieerd om een blog aan te kunnen maken. Deze gebruiker wordt eigenaar van de blog en heeft toegang tot alle functionaliteiten';
$messages['register_next'] = 'Volgende';
$messages['register_back'] = 'Terug';
$messages['register_step2_title'] = 'Nieuwe blog [2/4]';
$messages['register_blog_name_help'] = 'Naam voor je nieuwe blog';
$messages['register_step3_title'] = 'Kies een template [3/4]';
$messages['step1'] = 'Stap 1';
$messages['step2'] = 'Stap 2';
$messages['step3'] = 'Stap 3';
$messages['register_step3_help'] = 'Kies één van de beschikbare templates als de standaard voor je blog. Dit kan later altijd worden aangepast';
$messages['error_must_choose_template'] = 'Kies een template';
$messages['select_template'] = 'Kies een template';
$messages['register_step5_title'] = 'Gefeliciteerd! [4/4]';
$messages['finish'] = 'Klaar';
$messages['register_need_confirmation'] = 'Een e-mail met de bevestiging is naar het opgegeven e-mail adres verstuurd. Klik op de link in die mail om te beginnen met bloggen!';
$messages['register_step5_help'] = 'Gefeliciteerd, je gebruikersaccount en blog zijn aangemaakt!';
$messages['register_blog_link'] = 'Als je je blog wilt bekijken, kun je deze link gebruiken: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'Als je direct met je blog aan de slag wilt, kun je direct naar het <a href="admin.php">beheersscherm</a>';
$messages['register_error'] = 'Fout tijdens het registratieproces';
$messages['error_registration_disabled'] = 'Sorry, registratie van nieuwe blogs is voor deze site uitgeschakeld';
// registration article topic and text
$messages['register_default_article_topic'] = 'Gefeliciteerd!';
$messages['register_default_article_text'] = 'Als je dit bericht kunt lezen dan is het registratieproces succesvol verlopen en kun je beginnen met bloggen.';
$messages['register_default_category'] = 'Algemeen';
// confirmation email
$messages['register_confirmation_email_text'] = 'Klik op de link hieronder om je eigen blog te activeren:

%s

Veel plezier!';
$messages['error_invalid_activation_code'] = 'Sorry, de bevestigingscode is niet correct';
$messages['blog_activated_ok'] = 'Gefeliciteerd, je nieuwe gebruikersaccount en bijbehorende blog zijn succesvol bevestigd!';
// forgot your password?
$messages['reset_password'] = 'Wijzig je wachtwoord';
$messages['reset_password_username_help'] = 'Gebuikersnaam waarvan het wachtwoord gereset moet worden';
$messages['reset_password_email_help'] = 'E-mail adres dat gebruikt is om deze gebruiker te registreren';
$messages['reset_password_help'] = 'Gebruik dit formulier om het wachtwoord van een gebruiker te resetten, mocht je dit vergeten zijn. Voer de naam van de gebruiker in, alsmede het e-mail adres dat gebruikt is tijdens het registratieproces';
$messages['error_resetting_password'] = 'Fout tijdens het resetten van het wachtwoord. Controleer de gegevens en probeer het opnieuw';
$messages['reset_password_error_incorrect_email_address'] = 'Het e-mail adres is niet correct of is niet het e-mail adres dat gebruikt is om de gebruiker te registreren';
$messages['password_reset_message_sent_ok'] = 'Een e-mail met een link is verstuurd naar je e-mail adres. Klik op die link om het wachtwoord te resetten';
$messages['error_incorrect_request'] = 'De parameters in de URL zijn niet correct';
$messages['change_password'] = 'Nieuw wachtwoord';
$messages['change_password_help'] = 'Voer een nieuwe wachtwoord in';
$messages['new_password'] = 'Nieuw wachtwoord';
$messages['new_password_help'] = 'Bevestig wachtwoord';
$messages['password_updated_ok'] = 'Je wachtwoord is aangepast';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'Deze pagina ziet er niet uit omdat je een webbrowser gebruikt die alleen oude standaarden ondersteunt. Om de pagina te zien zoals deze hoort te zijn, kun je het beste <a href="http://www.mozilla.org/" target="_blank">upgraden</a> naar een up-to-date browser die alle webstandaarden ondersteunt. Gratis en simpel!';
$messages['jump_to_navigation'] = 'Naar navigatie.';
$messages['comment_email_never_display'] = 'regels en paragrafen breken automatisch af. E-mail adressen worden nooit getoond.';
$messages['comment_html_allowed'] = 'Toegestane <acronym title="Hypertext Markup Language">HTML</acronym>: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = 'De <acronym title="Uniform Resource Identifier">URI</acronym> voor trackback naar dit bericht is: ';
$messages['previous_post'] = 'Vorige';
$messages['next_post'] = 'Volgende';
$messages['comment_default_title'] = '(geen onderwerp)';
$messages['guestbook'] = 'Gastenboek';
$messages['trackbacks'] = 'Trackbacks';
$messages['menu'] = 'Menu';
$messages['albums'] = 'Albums';
$messages['admin'] = 'Beheer';
?>
