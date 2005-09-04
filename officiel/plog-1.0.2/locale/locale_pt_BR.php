<?php
//Translated by C R Zamana (czamana@gmail.com)

// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'iso-8859-1';
$messages['locale_description'] = 'pLog em Portugu�s do Brasil';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %Hh%Mmin';

// days of the week
$messages['days'] = Array( 'domingo', 'segunda', 'ter�a', 'quarta', 'quinta', 'sexta', 's�bado' );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( 'do', 'se', 'te', 'qa', 'qi', 'se', 'sa' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages['months'] = Array( 'janeiro', 'fevereiro', 'mar�o', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro' );
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
$messages['of'] = 'of';
$messages['recently'] = 'recentemente...';
$messages['comments'] = 'Coment�rios';
$messages['comment on this'] = 'Comente';
$messages['my_links'] = 'meus links';
$messages['archives'] = 'arquivos';
$messages['search'] = 'pesquisa';
$messages['calendar'] = 'calend�rio';
$messages['search_s'] = 'Pesquisa';
$messages['search_this_blog'] = 'Pesquisar este blog:';
$messages['about_myself'] = 'Quem sou eu?';
$messages['permalink_title'] = 'Links permanentes para os arquivos';
$messages['permalink'] = 'Permalink';
$messages['posted_by'] = 'Postado por';
$messages['reply'] = 'Resposta';

// add comment form
$messages['add_comment'] = 'Comentar';
$messages['comment_topic'] = 'T�pico';
$messages['comment_text'] = 'Texto';
$messages['comment_username'] = 'Seu nome';
$messages['comment_email'] = 'Seu endere�o de e-mail (se houver)';
$messages['comment_url'] = 'Sua p�gina pessoal (se houver)';
$messages['comment_send'] = 'Enviar';
$messages['comment_added'] = 'Coment�rio feito!';
$messages['comment_add_error'] = 'Erro no envio do coment�rio';
$messages['article_does_not_exist'] = 'O artigo n�o existe';
$messages['no_posts_found'] = 'Nenhum artigo foi encontrado';
$messages['user_has_no_posts_yet'] = 'O usu�rio ainda n�o tem artigos postados';
$messages['back'] = 'Voltar';
$messages['post'] = 'artigo';
$messages['trackbacks_for_article'] = 'Trackbacks para o artigo: ';
$messages['trackback_excerpt'] = 'Trecho';
$messages['trackback_weblog'] = 'Weblog';
$messages['search_results'] = 'Pesquisar os resultados';
$messages['search_matching_results'] = 'Os seguintes artigos atendem ao crit�rio: ';
$messages['search_no_matching_posts'] = 'Nenhum artigo foi encontrado';
$messages['read_more'] = '(Mais)';
$messages['syndicate'] = 'Syndicate';
$messages['main'] = 'Principal';
$messages['about'] = 'Sobre';
$messages['download'] = 'Download';

////// error messages /////
$messages['error_fetching_article'] = 'O artigo que voc� especificou n�o foi encontrado.';
$messages['error_fetching_articles'] = 'Os artigos n�o puderam ser obtidos.';
$messages['error_trackback_no_trackback'] = 'Nenhum trackback foi encontrado para o artigo.';
$messages['error_incorrect_article_id'] = 'O identificador do artigo n�o � correto.';
$messages['error_incorrect_blog_id'] = 'O identificador do blog n�o est� correto.';
$messages['error_comment_without_text'] = 'Voc� deve escrever algo.';
$messages['error_comment_without_name'] = 'Voc� deve informar seu nome ou apelido.';
$messages['error_adding_comment'] = 'Houve erro no cadastro do coment�rio.';
$messages['error_incorrect_parameter'] = 'Par�metro incorreto.';
$messages['error_parameter_missing'] = 'Falta um par�metro no pedido.';
$messages['error_comments_not_enabled'] = 'O recurso de coment�rios foi desabilitado neste site.';
$messages['error_incorrect_search_terms'] = 'Os termos da pesquisa n�o s�o v�lidos';
$messages['error_no_search_results'] = 'Nenhum item encontrado de acordo com os termos da pesquisa';
$messages['error_no_albums_defined'] = 'N�o h� �lbums dispon�veis neste blog.';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Entrar';
$messages['welcome_message'] = 'Bem-vindo ao pLog';
$messages['error_incorrect_username_or_password'] = 'Usu�rio ou senha incorretos.';
$messages['error_dont_belong_to_any_blog'] = 'Voc� ainda n�o pertence a qualquer blog.';
$messages['logout_message'] = 'Sua sess�o foi encerrada com sucesso.';
$messages['logout_message_2'] = 'Clique <a href="%1$s">aqui</a> para ir para %2$s</a>.';
$messages['error_access_forbidden'] = 'Acesso negado. Voc� deve se autenticar primeiro aqui.';
$messages['username'] = 'Usu�rio';
$messages['password'] = 'Senha';

// dashboard
$messages['dashboard'] = 'Painel';
$messages['recent_articles'] = 'Artigos mais recentes';
$messages['recent_comments'] = 'Coment�rios mais recentes';
$messages['recent_trackbacks'] = 'Trackbacks mais recentes';
$messages['blog_statistics'] = 'Estat�sticas do Blog';
$messages['total_posts'] = 'Total de artigos';
$messages['total_comments'] = 'Total de coment�rios';
$messages['total_trackbacks'] = 'Total de trackbacks';
$messages['total_viewed'] = 'Total de artigos vistos';
$messages['in'] = 'Em';

// menu options
$messages['newPost'] = 'Novo artigo';
$messages['Manage'] = 'Gerenciamento';
$messages['managePosts'] = 'Gerenciar artigos';
$messages['editPosts'] = 'Artigos';
$messages['editArticleCategories'] = 'Categorias';
$messages['newArticleCategory'] = 'Nova categoria';
$messages['manageLinks'] = 'Gerenciar links';
$messages['editLinks'] = 'Links';
$messages['newLink'] = 'Novo Link';
$messages['editLink'] = 'Editar Link';
$messages['editLinkCategories'] = 'Categorias de link';
$messages['newLinkCategory'] = 'Nova categoria de link';
$messages['editLinkCategory'] = 'Editar categoria de link';
$messages['manageCustomFields'] = 'Gerenciar campos personalizados';
$messages['blogCustomFields'] = 'Campos personalizados';
$messages['newCustomField'] = 'Novo campo personalizado';
$messages['resourceCenter'] = 'Central de recursos';
$messages['resources'] = 'Recursos';
$messages['newResourceAlbum'] = 'Novo �lbum';
$messages['newResource'] = 'Novo recurso';
$messages['controlCenter'] = 'Central de controle';
$messages['manageSettings'] = 'Configura��es';
$messages['blogSettings'] = 'Configura��es do blog';
$messages['userSettings'] = 'Configura��es de usu�rio';
$messages['pluginCenter'] = 'Central de plugins';
$messages['Stats'] = 'Estat�sticas';
$messages['manageBlogUsers'] = 'Gerenciar usu�rios do blog';
$messages['newBlogUser'] = 'Novo usu�rio do blog';
$messages['showBlogUsers'] = 'Usu�rios do blog';
$messages['manageBlogTemplates'] = 'Templates do blog';
$messages['newBlogTemplate'] = 'Novo template do blog';
$messages['blogTemplates'] = 'Templates do blog';
$messages['adminSettings'] = 'Administra��o';
$messages['Users'] = 'Usu�rios';
$messages['createUser'] = 'Criar novo usu�rio';
$messages['editSiteUsers'] = 'Usu�rios do site';
$messages['Blogs'] = 'Gerenciar blogs';
$messages['createBlog'] = 'Criar blog';
$messages['editSiteBlogs'] = 'Blogs';
$messages['Locales'] = 'Gerenciar tradu��es';
$messages['newLocale'] = 'Nova tradu��o';
$messages['siteLocales'] = 'Tradu��es do site';
$messages['Templates'] = 'Gerenciar templates';
$messages['newTemplate'] = 'Novo template';
$messages['siteTemplates'] = 'Templates do site';
$messages['GlobalSettings'] = 'Configura��es globais';
$messages['editSiteSettings'] = 'Geral';
$messages['summarySettings'] = 'Resumo';
$messages['templateSettings'] = 'Templates';
$messages['urlSettings'] = 'URLs';
$messages['emailSettings'] = 'e-mail';
$messages['uploadSettings'] = 'Uploads';
$messages['helpersSettings'] = 'Ferramentas externas';
$messages['interfacesSettings'] = 'Interfaces';
$messages['securitySettings'] = 'Seguran�a';
$messages['bayesianSettings'] = 'Filtro de Bayesian';
$messages['resourcesSettings'] = 'Recursos';
$messages['searchSettings'] = 'Pesquisa';
$messages['cleanUpSection'] = 'Limpeza';
$messages['cleanUp'] = 'Limpar';
$messages['editResourceAlbum'] = 'Editar �lbum';
$messages['resourceInfo'] = 'Editar recursos';
$messages['editBlog'] = 'Editar blog';
$messages['Logout'] = 'Sair';

// new post
$messages['topic'] = 'T�pico';
$messages['topic_help'] = 'T�tulo do artigo';
$messages['text'] = 'Texto';
$messages['text_help'] = 'Texto do artigo. Esta parte sempre aparecer� na p�gina';
$messages['extended_text'] = 'Restante do texto';
$messages['extended_text_help'] = 'Restante do texto do artigo. Esta parte pode opcionalmente aparecer somente na p�gina do artigo ou integralmente j� na p�gina principal. Veja as configura��es do blog para maiores informa��es';
$messages['post_slug'] = 'Slug';
$messages['post_slug_help'] = 'O slug ser� utilizado para gerar links permanentes';
$messages['date'] = 'Data';
$messages['post_date_help'] = 'Data na qual este artigo ser� publicado';
$messages['status'] = 'Status';
$messages['post_status_help'] = 'Escolha um destes status';
$messages['post_status_published'] = 'Publicado';
$messages['post_status_draft'] = 'Rascunho';
$messages['post_status_deleted'] = 'Removido';
$messages['categories'] = 'Categorias';
$messages['post_categories_help'] = 'Escolha uma ou mais destas categorias';
$messages['post_comments_enabled_help'] = 'Habilitar coment�rios';
$messages['send_notification_help'] = 'Notifica��o sobre novos coment�rios';
$messages['send_trackback_pings_help'] = 'Enviar trackbacks';
$messages['send_xmlrpc_pings_help'] = 'Enviar pings do tipo XMLRPC';
$messages['save_draft_and_continue'] = 'Salvar como rascunho';
$messages['preview'] = 'Visualizar';
$messages['add_post'] = 'Publicar!';
$messages['error_saving_draft'] = 'Houve erro no cadastramento do rascunho';
$messages['draft_saved_ok'] = 'Rascunho salvo com sucesso';
$messages['error_sending_request'] = 'Houve erro no envio da requisi��o';
$messages['error_no_category_selected'] = 'Escolha pelo menos uma categoria';
$messages['error_missing_post_topic'] = 'Escreva um t�tulo para o artigo';
$messages['error_missing_post_text'] = 'Escreva algo no artigo';
$messages['error_adding_post'] = 'Houve erro no cadastramento do artigo';
$messages['post_added_not_published'] = 'Artigo cadastrado com sucesso mas n�o publicado';
$messages['post_added_ok'] = 'Artigo cadastrado com sucesso.';
$messages['send_notifications_ok'] = 'Uma notifica��o ser� enviada cada vez que houver um novo coment�rio ou trackback.';

// send trackbacks
$messages['error_sending_trackbacks'] = 'Houve erro no envio dos seguintes trackbacks';
$messages['send_trackbacks_help'] = 'Escolha aquelas URLs para as quais voc� quer enviar pings trackback. Certifique-se que o site suporta o recurso de trackback.';
$messages['send_trackbacks'] = 'Enviar trackbacks';
$messages['ping_selected'] = 'Pingar os selecionados';
$messages['trackbacks_sent_ok'] = 'Os trackbacks foram enviados para as URLs com sucesso';

// posts page
$messages['show_by'] = 'Mostrar por';
$messages['category'] = 'Categoria';
$messages['author'] = 'Autor';
$messages['post_status_all'] = 'Todos';
$messages['author_all'] = 'Todos';
$messages['search_terms'] = 'Termos da pesquisa';
$messages['show'] = 'Mostrar';
$messages['delete'] = 'Remover';
$messages['actions'] = 'A��es';
$messages['all'] = 'Todos';
$messages['category_all'] = 'Todas';
$messages['error_incorrect_article_id'] = 'Identificador de artigo incorreto';
$messages['error_deleting_article'] = 'Houve erro na remo��o do artigo "%s"';
$messages['article_deleted_ok'] = 'O artigo "%s" foi removido com sucesso';
$messages['articles_deleted_ok'] = '%s artigos removidos com sucesso';
$messages['error_deleting_article2'] = 'Houve erro na remo��o do artigo com identificador "%s"';

// edit post page
$messages['update'] = 'Atualizar';
$messages['editPost'] = 'Editar artigo';
$messages['error_fetching_post'] = 'Houve erro na recupera��o do artigo';
$messages['post_updated_ok'] = 'Artigo "%s" atualizado com sucesso';
$messages['error_updating_post'] = 'Houve erro na atualiza��o do artigo';
$messages['notification_added'] = 'Voc� receber� notifica��es de novos coment�rios ou trackbacks';
$messages['notification_removed'] = 'Nenhum notifica��o sobre novos coment�rios ou trackbacks ser� enviada';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = 'Todos';
$messages['comment_status_spam'] = 'Spam';
$messages['comment_status_nonspam'] = 'N�o � spam';
$messages['error_fetching_comments'] = 'Houve erro na recupera��o dos coment�rios do artigo';
$messages['error_deleting_comments'] = 'Houve erro na remo��o dos coment�rios ou ent�o nenhum coment�rio foi selecionado';
$messages['comment_deleted_ok'] = 'Coment�rio "%s" removido com sucesso';
$messages['comments_deleted_ok'] = '%s coment�rios removidos com sucesso';
$messages['error_deleting_comment'] = 'Houve erro na remo��o do coment�rio "%s"';
$messages['error_deleting_comment2'] = 'Houve erro na remo��o do coment�rio com identificador %s';
$messages['editComments'] = 'Coment�rios';
$messages['mark_as_spam'] = 'Marcar como spam';
$messages['mark_as_no_spam'] = 'Mark como n�o-spam';
$messages['error_incorrect_comment_id'] = 'O identificador do coment�rio n�o est� correto';
$messages['error_marking_comment_as_spam'] = 'Houve erro na marca��o do coment�rio como spam';
$messages['comment_marked_as_spam_ok'] = 'O coment�rio foi marcado como spam com sucesso';
$messages['error_marking_comment_as_nonspam'] = 'Houve erro na marca��o do coment�rio como n�o-spam';
$messages['comment_marked_as_nonspam_ok'] = 'O coment�rio foi marcado como n�o-spam com sucesso';

// post trackbacks
$messages['blog'] = 'Blog';
$messages['excerpt'] = 'Trecho';
$messages['error_fetching_trackbacks'] = 'Houve erro na recupera��o dos trackbacks';
$messages['error_deleting_trackbacks'] = 'Houve erro na remo��o dos trackbacks ou ent�o nenhum trackback foi selecionado';
$messages['error_deleting_trackback'] = 'Houve erro na remo��o do trackback "%s"';
$messages['error_deleting_trackback2'] = 'Houve erro na remo��o do trackback com identificador "%s"';
$messages['trackback_deleted_ok'] = 'Trackback "%s" removido com sucesso';
$messages['trackbacks_deleted_ok'] = '%s trackbacks removidos com sucesso';
$messages['editTrackbacks'] = 'Trackbacks';

// post statistics
$messages['referrer'] = 'Refer�ncia';
$messages['hits'] = 'Hits';
$messages['error_no_items_selected'] = 'Nenhum item foi selecionado para remo��o';
$messages['error_deleting_referrer'] = 'Houve erro na remo��o da refer�ncia "%s"';
$messages['error_deleting_referrer2'] = 'Houve erro na remo��o da refer�ncia com identificador "%s"';
$messages['referrer_deleted_ok'] = 'Refer�ncia "%s" removida com sucesso';
$messages['referrers_deleted_ok'] = '%s refer�ncias removidas com sucesso';

// categories
$messages['posts'] = 'Artigos';
$messages['show_in_main_page'] = 'Mostrar na p�gina principal';
$messages['error_incorrect_category_id'] = 'O identificador de categoria n�o est� correto ou nenhum item foi selecionado';
$messages['error_category_has_articles'] = 'A categoria "%s" est� sendo usado por alguns artigos. Altere os artigos primeiro e depois remova a categoria';
$messages['category_deleted_ok'] = 'A categoria "%s" foi removida com sucesso';
$messages['categories_deleted_ok'] = '%s categorias removidas com sucesso';
$messages['error_deleting_category'] = 'Houve erro na remo��o da categoria "%s"';
$messages['error_deleting_category2'] = 'Houve erro na remo��o da categoria com identificador "%s"';
$messages['yes'] = 'Sim';
$messages['no'] = 'N�o';

// new category
$messages['name'] = 'Nome';
$messages['category_name_help'] = 'Nome que ser� usado para mostrar a categoria';
$messages['description'] = 'Descri��o';
$messages['category_description_help'] = 'Descri��o detalhada desta categoria';
$messages['show_in_main_page_help'] = 'Se os artigos sob esta categoria dever�o ser mostrados na p�gina principal ou somente quando esta categoria em particular for selecionada';
$messages['error_empty_name'] = 'Voc� deve fornecer um nome';
$messages['error_empty_description'] = 'Voc� deve fornecer uma descri��o';
$messages['error_adding_article_category'] = 'Houve erro no cadastro da nova categoria. Verifique os dados e tente novamente';
$messages['category_added_ok'] = 'A categoria "%s" foi cadastrada no blog com sucesso';
$messages['add'] = 'Cadastrar';
$messages['reset'] = 'Restaurar';

// update category
$messages['error_updating_article_category'] = 'Houve erro na atualiza��o da categoria do artigo';
$messages['error_fetching_category'] = 'Houve erro na recupera��o do categoria';
$messages['article_category_updated_ok'] = 'A categoria "%s" foi atualizada com sucesso';

// links
$messages['feed'] = 'Retorno';
$messages['error_no_links_selected'] = 'O identificador do link estava incorreto ou nenhum item foi selecionado para remo��o';
$messages['error_incorrect_link_id'] = 'O identificador do link n�o est� correto';
$messages['error_removing_link'] = 'Houve erro na remo��o do link "%s"';
$messages['error_removing_link2'] = 'Houve erro na remo��o do link com identificador "%s"';
$messages['link_deleted_ok'] = 'O link "%s" foi removido com sucesso';
$messages['links_deleted_ok'] = '%s links removidos com sucesso';

// new link
$messages['link_name_help'] = 'Nome dado a este link';
$messages['link_url_help'] = 'Endere�o para onde este link aponta';
$messages['link_description_help'] = 'Breve descri��o deste link';
$messages['link_feed_help'] = 'Um link para alimentadores RSS ou Atom deste link tamb�m pode ser fornecido';
$messages['link_category_help'] = 'Escolha uma das categorias de links dispon�veis';
$messages['error_adding_link'] = 'Houve erro no cadastro do link. Verifique os dados e tente novamente';
$messages['error_invalid_url'] = 'O endere�o n�o est� correto';
$messages['link_added_ok'] = 'O link "%s" foi cadastrado com sucesso';

// update link
$messages['error_updating_link'] = 'Houve erro na atualiza��o do link. Verifique os dados e tente novamente';
$messages['error_fetching_link'] = 'Houve erro na recupera��o do link';
$messages['link_updated_ok'] = 'O link "%s" foi atualizado com sucesso';

// link categories
$messages['links'] = 'Links';
$messages['error_invalid_link_category_id'] = 'O identificador da categoria de link n�o estava correto ou nenhuma categoria de link foi selecionada';
$messages['error_links_in_link_category'] = 'A categoria de link "%s" est� sendo usada por alguns links. Modifique os links primeiro e tente novamente';
$messages['error_removing_link_category'] = 'Houve erro na remo��o da categoria de link "%s"';
$messages['link_category_deleted_ok'] = 'A categoria de link "%s" foi removida com sucesso';
$messages['link_categories_deleted_ok'] = '%s categorias de link removidas com sucesso';
$messages['error_removing_link_category2'] = 'Houve erro na remo��o da categoria de link com identificador "%s"';

// new link category
$messages['link_category_name_help'] = 'Nome dado a esta categoria de link';
$messages['error_adding_link_category'] = 'Houve erro no cadastro desta nova categoria de link';
$messages['link_category_added_ok'] = 'A categoria de link "%s" foi cadastrada com sucesso';

// edit link category
$messages['error_updating_link_category'] = 'Houve erro na atualiza��o desta categoria de link. Verifique os dados e tente novamente';
$messages['link_category_updated_ok'] = 'A categoria de link "%s" foi atualizada com sucesso';
$messages['error_fetching_link_category'] = 'Houve erro na recupera��o da categoria de link';

// custom fields
$messages['type'] = 'Tipo';
$messages['hidden'] = 'Oculto';
$messages['fields_deleted_ok'] = '%s campos personalizados removidos com sucesso';
$messages['field_deleted_ok'] = 'Campo personalizado "%s" removido com sucesso';
$messages['error_deleting_field'] = 'Houve erro na remo��o do campo personalizado "%s"';
$messages['error_deleting_field2'] = 'Houve erro na remo��o do campo personalizado com identificador "%s"';
$messages['error_incorrect_field_id'] = 'O identificador do campo personalizado n�o � v�lido';

// new custom field
$messages['field_name_help'] = 'Identificador que ser� utilizado para se referenciar ao valor deste campo nos artigos';
$messages['field_description_help'] = 'Breve descri��o deste campo que ser� mostrada no cadastramento ou edi��o dos artigos';
$messages['field_type_help'] = 'Escolha um dos tipos de campos dispon�veis';
$messages['field_hidden_help'] = 'Se um campo � oculto, ele n�o ser� mostrado no cadastramento ou edi��o de um artigo. Este recurso � indicado para uso em plugins';
$messages['error_adding_custom_field'] = 'Houve erro no cadastro do campo personalizado. Verifique os dados e tente novamente';
$messages['custom_field_added_ok'] = 'Campo personalizado "%s" cadastrado com sucesso';
$messages['text_field'] = 'Campo texto';
$messages['text_area'] = 'Caixa de texto';
$messages['checkbox'] = 'Checkbox';
$messages['date_field'] = 'Selecionador de datas';

// edit custom field
$messages['error_fetching_custom_field'] = 'Houve erro na recupera��o do campo personalizado';
$messages['error_updating_custom_field'] = 'Houve erro na atualiza��o do campo personalizado. Verifique os dados e tente novamente';
$messages['custom_field_updated_ok'] = 'Campo personalizado "%s" atualizado com sucesso';

// resources
$messages['root_album'] = '�lbum raiz';
$messages['num_resources'] = 'N�mero de recursos';
$messages['total_size'] = 'Tamanho total';
$messages['album'] = '�lbum';
$messages['error_incorrect_album_id'] = 'O identificador de �lbum n�o est� correto';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'N�o foi poss�vel ao pLog criar os diret�rio necess�rios onde os recursos ser�o instalados. Isto pode ter acontecido por uma s�rie de raz�es, tais como sua instala��o do PHP estar configurada com o modo seguro habilitado ou seu usu�rio n�o ter permiss�es suficientes para faz�-lo. Voc� ainda pode tentar levar a opera��o adiante manualmente, criando os seguintes diret�rios: <br/><br/>%s<br/><br/>Se estes diret�rios j� existem, certifique-se de que eles podem ser lidos e gravados pelo usu�rio sob o qual o servidor WEB est� sendo executado.';
$messages['items_deleted_ok'] = '%s items removidos com sucesso';
$messages['error_album_has_children'] = 'O �lbum "%s" tem filhos. Edite o �lbum primeiro e tente novamente';
$messages['item_deleted_ok'] = 'item "%s" removido com sucesso';
$messages['error_deleting_album'] = 'Houve erro na remo��o do �lbum "%s"';
$messages['error_deleting_album2'] = 'Houve erro na remo��o do �lbum com identificador "%s"';
$messages['error_deleting_resource'] = 'Houve erro na remo��o do recurso "%s"';
$messages['error_deleting_resource2'] = 'Houve erro na remo��o do recurso com identificador "%s"';
$messages['error_no_resources_selected'] = 'Nenhum item foi selecionado para remo��o';
$messages['resource_deleted_ok'] = 'O recurso "%s" foi removido com sucesso';
$messages['album_deleted_ok'] = 'O �lbum "%s" foi removido com sucesso';
$messages['add_resource'] = 'Cadastrar recurso';
$messages['add_resource_preview'] = 'Cadastrar visualiza��o';
$messages['add_album'] = 'Cadastrar �lbum';

// new album
$messages['album_name_help'] = 'Nome abreviado do novo �lbum';
$messages['parent'] = 'Pai';
$messages['no_parent'] = 'Sem pai';
$messages['parent_album_help'] = 'Use isto para ter �lbums dentro de �lbums e assim organizar melhor seus arquivos';
$messages['album_description_help'] = 'Descri��o detalhada do conte�do deste �lbum';
$messages['error_adding_album'] = 'Houve erro no cadastro do novo �lbum. Verifique os dados e tente novamente';
$messages['album_added_ok'] = 'O �lbum "%s" foi cadastrado com sucesso';

// edit album
$messages['error_incorrect_album_id'] = 'O identificador de �lbum n�o est� correto';
$messages['error_fetching_album'] = 'Houve erro na recupera��o do �lbum';
$messages['error_updating_album'] = 'Houve erro na atualiza��o do �lbum. Verifique os dados e tente novamente';
$messages['album_updated_ok'] = 'O �lbum "%s" foi atualizado com sucesso';
$messages['show_album_help'] = 'Se desabilitado, o �lbum n�o ser� mostrado na lista de �lbums dispon�veis deste blog';

// new resource
$messages['file'] = 'Arquivo';
$messages['resource_file_help'] = 'Arquivo que ser� cadastrado no blog atual. Use o link "Cadastrar campo" para fazer upload de mais de um arquivo ao mesmo tempo.';
$messages['add_field'] = 'Cadastrar campo';
$messages['resource_description_help'] = 'Descri��o detalhada do conte�do deste arquivo';
$messages['resource_album_help'] = 'Escolha o �lbum no qual este arquivo ser� cadastrado';
$messages['error_no_resource_uploaded'] = 'N�o h� arquivo selecionado para fazer upload';
$messages['resource_added_ok'] = 'Recurso "%s" cadastrado com sucesso';
$messages['error_resource_forbidden_extension'] = 'O arquivo n�o foi cadastrado porque ele � do tipo proibido';
$messages['error_resource_too_big'] = 'O arquivo n�o foi cadastrado porque ele � muito grande';
$messages['error_uploads_disabled'] = 'O arquivo n�o foi cadastrado porque os uploads foram desabilitados';
$messages['error_quota_exceeded'] = 'O arquivo n�o foi cadastrado porque a cota de recursos foi excedida';
$messages['error_adding_resource'] = 'Houve erro no cadastro do arquivo de recurso';

// edit resource
$messages['editResource'] = 'Editar recurso';
$messages['resource_information_help'] = 'Abaixo existem algumas informa��es sobre este arquivo de recurso';
$messages['information'] = 'Informa��o';
$messages['size'] = 'Tamanho';
$messages['format'] = 'Formato';
$messages['dimensions'] = 'Dimens�es';
$messages['bits_per_sample'] = 'Bits por amostra';
$messages['sample_rate'] = 'Taxa de amostra';
$messages['number_of_channels'] = 'N�mero de canais';
$messages['legnth'] = 'Comprimento';
$messages['thumbnail_format'] = 'Formato dos thumbnails';
$messages['regenerate_preview'] = 'Regerar visualiza��o';
$messages['error_fetching_resource'] = 'Houve erro na recupera��o do recurso';
$messages['error_updating_resource'] = 'Houve erro na atualiza��o do recurso';
$messages['resource_updated_ok'] = 'O recurso "%s" foi atualizado com sucesso';

// blog settings
$messages['blog_link'] = 'Link para o blog';
$messages['blog_link_help'] = 'Link permanente para este blog';
$messages['blog_name_help'] = 'T�tulo deste blog';
$messages['blog_description_help'] = 'Descri��o detalhada do conte�do deste blog';
$messages['language'] = 'Idioma';
$messages['blog_language_help'] = 'Idioma usado para mostrar os textos deste blog, tanto para o p�blico quanto para a parte administrativa';
$messages['max_main_page_items'] = 'N�mero m�ximo de itens na p�gina principal';
$messages['max_main_page_items_help'] = 'N�mero de artigos que devem ser mostrados na p�gina principal do blog';
$messages['max_recent_items'] = 'N�mero de itens recentes';
$messages['max_recent_items_help'] = 'N�mero m�ximo de artigos que ser�o mostrados como recentes na p�gina principal';
$messages['template'] = 'Template';
$messages['choose'] = 'Escolha';
$messages['blog_template_help'] = 'Template que ser� utilizado para mostrar o conte�do do blog. Esta lista inclui templates globais mais todos os templates instalados somente para este blog';
$messages['use_read_more'] = 'Use o link "mais..." nos artigos';
$messages['use_read_more_help'] = 'Se habilitado, somente o texto digitado como "Texto" na caixa de texto ser� mostrado na p�gina principal. Para acessar o restante do artigo, um link "mais..." ser� adicionado a cada artigo';
$messages['enable_wysiwyg'] = 'Habilitar o editor visual para os artigos';
$messages['enable_wysiwyg_help'] = 'Habilitar um editor mais poderoso, editor visual para HTML. O editor funciona somente no Internet Explorer 5.5 ou posterior ou Mozilla 1.3 ou posterior';
$messages['enable_comments'] = 'Habilitar coment�rios por default';
$messages['enable_comments_help'] = 'Habilitar coment�rios para todos os artigos por default. Coment�rios podem ainda ser habilitados/desabilitados para certos artigos na cria��o dos mesmos ou na edi��o dos j� existentes';
$messages['show_future_posts'] = 'Mostrar os futuros artigos no calend�rio';
$messages['show_future_posts_help'] = 'Se os artigos que t�m uma data no futuro devem aparecer no calend�rio e ficar vis�vel para os usu�rios';
$messages['comments_order'] = 'Ordem do coment�rios';
$messages['comments_order_help'] = 'Ordem na qual os coment�rios devem ser mostrados na p�gina principal';
$messages['oldest_first'] = 'Mais antigos primeiro';
$messages['newest_first'] = 'Mais recentes primeiro';
$messages['categories_order'] = 'Ordem das categorias';
$messages['categories_order_help'] = 'Ordem na qual as categorias devem ser mostradas na p�gina principal';
$messages['most_recent_updated_first'] = 'Mais recentemente atualizadas primeiro';
$messages['alphabetical_order'] = 'Ordem alfab�tica';
$messages['reverse_alphabetical_order'] = 'Ordem alfab�tica reversa';
$messages['most_articles_first'] = 'Artigos mais lidos primeiro';
$messages['link_categories_order'] = 'Ordem das categorias de links';
$messages['link_categories_order_help'] = 'Ordem na qual as categorias de links devem aparecer na p�gina principal';
$messages['most_links_first'] = 'Links mais visitados primeiro';
$messages['most_links_last'] = 'Links mais visitados por �ltimo';
$messages['time_offset'] = 'Diferen�a de hor�rio';
$messages['time_offset_help'] = 'Diferen�a de hor�rio em horas que ser� adicionada dinamicamente para cada data e hora no blog';
$messages['close'] = 'Fechado';
$messages['select'] = 'Escolha';
$messages['error_updating_settings'] = 'Houve erro na atualiza��o das configura��es do blog. Verifique os dados e tente novamente';
$messages['error_invalid_number'] = 'O n�mero n�o est� correto';
$messages['error_incorrect_time_offset'] = 'A diferen�a de hor�rio n�o � v�lida';
$messages['blog_settings_updated_ok'] = 'Configura��es do blog atualizadas com sucesso';

// user settings
$messages['username_help'] = 'Nome de usu�rio p�blico. N�o pode ser alterado';
$messages['full_name'] = 'Nome completo';
$messages['full_name_help'] = 'Nome completo';
$messages['password_help'] = 'Digite e cofirme uma nova senha, ou deixe em branco para n�o mudar';
$messages['confirm_password'] = 'Confirme a senha';
$messages['email'] = 'e-mail';
$messages['email_help'] = 'Endere�o de e-mail para onde as notifica��es ser�o enviadas';
$messages['bio'] = 'Sua biografia';
$messages['bio_help'] = 'Uma descri��o mais detalhada sobre voc� pode ser colocada aqui';
$messages['picture'] = 'Foto';
$messages['user_picture_help'] = 'Escolha uma das fotos dispon�veis neste blog para represent�-lo';
$messages['error_invalid_password'] = 'A senha n�o est� correta. Certifique-se de que ela n�o seja muito curta';
$messages['error_passwords_dont_match'] = 'As senhas n�o batem';
$messages['error_incorrect_email_address'] = 'O endere�o de e-mail n�o est� correto';
$messages['error_updating_user_settings'] = 'Houve erro na atualiza��o das suas configura��es de usu�rio. Verifique os dados e tente novamente';
$messages['user_settings_updated_ok'] = 'Configura��es de usu�rio atualizadas com sucesso';
$messages['resource'] = 'Recurso';

// plugin centre
$messages['identifier'] = 'Identificador';
$messages['error_plugins_disabled'] = 'Os plugins est�o desabilitados.';

// blog users
$messages['revoke_permissions'] = 'Remover permiss�es';
$messages['error_no_users_selected'] = 'N�o h� usu�rios selecionados';
$messages['user_removed_from_blog_ok'] = 'O usu�rio "%s" n�o tem mais permiss�o para acessar este blog';
$messages['users_removed_from_blog_ok'] = '%s usu�rios n�o t�m mais permiss�o para acessar este blog';
$messages['error_removing_user_from_blog'] = 'Houve erro na remo��o do acesso a este blog para o usu�rio "%s"';
$messages['error_removing_user_from_blog2'] = 'Houve erro na remo��o do acesso a este blog para o usu�rio com identificador "%s"';

// new blog user
$messages['new_blog_username_help'] = 'Nome de usu�rio para a pessoa � qual voc� quer dar acesso a este blog. Novos usu�rios somente ter�o acesso �s sec��es "Gerenciar" e "Recursos".';
$messages['send_notification'] = 'Enviar notifica��o';
$messages['send_user_notification_help'] = 'Envair uma e-mail de notifica��o para este usu�rio';
$messages['notification_text'] = 'Conte�do da notifica��o';
$messages['notification_text_help'] = 'Texto que ser� inclu�do na mensagem de notifica��o';
$messages['error_adding_user'] = 'Houve erro na concess�o de acesso ao usu�rio. Verifique os dados e tente novamente';
$messages['error_empty_text'] = 'Voc� deve escrever algo';
$messages['error_adding_user'] = 'Houve erro no cadastro do usu�rio. Verifique os dados e tente novamente';
$messages['error_invalid_user'] = 'O usu�rio "%s" n�o � v�lido ou n�o existe';
$messages['user_added_to_blog_ok'] = 'Foi dado acesso a este blog ao usu�rio "%s" com sucesso';

// blog templates
$messages['error_no_templates_selected'] = 'N�o h� templates selecionados';
$messages['error_template_is_current'] = 'O template "%s" n�o pode ser removido porque ele � o template usado no momento';
$messages['error_removing_template'] = 'Houve na remo��o do template "%s"';
$messages['template_removed_ok'] = 'O template "%s" foi removido com sucesso';
$messages['templates_removed_ok'] = '%s templates foram removidos com sucesso';

// new blog template
$messages['template_installed_ok'] = 'Template "%s" cadastrado com sucesso';
$messages['error_installing_template'] = 'Houve erro na instala��o do template "%s"';
$messages['error_missing_base_files'] = 'Faltam alguns dos arquivos do template';
$messages['error_add_template_disabled'] = 'Novos templates n�o podem ser cadastrados porque este recurso foi desabilitado neste site';
$messages['error_must_upload_file'] = 'Nenhum arquivo de template foi carregado';
$messages['error_uploads_disabled'] = 'Uploads foram desabilitados neste site';
$messages['error_no_new_templates_found'] = 'Nenhum novo template foi encontrado';
$messages['error_template_not_inside_folder'] = 'Os arquivos usados no template devem estar dentro de um diret�rio com o mesmo nome do template';
$messages['error_missing_base_files'] = 'Est�o faltando alguns dos arquivos b�sicos do template';
$messages['error_unpacking'] = 'Houve erro na descompacta��o do arquivo';
$messages['error_forbidden_extensions'] = 'O template cont�m arquivos cuja extens�o � proibida';
$messages['error_creating_working_folder'] = 'Houve erro na cria��o do diret�rio tempor�rio para a descompacta��o dos arquivos';
$messages['error_checking_template'] = 'Houve erro na verifica��o do template: %s';
$messages['template_package'] = 'Pacote de template';
$messages['blog_template_package_help']  = 'Use este formul�rio para fazer upload de um arquivo de template, o qual estar� dispon�vel somente para o seu blog. Se n�o � poss�vel fazer upload usando este formul�rio, fa�a o upload manualmente e coloque-o em <b>%s</b>, que � o diret�rio onde os templates s�o armazenados, e clique no bot�o "<b>Procurar templates</b>". O pLog vai procurar no diret�rio e automaticamente cadastrar� qualquer novo template que for encontrado.';
$messages['scan_templates'] = 'Procurar templates';

// site users
$messages['user_status_active'] = 'Ativo';
$messages['user_status_disabled'] = 'Desabilitado';
$messages['user_status_all'] = 'Todos';
$messages['user_status_unconfirmed'] = 'Sem confirma��o';
$messages['error_invalid_user2'] = 'O usu�rio com identificador "%s" n�o existe';
$messages['error_deleting_user'] = 'Houve erro na desabilita��o do usu�rio "%s"';
$messages['user_deleted_ok'] = 'O usu�rio "%s" foi desabilitado com sucesso';
$messages['users_deleted_ok'] = '%s us�rios desabilitados com sucesso';

// create user
$messages['user_added_ok'] = 'O usu�rio "%s" foi cadastrado com sucesso';
$messages['error_incorrect_username'] = 'O nome de usu�rio n�o est� correto ou j� est� em uso';
$messages['user_status_help'] = 'Situa��o atual deste usu�rio';
$messages['user_blog_help'] = 'Blog ao qual este usu�rio ser� associado inicialmente';
$messages['none'] = 'Nenhum';

// edit user
$messages['error_invalid_user'] = 'O identificador do usu�rio n�o est� correto ou o usu�rio n�o existe';
$messages['error_updating_user'] = 'Houve erro na atualiza��o das configura��es do usu�rio. Verifique os dados e tente novamente';
$messages['blogs'] = 'Blogs';
$messages['user_blogs_help'] = 'Blogs dos quais este usu�rio � dono ou aos quais tem acesso';
$messages['site_admin'] = 'Administrador';
$messages['site_admin_help'] = 'Se este usu�rio possui privil�gios de administrador e portanto lhe � permitido ver a �rea "Administra��o" e executar tarefas administrativas';
$messages['user_updated_ok'] = 'Usu�rio "%s" atualizado com sucesso';

// site blogs
$messages['blog_status_all'] = 'Todos';
$messages['blog_status_active'] = 'Ativo';
$messages['blog_status_disabled'] = 'Desabilitado';
$messages['blog_status_unconfirmed'] = 'Sem confirma��o';
$messages['owner'] = 'Dono';
$messages['quota'] = 'Cota';
$messages['bytes'] = 'bytes';
$messages['error_no_blogs_selected'] = 'Nenhum blog foi selecionado para ser desabilitado';
$messages['error_blog_is_default_blog'] = 'O blog "%s" n�o pode ser removido porque ele � o blog default';
$messages['blog_deleted_ok'] = 'Blog "%s" desabilitado com sucesso';
$messages['blogs_deleted_ok'] = '%s blogs removidos com sucesso';
$messages['error_deleting_blog'] = 'Houve erro na desabilita��o do blog "%s"';
$messages['error_deleting_blog2'] = 'Houve erro na desabilita��o do blog com identificador "%s"';

// create blog
$messages['error_adding_blog'] = 'Houve erro no cadastro do blog. Verifique os dados e tente novamente';
$messages['blog_added_ok'] = 'O blog "%s" foi cadastrado com sucesso';

// edit blog
$messages['blog_status_help'] = 'Status do blog';
$messages['blog_owner_help'] = 'Usu�rio que ser� configurado como dono, com controle total sobre as configura��es do blog';
$messages['users'] = 'Usu�rios';
$messages['blog_quota_help'] = 'Cota de recursos em em bytes. Defina 0 para ilimitado ou deixe em branco para que o blog use a cota global';
$messages['blog_users_help'] = 'Usu�rios que t�m acesso a este blog. Escolha um usu�rio da esquerda e mova-o para a lista da direita para dar ao usu�rio acesso a este blog';
$messages['edit_blog_settings_updated_ok'] = 'Blog "%s" atualizado com sucesso';
$messages['error_updating_blog_settings'] = 'Houve erro na atualiza��o do blog "%s"';
$messages['error_incorrect_blog_owner'] = 'O usu�rio escolhido como dono do blog n�o est� correto';
$messages['error_fetching_blog'] = 'Houve erro na recupera��o do blog';
$messages['error_updating_blog_settings2'] = 'Houve erro na atualiza��o do blog. Verifique os dados e tente novamente';
$messages['add_or_remove'] = 'Cadastrar ou remover usu�rios';

// site locales
$messages['locale'] = 'Locales';
$messages['locale_encoding'] = 'Encoding';
$messages['locale_deleted_ok'] = 'Locale "%s" removido com sucesso';
$messages['error_no_locales_selected'] = 'Nenhum locale foi selecionado para remo��o';
$messages['error_deleting_only_locale'] = 'O locale n�o pode ser removido porque ele � o �nico existente no sistema';
$messages['locales_deleted_ok']= '%s locales removidos com sucesso';
$messages['error_deleting_locale'] = 'Houve erro na remo��o do locale "%s"';
$messages['error_locale_is_default'] = 'o locale "%s" n�o pode ser removido porque ele � o locale default para novos blogs';

// add locale
$messages['error_invalid_locale_file'] = 'O arquivo de local n�o � v�lido';
$messages['error_no_new_locales_found'] = 'Nenhum arquivo novo de local foi encontrado';
$messages['locale_added_ok'] = 'Locale "%s" cadastrado com sucesso';
$messages['error_saving_locale'] = 'Houve erro no cadastro do novo locale';
$messages['scan_locales'] = 'Procurar locales';
$messages['add_locale_help'] = 'Use este formul�rio para fazer upload de um arquivo de locale. Se n�o � poss�vel fazer upload usando este formul�rio, fa�a o upload manualmente e coloque-o em <b>./locales/</b>, que � o diret�rio onde os arquivos de locale s�o armazenados, e clique no bot�o "<b>Procurar locales</b>". O pLog vai procurar no diret�rio e automaticamente cadastrar� qualquer novo arquivo de locale que for encontrado.';

// site templates
$messages['error_template_is_default'] = 'O template "%s" n�o pode ser removido porque ele � o template default para novos blogs';

// add template
$messages['global_template_package_help'] = 'Use este formul�rio para fazer upload de um arquivo de template, o qual estar� dispon�vel para todos os blogs deste site. Se n�o � poss�vel fazer upload usando este formul�rio, fa�a o upload manualmente e coloque-o em <b>%s</b>, que � o diret�rio onde os templates s�o armazenados, e clique no bot�o "<b>Procurar templates</b>". O pLog vai procurar no diret�rio e automaticamente cadastrar� qualquer novo template que for encontrado.';

$messages['scan_templates'] = 'Procurar templates';

// global settings
$messages['site_config_saved_ok'] = 'Configura��es do site salvas com sucesso';
$messages['error_saving_site_config'] = 'Houve erro no cadastro das configura��es do site';
/// general settings
$messages['help_comments_enabled'] = 'Habilita ou desabilita coment�rios para novos blogs por default [Default = Sim]';
$messages['help_beautify_comments_text'] = 'Se estiver habilitado, coment�rios postados por usu�rios ser�o formatados com a adi��o de par�grafos e com auto-linking para todas as URLs [Default = Sim]';
$messages['help_temp_folder'] = 'Diret�rio que o pLog pode usar para gravar seus arquivos tempor�rios, tais como templates compilados etc. Use um diret�rio fora da estrutura do servidor WEB para maior seguran�a [Default = ./tmp]';
$messages['help_base_url'] = 'URL base onde este blog encontra-se instalado';
$messages['help_subdomains_enabled'] = 'Habilita ou desabilita sub-dom�nios. Veja a documenta��o para mais informa��es � respeito de sub-dom�nios [Default = N�o]';
$messages['help_subdomains_base_url'] = 'Quando sub-dom�nios est�o habilitados, esta URL base � usada ao inv�s da base_url. Use {blogname} para obter o nome do blog e {username} para obter o nome do dono do blog para gerar um link para o blog. (Por exemplo http://{blogname}.seudominio.com.br})';
$messages['help_include_blog_id_in_url'] = 'S� faz setido quando sub-dom�nios est�o habilitados e URLs "normais" est�o habilitadas; for�a URLs geradas internamentte a n�o terem o par�metro "blogID". N�o mude isso a menos que voc� saiba o que est� fazendo [Default = Sim]';
$messages['help_script_name'] = 'Configure isto se voc� precisa renomear o index.php para algum outro nome.';
$messages['help_show_posts_max'] = 'N�mero m�ximo de artigos mostrados na p�gina principal. S� aplic�vel para novos blogs [Default = 15]';
$messages['help_recent_posts_max'] = 'N�mero m�ximo de artigos recentes mostrados na p�gina principal. S� aplic�vel para novos blogs [Default = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Se o recurso que permite salvar rascunhos via JavaScript e XmlHttpRequest est� habilitado [Default = Sim]';
$messages['help_locale_folder'] = 'Diret�rio onde os arquivos de locale s�o armazenados [Default = ./locale]';
$messages['help_default_locale'] = 'Configura��o do idioma default para novos blogs [Default = en_UK]';
$messages['help_default_blog_id'] = 'Blog default que ser� mostrado se nenhum outro for especificado [Default = 1]';
$messages['help_default_time_offset'] = 'Diferen�a de hor�rio default para novos blogs [Default = 0]';
$messages['help_html_allowed_tags_in_comments'] = 'Lista separada por espa�os das TAGs HTML que s�o permitidas nos coment�rios [Default = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'Habilita ou desabilita o recurso de salvar referrers para o banco de dados. Configure como desabilitado para maior performance [Default = Sim]';
$messages['help_show_more_enabled'] = 'Habilita ou desabilita o recurso "mais..." por default para novos blogs [Default = Sim]';
$messages['help_update_article_reads'] = 'Habilita ou desabilita a atualiza��o do contador de vezes que um artigo foi lido. Configure como desabilitado para maior performance [Default = Sim]';
$messages['help_update_cached_article_reads'] = 'Habilita ou desabilita a atualiza��o do contador de vezes que um artigo foi lido, mesmo quando o recurso de caching foi habilitado [Default = Sim]';
$messages['help_xmlrpc_ping_enabled'] = 'Habilita ou desabilita o envio de pings do tipo XMLRPC para sites que suportam este recurso [Default = Sim]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Habilita ou desabilita este recurso por default na postagem ou atualiza��o de artigos [Default = Sim]';
$messages['help_xmlrpc_ping_hosts'] = 'URL apontando para interface XMLRPC de sites que suportam a especifica��o de ping do tipo XMLRPC. Coloque cada URL em uma linha [Default = Sim]';
$messages['help_trackback_server_enabled'] = 'Habilita ou desabilita o recurso de receber trackback [Default = Sim]';
$messages['help_htmlarea_enabled'] = 'Habilita ou desabilita o editor WYSIWYG por default para novos blogs [Default = Sim]';
$messages['help_plugin_manager_enabled'] = 'Habilita ou desabilita plugins [Default = Sim]';
$messages['help_minimum_password_length'] = 'Tamanho m�nimo das senhas [Default = 4]';
$messages['help_xhtml_converter_enabled'] = 'Se habilitado, o pLog vai tentar converter todo o c�digo HTML para XHTML [Default = Sim]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'Se habilitado, o pLog vai tentar com mais afinco gerar c�digo XHTML a partir do HTML, mas isto ser� mais propenso a erros [Default = N�o]';
$messages['help_session_save_path'] = 'Use esta configura��o para mudar o diret�rio onde o pLog armazena seus dados de sess�o, atrav�s da fun��o session_save_path() do PHP. Certifique-se de que o diret�rio pode ser acessado pelo servidor WEB. Deixe em branco para usar o diret�rio default do PHP [Default = (vazio)]';
// summary settings
$messages['help_summary_page_show_max'] = 'N�mero de itens que ser�o mostrados na p�gina de resumo. Esta configura��o controla todas as listas na p�gina de resumos (artigos recentes, blogs mais ativos etc) [Default = 10]';
$messages['help_summary_blogs_per_page'] = 'N�mero de blogs por p�gina na se��o "Lista de blogs" [Default = 25]';
$messages['help_forbidden_usernames'] = 'Lista dos usu�rios que n�o podem ser registrados [Default = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = 'Restringe para apenas um blog por conta de e-mail [Default = N�o]';
$messages['help_summary_show_agreement'] = 'Mostrar o texto com os termos de servi�o e fazer o usu�rio aceit�-lo antes de proceder no processo de registro [Default = Sim]';
$messages['help_need_email_confirm_registration'] = 'For�ar o usu�rio a confirmar o registro clicando num link enviado num e-mail para a conta dele [Default = Sim]';
$messages['help_summary_disable_registration'] = 'Se � permitido aos us�rios registrar novos blogs neste site [Default = Sim]';
// templates
$messages['help_template_folder'] = 'Diret�rio onde templates s�o armazenados [Default = ./templates]';
$messages['help_default_template'] = 'Template default para novos blogs [Default = Standard]';
$messages['help_users_can_add_templates'] = 'Permite aos usu�rios fazerem upload dos seus pr�prios templates [Default = Sim]';
$messages['help_template_compile_check'] = 'Se desabilitado, o Smarty vai verificar todas as vezes se um template foi alterado e, em caso afirmativo, usar� a nova vers�o. Configure isto como desabilitado para maior performance [Default = Sim]';
$messages['help_template_cache_enabled'] = 'Habilita o cache de template. Se habilitado, a vers�o em cache da p�gina ser� usada sempre que poss�vel. Nenhum dado precisar� ser recuperado do banco de dados e os templates n�o precisar�o ser recompilados [Default = Sim]';
$messages['help_template_cache_lifetime'] = 'Tempo de vida em segundos do cache. Configure para -1 para for�ar o cache a nunca expirar. Se configurado para 0, o cache ser� desabilitado, mas � recomendado configurar o template_cache_enable para "N�o" para desabilitar o cache [Default = 0]';
$messages['help_template_http_cache_enabled'] = 'Habilita suporte para requisi��es HTTP condicionais. Se habilitado, o pLog vai pegar o cabe�alho HTTP "If-Modified-Since" em conta e enviar� conte�do somente se estritamente necess�rio. Habilite isto para economizar banda [Default = N�o]';
$messages['help_allow_php_code_in_templates'] = 'Permite incluir c�digo PHP nativo nos templates do Smarty entre blocos {php}...{/php} [Default = N�o]';
// urls
$messages['help_request_format_mode'] = 'Selecione um dos formatos de URL dispon�veis. Se estiver usando URLs personalizadas, certifique-se de configurar os itens abaixo [Default = Simples]';
$messages['plain'] = 'Simples';
$messages['search_engine_friendly'] = 'Pesquisa amig�vel';
$messages['custom_url_format'] = 'URLs personalizadas';
$messages['help_permalink_format'] = 'Formato dos permalinks para URLs personalizadas [Default = /blog/{blogname}/{catname}/{year}/{month}/{day}{postname}$]';
$messages['help_category_link_format'] = 'Formato dos links para categorias para URLs personalizadas [Default = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'Formato dos links para blogs para URLs personalizadas [Default = /blog/{blogname}$]';
$messages['help_archive_link_format'] = 'Formato dos links para arquivos para URLs personalizadas [Default = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'Formato para artigos postados por usu�rios para URLs personalizadas [Default = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'Formato dos links das p�ginas de trackbacks para URLs personalizadas [Default = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'Formato dos links para as p�ginas de template est�ticas personalizadas para URLs personalizadas [Default = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'Formato dos links para �lbums de recursos para URLs personalizadas [Default = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'Formato dos links para p�ginas de recursos com arquivos para URLs personalizadas [Default = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'Formato dos links para visualiza��o de recursos para URLs personalizadas [Default = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'Formato dos links para visualiza��o de recursos de tamanho m�dio para URLs personalizadas [Default = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'Formato dos links para arquivos para URLs personalizadas [Default = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = 'Na verifica��o de endere�os de e-mail, executar algumas verfica��es b�sicas para ver se um registro do tipo MX existe no dom�nio informado e, em caso afirmativo, se o endere�o de e-mail � uma caixa postal v�lida [Default = N�o]';
$messages['help_email_service_enabled'] = 'Habilita ou desabilita envio de e-mails [Default = Sim]';
$messages['help_post_notification_source_address'] = 'Endere�o de e-mail que vai aparecer no campo "De:" dos e-mails enviados pelo pLog [Default = noreply@your.host.com]';
$messages['help_email_service_type'] = 'Qual sistema usar para enviar e-mails [Default = PHP]';
$messages['help_smtp_host'] = 'Se for usar o sistema SMTP para enviar e-mails, coloque aqui a identifica��o do servidor SMTP que ser� usado para enviar as mensagens [Default = (vazio)]';
$messages['help_smtp_port'] = 'Se o servi�o SMTP est� atendendo num porto diferente de 25, coloque seu n�mero [Default = (vazio)]';
$messages['help_smtp_use_authentication'] = 'Habilite isto se o servidor SMTP precisa de autentica��o b�sica [Default = N�o]';
$messages['help_smtp_username'] = 'Se o servidor SMTP precisa de autentica��o, coloque aqui o nome de usu�rio correto [Default = (vazio)]';
$messages['help_smtp_password'] = 'Se o servidor SMTP precisa de autentica��o, coloque aqui a senha do usu�rio definido acima [Default = (vazio)]';
// helpers
$messages['help_path_to_tar'] = 'Caminho do comando "tar", necess�rio para descompactar arquivos de template nos formatos .tar.gz ou .tar.bz2 [Default = /bin/tar]';
$messages['help_path_to_gzip'] = 'Caminho do comando "gzip", necess�rio para descompactar arquivos de template no formato .tar.gz [Default = /bin/gzip]';
$messages['help_path_to_bz2'] = 'Caminho do comando "bzip2", necess�rio para descompactar arquivos de template no formato .tar.bz2 [Default = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = 'Caminho do comando "unzip", necess�rio para descompactar arquivos de template no formato .zip [Default = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'Usar a vers�o nativa do PHP para descompactar os arquivos .zip  [Default = N�o]';
// uploads
$messages['help_uploads_enabled'] = 'Se � permitido a usu�rios fazer upload de arquivos. Isto afeta a se��o de recursos e o upload de templates e locales [Default = Sim]';
$messages['help_maximum_file_upload_size'] = 'Tamanho m�ximo de arquivo permitido em bytes. Isto nunca ser� mais alto do que o pr�prio limite do PHP [Default = 2000000]';
$messages['help_upload_forbidden_files'] = 'Lista dos tipos de arquivos, separados por espa�o, aos quais n�o � permitido fazer upload. O uso de \'*\' e \'?\' � permitido [Default = *.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'Habilita ou desabilita acesso aos blogs via XMLRPC [Default = Sim ]';
$messages['help_rdf_enabled'] = 'Habilita o syndication do conte�do via Atom ou RSS [Default = Sim]';
$messages['help_default_rss_profile'] = 'Vers�o default de RSS ou Atom usada para fazer o syndicate do conte�do, a menos que outra seja especificada [Default = RSS 1.0]';
// security
$messages['help_security_pipeline_enabled'] = 'Habilita ou desabilita o pipeline de seguran�a e todos os filtros relacionados. Isto tamb�m afeta plugins que registram novos filtros [Default = Sim]';
$messages['help_ip_address_filter_enabled'] = 'Habilita ou desabilita o filtro de endere�os de IP. O pipeline de seguran�a tamb�m precisa estar habilitado para que este recurso funcione [Default = N�o]';
$messages['help_content_filter_enabled'] = 'Habilita ou desabilita o filtro de conte�do baseado em express�es regulares. A seguran�a de pipeline tamb�m deve estar habilitada para que este recurso funcione [Default = N�o]';
$messages['help_maximum_comment_size'] = 'Tamanho m�ximo em bytes que um coment�rio pode ter [Default = 0]';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = 'Habilita ou desabilita o filtro do tipo Bayesian para uma melhor filtragem autom�tica contra spam [Default = Sim]';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'Limite m�ximo antes que um coment�rio passe a ser considerado um spam [Default = 0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'Limite m�nimo ap�s o qual um artigo passa a ser considerado como n�o-spam [Default = 0.2]';
$messages['help_bayesian_filter_min_length_token'] = 'Tamanho m�nimo de uma token para que seja considerada significativa para o filtro de Bayesian [Default = 3]';
$messages['help_bayesian_filter_max_length_token'] = 'Tamanho m�ximo de uma token para que seja considerada significativa para o filtro de Bayesian [Default = 100]';
$messages['help_bayesian_filter_number_significant_tokens'] = 'N�mero de tokens significativas [Default = 15]';
$messages['help_bayesian_filter_spam_comments_action'] = 'O que fazer com coment�rios que s�o considerados spam. Configure para "Eliminar" somente quando seu filtro estiver bem treinado [Default = Manter no banco de dados marcado como "Spam"]';
$messages['keep_spam_comments'] = 'Manter no banco de dados marcado como "Spam"';
$messages['throw_away_spam_comments'] = 'Eliminar (n�o salvar)';
// resources
$messages['help_resources_enabled'] = 'Habilita ou desabilita recursos [Default = Sim]';
$messages['help_resources_folder'] = 'Diret�rio onde os arquivos de recursos ser�o mantidos. Deixe fora da estrutura do servidor WEB para aumentar a seguran�a [Default = ./gallery]';
$messages['help_thumbnail_method'] = 'M�todo usado para gerar imagens em miniaturas (thumbnails). Se estiver usando o PHP, � necess�rio suporte para a biblioteca GD [Default = GD]';
$messages['help_path_to_convert'] = 'Caminho para a ferramenta de convers�o do pacote "ImageMagick". Obrigat�rio se o m�todo para criar thumbnails � o "ImageMagick" [Default = /usr/bin/convert]';
$messages['help_thumbnail_format'] = 'Formato no qual os thumbnails ser�o salvos';
$messages['help_thumbnail_height'] = 'Altura default para thumbnails pequenos [Default = 120]';
$messages['help_thumbnail_width'] = 'Largura default para thumbnails pequenos [Default = 120]';
$messages['help_medium_size_thumbnail_height'] = 'Altura default para thumbnails m�dios [Default = 480]';
$messages['help_medium_size_thumbnail_width'] = 'Largura default para thumbnails m�dios [Default = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'Manter as propor��es na gera��o de thumbnails. Pode acabar gerando thumbnails maiores que o tamanho especificado acima mas a qualidade � melhor [Default = Sim]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'For�ar o pLog a usar somente fun��es GD1 [Default = N�o]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'Algoritmo usado para suavizar thumbnails. Usado somente quando o m�todo de gera��o de thumbnails � GD [Default = PHP Imagecopyresampled]';
$messages['help_resources_quota'] = 'Cota de recursos globais para blogs em bytes (por exemplo, 5242880 bytes = 5MB) [Default = 0]';
$messages['help_resource_server_http_cache_enabled'] = 'Habilita suporte para o cabe�alho "If-Modified-Since" e requisi��es de HTTP condicionais. Habilite para aumentar a economia de banda [Default = N�o]';
$messages['help_resource_server_http_cache_lifetime'] = 'Tempo em microsegundos que os clientes devem usar a vers�o em cache dos recursos [Default = 9999999]';
// search
$messages['help_search_engine_enabled'] = 'Habilita ou desabilita o sistema de pesquisa [Default = Sim]';
$messages['help_search_in_custom_fields'] = 'Pesquisar tamb�m nos campos personalizados [Default = Sim]';
$messages['help_search_in_comments'] = 'Pesquisar tamb�m nos coment�rios [Default = Sim]';

// cleanup
$messages['purge'] = 'Eliminar';
$messages['cleanup_spam'] = 'Eliminar spam';
$messages['cleanup_spam_help'] = 'Isto vai remover todos os coment�rios que foram marcados como spam pelos usu�rios. N�o ser� poss�vel recuper�-los uma vez que eles tenham sido removidos';
$messages['spam_comments_purged_ok'] = 'Coment�rios do tipo spam eliminados com sucesso';
$messages['cleanup_posts'] = 'Eliminar artigos';
$messages['cleanup_posts_help'] = 'Isto vai remover todos os artigos que foram apagados pelos usu�rios (marcados como "Removido"). N�o ser� poss�vel recuper�-los uma vez que eles tenham sido removidos';
$messages['posts_purged_ok'] = 'Artigos removidos com sucesso';

/// summary ///
// front page
$messages['summary'] = 'Resumo';
$messages['register'] = 'Registrar';
$messages['summary_welcome'] = 'Bem-vindo!';
$messages['summary_most_active_blogs'] = 'Blogs mais ativos';
$messages['summary_most_commented_articles'] = 'Artigos mais comentados';
$messages['summary_most_read_articles'] = 'Artigos mais lidos';
$messages['password_forgotten'] = 'Esquecer sua senha?';
$messages['summary_newest_blogs'] = 'Blogs mais recentes';
$messages['summary_latest_posts'] = '�ltimos artigos';
$messages['summary_search_blogs'] = 'Pesquisar blogs';

// blog list
$messages['updated'] = 'Atualizado';
$messages['total_reads'] = 'Total';

// blog profile
$messages['blog'] = 'Blog';
$messages['latest_posts'] = '�ltimos artigos';

// registration
$messages['register_step0_title'] = 'Aceita��o dos termos de servi�o';
$messages['decline'] = 'Recusar';
$messages['accept'] = 'Aceitar';
$messages['read_service_agreement'] = 'Por favor, leia os termos deste servi�o e clique no bot�o "Aceitar" se voc� concorda';
$messages['register_step1_title'] = 'Criar um usu�rios [1/4]';
$messages['register_step1_help'] = 'Primeiro voc� precisa um novo usu�rio para ter um blog. Este usu�rio ser� o dono do blog e ter� acesso a todas as suas funcionalidades';
$messages['register_next'] = 'Pr�ximo';
$messages['register_back'] = 'Anterior';
$messages['register_step2_title'] = 'Criar um novo blog [2/4]';
$messages['register_blog_name_help'] = 'Nome do seu novo blog';
$messages['register_step3_title'] = 'Escolha um template [3/4]';
$messages['step1'] = 'Passo 1';
$messages['step2'] = 'Passo 2';
$messages['step3'] = 'Passo 3';
$messages['register_step3_help'] = 'Escolha um dos template dispon�veis como o default para o seu blog. Se voc� n�o gostar dele mais tarde, poder� troc�-lo';
$messages['error_must_choose_template'] = 'Escolha um template';
$messages['select_template'] = 'Escolha um template';
$messages['register_step5_title'] = 'Parab�ns! [4/4]';
$messages['finish'] = 'Terminado';
$messages['register_need_confirmation'] = 'Uma mensagem de e-mail incluindo a confirma��o foi enviada para o seu endere�o de e-mail. Clique no link assim que voc� receber a mensagem para come�ar a usar o blog!';
$messages['register_step5_help'] = 'Parab�ns, seu novo usu�rio e blog forma criados com sucesso!';
$messages['register_blog_link'] = 'Se voc� quiser dar uma olhada no seu novo blog, pode acess�-lo aqui: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'Se voc� prefere come�ar a postar agora, clique neste link para ir para a <a href="admin.php">Interface administrativa</a>';
$messages['register_error'] = 'Houve um erro durante o processo';
$messages['error_registration_disabled'] = 'Registros neste novo blog est�o desabilitadas';
// registration article topic and text
$messages['register_default_article_topic'] = 'Parab�ns!';
$messages['register_default_article_text'] = 'Se voc� pode ler este artigo, significa que o processo de registro foi efetuado com sucesso e que voc� j� pode come�ar a "blogar"';
$messages['register_default_category'] = 'Geral';
// confirmation email
$messages['register_confirmation_email_text'] = 'Clique no link abaixo para ativar seu blog:

%s

Tenha um bom dia';
$messages['error_invalid_activation_code'] = 'O c�digo de confirma��o � inv�lido';
$messages['blog_activated_ok'] = 'Parab�ns, seu novo usu�rio e blog foram validados com sucesso!';
// forgot your password?
$messages['reset_password'] = 'Restaurar sua senha';
$messages['reset_password_username_help'] = 'Nome do usu�rio cuja senha voc� quer restaurar';
$messages['reset_password_email_help'] = 'Endere�o de e-mail que foi usado para registrar este usu�rio';
$messages['reset_password_help'] = 'Use este formul�rio para restaurar a senha do seu usu�rio que voc� n�o se lembra. Digite o nome do usu�rio cuja senha voc� deseja restaurar, como tamb�m o endere�o de e-mail que foi usado para registrar este usu�rio';
$messages['error_resetting_password'] = 'Houve erro na restaura��o da senha. Verifique os dados e tente novamente';
$messages['reset_password_error_incorrect_email_address'] = 'O endere�o de e-mail n�o est� correto ou n�o foi o endere�o utilizado para registrar este usu�rio';
$messages['password_reset_message_sent_ok'] = 'Um mensagem com um link foi enviada para o seu endere�o de e-mail. Clique no link para restaurar sua senha';
$messages['error_incorrect_request'] = 'Os par�metro na URL n�o est�o corretos';
$messages['change_password'] = 'Definir nova senha';
$messages['change_password_help'] = 'Digite e confirme sua nova senha';
$messages['new_password'] = 'Nova senha';
$messages['new_password_help'] = 'Digite aqui sua nova senha';
$messages['password_updated_ok'] = 'Sua senha foi alterada com sucesso';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'Esta p�gina parece simples e sem estilo porque voc� est� usando um browser n�o-padr�o. Para v�-la bem melhor, por favor visite <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">atualize</a> seu browser para um que seja compat�vel com os padr�es da WEB. � gratuito e n�o d�i.';
$messages['jump_to_navigation'] = 'Ir para a navega��o.';
$messages['comment_email_never_display'] = 'Linhas e par�grafos com quebra autom�tica, endere�os de -mail nunca s�o mostrados.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> allowed: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = 'A <acronym title="Uniform Resource Identifier">URI</acronym> para fazer trackback para esta entrada �: ';
$messages['previous_post'] = 'Anterior';
$messages['next_post'] = 'Pr�ximo';
$messages['comment_default_title'] = '(Sem t�tulo)';
$messages['guestbook'] = 'Livro de visita';
$messages['trackbacks'] = 'Trackbacks';
$messages['menu'] = 'Menu';
$messages['albums'] = '�lbums';
$messages['admin'] = 'Administra��o';
?>
