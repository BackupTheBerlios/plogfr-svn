<?php
// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'iso-8859-1';
$messages['locale_description'] = 'Traducción al español de pLog';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %H:%M';

// days of the week
$messages['days'] = Array( 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado' );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( 'Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages['months'] = Array( 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' );
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
$messages['message'] = 'Mensaje';
$messages['error'] = 'Error';
$messages['date'] = 'Fecha';

// miscellaneous texts
$messages['of'] = 'de';
$messages['recently'] = 'recientemente...';
$messages['comments'] = 'comentarios';
$messages['comment on this'] = 'Comentario';
$messages['my_links'] = 'mis enlaces';
$messages['archives'] = 'archivos';
$messages['search'] = 'buscar';
$messages['calendar'] = 'calendario';
$messages['search_s'] = 'Buscar';
$messages['search_this_blog'] = 'Buscar en esta bitácora:';
$messages['about_myself'] = 'Quién soy?';
$messages['permalink_title'] = 'Enlace permanente a los archivos';
$messages['permalink'] = 'Enlace';
$messages['posted_by'] = 'Escrito por';
$messages['reply'] = 'Responder';

// add comment form
$messages['add_comment'] = 'Añadir comentario';
$messages['comment_topic'] = 'Título';
$messages['comment_text'] = 'Texto';
$messages['comment_username'] = 'Tu nombre';
$messages['comment_email'] = 'Dirección de correo (opcional)';
$messages['comment_url'] = 'Página personal (opcional)';
$messages['comment_send'] = 'Enviar';
$messages['comment_added'] = 'Comentario añadido!';
$messages['comment_add_error'] = 'Hubo un error añadiendo el comentario';
$messages['article_does_not_exist'] = 'El artículo no existe';
$messages['no_posts_found'] = 'No se encontraron artículos';
$messages['user_has_no_posts_yet'] = 'El usuario todavía no ha escrito ningun artículo';
$messages['back'] = 'Atrás';
$messages['post'] = 'artículo';
$messages['trackbacks_for_article'] = 'Retroenlaces del artículo: ';
$messages['trackback_excerpt'] = 'Fragmento';
$messages['trackback_weblog'] = 'Bitácora';
$messages['search_results'] = 'Resultados de la búsqueda';
$messages['search_matching_results'] = 'Los siguientes artículos han sido encontrados: ';
$messages['search_no_matching_posts'] = 'No se encontraron artículos';
$messages['read_more'] = '(Más)';
$messages['syndicate'] = 'Agregar';
$messages['main'] = 'Principal';
$messages['about'] = 'Acerca de';
$messages['download'] = 'Descargar';

////// error messages /////
$messages['error_fetching_article'] = 'El artículo especificado no existe.';
$messages['error_fetching_articles'] = 'No se encontraron artículos';
$messages['error_trackback_no_trackback'] = 'El artículo no ha recibido ningun retroenlace';
$messages['error_incorrect_article_id'] = 'El identificador del artículo no es correcto';
$messages['error_incorrect_blog_id'] = 'El identificador de la bitácora no es correcto';
$messages['error_comment_without_text'] = 'El texto del comentario está vacío.';
$messages['error_comment_without_name'] = 'Es necesario que dé su nombre o apodo.';
$messages['error_adding_comment'] = 'Hubo un error añadiendo el comentario.';
$messages['error_incorrect_parameter'] = 'Parámetro incorrecto.';
$messages['error_parameter_missing'] = 'Falta un parámetro.';
$messages['error_comments_not_enabled'] = 'Los comentarios han sido desactivados en esta bitácora.';
$messages['error_incorrect_search_terms'] = 'Los términos de la búsqueda son incorrectos.';
$messages['error_no_search_results'] = 'No se encontraros artículos que se correspondan con los términos de la búsqueda.';
$messages['error_no_albums_defined'] = 'No hay ningun álbum disponible en esta bitácora.';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Entrar';
$messages['welcome_message'] = 'Bienvenido a pLog';
$messages['error_incorrect_username_or_password'] = 'El nombre de usuario o password es incorrecto.';
$messages['error_dont_belong_to_any_blog'] = 'Su usuario no pertenece a ninguna bitácora todavía.';
$messages['logout_message'] = 'Ha sido desconectado correctamente';
$messages['logout_message_2'] = 'Haga clic <a href="%1$s">aquí</a> para ir a %2$s</a>.';
$messages['error_access_forbidden'] = 'Acceso no permitido. Debe primero verificar su usuario aquí';
$messages['username'] = 'Usuario';
$messages['password'] = 'Password';

// dashboard
$messages['dashboard'] = 'Perspectiva';
$messages['recent_articles'] = 'Artículos recientes';
$messages['recent_comments'] = 'Comentarios recientes';
$messages['recent_trackbacks'] = 'Retroenlaces recientes';
$messages['blog_statistics'] = 'Estadísticas';
$messages['total_posts'] = 'Número de artículos';
$messages['total_comments'] = 'Número de comentarios';
$messages['total_trackbacks'] = 'Número de trackbacks';
$messages['total_viewed'] = 'Artículos leídos';
$messages['in'] = 'En';

// menu options
$messages['newPost'] = 'Nuevo Artículo';
$messages['Manage'] = 'Contenido';
$messages['managePosts'] = 'Artículos';
$messages['editPosts'] = 'Artículos';
$messages['editArticleCategories'] = 'Categorias';
$messages['newArticleCategory'] = 'Nueva Categoria';
$messages['manageLinks'] = 'Enlaces';
$messages['editLinks'] = 'Enlaces';
$messages['newLink'] = 'Nuevo Enlace';
$messages['editLink'] = 'Editar Enlace';
$messages['editLinkCategories'] = 'Editar Categorías de Enlaces';
$messages['newLinkCategory'] = 'Nueva Categoría de Enlaces';
$messages['editLinkCategory'] = 'Editar Categoría de Enlace';
$messages['manageCustomFields'] = 'Campos';
$messages['blogCustomFields'] = 'Campos';
$messages['newCustomField'] = 'Nuevo Campo';
$messages['resourceCenter'] = 'Ficheros';
$messages['resources'] = 'Ficheros';
$messages['newResourceAlbum'] = 'Nuevo Álbum';
$messages['newResource'] = 'Nuevo Fichero';
$messages['controlCenter'] = 'Configuración';
$messages['manageSettings'] = 'Configuración';
$messages['blogSettings'] = 'Configuración de la Bitácora';
$messages['userSettings'] = 'Configuración del Usuario';
$messages['pluginCenter'] = 'Plugins';
$messages['Stats'] = 'Estadísticas';
$messages['manageBlogUsers'] = 'Usuarios de la Bitácora';
$messages['newBlogUser'] = 'Invitar Usuario';
$messages['showBlogUsers'] = 'Usuarios de la Bitácora';
$messages['manageBlogTemplates'] = 'Plantillas';
$messages['newBlogTemplate'] = 'Añadir Plantilla';
$messages['blogTemplates'] = 'Plantillas de la Bitácora';
$messages['adminSettings'] = 'Administración';
$messages['Users'] = 'Usuarios';
$messages['createUser'] = 'Nuevo Usuario';
$messages['editSiteUsers'] = 'Usuarios';
$messages['Blogs'] = 'Bitácoras';
$messages['createBlog'] = 'Nueva Bitácora';
$messages['editSiteBlogs'] = 'Bitácoras';
$messages['Locales'] = 'Traducciones';
$messages['newLocale'] = 'Nueva Traducción';
$messages['siteLocales'] = 'Traducciones';
$messages['Templates'] = 'Plantillas';
$messages['newTemplate'] = 'Añadir Plantilla';
$messages['siteTemplates'] = 'Plantillas';
$messages['GlobalSettings'] = 'Configuración General';
$messages['editSiteSettings'] = 'General';
$messages['summarySettings'] = 'Portal';
$messages['templateSettings'] = 'Plantillas';
$messages['urlSettings'] = 'Direcciones';
$messages['emailSettings'] = 'Email';
$messages['uploadSettings'] = 'Transferencias';
$messages['helpersSettings'] = 'Herramientas';
$messages['interfacesSettings'] = 'Interfaces';
$messages['securitySettings'] = 'Seguridad';
$messages['bayesianSettings'] = 'Filtro Bayesiano';
$messages['resourcesSettings'] = 'Ficheros';
$messages['searchSettings'] = 'Búsquedas';
$messages['cleanUpSection'] = 'Limpieza';
$messages['cleanUp'] = 'Limpieza';
$messages['editResourceAlbum'] = 'Editar Álbum';
$messages['resourceInfo'] = 'Editar Fichero';
$messages['editBlog'] = 'Editar Plantilla';
$messages['Logout'] = 'Salir';

// new post
$messages['topic'] = 'Título';
$messages['topic_help'] = 'Título del artículo';
$messages['text'] = 'Texto';
$messages['text_help'] = 'Texto del artículo. Esta parte siempre aparecerá en la página principal de la bitácora';
$messages['extended_text'] = 'Texto extra';
$messages['extended_text_help'] = 'Texto extra del artículo. Esta parte puede aparecer o bien siempre en la primera página o en la página del artículo. Esto es configurable en la página de configuración de la bitácora';
$messages['post_slug'] = 'Título URL';
$messages['post_slug_help'] = 'El título URL será usado para generar enlaces permanentes con un mayor significado semántico';
$messages['date'] = 'Fecha';
$messages['post_date_help'] = 'Fecha cuando este artículo debería ser publicado';
$messages['status'] = 'Estado';
$messages['post_status_help'] = 'Elija uno de los siguientes estados';
$messages['post_status_published'] = 'Publicado';
$messages['post_status_draft'] = 'Borrador';
$messages['post_status_deleted'] = 'Eliminado';
$messages['categories'] = 'Categorías';
$messages['post_categories_help'] = 'Seleccione una o más categorías';
$messages['post_comments_enabled_help'] = 'Activar comentarios';
$messages['send_notification_help'] = 'Enviar una notificación cuando se reciban nuevos comentarios o retroenlaces';
$messages['send_trackback_pings_help'] = 'Envíar retroenlaces';
$messages['send_xmlrpc_pings_help'] = 'Enviar pings vía XMLRPC';
$messages['save_draft_and_continue'] = 'Guardar Borrador';
$messages['preview'] = 'Vista Previa';
$messages['add_post'] = 'Añadir!';
$messages['error_saving_draft'] = 'Hubo un error guardando el borrador';
$messages['draft_saved_ok'] = 'Borrador guardado correctamente';
$messages['error_sending_request'] = 'Hubo un error enviando la petición';
$messages['error_no_category_selected'] = 'Debe seleccionar por lo menos una categoría';
$messages['error_missing_post_topic'] = 'El título del artículo está vacío';
$messages['error_missing_post_text'] = 'El texto del artículo está vacío';
$messages['error_adding_post'] = 'Hubo un error guardando el artículo';
$messages['post_added_not_published'] = 'El artículo ha sido guardado correctamente pero no aparecerá en la página principal';
$messages['post_added_ok'] = 'El artículo ha sido guardado correctamente.';
$messages['send_notifications_ok'] = 'Se enviará un mensaje cada vez que se reciba un comentario o retroenlace';

// send trackbacks
$messages['error_sending_trackbacks'] = 'Hubo un error enviando un retroenlace a los siguientes sitios';
$messages['send_trackbacks_help'] = 'Seleccione las direcciones a las que quiere enviar un retroenlace. Asegúrese de que las direcciones soportan retroenlaces.';
$messages['send_trackbacks'] = 'Enviar retroenlaces';
$messages['ping_selected'] = 'Enviar retroenlaces';
$messages['trackbacks_sent_ok'] = 'Los retroenlaces fueron enviados correctamente a las direcciones seleccionadas';

// posts page
$messages['show_by'] = 'Mostrar';
$messages['category'] = 'Categoría';
$messages['author'] = 'Autor';
$messages['post_status_all'] = 'Todos';
$messages['author_all'] = 'Todos';
$messages['search_terms'] = 'Búsqueda';
$messages['show'] = 'Mostrar';
$messages['delete'] = 'Eliminar';
$messages['actions'] = 'Acciones';
$messages['all'] = 'Todos';
$messages['category_all'] = 'Todas';
$messages['error_incorrect_article_id'] = 'El identificador de artículo es incorrecto.';
$messages['error_deleting_article'] = 'Hubo un error eliminando el artículo "%s"';
$messages['article_deleted_ok'] = 'El artículo "%s" fue eliminado correctamente';
$messages['articles_deleted_ok'] = '%s articulos fueron eliminados correctamente';
$messages['error_deleting_article2'] = 'Hubo un error eliminando el artículo cuyo identificador es "%s"';

// edit post page
$messages['update'] = 'Actualizar';
$messages['editPost'] = 'Editar Artículo';
$messages['error_fetching_post'] = 'Hubo un error cargando el artículo';
$messages['post_updated_ok'] = 'El artículo "%s" fue actualizado corrrectamente';
$messages['error_updating_post'] = 'Hubo un error actualizando el artículo';
$messages['notification_added'] = 'Se enviará un mensaje cada vez que se reciba un comentario o retroenlace';
$messages['notification_removed'] = 'No se enviarán mensajes en caso de comentarios o retroenlaces';

// post comments
$messages['url'] = 'Dirección';
$messages['comment_status_all'] = 'Todos';
$messages['comment_status_spam'] = 'Spam';
$messages['comment_status_nonspam'] = 'No Spam';
$messages['error_fetching_comments'] = 'Hubo un error cargando los artículos del comentario';
$messages['error_deleting_comments'] = 'Hubo un error eliminando los comentarios o no se seleccionó ningún comentario a eliminar';
$messages['comment_deleted_ok'] = 'El comentario "%s" fue eliminado correctamente';
$messages['comments_deleted_ok'] = '%s comentarios eliminados correctamente';
$messages['error_deleting_comment'] = 'Hubo un error eliminando el comentario "%s"';
$messages['error_deleting_comment2'] = 'Hubo un error eliminando el comentario cuyo identificador es %s';
$messages['editComments'] = 'Comentarios';
$messages['mark_as_spam'] = 'Marcar como spam';
$messages['mark_as_no_spam'] = 'Marcar como no spam';
$messages['error_incorrect_comment_id'] = 'El identificador del comentario no es correcto';
$messages['error_marking_comment_as_spam'] = 'Hubo un error marcando el comentario como spam';
$messages['comment_marked_as_spam_ok'] = 'El comentario fue marcado como spam correctamente';
$messages['error_marking_comment_as_nonspam'] = 'Hubo un error marcando el comentario como no spam';
$messages['comment_marked_as_nonspam_ok'] = 'El comentario fue marcado como no spam correctamente';

// post trackbacks
$messages['blog'] = 'Bitácora';
$messages['excerpt'] = 'Fragmento';
$messages['error_fetching_trackbacks'] = 'Hubo un error cargando los retroenlaces recibidos';
$messages['error_deleting_trackbacks'] = 'Hubo un error eliminando los retroenlaces o no se seleccionó ningún retroenlace a eliminar';
$messages['error_deleting_trackback'] = 'Hubo un error borrando el retroenlace "%s"';
$messages['error_deleting_trackback2'] = 'Hubo un error eliminando el retroenlace cuyo identificador es "%s"';
$messages['trackback_deleted_ok'] = 'Retroenlace "%s" eliminado correctamente';
$messages['trackbacks_deleted_ok'] = '%s retroenlaces eliminados correctamente';
$messages['editTrackbacks'] = 'Retroenlaces';

// post statistics
$messages['referrer'] = 'Referencia';
$messages['hits'] = 'Hits';
$messages['error_no_items_selected'] = 'No se seleccionaron referencias a eliminar';
$messages['error_deleting_referrer'] = 'Hubo un error eliminando la referencia "%s"';
$messages['error_deleting_referrer2'] = 'Hubo un error eliminando la referencia cuyo identificador es "%s"';
$messages['referrer_deleted_ok'] = 'La referencia "%s" fue eliminada correctamente';
$messages['referrers_deleted_ok'] = '%s referencias eliminadas correctamente';

// categories
$messages['posts'] = 'Artículos';
$messages['show_in_main_page'] = 'Incluir en la página principal';
$messages['error_incorrect_category_id'] = 'El identificador de la categoría no es correcto o no se seleccionaron categorías a borrar';
$messages['error_category_has_articles'] = 'La categoría "%s" no se puede borrar porque está siendo usada por algunos artículos. Edite primero los artículos y vuelva a intentar eliminar la categoría.';
$messages['category_deleted_ok'] = 'La categoría "%s" fue eliminada correctamente';
$messages['categories_deleted_ok'] = '%s categorías eliminadas correctamente';
$messages['error_deleting_category'] = 'Hubo un error eliminando la categoría "%s"';
$messages['error_deleting_category2'] = 'Hubo un error eliminando la categoría cuyo identificador es "%s"';
$messages['yes'] = 'Sí';
$messages['no'] = 'No';

// new category
$messages['name'] = 'Nombre';
$messages['category_name_help'] = 'Nombre de la categoría tal y como aparecerá en la bitácora';
$messages['description'] = 'Descripción';
$messages['category_description_help'] = 'Descripción de la categoría';
$messages['show_in_main_page_help'] = 'Si se desactiva, los artículos categorizados bajo esta categoría no serán mostrados en la página principal y solo serán visibles en la página propia de la categoría';
$messages['error_empty_name'] = 'El nombre no puede estar vacío';
$messages['error_empty_description'] = 'La descripción no puede estar vacía';
$messages['error_adding_article_category'] = 'Hubo un error añadiendo la categoría. Verifique los datos y vuélvalo a intentar';
$messages['category_added_ok'] = 'La categoría "%s" fue añadida correctamente a la bitácora';
$messages['add'] = 'Añadir';
$messages['reset'] = 'Limpiar';

// update category
$messages['error_updating_article_category'] = 'Hubo un error actualizando la categoría';
$messages['error_fetching_category'] = 'Hubo un error cargando la categoría';
$messages['article_category_updated_ok'] = 'La categoría "%s" fue actualizada correctamente';

// links
$messages['feed'] = 'Contenidos RSS';
$messages['error_no_links_selected'] = 'El identificador del enlace no es correcto o no se seleccionaron enlaces a eliminar';
$messages['error_incorrect_link_id'] = 'El identificador del enlace no es correcto';
$messages['error_removing_link'] = 'Hubo un error eliminando el enlace "%s"';
$messages['error_removing_link2'] = 'Hubo un error eliminando el enlace cuyo identificador es "%s"';
$messages['link_deleted_ok'] = 'El enlace "%s" fue eliminado correctamente';
$messages['links_deleted_ok'] = '%s enlaces fueron eliminados correctamente';

// new link
$messages['link_name_help'] = 'Nombre para el enlace';
$messages['link_url_help'] = 'Dirección del enlace';
$messages['link_description_help'] = 'Breve descripción sobre el enlace';
$messages['link_feed_help'] = 'Enlace a una fuende de contenidos RSS o Atom del enlace';
$messages['link_category_help'] = 'Elija una de las categorías de enlace disponibles';
$messages['error_adding_link'] = 'Se produjo un error añadiendo el enlace. Verifique los datos y vuélvalo a intentar';
$messages['error_invalid_url'] = 'La dirección no es correcta';
$messages['link_added_ok'] = 'El enlace "%s" fue añadido correctamente';

// update link
$messages['error_updating_link'] = 'Se produjo un error actualizando el enlace. Verifique los datos y vuélvalo a intentar';
$messages['error_fetching_link'] = 'Se produjo un error al cargar en enlace';
$messages['link_updated_ok'] = 'El enlace "%s" fue actualizado correctamente';

// link categories
$messages['links'] = 'Enlaces';
$messages['error_invalid_link_category_id'] = 'El identificador de la categoría de enlaces no es correcto o no se eligió ninguna categoría de enlaces';
$messages['error_links_in_link_category'] = 'Hay algunos enlaces clasificados bajo la categoría "%s". Modifique los enlaces primero y vuélvalo a intentar.';
$messages['error_removing_link_category'] = 'Hubo un error eliminando la categoría de enlaces "%s"';
$messages['link_category_deleted_ok'] = 'La categoría de enlaces "%s" fue eliminada correctamente';
$messages['link_categories_deleted_ok'] = '%s categorías de enlaces fueron eliminadas correctamente';
$messages['error_removing_link_category2'] = 'Hubo un error eliminando la categoría de enlaces cuyo identificador es "%s"';

// new link category
$messages['link_category_name_help'] = 'Nombre dado a esta categoría de enlaces';
$messages['error_adding_link_category'] = 'Hubo un error añadiendo la nueva categoría de enlaces';
$messages['link_category_added_ok'] = 'La categoría de enlaces "%s" fue añadida correctamente';

// edit link category
$messages['error_updating_link_category'] = 'Hubo un error actualizando la categoría de enlace. Compruebe los datos y vuélvalo a intentar.';
$messages['link_category_updated_ok'] = 'La categoría de enlaces "%s" fue actualizada correctamente';
$messages['error_fetching_link_category'] = 'Se produjo un error cargando la categoría de enlaces';

// custom fields
$messages['type'] = 'Tipo';
$messages['hidden'] = 'Oculto';
$messages['fields_deleted_ok'] = '%s campos eliminados correctamente';
$messages['field_deleted_ok'] = 'El campo "%s" fue borrado correctamente';
$messages['error_deleting_field'] = 'Hubo un error eliminando el campo "%s"';
$messages['error_deleting_field2'] = 'Hubo un error eliminando el campo cuyo identificador es "%s"';
$messages['error_incorrect_field_id'] = 'El identificador del campo no es correcto';

// new custom field
$messages['field_name_help'] = 'Nombre del campo que será usado para obtener su valor en los artículos';
$messages['field_description_help'] = 'Descripción del campo que será mostrada al añadir o editar un artículo';
$messages['field_type_help'] = 'Elija uno de los siguientes tipos de campo';
$messages['field_hidden_help'] = 'Si el campo está marcado como oculto, no será mostrado en las pantallas de edición o nuevo artículo. Este atributo es usado casi únicamente por plugins que añaden nuevos campos para su uso';
$messages['error_adding_custom_field'] = 'Hubo un error añadiendo el campo. Compruebe los datos y vuélvalo a intentar';
$messages['custom_field_added_ok'] = 'El campo "%s" fue añadido correctamente';
$messages['text_field'] = 'Campo de texto';
$messages['text_area'] = 'Caja de texto';
$messages['checkbox'] = 'Casilla';
$messages['date_field'] = 'Campo de fecha';

// edit custom field
$messages['error_fetching_custom_field'] = 'Hubo un error cargando el campo';
$messages['error_updating_custom_field'] = 'Hubo un error actualizando el capmo. Compruebe los datos y vuélvalo a intentar';
$messages['custom_field_updated_ok'] = 'El campo "%s" fue actualizado correctamente';

// resources
$messages['root_album'] = 'Álbum raíz';
$messages['num_resources'] = 'Número de ficheros';
$messages['total_size'] = 'Tamaño total';
$messages['album'] = 'Álbjum';
$messages['error_incorrect_album_id'] = 'El identificador del álbum no es válido';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'No fue posible crear los directorios necesarios donde los ficheros van a ser guardados. Esto puede ser debido a varias razones, como por ejemplo que el "safe mode" esté activado en su configuración del PHP or que el usuario usado para ejecutar PHP no tenga suficientes permisos. También puede intentar crear los siguientes directorios manualmente: <br/><br/>%s<br/><br/>Si los directorios ya existen, asegúrese de que pueden ser leídos y escritos por el usuario que se está usando para ejecutar el servidor de web/PHP';
$messages['items_deleted_ok'] = '%s ficheros eliminados correctamente';
$messages['error_album_has_children'] = 'El álbum "%s" tiene subálbums. Modifique primero los subálbums y vuélvalo a intentar';
$messages['item_deleted_ok'] = 'El fichero "%s" fue borrado correctamente';
$messages['error_deleting_album'] = 'Hubo un error eliminando el campo "%s"';
$messages['error_deleting_album2'] = 'Hubo un error eliminando el campo cuyo identificador es "%s"';
$messages['error_deleting_resource'] = 'Hubo un error eliminando el fichero "%s"';
$messages['error_deleting_resource2'] = 'Hubo un error eliminando el fichero cuyo identificador es "%s"';
$messages['error_no_resources_selected'] = 'No se seleccionaron ficheros o álbums para eliminar';
$messages['resource_deleted_ok'] = 'El fichero "%s" fue eliminado correctamente';
$messages['album_deleted_ok'] = 'El álbum "%s" fue eliminado correctamente';
$messages['add_resource'] = 'Añadir fichero';
$messages['add_resource_preview'] = 'Añadir vista previa';
$messages['add_resource_medium'] = 'Add vista mediana';
$messages['add_album'] = 'Añadir álbum';

// new album
$messages['album_name_help'] = 'Nombre del nuevo álbum';
$messages['parent'] = 'Padre';
$messages['no_parent'] = 'Álbum raíz';
$messages['parent_album_help'] = 'Álbums pueden contener subálbums de forma que pueda organizar sus contenidos mejor';
$messages['album_description_help'] = 'Descripción de los contenidos del álbum';
$messages['error_adding_album'] = 'Hubo un error añadiendo el nuevo álbum. Compruebe los datos y vuélvalo a intentar';
$messages['album_added_ok'] = 'El álbum "%s" fue añadido correctamente';

// edit album
$messages['error_incorrect_album_id'] = 'El identificador del álbum no es correcto';
$messages['error_fetching_album'] = 'Hubo un error cargando el álbum';
$messages['error_updating_album'] = 'Hubo un error actualizando el álbum. Compruebe los datos y vuélvalo a intentar';
$messages['album_updated_ok'] = 'El álbum "%s" fue actualizado correctamente';
$messages['show_album_help'] = 'Si esta casilla está desactivada, el álbum y los ficheros que estén incluídos en él no aparecerán en la parte pública del blog';

// new resource
$messages['file'] = 'Fichero';
$messages['resource_file_help'] = 'Fichero que desea añadir. Use el enlace "Añadir Otro" para añadir más de un fichero al mismo tiempo (aunque tardará más rato en terminar la operación)';
$messages['add_field'] = 'Añadir otro';
$messages['resource_description_help'] = 'Descripción sobre los contenidos del fichero';
$messages['resource_album_help'] = 'Seleccione el álbum al que se añadirá el fichero';
$messages['error_no_resource_uploaded'] = 'No seleccionó ningún fichero para añadir';
$messages['resource_added_ok'] = 'El fichero "%s" fue añadido correctamente';
$messages['error_resource_forbidden_extension'] = 'El fichero no fue añadido porque es de un tipo no permitido por el administrador';
$messages['error_resource_too_big'] = 'El fichero no fue añadido porque es demasiado grande';
$messages['error_uploads_disabled'] = 'El fichero no fue añadido porque la posibilidad de añadir ficheros ha sido desactivada por el administrador';
$messages['error_quota_exceeded'] = 'El fichero no fue añadido porque se ha superado el tamaño máximo total de ficheros permitido para nuestra bitácora';
$messages['error_adding_resource'] = 'Hubo un error añadiendo el fichero';

// edit resource
$messages['editResource'] = 'Editar fichero';
$messages['resource_information_help'] = 'Información sobre el fichero';
$messages['information'] = 'Información';
$messages['size'] = 'Tamaño';
$messages['format'] = 'Formato';
$messages['dimensions'] = 'Dimensiones';
$messages['bits_per_sample'] = 'Bits por muestra';
$messages['sample_rate'] = 'Frecuencia de muestreo';
$messages['number_of_channels'] = 'Número de canales';
$messages['legnth'] = 'Duración';
$messages['thumbnail_format'] = 'Formato de la vista previa';
$messages['regenerate_preview'] = 'Regenerar vista previa';
$messages['error_fetching_resource'] = 'Hubo un error cargando el fichero';
$messages['error_updating_resource'] = 'Hubo un error actualizando el fichero';
$messages['resource_updated_ok'] = 'El fichero "%s" fue actualizado correctamente';

// blog settings
$messages['blog_link'] = 'Dirección';
$messages['blog_link_help'] = 'Enlace permanente a esta bitácora';
$messages['blog_name_help'] = 'Título de esta bitácora';
$messages['blog_description_help'] = 'Descripción de los contenidos de esta bitácora';
$messages['language'] = 'Idioma';
$messages['blog_language_help'] = 'Idioma usado para mostrar los textos de tanto la parte pública como la parte privada de la bitácora';
$messages['max_main_page_items'] = 'Artículos mostrados en la página principal';
$messages['max_main_page_items_help'] = 'Máximo número de artículos que deben ser mostrados en la página principal de la bitácora';
$messages['max_recent_items'] = 'Número de artículos recientes';
$messages['max_recent_items_help'] = 'Máximo número de artículos recientes que deben ser mostrados';
$messages['template'] = 'Plantilla';
$messages['choose'] = 'Elegir';
$messages['blog_template_help'] = 'Plantilla que será usada para mostrar los contenidos de la bitácora. Esta lista incluye las plantillas globales además de las plantillas que han sido instaladas exclusivamente para esta bitácora';
$messages['use_read_more'] = 'Añadir el enlace "Más..." a los artículos';
$messages['use_read_more_help'] = 'Si se activa, sólo el texto que se introdució en la caja de texto marcada como "Texto" en la página de edición de artículos se mostrará en la página principal y se añadirá un enlace titulado "Más..." al final del texto. El resto del artículo se mostrará en la página propia del artículo. Si se desactiva, el artículo entero se mostrará siempre en la página principal';
$messages['enable_wysiwyg'] = 'Activar el editor visual de artículos';
$messages['enable_wysiwyg_help'] = 'Activa el editor visual de código HTML, que muestra el contenido del artículo tal cual aparecerá en la bitácora. Esta funcionalidad requiere Internet Explorer 5.5 o Mozilla 1.3 o superiores';
$messages['enable_comments'] = 'Permitir comentarios por defecto';
$messages['enable_comments_help'] = 'Permite comentarios en todos los artículos por defecto, aunque los comentarios se pueden activar o desactivar a voluntad específicamente para cada artículo';
$messages['show_future_posts'] = 'Mostrar los artículos con fecha en el futuro';
$messages['show_future_posts_help'] = 'Muestra los artículos que tengan fetcha futura en el calendario y en la página principal';
$messages['comments_order'] = 'Ordern de los comentarios';
$messages['comments_order_help'] = 'Orden en que los comentarios de un artículo deben ser mostrados';
$messages['oldest_first'] = 'Los antiguos primero';
$messages['newest_first'] = 'Los nuevos primero';
$messages['categories_order'] = 'Orden de las categorías';
$messages['categories_order_help'] = 'Orden en que las categorías deben ser mostradas en la página principal';
$messages['most_recent_updated_first'] = 'Las categorías que se hayan actualizado más recientemente primero';
$messages['alphabetical_order'] = 'Orden alfabético';
$messages['reverse_alphabetical_order'] = 'Orden alfabético inverso';
$messages['most_articles_first'] = 'Las que tengan más artículos primero';
$messages['link_categories_order'] = 'Orden de las categorías de enlaces';
$messages['link_categories_order_help'] = 'Orden en que las categorías de enlaces deben ser mostradas en la página principal';
$messages['most_links_first'] = 'Las que tengan más enlaces primero';
$messages['most_links_last'] = 'Las que tengan menos enlaces primero';
$messages['time_offset'] = 'Diferencia horaria';
$messages['time_offset_help'] = 'Diferencia horaria en número de horas que será añadida dinámicamente a cada fecha y hora mostrada en la bitácora';
$messages['close'] = 'Cerrar';
$messages['select'] = 'Seleccionar';
$messages['error_updating_settings'] = 'Hubo un error actualizando la configuración de la bitácora. Compruebe los datos y vuélvalo a intentar';
$messages['error_invalid_number'] = 'El valor no es correcto';
$messages['error_incorrect_time_offset'] = 'El valor de la diferencia horaria no es correcto';
$messages['blog_settings_updated_ok'] = 'La configuración de la bitácora fue guardada correctamente';
$messages['hours'] = 'Horas';

// user settings
$messages['username_help'] = 'Nombre de usuario, no puede ser cambiado';
$messages['full_name'] = 'Nombre completo';
$messages['full_name_help'] = 'Nombre completo, opcional';
$messages['password_help'] = 'Cambie el password y confírmelo, o deje los campos vacíos si no desea hacer ningun cambio.';
$messages['confirm_password'] = 'Confirmar el password';
$messages['email'] = 'Direccion de correo';
$messages['email_help'] = 'Dirección de correo donde las notificaciones serán enviadas';
$messages['bio'] = 'Descripción personal';
$messages['bio_help'] = 'Descripción personal, opcional';
$messages['picture'] = 'Foto';
$messages['user_picture_help'] = 'Puede elegir una foto de las disponibles en esta bitácora como fichero para que sea su foto personal';
$messages['error_invalid_password'] = 'El password no es correcto o por ejemplo, es demasiado corto';
$messages['error_passwords_dont_match'] = 'El password y la confirmación no son iguales';
$messages['error_incorrect_email_address'] = 'La dirección de correo no es válida';
$messages['error_updating_user_settings'] = 'Hubo un error guardando sus datos. Compruebe los datos y vuélvalo a intentar';
$messages['user_settings_updated_ok'] = 'Los datos de usuario fueron guardados correctamente';
$messages['resource'] = 'Fichero';

// plugin centre
$messages['identifier'] = 'Identificador';
$messages['error_plugins_disabled'] = 'La funcionalidad de plugins ha sido desactivada por el administrador.';

// blog users
$messages['revoke_permissions'] = 'Quitar permisos';
$messages['error_no_users_selected'] = 'No se seleccionó ningun usuario';
$messages['user_removed_from_blog_ok'] = 'El usuario "%s" ya no tiene permisos para acceder a esta bitácora';
$messages['users_removed_from_blog_ok'] = '%s usuarios ya no tienen acceso a esta bitácora';
$messages['error_removing_user_from_blog'] = 'Hubo un error eliminando el acceso a esta bitácora del usuario "%s"';
$messages['error_removing_user_from_blog2'] = 'Hubo un error eliminando el acceso a esta bitácora del usuario cuyo identificador es "%s"';

// new blog user
$messages['new_blog_username_help'] = 'Nombre del usuario al que se quiere dar acceso a esta bitácora. El usuario solo tendrá acceso a las secciones "Contenido" y "Ficheros"';
$messages['send_notification'] = 'Enviar notificación';
$messages['send_user_notification_help'] = 'Enviar un mensaje de notificación a este usuario';
$messages['notification_text'] = 'Texto';
$messages['notification_text_help'] = 'Texto que será incluido en la notificación enviada a este usuario';
$messages['error_adding_user'] = 'Hubo un error dando acceso al usuario. Compruebe los datos y vuélvalo a intentar';
$messages['error_empty_text'] = 'El texto de la notificación no puede estar vacío';
$messages['error_invalid_user'] = 'El usuario "%s" no es válido o no existe';
$messages['user_added_to_blog_ok'] = 'El usuario "%s" ya puede acceder a esta bitácora';

// blog templates
$messages['error_no_templates_selected'] = 'No se selecciaron plantillas';
$messages['error_template_is_current'] = 'La plantilla "%s" no se puede eliminar porque es la que está usando la bitácora';
$messages['error_removing_template'] = 'Hubo un error borrando la plantilla "%s"';
$messages['template_removed_ok'] = 'La plantilla "%s" fue eliminada correctamente';
$messages['templates_removed_ok'] = '%s plantillas fueron eliminadas correctamente';

// new blog template
$messages['template_installed_ok'] = 'La plantilla "%s" fue añadida correctamente';
$messages['error_installing_template'] = 'Hubo un error añadiendo la plantilla "%s"';
$messages['error_missing_base_files'] = 'La plantilla no pudo ser añadida porque algunos de los ficheros básicos de la plantilla no están disponibles';
$messages['error_add_template_disabled'] = 'No se pueden añadir nuevas plantillas porque esta posibilidad ha sido desactivada por el administrador';
$messages['error_must_upload_file'] = 'No se envió ningun fichero con datos de una plantilla';
$messages['error_uploads_disabled'] = 'La posibilidad de enviar ficheros al servidor ha sido desactivada por el administrador';
$messages['error_no_new_templates_found'] = 'No se encontraron nuevas plantillas';
$messages['error_template_not_inside_folder'] = 'Los ficheros de la plantilla se deben guardar dentro de un directorio cuyo nombre debe ser el mismo que el de la plantilla';
$messages['error_unpacking'] = 'Hubo un error descomprimiendo el fichero de la plantilla';
$messages['error_forbidden_extensions'] = 'Algunos de los ficheros de la plantilla contenían una extensión no permitida en este sitio';
$messages['error_creating_working_folder'] = 'Hubo un error creando un directorio temporal para descomprimir la plantilla';
$messages['error_checking_template'] = 'Hubo un error comprobando que la plantilla es correcta: %s';
$messages['template_package'] = 'Plantilla';
$messages['blog_template_package_help']  = 'Use este formulario para enviar nuevas plantillas al servidor. Éstas plantillas solo estarán disponibles para esta bitácora. Si no es posible enviar ficheros, use por ejemplo un cliente de FTP para subir los ficheros y colóquelos en el directorio <b>%s</b> y luego use el botón "<b>Actualizar plantillas</b>" para añadir cualquier plantilla nueva. pLog comprobará el contenido del directorio y añadirá automáticamente todas las plantillas nuevas';
$messages['scan_templates'] = 'Actualizar plantillas';

// site users
$messages['user_status_active'] = 'Activo';
$messages['user_status_disabled'] = 'Desactivado';
$messages['user_status_all'] = 'Todos';
$messages['user_status_unconfirmed'] = 'Sin confirmar';
$messages['error_invalid_user2'] = 'El usuario cuyo identificador es "%s" no existe';
$messages['error_deleting_user'] = 'Hubo un error desactivando el usuario "%s"';
$messages['user_deleted_ok'] = 'El usuario "%s" fue desactivado correctamente';
$messages['users_deleted_ok'] = '%s usuarios fueron desactivados correctamente';

// create user
$messages['user_added_ok'] = 'El usuario "%s" fue añadido correctamente';
$messages['error_incorrect_username'] = 'El nombre de usuario no es correcto o ya está asignado';
$messages['user_status_help'] = 'Estado del usuario';
$messages['user_blog_help'] = 'Bitácora a la que este usuario será asignado inicialmente';
$messages['none'] = 'Ninguno';

// edit user
$messages['error_invalid_user'] = 'El nombre de usuario no es correcto o no existe';
$messages['error_updating_user'] = 'Hubo un error actualizando el usuario. Compruebe los datos y vuélvalo a intentar';
$messages['blogs'] = 'Bitácoras';
$messages['user_blogs_help'] = 'Bitácoras a las que el usuario tiene acceso como usuario o como propietario de la bitácora';
$messages['site_admin'] = 'Administrador';
$messages['site_admin_help'] = 'Dar permisos de administrador a este usuario de forma que pueda acceder a la sección de "Administración"';
$messages['user_updated_ok'] = 'El usuario "%s" fue actualizado correctamente';

// site blogs
$messages['blog_status_all'] = 'Todas';
$messages['blog_status_active'] = 'Activas';
$messages['blog_status_disabled'] = 'Desactivada';
$messages['blog_status_unconfirmed'] = 'Sin confirmar';
$messages['owner'] = 'Propietario';
$messages['quota'] = 'Cuota';
$messages['bytes'] = 'bytes';
$messages['error_no_blogs_selected'] = 'No se seleccionaron bitácoras para desactivar';
$messages['error_blog_is_default_blog'] = 'La bitácora "%s" no se puede desactivar porque es la bitácora por defecto';
$messages['blog_deleted_ok'] = 'La bitácora "%s" fue desactivada correctamente';
$messages['blogs_deleted_ok'] = '%s fueron desactivadas correctamente';
$messages['error_deleting_blog'] = 'Hubo un error desactivando la bitácora "%s"';
$messages['error_deleting_blog2'] = 'Hubo un error desactivando la bitácora cuyo identificador es "%s"';

// create blog
$messages['error_adding_blog'] = 'Hubo un error añadiendo la bitácora. Compruebe los datos y vuélvalo a intentar';
$messages['blog_added_ok'] = 'La bitácora "%s" fue añadida correctamente';

// edit blog
$messages['blog_status_help'] = 'Estado de la bitácora';
$messages['blog_owner_help'] = 'Propietario de la bitácora, que tendrá control sobre su configuración';
$messages['users'] = 'Usuarios';
$messages['blog_quota_help'] = 'Cuota de ficheros en bytes. Use un valor de 0 para otorgar espacio ilimitado';
$messages['blog_users_help'] = 'Usuarios que pueden acceder a esta bitácora, pero sin acceso a su configuración. Asigne los usuarios de la izquierda a la lista de la derecha para añadir nuevos usuarios, o viceversa para eliminar usuarios existentes';
$messages['edit_blog_settings_updated_ok'] = 'La bitácora "%s" fue actualizada correctamente';
$messages['error_updating_blog_settings'] = 'Hubo un error actualizando la bitácora "%s"';
$messages['error_incorrect_blog_owner'] = 'El usuario seleccionado como propietario de la bitácora no es correcto';
$messages['error_fetching_blog'] = 'Hubo un error cargando la bitácora';
$messages['error_updating_blog_settings2'] = 'Hubo un error actualizando la bitácora. Compruebe los datos e inténtelo de nuevo';
$messages['add_or_remove'] = 'Añadir o eliminar usuarios';

// site locales
$messages['locale'] = 'Traducción';
$messages['locale_encoding'] = 'Condificación';
$messages['locale_deleted_ok'] = 'La traducción "%s" fue eliminada correctamente';
$messages['error_no_locales_selected'] = 'No se seleccionaron traducciones para eliminar';
$messages['error_deleting_only_locale'] = 'La traducción no pudo ser eliminada porque es la única que queda en el sistema';
$messages['locales_deleted_ok']= '%s traducciones fueron eliminadas correctamente';
$messages['error_deleting_locale'] = 'Hubo un error borrando la traducción "%s"';
$messages['error_locale_is_default'] = 'La traducción "%s" no pudo ser eliminada porque es la que se está usando por defecto para las nuevas bitácoras';

// add locale
$messages['error_invalid_locale_file'] = 'El fichero con la traducción no es válido';
$messages['error_no_new_locales_found'] = 'No se encontraron nuevos ficheros con traducciones';
$messages['locale_added_ok'] = 'La traducción "%s" fue añadida correctamente';
$messages['error_saving_locale'] = 'Hubo un error guardando la nueva traducción';
$messages['scan_locales'] = 'Actualizar traducciones';
$messages['add_locale_help'] = 'Use este formulario para añadir nuevas traducciones. Si no es posible enviar ficheros al servidor, suba el fichero al servidor manualmente mediante por ejemplo FTP, guárdelo en el directorio <b>./locales/</b> y use el botón "<b>Actualizar traducciones</b>". pLog leerá el directorio y añadirá automáticamente cualquier nueva traducción';

// site templates
$messages['error_template_is_default'] = 'La plantilla "%s" no pudo ser eliminada porque es la que se está usando por defecto para nuevas bitácoras';

// add template
$messages['global_template_package_help'] = 'Use este formulario para enviar nuevas plantillas al servidor. Éstas plantillas estarán disponibles para todas las bitácoras del servidor. Si no es posible enviar ficheros, use por ejemplo un cliente de FTP para subir los ficheros y colóquelos en el directorio <b>%s</b> y luego use el botón "<b>Actualizar plantillas</b>" para añadir cualquier plantilla nueva. pLog comprobará el contenido del directorio y añadirá automáticamente todas las plantillas nuevas';

// global settings
$messages['site_config_saved_ok'] = 'La configuración general fue guardada correctamente';
$messages['error_saving_site_config'] = 'Hubo un error guardando la configuración general';
/// general settings
$messages['help_comments_enabled'] = 'Activar los comentarios en nuevas bitácoras por defecto [Valor por defecto = Sí]';
$messages['help_beautify_comments_text'] = 'Si se activa, los comentarios enviados por los usuarios serán formateados automáticamente añadiendo párrafos y generando enlaces automáticamente a partir de direcciones [Valor por defecto = Sí]';
$messages['help_temp_folder'] = 'Carpeta donde el pLog puede escribir sus ficheros temporales de uso interno. Use una carpeta fuera del árbol de directorios del servidor de web para mayor seguridad [Valor por defecto = ./tmp]';
$messages['help_base_url'] = 'Dirección base donde el pLog está instalado';
$messages['help_subdomains_enabled'] = 'Activar el soporte para subdominios. Vea la sección de la documentación sobre subdominios para más información [Valor por defecto = No]';
$messages['help_subdomains_base_url'] = 'Cuando los subdominios estan activados, se usará está URL base en lugar de base_url. Use {blogname} para obtener el nombre de la bitácora y {username} para obtener el nombre del usuario, para generar un enlace permanente a la bitácora (p. ej. "http://{blogname}.sudominio.com")';
$messages['help_include_blog_id_in_url'] = 'Cuando los subdominions están activados conjuntamente con las URLs "normales", esto forzará al pLog a no incluir el parámetro "blogId". No debería alterar este valor si no sabe lo que está haciendo [Valor por defecto = Sí]';
$messages['help_script_name'] = 'Configure este parámetro si por alguna razón tiene que renombrar index.php [Valor por defecto = index.php]';
$messages['help_show_posts_max'] = 'Número máximo de artículos en la página principal para nuevas bitácoras [Valor por defecto = 15]';
$messages['help_recent_posts_max'] = 'Número máximo de artículos recientes mostrados en la página principal para nuevas bitácoras [Valor por defecto = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Activar el soporte para XmlHttpRequest de forma que se puedan guardar borradores de artículos sin tener que refrescar la página de edición [Valor por defecto = Sí]';
$messages['help_locale_folder'] = 'Carpeta donde están guardadas las traducciones. Use una carpeta fuera del árbol de directorios del servidor de web para mayor seguridad [Valor por defecto = ./locale]';
$messages['help_default_locale'] = 'Idioma por defecto para las nuevas bitácoras [Valor por defecto = en_UK]';
$messages['help_default_blog_id'] = 'Bitácora por defecto que será mostrada si no especifica una bitácora en particular [Valor por defecto = 1]';
$messages['help_default_time_offset'] = 'Diferencia horaria por defecto de las nuevas bitácoras [Valor por defecto = 0]';
$messages['help_html_allowed_tags_in_comments'] = 'Lista de entidades HTML, separadas por espacios en blanco, que están permitidas en los comentarios [Valor por defecto = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'Guardar los "referrers" en la base de datos [Valor por defecto = Sí]';
$messages['help_show_more_enabled'] = 'Activar el enlace "Más..." por defecto para nuevas bitácoras [Valor por defecto = Sí]';
$messages['help_update_article_reads'] = 'pLog actualizará el contador de veces que un artículo ha sido leído si se activa [Valor por defecto = Sí]';
$messages['help_update_cached_article_reads'] = 'Igual que update_article_reads, pero además se actualizará el contador aunque la caché esté activada [Valor por defecto = Sí]';
$messages['help_xmlrpc_ping_enabled'] = 'Activar la posibilidad de enviar pings mediante XMLRPC a los sitios que lo soporten [Valor por defecto = Sí]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Activar el soporte para pings XMLRPC por defecto en nuevos artículos [Valor por defecto = Sí]';
$messages['help_xmlrpc_ping_hosts'] = 'URLs de servicios que implementen soporte para pings XMLRPC. Ponga cada dirección en una línea nueva [Valor por defecto = http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = 'Activar el soporte para recibir retroenlaces [Valor por defecto = Sí]';
$messages['help_htmlarea_enabled'] = 'Activar por defecto el editor visual de artículos para las nuevas bitácoras [Valor por defecto = Sí';
$messages['help_plugin_manager_enabled'] = 'Activar los plugins [Valor por defecto = Sí]';
$messages['help_minimum_password_length'] = 'Tamaño mínimo, en carácteres, que un password debe tener [Valor por defecto = 4]';
$messages['help_xhtml_converter_enabled'] = 'Activa un filtro que intentará convertir el texto de los artículos a XHTML válido automáticamente [Valor por defecto = Sí]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'pLog intetará corregir casi todo lo que pueda para asegurar que nuestros artículos sean XHTML válido, aunque activando este modo es posible que se cometan más errores [Valor por defecto = No]';
$messages['help_session_save_path'] = 'Carpeta donde el pLog guarda sus sesiones, mediante la función session_save_path() del PHP. Deje este campo vació para usar el valor por defecto del PHP. Si usa otra carpeta que no sea la por defecto, asegúrese de que puede ser escrita por el usuario ejecutando el servidor de web [Valor por defecto = (vacío)]';
// summary settings
$messages['help_summary_page_show_max'] = 'Número de artículos que se mostrarán en el portal. Este parámetro controla todas las listas del portal (artículos más recientes, bitácoras más activas, etc) [Valor por defecto = 10]';
$messages['help_summary_blogs_per_page'] = 'Número de bitácoras por página en la sección "Bitácoras" del portal [Valor por defecto = 25]';
$messages['help_forbidden_usernames'] = 'Lista de nombres de usuario que no se pueden registrar [Valor por defecto = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = 'No permitir más de una bitácora por dirección de correo [Valor por defecto = No]';
$messages['help_summary_show_agreement'] = 'Mostrar un texto/licencia con el cual los usuarios tienen que estar de acuerdo antes de continuar con el proceso de registro [Valor por defecto = Sí]';
$messages['help_need_email_confirm_registration'] = 'Enviar un email a los nuevos usuarios con un enlace al que tienen que acceder, para confirmar el registro de una nueva bitácora [Valor por defecto = Sí]';
$messages['help_summary_disable_registration'] = 'No permitir el registro de nuevas bitácoras [Valor por defecto = No]';
// templates
$messages['help_template_folder'] = 'Carpeta donde se guardan las plantillas [Valor por defecto = ./templates]';
$messages['help_default_template'] = 'Plantilla por defecto para las nuevas bitácoras [Valor por defecto = standard]';
$messages['help_users_can_add_templates'] = 'Permitir que los usuarios añadan sus propias plantillas [Valor por defecto = Sí]';
$messages['help_template_compile_check'] = 'Si se activa, Smarty comprobará si los ficheros de las plantillas han cambiado y si es así, las recompilará [Valor por defecto = Sí]';
$messages['help_template_cache_enabled'] = 'Activa la cache de plantillas. Si está activada, las páginas de las bitácoras solo se generarán una vez y se usarán hasta que haya algun cambio. De esta forma, no será necesario traer los datos desde la base de datos cada vez [Valor por defecto = Sí]';
$messages['help_template_cache_lifetime'] = 'Tiempo en segundos de vida de la caché. Asigne -1 para que la caché nucna expire';
$messages['help_template_http_cache_enabled'] = 'Activar el soporte para las peticiones condicionales vía HTTP. Si se activa, pLog tendrá en cuenta el valor de la cabecera HTTP "If-Modified-Since" y solo enviará los datos en caso de que sea necesario para ahorrar ancho de banda [Valor por defecto = No]';
$messages['help_allow_php_code_in_templates'] = 'Permite incluir código PHP en las plantillas de Smarty vía {php}...{/php} [Valor por defecto = No]';
// urls
$messages['help_request_format_mode'] = 'Elija uno de los siguientes formatos de URLs. Si piensa usar "URLs Personales", configure los formatos de las URLs si es necesario [Valor por defecto = Plain]';
$messages['plain'] = 'Normal';
$messages['search_engine_friendly'] = 'Search engine friendly';
$messages['custom_url_format'] = 'URLs Personales';
$messages['help_permalink_format'] = 'Formato de los enlaces permanentes a artículos cuando las URLs personales están activadas [Valor por defecto = /blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = 'Formato de los enlaces a categorías de artículos cuando las URLs personales están activadas [Valor por defecto = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'Formato de los enlaces permanentes a bitácoras cuando las URLs personales están activadas  [Valor por defecto = /blog/{blogname}$]';
$messages['help_archive_link_format'] = 'Formato de los enlaces a los archivos cuando las URLs personales están activadas [Valor por defecto = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'Formato de los enlaces permanentes a los artículos de un autor en particular cuando las URLs personales están activadas [Valor por defecto = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'Formato de los enlaces a las páginas con los retroenlaces recibidos cuando las URLs personales están activadas  [Valor por defecto = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'Formato de los enlaces a páginas personales cuando las URLs personales están activadas  [Valor por defecto = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'Formato de los enlaces a álbums de ficheros cuando las URLs personales están activadas  [Valor por defecto = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'Formato de los enlaces a ficheros cuando las URLs personales están activadas  [Valor por defecto = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'Formato de los enlaces a las vistas previas de ficheros cuando las URLs personales están activadas  [Valor por defecto = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'Formato de los enlaces a las vistas previas de tamaño medio cuando las URLs personales están activadas  [Valor por defecto = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'Formato de los enlaces para descargar ficheros cuando las URLs personales están activadas  [Valor por defecto = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = 'Si se activa, pLog contactará con el servidor de correo especificado en el registro MX del especificado por el servidor DNS del dominio y comprobará si el usuario es válido [Valor por defecto = No]';
$messages['help_email_service_enabled'] = 'Activar el soporte para enviar mensajes [Valor por defecto = Sí]';
$messages['help_post_notification_source_address'] = 'Dirección que aparecerá en el campo "From:" cuando se envíen mensajes a través del pLog [Valor por defecto = noreply@your.host.com]';
$messages['help_email_service_type'] = 'Sistema que se usará para enviar mensajes [Valor por defecto = PHP]';
$messages['help_smtp_host'] = 'Si se desea usar un servidor SMTP para enviar mensajes, especifique aquí el nombre del servidor [Valor por defecto = (vacío)]';
$messages['help_smtp_port'] = 'Si el servidor de SMTP está configurado en un puerto distinto al 25 [Valor por defecto = (vacío)]';
$messages['help_smtp_use_authentication'] = 'Active este parámetro si el servidor requiere autentificación  [Valor por defecto = No]';
$messages['help_smtp_username'] = 'Nombre de usuario en caso de que el servidor SMTP necesite autentificación [Valor por defecto = (vacío)]';
$messages['help_smtp_password'] = 'Password en caso de que el servidor SMTP necesite autentificación [Valor por defecto = (vacío)]';
// helpers
$messages['help_path_to_tar'] = 'Ruta completa al binario "tar", necesario para descomprimir plantillas en formato .tar.gz o tar.bz2 [Valor por defecto = /bin/tar]';
$messages['help_path_to_gzip'] = 'Ruta completa al binario "gzip", necesario para descomprimir plantillas en formato .tar.gz [Valor por defecto = /bin/gzip]';
$messages['help_path_to_bz2'] = 'Ruta completa al binario "bz2", necesario para descomprimir plantillas en formato tar.bz2 [Valor por defecto = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = 'Ruta completa al binario "unzip", necesario para descomprimir plantillas en formato .zip [Valor por defecto = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'Usar una versión nativa en PHP para descomprimir ficheros .zip, de forma que el binario "unzip" no sea necesario [Valor por defecto = No]';
// uploads
$messages['help_uploads_enabled'] = 'Permite a los usuarios enviar ficheros al servidor. Este parámetro afecta por ejemplo a las plantillas personalizadas [Valor por defecto = Sí]';
$messages['help_maximum_file_upload_size'] = 'Tamaño máximo de los ficheros en bytes. Por razones obvias, este límite nunca será más alto que el valor configurado en la configuración del PHP [Valor por defecto = 2000000]';
$messages['help_upload_forbidden_files'] = 'Lista separada por espacios en blancos de nombres de ficheros no permitidos en este servidor. Puede usar \'*\' y \'?\' para especificar nombres de ficheros más complejos [Valor por defecto = *.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'Activar el acceso a las bitácoras mediante XMLRPC [Valor por defecto = Sí]';
$messages['help_rdf_enabled'] = 'Activar la generación de contenidos mediante RSS o Atom [Valor por defecto = Sí]';
$messages['help_default_rss_profile'] = 'Formato por defecto de los contenidos [Valor por defecto = RSS 1.0]';
// security
$messages['security_pipeline_enabled'] = 'Activar el filtro de seguridad, que es necesario para el filtro Bayesiano y por otros plugins que lo usen [Valor por defecto = Sí]';
$messages['help_ip_address_filter_enabled'] = 'Activa el filtro de direcciones IP Es necesario que el filtro de seguridad esté activado [Valor por defecto = Sí]';
$messages['help_content_filter_enabled'] = 'Activa el filtro de contenido mediante expresiones regularres. Es necesario que el filtro de seguridad esté activado [Valor por defecto = Sí]';
$messages['help_maximum_comment_size'] = 'Tamaño máximo de un comentario en bytes, o use un valor de "0" para permitir un tamaño ilimitado [Valor por defecto = 0]';
// baSíian filter
$messages['help_baSíian_filter_enabled'] = 'Activar el filtro Bayesiano anti-spam [Valor por defecto = Sí]';
$messages['help_baSíian_filter_spam_probability_treshold'] = 'Puntuación máxima para que un comentario sea considerado spam [Valor por defecto = 0.9]';
$messages['help_baSíian_filter_nonspam_probability_treshold'] = 'Puntuación mínima para que un comentari no sea considerado spam [Valor por defecto = 0.2]';
$messages['help_baSíian_filter_min_length_token'] = 'Tamaño mínimo en carácteres de un token [Valor por defecto = 3]';
$messages['help_baSíian_filter_max_length_token'] = 'Tamaño máximo de un token [Valor por defecto = 100]';
$messages['help_baSíian_filter_number_significant_tokens'] = 'Número mínimo de tokens [Valor por defecto = 15]';
$messages['help_baSíian_filter_spam_comments_action'] = 'Qué hacer con los comentarios que sean spam. Use "Eliminar" cuando su filtro Bayesiando haya sido entrenado correctamente. Manténgalos en la base de datos si cree que su filtro puede cometer todavía algun error [Valor por defecto = Guardar]';
$messages['keep_spam_comments'] = 'Guardarlos en la base de datos, pero marcados como "Spam"';
$messages['throw_away_spam_comments'] = 'Eliminarlos directamente';
// resources
$messages['help_resources_enabled'] = 'Activar la sección de "Ficheros" [Valor por defecto = Sí]';
$messages['help_resources_folder'] = 'Carpeta donde los ficheros serán almacenados. Use una carpeta fuera del árbol del servidor de web para mayor seguridad [Valor por defecto = ./gallery]';
$messages['help_thumbnail_method'] = 'Método para generar las previsualizaciones. Se requiere soporte para GD si se selecciona PHP como el método por defecto  [Valor por defecto = PHP]';
$messages['help_path_to_convert'] = 'Ruta completa al binario "convert" del paquete "ImageMagick". Es obligatorio si el método para generar las previsualizaciones es "ImageMagick" [Valor por defecto = /usr/bin/convert]';
$messages['help_thumbnail_format'] = 'Formato de las previsualizaciones [Valor por defecto = El mismo que la imágen]';
$messages['help_thumbnail_height'] = 'Altura de las previsualizaciones en pixels [Valor por defecto = 120]';
$messages['help_thumbnail_width'] = 'Anchura de las previsualizaciones en pixels [Valor por defecto = 120]';
$messages['help_medium_size_thumbnail_height'] = 'Altura de las previsualizaciones de tamaño medio en pixels [Valor por defecto = 480]';
$messages['help_medium_size_thumbnail_width'] = 'Anchura de las previsualizaciones de tamaño medio en pixels [Valor por defecto = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'Generar las previsualizaciones manteniendo un aspecto proporcional [Valor por defecto = Sí]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'Usar solo GD1 en lugar de GD2 [Valor por defecto = No]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'Método usado para suavizar las vistas previas. Solo disponible si se está usando PHP para generar las vistas previas [Valor por defecto = PHP ImageCopyResampled]';
$messages['help_resources_quota'] = 'Cuota de ficheros en bytes para las bitácoras (i.e. 5242880 Bytes = 5MB), o use "0" para dar cuota ilimitada [Valor por defecto = 0]';
$messages['help_resource_server_http_cache_enabled'] = 'Activa el soporte para la cabecera HTTP "If-Modified-Since" cuando se hagan peticiones para ficheros. Active este parámetro para ahorrar ancho de banda [Valor por defecto = No]';
$messages['help_resource_server_http_cache_lifetime'] = 'Tiempo en milisegundos durante el cual el cliente puede usar la versión cacheada de un fichero. Solo válido cuándo el parámetro anterior esté activado [Valor por defecto = 9999999]';
$messages['same_as_image'] = 'El mismo que la imágen original';
// search
$messages['help_search_engine_enabled'] = 'Activar el motor de búsqueda  [Valor por defecto = Sí]';
$messages['help_search_in_custom_fields'] = 'Buscar también en los campos personales [Valor por defecto = Sí]';
$messages['help_search_in_comments'] = 'Buscar también en los comentarios [Valor por defecto = Sí]';

// cleanup
$messages['purge'] = 'Limpiar';
$messages['cleanup_spam'] = 'Limpiar Spam';
$messages['cleanup_spam_help'] = 'Esto eliminara físicamente de la base de datos todos aquellos comentarios que hayan sido marcados como spam por los usuario. No será posible recuperarlos una vez hayan sido eliminados';
$messages['spam_comments_purged_ok'] = 'Spam eliminado correctamente';
$messages['cleanup_posts'] = 'Limpiar Artículos';
$messages['cleanup_posts_help'] = 'Esto eliminará físicamente de la base de datos todos aquellos artículos que hayan sido marcados como "Borrados". No será posible recuperarlos una vez hayan sido eliminados';
$messages['posts_purged_ok'] = 'Artículos eliminados correctamente';

/// summary ///
// front page
$messages['summary'] = 'Portal';
$messages['register'] = 'Registrarse';
$messages['summary_welcome'] = 'Bienvenido!';
$messages['summary_most_active_blogs'] = 'Las Bitácoras más activas';
$messages['summary_most_commented_articles'] = 'Los más comentados';
$messages['summary_most_read_articles'] = 'Los mas leídos';
$messages['password_forgotten'] = 'Olvidaste el password?';
$messages['summary_newest_blogs'] = 'Bitácoras nuevas';
$messages['summary_latest_posts'] = 'Los más nuevos';
$messages['summary_search_blogs'] = 'Buscar';

// blog list
$messages['updated'] = 'Actualizada';
$messages['total_reads'] = 'total';

// blog profile
$messages['blog'] = 'Bitácora';
$messages['latest_posts'] = 'Los más nuevos';

// registration
$messages['register_step0_title'] = 'Términos de Uso';
$messages['decline'] = 'No estoy de acuerdo';
$messages['accept'] = 'Aceptar';
$messages['read_service_agreement'] = 'Lea atentamente los términos de uso y pulse el botón "Aceptar" si está de acuerdo';
$messages['register_step1_title'] = 'Crear el usuario [1/4]';
$messages['register_step1_help'] = 'Primero hay que crear un usuario para la bitácora. Este usuario será el propietario de la bitácora i tendrá acceso a todas sus funcionalidades';
$messages['register_next'] = 'Siguiente';
$messages['register_back'] = 'Atrás';
$messages['register_step2_title'] = 'Crear la bitácora [2/4]';
$messages['register_blog_name_help'] = 'Nombre de la bitácora';
$messages['register_step3_title'] = 'Elegir una plantilla [3/4]';
$messages['step1'] = 'Paso 1';
$messages['step2'] = 'Paso 2';
$messages['step3'] = 'Paso 3';
$messages['register_step3_help'] = 'Elija una de las plantillas disponibles para su nueva bitácora. Si más tarde no le gusta, siempre la puede cambiar';
$messages['error_must_choose_template'] = 'Elija una plantilla';
$messages['select_template'] = 'Seleccionar esta';
$messages['register_step5_title'] = 'Felicidades! [4/4]';
$messages['finish'] = 'Terminar';
$messages['register_need_confirmation'] = 'Un mensaje incluyendo el enlace para su confirmación ha sido enviado a su dirección de correo. En cuanto reciba el mensaje, haga clic en la direción para empezar a usar su bitácora!';
$messages['register_step5_help'] = 'Felicidades, su nueva bitácora ha sido creada!';
$messages['register_blog_link'] = 'Si quiere, puede ir directamente a su nueva bitácora: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'O si lo desea, puede empezar a añadir artículos a través de la <a href="admin.php">interfaz de administración</a>';
$messages['register_error'] = 'Hubo un error durante el proceso';
$messages['error_registration_disabled'] = 'No se pueden registrar bitácoras en este sitio';
// registration article topic and text
$messages['register_default_article_topic'] = 'Felicidades!';
$messages['register_default_article_text'] = 'Si puede leer esto, su bitácora está lista para empezar a escribir.';
$messages['register_default_category'] = 'General';
// confirmation email
$messages['register_confirmation_email_text'] = 'Visite el siguiente enlace para activar su nueva bitácora:

%s

Que tenga un buen día.';
$messages['error_invalid_activation_code'] = 'El enlace de activación no es correcto';
$messages['blog_activated_ok'] = 'Felicidades, su nueva bitácora ha sido activada!';
// forgot your password?
$messages['reset_password'] = 'Cambiar el password';
$messages['reset_password_username_help'] = 'Nombre del usuario cuyo password desea cambiar';
$messages['reset_password_email_help'] = 'Dirección de correo que se usó para registrar este usuario';
$messages['reset_password_help'] = 'Use este formulario para cambiar el password de su usuario, en caso de que no lo recuerde. Por favor escriba el nombre del usuario cuyo password desea cambiar, así como la dirección de correo con la que se registró este usuario';
$messages['error_resetting_password'] = 'Hubo un error cambiando el password del usuario. Compruebe los datos y vuélvalo a intentar';
$messages['reset_password_error_incorrect_email_address'] = 'La dirección de correo no es correcta o no es la dirección que se usó para registrar este usuario';
$messages['password_reset_message_sent_ok'] = 'Un mensaje de correo ha sido enviado a la dirección de correo. Por favor haga clic en la dirección incluida en el mensaje para cambiar el password';
$messages['error_incorrect_request'] = 'Los parámetros de la dirección no son correctos';
$messages['change_password'] = 'Nuevo password';
$messages['change_password_help'] = 'Por favor de un nuevo password y a continuación, confírmelo';
$messages['new_password'] = 'Nuevo password';
$messages['new_password_help'] = 'Escriba aquí su nuevo password';
$messages['password_updated_ok'] = 'Su password ha sido cambiado correctamente!';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'This page looks plain and unstyled because you\'re using a non-standard compliant browser. To see it in its best form, please <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">upgrade</a> to a browser that supports web standards. It\'s free and painless.';
$messages['jump_to_navigation'] = 'Ir al menú';
$messages['comment_email_never_display'] = 'El comentario será formateado automáticamente. La dirección de correo no será mostrada en público.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> allowed: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = 'El URI <acronym title="Identificador de Recurso Uniforme (URI)">URI</acronym> para enviar retroenlaces a este artículo es: ';
$messages['previous_post'] = 'Anterior';
$messages['next_post'] = 'Siguiente';
$messages['comment_default_title'] = '(Sin título)';
$messages['guestbook'] = 'Libro de visitas';
$messages['trackbacks'] = 'Retroenlaces';
$messages['menu'] = 'Menú';
$messages['albums'] = 'Albums';
$messages['admin'] = 'Administración';
$messages['xmlrpc_ping_ok'] = 'Ping XMLRPC enviado correctamente: ';
$messages['error_sending_xmlrpc_ping'] = 'Hubo un error enviando el ping XMLRPC a: ';
$messages['error_sending_xmlrpc_ping_message'] = 'Hubo un error enviando el ping XMLRPC: ';
?>