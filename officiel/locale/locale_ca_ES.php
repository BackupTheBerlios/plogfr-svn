<?php

// Traducci� realitzada per Ramon Forns (www.sopadelletres.com)
// This translation was made by Ramon Forns (www.sopadelletres.com)
// Ets lliure d'usar-la i modificar-la! Feel free to use it and modify at your own.


// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'iso-8859-1';
$messages['locale_description'] = "Traducci� de pLog al catal�.";
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
$messages["months"] = Array( "Gener", "Febrer", "Mar�", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre" );
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
$messages["my_links"] = "els meus enlla�os";
$messages["archives"] = "arxius";
$messages["search"] = "cerca";
$messages["calendar"] = "Calendari";
$messages["editLinkCategories"] = "Categories";
$messages["search_s"] = "Cercar";
$messages["link_tracker"] = "Link Tracker";
$messages["search_this_blog"] = "Cerca en aquest bloc:";
$messages["about_myself"] = "Sobre mi...";
$messages["permalink_title"] = "Enlla� permanent l'arxiu";
$messages["permalink"] = "Enlla� permanent";
$messages["posted_by"] = "Enviat per ";
$messages["on_the"] = "el ";
$messages["page"] = "p�gina";
$messages["posted"] = "enviat";

$messages["reply"] = "Respondre";


// add comment form
$messages["add_comment"] = "Afegeix comentari";
$messages["comment_topic"] = "T�tol";
$messages["comment_text"] = "Text";
$messages["comment_username"] = "El teu nom";
$messages["comment_email"] = "La teva adre�a de correu (si en tens)";
$messages["comment_url"] = "La teva p�gina personal (si en tens)";
$messages["comment_send"] = "Envia";
$messages["comment_added"] = "Comentari enviat!";
$messages["comment_add_error"] = "Error enviant el comentari.";

$messages["article_does_not_exist"] = "L'article sol�licitat no existeix.";
$messages["no_posts_found"] = "No s'ha trobat cap article.";
$messages["user_has_no_posts_yet"] = "Aquest usuari no t� cap article encara.";

$messages["info_about_myself"] = "Informaci� sobre mi...";
$messages["back"] = "Tornar";

$messages['post'] = 'missatge';

$messages["trackbacks_for_article"] = "Retronella�os per l'article";
$messages["trackback_excerpt"] = "Fragment";
$messages["trackback_weblog"] = "Bloc";

$messages['search'] = 'Cerca';
$messages["search_results"] = "Resultats de la cerca";
$messages["search_matching_results"] = "Els seg�ents articles concorden amb els termes de la cerca";
$messages["search_no_matching_posts"] = "No s'ha trobat cap article que concordi amb els termes de la cerca";

$messages["see_all_link"] = "(Fes clic aqu� per a veure tots els seus articles, desde el principi dels temps)";

$messages["read_more"] = "(Segueix)";

$messages['syndicate'] = 'ALTRES';

$messages['main'] = 'Inici';

$messages['about'] = 'Envers';



////// error messages /////
$messages["error_fetching_article"] = "L'article especificat no s'ha pogut trobar.";
$messages["error_fetching_articles"] = "Els articles no s'han pogut carregar.";
$messages["error_trackback_no_trackback"] = "No s'han trobat retroenlla�os per a l'article especificat.";
$messages["error_incorrect_article_id"] = "L'identificador de l'article �s incorrecte.";
$messages["error_incorrect_blog_id"] = "L'identificador del bloc no �s correcte.";
$messages["error_comment_without_text"] = "Hauries d'escriure alguna cosa com a contingut del comentari.";
$messages["error_comment_without_name"] = "Hauries de donar com a m�nim el teu nom.";
$messages["error_adding_comment"] = "Hi ha hagut un error afegint el comentari a la base de dades.";
$messages["error_incorrect_parameter"] = "Par�metre incorrecte.";
$messages["error_parameter_missing"] = "Falta un par�metre a la petici�.";
$messages["error_blog_has_no_links"] = "Aquest bloc encara no t� enlla�os.";
$messages["error_comments_not_enabled"] = "La funci� de comentar articles has estat desactivada en aquest lloc.";
$messages['error_incorrect_search_terms'] = 'Els termes de la recerca no s�n v�lids';
$messages['error_no_search_results'] = 'No hi ha coincid�ncies amb el text recercat';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Connecta';
$messages['welcome_message'] = 'Benvingut a pLog';
$messages["error_incorrect_username_or_password"] = "El nom d'usuari o la paraula clau s�n incorrectes.";
$messages["error_dont_belong_to_any_blog"] = "L'usuari �s v�lid per� no pertany a cap bloc.";
$messages["logout_message"] = "El proc�s de sortida ha acabat correctament.";
$messages['logout_message_2'] = 'Fes clic <a href="%1$s">aqu�</a> per anar a %2$s</a>.';
$messages["username"] = "Nom d'usuari";
$messages['password'] = 'Contrasenya';

// dashboard
$messages['dashboard'] = 'Tauler de control';
$messages['recent_articles'] = 'Articles recents';
$messages['recent_comments'] = '�ltims comentaris';
$messages['recent_trackbacks'] = '�ltims retroenlla�os';
$messages['blog_statistics'] = 'Estad�stiques';
$messages['total_posts'] = 'Total d\'articles';
$messages['total_comments'] = 'Total de comentaris';
$messages['total_trackbacks'] = 'Total de retroenlla�os';
$messages['total_viewed'] = 'Total d\'articles llegits';
$messages['in'] = 'a';

// menu options
$messages['newPost'] = 'Nou missatge';
$messages['Manage'] = 'Gestiona';
$messages['managePosts'] = 'Gestiona missatges';
$messages['editPosts'] = 'Missatges';
$messages['editArticleCategories'] = 'Categories';
$messages['newArticleCategory'] = 'Nova categoria';
$messages['manageLinks'] = 'Gestiona enlla�os';
$messages['editLinks'] = 'Enlla�os';
$messages['newLink'] = 'Nou enlla�';
$messages['editLink'] = 'Edita enlla�';
$messages['editLinkCategories'] = "Categories d'enlla�";
$messages['newLinkCategory'] = "Nova categoria d'enlla�";
$messages['editLinkCategory'] = "Edita categoria d'enlla�";
$messages['manageCustomFields'] = 'Gestiona camps personalitzats';
$messages['blogCustomFields'] = 'Camps personalitzats';
$messages['newCustomField'] = 'Nou camp personalitzat';
$messages['resourceCenter'] = 'Fitxers';
$messages['resources'] = 'Recursos';
$messages['newResourceAlbum'] = 'Nou �lbum';
$messages['newResource'] = 'Nou recurs';
$messages['controlCenter'] = 'Arranjaments';
$messages['manageSettings'] = 'Prefer�ncies';
$messages['blogSettings'] = 'Prefer�ncies de bloc';
$messages['userSettings'] = "Prefer�ncies d'usuari";
$messages['pluginCenter'] = 'Centre de complements';
$messages['Stats'] = 'Estad�stiques';
$messages['manageBlogUsers'] = 'Gestiona usuaris dels blocs';
$messages['newBlogUser'] = 'Nou usuari de bloc';
$messages['showBlogUsers'] = 'Usuaris de bloc';
$messages['manageBlogTemplates'] = 'Gestiona plantilles de bloc';
$messages['newBlogTemplate'] = 'Nova plantilla de bloc';
$messages['blogTemplates'] = 'Plantilles de bloc';
$messages['adminSettings'] = 'Administraci�';
$messages['Users'] = 'Usuaris';
$messages['createUser'] = 'Crea usuari';
$messages['editSiteUsers'] = 'Usuaris del lloc web';
$messages['Blogs'] = 'Gestiona blocs';
$messages['createBlog'] = 'Crea bloc';
$messages['editSiteBlogs'] = 'Blocs';
$messages['Locales'] = 'Gestiona localitzacions';
$messages['newLocale'] = 'Nova Localitzaci�';
$messages['siteLocales'] = 'Ubicaci� de la localitzaci�';
$messages['Templates'] = 'Gestiona plantilles';
$messages['newTemplate'] = 'Nova plantilla';
$messages['siteTemplates'] = 'Ubicacci� de les plantilles';
$messages['GlobalSettings'] = 'Prefer�ncies generals';
$messages['editSiteSettings'] = 'General';
$messages['summarySettings'] = 'Sumari';
$messages['templateSettings'] = 'Plantilles';
$messages['urlSettings'] = 'URLs';
$messages['emailSettings'] = 'correu-e';
$messages['uploadSettings'] = 'Arxius pujats';
$messages['helpersSettings'] = 'Aplicacions externes';
$messages['interfacesSettings'] = 'Interf�cies';
$messages['securitySettings'] = 'Seguretat';
$messages['bayesianSettings'] = 'Filtre Bayesian';
$messages['resourcesSettings'] = 'Recursos';
$messages['searchSettings'] = 'Cerca';
$messages['cleanUpSection'] = 'Esborra';
$messages['cleanUp'] = 'Esborra';
$messages['editResourceAlbum'] = 'Edita �lbum';
$messages['resourceInfo'] = 'Edita recurs';
$messages['editBlog'] = 'Edita bloc';

// new post
$messages['topic'] = 'Missatge';
$messages['topic_help'] = 'T�tol del missatge';
$messages['text'] = 'Text';
$messages['text_help'] = 'Text del missatge. Aquesta part apareixer� sempre a la p�gina principal';
$messages['extended_text'] = 'Text ampliat';
$messages['extended_text_help'] = 'Text ampliat del missatge. Aquesta part pot apar�ixer opcionalment a la p�gina del missatge o a la principal. V�s a les Prefr�ncies de bloc per a m�s informaci�';
$messages['post_slug'] = 'Fitxa';
$messages['post_slug_help'] = "La fitxa ser� utilitzada per generar enlla�os permanents";
$messages['date'] = 'Data';
$messages['post_date_help'] = 'Data de quan aquest missatge ser� publicat';
$messages['status'] = 'Estat';
$messages['post_status_help'] = "Seleciona un d'aquests estats";
$messages['post_status_published'] = 'Publicat';
$messages['post_status_draft'] = 'Esborrany';
$messages['post_status_deleted'] = 'Esborrat';
$messages['categories'] = 'Categories';
$messages['post_categories_help'] = 'Selecciona una o m�s categories';
$messages['post_comments_enabled_help'] = 'Activa comentaris';
$messages['send_notification_help'] = 'Notificatci� de nous comentaris';
$messages['send_trackback_pings_help'] = 'Envia retronella�os';
$messages['send_xmlrpc_pings_help'] = 'Envia pings XMLRPC ';
$messages['save_draft_and_continue'] = 'Arxiva esborranys';
$messages['preview'] = 'Vista pr�via';
$messages['add_post'] = "Publica el missatge!";
$messages['error_saving_draft'] = "Hi ha hagut un error arxivant l'esborrany";
$messages['draft_saved_ok'] = 'Esborrany arxivat satisfact�rimanet';
$messages['error_sending_request'] = 'Hi ha un error enviant la informaci� requerida';
$messages['error_no_category_selected'] = 'Selecciona almenys una categoria';
$messages['error_missing_post_topic'] = 'Escriu un t�tol del missatge';
$messages['error_missing_post_text'] = 'Escriu algun text al missatge';
$messages['error_adding_post'] = "Hi ha un error al publicar el missatge";
$messages['post_added_not_published'] = 'Missatge afegit per� no publicat';
$messages['post_added_ok'] = 'Missatge afegit satisfact�riament.';
$messages['send_notifications_ok'] = "Se t'enviara una notificaci� quan hi hagi un nou missatge.";

// send trackbacks
$messages['error_sending_trackbacks'] = 'Hi ha hagut un error enviant aquests retroenlla�os';
$messages['send_trackbacks_help'] = "Selecciona la URL a la qual vols enviar el ping de retroenlla�. Assegura't que el lloc web suporta el retroenlla�.";
$messages['send_trackbacks'] = 'Envia retroenlla�os';
$messages['ping_selected'] = 'Ping seleccionat';
$messages['trackbacks_sent_ok'] = "El retroenlla� s'ha enviat correctament a la URL seleccionada";

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
$messages['article_deleted_ok'] = 'Missatge "%s" esborrat satisfact�riament';
$messages['articles_deleted_ok'] = '%s missatges esborrats satisfact�riament';
$messages['error_deleting_article2'] = 'Hi ha hagut un error esborrant el missatge amb identificador "%s"';

// edit post page
$messages['update'] = 'Actualitza';
$messages['editPost'] = 'Edita missatge';
$messages["error_fetching_post"] = "Hi ha hagut un error obtenint el missatge.";
$messages['post_updated_ok'] = 'Missatge "%s" ha actualitzat satisfact�riamnent';
$messages['error_updating_post'] = 'Hi ha hagut un error actualitzant el missatge';
$messages['notification_added'] = 'Rebr�s notificacions de nous comentaris o retroenlla�os';
$messages['notification_removed'] = 'No rebr�s notificacions dels nous comentaris o retroenlla�os enviats';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = 'Tot';
$messages['comment_status_spam'] = 'Spam';
$messages['comment_status_nonspam'] = 'No Spam';
$messages['error_fetching_comments'] = "Hi ha hagut un error obtenint els comentaris del missatge";
$messages['error_deleting_comments'] = 'Hi ha hagut un error esborrant els comentaris o no hi ha comentaris seleccionats';
$messages['comment_deleted_ok'] = 'Comentari "%s" esborrat satisfact�riament';
$messages['comments_deleted_ok'] = '%s comentaris esborrats satisfact�riament';
$messages['error_deleting_comment'] = 'Hi ha hagut un error esborrant el comentari "%s"';
$messages['error_deleting_comment2'] = 'Hi ha hagut un error esborrant el comentari amb identificador %s';
$messages['editComments'] = 'Comentaris';
$messages['mark_as_spam'] = 'Marca com a spam';
$messages['mark_as_no_spam'] = 'Marca com a no spam';
$messages['error_incorrect_comment_id'] = "L'identificador de comentari no �s correcte";
$messages['error_marking_comment_as_spam'] = 'Hi ha hagut un error marcant el comentari com a spam';
$messages['comment_marked_as_spam_ok'] = 'Comentari marcat com a spam satisfact�riament';
$messages['error_marking_comment_as_nonspam'] = 'Hi ha hagut un error marcant el comentari com a no spam';
$messages['comment_marked_as_nonspam_ok'] = 'Comentari marcat com a no spam satisfact�riament';

// post trackbacks
$messages['blog'] = 'Bloc';
$messages['excerpt'] = 'Extracte';
$messages['error_fetching_trackbacks'] = 'Hi ha hagut un error obtenint els retroenlla�os';
$messages['error_deleting_trackbacks'] = "Hi ha hagut un error esborrant els retroenlla�os o no n'hi ha seleccionats";
$messages['error_deleting_trackback'] = 'Hi ha hagut un error esborrant el "%s"';
$messages['error_deleting_trackback2'] = 'Hi ha hagut un error esborrant el retroenlla� amb identificador "%s"';
$messages['trackback_deleted_ok'] = 'Retroenlla� "%s" esborrat satisfact�riament';
$messages['trackbacks_deleted_ok'] = '%s retroenlla�os esborrats satisfact�riament';
$messages['editTrackbacks'] = 'Retroenlla�os';

// post statistics
$messages['referrer'] = 'Refer�ncies';
$messages['hits'] = 'Cops';
$messages['error_no_items_selected'] = "No s'han seleccionat elements per esborrar";
$messages['error_deleting_referrer'] = 'Hi ha hagut un error esborrant la refer�ncia "%s"';
$messages['error_deleting_referrer2'] = 'Hi ha hagut un error esborrant la refer�ncia amb identificador "%s"';
$messages['referrer_deleted_ok'] = 'Refer�ncia "%s" esborrada satisfact�riament';
$messages['referrers_deleted_ok'] = '%s refer�ncies esborrades satisfact�riament';

// categories
$messages['posts'] = 'Missatges';
$messages['show_in_main_page'] = 'Visualitza a la p�gina principal';
$messages['error_incorrect_category_id'] = "L'identificador de categoria no �s correcte o no hi ha elements seleccionats";
$messages['error_category_has_articles'] = 'La categoria "%s" ha estat utilitzada en alguns articles. Edita primer els articles i esborra despr�s la categoria';
$messages['category_deleted_ok'] = 'Categoria "%s" esborrada satisfact�riament';
$messages['categories_deleted_ok'] = '%s categories esborrades satisfact�riament';
$messages['error_deleting_category'] = 'Hi ha hagut un error esborrant la categoria "%s"';
$messages['error_deleting_category2'] = 'Hi ha hagut un error esborrant la categoria amb identificador "%s"';
$messages['yes'] = 'S�';
$messages['no'] = 'No';

// new category
$messages['name'] = 'Nom';
$messages['category_name_help'] = 'Aquest nom ser� utilitzat per visualitzar la categoria';
$messages['description'] = 'Descripci�';
$messages['category_description_help'] = 'Descripci� llarga per a aquesta categoria';
$messages['show_in_main_page_help'] = "Defineix si els missatges sota aquesta categoria s'han de visualitzar a la p�gina principal o nom�s en aquesta categoria en particular";
$messages['error_empty_name'] = "Has d'escriure un nom";
$messages['error_empty_description'] = "Has d'escriure una descripci�";
$messages['error_adding_article_category'] = 'Hi ha hagut un error afegint la nova categoria. Comprova les dades i prova-ho de nou';
$messages['category_added_ok'] = 'Categoria "%s" afegida correctament al bloc';
$messages['add'] = 'Afegeix';
$messages['reset'] = 'Esborra';

// update category
$messages['error_updating_article_category'] = "Hi ha hagut un error actualitzant la categoria de l'article";
$messages['error_fetching_category'] = 'Hi ha hagut un error obtenint la categoria';
$messages['article_category_updated_ok'] = 'Categoria "%s" actualitzada satisfact�riament';

// links
$messages['feed'] = 'Alimentador';
$messages['error_no_links_selected'] = "L'identificador de l'enlla� �s incorrecte o no hi ha elements per esborrar";
$messages['error_incorrect_link_id'] = "L'identificador de l'enlla� �s incorrecte";
$messages['error_removing_link'] = 'Hi ha hagut un error esborrant l\'enlla� "%s"';
$messages['error_removing_link2'] = 'Hi ha hagut un error esborrant l\'enlla� amb identificador "%s"';
$messages['link_deleted_ok'] = 'Enlla� "%s" esborrat satisfact�riament';
$messages['links_deleted_ok'] = '%s enlla�os esborrats satisfact�riament';

// new link
$messages['link_name_help'] = 'Nom per aquest enlla�';
$messages['link_url_help'] = 'Addre�a on apunta aquest enlla�';
$messages['link_description_help'] = "Breu descripci� d'aquest enlla�";
$messages['link_feed_help'] = 'Un enlla� per a qualsevol alimentador RSS o Atom';
$messages['link_category_help'] = "Selecciona una de les categories d'enlla�os disponibles";
$messages['error_adding_link'] = "Hi ha hagut un error afegint l'enlla�. Comprova les dades i prova-ho de nou";
$messages['error_invalid_url'] = "L'adre�a no �s correcta";
$messages['link_added_ok'] = 'Enlla� "%s" afegit satisfact�riament';

// update link
$messages['error_updating_link'] = "Hi ha hagut un error actualitzant l'enlla�. Comprova les dades i prova-ho de nou";
$messages['error_fetching_link'] = "Hi ha hagut un error obtenint l'enlla�";
$messages['link_updated_ok'] = 'Enlla� "%s" actualitzat satisfact�riament';

// link categories
$messages['links'] = 'Enlla�os';
$messages['error_invalid_link_category_id'] = "L'identificador de la categoria d'enlla� no �s correcte o no hi ha cap categoria seleccionada";
$messages['error_links_in_link_category'] = 'La categoria d\'enlla� "%s" s\'ha utilitzat en m�s d\'un enlla�. Comprova les dades i prova-ho de nou';
$messages['error_removing_link_category'] = 'Hi ha hagut un error esborrant la categoria d\'enlla� "%s"';
$messages['link_category_deleted_ok'] = 'La categoria d\'enlla� "%s" s\'ha esborrat correctament';
$messages['link_categories_deleted_ok'] = '%s categories d\'enlla� afegides correctament';
$messages['error_removing_link_category2'] = 'Hi ha hagut un error esborrant la categoria d\'enlla�  amb identificador "%s"';

// new link category
$messages['link_category_name_help'] = 'Nom per a aquesta categoria d\'enlla�';
$messages['error_adding_link_category'] = 'Hi ha hagut un error afegint la nova categoria';
$messages['link_category_added_ok'] = 'La categoria d\'enlla� "%s" s\'ha afegit correctament';

// edit link category
$messages['error_updating_link_category'] = 'Hi ha hagut un error actualitzant la categoria d\'enlla�. Comprova les dades i prova-ho de nou';
$messages['link_category_updated_ok'] = 'La categoria d\'enlla� "%s" s\'ha actualitzat correctament';
$messages['error_fetching_link_category'] = 'Hi ha hagut un error obtenint la categoria d\'enlla�';

// custom fields
$messages['type'] = 'tipus';
$messages['hidden'] = 'Ocult';
$messages['fields_deleted_ok'] = '%s camps personalitzats afegits correctament';
$messages['field_deleted_ok'] = 'El camp personalitzat "%s" s\'ha esborrat correctament';
$messages['error_deleting_field'] = 'Hi ha hagut un error esborrant el camp personalitzat "%s"';
$messages['error_deleting_field2'] = 'Hi ha hagut un error esborrant el camp personalitzat  amb identificador "%s"';
$messages['error_incorrect_field_id'] = 'L\'identificador del camp personalitzat no �s valid';

// new custom field
$messages['field_name_help'] = 'Identificador que pot ser utilitzat per referir-se al valor d\'aquest camp en els missatges';
$messages['field_description_help'] = 'Breu descripci� d\'aquest camp que pot visualitzar-se a l\'afegir o editar missatges';
$messages['field_type_help'] = 'Selecciona un dels tipus de camp disponibles';
$messages['field_hidden_help'] = 'Si el camp est� ocult, no es visualitzar� quan afegeixis o editis un missatge. Aquesta caracter�stica la utilitzen els complements (plugins) principalment';
$messages['error_adding_custom_field'] = 'Hi ha hagut un error afegint el camp personalitzat. Comprova les dades i prova-ho de nou';
$messages['custom_field_added_ok'] = 'El Camp personalitzat "%s" s\ha afegit correctament';
$messages['text_field'] = 'Camp de text';
$messages['text_area'] = 'Caixa de text';
$messages['checkbox'] = 'Checkbox'; // <-------<-------<------<-------<----- buscar traducci� v�lida!
$messages['date_field'] = 'Selector de data';

// edit custom field
$messages['error_fetching_custom_field'] = 'Hi ha hagut un error obtenint el camp personalitzat';
$messages['error_updating_custom_field'] = 'Hi ha hagut un error actualitzant el camp personalitzat. Comprova les dades i prova-ho de nou';
$messages['custom_field_updated_ok'] = 'El Camp personalitzat "%s" s\ha actualitzat correctament';

// resources
$messages['root_album'] = '�lbum principal';
$messages['num_resources'] = 'Nombre de recursos';
$messages['total_size'] = 'Tamany total';
$messages['album'] = '�lbum';
$messages['error_incorrect_album_id'] = 'L\'identificador de l\'�lbum no �s correcte';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'Ha estat impossible crear les carpetes necess�ries on s\'ha d\'instal�lar els recursos. Aix� pot �sser causat per varies raons, tal com que la instal�laci� de PHP t� el Mode Segur (safe_mode) activat o que l\'usuari usat per PHP no tingui prou permisos. Pots fer l\'operaci� creant les seg�ents carpetes:: <br/><br/>%s<br/><br/>Si aquestes carpetes ja existeixen asseguris de que poden ser llegides i escrites per l\'usuari del servidor web.';
$messages['items_deleted_ok'] = '%s elements esborrats satisfact�riament';
$messages['error_album_has_children'] = 'L\'�lbum "%s" cont� sub-�lbums. Edita primer els sub-�lbums i torna-ho a intentar';
$messages['item_deleted_ok'] = 'Element "%s" esborrat correctament';
$messages['error_deleting_album'] = 'Hi ha hagut un error esborrant l\'�lbum "%s"';
$messages['error_deleting_album2'] = 'Hi ha hagut un erros esborrant l\'�lbum amb identificador "%s"';
$messages['error_deleting_resource'] = 'Hi ha hagut un error esborrant el recurs "%s"';
$messages['error_deleting_resource2'] = 'Hi ha hagut un erros esborrant el recurs amb identificador "%s"';
$messages['error_no_resources_selected'] = 'No hi ha elements seleccionats per esborrar';
$messages['resource_deleted_ok'] = 'El recurs "%s" s\'ha esborrat correctament';
$messages['album_deleted_ok'] = 'L\'�lbum "%s" s\'ha esborrat correctament';

// new album
$messages['album_name_help'] = 'Nom curt pel nou �lbum';
$messages['parent'] = 'Principal';
$messages['no_parent'] = 'No principal';
$messages['parent_album_help'] = 'Utilitza aix� per tenir �lbums dins d\'altres �lbums i organitzar millor els teus arxius';
$messages['album_description_help'] = 'Descripci� llarga dels continguts d\'aquest �lbum';
$messages['error_adding_album'] = 'Hi ha hagut un error afegint el nou �lbum. Comprova les dades i prova-ho de nou';
$messages['album_added_ok'] = '�lbum "%s" afegit correctament';

// edit album
$messages['error_incorrect_album_id'] = 'L\'identificador de l\'�lbum no �s correcte';
$messages['error_fetching_album'] = 'Hi ha hagut un error obtenint l\'�lbum';
$messages['error_updating_album'] = 'Hi ha hagut un error actualitzant l\'�lbum. Comprova les dades i prova-ho de nou';
$messages['album_updated_ok'] = '�lbum "%s" actualitzat correctament';
$messages['show_album_help'] = 'Si est� desactivat, l\'�lbim no es visualitzar� a la llista d\'�lbums disponibles en aquest bloc';

// new resource
$messages['file'] = 'Arxiu';
$messages['resource_file_help'] = 'Arxiu que s\'afegir� al bloc actual. Utilitza l\'enlla� "Afegeix camp" per actualitzar m�s d\'un arxiu al mateix temps';
$messages['add_field'] = 'Afegeix camp';
$messages['resource_description_help'] = 'Descripci� llarga pel contingut d\'aquest arxiu';
$messages['resource_album_help'] = 'Selecciona l\'�lbum on s\'afegir� aquest arxiu';
$messages['error_no_resource_uploaded'] = 'No hi ha cap arxiu seleccionat per pujar';
$messages['resource_added_ok'] = 'Recurs "%s" afegit correctament';
$messages['error_resource_forbidden_extension'] = 'Aquest arxiu no es pot afegir perqu� t� una extensi� no permesa';
$messages['error_resource_too_big'] = 'Aquest arxiu no es pot afegir perqu� �s massa gran';
$messages['error_uploads_disabled'] = 'Aquest arxiu no es pot afegir perqu� l\'opci� de pujar arxius est� desactivada';
$messages['error_quota_exceeded'] = 'Aquest arxiu no es pot afegir perqu� has excedit el m�xim assignat. Esborra arxius.';
$messages['error_adding_resource'] = 'Hi ha hagut un error afegint el recurs';

// edit resource
$messages['information'] = 'Informaci�';
$messages['size'] = 'Tamany';
$messages['format'] = 'Format';
$messages['dimensions'] = 'Dimensions';
$messages['bits_per_sample'] = 'Bits per mostra (b.p.s)';
$messages['thumbnail_format'] = 'Format de miniatures';
$messages['regenerate_preview'] = 'Regenera vista pr�via';
$messages['error_fetching_resource'] = 'Hi ha hagut un error obtenint el recurs';
$messages['error_updating_resource'] = 'Hi ha hagut un error actualitzant el recurs';
$messages['resource_updated_ok'] = 'Recurs "%s" actualitzat correctament';

// blog settings
$messages['blog_link'] = 'Enlla� del bloc';
$messages['blog_link_help'] = 'Enlla� permanent a aquest bloc';
$messages['blog_name_help'] = 'T�tol per a aquest bloc';
$messages['blog_description_help'] = 'Descripci� llarga dels continguts del bloc';
$messages['language'] = 'Idioma';
$messages['blog_language_help'] = 'Idioma per visualitzar els textos en aquest bloc, tant el lector com l\'autor';
$messages['max_main_page_items'] = 'Nombre d\'elements a la p�gina principal';
$messages['max_main_page_items_help'] = 'Nombre de missatges que es poden visualitzar a l\'hora a la p�gina principal del bloc';
$messages['max_recent_items'] = 'Nombre d\'elements recents';
$messages['max_recent_items_help'] = 'Nombre m�xim de missatges que es poden visualitzar a l\'hora a la p�gina principal';
$messages['template'] = 'Plantilla';
$messages['choose'] = 'Escull';
$messages['blog_template_help'] = 'Plantilla que s\'utilitzar� amb aquest bloc. La llista inclou plantilles generals i d\'altres espec�fiques per a aquest bloc';
$messages['use_read_more'] = 'Enlla� "Segueix..." als missatges';
$messages['use_read_more_help'] = 'Si est� activat, nom�s el text escrit al camp "Text" es veur� a la p�gina principal. Per veure el "Text ampliat" l\'enlla� "Segueix..." s\'afegir� a cada missatge';
$messages['enable_wysiwyg'] = 'Activa l\'editor visual de missatges';
$messages['enable_wysiwyg_help'] = 'Per activar un editor m�s potent, selecciona Activa l\'editor visual. L\'editor nom�s funciona en Internet Explorer 5.5 o superior o Mozilla 1.3 o superior';
$messages['enable_comments'] = 'Activa comentaris per defecte';
$messages['enable_comments_help'] = 'Activa comentaris per a tots els missatges defecte. Els comentaris poden activar-se/desactivar-se per a certs missatges, creant-ne de nous o editant-los';
$messages['show_future_posts'] = 'Visualitza els missatges futurs al calendari';
$messages['show_future_posts_help'] = 'Els missatges que tinguin una data futura seran visibles pels usuaris';
$messages['comments_order'] = 'Ordre dels comentaris';
$messages['comments_order_help'] = 'Ordre amb que els comentaris seran mostrats a la p�gina principal';
$messages['oldest_first'] = 'Els m�s antic primer';
$messages['newest_first'] = 'Els m�s recent primer';
$messages['categories_order'] = 'Ordre de les categories';
$messages['categories_order_help'] = 'Ordre dels comentaris a la p�gina principal';
$messages['most_recent_updated_first'] = 'El m�s recent primer';
$messages['alphabetical_order'] = 'Ordre alfab�tic';
$messages['reverse_alphabetical_order'] = 'Ordre alfac�tic invers';
$messages['most_articles_first'] = 'M�s articles primer';
$messages['link_categories_order'] = 'Ordena per categories d\'enlla�';
$messages['link_categories_order_help'] = 'Ordena per categories d\'enlla� tal com apareixen a la p�gina principal';
$messages['most_links_first'] = 'M�s enlla�os primer';
$messages['most_links_last'] = 'M�s enlla�os al final';
$messages['time_offset'] = 'Difer�ncia de temps';
$messages['time_offset_help'] = 'Difer�ncia de temps en hores que s\'afegeix din�micament';
$messages['close'] = 'Tanca';
$messages['select'] = 'Selecciona';
$messages['error_updating_settings'] = 'Hi ha hagut un error esborrant les prefer�ncies del bloc. Comprova les dades i prova-ho de nou';
$messages['error_invalid_number'] = 'El n�mero no �s correcte';
$messages['error_incorrect_time_offset'] = 'La difer�ncia de temps no �s v�lida';
$messages['blog_settings_updated_ok'] = 'Prefer�ncies del bloc actualitzades correctament';
$messages['hours'] = 'Hores';

// user settings
$messages['username_help'] = 'Nom d\'usuari p�blic. No es pot canviar';
$messages['full_name'] = 'Nom complet';
$messages['full_name_help'] = 'Nom ext�s complet';
$messages['password_help'] = 'Escriu i confirma la nova contrasenya, o deixa l\'espai en blanc per deixar-la igual';
$messages['confirm_password'] = 'Confirma contrasenya';

$messages['email'] = 'Correu';


$messages['email_help'] = 'Adreces de correu electr�nic on s\'enviaran les notificacions';
$messages['bio'] = 'La teva biografia';
$messages['bio_help'] = 'Pots introduir una descripci� llarga de tu mateix';
$messages['picture'] = 'Imatges';
$messages['user_picture_help'] = 'Selecciona una imatge de les que has pujat i ser� la teva imatge personal';
$messages['error_invalid_password'] = 'La contrasenya no �s correcta. Assegura\t que no sigui massa curta';
$messages['error_passwords_dont_match'] = 'Perdona, per� les contrasenyes no coincideixen';
$messages['error_incorrect_email_address'] = 'L\'adre�a de correu electr�nic no �s correcta';
$messages['error_updating_user_settings'] = 'Hi ha hagut un error actualitzant les teves prefer�ncies. Comprova les dades i prova-ho de nou';
$messages['user_settings_updated_ok'] = 'Prefer�ncies d\'uisuari actualitzades correctament';

// plugin center
$messages['identifier'] = 'identificador';

// blog users
$messages['revoke_permissions'] = 'Revoca permisos';
$messages['error_no_users_selected'] = 'No hi ha usuaris seleccionats';
$messages['user_removed_from_blog_ok'] = 'L\'usuari "%s" ha estat esborrat del bloc satisfact�riament';
$messages['users_removed_from_blog_ok'] = '%s usuaris han estat esborrats del bloc satisfact�riament';
$messages['error_removing_user_from_blog'] = 'Hi ha hagut un error esborrant l\'usuari "%s" d\'aquest bloc';
$messages['error_removing_user_from_blog2'] = 'Hi ha hagut un error esborrant l\'usuari amb identificador "%s" d\'aquest bloc';

// new blog user
$messages['new_blog_username_help'] = 'Nom de l\'usuari que vols que tingui acc�s al bloc. Els nous usuaris nom�s tindr�n acc�s a les �rees "Gestiona" i " Centre de Recursos".';
$messages['send_notification'] = 'Envia notificaci�';
$messages['send_user_notification_help'] = 'Envia un correu electr�nic de notificaci� a l\'usuari';
$messages['notification_text'] = 'text de notificaci�';
$messages['notification_text_help'] = 'text que s\'inclour� al missatge de notificaci�';
$messages['error_adding_user'] = 'Hi ha hagut un error donant acc�s a l\'usuari. Comprova les dades i prova-ho de nou';
$messages['error_empty_text'] = 'Hi has de posar algun text';
$messages['error_adding_user'] = 'Hi ha hagut un error afegint l\'usuari. Comprova les dades i prova-ho de nou';
$messages['error_invalid_user'] = 'L\'usuari "%s" no �s v�lid o no existeix';
$messages['user_added_to_blog_ok'] = 'L\'usuari "%s" ha obtingut acc�s a aquest bloc satisfact�riament';

// blog templates
$messages['error_no_templates_selected'] = 'No hi ha plantilles seleccionades';
$messages['error_template_is_current'] = 'La plantilla "%s" no es pot esborrar perqu� �s la que est� funcionant';
$messages['error_removing_template'] = 'Hi ha hagut un error esborrant la plantilla "%s"';
$messages['template_removed_ok'] = 'Plantilla "%s" esborrada correctament';
$messages['templates_removed_ok'] = '%s plantilles esborrades correctament';

// new blog template
$messages['template_installed_ok'] = 'Plantilla "%s" afegida satisfact�riament';
$messages['error_installing_template'] = 'Hi ha hagut un error instal�lant la plantilla "%s"';
$messages['error_missing_base_files'] = 'Alguns arxius de plantilles no es troben';
$messages['error_add_template_disabled'] = 'No es poden afegir noves plantilles p�rqu� aquesta opci� no est� disponible en aquest lloc';
$messages['error_must_upload_file'] = 'No s\'ha pujat cap paquet de plantilles';
$messages['error_uploads_disabled'] = 'L\'opci� de pujar arxius est� desactivada en aquest lloc';
$messages['error_no_new_templates_found'] = 'No s\'han trobat noves plantilles';
$messages['error_template_not_inside_folder'] = 'El arxius utilitzats en les plantilles han d\'estar dins d\'una carpeta amb el mateix nom que la plantilla';
$messages['error_missing_base_files'] = 'No es troben alguns dels arxius principals de la plantilla';
$messages['error_unpacking'] = 'Hi ha hagut un error expandint l\'arxiu ';
$messages['error_forbidden_extensions'] = 'La plantilla inclou arxius amb extensions no permeses';
$messages['error_creating_working_folder'] = 'Hi ha hagut un error creant una carpeta temporal per descomprimir els arxius';
$messages['error_checking_template'] = 'Hi ha hagut un error comprovant la plantilla: %s';
$messages['template_package'] = 'Paquet de la plantilla';
$messages['blog_template_package_help']  = 'Utilitza aquest formulari per pujar un nou joc de plantilles, que estar� nom�s disponible pel teu bloc. Si aix� no �s possible, puja el joc de plantilles manualment i col�loca\'l a <b>%s</b>, que �s la carpeta del servidor on es guarden les plantilles, i fes clic al bot� "<b>Cerca plantilles</b>". pLog buscar� en aquesta carpeta i actualitzar� autom�ticament les plantilles que trobi.';
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
$messages['error_incorrect_username'] = 'El nom d\'usuari no �s correcte o ja est� en �s';
$messages['user_status_help'] = 'Estatus actual per a aquest usuari';
$messages['user_blog_help'] = 'Bloc al que aquest usuari ser� assignat inicialment';
$messages['none'] = 'Cap';

// edit user
$messages['error_invalid_user'] = 'L\'identificador d\'usuari no �s correcte o l\'usuari no existeix';
$messages['error_updating_user'] = 'Hi ha hagut un error actualitzant les prefer�ncies d\'usuari. Comprova les dades i prova-ho de nou';
$messages['blogs'] = 'Blocs';
$messages['user_blogs_help'] = 'Blocs d\'aquest usuari o als quals pot tenir acc�s';
$messages['site_admin'] = 'Administrador';
$messages['site_admin_help'] = 'Aquest usuari t� privilegis d\'administrador i pot anar a la secci� "Administraci�" i realitzar les tasques administratives pertinents';
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
$messages['error_blog_is_default_blog'] = 'El bloc "%s" no es pot esborrar perqu� �s el bloc per defecte';
$messages['blog_deleted_ok'] = 'Bloc "%s" esborrat correctament';
$messages['blogs_deleted_ok'] = '%s blocs esborrats correctament';
$messages['error_deleting_blog'] = 'Hi ha hagut un error desactivant el bloc "%s"';
$messages['error_deleting_blog2'] = 'Hi ha hagut un error desactivant el bloc amb l\'identificador "%s"';

// create blog
$messages['error_adding_blog'] = 'Hi ha hagut un error activant el bloc. Comprova les dades i prova-ho de nou';
$messages['blog_added_ok'] = 'Bloc "%s" afegit correctament';

// edit blog
$messages['blog_status_help'] = 'Estat del bloc';
$messages['blog_owner_help'] = 'L\'usuari tindr� control total sobre les prefer�ncies del bloc';
$messages['users'] = 'Usuaris';
$messages['blog_quota_help'] = 'Tamany perm�s de recursos en octets. Posa-hi 0 per un tamany il�limitat o deixa-ho en blanc per ajustar-ho al tamany perm�s general';
$messages['blog_users_help'] = 'Usuaris que tenen acc�s a aquest bloc. Selecciona un usuari de l\'esquerra i mou-lo a llista de la dreta per saber l\'ordre d\'acc�s dels usuaris d\'aquest bloc';
$messages['edit_blog_settings_updated_ok'] = 'Bloc "%s" actualitzat correctament';
$messages['error_updating_blog_settings'] = 'Hi ha hagut un error actualitzant el bloc "%s"';
$messages['error_incorrect_blog_owner'] = 'L\'usuari seleccionat com a propietari no �s correcte';
$messages['error_fetching_blog'] = 'Hi ha hagut un error obtenint el bloc';
$messages['error_updating_blog_settings2'] = 'Hi ha hagut un error actualitzant el bloc. Comprova les dades i prova-ho de nou';
$messages['add_or_remove'] = 'Afegeix o esborra usuaris';

// site locales
$messages['locale'] = 'Localitzaci�';
$messages['locale_encoding'] = 'Codificaci�';
$messages['locale_deleted_ok'] = 'Localitzaci� "%s" esborrada correctament';
$messages['error_no_locales_selected'] = 'No hi ha localitzacions seleccionades per esborrar';
$messages['error_deleting_only_locale'] = 'La localitzaci� no es pot esborra perqu� �s l\'�nica que hi ha al sistema';
$messages['locales_deleted_ok']= '%s localitzacions esborrades correctament';
$messages['error_deleting_locale'] = 'Hi ha hagut un error esborrant la localitzaci� "%s"';
$messages['error_locale_is_default'] = 'La localitzaci� "%s" no es pot esborrar perqu� �s la localitzaci� per defecte dels nous blocs';

// add locale
$messages['error_invalid_locale_file'] = 'L\'arxiu de localitzaci� no �s v�lid';
$messages['error_no_new_locales_found'] = 'No s\'han trobat nous arxius de localitzaci�';
$messages['locale_added_ok'] = 'Localitzaci� "%s" afegida correctament';
$messages['error_saving_locale'] = 'Hi ha hagut un error guardant la nova localitzaci�';
$messages['scan_locales'] = 'Cerca localitzacions';
$messages['add_locale_help'] = 'Utilitza aquest formulari per pujar un arxiu de localitzaci�. Si no pots pujar l\'arxiu mitjan�ant el formulari, puja l\'arxiu manualment al directori <b>./locales/</b>, que �s la carpeta on es guarden les localitzacions, i fes clic al bot�  "<b>Cerca localitzaci�</b>". pLog mirar� dins la carpeta i actualitzar� tots els idiomes que hagi trobat.';

// site templates
$messages['error_template_is_default'] = 'La plantilla "%s" no es pot esborrar perqu� �s la plantilla per defecte dels nous blocs';

// add template
$messages['global_template_package_help'] = 'Utilitza aquest formulari per pujar un nou joc de plantilles, que estar� nom�s disponible pel teu bloc. Si aix� no �s possible, puja el joc de plantilles manualment i col�loca\'l a <b>%s</b>, que �s la carpeta del servidor on es guarden les plantilles, i fes clic al bot� "<b>Cerca plantilles</b>". pLog buscar� en aquesta carpeta i actualitzar� autom�ticament les plantilles que trobi.';

// global settings
$messages['site_config_saved_ok'] = 'Prefer�ncies arxivades correctament';
$messages['error_saving_site_config'] = 'Hi ha hagut un error arxivant les prefer�ncies';
/// general settings
$messages['help_comments_enabled'] = 'Activa o desactiva els comentaris pels nous blocs per defecte';
$messages['help_beautify_comments_text'] = 'Si est� activat, els comentaris introdu�ts pels usuaris seran formatats, afegint-los par�grafs i auto-omplenant els enlla�os';
$messages['help_temp_folder'] = 'Carpeta que fa servir pLog per escriure arxius temporals, etc. Utilitza\'n una altra si vols augmentar la seguretat';
$messages['help_base_url'] = 'URL de base on est� instal�lat aquest bloc';
$messages['help_subdomains_enabled'] = 'Activa o desactiva subdominis. Mira\'t la documentaci� per saber-ne m�s';
$messages['help_subdomains_base_url'] = 'Si els subdominis estan activats, aquesta URL base es far� servir en comptes de base_url. Utilitza {blogname} per donar nom al bloc i {username} per donar nom a l\'usuari del bloc per tal de generar un enlla� al bloc';
$messages['help_include_blog_id_in_url'] = '�til nom�s quan els subdominis estan actius i les URLs normals estan actives, for�a les URLS generades internament a no tenir el par�metre "blogID". No ho canviis a no ser que s�pigues el que est�s fent!';
$messages['help_script_name'] = 'Modifica aquest camp si necessites renombrar el "index.php" a alg�n altre nom.';
$messages['help_show_posts_max'] = 'M�xim nombre de missatges mostrats a la p�gina principal. �til nom�s per als blocs nous';
$messages['help_recent_posts_max'] = 'M�xim nombre de missatges recents mostrats a la p�gina principal. �til nom�s per als blocs nous';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Si la propietat de desar esbossos via Javascript i XmlHttpRequest est� activada';
$messages['help_locale_folder'] = 'Directori on hi ha desats els arxius dels llenguatges';
$messages['help_default_locale'] = 'Configuraci� de llenguatge predefinida per als blocs nous';
$messages['help_default_blog_id'] = 'Bloc predefinit que es mostrar� si cap altre s\'ha especificat.';
$messages['help_default_time_offset'] = 'Temps de compensaci� predefinit per als nous blocs';
$messages['help_html_allowed_tags_in_comments'] = 'Llista de les etiquetes HTML permeses als comentaris separadades per espais.';
$messages['help_referer_tracker_enabled'] = 'Activa o desactiva la possibilitat de desar les refer�ncies a la base de dades. Desactivar-ho per m�s alt rendiment.';
$messages['help_show_more_enabled'] = 'Activa o desactiva la possibilitat de afegir-hi el "Segueix..." als blocs nous';
$messages['help_update_article_reads'] = 'Activa o desactiva l\'actualitzaci� del contador de cops que un missatge ha estat llegit. Desactivar-ho per m�s alt rendiment.';
$messages['help_update_cached_article_reads'] = 'Activa o desactiva l\'actualitzaci� del contador de cops que un missatge ha estat llegit, encara que s\'hagi activat l\'opci� d\'usar la memoria cau';
$messages['help_xmlrpc_ping_enabled'] = 'Activa o desactiva el poder enviar pings XMLRPC a llocs que ho permetin';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Activa o desactiva per defecte la possibilitat d\'enviar ping al enviar o editar un missatge.';
$messages['help_xmlrpc_ping_hosts'] = 'URLs cap on apunta la interf�cie de XMLRPC de llocs que suportin pings de XMLRPC. Posa una URL a cada nova l�nia';
$messages['help_trackback_server_enabled'] = 'Activa o desactiva la possibilitat de rebre retroenlla�os';
$messages['help_htmlarea_enabled'] = 'Activa o desactiva l\'editor gr�fic (WYSIWYG) de missatges per defecte als nous blocs';
$messages['help_plugin_manager_enabled'] = 'Activa o desactiva els plugins';
$messages['help_minimum_password_length'] = 'Longitud m�nima per a les contrasenyes';
$messages['help_xhtml_converter_enabled'] = 'Si est� activat, pLog intentar� convertir tot el codi HTML al codi XHTML m�s semblant';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'Si est� activat, pLog intentar� encara m�s generar codi XHTML a partir del codi HTML, per� ser� m�s propens a errors';
$messages['help_session_save_path'] = 'Fes servir aquest par�metre per canviar la carpeta on pLog desa les dades de sessions, a trav�s de la funci� de PHP session_save_path(). Assegura\'t de que el servidor t� permisos d\'escriptura a la carpeta. Deixi-ho en blanc per fer servir la configuraci� de PHP per defecte';
// summary settings
$messages['help_summary_page_show_max'] = 'N�mero d\'elements que es mostraran a la p�gina de summari. Aquest par�metre controla totes les llistes del summari (Missatges recents, Blocs m�s actius, etc)';
$messages['help_summary_blogs_per_page'] = 'N�mero de blocs per p�gina a la llista de blocs';
$messages['help_forbidden_usernames'] = 'Llista de noms d\'usuaris que no es poden registrar';
$messages['help_force_one_blog_per_email_account'] = 'Restringir a nom�s un bloc per correu electr�nic';
$messages['help_summary_show_agreement'] = 'Mostra un text de termes i condicions d\'�s i fes que els usuaris l\'acceptin per poder-se registrar';
$messages['help_need_email_confirm_registration'] = 'Obliga als usuaris a confirmar el seu registre a trav�s d\'un enlla� dins d\'un email enviat a la seva adre�a';
$messages['help_summary_disable_registration'] = 'Si els usuaris poden registrar nous blocs en aquest lloc';
// templates
$messages['help_template_folder'] = 'Carpeta on hi ha desades les plantilles';
$messages['help_default_template'] = 'Plantilla per defecte per als nous blocs';
$messages['help_users_can_add_templates'] = 'Permetre als usuaris penjar la seva pr�pia plantilla';
$messages['help_template_compile_check'] = 'Si est� desactivat, Smarty comprovar� cada cop si la plantilla ha canviat i en el cas afirmatiu, utilitzar� la nova versi�. Desactivar-ho per un rendiment m�s alt';
$messages['help_template_cache_enabled'] = 'Permet desar les plantilles a la mem�ria cau. Si est� activat, la versi� de la p�gina de la mem�ria cau ser� utilitzada sempre que sigui possible. No caldr� extreure dades de la base de dades ni recomplilar la plantilla';
$messages['help_template_cache_lifetime'] = 'Vida en segons de la mem�ria cau. Posar-ho a -1 per for�ar que la mem�ria cau no expiri mai. Si est� a 0 la mem�ria cau estar� desactivada per� es recomana desactivar-ho a trav�s de la opci� anterior';
$messages['help_template_http_cache_enabled'] = 'Permet el suport per peticions condicionals de HTTP. Si est� activat, pLog tindr� en compte la capcelera HTTP de "If-Modified-Since" i enviar� nom�s el contingut si �s estrictament necess�ri. Activa aix� per estalviar ample de banda';
// urls
$messages['help_request_format_mode'] = 'Selecciona un dels formats URL disponibles. Si usa URLs pr�pies, asseguris de configurar els par�metres seg�ents';
$messages['plain'] = 'Pla';
$messages['search_engine_friendly'] = 'Amist�s als motors de cerca';
$messages['custom_url_format'] = 'URLs pr�pies';
$messages['help_permalink_format'] = 'Format per als enlla�os permanents si s\'utilitza les URLs pr�pies';
$messages['help_category_link_format'] = 'Format per als enlla�os a les categories si s\'utilitza les URLs pr�pies';
$messages['help_blog_link_format'] = 'Format per als enlla�os als blocs si s\'utilitza les URLs pr�pies';
$messages['help_archive_link_format'] = 'Format per als enlla�os als arxius si s\'utilitza les URLs pr�pies';
$messages['help_user_posts_link_format'] = 'Format per als missatges publicats per un usuari concret si s\'utilitza les URLs pr�pies';
$messages['help_post_trackbacks_link_format'] = 'Format per als enlla�os a la p�gina de retroenlla�os si s\'utilitza les URLs pr�pies';
$messages['help_template_link_format'] = 'Format per als enlla�os a la plantilla est�tica pro�pia si s\'utilitza les URLs pr�pies';
$messages['help_album_link_format'] = 'Format per als enlla�os als �lbums de recursos si s\'utilitza les URLs pr�pies';
$messages['help_resource_link_format'] = 'Format per als enlla�os a les p�gines de recursos amb arxius si s\'utilitza les URLs pr�pies';
$messages['help_resource_preview_link_format'] = 'Format per als enlla�os a les vistes pr�vies dels recursos si s\'utilitza les URLs pr�pies';
$messages['help_resource_medium_size_preview_link_format'] = 'Format per als enlla�os a les vistes pr�vies de tamany mig dels recursos si s\'utilitza les URLs pr�pies';
$messages['help_resource_download_link_format'] = 'Format per als enlla�os als arxius si s\'utilitza les URLs pr�pies';
// email
$messages['help_check_email_address_validity'] = 'Quan es comprovin adreces de correu electr�nic, fer unes comprovacions b�siques per veure si existeix un MX en el domini especificat i en cas afirmatiu, comprovar si l\'adre�a especificada �s v�lida';
$messages['help_email_service_enabled'] = 'Activa o desactiva els correus electr�nics de sortida';
$messages['help_post_notification_source_address'] = 'L\'adre�a de correu electr�nic que apareixer� en el camp "De:" quan s\'enviin correus des de pLog';
$messages['help_email_service_type'] = 'Quin sistema utilitzar per enviar correus electr�nics';
$messages['help_smtp_host'] = 'Si s\'utilitza el sistema de SMTP, posa-hi el servidor SMTP que es far� servir per enviar els missatges';
$messages['help_smtp_port'] = 'Si el servidor SMTP funciona en un port diferent del 25, posa\'l aqu�';
$messages['help_smtp_use_authentication'] = 'Activa aix� si el servidor SMTP requereix autentificaci�';
$messages['help_smtp_username'] = 'Si el servidor SMTP requereix autentificaci�, posa aqu� l\'usuari';
$messages['help_smtp_password'] = 'Si el servidor SMTP requereix autentificaci�, posa aqu� la contrasenya per l\'usuari anterior';
// helpers
$messages['help_path_to_tar'] = 'Cam� fins a l\'eina "tar", necess�ria per expandir les plantilles en formats .tar.gz o tar.bz2';
$messages['help_path_to_gzip'] = 'Cam� fins a l\'eina "gzip", necess�ria per expandir les plantilles en format .tar.gz';
$messages['help_path_to_bz2'] = 'Cam� fins a l\'eina "bzip2", necess�ria per expandir les plantilles en format .tar.bz2';
$messages['help_path_to_unzip'] = 'Cam� fins a l\'eina "unzip", necess�ria per expandir les plantilles en format .zip';
$messages['help_unzip_use_native_version'] = 'Utilitza el packet de la versi� nativa de PHP per expandir arxius en format .zip';
// uploads
$messages['help_uploads_enabled'] = 'Si els usuaris poden enviar arxius. Aix� afecta la secci� de recursos, a l\'enviament de plantilles personalitzades i instal�laci� de nous idiomes';
$messages['help_maximum_file_upload_size'] = 'Tamany m�xim per als arxius. Aquest l�mit mai ser� m�s gran que el pr�pi de PHP';
$messages['help_upload_forbidden_files'] = 'Llista de extensions no permeses per enviar, separades per espais. La utilitzaci� de \'*\' i \'?\' est� permesa';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'Activa o desactiva l\'acc�s via XMLRPC als blocs';
$messages['help_rdf_enabled'] = 'Activa la sindicaci� dels continguts via Atom o RSS';
$messages['help_default_rss_profile'] = 'Versi� per defecte de RSS o Atom utilitzat per sindicar els continguts a menys que s\'especifiqui';
// security
$messages['security_pipeline_enabled'] = 'Activa o desactiva el conducte de seguretat i tots els filtres relacionats. Aix� tamb� afecta als plugins que registrin nous filtres';
$messages['help_ip_address_filter_enabled'] = 'Activa o desactiva el filtre per adre�a IP. El conducte de seguretat tamb� ha d\'estar activat perqu� aquesta caracter�stica funcioni';
$messages['help_content_filter_enabled'] = 'Activa o desactiva el filtre basat en expresions regulars. El conducte de seguretat tamb� ha d\'estar activat perqu� aquesta caracter�stica funcioni';
$messages['help_maximum_comment_size'] = 'Tamany m�xim en octets que pot tenir un comentari';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = 'Activa o desactiva el filtre Bayesian per filtratge automatic de spam';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'Llindar m�xim abans de que un comentari sigui considerat spam';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'Llindar m�nim despr�s del qual un missatge sigui considerat no-spam';
$messages['help_bayesian_filter_min_length_token'] = 'Longitud m�nima d\'un senyal per ser considerat significatiu per el filtre Bayesian';
$messages['help_bayesian_filter_max_length_token'] = 'Longitud m�xima d\'un senyal per ser considerat significatiu per el filtre Bayesian';
$messages['help_bayesian_filter_number_significant_tokens'] = 'N�mero de senyals significatius';
$messages['help_bayesian_filter_spam_comments_action'] = 'Qu� fer amb els commentaris considerats spam. Posa-ho a "Llen�a\'ls" nom�s quan el teu filtre hagi estat propiament entrenat.';
$messages['keep_spam_comments'] = 'Manten-lo a la teva base de dades marcat com a "Spam"';
$messages['throw_away_spam_comments'] = 'Llen�a\'ls (no els desis)';
// resources
$messages['help_resources_enabled'] = 'Activa o desactiva els recursos';
$messages['help_resources_folder'] = 'Carpeta on es desaran els recursos. Configura-ho fora de l\'arbre del servidor web per m�s seguretat';
$messages['help_thumbnail_method'] = 'Metode utilitzat per generar vistes pr�vies. Si utilitza PHP, necessita suport GD';
$messages['help_path_to_convert'] = 'Cam� fins a l\'eina de convertir del paquet "ImageMagick". Necessari si el m�tode de vista pr�via �s "ImageMagick"';
$messages['help_thumbnail_format'] = 'Format amb el qual les vistes pr�vies ser�n desades';
$messages['help_thumbnail_height'] = 'Al�ada per defecte de les vistes pr�vies petites';
$messages['help_thumbnail_width'] = 'Amplada per defecte de les vistes pr�vies petites';
$messages['help_medium_size_thumbnail_height'] = 'Al�ada per defecte de les vistes pr�vies mitjanes';
$messages['help_medium_size_thumbnail_width'] = 'Amplada per defecte de les vistes pr�vies mitjanes';
$messages['help_thumbnails_keep_aspect_ratio'] = 'Mant� l\'aspecte de ratio al generar les vistes pr�vies. Generar� vistes pr�vies m�s grans de les mides especificades per� ser�n de m�s bona qualitat';
$messages['help_thumbnail_generator_force_use_gd1'] = 'For�a a pLog a utilitzar nom�s funcions de GD1';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'Algoritme utilitzat per a suavitzar les vistes pr�vies. Nom�s emprat quan el m�tode triat �s GD';
$messages['help_resources_quota'] = 'Quota global per als recursos dels blocs';
$messages['help_resource_server_http_cache_enabled'] = 'Permet el suport per a capceleres "If-Modified-Since" i crides de condicional HTTP. Activar-ho per estalviar m�s ample de banda';
$messages['help_resource_server_http_cache_lifetime'] = 'Temps en microsegons que els clients han d\'utilitzar la versi� de la mem�ria cau dels recursos';
$messages['same_as_image'] = 'El mateix que la imatge original';
// search
$messages['help_search_engine_enabled'] = 'Activa o desactiva el motor de cerca';
$messages['help_search_in_custom_fields'] = 'Cerca tamb� en els camps personalitzats';
$messages['help_search_in_comments'] = 'Cerca tamb� en els comentaris';

// cleanup
$messages['purge'] = 'Purga';
$messages['cleanup_spam'] = 'Purga spam';
$messages['cleanup_spam_help'] = 'Aix� esborrar� tots els comentaris marcats per els usuaris com a spams. No ser� possible recuperar-los un cop esborrats';
$messages['spam_comments_purged_ok'] = 'Comentaris amb spam purgats correctament';
$messages['cleanup_posts'] = 'Purga missatges';
$messages['cleanup_posts_help'] = 'Aix� esborrar� tots els missatges marcats com a esborrats per els usuaris. No ser� possible recuperar-los un cop esborrats';
$messages['posts_purged_ok'] = 'Missatges esborrats correctament';

/// summary ///
// front page
$messages['summary'] = 'Sumari';
$messages['register'] = 'registre';
$messages['summary_welcome'] = 'D�u vos guard!';
$messages['summary_most_active_blogs'] = 'Blocs m�s actius';
$messages['summary_most_commented_articles'] = 'Articles m�s comentats';
$messages['summary_most_read_articles'] = 'Articles m�s llegits';
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
$messages['register_step0_title'] = 'Acceptaci� de termes i condicions d\'�s';
$messages['decline'] = 'Rebutja';
$messages['accept'] = 'Accepto';
$messages['read_service_agreement'] = 'Siusplau llegeixi els termes i condicions d\'�s d\'aquest servei i prem el bot� "Accepto" si hi est� d\'acord';
$messages['register_step1_title'] = 'Crear un usuari [1/4]';
$messages['register_step1_help'] = 'Primerament necessites crear un usuari nou per generar un bloc. Aquest usuari ser� el propietari del bloc i tindr� acc�s a totes les seves funcionalitats';
$messages['register_next'] = 'Seg�ent';
$messages['register_back'] = 'Anterior';
$messages['register_step2_title'] = 'Crear un bloc [2/4]';
$messages['register_blog_name_help'] = 'Nom per al teu bloc nou';
$messages['register_step3_title'] = 'Tria una plantilla [3/4]';
$messages['step1'] = 'Pas 1';
$messages['step2'] = 'Pas 2';
$messages['step3'] = 'Pas 3';
$messages['register_step3_help'] = 'Siusplau, seleccioni una de les plantilles disponibles com a plantilla per defecte del seu nou bloc. Si m�s endavant no li agrada, podr� canviar-la en qualsevol moment';
$messages['error_must_choose_template'] = 'Siusplau seleccioni una plantilla';
$messages['select_template'] = 'Seleccioni una plantilla';
$messages['register_step5_title'] = 'Felicitats! [4/4]';
$messages['finish'] = 'Finalitzar';
$messages['register_need_confirmation'] = 'Un correu electr�nic que inclou la confirmaci� ha estat enviat a la seva adre�a, siusplau faci clic a l\'enlla� tant aviat com rebi el missatge per formar part de la catosfera';
$messages['register_step5_help'] = 'Felicitats, el seu nou usuari i bloc s\'ha creat correctament. Benvingut a la Catosfera!';
$messages['register_blog_link'] = 'Si vol fer una ullada al seu nou bloc, pot anar-hi ara: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'Si prefereix comen�ar a escriure missatges, faci clic per anar a la <a href="admin.php">interf�cie d\'administraci�</a>';
$messages['register_error'] = 'Hi ha hagut un error durant el proc�s';
$messages['error_registration_disabled'] = 'Disculpi, el registre de nous blocs en aquest lloc ha estat desactivat';
// registration article topic and text
$messages['register_default_article_topic'] = 'Enhorabona!';
$messages['register_default_article_text'] = 'Si pot llegir aquest missatge �s perqu� el proc�s de registre s\'ha realitzat correctament. Benvingut a la Catosfera. Esperem que sigui productiu';
$messages['register_default_category'] = 'General';
// confirmation email
$messages['register_confirmation_email_text'] = 'Siusplau, faci clic a l\'enlla� seg�ent per activar el seu bloc:

%s

Que tingui un bon dia,
Catapings.com li dona la benvinguda a la comunitat de webloguers catalans';
$messages['error_invalid_activation_code'] = 'Disculpi, el codi de confirmaci� no �s v�lid';
$messages['blog_activated_ok'] = 'Felicitats, el teu nou usuari i bloc s\'han validat correctament!';
// forgot your password?
$messages['reset_password'] = 'Canviar contrasenya';
$messages['reset_password_username_help'] = 'Nom de l\'usuari la contrasenya del qual vols canviar';
$messages['reset_password_email_help'] = 'Adre�a de correu electr�nic amb la que va registrar-se aquest usuari';
$messages['reset_password_help'] = 'Utilitzi aquest formulari per a establir una nova contrasenya per al seu usuari. Siusplau, introdueixi el nom de l\'usuari la contrasenya del qual li agradaria canviar, aix� com l\'adre�a electr�nica amb que va ser registrat l\'usuari';
$messages['error_resetting_password'] = 'Hi ha hagut un error al canviar la contrasenya. Siusplau, comprovi les dades i torni-ho a provar';
$messages['reset_password_error_incorrect_email_address'] = 'L\'adre�a electr�nica no �s correcte o no �s la que es va introduir al registrar l\'usuari';
$messages['password_reset_message_sent_ok'] = 'Un correu electr�nic amb un enlla� ha estat enviat a la seva adre�a. Siusplau, faci clic a l\'enlla� per tal de canviar la contrasenya';
$messages['error_incorrect_request'] = 'Els par�metres a la URL no s�n correctes';
$messages['change_password'] = 'Establir nova contrasenya';
$messages['change_password_help'] = 'Siusplau, escrigui i verifiqui la nova contrasenya';
$messages['new_password'] = 'Nova contrasenya';
$messages['new_password_help'] = 'Escrigui aqu� la seva nova contrasenya';
$messages['password_updated_ok'] = 'La seva contrasenya ha estat actualitzada correctament';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'Aquesta p�gina sembla plana i sense estil perqu� est� fent servir un navegador que no compila de manera estandard. <a href="http://www.catapings.com" title="Catapings.com">Catapings</a> li recomana que actualitzi a <a href="http://www.getfirefox.com" title="Mozilla Firefox">Mozilla Firefox</a>.  �s gratu�t i permet els formats estandard de web';
$messages['jump_to_navigation'] = 'Saltar a la navegaci�.';
$messages['comment_email_never_display'] = 'L�nia i par�graf separa automaticament, l\'adre�a de correu electr�nic no es mostra mai.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> perm�s: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Cita">cita</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Subratllat">ins</acronym>&gt; &lt;<acronym title="Negreta">strong</acronym>&gt;';
$messages['trackback_uri'] = '<acronym title="Uniform Resource Identifier">URI</acronym> per retroenlla�ar aquesta entrada �s: ';
$messages['previous_post'] = 'Anterior';
$messages['next_post'] = 'Seg�ent';
$messages['comment_default_title'] = '(Sense Titol)';
$messages['guestbook'] = 'Llibre de visites';
$messages['trackbacks'] = 'Retroenlla�os';
$messages['menu'] = 'Men�';
$messages['albums'] = '�lbums';
$messages['xmlrpc_ping_ok'] = 'Ping XMLRPC enviat correctament: ';
$messages['error_sending_xmlrpc_ping'] = 'Hi ha hagut un error enviant el ping XMLRPC a: ';
$messages['error_sending_xmlrpc_ping_message'] = 'Hi ha hagut un error enviant el ping XMLRPC: ';
?>