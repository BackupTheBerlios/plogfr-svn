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
$messages["of"] = "de";
$messages["recently"] = "Récemment ...";
$messages["comments"] = "Commentaires";
$messages["comment on this"] = "Discuter";
$messages["my_links"] = "Mes liens";
$messages["archives"] = "Archives";
$messages["search"] = "Recherche";
$messages["calendar"] = "Calendrier";
$messages["search_s"] = "Recherches";
$messages["search_this_blog"] = "Rechercher dans ce blogue:";
$messages["about_myself"] = "Qui suis-je ?";
$messages["permalink_title"] = "Permalien vers les archives";
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
$messages["article_does_not_exist"] = "Billet inexistant";
$messages["no_posts_found"] = "Aucun billet trouvé";
$messages["user_has_no_posts_yet"] = "Ce membre n'a pas publié de billet";
$messages["back"] = "Retour";
$messages["back_top"] = "Retour haut de page";
$messages["trackbacks_for_article"] = "Rétrolien pour le billet";
$messages["trackback_excerpt"] = "Extrait";
$messages["trackback_weblog"] = "Blogue";
$messages["search"] = "Recherche";
$messages["search_results"] = "Résultats";
$messages["search_matching_results"] = "Billets correspondants: ";
$messages["search_no_matching_posts"] = "Aucun billet";
$messages["read_more"] = "Suite...";
$messages["syndicate"] = "Syndication";
$messages["main"] = "Accueil";
$messages["about"] = "À propos";
$messages["download"] = "Télécharger";

////// error messages /////
$messages["error_fetching_article"] = "Billet introuvable.";
$messages["error_fetching_articles"] = "Billets introuvables.";
$messages["error_trackback_no_trackback"] = "Aucun rétrolien.";
$messages["error_incorrect_article_id"] = "ID du billet erroné.";
$messages["error_incorrect_blog_id"] = "ID du blogue erroné.";
$messages["error_comment_without_text"] = "Texte obligatoire.";
$messages["error_comment_without_name"] = "Nom obligatoire..";
$messages["error_adding_comment"] = "Erreur lors de l'ajout du commentaire à la base de donnée.";
$messages["error_incorrect_parameter"] = "Paramètre erroné.";
$messages["error_parameter_missing"] = "Paramètre manquant.";
$messages["error_blog_has_no_links"] = "Le blogue n'a pas encore de liens.";
$messages["error_comments_not_enabled"] = "Commentaires désactivés sur ce site.";
$messages["error_incorrect_search_terms"] = "Les mots clés ne sont pas valides";
$messages["error_no_search_results"] = "Aucun résultats de recherche";
$messages["error_no_albums_defined"] = "Il n'y a pas d'album valide dans ce blogue";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages["login"] = "Connexion";
$messages["welcome_message"] = "Bienvenue sur pLog";
$messages["error_incorrect_username_or_password"] = "Désolé, pseudo ou mot de passe incorrect.";
$messages["error_dont_belong_to_any_blog"] = " Désolé, vous n'êtes membre d'aucun blogue encore";
$messages["logout_message"] = "Déconnexion réussie.";
$messages["logout_message_2"] = "<a href=\"admin.php\">Cliquez ici</a>pour vous reconnecter, 
ou <a href=\"%1\$s\">ici pour aller %2\$s</a>.";
$messages["error_access_forbidden"] = "Accès interdit, vous devez vous identifier <a href=\"admin.php\">ici</a> avant .";
$messages["username"] = "Pseudo";
$messages["password"] = "Mot de passe";

// dashboard
$messages["dashboard"] = "Tableau de bord";
$messages["logout"] = "Déconnexion";
$messages["recent_articles"] = "Billets récents";
$messages["recent_comments"] = "Commentaires récents";
$messages["in"] = "dans";
$messages["recent_trackbacks"] = "Rétroliens récents";
$messages["blog_statistics"] = "Statistiques du blogue";
$messages["total_posts"] = "Billets totaux";
$messages["total_comments"] = "Commentaires totaux";
$messages["total_trackbacks"] = "Rétroliens totaux";
$messages["total_viewed"] = "Lecture totale";


// menu options
$messages["newPost"] = "Créer";
$messages["Manage"] = "Éditer";
$messages["managePosts"] = "Billets";
$messages["editPosts"] = "Billets";
$messages["editArticleCategories"] = "Catégories";
$messages["newArticleCategory"] = "Nouvelle catégorie";
$messages["manageLinks"] = "Liens";
$messages["editLinks"] = "Liens";
$messages["newLink"] = "Nouveau lien";
$messages["editLink"] = "Éditer un lien";
$messages["editLinkCategories"] = "Catégorie de liens";
$messages["newLinkCategory"] = "Nouvelle catégorie de liens";
$messages["editLinkCategory"] = "Éditer une catégorie de liens";
$messages["manageCustomFields"] = "Champs personnalisés";
$messages["blogCustomFields"] = "Champs personnalisés";
$messages["newCustomField"] = "Nouveau champ personnalisé";
$messages["resourceCenter"] = "Centre de ressources";
$messages["resources"] = "Ressources";
$messages["newResourceAlbum"] = "Nouvel album";
$messages["newResource"] = "Nouvelle ressource";
$messages["controlCenter"] = "Configuration";
$messages["manageSettings"] = "Paramètres";
$messages["blogSettings"] = "Paramètres du blogue";
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
$messages["Blogs"] = "Blogues";
$messages["createBlog"] = "Créer un blogue";
$messages["editSiteBlogs"] = "Blogue";
$messages["Locales"] = "Paramètres de lieu";
$messages["newLocale"] = "Nouveau paramètres de lieu";
$messages["siteLocales"] = "Paramètre de lieu";
$messages["Templates"] = "Modèles";
$messages["newTemplate"] = "Nouveau modèle";
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
$messages["editResourceAlbum"] = "Éditer un album";
$messages["resourceInfo"] = "Éditer une ressource";
$messages["editBlog"] = "Éditer un blogue";
$messages["hours"] = "heures";

// new post
$messages["topic"] = "Sujet";
$messages["topic_help"] = "Titre du billet";
$messages["text"] = "Amorce";
$messages["text_help"] = "Texte du billet. Cette partie apparaîtra sur la page principale";
$messages["extended_text"] = "Corps";
$messages["extended_text_help"] = "Corps du billet. Cette partie peut optionellement apparaître sur la page des billets ou sur la page principale. Voir les paramètres du blogue pour plus d'informations";
$messages["post_slug"] = "Titre de rappel";
$messages["post_slug_help"] = "Le titre de rappel sera utilisé pour générer de beaux liens permanents";
$messages["date"] = "Date";
$messages["post_date_help"] = "Date à laquelle le billet a été posté";
$messages["status"] = "Statut";
$messages["post_status_help"] = "Selectionner un de ces statuts";
$messages["post_status_published"] = "Publié";
$messages["post_status_draft"] = "Ébauche";
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
$messages["error_missing_post_text"] = "Billet vide";
$messages["error_adding_post"] = "Il y a eu une erreur en envoyant le billet.";
$messages["post_added_not_published"] = "Billet ajouté correctement mais non publiée.";
$messages["post_added_ok"] = "Billet ajouté correctement.";
$messages["send_notifications_ok"] = "Une notification vous sera envoyée par courriel à chaque nouveau commentaire ou rétrolien.";
$messages["trackback_urls"]= "URLs de rétrolien";
$messages["trackback_urls_help"]= "Veuillez sélectionner les URLs où vous souhaitez envoyer des pings rétroliens. Veuillez vérifier que ces sites supportent les rétroliens.";
// send trackbacks
$messages["error_sending_trackbacks"] = "Il y a eu une erreur en envoyant les rétroliens suivants";
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
$messages["error_incorrect_article_id"] = "Identifiant du billet erroné";
$messages["error_deleting_article"] = "Il y a eu une erreur en supprimant l'article \"%s\"";
$messages["article_deleted_ok"] = "Billet \"%s\" supprimé";
$messages["articles_deleted_ok"] = "%s billets supprimés";
$messages["error_deleting_article2"] = "Il y a eu une erreur en supprimant le billet avec l'identifiant \"%s\"";

// edit post page
$messages["update"] = "Mettre à jour";
$messages["editPost"] = "Editer le billet";
$messages["error_fetching_post"] = "Erreur en récupérant le billet.";
$messages["post_updated_ok"] = "Billet \"%s\" mis à jour";
$messages["error_updating_post"] = "Il y a eu une erreur en mettant à jour le billet";
$messages["notification_added"] = "Une notification vous sera envoyée par courriel à chaque nouveau commentaire ou rétrolien.";
$messages["notification_removed"] = "Aucune notification ne vous sera envoyée par courriel à chaque nouveau commentaire ou rétrolien.";

// post comments
$messages["url"] = "URL";
$messages["comment_status_all"] = "Tous";
$messages["comment_status_spam"] = "Pourriel";
$messages["comment_status_nonspam"] = "Pas de pourriel";
$messages["error_fetching_comments"] = "Erreur en récupérant les commentaires.";
$messages["error_deleting_comments"] = "Erreur en supprimant les commentaires ou aucun commentaire sélectionné";
$messages["comment_deleted_ok"] = "Commentaire \"%s\" supprimé";
$messages["comments_deleted_ok"] = "%s commentaires supprimés";
$messages["error_deleting_comment"] = "Erreur en supprimant le commentaire \"%s\"";
$messages["error_deleting_comment2"] = "Erreur en supprimant le commentaire avec l'identifiant' %s";
$messages["editComments"] = "Commentaires";
$messages["mark_as_spam"] = "Identifier comme pourriel";
$messages["mark_as_no_spam"] = "Identifier comme sans pourriel";
$messages["error_incorrect_comment_id"] = "Identifiant du commentaire erroné.";
$messages["error_marking_comment_as_spam"] = "Erreur dans l'identification du commentaire comme spam.";
$messages["comment_marked_as_spam_ok"] = "Commentaire bien identifié comme spam.";
$messages["error_marking_comment_as_nonspam"] = "Erreur dans l'identification du commentaire comme non-spam.";
$messages["comment_marked_as_nonspam_ok"] = "Commentaire bien identifié comme non-spam.";

// post trackbacks
$messages["blog"] = "Blogue";
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
$messages["posts"] = "Billets";
$messages["show_in_main_page"] = "Montrer sur la page principale";
$messages["error_incorrect_category_id"] = "L'identifiant de la catégorie est erroné ou aucun élément sélectionné";
$messages["error_category_has_articles"] = "La catégorie \"%s\" est utilisée par plusieurs billets. Éditez les billets d'abord.";
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
$messages["show_in_main_page_help"] = "Montrer les billets dans la page principale ou seulement quand cette catégorie est visualisée ";
$messages["error_empty_name"] = "Vous devez choisir un nom";
$messages["error_empty_description"] = "Vous devez entrer une description";
$messages["error_adding_article_category"] = "Erreur en ajoutant la catégorie. Vérifiez les données saisies";
$messages["category_added_ok"] = "Catégorie \"%s\" correctement ajoutée au blogue";
$messages["add"] = "Ajouter";
$messages["reset"] = "Effacer";

// update category
$messages["error_updating_article_category"] = "Erreur en mettant à jour la catégorie du billet.";
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
$messages["field_name_help"] = "Nom faisant référence à la valeur du champ dans le billet";
$messages["field_description_help"] = "Courte description du champ.";
$messages["field_type_help"] = "Selectionnez un type de champ";
$messages["field_hidden_help"] = "Si ce champ est caché, il ne sera pas visible lors de l'ajout ou de l'édition d'un billet. Fonction principalement utilisée par les plugiciels";
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
$messages["error_base_storage_folder_missing_or_unreadable"] = "Il est impossible pour pLog de créer les dossiers nécessaires où les ressources seront sauvegardées.  Cela peut causé pour différentes raisons, tel la variable de configuration PHP safe_mode de votre serveur est activée ou votre utilisateur ne possède pas les permissions nécessaires pour créer un dossier. Vous pourriez faire cette tâche manuellement, en créant les dossier suivant: <br/><br/>%s<br/><br/>Si ces fichiers existent déjà, veuillez vous assurer que ceux-ci possèdent les permissions nécessaires permettant au serveur d'écrire et de lire dans ces dossiers.";
$messages["items_deleted_ok"] = "%s éléments supprimés";
$messages["error_album_has_children"] = "L'album \"%s\" possède un album secondaire. Veuillez d'abord supprimer les albums secondaires de cet album";
$messages["item_deleted_ok"] = "Elément \"%s\" supprimé";
$messages["error_deleting_album"] = "Erreur en supprimant l'album \"%s\"";
$messages["error_deleting_album2"] = "Erreur en supprimant l'album avec l'identifiant' \"%s\"";
$messages["error_deleting_resource"] = "Erreur en supprimant la ressource \"%s\"";
$messages["error_deleting_resource2"] = "Erreur en supprimant la ressource avec l'identifiant \"%s\"";
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
$messages["error_adding_album"] = "Erreur en ajoutant le nouvel album. Vérifiez les données saisies et recommencez";
$messages["album_added_ok"] = "Album \"%s\" ajouté";

// edit album
$messages["error_incorrect_album_id"] = "Identifiant de l'album erroné.";
$messages["error_fetching_album"] = "Erreur en récupérant l'album.";
$messages["error_updating_album"] = "Erreur en mettant l'album à jour. Vérifiez les données saisies et recommencez";
$messages["album_updated_ok"] = "Album \"%s\" mis à jour";
$messages["show_album_help"] = "Si désactivé, cet album ne sera pas visible dans la liste des albums disponibles sur ce blogue";

// new resource
$messages["file"] = "Fichier";
$messages["resource_file_help"] = "Fichier qui sera ajouté au blogue. Utilisez le lien \"Ajouter\" pour ajouter plusieurs fichiers en même temps.";
$messages["add_field"] = "Ajouter";
$messages["resource_description_help"] = "Longue description du fichier";
$messages["resource_album_help"] = "Sélectionnez l'album auquel le fichier sera ajouté";
$messages["error_no_resource_uploaded"] = "Aucun fichier sélectionné pour être ajouté";
$messages["resource_added_ok"] = "Ressource \"%s\" ajoutée";
$messages["error_resource_forbidden_extension"] = "Type de fichier interdit";
$messages["error_resource_too_big"] = "Fichier trop gros";
$messages["error_uploads_disabled"] = "Téléchargements désactivés";
$messages["error_quota_exceeded"] = "Quota dépassé";
$messages["error_adding_resource"] = "Erreur en ajoutant le fichier";

// edit resource
$messages["editResource"] = "Editer la ressource";
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
$messages["regenerate_preview"] = "Regénérer l'aperçu";
$messages["error_fetching_resource"] = "Erreur en récupérant la ressource";
$messages["error_updating_resource"] = "Erreur en mettant à jour la ressource";
$messages["resource_updated_ok"] = "Ressource \"%s\" mise à jour";

// blog settings
$messages["blog_link"] = "Lien vers le blogue";
$messages["blog_link_help"] = "Permalien vers ce blogue";
$messages["blog_name_help"] = "Titre du blogue";
$messages["blog_description_help"] = "Description longue du contenu de ce blogue";
$messages["language"] = "Langue";
$messages["blog_language_help"] = "Langue utilisée pour afficher les textes dans le blogue et dans la partie administration.";
$messages["max_main_page_items"] = "Nombre d'éléments sur la page principale";
$messages["max_main_page_items_help"] = "Nombre d'éléments qui peuvent être affichés à chaque fois sur la page principale de ce blogue.";
$messages["max_recent_items"] = "Nombre d'éléments récents";
$messages["max_recent_items_help"] = "Nombre maximum de billets récents affichés sur la page principale.";
$messages["template"] = "Modèle";
$messages["choose"] = "Choisir";
$messages["blog_template_help"] = "Le modèle qui sera utilisé pour afficher le contenu de ce blogue. Cette liste contient les modèles généraux et ceux installés uniquement pour ce blogue";
$messages["use_read_more"] = 'Utiliser le lien "suite..." dans les articles';
$messages["use_read_more_help"] = 'Si activé, seulement le texte saisi dans "Texte" sera affiché sur la page principale. Et pour afficher le texte saisi dans "Texte supplémentaire", un lien "suite..." sera ajouté à chaque billet.';
$messages["enable_wysiwyg"] = "Activer l'éditeur visuel pour les articles";
$messages["enable_wysiwyg_help"] = "Active un éditeur HTML complet pour l'édition des billets. L'éditeur fonctionne seulement avec les navigateurs Mozilla 1.3 et ultérieur, IE 5.5 et ultérieur.";
$messages["enable_comments"] = "Activer les commentaires par défaut.";
$messages["enable_comments_help"] = "Active les commentaires pour tous les billets par défaut. Les commentaires pourront être activés ou désactivés pour un billet particulière durant sa création ou son édition.";
$messages["show_future_posts"] = "Montrer les billets futurs dans le calendrier.";
$messages["show_future_posts_help"] = "Les billets dont la date de publication n'est pas passé pourront apparaître dans le calendrier et seront visibles par les visiteurs.";
$messages["comments_order"] = "Ordre des commentaires";
$messages["comments_order_help"] = "Ordre dans lequel les commentaires apparaîtront dans la page principale.";
$messages["oldest_first"] = "Les plus vieux en premier";
$messages["newest_first"] = "Les plus récents en premier";
$messages["categories_order"] = "Ordre des catégories";
$messages["categories_order_help"] = "Ordre dans lequel les catégories apparaîtront dans la page principale.";
$messages["most_recent_updated_first"] = "Les plus récents mis à jour en premier";
$messages["alphabetical_order"] = "Ordre alphabétique croissant";
$messages["reverse_alphabetical_order"] = "Ordre alphabétique décroissant";
$messages["most_articles_first"] = "Le plus de billets en premier";
$messages["link_categories_order"] = "Ordre des catégories de lien";
$messages["link_categories_order_help"] = "Ordre dans lequel les catégories de lien apparaîtront dans la page principale.";
$messages["most_links_first"] = "Le plus de liens en premier";
$messages["most_links_last"] = "Le plus de liens en dernier";
$messages["time_offset"] = "Décalage temps";
$messages["time_offset_help"] = "Décalage horaire qui sera ajouté dynamiquement à toutes les dates et heures dans le Blog";
$messages["close"] = "Fermer";
$messages["select"] = "Selectionner";
$messages["error_updating_settings"] = "Erreur en mettant à jour les paramètres du blogue. Vérifiez les données saisies et recommencez";
$messages["error_invalid_number"] = "Nombre erroné";
$messages["error_incorrect_time_offset"] = "Décalage temps invalide";
$messages["blog_settings_updated_ok"] = "Paramètres mis à jour";

// user settings
$messages["username_help"] = "Pseudonyme public. Il ne pourra pas être changé plus tard";
$messages["full_name"] = "Nom complet";
$messages["full_name_help"] = "Nom complet";
$messages["password_help"] = "Tapez et confirmez un nouveau mot de passe. Laissez les champs vides pour garde votre mot de passe actuel.";
$messages["confirm_password"] = "Confirmez le mot de passe";
$messages["email"] = "Courriel";
$messages["email_help"] = "Courriel à lequel les notifications seront envoyées";
$messages["bio"] = "Votre biogaphie";
$messages["bio_help"] = "Votre biographie. Une description de vous-même";
$messages["picture"] = "Photo";
$messages["user_picture_help"] = "Sélectionnez une photo parmis celles ajoutées à ce blogue comme photo personnelle";
$messages["error_invalid_password"] = "Mot de passe invalide. Vérifiez s'il n'est pas trop court";
$messages["error_passwords_dont_match"] = "Désolé, mot de passe erroné";
$messages["error_incorrect_email_address"] = "Courriel erroné";
$messages["error_updating_user_settings"] = "Erreur en mettant à jour les paramètres utilisateurs. Vérifiez les données saisies et recommencez";
$messages["user_settings_updated_ok"] = "Paramètres utilisateurs mis à jour";
$messages["resource"] = "Ressource";

// plugin center
$messages["identifier"] = "Identifiant";

// blog users
$messages["revoke_permissions"] = "Retirer des permissions";
$messages["error_no_users_selected"] = "Aucun utilisateur sélectionné.";
$messages["user_removed_from_blog_ok"] = "Utilisateur \"%s\" supprimé du blogue.";
$messages["users_removed_from_blog_ok"] = "%s utilisateurs supprimés";
$messages["error_removing_user_from_blog"] = "Erreur en supprimant l'utilisateur' \"%s\" du blogue.";
$messages["error_removing_user_from_blog2"] = "Erreur en supprimant l'utilisateur avec l'identifiant \"%s\" du blogue.";

// new blog user
$messages["new_blog_username_help"] = "Pseudonyme de l'utilisateur qui aura accès à ce blogue. Les nouveaus utilisateurs ont seulement accès aux sections \"Réglages\" et \"Centre des ressources\".";
$messages["send_notification"] = "Envoyer une notification";
$messages["send_user_notification_help"] = "Envoyer un courriel de notification à cet utilisateur ";
$messages["notification_text"] = "Texte de la notification";
$messages["notification_text_help"] = "Texte qui sera inclu dans le message de notification";
$messages["error_adding_user"] = "Erreur lors de l'autorisation d'accès. Vérifiez les données saisies et recommencez";
$messages["error_empty_text"] = "Vous devez entrer un texte";
$messages["error_adding_user"] = "Erreur en ajoutant l'utilisateur'. Vérifiez les données saisies et recommencez";
$messages["error_invalid_user"] = "L'utilisateur' \"%s\" est invalide ou n'existe pas";
$messages["user_added_to_blog_ok"] = "L'utilisateur' \"%s\" possède maintenant l'autorisation d'accès à ce blogue.";

// blog templates
$messages["error_no_templates_selected"] = "Aucun modèle sélectionné";
$messages["error_template_is_current"] = "Le modèle \"%s\" ne peut être supprimé car il est utilisé en ce moment sur le blogue";
$messages["error_removing_template"] = "Erreur en supprimant le modèle \"%s\"";
$messages["template_removed_ok"] = "Modèle \"%s\" supprimé";
$messages["templates_removed_ok"] = "%s Modèles supprimés";

// new blog template
$messages["template_installed_ok"] = "Modèle \"%s\" ajouté";
$messages["error_installing_template"] = "Erreur durant l'installation du modèle \"%s\"";
$messages["error_missing_base_files"] = "Fichier(s) manquant(s)";
$messages["error_add_template_disabled"] = "Aucun modèle ne peut être ajouté car cette fonction a été désactivée.";
$messages["error_must_upload_file"] = "Pas de modèle à télécharger";
$messages["error_uploads_disabled"] = "Les téléchargements ont été désactivés";
$messages["error_no_new_templates_found"] = "Pas de nouveaux modèles trouvés";
$messages["error_template_not_inside_folder"] = "Les fichiers du modèle doivent être dans un dossier du même nom que le modèle.";
$messages["error_missing_base_files"] = "Fichier(s) du modèle de base manquant(s)";
$messages["error_unpacking"] = "Erreur en décompressant le fichier";
$messages["error_forbidden_extensions"] = "Des fichiers d'extensions interdites sont inclus dans le modèle";
$messages["error_creating_working_folder"] = "Erreur durant la création du répertoire temporaire nécessaire à la décompression.";
$messages["error_checking_template"] = "Erreur en vérifiant le modèle : %s";
$messages["template_package"] = "Plugiciel de modèles";
$messages["blog_template_package_help"]  = "Utiliser ce formulaire pour télécharger un nouveau modèle, lequel sera seulement disponible pour votre blogue. S'il n'est pas possible de télécharger un modèle em utilisant ce formulaire, téléchargez le modèle manuellement et placez le dans le dossier <b>%s</b>, endroit où vos modèles pour votre blogue sont entreposés et cliquer le boutton \"<b>Balayer les modèles</b>\". pLog balayera le dossier et ajoutera automatiquement les nouveaux modèles qu'il trouvera.";
$messages["scan_templates"] = "Balayer les modèles";

// site users
$messages["user_status_active"] = "Actif";
$messages["user_status_disabled"] = "Inactif";
$messages["user_status_all"] = "Tous";
$messages["user_status_unconfirmed"] = "non-confirmé";
$messages["error_invalid_user2"] = "L'utilisateur avec l'identifiant \"%s\" n'existe pas";
$messages["error_deleting_user"] = "Erreur en supprimant l'utilisateur' \"%s\"";
$messages["user_deleted_ok"] = "Utilisateur \"%s\" supprimé";
$messages["users_deleted_ok"] = "%s utilisateurs supprimés";

// create user
$messages["user_added_ok"] = "Utilisateur \"%s\" ajouté";
$messages["error_incorrect_username"] = "Pseudonyme invalide ou déjà utilisé";
$messages["user_status_help"] = "Statut actuel de l'utilisateur";
$messages["user_blog_help"] = "Blogue avec lequel cet utilisateur est initialisé";
$messages["none"] = "Aucun";

// edit user
$messages["error_invalid_user"] = "Identifiant de l'utilisateur invalide ou l'utilisateur n'existe pas.";
$messages["error_updating_user"] = "Erreur en mettant à jour les paramètres utilisateurs. Vérifiez les données saisies et recommencez";
$messages["blogs"] = "Blogues";
$messages["user_blogs_help"] = "Blogues de l'utilisateur ou ceux auxquels il a accès";
$messages["site_admin"] = "Administrateur";
$messages["site_admin_help"] = "Si cet utilisateur est administrateur, il pourra accéder à la partie \"Administration\" et accomplir des tâches administratives.";
$messages["user_updated_ok"] = "Uilisateur \"%s\" mis à jour";

// site blogs
$messages["blog_status_all"] = "Tous";
$messages["blog_status_active"] = "Actif";
$messages["blog_status_disabled"] = "Inactif";
$messages["blog_status_unconfirmed"] = "Non validé";
$messages["owner"] = "Propriétaire";
$messages["quota"] = "Quota";
$messages["bytes"] = "octets";
$messages["error_no_blogs_selected"] = "Aucun blogue sélectionné pour être désactivé";
$messages["error_blog_is_default_blog"] = "Le blogue \"%s\" ne peut être supprimé car il s'agit du blogue par défaut.";
$messages["blog_deleted_ok"] = "Blogue \"%s\" désactivé";
$messages["blogs_deleted_ok"] = "%s Blogues désactivés";
$messages["error_deleting_blog"] = "Erreur en désactivant le blogue \"%s\"";
$messages["error_deleting_blog2"] = "Erreur en désactivant le blogue avec l'identifiant \"%s\"";

// create blog
$messages["error_adding_blog"] = "Erreur en créant le blogue. Vérifiez les données saisies et recommencez";
$messages["blog_added_ok"] = "Blogue \"%s\" créé";

// edit blog
$messages["blog_status_help"] = "Statut du blogue";
$messages["blog_owner_help"] = "Utilisateur considéré comme propriétaire du blogue, qui aura un contrôle total des paramètres du blogue";
$messages["users"] = "Utilisateurs";
$messages["blog_quota_help"] = "Quota de ressources en octet. Mettre à 0 pour illimité ou laisser vide pour utiliser le quota par défaut";
$messages["blog_users_help"] = "Utilisateurs qui ont accès à ce blogues. Sélectionner un utilisateur de gauche et le mettre à droite pour qu'il ait des droits d'accès au blogue";
$messages["edit_blog_settings_updated_ok"] = "Blogue \"%s\"mis à jour";
$messages["error_updating_blog_settings"] = "Erreur en mettant à jour le blogue \"%s\"";
$messages["error_incorrect_blog_owner"] = "Utilisateur propriétaire erroné.";
$messages["error_fetching_blog"] = "Erreur en récupérant le blogue";
$messages["error_updating_blog_settings2"] = "Erreur en mettant à jour le blogue. Vérifiez les données saisies et recommencez";
$messages["add_or_remove"] = "Ajouter ou supprimer des utilisateurs";

// site locales
$messages["locale"] = "Langue";
$messages["locale_encoding"] = "Encodage";
$messages["locale_deleted_ok"] = "Langue \"%s\" supprimée";
$messages["error_no_locales_selected"] = "Aucune langue sélectionnée pour être supprimée";
$messages["error_deleting_only_locale"] = "Cette langue ne peut être supprimée car c'est la seule sur le système.";
$messages["locales_deleted_ok"]= "%s langues supprimées";
$messages["error_deleting_locale"] = "Erreur en supprimant la langue \"%s\"";
$messages["error_locale_is_default"] = "La langue \"%s\" ne peut être supprimée car il s'agit de la langue par défaut pour les nouveaux blogues";

// add locale
$messages["error_invalid_locale_file"] = "Fichier de langue invalide";
$messages["error_no_new_locales_found"] = "Pas de nouveaux fichiers de langue trouvés";
$messages["locale_added_ok"] = "Langue \"%s\" ajouté";
$messages["error_saving_locale"] = "Erreur en sauvegardant la nouvelle langue";
$messages["scan_locales"] = "Balayer les langues";
$messages["add_locale_help"] = "Utiliser ce formulaire pour télécharger un nouveau fichier lanque, lequel sera seulement disponible pour votre blogue. S'il n'est pas possible de télécharger un fichier langue em utilisant ce formulaire, téléchargez le fichier langue manuellement et placez le dans le dossier <b>%s</b>, endroit où vos fichiers langues pour votre blogue sont entreposés et cliquer le boutton \"<b>Balayer les langues</b>\". pLog balayera le dossier et ajoutera automatiquement les nouvelles langues qu'il trouvera.";

// site templates
$messages["error_template_is_default"] = "Modèle \"%s\" ne peut être supprimé car il s'agit du modèle par défaut";

// add template
$messages["global_template_package_help"] = "Utiliser ce formulaire pour télécharger un nouveau modèle, lequel sera seulement disponible pour votre blogue. S'il n'est pas possible de télécharger un modèle em utilisant ce formulaire, téléchargez le modèle manuellement et placez le dans le dossier <b>%s</b>, endroit où vos modèles pour votre blogue sont entreposés et cliquer le boutton \"<b>Balayer les modèles</b>\". pLog balayera le dossier et ajoutera automatiquement les nouveaux modèles qu'il trouvera.";

// global settings
$messages["site_config_saved_ok"] = "Paramètres de site sauvegardés";
$messages["error_saving_site_config"] = "Erreur en sauvegardant les paramètres de site";
/// general settings
$messages["help_comments_enabled"] = "Permettre les commentaires sur les nouveaux blogues par défaut.";
$messages["comments_enabled"] = "Commentaires";
$messages["help_beautify_comments_text"] = "Formater les commentaires postés. Par exemple, le blogiciel créera automatiquement des balises de paragraphe pour tous les sauts de ligne et des liens pour toutes les URLs.";
$messages["beautify_comments_text"]= "Embellissement des commentaires";
$messages["help_temp_folder"] = "Dossier que le blogiciel peut utiliser pour écrire les données temporaires comme les modèles compilés, etc. Utilisez un répertoire hors de cette partie du serveur pour augmenter la sécurité.";
$messages["temp_folder"] = "Dossier temporaire";
$messages["help_base_url"] = "URL de base où les blogues sont installés";
$messages["base_url"] = "URL de base";
$messages["help_subdomains_enabled"] = "Utiliser les sous-domaines. Veuillez lire la documentation au sujet des sous-domaines pour plus d'informations.";
$messages["subdomains_enabled"] = "Sous-domaine";
$messages["help_subdomains_base_url"] = "Quand les sous-domaines sont activés, cette URL est utilisée à la place de l'URL de base (base_url). Utiliser {blogname} pour donner le nom du blogue et {username} pour donner le nom du propriétaire du blogue afin de générer un lien vers le blogue.";
$messages["subdomains_base_url"] = "URL de base des sous-domaines";
$messages["help_include_blog_id_in_url"] = "Effectif seulement quand les sous-domaines et les URLs \"normal\" sont permis, évitant les URLs générées en internet d'avoir le paramètre \"blogId\". Ne pas effectuer de changement à moins de savoir ce que vous faites.";
$messages["include_blog_id_in_url"] = "Identifiant du blogue dans les URLs";
$messages["help_script_name"] = "Si vous utilisez un autre nom pour votre fichier index.php, veuillez l'indiquer ici.";
$messages["script_name"] = "Nom du fichier index";
$messages["help_show_posts_max"] = "Indiquer le nombre de billets affichés sur la page principale. Utilisé pour les nouveaux blogues seulement.";
$messages["show_posts_max"] = "Billets affichés";
$messages["help_recent_posts_max"] = "Indiquer le nombre de billets récents affichés sur la page principale. Effectif pour les nouveaux blogues seulement.";
$messages["recent_posts_max"] = "Billets récents affichés";
$messages["help_save_drafts_via_xmlhttprequest_enabled"] = "Autoriser la sauvegarde des brouillons avec javascript et XmlHttpRequest si ceux-ci sont activés.";
$messages["save_drafts_via_xmlhttprequest_enabled"] = "Brouillons";
$messages["help_locale_folder"] = "Inscrire le dossier où les langues sont entreposées.";
$messages["locale_folder"] = "Langues";
$messages["help_default_locale"] = "Sélectionner la langue par défaut pour les nouveaux blogues.";
$messages["default_locale"] = "Réglage de la langue";
$messages["help_default_blog_id"] = "Choisir le blogue affiché par défaut si aucun blogue n'est sélectionné (Numéro du blogue).";
$messages["default_blog_id"] = "Blogue par défaut";
$messages["help_default_time_offset"] = "Inscrire le décalage de temps par défaut pour les nouveaux blogues.";
$messages["default_time_offset"] = "Décalage de temps";
$messages["help_html_allowed_tags_in_comments"] = "Indiquer la liste des balises de HTML autorisées dans les commentaires. Les éléments de la liste doivent être séparés par un espacement vide.";
$messages["html_allowed_tags_in_comments"] = "Balises HTML";
$messages["help_referer_tracker_enabled"] = "Sauvegarder les sites de renvoi dans la base de données. Désactiver pour de meilleures performances.";
$messages["referer_tracker_enabled"] = "Sites de renvoi";
$messages["help_show_more_enabled"] = "Activer l'entité \"suite...\" par défaut pour les nouveaux blogues.";
$messages["show_more_enabled"] = "Entité \"suite...\"";
$messages["help_update_article_reads"] = "Mettre à jour le compteur du nombre de fois qu'un billet a été lu aussitôt qu'une nouvelle lecture est effectuée. Désactiver pour de meilleures performances.";
$messages["update_article_reads"] = "Lecture des billets";
$messages["help_update_cached_article_reads"] = "Mettre à jour le compteur du nombre de fois qu'un billet a été lu aussitôt qu'une nouvelle lecture est effectuée, même quand le sytème de cache est activé.";
$messages["update_cached_article_reads"] = "Lecture des billets avec une cache";
$messages["help_xmlrpc_ping_enabled"] = "Autoriser l'envoi de pings XMLRPC aux sites qui supportent cette entité.";
$messages["xmlrpc_ping_enabled"] = "Pings XMLRPC";
$messages["help_send_xmlrpc_pings_enabled_by_default"] = "Activer l'envoi de ping XMLRPC par défaut pour les nouveaux billets et ceux mis à jour.";
$messages["send_xmlrpc_pings_enabled_by_default"] = "Pings XMLRPC par défaut";
$messages["help_xmlrpc_ping_hosts"] = "Indiquer les URLs pointant l'interface XMLRPC des sites qui supportent la spécification ping XMLRPC. Mettre une URL par ligne.";
$messages["xmlrpc_ping_hosts"] = "Sites de ping XMLRPC";
$messages["help_trackback_server_enabled"] = "Autoriser les pisteurs entrants.";
$messages["trackback_server_enabled"] = "Pisteurs";
$messages["help_htmlarea_enabled"] = "Activer l'éditeur de billet WYSIWYG par défaut sur les nouveaux blogues.";
$messages["htmlarea_enabled"] = "Éditeur WYSIWYG";
$messages["help_plugin_manager_enabled"] = "Activer les plugiciels.";
$messages["plugin_manager_enabled"] = "Plugiciels";
$messages["help_minimum_password_length"] = "Longueur minimale pour les mots de passe.";
$messages["minimum_password_length"] = "Mots de passe";
$messages["help_xhtml_converter_enabled"] = "Permettre au blogiciel d'essayer de convertir tout le code HTML en code XHTML.";
$messages["xhtml_converter_enabled"] = "XHTML";
$messages["help_xhtml_converter_aggressive_mode_enabled"] = "Permettre au blogiciel d'essayer de générer du code XHTML pur sans code HTML, mais ce code pourrait entraîner des erreurs indésirables.";
$messages["xhtml_converter_aggresive_mode_enabled"] = "XHTML pur";
$messages["help_session_save_path"] = "Utiliser cette option pour changer le dossier où le blogiciel entreposera ses données de session, via la fonction PHP session_save_path(). Soyez certain que le dossier permet au serveur web d\'écrire dans celui-ci. Laissez le champ vide pour utiliser le dossier de session par défaut de PHP.";
$messages["session_save_path"] = "Sessions";
// summary settings
$messages["help_summary_page_show_max"] = "Nombre d'éléments qui sera affiché dans la page sommaire. Cette option contrôle toutes les listes dans la page sommaire (billets récents, blogues les plus actifs, etc).";
$messages["summary_page_show_max"] = "Éléments affichés";
$messages["help_summary_blogs_per_page"] = "Nombre de blogue par page dans la section \"Liste de blogues\".";
$messages["summary_blogs_per_page"] = "Blogues par page";
$messages["help_forbidden_usernames"] = "Liste des noms d'utilisateur interdits pour créer des nouveaux noms d'utilisateur.";
$messages["forbidden_usernames"] = "Utilisateur interdits";
$messages["help_force_one_blog_per_email_account"] = "Restreindre à un blogue par adresse de courriel.";
$messages["force_one_blog_per_email_account"] = "Courriel";
$messages["help_summary_show_agreement"] = "Montrer le texte de la convention d'utilisation et s'assurer que les utilisateurs en acceptent les termes avant de procéder au processus d'inscription.";
$messages["summary_show_agreement"] = "Convention d'utilisation";
$messages["help_need_email_confirm_registration"] = "Forcer les utilisateurs à confirmer leur inscription en cliquant un lien incorporé dans un courriel envoyé à leur adresse.";
$messages["need_email_confirm_registration"] = "Confirmation";
$messages["help_summary_disable_registration"] = "Désactiver la création de nouveau blogue sur ce site.";
$messages["summary_disable_registration"] = "Inscription";
// templates
$messages["help_template_folder"] = "Dossier où les modèles sont entreposés.";
$messages["template_folder"] = "Dossier des modèles";
$messages["help_default_template"] = "Modèle par défaut pour les nouveaux blogues.";
$messages["default_template"] = "Modèle par défaut";
$messages["help_users_can_add_templates"] = "Permettre aux utilisateurs de télécharger leur propre modèle personnalisé.";
$messages["users_can_add_templates"] = "Modèles personnalisés";
$messages["help_template_compile_check"] = "Empêcher Smarty de vérifier chaque fois si un fichier modèle a été modifié et dans ce cas, utiliser la nouvelle version de celui-ci. Désactiver pour obtenir de meilleures performances.";
$messages["template_compile_check"] = "Compilation";
$messages["help_template_cache_enabled"] = "La version cache d'une page sera utilisé aussi souvent que possible. Aucune donnée ne sera extraite de la base de donnée et les modèles n'auront pas besoin d'être recompilés.";
$messages["template_cache_enabled"] = "Cache";
$messages["help_template_cache_lifetime"] = "Durée de vie en seconde de la cache. Mettre à -1 pour forcer la cache à jamais expirer. Mettre à 0 pour désactiver la cache. Ceci dit, si vous désirez désactiver la cache, il est recommandé de mettre le paramètre Cache à \"Non\" pour ordonner la désactivation de la cache.";
$messages["template_cache_lifetime"] = "Durée de vie de la cache";
$messages["help_template_http_cache_enabled"] = "Supporter les requêtes HTTP conditionnelles. Le blogiciel prendra l'entête HTTP \"If-Modified-Since\" dans le compte et enverra seulement le contenu si c'est vraiment nécessaire. Activer pour économiser de la bande passante.";
$messages["template_http_cache_enabled"] = "Requêtes HTTP conditionnelles";
$messages["help_allow_php_code_in_templates"] = "Permettre l'inclusion de code php natif dans les modèles Smarty à l'intérieur de blocs {php}...{/php}.";
$messages["allow_php_code_in_templates"] = "Code php";
// urls
$messages["help_request_format_mode"] = "Sélectionner un des formats d'URL disponibles. Si vous utilisez les URLs personnalisées, configurez les paramètres ci-dessous.";
$messages["request_format_mode"] = "Format d'URL";
$messages["plain"] = "Simple";
$messages["search_engine_friendly"] = "Convivial pour les moteurs de recherche";
$messages["custom_url_format"] = "URLs personnalisées";
$messages["help_permalink_format"] = "Format liens vers les permaliens.";
$messages["permalink_format"] = "Permaliens";
$messages["help_category_link_format"] = "Format des liens vers les catégories.";
$messages["category_link_format"] = "Catégories";
$messages["help_blog_link_format"] = "Format des liens vers les blogues.";
$messages["blog_link_format"] = "Blogues";
$messages["help_archive_link_format"] = "Format des liens vers les archives.";
$messages["archive_link_format"] = "Archives";
$messages["help_user_posts_link_format"] = "Format des liens vers les billets postés par certains utilisateurs.";
$messages["user_posts_link_format"] = "Billets postés";
$messages["help_post_trackbacks_link_format"] = "Format des liens vers les pisteurs..";
$messages["post_trackbacks_link_format"] = "Pisteurs";
$messages["help_template_link_format"] = "Format des liens vers les modèles classiques personnalisées.";
$messages["template_link_format"] = "Modèles";
$messages["help_album_link_format"] = "Format des liens vers les albums.";
$messages["album_link_format"] = "Albums";
$messages["help_resource_link_format"] = "Format des liens vers les ressources.";
$messages["resource_link_format"] = "Ressources";
$messages["help_resource_preview_link_format"] = "Format des liens vers les aperçus des ressources.";
$messages["resource_preview_link_format"] = "Aperçus des ressources";
$messages["help_resource_medium_size_preview_link_format"] = "Format des liens vers les aperçus de taille moyenne des ressources.";
$messages["resource_medium_size_preview_link_format"] = "Aperçus de taille moyenne";
$messages["help_resource_download_link_format"] = "Format des liens vers les fichiers.";
$messages["resource_download_link_format"] = "Fichiers";
// email
$messages["help_check_email_address_validity"] = "Vérifier l'adresse de courriel des nouveaux utilisateurs.";
$messages["check_email_address_validity"] = "Vérification";
$messages["help_email_service_enabled"] = "Activer le service de courriel aux utilisateurs.";
$messages["email_service_enabled"] = "Service de courriel";
$messages["help_post_notification_source_address"] = "Saisir l'adresse de courriel de l'expéditeur lors d'envoi de notification par le blogiciel.";
$messages["post_notification_source_address"] = "Courriel de l'expéditeur";
$messages["help_email_service_type"] = "Veuillez choisir une méthode que le blogiciel utilisera pour envoyer les courriels. Si vous ne savez pas quoi choisir, choisissez PHP mail().";
$messages["email_service_type"] = "Envoi des courriels";
$messages["help_smtp_host"] = "Inscrire l'adresse de l'hôte SMTP qui sera utilisé pour envoyer le courriel.";
$messages["smtp_host"] = "Adresse SMTP";
$messages["help_smtp_port"] = "Inscrire le port de l'hôte SMTP.";
$messages["smtp_port"] = "Port de l'hôte SMTP.";
$messages["help_smtp_use_authentication"] = "Activer l'authenfication SMTPS. N'oubliez pas de compléter les deux champs suivants.";
$messages["smtp_use_authentication"] = "Authentification SMTPS";
$messages["help_smtp_username"] = "Inscrire le pseudonyme pour s'authentifier.";
$messages["smtp_username"] = "Pseudonyme SMTPS";
$messages["smtp_password"] = "Mot de passe SMTPS.";
$messages["help_smtp_password"] = "Inscrire le mot de passe.";
// helpers
$messages["help_path_to_tar"] = "Chemin vers l'utilitaire 'tar'.";
$messages["path_to_tar"] = "'tar'.";
$messages["help_path_to_gzip"] = "Chemin vers l'utilitaire 'gzip'.";
$messages["path_to_gzip"] = "'gzip'.";
$messages["help_path_to_bz2"] = "Chemin vers l'utilitaire 'bzip2'.";
$messages["path_to_bz2"] = "'bzip2'.";
$messages["help_path_to_unzip"] = "Chemin vers 'unzip'.";
$messages["path_to_unzip"] = "'unzip'.";
$messages["help_unzip_use_native_version"] = "Utiliser la fonction unzip de PHP pour décompresser les fichiers .zip.";
$messages["unzip_use_native_version"] = "Unzip avec PHP";
// uploads
$messages["help_uploads_enabled"] = "Activer pour pouvoir télécharger des fichiers avec le blogiciel sur votre blogue.";
$messages["uploads_enabled"] = "Téléchargement des fichiers";
$messages["help_maximum_file_upload_size"] = "Taille maximale en octet des fichiers téléchargés.";
$messages["maximum_file_upload_size"] = "Taille maximale";
$messages["help_upload_forbidden_files"] = "Liste des extensions de fichiers interdites, séparées par un espace.";
$messages["upload_forbidden_files"] = "Extensions interdites";
// interfaces
$messages["help_xmlrpc_api_enabled"] = "Activer l'API XMLRPC pour poster depuis votre bureau.";
$messages["xmlrpc_api_enabled"] = "API XMLRPC";
$messages["help_rdf_enabled"] = "Activer la syndication des contenus via Atom ou RSS.";
$messages["rdf_enabled"] = "Syndication";
$messages["help_default_rss_profile"] = "Flux RSS/RDF généré par défaut.";
$messages["default_rss_profile"] = "Flux RSS/RDF";
// security
$messages["help_security_pipeline_enabled"] = "Activer si vous désirez avoir diverses fonctions de sécurité pour protéger votre système contre l'utilisation abusive.";
$messages["security_pipeline_enabled"] = "Fonctions de sécurité.";
$messages["help_ip_address_filter_enabled"] = "Activer cette entité pour pouvoir bloquer des utilisateurs malveillants par leur adresse IP.";
$messages["ip_address_filter_enabled"] = "Filtrage IP.";
$messages["help_content_filter_enabled"] = "Activer cette entité pour pouvoir bloquer l'utilisation des mots indésirables.";
$messages["content_filter_enabled"] = "Filtrage contenu";
$messages["help_maximum_comment_size"] = "Indiquer la taille maximum en octets des commentaires que les internautes pourront poster sur le blogiciel.";
$messages["maximum_comment_size"] = "Taille maximum";

// bayesian filter
$messages["help_bayesian_filter_enabled"] = "Activer le filtrage des pourriels selon l'algorithme Bayesian.";
$messages["bayesian_filter_enabled"] = "Filtrage Bayesian.";
$messages["help_bayesian_filter_spam_probability_treshold"] = "Valeur minimale pour classer un commentaire comme un pourriel (0.01 > 0.99).";
$messages["bayesian_filter_spam_probability_treshold"] = "Valeur minimale";
$messages["help_bayesian_filter_nonspam_probability_treshold"] = "Valeur maximale pour classer un commentaire comme un commentaire sain.";
$messages["bayesian_filter_nonspam_probability_treshold"] = "Valeur maximale";
$messages["help_bayesian_filter_min_length_token"] = "Taille minimale d'une unité lexicale pour être analysée correctement.";
$messages["bayesian_filter_min_length_token"] = "Taille minimale";
$messages["help_bayesian_filter_max_length_token"] = "Taille maximale d'une unité lexicale pour être analysée correctement.";
$messages["bayesian_filter_max_length_token"] = "Taille maximale";
$messages["help_bayesian_filter_number_significant_tokens"] = "Nombre d'unités lexicales permises par commentaire.";
$messages["bayesian_filter_number_significant_tokens"] = "Unités lexicales permises";
$messages["help_bayesian_filter_spam_comments_action"] = "Sauvegarder dans la base de donnée les pourriels pour entraîner le filtre.";
$messages["bayesian_filter_spam_comments_action"] = "Sauvegarde";
$messages["keep_spam_comments"] = "Sauvegarder comme \"Pourriel\"";
$messages["throw_away_spam_comments"] = "Ne pas sauvegarder";
// resources
$messages["help_resources_enabled"] = "Activer les ressources tels les images et les fichiers";
$messages["resources_enabled"] = "Ressources tels les images et les fichiers";
$messages["help_resources_folder"] = "Dossier où les ressources sont stockées. Mettre hors de la partie du serveur utilisée pour augmenter la sécurité";
$messages["resources_folder"] = "Dossier des ressources";
$messages["help_thumbnail_method"] = "Choisir la méthode de génération d'aperçu. Si vous désirez utiliser PHP, le serveur doit supporter GD.";
$messages["thumbnail_method"] = "Méthode de génération d'aperçu";
$messages["ImageMagick"] = "Programme ImageMagick";
$messages["PHP's GD library"] = "Librairie GD de php";
$messages["None"] = "Aucune";
$messages["help_path_to_convert"] = "Indiquer le dossier de l'outil \"convert\" du programme ImageMagick. Obligatoire si la méthode de génération d'aperçu est \"ImageMagick\"";
$messages["path_to_convert"] = "Dossier de l'outil \"convert\" de ImageMagick";
$messages["help_thumbnail_format"] = "Choisir le format dans lequel les aperçus seront sauvegardés";
$messages["thumbnail_format"] = "Format des aperçus";
$messages["same_as_image"] = "Même que l'image";
$messages["help_thumbnail_height"] = "Indiquer la hauteur désirée par défaut pour les aperçus de petite taille.";
$messages["thumbnail_height"] = "Hauteur des aperçus de petite taille";
$messages["help_thumbnail_width"] = "Indiquer la largeur désirée par défaut pour les aperçus de petites tailles.";
$messages["thumbnail_width"] = "Largeur des aperçus de petite taille";
$messages["help_medium_size_thumbnail_height"] = "Indiquer la hauteur désirée par défaut des aperçus de taille moyenne";
$messages["medium_size_thumbnail_height"] = "Hauteur des aperçus de taille moyenne";
$messages["help_medium_size_thumbnail_width"] = "Indiquer la largeur désirée par défaut des aperçus de taille moyenne";
$messages["medium_size_thumbnail_width"] = "Largeur des aperçus de taille moyenne";
$messages["help_thumbnails_keep_aspect_ratio"] = "Garder les dimensions de l'aperçu propotionnelles. Peut générer des aperçus plus grands que la taille spécifiée mais de meilleures qualités.";
$messages["thumbnails_keep_aspect_ratio"] = "Dimension propotionnelle";
$messages["help_thumbnail_generator_force_use_gd1"] = "Forcer le blogiciel à utiliser les fontions de GD1 seulement.";
$messages["thumbnail_generator_force_use_gd1"] = "Utilisation de GD1";
$messages["help_thumbnail_generator_user_smoothing_algorithm"] = "Algorithme utilisé pour lisser les aperçus. Utilisé uniquement quand la méthode de génération d'aperçu est GD.";
$messages["thumbnail_generator_use_smoothing_algorithm"] = "Algorithme pour lisser les aperçus";
$messages["No filter"] = "Aucun filtre";
$messages["PHP ImageCopyResampled"] = "ImageCopyResampled de PHP";
$messages["Bi-linear"] = "Bi-linéaire";
$messages["Bi-cubic"] = "Bi-cubique";
$messages["help_resources_quota"] = "Quota de ressources par défaut pour les blogues.";
$messages["resources_quota"] = "Quota de ressources";
$messages["help_resource_server_http_cache_enabled"] = "Activer le support de la cache pour les ressources. Cette entité est utile pour réduire l'utilisation de la bande passante.";
$messages["resource_server_http_cache_enabled"] = "Support de la cache";
$messages["help_resource_server_http_cache_lifetime"] = "Temps en microsecondes de la durée de vie de la cache des ressources.";
$messages["resource_server_http_cache_lifetime"] = "Durée de vie";
// search
$messages["help_search_engine_enabled"] = "Activer le moteur de recherche.";
$messages["search_engine_enabled"] = "Moteur de recherche";
$messages["help_search_in_custom_fields"] = "Rechercher dans les champs personnalisés.";
$messages["search_in_custom_fields"] = "Champs personnalisés";
$messages["help_search_in_comments"] = "Rechercher dans les commentaires.";
$messages["search_in_comments"] = "Commentaires";
// cleanup
$messages["purge"] = "Nettoyer";
$messages["cleanup_spam"] = "Nettoyage des pourriels";
$messages["cleanup_spam_help"] = "Ceci supprimera tout les pourriels. Il ne sera plus possible de revenir en arrière.";
$messages["spam_comments_purged_ok"] = "Pourriels nettoyés";
$messages["cleanup_posts"] = "Nettoyage des billets";
$messages["cleanup_posts_help"] = "Ceci supprimera physiquement tout les billets supprimés (marqué comme \"supprimé\"). Il ne sera plus possible de revenir en arrière.";
$messages["posts_purged_ok"] = "Billets nettoyés";

/// summary ///
// front page
$messages["summary"] = "Sommaire";
$messages["register"] = "S'inscrire";
$messages["summary_welcome"] = "Bienvenue!";
$messages["summary_most_active_blogs"] = "Blogues les plus actifs";
$messages["summary_most_commented_articles"] = "Billets les plus commentés";
$messages["summary_most_read_articles"] = "Billets les plus lus";
$messages["password_forgotten"] = "Vous avez perdu votre mot de passe?";
$messages["summary_newest_blogs"] = "Nouveaux blogues";
$messages["summary_latest_posts"] = "Derniers billets";
$messages["summary_search_blogs"] = "Recherche d'un blogue";

// blog list
$messages["updated"] = "mis à jour";
$messages["total_reads"] = "total";

// blog profile
$messages["blog"] = "Blogue";
$messages["latest_posts"] = "Derniers billets";

// registration
$messages["register_step0_title"] = "Service d'acceptation des termes";
$messages["decline"] = "Refuser";
$messages["accept"] = "Accepter";
$messages["read_service_agreement"] = "Veuillez lire les termes de ce service et cliquer sur le bouton \"Accepter\" si vous êtes d'accord.";
$messages["register_step1_title"] = "Créer un compte [1/4]";
$messages["register_step1_help"] = "Vous devez créer un compte pour avoir un blogue. Vous serez l'administrateur principal de ce blogue et vous aurez accès à toutes les fonctionnalités.";
$messages["register_next"] = "Suivant";
$messages["register_back"] = "Retour";
$messages["register_step2_title"] = "Créer un blogue [2/4]";
$messages["register_blog_name_help"] = "Nom du nouveau blogue";
$messages["register_step3_title"] = "Choisir un modèle [3/4]";
$messages["step1"] = "Etape 1";
$messages["step2"] = "Etape 2";
$messages["step3"] = "Etape 3";
$messages["register_step3_help"] = "Sélectionnez un des modèles disponibles pour habiller votre blogue. Vous pourrez le changer ultérieurement.";
$messages["error_must_choose_template"] = "Vous devez choisir un modèle.";
$messages["select_template"] = "Sélectionner un modèle";
$messages["register_step5_title"] = "Merci! [4/4]";
$messages["finish"] = "Fin";
$messages["register_need_confirmation"] = "Un courriel de confirmation vous a été envoyé, cliquez sur le lien dès que vous recevrez ce message pour démarrer l'édition de votre blogue.";
$messages["register_step5_help"] = "Merci, votre compte et votre blogue ont été créés!";
$messages["register_blog_link"] = 'Si vous voulez voir votre blogue, vous pouvez aller ici: <a href=\"%2$s\">%1$s</a>.';
$messages["register_blog_admin_link"] = "Si vous préférez rédiger et publier des billets sur votre blogue, cliquez ici pour aller à <a href=\"admin.php\">au tableau de bord</a>.";
$messages["register_error"] = "Erreur durant la procédure";
$messages["error_registration_disabled"] = "Désolé, les inscriptions sont suspendues pour le moment.";
// registration article topic and text
$messages["register_default_article_topic"] = "Félicitation!";
$messages["register_default_article_text"] = "Si vous pouvez lire cet article, cela signifie que votre enregistrement s'est déroulé correctement et que vous pouvez démarrer la créatopm et la publication de billets";
$messages["register_default_category"] = "Général";
// confirmation email
$messages["register_confirmation_email_text"] = "Veuillez cliquer sur ce lien pour activer votre compte:

%s

Cordialement.";
$messages["error_invalid_activation_code"] = "Désolé, votre numéro de confirmation est invalide.";
$messages["blog_activated_ok"] = "Félicitation, votre compte et votre blogue ont été activés!";
// forgot your password?
$messages["reset_password"] = "Réinitialiser votre mot de passe";
$messages["reset_password_username_help"] = "Nom de l'utilisateur pour lequel vous désirez réinitialiser le mot de passe.";
$messages["reset_password_email_help"] = "Adresse de courriel que vous avez utilisé pour ouvrir ce compte utilisateur.";
$messages["reset_password_help"] = "Utilisez ce formulaire pour réinitialiser votre mot de passe. Veuillez entrer le nom d'utilisateur et le courriel que vous avez fournis lors de votre inscription.";
$messages["error_resetting_password"] = "Il y a eu une erreur lors de la réinitialisation du mot de passe. Vérifiez les données entrées et recommencez.";
$messages["reset_password_error_incorrect_email_address"] = "L'adresse de courriel est inexacte ou cette adresse n'a pas été utilisée pour l'inscription de cet utilisateur.";
$messages["password_reset_message_sent_ok"] = "Un courriel avec un hyperlien a été envoyé à votre adresse de courriel. Veuillez cliquer sur le lien pour compléter la réinitialisation de votre mot de passe.";
$messages["error_incorrect_request"] = "Les paramètes dans l'URL sont erronés.";
$messages["change_password"] = "Choisir un nouveau mot de passe.";
$messages["change_password_help"] = "Veuillez inscrire et confirmer votre nouveau mot de passe.";
$messages["new_password"] = "Nouveau mot de passe";
$messages["new_password_help"] = "Inscrire ici votre nouveau mot de passe";
$messages["password_updated_ok"] = "Votre mot de passe a été changé avec succès.";

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

$messages["trackback_urls"]= "URLs de rétrolien";

$messages["password_field"] = "Mot de passe";
$messages["password_field_help"] = "Include un mot de passe pour protéger le billet. Avant d'afficher le billet, pLog demandera le mot de passe.";

?>
