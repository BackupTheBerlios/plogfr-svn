<?php
// Traduction par Eric Robert, redacteur at la-vie-rurale.info
// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = 'UTF-8';
$messages["locale_description"] = 'Locale francaise pour pLog';
// locale format, see Locale::formatDate for more information
$messages["date_format"] = '%d/%m/%Y %H:%M';

// days of the week
$messages["days"] = Array( "Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi" );
// -- compatibility, do not touch -- //
$messages["Monday"] = $messages["days"][1];
$messages["Tuesday"] = $messages["days"][2];
$messages["Wednesday"] = $messages["days"][3];
$messages["Thursday"] = $messages["days"][4];
$messages["Friday"] = $messages["days"][5];
$messages["Saturday"] = $messages["days"][6];
$messages["Sunday"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa" );
// -- compatibility, do not touch -- //
$messages["Mo"] = $messages["daysshort"][1];
$messages["Tu"] = $messages["daysshort"][2];
$messages["We"] = $messages["daysshort"][3];
$messages["Th"] = $messages["daysshort"][4];
$messages["Fr"] = $messages["daysshort"][5];
$messages["Sa"] = $messages["daysshort"][6];
$messages["Su"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre" );
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

$messages["message"] = "Message";
$messages["error"] = "Erreur";
$messages["date"] = "Date";
// miscellaneous texts
$messages["of"] = "of";
$messages["recently"] = "Récemment ...";
$messages["comments"] = "Commentaires";
$messages["comment on this"] = "Discuter";
$messages["my_links"] = "Mes Liens";
$messages["archives"] = "Archives";
$messages["search"] = "Recherche";
$messages["calendar"] = "Calendrier";
$messages["search_s"] = "Recherches";
$messages["search_this_blog"] = "Rechercher dans ce Carnet:";
$messages["about_myself"] = "Qui suis-je ?";
$messages["permalink_title"] = "Permalien vers Archives";
$messages["permalink"] = "Permalien";
$messages["posted_by"] = "Posté par";
$messages["reply"] = "Répondre";


// add comment form
$messages["add_comment"] = "Poursuivre la discussion";
$messages["comment_topic"] = "Sujet";
$messages["comment_text"] = "Texte";
$messages["comment_username"] = "Votre nom";
$messages["comment_email"] = "Votre adresse de courriel (facultatif)";
$messages["comment_url"] = "Votre site internet (facultatif)";
$messages["comment_send"] = "Envoyer";
$messages["comment_added"] = "Commentaire ajouté !";
$messages["comment_add_error"] = "Erreur lors de l'ajout";
$messages["article_does_not_exist"] = "Note inexistante";
$messages["no_posts_found"] = "Aucune note trouvée";
$messages["user_has_no_posts_yet"] = "Ce membre n'a pas publié de note";
$messages["back"] = "Retour";
$messages["back_top"] = "Retour haut de page";
$messages["trackbacks_for_article"] = "Rétrolien pour la note";
$messages["trackback_excerpt"] = "Extrait";
$messages["trackback_weblog"] = "Carnet";
$messages["search"] = "Recherche";
$messages["search_results"] = "Résultats";
$messages["search_matching_results"] = "Notes correspondantes: ";
$messages["search_no_matching_posts"] = "Aucune notes";
$messages["read_more"] = "(Suite)";
$messages["syndicate"] = "Syndication";
$messages["main"] = "Principal";
$messages["about"] = "À propos";
$messages["download"] = "Télécharger";

////// error messages /////
$messages["error_fetching_article"] = "Note introuvable.";
$messages["error_fetching_articles"] = "Notees introuvables.";
$messages["error_trackback_no_trackback"] = "Aucun rétrolien.";
$messages["error_incorrect_article_id"] = "ID de la note erroné.";
$messages["error_incorrect_blog_id"] = "ID du carnet erroné.";
$messages["error_comment_without_text"] = "Texte obligatoire.";
$messages["error_comment_without_name"] = "Nom obligatoire..";
$messages["error_adding_comment"] = "Erreur lors de l'ajout du commentaire à la base de donnée.";
$messages["error_incorrect_parameter"] = "Paramètre erroné.";
$messages["error_parameter_missing"] = "Paramètre manquant.";
$messages["error_blog_has_no_links"] = "Le carnet n'a pas encore de liens.";
$messages["error_comments_not_enabled"] = "Commentaires désactivés sur ce site.";
$messages["error_incorrect_search_terms"] = "Les mots clés ne sont pas valides";
$messages["error_no_search_results"] = "Aucun résultats de recherche";
$messages["error_no_albums_defined"] = "Il n'y a pas d'album valide dans ce carnet";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages["login"] = "Connexion";
$messages["welcome_message"] = "Bienvenue sur pLog";
$messages["error_incorrect_username_or_password"] = "Désolé, pseudo ou mot de passe incorrect.";
$messages["error_dont_belong_to_any_blog"] = " Désolé, vous n'êtes membre d'aucun carnet encore";
$messages["logout_message"] = "Déconnexion réussie.";
$messages["logout_message_2"] = "<a href=\"admin.php\">Cliquez ici</a>pour vous reconnecter, 
ou <a href=\"%1\$s\">ici pour aller %2\$s</a>.";
$messages["error_access_forbidden"] = "Accès interdit, vous devez vous identifier <a href=\"admin.php\">ici</a> avant .";
$messages["username"] = "Pseudo";
$messages["password"] = "Mot de passe";

// dashboard
$messages["dashboard"] = "Tableau de bord";

// menu options
$messages["newPost"] = "Nouveau";
$messages["Manage"] = "Editer";
$messages["managePosts"] = "Notes";
$messages["editPosts"] = "Notes";
$messages["editArticleCategories"] = "Catégories";
$messages["newArticleCategory"] = "Nouvelle catégorie";
$messages["manageLinks"] = "Liens";
$messages["editLinks"] = "Liens";
$messages["newLink"] = "Nouveau lien";
$messages["editLink"] = "Editer un lien";
$messages["editLinkCategories"] = "Catégorie de liens";
$messages["newLinkCategory"] = "Nouvelle catégorie de liens";
$messages["editLinkCategory"] = "Editer une catégorie de liens";
$messages["manageCustomFields"] = "Champs personnalisés";
$messages["blogCustomFields"] = "Champs personnalisés";
$messages["newCustomField"] = "Nouveau Champ personnalisé";
$messages["resourceCenter"] = "Centre de ressources";
$messages["resources"] = "Ressources";
$messages["newResourceAlbum"] = "Nouvel album";
$messages["newResource"] = "Nouvelle ressource";
$messages["controlCenter"] = "Configuration";
$messages["manageSettings"] = "Paramètres";
$messages["blogSettings"] = "Paramètres du carnet";
$messages["userSettings"] = "Paramètres de l'utilisateur'";
$messages["pluginCenter"] = "Centre des plugiciels";
$messages["Stats"] = "Statistiques";
$messages["manageBlogUsers"] = "Gérer les utilisateurs";
$messages["newBlogUser" ] = "Nouvel utilisateur";
$messages["showBlogUsers"] = "Utilisateurs";
$messages["manageBlogTemplates"] = "Modèles";
$messages["newBlogTemplate"] = "Nouveau modèle";
$messages["blogTemplates"] = "Modèles";
$messages["adminSettings"] = "Administration";
$messages["Users"] = "Utilisateurs";
$messages["createUser"] = "Créer utilisateur";
$messages["editSiteUsers"] = "Utilisateurs";
$messages["Blogs"] = "Carnets";
$messages["createBlog"] = "Créer un carnet";
$messages["editSiteBlogs"] = "Carnet";
$messages["Locales"] = "Paramètres de lieu";
$messages["newLocale"] = "Nouveau paramètres de lieu";
$messages["siteLocales"] = "Paramètre de lieu";
$messages["Templates"] = "Modèles";
$messages["newTemplate"] = "Nouveau modèles";
$messages["siteTemplates"] = "Modèles";
$messages["GlobalSettings"] = "Paramètres";
$messages["editSiteSettings"] = "Général";
$messages["summarySettings"] = "Sommaire";
$messages["templateSettings"] = "Modèles";
$messages["urlSettings"] = "URLs";
$messages["emailSettings"] = "Courriel";
$messages["uploadSettings"] = "Téléchargements";
$messages["helpersSettings"] = "Aides externes";
$messages["interfacesSettings"] = "Interfaces";
$messages["securitySettings"] = "Securité";
$messages["bayesianSettings"] = "Filtre bayesian";
$messages["resourcesSettings"] = "Ressources";
$messages["searchSettings"] = "Recherche";
$messages["cleanUpSection"] = "Nettoyer";
$messages["cleanUp"] = "Nettoyer";
$messages["editResourceAlbum"] = "Editer un album";
$messages["resourceInfo"] = "Editer une ressource";
$messages["editBlog"] = "Editer un carnet";
$messages["hours"] = "heures";

// new post
$messages["topic"] = "Sujet";
$messages["topic_help"] = "Titre de la note";
$messages["text"] = "Texte";
$messages["text_help"] = "Texte de la note. Cette partie apparaîtra sur la page principale";
$messages["extended_text"] = "Texte supplémentaire";
$messages["extended_text_help"] = "Texte supplémentaire de la note. Cette partie peut optionellement apparaître sur la page des notes ou sur la page principale. Voir les paramètres du carnet pour plus d'informations";
$messages["post_slug"] = "Titre de rappel";
$messages["post_slug_help"] = "Le titre de rappel sera utilisé pour générer de beaux liens permanents";
$messages["date"] = "Date";
$messages["post_date_help"] = "Date à laquelle la note a été postée";
$messages["status"] = "Statut";
$messages["post_status_help"] = "Selectionner un de ces statuts";
$messages["post_status_published"] = "Publié";
$messages["post_status_draft"] = "Ebauche";
$messages["post_status_deleted"] = "Supprimé";
$messages["categories"] = "Catégories";
$messages["post_categories_help"] = "Selectionner une ou plusieurs catégories";
$messages["post_comments_enabled_help"] = "Commentaires autorisés";
$messages["send_notification_help"] = "Notification de nouveaux commentaires";
$messages["send_trackback_pings_help"] = "Envoyer des rétroliens";
$messages["send_xmlrpc_pings_help"] = "Envoyer des pings XMLRPC";
$messages["save_draft_and_continue"] = "Sauvegarder le brouillon";
$messages["preview"] = "Prévisualiser";
$messages["add_post"] = "Envoyer!";
$messages["error_saving_draft"] = "Il y a eu une erreur lors de la sauvegarde du brouillon";
$messages["draft_saved_ok"] = "Brouillon sauvegardé";
$messages["error_sending_request"] = "Il y a eu une erreur en envoyant la requête.";
$messages["error_no_category_selected"] = "Veuillez choisir au moins une catégorie.";
$messages["error_missing_post_topic"] = "Veuillez taper un titre";
$messages["error_missing_post_text"] = "Note vide";
$messages["error_adding_post"] = "Il y a eu une erreur en envoyant la note.";
$messages["post_added_not_published"] = "Note ajoutée correctement mais non publiée.";
$messages["post_added_ok"] = "Note ajoutée correctement.";
$messages["send_notifications_ok"] = "Une notification vous sera envoyée par courriel à chaque nouveau commentaire ou rétrolien.";

// send trackbacks
$messages["error_sending_trackbacks"] = "Il y a eu une erreur en envoyant les rétroliens suivants";
$messages["send_trackbacks_help"] = "Veuillez sélectionner les URLs où vous souhaitez envoyer des pings rétroliens. Veuillez vérifier que ces sites supportent les rétroliens.";
$messages["send_trackbacks"] = "Envoyer des rétroliens";
$messages["ping_selected"] = "Avertir les sites sélectionnés";
$messages["trackbacks_sent_ok"] = "Rétroliens envoyés correctement aux URLs sélectionnées";

// posts page
$messages["show_by"] = "Trier par";
$messages["category"] = "Catégorie";
$messages["author"] = "Auteur";
$messages["post_status_all"] = "Tous";
$messages["author_all"] = "Tous";
$messages["search_terms"] = "Recherche";
$messages["show"] = "Montrer";
$messages["delete"] = "Supprimer";
$messages["actions"] = "Actions";
$messages["all"] = "Tous";
$messages["category_all"] = "Tous";
$messages["error_incorrect_article_id"] = "Identifiant de note erroné";
$messages["error_deleting_article"] = "Il y a eu une erreur en supprimant l'article \"%s\"";
$messages["article_deleted_ok"] = "Note \"%s\" supprimée";
$messages["articles_deleted_ok"] = "%s notes supprimées";
$messages["error_deleting_article2"] = "Il y a eu une erreur en supprimant la note avec l'identifiant \"%s\"";

// edit post page
$messages["update"] = "Mettre à jour";
$messages["editPost"] = "Editer la note";
$messages["error_fetching_post"] = "Erreur en récupérant la note.";
$messages["post_updated_ok"] = "Note \"%s\" mise à jour";
$messages["error_updating_post"] = "Il y a eu une erreur en mettant à jour la note";
$messages["notification_added"] = "Une notification vous sera envoyée par courriel à chaque nouveau commentaire ou rétrolien.";
$messages["notification_removed"] = "Aucune notification ne vous sera envoyée par courriel à chaque nouveau commentaire ou rétrolien.";

// post comments
$messages["url"] = "URL";
$messages["comment_status_all"] = "Tous";
$messages["comment_status_spam"] = "Spam";
$messages["comment_status_nonspam"] = "Pas de Spam";
$messages["error_fetching_comments"] = "Erreur en récupérant les commentaires.";
$messages["error_deleting_comments"] = "Erreur en supprimant les commentaires ou aucun commentaire sélectionné";
$messages["comment_deleted_ok"] = "Commentaire \"%s\" supprimé";
$messages["comments_deleted_ok"] = "%s commentaires supprimés";
$messages["error_deleting_comment"] = "Erreur en supprimant le commentaire \"%s\"";
$messages["error_deleting_comment2"] = "Erreur en supprimant le commentaire avec l'identifiant' %s";
$messages["editComments"] = "Commentaires";
$messages["mark_as_spam"] = "Identifier comme spam";
$messages["mark_as_no_spam"] = "Identifier comme non-spam";
$messages["error_incorrect_comment_id"] = "Identifiant du commentaire erroné.";
$messages["error_marking_comment_as_spam"] = "Erreur dans l'identification du commentaire comme spam.";
$messages["comment_marked_as_spam_ok"] = "Commentaire bien identifié comme spam.";
$messages["error_marking_comment_as_nonspam"] = "Erreur dans l'identification du commentaire comme non-spam.";
$messages["comment_marked_as_nonspam_ok"] = "Commentaire bien identifié comme non-spam.";

// post trackbacks
$messages["blog"] = "Carnet";
$messages["excerpt"] = "Extrait";
$messages["error_fetching_trackbacks"] = "Erreur en récupérant les rétroliens";
$messages["error_deleting_trackbacks"] = "Erreur en supprimant les rétroliens ou il n'y aucun élément sélentionné";
$messages["error_deleting_trackback"] = "Erreur en supprimant le rétrolien \"%s\"";
$messages["error_deleting_trackback2"] = "Erreur en supprimant le rétrolien avec l'identifiant \"%s\"";
$messages["trackback_deleted_ok"] = "Rétrolien \"%s\" supprimé";
$messages["trackbacks_deleted_ok"] = "%s rétroliens supprimés";
$messages["editTrackbacks"] = "Rétroliens";

// post statistics
$messages["referrer"] = "Référence";
$messages["hits"] = "Appel de fichier";
$messages["error_no_items_selected"] = "Aucun élément sélectionné pour être supprimé";
$messages["error_deleting_referrer"] = "Erreur en supprimant la référence \"%s\"";
$messages["error_deleting_referrer2"] = "Erreur en supprimant la référence avec l'identifiant \"%s\"";
$messages["referrer_deleted_ok"] = "Référence \"%s\" supprimée";
$messages["referrers_deleted_ok"] = "%s références supprimées";

// categories
$messages["posts"] = "Notes";
$messages["show_in_main_page"] = "Montrer sur la page principale";
$messages["error_incorrect_category_id"] = "L'identifiant de la catégorie est erroné ou aucun élément sélectionné";
$messages["error_category_has_articles"] = "La catégorie \"%s\" est utilisée par plusieurs notes. Éditez les notes d'abord.";
$messages["category_deleted_ok"] = "Catégorie \"%s\" supprimée";
$messages["categories_deleted_ok"] = "%s catégories supprimées";
$messages["error_deleting_category"] = "Erreur en supprimant la catégorie \"%s\"";
$messages["error_deleting_category2"] = "Erreur en supprimant la catégorie avec l'identifiant \"%s\"";
$messages["yes"] = "Oui";
$messages["no"] = "Non";

// new category
$messages["name"] = "Nom";
$messages["category_name_help"] = "Nom qui représantera la catégorie";
$messages["description"] = "Description";
$messages["category_description_help"] = "Description longue pour cette catégorie";
$messages["show_in_main_page_help"] = "Montrer les notes dans la page principale ou seulement quand cette catégorie est visualisée ";
$messages["error_empty_name"] = "Vous devez choisir un nom";
$messages["error_empty_description"] = "Vous devez entrer une description";
$messages["error_adding_article_category"] = "Erreur en ajoutant la catégorie. Vérifiez les données saisies";
$messages["category_added_ok"] = "Catégorie \"%s\" correctement ajoutée au carnet";
$messages["add"] = "Ajouter";
$messages["reset"] = "Effacer";

// update category
$messages["error_updating_article_category"] = "Erreur en mettant à jour la catégorie de la note.";
$messages["error_fetching_category"] = "Erreur en récupérant la catégorie.";
$messages["article_category_updated_ok"] = "Catégorie \"%s\" correctement mise à jour";

// links
$messages["feed"] = "Fil";
$messages["error_no_links_selected"] = "L'identifiant du lien est erroné ou aucun élément sélectionné pour être supprimé";
$messages["error_incorrect_link_id"] = "L'identifiant du lien est erroné";
$messages["error_removing_link"] = "Erreur en supprimant le lien \"%s\"";
$messages["error_removing_link2"] = "Erreur en supprimant le lien avec l'identifiant \"%s\"";
$messages["link_deleted_ok"] = "Lien \"%s\" supprimé";
$messages["links_deleted_ok"] = "%s liens supprimés";

// new link
$messages["link_name_help"] = "Nom donné à ce lien";
$messages["link_url_help"] = "Adresse vers laquelle ce lien pointe";
$messages["link_description_help"] = "Brève description du lien";
$messages["link_feed_help"] = "Un lien vers un fil RSS or Atom peut être ajouté";
$messages["link_category_help"] = "Choisissez une catégorie de lien valide";
$messages["error_adding_link"] = "Erreur en ajoutant le lien. Vérifiez les données saisies et recommencez.";
$messages["error_invalid_url"] = "Adresse incorrecte";
$messages["link_added_ok"] = "Lien \"%s\" ajouté";

// update link
$messages["error_updating_link"] = "Erreur en mettant à jour le lien. Vérifiez les données saisies et recommencez";
$messages["error_fetching_link"] = "Erreur en récupérant le lien";
$messages["link_updated_ok"] = "Lien \"%s\" mis à jour";

// link categories
$messages["links"] = "Liens";
$messages["error_invalid_link_category_id"] = "Catégorie de lien erroné ou aucune catégorie de lien sélectionnée.";
$messages["error_links_in_link_category"] = "Catégorie \"%s\" ne peut être supprimer parce qu'elle contient des liens.";
$messages["error_removing_link_category"] = "Erreur suppression catégorie \"%s\".";
$messages["link_category_deleted_ok"] = "Catégorie \"%s\" bien supprimée.";
$messages["link_categories_deleted_ok"] = "%s catégories supprimées.";
$messages["error_removing_link_category2"] = "Erreur suppression catégorie avec l'identifiant\"%d\"";

// new link category
$messages["link_category_name_help"] = "Nom donné à cette catégorie de lien";
$messages["error_adding_link_category"] = "Erreur en ajoutant la nouvelle catégorie";
$messages["link_category_added_ok"] = "Catégorie \"%s\" bien ajoutée.";

// edit link category
$messages["error_updating_link_category"] = "Erreur en mettant à jour la catégorie de liens. Vérifiez les données saisies et recommencez";
$messages["link_category_updated_ok"] = "Catégorie de liens \"%s\" bien mise à jour.";
$messages["error_fetching_link_category"] = "Erreur en récupérant la catégorie de liens.";

// custom fields
$messages["type"] = "Type";
$messages["hidden"] = "Caché";
$messages["fields_deleted_ok"] = "%s champs personnalisés supprimés";
$messages["field_deleted_ok"] = "Champ personnalisé \"%s\" supprimé";
$messages["error_deleting_field"] = "Erreur en supprimant le champ \"%s\"";
$messages["error_deleting_field2"] = "Erreur en supprimant le champ ave l'identifiant \"%s\"";
$messages["error_incorrect_field_id"] = "ID du champ non valide.";

// new custom field
$messages["field_name_help"] = "Nom faisant référence à la valeur du champ dans la note";
$messages["field_description_help"] = "Courte description du champ.";
$messages["field_type_help"] = "Selectionnez un type de champ";
$messages["field_hidden_help"] = "Si ce champ est caché, il ne sera pas visible lors de l'ajout ou de l'édition d'une note. Fonction principalement utilisée par les plugiciels";
$messages["error_adding_custom_field"] = "Erreur en ajoutant un champ. Vérifiez les données saisies et recommencez";
$messages["custom_field_added_ok"] = "Champ personnalisé \"%s\" ajouté";
$messages["text_field"] = "Texte";
$messages["text_area"] = "Boîte de texte";
$messages["checkbox"] = "Case à cocher";
$messages["date_field"] = "Date";

// edit custom field
$messages["error_fetching_custom_field"] = "Erreur en récupérant le champ";
$messages["error_updating_custom_field"] = "Erreur en mettant à jour le champ. Vérifiez les données saisies et recommencez";
$messages["custom_field_updated_ok"] = "Champ personnalisé \"%s\" mis à jour";

// resources
$messages["root_album"] = "Album racine";
$messages["num_resources"] = "Nombre de ressources";
$messages["total_size"] = "Taille totale";
$messages["album"] = "Album";
$messages["error_incorrect_album_id"] = "Identifiant de l'album erroné";
$messages["error_base_storage_folder_missing_or_unreadable"] = "It was not possible for pLog to create the necessary folders where resources are going to be installed. This might be due to several reasons, such as your PHP installation running with safe mode enabled or your user not having enough permissions to do so. You may still try to carry out the operation manually, by creating the following folders: <br/><br/>%s<br/><br/>If these folders already exist please make sure that they can be read and written by the user running the web server.";
$messages["items_deleted_ok"] = "%s éléments supprimés";
$messages["error_album_has_children"] = "L'album \"%s\" a un enfant. Veuillez d'abord éditer les albums enfants";
$messages["item_deleted_ok"] = "Elément \"%s\" supprimé";
$messages["error_deleting_album"] = "Erreur en supprimant l'album \"%s\"";
$messages["error_deleting_album2"] = "Erreur en supprimant l'album d'ID \"%s\"";
$messages["error_deleting_resource"] = "Erreur en supprimant la ressource \"%s\"";
$messages["error_deleting_resource2"] = "Erreur en supprimant la ressource d'ID \"%s\"";
$messages["error_no_resources_selected"] = "Aucun élément sélectionné pour être supprimé";
$messages["resource_deleted_ok"] = "Ressource \"%s\" supprimée";
$messages["album_deleted_ok"] = "Album \"%s\" supprimé";
$messages["add_resource"] = "Ajouter la ressource";
$messages["add_resource_preview"] = "Ajouter l'aperçu";
$messages["add_album"] = "Ajouter l'album";

// new album
$messages["album_name_help"] = "Nom court du nouvel album";
$messages["parent"] = "Parent";
$messages["no_parent"] = "Pas de parent";
$messages["parent_album_help"] = "Utilisez ceci pour imbriquer des albums les uns dans les autres afin de mieux organiser vos fichiers";
$messages["album_description_help"] = "Longue description du contenu de l'album";
$messages["error_adding_album"] = "Erreur en ajoutant le nouvel album. Vérifiez les données entrées et recommencez";
$messages["album_added_ok"] = "Album \"%s\" ajouté";

// edit album
$messages["error_incorrect_album_id"] = "Id de l'album incorrect.";
$messages["error_fetching_album"] = "Erreur en récupérant l'album.";
$messages["error_updating_album"] = "Erreur en mettant l'album à jour. Vérifiez les données entrées et recommencez";
$messages["album_updated_ok"] = "Album \"%s\" mis à jour";
$messages["show_album_help"] = "Si c'est disactivé, cet album ne sera pas visibke dans la liste des album disponible sur ce Blog";

// new resource
$messages["file"] = "Fichier";
$messages["resource_file_help"] = "Fichier qui sera ajouté au blog. Utilisez le lien \"Ajouter\" pour ajouter plusieurs fichiers en même temps.";
$messages["add_field"] = "Ajouter";
$messages["resource_description_help"] = "Longue description du fichier";
$messages["resource_album_help"] = "Sélectionnez l'album auquel le fichier sera ajouté";
$messages["error_no_resource_uploaded"] = "Aucun fichier sélectionné pour être ajouté";
$messages["resource_added_ok"] = "Ressource \"%s\" ajoutée";
$messages["error_resource_forbidden_extension"] = "Type de fichier interdit";
$messages["error_resource_too_big"] = "Fichier trop gros";
$messages["error_uploads_disabled"] = "Uploads désactivés";
$messages["error_quota_exceeded"] = "Quota dépassé";
$messages["error_adding_resource"] = "Erreur en ajoutant le fichier";

// edit resource
$messages["editResource"] = "Editer la Ressource";
$messages["resource_information_help"] = "Quelques information à propos du fichier";
$messages["information"] = "Information";
$messages["size"] = "Taille";
$messages["format"] = "Format";
$messages["dimensions"] = "Dimensions";
$messages["bits_per_sample"] = "Bits par échantillon";
$messages["sample_rate"] = "Taux de l'échantillon";
$messages["number_of_channels"] = "Nombre de canaux";
$messages["legnth"] = "Longueur";
$messages["thumbnail_format"] = "Taille de l'aperçu";
$messages["regenerate_preview"] = "Regénérer l'arpeçu";
$messages["error_fetching_resource"] = "Erreur en récupérant la ressource";
$messages["error_updating_resource"] = "Erreur en mettant à jour la ressource";
$messages["resource_updated_ok"] = "Ressource \"%s\" mise à jour";

// blog settings
$messages["blog_link"] = "Lien vers le carnet";
$messages["blog_link_help"] = "Permalien vers ce carnet";
$messages["blog_name_help"] = "Titre du carnet";
$messages["blog_description_help"] = "Description longue du contenu de ce carnet";
$messages["language"] = "Langue";
$messages["blog_language_help"] = "Langue utilisée pour afficher les textes dans le Blog et dans la partie Administration.";
$messages["max_main_page_items"] = "Nombre d'éléments sur la page principale";
$messages["max_main_page_items_help"] = "Nombre d'éléments qui peuvent être affichés à chaque fois sur la page principale de ce Blog.";
$messages["max_recent_items"] = "Nombre d'éléments recents";
$messages["max_recent_items_help"] = "Nombre maximum de notes récentes affichées sur la page principale.";
$messages["template"] = "Modèle";
$messages["choose"] = "Choisir";
$messages["blog_template_help"] = "Le modèle qui sera utilisé pour afficher le contenu de ce carnet. Cette liste contient les modèles généraux et ceux installés uniquement pour ce carnet";
$messages["use_read_more"] = 'Utiliser le lien "suite..." dans les articles';
$messages["use_read_more_help"] = 'Si activé, seulement le texte saisi dans "Texte" sera affiché sur la page principale. Et pour afficher le texte saisi dans "Texte supplémentaire", un lien "suite..." sera ajouté à chaque note.';
$messages["enable_wysiwyg"] = "Activer l'éditeur visuel pour les articles";
$messages["enable_wysiwyg_help"] = "Active un éditeur HTML complet pour l'édition des articles. L'éditeur fonctionne seulement sur Mozilla 1.3 et ultérieur, IE 5.5 et ultérieur.";
$messages["enable_comments"] = "Active les commentaires par défaut.";
$messages["enable_comments_help"] = "Active les commentaires pour tous les notes par défaut. Les commentaires pourront être activés ou désactivé pour une note particulière durant sa création ou son édition.";
$messages["show_future_posts"] = "Montre les notes futures dans le calendrier.";
$messages["show_future_posts_help"] = "Les notes dont la date de publication n'est pas passée pourront apparaître dans le calendrier et seront visibles par les visiteurs.";
$messages["comments_order"] = "Ordre des commentaires";
$messages["comments_order_help"] = "Ordre dans lequel les commentaires apparaîtront dans la page principale.";
$messages["oldest_first"] = "Les plus vieux en premier";
$messages["newest_first"] = "Les plus recents en premier";
$messages["categories_order"] = "Ordre des catégories";
$messages["categories_order_help"] = "Ordre dans lequel les catégories apparaîtront dans la page principale.";
$messages["most_recent_updated_first"] = "Les plus récemment mis à jour en premier";
$messages["alphabetical_order"] = "Ordre alphabetique";
$messages["reverse_alphabetical_order"] = "Ordre alphabétique inverse";
$messages["most_articles_first"] = "Le plus de notes en premier";
$messages["link_categories_order"] = "Ordre des catégories de lien";
$messages["link_categories_order_help"] = "Ordre dans lequel les catégories de lien apparaîtront dans la page principale.";
$messages["most_links_first"] = "Le plus de liens en premier";
$messages["most_links_last"] = "Le plus de liens en dernier";
$messages["time_offset"] = "Décalage temps";
$messages["time_offset_help"] = "Décalage horaire qui sera ajouté dynamiquement à toutes les dates et heures dans le Blog";
$messages["close"] = "Fermer";
$messages["select"] = "Selectionner";
$messages["error_updating_settings"] = "Erreur en mettant à jour les paramètres du carnet. Vérifiez les données saisies et recommencez";
$messages["error_invalid_number"] = "Nombre erroné";
$messages["error_incorrect_time_offset"] = "Décalage temps invalide";
$messages["blog_settings_updated_ok"] = "Paramètres mis à jour";

// user settings
$messages["username_help"] = "Pseudo public. Ne pourra pas être changé";
$messages["full_name"] = "Nom complet";
$messages["full_name_help"] = "Nom complet";
$messages["password_help"] = "Tapez et confirmez un nouveau mot de passe. Laissez vide pour ne pas le changer";
$messages["confirm_password"] = "Confirmez le mot de passe";
$messages["email"] = "Courriel";
$messages["email_help"] = "Courriel à lequel les notifications seront envoyées";
$messages["bio"] = "Votre bio";
$messages["bio_help"] = "Votre portrait. Une description de vous-même";
$messages["picture"] = "Photo";
$messages["user_picture_help"] = "Sélectionnez une photo parmis celles ajoutées à ce carnet comme photo personnelle";
$messages["error_invalid_password"] = "Mot de passe invalide. Vérifiez qu'il n'est pas trop court";
$messages["error_passwords_dont_match"] = "Désolé, mot de passe erroné";
$messages["error_incorrect_email_address"] = "Courriel erroné";
$messages["error_updating_user_settings"] = "Erreur en mettant à jour les paramètres utilisateurs. Vérifiez les données saisies et recommencez";
$messages["user_settings_updated_ok"] = "Paramètres utilisateurs mis à jour";
$messages["resource"] = "Ressource";

// plugin center
$messages["identifier"] = "Identifiant";

// blog users
$messages["revoke_permissions"] = "Retirer permissions";
$messages["error_no_users_selected"] = "Aucuns Membres sélectionnés.";
$messages["user_removed_from_blog_ok"] = "Membre \"%s\" bien supprimé du Blog.";
$messages["users_removed_from_blog_ok"] = "%s membres supprimés";
$messages["error_removing_user_from_blog"] = "Erreur en supprimant le Membre \"%s\" du Blog.";
$messages["error_removing_user_from_blog2"] = "Erreur en supprimant le Membre d'ID \"%s\" du Blog.";

// new blog user
$messages["new_blog_username_help"] = "Pseudo du Membre qui aura accès à ce Blog. Les nouveaus Membres ont seulement accès aux section \"Réglages\" et \"Centrale Ressources\".";
$messages["send_notification"] = "Envoyer une notification";
$messages["send_user_notification_help"] = "Envoyer un e-mail de notification à ce Membre";
$messages["notification_text"] = "Texte de la notification";
$messages["notification_text_help"] = "Texte qui sera inclu dans le message de notification";
$messages["error_adding_user"] = "Erreur lors de l'autorisation de l'accès. Vérifiez les données entrées et recommencez";
$messages["error_empty_text"] = "Vous devez entrer un texte";
$messages["error_adding_user"] = "Erreur en ajoutant le Membre. Vérifiez les données entrées et recommencez";
$messages["error_invalid_user"] = "Le Membre \"%s\" n'est pas valide ou n'existe pas";
$messages["user_added_to_blog_ok"] = "Le Membre \"%s\" a l'autorisation d'accès à ce blog à présent.";

// blog templates
$messages["error_no_templates_selected"] = "Aucun template sélectionné";
$messages["error_template_is_current"] = "Le template \"%s\" ne peut être supprimé car c'est celui qui est utilisé";
$messages["error_removing_template"] = "Erreur en supprimant le template \"%s\"";
$messages["template_removed_ok"] = "Template \"%s\" supprimé";
$messages["templates_removed_ok"] = "%s templates supprimés";

// new blog template
$messages["template_installed_ok"] = "Template \"%s\" ajouté";
$messages["error_installing_template"] = "Erreur durant l'installation du template \"%s\"";
$messages["error_missing_base_files"] = "Fichier(s) manquant(s)";
$messages["error_add_template_disabled"] = "Aucun template ne peut être ajouté car cette fonction a été désactivée.";
$messages["error_must_upload_file"] = "Pas de template à télécharger";
$messages["error_uploads_disabled"] = "Les uploads ont été désactivés";
$messages["error_no_new_templates_found"] = "Pas de nouveaux templates trouvés";
$messages["error_template_not_inside_folder"] = "Les fichiers du template doivent être dans un répertoire du même nom que le template.";
$messages["error_missing_base_files"] = "Fichier(s) du template basique manquant(s)";
$messages["error_unpacking"] = "Erreur en décompressant le fichier";
$messages["error_forbidden_extensions"] = "Des fichiers d'extensions interdites sont inclus dans le template";
$messages["error_creating_working_folder"] = "Erreur durant la création du répertoire temporaire nécessaire à la décompression.";
$messages["error_checking_template"] = "Erreur en vérifiant le template : %s";
$messages["template_package"] = "Template package";
$messages["blog_template_package_help"]  = "Use this form to upload a new template set, which will only be available to your blog. If it is not possible to upload a template package using this form, upload the template set manually and place it in <b>%s</b>, which is the folder where your blog templates are stored and click the \"<b>Scanner les Templates</b>\" button. pLog will scan the folder and will automatically add any new template it can find.";
$messages["scan_templates"] = "Scanner les Templates";

// site users
$messages["user_status_active"] = "Actif";
$messages["user_status_disabled"] = "Inactif";
$messages["user_status_all"] = "Tous";
$messages["user_status_unconfirmed"] = "non-confirmé";
$messages["error_invalid_user2"] = "Le Membre d'ID \"%s\" n'existe pas";
$messages["error_deleting_user"] = "Erreur en supprimant le Membre \"%s\"";
$messages["user_deleted_ok"] = "Membre \"%s\" supprimé";
$messages["users_deleted_ok"] = "%s Membres supprimés";

// create user
$messages["user_added_ok"] = "Membre \"%s\" ajouté";
$messages["error_incorrect_username"] = "Pseudo invalide ou utilisé";
$messages["user_status_help"] = "Statut actuel de le Membre";
$messages["user_blog_help"] = "Blog avec lequel cet Membre est initialisé";
$messages["none"] = "Aucun";

// edit user
$messages["error_invalid_user"] = "ID du Membre invalide ou le Membre n'exite pas.";
$messages["error_updating_user"] = "Erreur en mettant à jour les paramètres Membre. Vérifiez les données entrées et recommencez";
$messages["blogs"] = "Blogs";
$messages["user_blogs_help"] = "Blogs du Membre ou ceux auxquels il a accès";
$messages["site_admin"] = "Administrateur";
$messages["site_admin_help"] = "Si cet Membre est administrateur, il pourra accéder à la partie \"Administration\" et accomplir des taches administratives.";
$messages["user_updated_ok"] = "Membre \"%s\" mis à jour";

// site blogs
$messages["blog_status_all"] = "Tous";
$messages["blog_status_active"] = "Actif";
$messages["blog_status_disabled"] = "Inactif";
$messages["blog_status_unconfirmed"] = "Non-validé";
$messages["owner"] = "Propriétaires";
$messages["quota"] = "Quota";
$messages["bytes"] = "octets";
$messages["error_no_blogs_selected"] = "Aucun blog sélectionné pour être désactivé";
$messages["error_blog_is_default_blog"] = "Le Blog \"%s\" ne peut être supprimé car il s'agit du Blog par défaut.";
$messages["blog_deleted_ok"] = "Blog \"%s\" désactivé";
$messages["blogs_deleted_ok"] = "%s Blogs supprimés";
$messages["error_deleting_blog"] = "Erreur en désactivant le Blog \"%s\"";
$messages["error_deleting_blog2"] = "Erreur en désactivant le Blog d'ID \"%s\"";

// create blog
$messages["error_adding_blog"] = "Erreur en ajoutant le Blog. Vérifiez les données entrées et recommencez";
$messages["blog_added_ok"] = "Blog \"%s\" ajouté";

// edit blog
$messages["blog_status_help"] = "Statut du Blog";
$messages["blog_owner_help"] = "Membre considéré comme propriétaire du Blog, qui aura un contrôle total des paramètres du Blog";
$messages["users"] = "Membre";
$messages["blog_quota_help"] = "Quota de ressource en octet. Mettre à 0 pour illimité ou laisser vide pour utilisé le quota par défaut";
$messages["blog_users_help"] = "Membre qui ont accès à ce Blogs. Sélectionner un Membre de gauche et le mettre à droite pour qu'il ait des droits d'accès au Blog";
$messages["edit_blog_settings_updated_ok"] = "Blog \"%s\"mis à jour";
$messages["error_updating_blog_settings"] = "Erreur en mettant à jour le blog \"%s\"";
$messages["error_incorrect_blog_owner"] = "Membre sélectionné comme propriétaire, incorrect.";
$messages["error_fetching_blog"] = "Erreur en récupérant le Blog";
$messages["error_updating_blog_settings2"] = "Erreur en mettant à jour le blog. Vérifiez les données entrées et recommencez";
$messages["add_or_remove"] = "Ajouter ou supprimer des Membres";

// site locales
$messages["locale"] = "Locale";
$messages["locale_encoding"] = "Encodage";
$messages["locale_deleted_ok"] = "Locale \"%s\" supprimée";
$messages["error_no_locales_selected"] = "Aucune locale sélectionnée pour être supprimée";
$messages["error_deleting_only_locale"] = "Cette locale ne peut être supprimée car c'est la seule présente sur le système.";
$messages["locales_deleted_ok"]= "%s locales supprimées";
$messages["error_deleting_locale"] = "Erreur en supprimant la locale \"%s\"";
$messages["error_locale_is_default"] = "La locale \"%s\" ne peut être supprimée car il s'agit de la locale par défaut pour les nouveau Blogs";

// add locale
$messages["error_invalid_locale_file"] = "Fichier de locale invalide";
$messages["error_no_new_locales_found"] = "Pas de nouveaux fichiers de locale trouvés";
$messages["locale_added_ok"] = "Locale \"%s\" ajouté";
$messages["error_saving_locale"] = "Erreur en sauvegardant la nouvelle locale";
$messages["scan_locales"] = "Scanner les locales";
$messages["add_locale_help"] = "Use this form to upload a new locale file. If it is not possible to upload files using this form, upload the locale file manually and place it in <b>./locales/</b>, which is the folder where locale files are stored and click the \"<b>Scan Locales</b>\" button. pLog will scan the folder and will automatically add any new locale file can find.";

// site templates
$messages["error_template_is_default"] = "Template \"%s\" ne peut être supprimé car il s'agit du template par défaut";

// add template
$messages["global_template_package_help"] = "Use this form to upload a new template set, which will be available to all blogs in the site. If it is not possible to upload a template package using this form, upload the template set manually and place it in <b>%s</b>, which is the folder where globally available templates are stored and click the \"<b>Scan templates</b>\" button. pLog will scan the folder and will automatically add any new template it can find.";

// global settings
$messages["site_config_saved_ok"] = "Paramètres de site sauvegardés";
$messages["error_saving_site_config"] = "Erreur en sauvegardant les paramètres de site";
/// general settings
$messages["help_comments_enabled"] = "Activer ou désactiver les commentaires sur les nouveaux Blogs par défaut";
$messages["help_beautify_comments_text"] = "Si activé, LEs commentaires postés seront formatés en ajoutant des paragraphes et des liens automatiques pour toutes les URLs";
$messages["help_temp_folder"] = "Répertoire que pLog peut utiliser pour écrire les données temporaires comme les templates compilés, etc. Utiliser un répertoire hors de cette partie du serveur pour augmenter la sécurité.";
$messages["help_base_url"] = "URL de base où ce blog est installé";
$messages["help_subdomains_enabled"] = "Activer ou disactiver les sous-domaines. Veuillez lire la documentation au sujet des sous-domaines pour plus d'informations.";
$messages["help_subdomains_base_url"] = "Quand les sous-domaines sont activés, cette URL est utilisée à la place de l'URL de base (base_url). Utiliser {blogname} pour donner le nom du blog et {username} pour donner le nom du propriétaire du Blog afin de générer un lien vers le Blog";
$messages["help_include_blog_id_in_url"] = "Meaningful only when subdomains are enabled and \"normal\" URLs are enabled, forces internally-generated URLs not to have the \"blogId\" parameter. Do not change unless you know what you are doing";
$messages["help_script_name"] = "Set this if you need to rename index.php to something else";
$messages["help_show_posts_max"] = "Nombre de notes montré dans la page principale. Seulement utilisé pour les nouveaux carnets";
$messages["help_recent_posts_max"] = "Maximum number of recent posts shown in the main page. Only meaningful for new blogs";
$messages["help_save_drafts_via_xmlhttprequest_enabled"] = "Whether the feature that allows to save drafts via Javascript and the XmlHttpRequest is enabled";
$messages["help_locale_folder"] = "Répertoire où sont stockées les locale";
$messages["help_default_locale"] = "Réglage de la langue par défaut pour les nouveaux carnets";
$messages["help_default_blog_id"] = "Le carnet affiché par défaut si aucun carnet n'est sélectionné (Numéro du carnet)";
$messages["help_default_time_offset"] = "Décalage de temps par défaut pour les nouveaux carnets";
$messages["help_html_allowed_tags_in_comments"] = "Space-separated list of the HTML tags that are allowed in comments";
$messages["help_referer_tracker_enabled"] = "Enable or disable the feature to save referres to the database. Set to disabled for higher performance";
$messages["help_show_more_enabled"] = "Enable or disable the \"more...\" feature by default for new blogs";
$messages["help_update_article_reads"] = "Enable or disable the update of the counter of times that an article has been read is updated or not. Set to disabled for higher performance";
$messages["help_update_cached_article_reads"] = "Enable or disable the update of the counter of times that an article has been read is updated, even when caching has been turned on";
$messages["help_xmlrpc_ping_enabled"] = "Enable or disable sending XMLRPC pings to sites that support this feature";
$messages["help_send_xmlrpc_pings_enabled_by_default"] = "Enable or disable by default this feature when posting or updating an article";
$messages["help_xmlrpc_ping_hosts"] = "URL pointing to the XMLRPC interface of sites that support the XMLRPC ping specifictaion. Put each URL in one new line";
$messages["help_trackback_server_enabled"] = "Enable or disable the feature to receive incoming trackbacks";
$messages["help_htmlarea_enabled"] = "Enable or disable the WYSIWYG post editor by default in new blogs";
$messages["help_plugin_manager_enabled"] = "Enable or disable plugins";
$messages["help_minimum_password_length"] = "Minimun length for passwords";
$messages["help_xhtml_converter_enabled"] = "If enabled, pLog will try to convert all HTML code into proper XHTML code";
$messages["help_xhtml_converter_aggressive_mode_enabled"] = "If enabled, pLog will try even harder to generate XHTML out of HTML code, but it will be more prone to errors";
$messages["help_session_save_path"] = "Please use this setting to change the folder where pLog stores its session data, via the PHP function session_save_path() Please make sure that the folder is writable by the web server. Leave empty to use PHP\"s default session folder";
// summary settings
$messages["help_summary_page_show_max"] = "Number of items that will be shown in the summary page. This setting control all lists in the summary page (recent articles, most active blogs, etc)";
$messages["help_summary_blogs_per_page"] = "Number of blogs per page in the \"Blogs List\" section";
$messages["help_forbidden_usernames"] = "List of usernames that are not allowed to be registered";
$messages["help_force_one_blog_per_email_account"] = "Restrict to only one blog per email account";
$messages["help_summary_show_agreement"] = "Show and an agreement text and make users accept it before proceeding to the registration process";
$messages["help_need_email_confirm_registration"] = "Force users to confirm their registration by clicking a link embedded in an email sent to their account";
$messages["help_summary_disable_registration"] = "Whether users are allowed to register new blogs in this site";
// templates
$messages["help_template_folder"] = "Folder where templates are stored";
$messages["help_default_template"] = "Template par défaut pour les nouveaux blogs";
$messages["help_users_can_add_templates"] = "Allow users to upload their own custom templates";
$messages["help_template_compile_check"] = "If disabled, Smarty will check every time if template files have changed and if so, use the new version. Set this to disabled for higher performance";
$messages["help_template_cache_enabled"] = "Enable the template cache. If enabled, the cached version of a page will be used whenever possible. No data will need to be fetched from the database and templates will not need to be recompiled";
$messages["help_template_cache_lifetime"] = "Lifetime in seconds of the cache. Set to -1 to force the cache to never expire. If set to 0, the cache will be disabled but it is recommended to set template_cache_enabled to \"No\" in order to disable the cache";
$messages["help_template_http_cache_enabled"] = "Enable support for HTTP conditional requests. If enabled, pLog will take the \"If-Modified-Since\" HTTP header into account and send only content if strictly needed. Enable this to save bandwidth";
$messages["help_allow_php_code_in_templates"] = "Allows to embed native PHP code in Smarty templates inside {php}...{/php} blocks";
// urls
$messages["help_request_format_mode"] = "Sélectionner un des formats d'URL disponibles. Si vous utlisez les URLs personnalisées, cofigurez les paramètres ci-dessous";
$messages["plain"] = "Simple";
$messages["search_engine_friendly"] = "Search engine friendly";
$messages["custom_url_format"] = "URLs personnalisées";
$messages["help_permalink_format"] = "Format des permalinks lors de l'utilisation des URLs personnalisées";
$messages["help_category_link_format"] = "Format des liens vers les catégories lors de l'utilisation des URLs personnalisées";
$messages["help_blog_link_format"] = "Format des liens vers les Blogs lors de l'utilisation des URLs personnalisées";
$messages["help_archive_link_format"] = "Format des liens vers les archives lors de l'utilisation des URLs personnalisées";
$messages["help_user_posts_link_format"] = "Format des liens vers des articles postés par certains Membres lors de l'utilisation des URLs personnalisées";
$messages["help_post_trackbacks_link_format"] = "Format vers les trackbacks page lors de l'utilisation des URLs personnalisées";
$messages["help_template_link_format"] = "Format des liens vers les pages de templates classiques personnalisées lors de l'utilisation des URLs personnalisées";
$messages["help_album_link_format"] = "Format des liens vers les albums lors de l'utilisation des URLs personnalisées";
$messages["help_resource_link_format"] = "format des liens vers les pages de ressources avec des fichiers lors de l'utilisation des URLs personnalisées";
$messages["help_resource_preview_link_format"] = "Format des liens vers les aperçus des ressources lors de l'utilisation des URLs pérsonnalisées";
$messages["help_resource_medium_size_preview_link_format"] = "Format des liens vers les aperçus de moyenne taille des ressources lors de l'utilisation des URLs pérsonnalisées";
$messages["help_resource_download_link_format"] = "Format des liens vers les fichiers lors de l'utilisation des URLs pérsonnalisées";
// email
$messages["help_check_email_address_validity"] = "Vérifier l'adresse eMail des nouveaux Membres.";
$messages["help_email_service_enabled"] = "Activer/Désactiver service eMail.";
$messages["post_notification_source_address"] = "Adresses eMail de l'expéditeur.";
$messages["help_email_service_type"] = "Méthode d'envoi des eMails, à bien régler.";
$messages["help_smtp_host"] = "Adresse SMTP.";
$messages["help_smtp_port"] = "Port  SMTP du hôte.";
$messages["help_smtp_use_authentication"] = "Si SMTPS compléter la suite.";
$messages["help_smtp_username"] = "Pseudo pour SMTPS.";
$messages["help_smtp_password"] = "MDP pour SMTPS.";
// helpers
$messages["help_path_to_tar"] = "Chemin vers 'tar'.";
$messages["help_path_to_gzip"] = "Chemin vers  'gzip'.";
$messages["help_path_to_bz2"] = "Chemin vers 'bzip2'.";
$messages["help_path_to_unzip"] = "Chemin vers 'unzip'.";
$messages["help_unzip_use_native_version"] = "Utilise une version de paquet PHP natif pour décompresser les fichiers .zip";
// uploads
$messages["help_uploads_enabled"] = "Activer/Désactiver upload de TOUS fichiers.";
$messages["help_maximum_file_upload_size"] = "Taille maximale en Octet des fichiers uploadés.";
$messages["help_upload_forbidden_files"] = "Liste des extensions de fichiers interdits, séparés par un espace.";
// interfaces
$messages["help_xmlrpc_api_enabled"] = "Activer/Désactiver XMLRPC pour poster depuis votre bureau.";
$messages["help_rdf_enabled"] = "Activer la syndication des contenus via Atom ou RSS";
$messages["help_default_rss_profile"] = "Flux RSS/RDF généré par défaut";
// security
$messages["help_security_pipeline_enabled"] = "Activer les fonctions de sécurité.";
$messages["help_ip_address_filter_enabled"] = "Activer filtrage IP.";
$messages["help_content_filter_enabled"] = "Activer filtrage contenu";
$messages["help_maximum_comment_size"] = "Taille maximum en octets des commentaires.";
// bayesian filter
$messages["help_bayesian_filter_enabled"] = "Activer/Désactiver Filtrage Bayesian.";
$messages["help_bayesian_filter_spam_probability_treshold"] = "Valeur min pour spam (0.01 > 0.99)";
$messages["help_bayesian_filter_nonspam_probability_treshold"] = "Valeur max pour non-spam.";
$messages["help_bayesian_filter_min_length_token"] = "Taille minimum d'un token pour être parsé correctement.";
$messages["help_bayesian_filter_max_length_token"] = "Taille maximum d'un token.";
$messages["help_bayesian_filter_number_significant_tokens"] = "Nombre de token par commentaire";
$messages["help_bayesian_filter_spam_comments_action"] = "Enregistrer dans la BDD les commentaires spam pour entraîner le filtre,  ou les rejeter.";
$messages["keep_spam_comments"] = "Garder dans la base de données marqués comme \"Spam\"";
$messages["throw_away_spam_comments"] = "Ne pas les sauvegarder";
// resources
$messages["help_resources_enabled"] = "Activer ou non les ressources";
$messages["help_resources_folder"] = "Répertoire où les ressources sont stockées. Mettre hors de la partie du serveur utilisée pour augmenter la sécurité";
$messages["help_thumbnail_method"] = "méthode de génération d'aperçu. Si vous utilisez PHP, le support de GD est nécessaire.";
$messages["help_path_to_convert"] = "Répertoire de l'outil \"convert\" du package ImageMagick. Obligatoire si la méthode de génération d'aperçu est \"ImageMagick\"";
$messages["help_thumbnail_format"] = "Format dans lequel les aperçus seront sauvegardés";
$messages["help_thumbnail_height"] = "Hauteur par défaut des petits aperçus";
$messages["help_thumbnail_width"] = "Largeur par défaut des petits aperçus";
$messages["help_medium_size_thumbnail_height"] = "Hauteur par défaut des aperçus de taille moyenne";
$messages["help_medium_size_thumbnail_width"] = "Largeur par défaut des aperçus de taille moyenne";
$messages["help_thumbnails_keep_aspect_ratio"] = "Garde les dimensions de l'aperçu propotionnelles. Pourrait généré des aperçus plus grand que la taille spécifiée au-dessus mais de meilleure qualité.";
$messages["help_thumbnail_generator_force_use_gd1"] = "Forcer pLog à utiliser les fontions de GD1-only";
$messages["help_thumbnail_generator_user_smoothing_algorithm"] = "Algorithme utilisé pour lisser les aperçus. Utilisé uniquement quand la méthode de génération d'aperçu est GD";
$messages["help_resources_quota"] = "Quota de ressources pour les Blogs par défaut";
$messages["help_resource_server_http_cache_enabled"] = "Active le support de \"If-Modified-Since\" header et des conditions de requête HTTP. A activer pour réduire l'utilisation de la bande passante.";
$messages["help_resource_server_http_cache_lifetime"] = "Temps en microsecondes durant lequel le Membre peut utiliser une version mise en cache des ressources";
// search
$messages["help_search_engine_enabled"] = "Activer ou non le moteur de recherche";
$messages["help_search_in_custom_fields"] = "Rechercher aussi dans les champs personnalisés";
$messages["help_search_in_comments"] = "Rechercher aussi dans les commentaires";

// cleanup
$messages["purge"] = "Nettoyer";
$messages["cleanup_spam"] = "Nottyage des Spam";
$messages["cleanup_spam_help"] = "Ceci supprimera tout les commentaires marqués comme Spam. Ils ne sera pas possible de revenir en arrière";
$messages["spam_comments_purged_ok"] = "Commentaires-spam nettoyés";
$messages["cleanup_posts"] = "Nettoyer les articles";
$messages["cleanup_posts_help"] = "Ceci supprimera physiquement tout les articles supprimés (marqué comme \"supprimé\") It will not be possible to recover them once they have been removed";
$messages["posts_purged_ok"] = "Articles nettoyés";

/// summary ///
// front page
$messages["summary"] = "Sommaire";
$messages["register"] = "S'inscrire";
$messages["summary_welcome"] = "Bienvenu!";
$messages["summary_most_active_blogs"] = "Blogs les plus actifs";
$messages["summary_most_commented_articles"] = "Articles les plus commentés";
$messages["summary_most_read_articles"] = "Articles les plus lue";
$messages["password_forgotten"] = "Vous avez perdu votre mot de passe?";
$messages["summary_newest_blogs"] = "Nouveaux Blogs";
$messages["summary_latest_posts"] = "Derniers Articles";
$messages["summary_search_blogs"] = "Recherche d'un Blog";

// blog list
$messages["updated"] = "mis à jour";
$messages["total_reads"] = "total";

// blog profile
$messages["blog"] = "Blog";
$messages["latest_posts"] = "Derniers articles";

// registration
$messages["register_step0_title"] = "Service d'acceptation des termes";
$messages["decline"] = "Refuser";
$messages["accept"] = "Accepter";
$messages["read_service_agreement"] = "Veuillez lire les termes de ce service et cliquer sur le bouton \"Accepter\" si vous êtes d'accord";
$messages["register_step1_title"] = "Créer un compte [1/4]";
$messages["register_step1_help"] = "Vous devez créer un compte pour ensuite avoir un Blog. Ce compte sera le compte principal de ce Blog et aura accès à toutes ses fonctionnalités";
$messages["register_next"] = "Suivant";
$messages["register_back"] = "Retour";
$messages["register_step2_title"] = "Créer un Blog [2/4]";
$messages["register_blog_name_help"] = "Nom du nouveau blog";
$messages["register_step3_title"] = "Choisir un template [3/4]";
$messages["step1"] = "Etape 1";
$messages["step2"] = "Etape 2";
$messages["step3"] = "Etape 3";
$messages["register_step3_help"] = "Sélectionnez un des templates disponibles pour être celui par défaut de votre Blog. Vous pourrez le changer ultérieurement";
$messages["error_must_choose_template"] = "Vous devez choisir un template";
$messages["select_template"] = "Sélectionner un template";
$messages["register_step5_title"] = "Merci! [4/4]";
$messages["finish"] = "Fin";
$messages["register_need_confirmation"] = "Un e-mail de confirmation vous a été envoyé, cliquez sur le lien dès que vous recevrez ce message pour démarrer l'édition du Blog";
$messages["register_step5_help"] = "Merci, votre compte et votre blog ont été créés!";
$messages["register_blog_link"] = 'Si vous voulez voir votre Blog, Vous pouvez aller ici : <a href=\"%2$s\">%1$s</a>';
$messages["register_blog_admin_link"] = "Si vous préférez rédiger et publier des articles sur votre Glog, cliquez ici pour aller à <a href=\"admin.php\">l'interface d'administration</a>";
$messages["register_error"] = "Erreur durant la procédure";
$messages["error_registration_disabled"] = "Désolé, les inscriptions sont suspendues";
// registration article topic and text
$messages["register_default_article_topic"] = "Félicitation!";
$messages["register_default_article_text"] = "Si vous pouvez lire cet article, cela signifie que votre enregistrement s'est déroulé correctement et que vous pouvez démarrer l'édition et la publication d'articles";
$messages["register_default_category"] = "Général";
// confirmation email
$messages["register_confirmation_email_text"] = "Veuillez cliquer sur ce lien pour activer votre compte:

%s

Cordialement.";
$messages["error_invalid_activation_code"] = "Désolé, votre numéro de confirmation est invalide.";
$messages["blog_activated_ok"] = "Félicitation, votre compte et votre Blog ont été activés!";
// forgot your password?
$messages["reset_password"] = "Réinitialiser votre mot de passe";
$messages["reset_password_username_help"] = "Name of the user whose password you would like to reset";
$messages["reset_password_email_help"] = "Email address which was used to register this user";
$messages["reset_password_help"] = "Use this form to reset the password of your user, should you not remember it. Please type the name of the user whose password you would like to reset, as well as the email address that was used to register this user";
$messages["error_resetting_password"] = "There was an error resetting the password. Vérifiez les données entrées et recommencez";
$messages["reset_password_error_incorrect_email_address"] = "The email address is not correct or it is not the email address used to register this user";
$messages["password_reset_message_sent_ok"] = "An email message with a link has been sent to your email address. Please click the link in order to reset your password";
$messages["error_incorrect_request"] = "The parameters in the URL are not correct";
$messages["change_password"] = "Set new password";
$messages["change_password_help"] = "Please type and confirm your new password";
$messages["new_password"] = "New password";
$messages["new_password_help"] = "Type here your new password";
$messages["password_updated_ok"] = "Your password has been successfully updated";

// Suggested by BCSE, some useful messages that not available in official locale
$messages["upgrade_information"] = "This page looks plain and unstyled because you\"re using a non-standard compliant browser. To see it in its best form, please <a href=\"http://www.webstandards.org/upgrade/\" title=\"The Web Standards Project\"s Browser Upgrade initiative\">upgrade</a> to a browser that supports web standards. It\"s free and painless.";
$messages["jump_to_navigation"] = "Jump to Navigation.";
$messages["comment_email_never_display"] = "Line and paragraph breaks automatic, e-mail address never displayed.";
$messages["comment_html_allowed"] = "<acronym title=\"Hypertext Markup Language\">HTML</acronym> allowed: &lt;<acronym title=\"Hyperlink\">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title=\"Acronym Description\">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title=\"Quote\">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title=\"Strike\">del</acronym>&gt; &lt;<acronym title=\"Italic\">em</acronym>&gt; &lt;<acronym title=\"Underline\">ins</acronym>&gt; &lt;<acronym title=\"Bold\">strong</acronym>&gt;";
// $messages["trackback_uri"] = "The <acronym title=\"Uniform Resource Identifier\">URI</acronym> to trackback this entry is: ";
$messages["previous_post"] = "Previous";
$messages["next_post"] = "Next";
$messages["comment_default_title"] = "(Untitled)";
$messages["guestbook"] = "Guestbook";
$messages["trackbacks"] = "Rétroliens";
$messages["menu"] = "Menu";
$messages["albums"] = "Albums";
$messages["label_comments_enabled"] = "Commentaires activés";
?>
