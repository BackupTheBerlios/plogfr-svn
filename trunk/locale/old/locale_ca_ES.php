<?php
// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "iso-8859-1";
$messages["locale_description"] = "Fitxer amb els missatges de pLog en català.";
// days of the week
$messages["days"] = Array( "Diumenge", "Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres", "Dissabte" );
// -- compatibility, do not touch -- //
$messages["Monday"] = $messages["days"][1];
$messages["Tuesday"] = $messages["days"][2];
$messages["Wednesday"] = $messages["days"][3];
$messages["Thursday"] = $messages["days"][4];
$messages["Friday"] = $messages["days"][5];
$messages["Saturday"] = $messages["days"][6];
$messages["Sunday"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "Di", "Dl", "Dm", "Dx", "Dj", "Dv", "Ds" );
// -- compatibility, do not touch -- //
$messages["Mo"] = $messages["daysshort"][1];
$messages["Tu"] = $messages["daysshort"][2];
$messages["We"] = $messages["daysshort"][3];
$messages["Th"] = $messages["daysshort"][4];
$messages["Fr"] = $messages["daysshort"][5];
$messages["Sa"] = $messages["daysshort"][6];
$messages["Su"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre" );
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

$messages["message"] = "Missatge";
$messages["error"] = "Error";

$messages["date"] = "Data";

// miscellaneous messages
$messages["of"] = "de";
$messages["recently"] = "RECENTMENT...";
$messages["comments"] = "comentaris";
$messages["comment on this"] = "Comentar";
$messages["my_links"] = "ELS MEUS ENLLAÇOS";
$messages["archives"] = "ARXIUS";
$messages["search"] = "CERCAR";
$messages["calendar"] = "CALENDARI";
$messages["editLinkCategories"] = "CATEGORIES";
$messages["search_s"] = "Cercar";
$messages["link_tracker"] = "Link Tracker";
$messages["search_this_blog"] = "Cercar en aquest bloc:";
$messages["about_myself"] = "Sobre mi...";
$messages["permalink_title"] = "Enllaç permanent l'arxiu";
$messages["permalink"] = "Permalink";
$messages["posted_by"] = "Enviat per ";
$messages["on_the"] = "el ";
$messages["page"] = "pàgina";
$messages["posted"] = "enviat";

$messages["reply"] = "Respondre";

// add comment form
$messages["add_comment"] = "Afegir comentari";
$messages["comment_topic"] = "Títol: ";
$messages["comment_text"] = "Text: ";
$messages["comment_username"] = "El teu nom: ";
$messages["comment_email"] = "La teva dirección de correu: ";
$messages["comment_url"] = "La teva pàgina personal: ";
$messages["comment_send"] = "Enviar";
$messages["comment_added"] = "Comentari enviat!";
$messages["comment_add_error"] = "Error enviant el comentari.";

$messages["article_does_not_exist"] = "L'article sol·licitat no existeix.";
$messages["no_posts_found"] = "No s'ha trobat cap article.";
$messages["user_has_no_posts_yet"] = "Aquest usuari no té cap article encara.";

$messages["info_about_myself"] = "Informació sobre mi...";
$messages["back"] = "Tornar";

$messages["back_top"] = "Tornar a Dalt";

$messages["post"] = "article";

$messages["trackbacks_for_article"] = "Trackbacks per l'article";
$messages["trackback_excerpt"] = "Fragment";
$messages["trackback_weblog"] = "Weblog";

$messages["search_results"] = "Resultats de la cerca";
$messages["search_matching_results"] = "Els següents articles concorden amb els termes de la cerca";
$messages["search_no_matching_posts"] = "No s'ha trobat cap article que concordi amb els termes de la cerca";

$messages["see_all_link"] = "(Faci click aquí per a veure tots els seus articles, desde el principi dels temps)";

$messages["read_more"] = "(Segueix)";

$messages["anonymous_poster"] = "Anònim";

$messages["syndicate"] = "ALTRES";

$messages["main"] = "Inici";

////// error messages /////
$messages["error_fetching_article"] = "L'article especificat no s'ha pogut trobar.";
$messages["error_fetching_articles"] = "Els articles no s'han pogut carregar.";
$messages["error_trackback_no_trackback"] = "No s'han trobat trackbacks per a l'article especificat.";
$messages["error_incorrect_article_id"] = "L'identificador de l'article és incorrecte.";
$messages["error_incorrect_blog_id"] = "L'identificador del diari no és correcte.";
$messages["error_comment_without_text"] = "Hauries d'escriure alguna com a contingut del comentari.";
$messages["error_comment_without_name"] = "Hauries de donar almenys el teu nom.";
$messages["error_adding_comment"] = "Hi ha hagut un error afegint el comentari a la base de dades.";
$messages["error_incorrect_parameter"] = "Paràmetre incorrecte.";
$messages["error_parameter_missing"] = "Falta un paràmetre a la petició.";
$messages["error_blog_has_no_links"] = "Aquest diari encara no té enllaços.";
$messages["error_comments_not_enabled"] = "La funció de comentar articles has estat desactivada en aquest lloc.";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////


////// help messages for the administration interface /////


$messages["addPost"] = "<p>S'ha afegit correctament el teu article. Ara pots seleccionar els 
servidors que vols enviar un ping de trackback, així ells sabran que has escrit sobre ells i podran
enllaçar-te.</p>";

$messages["help_editPosts"] = "<p>Sel·lecciona el títol del article per modificar-lo. També pots fer click
a la categoria del post per tenir accés a tots els articles de la categoria. Pots aplicar un filtre
pels articles per autor, estat i categoria usant les llistes desplegables de dalt. Es pot fer qualsevol combinació
de condicions. Fes click en el numero de comentaris (només disponible si hi ha almenys un comentari) per tenir
accés a tots els comentaris que has rebut pel article. </p>
<p>Pots esborrar un o més articles sel·leccionat la casella <b>'Esborrar'</b> i fent click al botó <b>'Esborrar Sel·leccionats'</b>.
<p>L'enllaç <b>'Estadístiques'</b> et mostrarà algunes dades sobre els articles, com el nombre de visites,
 els pings de trackback rebuts i els adreçes remotes que han enllaçat.</p>";

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
<p>The referers are the urls of all the hosts that visited this post, and the trackbacks table represents
how many trackback pings have been received for this post. They can't be deleted or modified.</p>";

$messages["help_editArticleCategories"] = "<p>This is a listing with all the post categories that
have been created so far. There must be at least one category before you can add an article, since
every article has to be categorized under a category. The <b>'Articles'</b> column shows how many
articles have been categorized under the given category. In the same way, a category can't be deleted
if it has an article assigned it; you must first remove all the articles and then you will be allowed
to remove the category.</p>
<p>You can delete more than one category at the same time by cheching their <b>'Delete'</b> column
and then clickin on the <b>'Delete Selected'</b> button.</p>";

$messages["help_newArticleCategory"] = "<p>From here you can add a new post category to the blog. All
what you need to provide is a name for the new category. Once it has been created, it will be available
for posts to be categorized under.</p>";

$messages["help_editLinks"] = "<p>This is a list with all the links that have been added. Like posts, every
link can be sorted in different categories and then displayed in the main page for visitors to see.</p>
<p>For every link, you will see here its name, the url where it is pointing to and under which category
it has been sorted. Finally you can also delete any of the links.</p>";

$messages["help_newLink"] = "<p>You can add a new link from here. You have to provide at least a valid
url and a name for the link. The description field is optional but useful to have more information
about the link. You need at least one link category before you can add any link.</p>";

$messages["help_editLinkCategories"] = "<p>This is a list with all the link categories that have been
created. Like with posts, you need at least one link category before you can add any link. Clicking
on the <b>'Links'</b> column will show all the links that belong to the category.</p>";

$messages["help_newLinkCategory"] = "<p>The only thing you need to provide in order to have a new
link category is a descriptive name for the category. Once the link category has been created,
it will be available for links to be categorized under.</p>";

$messages["help_blogSettings"] = "<p>From this page you can change some of the settings that control the
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
<li><b>Cut long posts and add a 'More...' link</b>: Set this to <b>'Yes'</b> if you would like pLog
to automatically add a 'More...' link to your posts on the main page if they are too long (see the
setting below) This feature is useful since it makes your frontpage less cluttered and also
smaller. However, it has some problems if there is a lot of HTML code in the page.</li>
<li><b>Cut posts after how many characters</b>: Set this to the amount of characters you would like
to allow before adding the 'More...' link. This setting is only meaningful if you enabled the
feature above.</li>
<li><b>Enable WYSIWYG edition of texts</b>: Set this to yes if you would like to have the possibility
to see how your posts look in real time. This feature is only available for users using either
Internet Explorer 5.5 or higer and Mozilla 1.3b or higher.</li>
<li><b>Enable comments</b>: Set this to yes if you would like to allow your users to make comments to your
posts. This will globally affect all your posts and all your users.</li>
</ul></p>";

$messages["help_userSettings"] = "<p>Things related to your user profile can be changed from this
page. Please note that your username cannot be changed.<ul>
<li><b>Password, Confirm Password</b>: If you would like to change your password, please type it in
the first text box. Do the same in the second box to confirm that you entered the same password.</li>
<li><b>Email address</b>: Please set this to a valid email address if you would like to use features
such as the notification when a comment is received to a post. It is used only for internal
purposes and will not be publicly displayed.</li>
<li><b>Bio</b>: You can type here some information about yourself. It can be left empty.</li>
</ul></p>";

$messages["help_pluginCenter"] = "<p>From here you can see which plugins have been installed. For every
plugin, you will see its identifier (the identifier you have to use when developing templates and
want to make use of the plugin features), the author of the plugin, and some descriptive text with
various information about the plugin, mainly how to use it.</p>";

$messages["help_Stats"] = "<p>You can see from here all the referers that have hit this site in the past.
The <b>'Article'</b> column reflects which article was visited by the referer or the value <b>'0'</b>
if the referer visited the main page or any other page which was not an article. Finally, the
<b>'Last hit date'</b> column is the time of the last hit received from that referer.</p>";

$messages["editArticleCategory"] = "<p>Please provide a new name for the category you are updating.</p>";

$messages["editLink"] = "<p>You have to provide at least a url and a name for the link. The link must also
be categorized under a category.</p>";

$messages["editLinkCategory"] = "Please provide a new name for the link category you are updating.</p>";

$messages["blogSelect"] = "Please select one of the operations from the menu.";

$messages["Error"] = "There was an error while executing the requested operation. Please see
the main page for more information regarding the error.";

$messages["Message"] = "Please see the main page for more information regarding the message.";

//////// strings for the administration interface ///////



$messages["admin_interface_title"] = "Interfície d'Administració de pLog";
$messages["administration"] = "Administració";
$messages["help"] = "Ajuda";
$messages["plog_help"] = "Ajuda de pLog";
$messages["newPost"] = "Nou Article";
$messages["editPosts"] = "Articles";
$messages["editArticleCategories"] = "Categories";
$messages["admin_links"] = "Enllaços";
$messages["editLinkCategories"] = "Categories d'Enllaços";
$messages["settings"] = "Arranjaments";
$messages["Logout"] = "Sortir";

// new post page
$messages["topic"] = "Títol";
$messages["text"] = "Text";
$messages["category"]  = "Categoria";
$messages["status"] = "Estat";
$messages["post_status_draft"] = "Esborrany";
$messages["post_status_published"] = "Publicat";
$messages["post_status_deleted"] = "Esborrat";
$messages["post_status_all"] = "Tots";
$messages["send_notification"] = "Avisar-me cada vegada que hi hagi un comentari.";
$messages["send_trackback_pings"] = "Buscar enllaços a l'article i enviar notificacions de trackback a aquells que ho suportin.";
$messages["add_post"] = "Afegir!";
$messages["xmlrpc_ping_ok"] = "Ping XML-RPC enviat correctament a ";
$messages["error_sending_xmlrpc_ping"] = "Hi ha hagut un error enviant el ping XML-RPC a ";
$messages["error_sending_xmlrpc_ping_message"] = "El missatge d'error fou: ";
$messages["preview"] = "Previsualitzar";
$messages["post_added"] = "L'article ha estat afegit correctament.";
$messages["you_will_be_notified"] = "També serà notificat cada vegada que s'afegeixi un nou comentari a l'article.";
$messages["post_added_not_published"] = "Article afegit però no publicat.";
$messages["error_adding_post"] = "Hi ha hagut un error afegint el missatge!";
$messages["error_must_fill_all_fields"] = "Hauria d'omplir tots els camps.";
$messages["error_must_have_one_category"] = "Es necessita com a mínim una categoria abans d'afegir un nou article.";

// send trackbacks page
$messages["send_trackback_pings"] = "Enviar notificacions de trackback";
$messages["links_found"] = "S'han trobat els següents enllaços al seu article. Marqui els que hi desitjaria enviar un
una notificació de trackback (aquest procés pot trigar una estona)";
$messages["trackbacks_no_urls_selected"] = "No ha seleccionat cap dels enllaços i per tant no s'ha enviat cap notificació de trackback.";
$messages["trackbacks_received_ok"] = "Els següents enllaços han rebut la notificació de trackback correctamente:";
$messages["trackbacks_no_trackback"] = "Els següents enllaços no han especificat una direcció de notificació de trackback:";
$messages["trackbacks_problems_sending"] = "Hi ha hagut problemes intentant enviar la notificació de trackback als següents enllaços. Pot intentar-ho de nou si així ho desitja.";
$messages["trackbacks_received_all_hosts"] = "Tots els enllaços han rebut la notificació de trackback correctament.";
$messages["ping_selected"] = "Notificar enllaços seleccionats";

// edit posts
$messages["author"] = "Autor";
$messages["category_all"] = "Totes";
$messages["author_all"] = "Tots";
$messages["update"] = "Actualitzar";
$messages["date"] = "Data";
$messages["help_Stats"] = "Estadístiques";
$messages["delete"] = "Esborrar";

$messages["delete_selected"] = "Esborrar seleccionats";

// edit post
$messages["edit_post"] = "Editar Article";
$messages["error_getting_post_to_update"] = "Hi ha hagut un error obtenint l'article seleccionat per editar.";
$messages["error_updating_post_in_database"] = "Hi ha hagut un error actualitzant l'article a la base de dades.";
$messages["post_successfully_updated"] = "Article actualitzat correctament.";
$messages["notification_removed"] = "La notificació d'avís de nous comentaris que hi havia activada per aquest article ha estat eliminada.";

// post statistics
$messages["statistics_for_post"] = "Estadístiques de l'article ";
$messages["error_fetching_post"] = "Hi ha hagut un error obtenint l'article.";
$messages["times_post_has_been_read"] = "Vegades que l'article ha estat llegit: ";
$messages["referers"] = "Referers";
$messages["id"] = "Id";
$messages["url"] = "Url";
$messages["hits"] = "Vegades";
$messages["trackbacks"] = "Trackbacks";

// post comments
$messages["error_fetching_comments"] = "Hi ha hagut un error obtenint els comentaris de l'article.";
$messages["comments_for_post"] = "Comentaris de l'article ";
$messages["email"] = "E-Mail";
$messages["ip_address"] = "Adreça IP";

// delete comments
$messages["error_no_comments_selected"] = "No s'ha seleccionat cap comentari per esborrar.";
$messages["error_deleting_comment"] = "Hi ha hagut un error esborrant el comentari ";
$messages["comment_deleted_ok"] = "El comentari amb títol \"%s\" ha estat esborrat correctament.";

// categories list
$messages["category_name"] = "Nom";

// removing posts
$messages["post_cannot_be_deleted"] = "L'article no es pot esborrar.";
$messages["no_posts_selected"] = "No s'ha seleccionat cap article per esborrar.";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "Hi ha hagut un error esborrant l'article \"%s\" (id = %d)";
$messages["post_deleted_ok"] = "L'article \"%2\$s\" ha estat esborrat correctament (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "No s'ha seleccionat cap categoria per esborrar.";
$messages["error_category_has_articles"] = "No s'ha pogut esborrar la categoria \"%s\" perque hi ha com a mínim un
article classificat en aquesta categoria. Si us plau elimini aquest(s) article(s) primer i torni-ho a intentar de nou.";
$messages["error_deleting_category"] = "Hi ha hagut un error esborrant la categoria \"%s\" de la base de dades.";
$messages["category_deleted_ok"] = "La categoria \"%s\" ha estat esborrada correctament.";

// add category
$messages["newArticleCategory"] = "Afegir Nova Categoria";
$messages["add_new_category_info"] = "Doni si us plau un nom vàlid per a la nova categoria.";
$messages["category_added_ok"] = "Nova categoria afegida correctament.";
$messages["error_adding_article_category"] = "Hi ha hagut un error afegint la nova categoria.";

// edit categories
$messages["edit_category"] = "Editar Categoria";
$messages["please_provide_valid_category_name"] = "Doni si us plau un nom vàlid per a la categoria.";
$messages["error_incorrect_category_id"] = "Identificador d'article incorrecte.";

// update the category
$messages["error_fetching_category"] = "Hi ha hagut un error obtenint la categoria.";
$messages["error_updating_category"] = "Hi ha hagut un error actualitzant la categoria.";
$messages["error_empty_category_name"] = "Ha de donar un nom valid per a la categoria.";
$messages["category_updated_ok"] = "Categoria actualitzada correctament.";

// edit links
$messages["link_name"] = "Nom";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["category"];
$messages["link_description"] = "Descripció";
$messages["editLinks"] = "Enllaços";

// edit a link
$messages["error_provide_name_and_url"] = "Ha de donar com a mínim un nom i una adreça per a l'enllaç.";
$messages["error_invalid_link_id"] = "L'identificador de l'enllaç és incorrecte o no s'ha especificat.";
$messages["error_fetching_link"] = "Hi ha hagut un error obtenint l'enllaç.";
$messages["error_updating_link"] = "Hi ha hagut un error actualitzant l'enllaç.";
$messages["link_updated_ok"] = "L'enllaç ha estat actualitzat correctament.";
$messages["error_fetching_link_categories"] = "Hi ha hagut un error obtenint les categories d'enllaços.";

// add a link
$messages["add_new_link"] = "Afegir Nou Enllaç";
$messages["newLink"] = "Afegir Enllaç";
$messages["error_adding_link"] = "Hi ha hagut un error afegint l'enllaç.";
$messages["link_added_ok"] = "L'enllaç ha estat afegit correctament.";
$messages["error_provide_name_and_url"] = "Ha de donar com a mínim un nom i una adreça web per a l'enllaç.";
$messages["error_must_have_one_link_category"] = "Ha de tenir com a mínim una categoria d'enllaços abans d'afegir un nou enllaç";

// delete a link
$messages["error_no_links_selected"] = "No s'han seleccionat enllaços per esborrar.";
$messages["error_removing_link"] = "Hi ha hagut un error eliminant l'enllaç \"%s\" de la base de dades.";
$messages["link_deleted_ok"] = "L'enllaç \"%s\" ha estat eliminat correctament de la base de dades.";

// edit link categories
$messages["newLinkCategory"] = "Afegir Nova Categoria d'Enllaços";
$messages["link_categories_help"] = "Ha de tenir com a mínim una categoria d'enllaços abans d'afegir un enllaç nou.";
$messages["link_category_name"] = "Nom";
$messages["link_category_links"] = "Enllaços";

// new link category
$messages["newLinkCategory"] = "Afegir Nova Categoria d'Enllaços";
$messages["new_link_category_info"]="Les categories d'enllaços l'ajudaràn a classificar els enllaços que afegeixi. Els enllaços i les seves categories podràn ser mostrats després a la pàgina principal.";
$messages["newLinkCategory"] = "Afegir Categoria d'Enllaços";
$messages["error_provide_link_category_name"] = "Ha de donar un nom vàlid per a la nova categoria.";
$messages["error_adding_link_category"] = "Hi ha hagut un error afegint nova categoria d'enllaços.";
$messages["link_category_added_ok"] = "Categoria d'enllaços afegida correctament.";

// edit link category
$messages["edit_link_category"] = "Editar Categoria d'Enllaços";
$messages["error_updating_link_category"] = "Hi ha hagut un error actualitzant la categoria d'enllaços.";
$messages["link_category_updated_ok"] = "La categoria d'enllaços ha estat actualitzada correctament.";
$messages["error_fetching_link_category"] = "Hi ha hagut un error obtenint la categoria d'enllaços.";
$messages["error_incorrect_link_category_id"] = "L'identificador de categoria d'enllaços és incorrecte.";

// delete link categories
$messages["error_no_link_category_selected"] = "No s'ha seleccionat cap categoria d'enllaços per esborrar.";
$messages["error_links_in_link_category"] = "La category d'enllaços \"%s\" no s'ha pogut eliminar perque té com a mínim un
enllaç classificat en ella. Esborri primer els enllaços i torni-ho a intentar.";
$messages["error_removing_link_category"] = "Hi ha hagut un error eliminant la categoria d'enllaços \"%s\".";
$messages["link_category_deleted_ok"] = "La category d'enllaços \"%s\" ha estat eliminada correctament.";
// this error is shown when for some reason the category could not be fetched from the database
// and we can't show its name
$messages["error_removing_link_category_2"] = "Hi ha hagut un error eliminant la categoria d'enllaços amb identificador = %d";

// blog settings page
$messages["blogSettings"] = "Arranjaments del diari";
$messages["userSettings"] = "Perfil d'Usuari";
$messages["pluginCenter"] = "Plugins";
$messages["Stats"] = "Estadístiques";
$messages["blog_name"] = "Nom del diari";
$messages["long_blog_name"] = "Text més llarg, descrivint aquest diari";
$messages["language_used"] = "Llenguatge usat per mostrar els texts";
$messages["items_main_page"] = "Quants articles li agradaria mostrar a la pàgina principal?";
$messages["items_as_recent"] = "Quants articles li agradaria mostrar com a \"Recents\"?";
$messages["template_used"] = "Disseny usat per mostrar el contingut d'aquest diari";
$messages["cut_posts"] = "Escurçar els articles que siguin massa llargs a la pàgina principal i afegir un enllaç \"Continua\"?";
$messages["cut_posts_after_characters"] = "Quants caràcters li agradaria mostrar abans d'escurçar l'article?";
$messages["enable_wysiwyg_edition"] = "Activar l'edició visual de codi HTML? (Només disponible per Internet Explorer 5.5 i Mozilla 1.3b o superiors)";
$messages["enable_comments"] = "Activar comentaris per tots els articles?";
$messages["yes"] = "Si";
$messages["no"] = "No";
$messages["error_invalid_locale"] = "Valor incorrecte del llenguatge escollit.";
$messages["error_incorrect_max_recent_items"] = "Ha de donar un nombre vàlid d'articles que li agradaria mostrar com a recents";
$messages["error_incorrect_number_of_posts"] = "Ha de donar un nombre vàlid d'articles que li agradia mostrar a la pàgina principal.";
$messages["error_incorrect_template"] = "El disseny especificat per mostrar els continguts és incorrecte.";
$messages["error_no_blog_name"] = "Ha de donar un nom vàlid per a aquest diari.";
//$messages["error_incorrect_show_more_threshold"] = "Ha de donar un nombre de caràcters vàlid abans d'escurçar l'article."
$messages["error_incorrect_show_more_threshold"] = "asdfasf";
$messages["error_updating_settings"] = "Hi ha hagut un error actualitzant els arranjaments d'aquest diari.";
$messages["blog_settings_updated_ok"] = "Els arranjaments d'aquest diari han estat actualitzats correctament.";
$messages["permanent_blog_url"] = "Adreça d'aquest diari (no modificable)";

// user profile page
$messages["username"] = "Nom d'usuari";
$messages["password"] = "Paraula clau";
$messages["confirm_password"] = "Paraula clau [confirmar]";
$messages["email_address"] = "Adreça de correu";
$messages["bio"] = "Sobre mi";
$messages["empty_no_change"] = "Deixar buit si no es desitja canviar-la";
$messages["user_settings_updated_ok"] = "El perfil d'usuari ha estat actualitzat correctament.";
$messages["error_updating_user_settings"] = "Hi ha hagut un error actualitzant el perfil d'usuari.";
$messages["error_passwords_dont_match"] = "La paraula clau donada i la confirmació no són iguals.";
$messages["error_incorrect_password"] = "Ho sento, la paraula clau no és vàlida.";
$messages["error_incorrect_email_address"] = "L'adreça de correu no és vàlida.";

// plugin center page
$messages["plugins_available"] = "Aquest és un llistat dels plugins disponibles.";
$messages["identifier"] = "Identificador";
$messages["description"] = "Descripció";
$messages["error_plugins_disabled"] = "El suport per a plugins ha estat desactivat.";

// statistics page
$messages["statistics_info"] = "Un identificador de 0 indica que s'ha visitat la pàgina principal i no cap article en concret.";
$messages["article_id"] = "Id. d'Article";
$messages["last_hit_date"] = "Data Últim Accés";
$messages["error_fetching_referers"] = "Error obtenint els referers per a aquest lloc web de la base de dades";

// login screen
$messages["login_page_title"] = "Interfície d'Administració de pLog";
$messages["login"] = "Entrada";
$messages["welcome_message"] = "Benvingut a pLog";
$messages["error_incorrect_username_or_password"] = "El nom d'usuari o la paraula clau són incorrectes.";
$messages["error_dont_belong_to_any_blog"] = "L'usuari és vàlid però no pertany a cap diari.";
$messages["error_no_username_or_password"] = "Ha de donar un nom d'usuari una paraula clau.";
$messages["choose_one_blog"] = "Pertany als següents diaris. Esculli un per treballar ara";
$messages["continue"] = "Continuar";
$messages["logout_message"] = "El procés de sortida ha acabat correctament.";
$messages["logout_message_2"] = "<a href=\"admin.php\">Faci clic aqui</a> per tornar a entrar, o
aqui per anar a <a href=\"%1\$s\">%2\$s</a>.";
$messages["logout_title"] = "Sortida";
$messages["error_access_forbidden"] = "Accés no permès. Identifiqui's primer aqui.";

// new strings added for 0.2
////////////////////////////////////////////////////////////////////
$messages["site_admin"] = "Administració del web";
$messages["site_stats"] = "Estadístiques del web";
$messages["createUser"] = "Afegir usuari";
$messages["siteUsers"] = "Usuaris";
$messages["createBlog"] = "Afegir diari";
$messages["editSiteBlogs"] = "Diaris personals";
$messages["siteLocales"] = "Idiomes";
$messages["newLocale"] = "Afegir idioma";
$messages["siteTemplates"] = "Plantilles";
$messages["newTemplate"] = "Afegir nova plantilla";
$messages["editSiteSettings"] = "Configuració general";
$messages["adminSettings"] = "Configuració del web";
$messages["help_comments_enabled"] = "Habilita o deshabilita els comentaris de tot el web.";
$messages["help_beautify_comments_text"] = "Respectar el format del usuari en els comentaris.";
$messages["help_rdf_enabled"] = "Habilita o deshabilita la generació d'un RDF amb els últims articles.";
$messages["help_temp_folder"] = "Carpeta que utilitzarà l'aplicació per dur a terme algunes operacions que necessiten un espai temporal.";
$messages["help_base_url"] = "Aquesta adreça URL s'utilitzarà per generar adreces valides, si us plau posa el valor correcte";
$messages["help_show_posts_max"] = "Nombre d'articles que es mostren en la pantalla principal per defecte.";
$messages["help_recent_posts_max"] = "Nombre d'articles que es mostren com recents, per defecte.";
$messages["help_template_folder"] = "Aquesta carpeta es on l'aplicació ha de buscar les plantilles.";
$messages["help_default_template"] = "La plantilla per defecte dels nous diaris personals.";
$messages["help_default_locale"] = "L'idioma per defecte que s'utilitzarà amb els nous diais i a l'entrada d'usuaris a l'administració.";
$messages["help_html_allowed_tags_in_comments"] = "El codi HTML no serà esborrat dels comentaris que enviïn els usuaris.";
$messages["help_referer_tracker_enabled"] = "Afegeix informació molt bàsica sobre les peticions a la base de dades, si el client té la informació disponible.";
$messages["help_rss_parser_enabled"] = "Habilita o deshabilita el parsejador de RSS a les plantilles.";
$messages["help_show_more_enabled"] = "Habilita o deshabilita la característica \"Segueix...\" per defecte.";
$messages["help_show_more_threshold"] = "Quants caracters s'han de mostrar per mostrar l'enllaç de \"Segueix...\".";
$messages["help_update_article_reads"] = "Quan s'ha d'actualitzar o no el contador intern que representa el nombre de vegades que s'ha llegit un article.";
$messages["help_request_format_mode"] = "Mode \"Normal\" generarà adreces URL normals mentre que \"Search Engine Friendly\" generara adreces més fàcils de llegir i millors pels buscadors. Requereix Apache i la possibilitat de usar un arxiu .htaccess";
$messages["help_xmlrpc_ping_enabled"] = "Quan s'ha d'enviar una notificació XMLRPC als servidors configurats cada vegada que s'afegeix un article.";
$messages["help_xmlrpc_ping_hosts"] = "Llista dels servidors que soporten notificacions XMLRPC. Si us plau posa els diferents servidors en diferents linies, tants com vulguis.";
$messages["help_trackback_server_enabled"] = "Habilita o deshabilita les peticions de trackback.";
$messages["help_htmlarea_enabled"] = "Habilita o deshabilita l'edició WYSIWYG dels articles.";
$messages["help_plugin_manager_enabled"] = "Habilita o deshabilita els pluguins.";
$messages["help_check_email_address_validity"] = "Quan es registra un nou diari, es preguntara als usuaris una adreça e-mail vàlida que serà verificada per autentificar-la que és real.";
$messages["help_summary_page_show_max"] = "Quants articles s'han de mostrar a la pantalla de resum inicial.";
$messages["help_minimum_password_length"] = "Quants caràcters ha de tenir com a mínim una paraula clau.";
$messages["help_users_can_add_templates"] = "Els usuaris poden afegir plantilles específiques pel seu diari?";
$messages["help_email_service_enabled"] = "Habilita o deshabilita el servei d'email, utilitzat per enviar notificacions de comentaris per exemple.";
$messages["post_notification_source_address"] = "Adreça de remitent (De:) utilitzada per enviar els correus electrònics.";
$messages["help_email_service_type"] = "Mètode per a enviar correu electrònic. Si us plau, selecciona'n un i no oblidis de triar els arranjaments de sota.";
$messages["help_smtp_host"] = "Si utilitzes SMTP com a mètode per enviar, aquest es el servidor que serà utilitzat per enviar els missatges.";
$messages["help_smtp_port"] = "Port del servidor SMTP especificat.";
$messages["help_smtp_use_authentication"] = "Si el servidor SMTP soporta autentificació i la vols utilitzar, si us plau activa aquesta característica i omple els següents camps.";
$messages["help_smtp_username"] = "Nom d'usuari que serà utiltizat quan s'enviïn emails utilitzant SMTP i l'autentificació estigui habilitada.";
$messages["help_smtp_password"] = "Paraula clau que serà utilitzada quan s'enviïn emails utilitzant SMTP i l'autentificació estigui habilitada.";
$messages["help_uploads_enabled"] = "Habilita o deshabilita la puajda de fitxers. Aquesta característica afecta a la pujada de noves plantilles i a afegir fitxers a les plantilles existents.";
$messages["help_maximum_file_upload_size"] = "Tamany màxim en bytes dels fitxers pujats per usuaris.";
$messages["help_upload_forbidden_files"] = "Llista de les extensions que estan habilitades per pujar. Pots especificar totes les que necessitis separades per un espai en blanc.";
$messages["help_path_to_tar"] = "Ruta on es troba l'eina 'tar'.";
$messages["help_path_to_gzip"] = "Ruta on es troba l'eina 'gzip'.";
$messages["help_path_to_bz2"] = "Ruta on es troba l'eina 'bzip2'.";
$messages["help_path_to_unzip"] = "Ruta on es troba l'eina 'unzip'.";

$messages["add_user_give_information"] = "Si us plau, entra la següent informació per a crear un nou usuari.";

$messages["site_registered_users"] = "Aquests són tots els usuaris registrats en el servidor.";

$messages["add_blog_give_information"] = "Si us plau, omple la següent informació per a crear un diari nou.";
$messages["blog_title"] = "Títol del diari";
$messages["blog_owner"] = "Administrador del diari";

$messages["site_registered_blogs"] = "Aquest són tots els diaris registrats en aquest web.";
$messages["editSiteUsers"] = "Modificar Usuaris";

$messages["upload_locale"] = "Carregar idioma";
$messages["use_this_form_to_upload_locale"] = "  Utilitza aquest formulari per afegir un nou idioma al servidor. Si no tens la possibilitat de pujar fitxers, si us plau consulta el formulari inferior.";
$messages["locale_file"] = "Fitxer d'idioma";
$messages["manually_add_locale"] = "Afegir Idioma de forma manual";
$messages["use_this_form_if_cant_upload_locale"] = "Utilitza aquest segon formulari si no tens la possibilitat de pujar fitxers al teu servidor. El fitxer s'ha de copiar a la carpeta d'idiomes per defecte abans d'executar aquesta operació. Si no és així es produïra un error.";
$messages["locale_code"] = "Codi d'idioma";
$messages["locale_encoding"] = "Codificació";

$messages["template_will_be_available_for_all"] = "La nova plantilla estarà disponible automaticament a tots els diaris d'aquest web.";

$messages["use_this_form_to_upload_template"] = "  Utilitza aquest formulari per afegir una nova plantilla al servidor. Si no tens la possibilitat de pujar fitxers, si us plau consulta el formulari inferior. Les plantilles han d'estar comprimiders en un fitxer de tipus .zip, .tar.gz o tar.bz2.";
$messages["upload_template"] = "Carregar plantilla";
$messages["manually_add_template"] = "Afegir Plantilla de forma manual";
$messages["use_this_form_if_cannot_upload_template"] = " Utilitza aquest segon formulari si no tens la possibilitat de pujar fitxers al teu servidor. El fitxer s'ha de copiar a la carpeta de plantilles per defecte abans d'executar aquesta operació. Si no és així es produïra un error.";
$messages["template_id"] = "Identificador de Plantilla";

$messages["templates_available_for_all"] = "Aquestes són les plantilles que estan disponibles a tots els diaris del web.";
$messages["add_file"] = "Afegir Fitxer";

$messages["setting_name"] = "Nom";
$messages["setting_value"] = "Valor";
$messages["setting_description"] = "Descripció";

$messages["plain"] = "Normal";
$messages["search_engine_friendly"] = "Search Engine Friendly";

$messages["general_settings"] = "Configuració general";
$messages["helper_tools_settings"] = "Configuració d'eines d'ajuda";
$messages["uploads_settings"] = "Configuració Pujada Fitxers";
$messages["email_settings"] = "Configuració d'Email";

$messages["number_blogs"] = "Nombre de diaris";
$messages["number_users"] = "Nombre d'usuaris";
$messages["number_posts"] = "Nombre d'articles";
$messages["number_posts_today"] = "Nombre d'articles avui";
$messages["number_posts_this_month"] = "Nombre d'articles aquest mes";

$messages["date"] = "Data";
$messages["time"] = "Hora";

$messages["comments_order"] = "Ordre en que apareixen els comentaris:";
$messages["oldest_first"] = "El més antic primer";
$messages["newest_first"] = "El més recent primer";

$messages["blog"] = "Diari personal";
$messages["blog_id"] = "Identificador Numèric del Diari Personal";

$messages["showBlogUsers"] = "Usuaris del diari";
$messages["available_users"] = "Usuaris disponibles";
$messages["add"] = "Afegir";
$messages["remove"] = "Esborrar";

$messages["user_id"] = "Identificador Numèric de l'Usuari";

$messages["new_password"] = "Nova paraula clau";
$messages["has_administrator_privileges"] = "Té privilegis d'administrador";
$messages["related_to_the_following_blogs"] = "Diaris relacionats";

$messages["add_user_to_blog_form"] = " Aquest formulari serveix per afegir usuaris al teu diari. L'usuari només podrà afegir o modificar articles, però no podrà modificar els arranjaments del diari.";
$messages["add_user_enter_username"] = " Entra el nom d'usuari que vulguis afegir. L'usuari ha d'estar registrat en aquest servidor, sinó ocasionarà un error.";
$messages["add_user_send_notification"] = "Enviar notificació per email a l'usuari.";
$messages["add_user_type_notification"] = "Escriu el text que vulguis enviar a aquest usuari";

$messages["following_users_have_permissions"] = " Els següents usuaris formen part d'aquest diari. Ells poden afegir, modificar o esborrar articles però no poden canviar res dels arranjaments del diari.";
$messages["revoke_permissions"] = "Anul·lar Permisos";

$messages["newBlogTemplate"] = "Afegir Plantilla al Diari";
$messages["manually_newBlogTemplate"] = "Afegir Plantilla Manualment";
$messages["template_available_only_for_this_blog"] = "Aquest plantilla només serà disponible per aquest diari.";
$messages["use_form_to_upload_blog_template"] = "Utilitza aquest formulari per pujar una nova plantilla al servidor. Sino tens la possibilitat de pujar arxius, utiltiza el formulari de sota. Les plantilles han d'estar comprimides en un paquet zip, tar.gz o tar.bz2 per a poder pujar-les.";
$messages["use_form_if_cannot_upload_blog_template"] = "Use this second form if you don't have the possibility of uploading files to your server. The file must have been copied to the default template folder before executing this operation. Otherwise it will result in an error.";

$messages["blogTemplates"] = "Blog Templates";
$messages["templates_only_available_for_this_blog"] = "Les següents plantilles només estaran disponibles en aquest diari.";

$messages["add_file_to_blog_template"] = "Afegir Fitxer a la Plantilla del Diari"; 
$messages["upload_file_to_blog_template"] = "Selecciona el fitxer que vols afegir a la plantilla.";

$messages["error_user_id_incorrect"] = "Identificador d'usuari incorrecte.";
$messages["error_incorrect_user_id"] = $messages["error_user_id_incorrect"];
$messages["error_fetching_user_information"] = "S'ha produït un error recuperant la informació de l'usuari.";
$messages["error_password_incorrect"] = "La paraula clau és massa curta o invàlida.";
$messages["error_updating_user_settings"] = "No puc actualitzar les característiques de l'usuari seleccionat.";
$messages["user_settings_updated_ok"] = "Característiques del usuari \"%s\" actualitzades correctament.";
$messages["error_no_users_selected_to_add"] = "No s'han seleccionat usuaris per afegir.";
$messages["user_added_to_blog_ok"] = "L'usuari \"%s\" ha estat afegit en aquest diari.";
$messages["error_adding_user_to_blog"] = "S'ha produït un error afegint l'usuari \"%s\" al diari.";
$messages["error_no_users_selected_to_remove"] = "No s'han seleccionat usuaris per esborrar.";
$messages["user_removed_from_blog_ok"] = "L'usuari \"%s\" ha estat exclòs d'aquest diari.";
$messages["error_removing_user_from_blog"] = "S'ha produït un error esborrant l'usuari \"%s\" d'aquest diari.";

$messages["error_incorrect_plugin_id"] = "L'identificador del plugin és incorrecte.";
$messages["error_configuring_plugin"] = "S'ha produït un error configurant el plugin: ";
$messages["site_config_saved_ok"] = "Les configuración del lloc web han estat guardades correctament.";
$messages["error_saving_site_config"] = "S'ha produït un error guardant la configuració.";

$messages["error_incorrect_blog_owner"] = "L'usuari seleccionat com a propietari del diari no existeix.";
$messages["error_updating_blog_settings"] = "S'ha produit un error actualitzant les característiques del diari \"%s\"";
$messages["blog_settings_updated_ok"] = "Les característiques del diari \"%s\" s'han actualitzat correctament.";

$messages["error_fetching_users"] = "S'ha produït un error recuperant els usauris del lloc web.";

$messages["error_fetching_blogs"] = "S'ha produït un error recuperant els diaris del lloc web.";

$messages["error_incorrect_template_id"] = "L'identificador de la plantilla no és vàlid o no existeix.";

$messages["error_no_users_selected"] = "No s'han seleccionat usuaris per a ser esborrats.";
$messages["error_could_not_find_user"] = "No puc trobar l'usuari \"%s\" en aquest lloc.";
$messages["error_deleting_user"] = "S'ha produït un error esborrant l'usuari \"%s\"";
$messages["user_deleted_ok"] = "L'usuari \"%s\" s'ha esborrat correctament.";

$messages["error_must_give_blog_name"] = "Dóna un nom vàlid pel diari.";
$messages["error_adding_blog"] = "S'ha produït un error afegint el diari a la base de dades.";
$messages["blog_added_ok"] = "El nou diari \"%s\" s'ha afegit a la base de dades correctament.";

$messages["error_template_not_inside_folder"] = "Els fitxers de la plantilla han d'estar dins la carpeta.";
$messages["error_missing_base_files"] = "Falten alguns dels fitxers basics de la plantilla.";
$messages["error_unpacking"] = "S'ha produït un error descomprimint el fitxer.";
$messages["error_forbidden_extensions"] = "Alguns dels fitxers de la plantilla estan prohibits.";
$messages["error_creating_working_folder"] = "There was an error checking the template set";
$messages["error_checking_template"] = "There was an error with the template set (code = %s)";
$messages["error_add_template_disabled"] = "Users are not allowed to add templates in this site.";
$messages["error_must_upload_file"] = "You must upload a file.";
$messages["error_no_template_name"] = "You must provide a template name.";
$messages["error_uploads_disabled"] = "The upload feature has been disabled in this site.";
$messages["error_installing_template"] = "There was an error installing the template set.";
$messages["template_installed_ok"] = "The new template set has been successfully installed as \"%s\".";

$messages["error_adding_template_file"] = "There was an error adding the file to the template set.";
$messages["error_file_forbidden"] = "Files of this type have been forbidden in this site.";
$messages["error_file_too_big"] = "The file is too big. Maximum allowed size is \"%s\" bytes.";
$messages["template_file_added_ok"] = "File added successfully to template \"%s\".";

$messages["error_plugin_cannot_be_configured"] = "The plugin cannot be configured.";

$messages["error_incorrect_username"] = "The username is incorrect or already exists.";
$messages["error_username_already_exists"] = "There is already a user registered with the same username.";
$messages["error_adding_user"] = "There was an error whiel adding the new user to the database.";
$messages["user_added_ok"] = "The new user \"%s\" has been successfully added.";

$messages["error_no_blogs_selected"] = "You must select at least one blog to delete.";
$messages["error_blog_is_default_blog"] = "\"%s\" cannot be deleted because it is the default blog.";
$messages["blog_deleted_ok"] = "Blog \"%s\" has been successfully deleted.";
$messages["error_deleting_blog"] = "There was an error while deleting blog \"%s\".";

$messages["error_no_templates_selected"] = "No templates were selected to remove.";
$messages["error_removing_template"] = "There was an error removing the template \"%s\"";
$messages["template_removed_ok"] = "Template \"%s\" removed successfully.";

$messages["error_no_users_selected_to_remove_from_blog"] = "No users were selected to remove from this blog.";
$messages["error_removing_user_from_blog"] = "There was an error removing user \"%s\" from this blog.";
$messages["user_removed_from_blog_ok"] = "User \"%s\" has been successfully removed from this blog.";

$messages["error_incorrect_locale_code"] = "The given locale code is not valid.";
$messages["error_invalid_locale_file"] = "The file does not seem to be a valid locale file.";
$messages["error_adding_locale_file"] = "There was an error adding the new locale file. Please make sure that the file has been uploaded to the locale folder prior to this operation and that it has correct permissions.";
$messages["locale_added_ok"] = "The new locale \"%s\" has been successfully added.";
$messages["error_saving_locale"] = "There was an error saving the new locale file to the locale folder. Please make sure that the folder has the right access permissions.";

$messages["error_no_locales_selected"] = "No locales were selected to delete.";
$messages["error_deleting_only_locale"] = "This is the only locale available in the system and therefore it cannot be deleted.";
$messages["locale_deleted_ok"] = "Locale \"%s\" deleted successfully.";
$messages["error_deleting_locale"] = "There was an error while deleting locale \"%s\"";
$messages["error_cant_delete_default_locale"] = "\"%s\" can not be deleted because it is the default locale setting at the moment.";

$messages["plugin_config"] = "Plugin Configuration";

$messages["use_read_more_feature"] = "Vol mostrar l'article sencer a la pàgina principal? (Si selecciona 'no', només es mostrarà la part escrita en el requadre 'Text')";

$messages["extended_text"] = "Aquest text només es mostrarà a la pàgina del article, a no ser que ho desactivis a la pàgina de 'Arranjaments'";

$messages["error_must_give_post_intro"] = "Has d'introduïr un text introductori a l'article com a mínim.";

$messages["comment_marked_as_spam_ok"] = "El comentari ha estat marcat com a spam correctament.";
$messages["comment_marked_as_nonspam_ok"] = "El comentari ha estat marcat com a no spam correctament.";
$messages["error_marking_comment_as_nonspam"] = "Hi ha hagut un error marcant el comentari com a no spam.";
$messages["error_marking_comment_as_spam"] = "Hi ha hagut un error marcant el comentari com a spam.";
$messages["error_incorrect_comment_id"] = "L'identificador del comentari és incorrecte.";
$messages["error_base_storage_folder_missing_or_unreadable"] = "Hi ha hagut un error mentre es creaven les carpetes necessàries per enmagatzemar els fitxers. La raó 
podria ser que el seu servidor de PHP tingui el 'safe mode' activat o que l'usuari que s'està fent servir per executar aquest script no tingui permisos suficients per a
crear directoris. Si ho desitja, pot intentar crear els directoris manualment i assignar els permisos correctes:<br/><br/>%s<br/><br/>Si els directoris ja
existien, asegúri's de que poden ser llegits i escrits pel servidor de web on aquesta aplicació es troba allotjada.";
///// new help messages ////

//
// note to translators:
//
// this is exactly the same as the previous version but an additional item
// has been added to the list ("order in which comments appear")
// and one has been removed (the threshold for the 'show more' setting)
//
$messages["help_blogSettings"] = "<p>From this page you can change some of the settings that control the
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
</ul></p>";

//
// translators: this one has changed too since we now have two text boxes: one for the
// text that we'd like to appear in the main page and another one for the text that
// will only be shown in the 'post' page (that is, when the users clicks on the
// permalink, for example)
//

$messages["help_newBlogUser"] = "Aquesta opció serveix per a què puguis donar permisos d'edicó a un altre usuari d'aquesta bitàcola.
Per a fer això, tu només has de coneixer el seu nom d'usuari. Si ja el saps, simplement escriu el text i prem el botó \"Afegir Usuari\".
Si vols també pots enviar-li un email (si va posar correctament l'adreça quan es va registrar) notificant-li que li has donat
permís per afegir, modificar i esborrar articles a la teva bitàcola.";

$messages["help_showBlogUsers"] = "Aquesta es la llista d'usuaris que tenen permisos d'edició per aquesta bitàcola. Podràs veure el seu
perfil si vols o anul·lar els permisos seleccionat els usuaris i fent click al botó \"Anul·lar Permisos\". Una vegada hagis fet això,
els usuaris sel·leccionats no podran publicar res més en aquesta bitàcola.";

//
// note to translators:
//
// added some additional text here to inform about the new "configure" feature
//
$messages["help_pluginCenter"] = "<p>From here you can see which plugins have been installed. For every
plugin, you will see its identifier (the identifier you have to use when developing templates and
want to make use of the plugin features), the author of the plugin, and some descriptive text with
various information about the plugin, mainly how to use it.</p>
<p>Some plugins offer also their own configuration page from wich you can modify some
aspects of its behaviour. To access such page, please click on the \"configure\" link
next to every plugin.</p>";

$messages["configurePlugin"] = "Aquest pluguin conté alguns paràmetres que poden ser configurats per l'usuari.";

$messages["help_newBlogTemplate"] = "<p>It is possible to easily add new templates to the system. To do
so, there are two possibilities: the template can either be uploaded as a compressed file
(tar.gz, tar.bz2 and zip files are supported) to the server or it canbe manually
uploaded using any available method.</p>
<p>If the first method is chosen, the contents of the file must have all been packaged
under a folder which will be the name given to the template.</p>
<p>If the second method is chosen, simply upload the files to a folder under your blog-specific folder
and type in the name of the folder in the text box below.</p>
<p>Plugins added here will only be available to this specific below and will not be able to
be accessed by other blogs.</p>";

$messages["help_blogTemplates"] = "<p>This is a list with all the templates that have been added to
this blog. If you wish to remove any of them, please select them and click on the
\"Delete Selected\" button below the list. Once a template is deleted it cannot be
recovered, since it is removed from the disk.</p>";

$messages["help_adminSettings"] = "<p>Aquí es mostren algunes estadístiques bàsiques sobre aquest web.</p>";

$messages["help_createUser"] = "<p>We can easily register new users in the system by using this form.
We only need to provide with a valid username and a password, and optionally an email address.
Users registered here will not be attached to any blog unless we explicitly do so in the
\"User\" section or until we create a blog specially for this new user.</p>";

$messages["editUserProfile"] = "<p>From here we can edit the profile of any user in this blog. We can
also grant administrator privileges to the user (or revoke them). A list of the blogs to which
the user belogs is also displayed.</p>";

$messages["help_editSiteUsers"] = "<p>These are all the users that are registered in this site. You can see and edit
their profile by clicking on the username or you can delete any of them by clicking on the
checkbox of the user(s) and then click on the \"Delete Selected\" button. Once a user
has been deleted, it can <b>not</b> be recovered, so please be careful.</p>";

$messages["help_createBlog"] = "<p>Unlimited blogs can be added to a single installation of pLog. Users
can use the registration script provided in the main package but administrator can also
register new blogs by using this form. The only things needed to know are the name that will
 be given to the blog and the user who will be the owner, having the maximum privileges
 over that blog.</p>";

 $messages["help_editSiteBlogs"] = "<p>This is a list with all the blogs that have been registered
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

$messages["help_newLocale"] = "<p>Now locales can be easily added to the site using this feature. If
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

$messages["help_siteLocales"] = "<p>This is a list with all the language files that have been
installed in this site. For each one of them, the encoding used by it and a brief
description can be seen. Also, language files can be removed from the system by selecting
them and clicking on the \"Delete Selected\" button.</p>";

$messages["help_newTemplate"] = "<p>It is possible to easily add new templates to the system. To do
so, there are two possibilities: the template can either be uploaded as a compressed file
(tar.gz, tar.bz2 and zip files are supported) to the server or it can be manually
uploaded using any available method.</p>
<p>If the first method is chosen, the contents of the file must have all been packaged
under a folder which will be the name given to the template.</p>
<p>If the second method is chosen, simply upload the files to a folder under your blog-specific folder
and type in the name of the folder in the text box below.</p>
<p>Plugins added here will be available to <b>all</b> the blogs in this site.</p>";

$messages["help_siteTemplates"] = "<p>This is a list with all the templates that are globally
available to all blogs. If you wish to remove any of them, please select them and click on the
\"Delete Selected\" button below the list. Once a template is deleted it cannot be
recovered, since it is removed from the disk.</p>";

$messages["help_editSiteSettings"] = "Aquestes són les característiques globals que controlen la majoria d'aspectes del pLog.";

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
$messages["show_category_in_main_page"] = "Mostrar aquesta categoria a la pàgina principal";
$messages["welcome_resource_center"] = "Benvingut a la nova àrea de fitxers (fotos, música, videos, ...) !";
$messages["resourceCenter"] = "Àrea de Fitxers";
$messages["resourceAlbums"] = "Àlbums";
$messages["resources"] = "Fitxers";
$messages["newResource"] = "Nou Fitxer";
$messages["newResourceAlbum"] = "Nou Àlbum";
$messages["album"] = "Àlbum";
$messages["album_name"] = "Nom";
$messages["parent_album"] = "Àlbum superior";
$messages["no_parent_album"] = "No hi ha àlbum superior";
$messages["resource_info"] = "Informació del fitxer";
$messages["size"] = "Mida";
$messages["format"] = "Format";
$messages["dimensions"] = "Dimensions";
$messages["bits_per_sample"] = "Bits per pixel";
$messages["bytes"] = "octets";
$messages["pixels"] = "pixels";
$messages["time_offset"] = "Diferència en hores entre aquesta bitàcola i el servidor:";
$messages["hours"] = "Hores";
$messages["album_added_ok"] = "El nou àlbum ha estat afegit correctament.";
$messages["name"] = "Nom";
$messages["children"] = "Fills";
$messages["see"] = "Veure";
$messages["view"] = "Mostrar";
$messages["number_of_channels"] = "Nombre de canals";
$messages["length"] = "Durada";
$messages["number_of_files"] = "Nombre de fitxers";
$messages["compressed_size"] = "Mida comprimida";
$messages["uncompressed_size"] = "Mida sense comprimir";
$messages["resource_file"] = "Fitxer que desitja afegir";
$messages["add_to_album"] = "Afegeix el fitxer al següent àlbum";
$messages["edit_resource_album"] = "Editar Àlbum";
$messages["error_loading_resource_album"] = "S'ha produït un error carregant l'àlbum.";
$messages["error_album_id_parameter_missing"] = "L'identificador d'àlbum no es correcte.";
$messages["error_album_parent_id_parameter_missing"] = "L'identificador d'àlbum pare no es correcte.";
$messages["error_updating_resource_album"] = "S'ha produït un error actualitzant l'àlbum.";
$messages["resource_album_updated_ok"] = "L'àlbum \"%s\" s'ha actualitzant correctament.";
$messages["error_must_give_album_name"] = "Ha de donar un nom per a l'àlbum.";
$messages["error_adding_album"] = "S'ha produït un error afegint el nou àlbum.";
$messages["album_added_ok"] = "S'ha afegit el nou àlbum \"%s\" correctament.";
$messages["resource_added_ok"] = "S'ha afegit el nou fitxer correctament.";
$messages["error_resource_forbidden_extension"] = "No s'accepten aquests tipus de fitxers.";
$messages["error_resource_too_big"] = "El fitxer no pot afegir-se perquè és massa gran.";
$messages["error_uploads_disabled"] = "L'opció de pujada de fitxers ha estat desactivata. Disculpeu les molèsties.";
$messages["error_adding_resource"] = "S'ha produït un error afegint el nou fitxer.";
$messages["error_loading_resource"] = "S'ha produït un error carregant el fitxer.";
$messages["error_updating_resource"] = "S'ha produït un error actualitzant el fitxer.";
$messages["resource_updated_ok"] = "S'ha actualitzat el fitxer \"%s\" correctament.";
$messages["error_no_resources_selected"] = "No s'ha sel·leccionat cap fitxer per a suprimir.";
$messages["resource_deleted_ok"] = "S'ha esborrat el fitxer \"%s\" correctament.";
$messages["error_deleting_resource"] = "S'ha produït un error esborrant el fitxer \"%s\".";
$messages["error_no_resource_uploaded"] = "No s'ha enviat cap fitxer al servidor.";
$messages["blockedHosts"] = "Hosts Bloquejats";
$messages["global_blocked_hosts"] = "Hosts Bloquejats Globalment";
$messages["newBlockedHost"] = "Bloquejar Host";
$messages["blogSecurity"] = "Seguridad";
$messages["security_welcome"] = "Benvingut a la zona de seguretat!";
$messages["reason"] = "Raó";
$messages["mask"] = "Màscara";
$messages["access_blocked"] = "Bloqueig complet d'accés";
$messages["posting_blocked"] = "Bloqueig d'enviament de comentaris";
$messages["block_host_intro"] = "Qualsevol host afegit aquí serà bloquejat. El tipus de bloqueig depén del que s'hagi sel·lecionat en \"tipus\". Si us plau, consulta <a href=\"javascript:help_window('admin.php?op=Help?helpId=newBlogBlockedHost');\">l'ajuda</a> per obtenir informació més detallada sobre com funciona el bloqueig d'adreces.";
$messages["global_block_host_intro"] = "Qualsevol host afegit aquí serà bloquejat en tots els diaris personals d'aquest servidor. El tipus de bloqueig depén del que s'hagi sel·lecionat en \"tipus\". Si us plau, consulta <a href=\"javascript:help_window('admin.php?op=Help?helpId=newBlogBlockedHost');\">l'ajuda</a> per obtenir informació més detallada sobre com funciona el bloqueig d'adreces.";
$messages["block_type"] = "Tipus de bloqueig";
$messages["error_invalid_ip_address"] = "L'adreça IP no és vàlida.";
$messages["error_must_create_album_first"] = "Ha de crear primer un àlbum abans d'afegir cap fitxer.";
$messages["error_resource_is_not_an_image"] = "El fitxer sel·leccionat no és una imatge.";
$messages["error_generating_resource_preview"] = "S'ha produït un error regenerant la previsualització de la imatge.";
$messages["resource_preview_generated_ok"] = "La previsualització de la imatge ha estat generada correctament.";
$messages["regenerate_preview"] = "Regenerar Previsualització";
$messages["show_album"] = "Mostrar Àlbum";
$messages["show_album_when_browsing"] = "Mostrar aquest àlbum als usuaris que visitin la nostra llista de fitxers i àlbums";
$messages["assigned_to_blog"] = "Assignar l'usuari a la següent bitàcora";
$messages["clean_up"] = "Netejar";
$messages["purge_info"] = "La funció de netejar esborrara fisicament tots els articles que han estat marcats com 'Esborrats'. Si no,
aquests articles seguiran a la base de dades (per si l'usuari es decideix a recuperar algun d'ells!) i poden
potencialment acabar ocupant molt d'espai. Si està segur que vol eliminar els articles, utilitzi el següent botó.";
$messages["spam_info"] = "
Es poden guardar els comentaris guardats com <i>spam</i> a la base de dades amb el propòsit d'utilitzar-los per entrenar el filtre anti-spam.
Una vegada el filtre ha estat entrenat, no té sentit mantenir-los a la base de dades i si ho desitja pot utilitzar el següent botó:";
$messages["no_spam"] = "No Spam";
$messages["spam"] = "Spam";
$messages["mark_as_spam"] = "Marcar com spam";
$messages["mark_as_no_spam"] = "Marcar como NO spam";
$messages["enable_comments_for_post"] = "Permetre comentaris en aquest article";
$messages["close_window"] = "Tancar";
$messages["newResource"] = "Afegir Fitxer";
$messages["add_resource_preview"] = "Afegir Previsualització";
$messages["newResourceAlbum"] = "Afegir Àlbum";
$messages["show_main_page"] = "Mostrar en Portada";
$messages["purge_spam_comments"] = "Esborrar Comentaris Marcats Com Spam";
$messages["purge_posts"] = "Netejar";
$messages["keep_spam_comments"] = "Guardar comentaris marcats com spam";
$messages["throw_away_spam_comments"] = "Refusar comentaris spam";
$messages["error_adding_blocked_host"] = "S'ha produït un error afegint el nou host.";
$messages["blocked_host_added_ok"] = "S'ha afegit el host %s a la llista de hosts bloquejats.";
$messages["error_no_blocked_hosts_selected"] = "No s'ha sel·leccionat cap host per eliminar.";
$messages["blocked_host_deleted_ok"] = "S'ha esborrat el host \"%s\" correctament.";
$messages["error_deleting_blocked_host"] = "S'ha produït un error esborrant el host \"%s\"";
$messages["edit_blocked_host"] = "Editar Host Bloquejat";
$messages["blocked_host_updated_ok"] = "El host ha estat actualitzat correctament.";
$messages["error_fetching_blocked_host"] = "S'ha produït un error carregant el host.";
$messages["error_updating_blocked_host"] = "S'ha produït un error actualitzant el host.";
$messages["thumbnail_format"] = "Format de la previsualització";
$messages["same_as_image"] = "El mateix que la imatge original";
$messages["same"] = $messages["same_as_image"];

$messages["help_locale_folder"] = "Adreça on estan guardats els fitxers amb les traduccions.";
$messages["help_default_locale"] = "Llenguatge per defecte que serà utilitzat quan es creï un nova bitàcola.";
$messages["help_xmlrpc_api_enabled"] = "Activa o desactiva la interfície XMLRPC";
$messages["default_rss_profile"] = "Versió o perfil de RSS que serà utilitzat per defecte, si no s'especifica un altre.";
$messages["help_security_pipeline_enabled"] = "Activa les mesures de seguretat. Si es desactiva, també es desactivaràn totes les mesures de seguretat així que es recomanable deixar-ho activat i activar o desactivar les mesures de seguretat individualment.";
$messages["help_ip_address_filter_enabled"] = "Activa el filtre d'adreces IP.";
$messages["help_content_filter_enabled"] = "Activa el filtre de contingut molt simple basat en expressions regulars. El filtre bayesià és normalment la millor opció.";
$messages["help_maximum_comment_size"] = "Tamany màxim que un comentari pot tenir, en octets.";
$messages["help_bayesian_filter_enabled"] = "Activa o desactiva el filtre bayesià.";
$messages["help_bayesian_filter_spam_probability_treshold"] = "Valor mínim en què un comentari es considerat spam. Ha de ser un valor entre 0.01 i 0.99";
$messages["help_bayesian_filter_nonspam_probability_treshold"] = "Valor màxim en què un comentari es considerat no spam amb total seguretat. Qualsevol comentari amb un valor entre aquests dos límits serà considerat no spam, però tal vegada això succeixi perquè el filtre necessiti més entrenament.";
$messages["help_bayesian_filter_min_length_token"] = "Mínima longitud d'un token.";
$messages["help_bayesian_filter_max_length_token"] = "Màxima longitud d'un token.";
$messages["help_bayesian_filter_number_significant_tokens"] = "Nombre de tokens significatius que un comentari ha de tenir.";
$messages["help_bayesian_filter_spam_comments_action"] = "Que fer amb els comentaris considerats spam. Poden ser o bé eliminats directament o guardats en la base de dades. La segona opció es recomanable quan el nostre filtre no hagi estat molt entrenat encara i cometi errors de tant en tant.";
$messages["help_path_to_convert"] = "L'eina 'convert' del paquet ImageMagick es necessària si elegim 'ImageMagick' com sistema per crear les previsualitzacions d'imatges.";

$messages["help_thumbnail_height"] = "Alçada màxima de les previsualitzacions.";
$messages["help_resources_folder"] = "Directori on es guarden els fitxers que haguem afegit a la nostra bitàcola. No és necessari que sigui un directori dins de l'estructura del nostre servidor web, si no volem que els usuaris puguin xafardejar els arxius que hi tenim guardats. El servidor de fitxers de pLog s'encarregara de buscar el fitxer i servirlo correctament.";
$messages["help_thumbnails_keep_aspect_ratio"] = "Mantenir la relació entre alçada i amplada de les previsualitzacions";
$messages["help_resources_enabled"] = "Activa o desactiva el 'Área de Ficheros'.";
$messages["help_thumbnail_method"] = "Sistema que se usará para generar previsualizaciones. Si elegimos 'ImageMagic', también habrá que configurar donde encontrar la herramienta 'convert', debajo.";
$messages["help_thumbnail_width"] = "Amplada màxima de les previsualitzacions.";
$messages["external_interfaces"] = "Interfícies Externes";
$messages["none"] = "cap";
$messages["security_settings"] = "Configuració de Seguretat";
$messages["bayesian_filter_settings"] = "Configuració del filtre Bayesià";
$messages["resources_settings"] = "Fitxers i Imatges";
$messages["help_thumbnail_format"] = "Format per defecte que serà utilitzat per generar les previsualitzacions d'imatges. Si es selecciona 'El mateix que la imatge original', les previsualitzacions seran creades i guardades en el mateix format que la imatge original d'on van ser creades.";
$messages["edit"] = "Edita";
$messages["help_disable_javascript_calendar"] = "Desactiva el calendari basat en Javascript i DHTML utilitzat quan es crea o edita un article, en el cas que el navegador del usuari no sigui compatible.";
$messages["edit_filtered_content"] = "Edita Contingut Filtrat";

$messages["audio_codec"] = "Codec d'audio";
$messages["video_codec"] = "Codec de vídeo";
$messages["sample_rate"] = "Velocitat de mostreig";
$messages["files"] = "Fitxers";
$messages["created"] = "Creat";
$messages["generated"] = "Generat";
$messages["about"] = "En quant a mi...";
$messages["menu"] = "Menú";
$messages["albums"] = "Àlbums";
$messages["template_file"] = "Fitxer amb la plantilla";
$messages["download"] = "Descarregar";

$messages["error_no_albums_defined"] = "No hi ha àlbums disponibles en aquesta bitàcola.";
$messages["error_fetching_album"] = "S'ha produït un error buscant l'àlbum especificat.";
//
// help messages //
//

//
// translators: the following help messages have changed a little since last version, due to a few
// new features built on top of previous features
//
$messages["help_editArticleCategories"] = "<p>This is a listing with all the post categories that
have been created so far. There must be at least one category before you can add an article, since
every article has to be categorized under a category. The <b>'Articles'</b> column shows how many
articles have been categorized under the given category. In the same way, a category can't be deleted
if it has an article assigned it; you must first remove all the articles and then you will be allowed
to remove the category.</p>
<p>You can delete more than one category at the same time by cheching their <b>'Delete'</b> column
and then clickin on the <b>'Delete Selected'</b> button.</p>
<p>The <b>'Show In Main Page'</b> column shows whether this category is included in the main page or if alternatively,
it can also be seen when clicking its link. Edit the category itself to enable/disable this feature.</p>";

$messages["help_newArticleCategory"] = "<p>From here you can add a new post category to the blog. All
what you need to provide is a name for the new category. Once it has been created, it will be available
for posts to be categorized under.</p>
<p>You can disable the 'Show cateory in main page' checkbox if you don't want this category to be shown in the
main page of the site. If disabled, posts included in this category will only be shown when browsing this
specific category, by clicking its link.</p>";

$messages["editArticleCategory"] = "<p>Please provide a new name for the category you are updating. Also, 
define whether you would like to show posts belonging to this cateogry in the main page or not.</p>";

$messages["help_newPost"] = "<p>Utilitza aquesta pàgina per afegir un nou article al diari. Hauras de donar-li un titol 
i el seu text. Una vegada finalitzat, prem el botó <b>'Afegir'</b> i l'article 
serà inclòs automàticament a la teva pàgina. Comprova que has establert el estat del article a <b>'Publicat'</b>
si vols que aparegui a la portada. Utilitza el estat <b>'Esborrany'</b> quan no puguis acabar d'escriure el article
per recuperar-lo després i poder continuar</p>
<p>El text que escriguis al primer recuadre gran apareixera sempre a la portada. Pots utilitzar
el segon recuadre si vols que alguna part del text no estigui inclosa a la pàgina principal però
que es mostri quan els usuaris facin click a l'enllaç \"Llegir més...\" Aquest enllaç s'afegira
automàticament al final del text. Aquest camp no es obligatori i es pot desactivar aquesta
característica al menú \"Arranjaments\"</p>
<p>També pots classificar un article en alguan de les categories que hagis creat previament.
Escolleix la <b>'Categoria'</b> a la que més s'adapti.</p>
<p>Si vols rebre un email de notificació sobre el nou articles, selecciona la casella corresponent.</p>
<p>Selecciona la casella on posa </b>'Troba els enllaços del article...'</b> si vols que després d'afegir l'article, 
vols que s'enviï un ping de <i>trackback</i> als servidors que ho soportin. El teu article serà revisat per trobar
els enllaços i tu tindràs la possibilitat d'escollir als que vols enviar els pings de trackback.</p>
<p>Pots utilitzar <b>'Afegir Fitxer'</b> per afegir un enllaç a un album o a un fitxer en el teu article.</p>
Tu pots afegir una previsualització amb l'enllaç o bé el fitxer directament, pot ser una imatge, video o
qualsevol tipus de fitxer. Utilitza l'<i>'Àrea de Fitxers'</i> per administrar els àlbums.</p>";

$messages["help_editPosts"] = "<p>Use this page to edit a post from your journal. The information from the
post has already been provided and now you can make your changes. Once you have finished, press the <b>'Update'</b> button and the post
will updated. Please note that you have to set the status of the post
to <b>'Published'</b> if you want it to appear in front page. Use the <b>'Draft'</b> status when you can't finish posting
now but you would like to save what you have typed so far for later revision.</p>
<p>If you would like to receive an email notifying about a new post, please check the corresponding
checkbox.</p>
<p>More information about the different options <a href=\"admin.php?op=Help&amp;helpId=newPost\">here</a>.</p>";

$messages["help_blogSettings"] = "<p>From this page you can change some of the settings that control the
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
$messages["help_resourceCenter"] = "Des de l'àrea de fitxers podràs administrar els teus fitxers, agrupar-los en àlbums, 
administrar aquests albums i modificar qualsevol d'ells.";

$messages["help_newResourceAlbum"] = "<p>You need at least one album to group your resources. From here you will be allowed
to add a new album, simply providing a name and a description for it. Only the name field is mandatory, being
the description field optional.</p>
<p>Use the <b>'Parent album'</b> field to set whether this is a top-level album or if it is a sub-album and has
another album as a parent.</p>";

$messages["help_resourceAlbums"] = "<p>This is a list including all the resource albums that have been created so far
in this site. For each album, several of its properties can be seen at a glance: its name, a link to its child 
albums (if any) and its amount, a link to its resources and its amount, whether the album is public or
private and a checkbox to delete as many of them as needed.</p>
<p>You can read more on the <b>'Show Album'</b> feature here <a href=\"admin.php?op=Help&amp;helpId=editResourceAlbum\">here</a></p>";

$messages["editResourceAlbum"] = "<p>From here you can edit the properties of a resource album. Almost all the fields
are the same as <a href=\"admin.php?op=Help&amp;helpId=newResourceAlbum\">here</a> except the 
<b>'Show album to users'</b> checkbox. If enabled, this album will be visible to users who browse our 
collection of albums and resources. If not, it will not be shown in the public side. This is useful in cases when
we want to keep some of the albums secret and don't want users peeking at them.</p>";

$messages["help_newResource"] = "<p>You will be able to upload new resources to your blog from this section. Any kind of file
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

$messages["help_resources"] = "<p>From here you will have access to all the resource files that have been uplaoded
in the blog. Files will be shown under the album to which they belong. For every resource file, it will be
possible to edit its properties, view it as any normal user will see it and mark it for deletion. Pressing the 
<b>'Delete Selected'</b> button from the bottom of the screen will delete those resources that have been
marked.</p>
<p>Click the folder icon to navigate to the contents of an albu, or the <b>'Edit'</b> to go to the album
properties page. Use the <b>'..'</b> link to go up one level. Clicking a resource name or preview (if available)
will take you to the resource properties page where you will be able to change some of the settings of the 
selected resource.";

$messages["help_blogSecurity"] = "From this section you will be able to edit set up some basic security mechanisms that
are provided by pLog. The changes you make here will only affect your blog and not everybody else's.";

$messages["help_blogBlockedHosts"] = "This is a list with all the hosts that have been blocked so far in this blog. At
a glance, it is possible to see for each host the reason why it was blocked, the date when it was blocked and
the type of the block applied. Lastly, you can also select any of the host blocking rules and press the
<b>'Delete Selected'</b> button when you are sure that you want to remove those rules.";

$messages["help_newBlogBlockedHost"] = "<p>This section will allow you to block a specific address or entire subnet from your Blog. You can select if you want them to be able to see it, but unable to post or simply unable to access it at all. Copy the offending address into the spaces provided and choose the proper subnet address space if necessary. Example: To block just the address of 192.168.1.123 you would choose the '32 bits' option to match the entire address. This blocks just this one address and works well for banning someone with a Static IP address. If you're seeing multiple IP Addresses for a particular individual (say 192.168.1.123, 192.168.1.225, 192.168.1.21 and 192.168.1.67) then you will want to ban a particular subnet range. Enter one of the IP Addresses that you see and choose '24 bits', '16 bits' or '8 bits'  to match the first 3 sections, first 2 sections or the first section respectively.<br/>
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

$messages["help_blockedHosts"] = "This is a list with all the hosts that have been blocked so far system-wide. 
Clicking a rule IP address will allow us to edit the settings of that rule. These rules always take
precedence over blog-speficic rules, so that if one these global rules matches a host, all the other after
it will be ignored.";

$messages["help_newBlockedHost"] = "From here it is possible to add a new <b>global</b> host-blocking rule. See
<a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">here</a> for more information about the options
available.";

$messages["editBlockedHost"] = "You will be able to edit a host blocking rule from this section. The options
available are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">here</a>.";

$messages["editFilteredContent"] = "This page will allow you to edit a content filtering rule. The options
are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">here</a>.";

$messages["posts_purged_ok"] = "S'han esborrat correctament tots els articles marcats per esborrar.";

/////
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


$messages["register_error_incorrect_username"] = "Incorrect user name or user already exists, please try again.<br/>";
$messages["register_error_incorrect_email"] = "Email address is invalid, please try again. <br/>";
$messages["register_error_user_already_exist"] = "There is already a user with that name, please try again.<br/>";
$messages["register_error_incorrect_password"] = "Password is invalid, please try again. <br/>";
$messages["register_error_passwords_dont_match"] = "Passwords do not match, please try again. <br/>";
$messages["register_error_adding_user"] = "Error adding the user: ";
$messages["register_error_creating_blog"] = "There was an error creating the new blog";
$messages["register_error_blog_name"] = "You should choose a better name for the blog.<br/>" ;
?>
