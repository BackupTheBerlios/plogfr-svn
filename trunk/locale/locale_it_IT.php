<?php
// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'iso-8859-15';
$messages['locale_description'] = 'File di localizzazione italiano per pLog';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %H:%M';

// days of the week
$messages['days'] = Array( 'Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato' );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( 'Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages['months'] = Array( 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre' );
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
$messages['message'] = 'Messaggio';
$messages['error'] = 'Errore';
$messages['date'] = 'Data';

// miscellaneous texts
$messages['of'] = 'di';
$messages['recently'] = 'recentemente...';
$messages['comments'] = 'commenti';
$messages['comment on this'] = 'Commenta';
$messages['my_links'] = 'i miei Link';
$messages['archives'] = 'archivi';
$messages['search'] = 'cerca';
$messages['calendar'] = 'calendario';
$messages['search_s'] = 'Cerca';
$messages['search_this_blog'] = 'Cerca questo blog:';
$messages['about_myself'] = 'Chi sono?';
$messages['permalink_title'] = 'Link permanente agli archivi';
$messages['permalink'] = 'Permalink';
$messages['posted_by'] = 'Inviato da';
$messages['reply'] = 'Replica';

// add comment form
$messages['add_comment'] = 'Aggiungi commento';
$messages['comment_topic'] = 'Argomento';
$messages['comment_text'] = 'Testo';
$messages['comment_username'] = 'Il tuo nome';
$messages['comment_email'] = 'La tua e-mail (se ne hai una)';
$messages['comment_url'] = 'Il tuo sito (se ne hai uno)';
$messages['comment_send'] = 'Invia';
$messages['comment_added'] = 'Commento registrato!';
$messages['comment_add_error'] = 'Errore nell\'inserimento del commento';
$messages['article_does_not_exist'] = 'L\'articolo non esiste';
$messages['no_posts_found'] = 'Nessun articolo trovato';
$messages['user_has_no_posts_yet'] = 'L\'utente non ha ancora nessun articolo';
$messages['back'] = 'Indietro';
$messages['post'] = 'articolo';
$messages['trackbacks_for_article'] = 'Trackback per l\'articolo: ';
$messages['trackback_excerpt'] = 'Brano';
$messages['trackback_weblog'] = 'Weblog';
$messages['search_results'] = 'Risultati della Ricerca';
$messages['search_matching_results'] = 'I seguenti articoli soddisfano i criteri di ricerca: ';
$messages['search_no_matching_posts'] = 'Nessun articolo trovato';
$messages['read_more'] = '(Continua)';
$messages['syndicate'] = 'Syndicate';
$messages['main'] = 'Principale';
$messages['about'] = 'Informazioni';
$messages['download'] = 'Scarica';

////// error messages /////
$messages['error_fetching_article'] = 'L\'articolo richiesto non può essere trovato.';
$messages['error_fetching_articles'] = 'Impossibile selezionare gli articoli';
$messages['error_trackback_no_trackback'] = 'Non sono presenti trackback per l\'articolo.';
$messages['error_incorrect_article_id'] = 'Identificativo dell\'articolo non corretto.';
$messages['error_incorrect_blog_id'] = 'Identificativo del blog non corretto.';
$messages['error_comment_without_text'] = 'Devi almeno inserire del testo.';
$messages['error_comment_without_name'] = 'Devi almeno inserire il tuo nome o nickname.';
$messages['error_adding_comment'] = 'Errore durante l\'inserimento del commento.';
$messages['error_incorrect_parameter'] = 'Parametri errati.';
$messages['error_parameter_missing'] = 'Manca un parametro nella richiesta.';
$messages['error_comments_not_enabled'] = 'La funzione di commento è disabilitata su questo sito.';
$messages['error_incorrect_search_terms'] = 'I termini di ricerca non sono validi';
$messages['error_no_search_results'] = 'Non ci sono elementi che soddisfano i criteri di ricerca';
$messages['error_no_albums_defined'] = 'Non ci sono album in questo blog.';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Login';
$messages['welcome_message'] = 'Benvenuto in pLog';
$messages['error_incorrect_username_or_password'] = 'Utente e password errati.';
$messages['error_dont_belong_to_any_blog'] = 'Spiacente ma non appartieni ancora a nessun blog.';
$messages['logout_message'] = 'Log out effettuato con successo.';
$messages['logout_message_2'] = 'Clicca <a href="%1$s">qui</a> per andare %2$s</a>.';
$messages['error_access_forbidden'] = 'Accesso negato. Devi prima effettuare il login.';
$messages['username'] = 'Utente';
$messages['password'] = 'Password';

// dashboard
$messages['dashboard'] = 'Cruscotto';
$messages['recent_articles'] = 'Ultimi articoli';
$messages['recent_comments'] = 'Ultimi commenti';
$messages['recent_trackbacks'] = 'Ultimi trackback';
$messages['blog_statistics'] = 'Statistiche del blog';
$messages['total_posts'] = 'Totale articoli';
$messages['total_comments'] = 'Totale commenti';
$messages['total_trackbacks'] = 'Totale trackback';
$messages['total_viewed'] = 'Totale visualizzazioni articoli';
$messages['in'] = 'In';

// menu options
$messages['newPost'] = 'Nuovo articolo';
$messages['Manage'] = 'Gestione';
$messages['managePosts'] = 'Gestione articoli';
$messages['editPosts'] = 'Articoli';
$messages['editArticleCategories'] = 'Categorie';
$messages['newArticleCategory'] = 'Nuova categoria';
$messages['manageLinks'] = 'Gestione link';
$messages['editLinks'] = 'Link';
$messages['newLink'] = 'Nuovo link';
$messages['editLink'] = 'Modifica link';
$messages['editLinkCategories'] = 'Classificazione link';
$messages['newLinkCategory'] = 'Nuova Classificazione link';
$messages['editLinkCategory'] = 'Modifica classificazione link';
$messages['manageCustomFields'] = 'Gestisci i campi personalizzati';
$messages['blogCustomFields'] = 'Campi personalizzati';
$messages['newCustomField'] = 'Nuovo campo personalizzato';
$messages['resourceCenter'] = 'Centro risorse';
$messages['resources'] = 'Risorse';
$messages['newResourceAlbum'] = 'Nuovo album';
$messages['newResource'] = 'Nuova risorsa';
$messages['controlCenter'] = 'Centro di controllo';
$messages['manageSettings'] = 'Impostazioni';
$messages['blogSettings'] = 'Impostazioni blog';
$messages['userSettings'] = 'Impostazioni utente';
$messages['pluginCenter'] = 'Centro plugin';
$messages['Stats'] = 'Statistiche';
$messages['manageBlogUsers'] = 'Gestione utenti blog';
$messages['newBlogUser'] = 'Nuovo utente blog';
$messages['showBlogUsers'] = 'Utenti blog';
$messages['manageBlogTemplates'] = 'Cornici del blog';
$messages['newBlogTemplate'] = 'Nuova cornice di blog';
$messages['blogTemplates'] = 'Cornici di blog';
$messages['adminSettings'] = 'Amministrazione';
$messages['Users'] = 'Utenti';
$messages['createUser'] = 'Creazione utente';
$messages['editSiteUsers'] = 'Utenti sito';
$messages['Blogs'] = 'Gestione blog';
$messages['createBlog'] = 'Crea blog';
$messages['editSiteBlogs'] = 'Blog';
$messages['Locales'] = 'Gestione linguaggi';
$messages['newLocale'] = 'Nuovo linguaggio';
$messages['siteLocales'] = 'Linguaggi sito';
$messages['Templates'] = 'Gestione cornici';
$messages['newTemplate'] = 'Nuova cornice';
$messages['siteTemplates'] = 'Cornici sito';
$messages['GlobalSettings'] = 'Impostazioni globali';
$messages['editSiteSettings'] = 'Generale';
$messages['summarySettings'] = 'Sommario';
$messages['templateSettings'] = 'Cornici';
$messages['urlSettings'] = 'URL';
$messages['emailSettings'] = 'Email';
$messages['uploadSettings'] = 'Upload';
$messages['helpersSettings'] = 'Programmi esterni';
$messages['interfacesSettings'] = 'Interfacce';
$messages['securitySettings'] = 'Sicurezza';
$messages['bayesianSettings'] = 'Filtro bayesiano';
$messages['resourcesSettings'] = 'Risorse';
$messages['searchSettings'] = 'Impostazioni di ricerca';
$messages['cleanUpSection'] = 'Pulizia';
$messages['cleanUp'] = 'Pulizia';
$messages['editResourceAlbum'] = 'Modifica album';
$messages['resourceInfo'] = 'Modifica risorsa';
$messages['editBlog'] = 'Modifica blog';
$messages['Logout'] = 'Logout';

// new post
$messages['topic'] = 'Argomento';
$messages['topic_help'] = 'Titolo dell\'articolo';
$messages['text'] = 'Testo';
$messages['text_help'] = 'Testo dell\'articolo. Questa parte apparirà sempre nella pagina iniziale';
$messages['extended_text'] = 'Testo esteso';
$messages['extended_text_help'] = 'Testo esteso dell\'articolo. Questa parte può apparire nella pagina dell\'articolo  completo o nella pagina iniziale. Fare riferimento alle impostazioni del blog.';
$messages['post_slug'] = 'Permalink Personalizzato';
$messages['post_slug_help'] = 'Usa questo campo per migliorare la leggibilità del permalink';
$messages['date'] = 'Data';
$messages['post_date_help'] = 'Data in cui questo articolo dovrà essere pubblicato';
$messages['status'] = 'Stato';
$messages['post_status_help'] = 'Seleziona uno stato';
$messages['post_status_published'] = 'Pubblicato';
$messages['post_status_draft'] = 'Bozza';
$messages['post_status_deleted'] = 'Cancellato';
$messages['categories'] = 'Categorie';
$messages['post_categories_help'] = 'Seleziona una o più categorie';
$messages['post_comments_enabled_help'] = 'Abilita i commenti';
$messages['send_notification_help'] = 'Notifica nuovi commenti';
$messages['send_trackback_pings_help'] = 'Invia trackback';
$messages['send_xmlrpc_pings_help'] = 'Invia ping XMLRPC';
$messages['save_draft_and_continue'] = 'Salva bozza';
$messages['preview'] = 'Anteprima';
$messages['add_post'] = 'Pubblica sul blog';
$messages['error_saving_draft'] = 'Errore durante il salvataggio della bozza';
$messages['draft_saved_ok'] = 'Bozza salvata';
$messages['error_sending_request'] = 'Errore nell\'invio della richiesta';
$messages['error_no_category_selected'] = 'Seleziona almeno una categoria';
$messages['error_missing_post_topic'] = 'Inserisci un argomento per l\'articolo';
$messages['error_missing_post_text'] = 'Scrivi il testo dell\'articolo';
$messages['error_adding_post'] = 'Errore durante l\'aggiunta dell\'articolo';
$messages['post_added_not_published'] = 'Articolo aggiunto ma non pubblicato';
$messages['post_added_ok'] = 'Articolo aggiunto.';
$messages['send_notifications_ok'] = 'Una notifica verrà inviata per ciascun commento o trackback.';

// send trackbacks
$messages['error_sending_trackbacks'] = 'Si è verificato un errore durante l\'invio dei seguenti trackback';
$messages['send_trackbacks_help'] = 'Seleziona dai seguenti URL dove vuoi inviare il ping di trackback. Assicurati che i siti supportino il trackback.';
$messages['send_trackbacks'] = 'Trackback inviati';
$messages['ping_selected'] = 'Ping selezionati';
$messages['trackbacks_sent_ok'] = 'Trackback inviati con successo ai seguenti URL';

// posts page
$messages['show_by'] = 'Mostra per';
$messages['category'] = 'Categoria';
$messages['author'] = 'Autore';
$messages['post_status_all'] = 'Qualunque';
$messages['author_all'] = 'Qualunque';
$messages['search_terms'] = 'Criteri di ricerca';
$messages['show'] = 'Mostra';
$messages['delete'] = 'Cancella';
$messages['actions'] = 'Azioni';
$messages['all'] = 'Qualunque';
$messages['category_all'] = 'Qualunque';
$messages['error_incorrect_article_id'] = 'Id articolo errato';
$messages['error_deleting_article'] = 'Errore durante la cancellazione dell\'articolo "%s"';
$messages['article_deleted_ok'] = 'Articolo "%s" cancellato';
$messages['articles_deleted_ok'] = '%s articoli cancellati';
$messages['error_deleting_article2'] = 'Errore durante la cancellazione dell\'articolo con id "%s"';

// edit post page
$messages['update'] = 'Aggiorna';
$messages['editPost'] = 'Modifica articolo';
$messages['error_fetching_post'] = 'Errore durante la lettura dell\'articolo';
$messages['post_updated_ok'] = 'Articolo "%s" modificato';
$messages['error_updating_post'] = 'Errore durante la modifica dell\'articolo';
$messages['notification_added'] = 'Riceverai una notifica per ciascun commento o trackback';
$messages['notification_removed'] = 'NON riceverai una notifica per ciascun commento o trackback';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = 'Qualunque';
$messages['comment_status_spam'] = 'Spam';
$messages['comment_status_nonspam'] = 'Non Spam';
$messages['error_fetching_comments'] = 'Errore durante la lettura dei commenti all\'articolo';
$messages['error_deleting_comments'] = 'Errore durante la cancellazione del commento o nessun commento selezionato';
$messages['comment_deleted_ok'] = 'Commento "%s" cancellato';
$messages['comments_deleted_ok'] = '%s commenti cancellati';
$messages['error_deleting_comment'] = 'Errore in fase di cancellazione del commento "%s"';
$messages['error_deleting_comment2'] = 'Errore in fase di cancellazione del commento con id %s';
$messages['editComments'] = 'Commenti';
$messages['mark_as_spam'] = 'Marca come spam';
$messages['mark_as_no_spam'] = 'Marca come non spam';
$messages['error_incorrect_comment_id'] = 'Id del commento non corretto';
$messages['error_marking_comment_as_spam'] = 'Errore durante la marcatura del commento come spam';
$messages['comment_marked_as_spam_ok'] = 'Il commento è stato marcato come spam';
$messages['error_marking_comment_as_nonspam'] = 'Errore durante la marcatura del commento come non spam';
$messages['comment_marked_as_nonspam_ok'] = 'Il commento è stato marcato come non spam';

// post trackbacks
$messages['blog'] = 'Blog';
$messages['excerpt'] = 'Brano';
$messages['error_fetching_trackbacks'] = 'Errore durante la lettura dei trackback';
$messages['error_deleting_trackbacks'] = 'Errore durante la cancellazione dei trackback o nessun elemento selezionato';
$messages['error_deleting_trackback'] = 'Errore durante la cancellazione del trackback "%s"';
$messages['error_deleting_trackback2'] = 'Errore durante la cancellazione del trackback con id "%s"';
$messages['trackback_deleted_ok'] = 'Trackback "%s" cancellato';
$messages['trackbacks_deleted_ok'] = '%s trackback cancellati ';
$messages['editTrackbacks'] = 'Trackback';

// post statistics
$messages['referrer'] = 'Origine';
$messages['hits'] = 'Visualizzazioni';
$messages['error_no_items_selected'] = 'Nessun item da rimuovere selezionato';
$messages['error_deleting_referrer'] = 'Errore in fase di cancellazione dell\'origine "%s"';
$messages['error_deleting_referrer2'] = 'Errore in fase di cancellazione dell\'origine con id "%s"';
$messages['referrer_deleted_ok'] = 'Origine "%s" cancellata';
$messages['referrers_deleted_ok'] = '%s origini cancellate';

// categories
$messages['posts'] = 'Articoli';
$messages['show_in_main_page'] = 'Mostra nella pagina iniziale';
$messages['error_incorrect_category_id'] = 'L\'id della categoria non è corretto o nessun elemento selezionato';
$messages['error_category_has_articles'] = 'La categoria "%s" è usata per catalogare qualche articolo. Modificare gli articoli prima di eliminare la categoria';
$messages['category_deleted_ok'] = 'Categoria "%s" eliminata';
$messages['categories_deleted_ok'] = '%s categorie eliminate';
$messages['error_deleting_category'] = 'Errore durante la cancellazione della categoria "%s"';
$messages['error_deleting_category2'] = 'Errore durante la cancellazione della categoria con id "%s"';
$messages['yes'] = 'Sì';
$messages['no'] = 'No';

// new category
$messages['name'] = 'Nome';
$messages['category_name_help'] = 'Nome da mostrare per visualizzare la categoria';
$messages['description'] = 'Descrizione';
$messages['category_description_help'] = 'Descrizione estesa della categoria';
$messages['show_in_main_page_help'] = 'Gli articoli sotto questa categoria devono essere mostrati nella pagina principale o solo quando si accede a questa particolare categoria';
$messages['error_empty_name'] = 'Devi definire un nome';
$messages['error_empty_description'] = 'Devi dare una descrizione';
$messages['error_adding_article_category'] = 'Errore durante l\'aggiunta di una nuova categoria. Verifica i dati e riprovare';
$messages['category_added_ok'] = 'Categoria "%s" aggiunta';
$messages['add'] = 'Aggiungi';
$messages['reset'] = 'Annulla';

// update category
$messages['error_updating_article_category'] = 'Errore durante la modifica della categoria';
$messages['error_fetching_category'] = 'Errore durante la lettura della categoria';
$messages['article_category_updated_ok'] = 'Categoria "%s" modificata';

// links
$messages['feed'] = 'Feed';
$messages['error_no_links_selected'] = 'L\'id del link non è corretto o non sono stati selezionati elementi da eliminare';
$messages['error_incorrect_link_id'] = 'L\'id del link non è corretto';
$messages['error_removing_link'] = 'Si è verificato un errore in fase di cancellazione del link "%s"';
$messages['error_removing_link2'] = 'Si è verificato un errore in fase di cancellazione del link con id "%s"';
$messages['link_deleted_ok'] = 'Link "%s" eliminato';
$messages['links_deleted_ok'] = '%s link eliminati';

// new link
$messages['link_name_help'] = 'Nome da dare a questo link';
$messages['link_url_help'] = 'Indirizzo a a cui punta questo link';
$messages['link_description_help'] = 'Breve descrizione del link';
$messages['link_feed_help'] = 'E\' possibile linkare feed di tipo  RSS o Atom';
$messages['link_category_help'] = 'Selezionare una delle categorie di link';
$messages['error_adding_link'] = 'Si e verificato un errore durante l\'aggiunta del nuovo link. Verifica le informazioni inserite e riprovare';
$messages['error_invalid_url'] = 'L\'indirizzo non è corretto';
$messages['link_added_ok'] = 'Link "%s" aggiunto';

// update link
$messages['error_updating_link'] = 'Si e verificato un errore durante la modifica del link. Verifica le informazioni inserite e riprovare';
$messages['error_invalid_url'] = 'L\'indirizzo non è corretto';
$messages['error_fetching_link'] = 'Errore durante la lettura del link';
$messages['link_updated_ok'] = 'Link "%s" modificato';

// link categories
$messages['links'] = 'Link';
$messages['error_invalid_link_category_id'] = 'L\'identificativo della categoria del link non è corretto o non è stata selezionata nessuna categoria';
$messages['error_links_in_link_category'] = 'La categoria "%s" è usata da qualche link. Modifica i link quindi riprova';
$messages['error_removing_link_category'] = 'E\' avvenuto un errore durante la rimozione della categoria "%s"';
$messages['link_category_deleted_ok'] = 'La categoria "%s" è stata rimossa';
$messages['link_categories_deleted_ok'] = '%s categorie rimosse';
$messages['error_removing_link_category2'] = 'E\' avvenuto un errore durante la rimozione della categoria con identificativo "%s"';

// new link category
$messages['link_category_name_help'] = 'Nome per questa categoria di link';
$messages['error_adding_link_category'] = 'E\' avvenuto un errore durante l\' aggiunta della categoria';
$messages['link_category_added_ok'] = 'La categoria "%s" è stata aggiunta';

// edit link category
$messages['error_updating_link_category'] = 'E\' avvenuto un errore durante l\'aggiunta della categoria . Controlla i dati e riprova';
$messages['link_category_updated_ok'] = 'Categoria "%s" aggiornata con successo';
$messages['error_fetching_link_category'] = 'E\' avvenuto un errore durante la lettura della categoria';

// custom fields
$messages['type'] = 'Tipo';
$messages['hidden'] = 'Nascosto';
$messages['fields_deleted_ok'] = '%s campi personalizzati eliminati con successo';
$messages['field_deleted_ok'] = 'Il campo personalizzato "%s" è stato cancellato';
$messages['error_deleting_field'] = 'E\' avvenuto un errore durante la cancellazione del campo personalizzato "%s"';
$messages['error_deleting_field2'] = 'E\' avvenuto un errore durante l\'eliminazione del campo personalizzato "%s"';
$messages['error_incorrect_field_id'] = 'L\'id del campo personalizzato non è valido';

// new custom field
$messages['field_name_help'] = 'Identificativo che verrà utilizzato nell\'articolo per riferirsi al valore di questo campo.';
$messages['field_description_help'] = 'Breve descrizione del campo, che verrà mostrata durante l\'aggiunta o la modifica degli articoli.';
$messages['field_type_help'] = 'Seleziona uno dei tipi di campo';
$messages['field_hidden_help'] = 'Se un campo è nascosto, non verrà mostrato durante l\'edizione o la modifica dell\'articolo. Questa caratteristica è utilizzata principalmente dai plugin.';
$messages['error_adding_custom_field'] = 'E\' avvenuto un errore durante l\'inserimento del campo personalizzato. Controlla i dati e riprova.';
$messages['custom_field_added_ok'] = 'Campo personalizzato "%s" inserito con successo';
$messages['text_field'] = 'Campo di testo';
$messages['text_area'] = 'Area di testo';
$messages['checkbox'] = 'Checkbox';
$messages['date_field'] = 'Campo data';

// edit custom field
$messages['error_fetching_custom_field'] = 'E\' avvenuto un errore durante la lettura del campo personalizzato';
$messages['error_updating_custom_field'] = 'E\' avvenuto un errore durante l\'aggiornamento del campo personalizzato. Controlla i dati e riprova.';
$messages['custom_field_updated_ok'] = 'Campo personalizzato "%s" aggiornato';

// resources
$messages['root_album'] = 'Album principale';
$messages['num_resources'] = 'Numero di risorse';
$messages['total_size'] = 'Dimensione totale';
$messages['album'] = 'Album';
$messages['error_incorrect_album_id'] = 'L\'identificativo del album non è corretto';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'pLog non è riuscito a creare le cartelle necessarie per le risorse. Ci sono diversi motivi possibili, in particolare, PHP potrebbe essere configurato in modalità sicura (safe mode), oppure il tuo utente potrebbe non avere i permessi per crearle. Puoi comunque provare ad effettuare l\'operazione manualmente, creando le seguenti cartelle: <br/><br/>%s<br/><br/>Se queste cartelle esistono già, controlla che siano leggibili e scrivibili dall\'utente che esegue il server web';
$messages['items_deleted_ok'] = '%s elementi cancellati con successo';
$messages['error_album_has_children'] = 'L\'album "%s" ha sottoelementi. Modifica l\'album e riprova';
$messages['item_deleted_ok'] = 'Elemento "%s" eliminato con successo';
$messages['error_deleting_album'] = 'E\' avvenuto un errore durante la cancellazione dell\'album "%s"';
$messages['error_deleting_album2'] = 'E\' avvenuto un errore durante la cancellazione dell\'album con id "%s"';
$messages['error_deleting_resource'] = 'E\' avvenuto un errore durante la cancellazione della risorsa "%s"';
$messages['error_deleting_resource2'] = 'TE\' avvenuto un errore durante la cancellazione della risorsa con id "%s"';
$messages['error_no_resources_selected'] = 'Non hai selezionato alcun elemento da cancellare';
$messages['resource_deleted_ok'] = 'Risorsa "%s" cancellata con successo';
$messages['album_deleted_ok'] = 'Album "%s" cancellato con successo';
$messages['add_resource'] = 'Aggiungi risorsa';
$messages['add_resource_preview'] = 'Aggiungi anteprima';
$messages['add_resource_medium'] = 'Aggiungi anteprima media';
$messages['add_album'] = 'Aggiungi album';

// new album
$messages['album_name_help'] = 'Nome breve per l\'album';
$messages['parent'] = 'Album superiore';
$messages['no_parent'] = 'Nessun album superiore';
$messages['parent_album_help'] = 'Usa questa funzione per avere album annidati all\'interno di altri, per organizzare meglio i tuoi file';
$messages['album_description_help'] = 'Descrizione estesa del contenuto dell\'album';
$messages['error_adding_album'] = 'E\' avvenuto un errore durante l\'inserimento del nuovo album. Controlla i dati e riprova.';
$messages['album_added_ok'] = 'Album "%s" aggiunto con successo';

// edit album
$messages['error_incorrect_album_id'] = 'L\'identificativo dell\'album non è corretto';
$messages['error_fetching_album'] = 'E\' avvenuto un errore durante la lettura dell\'album';
$messages['error_updating_album'] = 'E\' avvenuto un errore durante l\'aggiornamento dell\'album. Controlla i dati e riprova.';
$messages['album_updated_ok'] = 'Album "%s" aggiornato con successo';
$messages['show_album_help'] = 'Se disabilitato, l\'album non verrà mostrato nella lista degli album disponibili in questo blog';

// new resource
$messages['file'] = 'File';
$messages['resource_file_help'] = 'File che verranno aggiunti al blog corrente. Usa il link "Aggiungi campo" per caricare più un file allo stesso tempo';
$messages['add_field'] = 'Aggiungi campo';
$messages['resource_description_help'] = 'Descrizione estesa del contenuto del file';
$messages['resource_album_help'] = 'Seleziona l\'album al quale questo file verrà aggiunto';
$messages['error_no_resource_uploaded'] = 'Non hai selezionato il file da caricare';
$messages['resource_added_ok'] = 'Risorsa "%s" inserita con successo';
$messages['error_resource_forbidden_extension'] = 'Il file non è stato aggiunto in quanto è di un tipo non ammesso (estensione vietata)';
$messages['error_resource_too_big'] = 'Il file non è stato aggiunto in quanto troppo grande';
$messages['error_uploads_disabled'] = 'Il file non è stato aggiunto in quanto gli upload sono stati disabilitati';
$messages['error_quota_exceeded'] = 'Il file non è stato aggiunto in quanto lo spazio disponibile per le risorse è stato superato';
$messages['error_adding_resource'] = 'E\' avvenuto un errore nell\'aggiunta della risorsa';

// edit resource
$messages['editResource'] = 'Modifica risorsa';
$messages['resource_information_help'] = 'Alcune informazioni sul file';
$messages['information'] = 'Informazioni';
$messages['size'] = 'Dimensione';
$messages['format'] = 'Formato';
$messages['dimensions'] = 'Dimensioni';
$messages['bits_per_sample'] = 'Bit per campione (bps)';
$messages['sample_rate'] = 'Frequenza di campionamento';
$messages['number_of_channels'] = 'Numero di canali';
$messages['legnth'] = 'Lunghezza';
$messages['thumbnail_format'] = 'Miniatura';
$messages['regenerate_preview'] = 'Rigenera l\'anteprima';
$messages['error_fetching_resource'] = 'E\' avvenuto un errore durante la lettura della risorsa';
$messages['error_updating_resource'] = 'E\' avvenuto un errore durante l\'aggiornamento della risorsa';
$messages['resource_updated_ok'] = 'Risorsa "%s" aggiornata con successo';

// blog settings
$messages['blog_link'] = 'Link al blog';
$messages['blog_link_help'] = 'Link permanente del blog';
$messages['blog_name_help'] = 'Titolo del blog';
$messages['blog_description_help'] = 'Descrizione estesa del blog';
$messages['language'] = 'Lingua';
$messages['blog_language_help'] = 'Lingua usata per la visualizzazione dei testi del blog, sia nella parte pubblica che in quella amministrativa';
$messages['max_main_page_items'] = 'Numero di elementi nella pagina principale';
$messages['max_main_page_items_help'] = 'Numero di articoli da mostrare contemporaneamente nella pagina principale del blog';
$messages['max_recent_items'] = 'Numero di elementi recenti';
$messages['max_recent_items_help'] = 'Numero massimo di articoli che verranno mostrati come recenti nella pagina principale';
$messages['template'] = 'Cornice';
$messages['choose'] = 'Scegli';
$messages['blog_template_help'] = 'Cornice da usare per la presentazione dei contenuti del blog. La lista include le cornici globali e tutte le cornici speciali installate solo per questo blog.';
$messages['use_read_more'] = 'Usa il link "continua..." negli articoli';
$messages['use_read_more_help'] = 'Se abilitato, solamente quanto scritto nella casella "Testo" verrà mostrato nella pagina principale. Per visualizzare anche il "Testo esteso", sarà necessario cliccare sul link "continua...", che sarà aggiunto ad ogni articolo';
$messages['enable_wysiwyg'] = 'Abilita l\'editor visuale per gli articoli';
$messages['enable_wysiwyg_help'] = 'Abilita un potente editor visuale del codice HTML. L\'editor funziona con Internet Explorer 5.5 o superiore o con Mozilla 1.3 o superiore';
$messages['enable_comments'] = 'Abilita i commenti in maniera predefinita';
$messages['enable_comments_help'] = 'Abilita i commenti in tutti gli articoli in maniera predefinita. I commenti possono comunque essere abilitati e disabilitati per i singoli articoli, alla loro creazione o modifica';
$messages['show_future_posts'] = 'Mostra gli articoli nel futuro nel calendario';
$messages['show_future_posts_help'] = 'Decide se gli articoli che hanno una data nel futuro devono apparire nel calendario ed essere visibili agli utenti';
$messages['comments_order'] = 'Ordine dei commenti';
$messages['comments_order_help'] = 'Ordine nel quale i commenti devono apparire nella pagina principale';
$messages['oldest_first'] = 'I più vecchi in cima';
$messages['newest_first'] = 'I più recenti in cima';
$messages['categories_order'] = 'Ordine delle categorie';
$messages['categories_order_help'] = 'Ordine nel quale le categorie devono apparire nella pagina principale';
$messages['most_recent_updated_first'] = 'Quelle con modifiche più recenti in cima';
$messages['alphabetical_order'] = 'In ordine alfabetico';
$messages['reverse_alphabetical_order'] = 'In ordine alfabetico inverso';
$messages['most_articles_first'] = 'Quelle con più articoli in cima';
$messages['link_categories_order'] = 'Ordine delle categorie di link';
$messages['link_categories_order_help'] = 'Ordine nel quale le categorie dei link devono apparire nella pagina principale';
$messages['most_links_first'] = 'Quelle con più link in cima';
$messages['most_links_last'] = 'Quelle con più link in fondo';
$messages['time_offset'] = 'Fuso orario';
$messages['time_offset_help'] = 'Numero di ore da aggiungere dinamicamente ad ogni data ed ora nel blog';
$messages['close'] = 'Chiudi';
$messages['select'] = 'Seleziona';
$messages['error_updating_settings'] = 'E\' avvenuto un errore durante l\'aggiornamento delle impostazioni del blog. Controlla i dati e riprova.';
$messages['error_invalid_number'] = 'Il numero non è corretto';
$messages['error_incorrect_time_offset'] = 'Il fuso orario non è valido';
$messages['blog_settings_updated_ok'] = 'Impostazioni del blog aggiornate con successo';
$messages['hours'] = 'Ore';

// user settings
$messages['username_help'] = 'Nome utente pubblico. Non è possibile modificarlo.';
$messages['full_name'] = 'Nome completo';
$messages['full_name_help'] = 'Nome completo';
$messages['password_help'] = 'Scrivi una password e confermala, oppure lascia vuoto per lasciare invariata quella corrente';
$messages['confirm_password'] = 'Conferma la password';
$messages['email'] = 'Email';
$messages['email_help'] = 'Indirizzo email al quale spedire le modifiche';
$messages['bio'] = 'Informazioni su di te';
$messages['bio_help'] = 'Puoi scrivere qui una descrizione più estesa di te stesso';
$messages['picture'] = 'Immagine';
$messages['user_picture_help'] = 'Seleziona un\'immagine da quelle caricate su questo blog come immagine personale';
$messages['error_invalid_password'] = 'La password non è corretta. Controlla che non sia troppo corta';
$messages['error_passwords_dont_match'] = 'Le password non coincidono';
$messages['error_incorrect_email_address'] = 'L\'indirizzo email non è corretto';
$messages['error_updating_user_settings'] = 'E\' avvenuto un errore durante l\'aggiornamento delle impostazioni. Controlla i dati e riprova';
$messages['user_settings_updated_ok'] = 'Impostazioni utente aggiornate con successo';
$messages['resource'] = 'Risorsa';

// plugin centre
$messages['identifier'] = 'Identificativo';
$messages['error_plugins_disabled'] = 'Spiacente, i plugin sono disabilitati';

// blog users
$messages['revoke_permissions'] = 'Annulla i permessi';
$messages['error_no_users_selected'] = 'Non è stato selezionato alcun utente';
$messages['user_removed_from_blog_ok'] = 'L\'utente "%s" non ha più l\'autorizzazione ad accedere a questo blog';
$messages['users_removed_from_blog_ok'] = '%s utenti non hanno più l\'autorizzazione ad accedere a questo blog';
$messages['error_removing_user_from_blog'] = 'E\' avvenuto un problema durante la rimozione dei diritti di accesso a questo blog all\'utente "%s"';
$messages['error_removing_user_from_blog2'] = 'E\' avvenuto un problema durante la rimozione dei diritti di accesso a questo blog agli utenti con gli identificativi "%s"';

// new blog user
$messages['new_blog_username_help'] = 'Username dell\'utente al quale vuoi concedere l\'autorizzazione all\'accesso a questo blog. I nuovi utenti avranno accesso solamente alle sezioni "Gestisci" e "Risorse.';
$messages['send_notification'] = 'Invia la notifica';
$messages['send_user_notification_help'] = 'Invia una notifica via email a questo utente';
$messages['notification_text'] = 'Testo della notifica';
$messages['notification_text_help'] = 'Testo da includere nel messaggio di notifica';
$messages['error_adding_user'] = 'E\' avvenuto un errore durante la concessione delle autorizzazioni all\'utente. Controlla i dati e riprova';
$messages['error_empty_text'] = 'E\' necessario specificare del testo';
$messages['error_adding_user'] = 'E\' avvenuto un errore durante l\'inserimento dell\'utente. Controlla i dati e riprova.';
$messages['error_invalid_user'] = 'Lo username "%s" non è valido o non esiste';
$messages['user_added_to_blog_ok'] = 'L\'utente "%s" ha ora l\'autorizzazione ad accedere a questo blog';

// blog templates
$messages['error_no_templates_selected'] = 'Nessuna cornice selezionata';
$messages['error_template_is_current'] = 'La cornice "%s" non può essere selezionata, in quanto è quella corrente';
$messages['error_removing_template'] = 'E\' avvenuto un errore durante la cancellazione della cornice "%s"';
$messages['template_removed_ok'] = 'La cornice "%s" è stata cancellata';
$messages['templates_removed_ok'] = '%s cornici cancellate';

// new blog template
$messages['template_installed_ok'] = 'La cornice "%s" è stata aggiunta';
$messages['error_installing_template'] = 'E\' avvenuto un errore durante l\'installazione della cornice "%s"';
$messages['error_missing_base_files'] = 'Mancano alcuni file della cornice';
$messages['error_add_template_disabled'] = 'Nuove cornici non possono essere aggiunte, in quanto questa funzionalità è stata disabilitata in questo sito';
$messages['error_must_upload_file'] = 'Non è stato caricato un pacchetto con una cornice';
$messages['error_uploads_disabled'] = 'Gli upload sono stati disabilitati in questo sito';
$messages['error_no_new_templates_found'] = 'Nessuna nuova cornice trovata';
$messages['error_template_not_inside_folder'] = 'I file della cornice devono essere contenuti in una cartella con lo stesso nome della cornice';
$messages['error_missing_base_files'] = 'Alcuni dei file di base della cornice sono mancanti';
$messages['error_unpacking'] = 'E\' avvenuto un errore durante la decompressione del file';
$messages['error_forbidden_extensions'] = 'La cornice contiene dei file con estensioni non permesse';
$messages['error_creating_working_folder'] = 'E\' avvenuto un errore durante la creazione di una cartella temporanea per la decompressione della cornice';
$messages['error_checking_template'] = 'E\' avvenuto un errore durante il controllo della cornice: %s';
$messages['template_package'] = 'Pacchetto della cornice';
$messages['blog_template_package_help']  = '
Utilizza questo modulo per caricare una nuova cornice, che sarà resa disponibile esclusivamente a questo blog. Se non fosse possibile caricare un pacchetto contenente una cornice mediante questo modulo, carica i file manualmente, e posizionali in <b>%s</b>, cioè nella cartella che contiene le cornici del tuo blog. Quindi clicca sul pulsante "<b>Cerca cornici</b>". pLog effettuerà una ricerca nella cartella, ed aggiungerà automaticamente tutte le cornici trovate.';
$messages['scan_templates'] = 'Cerca cornici';

// site users
$messages['user_status_active'] = 'Attivo';
$messages['user_status_disabled'] = 'Disabilitato';
$messages['user_status_all'] = 'Qualunque';
$messages['user_status_unconfirmed'] = 'Non confermato';
$messages['error_invalid_user2'] = 'L\'utente con identificativo "%s" non esiste';
$messages['error_deleting_user'] = 'E\' avvenuto un errore durante la disabilitazione dell\'utente "%s"';
$messages['user_deleted_ok'] = 'Utente "%s" disabilitato';
$messages['users_deleted_ok'] = '%s utenti disabilitati';

// create user
$messages['user_added_ok'] = 'Utente "%s" inserito con successo';
$messages['error_incorrect_username'] = 'Lo username inserito non è corretto oppure è già in uso';
$messages['user_status_help'] = 'Stato corrente per questo utente:';
$messages['user_blog_help'] = 'Blog al quale assegnare inizialmente l\'utente';
$messages['none'] = 'Nessuno';

// edit user
$messages['error_invalid_user'] = 'L\'identificativo dell\'utente non è corretto o l\'utente non esiste';
$messages['error_updating_user'] = 'E\' avvenuto un errore durante l\'aggiornamento delle impostazioni dell\'utente. Controlla i dati e riprova.';
$messages['blogs'] = 'Blog';
$messages['user_blogs_help'] = 'Blog che questo utente possiede al momento, o ai quali ha accesso';
$messages['site_admin'] = 'Amministratore';
$messages['site_admin_help'] = 'Selezionare, se questo utente ha privilegi di amministratore e ha i diritti di accesso all\'area amministrativa e di effettuare le operazioni di amministrazione';
$messages['user_updated_ok'] = 'Utente "%s" aggiornato con successo';

// site blogs
$messages['blog_status_all'] = 'Qualunque';
$messages['blog_status_active'] = 'Attivo';
$messages['blog_status_disabled'] = 'Disabilitato';
$messages['blog_status_unconfirmed'] = 'Non confermato';
$messages['owner'] = 'Proprietario';
$messages['quota'] = 'Quota';
$messages['bytes'] = 'byte';
$messages['error_no_blogs_selected'] = 'Nessun blog è stato selezionato per la disabilitazione';
$messages['error_blog_is_default_blog'] = 'Il blog "%s" non può essere disabilitato in quanto è stato selezionato come blog predefinito';
$messages['blog_deleted_ok'] = 'Il blog "%s" è stato disabilitato';
$messages['blogs_deleted_ok'] = '%s blog disabilitati';
$messages['error_deleting_blog'] = 'E\' avvenuto un errore durante la disabilitazione del blog "%s"';
$messages['error_deleting_blog2'] = 'E\' avvenuto un errore durante la disabilitazione del blog con identificativo "%s"';

// create blog
$messages['error_adding_blog'] = 'E\' avvenuto un errore durante l\'inserimento del blog. Controlla i dati e riprova.';
$messages['blog_added_ok'] = 'Il blog "%s" è stato aggiunto';

// edit blog
$messages['blog_status_help'] = 'Stato del blog';
$messages['blog_owner_help'] = 'Amministratore del blog, cioè l\'utente che ha il controllo completo delle impostazioni del blog';
$messages['users'] = 'Utenti';
$messages['blog_quota_help'] = 'Spazio su disco massimo per le risorse in byte. Imposta a 0 o lascia vuoto per far usare al blog lo spazio su disco generale';
$messages['blog_users_help'] = 'Utenti che hanno accesso a questo blog. Seleziona un utente da sinistra e spostalo nella lista di destra per dargli accesso al blog';
$messages['edit_blog_settings_updated_ok'] = 'Blog "%s" aggiornato con successo';
$messages['error_updating_blog_settings'] = 'E\' avvenuto un errore durante l\'aggiornamento del blog "%s"';
$messages['error_incorrect_blog_owner'] = 'L\'utente selezionato come amministratore del blog non è corretto';
$messages['error_fetching_blog'] = 'E\' avvenuto un errore durante la lettura del blog';
$messages['error_updating_blog_settings2'] = 'E\' avvenuto un errore durante l\'aggiornamento del blog. Controlla i dati e riprova.';
$messages['add_or_remove'] = 'Aggiungi o rimuovi utenti';

// site locales
$messages['locale'] = 'Lingua';
$messages['locale_encoding'] = 'Codifica';
$messages['locale_deleted_ok'] = 'Lingua "%s" cancellata';
$messages['error_no_locales_selected'] = 'Non è stata selezionata alcuna lingua da cancellare';
$messages['error_deleting_only_locale'] = 'La lingua non può essere cancellata perché è l\'ultima rimasta nel sistema';
$messages['locales_deleted_ok']= '%s lingue cancellate';
$messages['error_deleting_locale'] = 'E\' avvenuto un errore durante la cancellazione della lingua "%s"';
$messages['error_locale_is_default'] = 'La lingua "%s" non può essere cancellata in quanto è stata selezionata come lingua predefinita per i nuovi blog';

// add locale
$messages['error_invalid_locale_file'] = 'Il file della lingua non è valido';
$messages['error_no_new_locales_found'] = 'Non sono state trovate nuove lingue';
$messages['locale_added_ok'] = 'Lingua "%s" inserita con successo';
$messages['error_saving_locale'] = 'E\' avvenuto un errore durante il salvataggio della nuova lingua';
$messages['scan_locales'] = 'Cerca lingue';
$messages['add_locale_help'] = 'Utilizza questo modulo per caricare una nuova lingua. Se non fosse possibile caricare un file mediante questo modulo, caricalo manualmente, e posizionalo in <b>%s</b>, cioè nella cartella che contiene i file di lingua. Quindi clicca sul pulsante "<b>Cerca lingue</b>". pLog effettuerà una ricerca nella cartella, ed aggiungerà automaticamente tutte le lingue trovate.';

// site templates
$messages['error_template_is_default'] = 'La cornice "%s" non può essere rimossa in quanto è quella predefinita per i nuovi blog';

// add template
$messages['global_template_package_help'] = '
Utilizza questo modulo per caricare una nuova cornice, che sarà resa disponibile a tutti i blog nel sito. Se non fosse possibile caricare un pacchetto contenente una cornice mediante questo modulo, carica i file manualmente, e posizionali in <b>%s</b>, cioè nella cartella che contiene le cornici disponibili a tutti i blog. Quindi clicca sul pulsante "<b>Cerca cornici</b>". pLog effettuerà una ricerca nella cartella, ed aggiungerà automaticamente tutte le cornici trovate.';

// global settings
$messages['site_config_saved_ok'] = 'Le impostazioni del sito sono state salvate';
$messages['error_saving_site_config'] = 'E\' avvenuto un errore durante il salvataggio delle impostazioni del sito';
/// general settings
$messages['help_comments_enabled'] = 'Abilita automaticamente i commenti per i nuovi blog. [Predefinito = Sì]';
$messages['help_beautify_comments_text'] = 'Se abilitato, i commenti aggiunti dagli utenti verranno formattati aggiungendo i marcatori di paragrafo e rendendo cliccabili gli URL [Predefinito = Sì]';
$messages['help_temp_folder'] = 'Cartella che pLog può usare per scrivere i propri dati temporanei, come le cornici compilate, ecc. Utilizza una cartella al di fuori di quelle accessibili dal server web, per aumentare la sicurezza. [Predefinito = ./tmp]';
$messages['help_base_url'] = 'URL di base dove è installato questo blog';
$messages['help_subdomains_enabled'] = 'Abilita o disabilita i sottodomini. Consulta la documentazione per avere maggiori informazioni su questo argomento [Predefinito = No]';
$messages['help_subdomains_base_url'] = 'Se i sottodomini sono abilitati, questo URL di base è utilizzato al posto del base_url. Per generare i link al blog, usa {blogname} per il nome del blog, e {username} per il nome dell\'utente a cui il blog appartiene (per esempio: http://{blogname}.yourdomain.com)';
$messages['help_include_blog_id_in_url'] = 'Significativo solamente se sono abilitati sia i sottodomini che gli URL "normali". Forza gli URL generati internamente ad omettere il parametro "blogId". Non cambiare questa impostazione se non ne comprendi a pieno le conseguenze [Predefinito = Sì]';
$messages['help_script_name'] = 'Modifica questa impostazione se desideri rinominare index.php [Predefinito = index.php]';
$messages['help_show_posts_max'] = 'Numero massimo di articoli mostrati nella pagina principale. Significativo solo per i nuovi blog [Predefinito = 15]';
$messages['help_recent_posts_max'] = 'Numero massimo di articoli recenti mostrati nella pagina principale. Significativo solo per i nuovi blog [Predefinito = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Abilita la funzionalità che permette di salvare le bozze utilizzando Javascript e XmlHttpRequest [Predefinito = Sì]';
$messages['help_locale_folder'] = 'Cartella dove sono contenuti i file di lingua [Predefinito = ./locale]';
$messages['help_default_locale'] = 'Lingua predefinita per i nuovi blog [Predefinito = en_UK]';
$messages['help_default_blog_id'] = 'Blog da mostrare se non ne viene esplicitamente specificato uno [Predefinito = 1]';
$messages['help_default_time_offset'] = 'Fuso orario predefinito per i nuovi blog [Predefinito = 0]';
$messages['help_html_allowed_tags_in_comments'] = '
Lista, separata da spazi, dei tag HTML che sono permessi nei commenti [Predefinito = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'Abilita la caratteristica che permette di salvare i referrer nel database. Imposta a No (disabilitato) per aumentare le prestazioni [Predefinito = Sì]';
$messages['help_show_more_enabled'] = 'Abilita la caratteristica "Continua..." in modo predefinito per i nuovi blog [Predefinito = Sì]';
$messages['help_update_article_reads'] = 'Abilita l\' aggiornamento del contatore del numero di volte in cui l\'articolo è stato letto. Imposta a No (disabilitato) per aumentare le prestazioni [Predefinito = Sì]';
$messages['help_update_cached_article_reads'] = 'Abilita l\' aggiornamento del contatore del numero di volte in cui l\'articolo è stato letto, anche nel caso nel quale il caching è stato abilitato [Predefinito = Sì]';
$messages['help_xmlrpc_ping_enabled'] = 'Abilita la spedizione di ping XMLRPC a siti che supportano questa caratteristica [Predefinito = Sì]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Abilita in modo predefinito questa caratteristica quando un articolo viene postato o aggiornato [Predefinito = Sì]';
$messages['help_xmlrpc_ping_hosts'] = 'URL che puntano alle interfacce ping XMLRPC dei siti che li supportano. Inserire un URL per riga [Predefinito = http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = 'Abilita la ricezione di trackback in ingresso [Predefinito = Sì]';
$messages['help_htmlarea_enabled'] = 'Abilita l\'editor visuale degli articoli per i nuovi blog in maniera predefinita [Predefinito = Sì]';
$messages['help_plugin_manager_enabled'] = 'Abilita i plugin [Predefinito = Sì]';
$messages['help_minimum_password_length'] = 'Lunghezza minima delle password [Predefinito = 4]';
$messages['help_xhtml_converter_enabled'] = 'Se abilitato, pLog tenterà di convertire il codice HTML in codice XHTML corretto [Predefinito = Sì]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'Se abilitato, pLog tenterà di convertire il codice HTML in codice XHTML in modo più aggressivo. Questo tuttavia potrà generare errori [Predefinito = No]';
$messages['help_session_save_path'] = 'Usa questa impostazione per cambiare la cartella nella quale pLog tiene i dati della sessione, mediante la funzione di PHP session_save_path(). Assicurati che la cartella sia scrivibile dal server. Lascia vuoto per utilizzare la cartella delle sessioni predefinita di PHP [Predefinito = (vuoto)]';
// summary settings
$messages['help_summary_page_show_max'] = 'Numero di elementi che verranno mostrati nella pagina di riepilogo. Questo parametro controlla tutte le lista nella pagina di sommario (articoli recenti, blog più attivi, ecc.) [Predefinito = 10]';
$messages['help_summary_blogs_per_page'] = 'Numero di blog per pagina nella sezione "Lista dei blog" [Predefinito = 25]';
$messages['help_forbidden_usernames'] = 'Lista di nomi utente, separati da spazi, che non possono essere registrati [Predefinito = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = 'Permetti solo un blog per indirizzo email [Predefinito = No]';
$messages['help_summary_show_agreement'] = 'Mostra agli utenti un testo con le condizioni da accettare prima di completare il processo di registrazione [Predefinito = Sì]';
$messages['help_need_email_confirm_registration'] = 'Obbliga gli utenti a confermare la loro registrazione, cliccando un link contenuto in un messaggio email inviato al loro account [Predefinito = Sì]';
$messages['help_summary_disable_registration'] = 'Disabilita la possibilità di registrare nuovi blog in questo sito [Predefinito = No]';
// templates
$messages['help_template_folder'] = 'Cartella dove vengono salvate le cornici [Predefinito = ./templates]';
$messages['help_default_template'] = 'Cornice predefinita per i nuovi blog [Predefinito = standard]';
$messages['help_users_can_add_templates'] = 'Permette agli utenti di caricare le proprie cornici [Predefinito = Sì]';
$messages['help_template_compile_check'] = 'Se abilitato, Smarty controllerà ogni volta se i file della cornice sono stati modificati, e, se sì, userà la nuova versione. Disabilitare per aumentare le prestazioni. [Predefinito = Sì]';
$messages['help_template_cache_enabled'] = 'Abilita la cache delle cornici. Se abilitata, la versione in cache della cornice verrà utilizzata quando possibile. Non sarà necessario estrarre dati dal database, e le cornici non dovranno venire ricompilate [Predefinito = Sì]';
$messages['help_template_cache_lifetime'] = 'Tempo di validità in secondi della cache. Imposta a -1 per forzare la cache a non scadere mai. Se impostato a 0 la cache verrà disabilitata, per ottenere lo stesso effetto è tuttavia preferibile impostare l\'opzione template_cache_enabled a "No" [Predefinito = -1]';
$messages['help_template_http_cache_enabled'] = 'Abilita il supporto per le richieste HTTP condizionate. Se abilitate, pLog prenderà in considerazione l\'intestazione HTTP "If-Modified-Since", e spedirà il contenuto solo se strettamente necessario. Abilita per risparmiare banda. [Predefinito = No]';
$messages['help_allow_php_code_in_templates'] = 'Permetti di incorporare codice PHP nelle cornici Smarty, racchiudendolo in blocchi {php}...{/php} [Predefinito = No]';
// urls
$messages['help_request_format_mode'] = 'Seleziona uno dei formati URL disponibili. Se utilizzi URL personalizzati, imposta le opzioni qui sotto [Predefinito = Normale]';
$messages['plain'] = 'Normale';
$messages['search_engine_friendly'] = 'Amichevole ai motori di ricerca';
$messages['custom_url_format'] = 'URL personalizzati';
$messages['help_permalink_format'] = 'Formato per i link permanenti (permalink) quanto vengono utilizzati URL personalizzati [Predefinito = /blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = 'Formato dei link alle categorie quando vengono utilizzati URL personalizzati [Predefinito = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'Formato dei link ai blog quando vengono utilizzati URL personalizzati [Predefinito = /blog/{blogname}$]';
$messages['help_archive_link_format'] = 'Formato dei link agli archivi quando vengono utilizzati URL personalizzati  [Predefinito = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'Formato dei link agli articoli postati da un certo utente quando vengono utilizzati URL personalizzati [Predefinito = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'Formato dei link alla pagina dei trackback quando vengono utilizzati URL personalizzati [Predefinito = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'Formato dei link alle pagine di cornice statiche personalizzate quando vengono utilizzati URL personalizzati [Predefinito = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'Formato dei link agli album delle risorse quando vengono utilizzati URL personalizzati  [Predefinito = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'Formato dei link alle pagine delle risorse quando vengono utilizzati URL personalizzati  [Predefinito = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'Formato dei link alle anteprime delle risorse quando vengono utilizzati URL personalizzati  [Predefinito = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'Formato dei link alle anteprime di medie dimensioni delle risorse quando vengono utilizzati URL personalizzati  [Predefinito = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'Formato dei link ai file quando vengono utilizzati URL personalizzati  [Predefinito = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = 'Durante il controllo dell\'indirizzo email, esegui alcuni controlli di base per vedere se esiste un record MX nel dominio specificato, e, in tal caso, se la casella è effettivamente valida [Predefinito = No]';
$messages['help_email_service_enabled'] = 'Abilita la spedizione di email [Predefinito = Sì]';
$messages['help_post_notification_source_address'] = 'Indirizzo email che compare nel campo "Da:" ("From:") nelle email spedite da pLog [Predefinito = noreply@your.host.com]';
$messages['help_email_service_type'] = 'Sistema da usare per la spedizione delle email [Predefinito = PHP]';
$messages['help_smtp_host'] = 'Se viene utilizzato SMTP per la spedizione delle email, imposta qui il server SMTP che verrà utilizzato per la spedizione [Predefinito = (vuoto)]';
$messages['help_smtp_port'] = 'Se il server SMTP utilizza una porta differente dalla 25, configura qui il suo valore [Predefinito = (vuoto)]';
$messages['help_smtp_use_authentication'] = 'Rispondi Sì se il server richiede l\'autenticazione di base [Predefinito = No]';
$messages['help_smtp_username'] = 'Se il server SMTP richiede autenticazione, imposta qui il nome utente [Predefinito = (vuoto)]';
$messages['help_smtp_password'] = 'Se il server SMTP richiede autenticazione, imposta qui la password [Predefinito = (vuoto)]';
// helpers
$messages['help_path_to_tar'] = 'Percorso al comando "tar", necessario per scompattare i pacchetti cornice in formato .tar.gz o tar.bz2 [Predefinito = /bin/tar]';
$messages['help_path_to_gzip'] = 'Percorso al comando "gzip", necessario per scompattare i pacchetti cornice in formato .tar.gz [Predefinito = /bin/gzip]';
$messages['help_path_to_bz2'] = 'Percorso al comando "bzip2", necessario per scompattare i pacchetti cornice in formato .tar.bz2 [Predefinito = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = 'Percorso al comando "unzip", necessario per scompattare i pacchetti cornice in formato .zip [Predefinito = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'Usa lo zip fornito nativamente da PHP per scompattare gli archivi zip [Predefinito = No]';
// uploads
$messages['help_uploads_enabled'] = 'Abilita gli utenti a caricare file. Questo riguarda la sezione delle risorse e il caricamento di cornici personalizzate e lingue [Predefinito = Sì]';
$messages['help_maximum_file_upload_size'] = 'Dimensione massima del file in byte. Questo limite non può superare quello impostato per PHP [Predefinito = 2000000]';
$messages['help_upload_forbidden_files'] = 'Lista dei tipi di file che non possono essere caricati. E\' possibile usare \'*\' e \'?\' [Predefinito = *.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'Abilita l\'accesso ai blog mediante XMLRPC [Predefinito = No]';
$messages['help_rdf_enabled'] = 'Abilita la preparazione dei contenuti mediante Atom e RSS (syndication) [Predefinito = Sì]';
$messages['help_default_rss_profile'] = 'Versione predefinita di RSS o Atom da usare per la preparazione dei contenuti, quando non specificato diversamente [Predefinito = RSS 1.0]';
// security
$messages['help_security_pipeline_enabled'] = 'Abilita la pipeline relativa alla sicurezza e tutti i filtri connessi. Questo influenza anche i plugin che registrano nuovi filtri  [Predefinito = Sì]';
$messages['help_ip_address_filter_enabled'] = 'Abilita il filtro degli indirizzi IP. Per abilitare questa caratteristica è necessario abilitare anche la pipeline relativa alla sicurezza [Predefinito = Sì]';
$messages['help_content_filter_enabled'] = 'Abilita il filtro sui contenuti basato sulle espressioni regolari. Per abilitare questa caratteristica è necessario abilitare anche la pipeline relativa alla sicurezza [Predefinito = Sì]';
$messages['help_maximum_comment_size'] = 'Dimensione massima in byte che un commento può avere. Imposta a 0 per disabilitare questo controllo [Predefinito = 0]';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = 'Abilita il filtro Bayesiano per ottenere un filtraggio automatico dello spam [Predefinito = Sì]';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'Soglia massima prima della quale un commento può essere considerato spam [Predefinito = 0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'Soglia minima dopo la quale un articolo può essere considerato non spam [Predefinito = 0.2]';
$messages['help_bayesian_filter_min_length_token'] = 'Lunghezza minima di un simbolo affinché venga considerato significativo per il filtro Bayesiano [Predefinito = 3]';
$messages['help_bayesian_filter_max_length_token'] = 'Lunghezza massima di un simbolo affinché venga considerato significativo per il filtro Bayesiano [Predefinito = 100]';
$messages['help_bayesian_filter_number_significant_tokens'] = 'Numero di simboli significativi [Predefinito = 15]';
$messages['help_bayesian_filter_spam_comments_action'] = 'Cosa fare con i commenti classificati spam  [Predefinito = Conserva]';
$messages['keep_spam_comments'] = 'Conservali nel database, marcandoli come "Spam"';
$messages['throw_away_spam_comments'] = 'Cancellali senza salvarli';
// resources
$messages['help_resources_enabled'] = 'Abilita le risorse [Predefinito = Sì]';
$messages['help_resources_folder'] = 'Cartella dove le risorse sono salvate. Seleziona una cartella al di fuori del server, per aumentare la sicurezza [Predefinito = ./gallery]';
$messages['help_thumbnail_method'] = 'Metodo utilizzato per la generazione delle miniature. Se viene usato PHO, è necessario il supporto per GD [Predefinito = PHP]';
$messages['help_path_to_convert'] = 'Percorso del comando "convert" di ImageMagick. Obbligatorio se il metodo di creazione delle miniature è "ImageMagick" [Predefinito = /usr/bin/convert]';
$messages['help_thumbnail_format'] = 'Formato nel quale vengono salvate le miniature [Predefinito = Quello dell\'immagine]';
$messages['help_thumbnail_height'] = 'Altezza predefinita per le miniature piccole [Predefinito = 120]';
$messages['help_thumbnail_width'] = 'Larghezza predefinita per le miniature piccole [Predefinito = 120]';
$messages['help_medium_size_thumbnail_height'] = 'Altezza predefinita per le miniature [Predefinito = 480]';
$messages['help_medium_size_thumbnail_width'] = 'Larghezza predefinita per le miniature medie [Predefinito = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'Mantieni le proporzioni nella generazione delle anteprime. Se abilitato, le anteprime potrebbero essere di dimensioni maggiori di quanto specificato sopra, tuttavia la qualità è migliore [Predefinito = Sì]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'Permetti a pLog di usare solamente le funzioni di GD-1 [Predefinito = No]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'Algoritmo per lo smoothing delle miniature. Utilizzato solamente se il metodo per le miniature è GD [Predefinito = Sì]';
$messages['help_resources_quota'] = 'Spazio su disco massimo disponibile per i blog in byte (esempio: 5242880 Byte = 5MB). Impostare a 0 per non porre limite [Predefinito = 0]';
$messages['help_resource_server_http_cache_enabled'] = 'Abilita il supporto per le richieste HTTP condizionate, con intestazione "If-Modified-Since".. Abilita per migliorare il risparmio di banda [Predefinito = No]';
$messages['help_resource_server_http_cache_lifetime'] = 'Tempo in microsecondi per il quale i client devono usare la versione in cache delle risorse [Predefinito = 9999999]';
$messages['same_as_image'] = 'Come l\'immagine originale';

// search
$messages['help_search_engine_enabled'] = 'Abilita il motore di ricerca [Predefinito = Sì]';
$messages['help_search_in_custom_fields'] = 'Cerca nei campi personalizzati  [Predefinito = Sì]';
$messages['help_search_in_comments'] = 'Cerca nei commenti [Predefinito = Sì]';

// cleanup
$messages['purge'] = 'Pulisci';
$messages['cleanup_spam'] = 'Pulisci lo spam';
$messages['cleanup_spam_help'] = 'Tutti i commenti marcati dagli utenti come spam verranno eliminati. Non sarà possibile annullare l\'operazione, una volta cancellati';
$messages['spam_comments_purged_ok'] = 'Commenti marcati come spam cancellati';
$messages['cleanup_posts'] = 'Pulisci gli articoli';
$messages['cleanup_posts_help'] = 'Tutti gli articoli cancellati (marcati dagli utenti come "cancellati") verranno eliminati. Non sarà possibile annullare l\'operazione, una volta cancellati';
$messages['posts_purged_ok'] = 'Articoli cancellati';

/// summary ///
// front page
$messages['summary'] = 'Sommario';
$messages['register'] = 'Registrati';
$messages['summary_welcome'] = 'Benvenuto!';
$messages['summary_most_active_blogs'] = 'I blog più attivi';
$messages['summary_most_commented_articles'] = 'Gli articoli più commentati';
$messages['summary_most_read_articles'] = 'Gli articoli più letti';
$messages['password_forgotten'] = 'Dimenticato la password?';
$messages['summary_newest_blogs'] = 'I blog più recenti';
$messages['summary_latest_posts'] = 'Gli articoli più recenti';
$messages['summary_search_blogs'] = 'Cerca nei blog';

// blog list
$messages['updated'] = 'Aggiornato';
$messages['total_reads'] = 'tota';

// blog profile
$messages['blog'] = 'Blog';
$messages['latest_posts'] = 'Articoli recenti';

// registration
$messages['register_step0_title'] = 'Accettazione delle condizioni del servizio';
$messages['agreement'] = 'Accordo'; 
$messages['decline'] = 'Rifiuta';
$messages['accept'] = 'Accetta';
$messages['read_service_agreement'] = 'Leggi le condizioni di questo servizio, e clicca sul pulsante "Accetta" se sei d\'accordo';
$messages['register_step1_title'] = 'Crea un utente [1/4]';
$messages['register_step1_help'] = 'Per prima cosa, per avere un blog è necessario creare un utente. Questo utente sarà il proprietario del blog, ed avrà accesso a tutte le sue funzionalità.';
$messages['register_next'] = 'Avanti';
$messages['register_back'] = 'Indietro';
$messages['register_step2_title'] = 'Crea un blog [2/4]';
$messages['register_blog_name_help'] = 'Nome del nuovo blog';
$messages['register_step3_title'] = 'Seleziona una cornice [3/4]';
$messages['step1'] = 'Passo 1';
$messages['step2'] = 'Passo 2';
$messages['step3'] = 'Passo 3';
$messages['register_step3_help'] = 'Seleziona una delle cornici disponibili, che diventerà quella predefinita del tuo blog. Sarà sempre possibile cambiarla in seguito';
$messages['error_must_choose_template'] = 'E\' necessario selezionare una cornice';
$messages['select_template'] = 'Seleziona una cornice';
$messages['register_step5_title'] = 'Congratulazioni! [4/4]';
$messages['finish'] = 'Termina';
$messages['register_need_confirmation'] = 'Un messaggio di posta elettronica è stato spedito al tuo indirizzo email, per confermare l\'attivazione. Appena lo ricevi, clicca sul link che contiene, per poter iniziare a usare il tuo blog!';
$messages['register_step5_help'] = 'Congratulazioni! Il tuo nuovo utente e il tuo blog sono stati creati';
$messages['register_blog_link'] = 'Se vuoi dare un\'occhiata al tuo nuovo blog, usa questo link: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'Se preferisci scrivere un articolo subito, clicca qui per entrare nell\'<a href="admin.php">interfaccia di amministrazione</a>';
$messages['register_error'] = 'E\' avvenuto un errore durante l\'operazione';
$messages['error_registration_disabled'] = 'Spiacente, ma la creazione di nuovi blog è stata disabilitata in questo sito';
// registration article topic and text
$messages['register_default_article_topic'] = 'Congratulazioni!';
$messages['register_default_article_text'] = 'Se stai leggendo questo articolo, significa che il processo di registrazione è stato completato con successo: puoi cominciare ad usare il tuo blog!';
$messages['register_default_category'] = 'Generale';
// confirmation email
$messages['register_confirmation_email_text'] = 'Visita la seguente pagina per attivare il tuo blog:

%s

Ciao!';
$messages['error_invalid_activation_code'] = 'Spiacente, ma il codice di conferma non è valido';
$messages['blog_activated_ok'] = 'Congratulazioni! Il tuo nuovo utente ed il tuo blog sono stati convalidati con successo';
// forgot your password?
$messages['reset_password'] = 'Reimposta la tua password';
$messages['reset_password_username_help'] = 'Nome dell\'utente a cui reimpostare la password';
$messages['reset_password_email_help'] = 'Indirizzo email che è stato utilizzato per registrare questo utente';
$messages['reset_password_help'] = 'Usa questo form per reimpostare la password del tuo utente, nel caso te la fossi dimenticata. Inserisci il nome dell\'utente, di cui vorresti reimpostare la password, e l\'indirizzo email che è stato usato, per registrare l\'utente';
$messages['error_resetting_password'] = 'E\' avvenuto un errore durante l\'azzeramento della password. Controlla i dati e riprova';
$messages['reset_password_error_incorrect_email_address'] = 'L\'indirizzo email non è corretto, o non è l\'indirizzo usato per la registrazione di questo utente';
$messages['password_reset_message_sent_ok'] = 'Un messaggio con un link è stato inviato al tuo indirizzo di posta elettronica. Visita il link che contiene, per reimpostare la tua password';
$messages['error_incorrect_request'] = 'I parametri nell\'URL non sono corretti';
$messages['change_password'] = 'Imposta la nuova password';
$messages['change_password_help'] = 'Inserisci e conferma la tua nuova password';
$messages['new_password'] = 'Nuova password';
$messages['new_password_help'] = 'Inserisci qui la tua nuova password';
$messages['password_updated_ok'] = 'La password è stata modificata';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'Questa pagina ha un aspetto semplice e senza stile, perché stai usando un browser che non è compatibile con gli standard. Per vederlo nel suo aspetto migliore, ti preghiamo di <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">aggiornarlo</a> ad un browser che supporti gli standard del web. E\' gratis, ed è indolore.';
$messages['jump_to_navigation'] = 'Vai alla navigazione.';
$messages['comment_email_never_display'] = 'Le interruzioni di linea e paragrafo sono automatiche. La tua email non sarà mai mostrata.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> permesso: &lt;<acronym title="Link ipertestuale">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Descrizione di acronimo">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Indentazione">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Sbarrato">del</acronym>&gt; &lt;<acronym title="Corsivo">em</acronym>&gt; &lt;<acronym title="Sottolineato">ins</acronym>&gt; &lt;<acronym title="Grassetto">strong</acronym>&gt;';
$messages['trackback_uri'] = 'L\'<acronym title="Uniform Resource Identifier">URI</acronym> per il trackback di questa entità è: ';
$messages['previous_post'] = 'Precedente';
$messages['next_post'] = 'Successivo';
$messages['comment_default_title'] = '(Senza titolo)';
$messages['guestbook'] = 'Libro degli ospiti';
$messages['trackbacks'] = 'Trackback';
$messages['menu'] = 'Menù';
$messages['albums'] = 'Album';
$messages['admin'] = 'Amministratore';

//
// new strings for 1.1 -- no need to translate yet!
//
$messages['error_incorrect_trackback_id'] = 'L\'identificatore del trackback non è corretto';
$messages['error_marking_trackback_as_spam'] = 'E\' avvenuto un errore nella classificazione del trackback come spam';
$messages['trackback_marked_as_spam_ok'] = 'Il trackback è stato classificato come spam';
$messages['error_marking_trackback_as_nonspam'] = 'E\' avvenuto un errore nella classificazione del trackback come non-spam';
$messages['trackback_marked_as_nonspam_ok'] = 'Il trackback è stato classificato come non-spam';
$messages['upload_here'] = 'Carica qui';
$messages['reply_string'] = 'Re: ';
$messages['cleanup_users'] = 'Pulizia degli utenti';
$messages['cleanup_users_help'] = 'Verranno rimossi tutti gli utenti cancellati dall\'amministratore (marcati come cancellati). Verranno eliminati anche tutti i blog appartenenti a quegli utenti, assieme a tutto il loro contenuto. Se l\'utente era autorizzato a pubblicare articoli su altri blog, anche questi articoli verranno eliminati. Questa operazione non può essere annullata.';
$messages['users_purged_ok'] = 'Pulizia utenti completata';
$messages['cleanup_blogs'] = 'Pulizia dei blog';
$messages['cleanup_blogs_help'] = 'Verranno rimossi tutti i blog che sono stati cancellati dall\'amministratore (marcati come cancellati). Tutto il contenuto di questi blog verrà eliminato. Una volta eliminati, questi blog non potranno essere ripristinati.';
$messages['blogs_purged_ok'] = 'Pulizia dei blog completata';
?>
