<?php

// Traducció realitzada per Ramon Forns (www.sopadelletres.com)
// This translation was made by Ramon Forns (www.sopadelletres.com)
// Ets lliure d'usar-la i modificar-la! Feel free to use it and modify at your own.


// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'iso-8859-1';
$messages['locale_description'] = "Traducció de pLog al català.";
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %H:%M';

// days of the week
$messages["days"] = Array( "Diumenge", "Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres", "Dissabte" );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( 'Dg', 'Dl', 'Dm', 'Dc', 'Dj', 'Dv', 'Ds' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages["months"] = Array( "Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre" );
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

$messages["message"] = "Missatge";
$messages["error"] = "Error";

$messages["date"] = "Data";

// miscellaneous texts
$messages["of"] = "de";
$messages["recently"] = "recentment...";
$messages["comments"] = "comentaris";
$messages["comment on this"] = "Comentaris";
$messages["my_links"] = "els meus enllaços";
$messages["archives"] = "arxius";
$messages["search"] = "cerca";
$messages["calendar"] = "Calendari";
$messages["editLinkCategories"] = "Categories";
$messages["search_s"] = "Cercar";
$messages["link_tracker"] = "Link Tracker";
$messages["search_this_blog"] = "Cerca en aquest bloc:";
$messages["about_myself"] = "Sobre mi...";
$messages["permalink_title"] = "Enllaç permanent l'arxiu";
$messages["permalink"] = "Enllaç permanent";
$messages["posted_by"] = "Enviat per ";
$messages["on_the"] = "el ";
$messages["page"] = "pàgina";
$messages["posted"] = "enviat";

$messages["reply"] = "Respondre";


// add comment form
$messages["add_comment"] = "Afegeix comentari";
$messages["comment_topic"] = "Títol";
$messages["comment_text"] = "Text";
$messages["comment_username"] = "El teu nom";
$messages["comment_email"] = "La teva adreça de correu (si en tens)";
$messages["comment_url"] = "La teva pàgina personal (si en tens)";
$messages["comment_send"] = "Envia";
$messages["comment_added"] = "Comentari enviat!";
$messages["comment_add_error"] = "Error enviant el comentari.";

$messages["article_does_not_exist"] = "L'article sol·licitat no existeix.";
$messages["no_posts_found"] = "No s'ha trobat cap article.";
$messages["user_has_no_posts_yet"] = "Aquest usuari no té cap article encara.";

$messages["info_about_myself"] = "Informació sobre mi...";
$messages["back"] = "Tornar";

$messages['post'] = 'missatge';

$messages["trackbacks_for_article"] = "Retronellaços per l'article";
$messages["trackback_excerpt"] = "Fragment";
$messages["trackback_weblog"] = "Bloc";

$messages['search'] = 'Cerca';
$messages["search_results"] = "Resultats de la cerca";
$messages["search_matching_results"] = "Els següents articles concorden amb els termes de la cerca";
$messages["search_no_matching_posts"] = "No s'ha trobat cap article que concordi amb els termes de la cerca";

$messages["see_all_link"] = "(Fes clic aquí per a veure tots els seus articles, desde el principi dels temps)";

$messages["read_more"] = "(Segueix)";

$messages['syndicate'] = 'ALTRES';

$messages['main'] = 'Inici';

$messages['about'] = 'Envers';



////// error messages /////
$messages["error_fetching_article"] = "L'article especificat no s'ha pogut trobar.";
$messages["error_fetching_articles"] = "Els articles no s'han pogut carregar.";
$messages["error_trackback_no_trackback"] = "No s'han trobat retroenllaços per a l'article especificat.";
$messages["error_incorrect_article_id"] = "L'identificador de l'article és incorrecte.";
$messages["error_incorrect_blog_id"] = "L'identificador del bloc no és correcte.";
$messages["error_comment_without_text"] = "Hauries d'escriure alguna cosa com a contingut del comentari.";
$messages["error_comment_without_name"] = "Hauries de donar com a mínim el teu nom.";
$messages["error_adding_comment"] = "Hi ha hagut un error afegint el comentari a la base de dades.";
$messages["error_incorrect_parameter"] = "Paràmetre incorrecte.";
$messages["error_parameter_missing"] = "Falta un paràmetre a la petició.";
$messages["error_blog_has_no_links"] = "Aquest bloc encara no té enllaços.";
$messages["error_comments_not_enabled"] = "La funció de comentar articles has estat desactivada en aquest lloc.";
$messages['error_incorrect_search_terms'] = 'Els termes de la recerca no són vàlids';
$messages['error_no_search_results'] = 'No hi ha coincidències amb el text recercat';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Connecta';
$messages['welcome_message'] = 'Benvingut a pLog';
$messages["error_incorrect_username_or_password"] = "El nom d'usuari o la paraula clau són incorrectes.";
$messages["error_dont_belong_to_any_blog"] = "L'usuari és vàlid però no pertany a cap bloc.";
$messages["logout_message"] = "El procés de sortida ha acabat correctament.";
$messages['logout_message_2'] = 'Fes clic <a href="%1$s">aquí</a> per anar a %2$s</a>.';
$messages["username"] = "Nom d'usuari";
$messages['password'] = 'Contrasenya';

// dashboard
$messages['dashboard'] = 'Tauler de control';
$messages['recent_articles'] = 'Articles recents';
$messages['recent_comments'] = 'Últims comentaris';
$messages['recent_trackbacks'] = 'Últims retroenllaços';
$messages['blog_statistics'] = 'Estadístiques';
$messages['total_posts'] = 'Total d\'articles';
$messages['total_comments'] = 'Total de comentaris';
$messages['total_trackbacks'] = 'Total de retroenllaços';
$messages['total_viewed'] = 'Total d\'articles llegits';
$messages['in'] = 'a';

// menu options
$messages['newPost'] = 'Nou missatge';
$messages['Manage'] = 'Gestiona';
$messages['managePosts'] = 'Gestiona missatges';
$messages['editPosts'] = 'Missatges';
$messages['editArticleCategories'] = 'Categories';
$messages['newArticleCategory'] = 'Nova categoria';
$messages['manageLinks'] = 'Gestiona enllaços';
$messages['editLinks'] = 'Enllaços';
$messages['newLink'] = 'Nou enllaç';
$messages['editLink'] = 'Edita enllaç';
$messages['editLinkCategories'] = "Categories d'enllaç";
$messages['newLinkCategory'] = "Nova categoria d'enllaç";
$messages['editLinkCategory'] = "Edita categoria d'enllaç";
$messages['manageCustomFields'] = 'Gestiona camps personalitzats';
$messages['blogCustomFields'] = 'Camps personalitzats';
$messages['newCustomField'] = 'Nou camp personalitzat';
$messages['resourceCenter'] = 'Fitxers';
$messages['resources'] = 'Recursos';
$messages['newResourceAlbum'] = 'Nou àlbum';
$messages['newResource'] = 'Nou recurs';
$messages['controlCenter'] = 'Arranjaments';
$messages['manageSettings'] = 'Preferències';
$messages['blogSettings'] = 'Preferències de bloc';
$messages['userSettings'] = "Preferències d'usuari";
$messages['pluginCenter'] = 'Centre de complements';
$messages['Stats'] = 'Estadístiques';
$messages['manageBlogUsers'] = 'Gestiona usuaris dels blocs';
$messages['newBlogUser'] = 'Nou usuari de bloc';
$messages['showBlogUsers'] = 'Usuaris de bloc';
$messages['manageBlogTemplates'] = 'Gestiona plantilles de bloc';
$messages['newBlogTemplate'] = 'Nova plantilla de bloc';
$messages['blogTemplates'] = 'Plantilles de bloc';
$messages['adminSettings'] = 'Administració';
$messages['Users'] = 'Usuaris';
$messages['createUser'] = 'Crea usuari';
$messages['editSiteUsers'] = 'Usuaris del lloc web';
$messages['Blogs'] = 'Gestiona blocs';
$messages['createBlog'] = 'Crea bloc';
$messages['editSiteBlogs'] = 'Blocs';
$messages['Locales'] = 'Gestiona localitzacions';
$messages['newLocale'] = 'Nova Localització';
$messages['siteLocales'] = 'Ubicació de la localització';
$messages['Templates'] = 'Gestiona plantilles';
$messages['newTemplate'] = 'Nova plantilla';
$messages['siteTemplates'] = 'Ubicacció de les plantilles';
$messages['GlobalSettings'] = 'Preferències generals';
$messages['editSiteSettings'] = 'General';
$messages['summarySettings'] = 'Sumari';
$messages['templateSettings'] = 'Plantilles';
$messages['urlSettings'] = 'URLs';
$messages['emailSettings'] = 'correu-e';
$messages['uploadSettings'] = 'Arxius pujats';
$messages['helpersSettings'] = 'Aplicacions externes';
$messages['interfacesSettings'] = 'Interfícies';
$messages['securitySettings'] = 'Seguretat';
$messages['bayesianSettings'] = 'Filtre Bayesian';
$messages['resourcesSettings'] = 'Recursos';
$messages['searchSettings'] = 'Cerca';
$messages['cleanUpSection'] = 'Esborra';
$messages['cleanUp'] = 'Esborra';
$messages['editResourceAlbum'] = 'Edita àlbum';
$messages['resourceInfo'] = 'Edita recurs';
$messages['editBlog'] = 'Edita bloc';

// new post
$messages['topic'] = 'Missatge';
$messages['topic_help'] = 'Títol del missatge';
$messages['text'] = 'Text';
$messages['text_help'] = 'Text del missatge. Aquesta part apareixerà sempre a la pàgina principal';
$messages['extended_text'] = 'Text ampliat';
$messages['extended_text_help'] = 'Text ampliat del missatge. Aquesta part pot aparèixer opcionalment a la pàgina del missatge o a la principal. Vés a les Prefrències de bloc per a més informació';
$messages['post_slug'] = 'Fitxa';
$messages['post_slug_help'] = "La fitxa serà utilitzada per generar enllaços permanents";
$messages['date'] = 'Data';
$messages['post_date_help'] = 'Data de quan aquest missatge serà publicat';
$messages['status'] = 'Estat';
$messages['post_status_help'] = "Seleciona un d'aquests estats";
$messages['post_status_published'] = 'Publicat';
$messages['post_status_draft'] = 'Esborrany';
$messages['post_status_deleted'] = 'Esborrat';
$messages['categories'] = 'Categories';
$messages['post_categories_help'] = 'Selecciona una o més categories';
$messages['post_comments_enabled_help'] = 'Activa comentaris';
$messages['send_notification_help'] = 'Notificatció de nous comentaris';
$messages['send_trackback_pings_help'] = 'Envia retronellaços';
$messages['send_xmlrpc_pings_help'] = 'Envia pings XMLRPC ';
$messages['save_draft_and_continue'] = 'Arxiva esborranys';
$messages['preview'] = 'Vista prèvia';
$messages['add_post'] = "Publica el missatge!";
$messages['error_saving_draft'] = "Hi ha hagut un error arxivant l'esborrany";
$messages['draft_saved_ok'] = 'Esborrany arxivat satisfactòrimanet';
$messages['error_sending_request'] = 'Hi ha un error enviant la informació requerida';
$messages['error_no_category_selected'] = 'Selecciona almenys una categoria';
$messages['error_missing_post_topic'] = 'Escriu un títol del missatge';
$messages['error_missing_post_text'] = 'Escriu algun text al missatge';
$messages['error_adding_post'] = "Hi ha un error al publicar el missatge";
$messages['post_added_not_published'] = 'Missatge afegit però no publicat';
$messages['post_added_ok'] = 'Missatge afegit satisfactòriament.';
$messages['send_notifications_ok'] = "Se t'enviara una notificació quan hi hagi un nou missatge.";

// send trackbacks
$messages['error_sending_trackbacks'] = 'Hi ha hagut un error enviant aquests retroenllaços';
$messages['send_trackbacks_help'] = "Selecciona la URL a la qual vols enviar el ping de retroenllaç. Assegura't que el lloc web suporta el retroenllaç.";
$messages['send_trackbacks'] = 'Envia retroenllaços';
$messages['ping_selected'] = 'Ping seleccionat';
$messages['trackbacks_sent_ok'] = "El retroenllaç s'ha enviat correctament a la URL seleccionada";

// posts page
$messages['show_by'] = 'Visualitza per';
$messages['category'] = 'Categoria';
$messages['author'] = 'Autor';
$messages['post_status_all'] = 'Tots';
$messages['author_all'] = 'Tots';
$messages['search_terms'] = 'Cerca paraules';
$messages['show'] = 'Visualitza';
$messages['delete'] = 'Esborra';
$messages['actions'] = 'Accions';
$messages['all'] = 'Tots';
$messages['category_all'] = 'Totes';
$messages['error_incorrect_article_id'] = "Identificador incorrecte del missatge";
$messages['error_deleting_article'] = 'Hi ha hagut un error esborrant el missatge "%s"';
$messages['article_deleted_ok'] = 'Missatge "%s" esborrat satisfactòriament';
$messages['articles_deleted_ok'] = '%s missatges esborrats satisfactòriament';
$messages['error_deleting_article2'] = 'Hi ha hagut un error esborrant el missatge amb identificador "%s"';

// edit post page
$messages['update'] = 'Actualitza';
$messages['editPost'] = 'Edita missatge';
$messages["error_fetching_post"] = "Hi ha hagut un error obtenint el missatge.";
$messages['post_updated_ok'] = 'Missatge "%s" ha actualitzat satisfactòriamnent';
$messages['error_updating_post'] = 'Hi ha hagut un error actualitzant el missatge';
$messages['notification_added'] = 'Rebràs notificacions de nous comentaris o retroenllaços';
$messages['notification_removed'] = 'No rebràs notificacions dels nous comentaris o retroenllaços enviats';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = 'Tot';
$messages['comment_status_spam'] = 'Spam';
$messages['comment_status_nonspam'] = 'No Spam';
$messages['error_fetching_comments'] = "Hi ha hagut un error obtenint els comentaris del missatge";
$messages['error_deleting_comments'] = 'Hi ha hagut un error esborrant els comentaris o no hi ha comentaris seleccionats';
$messages['comment_deleted_ok'] = 'Comentari "%s" esborrat satisfactòriament';
$messages['comments_deleted_ok'] = '%s comentaris esborrats satisfactòriament';
$messages['error_deleting_comment'] = 'Hi ha hagut un error esborrant el comentari "%s"';
$messages['error_deleting_comment2'] = 'Hi ha hagut un error esborrant el comentari amb identificador %s';
$messages['editComments'] = 'Comentaris';
$messages['mark_as_spam'] = 'Marca com a spam';
$messages['mark_as_no_spam'] = 'Marca com a no spam';
$messages['error_incorrect_comment_id'] = "L'identificador de comentari no és correcte";
$messages['error_marking_comment_as_spam'] = 'Hi ha hagut un error marcant el comentari com a spam';
$messages['comment_marked_as_spam_ok'] = 'Comentari marcat com a spam satisfactòriament';
$messages['error_marking_comment_as_nonspam'] = 'Hi ha hagut un error marcant el comentari com a no spam';
$messages['comment_marked_as_nonspam_ok'] = 'Comentari marcat com a no spam satisfactòriament';

// post trackbacks
$messages['blog'] = 'Bloc';
$messages['excerpt'] = 'Extracte';
$messages['error_fetching_trackbacks'] = 'Hi ha hagut un error obtenint els retroenllaços';
$messages['error_deleting_trackbacks'] = "Hi ha hagut un error esborrant els retroenllaços o no n'hi ha seleccionats";
$messages['error_deleting_trackback'] = 'Hi ha hagut un error esborrant el "%s"';
$messages['error_deleting_trackback2'] = 'Hi ha hagut un error esborrant el retroenllaç amb identificador "%s"';
$messages['trackback_deleted_ok'] = 'Retroenllaç "%s" esborrat satisfactòriament';
$messages['trackbacks_deleted_ok'] = '%s retroenllaços esborrats satisfactòriament';
$messages['editTrackbacks'] = 'Retroenllaços';

// post statistics
$messages['referrer'] = 'Referències';
$messages['hits'] = 'Cops';
$messages['error_no_items_selected'] = "No s'han seleccionat elements per esborrar";
$messages['error_deleting_referrer'] = 'Hi ha hagut un error esborrant la referència "%s"';
$messages['error_deleting_referrer2'] = 'Hi ha hagut un error esborrant la referència amb identificador "%s"';
$messages['referrer_deleted_ok'] = 'Referància "%s" esborrada satisfactòriament';
$messages['referrers_deleted_ok'] = '%s referències esborrades satisfactòriament';

// categories
$messages['posts'] = 'Missatges';
$messages['show_in_main_page'] = 'Visualitza a la pàgina principal';
$messages['error_incorrect_category_id'] = "L'identificador de categoria no és correcte o no hi ha elements seleccionats";
$messages['error_category_has_articles'] = 'La categoria "%s" ha estat utilitzada en alguns articles. Edita primer els articles i esborra després la categoria';
$messages['category_deleted_ok'] = 'Categoria "%s" esborrada satisfactòriament';
$messages['categories_deleted_ok'] = '%s categories esborrades satisfactòriament';
$messages['error_deleting_category'] = 'Hi ha hagut un error esborrant la categoria "%s"';
$messages['error_deleting_category2'] = 'Hi ha hagut un error esborrant la categoria amb identificador "%s"';
$messages['yes'] = 'Sí';
$messages['no'] = 'No';

// new category
$messages['name'] = 'Nom';
$messages['category_name_help'] = 'Aquest nom serà utilitzat per visualitzar la categoria';
$messages['description'] = 'Descripció';
$messages['category_description_help'] = 'Descripció llarga per a aquesta categoria';
$messages['show_in_main_page_help'] = "Defineix si els missatges sota aquesta categoria s'han de visualitzar a la pàgina principal o només en aquesta categoria en particular";
$messages['error_empty_name'] = "Has d'escriure un nom";
$messages['error_empty_description'] = "Has d'escriure una descripció";
$messages['error_adding_article_category'] = 'Hi ha hagut un error afegint la nova categoria. Comprova les dades i prova-ho de nou';
$messages['category_added_ok'] = 'Categoria "%s" afegida correctament al bloc';
$messages['add'] = 'Afegeix';
$messages['reset'] = 'Esborra';

// update category
$messages['error_updating_article_category'] = "Hi ha hagut un error actualitzant la categoria de l'article";
$messages['error_fetching_category'] = 'Hi ha hagut un error obtenint la categoria';
$messages['article_category_updated_ok'] = 'Categoria "%s" actualitzada satisfactòriament';

// links
$messages['feed'] = 'Alimentador';
$messages['error_no_links_selected'] = "L'identificador de l'enllaç és incorrecte o no hi ha elements per esborrar";
$messages['error_incorrect_link_id'] = "L'identificador de l'enllaç és incorrecte";
$messages['error_removing_link'] = 'Hi ha hagut un error esborrant l\'enllaç "%s"';
$messages['error_removing_link2'] = 'Hi ha hagut un error esborrant l\'enllaç amb identificador "%s"';
$messages['link_deleted_ok'] = 'Enllaç "%s" esborrat satisfactòriament';
$messages['links_deleted_ok'] = '%s enllaços esborrats satisfactòriament';

// new link
$messages['link_name_help'] = 'Nom per aquest enllaç';
$messages['link_url_help'] = 'Addreça on apunta aquest enllaç';
$messages['link_description_help'] = "Breu descripció d'aquest enllaç";
$messages['link_feed_help'] = 'Un enllaç per a qualsevol alimentador RSS o Atom';
$messages['link_category_help'] = "Selecciona una de les categories d'enllaços disponibles";
$messages['error_adding_link'] = "Hi ha hagut un error afegint l'enllaç. Comprova les dades i prova-ho de nou";
$messages['error_invalid_url'] = "L'adreça no és correcta";
$messages['link_added_ok'] = 'Enllaç "%s" afegit satisfactòriament';

// update link
$messages['error_updating_link'] = "Hi ha hagut un error actualitzant l'enllaç. Comprova les dades i prova-ho de nou";
$messages['error_fetching_link'] = "Hi ha hagut un error obtenint l'enllaç";
$messages['link_updated_ok'] = 'Enllaç "%s" actualitzat satisfactòriament';

// link categories
$messages['links'] = 'Enllaços';
$messages['error_invalid_link_category_id'] = "L'identificador de la categoria d'enllaç no és correcte o no hi ha cap categoria seleccionada";
$messages['error_links_in_link_category'] = 'La categoria d\'enllaç "%s" s\'ha utilitzat en més d\'un enllaç. Comprova les dades i prova-ho de nou';
$messages['error_removing_link_category'] = 'Hi ha hagut un error esborrant la categoria d\'enllaç "%s"';
$messages['link_category_deleted_ok'] = 'La categoria d\'enllaç "%s" s\'ha esborrat correctament';
$messages['link_categories_deleted_ok'] = '%s categories d\'enllaç afegides correctament';
$messages['error_removing_link_category2'] = 'Hi ha hagut un error esborrant la categoria d\'enllaç  amb identificador "%s"';

// new link category
$messages['link_category_name_help'] = 'Nom per a aquesta categoria d\'enllaç';
$messages['error_adding_link_category'] = 'Hi ha hagut un error afegint la nova categoria';
$messages['link_category_added_ok'] = 'La categoria d\'enllaç "%s" s\'ha afegit correctament';

// edit link category
$messages['error_updating_link_category'] = 'Hi ha hagut un error actualitzant la categoria d\'enllaç. Comprova les dades i prova-ho de nou';
$messages['link_category_updated_ok'] = 'La categoria d\'enllaç "%s" s\'ha actualitzat correctament';
$messages['error_fetching_link_category'] = 'Hi ha hagut un error obtenint la categoria d\'enllaç';

// custom fields
$messages['type'] = 'tipus';
$messages['hidden'] = 'Ocult';
$messages['fields_deleted_ok'] = '%s camps personalitzats afegits correctament';
$messages['field_deleted_ok'] = 'El camp personalitzat "%s" s\'ha esborrat correctament';
$messages['error_deleting_field'] = 'Hi ha hagut un error esborrant el camp personalitzat "%s"';
$messages['error_deleting_field2'] = 'Hi ha hagut un error esborrant el camp personalitzat  amb identificador "%s"';
$messages['error_incorrect_field_id'] = 'L\'identificador del camp personalitzat no és valid';

// new custom field
$messages['field_name_help'] = 'Identificador que pot ser utilitzat per referir-se al valor d\'aquest camp en els missatges';
$messages['field_description_help'] = 'Breu descripció d\'aquest camp que pot visualitzar-se a l\'afegir o editar missatges';
$messages['field_type_help'] = 'Selecciona un dels tipus de camp disponibles';
$messages['field_hidden_help'] = 'Si el camp està ocult, no es visualitzarà quan afegeixis o editis un missatge. Aquesta característica la utilitzen els complements (plugins) principalment';
$messages['error_adding_custom_field'] = 'Hi ha hagut un error afegint el camp personalitzat. Comprova les dades i prova-ho de nou';
$messages['custom_field_added_ok'] = 'El Camp personalitzat "%s" s\ha afegit correctament';
$messages['text_field'] = 'Camp de text';
$messages['text_area'] = 'Caixa de text';
$messages['checkbox'] = 'Checkbox'; // <-------<-------<------<-------<----- buscar traducció vàlida!
$messages['date_field'] = 'Selector de data';

// edit custom field
$messages['error_fetching_custom_field'] = 'Hi ha hagut un error obtenint el camp personalitzat';
$messages['error_updating_custom_field'] = 'Hi ha hagut un error actualitzant el camp personalitzat. Comprova les dades i prova-ho de nou';
$messages['custom_field_updated_ok'] = 'El Camp personalitzat "%s" s\ha actualitzat correctament';

// resources
$messages['root_album'] = 'Àlbum principal';
$messages['num_resources'] = 'Nombre de recursos';
$messages['total_size'] = 'Tamany total';
$messages['album'] = 'Àlbum';
$messages['error_incorrect_album_id'] = 'L\'identificador de l\'àlbum no és correcte';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'Ha estat impossible crear les carpetes necessàries on s\'ha d\'instal·lar els recursos. Això pot ésser causat per varies raons, tal com que la instal·lació de PHP té el Mode Segur (safe_mode) activat o que l\'usuari usat per PHP no tingui prou permisos. Pots fer l\'operació creant les següents carpetes:: <br/><br/>%s<br/><br/>Si aquestes carpetes ja existeixen asseguris de que poden ser llegides i escrites per l\'usuari del servidor web.';
$messages['items_deleted_ok'] = '%s elements esborrats satisfactòriament';
$messages['error_album_has_children'] = 'L\'àlbum "%s" conté sub-àlbums. Edita primer els sub-àlbums i torna-ho a intentar';
$messages['item_deleted_ok'] = 'Element "%s" esborrat correctament';
$messages['error_deleting_album'] = 'Hi ha hagut un error esborrant l\'àlbum "%s"';
$messages['error_deleting_album2'] = 'Hi ha hagut un erros esborrant l\'àlbum amb identificador "%s"';
$messages['error_deleting_resource'] = 'Hi ha hagut un error esborrant el recurs "%s"';
$messages['error_deleting_resource2'] = 'Hi ha hagut un erros esborrant el recurs amb identificador "%s"';
$messages['error_no_resources_selected'] = 'No hi ha elements seleccionats per esborrar';
$messages['resource_deleted_ok'] = 'El recurs "%s" s\'ha esborrat correctament';
$messages['album_deleted_ok'] = 'L\'àlbum "%s" s\'ha esborrat correctament';

// new album
$messages['album_name_help'] = 'Nom curt pel nou àlbum';
$messages['parent'] = 'Principal';
$messages['no_parent'] = 'No principal';
$messages['parent_album_help'] = 'Utilitza això per tenir àlbums dins d\'altres àlbums i organitzar millor els teus arxius';
$messages['album_description_help'] = 'Descripció llarga dels continguts d\'aquest àlbum';
$messages['error_adding_album'] = 'Hi ha hagut un error afegint el nou àlbum. Comprova les dades i prova-ho de nou';
$messages['album_added_ok'] = 'Àlbum "%s" afegit correctament';

// edit album
$messages['error_incorrect_album_id'] = 'L\'identificador de l\'àlbum no és correcte';
$messages['error_fetching_album'] = 'Hi ha hagut un error obtenint l\'àlbum';
$messages['error_updating_album'] = 'Hi ha hagut un error actualitzant l\'àlbum. Comprova les dades i prova-ho de nou';
$messages['album_updated_ok'] = 'Àlbum "%s" actualitzat correctament';
$messages['show_album_help'] = 'Si està desactivat, l\'àlbim no es visualitzarà a la llista d\'àlbums disponibles en aquest bloc';

// new resource
$messages['file'] = 'Arxiu';
$messages['resource_file_help'] = 'Arxiu que s\'afegirà al bloc actual. Utilitza l\'enllaç "Afegeix camp" per actualitzar més d\'un arxiu al mateix temps';
$messages['add_field'] = 'Afegeix camp';
$messages['resource_description_help'] = 'Descripció llarga pel contingut d\'aquest arxiu';
$messages['resource_album_help'] = 'Selecciona l\'àlbum on s\'afegirà aquest arxiu';
$messages['error_no_resource_uploaded'] = 'No hi ha cap arxiu seleccionat per pujar';
$messages['resource_added_ok'] = 'Recurs "%s" afegit correctament';
$messages['error_resource_forbidden_extension'] = 'Aquest arxiu no es pot afegir perquè té una extensió no permesa';
$messages['error_resource_too_big'] = 'Aquest arxiu no es pot afegir perquè és massa gran';
$messages['error_uploads_disabled'] = 'Aquest arxiu no es pot afegir perquè l\'opció de pujar arxius està desactivada';
$messages['error_quota_exceeded'] = 'Aquest arxiu no es pot afegir perquè has excedit el màxim assignat. Esborra arxius.';
$messages['error_adding_resource'] = 'Hi ha hagut un error afegint el recurs';

// edit resource
$messages['information'] = 'Informació';
$messages['size'] = 'Tamany';
$messages['format'] = 'Format';
$messages['dimensions'] = 'Dimensions';
$messages['bits_per_sample'] = 'Bits per mostra (b.p.s)';
$messages['thumbnail_format'] = 'Format de miniatures';
$messages['regenerate_preview'] = 'Regenera vista prèvia';
$messages['error_fetching_resource'] = 'Hi ha hagut un error obtenint el recurs';
$messages['error_updating_resource'] = 'Hi ha hagut un error actualitzant el recurs';
$messages['resource_updated_ok'] = 'Recurs "%s" actualitzat correctament';

// blog settings
$messages['blog_link'] = 'Enllaç del bloc';
$messages['blog_link_help'] = 'Enllaç permanent a aquest bloc';
$messages['blog_name_help'] = 'Títol per a aquest bloc';
$messages['blog_description_help'] = 'Descripció llarga dels continguts del bloc';
$messages['language'] = 'Idioma';
$messages['blog_language_help'] = 'Idioma per visualitzar els textos en aquest bloc, tant el lector com l\'autor';
$messages['max_main_page_items'] = 'Nombre d\'elements a la pàgina principal';
$messages['max_main_page_items_help'] = 'Nombre de missatges que es poden visualitzar a l\'hora a la pàgina principal del bloc';
$messages['max_recent_items'] = 'Nombre d\'elements recents';
$messages['max_recent_items_help'] = 'Nombre màxim de missatges que es poden visualitzar a l\'hora a la pàgina principal';
$messages['template'] = 'Plantilla';
$messages['choose'] = 'Escull';
$messages['blog_template_help'] = 'Plantilla que s\'utilitzarà amb aquest bloc. La llista inclou plantilles generals i d\'altres específiques per a aquest bloc';
$messages['use_read_more'] = 'Enllaç "Segueix..." als missatges';
$messages['use_read_more_help'] = 'Si està activat, només el text escrit al camp "Text" es veurà a la pàgina principal. Per veure el "Text ampliat" l\'enllaç "Segueix..." s\'afegirà a cada missatge';
$messages['enable_wysiwyg'] = 'Activa l\'editor visual de missatges';
$messages['enable_wysiwyg_help'] = 'Per activar un editor més potent, selecciona Activa l\'editor visual. L\'editor només funciona en Internet Explorer 5.5 o superior o Mozilla 1.3 o superior';
$messages['enable_comments'] = 'Activa comentaris per defecte';
$messages['enable_comments_help'] = 'Activa comentaris per a tots els missatges defecte. Els comentaris poden activar-se/desactivar-se per a certs missatges, creant-ne de nous o editant-los';
$messages['show_future_posts'] = 'Visualitza els missatges futurs al calendari';
$messages['show_future_posts_help'] = 'Els missatges que tinguin una data futura seran visibles pels usuaris';
$messages['comments_order'] = 'Ordre dels comentaris';
$messages['comments_order_help'] = 'Ordre amb que els comentaris seran mostrats a la pàgina principal';
$messages['oldest_first'] = 'Els més antic primer';
$messages['newest_first'] = 'Els més recent primer';
$messages['categories_order'] = 'Ordre de les categories';
$messages['categories_order_help'] = 'Ordre dels comentaris a la pàgina principal';
$messages['most_recent_updated_first'] = 'El més recent primer';
$messages['alphabetical_order'] = 'Ordre alfabètic';
$messages['reverse_alphabetical_order'] = 'Ordre alfacètic invers';
$messages['most_articles_first'] = 'Més articles primer';
$messages['link_categories_order'] = 'Ordena per categories d\'enllaç';
$messages['link_categories_order_help'] = 'Ordena per categories d\'enllaç tal com apareixen a la pàgina principal';
$messages['most_links_first'] = 'Més enllaços primer';
$messages['most_links_last'] = 'Més enllaços al final';
$messages['time_offset'] = 'Diferència de temps';
$messages['time_offset_help'] = 'Diferència de temps en hores que s\'afegeix dinàmicament';
$messages['close'] = 'Tanca';
$messages['select'] = 'Selecciona';
$messages['error_updating_settings'] = 'Hi ha hagut un error esborrant les preferències del bloc. Comprova les dades i prova-ho de nou';
$messages['error_invalid_number'] = 'El número no és correcte';
$messages['error_incorrect_time_offset'] = 'La diferència de temps no és vàlida';
$messages['blog_settings_updated_ok'] = 'Preferències del bloc actualitzades correctament';
$messages['hours'] = 'Hores';

// user settings
$messages['username_help'] = 'Nom d\'usuari públic. No es pot canviar';
$messages['full_name'] = 'Nom complet';
$messages['full_name_help'] = 'Nom extès complet';
$messages['password_help'] = 'Escriu i confirma la nova contrasenya, o deixa l\'espai en blanc per deixar-la igual';
$messages['confirm_password'] = 'Confirma contrasenya';

$messages['email'] = 'Correu';


$messages['email_help'] = 'Adreces de correu electrònic on s\'enviaran les notificacions';
$messages['bio'] = 'La teva biografia';
$messages['bio_help'] = 'Pots introduir una descripció llarga de tu mateix';
$messages['picture'] = 'Imatges';
$messages['user_picture_help'] = 'Selecciona una imatge de les que has pujat i serà la teva imatge personal';
$messages['error_invalid_password'] = 'La contrasenya no és correcta. Assegura\t que no sigui massa curta';
$messages['error_passwords_dont_match'] = 'Perdona, però les contrasenyes no coincideixen';
$messages['error_incorrect_email_address'] = 'L\'adreça de correu electrònic no és correcta';
$messages['error_updating_user_settings'] = 'Hi ha hagut un error actualitzant les teves preferències. Comprova les dades i prova-ho de nou';
$messages['user_settings_updated_ok'] = 'Preferències d\'uisuari actualitzades correctament';

// plugin center
$messages['identifier'] = 'identificador';

// blog users
$messages['revoke_permissions'] = 'Revoca permisos';
$messages['error_no_users_selected'] = 'No hi ha usuaris seleccionats';
$messages['user_removed_from_blog_ok'] = 'L\'usuari "%s" ha estat esborrat del bloc satisfactòriament';
$messages['users_removed_from_blog_ok'] = '%s usuaris han estat esborrats del bloc satisfactòriament';
$messages['error_removing_user_from_blog'] = 'Hi ha hagut un error esborrant l\'usuari "%s" d\'aquest bloc';
$messages['error_removing_user_from_blog2'] = 'Hi ha hagut un error esborrant l\'usuari amb identificador "%s" d\'aquest bloc';

// new blog user
$messages['new_blog_username_help'] = 'Nom de l\'usuari que vols que tingui accés al bloc. Els nous usuaris només tindràn accés a les àrees "Gestiona" i " Centre de Recursos".';
$messages['send_notification'] = 'Envia notificació';
$messages['send_user_notification_help'] = 'Envia un correu electrònic de notificació a l\'usuari';
$messages['notification_text'] = 'text de notificació';
$messages['notification_text_help'] = 'text que s\'inclourà al missatge de notificació';
$messages['error_adding_user'] = 'Hi ha hagut un error donant accés a l\'usuari. Comprova les dades i prova-ho de nou';
$messages['error_empty_text'] = 'Hi has de posar algun text';
$messages['error_adding_user'] = 'Hi ha hagut un error afegint l\'usuari. Comprova les dades i prova-ho de nou';
$messages['error_invalid_user'] = 'L\'usuari "%s" no és vàlid o no existeix';
$messages['user_added_to_blog_ok'] = 'L\'usuari "%s" ha obtingut accés a aquest bloc satisfactòriament';

// blog templates
$messages['error_no_templates_selected'] = 'No hi ha plantilles seleccionades';
$messages['error_template_is_current'] = 'La plantilla "%s" no es pot esborrar perquè és la que està funcionant';
$messages['error_removing_template'] = 'Hi ha hagut un error esborrant la plantilla "%s"';
$messages['template_removed_ok'] = 'Plantilla "%s" esborrada correctament';
$messages['templates_removed_ok'] = '%s plantilles esborrades correctament';

// new blog template
$messages['template_installed_ok'] = 'Plantilla "%s" afegida satisfactòriament';
$messages['error_installing_template'] = 'Hi ha hagut un error instal·lant la plantilla "%s"';
$messages['error_missing_base_files'] = 'Alguns arxius de plantilles no es troben';
$messages['error_add_template_disabled'] = 'No es poden afegir noves plantilles pèrquè aquesta opció no està disponible en aquest lloc';
$messages['error_must_upload_file'] = 'No s\'ha pujat cap paquet de plantilles';
$messages['error_uploads_disabled'] = 'L\'opció de pujar arxius està desactivada en aquest lloc';
$messages['error_no_new_templates_found'] = 'No s\'han trobat noves plantilles';
$messages['error_template_not_inside_folder'] = 'El arxius utilitzats en les plantilles han d\'estar dins d\'una carpeta amb el mateix nom que la plantilla';
$messages['error_missing_base_files'] = 'No es troben alguns dels arxius principals de la plantilla';
$messages['error_unpacking'] = 'Hi ha hagut un error expandint l\'arxiu ';
$messages['error_forbidden_extensions'] = 'La plantilla inclou arxius amb extensions no permeses';
$messages['error_creating_working_folder'] = 'Hi ha hagut un error creant una carpeta temporal per descomprimir els arxius';
$messages['error_checking_template'] = 'Hi ha hagut un error comprovant la plantilla: %s';
$messages['template_package'] = 'Paquet de la plantilla';
$messages['blog_template_package_help']  = 'Utilitza aquest formulari per pujar un nou joc de plantilles, que estarà només disponible pel teu bloc. Si això no és possible, puja el joc de plantilles manualment i col·loca\'l a <b>%s</b>, que és la carpeta del servidor on es guarden les plantilles, i fes clic al botó "<b>Cerca plantilles</b>". pLog buscarà en aquesta carpeta i actualitzarà automàticament les plantilles que trobi.';
$messages['scan_templates'] = 'Cerca plantilles';

// site users
$messages['user_status_active'] = 'Actiu(s)';
$messages['user_status_disabled'] = 'Inactiu(s)';
$messages['user_status_all'] = 'Tots';
$messages['user_status_unconfirmed'] = 'No confirmat';
$messages['error_invalid_user2'] = 'Usuari amb identificador "%s" no existeix';
$messages['error_deleting_user'] = 'Hi ha hagut un error desactivant l\'usuari "%s"';
$messages['user_deleted_ok'] = 'Usuari "%s" desactivat correctament';
$messages['users_deleted_ok'] = '%s usuaris desactivats correctament';

// create user
$messages['user_added_ok'] = 'Usuari "%s" afegit correctament';
$messages['error_incorrect_username'] = 'El nom d\'usuari no és correcte o ja està en ús';
$messages['user_status_help'] = 'Estatus actual per a aquest usuari';
$messages['user_blog_help'] = 'Bloc al que aquest usuari serà assignat inicialment';
$messages['none'] = 'Cap';

// edit user
$messages['error_invalid_user'] = 'L\'identificador d\'usuari no és correcte o l\'usuari no existeix';
$messages['error_updating_user'] = 'Hi ha hagut un error actualitzant les preferències d\'usuari. Comprova les dades i prova-ho de nou';
$messages['blogs'] = 'Blocs';
$messages['user_blogs_help'] = 'Blocs d\'aquest usuari o als quals pot tenir accés';
$messages['site_admin'] = 'Administrador';
$messages['site_admin_help'] = 'Aquest usuari té privilegis d\'administrador i pot anar a la secció "Administració" i realitzar les tasques administratives pertinents';
$messages['user_updated_ok'] = 'Usuari "%s" actualitzat correctament';

// site blogs
$messages['blog_status_all'] = 'Tots';
$messages['blog_status_active'] = 'Actiu(s)';
$messages['blog_status_disabled'] = 'Inactiu(s)';
$messages['blog_status_unconfirmed'] = 'Sense confirmar';
$messages['owner'] = 'Propietari';
$messages['quota'] = 'Tamany';
$messages['bytes'] = 'octets';
$messages['error_no_blogs_selected'] = 'No hi ha blocs seleccionats per desactivar';
$messages['error_blog_is_default_blog'] = 'El bloc "%s" no es pot esborrar perquè és el bloc per defecte';
$messages['blog_deleted_ok'] = 'Bloc "%s" esborrat correctament';
$messages['blogs_deleted_ok'] = '%s blocs esborrats correctament';
$messages['error_deleting_blog'] = 'Hi ha hagut un error desactivant el bloc "%s"';
$messages['error_deleting_blog2'] = 'Hi ha hagut un error desactivant el bloc amb l\'identificador "%s"';

// create blog
$messages['error_adding_blog'] = 'Hi ha hagut un error activant el bloc. Comprova les dades i prova-ho de nou';
$messages['blog_added_ok'] = 'Bloc "%s" afegit correctament';

// edit blog
$messages['blog_status_help'] = 'Estat del bloc';
$messages['blog_owner_help'] = 'L\'usuari tindrà control total sobre les preferències del bloc';
$messages['users'] = 'Usuaris';
$messages['blog_quota_help'] = 'Tamany permés de recursos en octets. Posa-hi 0 per un tamany il·limitat o deixa-ho en blanc per ajustar-ho al tamany permès general';
$messages['blog_users_help'] = 'Usuaris que tenen accés a aquest bloc. Selecciona un usuari de l\'esquerra i mou-lo a llista de la dreta per saber l\'ordre d\'accés dels usuaris d\'aquest bloc';
$messages['edit_blog_settings_updated_ok'] = 'Bloc "%s" actualitzat correctament';
$messages['error_updating_blog_settings'] = 'Hi ha hagut un error actualitzant el bloc "%s"';
$messages['error_incorrect_blog_owner'] = 'L\'usuari seleccionat com a propietari no és correcte';
$messages['error_fetching_blog'] = 'Hi ha hagut un error obtenint el bloc';
$messages['error_updating_blog_settings2'] = 'Hi ha hagut un error actualitzant el bloc. Comprova les dades i prova-ho de nou';
$messages['add_or_remove'] = 'Afegeix o esborra usuaris';

// site locales
$messages['locale'] = 'Localització';
$messages['locale_encoding'] = 'Codificació';
$messages['locale_deleted_ok'] = 'Localització "%s" esborrada correctament';
$messages['error_no_locales_selected'] = 'No hi ha localitzacions seleccionades per esborrar';
$messages['error_deleting_only_locale'] = 'La localització no es pot esborra perquè és l\'única que hi ha al sistema';
$messages['locales_deleted_ok']= '%s localitzacions esborrades correctament';
$messages['error_deleting_locale'] = 'Hi ha hagut un error esborrant la localització "%s"';
$messages['error_locale_is_default'] = 'La localització "%s" no es pot esborrar perquè és la localització per defecte dels nous blocs';

// add locale
$messages['error_invalid_locale_file'] = 'L\'arxiu de localització no és vàlid';
$messages['error_no_new_locales_found'] = 'No s\'han trobat nous arxius de localització';
$messages['locale_added_ok'] = 'Localització "%s" afegida correctament';
$messages['error_saving_locale'] = 'Hi ha hagut un error guardant la nova localització';
$messages['scan_locales'] = 'Cerca localitzacions';
$messages['add_locale_help'] = 'Utilitza aquest formulari per pujar un arxiu de localització. Si no pots pujar l\'arxiu mitjançant el formulari, puja l\'arxiu manualment al directori <b>./locales/</b>, que és la carpeta on es guarden les localitzacions, i fes clic al botó  "<b>Cerca localització</b>". pLog mirarà dins la carpeta i actualitzarà tots els idiomes que hagi trobat.';

// site templates
$messages['error_template_is_default'] = 'La plantilla "%s" no es pot esborrar perquè és la plantilla per defecte dels nous blocs';

// add template
$messages['global_template_package_help'] = 'Utilitza aquest formulari per pujar un nou joc de plantilles, que estarà només disponible pel teu bloc. Si això no és possible, puja el joc de plantilles manualment i col·loca\'l a <b>%s</b>, que és la carpeta del servidor on es guarden les plantilles, i fes clic al botó "<b>Cerca plantilles</b>". pLog buscarà en aquesta carpeta i actualitzarà automàticament les plantilles que trobi.';

// global settings
$messages['site_config_saved_ok'] = 'Preferències arxivades correctament';
$messages['error_saving_site_config'] = 'Hi ha hagut un error arxivant les preferències';
/// general settings
$messages['help_comments_enabled'] = 'Activa o desactiva els comentaris pels nous blocs per defecte';
$messages['help_beautify_comments_text'] = 'Si està activat, els comentaris introduïts pels usuaris seran formatats, afegint-los paràgrafs i auto-omplenant els enllaços';
$messages['help_temp_folder'] = 'Carpeta que fa servir pLog per escriure arxius temporals, etc. Utilitza\'n una altra si vols augmentar la seguretat';
$messages['help_base_url'] = 'URL de base on està instal·lat aquest bloc';
$messages['help_subdomains_enabled'] = 'Activa o desactiva subdominis. Mira\'t la documentació per saber-ne més';
$messages['help_subdomains_base_url'] = 'Si els subdominis estan activats, aquesta URL base es farà servir en comptes de base_url. Utilitza {blogname} per donar nom al bloc i {username} per donar nom a l\'usuari del bloc per tal de generar un enllaç al bloc';
$messages['help_include_blog_id_in_url'] = 'Útil només quan els subdominis estan actius i les URLs normals estan actives, força les URLS generades internament a no tenir el paràmetre "blogID". No ho canviis a no ser que sàpigues el que estàs fent!';
$messages['help_script_name'] = 'Modifica aquest camp si necessites renombrar el "index.php" a algún altre nom.';
$messages['help_show_posts_max'] = 'Màxim nombre de missatges mostrats a la pàgina principal. Útil només per als blocs nous';
$messages['help_recent_posts_max'] = 'Màxim nombre de missatges recents mostrats a la pàgina principal. Útil només per als blocs nous';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Si la propietat de desar esbossos via Javascript i XmlHttpRequest està activada';
$messages['help_locale_folder'] = 'Directori on hi ha desats els arxius dels llenguatges';
$messages['help_default_locale'] = 'Configuració de llenguatge predefinida per als blocs nous';
$messages['help_default_blog_id'] = 'Bloc predefinit que es mostrarà si cap altre s\'ha especificat.';
$messages['help_default_time_offset'] = 'Temps de compensació predefinit per als nous blocs';
$messages['help_html_allowed_tags_in_comments'] = 'Llista de les etiquetes HTML permeses als comentaris separadades per espais.';
$messages['help_referer_tracker_enabled'] = 'Activa o desactiva la possibilitat de desar les referències a la base de dades. Desactivar-ho per més alt rendiment.';
$messages['help_show_more_enabled'] = 'Activa o desactiva la possibilitat de afegir-hi el "Segueix..." als blocs nous';
$messages['help_update_article_reads'] = 'Activa o desactiva l\'actualització del contador de cops que un missatge ha estat llegit. Desactivar-ho per més alt rendiment.';
$messages['help_update_cached_article_reads'] = 'Activa o desactiva l\'actualització del contador de cops que un missatge ha estat llegit, encara que s\'hagi activat l\'opció d\'usar la memoria cau';
$messages['help_xmlrpc_ping_enabled'] = 'Activa o desactiva el poder enviar pings XMLRPC a llocs que ho permetin';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Activa o desactiva per defecte la possibilitat d\'enviar ping al enviar o editar un missatge.';
$messages['help_xmlrpc_ping_hosts'] = 'URLs cap on apunta la interfície de XMLRPC de llocs que suportin pings de XMLRPC. Posa una URL a cada nova línia';
$messages['help_trackback_server_enabled'] = 'Activa o desactiva la possibilitat de rebre retroenllaços';
$messages['help_htmlarea_enabled'] = 'Activa o desactiva l\'editor gràfic (WYSIWYG) de missatges per defecte als nous blocs';
$messages['help_plugin_manager_enabled'] = 'Activa o desactiva els plugins';
$messages['help_minimum_password_length'] = 'Longitud mínima per a les contrasenyes';
$messages['help_xhtml_converter_enabled'] = 'Si està activat, pLog intentarà convertir tot el codi HTML al codi XHTML més semblant';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'Si està activat, pLog intentarà encara més generar codi XHTML a partir del codi HTML, però serà més propens a errors';
$messages['help_session_save_path'] = 'Fes servir aquest paràmetre per canviar la carpeta on pLog desa les dades de sessions, a través de la funció de PHP session_save_path(). Assegura\'t de que el servidor té permisos d\'escriptura a la carpeta. Deixi-ho en blanc per fer servir la configuració de PHP per defecte';
// summary settings
$messages['help_summary_page_show_max'] = 'Número d\'elements que es mostraran a la pàgina de summari. Aquest paràmetre controla totes les llistes del summari (Missatges recents, Blocs més actius, etc)';
$messages['help_summary_blogs_per_page'] = 'Número de blocs per pàgina a la llista de blocs';
$messages['help_forbidden_usernames'] = 'Llista de noms d\'usuaris que no es poden registrar';
$messages['help_force_one_blog_per_email_account'] = 'Restringir a només un bloc per correu electrònic';
$messages['help_summary_show_agreement'] = 'Mostra un text de termes i condicions d\'ús i fes que els usuaris l\'acceptin per poder-se registrar';
$messages['help_need_email_confirm_registration'] = 'Obliga als usuaris a confirmar el seu registre a través d\'un enllaç dins d\'un email enviat a la seva adreça';
$messages['help_summary_disable_registration'] = 'Si els usuaris poden registrar nous blocs en aquest lloc';
// templates
$messages['help_template_folder'] = 'Carpeta on hi ha desades les plantilles';
$messages['help_default_template'] = 'Plantilla per defecte per als nous blocs';
$messages['help_users_can_add_templates'] = 'Permetre als usuaris penjar la seva pròpia plantilla';
$messages['help_template_compile_check'] = 'Si està desactivat, Smarty comprovarà cada cop si la plantilla ha canviat i en el cas afirmatiu, utilitzarà la nova versió. Desactivar-ho per un rendiment més alt';
$messages['help_template_cache_enabled'] = 'Permet desar les plantilles a la memòria cau. Si està activat, la versió de la pàgina de la memòria cau serà utilitzada sempre que sigui possible. No caldrà extreure dades de la base de dades ni recomplilar la plantilla';
$messages['help_template_cache_lifetime'] = 'Vida en segons de la memòria cau. Posar-ho a -1 per forçar que la memòria cau no expiri mai. Si està a 0 la memòria cau estarà desactivada però es recomana desactivar-ho a través de la opció anterior';
$messages['help_template_http_cache_enabled'] = 'Permet el suport per peticions condicionals de HTTP. Si està activat, pLog tindrà en compte la capcelera HTTP de "If-Modified-Since" i enviarà només el contingut si és estrictament necessàri. Activa això per estalviar ample de banda';
// urls
$messages['help_request_format_mode'] = 'Selecciona un dels formats URL disponibles. Si usa URLs pròpies, asseguris de configurar els paràmetres següents';
$messages['plain'] = 'Pla';
$messages['search_engine_friendly'] = 'Amistós als motors de cerca';
$messages['custom_url_format'] = 'URLs pròpies';
$messages['help_permalink_format'] = 'Format per als enllaços permanents si s\'utilitza les URLs pròpies';
$messages['help_category_link_format'] = 'Format per als enllaços a les categories si s\'utilitza les URLs pròpies';
$messages['help_blog_link_format'] = 'Format per als enllaços als blocs si s\'utilitza les URLs pròpies';
$messages['help_archive_link_format'] = 'Format per als enllaços als arxius si s\'utilitza les URLs pròpies';
$messages['help_user_posts_link_format'] = 'Format per als missatges publicats per un usuari concret si s\'utilitza les URLs pròpies';
$messages['help_post_trackbacks_link_format'] = 'Format per als enllaços a la pàgina de retroenllaços si s\'utilitza les URLs pròpies';
$messages['help_template_link_format'] = 'Format per als enllaços a la plantilla estàtica proòpia si s\'utilitza les URLs pròpies';
$messages['help_album_link_format'] = 'Format per als enllaços als àlbums de recursos si s\'utilitza les URLs pròpies';
$messages['help_resource_link_format'] = 'Format per als enllaços a les pàgines de recursos amb arxius si s\'utilitza les URLs pròpies';
$messages['help_resource_preview_link_format'] = 'Format per als enllaços a les vistes prèvies dels recursos si s\'utilitza les URLs pròpies';
$messages['help_resource_medium_size_preview_link_format'] = 'Format per als enllaços a les vistes prèvies de tamany mig dels recursos si s\'utilitza les URLs pròpies';
$messages['help_resource_download_link_format'] = 'Format per als enllaços als arxius si s\'utilitza les URLs pròpies';
// email
$messages['help_check_email_address_validity'] = 'Quan es comprovin adreces de correu electrònic, fer unes comprovacions bàsiques per veure si existeix un MX en el domini especificat i en cas afirmatiu, comprovar si l\'adreça especificada és vàlida';
$messages['help_email_service_enabled'] = 'Activa o desactiva els correus electrònics de sortida';
$messages['help_post_notification_source_address'] = 'L\'adreça de correu electrònic que apareixerà en el camp "De:" quan s\'enviin correus des de pLog';
$messages['help_email_service_type'] = 'Quin sistema utilitzar per enviar correus electrònics';
$messages['help_smtp_host'] = 'Si s\'utilitza el sistema de SMTP, posa-hi el servidor SMTP que es farà servir per enviar els missatges';
$messages['help_smtp_port'] = 'Si el servidor SMTP funciona en un port diferent del 25, posa\'l aquí';
$messages['help_smtp_use_authentication'] = 'Activa això si el servidor SMTP requereix autentificació';
$messages['help_smtp_username'] = 'Si el servidor SMTP requereix autentificació, posa aquí l\'usuari';
$messages['help_smtp_password'] = 'Si el servidor SMTP requereix autentificació, posa aquí la contrasenya per l\'usuari anterior';
// helpers
$messages['help_path_to_tar'] = 'Camí fins a l\'eina "tar", necessària per expandir les plantilles en formats .tar.gz o tar.bz2';
$messages['help_path_to_gzip'] = 'Camí fins a l\'eina "gzip", necessària per expandir les plantilles en format .tar.gz';
$messages['help_path_to_bz2'] = 'Camí fins a l\'eina "bzip2", necessària per expandir les plantilles en format .tar.bz2';
$messages['help_path_to_unzip'] = 'Camí fins a l\'eina "unzip", necessària per expandir les plantilles en format .zip';
$messages['help_unzip_use_native_version'] = 'Utilitza el packet de la versió nativa de PHP per expandir arxius en format .zip';
// uploads
$messages['help_uploads_enabled'] = 'Si els usuaris poden enviar arxius. Això afecta la secció de recursos, a l\'enviament de plantilles personalitzades i instal·lació de nous idiomes';
$messages['help_maximum_file_upload_size'] = 'Tamany màxim per als arxius. Aquest límit mai serà més gran que el pròpi de PHP';
$messages['help_upload_forbidden_files'] = 'Llista de extensions no permeses per enviar, separades per espais. La utilització de \'*\' i \'?\' està permesa';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'Activa o desactiva l\'accés via XMLRPC als blocs';
$messages['help_rdf_enabled'] = 'Activa la sindicació dels continguts via Atom o RSS';
$messages['help_default_rss_profile'] = 'Versió per defecte de RSS o Atom utilitzat per sindicar els continguts a menys que s\'especifiqui';
// security
$messages['security_pipeline_enabled'] = 'Activa o desactiva el conducte de seguretat i tots els filtres relacionats. Això també afecta als plugins que registrin nous filtres';
$messages['help_ip_address_filter_enabled'] = 'Activa o desactiva el filtre per adreça IP. El conducte de seguretat també ha d\'estar activat perquè aquesta característica funcioni';
$messages['help_content_filter_enabled'] = 'Activa o desactiva el filtre basat en expresions regulars. El conducte de seguretat també ha d\'estar activat perquè aquesta característica funcioni';
$messages['help_maximum_comment_size'] = 'Tamany màxim en octets que pot tenir un comentari';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = 'Activa o desactiva el filtre Bayesian per filtratge automatic de spam';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'Llindar màxim abans de que un comentari sigui considerat spam';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'Llindar mínim després del qual un missatge sigui considerat no-spam';
$messages['help_bayesian_filter_min_length_token'] = 'Longitud mínima d\'un senyal per ser considerat significatiu per el filtre Bayesian';
$messages['help_bayesian_filter_max_length_token'] = 'Longitud màxima d\'un senyal per ser considerat significatiu per el filtre Bayesian';
$messages['help_bayesian_filter_number_significant_tokens'] = 'Número de senyals significatius';
$messages['help_bayesian_filter_spam_comments_action'] = 'Què fer amb els commentaris considerats spam. Posa-ho a "Llença\'ls" només quan el teu filtre hagi estat propiament entrenat.';
$messages['keep_spam_comments'] = 'Manten-lo a la teva base de dades marcat com a "Spam"';
$messages['throw_away_spam_comments'] = 'Llença\'ls (no els desis)';
// resources
$messages['help_resources_enabled'] = 'Activa o desactiva els recursos';
$messages['help_resources_folder'] = 'Carpeta on es desaran els recursos. Configura-ho fora de l\'arbre del servidor web per més seguretat';
$messages['help_thumbnail_method'] = 'Metode utilitzat per generar vistes prèvies. Si utilitza PHP, necessita suport GD';
$messages['help_path_to_convert'] = 'Camí fins a l\'eina de convertir del paquet "ImageMagick". Necessari si el mètode de vista prèvia és "ImageMagick"';
$messages['help_thumbnail_format'] = 'Format amb el qual les vistes prèvies seràn desades';
$messages['help_thumbnail_height'] = 'Alçada per defecte de les vistes prèvies petites';
$messages['help_thumbnail_width'] = 'Amplada per defecte de les vistes prèvies petites';
$messages['help_medium_size_thumbnail_height'] = 'Alçada per defecte de les vistes prèvies mitjanes';
$messages['help_medium_size_thumbnail_width'] = 'Amplada per defecte de les vistes prèvies mitjanes';
$messages['help_thumbnails_keep_aspect_ratio'] = 'Manté l\'aspecte de ratio al generar les vistes prèvies. Generarà vistes prèvies més grans de les mides especificades però seràn de més bona qualitat';
$messages['help_thumbnail_generator_force_use_gd1'] = 'Força a pLog a utilitzar només funcions de GD1';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'Algoritme utilitzat per a suavitzar les vistes prèvies. Només emprat quan el métode triat és GD';
$messages['help_resources_quota'] = 'Quota global per als recursos dels blocs';
$messages['help_resource_server_http_cache_enabled'] = 'Permet el suport per a capceleres "If-Modified-Since" i crides de condicional HTTP. Activar-ho per estalviar més ample de banda';
$messages['help_resource_server_http_cache_lifetime'] = 'Temps en microsegons que els clients han d\'utilitzar la versió de la memòria cau dels recursos';
$messages['same_as_image'] = 'El mateix que la imatge original';
// search
$messages['help_search_engine_enabled'] = 'Activa o desactiva el motor de cerca';
$messages['help_search_in_custom_fields'] = 'Cerca també en els camps personalitzats';
$messages['help_search_in_comments'] = 'Cerca també en els comentaris';

// cleanup
$messages['purge'] = 'Purga';
$messages['cleanup_spam'] = 'Purga spam';
$messages['cleanup_spam_help'] = 'Això esborrarà tots els comentaris marcats per els usuaris com a spams. No serà possible recuperar-los un cop esborrats';
$messages['spam_comments_purged_ok'] = 'Comentaris amb spam purgats correctament';
$messages['cleanup_posts'] = 'Purga missatges';
$messages['cleanup_posts_help'] = 'Això esborrarà tots els missatges marcats com a esborrats per els usuaris. No serà possible recuperar-los un cop esborrats';
$messages['posts_purged_ok'] = 'Missatges esborrats correctament';

/// summary ///
// front page
$messages['summary'] = 'Sumari';
$messages['register'] = 'registre';
$messages['summary_welcome'] = 'Déu vos guard!';
$messages['summary_most_active_blogs'] = 'Blocs més actius';
$messages['summary_most_commented_articles'] = 'Articles més comentats';
$messages['summary_most_read_articles'] = 'Articles més llegits';
$messages['password_forgotten'] = 'Has perdut la contrasenya?';
$messages['summary_newest_blogs'] = 'Blocs nous';
$messages['summary_latest_posts'] = 'darrers missatges';
$messages['summary_search_blogs'] = 'Cerca als blocs';

// blog list
$messages['updated'] = 'Actualitzat';
$messages['total_reads'] = 'tota';

// blog profile
$messages['blog'] = 'Bloc';

$messages['latest_posts'] = 'Darrers missatges';

// registration
$messages['register_step0_title'] = 'Acceptació de termes i condicions d\'ús';
$messages['decline'] = 'Rebutja';
$messages['accept'] = 'Accepto';
$messages['read_service_agreement'] = 'Siusplau llegeixi els termes i condicions d\'ús d\'aquest servei i prem el botó "Accepto" si hi està d\'acord';
$messages['register_step1_title'] = 'Crear un usuari [1/4]';
$messages['register_step1_help'] = 'Primerament necessites crear un usuari nou per generar un bloc. Aquest usuari serà el propietari del bloc i tindrà accés a totes les seves funcionalitats';
$messages['register_next'] = 'Següent';
$messages['register_back'] = 'Anterior';
$messages['register_step2_title'] = 'Crear un bloc [2/4]';
$messages['register_blog_name_help'] = 'Nom per al teu bloc nou';
$messages['register_step3_title'] = 'Tria una plantilla [3/4]';
$messages['step1'] = 'Pas 1';
$messages['step2'] = 'Pas 2';
$messages['step3'] = 'Pas 3';
$messages['register_step3_help'] = 'Siusplau, seleccioni una de les plantilles disponibles com a plantilla per defecte del seu nou bloc. Si més endavant no li agrada, podrà canviar-la en qualsevol moment';
$messages['error_must_choose_template'] = 'Siusplau seleccioni una plantilla';
$messages['select_template'] = 'Seleccioni una plantilla';
$messages['register_step5_title'] = 'Felicitats! [4/4]';
$messages['finish'] = 'Finalitzar';
$messages['register_need_confirmation'] = 'Un correu electrònic que inclou la confirmació ha estat enviat a la seva adreça, siusplau faci clic a l\'enllaç tant aviat com rebi el missatge per formar part de la catosfera';
$messages['register_step5_help'] = 'Felicitats, el seu nou usuari i bloc s\'ha creat correctament. Benvingut a la Catosfera!';
$messages['register_blog_link'] = 'Si vol fer una ullada al seu nou bloc, pot anar-hi ara: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'Si prefereix començar a escriure missatges, faci clic per anar a la <a href="admin.php">interfície d\'administració</a>';
$messages['register_error'] = 'Hi ha hagut un error durant el procés';
$messages['error_registration_disabled'] = 'Disculpi, el registre de nous blocs en aquest lloc ha estat desactivat';
// registration article topic and text
$messages['register_default_article_topic'] = 'Enhorabona!';
$messages['register_default_article_text'] = 'Si pot llegir aquest missatge és perquè el procés de registre s\'ha realitzat correctament. Benvingut a la Catosfera. Esperem que sigui productiu';
$messages['register_default_category'] = 'General';
// confirmation email
$messages['register_confirmation_email_text'] = 'Siusplau, faci clic a l\'enllaç següent per activar el seu bloc:

%s

Que tingui un bon dia,
Catapings.com li dona la benvinguda a la comunitat de webloguers catalans';
$messages['error_invalid_activation_code'] = 'Disculpi, el codi de confirmació no és vàlid';
$messages['blog_activated_ok'] = 'Felicitats, el teu nou usuari i bloc s\'han validat correctament!';
// forgot your password?
$messages['reset_password'] = 'Canviar contrasenya';
$messages['reset_password_username_help'] = 'Nom de l\'usuari la contrasenya del qual vols canviar';
$messages['reset_password_email_help'] = 'Adreça de correu electrònic amb la que va registrar-se aquest usuari';
$messages['reset_password_help'] = 'Utilitzi aquest formulari per a establir una nova contrasenya per al seu usuari. Siusplau, introdueixi el nom de l\'usuari la contrasenya del qual li agradaria canviar, així com l\'adreça electrònica amb que va ser registrat l\'usuari';
$messages['error_resetting_password'] = 'Hi ha hagut un error al canviar la contrasenya. Siusplau, comprovi les dades i torni-ho a provar';
$messages['reset_password_error_incorrect_email_address'] = 'L\'adreça electrònica no és correcte o no és la que es va introduir al registrar l\'usuari';
$messages['password_reset_message_sent_ok'] = 'Un correu electrònic amb un enllaç ha estat enviat a la seva adreça. Siusplau, faci clic a l\'enllaç per tal de canviar la contrasenya';
$messages['error_incorrect_request'] = 'Els paràmetres a la URL no són correctes';
$messages['change_password'] = 'Establir nova contrasenya';
$messages['change_password_help'] = 'Siusplau, escrigui i verifiqui la nova contrasenya';
$messages['new_password'] = 'Nova contrasenya';
$messages['new_password_help'] = 'Escrigui aquí la seva nova contrasenya';
$messages['password_updated_ok'] = 'La seva contrasenya ha estat actualitzada correctament';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'Aquesta pàgina sembla plana i sense estil perquè està fent servir un navegador que no compila de manera estandard. <a href="http://www.catapings.com" title="Catapings.com">Catapings</a> li recomana que actualitzi a <a href="http://www.getfirefox.com" title="Mozilla Firefox">Mozilla Firefox</a>.  És gratuït i permet els formats estandard de web';
$messages['jump_to_navigation'] = 'Saltar a la navegació.';
$messages['comment_email_never_display'] = 'Línia i paràgraf separa automaticament, l\'adreça de correu electrònic no es mostra mai.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> permès: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Cita">cita</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Subratllat">ins</acronym>&gt; &lt;<acronym title="Negreta">strong</acronym>&gt;';
$messages['trackback_uri'] = '<acronym title="Uniform Resource Identifier">URI</acronym> per retroenllaçar aquesta entrada és: ';
$messages['previous_post'] = 'Anterior';
$messages['next_post'] = 'Següent';
$messages['comment_default_title'] = '(Sense Titol)';
$messages['guestbook'] = 'Llibre de visites';
$messages['trackbacks'] = 'Retroenllaços';
$messages['menu'] = 'Menú';
$messages['albums'] = 'Àlbums';
$messages['xmlrpc_ping_ok'] = 'Ping XMLRPC enviat correctament: ';
$messages['error_sending_xmlrpc_ping'] = 'Hi ha hagut un error enviant el ping XMLRPC a: ';
$messages['error_sending_xmlrpc_ping_message'] = 'Hi ha hagut un error enviant el ping XMLRPC: ';
?>