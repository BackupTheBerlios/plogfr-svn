<?php
//Translated by C R Zamana (czamana@gmail.com)

// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'iso-8859-1';
$messages['locale_description'] = 'pLog em Português do Brasil';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %Hh%Mmin';

// days of the week
$messages['days'] = Array( 'domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sábado' );
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
$messages['months'] = Array( 'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro' );
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
$messages['comments'] = 'Comentários';
$messages['comment on this'] = 'Comente';
$messages['my_links'] = 'meus links';
$messages['archives'] = 'arquivos';
$messages['search'] = 'pesquisa';
$messages['calendar'] = 'calendário';
$messages['search_s'] = 'Pesquisa';
$messages['search_this_blog'] = 'Pesquisar este blog:';
$messages['about_myself'] = 'Quem sou eu?';
$messages['permalink_title'] = 'Links permanentes para os arquivos';
$messages['permalink'] = 'Permalink';
$messages['posted_by'] = 'Postado por';
$messages['reply'] = 'Resposta';

// add comment form
$messages['add_comment'] = 'Comentar';
$messages['comment_topic'] = 'Tópico';
$messages['comment_text'] = 'Texto';
$messages['comment_username'] = 'Seu nome';
$messages['comment_email'] = 'Seu endereço de e-mail (se houver)';
$messages['comment_url'] = 'Sua página pessoal (se houver)';
$messages['comment_send'] = 'Enviar';
$messages['comment_added'] = 'Comentário feito!';
$messages['comment_add_error'] = 'Erro no envio do comentário';
$messages['article_does_not_exist'] = 'O artigo não existe';
$messages['no_posts_found'] = 'Nenhum artigo foi encontrado';
$messages['user_has_no_posts_yet'] = 'O usuário ainda não tem artigos postados';
$messages['back'] = 'Voltar';
$messages['post'] = 'artigo';
$messages['trackbacks_for_article'] = 'Trackbacks para o artigo: ';
$messages['trackback_excerpt'] = 'Trecho';
$messages['trackback_weblog'] = 'Weblog';
$messages['search_results'] = 'Pesquisar os resultados';
$messages['search_matching_results'] = 'Os seguintes artigos atendem ao critério: ';
$messages['search_no_matching_posts'] = 'Nenhum artigo foi encontrado';
$messages['read_more'] = '(Mais)';
$messages['syndicate'] = 'Syndicate';
$messages['main'] = 'Principal';
$messages['about'] = 'Sobre';
$messages['download'] = 'Download';

////// error messages /////
$messages['error_fetching_article'] = 'O artigo que você especificou não foi encontrado.';
$messages['error_fetching_articles'] = 'Os artigos não puderam ser obtidos.';
$messages['error_trackback_no_trackback'] = 'Nenhum trackback foi encontrado para o artigo.';
$messages['error_incorrect_article_id'] = 'O identificador do artigo não é correto.';
$messages['error_incorrect_blog_id'] = 'O identificador do blog não está correto.';
$messages['error_comment_without_text'] = 'Você deve escrever algo.';
$messages['error_comment_without_name'] = 'Você deve informar seu nome ou apelido.';
$messages['error_adding_comment'] = 'Houve erro no cadastro do comentário.';
$messages['error_incorrect_parameter'] = 'Parâmetro incorreto.';
$messages['error_parameter_missing'] = 'Falta um parâmetro no pedido.';
$messages['error_comments_not_enabled'] = 'O recurso de comentários foi desabilitado neste site.';
$messages['error_incorrect_search_terms'] = 'Os termos da pesquisa não são válidos';
$messages['error_no_search_results'] = 'Nenhum item encontrado de acordo com os termos da pesquisa';
$messages['error_no_albums_defined'] = 'Não há álbums disponíveis neste blog.';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Entrar';
$messages['welcome_message'] = 'Bem-vindo ao pLog';
$messages['error_incorrect_username_or_password'] = 'Usuário ou senha incorretos.';
$messages['error_dont_belong_to_any_blog'] = 'Você ainda não pertence a qualquer blog.';
$messages['logout_message'] = 'Sua sessão foi encerrada com sucesso.';
$messages['logout_message_2'] = 'Clique <a href="%1$s">aqui</a> para ir para %2$s</a>.';
$messages['error_access_forbidden'] = 'Acesso negado. Você deve se autenticar primeiro aqui.';
$messages['username'] = 'Usuário';
$messages['password'] = 'Senha';

// dashboard
$messages['dashboard'] = 'Painel';
$messages['recent_articles'] = 'Artigos mais recentes';
$messages['recent_comments'] = 'Comentários mais recentes';
$messages['recent_trackbacks'] = 'Trackbacks mais recentes';
$messages['blog_statistics'] = 'Estatísticas do Blog';
$messages['total_posts'] = 'Total de artigos';
$messages['total_comments'] = 'Total de comentários';
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
$messages['newResourceAlbum'] = 'Novo álbum';
$messages['newResource'] = 'Novo recurso';
$messages['controlCenter'] = 'Central de controle';
$messages['manageSettings'] = 'Configurações';
$messages['blogSettings'] = 'Configurações do blog';
$messages['userSettings'] = 'Configurações de usuário';
$messages['pluginCenter'] = 'Central de plugins';
$messages['Stats'] = 'Estatísticas';
$messages['manageBlogUsers'] = 'Gerenciar usuários do blog';
$messages['newBlogUser'] = 'Novo usuário do blog';
$messages['showBlogUsers'] = 'Usuários do blog';
$messages['manageBlogTemplates'] = 'Templates do blog';
$messages['newBlogTemplate'] = 'Novo template do blog';
$messages['blogTemplates'] = 'Templates do blog';
$messages['adminSettings'] = 'Administração';
$messages['Users'] = 'Usuários';
$messages['createUser'] = 'Criar novo usuário';
$messages['editSiteUsers'] = 'Usuários do site';
$messages['Blogs'] = 'Gerenciar blogs';
$messages['createBlog'] = 'Criar blog';
$messages['editSiteBlogs'] = 'Blogs';
$messages['Locales'] = 'Gerenciar traduções';
$messages['newLocale'] = 'Nova tradução';
$messages['siteLocales'] = 'Traduções do site';
$messages['Templates'] = 'Gerenciar templates';
$messages['newTemplate'] = 'Novo template';
$messages['siteTemplates'] = 'Templates do site';
$messages['GlobalSettings'] = 'Configurações globais';
$messages['editSiteSettings'] = 'Geral';
$messages['summarySettings'] = 'Resumo';
$messages['templateSettings'] = 'Templates';
$messages['urlSettings'] = 'URLs';
$messages['emailSettings'] = 'e-mail';
$messages['uploadSettings'] = 'Uploads';
$messages['helpersSettings'] = 'Ferramentas externas';
$messages['interfacesSettings'] = 'Interfaces';
$messages['securitySettings'] = 'Segurança';
$messages['bayesianSettings'] = 'Filtro de Bayesian';
$messages['resourcesSettings'] = 'Recursos';
$messages['searchSettings'] = 'Pesquisa';
$messages['cleanUpSection'] = 'Limpeza';
$messages['cleanUp'] = 'Limpar';
$messages['editResourceAlbum'] = 'Editar álbum';
$messages['resourceInfo'] = 'Editar recursos';
$messages['editBlog'] = 'Editar blog';
$messages['Logout'] = 'Sair';

// new post
$messages['topic'] = 'Tópico';
$messages['topic_help'] = 'Título do artigo';
$messages['text'] = 'Texto';
$messages['text_help'] = 'Texto do artigo. Esta parte sempre aparecerá na página';
$messages['extended_text'] = 'Restante do texto';
$messages['extended_text_help'] = 'Restante do texto do artigo. Esta parte pode opcionalmente aparecer somente na página do artigo ou integralmente já na página principal. Veja as configurações do blog para maiores informações';
$messages['post_slug'] = 'Slug';
$messages['post_slug_help'] = 'O slug será utilizado para gerar links permanentes';
$messages['date'] = 'Data';
$messages['post_date_help'] = 'Data na qual este artigo será publicado';
$messages['status'] = 'Status';
$messages['post_status_help'] = 'Escolha um destes status';
$messages['post_status_published'] = 'Publicado';
$messages['post_status_draft'] = 'Rascunho';
$messages['post_status_deleted'] = 'Removido';
$messages['categories'] = 'Categorias';
$messages['post_categories_help'] = 'Escolha uma ou mais destas categorias';
$messages['post_comments_enabled_help'] = 'Habilitar comentários';
$messages['send_notification_help'] = 'Notificação sobre novos comentários';
$messages['send_trackback_pings_help'] = 'Enviar trackbacks';
$messages['send_xmlrpc_pings_help'] = 'Enviar pings do tipo XMLRPC';
$messages['save_draft_and_continue'] = 'Salvar como rascunho';
$messages['preview'] = 'Visualizar';
$messages['add_post'] = 'Publicar!';
$messages['error_saving_draft'] = 'Houve erro no cadastramento do rascunho';
$messages['draft_saved_ok'] = 'Rascunho salvo com sucesso';
$messages['error_sending_request'] = 'Houve erro no envio da requisição';
$messages['error_no_category_selected'] = 'Escolha pelo menos uma categoria';
$messages['error_missing_post_topic'] = 'Escreva um título para o artigo';
$messages['error_missing_post_text'] = 'Escreva algo no artigo';
$messages['error_adding_post'] = 'Houve erro no cadastramento do artigo';
$messages['post_added_not_published'] = 'Artigo cadastrado com sucesso mas não publicado';
$messages['post_added_ok'] = 'Artigo cadastrado com sucesso.';
$messages['send_notifications_ok'] = 'Uma notificação será enviada cada vez que houver um novo comentário ou trackback.';

// send trackbacks
$messages['error_sending_trackbacks'] = 'Houve erro no envio dos seguintes trackbacks';
$messages['send_trackbacks_help'] = 'Escolha aquelas URLs para as quais você quer enviar pings trackback. Certifique-se que o site suporta o recurso de trackback.';
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
$messages['actions'] = 'Ações';
$messages['all'] = 'Todos';
$messages['category_all'] = 'Todas';
$messages['error_incorrect_article_id'] = 'Identificador de artigo incorreto';
$messages['error_deleting_article'] = 'Houve erro na remoção do artigo "%s"';
$messages['article_deleted_ok'] = 'O artigo "%s" foi removido com sucesso';
$messages['articles_deleted_ok'] = '%s artigos removidos com sucesso';
$messages['error_deleting_article2'] = 'Houve erro na remoção do artigo com identificador "%s"';

// edit post page
$messages['update'] = 'Atualizar';
$messages['editPost'] = 'Editar artigo';
$messages['error_fetching_post'] = 'Houve erro na recuperação do artigo';
$messages['post_updated_ok'] = 'Artigo "%s" atualizado com sucesso';
$messages['error_updating_post'] = 'Houve erro na atualização do artigo';
$messages['notification_added'] = 'Você receberá notificações de novos comentários ou trackbacks';
$messages['notification_removed'] = 'Nenhum notificação sobre novos comentários ou trackbacks será enviada';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = 'Todos';
$messages['comment_status_spam'] = 'Spam';
$messages['comment_status_nonspam'] = 'Não é spam';
$messages['error_fetching_comments'] = 'Houve erro na recuperação dos comentários do artigo';
$messages['error_deleting_comments'] = 'Houve erro na remoção dos comentários ou então nenhum comentário foi selecionado';
$messages['comment_deleted_ok'] = 'Comentário "%s" removido com sucesso';
$messages['comments_deleted_ok'] = '%s comentários removidos com sucesso';
$messages['error_deleting_comment'] = 'Houve erro na remoção do comentário "%s"';
$messages['error_deleting_comment2'] = 'Houve erro na remoção do comentário com identificador %s';
$messages['editComments'] = 'Comentários';
$messages['mark_as_spam'] = 'Marcar como spam';
$messages['mark_as_no_spam'] = 'Mark como não-spam';
$messages['error_incorrect_comment_id'] = 'O identificador do comentário não está correto';
$messages['error_marking_comment_as_spam'] = 'Houve erro na marcação do comentário como spam';
$messages['comment_marked_as_spam_ok'] = 'O comentário foi marcado como spam com sucesso';
$messages['error_marking_comment_as_nonspam'] = 'Houve erro na marcação do comentário como não-spam';
$messages['comment_marked_as_nonspam_ok'] = 'O comentário foi marcado como não-spam com sucesso';

// post trackbacks
$messages['blog'] = 'Blog';
$messages['excerpt'] = 'Trecho';
$messages['error_fetching_trackbacks'] = 'Houve erro na recuperação dos trackbacks';
$messages['error_deleting_trackbacks'] = 'Houve erro na remoção dos trackbacks ou então nenhum trackback foi selecionado';
$messages['error_deleting_trackback'] = 'Houve erro na remoção do trackback "%s"';
$messages['error_deleting_trackback2'] = 'Houve erro na remoção do trackback com identificador "%s"';
$messages['trackback_deleted_ok'] = 'Trackback "%s" removido com sucesso';
$messages['trackbacks_deleted_ok'] = '%s trackbacks removidos com sucesso';
$messages['editTrackbacks'] = 'Trackbacks';

// post statistics
$messages['referrer'] = 'Referência';
$messages['hits'] = 'Hits';
$messages['error_no_items_selected'] = 'Nenhum item foi selecionado para remoção';
$messages['error_deleting_referrer'] = 'Houve erro na remoção da referência "%s"';
$messages['error_deleting_referrer2'] = 'Houve erro na remoção da referência com identificador "%s"';
$messages['referrer_deleted_ok'] = 'Referência "%s" removida com sucesso';
$messages['referrers_deleted_ok'] = '%s referências removidas com sucesso';

// categories
$messages['posts'] = 'Artigos';
$messages['show_in_main_page'] = 'Mostrar na página principal';
$messages['error_incorrect_category_id'] = 'O identificador de categoria não está correto ou nenhum item foi selecionado';
$messages['error_category_has_articles'] = 'A categoria "%s" está sendo usado por alguns artigos. Altere os artigos primeiro e depois remova a categoria';
$messages['category_deleted_ok'] = 'A categoria "%s" foi removida com sucesso';
$messages['categories_deleted_ok'] = '%s categorias removidas com sucesso';
$messages['error_deleting_category'] = 'Houve erro na remoção da categoria "%s"';
$messages['error_deleting_category2'] = 'Houve erro na remoção da categoria com identificador "%s"';
$messages['yes'] = 'Sim';
$messages['no'] = 'Não';

// new category
$messages['name'] = 'Nome';
$messages['category_name_help'] = 'Nome que será usado para mostrar a categoria';
$messages['description'] = 'Descrição';
$messages['category_description_help'] = 'Descrição detalhada desta categoria';
$messages['show_in_main_page_help'] = 'Se os artigos sob esta categoria deverão ser mostrados na página principal ou somente quando esta categoria em particular for selecionada';
$messages['error_empty_name'] = 'Você deve fornecer um nome';
$messages['error_empty_description'] = 'Você deve fornecer uma descrição';
$messages['error_adding_article_category'] = 'Houve erro no cadastro da nova categoria. Verifique os dados e tente novamente';
$messages['category_added_ok'] = 'A categoria "%s" foi cadastrada no blog com sucesso';
$messages['add'] = 'Cadastrar';
$messages['reset'] = 'Restaurar';

// update category
$messages['error_updating_article_category'] = 'Houve erro na atualização da categoria do artigo';
$messages['error_fetching_category'] = 'Houve erro na recuperação do categoria';
$messages['article_category_updated_ok'] = 'A categoria "%s" foi atualizada com sucesso';

// links
$messages['feed'] = 'Retorno';
$messages['error_no_links_selected'] = 'O identificador do link estava incorreto ou nenhum item foi selecionado para remoção';
$messages['error_incorrect_link_id'] = 'O identificador do link não está correto';
$messages['error_removing_link'] = 'Houve erro na remoção do link "%s"';
$messages['error_removing_link2'] = 'Houve erro na remoção do link com identificador "%s"';
$messages['link_deleted_ok'] = 'O link "%s" foi removido com sucesso';
$messages['links_deleted_ok'] = '%s links removidos com sucesso';

// new link
$messages['link_name_help'] = 'Nome dado a este link';
$messages['link_url_help'] = 'Endereço para onde este link aponta';
$messages['link_description_help'] = 'Breve descrição deste link';
$messages['link_feed_help'] = 'Um link para alimentadores RSS ou Atom deste link também pode ser fornecido';
$messages['link_category_help'] = 'Escolha uma das categorias de links disponíveis';
$messages['error_adding_link'] = 'Houve erro no cadastro do link. Verifique os dados e tente novamente';
$messages['error_invalid_url'] = 'O endereço não está correto';
$messages['link_added_ok'] = 'O link "%s" foi cadastrado com sucesso';

// update link
$messages['error_updating_link'] = 'Houve erro na atualização do link. Verifique os dados e tente novamente';
$messages['error_fetching_link'] = 'Houve erro na recuperação do link';
$messages['link_updated_ok'] = 'O link "%s" foi atualizado com sucesso';

// link categories
$messages['links'] = 'Links';
$messages['error_invalid_link_category_id'] = 'O identificador da categoria de link não estava correto ou nenhuma categoria de link foi selecionada';
$messages['error_links_in_link_category'] = 'A categoria de link "%s" está sendo usada por alguns links. Modifique os links primeiro e tente novamente';
$messages['error_removing_link_category'] = 'Houve erro na remoção da categoria de link "%s"';
$messages['link_category_deleted_ok'] = 'A categoria de link "%s" foi removida com sucesso';
$messages['link_categories_deleted_ok'] = '%s categorias de link removidas com sucesso';
$messages['error_removing_link_category2'] = 'Houve erro na remoção da categoria de link com identificador "%s"';

// new link category
$messages['link_category_name_help'] = 'Nome dado a esta categoria de link';
$messages['error_adding_link_category'] = 'Houve erro no cadastro desta nova categoria de link';
$messages['link_category_added_ok'] = 'A categoria de link "%s" foi cadastrada com sucesso';

// edit link category
$messages['error_updating_link_category'] = 'Houve erro na atualização desta categoria de link. Verifique os dados e tente novamente';
$messages['link_category_updated_ok'] = 'A categoria de link "%s" foi atualizada com sucesso';
$messages['error_fetching_link_category'] = 'Houve erro na recuperação da categoria de link';

// custom fields
$messages['type'] = 'Tipo';
$messages['hidden'] = 'Oculto';
$messages['fields_deleted_ok'] = '%s campos personalizados removidos com sucesso';
$messages['field_deleted_ok'] = 'Campo personalizado "%s" removido com sucesso';
$messages['error_deleting_field'] = 'Houve erro na remoção do campo personalizado "%s"';
$messages['error_deleting_field2'] = 'Houve erro na remoção do campo personalizado com identificador "%s"';
$messages['error_incorrect_field_id'] = 'O identificador do campo personalizado não é válido';

// new custom field
$messages['field_name_help'] = 'Identificador que será utilizado para se referenciar ao valor deste campo nos artigos';
$messages['field_description_help'] = 'Breve descrição deste campo que será mostrada no cadastramento ou edição dos artigos';
$messages['field_type_help'] = 'Escolha um dos tipos de campos disponíveis';
$messages['field_hidden_help'] = 'Se um campo é oculto, ele não será mostrado no cadastramento ou edição de um artigo. Este recurso é indicado para uso em plugins';
$messages['error_adding_custom_field'] = 'Houve erro no cadastro do campo personalizado. Verifique os dados e tente novamente';
$messages['custom_field_added_ok'] = 'Campo personalizado "%s" cadastrado com sucesso';
$messages['text_field'] = 'Campo texto';
$messages['text_area'] = 'Caixa de texto';
$messages['checkbox'] = 'Checkbox';
$messages['date_field'] = 'Selecionador de datas';

// edit custom field
$messages['error_fetching_custom_field'] = 'Houve erro na recuperação do campo personalizado';
$messages['error_updating_custom_field'] = 'Houve erro na atualização do campo personalizado. Verifique os dados e tente novamente';
$messages['custom_field_updated_ok'] = 'Campo personalizado "%s" atualizado com sucesso';

// resources
$messages['root_album'] = 'Álbum raiz';
$messages['num_resources'] = 'Número de recursos';
$messages['total_size'] = 'Tamanho total';
$messages['album'] = 'Álbum';
$messages['error_incorrect_album_id'] = 'O identificador de álbum não está correto';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'Não foi possível ao pLog criar os diretório necessários onde os recursos serão instalados. Isto pode ter acontecido por uma série de razões, tais como sua instalação do PHP estar configurada com o modo seguro habilitado ou seu usuário não ter permissões suficientes para fazê-lo. Você ainda pode tentar levar a operação adiante manualmente, criando os seguintes diretórios: <br/><br/>%s<br/><br/>Se estes diretórios já existem, certifique-se de que eles podem ser lidos e gravados pelo usuário sob o qual o servidor WEB está sendo executado.';
$messages['items_deleted_ok'] = '%s items removidos com sucesso';
$messages['error_album_has_children'] = 'O álbum "%s" tem filhos. Edite o álbum primeiro e tente novamente';
$messages['item_deleted_ok'] = 'item "%s" removido com sucesso';
$messages['error_deleting_album'] = 'Houve erro na remoção do álbum "%s"';
$messages['error_deleting_album2'] = 'Houve erro na remoção do álbum com identificador "%s"';
$messages['error_deleting_resource'] = 'Houve erro na remoção do recurso "%s"';
$messages['error_deleting_resource2'] = 'Houve erro na remoção do recurso com identificador "%s"';
$messages['error_no_resources_selected'] = 'Nenhum item foi selecionado para remoção';
$messages['resource_deleted_ok'] = 'O recurso "%s" foi removido com sucesso';
$messages['album_deleted_ok'] = 'O álbum "%s" foi removido com sucesso';
$messages['add_resource'] = 'Cadastrar recurso';
$messages['add_resource_preview'] = 'Cadastrar visualização';
$messages['add_album'] = 'Cadastrar álbum';

// new album
$messages['album_name_help'] = 'Nome abreviado do novo álbum';
$messages['parent'] = 'Pai';
$messages['no_parent'] = 'Sem pai';
$messages['parent_album_help'] = 'Use isto para ter álbums dentro de álbums e assim organizar melhor seus arquivos';
$messages['album_description_help'] = 'Descrição detalhada do conteúdo deste álbum';
$messages['error_adding_album'] = 'Houve erro no cadastro do novo álbum. Verifique os dados e tente novamente';
$messages['album_added_ok'] = 'O álbum "%s" foi cadastrado com sucesso';

// edit album
$messages['error_incorrect_album_id'] = 'O identificador de álbum não está correto';
$messages['error_fetching_album'] = 'Houve erro na recuperação do álbum';
$messages['error_updating_album'] = 'Houve erro na atualização do álbum. Verifique os dados e tente novamente';
$messages['album_updated_ok'] = 'O álbum "%s" foi atualizado com sucesso';
$messages['show_album_help'] = 'Se desabilitado, o álbum não será mostrado na lista de álbums disponíveis deste blog';

// new resource
$messages['file'] = 'Arquivo';
$messages['resource_file_help'] = 'Arquivo que será cadastrado no blog atual. Use o link "Cadastrar campo" para fazer upload de mais de um arquivo ao mesmo tempo.';
$messages['add_field'] = 'Cadastrar campo';
$messages['resource_description_help'] = 'Descrição detalhada do conteúdo deste arquivo';
$messages['resource_album_help'] = 'Escolha o álbum no qual este arquivo será cadastrado';
$messages['error_no_resource_uploaded'] = 'Não há arquivo selecionado para fazer upload';
$messages['resource_added_ok'] = 'Recurso "%s" cadastrado com sucesso';
$messages['error_resource_forbidden_extension'] = 'O arquivo não foi cadastrado porque ele é do tipo proibido';
$messages['error_resource_too_big'] = 'O arquivo não foi cadastrado porque ele é muito grande';
$messages['error_uploads_disabled'] = 'O arquivo não foi cadastrado porque os uploads foram desabilitados';
$messages['error_quota_exceeded'] = 'O arquivo não foi cadastrado porque a cota de recursos foi excedida';
$messages['error_adding_resource'] = 'Houve erro no cadastro do arquivo de recurso';

// edit resource
$messages['editResource'] = 'Editar recurso';
$messages['resource_information_help'] = 'Abaixo existem algumas informações sobre este arquivo de recurso';
$messages['information'] = 'Informação';
$messages['size'] = 'Tamanho';
$messages['format'] = 'Formato';
$messages['dimensions'] = 'Dimensões';
$messages['bits_per_sample'] = 'Bits por amostra';
$messages['sample_rate'] = 'Taxa de amostra';
$messages['number_of_channels'] = 'Número de canais';
$messages['legnth'] = 'Comprimento';
$messages['thumbnail_format'] = 'Formato dos thumbnails';
$messages['regenerate_preview'] = 'Regerar visualização';
$messages['error_fetching_resource'] = 'Houve erro na recuperação do recurso';
$messages['error_updating_resource'] = 'Houve erro na atualização do recurso';
$messages['resource_updated_ok'] = 'O recurso "%s" foi atualizado com sucesso';

// blog settings
$messages['blog_link'] = 'Link para o blog';
$messages['blog_link_help'] = 'Link permanente para este blog';
$messages['blog_name_help'] = 'Título deste blog';
$messages['blog_description_help'] = 'Descrição detalhada do conteúdo deste blog';
$messages['language'] = 'Idioma';
$messages['blog_language_help'] = 'Idioma usado para mostrar os textos deste blog, tanto para o público quanto para a parte administrativa';
$messages['max_main_page_items'] = 'Número máximo de itens na página principal';
$messages['max_main_page_items_help'] = 'Número de artigos que devem ser mostrados na página principal do blog';
$messages['max_recent_items'] = 'Número de itens recentes';
$messages['max_recent_items_help'] = 'Número máximo de artigos que serão mostrados como recentes na página principal';
$messages['template'] = 'Template';
$messages['choose'] = 'Escolha';
$messages['blog_template_help'] = 'Template que será utilizado para mostrar o conteúdo do blog. Esta lista inclui templates globais mais todos os templates instalados somente para este blog';
$messages['use_read_more'] = 'Use o link "mais..." nos artigos';
$messages['use_read_more_help'] = 'Se habilitado, somente o texto digitado como "Texto" na caixa de texto será mostrado na página principal. Para acessar o restante do artigo, um link "mais..." será adicionado a cada artigo';
$messages['enable_wysiwyg'] = 'Habilitar o editor visual para os artigos';
$messages['enable_wysiwyg_help'] = 'Habilitar um editor mais poderoso, editor visual para HTML. O editor funciona somente no Internet Explorer 5.5 ou posterior ou Mozilla 1.3 ou posterior';
$messages['enable_comments'] = 'Habilitar comentários por default';
$messages['enable_comments_help'] = 'Habilitar comentários para todos os artigos por default. Comentários podem ainda ser habilitados/desabilitados para certos artigos na criação dos mesmos ou na edição dos já existentes';
$messages['show_future_posts'] = 'Mostrar os futuros artigos no calendário';
$messages['show_future_posts_help'] = 'Se os artigos que têm uma data no futuro devem aparecer no calendário e ficar visível para os usuários';
$messages['comments_order'] = 'Ordem do comentários';
$messages['comments_order_help'] = 'Ordem na qual os comentários devem ser mostrados na página principal';
$messages['oldest_first'] = 'Mais antigos primeiro';
$messages['newest_first'] = 'Mais recentes primeiro';
$messages['categories_order'] = 'Ordem das categorias';
$messages['categories_order_help'] = 'Ordem na qual as categorias devem ser mostradas na página principal';
$messages['most_recent_updated_first'] = 'Mais recentemente atualizadas primeiro';
$messages['alphabetical_order'] = 'Ordem alfabética';
$messages['reverse_alphabetical_order'] = 'Ordem alfabética reversa';
$messages['most_articles_first'] = 'Artigos mais lidos primeiro';
$messages['link_categories_order'] = 'Ordem das categorias de links';
$messages['link_categories_order_help'] = 'Ordem na qual as categorias de links devem aparecer na página principal';
$messages['most_links_first'] = 'Links mais visitados primeiro';
$messages['most_links_last'] = 'Links mais visitados por último';
$messages['time_offset'] = 'Diferença de horário';
$messages['time_offset_help'] = 'Diferença de horário em horas que será adicionada dinamicamente para cada data e hora no blog';
$messages['close'] = 'Fechado';
$messages['select'] = 'Escolha';
$messages['error_updating_settings'] = 'Houve erro na atualização das configurações do blog. Verifique os dados e tente novamente';
$messages['error_invalid_number'] = 'O número não está correto';
$messages['error_incorrect_time_offset'] = 'A diferença de horário não é válida';
$messages['blog_settings_updated_ok'] = 'Configuraçòes do blog atualizadas com sucesso';

// user settings
$messages['username_help'] = 'Nome de usuário público. Não pode ser alterado';
$messages['full_name'] = 'Nome completo';
$messages['full_name_help'] = 'Nome completo';
$messages['password_help'] = 'Digite e cofirme uma nova senha, ou deixe em branco para não mudar';
$messages['confirm_password'] = 'Confirme a senha';
$messages['email'] = 'e-mail';
$messages['email_help'] = 'Endereço de e-mail para onde as notificações serão enviadas';
$messages['bio'] = 'Sua biografia';
$messages['bio_help'] = 'Uma descrição mais detalhada sobre você pode ser colocada aqui';
$messages['picture'] = 'Foto';
$messages['user_picture_help'] = 'Escolha uma das fotos disponíveis neste blog para representá-lo';
$messages['error_invalid_password'] = 'A senha não está correta. Certifique-se de que ela não seja muito curta';
$messages['error_passwords_dont_match'] = 'As senhas não batem';
$messages['error_incorrect_email_address'] = 'O endereço de e-mail não está correto';
$messages['error_updating_user_settings'] = 'Houve erro na atualização das suas configurações de usuário. Verifique os dados e tente novamente';
$messages['user_settings_updated_ok'] = 'Configurações de usuário atualizadas com sucesso';
$messages['resource'] = 'Recurso';

// plugin centre
$messages['identifier'] = 'Identificador';
$messages['error_plugins_disabled'] = 'Os plugins estão desabilitados.';

// blog users
$messages['revoke_permissions'] = 'Remover permissões';
$messages['error_no_users_selected'] = 'Não há usuários selecionados';
$messages['user_removed_from_blog_ok'] = 'O usuário "%s" não tem mais permissão para acessar este blog';
$messages['users_removed_from_blog_ok'] = '%s usuários não têm mais permissão para acessar este blog';
$messages['error_removing_user_from_blog'] = 'Houve erro na remoção do acesso a este blog para o usuário "%s"';
$messages['error_removing_user_from_blog2'] = 'Houve erro na remoção do acesso a este blog para o usuário com identificador "%s"';

// new blog user
$messages['new_blog_username_help'] = 'Nome de usuário para a pessoa à qual você quer dar acesso a este blog. Novos usuários somente terão acesso às secções "Gerenciar" e "Recursos".';
$messages['send_notification'] = 'Enviar notificação';
$messages['send_user_notification_help'] = 'Envair uma e-mail de notificação para este usuário';
$messages['notification_text'] = 'Conteúdo da notificação';
$messages['notification_text_help'] = 'Texto que será incluído na mensagem de notificação';
$messages['error_adding_user'] = 'Houve erro na concessão de acesso ao usuário. Verifique os dados e tente novamente';
$messages['error_empty_text'] = 'Você deve escrever algo';
$messages['error_adding_user'] = 'Houve erro no cadastro do usuário. Verifique os dados e tente novamente';
$messages['error_invalid_user'] = 'O usuário "%s" não é válido ou não existe';
$messages['user_added_to_blog_ok'] = 'Foi dado acesso a este blog ao usuário "%s" com sucesso';

// blog templates
$messages['error_no_templates_selected'] = 'Não há templates selecionados';
$messages['error_template_is_current'] = 'O template "%s" não pode ser removido porque ele é o template usado no momento';
$messages['error_removing_template'] = 'Houve na remoção do template "%s"';
$messages['template_removed_ok'] = 'O template "%s" foi removido com sucesso';
$messages['templates_removed_ok'] = '%s templates foram removidos com sucesso';

// new blog template
$messages['template_installed_ok'] = 'Template "%s" cadastrado com sucesso';
$messages['error_installing_template'] = 'Houve erro na instalação do template "%s"';
$messages['error_missing_base_files'] = 'Faltam alguns dos arquivos do template';
$messages['error_add_template_disabled'] = 'Novos templates não podem ser cadastrados porque este recurso foi desabilitado neste site';
$messages['error_must_upload_file'] = 'Nenhum arquivo de template foi carregado';
$messages['error_uploads_disabled'] = 'Uploads foram desabilitados neste site';
$messages['error_no_new_templates_found'] = 'Nenhum novo template foi encontrado';
$messages['error_template_not_inside_folder'] = 'Os arquivos usados no template devem estar dentro de um diretório com o mesmo nome do template';
$messages['error_missing_base_files'] = 'Estão faltando alguns dos arquivos básicos do template';
$messages['error_unpacking'] = 'Houve erro na descompactação do arquivo';
$messages['error_forbidden_extensions'] = 'O template contém arquivos cuja extensão é proibida';
$messages['error_creating_working_folder'] = 'Houve erro na criação do diretório temporário para a descompactação dos arquivos';
$messages['error_checking_template'] = 'Houve erro na verificação do template: %s';
$messages['template_package'] = 'Pacote de template';
$messages['blog_template_package_help']  = 'Use este formulário para fazer upload de um arquivo de template, o qual estará disponível somente para o seu blog. Se não é possível fazer upload usando este formulário, faça o upload manualmente e coloque-o em <b>%s</b>, que é o diretório onde os templates são armazenados, e clique no botão "<b>Procurar templates</b>". O pLog vai procurar no diretório e automaticamente cadastrará qualquer novo template que for encontrado.';
$messages['scan_templates'] = 'Procurar templates';

// site users
$messages['user_status_active'] = 'Ativo';
$messages['user_status_disabled'] = 'Desabilitado';
$messages['user_status_all'] = 'Todos';
$messages['user_status_unconfirmed'] = 'Sem confirmação';
$messages['error_invalid_user2'] = 'O usuário com identificador "%s" não existe';
$messages['error_deleting_user'] = 'Houve erro na desabilitação do usuário "%s"';
$messages['user_deleted_ok'] = 'O usuário "%s" foi desabilitado com sucesso';
$messages['users_deleted_ok'] = '%s usários desabilitados com sucesso';

// create user
$messages['user_added_ok'] = 'O usuário "%s" foi cadastrado com sucesso';
$messages['error_incorrect_username'] = 'O nome de usuário não está correto ou já está em uso';
$messages['user_status_help'] = 'Situação atual deste usuário';
$messages['user_blog_help'] = 'Blog ao qual este usuário será associado inicialmente';
$messages['none'] = 'Nenhum';

// edit user
$messages['error_invalid_user'] = 'O identificador do usuário não está correto ou o usuário não existe';
$messages['error_updating_user'] = 'Houve erro na atualização das configurações do usuário. Verifique os dados e tente novamente';
$messages['blogs'] = 'Blogs';
$messages['user_blogs_help'] = 'Blogs dos quais este usuário é dono ou aos quais tem acesso';
$messages['site_admin'] = 'Administrador';
$messages['site_admin_help'] = 'Se este usuário possui privilégios de administrador e portanto lhe é permitido ver a área "Administração" e executar tarefas administrativas';
$messages['user_updated_ok'] = 'Usuário "%s" atualizado com sucesso';

// site blogs
$messages['blog_status_all'] = 'Todos';
$messages['blog_status_active'] = 'Ativo';
$messages['blog_status_disabled'] = 'Desabilitado';
$messages['blog_status_unconfirmed'] = 'Sem confirmação';
$messages['owner'] = 'Dono';
$messages['quota'] = 'Cota';
$messages['bytes'] = 'bytes';
$messages['error_no_blogs_selected'] = 'Nenhum blog foi selecionado para ser desabilitado';
$messages['error_blog_is_default_blog'] = 'O blog "%s" não pode ser removido porque ele é o blog default';
$messages['blog_deleted_ok'] = 'Blog "%s" desabilitado com sucesso';
$messages['blogs_deleted_ok'] = '%s blogs removidos com sucesso';
$messages['error_deleting_blog'] = 'Houve erro na desabilitação do blog "%s"';
$messages['error_deleting_blog2'] = 'Houve erro na desabilitação do blog com identificador "%s"';

// create blog
$messages['error_adding_blog'] = 'Houve erro no cadastro do blog. Verifique os dados e tente novamente';
$messages['blog_added_ok'] = 'O blog "%s" foi cadastrado com sucesso';

// edit blog
$messages['blog_status_help'] = 'Status do blog';
$messages['blog_owner_help'] = 'Usuário que será configurado como dono, com controle total sobre as configurações do blog';
$messages['users'] = 'Usuários';
$messages['blog_quota_help'] = 'Cota de recursos em em bytes. Defina 0 para ilimitado ou deixe em branco para que o blog use a cota global';
$messages['blog_users_help'] = 'Usuários que têm acesso a este blog. Escolha um usuário da esquerda e mova-o para a lista da direita para dar ao usuário acesso a este blog';
$messages['edit_blog_settings_updated_ok'] = 'Blog "%s" atualizado com sucesso';
$messages['error_updating_blog_settings'] = 'Houve erro na atualização do blog "%s"';
$messages['error_incorrect_blog_owner'] = 'O usuário escolhido como dono do blog não está correto';
$messages['error_fetching_blog'] = 'Houve erro na recuperação do blog';
$messages['error_updating_blog_settings2'] = 'Houve erro na atualização do blog. Verifique os dados e tente novamente';
$messages['add_or_remove'] = 'Cadastrar ou remover usuários';

// site locales
$messages['locale'] = 'Locales';
$messages['locale_encoding'] = 'Encoding';
$messages['locale_deleted_ok'] = 'Locale "%s" removido com sucesso';
$messages['error_no_locales_selected'] = 'Nenhum locale foi selecionado para remoção';
$messages['error_deleting_only_locale'] = 'O locale não pode ser removido porque ele é o único existente no sistema';
$messages['locales_deleted_ok']= '%s locales removidos com sucesso';
$messages['error_deleting_locale'] = 'Houve erro na remoção do locale "%s"';
$messages['error_locale_is_default'] = 'o locale "%s" não pode ser removido porque ele é o locale default para novos blogs';

// add locale
$messages['error_invalid_locale_file'] = 'O arquivo de local não é válido';
$messages['error_no_new_locales_found'] = 'Nenhum arquivo novo de local foi encontrado';
$messages['locale_added_ok'] = 'Locale "%s" cadastrado com sucesso';
$messages['error_saving_locale'] = 'Houve erro no cadastro do novo locale';
$messages['scan_locales'] = 'Procurar locales';
$messages['add_locale_help'] = 'Use este formulário para fazer upload de um arquivo de locale. Se não é possível fazer upload usando este formulário, faça o upload manualmente e coloque-o em <b>./locales/</b>, que é o diretório onde os arquivos de locale são armazenados, e clique no botão "<b>Procurar locales</b>". O pLog vai procurar no diretório e automaticamente cadastrará qualquer novo arquivo de locale que for encontrado.';

// site templates
$messages['error_template_is_default'] = 'O template "%s" não pode ser removido porque ele é o template default para novos blogs';

// add template
$messages['global_template_package_help'] = 'Use este formulário para fazer upload de um arquivo de template, o qual estará disponível para todos os blogs deste site. Se não é possível fazer upload usando este formulário, faça o upload manualmente e coloque-o em <b>%s</b>, que é o diretório onde os templates são armazenados, e clique no botão "<b>Procurar templates</b>". O pLog vai procurar no diretório e automaticamente cadastrará qualquer novo template que for encontrado.';

$messages['scan_templates'] = 'Procurar templates';

// global settings
$messages['site_config_saved_ok'] = 'Configurações do site salvas com sucesso';
$messages['error_saving_site_config'] = 'Houve erro no cadastro das configurações do site';
/// general settings
$messages['help_comments_enabled'] = 'Habilita ou desabilita comentários para novos blogs por default [Default = Sim]';
$messages['help_beautify_comments_text'] = 'Se estiver habilitado, comentários postados por usuários serão formatados com a adição de parágrafos e com auto-linking para todas as URLs [Default = Sim]';
$messages['help_temp_folder'] = 'Diretório que o pLog pode usar para gravar seus arquivos temporários, tais como templates compilados etc. Use um diretório fora da estrutura do servidor WEB para maior segurança [Default = ./tmp]';
$messages['help_base_url'] = 'URL base onde este blog encontra-se instalado';
$messages['help_subdomains_enabled'] = 'Habilita ou desabilita sub-domínios. Veja a documentação para mais informações à respeito de sub-domínios [Default = Não]';
$messages['help_subdomains_base_url'] = 'Quando sub-domínios estão habilitados, esta URL base é usada ao invés da base_url. Use {blogname} para obter o nome do blog e {username} para obter o nome do dono do blog para gerar um link para o blog. (Por exemplo http://{blogname}.seudominio.com.br})';
$messages['help_include_blog_id_in_url'] = 'Só faz setido quando sub-domínios estão habilitados e URLs "normais" estão habilitadas; força URLs geradas internamentte a não terem o parâmetro "blogID". Não mude isso a menos que você saiba o que está fazendo [Default = Sim]';
$messages['help_script_name'] = 'Configure isto se você precisa renomear o index.php para algum outro nome.';
$messages['help_show_posts_max'] = 'Número máximo de artigos mostrados na página principal. Só aplicável para novos blogs [Default = 15]';
$messages['help_recent_posts_max'] = 'Número máximo de artigos recentes mostrados na página principal. Só aplicável para novos blogs [Default = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Se o recurso que permite salvar rascunhos via JavaScript e XmlHttpRequest está habilitado [Default = Sim]';
$messages['help_locale_folder'] = 'Diretório onde os arquivos de locale são armazenados [Default = ./locale]';
$messages['help_default_locale'] = 'Configuração do idioma default para novos blogs [Default = en_UK]';
$messages['help_default_blog_id'] = 'Blog default que será mostrado se nenhum outro for especificado [Default = 1]';
$messages['help_default_time_offset'] = 'Diferença de horário default para novos blogs [Default = 0]';
$messages['help_html_allowed_tags_in_comments'] = 'Lista separada por espaços das TAGs HTML que são permitidas nos comentários [Default = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'Habilita ou desabilita o recurso de salvar referrers para o banco de dados. Configure como desabilitado para maior performance [Default = Sim]';
$messages['help_show_more_enabled'] = 'Habilita ou desabilita o recurso "mais..." por default para novos blogs [Default = Sim]';
$messages['help_update_article_reads'] = 'Habilita ou desabilita a atualização do contador de vezes que um artigo foi lido. Configure como desabilitado para maior performance [Default = Sim]';
$messages['help_update_cached_article_reads'] = 'Habilita ou desabilita a atualização do contador de vezes que um artigo foi lido, mesmo quando o recurso de caching foi habilitado [Default = Sim]';
$messages['help_xmlrpc_ping_enabled'] = 'Habilita ou desabilita o envio de pings do tipo XMLRPC para sites que suportam este recurso [Default = Sim]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Habilita ou desabilita este recurso por default na postagem ou atualização de artigos [Default = Sim]';
$messages['help_xmlrpc_ping_hosts'] = 'URL apontando para interface XMLRPC de sites que suportam a especificação de ping do tipo XMLRPC. Coloque cada URL em uma linha [Default = Sim]';
$messages['help_trackback_server_enabled'] = 'Habilita ou desabilita o recurso de receber trackback [Default = Sim]';
$messages['help_htmlarea_enabled'] = 'Habilita ou desabilita o editor WYSIWYG por default para novos blogs [Default = Sim]';
$messages['help_plugin_manager_enabled'] = 'Habilita ou desabilita plugins [Default = Sim]';
$messages['help_minimum_password_length'] = 'Tamanho mínimo das senhas [Default = 4]';
$messages['help_xhtml_converter_enabled'] = 'Se habilitado, o pLog vai tentar converter todo o código HTML para XHTML [Default = Sim]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'Se habilitado, o pLog vai tentar com mais afinco gerar código XHTML a partir do HTML, mas isto será mais propenso a erros [Default = Não]';
$messages['help_session_save_path'] = 'Use esta configuração para mudar o diretório onde o pLog armazena seus dados de sessão, através da função session_save_path() do PHP. Certifique-se de que o diretório pode ser acessado pelo servidor WEB. Deixe em branco para usar o diretório default do PHP [Default = (vazio)]';
// summary settings
$messages['help_summary_page_show_max'] = 'Número de itens que serão mostrados na página de resumo. Esta configuração controla todas as listas na página de resumos (artigos recentes, blogs mais ativos etc) [Default = 10]';
$messages['help_summary_blogs_per_page'] = 'Número de blogs por página na seção "Lista de blogs" [Default = 25]';
$messages['help_forbidden_usernames'] = 'Lista dos usuários que não podem ser registrados [Default = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = 'Restringe para apenas um blog por conta de e-mail [Default = Não]';
$messages['help_summary_show_agreement'] = 'Mostrar o texto com os termos de serviço e fazer o usuário aceitá-lo antes de proceder no processo de registro [Default = Sim]';
$messages['help_need_email_confirm_registration'] = 'Forçar o usuário a confirmar o registro clicando num link enviado num e-mail para a conta dele [Default = Sim]';
$messages['help_summary_disable_registration'] = 'Se é permitido aos usários registrar novos blogs neste site [Default = Sim]';
// templates
$messages['help_template_folder'] = 'Diretório onde templates são armazenados [Default = ./templates]';
$messages['help_default_template'] = 'Template default para novos blogs [Default = Standard]';
$messages['help_users_can_add_templates'] = 'Permite aos usuários fazerem upload dos seus próprios templates [Default = Sim]';
$messages['help_template_compile_check'] = 'Se desabilitado, o Smarty vai verificar todas as vezes se um template foi alterado e, em caso afirmativo, usará a nova versão. Configure isto como desabilitado para maior performance [Default = Sim]';
$messages['help_template_cache_enabled'] = 'Habilita o cache de template. Se habilitado, a versão em cache da página será usada sempre que possível. Nenhum dado precisará ser recuperado do banco de dados e os templates não precisarão ser recompilados [Default = Sim]';
$messages['help_template_cache_lifetime'] = 'Tempo de vida em segundos do cache. Configure para -1 para forçar o cache a nunca expirar. Se configurado para 0, o cache será desabilitado, mas é recomendado configurar o template_cache_enable para "Não" para desabilitar o cache [Default = 0]';
$messages['help_template_http_cache_enabled'] = 'Habilita suporte para requisições HTTP condicionais. Se habilitado, o pLog vai pegar o cabeçalho HTTP "If-Modified-Since" em conta e enviará conteúdo somente se estritamente necessário. Habilite isto para economizar banda [Default = Não]';
$messages['help_allow_php_code_in_templates'] = 'Permite incluir código PHP nativo nos templates do Smarty entre blocos {php}...{/php} [Default = Não]';
// urls
$messages['help_request_format_mode'] = 'Selecione um dos formatos de URL disponíveis. Se estiver usando URLs personalizadas, certifique-se de configurar os itens abaixo [Default = Simples]';
$messages['plain'] = 'Simples';
$messages['search_engine_friendly'] = 'Pesquisa amigável';
$messages['custom_url_format'] = 'URLs personalizadas';
$messages['help_permalink_format'] = 'Formato dos permalinks para URLs personalizadas [Default = /blog/{blogname}/{catname}/{year}/{month}/{day}{postname}$]';
$messages['help_category_link_format'] = 'Formato dos links para categorias para URLs personalizadas [Default = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'Formato dos links para blogs para URLs personalizadas [Default = /blog/{blogname}$]';
$messages['help_archive_link_format'] = 'Formato dos links para arquivos para URLs personalizadas [Default = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'Formato para artigos postados por usuários para URLs personalizadas [Default = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'Formato dos links das páginas de trackbacks para URLs personalizadas [Default = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'Formato dos links para as páginas de template estáticas personalizadas para URLs personalizadas [Default = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'Formato dos links para álbums de recursos para URLs personalizadas [Default = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'Formato dos links para páginas de recursos com arquivos para URLs personalizadas [Default = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'Formato dos links para visualização de recursos para URLs personalizadas [Default = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'Formato dos links para visualização de recursos de tamanho médio para URLs personalizadas [Default = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'Formato dos links para arquivos para URLs personalizadas [Default = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = 'Na verificação de endereços de e-mail, executar algumas verficações básicas para ver se um registro do tipo MX existe no domínio informado e, em caso afirmativo, se o endereço de e-mail é uma caixa postal válida [Default = Não]';
$messages['help_email_service_enabled'] = 'Habilita ou desabilita envio de e-mails [Default = Sim]';
$messages['help_post_notification_source_address'] = 'Endereço de e-mail que vai aparecer no campo "De:" dos e-mails enviados pelo pLog [Default = noreply@your.host.com]';
$messages['help_email_service_type'] = 'Qual sistema usar para enviar e-mails [Default = PHP]';
$messages['help_smtp_host'] = 'Se for usar o sistema SMTP para enviar e-mails, coloque aqui a identificação do servidor SMTP que será usado para enviar as mensagens [Default = (vazio)]';
$messages['help_smtp_port'] = 'Se o serviço SMTP está atendendo num porto diferente de 25, coloque seu número [Default = (vazio)]';
$messages['help_smtp_use_authentication'] = 'Habilite isto se o servidor SMTP precisa de autenticação básica [Default = Não]';
$messages['help_smtp_username'] = 'Se o servidor SMTP precisa de autenticação, coloque aqui o nome de usuário correto [Default = (vazio)]';
$messages['help_smtp_password'] = 'Se o servidor SMTP precisa de autenticação, coloque aqui a senha do usuário definido acima [Default = (vazio)]';
// helpers
$messages['help_path_to_tar'] = 'Caminho do comando "tar", necessário para descompactar arquivos de template nos formatos .tar.gz ou .tar.bz2 [Default = /bin/tar]';
$messages['help_path_to_gzip'] = 'Caminho do comando "gzip", necessário para descompactar arquivos de template no formato .tar.gz [Default = /bin/gzip]';
$messages['help_path_to_bz2'] = 'Caminho do comando "bzip2", necessário para descompactar arquivos de template no formato .tar.bz2 [Default = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = 'Caminho do comando "unzip", necessário para descompactar arquivos de template no formato .zip [Default = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'Usar a versão nativa do PHP para descompactar os arquivos .zip  [Default = Não]';
// uploads
$messages['help_uploads_enabled'] = 'Se é permitido a usuários fazer upload de arquivos. Isto afeta a seção de recursos e o upload de templates e locales [Default = Sim]';
$messages['help_maximum_file_upload_size'] = 'Tamanho máximo de arquivo permitido em bytes. Isto nunca será mais alto do que o próprio limite do PHP [Default = 2000000]';
$messages['help_upload_forbidden_files'] = 'Lista dos tipos de arquivos, separados por espaço, aos quais não é permitido fazer upload. O uso de \'*\' e \'?\' é permitido [Default = *.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'Habilita ou desabilita acesso aos blogs via XMLRPC [Default = Sim ]';
$messages['help_rdf_enabled'] = 'Habilita o syndication do conteúdo via Atom ou RSS [Default = Sim]';
$messages['help_default_rss_profile'] = 'Versão default de RSS ou Atom usada para fazer o syndicate do conteúdo, a menos que outra seja especificada [Default = RSS 1.0]';
// security
$messages['help_security_pipeline_enabled'] = 'Habilita ou desabilita o pipeline de segurança e todos os filtros relacionados. Isto também afeta plugins que registram novos filtros [Default = Sim]';
$messages['help_ip_address_filter_enabled'] = 'Habilita ou desabilita o filtro de endereços de IP. O pipeline de segurança também precisa estar habilitado para que este recurso funcione [Default = Não]';
$messages['help_content_filter_enabled'] = 'Habilita ou desabilita o filtro de conteúdo baseado em expressões regulares. A segurança de pipeline também deve estar habilitada para que este recurso funcione [Default = Não]';
$messages['help_maximum_comment_size'] = 'Tamanho máximo em bytes que um comentário pode ter [Default = 0]';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = 'Habilita ou desabilita o filtro do tipo Bayesian para uma melhor filtragem automática contra spam [Default = Sim]';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'Limite máximo antes que um comentário passe a ser considerado um spam [Default = 0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'Limite mínimo após o qual um artigo passa a ser considerado como não-spam [Default = 0.2]';
$messages['help_bayesian_filter_min_length_token'] = 'Tamanho mínimo de uma token para que seja considerada significativa para o filtro de Bayesian [Default = 3]';
$messages['help_bayesian_filter_max_length_token'] = 'Tamanho máximo de uma token para que seja considerada significativa para o filtro de Bayesian [Default = 100]';
$messages['help_bayesian_filter_number_significant_tokens'] = 'Número de tokens significativas [Default = 15]';
$messages['help_bayesian_filter_spam_comments_action'] = 'O que fazer com comentários que são considerados spam. Configure para "Eliminar" somente quando seu filtro estiver bem treinado [Default = Manter no banco de dados marcado como "Spam"]';
$messages['keep_spam_comments'] = 'Manter no banco de dados marcado como "Spam"';
$messages['throw_away_spam_comments'] = 'Eliminar (não salvar)';
// resources
$messages['help_resources_enabled'] = 'Habilita ou desabilita recursos [Default = Sim]';
$messages['help_resources_folder'] = 'Diretório onde os arquivos de recursos serão mantidos. Deixe fora da estrutura do servidor WEB para aumentar a segurança [Default = ./gallery]';
$messages['help_thumbnail_method'] = 'Método usado para gerar imagens em miniaturas (thumbnails). Se estiver usando o PHP, é necessário suporte para a biblioteca GD [Default = GD]';
$messages['help_path_to_convert'] = 'Caminho para a ferramenta de conversão do pacote "ImageMagick". Obrigatório se o método para criar thumbnails é o "ImageMagick" [Default = /usr/bin/convert]';
$messages['help_thumbnail_format'] = 'Formato no qual os thumbnails serão salvos';
$messages['help_thumbnail_height'] = 'Altura default para thumbnails pequenos [Default = 120]';
$messages['help_thumbnail_width'] = 'Largura default para thumbnails pequenos [Default = 120]';
$messages['help_medium_size_thumbnail_height'] = 'Altura default para thumbnails médios [Default = 480]';
$messages['help_medium_size_thumbnail_width'] = 'Largura default para thumbnails médios [Default = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'Manter as proporções na geração de thumbnails. Pode acabar gerando thumbnails maiores que o tamanho especificado acima mas a qualidade é melhor [Default = Sim]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'Forçar o pLog a usar somente funções GD1 [Default = Não]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'Algoritmo usado para suavizar thumbnails. Usado somente quando o método de geração de thumbnails é GD [Default = PHP Imagecopyresampled]';
$messages['help_resources_quota'] = 'Cota de recursos globais para blogs em bytes (por exemplo, 5242880 bytes = 5MB) [Default = 0]';
$messages['help_resource_server_http_cache_enabled'] = 'Habilita suporte para o cabeçalho "If-Modified-Since" e requisições de HTTP condicionais. Habilite para aumentar a economia de banda [Default = Não]';
$messages['help_resource_server_http_cache_lifetime'] = 'Tempo em microsegundos que os clientes devem usar a versão em cache dos recursos [Default = 9999999]';
// search
$messages['help_search_engine_enabled'] = 'Habilita ou desabilita o sistema de pesquisa [Default = Sim]';
$messages['help_search_in_custom_fields'] = 'Pesquisar também nos campos personalizados [Default = Sim]';
$messages['help_search_in_comments'] = 'Pesquisar também nos comentários [Default = Sim]';

// cleanup
$messages['purge'] = 'Eliminar';
$messages['cleanup_spam'] = 'Eliminar spam';
$messages['cleanup_spam_help'] = 'Isto vai remover todos os comentários que foram marcados como spam pelos usuários. Não será possível recuperá-los uma vez que eles tenham sido removidos';
$messages['spam_comments_purged_ok'] = 'Comentários do tipo spam eliminados com sucesso';
$messages['cleanup_posts'] = 'Eliminar artigos';
$messages['cleanup_posts_help'] = 'Isto vai remover todos os artigos que foram apagados pelos usuários (marcados como "Removido"). Não será possível recuperá-los uma vez que eles tenham sido removidos';
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
$messages['summary_latest_posts'] = 'Últimos artigos';
$messages['summary_search_blogs'] = 'Pesquisar blogs';

// blog list
$messages['updated'] = 'Atualizado';
$messages['total_reads'] = 'Total';

// blog profile
$messages['blog'] = 'Blog';
$messages['latest_posts'] = 'Últimos artigos';

// registration
$messages['register_step0_title'] = 'Aceitação dos termos de serviço';
$messages['decline'] = 'Recusar';
$messages['accept'] = 'Aceitar';
$messages['read_service_agreement'] = 'Por favor, leia os termos deste serviço e clique no botão "Aceitar" se você concorda';
$messages['register_step1_title'] = 'Criar um usuários [1/4]';
$messages['register_step1_help'] = 'Primeiro você precisa um novo usuário para ter um blog. Este usuário será o dono do blog e terá acesso a todas as suas funcionalidades';
$messages['register_next'] = 'Próximo';
$messages['register_back'] = 'Anterior';
$messages['register_step2_title'] = 'Criar um novo blog [2/4]';
$messages['register_blog_name_help'] = 'Nome do seu novo blog';
$messages['register_step3_title'] = 'Escolha um template [3/4]';
$messages['step1'] = 'Passo 1';
$messages['step2'] = 'Passo 2';
$messages['step3'] = 'Passo 3';
$messages['register_step3_help'] = 'Escolha um dos template disponíveis como o default para o seu blog. Se você não gostar dele mais tarde, poderá trocá-lo';
$messages['error_must_choose_template'] = 'Escolha um template';
$messages['select_template'] = 'Escolha um template';
$messages['register_step5_title'] = 'Parabéns! [4/4]';
$messages['finish'] = 'Terminado';
$messages['register_need_confirmation'] = 'Uma mensagem de e-mail incluindo a confirmação foi enviada para o seu endereço de e-mail. Clique no link assim que você receber a mensagem para começar a usar o blog!';
$messages['register_step5_help'] = 'Parabéns, seu novo usuário e blog forma criados com sucesso!';
$messages['register_blog_link'] = 'Se você quiser dar uma olhada no seu novo blog, pode acessá-lo aqui: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'Se você prefere começar a postar agora, clique neste link para ir para a <a href="admin.php">Interface administrativa</a>';
$messages['register_error'] = 'Houve um erro durante o processo';
$messages['error_registration_disabled'] = 'Registros neste novo blog estão desabilitadas';
// registration article topic and text
$messages['register_default_article_topic'] = 'Parabéns!';
$messages['register_default_article_text'] = 'Se você pode ler este artigo, significa que o processo de registro foi efetuado com sucesso e que você já pode começar a "blogar"';
$messages['register_default_category'] = 'Geral';
// confirmation email
$messages['register_confirmation_email_text'] = 'Clique no link abaixo para ativar seu blog:

%s

Tenha um bom dia';
$messages['error_invalid_activation_code'] = 'O código de confirmação é inválido';
$messages['blog_activated_ok'] = 'Parabéns, seu novo usuário e blog foram validados com sucesso!';
// forgot your password?
$messages['reset_password'] = 'Restaurar sua senha';
$messages['reset_password_username_help'] = 'Nome do usuário cuja senha você quer restaurar';
$messages['reset_password_email_help'] = 'Endereço de e-mail que foi usado para registrar este usuário';
$messages['reset_password_help'] = 'Use este formulário para restaurar a senha do seu usuário que você não se lembra. Digite o nome do usuário cuja senha você deseja restaurar, como também o endereço de e-mail que foi usado para registrar este usuário';
$messages['error_resetting_password'] = 'Houve erro na restauração da senha. Verifique os dados e tente novamente';
$messages['reset_password_error_incorrect_email_address'] = 'O endereço de e-mail não está correto ou não foi o endereço utilizado para registrar este usuário';
$messages['password_reset_message_sent_ok'] = 'Um mensagem com um link foi enviada para o seu endereço de e-mail. Clique no link para restaurar sua senha';
$messages['error_incorrect_request'] = 'Os parâmetro na URL não estão corretos';
$messages['change_password'] = 'Definir nova senha';
$messages['change_password_help'] = 'Digite e confirme sua nova senha';
$messages['new_password'] = 'Nova senha';
$messages['new_password_help'] = 'Digite aqui sua nova senha';
$messages['password_updated_ok'] = 'Sua senha foi alterada com sucesso';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'Esta página parece simples e sem estilo porque você está usando um browser não-padrão. Para vê-la bem melhor, por favor visite <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">atualize</a> seu browser para um que seja compatível com os padrões da WEB. É gratuito e não dói.';
$messages['jump_to_navigation'] = 'Ir para a navegação.';
$messages['comment_email_never_display'] = 'Linhas e parágrafos com quebra automática, endereços de -mail nunca são mostrados.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> allowed: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = 'A <acronym title="Uniform Resource Identifier">URI</acronym> para fazer trackback para esta entrada é: ';
$messages['previous_post'] = 'Anterior';
$messages['next_post'] = 'Próximo';
$messages['comment_default_title'] = '(Sem título)';
$messages['guestbook'] = 'Livro de visita';
$messages['trackbacks'] = 'Trackbacks';
$messages['menu'] = 'Menu';
$messages['albums'] = 'Álbums';
$messages['admin'] = 'Administração';
?>
