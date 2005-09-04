<?php
// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'iso-8859-1';
$messages['locale_description'] = 'Traducci�n al espa�ol de pLog';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %H:%M';

// days of the week
$messages['days'] = Array( 'Domingo', 'Lunes', 'Martes', 'Mi�rcoles', 'Jueves', 'Viernes', 'S�bado' );
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
$messages['search_this_blog'] = 'Buscar en esta bit�cora:';
$messages['about_myself'] = 'Qui�n soy?';
$messages['permalink_title'] = 'Enlace permanente a los archivos';
$messages['permalink'] = 'Enlace';
$messages['posted_by'] = 'Escrito por';
$messages['reply'] = 'Responder';

// add comment form
$messages['add_comment'] = 'A�adir comentario';
$messages['comment_topic'] = 'T�tulo';
$messages['comment_text'] = 'Texto';
$messages['comment_username'] = 'Tu nombre';
$messages['comment_email'] = 'Direcci�n de correo (opcional)';
$messages['comment_url'] = 'P�gina personal (opcional)';
$messages['comment_send'] = 'Enviar';
$messages['comment_added'] = 'Comentario a�adido!';
$messages['comment_add_error'] = 'Hubo un error a�adiendo el comentario';
$messages['article_does_not_exist'] = 'El art�culo no existe';
$messages['no_posts_found'] = 'No se encontraron art�culos';
$messages['user_has_no_posts_yet'] = 'El usuario todav�a no ha escrito ningun art�culo';
$messages['back'] = 'Atr�s';
$messages['post'] = 'art�culo';
$messages['trackbacks_for_article'] = 'Retroenlaces del art�culo: ';
$messages['trackback_excerpt'] = 'Fragmento';
$messages['trackback_weblog'] = 'Bit�cora';
$messages['search_results'] = 'Resultados de la b�squeda';
$messages['search_matching_results'] = 'Los siguientes art�culos han sido encontrados: ';
$messages['search_no_matching_posts'] = 'No se encontraron art�culos';
$messages['read_more'] = '(M�s)';
$messages['syndicate'] = 'Agregar';
$messages['main'] = 'Principal';
$messages['about'] = 'Acerca de';
$messages['download'] = 'Descargar';

////// error messages /////
$messages['error_fetching_article'] = 'El art�culo especificado no existe.';
$messages['error_fetching_articles'] = 'No se encontraron art�culos';
$messages['error_trackback_no_trackback'] = 'El art�culo no ha recibido ningun retroenlace';
$messages['error_incorrect_article_id'] = 'El identificador del art�culo no es correcto';
$messages['error_incorrect_blog_id'] = 'El identificador de la bit�cora no es correcto';
$messages['error_comment_without_text'] = 'El texto del comentario est� vac�o.';
$messages['error_comment_without_name'] = 'Es necesario que d� su nombre o apodo.';
$messages['error_adding_comment'] = 'Hubo un error a�adiendo el comentario.';
$messages['error_incorrect_parameter'] = 'Par�metro incorrecto.';
$messages['error_parameter_missing'] = 'Falta un par�metro.';
$messages['error_comments_not_enabled'] = 'Los comentarios han sido desactivados en esta bit�cora.';
$messages['error_incorrect_search_terms'] = 'Los t�rminos de la b�squeda son incorrectos.';
$messages['error_no_search_results'] = 'No se encontraros art�culos que se correspondan con los t�rminos de la b�squeda.';
$messages['error_no_albums_defined'] = 'No hay ningun �lbum disponible en esta bit�cora.';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Entrar';
$messages['welcome_message'] = 'Bienvenido a pLog';
$messages['error_incorrect_username_or_password'] = 'El nombre de usuario o password es incorrecto.';
$messages['error_dont_belong_to_any_blog'] = 'Su usuario no pertenece a ninguna bit�cora todav�a.';
$messages['logout_message'] = 'Ha sido desconectado correctamente';
$messages['logout_message_2'] = 'Haga clic <a href="%1$s">aqu�</a> para ir a %2$s</a>.';
$messages['error_access_forbidden'] = 'Acceso no permitido. Debe primero verificar su usuario aqu�';
$messages['username'] = 'Usuario';
$messages['password'] = 'Password';

// dashboard
$messages['dashboard'] = 'Perspectiva';
$messages['recent_articles'] = 'Art�culos recientes';
$messages['recent_comments'] = 'Comentarios recientes';
$messages['recent_trackbacks'] = 'Retroenlaces recientes';
$messages['blog_statistics'] = 'Estad�sticas';
$messages['total_posts'] = 'N�mero de art�culos';
$messages['total_comments'] = 'N�mero de comentarios';
$messages['total_trackbacks'] = 'N�mero de trackbacks';
$messages['total_viewed'] = 'Art�culos le�dos';
$messages['in'] = 'En';

// menu options
$messages['newPost'] = 'Nuevo Art�culo';
$messages['Manage'] = 'Contenido';
$messages['managePosts'] = 'Art�culos';
$messages['editPosts'] = 'Art�culos';
$messages['editArticleCategories'] = 'Categorias';
$messages['newArticleCategory'] = 'Nueva Categoria';
$messages['manageLinks'] = 'Enlaces';
$messages['editLinks'] = 'Enlaces';
$messages['newLink'] = 'Nuevo Enlace';
$messages['editLink'] = 'Editar Enlace';
$messages['editLinkCategories'] = 'Editar Categor�as de Enlaces';
$messages['newLinkCategory'] = 'Nueva Categor�a de Enlaces';
$messages['editLinkCategory'] = 'Editar Categor�a de Enlace';
$messages['manageCustomFields'] = 'Campos';
$messages['blogCustomFields'] = 'Campos';
$messages['newCustomField'] = 'Nuevo Campo';
$messages['resourceCenter'] = 'Ficheros';
$messages['resources'] = 'Ficheros';
$messages['newResourceAlbum'] = 'Nuevo �lbum';
$messages['newResource'] = 'Nuevo Fichero';
$messages['controlCenter'] = 'Configuraci�n';
$messages['manageSettings'] = 'Configuraci�n';
$messages['blogSettings'] = 'Configuraci�n de la Bit�cora';
$messages['userSettings'] = 'Configuraci�n del Usuario';
$messages['pluginCenter'] = 'Plugins';
$messages['Stats'] = 'Estad�sticas';
$messages['manageBlogUsers'] = 'Usuarios de la Bit�cora';
$messages['newBlogUser'] = 'Invitar Usuario';
$messages['showBlogUsers'] = 'Usuarios de la Bit�cora';
$messages['manageBlogTemplates'] = 'Plantillas';
$messages['newBlogTemplate'] = 'A�adir Plantilla';
$messages['blogTemplates'] = 'Plantillas de la Bit�cora';
$messages['adminSettings'] = 'Administraci�n';
$messages['Users'] = 'Usuarios';
$messages['createUser'] = 'Nuevo Usuario';
$messages['editSiteUsers'] = 'Usuarios';
$messages['Blogs'] = 'Bit�coras';
$messages['createBlog'] = 'Nueva Bit�cora';
$messages['editSiteBlogs'] = 'Bit�coras';
$messages['Locales'] = 'Traducciones';
$messages['newLocale'] = 'Nueva Traducci�n';
$messages['siteLocales'] = 'Traducciones';
$messages['Templates'] = 'Plantillas';
$messages['newTemplate'] = 'A�adir Plantilla';
$messages['siteTemplates'] = 'Plantillas';
$messages['GlobalSettings'] = 'Configuraci�n General';
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
$messages['searchSettings'] = 'B�squedas';
$messages['cleanUpSection'] = 'Limpieza';
$messages['cleanUp'] = 'Limpieza';
$messages['editResourceAlbum'] = 'Editar �lbum';
$messages['resourceInfo'] = 'Editar Fichero';
$messages['editBlog'] = 'Editar Plantilla';
$messages['Logout'] = 'Salir';

// new post
$messages['topic'] = 'T�tulo';
$messages['topic_help'] = 'T�tulo del art�culo';
$messages['text'] = 'Texto';
$messages['text_help'] = 'Texto del art�culo. Esta parte siempre aparecer� en la p�gina principal de la bit�cora';
$messages['extended_text'] = 'Texto extra';
$messages['extended_text_help'] = 'Texto extra del art�culo. Esta parte puede aparecer o bien siempre en la primera p�gina o en la p�gina del art�culo. Esto es configurable en la p�gina de configuraci�n de la bit�cora';
$messages['post_slug'] = 'T�tulo URL';
$messages['post_slug_help'] = 'El t�tulo URL ser� usado para generar enlaces permanentes con un mayor significado sem�ntico';
$messages['date'] = 'Fecha';
$messages['post_date_help'] = 'Fecha cuando este art�culo deber�a ser publicado';
$messages['status'] = 'Estado';
$messages['post_status_help'] = 'Elija uno de los siguientes estados';
$messages['post_status_published'] = 'Publicado';
$messages['post_status_draft'] = 'Borrador';
$messages['post_status_deleted'] = 'Eliminado';
$messages['categories'] = 'Categor�as';
$messages['post_categories_help'] = 'Seleccione una o m�s categor�as';
$messages['post_comments_enabled_help'] = 'Activar comentarios';
$messages['send_notification_help'] = 'Enviar una notificaci�n cuando se reciban nuevos comentarios o retroenlaces';
$messages['send_trackback_pings_help'] = 'Env�ar retroenlaces';
$messages['send_xmlrpc_pings_help'] = 'Enviar pings v�a XMLRPC';
$messages['save_draft_and_continue'] = 'Guardar Borrador';
$messages['preview'] = 'Vista Previa';
$messages['add_post'] = 'A�adir!';
$messages['error_saving_draft'] = 'Hubo un error guardando el borrador';
$messages['draft_saved_ok'] = 'Borrador guardado correctamente';
$messages['error_sending_request'] = 'Hubo un error enviando la petici�n';
$messages['error_no_category_selected'] = 'Debe seleccionar por lo menos una categor�a';
$messages['error_missing_post_topic'] = 'El t�tulo del art�culo est� vac�o';
$messages['error_missing_post_text'] = 'El texto del art�culo est� vac�o';
$messages['error_adding_post'] = 'Hubo un error guardando el art�culo';
$messages['post_added_not_published'] = 'El art�culo ha sido guardado correctamente pero no aparecer� en la p�gina principal';
$messages['post_added_ok'] = 'El art�culo ha sido guardado correctamente.';
$messages['send_notifications_ok'] = 'Se enviar� un mensaje cada vez que se reciba un comentario o retroenlace';

// send trackbacks
$messages['error_sending_trackbacks'] = 'Hubo un error enviando un retroenlace a los siguientes sitios';
$messages['send_trackbacks_help'] = 'Seleccione las direcciones a las que quiere enviar un retroenlace. Aseg�rese de que las direcciones soportan retroenlaces.';
$messages['send_trackbacks'] = 'Enviar retroenlaces';
$messages['ping_selected'] = 'Enviar retroenlaces';
$messages['trackbacks_sent_ok'] = 'Los retroenlaces fueron enviados correctamente a las direcciones seleccionadas';

// posts page
$messages['show_by'] = 'Mostrar';
$messages['category'] = 'Categor�a';
$messages['author'] = 'Autor';
$messages['post_status_all'] = 'Todos';
$messages['author_all'] = 'Todos';
$messages['search_terms'] = 'B�squeda';
$messages['show'] = 'Mostrar';
$messages['delete'] = 'Eliminar';
$messages['actions'] = 'Acciones';
$messages['all'] = 'Todos';
$messages['category_all'] = 'Todas';
$messages['error_incorrect_article_id'] = 'El identificador de art�culo es incorrecto.';
$messages['error_deleting_article'] = 'Hubo un error eliminando el art�culo "%s"';
$messages['article_deleted_ok'] = 'El art�culo "%s" fue eliminado correctamente';
$messages['articles_deleted_ok'] = '%s articulos fueron eliminados correctamente';
$messages['error_deleting_article2'] = 'Hubo un error eliminando el art�culo cuyo identificador es "%s"';

// edit post page
$messages['update'] = 'Actualizar';
$messages['editPost'] = 'Editar Art�culo';
$messages['error_fetching_post'] = 'Hubo un error cargando el art�culo';
$messages['post_updated_ok'] = 'El art�culo "%s" fue actualizado corrrectamente';
$messages['error_updating_post'] = 'Hubo un error actualizando el art�culo';
$messages['notification_added'] = 'Se enviar� un mensaje cada vez que se reciba un comentario o retroenlace';
$messages['notification_removed'] = 'No se enviar�n mensajes en caso de comentarios o retroenlaces';

// post comments
$messages['url'] = 'Direcci�n';
$messages['comment_status_all'] = 'Todos';
$messages['comment_status_spam'] = 'Spam';
$messages['comment_status_nonspam'] = 'No Spam';
$messages['error_fetching_comments'] = 'Hubo un error cargando los art�culos del comentario';
$messages['error_deleting_comments'] = 'Hubo un error eliminando los comentarios o no se seleccion� ning�n comentario a eliminar';
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
$messages['blog'] = 'Bit�cora';
$messages['excerpt'] = 'Fragmento';
$messages['error_fetching_trackbacks'] = 'Hubo un error cargando los retroenlaces recibidos';
$messages['error_deleting_trackbacks'] = 'Hubo un error eliminando los retroenlaces o no se seleccion� ning�n retroenlace a eliminar';
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
$messages['posts'] = 'Art�culos';
$messages['show_in_main_page'] = 'Incluir en la p�gina principal';
$messages['error_incorrect_category_id'] = 'El identificador de la categor�a no es correcto o no se seleccionaron categor�as a borrar';
$messages['error_category_has_articles'] = 'La categor�a "%s" no se puede borrar porque est� siendo usada por algunos art�culos. Edite primero los art�culos y vuelva a intentar eliminar la categor�a.';
$messages['category_deleted_ok'] = 'La categor�a "%s" fue eliminada correctamente';
$messages['categories_deleted_ok'] = '%s categor�as eliminadas correctamente';
$messages['error_deleting_category'] = 'Hubo un error eliminando la categor�a "%s"';
$messages['error_deleting_category2'] = 'Hubo un error eliminando la categor�a cuyo identificador es "%s"';
$messages['yes'] = 'S�';
$messages['no'] = 'No';

// new category
$messages['name'] = 'Nombre';
$messages['category_name_help'] = 'Nombre de la categor�a tal y como aparecer� en la bit�cora';
$messages['description'] = 'Descripci�n';
$messages['category_description_help'] = 'Descripci�n de la categor�a';
$messages['show_in_main_page_help'] = 'Si se desactiva, los art�culos categorizados bajo esta categor�a no ser�n mostrados en la p�gina principal y solo ser�n visibles en la p�gina propia de la categor�a';
$messages['error_empty_name'] = 'El nombre no puede estar vac�o';
$messages['error_empty_description'] = 'La descripci�n no puede estar vac�a';
$messages['error_adding_article_category'] = 'Hubo un error a�adiendo la categor�a. Verifique los datos y vu�lvalo a intentar';
$messages['category_added_ok'] = 'La categor�a "%s" fue a�adida correctamente a la bit�cora';
$messages['add'] = 'A�adir';
$messages['reset'] = 'Limpiar';

// update category
$messages['error_updating_article_category'] = 'Hubo un error actualizando la categor�a';
$messages['error_fetching_category'] = 'Hubo un error cargando la categor�a';
$messages['article_category_updated_ok'] = 'La categor�a "%s" fue actualizada correctamente';

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
$messages['link_url_help'] = 'Direcci�n del enlace';
$messages['link_description_help'] = 'Breve descripci�n sobre el enlace';
$messages['link_feed_help'] = 'Enlace a una fuende de contenidos RSS o Atom del enlace';
$messages['link_category_help'] = 'Elija una de las categor�as de enlace disponibles';
$messages['error_adding_link'] = 'Se produjo un error a�adiendo el enlace. Verifique los datos y vu�lvalo a intentar';
$messages['error_invalid_url'] = 'La direcci�n no es correcta';
$messages['link_added_ok'] = 'El enlace "%s" fue a�adido correctamente';

// update link
$messages['error_updating_link'] = 'Se produjo un error actualizando el enlace. Verifique los datos y vu�lvalo a intentar';
$messages['error_fetching_link'] = 'Se produjo un error al cargar en enlace';
$messages['link_updated_ok'] = 'El enlace "%s" fue actualizado correctamente';

// link categories
$messages['links'] = 'Enlaces';
$messages['error_invalid_link_category_id'] = 'El identificador de la categor�a de enlaces no es correcto o no se eligi� ninguna categor�a de enlaces';
$messages['error_links_in_link_category'] = 'Hay algunos enlaces clasificados bajo la categor�a "%s". Modifique los enlaces primero y vu�lvalo a intentar.';
$messages['error_removing_link_category'] = 'Hubo un error eliminando la categor�a de enlaces "%s"';
$messages['link_category_deleted_ok'] = 'La categor�a de enlaces "%s" fue eliminada correctamente';
$messages['link_categories_deleted_ok'] = '%s categor�as de enlaces fueron eliminadas correctamente';
$messages['error_removing_link_category2'] = 'Hubo un error eliminando la categor�a de enlaces cuyo identificador es "%s"';

// new link category
$messages['link_category_name_help'] = 'Nombre dado a esta categor�a de enlaces';
$messages['error_adding_link_category'] = 'Hubo un error a�adiendo la nueva categor�a de enlaces';
$messages['link_category_added_ok'] = 'La categor�a de enlaces "%s" fue a�adida correctamente';

// edit link category
$messages['error_updating_link_category'] = 'Hubo un error actualizando la categor�a de enlace. Compruebe los datos y vu�lvalo a intentar.';
$messages['link_category_updated_ok'] = 'La categor�a de enlaces "%s" fue actualizada correctamente';
$messages['error_fetching_link_category'] = 'Se produjo un error cargando la categor�a de enlaces';

// custom fields
$messages['type'] = 'Tipo';
$messages['hidden'] = 'Oculto';
$messages['fields_deleted_ok'] = '%s campos eliminados correctamente';
$messages['field_deleted_ok'] = 'El campo "%s" fue borrado correctamente';
$messages['error_deleting_field'] = 'Hubo un error eliminando el campo "%s"';
$messages['error_deleting_field2'] = 'Hubo un error eliminando el campo cuyo identificador es "%s"';
$messages['error_incorrect_field_id'] = 'El identificador del campo no es correcto';

// new custom field
$messages['field_name_help'] = 'Nombre del campo que ser� usado para obtener su valor en los art�culos';
$messages['field_description_help'] = 'Descripci�n del campo que ser� mostrada al a�adir o editar un art�culo';
$messages['field_type_help'] = 'Elija uno de los siguientes tipos de campo';
$messages['field_hidden_help'] = 'Si el campo est� marcado como oculto, no ser� mostrado en las pantallas de edici�n o nuevo art�culo. Este atributo es usado casi �nicamente por plugins que a�aden nuevos campos para su uso';
$messages['error_adding_custom_field'] = 'Hubo un error a�adiendo el campo. Compruebe los datos y vu�lvalo a intentar';
$messages['custom_field_added_ok'] = 'El campo "%s" fue a�adido correctamente';
$messages['text_field'] = 'Campo de texto';
$messages['text_area'] = 'Caja de texto';
$messages['checkbox'] = 'Casilla';
$messages['date_field'] = 'Campo de fecha';

// edit custom field
$messages['error_fetching_custom_field'] = 'Hubo un error cargando el campo';
$messages['error_updating_custom_field'] = 'Hubo un error actualizando el capmo. Compruebe los datos y vu�lvalo a intentar';
$messages['custom_field_updated_ok'] = 'El campo "%s" fue actualizado correctamente';

// resources
$messages['root_album'] = '�lbum ra�z';
$messages['num_resources'] = 'N�mero de ficheros';
$messages['total_size'] = 'Tama�o total';
$messages['album'] = '�lbjum';
$messages['error_incorrect_album_id'] = 'El identificador del �lbum no es v�lido';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'No fue posible crear los directorios necesarios donde los ficheros van a ser guardados. Esto puede ser debido a varias razones, como por ejemplo que el "safe mode" est� activado en su configuraci�n del PHP or que el usuario usado para ejecutar PHP no tenga suficientes permisos. Tambi�n puede intentar crear los siguientes directorios manualmente: <br/><br/>%s<br/><br/>Si los directorios ya existen, aseg�rese de que pueden ser le�dos y escritos por el usuario que se est� usando para ejecutar el servidor de web/PHP';
$messages['items_deleted_ok'] = '%s ficheros eliminados correctamente';
$messages['error_album_has_children'] = 'El �lbum "%s" tiene sub�lbums. Modifique primero los sub�lbums y vu�lvalo a intentar';
$messages['item_deleted_ok'] = 'El fichero "%s" fue borrado correctamente';
$messages['error_deleting_album'] = 'Hubo un error eliminando el campo "%s"';
$messages['error_deleting_album2'] = 'Hubo un error eliminando el campo cuyo identificador es "%s"';
$messages['error_deleting_resource'] = 'Hubo un error eliminando el fichero "%s"';
$messages['error_deleting_resource2'] = 'Hubo un error eliminando el fichero cuyo identificador es "%s"';
$messages['error_no_resources_selected'] = 'No se seleccionaron ficheros o �lbums para eliminar';
$messages['resource_deleted_ok'] = 'El fichero "%s" fue eliminado correctamente';
$messages['album_deleted_ok'] = 'El �lbum "%s" fue eliminado correctamente';
$messages['add_resource'] = 'A�adir fichero';
$messages['add_resource_preview'] = 'A�adir vista previa';
$messages['add_resource_medium'] = 'Add vista mediana';
$messages['add_album'] = 'A�adir �lbum';

// new album
$messages['album_name_help'] = 'Nombre del nuevo �lbum';
$messages['parent'] = 'Padre';
$messages['no_parent'] = '�lbum ra�z';
$messages['parent_album_help'] = '�lbums pueden contener sub�lbums de forma que pueda organizar sus contenidos mejor';
$messages['album_description_help'] = 'Descripci�n de los contenidos del �lbum';
$messages['error_adding_album'] = 'Hubo un error a�adiendo el nuevo �lbum. Compruebe los datos y vu�lvalo a intentar';
$messages['album_added_ok'] = 'El �lbum "%s" fue a�adido correctamente';

// edit album
$messages['error_incorrect_album_id'] = 'El identificador del �lbum no es correcto';
$messages['error_fetching_album'] = 'Hubo un error cargando el �lbum';
$messages['error_updating_album'] = 'Hubo un error actualizando el �lbum. Compruebe los datos y vu�lvalo a intentar';
$messages['album_updated_ok'] = 'El �lbum "%s" fue actualizado correctamente';
$messages['show_album_help'] = 'Si esta casilla est� desactivada, el �lbum y los ficheros que est�n inclu�dos en �l no aparecer�n en la parte p�blica del blog';

// new resource
$messages['file'] = 'Fichero';
$messages['resource_file_help'] = 'Fichero que desea a�adir. Use el enlace "A�adir Otro" para a�adir m�s de un fichero al mismo tiempo (aunque tardar� m�s rato en terminar la operaci�n)';
$messages['add_field'] = 'A�adir otro';
$messages['resource_description_help'] = 'Descripci�n sobre los contenidos del fichero';
$messages['resource_album_help'] = 'Seleccione el �lbum al que se a�adir� el fichero';
$messages['error_no_resource_uploaded'] = 'No seleccion� ning�n fichero para a�adir';
$messages['resource_added_ok'] = 'El fichero "%s" fue a�adido correctamente';
$messages['error_resource_forbidden_extension'] = 'El fichero no fue a�adido porque es de un tipo no permitido por el administrador';
$messages['error_resource_too_big'] = 'El fichero no fue a�adido porque es demasiado grande';
$messages['error_uploads_disabled'] = 'El fichero no fue a�adido porque la posibilidad de a�adir ficheros ha sido desactivada por el administrador';
$messages['error_quota_exceeded'] = 'El fichero no fue a�adido porque se ha superado el tama�o m�ximo total de ficheros permitido para nuestra bit�cora';
$messages['error_adding_resource'] = 'Hubo un error a�adiendo el fichero';

// edit resource
$messages['editResource'] = 'Editar fichero';
$messages['resource_information_help'] = 'Informaci�n sobre el fichero';
$messages['information'] = 'Informaci�n';
$messages['size'] = 'Tama�o';
$messages['format'] = 'Formato';
$messages['dimensions'] = 'Dimensiones';
$messages['bits_per_sample'] = 'Bits por muestra';
$messages['sample_rate'] = 'Frecuencia de muestreo';
$messages['number_of_channels'] = 'N�mero de canales';
$messages['legnth'] = 'Duraci�n';
$messages['thumbnail_format'] = 'Formato de la vista previa';
$messages['regenerate_preview'] = 'Regenerar vista previa';
$messages['error_fetching_resource'] = 'Hubo un error cargando el fichero';
$messages['error_updating_resource'] = 'Hubo un error actualizando el fichero';
$messages['resource_updated_ok'] = 'El fichero "%s" fue actualizado correctamente';

// blog settings
$messages['blog_link'] = 'Direcci�n';
$messages['blog_link_help'] = 'Enlace permanente a esta bit�cora';
$messages['blog_name_help'] = 'T�tulo de esta bit�cora';
$messages['blog_description_help'] = 'Descripci�n de los contenidos de esta bit�cora';
$messages['language'] = 'Idioma';
$messages['blog_language_help'] = 'Idioma usado para mostrar los textos de tanto la parte p�blica como la parte privada de la bit�cora';
$messages['max_main_page_items'] = 'Art�culos mostrados en la p�gina principal';
$messages['max_main_page_items_help'] = 'M�ximo n�mero de art�culos que deben ser mostrados en la p�gina principal de la bit�cora';
$messages['max_recent_items'] = 'N�mero de art�culos recientes';
$messages['max_recent_items_help'] = 'M�ximo n�mero de art�culos recientes que deben ser mostrados';
$messages['template'] = 'Plantilla';
$messages['choose'] = 'Elegir';
$messages['blog_template_help'] = 'Plantilla que ser� usada para mostrar los contenidos de la bit�cora. Esta lista incluye las plantillas globales adem�s de las plantillas que han sido instaladas exclusivamente para esta bit�cora';
$messages['use_read_more'] = 'A�adir el enlace "M�s..." a los art�culos';
$messages['use_read_more_help'] = 'Si se activa, s�lo el texto que se introduci� en la caja de texto marcada como "Texto" en la p�gina de edici�n de art�culos se mostrar� en la p�gina principal y se a�adir� un enlace titulado "M�s..." al final del texto. El resto del art�culo se mostrar� en la p�gina propia del art�culo. Si se desactiva, el art�culo entero se mostrar� siempre en la p�gina principal';
$messages['enable_wysiwyg'] = 'Activar el editor visual de art�culos';
$messages['enable_wysiwyg_help'] = 'Activa el editor visual de c�digo HTML, que muestra el contenido del art�culo tal cual aparecer� en la bit�cora. Esta funcionalidad requiere Internet Explorer 5.5 o Mozilla 1.3 o superiores';
$messages['enable_comments'] = 'Permitir comentarios por defecto';
$messages['enable_comments_help'] = 'Permite comentarios en todos los art�culos por defecto, aunque los comentarios se pueden activar o desactivar a voluntad espec�ficamente para cada art�culo';
$messages['show_future_posts'] = 'Mostrar los art�culos con fecha en el futuro';
$messages['show_future_posts_help'] = 'Muestra los art�culos que tengan fetcha futura en el calendario y en la p�gina principal';
$messages['comments_order'] = 'Ordern de los comentarios';
$messages['comments_order_help'] = 'Orden en que los comentarios de un art�culo deben ser mostrados';
$messages['oldest_first'] = 'Los antiguos primero';
$messages['newest_first'] = 'Los nuevos primero';
$messages['categories_order'] = 'Orden de las categor�as';
$messages['categories_order_help'] = 'Orden en que las categor�as deben ser mostradas en la p�gina principal';
$messages['most_recent_updated_first'] = 'Las categor�as que se hayan actualizado m�s recientemente primero';
$messages['alphabetical_order'] = 'Orden alfab�tico';
$messages['reverse_alphabetical_order'] = 'Orden alfab�tico inverso';
$messages['most_articles_first'] = 'Las que tengan m�s art�culos primero';
$messages['link_categories_order'] = 'Orden de las categor�as de enlaces';
$messages['link_categories_order_help'] = 'Orden en que las categor�as de enlaces deben ser mostradas en la p�gina principal';
$messages['most_links_first'] = 'Las que tengan m�s enlaces primero';
$messages['most_links_last'] = 'Las que tengan menos enlaces primero';
$messages['time_offset'] = 'Diferencia horaria';
$messages['time_offset_help'] = 'Diferencia horaria en n�mero de horas que ser� a�adida din�micamente a cada fecha y hora mostrada en la bit�cora';
$messages['close'] = 'Cerrar';
$messages['select'] = 'Seleccionar';
$messages['error_updating_settings'] = 'Hubo un error actualizando la configuraci�n de la bit�cora. Compruebe los datos y vu�lvalo a intentar';
$messages['error_invalid_number'] = 'El valor no es correcto';
$messages['error_incorrect_time_offset'] = 'El valor de la diferencia horaria no es correcto';
$messages['blog_settings_updated_ok'] = 'La configuraci�n de la bit�cora fue guardada correctamente';
$messages['hours'] = 'Horas';

// user settings
$messages['username_help'] = 'Nombre de usuario, no puede ser cambiado';
$messages['full_name'] = 'Nombre completo';
$messages['full_name_help'] = 'Nombre completo, opcional';
$messages['password_help'] = 'Cambie el password y conf�rmelo, o deje los campos vac�os si no desea hacer ningun cambio.';
$messages['confirm_password'] = 'Confirmar el password';
$messages['email'] = 'Direccion de correo';
$messages['email_help'] = 'Direcci�n de correo donde las notificaciones ser�n enviadas';
$messages['bio'] = 'Descripci�n personal';
$messages['bio_help'] = 'Descripci�n personal, opcional';
$messages['picture'] = 'Foto';
$messages['user_picture_help'] = 'Puede elegir una foto de las disponibles en esta bit�cora como fichero para que sea su foto personal';
$messages['error_invalid_password'] = 'El password no es correcto o por ejemplo, es demasiado corto';
$messages['error_passwords_dont_match'] = 'El password y la confirmaci�n no son iguales';
$messages['error_incorrect_email_address'] = 'La direcci�n de correo no es v�lida';
$messages['error_updating_user_settings'] = 'Hubo un error guardando sus datos. Compruebe los datos y vu�lvalo a intentar';
$messages['user_settings_updated_ok'] = 'Los datos de usuario fueron guardados correctamente';
$messages['resource'] = 'Fichero';

// plugin centre
$messages['identifier'] = 'Identificador';
$messages['error_plugins_disabled'] = 'La funcionalidad de plugins ha sido desactivada por el administrador.';

// blog users
$messages['revoke_permissions'] = 'Quitar permisos';
$messages['error_no_users_selected'] = 'No se seleccion� ningun usuario';
$messages['user_removed_from_blog_ok'] = 'El usuario "%s" ya no tiene permisos para acceder a esta bit�cora';
$messages['users_removed_from_blog_ok'] = '%s usuarios ya no tienen acceso a esta bit�cora';
$messages['error_removing_user_from_blog'] = 'Hubo un error eliminando el acceso a esta bit�cora del usuario "%s"';
$messages['error_removing_user_from_blog2'] = 'Hubo un error eliminando el acceso a esta bit�cora del usuario cuyo identificador es "%s"';

// new blog user
$messages['new_blog_username_help'] = 'Nombre del usuario al que se quiere dar acceso a esta bit�cora. El usuario solo tendr� acceso a las secciones "Contenido" y "Ficheros"';
$messages['send_notification'] = 'Enviar notificaci�n';
$messages['send_user_notification_help'] = 'Enviar un mensaje de notificaci�n a este usuario';
$messages['notification_text'] = 'Texto';
$messages['notification_text_help'] = 'Texto que ser� incluido en la notificaci�n enviada a este usuario';
$messages['error_adding_user'] = 'Hubo un error dando acceso al usuario. Compruebe los datos y vu�lvalo a intentar';
$messages['error_empty_text'] = 'El texto de la notificaci�n no puede estar vac�o';
$messages['error_invalid_user'] = 'El usuario "%s" no es v�lido o no existe';
$messages['user_added_to_blog_ok'] = 'El usuario "%s" ya puede acceder a esta bit�cora';

// blog templates
$messages['error_no_templates_selected'] = 'No se selecciaron plantillas';
$messages['error_template_is_current'] = 'La plantilla "%s" no se puede eliminar porque es la que est� usando la bit�cora';
$messages['error_removing_template'] = 'Hubo un error borrando la plantilla "%s"';
$messages['template_removed_ok'] = 'La plantilla "%s" fue eliminada correctamente';
$messages['templates_removed_ok'] = '%s plantillas fueron eliminadas correctamente';

// new blog template
$messages['template_installed_ok'] = 'La plantilla "%s" fue a�adida correctamente';
$messages['error_installing_template'] = 'Hubo un error a�adiendo la plantilla "%s"';
$messages['error_missing_base_files'] = 'La plantilla no pudo ser a�adida porque algunos de los ficheros b�sicos de la plantilla no est�n disponibles';
$messages['error_add_template_disabled'] = 'No se pueden a�adir nuevas plantillas porque esta posibilidad ha sido desactivada por el administrador';
$messages['error_must_upload_file'] = 'No se envi� ningun fichero con datos de una plantilla';
$messages['error_uploads_disabled'] = 'La posibilidad de enviar ficheros al servidor ha sido desactivada por el administrador';
$messages['error_no_new_templates_found'] = 'No se encontraron nuevas plantillas';
$messages['error_template_not_inside_folder'] = 'Los ficheros de la plantilla se deben guardar dentro de un directorio cuyo nombre debe ser el mismo que el de la plantilla';
$messages['error_unpacking'] = 'Hubo un error descomprimiendo el fichero de la plantilla';
$messages['error_forbidden_extensions'] = 'Algunos de los ficheros de la plantilla conten�an una extensi�n no permitida en este sitio';
$messages['error_creating_working_folder'] = 'Hubo un error creando un directorio temporal para descomprimir la plantilla';
$messages['error_checking_template'] = 'Hubo un error comprobando que la plantilla es correcta: %s';
$messages['template_package'] = 'Plantilla';
$messages['blog_template_package_help']  = 'Use este formulario para enviar nuevas plantillas al servidor. �stas plantillas solo estar�n disponibles para esta bit�cora. Si no es posible enviar ficheros, use por ejemplo un cliente de FTP para subir los ficheros y col�quelos en el directorio <b>%s</b> y luego use el bot�n "<b>Actualizar plantillas</b>" para a�adir cualquier plantilla nueva. pLog comprobar� el contenido del directorio y a�adir� autom�ticamente todas las plantillas nuevas';
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
$messages['user_added_ok'] = 'El usuario "%s" fue a�adido correctamente';
$messages['error_incorrect_username'] = 'El nombre de usuario no es correcto o ya est� asignado';
$messages['user_status_help'] = 'Estado del usuario';
$messages['user_blog_help'] = 'Bit�cora a la que este usuario ser� asignado inicialmente';
$messages['none'] = 'Ninguno';

// edit user
$messages['error_invalid_user'] = 'El nombre de usuario no es correcto o no existe';
$messages['error_updating_user'] = 'Hubo un error actualizando el usuario. Compruebe los datos y vu�lvalo a intentar';
$messages['blogs'] = 'Bit�coras';
$messages['user_blogs_help'] = 'Bit�coras a las que el usuario tiene acceso como usuario o como propietario de la bit�cora';
$messages['site_admin'] = 'Administrador';
$messages['site_admin_help'] = 'Dar permisos de administrador a este usuario de forma que pueda acceder a la secci�n de "Administraci�n"';
$messages['user_updated_ok'] = 'El usuario "%s" fue actualizado correctamente';

// site blogs
$messages['blog_status_all'] = 'Todas';
$messages['blog_status_active'] = 'Activas';
$messages['blog_status_disabled'] = 'Desactivada';
$messages['blog_status_unconfirmed'] = 'Sin confirmar';
$messages['owner'] = 'Propietario';
$messages['quota'] = 'Cuota';
$messages['bytes'] = 'bytes';
$messages['error_no_blogs_selected'] = 'No se seleccionaron bit�coras para desactivar';
$messages['error_blog_is_default_blog'] = 'La bit�cora "%s" no se puede desactivar porque es la bit�cora por defecto';
$messages['blog_deleted_ok'] = 'La bit�cora "%s" fue desactivada correctamente';
$messages['blogs_deleted_ok'] = '%s fueron desactivadas correctamente';
$messages['error_deleting_blog'] = 'Hubo un error desactivando la bit�cora "%s"';
$messages['error_deleting_blog2'] = 'Hubo un error desactivando la bit�cora cuyo identificador es "%s"';

// create blog
$messages['error_adding_blog'] = 'Hubo un error a�adiendo la bit�cora. Compruebe los datos y vu�lvalo a intentar';
$messages['blog_added_ok'] = 'La bit�cora "%s" fue a�adida correctamente';

// edit blog
$messages['blog_status_help'] = 'Estado de la bit�cora';
$messages['blog_owner_help'] = 'Propietario de la bit�cora, que tendr� control sobre su configuraci�n';
$messages['users'] = 'Usuarios';
$messages['blog_quota_help'] = 'Cuota de ficheros en bytes. Use un valor de 0 para otorgar espacio ilimitado';
$messages['blog_users_help'] = 'Usuarios que pueden acceder a esta bit�cora, pero sin acceso a su configuraci�n. Asigne los usuarios de la izquierda a la lista de la derecha para a�adir nuevos usuarios, o viceversa para eliminar usuarios existentes';
$messages['edit_blog_settings_updated_ok'] = 'La bit�cora "%s" fue actualizada correctamente';
$messages['error_updating_blog_settings'] = 'Hubo un error actualizando la bit�cora "%s"';
$messages['error_incorrect_blog_owner'] = 'El usuario seleccionado como propietario de la bit�cora no es correcto';
$messages['error_fetching_blog'] = 'Hubo un error cargando la bit�cora';
$messages['error_updating_blog_settings2'] = 'Hubo un error actualizando la bit�cora. Compruebe los datos e int�ntelo de nuevo';
$messages['add_or_remove'] = 'A�adir o eliminar usuarios';

// site locales
$messages['locale'] = 'Traducci�n';
$messages['locale_encoding'] = 'Condificaci�n';
$messages['locale_deleted_ok'] = 'La traducci�n "%s" fue eliminada correctamente';
$messages['error_no_locales_selected'] = 'No se seleccionaron traducciones para eliminar';
$messages['error_deleting_only_locale'] = 'La traducci�n no pudo ser eliminada porque es la �nica que queda en el sistema';
$messages['locales_deleted_ok']= '%s traducciones fueron eliminadas correctamente';
$messages['error_deleting_locale'] = 'Hubo un error borrando la traducci�n "%s"';
$messages['error_locale_is_default'] = 'La traducci�n "%s" no pudo ser eliminada porque es la que se est� usando por defecto para las nuevas bit�coras';

// add locale
$messages['error_invalid_locale_file'] = 'El fichero con la traducci�n no es v�lido';
$messages['error_no_new_locales_found'] = 'No se encontraron nuevos ficheros con traducciones';
$messages['locale_added_ok'] = 'La traducci�n "%s" fue a�adida correctamente';
$messages['error_saving_locale'] = 'Hubo un error guardando la nueva traducci�n';
$messages['scan_locales'] = 'Actualizar traducciones';
$messages['add_locale_help'] = 'Use este formulario para a�adir nuevas traducciones. Si no es posible enviar ficheros al servidor, suba el fichero al servidor manualmente mediante por ejemplo FTP, gu�rdelo en el directorio <b>./locales/</b> y use el bot�n "<b>Actualizar traducciones</b>". pLog leer� el directorio y a�adir� autom�ticamente cualquier nueva traducci�n';

// site templates
$messages['error_template_is_default'] = 'La plantilla "%s" no pudo ser eliminada porque es la que se est� usando por defecto para nuevas bit�coras';

// add template
$messages['global_template_package_help'] = 'Use este formulario para enviar nuevas plantillas al servidor. �stas plantillas estar�n disponibles para todas las bit�coras del servidor. Si no es posible enviar ficheros, use por ejemplo un cliente de FTP para subir los ficheros y col�quelos en el directorio <b>%s</b> y luego use el bot�n "<b>Actualizar plantillas</b>" para a�adir cualquier plantilla nueva. pLog comprobar� el contenido del directorio y a�adir� autom�ticamente todas las plantillas nuevas';

// global settings
$messages['site_config_saved_ok'] = 'La configuraci�n general fue guardada correctamente';
$messages['error_saving_site_config'] = 'Hubo un error guardando la configuraci�n general';
/// general settings
$messages['help_comments_enabled'] = 'Activar los comentarios en nuevas bit�coras por defecto [Valor por defecto = S�]';
$messages['help_beautify_comments_text'] = 'Si se activa, los comentarios enviados por los usuarios ser�n formateados autom�ticamente a�adiendo p�rrafos y generando enlaces autom�ticamente a partir de direcciones [Valor por defecto = S�]';
$messages['help_temp_folder'] = 'Carpeta donde el pLog puede escribir sus ficheros temporales de uso interno. Use una carpeta fuera del �rbol de directorios del servidor de web para mayor seguridad [Valor por defecto = ./tmp]';
$messages['help_base_url'] = 'Direcci�n base donde el pLog est� instalado';
$messages['help_subdomains_enabled'] = 'Activar el soporte para subdominios. Vea la secci�n de la documentaci�n sobre subdominios para m�s informaci�n [Valor por defecto = No]';
$messages['help_subdomains_base_url'] = 'Cuando los subdominios estan activados, se usar� est� URL base en lugar de base_url. Use {blogname} para obtener el nombre de la bit�cora y {username} para obtener el nombre del usuario, para generar un enlace permanente a la bit�cora (p. ej. "http://{blogname}.sudominio.com")';
$messages['help_include_blog_id_in_url'] = 'Cuando los subdominions est�n activados conjuntamente con las URLs "normales", esto forzar� al pLog a no incluir el par�metro "blogId". No deber�a alterar este valor si no sabe lo que est� haciendo [Valor por defecto = S�]';
$messages['help_script_name'] = 'Configure este par�metro si por alguna raz�n tiene que renombrar index.php [Valor por defecto = index.php]';
$messages['help_show_posts_max'] = 'N�mero m�ximo de art�culos en la p�gina principal para nuevas bit�coras [Valor por defecto = 15]';
$messages['help_recent_posts_max'] = 'N�mero m�ximo de art�culos recientes mostrados en la p�gina principal para nuevas bit�coras [Valor por defecto = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Activar el soporte para XmlHttpRequest de forma que se puedan guardar borradores de art�culos sin tener que refrescar la p�gina de edici�n [Valor por defecto = S�]';
$messages['help_locale_folder'] = 'Carpeta donde est�n guardadas las traducciones. Use una carpeta fuera del �rbol de directorios del servidor de web para mayor seguridad [Valor por defecto = ./locale]';
$messages['help_default_locale'] = 'Idioma por defecto para las nuevas bit�coras [Valor por defecto = en_UK]';
$messages['help_default_blog_id'] = 'Bit�cora por defecto que ser� mostrada si no especifica una bit�cora en particular [Valor por defecto = 1]';
$messages['help_default_time_offset'] = 'Diferencia horaria por defecto de las nuevas bit�coras [Valor por defecto = 0]';
$messages['help_html_allowed_tags_in_comments'] = 'Lista de entidades HTML, separadas por espacios en blanco, que est�n permitidas en los comentarios [Valor por defecto = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'Guardar los "referrers" en la base de datos [Valor por defecto = S�]';
$messages['help_show_more_enabled'] = 'Activar el enlace "M�s..." por defecto para nuevas bit�coras [Valor por defecto = S�]';
$messages['help_update_article_reads'] = 'pLog actualizar� el contador de veces que un art�culo ha sido le�do si se activa [Valor por defecto = S�]';
$messages['help_update_cached_article_reads'] = 'Igual que update_article_reads, pero adem�s se actualizar� el contador aunque la cach� est� activada [Valor por defecto = S�]';
$messages['help_xmlrpc_ping_enabled'] = 'Activar la posibilidad de enviar pings mediante XMLRPC a los sitios que lo soporten [Valor por defecto = S�]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Activar el soporte para pings XMLRPC por defecto en nuevos art�culos [Valor por defecto = S�]';
$messages['help_xmlrpc_ping_hosts'] = 'URLs de servicios que implementen soporte para pings XMLRPC. Ponga cada direcci�n en una l�nea nueva [Valor por defecto = http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = 'Activar el soporte para recibir retroenlaces [Valor por defecto = S�]';
$messages['help_htmlarea_enabled'] = 'Activar por defecto el editor visual de art�culos para las nuevas bit�coras [Valor por defecto = S�';
$messages['help_plugin_manager_enabled'] = 'Activar los plugins [Valor por defecto = S�]';
$messages['help_minimum_password_length'] = 'Tama�o m�nimo, en car�cteres, que un password debe tener [Valor por defecto = 4]';
$messages['help_xhtml_converter_enabled'] = 'Activa un filtro que intentar� convertir el texto de los art�culos a XHTML v�lido autom�ticamente [Valor por defecto = S�]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'pLog intetar� corregir casi todo lo que pueda para asegurar que nuestros art�culos sean XHTML v�lido, aunque activando este modo es posible que se cometan m�s errores [Valor por defecto = No]';
$messages['help_session_save_path'] = 'Carpeta donde el pLog guarda sus sesiones, mediante la funci�n session_save_path() del PHP. Deje este campo vaci� para usar el valor por defecto del PHP. Si usa otra carpeta que no sea la por defecto, aseg�rese de que puede ser escrita por el usuario ejecutando el servidor de web [Valor por defecto = (vac�o)]';
// summary settings
$messages['help_summary_page_show_max'] = 'N�mero de art�culos que se mostrar�n en el portal. Este par�metro controla todas las listas del portal (art�culos m�s recientes, bit�coras m�s activas, etc) [Valor por defecto = 10]';
$messages['help_summary_blogs_per_page'] = 'N�mero de bit�coras por p�gina en la secci�n "Bit�coras" del portal [Valor por defecto = 25]';
$messages['help_forbidden_usernames'] = 'Lista de nombres de usuario que no se pueden registrar [Valor por defecto = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = 'No permitir m�s de una bit�cora por direcci�n de correo [Valor por defecto = No]';
$messages['help_summary_show_agreement'] = 'Mostrar un texto/licencia con el cual los usuarios tienen que estar de acuerdo antes de continuar con el proceso de registro [Valor por defecto = S�]';
$messages['help_need_email_confirm_registration'] = 'Enviar un email a los nuevos usuarios con un enlace al que tienen que acceder, para confirmar el registro de una nueva bit�cora [Valor por defecto = S�]';
$messages['help_summary_disable_registration'] = 'No permitir el registro de nuevas bit�coras [Valor por defecto = No]';
// templates
$messages['help_template_folder'] = 'Carpeta donde se guardan las plantillas [Valor por defecto = ./templates]';
$messages['help_default_template'] = 'Plantilla por defecto para las nuevas bit�coras [Valor por defecto = standard]';
$messages['help_users_can_add_templates'] = 'Permitir que los usuarios a�adan sus propias plantillas [Valor por defecto = S�]';
$messages['help_template_compile_check'] = 'Si se activa, Smarty comprobar� si los ficheros de las plantillas han cambiado y si es as�, las recompilar� [Valor por defecto = S�]';
$messages['help_template_cache_enabled'] = 'Activa la cache de plantillas. Si est� activada, las p�ginas de las bit�coras solo se generar�n una vez y se usar�n hasta que haya algun cambio. De esta forma, no ser� necesario traer los datos desde la base de datos cada vez [Valor por defecto = S�]';
$messages['help_template_cache_lifetime'] = 'Tiempo en segundos de vida de la cach�. Asigne -1 para que la cach� nucna expire';
$messages['help_template_http_cache_enabled'] = 'Activar el soporte para las peticiones condicionales v�a HTTP. Si se activa, pLog tendr� en cuenta el valor de la cabecera HTTP "If-Modified-Since" y solo enviar� los datos en caso de que sea necesario para ahorrar ancho de banda [Valor por defecto = No]';
$messages['help_allow_php_code_in_templates'] = 'Permite incluir c�digo PHP en las plantillas de Smarty v�a {php}...{/php} [Valor por defecto = No]';
// urls
$messages['help_request_format_mode'] = 'Elija uno de los siguientes formatos de URLs. Si piensa usar "URLs Personales", configure los formatos de las URLs si es necesario [Valor por defecto = Plain]';
$messages['plain'] = 'Normal';
$messages['search_engine_friendly'] = 'Search engine friendly';
$messages['custom_url_format'] = 'URLs Personales';
$messages['help_permalink_format'] = 'Formato de los enlaces permanentes a art�culos cuando las URLs personales est�n activadas [Valor por defecto = /blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = 'Formato de los enlaces a categor�as de art�culos cuando las URLs personales est�n activadas [Valor por defecto = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'Formato de los enlaces permanentes a bit�coras cuando las URLs personales est�n activadas  [Valor por defecto = /blog/{blogname}$]';
$messages['help_archive_link_format'] = 'Formato de los enlaces a los archivos cuando las URLs personales est�n activadas [Valor por defecto = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'Formato de los enlaces permanentes a los art�culos de un autor en particular cuando las URLs personales est�n activadas [Valor por defecto = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'Formato de los enlaces a las p�ginas con los retroenlaces recibidos cuando las URLs personales est�n activadas  [Valor por defecto = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'Formato de los enlaces a p�ginas personales cuando las URLs personales est�n activadas  [Valor por defecto = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'Formato de los enlaces a �lbums de ficheros cuando las URLs personales est�n activadas  [Valor por defecto = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'Formato de los enlaces a ficheros cuando las URLs personales est�n activadas  [Valor por defecto = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'Formato de los enlaces a las vistas previas de ficheros cuando las URLs personales est�n activadas  [Valor por defecto = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'Formato de los enlaces a las vistas previas de tama�o medio cuando las URLs personales est�n activadas  [Valor por defecto = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'Formato de los enlaces para descargar ficheros cuando las URLs personales est�n activadas  [Valor por defecto = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = 'Si se activa, pLog contactar� con el servidor de correo especificado en el registro MX del especificado por el servidor DNS del dominio y comprobar� si el usuario es v�lido [Valor por defecto = No]';
$messages['help_email_service_enabled'] = 'Activar el soporte para enviar mensajes [Valor por defecto = S�]';
$messages['help_post_notification_source_address'] = 'Direcci�n que aparecer� en el campo "From:" cuando se env�en mensajes a trav�s del pLog [Valor por defecto = noreply@your.host.com]';
$messages['help_email_service_type'] = 'Sistema que se usar� para enviar mensajes [Valor por defecto = PHP]';
$messages['help_smtp_host'] = 'Si se desea usar un servidor SMTP para enviar mensajes, especifique aqu� el nombre del servidor [Valor por defecto = (vac�o)]';
$messages['help_smtp_port'] = 'Si el servidor de SMTP est� configurado en un puerto distinto al 25 [Valor por defecto = (vac�o)]';
$messages['help_smtp_use_authentication'] = 'Active este par�metro si el servidor requiere autentificaci�n  [Valor por defecto = No]';
$messages['help_smtp_username'] = 'Nombre de usuario en caso de que el servidor SMTP necesite autentificaci�n [Valor por defecto = (vac�o)]';
$messages['help_smtp_password'] = 'Password en caso de que el servidor SMTP necesite autentificaci�n [Valor por defecto = (vac�o)]';
// helpers
$messages['help_path_to_tar'] = 'Ruta completa al binario "tar", necesario para descomprimir plantillas en formato .tar.gz o tar.bz2 [Valor por defecto = /bin/tar]';
$messages['help_path_to_gzip'] = 'Ruta completa al binario "gzip", necesario para descomprimir plantillas en formato .tar.gz [Valor por defecto = /bin/gzip]';
$messages['help_path_to_bz2'] = 'Ruta completa al binario "bz2", necesario para descomprimir plantillas en formato tar.bz2 [Valor por defecto = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = 'Ruta completa al binario "unzip", necesario para descomprimir plantillas en formato .zip [Valor por defecto = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'Usar una versi�n nativa en PHP para descomprimir ficheros .zip, de forma que el binario "unzip" no sea necesario [Valor por defecto = No]';
// uploads
$messages['help_uploads_enabled'] = 'Permite a los usuarios enviar ficheros al servidor. Este par�metro afecta por ejemplo a las plantillas personalizadas [Valor por defecto = S�]';
$messages['help_maximum_file_upload_size'] = 'Tama�o m�ximo de los ficheros en bytes. Por razones obvias, este l�mite nunca ser� m�s alto que el valor configurado en la configuraci�n del PHP [Valor por defecto = 2000000]';
$messages['help_upload_forbidden_files'] = 'Lista separada por espacios en blancos de nombres de ficheros no permitidos en este servidor. Puede usar \'*\' y \'?\' para especificar nombres de ficheros m�s complejos [Valor por defecto = *.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'Activar el acceso a las bit�coras mediante XMLRPC [Valor por defecto = S�]';
$messages['help_rdf_enabled'] = 'Activar la generaci�n de contenidos mediante RSS o Atom [Valor por defecto = S�]';
$messages['help_default_rss_profile'] = 'Formato por defecto de los contenidos [Valor por defecto = RSS 1.0]';
// security
$messages['security_pipeline_enabled'] = 'Activar el filtro de seguridad, que es necesario para el filtro Bayesiano y por otros plugins que lo usen [Valor por defecto = S�]';
$messages['help_ip_address_filter_enabled'] = 'Activa el filtro de direcciones IP Es necesario que el filtro de seguridad est� activado [Valor por defecto = S�]';
$messages['help_content_filter_enabled'] = 'Activa el filtro de contenido mediante expresiones regularres. Es necesario que el filtro de seguridad est� activado [Valor por defecto = S�]';
$messages['help_maximum_comment_size'] = 'Tama�o m�ximo de un comentario en bytes, o use un valor de "0" para permitir un tama�o ilimitado [Valor por defecto = 0]';
// baS�ian filter
$messages['help_baS�ian_filter_enabled'] = 'Activar el filtro Bayesiano anti-spam [Valor por defecto = S�]';
$messages['help_baS�ian_filter_spam_probability_treshold'] = 'Puntuaci�n m�xima para que un comentario sea considerado spam [Valor por defecto = 0.9]';
$messages['help_baS�ian_filter_nonspam_probability_treshold'] = 'Puntuaci�n m�nima para que un comentari no sea considerado spam [Valor por defecto = 0.2]';
$messages['help_baS�ian_filter_min_length_token'] = 'Tama�o m�nimo en car�cteres de un token [Valor por defecto = 3]';
$messages['help_baS�ian_filter_max_length_token'] = 'Tama�o m�ximo de un token [Valor por defecto = 100]';
$messages['help_baS�ian_filter_number_significant_tokens'] = 'N�mero m�nimo de tokens [Valor por defecto = 15]';
$messages['help_baS�ian_filter_spam_comments_action'] = 'Qu� hacer con los comentarios que sean spam. Use "Eliminar" cuando su filtro Bayesiando haya sido entrenado correctamente. Mant�ngalos en la base de datos si cree que su filtro puede cometer todav�a algun error [Valor por defecto = Guardar]';
$messages['keep_spam_comments'] = 'Guardarlos en la base de datos, pero marcados como "Spam"';
$messages['throw_away_spam_comments'] = 'Eliminarlos directamente';
// resources
$messages['help_resources_enabled'] = 'Activar la secci�n de "Ficheros" [Valor por defecto = S�]';
$messages['help_resources_folder'] = 'Carpeta donde los ficheros ser�n almacenados. Use una carpeta fuera del �rbol del servidor de web para mayor seguridad [Valor por defecto = ./gallery]';
$messages['help_thumbnail_method'] = 'M�todo para generar las previsualizaciones. Se requiere soporte para GD si se selecciona PHP como el m�todo por defecto  [Valor por defecto = PHP]';
$messages['help_path_to_convert'] = 'Ruta completa al binario "convert" del paquete "ImageMagick". Es obligatorio si el m�todo para generar las previsualizaciones es "ImageMagick" [Valor por defecto = /usr/bin/convert]';
$messages['help_thumbnail_format'] = 'Formato de las previsualizaciones [Valor por defecto = El mismo que la im�gen]';
$messages['help_thumbnail_height'] = 'Altura de las previsualizaciones en pixels [Valor por defecto = 120]';
$messages['help_thumbnail_width'] = 'Anchura de las previsualizaciones en pixels [Valor por defecto = 120]';
$messages['help_medium_size_thumbnail_height'] = 'Altura de las previsualizaciones de tama�o medio en pixels [Valor por defecto = 480]';
$messages['help_medium_size_thumbnail_width'] = 'Anchura de las previsualizaciones de tama�o medio en pixels [Valor por defecto = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'Generar las previsualizaciones manteniendo un aspecto proporcional [Valor por defecto = S�]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'Usar solo GD1 en lugar de GD2 [Valor por defecto = No]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'M�todo usado para suavizar las vistas previas. Solo disponible si se est� usando PHP para generar las vistas previas [Valor por defecto = PHP ImageCopyResampled]';
$messages['help_resources_quota'] = 'Cuota de ficheros en bytes para las bit�coras (i.e. 5242880 Bytes = 5MB), o use "0" para dar cuota ilimitada [Valor por defecto = 0]';
$messages['help_resource_server_http_cache_enabled'] = 'Activa el soporte para la cabecera HTTP "If-Modified-Since" cuando se hagan peticiones para ficheros. Active este par�metro para ahorrar ancho de banda [Valor por defecto = No]';
$messages['help_resource_server_http_cache_lifetime'] = 'Tiempo en milisegundos durante el cual el cliente puede usar la versi�n cacheada de un fichero. Solo v�lido cu�ndo el par�metro anterior est� activado [Valor por defecto = 9999999]';
$messages['same_as_image'] = 'El mismo que la im�gen original';
// search
$messages['help_search_engine_enabled'] = 'Activar el motor de b�squeda  [Valor por defecto = S�]';
$messages['help_search_in_custom_fields'] = 'Buscar tambi�n en los campos personales [Valor por defecto = S�]';
$messages['help_search_in_comments'] = 'Buscar tambi�n en los comentarios [Valor por defecto = S�]';

// cleanup
$messages['purge'] = 'Limpiar';
$messages['cleanup_spam'] = 'Limpiar Spam';
$messages['cleanup_spam_help'] = 'Esto eliminara f�sicamente de la base de datos todos aquellos comentarios que hayan sido marcados como spam por los usuario. No ser� posible recuperarlos una vez hayan sido eliminados';
$messages['spam_comments_purged_ok'] = 'Spam eliminado correctamente';
$messages['cleanup_posts'] = 'Limpiar Art�culos';
$messages['cleanup_posts_help'] = 'Esto eliminar� f�sicamente de la base de datos todos aquellos art�culos que hayan sido marcados como "Borrados". No ser� posible recuperarlos una vez hayan sido eliminados';
$messages['posts_purged_ok'] = 'Art�culos eliminados correctamente';

/// summary ///
// front page
$messages['summary'] = 'Portal';
$messages['register'] = 'Registrarse';
$messages['summary_welcome'] = 'Bienvenido!';
$messages['summary_most_active_blogs'] = 'Las Bit�coras m�s activas';
$messages['summary_most_commented_articles'] = 'Los m�s comentados';
$messages['summary_most_read_articles'] = 'Los mas le�dos';
$messages['password_forgotten'] = 'Olvidaste el password?';
$messages['summary_newest_blogs'] = 'Bit�coras nuevas';
$messages['summary_latest_posts'] = 'Los m�s nuevos';
$messages['summary_search_blogs'] = 'Buscar';

// blog list
$messages['updated'] = 'Actualizada';
$messages['total_reads'] = 'total';

// blog profile
$messages['blog'] = 'Bit�cora';
$messages['latest_posts'] = 'Los m�s nuevos';

// registration
$messages['register_step0_title'] = 'T�rminos de Uso';
$messages['decline'] = 'No estoy de acuerdo';
$messages['accept'] = 'Aceptar';
$messages['read_service_agreement'] = 'Lea atentamente los t�rminos de uso y pulse el bot�n "Aceptar" si est� de acuerdo';
$messages['register_step1_title'] = 'Crear el usuario [1/4]';
$messages['register_step1_help'] = 'Primero hay que crear un usuario para la bit�cora. Este usuario ser� el propietario de la bit�cora i tendr� acceso a todas sus funcionalidades';
$messages['register_next'] = 'Siguiente';
$messages['register_back'] = 'Atr�s';
$messages['register_step2_title'] = 'Crear la bit�cora [2/4]';
$messages['register_blog_name_help'] = 'Nombre de la bit�cora';
$messages['register_step3_title'] = 'Elegir una plantilla [3/4]';
$messages['step1'] = 'Paso 1';
$messages['step2'] = 'Paso 2';
$messages['step3'] = 'Paso 3';
$messages['register_step3_help'] = 'Elija una de las plantillas disponibles para su nueva bit�cora. Si m�s tarde no le gusta, siempre la puede cambiar';
$messages['error_must_choose_template'] = 'Elija una plantilla';
$messages['select_template'] = 'Seleccionar esta';
$messages['register_step5_title'] = 'Felicidades! [4/4]';
$messages['finish'] = 'Terminar';
$messages['register_need_confirmation'] = 'Un mensaje incluyendo el enlace para su confirmaci�n ha sido enviado a su direcci�n de correo. En cuanto reciba el mensaje, haga clic en la direci�n para empezar a usar su bit�cora!';
$messages['register_step5_help'] = 'Felicidades, su nueva bit�cora ha sido creada!';
$messages['register_blog_link'] = 'Si quiere, puede ir directamente a su nueva bit�cora: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'O si lo desea, puede empezar a a�adir art�culos a trav�s de la <a href="admin.php">interfaz de administraci�n</a>';
$messages['register_error'] = 'Hubo un error durante el proceso';
$messages['error_registration_disabled'] = 'No se pueden registrar bit�coras en este sitio';
// registration article topic and text
$messages['register_default_article_topic'] = 'Felicidades!';
$messages['register_default_article_text'] = 'Si puede leer esto, su bit�cora est� lista para empezar a escribir.';
$messages['register_default_category'] = 'General';
// confirmation email
$messages['register_confirmation_email_text'] = 'Visite el siguiente enlace para activar su nueva bit�cora:

%s

Que tenga un buen d�a.';
$messages['error_invalid_activation_code'] = 'El enlace de activaci�n no es correcto';
$messages['blog_activated_ok'] = 'Felicidades, su nueva bit�cora ha sido activada!';
// forgot your password?
$messages['reset_password'] = 'Cambiar el password';
$messages['reset_password_username_help'] = 'Nombre del usuario cuyo password desea cambiar';
$messages['reset_password_email_help'] = 'Direcci�n de correo que se us� para registrar este usuario';
$messages['reset_password_help'] = 'Use este formulario para cambiar el password de su usuario, en caso de que no lo recuerde. Por favor escriba el nombre del usuario cuyo password desea cambiar, as� como la direcci�n de correo con la que se registr� este usuario';
$messages['error_resetting_password'] = 'Hubo un error cambiando el password del usuario. Compruebe los datos y vu�lvalo a intentar';
$messages['reset_password_error_incorrect_email_address'] = 'La direcci�n de correo no es correcta o no es la direcci�n que se us� para registrar este usuario';
$messages['password_reset_message_sent_ok'] = 'Un mensaje de correo ha sido enviado a la direcci�n de correo. Por favor haga clic en la direcci�n incluida en el mensaje para cambiar el password';
$messages['error_incorrect_request'] = 'Los par�metros de la direcci�n no son correctos';
$messages['change_password'] = 'Nuevo password';
$messages['change_password_help'] = 'Por favor de un nuevo password y a continuaci�n, conf�rmelo';
$messages['new_password'] = 'Nuevo password';
$messages['new_password_help'] = 'Escriba aqu� su nuevo password';
$messages['password_updated_ok'] = 'Su password ha sido cambiado correctamente!';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'This page looks plain and unstyled because you\'re using a non-standard compliant browser. To see it in its best form, please <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">upgrade</a> to a browser that supports web standards. It\'s free and painless.';
$messages['jump_to_navigation'] = 'Ir al men�';
$messages['comment_email_never_display'] = 'El comentario ser� formateado autom�ticamente. La direcci�n de correo no ser� mostrada en p�blico.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> allowed: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = 'El URI <acronym title="Identificador de Recurso Uniforme (URI)">URI</acronym> para enviar retroenlaces a este art�culo es: ';
$messages['previous_post'] = 'Anterior';
$messages['next_post'] = 'Siguiente';
$messages['comment_default_title'] = '(Sin t�tulo)';
$messages['guestbook'] = 'Libro de visitas';
$messages['trackbacks'] = 'Retroenlaces';
$messages['menu'] = 'Men�';
$messages['albums'] = 'Albums';
$messages['admin'] = 'Administraci�n';
$messages['xmlrpc_ping_ok'] = 'Ping XMLRPC enviado correctamente: ';
$messages['error_sending_xmlrpc_ping'] = 'Hubo un error enviando el ping XMLRPC a: ';
$messages['error_sending_xmlrpc_ping_message'] = 'Hubo un error enviando el ping XMLRPC: ';
?>