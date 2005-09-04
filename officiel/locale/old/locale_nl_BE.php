<?php
/*
 * This translation was made by Koen Calliauw (info@versys.be)
 *
 */
// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "iso-8859-15";
$messages["locale_description"] = "Nederlands taalbestand voor pLog";
// days of the week
$messages["days"] = Array( "Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag" );
// -- compatibility, do not touch -- //
$messages["Monday"] = $messages["days"][1];
$messages["Tuesday"] = $messages["days"][2];
$messages["Wednesday"] = $messages["days"][3];
$messages["Thursday"] = $messages["days"][4];
$messages["Friday"] = $messages["days"][5];
$messages["Saturday"] = $messages["days"][6];
$messages["Sunday"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "Zo", "Ma", "Di", "Wo", "Do", "Vr", "Za" );
// -- compatibility, do not touch -- //
$messages["Mo"] = $messages["daysshort"][1];
$messages["Tu"] = $messages["daysshort"][2];
$messages["We"] = $messages["daysshort"][3];
$messages["Th"] = $messages["daysshort"][4];
$messages["Fr"] = $messages["daysshort"][5];
$messages["Sa"] = $messages["daysshort"][6];
$messages["Su"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December" );
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

$messages["message"] = "Bericht";
$messages["error"] = "Fout";

$messages["date"] = "Datum";

// miscellaneous texts
$messages["of"] = "van";
$messages["recently"] = "recent...";
$messages["comments"] = "commentaar";
$messages["comment on this"] = "Commentaar";
$messages["my_links"] = "mijn Links";
$messages["archives"] = "archieven";
$messages["search"] = "zoeken";
$messages["calendar"] = "kalendar";
$messages["editLinkCategories"] = "categorieën";
$messages["search_s"] = "Zoeken";
$messages["link_tracker"] = "Link Tracker";
$messages["search_this_blog"] = "Doorzoek deze blog:";
$messages["about_myself"] = "Wie ben ik?";
$messages["permalink_title"] = "Permanent linken aan de archieven";
$messages["permalink"] = "Permalink";
$messages["posted_by"] = "Geplaatst door";
$messages["on_the"] = "op de";
$messages["page"] = "pagina";
$messages["posted"] = "geplaatst";

$messages["reply"] = "Beantwoorden";


// add comment form
$messages["add_comment"] = "Commentaar toevoegen";
$messages["comment_topic"] = "Onderwerp";
$messages["comment_text"] = "Tekst";
$messages["comment_username"] = "Uw naam";
$messages["comment_email"] = "Uw emailadres (indien van toepassing)";
$messages["comment_url"] = "Uw persoonlijke pagina (Indien van toepassing)";
$messages["comment_send"] = "Verstuur";
$messages["comment_added"] = "Commentaar toegevoegd!";
$messages["comment_add_error"] = "Fout bij het plaatsen van uw bericht";


$messages["article_does_not_exist"] = "Dit artikel bestaat niet";
$messages["no_posts_found"] = "Er werden geen berichten gevonden";
$messages["user_has_no_posts_yet"] = "De gebruiker heeft nog geen berichten";

$messages["info_about_myself"] = "Wat informatie over mezelf...";
$messages["back"] = "Terug";

$messages["back_top"] = "Naar Boven";

$messages["post"] = "bericht";

$messages["trackbacks_for_article"] = "Trackbacks voor het artikel getiteld";
$messages["trackback_excerpt"] = "Uittreksel";
$messages["trackback_weblog"] = "Weblog";

$messages["search_results"] = "Zoekresultaten";
$messages["search_matching_results"] = "De volgende berichten komen overeen met uw zoekcriteria: ";
$messages["search_no_matching_posts"] = "Geen overeenkomende berichten gevonden";

$messages["see_all_link"] = "Klik hier om alle berichten ooit geplaatst te zien";

$messages["read_more"] = "(Meer)";

$messages["anonymous_poster"] = "Anonieme Plaatser";

$messages["syndicate"] = "SYNDICAAT";

$messages["main"] = "Hoofd";

////// error messages /////
$messages["error_fetching_article"] = "Het gespecifieerde bericht kon niet worden gevonden.";
$messages["error_fetching_articles"] = "De artikelen konden niet worden opgehaald.";
$messages["error_trackback_no_trackback"] = "Er werden geen Trackbacks gevonden voor het artikel";
$messages["error_incorrect_article_id"] = "Het artikelid is niet juist.";
$messages["error_incorrect_blog_id"] = "Het journaalid is niet juist.";
$messages["error_comment_without_text"] = "U dient minstens wat tekst op te geven.";
$messages["error_comment_without_name"] = "U dient minstens uw naam of bijnaam op te geven.";
$messages["error_adding_comment"] = "Er is een fout opgetreden bij het toevoegen van uw commentaar aan de databank.";
$messages["error_incorrect_parameter"] = "Incorrecte parameter.";
$messages["error_parameter_missing"] = "Er is een ontbrekende parameter in de aanvraag.";
$messages["error_blog_has_no_links"] = "Deze blog heeft nog geen links.";
$messages["error_comments_not_enabled"] = "De optie om commentaar te geven werd uitgeschakeld voor deze site.";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////


////// help messages for the administration interface /////
$messages["help_newPost"] = "<p>Gebruik deze pagina om een nieuw bericht toe te voegen aan het journaal.
U dient een onderwerp op te geven voor uw bericht alsook wat tekst ervoor.
Eenaam afgewerkt, klik op de <b>'Toevoegen'</b> knop en het bericht zal automatisch worden opengenomen
op de pagina. Gelieve er notie van te nemen dat u de status van het bericht op <b>'Gepubliceerd'</b>
zet indien u wil dat het bericht verschijnt op de hoofdpagina. Gebruik de <b>'Klad'</b> status als u
het typen van het bericht niet kunt afwerken. Hiermee kunt u later het bericht herzien of afwerken.</p>
<p>U kan het bericht ook classificeren onder de categorieën die u voordien hebt aangemaakt. Hiervoor
dient u gewoon het <b>'Categorie'</b> veld zetten op de categorie u het meest gepast lijkt.</p>
<p>Indien u een emailbericht wilt ontvangen over nieuwe commentaren, gelieve dan het corresponderende
vinkje aan te zetten.</p>
<p>Zet het vinkje aan dat zegt <b>'Vind links in het bericht...'</b> als u na het toevoegen
van het bericht, trackback pings wilt versturen naar de machines die dit ondersteunen. Uw bericht
zal worden gescand voor links en u zal de mogelijkheid hebben om te kiezen naar welke machines u
trackback pings wil sturen.</p>";

$messages["addPost"] = "<p>Uw bericht wed toegevoegd aan de databank. Nu kunt u selecteren naar
welke machines u een trackback ping wilt sturen, zodat ze weten dat u over hen hebt geschreven en
zodat ze u kunnen <i>terugvinden</i>.</p>";

$messages["editComments"] = "Dit zijn alle commentaren die werden geplaatst voor een
gegeven bericht. Commentaren kunnen niet worden aangepast maar ze kunnen wel worden verwijderd.
Het enige verplicte veld bij het versturen van het commentaar is het \"Naam\" veld, dus Email
en URL kunnen leeg zijn. Het IP-Adres veld is het originele IP-adres waar dit commentaar van
geplaatst werd. U kunt zoveel verwijderen als u wil door het corresponderende <b>'Verwijder'</b>
vankje aan te zetten en de <b>'Verwijder geselecteerde'</b> aan te klikken.";

$messages["postStats"] = "<p>Dit zijn de statistieken van het geselecteerde bericht. De eerste
is hoeveel keer dit artikel reeds werd gelezen, maar houd er rekening mee dat deze statistiek
betekenisloos kan zijn als als u de 'Lees meer...' optie in 'Blog Instellingen' hebt uitgeschakeld.</p>
<p>De refereerders zijn de urls van alle machines die dit bericht hebben bezocht, en de trackbacks-tabel
representeert het aantal trackback-pings die werden ontvangen voor dit bericht. Deze kunnen niet worden
verwijderd of aangepast.</p>";

$messages["help_editLinks"] = "<p>Dit is een lijst met de links die werden toegevoegd. Zoals berichten, kan
iedere link worden onderverdeeld in categoriën en dan worden uitgestald op de hoofdpagina zodat bezoekers
deze kunnen zien.</p>
<p>U zal zien dat voor iedere link, u een naam zal zien, de url waarnaar ze verwijst en onder welke
categorie ze werd onderverdeeld. Tot slot kunt u ook de geselecteerde links verwijderen.</p>";

$messages["help_newLink"] = "<p>Van hier kunt u een nieuwe link toevoegen. U moet minimum een geldige
link opgeven en een naam voor de link. Het beschrijvingsveld is optioneel maar kan zeer nuttige
informatie over de link bevatten. U hebt minimum één link-categorie nodig voordat u links kunt
toevoegen.</p>";

$messages["help_editLinkCategories"] = "<p>Dit is een lijst met alle link-categorieën die werden
aangemaakt. Zoals bij berichten, hebt u minimaal één link-categorie nodig voordat u links kan
toevoegen. Door te klikken op de <b>'Links'</b> kolom zal u alle links te zien krijgen die
behoren tot die categorie.</p>";

$messages["help_newLinkCategory"] = "<p>Het enige dat u dient op te geven om een nieuwe link
toe te voegen is een beschrijvende naam van de categorie. Eenmaal de link-categorie werd aangemaakt,
is ze automatisch beschikbaar om links in onder te verdelen.</p>";

$messages["help_userSettings"] = "<p>Zaken gerelateerd met uw gebruikersprofiel, kunnen op deze
pagina worden veranderd. Gelieve er notie van te nemen dat uw gebruikersnaam niet kan worden veranderd.<ul>
<li><b>Wachtwoord, Bevestig wachtwoord</b>: Als u uw wachtwoord wil veranderen, gelieve het
dan in de eerste tekstbox in te typen, doe hetzelfde in de tweede box om te bevestigen dat u
hetzelfde wachtwoord hebt ingegeven.</li>
<li><b>Emailadres</b>: Gelieve een geldig emailadres op te geven indien u de opties zoals
commentaarnotificatie wil gebruiken. Dit adres wordt enkel gebruikt voor interne doeleinden
en zal nooit publiekelijk worden weergegeven.</li>
<li><b>Bio</b>: U kunt hier wat informatie opgeven over uzelf. Dit is optioneel.</li>
</ul></p>";

$messages["help_Stats"] = "<p>Hier kan u alle refereerders zien die deze website hebben bezocht
in het verleden. De <b>'Artikel'</b> kolom reflecteert welk artikel werd bezocht door de refereerder,
ofwel de waarde '0' als de refereerder de hoofdpagina bezocht of een andere pagina die geen artikel
was. Tot laatst de <b>'Laatste bezoekdatum'</b> geeft de datum weer waarop de refereerder laatst
de website bezocht.</p>";

$messages["editLink"] = "<p>U dient minstens een geldige url en een naam voor de link op te geven.
De link moet ook worden onderverdeeld in een categorie.</p>";

$messages["editLinkCategory"] = "Gelieve een nieuwe naam op te geven voor de link-categorie die u wil aanpassen.</p>";

$messages["blogSelect"] = "Gelieve een van de bewerkingen te kiezen uit het menu.";

$messages["Error"] = "Er is een fout opgetreden bij het uitvoeren van de gevraagde bewerking. Gelieve
op de hoofdpagina te kijken voor informatie over deze fout.";

$messages["Message"] = "Gelieve op de hoofdpagina te kijken voor meer informatie over deze fout.";

//////// strings for the administration interface ///////



$messages["admin_interface_title"] = "pLog Administratieve Interface";
$messages["administration"] = "Administratie";
$messages["help"] = "Help";
$messages["plog_help"] = "pLog Help";
$messages["newPost"] = "Nieuw Bericht";
$messages["editPosts"] = "Berichten";
$messages["editArticleCategories"] = "Categorieën";
$messages["admin_links"] = "Links";
$messages["editLinkCategories"] = "Link Categorieën";
$messages["settings"] = "Instellingen";
$messages["Logout"] = "Afmelden";

// new post page
$messages["topic"] = "Onderwerk";
$messages["text"] = "Tekst";
$messages["category"]  = "Categorie";
$messages["status"] = "Status";
$messages["post_status_draft"] = "Klad";
$messages["post_status_published"] = "Gepubliceerd";
$messages["post_status_deleted"] = "Verwijderd";
$messages["post_status_all"] = "Alle";
$messages["send_notification"] = "Houd me of de hoogte telkens er een commentaar is.";
$messages["send_trackback_pings"] = "Zoek links in het bericht en stuur trackback pings naar de links die deze optie ondersteunen.";
$messages["add_post"] = "Blog dit!";

$messages["xmlrpc_ping_ok"] = "XML-RPC Ping werd verstuurd naar ";
$messages["error_sending_xmlrpc_ping"] = "Er is een fout opgetreden bij het zenden van een XML-RPC Ping naar ";
$messages["error_sending_xmlrpc_ping_message"] = "Foutbericht was: ";

$messages["preview"] = "Voorbeeld";
$messages["post_added"] = "Bericht toegevoegd";
$messages["you_will_be_notified"] = "Aanvullend zult u nog worden op hoogte gehouden van activiteit binnen dit bericht.";
$messages["post_added_not_published"] = "Bericht toegevoegd, maar niet gepubliceerd.";
$messages["error_adding_post"] = "Fout bij het toevoegen van het bericht!";
$messages["error_must_fill_all_fields"] = "U dient alle velden in te vullen!";
$messages["error_must_have_one_category"] = "U dient minstens één berichtcategorie te maken alvorens een bericht te maken.";

// send trackbacks page
$messages["send_trackback_pings"] = "Stuur Trackback Pings";
$messages["links_found"] = "De volgende linsk werden gevonden in uw bericht. Klik deze aan
waarnaar u trackback pings wil versturen (houd er rekening mee dat dit proces even kan duren)";
$messages["trackbacks_no_urls_selected"] = "Er werden geen urls geselecteerd, danig werden er geen pings gestuurd.";
$messages["trackbacks_received_ok"] = "De volgende links hebben succesvol de trackback ping ontvangen:";
$messages["trackbacks_no_trackback"] = "De volgende link heeft geen gevalideerde trackback url: ";
$messages["trackbacks_problems_sending"] = "Er waren problemen bij het versturen van de trackback pings
naar de volgende machines. U kan het proces opnieuw proberen indien u dit wenst.";
$messages["trackbacks_received_all_hosts"] = "Alle machines ontvingen succesvol de trackback ping.";
$messages["ping_selected"] = "Ping geselecteerde sites";

// edit posts
$messages["author"] = "Auteur";
$messages["category_all"] = "Alle";
$messages["author_all"] = "Alle";
$messages["update"] = "Aanpassen";
$messages["date"] = "Datum";
$messages["help_Stats"] = "Statistieken";
$messages["delete"] = "Verwijder";

$messages["delete_selected"] = "Verwijder geselecteerde";

// edit post
$messages["edit_post"] = "Bericht aanpassen";
$messages["error_getting_post_to_update"] = "Er is een fout opgetreden bij het ophalen van het bericht voor bewerking.";
$messages["error_updating_post_in_database"] = "Fout bij het aanpassen van het bericht in de databank.";
$messages["post_successfully_updated"] = "Bericht goed aangepast.";
$messages["notification_removed"] = "De notificatiestatus die u had voor dit bericht, werd verwijderd.";

// post statistics
$messages["statistics_for_post"] = "Statistieken voor bericht ";
$messages["error_fetching_post"] = "Er was een fout bij het ophalen van het bericht.";
$messages["times_post_has_been_read"] = "Aantal keren dat bericht werd gelezen: ";
$messages["referers"] = "Refereerders";
$messages["id"] = "Id";
$messages["url"] = "Url";
$messages["hits"] = "Bezoeken";
$messages["trackbacks"] = "Trackbacks";

// post comments
$messages["error_fetching_comments"] = "Fout bij het ophalen van artikelcommentaar";
$messages["comments_for_post"] = "Commentaar voor bericht ";
$messages["email"] = "EMail";
$messages["ip_address"] = "IP-Adres";

// delete comments

// please remove these comments after translating these lines
$messages["error_no_comments_selected"] = "Geen commentaren werden geselecteerd voor verwijdering.";
$messages["error_deleting_comment"] = "Er trad een fout op bij het verwijderen van de commentaar ";
$messages["comment_deleted_ok"] = "Commentaar met onderwerp \"%s\" werd succesvol verwijderd.";

// please remove these comments after translating these lines


// categories list
$messages["category_name"] = "Naam";

// removing posts
$messages["post_cannot_be_deleted"] = "Bericht kan niet worden verwijderd";
$messages["no_posts_selected"] = "There were no posts selected to delete.";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "Error deleting post \"%s\" (id = %d)";
$messages["post_deleted_ok"] = "Post \"%2\$s\" successfully deleted (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "Er werden geen commentaren geselecteerd voor verwijdering.";
$messages["error_category_has_articles"] = "Kon categorie \"%s\" niet verwijderen omdat het nog berichten bevat.";
$messages["error_deleting_category"] = "Fout bij het verwijderen van categorie \"%s\" uit de database.";
$messages["category_deleted_ok"] = "Categorie \"%s\" verwijderd.";

// add category
$messages["newArticleCategory"] = "Nieuwe categorie toevoegen";
$messages["add_new_category_info"] = "Gelieve uw categorie een naam te geven.";
$messages["category_added_ok"] = "Categorie toegevoegd.";
$messages["error_adding_article_category"] = "Er trad een fout op bij het toevoegen van de categorie.";

// edit categories
$messages["edit_category"] = "Categorie aanpassen";
$messages["please_provide_valid_category_name"] = "Gelieve uw categorie een naam te geven.";

// edit category
$messages["error_incorrect_category_id"] = "Onjuiste categorie id";

// update the category
$messages["error_fetching_category"] = "Er trad een fout op bij het ophalen van de categorie.";
$messages["error_updating_category"] = "Er trad een fout op bij het aanpassen van de categorie.";
$messages["error_empty_category_name"] = "U moet een geldige naam opgeven voor de categorie.";
$messages["category_updated_ok"] = "Categorie aangepast.";

// edit links
$messages["link_name"] = "Naam";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["category"];
$messages["link_description"] = "Beschrijving";
$messages["editLinks"] = "Links";

// edit a link
$messages["error_provide_name_and_url"] = "U moet minstens een naam en url opgeven voor de link.";
$messages["error_invalid_link_id"] = "De link id is fout of ontbrekend.";
$messages["error_fetching_link"] = "Er trad een fout op bij het ophalen van de link.";
$messages["error_updating_link"] = "Er trad een fout op bij het aanpassen van de link.";
$messages["link_updated_ok"] = "Link aangepast!";
$messages["error_fetching_link_categories"] = "Er trad een fout op tijdens het ophalen van de link categorieën.";

// add a link
$messages["add_new_link"] = "Nieuwe link toevoegen";
$messages["newLink"] = "Link toevoegen";
$messages["error_adding_link"] = "Er trad een fout op bij het toevoegen van de link.";
$messages["link_added_ok"] = "Link toegevoegd.";
$messages["error_provide_name_and_url"] = "U dient minstens een geldige naam en url op te geven.";
$messages["error_must_have_one_link_category"] = "U moet minstens één link categorie hebben voordat u een link kunt toevoegen.";

// delete a link
$messages["error_no_links_selected"] = "Geen links geselecteerd voor verwijdering.";
$messages["error_removing_link"] = "Fout bij het verwijderen van link \"%s\" uit de database.";
$messages["link_deleted_ok"] = "Link \"%s\" verwijderd uit de database.";

// edit link categories
$messages["newLinkCategory"] = "Nieuwe link categorie toevoegen";
$messages["link_categories_help"] = "U moet minstens één link categorie hebben voordat u een link kunt toevoegen.";
$messages["link_category_name"] = "Naam";
$messages["link_category_links"] = "Links";

// new link category
$messages["new_link_category_info"] = "Link categorieën helpen bij het indelen van uw links. U kunt later de links ook
gegroepeerd weergeven volgends categorie op de hoofdpagina.";
$messages["newLinkCategory"] = "Link categorie toevoegen";
$messages["error_provide_link_category_name"] = "U moet een juiste naam opgeven voor de categorie.";
$messages["error_adding_link_category"] = "Er trad een fout op bij het toevoegen van de link categorie.";
$messages["link_category_added_ok"] = "Link categorie toegevoegd.";

// edit link category
$messages["edit_link_category"] = "Link categorie aanpassen";
$messages["error_updating_link_category"] = "Er trad een fout op bij het aanpassen van de link categorie.";
$messages["link_category_updated_ok"] = "Link categorie aangepast.";
$messages["error_fetching_link_category"] = "Fout bij het ophalen van de link categorie.";
$messages["error_incorrect_link_category_id"] = "Foute link categorie id";


// delete link categories
$messages["error_no_link_category_selected"] = "Geen link categorieën geselecteerd voor verwijdering.";
$messages["error_links_in_link_category"] = "Categorie \"%s\" kon niet worden verwijderd omdat deze categorie nog links bevat.";
$messages["error_removing_link_category"] = "Fout bij het verwijderen van de link categorie \"%s\".";
$messages["link_category_deleted_ok"] = "Link categorie \"%s\" verwijderd.";
$messages["error_removing_link_category_2"] = "Fout bij het verwijderen van de link categorie met id = %d";

// blog settings page
$messages["blogSettings"] = "Site Instellingen";
$messages["userSettings"] = "Gebruikersprofiel";
$messages["pluginCenter"] = "Plugincentrum";
$messages["Stats"] = "Statistieken";
$messages["blog_name"] = "Blog naam";
$messages["long_blog_name"] = "Langere, beschrijvende tekst over deze blog";
$messages["language_used"] = "Taal gebruikt om tekst en data weer te geven";
$messages["items_main_page"] = "Hoeveel items wilt u tonen op de hoofdpagina?";
$messages["items_as_recent"] = "Hoeveel items wilt u tonen in \"Recentelijk\"?";
$messages["template_used"] = "Kies een template die het uiterlijk van uw site zal definiëren";
$messages["cut_posts"] = "Langere berichten inkorten en aanvullen met een \"Meer...\" link?";
$messages["cut_posts_after_characters"] = "Hoeveel karakters laat u toe alvorens het bericht in te korten?";
$messages["enable_wysiwyg_edition"] = "WYSIWYG bewerken van teksten inschakelen (Enkel Internet Explorer 5.5 of hoger en Mozilla 1.3b of hoger)?";
$messages["enable_comments"] = "Commentaar inschakelen voor alle berichten?";
$messages["yes"] = "Ja";
$messages["no"] = "Nee";
$messages["error_invalid_locale"] = "Onjuiste waarde voor taalinstelling";
$messages["error_incorrect_max_recent_items"] = "U moet een geldige waarde geven voor het aantal berichten in 'Recentelijk'.";
$messages["error_incorrect_number_of_posts"] = "U moet een geldige waarde geven voor het aantal berichten in de hoofdpagina.";
$messages["error_incorrect_template"] = "De waarde voor het template.";
$messages["error_no_blog_name"] = "U moet een geldige naam geven voor de Blog.";
$messages["error_incorrect_show_more_threshold"] = "U moet een geldige waarde opgeven voor het aantal karakters om te tonen vooraleer een post in te korten met de \"Meer...\" link.";
$messages["error_updating_settings"] = "Er trad een fout op bij het aanpassen van de instellingen voor de site.";
$messages["blog_settings_updated_ok"] = "Blog instellingen aangepast!";
$messages["permanent_blog_url"] = "Permanent URL voor deze blog (alleen-lezen)";

// user profile page
$messages["username"] = "Gebruikersnaam";
$messages["password"] = "Wachtwoord";
$messages["confirm_password"] = "Bevestig wachtwoord";
$messages["email_address"] = "Emailadres";
$messages["bio"] = "Bio";
$messages["empty_no_change"] = "Leeglaten voor geen veranderingen";
$messages["user_settings_updated_ok"] = "Gebruikersinstellingen aangepast.";
$messages["error_updating_user_settings"] = "Fout bij het aanpassen gebruikersinstellingen.";
$messages["error_passwords_dont_match"] = "Sorry, wachtwoorden komen niet overeen.";
$messages["error_incorrect_password"] = "Sorry, wachtwoord onjuist.";
$messages["error_incorrect_email_address"] = "Emailadres onjuist.";


// plugin center page
$messages["plugins_available"] = "Dit is een lijst van de plugins beschikbaar om te gebruiken in de templates";
$messages["identifier"] = "ID";
$messages["description"] = "Beschrijving";
$messages["error_plugins_disabled"] = "Plugin-ondersteuning werd uitgeschakeld voor deze site.";

// statistics page
$messages["statistics_info"] = "Een artikelID van 0 betekent dat dit inkomende hits waren naar de hoofdpagina of een andere pagina dan een bericht.";
$messages["article_id"] = "ArtikelID";
$messages["last_hit_date"] = "Laatste Hit Datum";
$messages["error_fetching_referers"] = "Fout bij het ophalen van de verwijzers voor deze site";


// login screen
$messages["login_page_title"] = "Site Administratieve Interface";
$messages["login"] = "Login";
$messages["welcome_message"] = "Welkom";
$messages["error_incorrect_username_or_password"] = "Sorry, Onjuiste gebruikersnaam of wachtwoord.";
$messages["error_dont_belong_to_any_blog"] = "Sorry, u behoort nog niet toe aan een site.";
$messages["error_no_username_or_password"] = "Geleive een geldige gebruikersnaam en wachtwoord op te geven.";
$messages["choose_one_blog"] = " U behoort toe aan volgende sites. Kies één om nu aan te passen";
$messages["continue"] = "Verdergaan";
$messages["logout_message"] = "U werd afgemeld.";
$messages["logout_message_2"] = "<a href=\"admin.php\">Klik hier</a> om opnieuw in te loggen of
<a href=\"%1\$s\">hier om naar %2\$s</a> te gaan.";
$messages["logout_title"] = "Afgemeld";
$messages["error_access_forbidden"] = "Toegang verboden. U moet eerst hier inloggen.";

$messages["site_admin"] = "Site Admin";
$messages["site_stats"] = "Site Statistieken";
$messages["createUser"] = "Gebruiker toevoegen";
$messages["siteUsers"] = "Gebruikers";
$messages["createBlog"] = "Site toevoegen";
$messages["editSiteBlogs"] = "Sites";
$messages["siteLocales"] = "Taalinstellingen";
$messages["newLocale"] = "Taal toevoegen";
$messages["siteTemplates"] = "Templates";
$messages["newTemplate"] = "Template toevoegen";
$messages["editSiteSettings"] = "Globale Instellingen";
$messages["adminSettings"] = "Site Instellingen";
$messages["help_comments_enabled"] = "Schakelt commentaar voor de hele site in of uit.";
$messages["help_beautify_comments_text"] = "Respecteert de gebruiker zijn opmaak bij het sturen van een bericht.";
$messages["help_rdf_enabled"] = "Schakelt de generatie van een RDF toevoer met de laatste berichten in of uit.";
$messages["help_temp_folder"] = "Map die zal worden gebruikt door de site om acties uit te voeren die een tijdelijke map nodig hebben.";
$messages["help_base_url"] = "Deze url zal worden gebruikt om correcte urls te genereren, dus gelieve hier de juiste waarde in te vullen";
$messages["help_show_posts_max"] = "Het aantal berichten dat standaard wordt getoond op de hoofdpagina.";
$messages["help_recent_posts_max"] = "Het aantal berichten dat wordt getoond in 'Recentelijk'.";
$messages["help_template_folder"] = "De plaats waar Sites templates staan.";
$messages["help_default_template"] = "Het template dat standaard zal worden gebruikt bij nieuwe sites.";
$messages["help_default_locale"] = "De standaard taalinstellingen die zal worden gebruikt voor nieuwe sites en in de loginpagina van de administratiemodule.";
$messages["help_html_allowed_tags_in_comments"] = "HTML tags die niet zullen worden verwijderd in commentaren van gebruikers.";
$messages["help_referer_tracker_enabled"] = "Voegt korte info toe over verwijzers aan de database, als de verwijzer beschikbaar is tijdens de aanvraag.";
$messages["help_rss_parser_enabled"] = "Schakelt de RSS parser in of uit die beschikbaar is in de templates.";
$messages["help_show_more_enabled"] = "Schakelt de \"Meer...\" link in of uit.";
$messages["help_show_more_threshold"] = "Hoeveel karakters getoond moeten worden voor de 'Meer...' Link.";
$messages["help_update_article_reads"] = "Als al dan niet de interne teller moet worden aangepast voor het aantal hits per pagina.";
$messages["help_request_format_mode"] = "De \"Flat\" modus zal normale urls genereren, waar \"Zoekrobot Vriendelijk\" urls zal genereren die gemakkelijker leesbaar zijn en die zullen worden opgepikt door zoekrobots. Apache en de mogelijkheid om .htaccess bestanden te gebruiken vereist.";
$messages["help_xmlrpc_ping_enabled"] = "Als al dan niet een XMLRPC notificatie moet worden gestuurd naar de hosts die geconfigureerd zijn om deze te ontvangen als een nieuw bericht werd toegevoegd.";
$messages["help_xmlrpc_ping_hosts"] = "Lijst van hosts die XMLRPC notificaties ondersteunen. Gelieve de verschillende hosts op verschillende lijnen te zetten, zo veel als nodig.";
$messages["help_trackback_server_enabled"] = "Als er al dan niet inkomende trackback pings moeten worden geaccepteerd.";
$messages["help_htmlarea_enabled"] = "Schakelt de WYSIWYG editor van berichten in of uit.";
$messages["help_plugin_manager_enabled"] = "Schakelt plugins in of uit.";
$messages["help_check_email_address_validity"] = "Bij het registreren van een nieuwe site, worden gebruikers gevraagd om een geldig emailadres op te geven dat zal worden gecontroleerd indien deze optie aangezet is.";
$messages["help_summary_page_show_max"] = "Het aantal items die moeten opduiken in de samenvattingspagina.";
$messages["help_minimum_password_length"] = "Het aantal karakters dat een paswoord minimum moet bevatten.";
$messages["help_users_can_add_templates"] = "Als gebruikers al dan niet site-specifieke templates mogen gebruiken in hun sites.";
$messages["help_email_service_enabled"] = "Schakelt de email service in of uit, wordt bv. gebruikt om berichtnotificaties te sturen.";
$messages["post_notification_source_address"] = "Adres dat zal worden gebruikt in het Van: veld wanneer er emails worden verstuurd.";
$messages["help_email_service_type"] = "Methode die zal worden gebruikt om emails te versturen. Geleive er één te kiezen en onderstaande instellingen te controleren.";
$messages["help_smtp_host"] = "Als SMTP wordt gebruikt als verstuurmethode, dan is dit de host waarnaar berichten te sturen (smart-host).";
$messages["help_smtp_port"] = "Poort van de bovenstaande host waarop de SMTP-service draait.";
$messages["help_smtp_use_authentication"] = "Als de SMTP-server authenticatie ondersteunt en u wilt dit gebruiken, schakel deze optie dan in en controleer de twee onderstaande instellingen.";
$messages["help_smtp_username"] = "Gebruikersnaam die zal worden gebruikt om via geauthenticeerde SMTP berichten te versturen.";
$messages["help_smtp_password"] = "Wachtwoord dat zal worden gebruikt om via geauthenticeerde SMTP berichten te versturen.";
$messages["help_uploads_enabled"] = "Schakelt het opladen van bestanden in of uit. Deze optie zal effect hebben op het opladen van template sets en/of het toevoegen van bestanden aan nieuwe template sets.";
$messages["help_maximum_file_upload_size"] = "Maximum grootte in bytes van bestanden, opgeladen door gebruikers.";
$messages["help_upload_forbidden_files"] = "Lijst van bestandspatronen die niet mogen worden opgeladen. U kunt er zoveel specifiëren als nodig, allemaal gescheiden door een spatie.";
$messages["help_path_to_tar"] = "Pad waar de 'tar' tool kan worden gevonden.";
$messages["help_path_to_gzip"] = "Pad waar de 'gzip' tool kan worden gevonden.";
$messages["help_path_to_bz2"] = "Pad waar de 'bzip2' tool kan worden gevonden.";
$messages["help_path_to_unzip"] = "Pad waar de 'unzip' tool kan worden gevonden.";

$messages["add_user_give_information"] = "Gelieve de volgende informatie op te geven om een nieuwe gebruiker aan te maken.";

$messages["site_registered_users"] = "Dit zijn alle geregistreerde gebruikers op deze server.";

$messages["add_blog_give_information"] = "Gelieve de volgende informatie op te geven om een nieuwe site aan te maken.";
$messages["blog_title"] = "Site titel";
$messages["blog_owner"] = "Site eigenaar";

$messages["site_registered_blogs"] = "Dit zijn alle sites geregistreerd op deze server.";
$messages["editSiteUsers"] = "Gebruikers aanpassen";

$messages["upload_locale"] = "Taalinstellingen opladen";
$messages["use_this_form_to_upload_locale"] = "  Gebruik dit formulier om een nieuwe taalinstelling op te laden naar de server. Als u niet in de mogelijkheid bent bestanden op te laden, gelieve dan onderstaand formulier te bekijken.";
$messages["locale_file"] = "Bestand voor Taalinstellingen";
$messages["manually_add_locale"] = "Taalinstelling manueel toevoegen";
$messages["use_this_form_if_cant_upload_locale"] = "Gebruik dit tweede formulier als u niet in de mogelijkheid bent bestanden op te laden. Het bestand moet reeds in de juiste map zijn gekopieerd vooraleer dit uit te voeren. Anders zal deze actie resulteren in een fout.";
$messages["locale_code"] = "Taalinstellings-code";
$messages["locale_encoding"] = "Codering";

$messages["template_will_be_available_for_all"] = "Het nieuwe template wordt automatisch beschikbaar aan alle sites op deze server.";

$messages["use_this_form_to_upload_template"] = "  Gebruik dit formulier om een nieuwe template naar de server te kopiëren. Als u niet in de mogelijkheid bent bestanden op te laden, gelieve dat onderstaand formulier te bekijken. Template sets moeten verpakt zijn in zip, tar.gz or tar.bz2 bestanden om opgeladen te kunnen worden.";
$messages["locale_file"] = "Bestand voor Taalinstelling";
$messages["upload_template"] = "Template opladen";
$messages["manually_add_template"] = "Manueel template toevoegen";
$messages["use_this_form_if_cannot_upload_template"] = " Gebruik dit formulier om een nieuwe template naar de server te kopiëren. Als u niet in de mogelijkheid bent bestanden op te laden, het bestand moet reeds zijn gekopieerd naar de template map vooraleer dit uit te voeren. Anders zal deze actie resulteren in een fout.";
$messages["template_id"] = "Template ID";

$messages["templates_available_for_all"] = "Deze templates zijn beschikbaar voor alle sites op de server.";
$messages["add_file"] = "Bestand toevoegen";

$messages["setting_name"] = "Naam";
$messages["setting_value"] = "Waarde";
$messages["setting_description"] = "Beschrijving";

$messages["plain"] = "Flat";
$messages["search_engine_friendly"] = "Zoekrobot Vriendelijk";

$messages["general_settings"] = "Algemene Settings";
$messages["helper_tools_settings"] = "Helper Tools Instellingen";
$messages["uploads_settings"] = "Uploads Instellingen";
$messages["email_settings"] = "Email Instellingen";

$messages["number_blogs"] = "Aantal sites";
$messages["number_users"] = "Aantal gebruikers";
$messages["number_posts"] = "Aantal berichten";
$messages["number_posts_today"] = "Aantal berichten vandaag";
$messages["number_posts_this_month"] = "Aantal berichten deze maand";

$messages["date"] = "Datum";
$messages["time"] = "Tijd";

$messages["comments_order"] = "Volgorde waarin commentaar moet worden getoond:";
$messages["oldest_first"] = "Oudste eerst";
$messages["newest_first"] = "Nieuwste eerst";

$messages["blog"] = "Site";
$messages["blog_id"] = "Site Numeriek ID";

$messages["showBlogUsers"] = "Site gebruikers";
$messages["available_users"] = "Beschikbare gebruikers";
$messages["add"] = "Toevoegen";
$messages["remove"] = "Verwijderen";

$messages["user_id"] = "Gebruiker Numeriek ID";

$messages["new_password"] = "Nieuw wachtwoord";
$messages["has_administrator_privileges"] = "Heeft administratieve privileges";
$messages["related_to_the_following_blogs"] = "Gekoppeld aan volgende sites";

$messages["add_user_to_blog_form"] = " Dit formulier laat u toe een gebruiker toe te voegen aan uw site. De gebruiker zal enkel berichten kunnen toevoegen en bewerken, maar hij/zij zal niet in de mogelijkheid zijn om de instellingen van de site te veranderen.";
$messages["add_user_enter_username"] = " Gelieve de gebruikersnaam in te vullen van de gebruiker die u wil toevoegen. De gebruiker moet reeds geregistreerd zijn op deze server, anders zal deze actie resulteren in een fout.";
$messages["add_user_send_notification"] = "Stuur een notificatie naar de gebruiker.";
$messages["add_user_type_notification"] = "Typ wat tekst die moet worden verstuurd naar de gebruiker";

$messages["following_users_have_permissions"] = " De volgende gebruikers maken deel uit van deze site. Ze kunnen berichten toevoegen, bewerken en verwijderen maar ze kunnen geen veranderingen doen aan de instellingen van de site.";
$messages["revoke_permissions"] = "Privileges intrekken";

$messages["newBlogTemplate"] = "Site template toevoegen";
$messages["manually_newBlogTemplate"] = "Manueel site template toevoegen";
$messages["template_available_only_for_this_blog"] = "Dit template zal enkel beschikbaar worden gemaakt voor deze site.";
$messages["use_form_to_upload_blog_template"] = "Gebruik dit formulier om een nieuwe template naar de server te kopiëren. Als u niet in de mogelijkheid bent bestanden op te laden, gelieve dat onderstaand formulier te bekijken. Template sets moeten verpakt zijn in zip, tar.gz or tar.bz2 bestanden om opgeladen te kunnen worden.";
$messages["use_form_if_cannot_upload_blog_template"] = "Gebruik dit formulier om een nieuwe template naar de server te kopiëren. Als u niet in de mogelijkheid bent bestanden op te laden, het bestand moet reeds zijn gekopieerd naar de template map vooraleer dit uit te voeren. Anders zal deze actie resulteren in een fout.";

$messages["blogTemplates"] = "Site Templates";
$messages["templates_only_available_for_this_blog"] = "De volgende templates zijn enkel beschikbaar voor deze site.";

$messages["add_file_to_blog_template"] = "Bestand toevoegen aan Site Template";
$messages["upload_file_to_blog_template"] = "Gelieve het bestand dat u wil toevoegen aan de template, op te laden.";

$messages["error_user_id_incorrect"] = "Onjuiste gebruikersID.";
$messages["error_incorrect_user_id"] = $messages["error_user_id_incorrect"];
$messages["error_fetching_user_information"] = "Er is een fout opgetreden bij het ophalen van de gebruikersparameters.";
$messages["error_password_incorrect"] = "Het wachtwoord is te kort of onjuist.";
$messages["error_updating_user_settings"] = "Kon de instellingen voor de gegeven gebruiker niet aanpassen.";
$messages["user_settings_updated_ok"] = "Instellingen voor de gebruiker \"%s\" aangepast.";
$messages["error_no_users_selected_to_add"] = "Geen gebruikers geselecteerd voor toevoeging.";
$messages["user_added_to_blog_ok"] = "De gebruiker \"%s\" werd toegevoegd aan de site.";
$messages["error_adding_user_to_blog"] = "Er is een fout opgetreden bij het toevoegen van gebruiker \"%s\" aan de site.";
$messages["error_no_users_selected_to_remove"] = "Geen gebruikers geselecteerd voor verwijdering.";
$messages["user_removed_from_blog_ok"] = "De gebruiker \"%s\" werd verwijderd van de site.";
$messages["error_removing_user_from_blog"] = "Er is een fout opgetreden bij het verwijderen van gebruiker \"%s\" van de site.";

$messages["error_incorrect_plugin_id"] = "De plugin ID is onjuist.";
$messages["error_configuring_plugin"] = "Er is een fout opgetreden bij het configureren van de plugin: ";
$messages["site_config_saved_ok"] = "Site configuratie opgeslaan.";
$messages["error_saving_site_config"] = "Er is een fout opgetreden bij het opslaan van de configuratie.";

$messages["error_incorrect_blog_owner"] = "De gebruiker die u koos als site eigenaar, bestaat niet.";
$messages["error_updating_blog_settings"] = "Er is een fout opgetreden bij het aanpassen van de instellingen voor site \"%s\"";
$messages["blog_settings_updated_ok"] = "Site instellingen \"%s\" aangepast.";

$messages["error_fetching_users"] = "Er is een fout opgetreden bij het ophalen van de gebruikers voor de site.";

$messages["error_fetching_blogs"] = "Er is een fout opgetreden bij het ophalen van de sites op deze server.";

$messages["error_incorrect_template_id"] = "De template ID is onjuist of bestaat niet.";

$messages["error_no_users_selected"] = "Geen gebruikers werden geselecteerd voor verwijdering.";
$messages["error_could_not_find_user"] = "Kon gebruiker \"%s\" niet vinden in deze site.";
$messages["error_deleting_user"] = "Er is een fout opgetreden bij de verwijdering van gebruiker \"%s\"";
$messages["user_deleted_ok"] = "Gebruiker \"%s\" verwijderd.";

$messages["error_must_give_blog_name"] = "U moet een geldige naam opgeven voor de site.";
$messages["error_adding_blog"] = "Er is een fout opgetreden bij het toevoegen van de site aan de database.";
$messages["blog_added_ok"] = "De nieuwe site \"%s\" werd toegevoegd aan de database.";

$messages["error_template_not_inside_folder"] = "De template bestanden moeten in een map zitten.";
$messages["error_missing_base_files"] = "Enkele basisbestanden ontbreken in de template.";
$messages["error_unpacking"] = "Er is een fout opgetreden tijdens het uitpakken van het bestand.";
$messages["error_forbidden_extensions"] = "Enkele bestanden in de template zijn verboden.";
$messages["error_creating_working_folder"] = "Er is een fout opgetreden bij de controle van de template set";
$messages["error_checking_template"] = "Er is een fout opgetreden met de template set (code = %s)";
$messages["error_add_template_disabled"] = "Gebruikers hebben geen toelating om een site template toe te voegen.";
$messages["error_must_upload_file"] = "U moet een bestand opladen.";
$messages["error_no_template_name"] = "U moet een template naam opgeven.";
$messages["error_uploads_disabled"] = "De opladen-optie werd uitgeschakeld voor deze site.";
$messages["error_installing_template"] = "Er is een fout opgetreden tijdens het installeren van de template set.";
$messages["template_installed_ok"] = "Nieuwe template set geïnstalleerd als \"%s\".";

$messages["error_adding_template_file"] = "Er is een fout opgetreden bij het toevoegen van het bestand aan de template set.";
$messages["error_file_forbidden"] = "Bestanden van dit type zijn verboden op deze site.";
$messages["error_file_too_big"] = "Het bestand is te groot. Maximaal toegelaten grootte is \"%s\" bytes.";
$messages["template_file_added_ok"] = "Bestand toegevoegd aan template \"%s\".";

$messages["error_plugin_cannot_be_configured"] = "De plugin kon niet worden geconfigureerd.";

$messages["error_incorrect_username"] = "De gebruikersnaam is onjuist.";
$messages["error_username_already_exists"] = "Er is reeds een gebruiker geregistreerd met dezelfde gebruikersnaam.";
$messages["error_adding_user"] = "Er is een fout opgetreden bij het toevoegen van de gebruiker aan de database.";
$messages["user_added_ok"] = "De nieuwe gebruiker \"%s\" werd toegevoegd.";

$messages["error_no_blogs_selected"] = "U moet minstens een site selecteren voor verwijdering.";
$messages["error_blog_is_default_blog"] = "\"%s\" kan niet worden verwijderd aangezien het de standaardsite is voor deze server.";
$messages["blog_deleted_ok"] = "Site \"%s\" Verwijderd.";
$messages["error_deleting_blog"] = "Er is een fout opgetreden bij het verwijderen van de site \"%s\".";

$messages["error_no_templates_selected"] = "Geen templates geselecteerd voor verwijdering.";
$messages["error_removing_template"] = "Er is een fout opgetreden bij het verwijderen van de template set \"%s\"";
$messages["template_removed_ok"] = "Template \"%s\" verwijderd.";

$messages["error_no_users_selected_to_remove_from_blog"] = "Geen gebruikers geselecteerd voor verwijdering uit deze site.";
$messages["error_removing_user_from_blog"] = "Er is een fout opgetreden bij het verwijderen van de gebruiker \"%s\" van deze site.";
$messages["user_removed_from_blog_ok"] = "Gebruiker \"%s\" werd verwijderd van deze site";

$messages["error_incorrect_locale_code"] = "De opgegeven taalinstelling is niet geldig.";
$messages["error_invalid_locale_file"] = "Het bestand heeft geen geldig taalbestand.";
$messages["error_adding_locale_file"] = "Er is een fout opgetreden bij het toevoegen van de nieuwe taalinstelling. Let er op dat het bestand werd opgeladen naar de locale map en dat het de juiste rechten heeft.";
$messages["locale_added_ok"] = "De nieuwe taal \"%s\" werd toegevoegd.";
$messages["error_saving_locale"] = "Er is een fout opgetreden bij het kopieren van het taalbestand naar de 'locale' map. Gelieve te controleren of de map de juiste toegangsrechten heeft.";

$messages["error_no_locales_selected"] = "Geen talen geselecteerd voor verwijdering.";
$messages["error_deleting_only_locale"] = "Dit is de enige taal aanwezig in het systeem, daarom kan ze niet worden verwijderd.";
$messages["locale_deleted_ok"] = "Taal \"%s\" verwijderd.";
$messages["error_deleting_locale"] = "Er is een fout opgetreden bij het verwijderen van de taal \"%s\"";
$messages["error_cant_delete_default_locale"] = "\"%s\" kan niet worden verwijderd omdat deze staat ingesteld als standaard taalinstelling.";

$messages["plugin_config"] = "Pluginconfiguratie";
$messages["use_read_more_feature"] = "Toon het hele bericht in de hoofdpagina of enkel het deel datin het 'Tekst'-veld werd ingegeven?";
$messages["extended_text"] = "Deze tekst zal enkel verschijnen op de berichtenpagina, tenzij we deze instelling uitschakelen in de 'Instellingen' tab";
$messages["error_must_give_post_intro"] = "U moet minstens een inleiding geven voor uw bericht.";
///// new help messages ////
//
// note to translators:
//
// this is exactly the same as the previous version but an additional item
// has been added to the list ("order in which comments appear")
// and one has been removed (the threshold for the 'show more' setting)
//
$messages["help_blogSettings"] = "<p>Van op deze pagina kunt u enkele isntellingen verandere die de
gedragingen of het uiterlijk van dit journaal bepalen. Dit zijn de instellingen:<ul>
<li><b>Permanente URL</b>: Dit is de url waar deze site draait en die kan worden gebruikt om naar te
linken. Deze kan niet worden veranderd.</li>
<li><b>Naam Site</b>: Dit is de tekst string met een beschrijvende naam voor de site. Als u de
standaard templates gebruikt, wordt dit bovenaan iedere pagina weergegeven.</li>
<li><b>Langere beschrijvende tekst over deze site</b>: Dit is een langere tekst di optioneel kan
worden weergegeven in een soort pagina die meer gedetailleerde info over de pagina weergeeft.
Dit kan leeg worden gelaten indien u dit niet nodig heeft.</li>
<li><b>Taal gebruikt om de teksten weer te geven</b>: U kunt een van de beschikbare talen kiezen.
Deze taal zal worden gebruikt om de teksten (niet uw eigen berichten) weer te geven zoals datums
en nummers weer te geven met de correcte instellingen. Meer talen kunnen op ieder moment worden geïnstalleerd.</li>
<li><b>Items op de hoofdpagina</b>: Zet dit op het aantal berichten die u wilt weergegeven zien op
de hoofdpagina. Hoe meer berichten, hoe langer het zal duren voor uw bezoekers om de pagina te laden.
Het minimum aantal berichten weergegeven is één.</li>
<li><b>Items onder 'Recentelijk'</b>: Zet dit op het aantal berichten die je wil laten tonen als
<b>'Recentelijk'</b>, dwz, de berichten die eerder werden verstuurd. Minimum aantal is één.</li>
<li><b>Template gebruikt om uw inhoud op te maken.</b>: Het is mogelijk om meer dan één template te
hebben die dezelfde inhoud weergeven. U kan hier de meest toepasselijke kiezen voor uw journaal, uit
deze die werden geïnstalleerd door uw systeembeheerder.</li>
<li><b>Toon het hele bericht in de hoofdpagina, of enkel hetgeen ingetikt in het 'Tekst'-veld?</b>:
Zet dit op 'Ja' als u wil dat er automatisch een 'Meer...' Link wordt toegevoegd aan uw berichten
op de hoofdpagina net na de tekst die u hebt ingetikt in het 'Tekst'-veld.  De tekst die u intypte in
het tweede vak zal enkel verschijnen als de gebruiker klikt op de onderstaande instelling.
Deze instelling is handig omdat het uw hoofdpagina minder chaotisch maakt en ook kleiner. Er zijn echter
wel enkele problemen als er veel HTML-code in het bericht werd weergegeven.</li>
<li><b>Inschakelen van WYSIWYG op teksten:  Zet deze optie aan als u wil de mogelijkheid hebben om
te zien hoe uw berichten er uit zien in real-time.  Deze opties is enkel beschikbaar voor gebruikers met
Internet Exploder 5.5 of hoger en Mozilla 1.3b of hoger.</li>
<li><b>Commentaar inschakelen:  Zet deze optie aan als u zou willen dat al uw bezoekers commentaar kunnen
nalaten op uw berichten.  Dit heeft een globale invloed op alle berichten en op al uw gebruikers.</li>
<li><b>Volgorde waarin commentaar wordt getoond</b>: Zit dit op \"Oudste Eerst\" als u de oudste commentaren
eerst wil laten ien in de lijst, of zet het op \"Nieuwste Eerst\" als u ze in omgekeerd-chronologische volgorde
wil laten tonen.</li>
</ul></p>";

//
// translators: this one has changed too since we now have two text boxes: one for the
// text that we'd like to appear in the main page and another one for the text that
// will only be shown in the 'post' page (that is, when the users clicks on the
// permalink, for example)
//
$messages["help_newPost"] = "<p>Gebruik deze pagina om een nieuw bericht aan uw journaal toe te voegen.
U moet een onderwerp voor uw bericht opgeven, zoals u ook moet tekst opgeven voor het bericht.  Eenmaal klaar,
klik op de <strong>'Toevoegen'</strong> knop en de post wordt automatisch toegevoegd aan uw site.
Let er op dat u de status van het berucht op <strong>'Gepubliceerd'</strong> zet als u wil dat het bericht
automatisch aan uw hoofdpagina wordt toegevoegd. Gebruik de <strong>'Klad'</strong> status als u het bericht
wil opslaan voor latere revisie alvorens het te publiceren.</p>
<p>
De tekst getypt in de eerste tekstbox zal altijd getoond worden op de hoofdpagina.
U kunt de tweede tekstbox gebruiken als u meer tekst wil ingeven die niet op de hoofdpagina moet worden
opgenomen maar die kan worden bekeken door de bezoekers van uw site als ze op de <strong>'Meer'</strong>
link klikken bij het bericht. Deze link wordt automatisch weergegeven op het einde van de tekst.  Dit veld
is niet verplicht en het gedrag kan worden gecontroleerd in de \"Instellingen\" tab, waar u kan forceren dat
beide tekstboxes verscheinen op de hoofdpagina.</p>
U kan de berichten ook classificeren onder eender welke categorie die u eerder hebt gemaakt.  Het is zo eenvouding
als het <strong>'Categorie'</strong> veld te zetten op de instelling die u meest toepasselijk vindt voor het bericht.
</p><p>Als u een email wil ontvangen bij het ontvangen van een nieuw bericht, gelieve dan het corresponderende vinkje
aan te vinken.</p>
<p>Vink de box aan waar staat </b>'Zoek links in het bericht...'</b> als u na het toevoegen van de posts trackback pings
wil zenden naar de hosts die dit ondersteunen. Uw bericht zal worden geschand op links en u zal de mogelijkheid hebben om
diegenen te kiezen die u wil trackback pings sturen.</p>";

$messages["updatePost"] = $messages["help_newPost"];

$messages["help_newBlogUser"] = "Deze optie laat u toe om op een gemakkelijke manier bewerktoegang te geven
aan andere gebruikers op deze site. Om dit te doen, moet u enkel zijn/haar gebruikersnaam weten. Als u
dit weet, typ deze dan gewoon in in het 'Gebruiker Toevoegen'-veld. Als u dat wenst, kan u ook een email
laten versturen naar deze gebruiker (voor zover de gebruiker zijn/haar juiste emailadres heeft opgegeven
bij hun registratie) die hen laat weten dat ze de mogelijkheid hebben om berichten toe te voegen, verwijderen
en bewerken op deze site.";

$messages["help_showBlogUsers"] = "Dit is een lijst van de gebruikers die bewerktoegang hebben op deze site.
U kan hun profiel zien als u dat wenst en u kunt hun bewerkprivileges ook intrekken door heb te selecteren
en te klikken op de 'Privileges intrekken'-knop.  Eenmaal u dit gedaan heeft, kan de gebruiker niets meer
sturen naar deze site.";

//
// note to translators:
//
// added some additional text here to inform about the new "configure" feature
//
$messages["help_pluginCenter"] = "<p>Van hier ut kunt u zien welke plugins werden geïnstalleerd.  Voor iedere
plugin kunt u zijn ID zien (de ID die u moet gebruiken wanneer u templates programmeert en wil gebruik
maken van de plugin-mogelijkheden), de auteur van de plugin en wat beschrijvende tekst die verschillende
info geeft over de plugin, hoofdzakelijk hoe ze te gebruiken.</p>
<p>Sommige plugins bieden ook hun eigen configuratie-painga van waar u enkele aspechten van het gedrag
van de plugin kunt instellen.  Om een dergelijke pagina op te roepen, klik dan op de 'Configureer' link
naast de plugin.</p>";

$messages["configurePlugin"] = "Deze plugin geeft enkele instellingen die kunnen ingesteld worden door de
gebruiker.";

$messages["help_newBlogTemplate"] = "<p>Het is mogelijk om gemakkelijk nieuwe templates te te voegen aan het systeem.
Om dit te doen, zijn er twee mogelijkheiden: het template en ofwel worden opgeladen naar de server als een
gecompresseerd bestand (enkel tar.gz, tar.bz2 en zip worden ondersteund) of het kan manueel worden opgeladen
met eender welke methode.</p>
<p>Indien u kiest voor de eerste methode, dan moet de inhoud van het bestand al zijn ingepakt onder een map
die de naam zal zijn van het template.</p>
<p>Als u kiest voor de tweede methode, laad dan de bestanden op in een map onder uw site-specifieke
map en typ de naam van deze map in de onderstaande tekstbox.</p>
<p>Plugins die hier worden toegevoegd zullen enkel beschikbaar zijn voor deze site en zult u niet kunnen gebruiken
in uw andere sites.</p>";

$messages["help_blogTemplates"] = "<p>Dit is een lijst met alle templates die zijn toegevoegd
aan deze site. Als u er een wil verwijderen, gelieve ze dan te selecteren en te klikken op de
'Verwijder geselecteerde' knop onder de lijst.  Eenmaal een template is verwijderd kan het niet
worden teruggehaald, aangezien het werd verwijderd van de server.</p>";

$messages["help_adminSettings"] = "<p>Dit zijn enkele basis-statistieken over uw site.</p>";

$messages["help_createUser"] = "<p>Nieuwe gebruikers kunnen gemakkelijk worden geregistreerd door
dit formulier te gebruiken. U moet enkel een geldige gebruikersnaam en een wachtwoord ingeven.
Optioneel kunt u dit nog aanvullen met een emailadres. Gebruikers die werden geregistreerd zijn
nog niet gekoppeld aan een site behalve als we dit expliciet doen in de 'Gebruikers' Sectie of
vanaf het moment dat we een site maken speciaal voor deze nieuwe gebruiker.</p>";

$messages["editUserProfile"] = "<p>Van hieruit kunnen we het gebruikersprofiel wijzigen van eender
welke gebruiker op deze site. We kunnen ook de gebruiker administratieve privileges verlenen (of
deze wegnemen). Een lijst van de sites waaraan de gebruiker gekoppeld is, wordt ook weergegeven.</p>";

$messages["help_editSiteUsers"] = "<p>Dit zijn alle gebruikers die zijn geregistreerd in deze site.  U kan
deze bekijken en hun gebruikersprofiel wijzigen door te klikken op het gebruikersnaam of u kunt ze
verwijderen door ze te selecteren en onderaan de lijst te klikken op de knop 'Verwijder geselecteerde'.
Eenmaal een gebruiker werd verwijderd, kan dit <b>niet</b> ongedaan worden gemaakt, dus gelieve hiermee zeer
voorzichtig te zijn.</p>";

$messages["help_createBlog"] = "<p>Er kan een ongelimiteerd aantal sites worden gemaakt met een
enkele installatie van deze software. Gebruikers kunnen het registratiescript gebruiken die in het
hoofdpakket zit, maar een beheerder kan ook nieuwe sites maken met dit formulier. Het enigste dat
u dient in te vullen is de naam die aan de site wordt gegeven en de eigenaar van dezez nieuwe site.
De eigenaar krijgt het maximum aan rechten over deze site.</p>";

 $messages["help_editSiteBlogs"] = "<p>Dit is een lijst met alle sites die zijn geregistreerd op
 deze server. Iedere site kan worden verwijderd door hem te selecteren en te klikken op
 de knop 'Verwijder geselecteerde'.  U kunt geen site verwijderen als die site staat ingesteld
 op de standaard.  (Zie 'Globale Instellingen' in 'Site Admin').</p>
 <p>We kunnen ook de instellingen van een site veranderen door erop te klikken.</p>
 <p>Als laatst, kunnen we ook de gebruikers bewerken die toegang tot een bepaalde site hebben,
 door te klikken op de 'Bewerk gebruikers' link</p>";

$messages["editBlog"] = "<p>De instellingen van een site kunnen worden aangepast op dezelfde manier
als een normale gebruiker dat kan. Alles is exacht hetzelfde behalve dat administratieve gebruikers
ook kunnen instellen wie de eigenaar van de site is, ten allen tijde.</p>";

$messages["editBlogUsers"] = "<p>Dit is een optie die toelaat om visueel gebruikers toe te
voegen en te verwijderen van eender welke site. Aan de linkerzjde zien we een lijst die alle
gebruikers bevat die geen editeerprivileges hebben gekregen. Om een gebruiker (of meer dan één indien
nodig) toe te voegen aan de gepriviligeerde gebruikers, moeten we ze enkel selecteren uit te lijst
aan de linkerkant en te klikken op de knop 'Toevoegen'. Om het omgekeerde proces te doen, selecteren
we de gebruikers aan de rechterkant en klikken we op de 'Verwijder' knop.</p>
<p>Het is ook mogelijk om de eigenaar van de site te veranderen door hem/haar te selecteren in de
keuzelijst bovenaan.</p>";

$messages["help_newLocale"] = "<p>Nu kunnen talen zeer gemakkelijk worden toegevoegd aan de site
met deze optie. Als we de mogelijkheid hebben om bestanden op te laden, dan kunnen we kit doen
in het eerste formulier, 'Taal Opladen', simpelweg de browser wijzen naar het taalbestand dat
we zouden willen opladen. Het systeem doet automatisch al de rest, inclusier het kopiëren van
het bestand naar de map met de andere taalbestanden, maar let erop dat de map moet schrijfbaar
zijn door de gebruiker waarmee de webserver draait voordat deze functie juist kan werken. Als het
taalbestand reeds bestaat, zal het worden <b>overschreven en vervangen dor de nieuwe</b>.</p>
<p>Als er geen bestanden kunnen worden opgeladen naar de server, dan moet het bestand handmatig
worden opgeladen naar de server en in de juiste map geplaatst bij de andere taalbestanden.
Eenmaal het bestand daar werd geplaatst, zal u moeten de code (bv nl_BE) moeten ingeven in
het tweede tekstveld.</p>
<p>Taalbestanden moeten de naamconventies volgen van locale_ll_CC, waar 'll' gelijk is aan de
2-karakter ISO code voor de taal, terwijl CC, de 3-karakter ISO code voor het land is. Indien
het formaat van de naamgeving onjuist is, zal het taalbestand worden geweigerd.</p>";

$messages["help_siteLocales"] = "<p>Dit is een lijst met alle reed geïnstalleerde taalbestanden op deze site.
Voor ieder van hen, kunt u de encodering en een korte beschrijving zien.  Ook kunnen taalbestanden worden
verwijderd door ze te selecteren en onderaan de lijst te klikken op de knop 'Verwijder Geselecteerde'.</p>";

$messages["help_newTemplate"] = "<p>Het is mogelijk om gemakkelijk niet templates toe te voegen aan het systeem
Om dit te doen, zijn er twee mogelijkheden, u kunt het bestand opladen via het formlier in een gecompresseerd bestand
(enkel tar.gz, tar.bz2 en zip) naar de server of u kunt het handmatig naar de server opladen op eender welke gewenste
manier.</p>
<p>Als de eerste methode werd gekozen, dan moet de inhoud van het bestand al ondergebracht zijn in een map die de naam
draagt van het template. Deze naam zal worden gebruikt om het template een naam te geven.</p>
<p>Al u koos voor de tweede methode, dan moet u simpelweg de bestanden opladen naar de server onder een de map templates
in een map die de naam van het template draagt.  Na dit gedaan te hebben, dient u de naam van laatstgenoemde map in het
tweede tekstveld in te vullen.</p>
<p>Plugins die hier worden toegevoegd zullen beschikbaar zijn voor alle sites op deze server.</p>";

$messages["help_siteTemplates"] = "<p>Dit is een lijst met alle templates die globaal beschikbaar zijn voor alle sites,
als u er wilt verwjderen uit deze lijst, gelieve ze dan te selecteren en onderaan de lijst te klikken op de knop
'Verwijder geselecteerde'. Eenmaal een template werd verwijderd, kan die niet meer worden gerecupereerd, aangezien
het is verwijderd van de schijf.</p>";

$messages["help_editSiteSettings"] = "Dit zijn alle globale instellingen van deze site die veel van de gedragingen van het pakket bepalen.";

$messages["newBlogTemplateFile"] = "Enkele bestanden kunnen worden toegevoegd tot en reeds bestaand template zonder de
hele set opnieuw te moeten oploaden.  Zoek het bestand dat u wil opladen op uw computer en klik op de knop 'Bestand Toevoegen'.";

// text is the same, so we can save a few bytes
$messages["newTemplateFile"] = $messages["newBlogTemplateFile"];



////////////////////////////////////////////
///
///
/// NEW STRINGS ADDED IN 0.3!!
///
///
////////////////////////////////////////////
$messages["show_category_in_main_page"] = "Toon deze categorie op de hoofdpagina";
$messages["welcome_resource_center"] = "Welkom bij het bronnencentrum!";
$messages["resourceCenter"] = "Bronnencentrum";
$messages["resourceAlbums"] = "Bronnen Albums";
$messages["resources"] = "Bronnen";
$messages["newResource"] = "Bron toevoegen";
$messages["newResourceAlbum"] = "Album toevoegen";
$messages["album"] = "Album";
$messages["album_name"] = "Album naam";
$messages["parent_album"] = "Bovenliggend album";
$messages["no_parent_album"] = "Geen bovenliggend album";
$messages["resource_info"] = "Bron Informatie";
$messages["size"] = "Grootte";
$messages["format"] = "Formaat";
$messages["dimensions"] = "Dimensies";
$messages["bits_per_sample"] = "Bits per pixel";
$messages["bytes"] = "bytes";
$messages["pixels"] = "pixels";
$messages["time_offset"] = "Tijdsverschil in uren tussen de server en u:";
$messages["hours"] = "Uren";
$messages["album_added_ok"] = "Het nieuwe album werd toegevoegd.";
$messages["name"] = "Naam";
$messages["children"] = "Kinderen";
$messages["see"] = "Zie";
$messages["view"] = "Bekijk";
$messages["resource_info"] = "Broninformatie";
$messages["number_of_channels"] = "Aantal kanalen";
$messages["length"] = "Lengte";
$messages["number_of_files"] = "Aantal bestanden";
$messages["compressed_size"] = "Gecomprimeerde grootte";
$messages["uncompressed_size"] = "Ongecomprimeerde grootte";
$messages["resource_file"] = "Bestand dat u zou willen toevoegen";
$messages["add_to_album"] = "Dit bestand toevoegen aan volgend album:";
$messages["edit_resource_album"] = "Bron Album Bewerken";
$messages["error_loading_resource_album"] = "Er trad een fout op bij het ophalen van het bronnenalbum.";
$messages["error_album_id_parameter_missing"] = "Het album-id is onjuist.";
$messages["error_album_parent_id_parameter_missing"] = "Bovenliggend album-id niet gevonden.";
$messages["error_updating_resource_album"] = "Er trad een fout op bij het bewerken van het bronnenalbum.";
$messages["resource_album_updated_ok"] = "Het bronnenalbum \"%s\" wer aangepast.";
$messages["error_must_give_album_name"] = "U dient een naam op te geven voor het album.";
$messages["error_adding_album"] = "Er is een fout opgetreden bij het toevoegen van het bronnenalbum.";
$messages["album_added_ok"] = "Het nieuwe album \"%s\" werd goed toegevoegd.";
$messages["resource_added_ok"] = "De nieuwe bron werd goed toegevoegd.";
$messages["error_resource_forbidden_extension"] = "De bron kon niet worden toegevoegd omdat het een verboden extensie had.";
$messages["error_resource_too_big"] = "De bron kon niet worden toegevoegd omdat het te groot was.";
$messages["error_uploads_disabled"] = "De bron kon niet worden toegevoegd omdat uploads werden uitgeschakeld in deze site.";
$messages["error_adding_resource"] = "Er trad een fout op bij het toevoegen van de bron.";
$messages["error_loading_resource"] = "Er trad een fout op bij het ophalen van de bron.";
$messages["error_updating_resource"] = "Er trad een fout op bij het aanpassen van de bron.";
$messages["resource_updated_ok"] = "Bron \"%s\" werd succesvol toegevoegd.";
$messages["error_no_resources_selected"] = "Er werden geen bronnen geselecteerd voor verwijdering.";
$messages["resource_deleted_ok"] = "Bron \"%s\" werd succesvol verwijderd.";
$messages["error_deleting_resource"] = "Er trad een fout op bij het verwijderen van bron \"%s\".";
$messages["error_no_resource_uploaded"] = "Er werd geen bronbestand toegevoegd.";
$messages["filteredContent"] = "Gefilterde inhoud";
$messages["global_filtered_content"] = "Globaal Gefilterde Inhoud";
$messages["newFilteredContent"] = "Filter Inhoud";
$messages["blockedHosts"] = "Geblokkeerde Hosts";
$messages["global_blocked_hosts"] = "Globaal Geblokkeerde Hosts";
$messages["newBlockedHost"] = "Blokkeer Host";
$messages["blogSecurity"] = "Beveiliging";
$messages["security_welcome"] = "Welkom in het beveiligingscomponent!";
$messages["filtered_content_intro"] = "De volgende inhoud/reguliere expressies werden geblokkeerd in deze blog.";
$messages["global_filtered_content_intro"] = "De volgende inhoud/reguliere expressies werden globaal geblokkeerd.";
$messages["content"] = "Inhoud";
$messages["reason"] = "Reden";
$messages["add_filtered_content"] = "Gefilterde Inhoud Toevoegen";
$messages["add_filtered_content_intro"] = "Alles wat hier word toegevoegd, zal niet worden aanzien als geldige tekst in een commentaar en iedere poging door een gewone gebruiker om commentaar te posten met geblokkeerde inhoud, zal het commentaar blokkeren. Reguliere expressies of een simpele string kunnen worden gebruikt. Deze eerste zijn veel krachtiger maar ook veel complexer en moeten met voorzichtigheid worden gebruikt, omdat ze mogelijk alle inhoud kunnen blokkeren indien de reguliere expressie verkeerd werd opgesteld.";
$messages["global_add_filtered_content_intro"] = "Alles wat hier word toegevoegd, zal niet worden aanzien als geldige tekst in een commentaar of eender welke blog en iedere poging door een gewone gebruiker om commentaar te posten met geblokkeerde inhoud, zal het commentaar blokkeren. Reguliere expressies of een simpele string kunnen worden gebruikt. Deze eerste zijn veel krachtiger maar ook veel complexer en moeten met voorzichtigheid worden gebruikt, omdat ze mogelijk alle inhoud kunnen blokkeren indien de reguliere expressie verkeerd werd opgesteld.";
$messages["content_to_block"] = "Inhoud die u wil blokkeren";
$messages["block_this"] = "Blokkeer Dit";
$messages["mask"] = "Maskeer";
$messages["access_blocked"] = "Toegang Geblokkeerd";
$messages["posting_blocked"] = "Plaatsen Geblokkeerd";
$messages["block_host_intro"] = "Hosts die hier worden toegevoegd zullen voor deze blog worden geblokkeerd. Gelieve <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">de help-sectie</a> te bekijken voor een meer gedetailleerde beschrijving van deze optie.";
$messages["global_block_host_intro"] = "Hosts die hier worden toegevoegd zullen voor alle blogs worden geblokkeerd. Zie de gerelateerde <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">help item</a> voor meer informatie over deze optie.";
$messages["block_type"] = "Type blokkering";
$messages["error_invalid_ip_address"] = "Het IP-adres is niet geldig.";
$messages["error_provide_content_to_block"] = "U moet minstens enige inhoud opgeving om te blokkeren.";
$messages["error_must_create_album_first"] = "U dient eerst een album te maken vooraleer u bronnen kunt toevoegen.";
$messages["error_resource_is_not_an_image"] = "De gekozen bron is geen beeldbestand.";
$messages["error_generating_resource_preview"] = "Er trad een fout op bij de generatie van het voorbeeld voor deze bron.";
$messages["resource_preview_generated_ok"] = "Het voorbeeld voor deze bron werd succesvol gegenereerd.";
$messages["regenerate_preview"] = "Regenereer Voorbeeld";
$messages["show_album"] = "Toon Album";
$messages["show_album_when_browsing"] = "Toon dit album aan gebruikers";
$messages["assigned_to_blog"] = "Gebruiker toewijzen aan de volgende blog";
$messages["clean_up"] = "Opschonen";
$messages["purge_info"] = "De optie zuiveren zal alle berichten effectief verwijderen die werden gemarkeerd als 'Verwijderd'. Anders
worden deze berichten in de database opgeslaan (in geval dat een gebuiker later enkele van deze berichten wil herstellen)
 en deze kunnen na verloop van tijd een behoorlijke hoeveelheid worden, die de grootte van uw database zinloos vergroot.
 Als u er zeker van bent dat u dergelijke berichten wil verwijderen, klik dan op onderstaande knop.";
$messages["spam_info"] = "Commentaar dat werd gemarkeerd als spam kan in de database gehouden worden om
de spamfilter te trainen. Eenmaal deze functie werd voltooid, zijn ze waardeloos en kunnen ze verwijderd
worden. Indien u dit wenst, gelieve op onderstaande knop te klikken.";
$messages["no_spam"] = "Geen Spam";
$messages["spam"] = "Spam";
$messages["mark_as_spam"] = "Markeer als spam";
$messages["mark_as_no_spam"] = "Markeer als geen spam";
$messages["enable_comments_for_post"] = "Commentaar inschakelen voor dit bericht";
$messages["close_window"] = "Sluit Venster";
$messages["newResource"] = "Bron toevoegen";
$messages["add_resource_preview"] = "Voorbeeld toevoegen";
$messages["newResourceAlbum"] = "Album toevoegen";
$messages["show_main_page"] = "Toon in hoofdpagina";
$messages["purge_spam_comments"] = "Spamcommentaar Zuiveren";
$messages["purge_posts"] = "Berichten Zuiveren";
$messages["keep_spam_comments"] = "Spamcommentaar houden";
$messages["throw_away_spam_comments"] = "Spamcommentaar weggooien";
$messages["error_adding_blocked_host"] = "Er is een fout opgetreden bij het blokkeren van de opgegeven host.";
$messages["blocked_host_added_ok"] = "Host %s toegevoegd aan de lijst van geblokkeerde hosts.";
$messages["error_no_blocked_hosts_selected"] = "Er werden geen hosts geselecteerd voor verwijdering.";
$messages["blocked_host_deleted_ok"] = "Host \"%s\" verwijderd.";
$messages["error_deleting_blocked_host"] = "Er is een fout opgetreden bij het verwijderen van geblokkeerde host \"%s\"";
$messages["edit_blocked_host"] = "Geblokkeerde host Aanpassen";
$messages["error_fetching_blocked_host"] = "Er is een fout opgetreden bij het ophalen van de geblokkeerde host.";
$messages["error_updating_blocked_host"] = "Er is een fout opgetreden bij het aanpassen van de geblokkeerde host.";
$messages["thumbnail_format"] = "Verkleind format";
$messages["same_as_image"] = "Zelfde als origineel beeld";
$messages["same"] = $messages["same_as_image"];



$messages["help_locale_folder"] = "Map waar taalbestanden staan.";
$messages["help_default_locale"] = "Standaard taalinstelling zal worden gebruikt bij het aanmaken van nieuwe blogs.";
$messages["help_xmlrpc_api_enabled"] = "de XMLRPC interface in of uitschakelen, om berichten te plaatsen vanaf uw desktop.";
$messages["default_rss_profile"] = "RSS/RDF profiel dat standaard zal worden gebruikt bij het genereren van feeds, als er geen speciaal profiel werd geselecteerd";
$messages["help_security_pipeline_enabled"] = "Schakelt de beveiligingsfuncties in. Deze uitschakelen zal alle beveiligingsfuncties desactiveren dus het is aangeraden om dit ingeschakeld te laten en enkel de opties uit te schakelen die u niet nodig heeft.";
$messages["help_ip_address_filter_enabled"] = "Schakelt de IP-adresfilter in, om bepaalde hosts te verhinderen uw site te bezoeken.";
$messages["help_content_filter_enabled"] = "Schakent een zeer eenvoudige, op reguliere expressies gebaseerde, inhoudsfilter in om commentaar met bepaalde woorden of inhoud te blokkeren. De Bayesian filter is mogelijk een betere oplossing.";
$messages["help_maximum_comment_size"] = "Maximum toegelaten lengte van bytes voor commentaar.";
$messages["help_bayesian_filter_enabled"] = "Schakelt de bayesian filter in of uit.";
$messages["help_bayesian_filter_spam_probability_treshold"] = "Minimumwaarde wanneer een commentaar wordt aanzien als spam. Dit moet tussen 0.01 en 0.99 liggen.";
$messages["help_bayesian_filter_nonspam_probability_treshold"] = "Maximumwaarde wanneer een commentaar veilig kan worden aanzien als geen spam. Alles tussen deze twee waarden zal nog steeds worden aanzien als spam maar het zal nog aanvullende training nodig hebben";
$messages["help_bayesian_filter_min_length_token"] = "Minimumlengte die een token kan hebben om door de parser aanzien te worden als een geldige token.";
$messages["help_bayesian_filter_max_length_token"] = "Maximumlengte die tokens kunnen hebben.";
$messages["help_bayesian_filter_number_significant_tokens"] = "Het aantal significante tokens dat een bericht moet hebben";
$messages["help_bayesian_filter_spam_comments_action"] = "Wat er moet worden gedaan met commentaar gemarkeerd als spam. Ze kunnen ofwel worden geweigerd en weggegooid zodat ze nooit in de databank terecht komen of ze kunnen worden behouden en gemarkeerd worden als spam. De tweede optie is aangeraden wanneer uw filter nog niet veel werd getraind en nog af en toe fouten maakt.";
$messages["help_path_to_convert"] = "De 'convert' tool van het pakket ImageMagick is nodig als u ImageMagick gebruikt als de backend om kleine voorbeelden te genereren.";
$messages["help_thumbnail_height"] = "Maximumhoogte die voorbeelden kunnen hebben.";
$messages["help_resources_folder"] = "Map waar de bronnen zullen worden opgeslagen. Dit pad dient niet in de webserver-boomstructuur te liggen, als u niet wil dat mensen uw bronnenmap kunnen doorbladeren. De bronnenserver zal ervoor zorgen dat de bestanden worden geleverd waar ze ook staan.";
$messages["help_thumbnails_keep_aspect_ratio"] = "Als de verhoudingen voor voorbeelden dient worden behouden of niet.";
$messages["help_resources_enabled"] = "Schakelt het 'Bronnencentrum' in of uit.";
$messages["help_thumbnail_method"] = "Backend systeem dat zal worden gebruikt voor de generatie van voorbeeldfoto's. Als u ImageMagick wenst te gebruiken, gelieve onderaan te kijken, aangezien er een aantal externe tools nodig zijn.";
$messages["help_thumbnail_width"] = "Maximumbreedte die  uw voorbeeldbestanden zullen hebben.";
$messages["external_interfaces"] = "Externe Interfaces";
$messages["security_settings"] = "Beveiligingsinstellingen";
$messages["bayesian_filter_settings"] = "Bayesian Filter Instellingen";
$messages["resources_settings"] = "Bronnen Instellingen";
$messages["help_thumbnail_format"] = "Standaardformaat dat zal worden gebruikt bij de generatie van voorbeeldbestanden. Indien u dit instelt op 'Zelfde als origineel', dan zullen de voorbeelden worden opgeslaan in hetzelfde formaat als het origineel bestand waarvan ze werden gegenereerd.";
$messages["edit"] = "Bewerken";
$messages["blocked_content_added_ok"] = "Geblokkeerde inhoud succesvol toegevoegd.";
$messages["blocked_content_updated_ok"] = "Geblokkeerde inhoud succesvol bewerkt.";
$messages["help_disable_javascript_calendar"] ="
Schakelt de javascript en DHTML-gebaseerde kalender uit om een
datum te kiezen bij het bewerken of toevoegen van een bericht, moest de gebruiker zijn/haar
browser deze functies niet ondersteunen.";
$messages["edit_filtered_content"] = "Gefilterde Inhoud Bewerken";
$messages["error_updating_blocked_content"] = "Er is een fout opgetreden bij het bewerken van de geblokkeerde inhoud.";
$messages["audio_codec"] = "Audio Codec";
$messages["video_codec"] = "Video Codec";
$messages["sample_rate"] = "Sample rate";
$messages["files"] = "Bestanden";
$messages["created"] = "Gemaakt";
$messages["generated"] = "Gegenereerd";
$messages["about"] = "Over";
$messages["menu"] = "Menu";
$messages["albums"] = "Albums";
$messages["template_file"] = "Template bestand";
$messages["download"] = "Download";
$messages["error_you_have_been_blocked"] = "U hebt niet de toelating om door te gaan met deze aanvraag.";

$messages["error_base_storage_folder_missing_or_unreadable"] = "pLog konde nodig mappen niet aanmaken om bronnen in te installeren. Dit kan meerdere redenen hebben, zoals uw PHP installatie die in safe mode of veilige modus draait of uw gebruiker die niet voldoende rechten heeft omdit te doen. U kan nog steeds deze bewerking manueel uitvoeren, door de volgende mappen te maken: <br/><br/>%s<br/><br/>Als deze mappen bestaan, zorg er dan voor dat deze gelezen en beschreven kunnen worden door de gebruiker waarmee uw webserver draait.";

//
// help messages //
//

//
// translators: the following help messages have changed a little since last version, due to a few
// new features built on top of previous features
//
$messages["help_editArticleCategories"] = "<p>Dit is een lijst met alle berichtcategorieën die tot nu toe
reeds werden gemaakt. Er moet minstens één categorie gemaakt zijn, vooraleer u een artikel kunt
toevoegen, aangezien ieder bericht moet onderverdeeld zijn in een categorie.
De <b>'Artikelen'</b> kolom toont het aantal berichten die werden gecategoriseerd onder een bepaalde
categorie. Analoog, kunnen er geen categorieën worden verwijderd die artikelen hebben onder hen. U
dient eerst alle artikelen te verwijderen onder die categorie vooraleer u zal de mogelijkheid krijgen
om de categorie te verwijderen.</p>
<p>U kunt een of meerdere categoriën terzelfdertijd verwijderen door hun <b>'Verwijder'</b> vinkje aan
te zetten en daarna op de <b>'Verwijder Geselecteerde'</b> knop te klikken.</p>
<p>De <b>'Toon in Hoofdpagina'</b> kolom toont als deze categorie getoond wordt op de hoofdpagina of
als alternatief deze kan worden gezien als er op zijn link wordt geklikt. Bewerkt de categorie zelf door
deze optie in of uit te schakelen.</p>";

$messages["help_newArticleCategory"] = "<p>Hier kunt u een nieuwe berichtencategorie toevoegen aan het blog.
Het enige dat u dient op te geven is een naam voor de nieuwe categorie. Eenmaal deze werd aangemaakt,
zal deze beschikbaarzijn om berichten onder te categoriseren.</p>
<p>U kunt de 'Toon categorie in hoofdpagina' optie uitschakelen als u niet wilt dat de categorie wordt
getoond in de hoofdpagina van de site. Als dit uitgeschakeld is, kunnen berichten in deze categorie enkel
getoond worden bij het bladeren door deze specifieke categorie, door op zijn link te klikken</p>";

$messages["editArticleCategory"] = "<p>Gelieve een nieuwe naam te geven voor de categorie die u wenst
aan te passen. Geef aanvullend ook op indien u wilt dat de berichten in deze categorie op de hoofdpagina
worden getoond of niet.</p>";

$messages["help_editPosts"] = "<p>Gebruik deze pagina om een bericht uit het journaal aan te passen. De
informatie van het bericht werd reeds opgegeven en u kunt hier wijzigingen aanbrengen aan deze info.
Eenmaal u het bericht hebt afgewerkt, klik dan op de knop <b>'Aanpassen'</b> en het bericht zal worden
aangepast. Gelieve er ook rekening meet te houden dat u de status van het bericht zet op <b>'Gepubliceerd'</b>
indien u deze pagina wil laten verschijnen op de hoofdpagina. Gebruik de <b>'Klad'</b> status als u
het plaatsen van het bericht niet kunt afwerken en u wilt opslaan wat u tot dusver hebt ingegeven zodat
u het bericht later kunt aanpassen.</p>
<p>Als u een email wilt ontvangen over een nieuw bericht, klik dan het corresponderende vinkje aan.</p>
<p>Meer informatie over de verschillende opties kunt u <a href=\"admin.php?op=Help&amp;helpId=newPost\">hier</a> vinden.</p>";

$messages["help_blogSettings"] = "<p>Op deze pagina kunt u een aantal instellingen veranderen die de
gedragen en het uiterlijk van dit journaal bepalen. Dit zijn de instellingen: <ul>
<li><b>Permanente URL</b>: Dit is de URL waar deze blog draait en die u kunt gebruiken om naartoe
te verwijzen. Deze link kan niet veranderd worden.</li>
<li><b>Blog Naam</b>: Dit is een tekst string met een beschrijvende naam van het blog. Als u de
standaardsjablonen gebruikt, wordt deze tekst bovenaan iedere pagina getoond.</li>
<li><b>Lange beschrijvende tekst over deze blog</b>: Dit is een langere tekst die u
optioneel kunt weergeven in een soort van pagina om meer informatie weer te geven over deze site.
Deze optie kan leeg gelaten worden.</li>
<li><b>Taal voor teksten</b>: Hier kunt u één van de beschikbare talen kiezen. Deze taal zal
worden gebruikt om de teksten weer te geven (niet uw eigen artikels!) en dingen zoals
data en nummers opmaken, gebruik makend van de juiste instellingen. Meer talen kunnen altijd worden
geïnstalleerd</li>
<li><b>Items in de hoofdpagina</b>: Stel dit in op het aantal berichten die u wilt weergeven
op de hoofdpagina. Hoe meer berichten, hoe langer het zal duren voor gebruikers om uw pagina
te downloaden. Het minimum is één.</li>
<li><b>Items in Recent</b>: Stel dit in op het aantal berichten die verschijnen in 'Recent',
dit zijn de berichten die u reeds eerder hebt geplaatst. Minimum aantal is één.</li>
<li><b>Sjabloon gebruikt om de inhoud weer te geven</b>: pLog laat u toe om met meer dan één
sjabloon uw inhoud weer te geven. U kan deze kiezen die het meest toepasselijk is voor uw journaal,
van deze die werden geïnstalleerd door de administrator.</li>
<li><b>Toon het hele bericht in de hoofdpagina of ekel een deel?</b>:
Stel dit in op 'Ja' indien u wilt dat pLog automatisch een (meer...) link
toevoegt aan het bericht op de hoofdpagina net na de tekst die u hebt ingetikt in de box
'Tekst'. De tekst die in de tweede box werd ingetikt zal enkel worden getoond indien op deze
link wordt geklikt. Deze optie kan nutting zijn aangezien deze u hoofdpagina minder 'druk' maakt
en ook kleiner. Het kan echter problemen opleveren indien er veel HTML code wordt gebruikt in de pagina.</li>
<li><b>WYSIWYG inschakelen bij het opstellen van teksten</b>: Stel deze optie in op ja indien u wil de
mogelijkheid krijgen om onmiddellijk te zien hoe uw bericht er uitziet. Deze optie werkt enkel goed
op browsers met Internet Explorer 5.5 of Mozilla 1.3b of hoger.</li>
<li><b>Commentaar inschakelen</b>: Schakel deze optie in indien u uw bezoekers wil de mogelijkheid
geven om commentaar te geven op de geplaatste artikelen. Deze optie wordt doorgevoerd voor alle berichten
en voor alle gebruikers.</li>
<li><b>Volgorde waarin commentaren worden weergegeven</b>: Stel dit in op \"Oudste eerst\" als u
het oudste commentaar eerst wil zien in de lijst, of stel het in op \"Nieuwste eerst\" om ze in
omgekeerd chronologische volgorde te tonen.</li>
<li><b>Tijdsverschil in uren tussen de server en u</b>: U kunt deze instelling gebruiken om pLog automatisch
een aantal uren te laten toevoegen of verwijderen aan iedere datum in de blog. Dit is voornamelijk handig
indien het blog op een gehoste server staat in een andere tijdzone dan de persoon die de blog gebruikt. U kunt
pLog vertellen dat er een een verschil is van +3 uur, zodat alle data dusdanig worden toegepast.</li>
</ul></p>";

//
// translators: the ones below are already new
//
$messages["help_resourceCenter"] = "Vanuit het bronnencentrum kunt u uw bestanden beheren, ze groeperen
in albums, deze albums beheren en deze aanpassen.";

$messages["help_newResourceAlbum"] = "<p> U dient minstens één alhum te hebben om hier uw bronnen in onder
te verdelen. Van hieruit bent u in de mogeljkheid om een nieuw album aan te meken, gewoon door een naam
en een beschrijving voor het album op te geven. Enkel het naam veld is verplicht, het veld beschrijving
is optioneel.</p>
<p>Gebruik het 'Bovenliggende Album' veld om in te stellen of dit een top-level album is op als het een
subalbum is met een bovenliggend album.</p>";

$messages["help_resourceAlbums"] = "<p>Dit is een lijst met alle bronnenalbums die u tot dusver heeft aangemaakt.
Voor ieder album kunnen verschillende van zijn opties onmiddelijk kunnen worden getoond: zijn naam, een link
naar eventuele onderliggende albums en het eventuele aantal daarvan, een link naar zijn bronnen en het aantal
daarvan, of het album wel dan niet publiek toegankelijk is of privaal en een checkbox om er zoveel als nodig te
verwijderen.</p>
<p> U kunt meer lezen over de 'Toon Album' optie <a href=\"admin.php?op=Help&amp;helpId=editResourceAlbum\">hier</a></p>";

$messages["editResourceAlbum"] = "<p>Van hier kunt u de eigenschappen van een bronnenalbum aanpassen. Bijna
alle velden zijn hetzelfde als <a href=\"admin.php?op=Help&amp;helpId=newResourceAlbum\">hier</a> behalve het
'Toon album aan gebruikers' vinkje. Indien dit is ingeschakeld, zal het album zichtbaar zijn aan de gebruikers
die de collectie van albums en bronnen doorbladeren. Indien het is uitgeschakeld, zal hiet niet publiek
 toegankelijk is. Dit is waardevol in geval dat we albums hebben die privaat dienen te blijven.</p>";

$messages["help_newResource"] = "<p>U zal over de mogelijkheid beschikken om nieuwe bronnen aan u blog toe
te voegen in deze sectie. Alle soorten bestanden kunnen worden opgeladen maar pLog is in de mogelijkheid
om waardevolle informatie over heb op te staan zoals bij foto's, video's, zip bestanden en muziekbestanden.</p>
<p>Eerst en vooral, zoek het bestand dat u wil opladen. Daarna kunt u het een beschrijving geven (verplicht veld)
en tot slot dient u te kiezen aan wel album deze bron dit toe te behoren. Het is niet mogelijk om een bronbestand
te hebben die niet in een album is onderverdeeld. Eenmaal afgewerkt, klik op de knop 'Bron Toevoegen' zodat
het bestand wordt toegevoegd aan uw blog.</p>
<p>Gelieve te onthouden dat uploads dienen ingeschakeld te zijn opdat deze functie zou werken. Aanvullend is
het ook mogelijk dat de blog adminstrator een aantal bestandstypes heeft gekozen die niet worden toegelaten in
deze blog. Het raamwerk voor bronnen dient ook ingeschakeld te zijn. Al deze instellingen kunnen worden aangepast
door een gebruiker met administratieve privileges in de 'Globale Instellingen' sectie.</p>
<p>Deze optie vereist een map op de server die beschrijfbaar is.</p>";

$messages["help_resources"] = "<p>Van hieruit kunt u aan alle bronbestanden die u hebt opgeladen. Bestanden
zullen worden weergegeven onder het album waar ze aan toebehoren. Voor ieder bronbestand, zal het mogelijk
zijn om zijn instellingen aan te passen, het te bekijken zoals een normale bezoeker dit zou doen en het markeren
voor verwijdering. Als u klikt op de 'Verwijder Geselecteerde' knop onderaan het scherm, dan zullen de geselecteerde
bronnen worden gemarkeerd als verwijderd.</p>
<p>Klik op het map-icoon als u wil navigeren naar de inhoud van een album, of op de 'Aanpassen' knop om naar
de instellingspagina van het album te geen. Gebruik de '..' link om een niveau naar boven te gaan. Klikken op een
bronnaam of zijn voorbeeld (indien beschikbaar) zal u naar de broneigenschappen namen en zal u toelaten om instellinge
aan te passen van de geselecteerde bron.</p>";

$messages["help_blogSecurity"] = "Vanuit deze sectie hebt u de mogelijkheid om enkele basis beveiligingsmechanismen
op te zetten die worden voorzien door pLog. De veranderingen die u hier maakt, gelden enkel voor uw blog en niet
voor dat van iemand anders.";

$messages["help_blogFilteredContent"] = "<p>Dit is een lijst van alle regels voor inhoudfiltering die u hebt
toegevoegd voor deze blog. Op hen klikken zal u naar een pagina brengen waar u ze zal kunnen aanpassen.
Gebruik het 'Verwijder' vinkje om ze te markeren voor verwijdering, en druk op de 'Verwijder Geselecteerde' knop
eenmaal u zeker bent dat u deze wil verwijderen.</p>";

$messages["help_newBlogFilteredContent"] = "<p>Hier kunt u een nieuwe regel toevoegen om ongewenste inhoud te voorkomen
in commentaar. U kan hier enkele woorden of zinnen gebruiken indien u dat wenst, of u kunt de kracht van reguliere
expressies gebruiken indien u weet hoe deze werken. U kunt ook een beschrijving toevoegen aan de regel zodat u kunt
onthouden in de toekomst waar de regel voor dient, maar dit is geen verplict veld.</p>";

$messages["help_blogBlockedHosts"] = "Dit is een lijst met alle hosts die tot dusver werden geblokkeerd van het blog.
U kunt onmiddellijk zien welke hosts werden geblokkeerd en voor welke reden, de datum van blokkering en het type
van de blokkering dat werd toegepast. Tot slot kunt u ook een van de blokkeringsregels selecteren en klikken
op de 'Verwijder Geselecteerde' knop indien u deze regels wil verwijderen.";

$messages["help_newBlogBlockedHost"] = "<p> Deze sectie laat u toe op een specifiek adres of een heel subnet te blokkeren van uw Blog. U kunt selecteren of u wil dat ze het kunnen zien, maar niet mogelijk zijn om berichten te plaatsen of u kunt kiezen om ze integraal te blokkeren. Kopieer het adres in de ruimtes die daarvoor voorzien zijn en kies het juiste subnet indien nodig. Voorbeeld: om enkel het adres 192.168.1.123 te blokkeren dient u het 32 bits velt te kiezen om het hele adres te kiezen. Dit blokkeert enkel één adres en werkt goed om iemand met een statisch IP-adres te blokkeren. Indien u meerder IP-adressen ziet voor een zeker induvidu dan dient u dit subnetmasker te blokkeren.<br/>
<br/>
<b>VOORBEELDEN</b>:<br/>
<br/>
192.168.1.123 - 32 bits: Enkel dit adres<br/>
192.168.1.123 - 24 bits: Alle adressen beginnend met 192.168.1<br/>
192.168.1.123 - 16 bits: Alle adressen beginnend met 192.168<br/>
192.168.1.123 - 8 bits: Alle adressen beginnend met 192<br/>
</p>
<p>Het 'Blokkeringstype' geeft een lijst weer waaruit u kunt kiezen om deze host volledig te blokkeren
van deze site (er wordt een foutpagina weergegeven aan de bezoeker) of enkel om he(n)(m) te blokkeren om
commentaar te plaatsen. Indien u kiest voor het laatste, zal deze persoon nog steeds berichten kunnen lezen
en het commentaar van anderen lezen.</p>
<p>U kunt ook een reden/beschrijving toevoegen aan deze blokkeringsregel zodat u in de toekomst eraan kunt
worden herinnerd waarom deze regel werd toegepast.</p>";

$messages["editBlogBlockedHost"] = "U kunt een host blokkeren vanuit deze sectie. De aanwezige opties
zijn exact dezelfde als <a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">hier</a>.";

$messages["editBlogFilteredContent"] = "Op deze pagina kunt u een inhoudsfilter aanpassen. De opties zijn
exact dezelfde als <a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">hier</a>.";

$messages["help_filteredContent"] = "<p>Dit is een lijst met alle regels voor inhoudsfiltering die u reeds
hebt toegevoegd aan de site. Deze regels zijn site-specifiek en nemen voorang om iedere blog-specifieke
regel die kan worden aangemaakt door de blog gebruikers. De opties en hun bedoelingen zijn dezelfde als
<a href=\"admin.php?op=Help&amp;helpId=blogFilteredContent\">hier</a>.";

$messages["help_newFilteredContent"] = "<p>Hier kunt u een nieuwe regel toevoegen om ongewenste inhoud
te blokkeren in commentaren. Deze regen zal systeem-wijd worden gebruikt en heeft voorang op eventuele
blog-specifieke regels. Zie <a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">dit</a>
voor meer informatie over de opties.";

$messages["help_blockedHosts"] = "Dit is een lijst met alle hosts die werden geblokkeerd tot dusver op een systeem-wijde
basis. Klikken op een regel zijn ip-adres laat u toe deze aan te passen. De instellingen nemen voorang op
blog-specifieke regels, zodat, als een van deze globale regels een host kent, zullen alle volgende regels worden
genegeerd.";

$messages["help_newBlockedHost"] = "Hier kunt u een globale host-blokkeringsregel toevoegen. Zie
<a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">dit</a> voor meer informatie over de beschikbare opties.";

$messages["editBlockedHost"] = "U kunt een host-blokkeringsregel aanpassen vanuit deze sectie. De opties zijn
exact dezelfde als <a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">hier</a>.";

$messages["editFilteredContent"] = "Hier kunt u inhoudsfilters aanpassen. De opties zijn dezelfde
als <a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">hier</a>.";

/////
$messages["blogFilteredContent"] = $messages["filteredContent"];
$messages["newBlogFilteredContent"] = $messages["newFilteredContent"];
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

$messages["register_new_blog_step3_title"] = "Thank you! (3/3)";
$messages["register_new_blog_step3_description"] = "
 <p>
    Registration is complete. Your new user and diary have been registered successfully in this site,
    and you can log in now into your blog and start blogging!
 </p>";
$messages["register_step3_admin_link"] = "
  <p>
    Click here <a href=\"admin.php\">to go the admin interface</a>, if you want to start blogging.
 </p>";
$messages["register_step3_blog_link1"] = "
 <p>
    Or click <a href=\"";

$messages["register_step3_blog_link2"] = "
\">here to go and see your new blog</a>.
 </p>";

$messages["register_step3_final_message"] = "
 <p>
  Happy blogging!
 </p>";


$messages["register_error_incorrect_username"] = "<li>Incorrect user name, please try again.<br/>";
$messages["register_error_incorrect_email"] = "<li>Email address is invalid, please try again. <br/>";
$messages["register_error_user_already_exist"] = "<li>There is already a user with that name, please try again.<br/>";
$messages["register_error_incorrect_password"] = "<li>Password is invalid, please try again. <br/>";
$messages["register_error_passwords_dont_match"] = "<li>Passwords do not match, please try again. <br/>";
$messages["register_error_adding_user"] = "Error adding the user: ";
$messages["register_error_creating_blog"] = "There was an error creating the new blog";
$messages["register_error_blog_name"] = "<li>You should choose a better name for the blog.<br/>" ;
?>
