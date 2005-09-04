<?php
// Suomen kieli pLogiin, kääntäjänä Jussi Salomaa http://www.ilmasuojassa.org
// aseta tämä koodaustyypiksi, jotta sivut näkyvät oikein
$messages['encoding'] = 'iso-8859-1';
$messages['locale_description'] = 'Suomen kieli pLogiin';
// aikaformaatti, katso Locale::formatDate lisätietoa varten
$messages['date_format'] = '%d/%m/%Y %H:%M';

// viikonpäivät
$messages['days'] = Array( 'Sunnuntai', 'Maanantai', 'Tiistai', 'Keskiviikko', 'Torstai', 'Perjantai', 'Lauantai' );
// -- Yhteensopivuutta, älä koske -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( 'Su', 'Ma', 'Ti', 'Ke', 'To', 'Pe', 'La' );
// -- Yhteensopivuutta, älä koske -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// kuukaudet
$messages['months'] = Array( 'Tammikuu', 'Helmikuu', 'Maaliskuu', 'Huhtikuu', 'Toukokuu', 'Kesäkuu', 'Heinäkuu', 'Elokuu', 'Syyskuu', 'Lokakuu', 'Marraskuu', 'Joulukuu' );
// -- Yhteensopivuutta, älä koske -- //
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

// sekalaista tekstiä
$messages['of'] = 'of';
$messages['recently'] = 'Hetki sitten...';
$messages['comments'] = 'Kommentti(a)';
$messages['comment on this'] = 'Kommentoi';
$messages['my_links'] = 'Linkkini';
$messages['archives'] = 'Arkisto';
$messages['search'] = 'Haku';
$messages['calendar'] = 'Kalenteri';
$messages['search_s'] = 'Haku';
$messages['search_this_blog'] = 'Etsi tästä blogista:';
$messages['about_myself'] = 'Kuka minä olen?';
$messages['permalink_title'] = 'Pysyvä linkki arkistoon';
$messages['permalink'] = 'Pysyvä linkki';
$messages['posted_by'] = 'Kirjoitti';
$messages['reply'] = 'Vastaa';

// kommentinlisäyssivu
$messages['add_comment'] = 'Lisää kommentti';
$messages['comment_topic'] = 'Aihe';
$messages['comment_text'] = 'Teksti';
$messages['comment_username'] = 'Nimesi';
$messages['comment_email'] = 'Sähköpostiosoitteesi';
$messages['comment_url'] = 'Kotisivusi';
$messages['comment_send'] = 'Lähetä';
$messages['comment_added'] = 'Kommentti lisätty!';
$messages['comment_add_error'] = 'Virhe kommenttia lisätessä';
$messages['article_does_not_exist'] = 'Artikkelia ei ole olemassa';
$messages['no_posts_found'] = 'Yhtään viestiä ei löytynyt';
$messages['user_has_no_posts_yet'] = 'Käyttäjä ei ole lisännyt yhtään viestiä';
$messages['back'] = 'Takaisin';
$messages['post'] = 'viesti';
$messages['trackbacks_for_article'] = 'Trackbackit artikkeliin: ';
$messages['trackback_excerpt'] = 'Excerpt';
$messages['trackback_weblog'] = 'Weblog';
$messages['search_results'] = 'Hakutulokset';
$messages['search_matching_results'] = 'Seuraavat viestit osuvat hakutuloksiisi: ';
$messages['search_no_matching_posts'] = 'Yhtään sopivaa viestiä ei löytynyt';
$messages['read_more'] = '(Lisää...)';
$messages['syndicate'] = 'Syndikaatti';
$messages['main'] = 'Pääsivu';
$messages['about'] = 'Tietoa';
$messages['download'] = 'Lataa';

////// Virheviestit /////
$messages['error_fetching_article'] = 'Artikkelia ei löytynyt';
$messages['error_fetching_articles'] = 'Artikkeleita ei voitu noutaa';
$messages['error_trackback_no_trackback'] = 'Trackbackeja ei löytynyt tälle artikkelille';
$messages['error_incorrect_article_id'] = 'Artikkelin identifiointi ei ole oikea';
$messages['error_incorrect_blog_id'] = 'Blogin identifiointi ei ole oikea';
$messages['error_comment_without_text'] = 'Sinun pitäisi ainakin tuottaa vähän tekstiä';
$messages['error_comment_without_name'] = 'Sinun pitäisi ainakin antaa lempinimesi tai nimesi';
$messages['error_adding_comment'] = 'Kommenttia lisätessä tuli virhe';
$messages['error_incorrect_parameter'] = 'Väärä parametri';
$messages['error_parameter_missing'] = 'Yksi parametri puuttuu pyynnöstä';
$messages['error_comments_not_enabled'] = 'Kommentointi on otettu pois käytöstä';
$messages['error_incorrect_search_terms'] = 'Hakutermisi eivät olleet kunnollisia';
$messages['error_no_search_results'] = 'Hakusi ei tuottanut tulosta';
$messages['error_no_albums_defined'] = 'Tässä blogissa ei ole albumeja';

/////////////////                                          //////////////////
///////////////// Admin-paneeli														 //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Kirjautuminen';
$messages['welcome_message'] = 'Tervetuloa pLogiin';
$messages['error_incorrect_username_or_password'] = 'Väärä käyttäjänimi tai salasana';
$messages['error_dont_belong_to_any_blog'] = 'Sinulle ei ole vielä asetettu mitään blogia';
$messages['logout_message'] = 'Olet onnistuneesti kirjautunut ulos';
$messages['logout_message_2'] = 'Klikkaa <a href="%1$s">tästä</a> mennäksesi %2$s</a>';
$messages['error_access_forbidden'] = 'Sisäänpääsy kielletty. Kirjaudu ensin sisään';
$messages['username'] = 'Käyttäjänimi';
$messages['password'] = 'Salasana';

// dashboard
$messages['dashboard'] = 'Kojelauta';
$messages['recent_articles'] = 'Viimeisimmät viestit';
$messages['recent_comments'] = 'Viimeisimmät kommentit';
$messages['recent_trackbacks'] = 'Viimeisimmät trackbackit';
$messages['blog_statistics'] = 'Blogin statistiikka';
$messages['total_posts'] = 'Viestien kokonaismäärä';
$messages['total_comments'] = 'Kommenttien kokonaismäärä';
$messages['total_trackbacks'] = 'Trackbackien kokonaismäärä';
$messages['total_viewed'] = 'Luettuja viestejä';
$messages['in'] = 'In';

// menu options
$messages['newPost'] = 'Uusi viesti';
$messages['Manage'] = 'Hallitse';
$messages['managePosts'] = 'Hallitse viestejä';
$messages['editPosts'] = 'Viestit';
$messages['editArticleCategories'] = 'Kategoriat';
$messages['newArticleCategory'] = 'Uusi kategoria';
$messages['manageLinks'] = 'Hallitse linkkejä';
$messages['editLinks'] = 'Linkit';
$messages['newLink'] = 'Uusi linkki';
$messages['editLink'] = 'Muokkaa linkkiä';
$messages['editLinkCategories'] = 'Linkkikategoriat';
$messages['newLinkCategory'] = 'Uusi linkkikategoria';
$messages['editLinkCategory'] = 'Muokkaa linkkikategorioita';
$messages['manageCustomFields'] = 'Hallitse omia kenttiä';
$messages['blogCustomFields'] = 'Omat kentät';
$messages['newCustomField'] = 'Uusi oma kenttä';
$messages['resourceCenter'] = 'Resurssit';
$messages['resources'] = 'Resurssit';
$messages['newResourceAlbum'] = 'Uusi albumi';
$messages['newResource'] = 'Uusi resurssi';
$messages['controlCenter'] = 'Asetukset';
$messages['manageSettings'] = 'Asetukset';
$messages['blogSettings'] = 'Blogin asetukset';
$messages['userSettings'] = 'Käyttäjäasetukset';
$messages['pluginCenter'] = 'Pluginkeskus';
$messages['Stats'] = 'Statistiikkaa';
$messages['manageBlogUsers'] = 'Hallitse käyttäjiä';
$messages['newBlogUser'] = 'Uusi blogin käyttäjä';
$messages['showBlogUsers'] = 'Blogin käyttäjät';
$messages['manageBlogTemplates'] = 'Hallitse Blogin ulkoasuja';
$messages['newBlogTemplate'] = 'Uusi ulkoasu';
$messages['blogTemplates'] = 'Blogin ulkoasut';
$messages['adminSettings'] = 'Administration';
$messages['Users'] = 'Käyttäjät';
$messages['createUser'] = 'Luo käyttäjä';
$messages['editSiteUsers'] = 'Sivuston käyttäjät';
$messages['Blogs'] = 'Hallitse blogeja';
$messages['createBlog'] = 'Tee uusi blogi';
$messages['editSiteBlogs'] = 'Blogit';
$messages['Locales'] = 'Hallitse kieliä';
$messages['newLocale'] = 'Uusi kieli';
$messages['siteLocales'] = 'Sivuston kielet';
$messages['Templates'] = 'Hallitse ulkoasuja';
$messages['newTemplate'] = 'Uusi ulkoasu';
$messages['siteTemplates'] = 'Sivuston ulkoasut';
$messages['GlobalSettings'] = 'Globaalit asetukset';
$messages['editSiteSettings'] = 'Yleistä';
$messages['summarySettings'] = 'Yhteenveto';
$messages['templateSettings'] = 'Ulkoasut';
$messages['urlSettings'] = 'URLit';
$messages['emailSettings'] = 'Sähköposti';
$messages['uploadSettings'] = 'Uploadit';
$messages['helpersSettings'] = 'Ulkoiset avustajat';
$messages['interfacesSettings'] = 'Käyttöliittymät';
$messages['securitySettings'] = 'Turvallisuus';
$messages['bayesianSettings'] = 'Bayesialainen Filtteri';
$messages['resourcesSettings'] = 'Resurssit';
$messages['searchSettings'] = 'Haku';
$messages['cleanUpSection'] = 'Siivous';
$messages['cleanUp'] = 'Siivous';
$messages['editResourceAlbum'] = 'Muokkaa albumia';
$messages['resourceInfo'] = 'Muokkaa resurssia';
$messages['editBlog'] = 'Muokkaa blogia';
$messages['Logout'] = 'Kirjaudu ulos';

// new post
$messages['topic'] = 'Otsikko';
$messages['topic_help'] = 'Viestin otsikko';
$messages['text'] = 'Teksti';
$messages['text_help'] = 'Viestin teksti, tämä näkyy aina etusivulla';
$messages['extended_text'] = 'Jatkettu teksti';
$messages['extended_text_help'] = 'Viestin jatkettu teksti. Tämä voi näkyä asetuksista riippuen joko pääsivulla tai viestin omalla sivulla. Katso blogin asetuksista lisää informaatiota';
$messages['post_slug'] = 'Slug';
$messages['post_slug_help'] = 'Slugia käytetään luomaan kauniita pysyviä linkkejä';
$messages['date'] = 'Päivä';
$messages['post_date_help'] = 'Päivä jolloin viesti julkaistaan';
$messages['status'] = 'Status';
$messages['post_status_help'] = 'Valitse yksi statuksista';
$messages['post_status_published'] = 'Julkaistu';
$messages['post_status_draft'] = 'Luonnos';
$messages['post_status_deleted'] = 'Poistettu';
$messages['categories'] = 'Kategoriat';
$messages['post_categories_help'] = 'Valitse yksi tai useampi kategoria';
$messages['post_comments_enabled_help'] = 'Salli kommentit';
$messages['send_notification_help'] = 'Ilmoitus uusista kommenteista';
$messages['send_trackback_pings_help'] = 'Lähetä trackback';
$messages['send_xmlrpc_pings_help'] = 'Lähetä XMLRPC pingi';
$messages['save_draft_and_continue'] = 'Tallenna luonnos';
$messages['preview'] = 'Esikatselu';
$messages['add_post'] = 'Lähetä';
$messages['error_saving_draft'] = 'Luonnoksen tallentamisessa tapahtui virhe';
$messages['draft_saved_ok'] = 'Luonnos talletettiin onnistuneesti';
$messages['error_sending_request'] = 'Pyynnön lähettämisessä tapahtui virhe';
$messages['error_no_category_selected'] = 'Valitse ainakin yksi kategoria';
$messages['error_missing_post_topic'] = 'Kirjoita viestin otsikko';
$messages['error_missing_post_text'] = 'Kirjoita jotain tekstiä viestiin';
$messages['error_adding_post'] = 'Viestin lisäämisessä tapahtui virhe';
$messages['post_added_not_published'] = 'Viesti lisättiin onnistuneesti, mutta ei julkaistu';
$messages['post_added_ok'] = 'Viesti lisättiin onnistuneesti';
$messages['send_notifications_ok'] = 'Ilmoitus lähetetään aina kun uusi kommentti tai trackback ilmestyy';

// send trackbacks
$messages['error_sending_trackbacks'] = 'Trackbackin lähettämisessä tapahtui virhe';
$messages['send_trackbacks_help'] = 'Valitse ne URLit, jonne haluat lähettää trackbackin. Huomioi, että valitsemasi sivustot tukevat trackbackiä';
$messages['send_trackbacks'] = 'Lähetä trackback';
$messages['ping_selected'] = 'Pingi valittu';
$messages['trackbacks_sent_ok'] = 'Trackback lähetetty onnistuneesti';

// posts page
$messages['show_by'] = 'Näytä';
$messages['category'] = 'Kategoria';
$messages['author'] = 'Julkaisija';
$messages['post_status_all'] = 'Kaikki';
$messages['author_all'] = 'Kaikki';
$messages['search_terms'] = 'Hakutermit';
$messages['show'] = 'Näytä';
$messages['delete'] = 'Poista';
$messages['actions'] = 'Toiminnot';
$messages['all'] = 'Kaikki';
$messages['category_all'] = 'Kaikki';
$messages['error_incorrect_article_id'] = 'Väärä artikkelin identifiointi';
$messages['error_deleting_article'] = 'Virhen viestin "%s" poistamisessa';
$messages['article_deleted_ok'] = 'Viesti "%s" poistettiin onnistuneesti';
$messages['articles_deleted_ok'] = '%s viesti(ä) poistettu onnistuneesti';
$messages['error_deleting_article2'] = 'Viestin "%s" poistamisessa oli ongelmia';

// edit post page
$messages['update'] = 'Päivitä';
$messages['editPost'] = 'Muokkaa viestiä';
$messages['error_fetching_post'] = 'Viestin noutamisessa tapahtui virhe';
$messages['post_updated_ok'] = 'Viesti "%s" päivitetty onnistuneesti';
$messages['error_updating_post'] = 'Viestin päivityksessä tapahtui virhe';
$messages['notification_added'] = 'Saat ilmoituksen uusista kommenteista tai trackbackeistä';
$messages['notification_removed'] = 'Ilmoituksia viesteistä tai trackbackeistä ei lähetetä';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = 'Kaikki';
$messages['comment_status_spam'] = 'Spammia';
$messages['comment_status_nonspam'] = 'Ei Spammia';
$messages['error_fetching_comments'] = 'Viestin kommenttien hakemisessa tapahtui virhe';
$messages['error_deleting_comments'] = 'Kommenttien poistamisessa tapahtui virhe tai yhtään kommenttia ei oltu valittu';
$messages['comment_deleted_ok'] = 'Kommentti "%s" poistettiin onnistuneesti';
$messages['comments_deleted_ok'] = '%s kommenttia poistettu onnistuneesti';
$messages['error_deleting_comment'] = 'Kommenttia "%s" poistaessa tapahtui virhe';
$messages['error_deleting_comment2'] = 'Kommenttia %s poistaessa tapahtui virhe';
$messages['editComments'] = 'Kommentit';
$messages['mark_as_spam'] = 'Merkitse spammiksi';
$messages['mark_as_no_spam'] = 'Poista spam-merkintä';
$messages['error_incorrect_comment_id'] = 'Kommentin identifiointi oli väärä';
$messages['error_marking_comment_as_spam'] = 'Kommentin merkitsemissä spammiksi tapahtui virhe';
$messages['comment_marked_as_spam_ok'] = 'Kommentti merkittiin spammiksi onnistuneesti';
$messages['error_marking_comment_as_nonspam'] = 'Spam-merkinnän poistamisessa tapahtui virhe';
$messages['comment_marked_as_nonspam_ok'] = 'Kommentti merkittiin tavalliseksi kommentiksi';

// viestin trackbackit
$messages['blog'] = 'Blog';
$messages['excerpt'] = 'Excerpt';
$messages['error_fetching_trackbacks'] = 'Trackbackin hakemisessa tapahtui virhe';
$messages['error_deleting_trackbacks'] = 'Trackbackin poistamisessa tapahtui virhe tai yhtään valintaa ei oltu tehty';
$messages['error_deleting_trackback'] = 'Trackbackin "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_trackback2'] = 'Trackbackin tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['trackback_deleted_ok'] = 'Trackback "%s" poistettiin onnistuneesti';
$messages['trackbacks_deleted_ok'] = '%s trackbackia poistettiin onnistuneesti';
$messages['editTrackbacks'] = 'Trackbacks';

// Viestin statistiikka
$messages['referrer'] = 'Viittaajaa';
$messages['hits'] = 'Osumaa';
$messages['error_no_items_selected'] = 'Yhtään valintaa ei tehty poistamista varten';
$messages['error_deleting_referrer'] = 'Viittaajan "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_referrer2'] = 'Viittaajan tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['referrer_deleted_ok'] = 'Viittaaja "%s" poistettiin onnistuneesti';
$messages['referrers_deleted_ok'] = '%s viittajaa poistettu onnistuneesti';

// Kategoriat
$messages['posts'] = 'Viestiä';
$messages['show_in_main_page'] = 'Näytä etusivulla';
$messages['error_incorrect_category_id'] = 'Kategorian identifiointi ei ole oikein tai yhtään valitaa ei tehty';
$messages['error_category_has_articles'] = 'Kategoriaa "%s" käyttää joku viesti. Ole hyvä ja editoi viestejä, poista sen jälkeen kategoria.';
$messages['category_deleted_ok'] = 'Kategoria "%s" poistettiin onnistuneesti';
$messages['categories_deleted_ok'] = '%s kategoriaa poistettu onnistuneesti';
$messages['error_deleting_category'] = 'Kategorian "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_category2'] = 'Kategorian tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['yes'] = 'Kyllä';
$messages['no'] = 'Ei';

// uusi kategoria
$messages['name'] = 'Nimi';
$messages['category_name_help'] = 'Kategorian nimi';
$messages['description'] = 'Sisällys';
$messages['category_description_help'] = 'Mitä kategoria pitää sisällään?';
$messages['show_in_main_page_help'] = 'Näytetäänkö tässä kategoriassa olevat viestit pääsivulla vai vain silloin kun tätä kategoriaa selataan?';
$messages['error_empty_name'] = 'Sinun täytyy antaa nimi';
$messages['error_empty_description'] = 'Sinun täytyy antaa selostus';
$messages['error_adding_article_category'] = 'Kategorian lisäämisessä tapahtui virhe. Ole hyvä ja tarkasta antamasi tiedot';
$messages['category_added_ok'] = 'Kategoria "%s" lisättiin onnistuneesti blogiin';
$messages['add'] = 'Lisää';
$messages['reset'] = 'Tyhjennä';

// päivitä kategoriaa
$messages['error_updating_article_category'] = 'Kategorian päivittämisessä tapahtui virhe';
$messages['error_fetching_category'] = 'Kategorian noutamisessa tapahtui virhe';
$messages['article_category_updated_ok'] = 'Kategoria päivitettiin onnistuneesti';

// Linkit
$messages['feed'] = 'Feedit';
$messages['error_no_links_selected'] = 'Linkin identifiointi oli väärä tai yhtään ei oltu valittu';
$messages['error_incorrect_link_id'] = 'Linkin identifiointi oli väärä';
$messages['error_removing_link'] = 'Linkin "%s" poistamisessa tapahtui virhe';
$messages['error_removing_link2'] = 'Linkin tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['link_deleted_ok'] = 'Linkki "%s" poistettiin onnistuneesti';
$messages['links_deleted_ok'] = '%s linkkiä poistettiin onnistuneesti.';

// Uusi linkki
$messages['link_name_help'] = 'Linkin nimi';
$messages['link_url_help'] = 'Linkin URL-osoite (http://jne...)';
$messages['link_description_help'] = 'Linkin lyhyt selostus';
$messages['link_feed_help'] = 'Linkki johonkin RSS tai Atom -feediin voidaan myös toteuttaa';
$messages['link_category_help'] = 'Valitse yksi linkkikategorioista';
$messages['error_adding_link'] = 'Linkin lisäämisessä tapahtui virhe. Ole hyvä ja tarkasta antamasi tiedot';
$messages['error_invalid_url'] = 'Osoite ei ole kunnollinen';
$messages['link_added_ok'] = 'Linkki "%s" lisättiin onnistuneesti';

// Linkin päivitys
$messages['error_updating_link'] = 'Linkin päivittämisessä tapahtui virhe. Tarkasta antamasi tiedot ja yritä uudelleen';
$messages['error_fetching_link'] = 'Linkin hakemisessa tapahtui virhe';
$messages['link_updated_ok'] = 'Linkki "%s" päivitettiin onnistuneesti';

// linkkikategoriat
$messages['links'] = 'Linkit';
$messages['error_invalid_link_category_id'] = 'Linkkikategorian tunnus ei ollut oikea tai linkkikategoriaa ei oltu valittu';
$messages['error_links_in_link_category'] = 'Linkkikategoria "%s" on käytössä. Editoi linkkejä ja kokeile uudestaan';
$messages['error_removing_link_category'] = 'Linkkikategorian "%s" poistamisessa tapahtui virhe';
$messages['link_category_deleted_ok'] = 'Linkkikategoria "%s" poistettiin onnistuneesti';
$messages['link_categories_deleted_ok'] = '%s linkkikategoriaa poistettu onnistuneesti';
$messages['error_removing_link_category2'] = 'Linkkikategoria tunnuksella "%s" poistaminen ei onnistunut';

// uusi linkkikategoria
$messages['link_category_name_help'] = 'Linkkikategorian nimi';
$messages['error_adding_link_category'] = 'Linkkikategorian lisäämisessä tapahtui virhe';
$messages['link_category_added_ok'] = 'Linkkikategoria "%s" lisättiin onnistuneesti';

// Linkkikategorian editointi
$messages['error_updating_link_category'] = 'Linkkikategorian päivityksessä tapahtui virhe. Ole hyvä ja tarkasta antamasi tiedot';
$messages['link_category_updated_ok'] = 'Linkkikategoriay "%s" päivitettiin onnistuneesti';
$messages['error_fetching_link_category'] = 'Linkkikategorian noutamisessa tapahtui virhe';

// omat kentät
$messages['type'] = 'Tyyppi';
$messages['hidden'] = 'Piilotettu';
$messages['fields_deleted_ok'] = '%s kenttää poistettu onnistuneesti';
$messages['field_deleted_ok'] = 'Kenttä "%s" poistettu onnistuneesti';
$messages['error_deleting_field'] = 'Kentän "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_field2'] = 'Kentän tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['error_incorrect_field_id'] = 'Kentän tunnus ei ole oikea';

// Uusi kustomoitu kenttä
$messages['field_name_help'] = 'Tunnus jota käytetään viittamaan tämän kentän arvoon viestissä';
$messages['field_description_help'] = 'Lyhyt kuvaus tästä kentästä, joka näytetään viestejä muokatessa tai lisätessä';
$messages['field_type_help'] = 'Valitse yksi olemassa olevista kenttätyypeistä';
$messages['field_hidden_help'] = 'Jos kenttä on piilotettu, sitä ei näytetä viestejä lisätessä tai muokatessa. Pluginit käyttävät yleensä tätä ominaisuutta';
$messages['error_adding_custom_field'] = 'Virhe lisätessä kenttää, ole hyvä ja tarkasta antamasi tiedot';
$messages['custom_field_added_ok'] = 'Kenttä "%s" lisätty onnistuneesti';
$messages['text_field'] = 'Tekstikenttä';
$messages['text_area'] = 'Tekstialue';
$messages['checkbox'] = 'Checkbox';
$messages['date_field'] = 'Päivämäärän valinta';

// Kustomoidun kentän editointi
$messages['error_fetching_custom_field'] = 'Kentän hakemisessa tapahtui virhe';
$messages['error_updating_custom_field'] = 'Kentän päivittämisessä tapahtui virhe. Ole hyvä ja tarkasta antamasi tiedot ja yritä uudelleen';
$messages['custom_field_updated_ok'] = 'Kenttä "%s" päivitettiin onnistuneesti';

// resources
$messages['root_album'] = 'Juurialbumi';
$messages['num_resources'] = 'Resurssien määrä';
$messages['total_size'] = 'Kokonaiskoko';
$messages['album'] = 'Albumi';
$messages['error_incorrect_album_id'] = 'Albumin tunnus ei ole oikea';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'pLog ei pystynyt tekemään tarvittavia kansioita resurssien asentamista varten. Tämä voi johtua useista syistä, kuten PHP:n ajamisesta SAFE MODEssa tai käyttäjälläsi ei ole oikeuksia tehdä noita kansioita jne. Voit yrittää tehdä operaation manuaalisesti tekemällä seuraavat kansiot: <br/><br/>%s<br/><br/>Jos nämä kansiot ovat jo olemassa, tarkasta että web serverin käyttäjä voi lukea ja kirjoittaa niihin';
$messages['items_deleted_ok'] = '%s kohdetta poistettu onnistuneesti';
$messages['error_album_has_children'] = 'Albumi "%s" sisältää jotain. Ole hyvä ja tyhjennä albumi ja yritä uudestaan';
$messages['item_deleted_ok'] = '"%s" poistettu onnistuneesti';
$messages['error_deleting_album'] = 'Albumin "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_album2'] = 'Albumin tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_resource'] = 'Resurssin "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_resource2'] = 'Resurssin tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['error_no_resources_selected'] = 'Yhtään resurssia ei valittu poistamista varten';
$messages['resource_deleted_ok'] = 'Resurssi "%s" poistettiin onnistuneesti';
$messages['album_deleted_ok'] = 'Albumi "%s" poistettiin onnistuneesti';
$messages['add_resource'] = 'Lisää resurssi';
$messages['add_resource_preview'] = 'Lisää esikatselu';
$messages['add_resource_medium'] = 'Lisää median esikatselu';
$messages['add_album'] = 'Lisää albumi';

// Uusi albumi
$messages['album_name_help'] = 'Lyhyt nimi uudelle albumille';
$messages['parent'] = 'Parent';
$messages['no_parent'] = 'No parent';
$messages['parent_album_help'] = 'Käytä tätä saadaksesi albumeja albumien sisään ja järjestääsesi paremmin tiedostosi';
$messages['album_description_help'] = 'Pidempi selostus albumin sisällöstä';
$messages['error_adding_album'] = 'Albumin lisäämisessä tapahtui virhe. Ole hyvä ja tarkasta antamasi tiedot ja yritä uudelleen';
$messages['album_added_ok'] = 'Albumi "%s" lisättiin onnistuneesti';

// Albumin editointi
$messages['error_incorrect_album_id'] = 'Albumin tunnus ei ole oikea';
$messages['error_fetching_album'] = 'Albumin noutamisessa tapahtui virhe';
$messages['error_updating_album'] = 'Albumin päivittämisessä tapahtui virhe. Ole hyvä ja tarkasta antamasi tiedot ja yritä uudelleen';
$messages['album_updated_ok'] = 'Albumi "%s" päivitetty onnistuneesti';
$messages['show_album_help'] = 'Albumi ei näy blogin albumilistassa, jos se otetaan pois käytöstä';

// new resource
$messages['file'] = 'Tiedosto';
$messages['resource_file_help'] = 'Tiedosto joka lisätään nykyiseen blogiin. Käytä "Lisää monta" -linkkiä lisätäksesi useamman tiedoston samaan aikaan';
$messages['add_field'] = 'Lisää monta';
$messages['resource_description_help'] = 'Pidempi selostus tiedoston sisällöstä';
$messages['resource_album_help'] = 'Valitse albumi, johon tämä tiedosto lisätään';
$messages['error_no_resource_uploaded'] = 'Yhtään tiedostoa ei valittu lisättäväksi';
$messages['resource_added_ok'] = 'Resurssi "%s" lisättiin onnistuneesti';
$messages['error_resource_forbidden_extension'] = 'Tiedostoa ei lisätty, koska se on kielletty tiedostotyyppi';
$messages['error_resource_too_big'] = 'Tiedostoa ei lisätty, koska se on liian iso';
$messages['error_uploads_disabled'] = 'Tiedostoa ei lisätty, koska lisääminen on otettu pois käytöstä';
$messages['error_quota_exceeded'] = 'Tiedostoa ei lisätty, koska tiedostoja varten varattu levytila on täynnä';
$messages['error_adding_resource'] = 'Tiedoston lisäämisessä tapahtui virhe';

// Resurssien editointia
$messages['editResource'] = 'Muokkaa resurssia';
$messages['resource_information_help'] = 'Alapuolella on jotain tietoa resurssista';
$messages['information'] = 'Informaatiota';
$messages['size'] = 'Koko';
$messages['format'] = 'Tyyppi';
$messages['dimensions'] = 'Ulottuvuus';
$messages['bits_per_sample'] = 'Bittiä näytteessä';
$messages['sample_rate'] = 'Näytemäärä';
$messages['number_of_channels'] = 'Kanavien määrä';
$messages['legnth'] = 'Pituus';
$messages['thumbnail_format'] = 'Esikatselukuvan tyyppi';
$messages['regenerate_preview'] = 'Muodosta esikatselu uudelleen';
$messages['error_fetching_resource'] = 'Resurssin noutamisessa tapahtui virhe';
$messages['error_updating_resource'] = 'Resurssin päivittämisessä tapahtui virhe';
$messages['resource_updated_ok'] = 'Resurssi "%s" päivitettiin onnistuneesti';

// blogin asetukset
$messages['blog_link'] = 'Blogin linkki';
$messages['blog_link_help'] = 'Pysyvä linkki blogiin';
$messages['blog_name_help'] = 'Blogin otsikko';
$messages['blog_description_help'] = 'Blogin sisällön pidempi kuvaus';
$messages['language'] = 'Kieli';
$messages['blog_language_help'] = 'Blogin käyttämä kieli sekä julkisella että hallintapuolella';
$messages['max_main_page_items'] = 'Viestien määrä pääsivulla';
$messages['max_main_page_items_help'] = 'Viestin määrä, joka näytetään aina pääsivulla';
$messages['max_recent_items'] = 'Viimeisimpien viestien määrä';
$messages['max_recent_items_help'] = 'Viimeisimmiksi merkattujen viestien maksimimäärä, joka näytetään pääsivulla';
$messages['template'] = 'Ulkoasu';
$messages['choose'] = 'Valitse';
$messages['blog_template_help'] = 'Blogin käyttämä ulkoasu. Tämä lista sisältää globaalit ulkoasut ja kaikki ulkoasut, jotka on asennettu vain tätä blogia varten';
$messages['use_read_more'] = 'Käytä "Lisää..." -linkkiä viesteissä';
$messages['use_read_more_help'] = 'Jos valittuna, vain teksti-alueelle kirjoitettu teksti näkyy pääsivulla. Jatketun tekstin näyttämiseksi lisätään "Lisää..." -linkki viestien perään';
$messages['enable_wysiwyg'] = 'Käytä visuaalista editoria viestien kirjoittamisessa';
$messages['enable_wysiwyg_help'] = 'Ottaa käyttöön tehokkaan visuaalisen editorin. Editori toimii vain Internet Explorer 5.5 -selaimella tai Mozilla 1.3 -selaimella tai uudemmilla versioilla';
$messages['enable_comments'] = 'Hyväksy kommentointi vakiona';
$messages['enable_comments_help'] = 'Hyväksy kommentointi kaikkiin viesteihin vakiona. Kommentointi voidaan silti ottaa pois käytöstä tai sallia erikseen jokaista viestiä kohden viestiä kirjoittaessa tai editoitaessa';
$messages['show_future_posts'] = 'Näytä tulevat viestit kalenterissa';
$messages['show_future_posts_help'] = 'Näytetäänkö ennakkoon kirjoitetut viestit kalenterissa kaikille käyttäjille vai ei?';
$messages['comments_order'] = 'Kommenttien järjestys';
$messages['comments_order_help'] = 'Kommenttien näyttämisjärjestys viestin omalla sivulla';
$messages['oldest_first'] = 'Vanhin ensin';
$messages['newest_first'] = 'Uusin ensin';
$messages['categories_order'] = 'Kategorioitten järjestys';
$messages['categories_order_help'] = 'Järjestys, jossa kategoriat näytetään pääsivulla';
$messages['most_recent_updated_first'] = 'Viimeisimmäksi päivitetty ensin';
$messages['alphabetical_order'] = 'Aakkosjärjestyksessä';
$messages['reverse_alphabetical_order'] = 'Käännetyssä aakkosjärjestyksessä (ääkkösjärjestyksessä)';
$messages['most_articles_first'] = 'Eniten viestejä sisältävä ensin';
$messages['link_categories_order'] = 'Linkkikategorioiden järjestys';
$messages['link_categories_order_help'] = 'Järjestys, jossa linkkikategoriat näytetään pääsivulla';
$messages['most_links_first'] = 'Eniten linkkejä sisältävä ensin';
$messages['most_links_last'] = 'Eniten linkkejä sisältävä viimeisenä';
$messages['time_offset'] = 'Aikaero';
$messages['time_offset_help'] = 'Aikaero tunneissa, joka lisätään dynaamisesti jokaiseen päivään ja kellonaikaan blogissa';
$messages['close'] = 'Sulje';
$messages['select'] = 'Valitse';
$messages['error_updating_settings'] = 'Blogin asetusten päivittämisessä tapahtui virhe. Ole hyvä ja tarkasta antamasi tiedot ja yritä uudelleen';
$messages['error_invalid_number'] = 'Numero ei ole kunnollinen';
$messages['error_incorrect_time_offset'] = 'Aikaero ei ole kunnollinen';
$messages['blog_settings_updated_ok'] = 'Blogin asetukset päivitetty onnistuneesti';
$messages['hours'] = 'Tuntia';

// Käyttäjäasetukset
$messages['username_help'] = 'Julkinen käyttäjänimi. Tätä ei voi vaihtaa';
$messages['full_name'] = 'Koko nimi';
$messages['full_name_help'] = 'Täydellinen nimi';
$messages['password_help'] = 'Kirjoita uusi salasana';
$messages['confirm_password'] = 'Vahvista salasana';
$messages['email'] = 'Sähköpostiosoite';
$messages['email_help'] = 'Sähköpostiosoite, jonne ilmoitukset lähetetään';
$messages['bio'] = 'Tietoja itsestäsi';
$messages['bio_help'] = 'Voit lisätä tähän pidemmän selostuksen itsestäsi';
$messages['picture'] = 'Kuva';
$messages['user_picture_help'] = 'Valitse kuva esittämään itseäsi blogiin lisäämiesi kuvien joukosta';
$messages['error_invalid_password'] = 'Salasana ei ole kunnollinen, tarkasta ettei se oli liian lyhyt';
$messages['error_passwords_dont_match'] = 'Valitettavasti salasanat eivät täsmää';
$messages['error_incorrect_email_address'] = 'Sähköpostiosoite ei ole kunnollinen';
$messages['error_updating_user_settings'] = 'Käyttäjäasetusten päivittämisessä tapahtui virhe. Ole hyvä tarkasta antamasi tiedot';
$messages['user_settings_updated_ok'] = 'Käyttäjäasetukset päivitetty onnistuneesti';
$messages['resource'] = 'Resurssi';

// Pluginkeskus
$messages['identifier'] = 'Tunnus';
$messages['error_plugins_disabled'] = 'Valitettavasti pluginit eivät ole käytössä';

// Blogin käyttäjät
$messages['revoke_permissions'] = 'Mitätöi oikeudet';
$messages['error_no_users_selected'] = 'Yhtään käyttäjää ei valittu';
$messages['user_removed_from_blog_ok'] = 'Käyttäjällä "%s" ei ole enää oikeuksia tähän blogiin';
$messages['users_removed_from_blog_ok'] = '%s käyttäjällä ei ole enää oikeuksia tähän blogiin';
$messages['error_removing_user_from_blog'] = 'Käyttäjän "%s" oikeuksien poistamisessa tapahtui virhe';
$messages['error_removing_user_from_blog2'] = 'Käyttäjän tunnuksella "%s" oikeuksien poistamisessa tapahtui virhe';

// Uusi blogin käyttäjä
$messages['new_blog_username_help'] = 'Uuden käyttäjän käyttäjänimi, jolle haluat antaa oikeudet tähän blogiin. Uudella käyttäjällä on oikeus ainoastaan Hallitse- ja Resurssiosioihin';
$messages['send_notification'] = 'Lähetä ilmoitus';
$messages['send_user_notification_help'] = 'Lähetä sähköposti-ilmoitus tälle käyttäjälle';
$messages['notification_text'] = 'Ilmoitusteksti';
$messages['notification_text_help'] = 'Teksti, joka lisätään ilmoitusviestiin';
$messages['error_adding_user'] = 'Käyttäjän oikeuksien myöntämisessä tapahtui virhe. Ole hyvä ja tarkasta antamasi tiedot';
$messages['error_empty_text'] = 'Sinun täytyy kirjoittaa tekstiä';
$messages['error_adding_user'] = 'Käyttäjän lisäämisessä tapahtui virhe. Ole hyvä ja tarkasta antamasi tiedot';
$messages['error_invalid_user'] = 'Käyttäjää "%s" ei ole olemassa tai hän ei ole validi';
$messages['user_added_to_blog_ok'] = 'Käyttäjälle "%s" annettiin oikeudet tähän blogiin onnistuneesti';

// Blogin ulkoasut
$messages['error_no_templates_selected'] = 'Yhtään ulkoasua ei ole valittu';
$messages['error_template_is_current'] = 'Ulkoasua "%s" ei voida poistaa, koska se on käytössä';
$messages['error_removing_template'] = 'Ulkoasun "%s" poistamisessa tapahtui virhe';
$messages['template_removed_ok'] = 'Ulkoasu "%s" poistettiin onnistuneesti';
$messages['templates_removed_ok'] = '%s ulkoasua poistettiin onnistuneesti';

// Uusi blogin ulkoasu
$messages['template_installed_ok'] = 'Ulkoasu "%s" lisättiin onnistuneesti';
$messages['error_installing_template'] = 'Ulkoasun "%s" asentamisessa tapahtui virhe';
$messages['error_missing_base_files'] = 'Joitakin ulkoasun tiedostoista puuttuu';
$messages['error_add_template_disabled'] = 'Ulkoasuja ei voida lisätä, koska lisääminen on otettu pois käytöstä tällä sivustolla';
$messages['error_must_upload_file'] = 'Ulkoasupakettia ei lisätty';
$messages['error_uploads_disabled'] = 'Lisääminen on otettu pois käytöstä tällä sivustolla';
$messages['error_no_new_templates_found'] = 'Uusia ulkoasuja ei löytynyt';
$messages['error_template_not_inside_folder'] = 'Ulkoasun käyttämien tiedostojen on oltava samannimisen kansion sisällä kuin ulkoasun nimi';
$messages['error_missing_base_files'] = 'Joitakin ulkoasun perustiedostoja puuttuu';
$messages['error_unpacking'] = 'Tiedoston purkamisessa tapahtui virhe';
$messages['error_forbidden_extensions'] = 'Ulkoasu sisälsi kiellettyjä tiedostotyyppejä';
$messages['error_creating_working_folder'] = 'Väliaikaisen kansion tekeminen paketin purkamista varten epäonnistui';
$messages['error_checking_template'] = 'Ulkoasun %s tarkastamisessa tapahtui virhe';
$messages['template_package'] = 'Ulkoasupaketti';
$messages['blog_template_package_help']  = 'Käytä tätä vaihtoehtoa lisätäksesi uuden ulkoasun, joka on käytössä vain omassa blogissasi. Jos et pysty lisäämään tällä vaihtoehdolla uutta ulkoasua, lisää ulkoasu käsin ja laita se <b>%s</b>, joka on kansio, jossa blogisi ulkoasut ovat. Klikkaa "<b>Etsi ulkoasuja</b>" nappulaa. pLog tutkii kansion ja lisää löytämänsä uudet ulkoasut automaattisesti';
$messages['scan_templates'] = 'Etsi ulkoasuja';

// Sivuston käyttäjät
$messages['user_status_active'] = 'Aktiivinen';
$messages['user_status_disabled'] = 'Ei käytössä';
$messages['user_status_all'] = 'Kaikki';
$messages['user_status_unconfirmed'] = 'Vahvistamaton';
$messages['error_invalid_user2'] = 'Käyttäjää tunnuksella "%s" ei ole olemassa';
$messages['error_deleting_user'] = 'Käyttäjän "%s" statuksen muuttamisessa tapahtui virhe';
$messages['user_deleted_ok'] = 'Käyttäjä "%s" otettu pois käytöstä onnistuneesti';
$messages['users_deleted_ok'] = '%s käyttäjää otettu pois käytöstä onnistuneesti';

// Luo käyttäjä
$messages['user_added_ok'] = 'Käyttäjä "%s" lisätty onnistuneesti';
$messages['error_incorrect_username'] = 'Käyttäjänimi ei ole korrekti tai on jo käytössä';
$messages['user_status_help'] = 'Käyttäjän tämänhetkinen status';
$messages['user_blog_help'] = 'Blogi johon tämä käyttäjä alunperin asetettiin';
$messages['none'] = 'Tyhjä';

// Käyttäjän muokkaus
$messages['error_invalid_user'] = 'Käyttäjän tunnus ei ole oikea tai käyttäjää ei ole olemassa';
$messages['error_updating_user'] = 'Käyttäjän asetusten päivittämisessä tapahtui virhe. Ole hyvä ja tarkasta antamasi tiedot';
$messages['blogs'] = 'Blogit';
$messages['user_blogs_help'] = 'Blogit jotka käyttäjä omistaa tai hänellä on kirjoitusoikeus';
$messages['site_admin'] = 'Administrator';
$messages['site_admin_help'] = 'Onko käyttäjällä pääkäyttäjäoikeudet ja saako saa nähdä "Administration" -alueen ja suorittaa pääkäyttäjätehtäviä';
$messages['user_updated_ok'] = 'Käyttäjä "%s" päivitettiin onnistuneesti';

// Sivuston blogit
$messages['blog_status_all'] = 'Kaikki';
$messages['blog_status_active'] = 'Aktiivinen';
$messages['blog_status_disabled'] = 'Passiivinen';
$messages['blog_status_unconfirmed'] = 'Vahvistamaton';
$messages['owner'] = 'Omistaja';
$messages['quota'] = 'Quota';
$messages['bytes'] = 'bittiä';
$messages['error_no_blogs_selected'] = 'Yhtään blogia ei valittu otettavaksi pois käytöstä';
$messages['error_blog_is_default_blog'] = 'Blogia "%s" ei voida poistaa, koska se on asetettu vakioblogiksi';
$messages['blog_deleted_ok'] = 'Blogi "%s" otettiin pois käytöstä onnistuneesti';
$messages['blogs_deleted_ok'] = '%s blogia poistettiin onnistuneesti';
$messages['error_deleting_blog'] = 'Blogin "%s" käytöstä poistamisessa tapahtui virhe';
$messages['error_deleting_blog2'] = 'Blogin tunnuksella "%s" käytöstä poistamisessa tapahtui virhe';

// Luo blogi
$messages['error_adding_blog'] = 'Blogin lisäämisessä tapahtui virhe. Ole hyvä ja tarkasta antamasi tiedot';
$messages['blog_added_ok'] = 'Blogi "%s" lisättiin onnistuneesti';

// Blogin muokkaus
$messages['blog_status_help'] = 'Blogin status';
$messages['blog_owner_help'] = 'Käyttäjä joka asetetaan blogin omistajaksi. Hänellä on täydet oikeudet blogin asetuksiin';
$messages['users'] = 'Käyttäjät';
$messages['blog_quota_help'] = 'Resurssiquota bitteinä. Aseta nollaksi, niin quota on rajaton tai jätä tyhjäksi asettaakseni blogin käyttämään globaalia quotaa';
$messages['blog_users_help'] = 'Käyttäjät joilla on oikeuksia tähän blogiin. Valitse käyttäjä vasemmalta ja siirrä oikealle listalle antaaksesi käyttäjälle oikeudet tähän blogiin';
$messages['edit_blog_settings_updated_ok'] = 'Blogi "%s" päivitetty onnistuneesti';
$messages['error_updating_blog_settings'] = 'Blogin "%s" päivityksessä tapahtui virhe';
$messages['error_incorrect_blog_owner'] = 'Käyttäjä, joka valittiin blogin omistajaksi ei ole validi';
$messages['error_fetching_blog'] = 'Blogin noutamisessa tapahtui virhe';
$messages['error_updating_blog_settings2'] = 'Blogin päivittämisessä tapahtui virhe. Ole hyvä ja tarkasta antamasi tiedot';
$messages['add_or_remove'] = 'Lisää tai poista käyttäjiä';

// Sivuston kielet
$messages['locale'] = 'Kielet';
$messages['locale_encoding'] = 'Encoodaus';
$messages['locale_deleted_ok'] = 'Kieli "%s" poistettiin onnistuneesti';
$messages['error_no_locales_selected'] = 'Yhtään kieltä ei valittu poistettavaksi';
$messages['error_deleting_only_locale'] = 'Kieltä ei voida poistaa, koska se on ainoa jäljellä oleva';
$messages['locales_deleted_ok']= '%s kieltä poistettiin onnistuneesti';
$messages['error_deleting_locale'] = 'Kielen "%s" poistamisessa tapahtui virhe';
$messages['error_locale_is_default'] = 'Kieltä "%s" ei voida poistaa, koska se on asetettu vakiokieleksi uusia blogeja varten';

// Lisää kieli
$messages['error_invalid_locale_file'] = 'Kielitiedosto ei ole validi';
$messages['error_no_new_locales_found'] = 'Uusia kielitiedostoja ei löytynyt';
$messages['locale_added_ok'] = 'Kieli "%s" lisättiin onnistuneesti';
$messages['error_saving_locale'] = 'Uuden kielen tallentamisessa tapahtui virhe';
$messages['scan_locales'] = 'Etsi kieliä';
$messages['add_locale_help'] = 'Käytä tätä vaihtoehtoa lisätäksesi uusia kielitiedostoja. Jos lisääminen ei ole mahdollista tätä vaihtoehtoa käyttäen, lisää kielitiedosto käsin kansioon <b>./locales/</b>, joka on kansio, jonne kielitiedostot tallennetaan. Klikkaa "<b>Etsi kieliä</b>" nappulaa. pLog tutkii kansion ja lisää löytämänsä kielet listaan';

// Sivuston ulkoasut
$messages['error_template_is_default'] = 'Ulkoasua "%s" ei voida poistaa, koska se on asetettu vakioulkoasuksi uusia blogeja varten';

// Lisää ulkoasu
$messages['global_template_package_help'] = 'Käytä tätä vaihtoehtoa lisätäksesi uuden ulkoasun, joka on kaikkien blogien käytössä koko sivustolla. Jos lisääminen ei onnistu käyttäen tätä vaihtoehtoa, lisää se käsin <b>%s</b> -kansioon, joka on kansio minne globaalit ulkoasut tallennetaan ja klikkaa "<b>Etsi ulkoasuja</b>" nappulaa. pLog tutkii kansion ja lisää löytämänsä uudet ulkoasut listaan';

// Globaalit asetukset
$messages['site_config_saved_ok'] = 'Sivuston asetukset tallennettu onnistuneesti';
$messages['error_saving_site_config'] = 'Sivuston asetuksien tallentamisessa tapahtui virhe';
/// general settings
$messages['help_comments_enabled'] = 'Kommentointi päällä uusissa blogeissa [Vakio = Kyllä]';
$messages['help_beautify_comments_text'] = 'Jos päällä, käyttäjien kirjoittamat kommentit "kaunistetaan" lisäämällä kappalejako ja linkitys hyperlinkkeihin [Vakio = Kyllä]';
$messages['help_temp_folder'] = 'pLogin käyttämä väliaikainen temp-kansio. Käytä web-serveripuun (public_html) ulkopuolella olevaa kansiota parannetun turvallisuuden saavuttamiseksi [Vakio = ./tmp]';
$messages['help_base_url'] = 'PerusURL, jonne pLog on asennettu';
$messages['help_subdomains_enabled'] = 'Kytke päälle alidomainit. Katso dokumentoinnista lisäinformaatiota alidomaineista [Vakio = Ei]';
$messages['help_subdomains_base_url'] = 'Kun alidomainit ovat päällä, tätä perusURL:lää käytetään base_urlin sijasta. Käytä {blogname} saadaksesi blogin nimen ja {username} saadaksesi käyttäjän nimen, joka omistaa blogin generoidaksesi linkin blogiin (esim. http://{blogname}.yourdomain.com)';
$messages['help_include_blog_id_in_url'] = 'Tarvitaan vain kun alidomainit ovat päällä ja "normaalit" URLit ovat päällä. Pakottaa sisäisesti generoidut URLit olemaan ilmane "blogId" -parameteria. Älä vaihda, ellet tiedä mitä teet [Vakio = Kyllä]';
$messages['help_script_name'] = 'Jos sinun täytyy muuttaa index.php joksikin muuksi [Vakio = index.php]';
$messages['help_show_posts_max'] = 'Pääsivulla näytettävien viestien maksimimäärä. Koskee vain uusia blogeja [Vakio = 15]';
$messages['help_recent_posts_max'] = 'Viimeisimpinä näytettyjen viestien lukumäärä pääsivulla. Koskee vain uusia blogeja [Vakio = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Ominaisuus joka sallii luonnosten tallentamisen Javascriptin ja XmlHttpRequestin kautta [Vakio = Kyllä]';
$messages['help_locale_folder'] = 'Kielitiedostojen tallennuspaikka [Vakio = ./locale]';
$messages['help_default_locale'] = 'Vakiokieli uusille blogeille [Vakio = en_UK]';
$messages['help_default_blog_id'] = 'Blogi, joka näytetään jos muuta ei ole määritelty [Vakio = 1]';
$messages['help_default_time_offset'] = 'Vakioaikaero uusille blogeille [Vakio = 0]';
$messages['help_html_allowed_tags_in_comments'] = 'Välilyönnillä erotettu lista HTML-tageista, jotka sallitaan kommenteissa [Vakio = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'Tallennetaanko viittaajat (referers) tietokantaan vai ei?. Aseta pois päältä paremman suorituskyvyn saamiseksi [Vakio = Kyllä]';
$messages['help_show_more_enabled'] = 'Käytetäänkö "Lisää..." -ominaisuutta uusissa blogeissa? [Vakio = Kyllä]';
$messages['help_update_article_reads'] = 'Käytetäänkö laskuria laskemaan kertoja kun artikkeli on päivitetty tai luettu? Aseta pois päältä paremman suorituskyvyn saamiseksi [Vakio = Kyllä]';
$messages['help_update_cached_article_reads'] = 'Käytetäänkö laskuria laskemaan viestin lukukertoja vaikka välimuisti olisi päällä? [Vakio = Kyllä]';
$messages['help_xmlrpc_ping_enabled'] = 'Lähetetäänkö XMLRPC pingejä sivuille, jotka tukevat tätä ominaisuutta? [Vakio = Kyllä]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Asetetaanko tämä ominaisuus päälle vai pois päältä vakiona, kun viestejä päivitetään tai lisätään? [Vakio = Kyllä]';
$messages['help_xmlrpc_ping_hosts'] = 'URL, joka osoittaa XMLRPC -käyttöliittymään sivuilla, jotka tukevat XMLRPC ping -spesifikaatioita. Aseta jokainen URL omalle rivilleen [Vakio = http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = 'Otetaanko tulevat trackbackit vastaan vai ei? [Vakio = Kyllä]';
$messages['help_htmlarea_enabled'] = 'Käytetäänkö WYSIWYG-editoria uusissa blogeissa? [Vakio = Kyllä]';
$messages['help_plugin_manager_enabled'] = 'Käytetäänkö plugineita vai ei? [Vakio = Kyllä]';
$messages['help_minimum_password_length'] = 'Salasanojen minimipituus [Vakio = 4]';
$messages['help_xhtml_converter_enabled'] = 'Jos laitetaan päälle, pLog yrittää muuntaa HTML-koodin kunnolliseksi XHTML-koodiksi [Vakio = Kyllä]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'Jos kytketty päälle, pLog yrittää aggressiivisemmin tehdä HTML-koodista XHTML-koodia, mutta koodi on taipuvainen virheisiin [Vakio = Ei]';
$messages['help_session_save_path'] = 'Käytä tätä asetusta vaihtaaksesi kansiota, jonne pLog tallentaa istunnon tiedot käyttäen PHP-funktiota session_save_path() Tarkasta, että webserveri voi kirjoittaa kansioon. Jätä tyhjäksi käyttääksesi PHP:n vakioistuntokansiota [Vakio = (tyhjä)]';
// summary settings
$messages['help_summary_page_show_max'] = 'Yhteenvetosivulla näytettävien kohteiden määrä. Tämä asetus kontrolloi kaikkia kohteita yhteenvetosivulla (viimeisimmät viestit, aktiivisimmat blogit jne.) [Vakio = 10]';
$messages['help_summary_blogs_per_page'] = 'Blogien määrä per yksi sivu blogilistassa [Vakio = 25]';
$messages['help_forbidden_usernames'] = 'Käyttäjänimet, joita ei hyväksytä käyttäjää rekisteröitäessä erotettuna välilyönnillä [Vakio = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = 'Vain yksi blogi per yksi sähköpostiosoite [Vakio = Ei]';
$messages['help_summary_show_agreement'] = 'Näytä käyttöehdot ja hyväksytä se kaikillä uusilla käyttäjillä [Vakio = Kyllä]';
$messages['help_need_email_confirm_registration'] = 'Pakota uudet käyttäjät aktivoimaan tunnuksensa klikkaamalla heille lähetetyn sähköpostiviestin linkkiä [Vakio = Yes]';
$messages['help_summary_disable_registration'] = 'Saavatko käyttäjät rekisteröidä uusia blogeja tälle sivustolle? [Vakio = Kyllä]';
// ulkoasut
$messages['help_template_folder'] = 'Kansio jonne ulkoasut tallennetaan [Vakio = ./templates]';
$messages['help_default_template'] = 'Vakioulkoasu uusille blogeille [Vakio = standardi]';
$messages['help_users_can_add_templates'] = 'Salli käyttäjien lisätä omia ulkoasuja [Vakio = Kyllä]';
$messages['help_template_compile_check'] = 'Jos poissa päältä Smarty tarkastaa joka kerta, jos ulkoasutiedostot ovat muuttuneet. Jos Smarty havaitsee muutoksen, käytetään uudempaa versiota. Ota tämä pois käytöstä paremman suorituskyvyn saavuttamiseksi [Vakio = Kyllä]';
$messages['help_template_cache_enabled'] = 'Ota käyttöön ulkoasuvälimuisti. Jos tämä on kytketty päälle käytetään välimuistista haettua versiota sivuista. Dataa ei haeta välimuistista ja ulkoasuja ei tarvitse muodostaa uudestaan. [Vakio = Kyllä]';
$messages['help_template_cache_lifetime'] = 'Välimuistin elinaika sekunteina. Aseta -1:ksi niin välimuisti ei vanhene koskaan. Jos asetettu 0:ksi välimuistia ei käytetä, mutta on suositeltavaa asettaa template_cache_enabled pois päältä ottaaksesi välimuistin pois päältä [Vakio = 0]';
$messages['help_template_http_cache_enabled'] = 'Salli tuki ehdollisille HTTP-pyynnöille. Jos päällä pLog ottaa "If-Modified-Since" HTTP headerin huomioon ja lähettää sisällön vain jos sitä todella tarvitaan. Salli käyttö säästääksesi kaistaa [Vakio = Ei]';
$messages['help_allow_php_code_in_templates'] = 'Sallii upotetun natiivin PHP-koodin Smarty ulkoasuissa sulkujen {php}...{/php} sisällä [Vakio = Ei]';
// URLit
$messages['help_request_format_mode'] = 'Valitse yksi saatavilla olevista URL-formaateista. Jos käytät kustomoituja URL-osoitteita, konfiguroi asetukset alapuolella [Vakio = Tavanomainen]';
$messages['plain'] = 'Tavanomainen';
$messages['search_engine_friendly'] = 'Hakukoneystävällinen';
$messages['custom_url_format'] = 'Kustomoidut URLit';
$messages['help_permalink_format'] = 'Kiinteiden linkkien tyyli käytettäessä kustomoituja URLeja [Vakio = /blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = 'Linkkien, jotka viittaavat kategorioihin, tyyli käytettäessä kustomoituja URLeja [Vakio = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'Linkkien, jotka viittaavat blogeihin, tyyli käytettäessä kustomoituja URLeja [Vakio = /blog/{blogname}$]';
$messages['help_archive_link_format'] = 'Linkkien, jotka viittaavat arkistoihin, tyyli käytettäessä kustomoituja URLeja [Vakio = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'Linkkien, jotka viittaavat tietyn käyttäjän viesteihin, tyyli käytettäessä kustomoituja URLeja [Vakio = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'Linkkien, jotka viittaavat trackbacksivulle, tyyli käytettäessä kustomoituja URLeja [Vakio = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'Linkkien, jotka viittaavat kustomoituun staattiseen ulkoasusivuun, tyyli käytettäessä kustomoituja URLeja [Vakio = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'Linkkien, jotka viittaavat albumeihin, tyyli käytettäessä kustomoituja URLeja [Vakio = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'Linkkien, jotka viittaavat resurssisivuihin (jotka sisältävät tiedostoja), tyyli käytettäessä kustomoituja URLeja [Vakio = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'Linkkien, jotka viittaavat resurssien esikatseluun, tyyli käytettäessä kustomoituja URLeja [Vakio = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'Linkkien, jotka viittaavat keskikokoisiin resurssien esikatseluihin, tyyli käytettäessä kustomoituja URLeja [Vakio = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'Linkkien, jotka viittaavat tiedostoihin, tyyli käytettäessä kustomoituja URLeja [Vakio = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// Sähköposti
$messages['help_check_email_address_validity'] = 'Tarkistettaessa sähköpostiosoitetta tee muutamia perustarkastuksia selvittääksesi onko MX record olemassa annetulla domain-nimellä ja onko sähköpostiosoite oikeasti olemassa oleva postilaatikko [Vakio = Ei]';
$messages['help_email_service_enabled'] = 'Lähetetäänkö sähköpostiviestejä vai ei? [Vakio = Kyllä]';
$messages['help_post_notification_source_address'] = 'Sähköpostiosoite, joka näkyy sähköpostiviestin saajalla lähettäjänä, kun pLog lähettää viestejä [Vakio = noreply@your.host.com]';
$messages['help_email_service_type'] = 'Mitä systeemiä käytetään sähköpostiviestien lähettämiseen [Vakio = PHP]';
$messages['help_smtp_host'] = 'Jos käytetään SMTP:tä sähköpostin lähetykseen, aseta tämä SMTP-serveriksi, jota käytetään viestien lähettämiseen [Vakio = (tyhjä)]';
$messages['help_smtp_port'] = 'Jos SMTP-serveri käyttää jotain muuta porttia kuin 25, muuta tämä arvo vastaamaan käytettyä porttia [Vakio = (tyhjä)]';
$messages['help_smtp_use_authentication'] = 'Tarvitseeko STMP-serveri perusautentikointia? [Vakio = Ei]';
$messages['help_smtp_username'] = 'Jos SMTP-serveri vaatii autentikointia, kirjoita tähän käyttäjätunnus [Vakio = (tyhjä)]';
$messages['help_smtp_password'] = 'Jos SMTP-serveri vaatii autentikointia, kirjoita tähän käyttäjätunnuksen salasana [Vakio = (tyhjä)]';
// avustajat
$messages['help_path_to_tar'] = 'Kansiopolku tar-työkaluun, tarvitaan purkamaan ulkoasutiedostoja päätteellä .tar.gz tai tar.bz2 [Vakio = /bin/tar]';
$messages['help_path_to_gzip'] = 'Kansiopolku gzip-työkaluun, tarvitaan purkamaan ulkoasutiedostoja päätteellä .tar.gz [Vakio = /bin/gzip]';
$messages['help_path_to_bz2'] = 'Kansiopolku bzip2-työkaluun, tarvitaan purkamaan ulkoasutiedostoja päätteellä .tar.bz2 [Vakio = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = 'Kansiopolku unzip-työkaluun, tarvitaan purkamaan ulkoasutiedostoja päätteellä .zip [Vakio = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'Käytä mukana tullutta PHP:n natiivia purkamaan zip-tiedostot [Vakio = Ei]';
// Lisäämiset (uploads)
$messages['help_uploads_enabled'] = 'Sallitaanko käyttäjien lisätä tiedostoja. Tämä koskettaa resurssiosuutta, kustomoitujen ulkoasujen ja kielien lisäämistä [Vakio = Kyllä]';
$messages['help_maximum_file_upload_size'] = 'Tiedoston maksimikoko bitteinä. Tämä koko ei ole ikinä suurempi kuin PHP:n oma rajoitus [Vakio = 2000000]';
$messages['help_upload_forbidden_files'] = 'Välilyönnillä erotettu lista tiedostotyypeistä, joiden lisäämistä ei sallita. Voit käyttää jokereita: \'*\' ja \'?\' [Vakio = *.php *.php3 *.php4 *.phtml]';
// Käyttöliittymät
$messages['help_xmlrpc_api_enabled'] = 'Salli tai estä XMLRPC:n yhteys blogeihin [Vakio = Kyllä]';
$messages['help_rdf_enabled'] = 'Salli tietojen yhdistäminen Atom tai RSS -feedien kautta [Vakio = Kyllä]';
$messages['help_default_rss_profile'] = 'Tietojen yhdistämisessä käytetään perusversiota RSS tai Atom -feedeistä ellei toisin määritellä [Vakio = RSS 1.0]';
// Turvallisuus
$messages['help_security_pipeline_enabled'] = 'Ota security pipeline ja kaikki siihen liittyvät filtterit käyttöön. Tämä vaikuttaa myös plugineihin, jotka rekisteröivät uusia filttereitä [Vakio = Kyllä]';
$messages['help_ip_address_filter_enabled'] = 'Ota IP-osoitefiltteri käyttöön. Security pipelinen on oltava päällä tämän ominaisuuden toimimiseksi. [Vakio = Kyllä]';
$messages['help_content_filter_enabled'] = 'Ota regular expression-based sisältöfiltteri käyttöön. Security pipelinen on oltava päällä tämän ominaisuuden toimimiseksi. [Vakio = Kyllä]';
$messages['help_maximum_comment_size'] = 'Kommenttien maksimikoko bitteinä. Aseta 0:ksi ottaakseni tämän ominaisuuden pois köytöstä [Vakio = 0]';
// bayesian filtteri
$messages['help_bayesian_filter_enabled'] = 'Ota Bayesian filtteri käyttöön paremman automaattisen spam-filtteröinnin saavuttamiseksi [Vakio = Kyllä]';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'Maksimikynnys, jota ennen kommenttia ei lasketa spammiksi [Vakio = 0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'Minimikynnys, jonka ylittäviä viestejä ei lasketa spammiksi [Vakio = 0.2]';
$messages['help_bayesian_filter_min_length_token'] = 'Lyhin sanan merkkimäärä, jolloin Bayesian filtteri alkaa toimia [Vakio = 3]';
$messages['help_bayesian_filter_max_length_token'] = 'Pisin sanan merkkimäärä, jolloin Bayesian filtteri vielä tutkii sanan [Vakio = 100]';
$messages['help_bayesian_filter_number_significant_tokens'] = 'Merkityksellisten merkkien määrä [Vakio = 15]';
$messages['help_bayesian_filter_spam_comments_action'] = 'Mitä tehdään spammiksi merkatuille kommenteille? Käytä "Poista" -asetusta vain, jos filtteri on opetettu oikein [Vakio = Pidä]';
$messages['keep_spam_comments'] = 'Pidä tietokannassa merkattuna spammiksi';
$messages['throw_away_spam_comments'] = 'Poista (Älä tallenna)';
// Resurssit
$messages['help_resources_enabled'] = 'Ota käyttöön resurssit? [Vakio = Kyllä]';
$messages['help_resources_folder'] = 'Kansio, jossa resursseja säilytetään. Aseta webserveripuun ulkopuolelle (public_html) paremman turvallisuuden saavuttamiseksi [Vakio = ./gallery]';
$messages['help_thumbnail_method'] = 'Millä metodilla esikatsekuvat muodostetaan? Jos käytetään PHP:tä, tuki GD:lle vaaditaan [Vakio = PHP]';
$messages['help_path_to_convert'] = 'Convert-työkalun kansiopolku (ImageMagick-paketti). Vaaditaan, jos esikatselukuvan muodostamiseksi valittu "ImageMagick" [Vakio = /usr/bin/convert]';
$messages['help_thumbnail_format'] = 'Missä formaatissa esikatselukuvat tallennetaan? [Vakio = sama kuin kuva]';
$messages['help_thumbnail_height'] = 'Pienien esikatselukuvien korkeus [Vakio = 120]';
$messages['help_thumbnail_width'] = 'Pienien esikatselukuvien leveys [Vakio = 120]';
$messages['help_medium_size_thumbnail_height'] = 'Keskikokoisten esikatselukuvien korkeus [Vakio = 480]';
$messages['help_medium_size_thumbnail_width'] = 'Keskikokoisten esikatselukuvien leveys [Vakio = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'Säilytä kuvasuhde esikatselukuvia generoidessa. Saattaa muodostaa suurempia esikatselukuvia kuin yläpuolella on määritelty, mutta laatu on parempi [Vakio = Kyllä]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'Pakota pLog käyttämään vain GD1-funktioita [Vakio = Ei]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'Kuvien pehmentämistä varten käytettävä algoritmi. Käytetään vain, kun esikatselukuvien muodostamismetodi on GD [Vakio = PHP Imagecopyresampled]';
$messages['help_resources_quota'] = 'Globaali resurssiquota blogeille bitteinä (esim. 5242880 Bittiä = 5MT), tai käytä 0:llaa rajoittamana quotana [Vakio = 0]';
$messages['help_resource_server_http_cache_enabled'] = 'Ota käyttöön tuki headerille: "If-Modified-Since" HTTP:n ehdollisille pyynnöille. Säästää siirtokaistaa [Vakio = Ei]';
$messages['help_resource_server_http_cache_lifetime'] = 'Aika mikrosekunneissa, jolloin asiakkaiden pitäisi käyttää resurssien välimuistissa olevaa versiota [Vakio = 9999999]';
$messages['same_as_image'] = 'Sama kuin alkuperäinen kuva';
// Haku
$messages['help_search_engine_enabled'] = 'Ota hakukone käyttöön [Vakio = Kyllä]';
$messages['help_search_in_custom_fields'] = 'Hae kustomoiduista kentistä [Vakio = Kyllä]';
$messages['help_search_in_comments'] = 'Hae kommenteista [Vakio = Kyllä]';

// Puhdistaminen
$messages['purge'] = 'Poista';
$messages['cleanup_spam'] = 'Poista spammit';
$messages['cleanup_spam_help'] = 'Tämä poistaa kaikki kommentit, jotka käyttäjät ovat merkanneet spammiksi. Poistettuja kommentteja ei ole mahdollista palauttaa';
$messages['spam_comments_purged_ok'] = 'Spam-kommentit poistettu onnistuneesti';
$messages['cleanup_posts'] = 'Siivoa viestit';
$messages['cleanup_posts_help'] = 'Tämä poistaa kaikki viestit, jotka käyttäjät ovat poistaneet (merkitty poistetuiksi). Poistettuja viestejä ei ole mahdollista palauttaa';
$messages['posts_purged_ok'] = 'Viestien siivoaminen onnistui';

/// yhteenveto///
// etusivu
$messages['summary'] = 'Yhteenveto';
$messages['register'] = 'Rekisteröidy';
$messages['summary_welcome'] = 'Tervetuloa!';
$messages['summary_most_active_blogs'] = 'Aktiivisimmat blogit';
$messages['summary_most_commented_articles'] = 'Kommentoiduimmat viestit';
$messages['summary_most_read_articles'] = 'Luetuimmat viestit';
$messages['password_forgotten'] = 'Unohditko salasanasi?';
$messages['summary_newest_blogs'] = 'Uusimmat blogit';
$messages['summary_latest_posts'] = 'Viimeisimmät viestit';
$messages['summary_search_blogs'] = 'Etsi blogeista';

// blogilista
$messages['updated'] = 'Päivitetty';
$messages['total_reads'] = 'Yhteensä';

// blogiprofile
$messages['blog'] = 'Blogi';
$messages['latest_posts'] = 'Viimeisimmät viestit';

// registration
$messages['register_step0_title'] = 'Käyttöehtosopimus';
$messages['agreement'] = 'Sopimus'; 
$messages['decline'] = 'En hyväksy';
$messages['accept'] = 'Hyväksyn';
$messages['read_service_agreement'] = 'Ole ystävällinen ja lue palvelun käyttöehdot ja klikkaa "hyväksy", jos hyväksyt käyttöehdot';
$messages['register_step1_title'] = 'Luo käyttäjä [1/4]';
$messages['register_step1_help'] = 'Ensimmäiseksi sinun täytyy tehdä uusi käyttäjä saadaksesi blogin. Tämä käyttäjä omistaa blogin ja hänellä on oikeus käyttää kaikkia blogin toimintoja';
$messages['register_next'] = 'Seuraava';
$messages['register_back'] = 'Edellinen';
$messages['register_step2_title'] = 'Luo blogi [2/4]';
$messages['register_blog_name_help'] = 'Uuden blogisi nimi';
$messages['register_step3_title'] = 'Valitse ulkoasu [3/4]';
$messages['step1'] = 'Kohta 1';
$messages['step2'] = 'Kohta 2';
$messages['step3'] = 'Kohta 3';
$messages['register_step3_help'] = 'Valitse yksi ulkoasuista blogisi vakioulkoasuksi. Sen voi aina vaihtaa toiseen, jos kyllästyt tähän vaihtoehtoon';
$messages['error_must_choose_template'] = 'Ole hyvä ja valitse yksi ulkoasu';
$messages['select_template'] = 'Valitse ulkoasu';
$messages['register_step5_title'] = 'Onnittelut! [4/4]';
$messages['finish'] = 'Valmis';
$messages['register_need_confirmation'] = 'Sähköpostiviesti on lähetetty antamaasi sähköpostiosoitteeseen. Se sisältää aktivointilinkin. Ole hyvä ja klikkaa linkkiä kun saat sähköpostiviestin. Tämän jälkeen käyttäjätunnuksesi on aktivoitu';
$messages['register_step5_help'] = 'Onnittelut, käyttäjätunnuksesi ja blogisi on onnistuneesti luotu!';
$messages['register_blog_link'] = 'Jos haluat katsoa uutta blogiasi, pääset sinne tästä linkistä: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'Jos haluat kirjoittaa välittömästi ensimmäisen viestin <a href="admin.php">klikkaa tästä</a>';
$messages['register_error'] = 'Prosessin jossain vaiheessa tapahtui virhe';
$messages['error_registration_disabled'] = 'Valitettavasti tämä sivusto ei salli uusia blogirekisteröintejä';
// registration article topic and text
$messages['register_default_article_topic'] = 'Onnittelut!';
$messages['register_default_article_text'] = 'Jos pystyt lukemaan tämän viestin, se tarkoittaa, että rekisteröintiprosessi onnistui ja voit aloittaa blogaamisen';
$messages['register_default_category'] = 'Yleistä';
// confirmation email
$messages['register_confirmation_email_text'] = 'Ole hyvä klikkaa linkkiä aktivoidaksesi tunnuksesi:

%s

Hauskaa päivänjatkoa';
$messages['error_invalid_activation_code'] = 'Valitettavasti aktivointikoodi oli väärä';
$messages['blog_activated_ok'] = 'Onnittelut, käyttäjätunnuksesi ja blogisi on aktivoitu!';
// unohditko salasanasi?
$messages['reset_password'] = 'Nollaa salasana';
$messages['reset_password_username_help'] = 'Käyttäjän nimi, jonka salasanan haluat nollata';
$messages['reset_password_email_help'] = 'Sähköpostiosoite, jota käytettiin käyttäjän rekisteröintiin';
$messages['reset_password_help'] = 'Jos et muista salanasaasi, käytä tätä lomaketta salasanan nollaukseen. Kirjoita käyttäjän nimi ja sähköpostiosoite, jota käytettiin käyttäjän rekisteröintiin';
$messages['error_resetting_password'] = 'Salasanan nollauksessa tapahtui virhe. Tarkasta antamasi tiedot ja yritä uudelleen';
$messages['reset_password_error_incorrect_email_address'] = 'Sähköpostiosoite ei ole moitteeton tai se ei ole sama, jota käytettiin käyttäjän rekisteröintiin';
$messages['password_reset_message_sent_ok'] = 'Sähköpostiviesti lähetettiin sinulle. Se sisältää linkin, jota klikkaamalla voit nollata salasanasi';
$messages['error_incorrect_request'] = 'URLin parametrit eivät ole oikeat';
$messages['change_password'] = 'Aseta uusi salasana';
$messages['change_password_help'] = 'Kirjoita ja vahvista uusi salasanasi';
$messages['new_password'] = 'Uusi salasana';
$messages['new_password_help'] = 'Kirjoita tähän uusi salasanasi';
$messages['password_updated_ok'] = 'Salasanasi on päivitetty onnistuneesti';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'Tämä sivu näyttää paljaalta ja tyylittömältä, koska et käytä sopivaa selainta. Nähdäksesi sen parhaassa muodossaan <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">päivitä</a> selaimesi tukemaan webstandardeja. Se on ilmaista ja helppoa.';
$messages['jump_to_navigation'] = 'Navigoi.';
$messages['comment_email_never_display'] = 'Rivi ja kappalejaot automaattisesti, sähköpostiosoitetta ei näytetä ikinä.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> allowed: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = 'The <acronym title="Uniform Resource Identifier">URI</acronym> to trackback this entry is: ';
$messages['previous_post'] = 'Edellinen';
$messages['next_post'] = 'Seuraava';
$messages['comment_default_title'] = '(Untitled)';
$messages['guestbook'] = 'Vieraskirja';
$messages['trackbacks'] = 'Trackbacks';
$messages['menu'] = 'Menu';
$messages['albums'] = 'Albumit';
$messages['admin'] = 'Admin';
?>
