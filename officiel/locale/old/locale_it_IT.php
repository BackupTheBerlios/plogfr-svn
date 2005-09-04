<?php

//***********************************************************************************************
//   Italian translation by Pietro Ricciardi (pricciardi@inwind.it; www.comunedipignataro.it)   *
//***********************************************************************************************


// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "iso-8859-1";
$messages["locale_description"] = "File di localizzazione italiana per pLog";
// days of the week
$messages["days"] = Array( "Domenica", "Lunedi", "Martedi", "Mercoledi", "Giovedi", "Venerdi", "Sabato" );
// -- compatibility, do not touch -- //
$messages["Lunedi"] = $messages["days"][1];
$messages["Martedi"] = $messages["days"][2];
$messages["Mercoledi"] = $messages["days"][3];
$messages["Giovedi"] = $messages["days"][4];
$messages["Venerdi"] = $messages["days"][5];
$messages["Sabato"] = $messages["days"][6];
$messages["Domenica"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "Do", "Lu", "Ma", "Me", "Gi", "Ve", "Sa" );
// -- compatibility, do not touch -- //
$messages["Lu"] = $messages["daysshort"][1];
$messages["Ma"] = $messages["daysshort"][2];
$messages["Me"] = $messages["daysshort"][3];
$messages["Gi"] = $messages["daysshort"][4];
$messages["Ve"] = $messages["daysshort"][5];
$messages["Sa"] = $messages["daysshort"][6];
$messages["Do"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre" );
// -- compatibility, do not touch -- //
$messages["Gennaio"] = $messages["months"][0];
$messages["Febbraio"] = $messages["months"][1];
$messages["Marzo"] = $messages["months"][2];
$messages["Aprile"] = $messages["months"][3];
$messages["Maggio"] = $messages["months"][4];
$messages["Giugno"] = $messages["months"][5];
$messages["Luglio"] = $messages["months"][6];
$messages["Agosto"] = $messages["months"][7];
$messages["Settembre"] = $messages["months"][8];
$messages["Ottobre"] = $messages["months"][9];
$messages["Novembre"] = $messages["months"][10];
$messages["Dicembre"] = $messages["months"][11];

$messages["message"] = "Messaggio";
$messages["error"] = "Spiacente,";

$messages["date"] = "Data";

// miscellaneous texts
$messages["of"] = "di";
$messages["recently"] = "recenti...";
$messages["comments"] = "commenti";
$messages["comment on this"] = "Commenti";
$messages["my_links"] = "i miei Link";
$messages["archives"] = "archivi";
$messages["search"] = "cerca";
$messages["calendar"] = "calendario";
$messages["categories"] = "categorie";
$messages["search_s"] = "Cerca";
$messages["link_tracker"] = "Link Tracker";
$messages["search_this_blog"] = "Cerca in questo blog:";
$messages["about_myself"] = "Chi sono?";
$messages["permalink_title"] = "Permalink agli archivi";
$messages["permalink"] = "Permalink";
$messages["posted_by"] = "Inviato da";
$messages["on_the"] = "sul";
$messages["page"] = "pagina";
$messages["posted"] = "inviato";

$messages["reply"] = "Rispondi";


// add comment form
$messages["add_comment"] = "Commenta";
$messages["comment_topic"] = "Argomento";
$messages["comment_text"] = "Testo";
$messages["comment_username"] = "Il tuo nome";
$messages["comment_email"] = "La tua e-mail";
$messages["comment_url"] = "La tua home-page";
$messages["comment_send"] = "Invia";
$messages["comment_added"] = "Commento registrato!";
$messages["comment_add_error"] = "Errore in fase di registrazione";


$messages["article_does_not_exist"] = "Articolo inesistente";
$messages["no_posts_found"] = "Nessun articolo troato";
$messages["user_has_no_posts_yet"] = "L'utente non ha inviato nessun articolo";

$messages["info_about_myself"] = "Alcune informazioni su di me...";
$messages["back"] = "Indietro";

$messages["back_top"] = "Torna Sopra";

$messages["post"] = "articolo";

$messages["trackbacks_for_article"] = "Trackbacks per l'articolo intitolato";
$messages["trackback_excerpt"] = "Brano";
$messages["trackback_weblog"] = "Weblog";

$messages["search_results"] = "Risultato ricerca";
$messages["search_matching_results"] = "Questi articoli soddisfano i tuoi criteri di ricerca: ";
$messages["search_no_matching_posts"] = "Nessun articolo soddisfa i tuoi criteri di ricerca";

$messages["see_all_link"] = "Cliccare quì per vedere tutti gli articoli, mai";

$messages["read_more"] = "(Continua...)";

$messages["anonymous_poster"] = "Inviato da ANONIMO";

$messages["syndicate"] = "SYNDICATE";

$messages["main"] = "Main";

////// error messages /////
$messages["error_fetching_article"] = "L'articolo cercato non è stato trovato.";
$messages["error_fetching_articles"] = "Non ci sono articoli in questo argomento.";
$messages["error_trackback_no_trackback"] = "Non sono stati trovati trackbacks per l'articolo.";
$messages["error_incorrect_article_id"] = "Identificativo dell'articolo non corretto.";
$messages["error_incorrect_blog_id"] = "l'identificativo del blog non è corretto.";
$messages["error_comment_without_text"] = "E' necesasrio che scrivi almeno del testo.";
$messages["error_comment_without_name"] = "Devi fornire il tuo nome o nickname.";
$messages["error_adding_comment"] = "Si è verificato un errore durante la registrazione del commento.";
$messages["error_incorrect_parameter"] = "Parametro non corretto.";
$messages["error_parameter_missing"] = "hai mancato un parametro.";
$messages["error_blog_has_no_links"] = "In questo blog non ci sono ancora links registrati.";
$messages["error_comments_not_enabled"] = "Commenti non consentiti per questo sito.";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////


////// help messages for the administration interface /////
$messages["newPost"] = "<p>Usa questa paggina per inserire nuovi post nel tuo blog. Devi selezionare un argomento a cui associare 
il tuo post, fornire un titolo e, ovviamnte, mettere del contenuto. Quando hai finito, Premi il pulsante <b>'Add'</b> e il pezzo
comparirà automaticamente nel tuo blog. Fai attenzione, perchè l'articolo compaia devi impostare lo stato dell'articolo
a <b>'Published'</b>. Usa lo stato <b>'Draft'</b> se vuoi che il pezzo non appaia ancora, magari per revisionarlo in un secondo momento.</p>

<p>Se vuoi ricevere una e-mail di notifica di commenti al tuo pezzo, seleziona il checkbox apposito.</p>
<p>Check the box where it says </b>'Find links in the post...'</b> if after adding the post, you
would like to send trackback pings to the hosts that support it. Your post will be scanned for
links and you will have the possibility to choose which ones to send trackback pings to.</p>";

$messages["addPost"] = "<p>Il tuo post è stato aggiunto all'archivio
to which hosts you would like to send a trackback ping, so that they know you have written about them
and can <i>track you back</i>.</p>";

$messages["editComments"] = "Questi sono i commenti al tuo post.
Non puoi modificali ma puoi eliminarli. Per inserire un commento l'unico campo obbligatorio è 
\"nome\", quindi E-mail e Url possono essere vuote. L'indirizzo IP rappresenta l'indirizzo da cui è stato inviato il post.
<br>Per cancellare il commento seleziona il check corrispondente al commento da eliminare presente nella colonna <b>'Delete'</b>
e clicca sul pulsante <b>'Delete selected'</b>.";

$messages["postStats"] = "<p>Statistiche per il post selezionato. Il primo corrisponde al numero di letture
dell'articolo. Attenzione: Se la feature <b>'Continua...'</b> è stata abilitata nelle  <b>'Impostazioni Blog'</b> potrebbe non essere significativo.</p>
<p>I referrer sono gli url di tutti gli hosts che hanno visitato il post, e la tabella delle trackbacks rappresenta
quanti ping ha ricevuto questo post. Non è possibile modificare questi dati.</p>";

$messages["editLinks"] = "<p>This is a list with all the links that have been added. Like posts, every
link can be sorted in different categories and then displayed in the main page for visitors to see.</p>
<p>For every link, you will see here its name, the url where it is pointing to and under which category
it has been sorted. Finally you can also delete any of the links.</p>";

$messages["newLink"] = "<p>You can add a new link from here. You have to provide at least a valid
url and a name for the link. The description field is optional but useful to have more information
about the link. You need at least one link category before you can add any link.</p>";

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



$messages["admin_interface_title"] = "Funzioni di amministrazione";
$messages["administration"] = "Amministrazione";
$messages["help"] = "Aiuto";
$messages["plog_help"] = "Aiuto";
$messages["new_post"] = "Nuovo articolo";
$messages["posts"] = "Articoli";
$messages["admin_categories"] = "Categorie";
$messages["admin_links"] = "Link";
$messages["link_categories"] = "Categorie Link";
$messages["settings"] = "Impostazioni";
$messages["logout"] = "Logout";

// new post page
$messages["topic"] = "Argomento";
$messages["text"] = "Testo";
$messages["category"]  = "Categorie";
$messages["status"] = "Stato";
$messages["status_draft"] = "Bozza";
$messages["status_published"] = "Pubblicato";
$messages["status_deleted"] = "Cancellato";
$messages["status_all"] = "Tutto";
$messages["send_notification"] = "notificami ogni invio di commento.";
$messages["send_trackback_pings"] = "Cerca i link nel post ed invia ping di trackback verso i link che supportano la funzione.";
$messages["add_post"] = "Pubblica!";

$messages["xmlrpc_ping_ok"] = "Ping XML-RPC inviato a ";
$messages["error_sending_xmlrpc_ping"] = "Errore durante l'invio di un ping XML-RPC Ping a ";
$messages["error_sending_xmlrpc_ping_message"] = "Il messaggio d'errore è: ";

$messages["preview"] = "Anteprima";
$messages["post_added"] = "Post aggiunto";
$messages["you_will_be_notified"] = "Sarai avvisato a fronte di attività in questo post.";
$messages["post_added_not_published"] = "Post aggiunto ma non pubblicato.";
$messages["error_adding_post"] = "Errore in fase di registrazione del post!";
$messages["error_must_fill_all_fields"] = "Riempi tutti i campi!";
$messages["error_must_have_one_category"] = "Devi inserire prima un argomento per poter scrivere un articolo";

// send trackbacks page
$messages["send_trackback_pings"] = "Invia Ping Trackback";
$messages["links_found"] = "I seguenti link sono presenti nei tuoi post. Selezina quelli a cui vuoi inviare un ping trackback (può richiedere del tempo)";
$messages["trackbacks_no_urls_selected"] = "Non sono stati selezionati URL a cui inviare il ping.";
$messages["trackbacks_received_ok"] = "Questi host hanno ricevito il ping:";
$messages["trackbacks_no_trackback"] = "I seguenti  link non hanno un trackback url valido: ";
$messages["trackbacks_problems_sending"] = "Problemi durante l'invio dei ping ai seguenti host.
Puoi riprovare.";
$messages["trackbacks_received_all_hosts"] = "Tutti gli host hanno ricevuto il ping.";
$messages["ping_selected"] = "Pinga i siti selezionati";

// edit posts
$messages["author"] = "Autore";
$messages["category_all"] = "Tutti";
$messages["author_all"] = "Tutti";
$messages["update"] = "Aggiorna";
$messages["date"] = "Data";
$messages["stats"] = "Statistiche";
$messages["delete"] = "Cancella";

$messages["delete_selected"] = "Cancella selezionati";

// edit post
$messages["edit_post"] = "Modifica Post";
$messages["error_getting_post_to_update"] = "Si è verificato un errore nel tentativo di estrarre il post selezionato pe modificarlo.";
$messages["error_updating_post_in_database"] = "Errore durante l'aggiornamento del post.";
$messages["post_successfully_updated"] = "Post modificato.";
$messages["notification_removed"] = "La notifica che avevi attivato per questo post è stata eliminata.";

// post statistics
$messages["statistics_for_post"] = "Statistiche per i post ";
$messages["error_fetching_post"] = "Si è verificato un errore in fase di lettura del post.";
$messages["times_post_has_been_read"] = "N. letture: ";
$messages["referers"] = "Referrers";
$messages["id"] = "Id";
$messages["url"] = "Url";
$messages["hits"] = "Letture";
$messages["trackbacks"] = "Trackbacks";

// post comments
$messages["error_fetching_comments"] = "Errore in fase di lettura dei commenti";
$messages["comments_for_post"] = "Commenti al post ";
$messages["email"] = "E-Mail";
$messages["ip_address"] = "Indirizzo IP";

// delete comments
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_no_comments_selected"] = "Non hai selezionato alcun commento da cancellare.";
$messages["error_deleting_comment"] = "Si è verificato un errore durante la cancellazione del commento ";
$messages["comment_deleted_ok"] = "Commento con argomento \"%s\" cancellato correttamente.";
//*** NEW ***//
// please remove these comments after translating these lines


// categories list
$messages["category_name"] = "Nome";

// removing posts
$messages["post_cannot_be_deleted"] = "Il post non può essere cancellato";
$messages["no_posts_selected"] = "Non hai selezionato alcun post da cancellare.";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "Errore cancellando il post \"%s\" (id = %d)";
$messages["post_deleted_ok"] = "Post \"%2\$s\" cancellato con successo (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "Non hai selezionato alcun argomento da cancellare.";
$messages["error_category_has_articles"] = "Non è possibile eliminare l'argomento \"%s\" poichè c'è almeno un articolo associato ad esso. Rimuovi prima gli articoli e riprova.";
$messages["error_deleting_category"] = "Errore nel tentativo di eliminare l'argomento \"%s\".";
$messages["category_deleted_ok"] = "Argomento \"%s\" cancellato.";

// add category
$messages["add_new_category"] = "Aggiungi argomento";
$messages["add_new_category_info"] = "Inserisci un nome valido per il nuovo argomento.";
//*** NEW ***//
// please remove these comments after translating these lines
$messages["category_added_ok"] = "Argomento aggiunto con successo.";
$messages["error_adding_article_category"] = "Si è verificato un errore durante l'inseriemnto del nuovo argomento.";
//*** NEW ***//
// please remove these comments after translating these lines

// edit categories
$messages["edit_category"] = "Modifica Argoemnto";
$messages["please_provide_valid_category_name"] = "Dai un nome valido per l'argomento.";

// edit category
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_incorrect_category_id"] = "Identificativo dell'argoemnto non valido";
//*** NEW ***//
// please remove these comments after translating these lines

// update the category
$messages["error_fetching_category"] = "Errore in fase di lettura dell'argoemnto.";
$messages["error_updating_category"] = "Errore in fase di modifica dell'argomento.";
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_empty_category_name"] = "Fornisci un nome valido per l'argomento.";
//*** NEW ***//
// please remove these comments after translating these lines
$messages["category_updated_ok"] = "Argomento modificato.";

// edit links
$messages["link_name"] = "Nome";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["categoria"];
$messages["link_description"] = "Descrizione";
$messages["links"] = "Link";

// edit a link
$messages["error_provide_name_and_url"] = "Devi almeno inserire un nome e l'url del link.";
$messages["error_invalid_link_id"] = "Id del link non corretto o mancante.";
$messages["error_fetching_link"] = "Errore durante la lettura del link.";
$messages["error_updating_link"] = "Errore durante la modifica del link.";
$messages["link_updated_ok"] = "Link modificato!";
$messages["error_fetching_link_categories"] = "Errore durante la lettura degli argomenti dei link.";

// add a link
$messages["add_new_link"] = "Aggiungi un nuovo Link";
$messages["add_link"] = "Aggiungi Link";
$messages["error_adding_link"] = "Errore durante l'inserimento del link.";
$messages["link_added_ok"] = "Link aggiunto.";
$messages["error_provide_name_and_url"] = "Devi inserire un nome ed un indirizzo valido.";
$messages["error_must_have_one_link_category"] = "Devi avere almeno una Categoria Link prima di poter inserire un link.";

// delete a link
$messages["error_no_links_selected"] = "Seleziona un link da cancellare.";
$messages["error_removing_link"] = "Errore cancellazione link \"%s\".";
$messages["link_deleted_ok"] = "Link \"%s\" cancellato.";

// edit link categories
$messages["add_link_category"] = "Aggiungi un nuova categoria di link";
$messages["link_categories_help"] = "Devi aver inserito almeno una categoria prima di poter aggiungere dei link.";
$messages["link_category_name"] = "Nome";
$messages["link_category_links"] = "Link";

// new link category
$messages["new_link_category_info"] = "Link categories will help you to classify the different links you
can have. You can also later on show your links grouped using these categories in the main page.";
$messages["add_link_category"] = "Aggiungi Argomento Link";
$messages["error_provide_link_category_name"] = "Devi inserire un nome valido per la categoria.";
$messages["error_adding_link_category"] = "Errore durante la creazione della nuova categoria link.";
$messages["link_category_added_ok"] = "Argomento Link aggiunto.";

// edit link category
$messages["edit_link_category"] = "Modifica Categoria Link";
$messages["error_updating_link_category"] = "Errore durante la modifica della categoria Link.";
$messages["link_category_updated_ok"] = "Categoria link modificata.";
$messages["error_fetching_link_category"] = "Errore durante la lettura della categoria link.";
$messages["error_incorrect_link_category_id"] = "Id categoria link errato";


// delete link categories
$messages["error_no_link_category_selected"] = "Non hai selezionato alcuna Categoria Link  da cancellare.";
$messages["error_links_in_link_category"] = "Categoria \"%s\" non cancellabile, eliminare prima tutti i dati associati alla categoria stessa.";
$messages["error_removing_link_category"] = "Errore durante la cancellazione della categoria \"%s\".";
$messages["link_category_deleted_ok"] = "Categoria Link \"%s\" rimossa.";
// this error is shown when for some reason the category could not be fetched from the database
// and we can't show its name
$messages["error_removing_link_category_2"] = "Errore durante la cancellazione della Categoria Link con id = %d";

// blog settings page
$messages["blog_settings"] = "Impostazioni Blog";
$messages["user_profile"] = "Profilo Utente";
$messages["plugin_center"] = "Gestione Plugin";
$messages["statistics"] = "Statistiche";
$messages["blog_name"] = "Nome del Blog";
$messages["long_blog_name"] = "Descrizione lunga del contenuto del blog";
$messages["language_used"] = "Linguaggio ustao per mostrare testi e date";
$messages["items_main_page"] = "Quanti post vuoi vedere nella home page?";
$messages["items_as_recent"] = "Quanti post vuoi vedere in \"Recenti\"?";
$messages["template_used"] = "Scegli un template per definire l'aspetto del tuo blog";
$messages["cut_posts"] = "Taglia post troppo lunghi ed aggiungi link \"Continua...\" ?";
$messages["cut_posts_after_characters"] = "Numero di caratteri prima del taglio del post ed agginta del  link \"Continua...\" ?";
$messages["enable_wysiwyg_edition"] = "Abilita interfaccia WYSIWYG per scrivere il contenuto dei post (solo per Internet Explorer 5.5 o sup. e 1.3b o sup.)?";
$messages["enable_comments"] = "Abilita i commenti per tutti i post?";
$messages["yes"] = "Si";
$messages["no"] = "No";
$messages["error_invalid_locale"] = "Valore non valido per le impostastazione della lingua";
$messages["error_incorrect_max_recent_items"] = "Devi inserire un numero valido che identifichi quanti post mostrare tra i 'recenti'.";
$messages["error_incorrect_number_of_posts"] = "Devi inserire un numero valido che identifichi quanti post mostrare in main page.";
$messages["error_incorrect_template"] = "Il valore per il template non è corretto.";
$messages["error_no_blog_name"] = "Inserire un nome valido per il blog.";
$messages["error_incorrect_show_more_threshold"] = "Inserisci un numero valido di carttere da mostrare per un postprima di tagliuaro ed aggiungere il link \"Continua...\".";
$messages["error_updating_settings"] = "Errore durante l'aggiornamento delel impostazione del blog.";
$messages["blog_settings_updated_ok"] = "Impostazioni blog aggiornate!";
$messages["permanent_blog_url"] = "Indirizzo blog (sola lettura)";

// user profile page
$messages["username"] = "Utente";
$messages["password"] = "Password";
$messages["confirm_password"] = "Conferma la Password";
$messages["email_address"] = "Indirizzo Email";
$messages["bio"] = "Bio";
$messages["empty_no_change"] = "Lascia vuoto se non vuoi modificare";
$messages["user_settings_updated_ok"] = "Impostazioni modificate.";
$messages["error_updating_user_settings"] = "Errore in fase di modifica delle impostazioni.";
$messages["error_passwords_dont_match"] = "Attenzione, le password non corrispondono.";
$messages["error_incorrect_password"] = "Attenzione, la password non è corretta.";
$messages["error_incorrect_email_address"] = "L'indirizzo e-mail non è valido.";

// plugin center page
$messages["plugins_available"] = "Lista plugins disponibili in questi template";
$messages["identifier"] = "Identificativo";
$messages["description"] = "Descrizione";
$messages["error_plugins_disabled"] = "Il supporto per i plugin è stato disabilitato in questo sito.";

// statistics page
$messages["statistics_info"] = "An article identifier of 0 means that those were incoming hits to the main
site, not to any particular article.";
$messages["article_id"] = "Id Articolo";
$messages["last_hit_date"] = "Data ultima lettura";
$messages["error_fetching_referers"] = "Errore durante la lettura dei referrer per questo sito";


// login screen
$messages["login_page_title"] = "Interfaccia di amministrazione";
$messages["login"] = "Login";
$messages["welcome_message"] = "Benvenuto";
$messages["error_incorrect_username_or_password"] = "Spiacente, utente or password non corretta.";
$messages["error_dont_belong_to_any_blog"] = "Spiacente, non hai nessun blog attivo.";
$messages["error_no_username_or_password"] = "Inserisci un utente o password valida.";
$messages["choose_one_blog"] = " Hai i seguenti blog attivi. Scegline uno per lavorarci";
$messages["continue"] = "Continua";
$messages["logout_message"] = "Sei uscito dalle funzioni di amministrazione del blog.";
$messages["logout_message_2"] = "<a href=\"admin.php\">Clicca qui</a> per rientrare, o
<a href=\"%1\$s\">quì per andare a %2\$s</a>.";
$messages["logout_title"] = "Uscito";
$messages["error_access_forbidden"] = "Accesso vietato. Devi prima effettuarte il LOGIN.";

/////////////////////////////////////////////////////////////////////
//
//
// new strings added for 0.2
//
//
////////////////////////////////////////////////////////////////////
$messages["site_admin"] = "Amministrazione Sito";
$messages["site_stats"] = "Statistiche Sito";
$messages["add_user"] = "Aggiungi utente";
$messages["users"] = "Utenti";
$messages["add_blog"] = "Aggiungi Blog";
$messages["blogs"] = "Blogs";
$messages["locales"] = "Lingue";
$messages["add_locale"] = "Aggiungi Locale";
$messages["templates"] = "Template";
$messages["add_template"] = "Aggiungi Template";
$messages["global_settings"] = "Impostazioni Globali";
$messages["site_settings"] = "Impostazioni Sito";
$messages["help_comments_enabled"] = "Abilita o disabilita i commenti per l'intero sito.";
$messages["help_beautify_comments_text"] = "Rispetta la formattazione dell'utente nell'inserimento di un commento.";
$messages["help_rdf_enabled"] = "Abilita o disabilita la creazione di un file RDF con gli ultimi post.";
$messages["help_temp_folder"] = "Cartella utilizzata da pLog per le operazioni che richiedono l'uso di file temporanei.";
$messages["help_base_url"] = "Url del sito usato. (Utilizzato per generare gli url dei blog - valorizzare correttamente)";
$messages["help_show_posts_max"] = "Numero di post nelle main page di default.";
$messages["help_recent_posts_max"] = "Numero di post mostrati tra i 'recenti' di default.";
$messages["help_template_folder"] = "Dove pLog cherca i template.";
$messages["help_default_template"] = "Template di default per i blog.";
$messages["help_defalut_locale"] = "Linguaggio di default per i blog e nelle pagine di amministrazione.";
$messages["help_html_allowed_tags_in_comments"] = "Tag HTML non rimossi dai commenti degli utenti.";
$messages["help_referer_tracker_enabled"] = "Salva informazioni minimali sui referrer, se deisponibili al ricevimento di una richiesta.";
$messages["help_rss_parser_enabled"] = "Abilita o disabilita il parser RSS disponibile nei template.";
$messages["help_show_more_enabled"] = "Abilita o disabilita la funzione \"Continua...\" di default.";
$messages["help_show_more_threshold"] = "Quanti caratteri lasciare prima di aggiungere il link (Continua...).";
$messages["help_update_article_reads"] = "Whether to update or not the internal counter representing the number of times each article has been read.";
$messages["help_request_format_mode"] = "La modalità \"Piano\" genera URL normali, la modatiltà \"Amichevole per i motori id ricerca\" genera URL facili da leggere e che possono essere esaminati dai motori id ricerca. Richiede Apache e la possibilità di usare un file .htaccess";
$messages["help_xmlrpc_ping_enabled"] = "Whether to send an XMLRPC notification to the hosts configured below every time a post is added.";
$messages["help_xmlrpc_ping_hosts"] = "Lista degli host che supporatno la notifica XMLRPC. Inserisci un host per ogni linea.";
$messages["help_trackback_server_enabled"] = "Abilita o disabilita l'editor WYSIWYG per i post.";
$messages["help_plugin_manager_enabled"] = "Abilita o disabilita i plugin.";
$messages["help_check_email_address_validity"] = "In caso di creazione di un nuovo blog, agli utenti viene chiesta una caselal e-mail, con questo parametro a 'true' viene verificata la validita della casella.";
$messages["help_summary_page_show_max"] = "Quanti post mostrare nella pagina summary.php.";
$messages["help_minimum_password_length"] = "Numero minimo di caratteri di una password.";
$messages["help_users_can_add_templates"] = "Definisce se gli utenti possono aggiungere template specifici per i propri blog.";
$messages["help_email_service_enabled"] = "Abilita o disabilita il servizio email, ussato per inviare, ad esempio, notifiche sull'innvio di post.";
$messages["post_notification_source_address"] = "Indirizzo utilizzato come mittente nell'invio di e-mail.";
$messages["help_email_service_type"] = "Metodo di invio delle e-mail. Scegliere quello da utilizzare e modificare le impostazioni seguenti.";
$messages["help_smtp_host"] = "Se si utilizza un servizio SMTP per l'invio di email, qusto è l'host da utilizzare per l'invio.";
$messages["help_smtp_port"] = "Porta su cui si attesta il servizio  SMTP.";
$messages["help_smtp_use_authentication"] = "Se il server SMTP supporta l'autenticazione e si desidera utilizzare tale feature, abilitarla e verificare le due impostazioni successive.";
$messages["help_smtp_username"] = "Utente da usare per l'invio di email tramite SMTP con autenticazione abilitata.";
$messages["help_smtp_password"] = "Password da usare per l'invio di email tramite SMTP con autenticazione abilitata.";
$messages["help_uploads_enabled"] = "Abilita o disabilita la possibilità di effettuare l'upload dei file. (necessario per aggiungere estensioni ai template o per caricare nuovi template).";
$messages["help_maximum_file_upload_size"] = "Dimensione massima in bytes dei file caricati dagli utenti.";
$messages["help_upload_forbidden_files"] = "Lista dei pattern dei file non autorizzati ad essere caricati sul sito. (separare i tipi con uno spazio).";
$messages["help_path_to_tar"] = "Path in cui è presente il tool 'tar'.";
$messages["help_path_to_gzip"] = "Path in cui è presente il tool 'gzip'.";
$messages["help_path_to_bz2"] = "Path in cui è presente il tool 'bzip2'.";
$messages["help_path_to_unzip"] = "Path in cui è presente il tool 'unzip'.";

$messages["add_user_give_information"] = "Inserire le seguenti informazioni per creare un nuovo utente.";

$messages["site_registered_users"] = "Lista utenti registrati.";

$messages["add_blog_give_information"] = "Inserire le seguenti informazioni per creare un novo blog.";
$messages["blog_title"] = "Titolo Blog";
$messages["blog_owner"] = "Proprietario Blog";

$messages["site_registered_blogs"] = "Questi sono tutti i blog registrati su questo sito.";
$messages["edit_users"] = "Modifica utenti";

$messages["upload_locale"] = "Upload file lingua";
$messages["use_this_form_to_upload_locale"] = "  Usare questo form per l'upload di un nuivo file di lingua. Se non puoi effettuare l'upload usa il form successivo.";
$messages["locale_file"] = "File lingua";
$messages["manually_add_locale"] = "Aggiunta manuale linguaggio";
$messages["use_this_form_if_cant_upload_locale"] = "Usa questo form se non puoi effettuare l'upload sul server. Il file deve essere caricato nella cartella di default per i file di lingua prima di eseguire l'operazione.";
$messages["locale_code"] = "Codice lingua";
$messages["locale_encoding"] = "Encoding";

$messages["template_will_be_available_for_all"] = "Il nuovo template sarà disponibile per tutti i blog.";

$messages["use_this_form_to_upload_template"] = "  Usa questo form per l'upload di un nuovo template. Se non puoi effettuare l'upload usa il form successivo. I files cche compongono il template devono essere compressi nel formato zip, tar.gz o tar.bz2.";
$messages["locale_file"] = "File linguaggio";
$messages["upload_template"] = "Upload template";
$messages["manually_add_template"] = "Aggiunta manuale template";
$messages["use_this_form_if_cannot_upload_template"] = " Usa questo form Se non sei autorizzato ad effettuare l'upload. Il file deve già essere stato copiato nella cartelal di default dei template prima di eseguire questa operazione.";
$messages["template_id"] = "Id Template";

$messages["templates_available_for_all"] = "Questi template sono disponibili per tutti i blog.";
$messages["add_file"] = "Aggiungi File";

$messages["setting_name"] = "Nome";
$messages["setting_value"] = "Valore";
$messages["setting_description"] = "Descrizione";

$messages["plain"] = "Piano";
$messages["search_engine_friendly"] = "Amichevole per i Motori id Ricerca";

$messages["general_settings"] = "Impostazioni Generali";
$messages["helper_tools_settings"] = "Impostazioni Tool di Help";
$messages["uploads_settings"] = "Impostazioni Upload";
$messages["email_settings"] = "Impostazioni Email";

$messages["number_blogs"] = "Numero di blog";
$messages["number_users"] = "Numero di utenti";
$messages["number_posts"] = "Numeri di post";
$messages["number_posts_today"] = "Numero di posts di oggi";
$messages["number_posts_this_month"] = "Numero di posts del mese";

$messages["date"] = "Data";
$messages["time"] = "Ora";

$messages["comments_order"] = "Ordinamento in cui compaiono i commenti:";
$messages["oldest_first"] = "Prima i più vecchi";
$messages["newest_first"] = "Prima i più nuovi";

$messages["blog"] = "Blog";
$messages["blog_id"] = "Identificativo numerico del Blog";

$messages["blog_users"] = "Utenti Blog";
$messages["available_users"] = "Utenti registrati ";
$messages["add"] = "Aggiungi";
$messages["remove"] = "Cancella";

$messages["user_id"] = "Identificativo numerico Utente";

$messages["new_password"] = "Nuova Password";
$messages["has_administrator_privileges"] = "Ha privilegi di amministratore";
$messages["related_to_the_following_blogs"] = "Relativo ai seguenti blog";

$messages["add_user_to_blog_form"] = " Questo form ti consente di aggiungere un utente al tuo blog. L'utente potrà solo aggiungere o modificare i post.";
$messages["add_user_enter_username"] = " Inserisci il nome utente che intendi aggiunger. l'utente deve essere registrato nel sito.";
$messages["add_user_send_notification"] = "Invia una mail di notifica all'utente.";
$messages["add_user_type_notification"] = "Scrivi un messaggio da inviare all'utente";

$messages["following_users_have_permissions"] = " I seguenti utenti appartengono al blog.";
$messages["revoke_permissions"] = "Revoca Permessi";

$messages["add_blog_template"] = "Aggiungi un Template";
$messages["manually_add_blog_template"] = "Aggiungi manualmente un Template";
$messages["template_available_only_for_this_blog"] = "Questo template sarà disponibile solo per questo blog.";
$messages["use_form_to_upload_blog_template"] = "Usa questo form per effettuare l'upload di un nuovo template. Se non hai i permessi di upload, usa il form successivo. I file che compongono il temlate devono essere compressi in un file  zip, tar.gz o  tar.bz2.";
$messages["use_form_if_cannot_upload_blog_template"] = "Usa questo form  se non puoi effettuare l'upload sul server. Il file deve essere copiato nella cartella di defaulth dei Template prima di eseguire questa operazione.";

$messages["blog_templates"] = "Template";
$messages["templates_only_available_for_this_blog"] = "Questi template sono disponibili solo per questo blog.";

$messages["add_file_to_blog_template"] = "Aggiungi File al Template"; $messages["upload_file_to_blog_template"] = "Effettua l'upload del file che vuoi aggiungere al set del template.";

$messages["error_user_id_incorrect"] = "Id Utente errata.";
$messages["error_incorrect_user_id"] = $messages["error_user_id_incorrect"];
$messages["error_fetching_user_information"] = "Errore duurante la lettura dei dati dell'utente.";
$messages["error_password_incorrect"] = "Password troppo corta o non valida.";
$messages["error_updating_user_settings"] = "Impossibile aggiorante le impostazioni dell'utente.";
$messages["user_settings_updated_ok"] = "Impostazioni dell'utente \"%s\" aggiornate.";
$messages["error_no_users_selected_to_add"] = "Non è stato selezionato alcun utente da aggiungere.";
$messages["user_added_to_blog_ok"] = "L'utente \"%s\" è stato aggiunto al blog.";
$messages["error_adding_user_to_blog"] = "Errore durante il tentativo di aggiungere l'utente \"%s\" al blog.";
$messages["error_no_users_selected_to_remove"] = "Non è stato selezionato alcun utente da eliminare.";
$messages["user_removed_from_blog_ok"] = "L'utente \"%s\" è stato rimosso dal blog.";
$messages["error_removing_user_from_blog"] = "Errore durante la rimozione dell'utente\"%s\" dal blog.";

$messages["error_incorrect_plugin_id"] = "Id plugin errato";
$messages["error_configuring_plugin"] = "Errore durante la confifurazione del plugin: ";
$messages["site_config_saved_ok"] = "Configurazione salvata.";
$messages["error_saving_site_config"] = "Errore durante il salvataggio della configurazione.";

$messages["error_incorrect_blog_owner"] = "L'utente selezionato non esiste.";
$messages["error_updating_blog_settings"] = "Errore durante la modifica delle impostazioni del blog \"%s\"";
$messages["blog_settings_updated_ok"] = "le impostazioni del blog \"%s\" sono state salvate.";

$messages["error_fetching_users"] = "Errore durante la lettura degli utenti del sito.";

$messages["error_fetching_blogs"] = "Errore durante la lettura dei blog del site.";

$messages["error_incorrect_template_id"] = "L'Id del template non è valido o non esiste.";

$messages["error_no_users_selected"] = "Non è stato selezionato alcun utente da cancellare.";
$messages["error_could_not_find_user"] = "Non trovo l'utente \"%s\".";
$messages["error_deleting_user"] = "Errore durante la cancellazione dell'utente\"%s\"";
$messages["user_deleted_ok"] = "Utente \"%s\" cancellato.";

$messages["error_must_give_blog_name"] = "Inserisci un nome valido per il blog.";
$messages["error_adding_blog"] = "Errore in fase di creazione del blog.";
$messages["blog_added_ok"] = "Il blog \"%s\" è stato creato.";

$messages["error_template_not_inside_folder"] = "I file del template devono essere in una cartella.";
$messages["error_missing_base_files"] = "Mancano alcuni file essenziali dal set.";
$messages["error_unpacking"] = "Errore durante la decompressione del file.";
$messages["error_forbidden_extensions"] = "Alcuni file del template sono stati protetti.";
$messages["error_creating_working_folder"] = "Errore duarnte il controllo del template";
$messages["error_checking_template"] = "C'è un errore con il  template (code = %s)";
$messages["error_add_template_disabled"] = "Gli utenti non sono autorizzati ad aggiungere template.";
$messages["error_must_upload_file"] = "Devi effattuare l'upload di un  file.";
$messages["error_no_template_name"] = "devi fornire il nome del template.";
$messages["error_uploads_disabled"] = "L'upload è disabilitato in questo sito.";
$messages["error_installing_template"] = "Errore durante l'installazione del template.";
$messages["template_installed_ok"] = "Il nuovo template è stato aggiunto come  \"%s\".";

$messages["error_adding_template_file"] = "Errore durante l'aggiunta del file di template.";
$messages["error_file_forbidden"] = "Questo tipo di file non è consentito in questo sito.";
$messages["error_file_too_big"] = "File troppo grande. domensione massima \"%s\" bytes.";
$messages["template_file_added_ok"] = "File aggiunto al template \"%s\".";

$messages["error_plugin_cannot_be_configured"] = "Il plugin non può essere configurato.";

$messages["error_incorrect_username"] = "Nome utente sbagliato.";
$messages["error_username_already_exists"] = "Nome utente già presente.";
$messages["error_adding_user"] = "Errore durante l'inserimento del nuovo utente.";
$messages["user_added_ok"] = "L'utente \"%s\" è stato aggiunto.";

$messages["error_no_blogs_selected"] = "Seleziona almeno un blog da cancellare.";
$messages["error_blog_is_default_blog"] = "\"%s\" non può essere eliminato poichè è il blog di default.";
$messages["blog_deleted_ok"] = "Blog \"%s\"eliminato.";
$messages["error_deleting_blog"] = "Errore durante la cancellazione del blog \"%s\".";

$messages["error_no_templates_selected"] = "Non sono stati selezionati template da rimuovere.";
$messages["error_removing_template"] = "Errore durante la cancellazione del template \"%s\"";
$messages["template_removed_ok"] = "Template \"%s\" eliminato.";

$messages["error_no_users_selected_to_remove_from_blog"] = "Non sono stati selezionati utenti da rimuovere dal blog.";
$messages["error_removing_user_from_blog"] = "Errore durante la rimozione dell'utente \"%s\" dal blog.";
$messages["user_removed_from_blog_ok"] = "Utente \"%s\" rimosso dal blog blog.";

$messages["error_incorrect_locale_code"] = "Codice localizzazione non valido.";
$messages["error_invalid_locale_file"] = "Il file non sembra essere un valido file di linguaggio.";
$messages["error_adding_locale_file"] = "Errore durante l'aggiunta del nuovo file di linguaggio. Verificare la disponibilità del file e l'autorizzazione ad effettuare l'operazione.";
$messages["locale_added_ok"] = "Linguaggio \"%s\"aggiunto.";
$messages["error_saving_locale"] = "Errore durante il salvataggio del file di linguaggio. Verificare che la cartella abbia i permessi giusti.";

$messages["error_no_locales_selected"] = "Non è stato selezionato alcun linguaggio da eliminare.";
$messages["error_deleting_only_locale"] = "Non è possibile eliminare l'unico linguaggio presente nel sistema.";
$messages["locale_deleted_ok"] = "Linguaggio \"%s\" eliminato.";
$messages["error_deleting_locale"] = "Errore durante la cancellazione del file di linguaggio \"%s\"";
$messages["error_cant_delete_default_locale"] = "\"%s\" poichè è il file di linguaggio di default.";

$messages["plugin_config"] = "Configurazione Plugin";

$messages["use_read_more_feature"] = "Mostrare l'intero contenuto del post nella main page? ";

$messages["extended_text"] = "Questo testo sarà mostrato solo nella pagina del post";

$messages["error_must_give_post_intro"] = "Devi fornire almeno un'introduzione al post.";
$messages["error_no_albums_defined"] = "Non ci sono album in questo blog.";
$messages["error_fetching_album"] = "Errore durante la lettura dell'album";
$messages["comment_marked_as_spam_ok"] = "Commento marcato come spam.";
$messages["comment_marked_as_nonspam_ok"] = "Commento marcato come non spam.";
$messages["error_marking_comment_as_nonspam"] = "Errore durante la marcatura del commento.";
$messages["error_marking_comment_as_spam"] = "Errore durante la marcatura del commento.";
$messages["error_incorrect_comment_id"] = "Id commento errato.";
$messages["error_base_storage_folder_missing_or_unreadable"] = "pLog non può creare la struttura delle cartelle dove installare le risorse. PHP potrebbe sessere installato con la modalità 'safe mode' impostata ad 'ON' o non hai i permessi per effettuare l'operazione. Puoi provare ad effettuare l'operazione manualmente, creando
Le seguenti cartelle: <br/><br/>%s<br/><br/>Se dovessero già esistere verificahj che la tua utenza vi possa leggere e scrivere.";


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
$messages["show_category_in_main_page"] = "Mostra questo argomento nella home page";
$messages["welcome_resource_center"] = "Bemnvenuto nel centro risorse!";
$messages["resource_center"] = "Centro Risorse";
$messages["resource_albums"] = "Risorse Album";
$messages["resources"] = "Risorse";
$messages["add_resource"] = "Aggiungi Risorsa";
$messages["add_album"] = "Aggiungi Album";
$messages["album"] = "Album";
$messages["album_name"] = "Nome Album";
$messages["parent_album"] = "Album superiore";
$messages["no_parent_album"] = "No album superiore";
$messages["resource_info"] = "Informazioni Risorsa";
$messages["size"] = "Grandezza";
$messages["format"] = "Formato";
$messages["dimensions"] = "Dimensioni";
$messages["bits_per_sample"] = "Bits per pixel";
$messages["bytes"] = "bytes";
$messages["pixels"] = "pixels";
$messages["time_offset"] = "Differenza oraria tra il server e te:";
$messages["hours"] = "Ore";
$messages["album_added_ok"] = "Nuovo album inserito.";
$messages["name"] = "Nome";
$messages["children"] = "Figlio";
$messages["see"] = "Vedi";
$messages["view"] = "Vista";
$messages["resource_info"] = "Informazione Risorsa";
$messages["number_of_channels"] = "Numero canali";
$messages["length"] = "Lunghezza";
$messages["number_of_files"] = "Numero di file";
$messages["compressed_size"] = "Dimensione compressa";
$messages["uncompressed_size"] = "Dimensione non compressa";
$messages["resource_file"] = "File che vuoi aggiungere";
$messages["add_to_album"] = "Aggiungi il file al seguente album";
$messages["edit_resource_album"] = "Edita Risorse Album";
$messages["error_loading_resource_album"] = "Errore durante la lettura dell'album.";
$messages["error_album_id_parameter_missing"] = "Id Album non corretto.";
$messages["error_album_parent_id_parameter_missing"] = "Id album superiore non trovato.";
$messages["error_updating_resource_album"] = "Errore durante l'aggiornamento dell'album.";
$messages["resource_album_updated_ok"] = "Album \"%s\" aggiornato.";
$messages["error_must_give_album_name"] = "Inserire il nome dell'album.";
$messages["error_adding_album"] = "Errore durante l'aggiunta dell'album.";
$messages["album_added_ok"] = "Album \"%s\" aggiunto.";
$messages["resource_added_ok"] = "Risorsa aggiunta.";
$messages["error_resource_forbidden_extension"] = "Non è possibile aggiungere la risorsa poichè ha un'estensione proibita.";
$messages["error_resource_too_big"] = "Non è possibile aggiungere la risorsa poichè troppo grande.";
$messages["error_uploads_disabled"] = "Non è possibile aggiungere la risorsa poichè gli upload sono disabilitati in questo sito.";
$messages["error_adding_resource"] = "Errore durante l'aggiunta della risorsa.";
$messages["error_loading_resource"] = "Errore durante la lettura della risorsa";
$messages["error_updating_resource"] = "Errore durante l'aggiornamento della risorsa.";
$messages["resource_updated_ok"] = "Risorsa \"%s\" aggiornata.";
$messages["error_no_resources_selected"] = "Nessuna risorsa selezionata da cancellare.";
$messages["resource_deleted_ok"] = "Risorsa \"%s\" eliminata.";
$messages["error_deleting_resource"] = "Errore durante la cancellazione della risorsa \"%s\".";
$messages["error_no_resource_uploaded"] = "Non ci sono file di risorse caricati.";
$messages["filtered_content"] = "Contenuti Filtrati";
$messages["global_filtered_content"] = "Contenuti Filtrati Globalmente";
$messages["block_content"] = "Filtra Contenuti";
$messages["blocked_hosts"] = "Host Blocccati";
$messages["global_blocked_hosts"] = "Host Bloccati Globalmente";
$messages["block_host"] = "Blocca Host";
$messages["security"] = "Sicurezza";
$messages["security_welcome"] = "Benvenuto nell'area della sicurezza!";
$messages["filtered_content_intro"] = "I seguenti contenuti/espressioni regolari sono bloccati in questo blog.";
$messages["global_filtered_content_intro"] = "I seguenti contenuti/espressioni regolari sono bloccati a livello globale.";
$messages["content"] = "Contenuto";
$messages["reason"] = "Ragione";
$messages["add_filtered_content"] = "Aggiungi Contenuti Filterati";
$messages["add_filtered_content_intro"] = "Le parole aggiunte quì non saranno consentite in nessun commento.";
$messages["global_add_filtered_content_intro"] = "Le parole aggiunte quì non saranno consentite in nessun commento di qualsiasi blog del sito.";
$messages["content_to_block"] = "Contento che vuoi bloccare";
$messages["block_this"] = "Blocca Questo";
$messages["mask"] = "Maschera";
$messages["access_blocked"] = "Accesso Blocccato";
$messages["posting_blocked"] = "Posting Blocccato";
$messages["block_host_intro"] = "Gli host agginti quì non potranno accedere solo a questo blog. Leggere l'help <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">cliccando quì</a> per ulteriori informazioni.";
$messages["global_block_host_intro"] = "Gli host aggiunti quì non potranno accedere al sito. Leggere l'help <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">cliccando quì</a> per ulteriori informazioni.";
$messages["block_type"] = "Tipo di Blocco";
$messages["error_invalid_ip_address"] = "Indirizzo IP non valido.";
$messages["error_provide_content_to_block"] = "Inserisci i contenuti da bloccare.";
$messages["error_must_create_album_first"] = "Devi creare un album prima di aggiungere una risorsa.";
$messages["error_resource_is_not_an_image"] = "La risorsa selezionata non è un'immagine.";
$messages["error_generating_resource_preview"] = "Errore in fase di rigenerazione dell'anteprima.";
$messages["resource_preview_generated_ok"] = "L'anteprima di questa risorsa è stata generata.";
$messages["regenerate_preview"] = "Rigenera Anteprima";
$messages["show_album"] = "Mostra Album";
$messages["show_album_when_browsing"] = "Mostra questo album agli utenti";
$messages["assigned_to_blog"] = "Assegna utente al seguente blog";
$messages["clean_up"] = "Epurazione";
$messages["purge_info"] = "La funzione di cancellazione elimina fisicamentetutti i post marcati come 'Cancellato'.";
$messages["spam_info"] = "I commenti marcati come spam possono essere tenuti nel DB per ''addestrare'' i filtri. Appena completato il tunig dei filtri è possibile eliminarli.";
$messages["no_spam"] = "No Spam";
$messages["spam"] = "Spam";
$messages["mark_as_spam"] = "Marca come spam";
$messages["mark_as_no_spam"] = "Marca come no spam";
$messages["enable_comments_for_post"] = "Abilita i commenti per questo post";
$messages["close_window"] = "Chiudi Finestra";
$messages["add_resource"] = "Aggiungi Risorsa";
$messages["add_resource_preview"] = "Aggiungi Preview";
$messages["add_album"] = "Aggiungi Album";
$messages["show_main_page"] = "Mostra in Main Page";
$messages["purge_spam_comments"] = "Cancella i commenti marcati come Spam";
$messages["purge_posts"] = "Cancella i Posts";
$messages["keep_spam_comments"] = "Conserva i commenti marcati come Spam";
$messages["throw_away_spam_comments"] = "Elimina i Commenti marcati come Spam";
$messages["error_adding_blocked_host"] = "Errore durante il bloccaggio dell'host.";
$messages["blocked_host_added_ok"] = "Host %s aggiunto alla lista di quelli bloccati.";
$messages["error_no_blocked_hosts_selected"] = "Non è stato selezionato alcun host da cancellare.";
$messages["blocked_host_deleted_ok"] = "Host \"%s\" cancellato.";
$messages["error_deleting_blocked_host"] = "Errore in fase di cancellazione dell'host bloccato \"%s\"";
$messages["edit_blocked_host"] = "Edita Host Bloccato";
$messages["error_fetching_blocked_host"] = "Errore leggendo l'host blocccato.";
$messages["error_updating_blocked_host"] = "Errore in aggiornamento dell'host blocccato.";
$messages["thumbnail_format"] = "Formato anteprima";
$messages["same_as_image"] = "Come immagine originale";
$messages["same"] = $messages["same_as_image"];



$messages["help_locale_folder"] = "Cartella per i file di localizzazione (lingua).";
$messages["help_default_locale"] = "Lingua di default per i nuovi blog.";
$messages["help_xmlrpc_api_enabled"] = "Abilita o disabilita l'interfaccia XMLRPC per l'invio dei post direttaemnte dal desktop.";
$messages["default_rss_profile"] = "RSS/RDF profile that will be used by default to generate feeds, if no special profile is specified";
$messages["help_security_pipeline_enabled"] = "Abilita le funzioni di sicurezza.";
$messages["help_ip_address_filter_enabled"] = "Abilita il banning di un indirizzo IP impedendogli di accedere al sito.";
$messages["help_content_filter_enabled"] = "Abilita un semplice filtro basato su espressioni regolari per  bloccare  commenti che contengono determinate perole o espressioni. Il filtro  Bayesiano può essere più efficiente.";
$messages["help_maximum_comment_size"] = "Dimensione massima dei commenti.";
$messages["help_bayesian_filter_enabled"] = "Abilita o disabilita i filtri bayesiani.";
$messages["help_bayesian_filter_spam_probability_treshold"] = "Valore minimo a cui un commento è considerato come spam. Deve essere compreso tra 0.01 e 0.99";
$messages["help_bayesian_filter_nonspam_probability_treshold"] = "Valore massimo Maximum a cui un commento è considerato non spam. Per valori compresi fra questi due sarà il commento sarà considerato non Spam ma forse richiederà un affianmento ulteriore";
$messages["help_bayesian_filter_min_length_token"] = "Minima lunghezza di un token.";
$messages["help_bayesian_filter_max_length_token"] = "Massima lunghezza di un token.";
$messages["help_bayesian_filter_number_significant_tokens"] = "Quanti token significativi deve avere un messaggio";
$messages["help_bayesian_filter_spam_comments_action"] = "Come gestire i commenti marcati come spam. Possono essere tenuti o respinti. La seconda opzione è preferibile.";
$messages["help_path_to_convert"] = "il tool 'convert' di ImageMagick è richiesto nel caso in cui si utilizzi ImageMagick come software per la generazione delle anteprime.";
$messages["help_thumbnail_height"] = "Altezza massima delel anteprime.";
$messages["help_resources_folder"] = "Cartella in cui salvare le risorse. Puù non essere nell'albero delle cartelle pubbliche.";

$messages["help_thumbnails_keep_aspect_ratio"] = "Mantenere la proporzione dell'immagine nell'anteprima.";
$messages["help_resources_enabled"] = "Abilita o disabilita la funzione 'Risorse'.";
$messages["help_thumbnail_method"] = "Software per la generazione delle anteprime. Se si utilizza ImageMagick, guardare di seguito (servono tools aggiuntivi).";
$messages["help_thumbnail_width"] = "Larghezza massima anteprime.";
$messages["external_interfaces"] = "Interfacce Esterne";
$messages["security_settings"] = "Impostazioni Sicurezza";
$messages["bayesian_filter_settings"] = "Impostazioni Filtri Bayesiani";
$messages["resources_settings"] = "Impostazioni Risorse";
$messages["help_thumbnail_format"] = "Formato di default che sarà usato durante la generazione delle anteprime.";
$messages["edit"] = "Edita";
$messages["blocked_content_added_ok"] = "Contenuti Bloccati aggiunti.";
$messages["blocked_content_updated_ok"] = "Contenuti Blocccati aggiornati";
$messages["help_disable_javascript_calendar"] ="Disabilita il calendario  realizzato con javascript e DHTML usato per
selezionare una data in fase di editing o aggiunta di un nuovo post.";
$messages["edit_filtered_content"] = "Edita Contenuti Filtrati";
$messages["error_updating_blocked_content"] = "Errore durante l'aggiornamento dei contenuti bloccati.";
$messages["audio_codec"] = "Audio Codec";
$messages["video_codec"] = "Video Codec";
$messages["sample_rate"] = "Sample rate";
$messages["files"] = "Files";
$messages["created"] = "Creato";
$messages["generated"] = "Generato";
$messages["about"] = "About";
$messages["menu"] = "Menu";
$messages["albums"] = "Album";
$messages["template_file"] = "File di Template";
$messages["download"] = "Download";
$messages["error_you_have_been_blocked"] = "Non sei autorizzato ad effetuare questa operazione.";

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

$messages["newBlogBlockedHost"] = "<p>This section will allow you to block a specific address or entire subnet from your Blog. You can select if you want them to be able to see it, but unable to post or simply unable to access it at all. Copy the offending address into the spaces provided and choose the proper subnet address space if necessary. Example: To block just the address of 192.168.1.123 you would choose the '32 bits' option to match the entire address. This blocks just this one address and works well for banning someone with a Static IP address. If you're seeing multiple IP Addresses for a particular individual (say 192.168.1.123, 192.168.1.225, 192.168.1.21 and 192.168.1.67) then you will want to ban a particular subnet range. Enter one of the IP Addresses that you see and choose '24 bits', '16 bits' or '8 bits'  to match the first 3 sections, first 2 sections or the first section respectively.<br/>
<br/>
<b>EXAMPLES</b>:<br/>
<br/>
192.168.1.123 - 32 bits: Matches only the 192.168.1.123 address<br/>
192.168.1.123 - 24 bits: Matches any address that starts with 192.168.1<br/>
192.168.1.123 - 16 bits: Matches any address that starts with 192.168<br/>
192.168.1.123 - 8 bits: Matches any address that starts with 192<br/>
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
