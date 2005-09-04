<?php
/* Maintainer Info

Maintained by Tim Rønning
E-mail: tim.ronning@blogportalen.no
Web: www.blogportalen.no
Version: 1.0 Version-date: 25032005

All comments and suggestions are happily receiunder on the above e-mail address.
Notification about misspellings and other suggestions can also be made on:

Alle kommentarer og forslag tas imot med takk på ovenstående e-post adresse.
Meldinger om feilstavinger og annet kan også gjøres på:

http://bugs.plogworld.net


*/
// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'iso-8859-1';
$messages['locale_description'] = 'Norsk oversettelse (locale fil) for pLog 1.x';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %H:%M';

// days of the week
$messages['days'] = Array( 'søndag', 'mandag', 'tirsdag', 'onsdag', 'torsdag', 'fredag', 'lørdag' );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( 'søn', 'man', 'tir', 'ons', 'tor', 'fre', 'lør' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages['months'] = Array( "januar", "februar", "mars", "april", "mai", "juni", "juli", "august", "september", "oktober", "november", "desember" );
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

$messages['message'] = 'Melding';
$messages['error'] = 'Feil';
$messages['date'] = 'Dato';

// miscellaneous texts
$messages['of'] = 'av';
$messages['recently'] = 'Nye artikler';
$messages['comments'] = 'kommentarer';
$messages['comment on this'] = 'Kommenter';
$messages['my_links'] = 'Mine lenker';
$messages['archives'] = 'Arkiv';
$messages['search'] = 'Søk';
$messages['calendar'] = 'Kalender';
$messages['search_s'] = 'Søk';
$messages['search_this_blog'] = 'Søk i denne bloggen';
$messages['about_myself'] = 'Om meg!';
$messages['permalink_title'] = 'Permanent lenke til arkivene';
$messages['permalink'] = 'Permalink';
$messages['posted_by'] = 'Skrevet av';
$messages['reply'] = 'Svar';

// add comment form
$messages['add_comment'] = 'Gi en kommentar';
$messages['comment_topic'] = 'Emne';
$messages['comment_text'] = 'Tekst';
$messages['comment_username'] = 'Ditt navn';
$messages['comment_email'] = 'E-post adresse (ikke obl.)';
$messages['comment_url'] = 'Hjemmeside (ikke obl.)';
$messages['comment_send'] = 'Send kommentar';
$messages['comment_added'] = 'Din Kommentar er lagt til';
$messages['comment_add_error'] = 'Det oppsto en feil med kommentaren';
$messages['article_does_not_exist'] = 'Denne artiklen eksisterer ikke';
$messages['no_posts_found'] = 'Ingen artikler ble funnet';
$messages['user_has_no_posts_yet'] = 'Denne brukeren har ikke skrevet noen artikler ennå';
$messages['back'] = 'Tilbake';
$messages['post'] = 'Send';

$messages['trackbacks_for_article'] = 'Trackbacklenker for artikel';
$messages['trackback_excerpt'] = 'Unntak';
$messages['trackback_weblog'] = 'Weblog';
$messages['search_results'] = 'Søkeresultater';
$messages['search_matching_results'] = 'Følgende artikler stemmer med kravene dine';
$messages['search_no_matching_posts'] = 'Ingen matchende artikler ble funnet';
$messages['read_more'] = '(Hele artiklen...)';
$messages['syndicate'] = 'RSS tjenester';
$messages['main'] = 'Hounderside';
$messages['about'] = 'Om';
$messages['download'] = 'Last ned';

////// error messages /////
$messages['error_fetching_article'] = 'Artiklen du søkte ble ikke funnet';
$messages['error_fetching_articles'] = 'Kunne ikke hente artiklene';
$messages['error_trackback_no_trackback'] = 'Ingen trackback lenke ble funnet for denne artiklen';
$messages['error_incorrect_article_id'] = 'Artikel ID er ikke korrekt';
$messages['error_incorrect_blog_id'] = 'Blog ID er ikke korrekt';
$messages['error_comment_without_text'] = 'Du må skrive inn noe tekst';
$messages['error_comment_without_name'] = 'Du må skrive inn ditt navn eller nick';
$messages['error_adding_comment'] = 'En feil oppsto med kommentaren';
$messages['error_incorrect_parameter'] = 'Ikke korrekt parameter';
$messages['error_parameter_missing'] = 'En parameter mangler';
$messages['error_comments_not_enabled'] = 'Muligheten til å kommentere er slått av for dette webstedet';
$messages['error_incorrect_search_terms'] = 'Søkekriteriene dine er ikke gyldige';
$messages['error_no_search_results'] = 'Ingen treff matchet dine søkekriterier';
$messages['error_no_albums_defined'] = 'Ingen mapper er tilgjengelig i denne bloggen';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Logg inn';
$messages['welcome_message'] = 'Velkommen til pLog';
$messages['error_incorrect_username_or_password'] = 'Beklager, feil brukernavn og/eller passord';
$messages['error_dont_belong_to_any_blog'] = 'Beklager, du er ikke registrert i noen blog ennå';
$messages['logout_message'] = 'Du er nå logget ut';
$messages['logout_message_2'] = 'Klikk <a href="%1$s">her</a> for å gå til %2$s</a>';
$messages['error_access_forbidden'] = 'Ingen tilgang. Du må logge inn med brukernavn og passord først';
$messages['username'] = 'Brukernavn';
$messages['password'] = 'Passord';

// dashboard
$messages['dashboard'] = 'Dashbord';
$messages['recent_articles'] = 'Nyeste artikler';
$messages['recent_comments'] = 'Nyeste kommentarer';
$messages['recent_trackbacks'] = 'Nyeste trackbacklenker';
$messages['blog_statistics'] = 'Blog statistikk';
$messages['total_posts'] = 'Antall artikler';
$messages['total_comments'] = 'Antall kommentarer';
$messages['total_trackbacks'] = 'Antall trackbacklenker';
$messages['total_viewed'] = 'Totalt antall leste artikler';
$messages['in'] = 'i';

// menu options
$messages['newPost'] = 'Ny artikel';
$messages['Manage'] = 'Administrer';
$messages['managePosts'] = 'Administrer artikler';
$messages['editPosts'] = 'Tilgjengelige artikler';
$messages['editArticleCategories'] = 'Tilgjengelige kategorier';
$messages['newArticleCategory'] = 'Ny kategori';
$messages['manageLinks'] = 'Administrer lenker';
$messages['editLinks'] = 'Tilgjengelige lenker';
$messages['newLink'] = 'Ny lenke';
$messages['editLink'] = 'Rediger lenke';
$messages['editLinkCategories'] = 'Tilgjengelige lenkekategorier';
$messages['newLinkCategory'] = 'Ny lenkekategori';
$messages['editLinkCategory'] = 'Rediger Lenkekategori';
$messages['manageCustomFields'] = 'Administrer egne felt';
$messages['blogCustomFields'] = 'Tilgjengelige egne felt';
$messages['newCustomField'] = 'Nytt eget felt';
$messages['resourceCenter'] = 'Ressurssenter';
$messages['resources'] = 'Ressurser';
$messages['newResourceAlbum'] = 'Ny mappe';
$messages['newResource'] = 'Ny ressurs';
$messages['controlCenter'] = 'Blogkontroll';
$messages['manageSettings'] = 'Instillinger';
$messages['blogSettings'] = 'Bloginstillinger';
$messages['userSettings'] = 'Brukerinstillinger';
$messages['pluginCenter'] = 'Ekstra moduler';
$messages['Stats'] = 'Statistikk';
$messages['manageBlogUsers'] = 'Administrer blogbrukere';
$messages['newBlogUser'] = 'Ny blogbruker';
$messages['showBlogUsers'] = 'Aktive blogbrukere';
$messages['manageBlogTemplates'] = 'Administrer blogmaler';
$messages['newBlogTemplate'] = 'Ny blogmal';
$messages['blogTemplates'] = 'Tilgjengelige blogmaler';
$messages['adminSettings'] = 'Instillinger';
$messages['Users'] = 'Administrer brukere';
$messages['createUser'] = 'Opprett Bruker';
$messages['editSiteUsers'] = 'Registrerte Brukere';
$messages['Blogs'] = 'Administrer blogger';
$messages['createBlog'] = 'Opprett ny blog';
$messages['editSiteBlogs'] = 'Aktive blogger';
$messages['Locales'] = 'Administrer språkinstillinger';
$messages['newLocale'] = 'Nytt språk';
$messages['siteLocales'] = 'Tilgjengelige språk';
$messages['Templates'] = 'Administrer blogmaler';
$messages['newTemplate'] = 'Ny blogmal';
$messages['siteTemplates'] = 'Tilgjengelige blogmaler';
$messages['GlobalSettings'] = 'Globale instillinger';
$messages['editSiteSettings'] = 'Generelt';
$messages['summarySettings'] = 'Oppsummering';
$messages['templateSettings'] = 'Blogmaler';
$messages['urlSettings'] = 'URLer';
$messages['emailSettings'] = 'E-post';
$messages['uploadSettings'] = 'Opplastinger';
$messages['helpersSettings'] = 'Eksterne programmer';
$messages['interfacesSettings'] = 'Grensesnitt';
$messages['securitySettings'] = 'Sikkerhet';
$messages['bayesianSettings'] = 'Bayesianfilter';
$messages['resourcesSettings'] = 'Ressurser';
$messages['searchSettings'] = 'Søkefunksjoner';
$messages['cleanUpSection'] = 'Opprydding';
$messages['cleanUp'] = 'Rydd opp';
$messages['editResourceAlbum'] = 'Rediger mapper';
$messages['resourceInfo'] = 'Rediger ressurs';
$messages['editBlog'] = 'Rediger blog';
$messages['Logout'] = 'Logg ut';

// new post
$messages['topic'] = 'Emne';
$messages['topic_help'] = 'Tittel på artiklen';
$messages['text'] = 'Tekst';
$messages['text_help'] = 'Artikeltekst. Denne delen vil alltid dukke opp på førstesiden';
$messages['extended_text'] = 'Mer og/eller utfyllende tekst (Resten av artikkelen her)';
$messages['extended_text_help'] = 'Resten av artiklen. Dette vil/kan bli vist på artikkelsiden.';
$messages['post_slug'] = 'Slug';
$messages['post_slug_help'] = 'Slug brukes for å generere permanente lenker';
$messages['date'] = 'Dato';
$messages['post_date_help'] = 'Dato for publisering av artiklen.';
$messages['status'] = 'Status';
$messages['post_status_help'] = 'Angi en status for artiklen';
$messages['post_status_published'] = 'Publisert';
$messages['post_status_draft'] = 'Kladd';
$messages['post_status_deleted'] = 'Slettet';
$messages['categories'] = 'Kategorier';
$messages['post_categories_help'] = 'Velg en eller flere kategorier';
$messages['post_comments_enabled_help'] = 'Kommentarer ok?';
$messages['send_notification_help'] = 'Varsling under nye kommentarer';
$messages['send_trackback_pings_help'] = 'Send trackback ping.';
$messages['send_xmlrpc_pings_help'] = 'Send XMLRPC ping';
$messages['save_draft_and_continue'] = 'Lagre som kladd';
$messages['preview'] = 'Forhåndsvisning';
$messages['add_post'] = 'Blog denne!';
$messages['error_saving_draft'] = 'Det oppsto en feil under lagring som kladd';
$messages['draft_saunder_ok'] = 'Kladden ble lagret, ok';
$messages['error_sending_request'] = 'Forespørselen genererte en feil';
$messages['error_no_category_selected'] = 'Vennligst velg minst en kategori';
$messages['error_missing_post_topic'] = 'Vennligst skriv inn et emne for artikelen';
$messages['error_missing_post_text'] = 'Vennligst skriv inn noe artikeltekst';
$messages['error_adding_post'] = 'Det oppsto en feil under lagring av denne artiklen';
$messages['post_added_not_published'] = 'Artiklen ble lagt til, men ikke publisert ennå';
$messages['post_added_ok'] = 'Artiklen ble lagt til, ok';
$messages['send_notifications_ok'] = 'En melding blir sendt til deg når en ny kommentar eller trackback blir registrert';

// send trackbacks
$messages['error_sending_trackbacks'] = 'Følgende trackback genererte en feil!';
$messages['send_trackbacks_help'] = 'Velg hvilke URLer du vil sende trackback ping til. Vær sikker på at disse webstedene støtter trackbacks';
$messages['send_trackbacks'] = 'Send trackbacks';
$messages['ping_selected'] = 'Ping valgt';
$messages['trackbacks_sent_ok'] = 'Trackbacks ble korrekt sendt til de valgte URLene';

// posts page
$messages['show_by'] = 'Vis etter';
$messages['category'] = 'Kategori';
$messages['author'] = 'Forfatter';
$messages['post_status_all'] = 'Alle';
$messages['author_all'] = 'Alle';
$messages['search_terms'] = 'Søkekriterier';
$messages['show'] = 'Vis';
$messages['delete'] = 'Slett';
$messages['actions'] = 'Valg';
$messages['all'] = 'Alle';
$messages['category_all'] = 'Alle';
$messages['error_incorrect_article_id'] = 'Ikke korrekt artikel ID';
$messages['error_deleting_article'] = 'Det oppsto en feil under sletting av "%s"';
$messages['article_deleted_ok'] = 'Artikel "%s" ble slettet, ok';
$messages['articles_deleted_ok'] = '%s artikler slettet, ok';
$messages['error_deleting_article2'] = 'Det oppsto en feil under sletting av artikkel ID "%s"';

// edit post page
$messages['update'] = 'Oppdater';
$messages['editPost'] = 'Rediger artikel';
$messages['error_fetching_post'] = 'En feil oppsto under åpning av artikel';
$messages['post_updated_ok'] = 'Artikel "%s" oppdatert, ok';
$messages['error_updating_post'] = 'Det oppsto en feil under oppdatering av artikkelen';
$messages['notification_added'] = 'Du vil motta en melding under nye kommentarer eller trackbacs';
$messages['notification_remounder'] = 'Status tilbakemelding fjærnet';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = 'Alle';
$messages['comment_status_spam'] = 'Søppel';
$messages['comment_status_nonspam'] = 'Ikke søppel';
$messages['error_fetching_comments'] = 'Det oppsto en feil under henting av denne artiklens kommentarer.';
$messages['error_deleting_comments'] = 'Det oppsto en feil under sletting av kommentarer, eller ingen kommentar valgt!';
$messages['comment_deleted_ok'] = 'Kommentar "%s" slettet, ok';
$messages['comments_deleted_ok'] = '%s kommentarer slettet, ok';
$messages['error_deleting_comment'] = 'Det oppsto en feil under sletting av kommentar "%s"';
$messages['error_deleting_comment2'] = 'Det oppsto en feil under sletting av kommentar med ID %s';
$messages['editComments'] = 'Kommentarer';
$messages['mark_as_spam'] = 'Merk dette som søppel';
$messages['mark_as_no_spam'] = 'Merk dette som IKKE søppel';
$messages['error_incorrect_comment_id'] = 'Kommentar ID er ikke korrekt';
$messages['error_marking_comment_as_spam'] = 'Det oppsto en feil under markering av dette som søppel';
$messages['comment_marked_as_spam_ok'] = 'Kommentar markert som søppel, ok.';
$messages['error_marking_comment_as_nonspam'] = 'Det oppsto en feil under markering av denne kommentaren som IKKE søppel';
$messages['comment_marked_as_nonspam_ok'] = 'Kommentaren ble markert som IKKE søppel, ok';

// post trackbacks
$messages['blog'] = 'Blog';
$messages['excerpt'] = 'Unntak';
$messages['error_fetching_trackbacks'] = 'Det oppsto en feil under henting av trackbacklenker';
$messages['error_deleting_trackbacks'] = 'Det oppsto en feil under sletting av trackbacklenker eller ingen trackbacklenker var valgt';
$messages['error_deleting_trackback'] = 'Det oppsto en feil under sletting av trackbacklenke "%s"';
$messages['error_deleting_trackback2'] = 'Det oppsto en feil under sletting av trackbacklenke ID "%s"';
$messages['trackback_deleted_ok'] = 'Trackback "%s" slettet, ok';
$messages['trackbacks_deleted_ok'] = '%s trackbacklenker slettet, ok';
$messages['editTrackbacks'] = 'Trackbacklenker';

// post statistics
$messages['referrer'] = 'Henviser';
$messages['hits'] = 'Treff';
$messages['error_no_items_selected'] = 'Ingen valgt for fjerning';
$messages['error_deleting_referrer'] = 'Det oppsto en feil under sletting av henviser "%s"';
$messages['error_deleting_referrer2'] = 'Det oppsto en feil under sletting av henviser ID "%s"';
$messages['referrer_deleted_ok'] = 'Henviser "%s" slettet, ok';
$messages['referrers_deleted_ok'] = '%s henvisere slettet, ok';

// categories
$messages['posts'] = 'Artikler';
$messages['show_in_main_page'] = 'Vis på hovedside';
$messages['error_incorrect_category_id'] = 'Kategori ID er ikke korrekt eller ingen kategori ble valgt';
$messages['error_category_has_articles'] = 'Kategori "%s" er i bruk av noen artikler. Vennligst oppdater artiklene før du fjerner denne kategorien';
$messages['category_deleted_ok'] = 'Kategori "%s" slettet, ok';
$messages['categories_deleted_ok'] = '%s kategorier slettet, ok';
$messages['error_deleting_category'] = 'Det oppsto en feil under sletting av kategori "%s"';
$messages['error_deleting_category2'] = 'Det oppsto en feil under sletting av kategori ID "%s"';
$messages['yes'] = 'Ja';
$messages['no'] = 'Nei';

// new category
$messages['name'] = 'Navn';
$messages['category_name_help'] = 'Visningsnavn for denne kategorien';
$messages['description'] = 'Beskrivelse';
$messages['category_description_help'] = 'Lang beskrivelse for denne kategorien';
$messages['show_in_main_page_help'] = 'Skal artikler i denne kategorien bli vist på hovedsiden eller kun når denne kategorien er valgt';
$messages['error_empty_name'] = 'Du må angi et navn';
$messages['error_empty_description'] = 'Du må angi en beskrivelse';
$messages['error_adding_article_category'] = 'Det oppsto en feil under lagring av denne kategorien. Vennligst sjekk informasjonen din en gang til';
$messages['category_added_ok'] = 'Kategori "%s" ble lagt til denne bloggen, ok';
$messages['add'] = 'Legg til';
$messages['reset'] = 'Avbryt';

// update category
$messages['error_updating_article_category'] = 'Det oppsto en feil under oppdatering av denne kategorien';
$messages['error_fetching_category'] = 'Det oppsto en feil under henting av denne kategorien';
$messages['article_category_updated_ok'] = 'Kategori "%s" ble oppdatert, ok';

// links
$messages['feed'] = 'XML strøm';
$messages['error_no_links_selected'] = 'Lenke ID er feil eller ingen lenker ble valgt for fjerning';
$messages['error_incorrect_link_id'] = 'Lenke ID er ikke korrekt';
$messages['error_removing_link'] = 'Det oppsto en feil under fjerning av lenke "%s"';
$messages['error_removing_link2'] = 'Det oppsto en feil under fjerning av lenke ID "%s"';
$messages['link_deleted_ok'] = 'Lenke "%s" ble slettet, ok';
$messages['links_deleted_ok'] = '%s lenker ble slettet, ok';

// new link
$messages['link_name_help'] = 'Navn på denne lenken';
$messages['link_url_help'] = 'Peker til denne lenken';
$messages['link_description_help'] = 'Kort beskrivelse av lenken';
$messages['link_feed_help'] = 'En link til en RSS eller Atom strøm.';
$messages['link_category_help'] = 'Velg en av de tiljengelige lenkekategoriene';
$messages['error_adding_link'] = 'Det oppsto en feil. Sjekk informasjonen du tastet inn og prøv igjen';
$messages['error_invalid_url'] = 'Denne adressen er ikke korrekt';
$messages['link_added_ok'] = 'Lenken "%s" ble lagt til, ok';

// update link
$messages['error_updating_link'] = 'Det oppsto en feil under oppdatering av lenken. Sjekk informasjonen du tastet inn og prøv igjen';
$messages['error_fetching_link'] = 'Det oppsto en feil under henting av denne lenken';
$messages['link_updated_ok'] = 'Lenke "%s" ble oppdatert, ok';

// link categories
$messages['links'] = 'Antall lenker';
$messages['error_invalid_link_category_id'] = 'Kategorien til denne lenken er ikke korrekt eller ingen kategori ble valgt';
$messages['error_links_in_link_category'] = 'Lenkekategori "%s" er i bruk av noen lenker. Oppdater lenkene og prøv igjen';
$messages['error_removing_link_category'] = 'Det oppsto en feil under sletting av lenkekategori "%s"';
$messages['link_category_deleted_ok'] = 'Lenkekategori "%s" slettet, ok';
$messages['link_categories_deleted_ok'] = '%s lenkekategorier slettet, ok';
$messages['error_removing_link_category2'] = 'Det oppsto en feil under sletting av lenkekategori ID "%s"';

// new link category
$messages['link_category_name_help'] = 'Navnet du vil at denne kategorien skal ha';
$messages['error_adding_link_category'] = 'Det oppsto en feil med den nye lenkekategorien';
$messages['link_category_added_ok'] = 'Lenkekategori "%s" ble lagt til, ok';

// edit link category
$messages['error_updating_link_category'] = 'Det oppsto en feil med oppdateringen av denne lenkekategorien. Vennligst sjekk det du tastet en gang til';
$messages['link_category_updated_ok'] = 'Lenkekategori "%s" oppdatert, ok';
$messages['error_fetching_link_category'] = 'Det oppsto en feil under henting av denne lenkekategorien';

// custom fields
$messages['type'] = 'Type';
$messages['hidden'] = 'Skjult';
$messages['fields_deleted_ok'] = '%s egne felter slettet, ok';
$messages['field_deleted_ok'] = 'Eget felt "%s" slettet, ok';
$messages['error_deleting_field'] = 'Det oppsto en feil under sletting av det egne feltet "%s"';
$messages['error_deleting_field2'] = 'Det oppsto en feil under sletting av egne feltet med ID "%s"';
$messages['error_incorrect_field_id'] = 'Valgt ID for eget felt er ikke tillat';

// new custom field
$messages['field_name_help'] = 'ID som vil bli brukt når det henvises til innholdet i dette feltet i artikler';
$messages['field_description_help'] = 'Kort beskrivelse av dette feltet. Beskrivelsen blir vist når man legger til eller redigerer artikler';
$messages['field_type_help'] = 'Velg en av de tiljengelige felttypene';
$messages['field_hidden_help'] = 'Om et felt er skjult når man legger til eller redigerer en artikel. Denne egenskapen er mest brukt av ekstramoduler';
$messages['error_adding_custom_field'] = 'Det oppsto en feil med det egne feltet. Vennligst sjekk det du tastet inn en gang til';
$messages['custom_field_added_ok'] = 'Eget felt "%s" ble lagt til, ok';
$messages['text_field'] = 'Tekstfelt';
$messages['text_area'] = 'Tekstboks';
$messages['checkbox'] = 'Avkryssningsboks';
$messages['date_field'] = 'Datovalg';

// edit custom field
$messages['error_fetching_custom_field'] = 'Det oppsto en feil under hentingen av det egne feltet';
$messages['error_updating_custom_field'] = 'Det oppsto en feil under oppdateringen av det egne feltet. Vennligst sjekk det du tastet inn en gang til';
$messages['custom_field_updated_ok'] = 'Eget felt "%s" oppdatert, ok';

// resources
$messages['root_album'] = 'Hovedmappe';
$messages['num_resources'] = 'Antall ressurser';
$messages['total_size'] = 'Total størrelse';
$messages['album'] = 'Mappe';
$messages['error_incorrect_album_id'] = 'Mappe ID er ikke korrekt';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'Det var ikke mulig for pLog å opprette nødvendige mapper hvor ressursene skal ligge. Dette kan skyldes flere ting. PHP installasjonen kan muligens kjøre i "Safe mode" eller så har ikke brukeren rettigheter til å opprette mapper. Du kan utføre handlingen manuelt ved å opprette følgende mapper: <br/><br/>%s<br/><br/> Hvis disse mappene allerede eksisterer må du sørge for at de kan bli lest og skrevet til av brukeren som kjører web-serveren.';
$messages['items_deleted_ok'] = '%s filer slettet, ok';
$messages['error_album_has_children'] = 'Mappe "%s" har data i seg. Vennligst rediger mappen og prøv igjen';
$messages['item_deleted_ok'] = 'Fil "%s" slettet ok';
$messages['error_deleting_album'] = 'Det oppsto en feil under sletting av mappe "%s"';
$messages['error_deleting_album2'] = 'Det oppsto en feil under sletting av mappe ID "%s"';
$messages['error_deleting_resource'] = 'Det oppsto en feil under sletting av ressurs "%s"';
$messages['error_deleting_resource2'] = 'Det oppsto en feil under sletting av ressurs ID "%s"';
$messages['error_no_resources_selected'] = 'Ingen filer ble valgt for sletting';
$messages['resource_deleted_ok'] = 'Ressurs "%s" ble slettet, ok';
$messages['album_deleted_ok'] = 'Mappe "%s" ble slettet, ok';
$messages['add_resource'] = 'Legg til ressurs';
$messages['add_resource_preview'] = 'Legg til forhåndsvisning';
$messages['add_resource_medium'] = 'Legg til medium forhåndsvisning';
$messages['add_album'] = 'Legg til mappe';

// new album
$messages['album_name_help'] = 'Kort navn for den nye mappen';
$messages['parent'] = 'Underlagt';
$messages['no_parent'] = 'Ikke underlagt noen mappe';
$messages['parent_album_help'] = 'Bruk dette for å bedre organisere dine filer';
$messages['album_description_help'] = 'En litt lengere beskrivelse av innholdet i denne mappen';
$messages['error_adding_album'] = 'Det oppsto en feil under opprettelsen av den nye mappen. Vennligst sjekk det du tastet inn og prøv igjen';
$messages['album_added_ok'] = 'Mappe "%s" ble lagt til, ok';

// edit album
$messages['error_incorrect_album_id'] = 'Mappe ID er ikke korrekt';
$messages['error_fetching_album'] = 'Det oppsto en feil under henting av mappe';
$messages['error_updating_album'] = 'Det oppsto en feil under oppdateringen av mappen. Vennligst sjekk det du tastet inn og prøv en gang til';
$messages['album_updated_ok'] = 'Mappe "%s" ble oppdatert, ok';
$messages['show_album_help'] = 'Hvis IKKE valgt, denne mappen vil IKKE bli vist sammen med andre mapper som er tiljengelig i denne bloggen';

// new resource
$messages['file'] = 'Fil';
$messages['resource_file_help'] = 'Fil som vil bli lagt til denne bloggen. Bruk "Legg til x-anntall" for å laste opp mer enn en fil av gangen';
$messages['add_field'] = 'Legg til x-anntall';
$messages['resource_description_help'] = 'En litt lengere beskrivelse av hva denne filen inneholder';
$messages['resource_album_help'] = 'Velg hvilken mappe filen(e) skal ligge i';
$messages['error_no_resource_uploaded'] = 'Ingen fil(er) valgt for opplasting';
$messages['resource_added_ok'] = 'Fil "%s" lagt til, ok';
$messages['error_resource_forbidden_extension'] = 'Filen ble ikke lagt til fordi den er av en forbudt type';
$messages['error_resource_too_big'] = 'Filen ble ikke lagt til fordi den er for stor i h.h.t reglene';
$messages['error_uploads_disabled'] = 'Funksjonen for opplastinger er skrudd av';
$messages['error_quota_exceeded'] = 'Filen ble ikke lagt til fordi du har brukt opp din tildelte plass';
$messages['error_adding_resource'] = 'Det oppsto en feil med denne filen';

// edit resource
$messages['editResource'] = 'Rediger fil';
$messages['resource_information_help'] = 'Her finner du nøkkelinformasjon om denne filen';
$messages['information'] = 'Informasjon';
$messages['size'] = 'Størrelse';
$messages['format'] = 'Format';
$messages['dimensions'] = 'Dimensjon';
$messages['bits_per_sample'] = 'Bits pr. sample';
$messages['sample_rate'] = 'Sample rate';
$messages['number_of_channels'] = 'Antall kanaler';
$messages['legnth'] = 'Lengde';
$messages['thumbnail_format'] = 'Miniatyrformat';
$messages['regenerate_preview'] = 'Oppfrisk forhåndsvisning';
$messages['error_fetching_resource'] = 'Det oppsto en feil under henting av denne filen';
$messages['error_updating_resource'] = 'Det oppsto en feil under oppdateringen av denne filen';
$messages['resource_updated_ok'] = 'Fil "%s" ble oppdatert, ok';

// blog settings
$messages['blog_link'] = 'Blog lenke';
$messages['blog_link_help'] = 'Permanent lenke til denne bloggen';
$messages['blog_name_help'] = 'Tittel for denne bloggen';
$messages['blog_description_help'] = 'Lengere beskrivelse av innholdet i denne bloggen';
$messages['language'] = 'Språk';
$messages['blog_language_help'] = 'Språk som blir brukt i denne bloggen, både for websted og administrasjon';
$messages['max_main_page_items'] = 'Maksimum antall artikler på hovedsiden';
$messages['max_main_page_items_help'] = 'Maksimum antall artikler som til enhver tid vil bli vist på hovedsiden';
$messages['max_recent_items'] = 'Antall nye artikler vist';
$messages['max_recent_items_help'] = 'Maksimum antall nye artikler som vil bli vist på hovedsiden';
$messages['template'] = 'Blogmal';
$messages['choose'] = 'Velg';
$messages['blog_template_help'] = 'Blogmal (sidedesign) som vil bli brukt for å vise innhold i bloggen. Denne listen inneholder globale maler og maler installert kun for denne bloggen.';
$messages['use_read_more'] = 'Tillat "Les mer..." lenke i artikler.';
$messages['use_read_more_help'] = 'Hvis aktivert, kun tekst fra første "tekstboks" vil bli vist på hovedsiden. For å vise tekst fra "utvidet tekst" blir det plassert en "Les mer..." lenke i hver artikel';
$messages['enable_wysiwyg'] = 'Aktiver visuell (HTML) redigering av artikler';
$messages['enable_wysiwyg_help'] = 'Aktiverer en mer avansert måte å redigere artikler på. NB! Ikke alle nettlesere støtter denne funksjonen. Prøv og se.';
$messages['enable_comments'] = 'Aktiver kommentarer som standard';
$messages['enable_comments_help'] = 'Aktiverer kommentarer for alle artikler som standard. Kommentarer kan også bli aktivert/deaktivert pr. artikel';
$messages['show_future_posts'] = 'Vis fremtidige artikler i kalenderen';
$messages['show_future_posts_help'] = 'Om fremtidige artikler skal vises i kalenderen eller ikke';
$messages['comments_order'] = 'Rekkefølge på kommentarer';
$messages['comments_order_help'] = 'Hvilken rekkefølge kommentarer blir vist';
$messages['oldest_first'] = 'Eldste først';
$messages['newest_first'] = 'Nyeste først';
$messages['categories_order'] = 'Rekkefølge på kategorier';
$messages['categories_order_help'] = 'Hvilken rekkefølge kategorier blir vist';
$messages['most_recent_updated_first'] = 'Sist oppdaterte først';
$messages['alphabetical_order'] = 'Alfabetisk';
$messages['reverse_alphabetical_order'] = 'Reversert alfabatisk';
$messages['most_articles_first'] = 'Flest artikler først';
$messages['link_categories_order'] = 'Rekkefølge på lenker';
$messages['link_categories_order_help'] = 'Hvilken rekkefølge lenkene blir vist';
$messages['most_links_first'] = 'Flest lenker først';
$messages['most_links_last'] = 'Flest lenker sist';
$messages['time_offset'] = 'Justering for tidssone';
$messages['time_offset_help'] = 'Differansen i timer som dynamisk blir lagt til alle datoer og klokkeslet i bloggen';
$messages['close'] = 'Lukk';
$messages['select'] = 'Velg';
$messages['error_updating_settings'] = 'En feil oppsto med oppdateringen av instillingene. Vennligst sjekk det du tastet inn og prøv på nytt';
$messages['error_invalid_number'] = 'Tallet er ikke korrekt';
$messages['error_incorrect_time_offset'] = 'Timejusteringen er ikke gyldig';
$messages['blog_settings_updated_ok'] = 'Instillingene ble oppdatert, ok';

// user settings
$messages['username_help'] = 'Ditt nick eller brukernavn. NB! Kan ikke endres senere';
$messages['full_name'] = 'Fullt navn';
$messages['full_name_help'] = 'Ditt hele og fulle navn';
$messages['password_help'] = 'Skriv inn og verifiser ditt nye passord, eller la stå blankt for ingen forandring';
$messages['confirm_password'] = 'Gjenta passord';
$messages['email'] = 'E-post';
$messages['email_help'] = 'E-post adresse hvor beskjeder vil bli sendt';
$messages['bio'] = 'Litt nøkkelinformasjon om deg';
$messages['bio_help'] = 'En litt lengere informasjon om deg kan skrives inn her';
$messages['picture'] = 'Bilde';
$messages['user_picture_help'] = 'Velg et bilde til din profil';
$messages['error_invalid_password'] = 'Passordet er feil. Venligst sørg for at det ikke er for kort';
$messages['error_passwords_dont_match'] = 'Passordene stemmer ikke med hverandre';
$messages['error_incorrect_email_address'] = 'E-post adressen er ikke riktig';
$messages['error_updating_user_settings'] = 'Det oppsto en feil med oppdateringen av din brukerprofil. Vennligst sjekk det du tastet inn og prøv igjen';
$messages['user_settings_updated_ok'] = 'Brukerinformasjon ble oppdatert, ok';
$messages['resource'] = 'Ressurser';

// plugin center
$messages['identifier'] = 'ID';
$messages['error_plugins_disabled'] = 'Beklager, ekstramoduler er ikke aktivert';

// blog users
$messages['revoke_permissions'] = 'Tilbaketrekk rettigheter';
$messages['error_no_users_selected'] = 'Ingen brukere valgt';
$messages['user_remounder_from_blog_ok'] = 'Bruker "%s" ble fjernet fra denne bloggen, ok';
$messages['users_remounder_from_blog_ok'] = '%s brukere fjernet fra denne bloggen, ok';
$messages['error_removing_user_from_blog'] = 'Det oppsto en feil under fjerning av bruker "%s" fra denne bloggen';
$messages['error_removing_user_from_blog2'] = 'Det oppsto en feil under fjerning av bruker med ID "%s" fra denne bloggen';

// new blog user
$messages['new_blog_username_help'] = 'Brukernavn til personen som du vil gi rettigheter til for denne bloggen. Nye brukere vil kun ha tilgang til "Administrer" og "Ressurser"';
$messages['send_notification'] = 'Send beskjed';
$messages['send_user_notification_help'] = 'Send en beskjed pr. e-post til denne brukeren';
$messages['notification_text'] = 'Tekst i beskjeden';
$messages['notification_text_help'] = 'Tekst som blir inkludert i meldingen';
$messages['error_adding_user'] = 'Det oppsto en feil ifm. rettigheter til denne brukeren. Vennligst sjekk det du tastet inn og prøv igjen';
$messages['error_empty_text'] = 'Du må skrive inn noe tekst';
$messages['error_adding_user'] = 'Det oppsto en feil med å legge til brukeren. Vennligst sjekk det du tastet inn og prøv igjen';
$messages['error_invalid_user'] = 'Brukeren "%s" eksisterer ikke eller er ikke gyldig';
$messages['user_added_to_blog_ok'] = 'Bruker "%s" har fått rettigheter til denne bloggen';

// blog templates
$messages['error_no_templates_selected'] = 'Ingen blogmaler valgt';
$messages['error_template_is_current'] = 'Blogmal "%s" kan ikke bli slettet fordi den er i aktiv bruk';
$messages['error_removing_template'] = 'Det oppsto en feil i slettingen av "%s"';
$messages['template_remounder_ok'] = 'Blogmal "%s" slettet, ok';
$messages['templates_remounder_ok'] = '%s blogmaler slettet, ok';

// new blog template
$messages['template_installed_ok'] = 'Blogmal "%s" lagt til, ok';
$messages['error_installing_template'] = 'Det oppsto en feil i installeringen av blogmal "%s"';
$messages['error_missing_base_files'] = 'Noen av filene i blogmalen mangler';
$messages['error_add_template_disabled'] = 'Kan ikke legge til nye blogmaler fordi administrator har forbudt dette';
$messages['error_must_upload_file'] = 'Ingen blogmaler ble lastet opp';
$messages['error_uploads_disabled'] = 'Opplastinger er ikke aktivert';
$messages['error_no_new_templates_found'] = 'Ingen nye blogmaler ble funnet';
$messages['error_template_not_inside_folder'] = 'Filene til denne blogmalen må befinne seg inne i en mappe som har samme navn som blogmalen';
$messages['error_missing_base_files'] = 'Noen av nøkkelfilene til blogmalen finnes ikke';
$messages['error_unpacking'] = 'Det oppsto en feil under utpakkingen av filene';
$messages['error_forbidden_extensions'] = 'Blogmalen inneholder filer av en type som er forbudt';
$messages['error_creating_working_folder'] = 'En feil oppsto når mappen "./temp" ble forsøkt opprettet';
$messages['error_checking_template'] = 'Det oppsto en feil under kontroll av mal: %s';
$messages['template_package'] = 'Malpakke';
$messages['blog_template_package_help']  = 'Bruk dette skjemaet for å laste opp en ny blogmal, blogmalen vil kun bli tilgjengelig for din blog. Fungerer ikke denne opplastingen så kan du manuelt plassere filene i <b>%s</b>. Dette er mappen hvor dine blogmaler er lagret. Klikk "<b>Søk etter blogmaler</b>" knappen. pLog vil søke i mappen og automatisk legge til alle nye blogmaler den finner.';
$messages['scan_templates'] = 'Søk etter blogmaler';

// site users
$messages['user_status_active'] = 'Aktiv';
$messages['user_status_disabled'] = 'Deaktivert';
$messages['user_status_all'] = 'Alle';
$messages['user_status_unconfirmed'] = 'Ikke verifisert';
$messages['error_invalid_user2'] = 'Brukeren med ID "%s" eksisterer ikke';
$messages['error_deleting_user'] = 'Det oppsto en feil under deaktiveringen av bruker "%s"';
$messages['user_deleted_ok'] = 'Bruker "%s" deaktivert, ok';
$messages['users_deleted_ok'] = '%s brukere deaktivert, ok';

// create user
$messages['user_added_ok'] = 'Bruker "%s" lagt til, ok';
$messages['error_incorrect_username'] = 'Brukernavnet er ikke gyldig eller allerede i bruk';
$messages['user_status_help'] = 'Nåverende status for denne brukeren';
$messages['user_blog_help'] = 'Hvilken blog denne brukeren initielt blir lagt til';
$messages['none'] = 'Ingen';

// edit user
$messages['error_invalid_user'] = 'Bruker ID er ikke gyldig eller brukeren eksisterer ikke';
$messages['error_updating_user'] = 'Det oppsto en feil under oppdateringen av brukerinstillingene. Vennligst sjekk det du tastet inn og prøv igjen';
$messages['blogs'] = 'Blogger';
$messages['user_blogs_help'] = 'Blogger denne brukeren "eier" eller har tilgang til';
$messages['site_admin'] = 'Administrator';
$messages['site_admin_help'] = 'Om denne brukeren har administratorrettigheter og har tilgang til administrasjonsområdet';
$messages['user_updated_ok'] = 'Bruker "%s" oppdatert, ok';

// site blogs
$messages['blog_status_all'] = 'Alle';
$messages['blog_status_active'] = 'Aktive';
$messages['blog_status_disabled'] = 'Deaktivert';
$messages['blog_status_unconfirmed'] = 'Ikke verifisert';
$messages['owner'] = 'Eier';
$messages['quota'] = 'Tildelt diskplass';
$messages['bytes'] = 'Bytes';
$messages['error_no_blogs_selected'] = 'Ingen blogger ble valgt for deaktivering';
$messages['error_blog_is_default_blog'] = 'Blog "%s" kan ikke bli slettet fordi den er satt som standard blog';
$messages['blog_deleted_ok'] = 'Blog "%s" deaktivert, ok';
$messages['blogs_deleted_ok'] = '%s blogger slettet, ok';
$messages['error_deleting_blog'] = 'Det oppsto en feil under deaktiveringen av blog "%s"';
$messages['error_deleting_blog2'] = 'Det oppsto en feil under deaktiveringen av blog med ID "%s"';

// create blog
$messages['error_adding_blog'] = 'Det oppsto en feil i å legge til en blog. Vennligst sjekk det du tastet inn og prøv på nytt';
$messages['blog_added_ok'] = 'Blog "%s" lagt til, ok';

// edit blog
$messages['blog_status_help'] = 'Blog status';
$messages['blog_owner_help'] = 'Bruker som blir satt som eier av bloggen. Vedkommende får alle rettigheter over administrasjonen';
$messages['users'] = 'Brukere';
$messages['blog_quota_help'] = 'Tildelt diskplass for ressurser (filer, i bytes). 0 angir ingen begrensning. Blankt angir global tildeling';
$messages['blog_users_help'] = 'Brukere som har tilgang til denne bloggen. Velg brukere fra venstre felt og før dem over til høyre for å gi dem rettigheter for denne bloggen';
$messages['edit_blog_settings_updated_ok'] = 'Blog "%s" oppdatert, ok';
$messages['error_updating_blog_settings'] = 'Det oppsto en feil under oppdateringen av blog "%s"';
$messages['error_incorrect_blog_owner'] = 'Brukeren valgt som eier er ikke gyldig';
$messages['error_fetching_blog'] = 'Det oppsto en feil under henting av bloggen';
$messages['error_updating_blog_settings2'] = 'Det oppsto en feil under oppdateringen av bloggen. Vennligst sjekk det du tastet inn og prøv på nytt';
$messages['add_or_remove'] = 'Legg til eller fjern brukere';

// site locales
$messages['locale'] = 'Språk';
$messages['locale_encoding'] = 'Kodesett';
$messages['locale_deleted_ok'] = 'Språk "%s" slettet, ok';
$messages['error_no_locales_selected'] = 'Ingen språk valgt for fjerning.';
$messages['error_deleting_only_locale'] = 'Språket kunne ikke bli fjernet fordi det er det siste som er igjen';
$messages['locales_deleted_ok']= '%s språk fjernet, ok';
$messages['error_deleting_locale'] = 'Det oppsto en feil under fjerningen av språk "%s"';
$messages['error_locale_is_default'] = 'Språk "%s" kan ikke bli slettet fordi det er angitt som standard for nye blogger';

// add locale
$messages['error_invalid_locale_file'] = 'Språkfilen er ikke gyldig';
$messages['error_no_new_locales_found'] = 'Ingen nye språkfiler ble funnet';
$messages['locale_added_ok'] = 'Språk "%s" lagt til, ok';
$messages['error_saving_locale'] = 'Det oppsto en feil under lagringen av den nye språkfilen';
$messages['scan_locales'] = 'Søk etter språk';
$messages['add_locale_help'] = 'Bruk dette skjemaet for å laste opp nye språkfiler. Virker ikke dette skjemaet kan du laste opp filen(e) manuelt og plassere dem i mappen <b>./locales/</b>. Dette er mappen hvor alle språkfiler ligger. Klikk så på "<b>Søk etter språk</b>" knappen. pLog vil da automatisk legge til nye språk den finner';

// site templates
$messages['error_template_is_default'] = 'Blogmal "%s" kan ikke bli slettet fordi den er satt som standard for nye blogger';

// add template
$messages['global_template_package_help'] = 'Bruk dette skjemaet til å laste opp nye blogmaler. Blogmaler lastet opp her vil være tilgjengelig globalt. Hvis det ikke er mulig å bruke dette skjemaet kan du laste opp filene manuelt og plassere dem i mappen <b>%s</b>. Dette er standardmappen hvor alle globale blogmaler ligger. Klikk så "<b>Søk etter nye blogmaler</b>" knappen. pLog vil automatisk legge til nye maler den finner';

// global settings
$messages['site_config_saunder_ok'] = 'Globale instillinger lagret, ok';
$messages['error_saving_site_config'] = 'Det oppsto en feil under lagringen av globale instillinger.';
/// general settings
$messages['help_comments_enabled'] = 'Aktiver eller deaktiver kommentarer for nye blogger som standard. [Standard=Ja]';
$messages['help_beautify_comments_text'] = 'Hvis aktivert, kommentarer fra brukere vil bli formatert med avsnitt og automatisk lenking av alle URLer [Standard=Ja]';
$messages['help_temp_folder'] = 'Mappe hvor pLog kan lagre midlertidig data. En mappe utenfor serverstrukturen vil øke sikkerheten [Standard=./tmp]';
$messages['help_base_url'] = 'Basis URL hvor denne bloggen er installert';
$messages['help_subdomains_enabled'] = 'Aktiver eller deaktiver subdomener. Vennligst se dokumentasjonen for mer info om subdomener [Standard=Nei]';
$messages['help_subdomains_base_url'] = 'Basis URL for subdomener. Denne URLen blir brukt istedenfor std. basis URL. For å generere en link til en blog så bruk {blogname} for å hente blognavnet og {username} for å hente navnet til den som eier bloggen. (Eks. http://{blogname}.dittdomene.no)';
$messages['help_include_blog_id_in_url'] = 'Kun i bruk når subdomener er kombinert med std. URLer. Tvinger internt genererte URLer til å ikke inneholde parameteren "blogId" La stå hvis du IKKE er sikker på hva du gjør [Standard=Ja]';
$messages['help_script_name'] = 'Hvis du ønsker å bruke et annet filnavn enn index.php [Standard=index.php]';
$messages['help_show_posts_max'] = 'Maksimum antall artikler på førstesiden. (For nye blogger) [Standard=15]';
$messages['help_recent_posts_max'] = 'Maksimum antall "nye" artikler vist på hovedsiden (For nye blogger) [Standard=10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Aktiver eller deaktiver lagring av kladd via javascript og XMLHTTPRequest [Standard=Ja]';
$messages['help_locale_folder'] = 'Mappe hvor språkfilene er lagret [Standard=./locale]';
$messages['help_default_locale'] = 'Standard språkinstillinger for nye blogger [Standard=en_UK]';
$messages['help_default_blog_id'] = 'Standard blog hvis ikke annet er angitt [Standard=1]';
$messages['help_default_time_offset'] = 'Standard tidsjustering for nye blogger [Standard=0]';
$messages['help_html_allowed_tags_in_comments'] = 'HTML tags som skal være tillat i kommentarer [Standard=&lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'Aktiver eller deaktiver muligheten til å lagre henvisere i databasen. Deaktivering gir en høyere ytelse [Standard=Ja]';
$messages['help_show_more_enabled'] = 'Aktiver eller deaktiver "Les mer..." funksjonen for nye blogger [Standard=Ja]';
$messages['help_update_article_reads'] = 'Aktiver eller deaktiver intern teller over hvor mange ganger en artikel er lest [Standard=Ja]';
$messages['help_update_cached_article_reads'] = 'Som over, men oppdaterer selv om cache er slått på [Standard=Ja]';
$messages['help_xmlrpc_ping_enabled'] = 'Aktiver eller deaktiver muligheten til å sende XMLRPC ping til servere som støtter dette [Standard=Ja]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Skal XMLRPC ping være standard aktivert for alle nye artikler og oppdateringer [Standard=Ja]';
$messages['help_xmlrpc_ping_hosts'] = 'URL som peker mot XMLRPC funksjonen på eksterne servere. 1 URL pr. linje [Standard=http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = 'Aktiver eller deaktiver innkommende trackbacklenker [Standard=Ja]';
$messages['help_htmlarea_enabled'] = 'Aktiver eller deaktiver den mer avanserte visuelle (HTML) editoren for nye artikler [Standard=Ja]';
$messages['help_plugin_manager_enabled'] = 'Aktiver eller deaktiver støtte for ekstramoduler [Standard=Ja]';
$messages['help_minimum_password_length'] = 'Minimum lengde på passord [Standard=4]';
$messages['help_xhtml_converter_enabled'] = 'pLog vil prøve å konvertere all HTML til korrekt XHTML kode [Standard=Ja]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'Samme som over, men pLog vil anstrenge seg litt hardere for å lykkes. OBS, feil kan intreffe [Standard=Nei]';
$messages['help_session_save_path'] = 'Angi hvor pLog lagrer sesjonsdata. Mappen må være skrivbar for webserveren. La det stå tomt for å bruke PHP sin standard mappe for sesjoner [Standard=Ingen]';
// summary settings
$messages['help_summary_page_show_max'] = 'Antall "aktiviteter" som pLog vil liste opp på oppsumeringssiden (Dashbord) Dette kontrollerer alle lister på dashbordet (nye artikler, mest aktive blogger, osv) [Standard=10]';
$messages['help_summary_blogs_per_page'] = 'Antall blogger pr. side i listen over blogger [Standard=25]';
$messages['help_forbidden_usernames'] = 'Brukernavn du vil nekte registrering. Bruk mellomrom som separator [Standard = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = 'Godta kun 1 blog pr. e-post adresse [Standard=Nei]';
$messages['help_summary_show_agreement'] = 'Vis en "Brukeravtale" og tving brukere til å akseptere denne før registrering kan skje [Standard=Ja]';
$messages['help_need_email_confirm_registration'] = 'Tving nye brukere til å måtte aktivere ny konto via en link sendt til dem på oppgitt e-post adresse [Standard=Ja]';
$messages['help_summary_disable_registration'] = 'Slå av muligheten for nye brukere å registrere nye blogger [Standard=Ja]';
// templates
$messages['help_template_folder'] = 'Mappe hvor blogmaler er lagret [Standard=./templates]';
$messages['help_default_template'] = 'Standard blogmal for nye blogger [Standard=standard]<--:)';
$messages['help_users_can_add_templates'] = 'Kan brukere laste opp egne blogmaler [Standard=Ja]';
$messages['help_template_compile_check'] = 'Hvis deaktivert, vil Smartymotoren kontrollere hver gang om en mal har endret seg, og hvis ja, vil den bruke den nyeste versjonen. Slå av for høyere ytelse [Standard=Ja]';
$messages['help_template_cache_enabled'] = 'Aktiver caching av maler. Hvis aktivert så vil en cached utgave av en side bli brukt når mulig. Ingen data trengs å hentes fra databaseserveren og blogmalene trenger ikke å bli re-kompilert [Standard=Ja]';
$messages['help_template_cache_lifetime'] = 'Hvor lenge, i sekunder, cachede blogmaler skal leve. Angi -1 for å angi "utgår ikke" 0 angir deaktivering av cache, men det er anbefalt å sette template_cache_enabled til "Nei" for å deaktivere cache [Standard=0]';
$messages['help_template_http_cache_enabled'] = 'Aktiver støtte for "If-Modified-Since" attributt og HTTP "conditional requests" Hvis aktivert så vil pLog lese "If-Modified-Since" HTTP informasjonen og kun sende nødvendig data. Aktiver dette hvis du vil spare på bruken av båndbredde [Standard=Nei]';
// urls
$messages['help_request_format_mode'] = 'Velg en av de tilgjengelige URL formatene. Hvis du velger "Tilpasset" så må du huske på å konfigurere instillingene under [Standard=Standard]';
$messages['plain'] = 'Standard';
$messages['search_engine_friendly'] = 'Søkemotorvennlig';
$messages['custom_url_format'] = 'Tilpasset';
$messages['help_permalink_format'] = 'Format for permalink under bruk av tilpassede URLer [Standard=/blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = 'Lenkeformat til kategorier under bruk av tilpassede URLer [Standard=/blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'Lenkeformat til blogger under bruk av tilpassede URLer [Standard=/blog/{blogname}$]';
$messages['help_archive_link_format'] = 'Lenkeformat til arkiver under bruk av tilpassede URLer [Standard=/blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'Lenkeformat for artikler under bruk av tilpassede URLer [Standard=/blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'Lenkeformat til trackbacksiden under bruk av tilpassede URLer [Standard=/blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'Lenkeformat til egen statiske blogmaler under bruk av tilpassede URLer [Standard=/blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'Lenkeformat til mappe under bruk av tilpassede URLer [Standard=/blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'Lenkeformat til filressurser under bruk av tilpassede URLer [Standard=/blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'Lenkeformat til forhåndsvisninger under bruk av tilpassede URLer [Standard=/blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'Lenkeformat til forhåndsvisninger av medium størrelse under bruk av tilpassede URLer [Standard=/blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'Lenkeformat til filer under bruk av tilpassede URLer [Standard=/blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = 'Utfør enkel validering av e-post adresser. Om MX data eksisterer i domenet og om e-post adressen faktisk er en gyldig adresse [Standard=Nei]';
$messages['help_email_service_enabled'] = 'Aktiver eller deaktiver utgående e-post [Standard=Ja]';
$messages['help_post_notification_source_address'] = 'E-post adresse som blir brukt som "Fra:" adresse når det sendes e-post fra pLog [Standard=noreply@your.host.com]';
$messages['help_email_service_type'] = 'Hvilken metode du vil bruke for å sende e-poster [Standard=PHP]';
$messages['help_smtp_host'] = 'Hvis du vil bruke en SMTP server som vert for utgående e-post så må du skrive in navnet her (eks. smtp.enellerannenserver.no) [Standard=Ingen]';
$messages['help_smtp_port'] = 'Fyll inn riktig port hvis ikke SMTP serveren bruker standard port 25 [Standard=Ingen]';
$messages['help_smtp_use_authentication'] = 'Aktiver hvis SMTP serveren trenger standard autentisering [Standard=Nei]';
$messages['help_smtp_username'] = 'Hvis SMTP serveren trenger autentisering så skriv inn brukernavnet her [Standard=Ingen]';
$messages['help_smtp_password'] = 'Hvis SMTP serveren trenger autentisering så skriver du inn passordet her [Standard=Ingen]';
// helpers
$messages['help_path_to_tar'] = 'Sti til "tar" programmet. Brukes bl.a. for utpakking av blogmaler som kommer i .tar.gz eller .tar.bz2 format [Standard=/bin/tar]';
$messages['help_path_to_gzip'] = 'Sti til "gzip" programmet. Brukes bl.a. for utpakking av blogmaler som kommer i .tar.gz format [Standard=/bin/gzip]';
$messages['help_path_to_bz2'] = 'Sti til "bzip2" programmet. Brukes bl.a. for utpakking av blogmaler som kommer i .tar.bz2 format [Standard=/usr/bin/bzip2]';
$messages['help_path_to_unzip'] = 'Sti til "unzip" programmet. Brukes bl.a. for utpakking av blogmaler som kommer i zip format [Standard=/usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'Bruk PHP sitt interne bibliotek for å pakke opp komprimerte .zip filer [Standard=Nei]';
// uploads
$messages['help_uploads_enabled'] = 'Om brukere kan laste opp filer. Denne instillingen påvirker bruk av ressurser og opplasting av egne blogmaler og språk [Standard=Ja]';
$messages['help_maximum_file_upload_size'] = 'Maksimum størrelse på filer. Merk, denne grense vil aldrig kunne overstige PHP sin egen interne grense [Standard=2000000]';
$messages['help_upload_forbidden_files'] = 'Liste over filtyper som det ikke er tillatt å laste opp. Bruk av \'*\' og \'?\' er tillatt i listen. Bruk mellomrom som sepparator [Standard=*.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'Aktiver eller deaktiver XMLRPC tilgang til blogger [Standard=Ja]';
$messages['help_rdf_enabled'] = 'Aktiver syndikering av innhold via ATOM eller RSS [Standard=Ja]';
$messages['help_default_rss_profile'] = 'Hvis ikke annet er angitt, standard versjon av RSS eller ATOM som skal brukes under syndikering av innhold [Standard=RSS 1.0]';
// security
$messages['security_pipeline_enabled'] = 'Aktiver eller deaktiver den generelle sikkerhetsmekanismen og alle relaterte filtre. Dette har også effekt over ekstramoduler som registrerer nye filtre [Standard=Ja]';
$messages['help_ip_address_filter_enabled'] = 'Aktiver eller deaktiver IP basert filtrering. Den generelle sikkerhetsmekanismen må også være aktivert for at denne funksjonen skal virke [Standard=Ja]';
$messages['help_content_filter_enabled'] = 'Aktiver eller deaktiver frase og uttrykksfilteret. Den generelle sikkerhetsmekanismen må også være aktivert for at denne funksjonen skal virke [Standard=Ja]';
$messages['help_maximum_comment_size'] = 'Maksimum størrelse i byte for en kommentar. 0 deaktiverer [Standard=0]';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = 'Aktiver eller deaktiver "Bayesian" filteret for automatisk søppel(spam)filtrering [Standard=Ja]';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'Maksimum nivågrense før en kommentar blir ansett som søppel [Standard=0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'Minimum nivågrense en artikel må ha for at den kan bli klassifisert som IKKE søppel [Standard=0.2]';
$messages['help_bayesian_filter_min_length_token'] = 'Minimum lengde på et nøkkelord for at Bayesian filteret skal godkjenne det [Standard=3]';
$messages['help_bayesian_filter_max_length_token'] = 'Maksimum lengde på et nøkkelord for at Bayesian filteret skal godkjenne det [Standard=100]';
$messages['help_bayesian_filter_number_significant_tokens'] = 'Antall nøkkelord [Standard=15]';
$messages['help_bayesian_filter_spam_comments_action'] = 'Hva du ønsker å gjøre med kommentarer som er identifisert som søppel. Velg "Fjærn søppel" kun når filteret er riktig konnfigurert [Standard=Lagre]';
$messages['keep_spam_comments'] = 'Lagre i databasen merket som "Spam"';
$messages['throw_away_spam_comments'] = 'Fjern søppel (spam)';
// resources
$messages['help_resources_enabled'] = 'Aktiver eller deaktiver ressurser [Standard=Ja]';
$messages['help_resources_folder'] = 'Mappe hvor alle ressursfiler blir lagret. Det øker sikkerheten hvis du kan velge/opprette en mappe utenfor webserverens filsystem [Standard=./gallery]';
$messages['help_thumbnail_method'] = 'Metode for generering av miniatyrbilder. Hvis du velger PHP så er det påkrevet at PHP er satt opp med støtte for GD biblioteket [Standard=PHP]';
$messages['help_path_to_convert'] = 'Sti til konverteringsprogrammet fra ImageMagick pakken. Obligatorisk hvis standard programm for miniatyrbilder er "ImageMagick" [Standard=/usr/bin/convert]';
$messages['help_thumbnail_format'] = 'Hvilket format miniatyrbilder skal lagres i [Standard=Samme som bilde]';
$messages['help_thumbnail_height'] = 'Standard høyde for små miniatyrbilder [Standard=120]';
$messages['help_thumbnail_width'] = 'Standard bredde for små miniatyrbilder [Standard=120]';
$messages['help_medium_size_thumbnail_height'] = 'Standard høyde for medium miniatyrbilder [Standard=480]';
$messages['help_medium_size_thumbnail_width'] = 'Standard bredde for medium miniatyrbilder [Standard=640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'Behold vertikal og horisontal innbyrdes skalering under generering av miniatyrbilder [Standard=Ja]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'Tving pLog til å bare bruke GD1 funksjoner [Standard=Nei]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'Algoritme som brukes for utjevning av miniatyrbilder. Bare i bruk hvis GD biblioteket er standard for miniatyrbilder [Standard=PHP Imagecopyresampled]';
$messages['help_resources_quota'] = 'Global allokering av diskplass for blogger, i bytes (5242880 Bytes = 5MB) Sett til 0 for ubegrenset plass [Standard=0]';
$messages['help_resource_server_http_cache_enabled'] = 'Aktiver støtte for "If-Modified-Since" informasjon og HTTP "conditional requests" Aktiver hvis du vil spare på bruken av båndbredde [Standard=Nei]';
$messages['help_resource_server_http_cache_lifetime'] = 'Tid, i mikrosekunder, som brukere vil bruke en mellomlagret (cached) utgave av ressursen [Standard=9999999]';
// search
$messages['help_search_engine_enabled'] = 'Aktiver eller deaktiver søkefunksjonene [Standard=Ja]';
$messages['help_search_in_custom_fields'] = 'Søk også i egne felter [Standard=Ja]';
$messages['help_search_in_comments'] = 'Søk også i kommentarer [Standard=Ja]';

// cleanup
$messages['purge'] = 'Rydd opp (Fjerning)';
$messages['cleanup_spam'] = 'Rydd opp søppel';
$messages['cleanup_spam_help'] = 'Dette vil fjerne og slette alle kommentarer som har blitt merket som søppel av brukere. Det vil ikke være mulig å hente disse kommentarene tilbake senere';
$messages['spam_comments_purged_ok'] = 'Søppelkommentarer slettet, ok';
$messages['cleanup_posts'] = 'Rydd opp i artikler';
$messages['cleanup_posts_help'] = 'Dette vil fjerne og slette alle artikler som har blitt merket for sletting av brukere. Det vil ikke være mulig å hente disse artiklene tilbake senere';
$messages['posts_purged_ok'] = 'Sletting av artikler, ok';

/// summary ///
// front page
$messages['summary'] = 'Oppsummering';
$messages['register'] = 'Registrer deg';
$messages['summary_welcome'] = 'Velkommen';
$messages['summary_most_active_blogs'] = 'Mest aktive blog';
$messages['summary_most_commented_articles'] = 'Mest kommenterte artikler';
$messages['summary_most_read_articles'] = 'Mest leste artikler';
$messages['password_forgotten'] = 'Glemt ditt passord?';
$messages['summary_newest_blogs'] = 'Nyeste blog';
$messages['summary_latest_posts'] = 'Siste artikel';
$messages['summary_search_blogs'] = 'Søk i bloggene';

// blog list
$messages['updated'] = 'Oppdatert';
$messages['total_reads'] = 'Totalt';

// blog profile
$messages['blog'] = 'Blog';
$messages['latest_posts'] = 'Siste artikler';

// registration
$messages['register_step0_title'] = 'Aksepter brukeravtale';
$messages['agreement'] = 'Brukeravtale';
$messages['decline'] = 'Avslå';
$messages['accept'] = 'Aksepter';
$messages['read_service_agreement'] = 'Vennligst les gjenom brukeravtalen. Deretter klikk på "Aksepter" knappen hvis du godtar innholdet i brukeravtalen';
$messages['register_step1_title'] = 'Lag en bruker [1/4]';
$messages['register_step1_help'] = 'Først må du lage en bruker for deg selv. Denne brukeren vil bli eieren av bloggen og ha alle rettigheter over bloggens utseende og funksjoner';
$messages['register_next'] = 'Neste';
$messages['register_back'] = 'Tilbake';
$messages['register_step2_title'] = 'Lag en blog [2/4]';
$messages['register_blog_name_help'] = 'Navn for din nye blog';
$messages['register_step3_title'] = 'Velg en blogmal [3/4]';
$messages['step1'] = 'Skritt 1';
$messages['step2'] = 'Skritt 2';
$messages['step3'] = 'Skritt 3';
$messages['register_step3_help'] = 'Velg en av de tilgjengelige blogmalene for din blog. Malen/designet kan forandres senere';
$messages['error_must_choose_template'] = 'Vennligst velg en blogmal';
$messages['select_template'] = 'Velg blogmal';
$messages['register_step5_title'] = 'Gratulerer! [4/4]';
$messages['finish'] = 'Gjennomfør';
$messages['register_need_confirmation'] = 'En e-post er sendt til deg. Vennligst klikk på linken i e-posten for å starte å blogge!';
$messages['register_step5_help'] = 'Gratulerer, din bruker og blog har blitt opprettet!';
$messages['register_blog_link'] = 'Klikk her <a href="%2$s">%1$s</a> hvis du ønsker å se din nye blog';
$messages['register_blog_admin_link'] = 'Hvis du vil starte å poste artikler med en gang så kan du klikke på <a href="admin.php">administrasjon</a>';
$messages['register_error'] = 'Det oppsto en feil underveis';
$messages['error_registration_disabled'] = 'Beklager, registrering av nye blogger er ikke tillat';
// registration article topic and text
$messages['register_default_article_topic'] = 'Gratulerer!';
$messages['register_default_article_text'] = 'Hvis du kan lese denne artikkelen så betyr det at registreringen var vellykket og du kan starte å blogge';
$messages['register_default_category'] = 'Generelt';
// confirmation email
$messages['register_confirmation_email_text'] = 'Vennligst klikk på linken under for å aktivere din blog:

%s

Ha en strålende dag';
$messages['error_invalid_activation_code'] = 'Beklager, valideringskoden er ikke riktig';
$messages['blog_activated_ok'] = 'Gratulerer, din nye bruker og blog har blitt godkjent og verifisert';
// forgot your password?
$messages['reset_password'] = 'Resett ditt passord';
$messages['reset_password_username_help'] = 'Brukernavn til den du vil resette passordet for';
$messages['reset_password_email_help'] = 'E-post adressen som ble brukt under registrering av brukeren';
$messages['reset_password_help'] = 'Bruk dette skjemaet for å resette passordet. Vennligst tast in brukernavnet og e-post adressen som ble brukt under registreringen av brukeren';
$messages['error_resetting_password'] = 'Det oppsto en feil under oppdateringen av passordet. Vennligst sjekk det du tastet inn og prøv på nytt';
$messages['reset_password_error_incorrect_email_address'] = 'E-post adressen er ikke riktig eller det er ikke den e-post adressen som ble brukt under registreringen av brukeren';
$messages['password_reset_message_sent_ok'] = 'En e-post med en lenke er blitt sendt til deg. Vennligst klikk på denne lenken for å verifisere ditt passord';
$messages['error_incorrect_request'] = 'Feil i URL';
$messages['change_password'] = 'Angi nytt passord';
$messages['change_password_help'] = 'Vennligst skriv inn og verifiser ditt nye passord';
$messages['new_password'] = 'Nytt passord';
$messages['new_password_help'] = 'Skriv inn ditt nye passord her';
$messages['password_updated_ok'] = 'Ditt passord har blitt oppdatert, ok';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'Denne siden ser kjip ut fordi du bruker en nettleser som ikke er oppdatert eller ikke støtter moderne måter å presentere websider på. For å se siden slik den skal være så vennligst <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">oppgrader</a> til en nettleser som støtter moderne standarder. Null tull og helt gratis.';
$messages['jump_to_navigation'] = 'Hopp til navigasjon';
$messages['comment_email_never_display'] = 'Line and paragraph breaks automatic, e-mail address never displayed.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> allowed: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = 'The <acronym title="Uniform Resource Identifier">URI</acronym> to trackback this entry is: ';
$messages['previous_post'] = 'Forrige';
$messages['next_post'] = 'Neste';
$messages['comment_default_title'] = '(Untitled)';
$messages['guestbook'] = 'Gjestebok';
$messages['trackbacks'] = 'Trackback';
$messages['menu'] = 'Meny';
$messages['albums'] = 'Filområde';
$messages['services'] = 'Tjenester';
$messages['admin'] = 'Administrator';

//Under her kan du legge dine egne koder. Lykke til med bloggingen :-)
?>
