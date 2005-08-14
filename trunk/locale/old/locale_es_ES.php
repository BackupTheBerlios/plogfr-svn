<?php
// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "iso-8859-1";
$messages["locale_description"] = "Mensajes de pLog en español";
// days of the week
$messages["days"] = Array( "Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado" );
// -- compatibility, do not touch -- //
$messages["Monday"] = $messages["days"][1];
$messages["Tuesday"] = $messages["days"][2];
$messages["Wednesday"] = $messages["days"][3];
$messages["Thursday"] = $messages["days"][4];
$messages["Friday"] = $messages["days"][5];
$messages["Saturday"] = $messages["days"][6];
$messages["Sunday"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" );
// -- compatibility, do not touch -- //
$messages["Mo"] = $messages["daysshort"][1];
$messages["Tu"] = $messages["daysshort"][2];
$messages["We"] = $messages["daysshort"][3];
$messages["Th"] = $messages["daysshort"][4];
$messages["Fr"] = $messages["daysshort"][5];
$messages["Sa"] = $messages["daysshort"][6];
$messages["Su"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" );
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

$messages["message"] = "Mensaje";
$messages["error"] = "Error";

$messages["date"] = "Fecha";

// miscellaneous messages
$messages["of"] = "de";
$messages["recently"] = "Lo Último";
$messages["comments"] = "Comentarios";
$messages["comment on this"] = "Comentar";
$messages["my_links"] = "Mis Enlaces";
$messages["archives"] = "Archivos";
$messages["search"] = "Buscar";
$messages["calendar"] = "Calendario";
$messages["editLinkCategories"] = "Categorias";
$messages["search_s"] = "Buscar";
$messages["link_tracker"] = "Link Tracker";
$messages["search_this_blog"] = "Buscar en este blog:";
$messages["about_myself"] = "Sobre mí...";
$messages["permalink_title"] = "Enlance permanente al archivo";
$messages["permalink"] = "Permalink";
$messages["posted_by"] = "Enviado por ";
$messages["on_the"] = "el ";
$messages["page"] = "página";
$messages["posted"] = "enviado";

$messages["reply"] = "Responder";

// add comment form
$messages["add_comment"] = "Añadir comentario";
$messages["comment_topic"] = "Título";
$messages["comment_text"] = "Texto";
$messages["comment_username"] = "Tu nombre";
$messages["comment_email"] = "Tu dirección de correo";
$messages["comment_url"] = "Tu página personal";
$messages["comment_send"] = "Enviar";
$messages["comment_added"] = "Comentario enviado!";
$messages["comment_add_error"] = "Error enviando el comentario";

$messages["article_does_not_exist"] = "El artículo solicitado no existe.";
$messages["no_posts_found"] = "No se encontró ningun artículo.";
$messages["user_has_no_posts_yet"] = "Este usuario no tiene ningun artículo todavía";

$messages["info_about_myself"] = "Información acerca de mí...";
$messages["back"] = "Volver";

$messages["back_top"] = "Volver Arriba";

$messages["post"] = "artículo";

$messages["trackbacks_for_article"] = "Trackbacks para el artículo";
$messages["trackback_excerpt"] = "Fragmento";
$messages["trackback_weblog"] = "Weblog";

$messages["search_results"] = "Resultados de la búsqueda";
$messages["search_matching_results"] = "Los siguientes artículos concuerdan con los términos de la búsqueda: ";
$messages["search_no_matching_posts"] = "No se encontró ningun artículo que concuerde con los términos de la búsqueda.";

$messages["see_all_link"] = "(Haga click aquí para ver todos los artículos, desde el principio)";

$messages["read_more"] = "(Continua)";

$messages["anonymous_poster"] = "Anónimo";

$messages["syndicate"] = "Otros";

$messages["main"] = "Inicio";

////// error messages /////
$messages["error_fetching_article"] = "El artículo especificado no se encontró";
$messages["error_fetching_articles"] = "Los artículos no se encontraron.";
$messages["error_trackback_no_trackback"] = "No se encontraron trackbacks para el artículo.";
$messages["error_incorrect_article_id"] = "El identificador del artículo no es correcto.";
$messages["error_incorrect_blog_id"] = "El identificador del diario no es correcto.";
$messages["error_comment_without_text"] = "Deberías escribir algo como contenido del comentario.";
$messages["error_comment_without_name"] = "Deberías dar almenos tu nombre o apodo.";
$messages["error_adding_comment"] = "Hubo un error añadiendo el comentario a la base de datos.";
$messages["error_incorrect_parameter"] = "Parámetro incorrecto.";
$messages["error_parameter_missing"] = "Falta un parámetro en la petición.";
$messages["error_blog_has_no_links"] = "Este diario no tiene enlaces todavía.";
$messages["error_comments_not_enabled"] = "La función de comentar artículos ha sido desactivada en este sitio.";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////


////// help messages for the administration interface /////
$messages["help_newPost"] = "<p>Use this page to add a new post to your journal. You should provide a topic or subject
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

$messages["help_editPost"] = "<p>Use this page to edit a post from your journal. The information from the
post has already been provided and now you can make your changes. Once you have finished, press the <b>'Update'</b> button and the post
will updated. Please note that you have to set the status of the post
to <b>'Published'</b> if you want it to appear in front page. Use the <b>'Draft'</b> status when you can't finish posting
now but you would like to save what you have typed so far for later revision.</p>
<p>If you would like to receive an email notifying about a new post, please check the corresponding
checkbox.</p>";

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

$messages["help_Stats"] = "<p>You can see from here all the referrers that have hit this site in the past.
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



$messages["admin_interface_title"] = "Interfície de Administración de pLog";
$messages["administration"] = "Administración";
$messages["help"] = "Ayuda";
$messages["plog_help"] = "Ayuda de pLog";
$messages["newPost"] = "Nuevo Artículo";
$messages["editPosts"] = "Artículos";
$messages["editArticleCategories"] = "Categorías";
$messages["admin_links"] = "Enlaces";
$messages["editLinkCategories"] = "Categorías de Enlaces";
$messages["settings"] = "Configuración";
$messages["Logout"] = "Salir";

// new post page
$messages["topic"] = "Tema";
$messages["text"] = "Texto";
$messages["category"]  = "Categoría";
$messages["status"] = "Estado";
$messages["post_status_draft"] = "Borrador";
$messages["post_status_published"] = "Publicado";
$messages["post_status_deleted"] = "Eliminado";
$messages["post_status_all"] = "Todos";
$messages["send_notification"] = "Avisarme cada vez que haya un comentario nuevo.";
$messages["send_trackback_pings"] = "Buscar enlaces en el texto del artículo y enviar notificaciones de 'trackback' a los enlaces que lo soporten.";
$messages["add_post"] = "Añadir!";
$messages["xmlrpc_ping_ok"] = "Ping XML-RPC enviado correctamente al servidor ";
$messages["error_sending_xmlrpc_ping"] = "Se produció un error enviando el Ping XML-RPC a ";
$messages["error_sending_xmlrpc_ping_message"] = "El mensaje de error fue: ";
$messages["preview"] = "Vista Previa";
$messages["post_added"] = "Artículo añadido.";
$messages["you_will_be_notified"] = "Además, también será notificado cada vez que haya un nuevo comentario.";
$messages["post_added_not_published"] = "El artículo añadido pero no publicado.";
$messages["error_adding_post"] = "Hubo un error añadiendo el artículo!";
$messages["error_must_fill_all_fields"] = "Debe llenar todos los campos para publicar el artículo!";
$messages["error_must_have_one_category"] = "Es necesario tener por lo menos una categoría antes de poder añadir artículos.";

// send trackbacks page
$messages["send_trackback_pings"] = "Enviar Notificaciones de Trackback";
$messages["links_found"] = "Los siguientes enlaces fueron encontrados en su artículo. Por favor
seleccione aquellos a los cuales desearía enviarle una notificación de trackback (tenga en cuenta
que este proceso puede tardar un rato)";
$messages["trackbacks_no_urls_selected"] = "No seleccionó ningun enlace y por lo tanto no se envió ninguna notificación de trackback";
$messages["trackbacks_received_ok"] = "La notificación de trackback fue recibida satisfactoriamente por los siguientes enlaces:";
$messages["trackbacks_no_trackback"] = "Los siguientes enlaces no disponen de una dirección de trackback:";
$messages["trackbacks_problems_sending"] = "Se encontraron problemas para enviar notificaciones de trackback
a los siguientes enlaces. Puede intentarlo de nuevo si lo desea.";
$messages["trackbacks_received_all_hosts"] = "Todos los enlaces recibieron la notificación de trackback correctamente.";
$messages["ping_selected"] = "Enviar notificación";

// edit posts
$messages["author"] = "Autor";
$messages["category_all"] = "Todas";
$messages["author_all"] = "Todos";
$messages["update"] = "Actualizar";
$messages["date"] = "Fecha";
$messages["help_Stats"] = "Estadísticas";
$messages["delete"] = "Borrar";

$messages["delete_selected"] = "Eliminar Seleccionados";

// edit post
$messages["edit_post"] = "Editar Artículo";
$messages["error_getting_post_to_update"] = "Se produció un error intentando cargar el artículo para editar.";
$messages["error_updating_post_in_database"] = "Hubo un error actualizando el artículo en la base de datos.";
$messages["post_successfully_updated"] = "Artículo actualizado correctamente.";
$messages["notification_removed"] = "La notificación de nuevos comentarios que había activa para este artículo ha sido eliminada. No se recibirán más notificaciones.";

// post statistics
$messages["statistics_for_post"] = "Estadísticas del artículo";
$messages["error_fetching_post"] = "Se produció un error intentando cargar el artículo.";
$messages["times_post_has_been_read"] = "Veces que este artículo ha sido leído: ";
$messages["referers"] = "Referrers";
$messages["id"] = "Id";
$messages["url"] = "Url";
$messages["hits"] = "Hits";
$messages["trackbacks"] = "Trackbacks";

// post comments
$messages["error_fetching_comments"] = "Hubo un error cargando los comentarios del artículo.";
$messages["comments_for_post"] = "Comentarios para el artículo ";
$messages["email"] = "E-Mail";
$messages["ip_address"] = "Dir. IP";

// delete comments
$messages["error_no_comments_selected"] = "Ningun comentario fue selecctionado para ser eliminado.";
$messages["error_deleting_comment"] = "Hubo un error eliminando el comentario ";
$messages["comment_deleted_ok"] = "El comentario \"%s\" fue eliminado correctamente.";

// categories list
$messages["category_name"] = "Nombre";

// removing posts
$messages["post_cannot_be_deleted"] = "El artículo no pudo ser eliminado.";
$messages["no_posts_selected"] = "Ningun artículo fue seleccionado para ser eliminado.";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "Hubo un error eliminando el artículo \"%s\" (id = %d)";
$messages["post_deleted_ok"] = "El artículo \"%2\$s\" fue correctamente eliminado (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "Ninguna categoría fue seleccionada para ser eliminada.";
$messages["error_category_has_articles"] = "No se pudo eliminar la categoría \"%s\" porque hay por lo menos un
artículo clasificado en esta categoría. Por favor elimine el/los artículo/s primero e inténtelo de nuevo.";
$messages["error_deleting_category"] = "Hubo un error eliminando la categoría \"%s\" de la base de datos.";
$messages["category_deleted_ok"] = "La categoría \"%s\" fue correctamente eliminada.";

// add category
$messages["newArticleCategory"] = "Añadir Nueva Categoría";
$messages["add_new_category_info"] = "Por favor asigne un nombre válido para la nueva categoría.";
$messages["category_added_ok"] = "Nueva categoria añadida correctamente.";
$messages["error_adding_article_category"] = "Hubo un error añadiendo la nueva categoría.";

// edit categories
$messages["edit_category"] = "Editar Categoría";
$messages["please_provide_valid_category_name"] = "Por favor asigne un nombre válido para la categoría.";

//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_incorrect_category_id"] = "Identificador de categoría incorrecto.";
//*** NEW ***//
// please remove these comments after translating these lines

// update the category
$messages["error_fetching_category"] = "Hubo un error obteniendo la categoría de base de datos.";
$messages["error_updating_category"] = "Hubo un error actualizando la categoría.";
$messages["error_empty_category_name"] = "Debe dar un nombre válido a la categoría.";
$messages["category_updated_ok"] = "La categoría fue actualizada correctamente.";

// edit links
$messages["link_name"] = "Nombre";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["category"];
$messages["link_description"] = "Descripción";
$messages["editLinks"] = "Enlaces";

// edit a link
$messages["error_provide_name_and_url"] = "Debe proporcionar por lo menos un nombre y una dirección para el enlace.";
$messages["error_invalid_link_id"] = "El identificador del enlace es inválido o no existe.";
$messages["error_fetching_link"] = "Hubo un error obteniendo el enlace.";
$messages["error_updating_link"] = "Hubo un error actualizando el enlace.";
$messages["link_updated_ok"] = "Enlace actualizado correctamente!";
$messages["error_fetching_link_categories"] = "Hubo un error obteniendo las categorias de enlace.";

// add a link
$messages["add_new_link"] = "Añadir nuevo enlace";
$messages["newLink"] = "Añadir Enlace";
$messages["error_adding_link"] = "Hubo un error intentando añadir el enlace.";
$messages["link_added_ok"] = "El enlace fue añadido correctamente.";
$messages["error_provide_name_and_url"] = "Debe proporcionar por lo menos un nombre y una dirección válidas para el enlace.";
$messages["error_must_have_one_link_category"] = "Debe tener por lo menos una categoría de enlaces antes de poder añadir un enlace nuevo.";

// delete a link
$messages["error_no_links_selected"] = "Ningun enlace fue seleccionado para ser eliminado.";
$messages["error_removing_link"] = "Hubo un error eliminando el enlace \"%s\" de la base de datos.";
$messages["link_deleted_ok"] = "El enlace \"%s\" fue correctamente eliminado de la base de datos.";

// edit link categories
$messages["newLinkCategory"] = "Añadir Nueva Categoría de Enlaces";
$messages["link_categories_help"] = "Debe tener por lo menos una categoría de enlaces antes de añadir un nuevo enlace.";
$messages["link_category_name"] = "Nombre";
$messages["link_category_links"] = "Enlaces";

// new link category
$messages["new_link_category_info"] = "Las categorías de enlaces le ayudarán a clasificar sus diferences enlaces.";
$messages["error_provide_link_category_name"] = "Debe proporcionar un nombre válido para la nueva categoría de enlaces.";
$messages["error_adding_link_category"] = "Hubo un error añadiendo la nueva categoría de enlaces.";
$messages["link_category_added_ok"] = "La categoría de enlaces fue añadida correctamente.";

// edit link category
$messages["edit_link_category"] = "Editar Categoría de Enlaces";
$messages["error_updating_link_category"] = "Hubo un error actualizando la categoría de enlaces.";
$messages["link_category_updated_ok"] = "Categoría de enlaces actualizada correctamente.";
$messages["error_fetching_link_category"] = "Hubo un error obteniendo la categoría de enlaces.";
$messages["error_incorrect_link_category_id"] = "Identificador de categoria de enlace incorrecto.";

// delete link categories
$messages["error_no_link_category_selected"] = "Ninguna categoría de enlaces fue seleccionada para ser eliminadao.";
$messages["error_links_in_link_category"] = "La categoría \"%s\" no puede ser eliminada porque tiene enlaces clasificados bajo
ella. Por favor elimine primero todos los enlaces e inténtelo de nuevo.";
$messages["error_removing_link_category"] = "Hubo un error eliminando la categoría \"%s\".";
$messages["link_category_deleted_ok"] = "La categoría de enlaces \"%s\" ha sido eliminada correctamente.";
// this error is shown when for some reason the category could not be fetched from the database
// and we can't show its name
$messages["error_removing_link_category_2"] = "Error eliminando la categoría de enlaces con identificador = %d";

// blog settings page
$messages["blogSettings"] = "Configuración de la bitácora";
$messages["userSettings"] = "Perfil de Usuario";
$messages["pluginCenter"] = "Plugins";
$messages["Stats"] = "Estadísticas";
$messages["blog_name"] = "Nombre de la bitácora";
$messages["long_blog_name"] = "Texto más largo y descriptivo sobre esta bitácora";
$messages["language_used"] = "Idioma usado para mostrar los textos";
$messages["items_main_page"] = "¿Cuántos artículos le gustaría mostrar en la página principal?";
$messages["items_as_recent"] = "¿Cuántos artículos le gustaría mostrar como \"recientes\"?";
$messages["template_used"] = "¿Qué diseño le gustaría usar para su bitácora?";
$messages["cut_posts"] = "¿Quiere cortar los artículos que sean demasiado largos en la página principal y añadir un enlace \"Más...\" que muestre el resto?";
$messages["cut_posts_after_characters"] = "¿Cuántos carácteres le gustaría mostrar antes de cortar el artículo?";
$messages["enable_wysiwyg_edition"] = "¿Activar la edición visual de los artículos? (solo disponible para Internet Explorer 5.5 o Mozilla 1.3b o superiores)";
$messages["enable_comments"] = "¿Desea permitir comentarios para sus artículos?";
$messages["yes"] = "Sí";
$messages["no"] = "No";
$messages["error_invalid_locale"] = "Ha elegido un idioma incorrecto.";
$messages["error_incorrect_max_recent_items"] = "Debe dar un valor válido para el número de artículos que le gustaría mostrar como recientes.";
$messages["error_incorrect_number_of_posts"] = "Debe dar un valor válido para el número de artículos que le gustaría mostrar
en la página principal.";
$messages["error_incorrect_template"] = "El diseño que ha elegido no es válido.";
$messages["error_no_blog_name"] = "Debe elegir un nombre válido para su bitácora.";
$messages["error_incorrect_show_more_threshold"] = "Debe dar un valor válido para el nombre de carácteres que le gustaría
mostrar antes de cortar un artículo en la página principal y añadir un enlace al resto.";
$messages["error_updating_settings"] = "Hubo un error actualizando la configuración de su bitácora.";
$messages["blog_settings_updated_ok"] = "La configuración de la bitácora fue guardada correctamente!";
$messages["permanent_blog_url"] = "Direccion permanente de esta bitacora (solo lectura)";

// user profile page
$messages["username"] = "Usuario";
$messages["password"] = "Password";
$messages["confirm_password"] = "Confirmar password";
$messages["email_address"] = "Dirección de correo";
$messages["bio"] = "Sobre mí";
$messages["empty_no_change"] = "Déjelo vacío si no desea cambiarlo";
$messages["user_settings_updated_ok"] = "El perfil de usuario fue guardado correctamente.";
$messages["error_updating_user_settings"] = "Hubo un error guardando el perfil del usuario.";
$messages["error_passwords_dont_match"] = "Lo siento, los passwords no coinciden";
$messages["error_incorrect_password"] = "Lo siento, el password no es correcto.";
$messages["error_incorrect_email_address"] = "Lo siento, la dirección de correo no es válida.";

// plugin center page
$messages["plugins_available"] = "Estos son los plugins que hay actualmente instalados.";
$messages["identifier"] = "Identificador";
$messages["description"] = "Descripción";
$messages["error_plugins_disabled"] = "El soporte para plugins ha sido desactivado en este servidor.";

// statistics page
$messages["statistics_info"] = "Un identificador de artículo igual a 0 significa que los hits fueron
dirigidos a la página principal y no a ningun artículo en particular.";
$messages["article_id"] = "Id de Artículo";
$messages["last_hit_date"] = "Fecha Último Hit";
$messages["error_fetching_referers"] = "Error obteniendo los referrers de este sitio web.";

// login screen
$messages["login_page_title"] = "Interfaz de Administración de pLog";
$messages["login"] = "Entrar";
$messages["welcome_message"] = "Bienvenido a pLog";
$messages["error_incorrect_username_or_password"] = "Lo siento, el usuario o el password son incorrectos";
$messages["error_dont_belong_to_any_blog"] = "Lo siento, usted no pertenece a ningun blog todavía.";
$messages["error_no_username_or_password"] = "Por favor introduzca un username y un password válidos antes de continuar.";
$messages["choose_one_blog"] = "Pertenece a las siguientes bitácoras. Elija una para administrar ahora.";
$messages["continue"] = "Continuar";
$messages["logout_message"] = "Operación de salida correcta.";
$messages["logout_message_2"] = "<a href=\"admin.php\">Haga click aquí</a> para entrar otra vez, o
<a href=\"%1\$s\">aquí para ir a %2\$s</a>.";
$messages["logout_title"] = "Terminar";
$messages["error_access_forbidden"] = "Acceso denegado. Debe autentificarse primero aquí.";

//
// new strings added for 0.2
//
$messages["site_admin"] = "Administración";
$messages["site_stats"] = "Estadísticas";
$messages["createUser"] = "Añadir Usuario";
$messages["siteUsers"] = "Usuarios";
$messages["createBlog"] = "Añadir Bitácora";
$messages["editSiteBlogs"] = "Bitácoras";
$messages["siteLocales"] = "Lenguajes";
$messages["newLocale"] = "Añadir Lenguaje";
$messages["siteTemplates"] = "Plantillas";
$messages["newTemplate"] = "Añadir Plantilla";
$messages["editSiteSettings"] = "Configuración Global";
$messages["adminSettings"] = "asdf";
$messages["help_comments_enabled"] = "Activa o desactiva los comentarios.";
$messages["help_beautify_comments_text"] = "Mantiene el formato dado por el usuario a la hora de escribir comentarios.";
$messages["help_rdf_enabled"] = "Activa o desactiva la generación de un documento RDF con los artículos más recientes de cada bitácora.";
$messages["help_temp_folder"] = "Carpeta que será usada por pLog en aquellas operaciones que requieran de un espacio temporal de datos.";
$messages["help_base_url"] = "URL que será usada para calcular todas las demás URLs del sitio dinámicamente. Por favor déle el valor correcto o de otra forma las URLs serán incorrectas.";
$messages["help_show_posts_max"] = "Cuántos artículos serán mostrados en la página principal por defecto.";
$messages["help_recent_posts_max"] = "Cuántos artículos serán mostrados como \"recientes\".";
$messages["help_template_folder"] = "Directorio donde se guardan las plantillas usadas por pLog.";
$messages["help_default_template"] = "Plantilla por defecto que tendrán las nuevas bitácoras que se creen.";
$messages["help_default_locale"] = "El lenguaje por defecto que será usado en las nuevas bitácoras y en la pantalla de entrada a la interfaz de administración.";
$messages["help_html_allowed_tags_in_comments"] = "Etiquetas HTML que no serán eliminadas de los comentarios hechos por usuarios.";
$messages["help_referer_tracker_enabled"] = "Añade información muy básica sobre el 'referrer' cada vez que alguien nos visita.";
$messages["help_rss_parser_enabled"] = "Activa o desactiva el intérprete de RSS que está disponible para las plantillas.";
$messages["help_show_more_enabled"] = "Activa o desactiva el enlace \"Leer Más...\" por defecto".
$messages["help_update_article_reads"] = "Actualizar o no un contador interno sobre cuantas veces un artículo ha sido leído.";
$messages["help_request_format_mode"] = "El modo \"Normal\" generará URLs normales y corrientes, mientras que el modo \"Especial para buscadores\" generará URLs que son más fáciles de leer y recordar, a la vez que serán escaneadas por los buscadores de páginas web. Ésta última requiere Apache y la posibilidad de usar archivos .htaccess";
$messages["help_xmlrpc_ping_enabled"] = "Enviar una notificación de actualización de contenido vía XMLRPC a los servicios configurados debajo, cada vez que se añade un artículo.";
$messages["help_xmlrpc_ping_hosts"] = "Lista de servidores que soportan notificaciones de actualización via XMLRPC. Por favor, ponga cada servidor en una línea diferente, tantos como sea necesario.";
$messages["help_trackback_server_enabled"] = "Activa el servidor de 'trackbacks'";
$messages["help_htmlarea_enabled"] = "Activa la edición visual de artículos";
$messages["help_plugin_manager_enabled"] = "Activa o desactiva el soporte para 'plugins'.";
$messages["help_check_email_address_validity"] = "Se efectuarán comprobaciones a nivel de servidor SMTP cada vez que un usuario se registre e introduzca una dirección de correo para comprobar si es válida si este parámetro está activado. Si está desactivado, simplemente se comprobará que tiene la forma de una dirección de correo correcta.";
$messages["help_post_notification_source_address"] = "Dirección que se usará como originante en los mensajes electrónicos que se envien.";
$messages["help_summary_page_show_max"] = "Cuántos artículos deben mostrarse en la página de resumen.";
$messages["help_minimum_password_length"] = "Número de carácteres que un password debe tener para considerarse válido.";
$messages["help_users_can_add_templates"] = "Permite a los usuarios añadir nuevas plantillas a sus bitácoras.";
$messages["help_email_service_enabled"] = "Activa el servicio de correo, usado por ejemplo para enviar notificaciones de comentarios nuevos en un artículo.";
$messages["post_notification_source_address"] = "Dirección que será usada para el campo 'De:' cuando se envíe algun mensaje de correo.";
$messages["help_email_service_type"] = "Método que será usado para enviar mejsanes. Dependiendo de el método elegido, por favor compruebe los parámetros siguientes a éste.";
$messages["help_smtp_host"] = "Si eligió SMTP como método, éste es el servidor que será usado para enviar los mensajes.";
$messages["help_smtp_port"] = "Puerto del servidor SMTP anteriormente especificado donde el servidor de correo acepta conexiones (por defecto, 25)";
$messages["help_smtp_use_authentication"] = "Si el servidor SMTP soporta/requiere autentificación y desea usarla, por favor active esto.";
$messages["help_smtp_username"] = "Nombre de usuario que será usado para autentificarse en el servidor SMTP (solo válido si se ha activado la autentificación de SMTP)";
$messages["help_smtp_password"] = "Palabra clave que será usada junto con el nombre de usuario anterior para autentificarse en el servidor de correo.";
$messages["help_uploads_enabled"] = "Activa o desactiva la posibilidad de subir archivos al servidor. Este parámetro afecta la posibilidad de añadir nuevas plantillas, nuevos lenguajes y la posibilidad de añadir nuevos archivos a plantillas ya existentes.";
$messages["help_maximum_file_upload_size"] = "Tamaño máximo de los archivos que pueden ser subidos al servidor por los usuarios.";
$messages["help_upload_forbidden_files"] = "Lista de patrones o nombres de archivos que no se permite subir a este sitio. Por ejemplo, *.php *.php3 *.php4. Puede especificar tantas como haga falta separándolas por un espacio en blanco.";
$messages["help_path_to_tar"] = "Ruta en disco hacia la herramienta 'tar'.";
$messages["help_path_to_gzip"] = "Ruta en disco hacia la herramienta 'gzip'.";
$messages["help_path_to_bz2"] = "Ruta en disco hacia la herramienta 'bz2'.";
$messages["help_path_to_unzip"] = "Ruta en disco hacia la herramienta 'unzip'.";

$messages["add_user_give_information"] = "Por favor introduzca la siguiente información para crear un nuevo usuario.";

$messages["site_registered_users"] = "Estos son todos los usuarios registrados en este sitio.";

$messages["add_blog_give_information"] = "Por favor introduzca la siguiente información para crear una nueva bitácora.";
$messages["blog_title"] = "Título de la bitácora";
$messages["blog_owner"] = "Propietario";

$messages["site_registered_blogs"] = "Estas son todas las bitácoras registradas en este sitio.";
$messages["editSiteUsers"] = "Editar Usuarios";

$messages["upload_locale"] = "Subir Lenguaje";
$messages["use_this_form_to_upload_locale"] = "Use este formulario para subir un nuevo lenguaje. Si no tiene la posibilidad de subir archivos, por favor use el segundo formulario.";
$messages["locale_file"] = "Archivo del lenguaje";
$messages["manually_add_locale"] = "Añadir Lenguaje Manualmente";
$messages["use_this_form_if_cant_upload_locale"] = "Use este segundo formulario si no tiene la posibilidad d de subir archivos a su servidor. El archivo deber haber sido copiado con anterioridad a la carpeta que contiene los demás archivos con lenguajes, o en caso contrario la operación terminará con error.";
$messages["locale_code"] = "Código del lenguaje";
$messages["locale_encoding"] = "Codificación";

$messages["template_will_be_available_for_all"] = "La nueva plantilla estará disponible para todas las bitácoras del sitio.";

$messages["use_this_form_to_upload_template"] = "Use este formulario para subir una nueva plantilla. Si no tiene la posibilidad de subir archivos a su servidor por favor use el segundo formulario. Los archivos de plantillas deben estar comprimidos en tar.bz2, tar.gz o zip.";
$messages["template_file"] = "Archivo de plantilla";
$messages["upload_template"] = "Subir Plantilla";
$messages["manually_add_template"] = "Añadir Plantilla Manualmente";
$messages["use_this_form_if_cannot_upload_template"] = "Use este segundo formulario si no tiene la posibilidad de subir archivos a su servidor. Los archivos de la plantilla deben haber sido copiados a la carpeta que contiene las otras plantillas con anterioridad, o de otra forma la operación terminará en error.";
$messages["template_id"] = "Identificador de la plantilla";

$messages["templates_available_for_all"] = "Estas plantillas están disponibles para todas las bitácoras de este sitio.";
$messages["add_file"] = "Añadir Archivo";

$messages["setting_name"] = "Nombre";
$messages["setting_value"] = "Valor";
$messages["setting_description"] = "Descripción";

$messages["plain"] = "Normal";
$messages["search_engine_friendly"] = "Fáciles de recordar";

$messages["general_settings"] = "General";
$messages["helper_tools_settings"] = "Herramientas Externas";
$messages["uploads_settings"] = "Subir Archivos";
$messages["email_settings"] = "Email";

$messages["number_blogs"] = "Número de bitácoras";
$messages["number_users"] = "Número de usuarios";
$messages["number_posts"] = "Número de artículos";
$messages["number_posts_today"] = "Número de artículos hoy";
$messages["number_posts_this_month"] = "Número de artículos este mes";

$messages["date"] = "Fecha";
$messages["time"] = "Hora";

$messages["comments_order"] = "Orden en que los comentarios aparecerán:";
$messages["oldest_first"] = "Viejos primero";
$messages["newest_first"] = "Nuevos primero";

$messages["blog"] = "Bitácora";
$messages["blog_id"] = "Identificador de bitácora";

$messages["showBlogUsers"] = "Usuarios de la bitácora";
$messages["available_users"] = "Usuarios disponibles";
$messages["add"] = "Añadir";
$messages["remove"] = "Eliminar";

$messages["user_id"] = "Identificador de usuario";

$messages["new_password"] = "Nuevo Password";
$messages["has_administrator_privileges"] = "Tiene privilegios de administrador";
$messages["related_to_the_following_blogs"] = "Relacionado con las siguientes bitácoras";

$messages["add_user_to_blog_form"] = " Este formulario le permitirá añadir un usuario a la bitácora. El usuario tendrá privilegios para editar o añadir nuevos artículos, pero no podrá cambiar ningun parámetro de la configuración de la bitácora.";
$messages["add_user_enter_username"] = " Por favor introduzca el nombre del usuario que desea añadir. El usuario debe haberse registrado en este sitio con anterioridad, de otra forma la operación no funcionará.";
$messages["add_user_send_notification"] = "Enviar un email informando al usuario que ha sido añadido.";
$messages["add_user_type_notification"] = "Texto del email de notificación";

$messages["following_users_have_permissions"] = " Los siguientes usuarios son parte de esta bitácora. Estos usuarios pueden añadir, editar y eliminar artículos pero no pueden cambiar la configuración de la bitácora.";
$messages["revoke_permissions"] = "Quitar Permisos";

$messages["newBlogTemplate"] = "Añadir plantilla";
$messages["manually_newBlogTemplate"] = "Añadir plantilla manualmente";
$messages["template_available_only_for_this_blog"] = "Esta plantilla estará solamente disponible para esta bitácora.";
$messages["use_form_to_upload_blog_template"] = "Use este formulario para subir una nueva plantilla a el servidor. Si no tiene la posibilidad de subir archivos, por favor use el formulario que se haya debajo de éste. Las plantillas deben estar empaquetadas en zip, tar.gz o tar.bz2.";
$messages["use_form_if_cannot_upload_blog_template"] = "Use este segundo formulario si no tiene la posibilidad de subir archivos al servidor. La plantilla debe haberse copiado al directorio que contiene las plantillas antes de ejecutar esta operación.";

$messages["blogTemplates"] = "Plantillas de la bitácora";
$messages["templates_only_available_for_this_blog"] = "Las siguientes plantillas están solo disponibles para esta bitácora.";

$messages["add_file_to_blog_template"] = "Añadir archivo a la plantilla"; $messages["upload_file_to_blog_template"] = "Por favor elija el archivo que le gustaría añadir a la plantilla.";

$messages["error_user_id_incorrect"] = "Identificador de usuario incorrecto.";
$messages["error_incorrect_user_id"] = $messages["error_user_id_incorrect"];
$messages["error_fetching_user_information"] = "Hubo un error cargando la información del usuario.";
$messages["error_password_incorrect"] = "La palabra clave es demasiado corta o incorrecta.";
$messages["error_updating_user_settings"] = "La configuración del usuario no se pudo guardar.";
$messages["user_settings_updated_ok"] = "Configuración del usuario \"%s\" actualizada correctamente.";
$messages["error_no_users_selected_to_add"] = "No se seleccionaron usuarios para añadir.";
$messages["user_added_to_blog_ok"] = "El usuario \"%s\" ha sido añadido a la bitácora.";
$messages["error_adding_user_to_blog"] = "Hubo un error añadiendo el usuario \"%s\" a la bitácora.";
$messages["error_no_users_selected_to_remove"] = "No se seleccionaron usuarios para eliminar.";
$messages["user_removed_from_blog_ok"] = "El usuario \"%s\" ha sido eliminado de la bitácora.";
$messages["error_removing_user_from_blog"] = "Hubo un error eliminando al usuario \"%s\" de la bitácora.";

$messages["error_incorrect_plugin_id"] = "El identificador del plugin es incorrecto.";
$messages["error_configuring_plugin"] = "Hubo un error configurando el plugin: ";
$messages["site_config_saved_ok"] = "La configuración fue guardada correctamente.";
$messages["error_saving_site_config"] = "Hubo un problema guardando la configuración.";

$messages["error_incorrect_blog_owner"] = "El usuario elegido como propietario del blog no existe.";
$messages["error_updating_blog_settings"] = "Hubo un error actualizando la configuración de la bitácora \"%s\"";
$messages["blog_settings_updated_ok"] = "La configuración de la bitácora \"%s\" fue actualizada correctamente.";

$messages["error_fetching_users"] = "Hubo un error obteniendo los usuarios de este sitio.";

$messages["error_fetching_blogs"] = "Hubo un error obteniendo las bitácoras de este sitio.";

$messages["error_incorrect_template_id"] = "El identificador de la plantilla no es correcto o no existe.";

$messages["error_no_users_selected"] = "No se seleccionaron usuarios para eliminar.";
$messages["error_could_not_find_user"] = "El usuario \"%s\" no se encontró en este sitio.";
$messages["error_deleting_user"] = "Hubo un error eliminando el usuario \"%s\"";
$messages["user_deleted_ok"] = "El usuario \"%s\" fue eliminado correctamente.";

$messages["error_must_give_blog_name"] = "El nombre de la bitácora es incorrecto.";
$messages["error_adding_blog"] = "Hubo un error añadiendo la bitácora a este sitio.";
$messages["blog_added_ok"] = "La nueva bitácora \"%s\" ha sido añadida correctamente.";

$messages["error_template_not_inside_folder"] = "Los archivos de la plantilla deben estar dentro de su propia carpeta, que debe tener el mismo nombre que la plantilla.";
$messages["error_missing_base_files"] = "Algunos de los archivos básica de una plantilla no se encontraron.";
$messages["error_unpacking"] = "Hubo un error desempaquetando la plantilla.";
$messages["error_forbidden_extensions"] = "Algunos de los archivos de la plantilla no están permitidos en este sitio.";
$messages["error_creating_working_folder"] = "Hubo un error comprobando que la plantilla es correcta.";
$messages["error_checking_template"] = "Hubo un error con la nueva plantilla (código = %s)";
$messages["error_add_template_disabled"] = "No se permite añadir nuevas plantillas a los usuarios.";
$messages["error_must_upload_file"] = "Debe subir un archivo.";
$messages["error_no_template_name"] = "Debe dar el nombre de una plantilla.";
$messages["error_uploads_disabled"] = "No se pueden subir archivos al servidor.";
$messages["error_installing_template"] = "Hubo un error instalando la plantilla.";
$messages["template_installed_ok"] = "La nueva plantilla ha sido instalada como \"%s\".";

$messages["error_adding_template_file"] = "There was an error adding the file to the template set.";
$messages["error_file_forbidden"] = "Files of this type have been forbidden in this site.";
$messages["error_file_too_big"] = "The file is too big. Maximum allowed size is \"%s\" bytes.";
$messages["template_file_added_ok"] = "Archivo añadido correctamente a la plantilla \"%s\".";

$messages["error_plugin_cannot_be_configured"] = "El plugin no puede ser considerado.";

$messages["error_incorrect_username"] = "El nombre de usuario no es válido o ya existe.";
$messages["error_username_already_exists"] = "Ya hay un usuario registrado con el mismo nombre.";
$messages["error_adding_user"] = "Hubo un error añadiendo el usuario a la base de datos.";
$messages["user_added_ok"] = "El nuevo usuario \"%s\" ha sido añadido correctamente.";

$messages["error_no_blogs_selected"] = "No se seleccionaron bitácoras para eliminar.";
$messages["error_blog_is_default_blog"] = "No se pudo eliminar la bitácora \"%s\" porque es la bitácora por defecto.";
$messages["blog_deleted_ok"] = "La bitácora \"%s\" ha sido eliminada correctamente.";
$messages["error_deleting_blog"] = "Hubo un error eliminando la bitácora \"%s\".";

$messages["error_no_templates_selected"] = "No se seleccionaron plantillas para eliminar.";
$messages["error_removing_template"] = "Hubo un error eliminando la plantilla \"%s\"";
$messages["template_removed_ok"] = "La plantilla \"%s\" ha sido eliminada correctamente.";

$messages["error_no_users_selected_to_remove_from_blog"] = "No se seleccionaron usuarios para eliminar de esta bitácora.";
$messages["error_removing_user_from_blog"] = "Hubo un error eliminando el usuario \"%s\" de esta bitácora.";
$messages["user_removed_from_blog_ok"] = "El usuario \"%s\" ha sido eliminado de esta bitácora.";

$messages["error_incorrect_locale_code"] = "El código de lenguaje no es correcto.";
$messages["error_invalid_locale_file"] = "El archivo no tiene el formato de un archivo de lenguaje.";
$messages["error_adding_locale_file"] = "Hubo un error añadiendo el nuevo archivo de lenguaje. Asegúrese que el archivo ha sido añadido a la carpeta que contiene los otros archivos de lenguaje antes de efectuar esta operación, y que tiene los permisos correctos.";
$messages["locale_added_ok"] = "El nuevo lenguaje \"%s\" ha sido añadido correctamente.";
$messages["error_saving_locale"] = "Hubo un error guardando el archivo de lenguaje en la carpeta de archivos de lenguaje. Por favor asegúrese que dicha carpeta tiene los permisos correctos.";

$messages["error_no_locales_selected"] = "No se seleccionaron lenguajes para eliminar.";
$messages["error_deleting_only_locale"] = "Éste es el único lenguaje disponible en este sitio y por lo tanto no puede ser eliminado.";
$messages["locale_deleted_ok"] = "El lenguaje \"%s\" fue eliminado correctamente.";
$messages["error_deleting_locale"] = "Hubo un error eliminando el lenguaje \"%s\"";
$messages["error_cant_delete_default_locale"] = "El lenguaje \"%s\" no puede ser eliminado porque es el lenguaje por defecto actualmente.";

$messages["plugin_config"] = "Configuración del Plugin";

$messages["use_read_more_feature"] = "¿Desea mostrar todo el artículo en la página principal? (Si elige 'no',  solo se mostrará la parte que escribió como texto introductorio)";

$messages["extended_text"] = "Este texto solo se mostrará en la página propia del artículo, a no ser que lo desactivemos en la sección de \"Configuración\"";

$messages["error_must_give_post_intro"] = "Debe escribir por lo menos un breve texto introductorio del artículo.";
$messages["comment_marked_as_spam_ok"] = "El comentario fue marcado como spam correctamente.";
$messages["comment_marked_as_nonspam_ok"] = "El comentario fue marcado como no spam correctamente.";
$messages["error_marking_comment_as_nonspam"] = "Hubo un error marcando en comentario como no spam.";
$messages["error_marking_comment_as_spam"] = "Hubo un error marcando el comentario como spam.";
$messages["error_incorrect_comment_id"] = "El identificador del comentario es incorrecto.";
$messages["error_base_storage_folder_missing_or_unreadable"] = "Hubo un error mientras se creaban las carpetas necesarias para almacenar los archivos. La razón puede que sea debido a que su servidor de PHP está funcionado con el 'safe mode' activado o tal vez el usuario que se está usando para ejecutar este script no tenga suficientes permisos para crear directorios. Si lo desea, puede
intentar crear los directorios manualmente y asignarles los permisos correctos:<br/><br/>%s<br/><br/>Si los directorios ya existían, asegúrese que pueden ser leídos y escritos por el servidor de web dónde se está ejecutando esta aplicación.";

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

$messages["updatePost"] = $messages["help_newPost"];

$messages["help_newBlogUser"] = "This option allows you to easily give editing permissions to other
users in this blog. To do so, you only have to know its username. If you already know it,
simply type it in the text field below and press the \"Add User\" button. If you wish, you can
also send an email to this user (as long as he or she used the right address when
registering) notifying him or her that he has now been granted permissions to add, edit
and delete posts in this blog.";

$messages["help_showBlogUsers"] = "This is a list of the users that have been given editing permissions
in this blog. You can see their profile if you wish or you can also revoke their permissions
by selectin them and then clicking on the \"Revoke Permissions\" button. Once you do that,
the selected users will no longer be able to publish anything in this blog.";

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

$messages["configurePlugin"] = "This plugin provides some settings that can be configured
by the user.";

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

$messages["help_adminSettings"] = "<p>These are some very basic statistics about the site.</p>";

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

$messages["help_editSiteSettings"] = "These are all the global settings that control many aspects of the
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
$messages["show_category_in_main_page"] = "Mostrar esta categoría en la página principal";
$messages["welcome_resource_center"] = "Bienvenido al área de archivos!";
$messages["resourceCenter"] = "Área de Archivos";
$messages["resourceAlbums"] = "Álbums";
$messages["resources"] = "Archivos";
$messages["newResource"] = "Nuevo Archivo";
$messages["newResourceAlbum"] = "Nuevo Álbum";
$messages["album"] = "Álbum";
$messages["album_name"] = "Nombre";
$messages["parent_album"] = "Álbum superior";
$messages["no_parent_album"] = "Sin álbum superior";
$messages["resource_info"] = "Información del archivo";
$messages["size"] = "Tamaño";
$messages["format"] = "Formato";
$messages["dimensions"] = "Dimensiones";
$messages["bits_per_sample"] = "Bits por pixel";
$messages["bytes"] = "bytes";
$messages["pixels"] = "pixels";
$messages["time_offset"] = "Diferencia en horas entre esta bitácora y el servidor:";
$messages["hours"] = "Horas";
$messages["album_added_ok"] = "El nuevo álbum ha sido añadido correctamente.";
$messages["name"] = "Nombre";
$messages["children"] = "Hijos";
$messages["see"] = "Ver";
$messages["view"] = "Mostrar";
$messages["number_of_channels"] = "Número de canales";
$messages["length"] = "Duración";
$messages["number_of_files"] = "Número de archivos";
$messages["compressed_size"] = "Tamaño comprimido";
$messages["uncompressed_size"] = "Tamaño sin comprimir";
$messages["resource_file"] = "Archivo que desea añadir";
$messages["add_to_album"] = "Add the file to the following album";
$messages["edit_resource_album"] = "Editar Álbum";
$messages["error_loading_resource_album"] = "Se produjo un error cargando el álbum.";
$messages["error_album_id_parameter_missing"] = "El identificador de álbum no es correcto.";
$messages["error_album_parent_id_parameter_missing"] = "El identificador de álbum padre no es correcto.";
$messages["error_updating_resource_album"] = "Se produjo un error actualizando el álbum.";
$messages["resource_album_updated_ok"] = "El álbum \"%s\" fue actualizado correctamente.";
$messages["error_must_give_album_name"] = "Debe dar un nombre para el álbum.";
$messages["error_adding_album"] = "Hubo un error añadiendo el nuevo álbum.";
$messages["album_added_ok"] = "El nuevo álbum \"%s\" fue añadido correctamente.";
$messages["resource_added_ok"] = "El nuevo archivo fue añadido correctamente.";
$messages["error_resource_forbidden_extension"] = "The resource could not be added because it had a forbidden extension.";
$messages["error_resource_too_big"] = "El archivo no pudo añadirse porque es demasiado grande.";
$messages["error_uploads_disabled"] = "El archivo no pudo añadirse porque la posibilidad de enviar archivos al servidor ha sido desactivada.";
$messages["error_adding_resource"] = "Se produjo un error añadiendo el nuevo archivo.";
$messages["error_loading_resource"] = "Se produjo un error cargando el archivo.";
$messages["error_updating_resource"] = "Se produjo un error actualizando el archivo.";
$messages["resource_updated_ok"] = "El archivo \"%s\" fue actualizado correctamente.";
$messages["error_no_resources_selected"] = "No se seleccionó ningun archivo para eliminar.";
$messages["resource_deleted_ok"] = "El archivo \"%s\" fue eliminado correctamete.";
$messages["error_deleting_resource"] = "Se produjo un error eliminando el archivo \"%s\".";
$messages["error_no_resource_uploaded"] = "No se envió ningun archivo al servidor.";
$messages["blockedHosts"] = "Hosts Bloqueados";
$messages["global_blocked_hosts"] = "Hosts Bloqueados Globalmente";
$messages["newBlockedHost"] = "Bloquear Host";
$messages["blogSecurity"] = "Seguridad";
$messages["security_welcome"] = "Bienvenido a la zona de seguridad!";
$messages["mask"] = "Máscara";
$messages["reason"] = "Razón";
$messages["access_blocked"] = "Bloqueo completo de acceso";
$messages["posting_blocked"] = "Bloqueo de envío de comentarios";
$messages["block_host_intro"] = "Cualquier host añadido aquí será bloqueado. El tipo de bloqueo depende de lo que sea seleccionado en \"tipo\". Por favor vea <a href=\"javascript:help_window('admin.php?op=Help?helpId=newBlogBlockedHost');\">la Ayuda</a> para obtener información más detallada sobre como funciona el bloqueo de direcciones.";
$messages["global_block_host_intro"] = "Cualquier host añadido aquí será bloqueado en todos las bitácoras de este servidor. El tipo de bloqueo depende de lo que sea seleccionado en \"tipo\". Por favor vea <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">la ayuda relacionada</a> para más información sobre esta funcionalidad.";
$messages["block_type"] = "Tipo de bloqueo";
$messages["error_invalid_ip_address"] = "La dirección IP no es válida.";
$messages["error_must_create_album_first"] = "Debe crear primero un álbum antes de añadir cualquier archivo.";
$messages["error_resource_is_not_an_image"] = "El archivo seleccionado no es una imágen.";
$messages["error_generating_resource_preview"] = "Se produjo un error regenerando la preview de esta imágen.";
$messages["resource_preview_generated_ok"] = "La preview de la imágen fue generada correctamente.";
$messages["regenerate_preview"] = "Regenerar Preview";
$messages["show_album"] = "Mostrar Álbum";
$messages["show_album_when_browsing"] = "Mostrar este álbum a los usuarios que visiten nuestra lista de archivos y álbums";
$messages["assigned_to_blog"] = "Asignar el usuario a la siguiente bitácora";
$messages["clean_up"] = "Limpiar";
$messages["purge_info"] = "La función de limpiar eliminará físicamente todos los artículos que hayan sido marcados como 'Eliminados'. Si no,
esos artículos seguirán en la base de datos (por si acaso el usuario decidiera recuperar alguno de ellos!) y pueden
potencialmente terminar ocupando mucho espacio. Si está seguro que desea eliminar dichos artículos, use el siguiente botón.";
$messages["spam_info"] = "
Se pueden guardar los comentarios marcados como spam en la base de datos con el propósito de usarlos para 
entrenar el filtro anti-spam. Una vez el filtro ya ha sido entrenado, no tiene sentido mantenerlos en la base de
datos y si desea eliminarlos, por favor use el siguiente botón.";
$messages["no_spam"] = "No Spam";
$messages["spam"] = "Spam";
$messages["mark_as_spam"] = "Marcar com spam";
$messages["mark_as_no_spam"] = "Marcar como no spam";
$messages["enable_comments_for_post"] = "Permitir comentarios en este artículo";
$messages["close_window"] = "Cerrar";
$messages["newResource"] = "Añadir Archivo";
$messages["add_resource_preview"] = "Añadir Preview";
$messages["newResourceAlbum"] = "Añadir Álbum";
$messages["show_main_page"] = "Mostrar en Portada";
$messages["purge_spam_comments"] = "Eliminar Comentarios Marcados Como Spam";
$messages["purge_posts"] = "Limpiar";
$messages["keep_spam_comments"] = "Guardar comentarios marcados como spam";
$messages["throw_away_spam_comments"] = "Rechazar comentarios spam";
$messages["error_adding_blocked_host"] = "Se produjo un error añadiendo el nuevo host.";
$messages["blocked_host_added_ok"] = "El host %s ha sido añadido a la lista de hosts bloqueados.";
$messages["error_no_blocked_hosts_selected"] = "No se seleccionó ningun host para eliminar.";
$messages["blocked_host_deleted_ok"] = "Host \"%s\" eliminado correctamente.";
$messages["error_deleting_blocked_host"] = "Se produjo un error eliminando el host \"%s\"";
$messages["edit_blocked_host"] = "Editar Host Bloqueado";
$messages["blocked_host_updated_ok"] = "El host fue actualizado correctamente.";
$messages["error_fetching_blocked_host"] = "Se produjo un error cargando el host.";
$messages["error_updating_blocked_host"] = "Se produjo un error actualizando el host.";
$messages["thumbnail_format"] = "Formato de la previsualización";
$messages["same_as_image"] = "Mismo que la imágen original";
$messages["same"] = $messages["same_as_image"];

$messages["help_locale_folder"] = "Directorio donde están guardados los archivos con las traducciones.";
$messages["help_default_locale"] = "Lenguaje por defecto que será usado cuando se cree una nueva bitácora.";
$messages["help_xmlrpc_api_enabled"] = "Activa o desactiva la interfaz XMLRPC";
$messages["default_rss_profile"] = "Version o perfil de RSS que será usado por defecto, si no se especifica otro.";
$messages["help_security_pipeline_enabled"] = "Activa las medidas de seguridad. Si se desactiva, se desactivarán también todas las medidas de seguridad así que es recomendable dejarlo activado y activar o desactivar las medidas de seguridad individualmente.";
$messages["help_ip_address_filter_enabled"] = "Activa el filtro de direcciones IP.";
$messages["help_content_filter_enabled"] = "Activa un filtro de contenido muy simple basado en expresiones regulares. El filtro bayesiano es normalmente una mejor opción.";
$messages["help_maximum_comment_size"] = "Tamaño máximo que un comentario puede tener, en bytes.";
$messages["help_bayesian_filter_enabled"] = "Activa o desactiva el filtro bayesiano.";
$messages["help_bayesian_filter_spam_probability_treshold"] = "Valor mínimo en el cual un comentario es considerado spam. Debe ser un valor entre 0.01 y 0.99";
$messages["help_bayesian_filter_nonspam_probability_treshold"] = "Valor maximo en el cual un comentario es considerado no spam con total seguridad. Cualquier comentario con un valor entre estos dos límites será considerado no spam, pero tal vez eso suceda porque el filtro necesite más entrenamiento.";
$messages["help_bayesian_filter_min_length_token"] = "Mínima longitud de un token.";
$messages["help_bayesian_filter_max_length_token"] = "Máxima longitud de un token.";
$messages["help_bayesian_filter_number_significant_tokens"] = "Número de tokens significativos que un comentario debe tener.";
$messages["help_bayesian_filter_spam_comments_action"] = "Qué hacer con los comentarios que se consideran spam. Pueden ser o bien eliminados directamente o guardados en la base de datos. La segunda opción es recomendable cuando nuestro filtro no haya sido muy entrenado todavía y cometa errores de vez en cuando.";
$messages["help_path_to_convert"] = "La herramienta 'convert' del paquete ImageMagick es necesaria si elegimos 'ImageMagick' como sistema para crear las previsualizaciones de imágenes.";
$messages["help_thumbnail_height"] = "Máxima altura de las previsualizaciones.";
$messages["help_resources_folder"] = "Directorio donde se guardaran los archivos que hayamos añadido a  nuestra bitácora. No tiene porque necesariamente ser un directorio dentro de la estructura de nuestro servidor web, si no queremos que los usuarios puedan curiosear en los archivos que tengamos ahí guardaados. El servidor de archivos de pLog se encargará de buscar el archivo y servirlo correctamente.";
$messages["help_thumbnails_keep_aspect_ratio"] = "Mantener la relación entre altura y anchura de las previsualizaciones";
$messages["help_resources_enabled"] = "Activa o desactiva el 'Área de Archivos'.";
$messages["help_thumbnail_method"] = "Sistema que se usará para generar previsualizaciones. Si elegimos 'ImageMagic', también habrá que configurar donde encontrar la herramienta 'convert', debajo.";
$messages["help_thumbnail_width"] = "Anchura máxima de las previsualizaciones.";
$messages["external_interfaces"] = "Interfícies Externas";
$messages["none"] = "ninguno";
$messages["security_settings"] = "Configuración de Seguridad";
$messages["bayesian_filter_settings"] = "Configuración del filtro Bayesiano";
$messages["resources_settings"] = "Archivos e Imágenes";
$messages["help_thumbnail_format"] = "Formato por defecto que será usado para generar las previsualizaciones de imágenes. Si se selecciona 'Mismo que la imágen original', las previsualizaciones serán creaadas y guardadas en el mismo formato que la imágen original de donde fueron creados.";
$messages["edit"] = "Editar";
$messages["help_disable_javascript_calendar"] = "Desactiva el calendario basado en Javascript y DHTML usado cuando se crea o edita un artículo, en el caso de que el navegador del usuario no sea compatible.";

$messages["audio_codec"] = "Codec de audio";
$messages["video_codec"] = "Codec de vídeo";
$messages["sample_rate"] = "Velocidad de muestreo";
$messages["files"] = "Archivos";
$messages["created"] = "Creado";
$messages["generated"] = "Generated";
$messages["about"] = "Sobre mi...";
$messages["menu"] = "Menú";
$messages["albums"] = "Álbums";
$messages["template_file"] = "Archivo con la plantilla";
$messages["download"] = "Descargar";
$messages["error_no_albums_defined"] = "No hay álbums disponibles en esta bitácora.";
$messages["error_fetching_album"] = "Hubo un error buscando el álbum especificado.";
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

$messages["help_newPost"] = "<p>Use this page to add a new post to your journal. You should provide a topic or subject
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
links and you will have the possibility to choose which ones to send trackback pings to.</p>
<p>You can use the <b>'Add Resource'</b> links to add a link to an album or to one or more resources in your posts. 
You can add a preview of the resource with a link to it or even the resource itself, be it an image, video or any
kind of file. Please use the <i>'Resource Center'</i> section to manage your file resources.</p>
<p>Use the <b>'Enable comments for this post'</b> checkbox depending on whether you would like to enable or
disable comments for this post. Some special code in the template is needed for this to work correctly, but it is at
least known to work with the set of default templates.</p> ";

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
$messages["help_resourceCenter"] = "From the resource center, you will be able to manage your files, group them in albums,
manage those albums and edit any of them.";

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

$messages["summary_title"] = "Sumario de blogs";
$messages["summary_section_main"] = "Portada";
$messages["summary_section_main_link_title"] = "P·gina principal";
$messages["summary_section_register"] = "Crea tu blog!";
$messages["summary_section_register_link_title"] = "Crea un nuevo blog";
$messages["summary_section_blog_list"] = "Listado blogs";
$messages["summary_section_blog_list_link_title"] = "Listado de blogs de este sitio";
$messages["summary_section_faq"] = "Preguntas frecuentes";
$messages["summary_section_faq_link_title"] = "Preguntas Frecuentes";
$messages["summary_welcome_title"] = "Bienvenido a pLog!";

$messages["summary_most_active_blogs"] = "Blogs m·s activos";
$messages["summary_newest_blogs"] = "Blogs nuevos";
$messages["summary_most_commented_articles"] = "ArtÌculos m·s comentados";
$messages["summary_most_read_articles"] = "ArtÌculos m·s leidos";

$messages["summary_faq"] = "Preguntas frecuentes";
$messages["summary_faq_question"] = "øQuÈ es esto?";
$messages["summary_faq_description"] = "DeberÌas usar esta secciÛn para aÒadir algunas de las preguntas m·s frecuentes relativas a tu servicio de blogs. Este apartado sÛlo es una sugerencia y por tanto puedes adaptarlo como quieras. :) Edita el fichero templates/summary/faq.template para cambiar los contenidos de esta p·gina.";

$messages["summary_login"] = "AdministraciÛn";
$messages["summary_other_stuff"] = "Otros (para links, ...)";
$messages["summary_plog_logo"] = "øQuÈ tal el logo del proyecto aquÌ? ;)";

$messages["summary_blog_list"] = "Listado de blogs";
$messages["summary_last_updated"] = "?ltima actualizaciÛn";
$messages["summary_author"] = "Autor:";
$messages["summary_articles"] = "artÌculos";
$messages["summary_reads"] = "lecturas";

$messages["summary_welcome_message"] = "<h4 class=\"question\">QuÈ es este sitio?</h4>
                            <p>Deberias usar esta zona para dar algo de informaciÛn sobre tu sitio.</p>

                            <ul>
                                <li>Sigue los siguientes enlaces para m·s informaciÛn: <br />
                                    <a href=\"summary.php?op=Faq\">Preguntas frecuentes</a></li>
                                <li><a href=\"register.php\">Crear un nuevo blog</a></li>
                            </ul>";

$messages["summary_latest_posts"] = "?ltimos artÌculos";
$messages["summary_in"] = "en";
$messages["summary_posted_by"] = "Escrito por";

//
// register templates text
//
$messages["register_error"] = "Error";
$messages["register_error_message"] = "Ha habido un error:";
$messages["register_errors"] = "Ha habido algunos errores en el proceso, por favor comprueba y corrige los errores:";
$messages["register_new_blog_step1_title"] = "Crea tu blog (1/3)";
$messages["register_step1_fill_in_title"] = "Tienes que rellenar este formulario para poder registrar un blog.";
$messages["register_step1_description"] = "<p>
Antes que nada necesitas crear un usuario. Elige un nombre de usuario para tu cuenta, este sera considerado como el propietario del blog.
</p>
<p>
Por favor no olvides tu password! No hay ning?n mÈtodo autom·tico para recuperarlo.
</p>";
$messages["register_step1_legend"] = "Rellena los siguientes campos";
$messages["register_username"] = "Usuario:";
$messages["register_password"] = "Password:";
$messages["register_password_confirmation"] = "ConfirmaciÛn del password:";
$messages["register_email"] = "Email:";
$messages["register_email_comment"] = "(para la notificaciÛn de comentarios, ...)";

$messages["register_next"] = "Siguiente &raquo;";

$messages["register_new_blog_step2_title"] = "Crea tu blog (2/3)";
$messages["register_user_created"] = "Tu usuario ha sido creado correctament! Ahora ya podemos registrar tu blog personal.";
$messages["register_step2_description"] = " <p>
Simplemente nos tienes que proporcionar un nombre para tu diario. M·s tarde si lo crees oportuno lo puedes cambiar.
 </p>";
$messages["register_step2_blog_name"] = "Nombre de tu nuevo blog:";

$messages["register_new_blog_step4_title"] = "Gracias! (3/3)";
$messages["register_new_blog_step3_description"] = "
 <p>
    El registro se ha realizado correctamente. Tu nuevo usuario y tu nuevo blog han sido creados correctamente, ahora ya puedes entrar en la zona de admnistraciÛn y empezar a escribir!
 </p>";
$messages["register_step4_admin_link"] = "
  <p>
    Pulsa <a href=\"admin.php\">aquÌ para ir a la administraciÛn</a> si quieres empezar a escribir.
 </p>";
$messages["register_step4_blog_link1"] = "
 <p>
    O pula <a href=\"";

$messages["register_step4_blog_link2"] = "
aquÌ\">para ir a ver tu nuevo blog.</a>.
 </p>";

$messages["register_step4_final_message"] = "
 <p>
  øFeliz blogging!
 </p>";


$messages["register_error_incorrect_username"] = "Nombre de usuario incorrecto o el usuario ya existe, por favor elija otro.<br/>";
$messages["register_error_incorrect_email"] = "Email incorrecto. <br/>";
$messages["register_error_user_already_exist"] = "Ya hay un usuario con este nombre elige otro.<br/>";
$messages["register_error_incorrect_password"] = "El password no es correcto. <br/>";
$messages["register_error_passwords_dont_match"] = "Los passwords no coinciden. <br/>";
$messages["register_error_adding_user"] = "Error creando el usuario: ";
$messages["register_error_creating_blog"] = "Ha habido un error creando el blog";
$messages["register_error_blog_name"] = "Debes elegir otro nombre para tu blog.<br/>" ;

?>