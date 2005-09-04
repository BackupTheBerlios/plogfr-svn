<?php
// Suomen kieli pLogiin, k��nt�j�n� Jussi Salomaa http://www.ilmasuojassa.org
// aseta t�m� koodaustyypiksi, jotta sivut n�kyv�t oikein
$messages['encoding'] = 'iso-8859-1';
$messages['locale_description'] = 'Suomen kieli pLogiin';
// aikaformaatti, katso Locale::formatDate lis�tietoa varten
$messages['date_format'] = '%d/%m/%Y %H:%M';

// viikonp�iv�t
$messages['days'] = Array( 'Sunnuntai', 'Maanantai', 'Tiistai', 'Keskiviikko', 'Torstai', 'Perjantai', 'Lauantai' );
// -- Yhteensopivuutta, �l� koske -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( 'Su', 'Ma', 'Ti', 'Ke', 'To', 'Pe', 'La' );
// -- Yhteensopivuutta, �l� koske -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// kuukaudet
$messages['months'] = Array( 'Tammikuu', 'Helmikuu', 'Maaliskuu', 'Huhtikuu', 'Toukokuu', 'Kes�kuu', 'Hein�kuu', 'Elokuu', 'Syyskuu', 'Lokakuu', 'Marraskuu', 'Joulukuu' );
// -- Yhteensopivuutta, �l� koske -- //
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

// sekalaista teksti�
$messages['of'] = 'of';
$messages['recently'] = 'Hetki sitten...';
$messages['comments'] = 'Kommentti(a)';
$messages['comment on this'] = 'Kommentoi';
$messages['my_links'] = 'Linkkini';
$messages['archives'] = 'Arkisto';
$messages['search'] = 'Haku';
$messages['calendar'] = 'Kalenteri';
$messages['search_s'] = 'Haku';
$messages['search_this_blog'] = 'Etsi t�st� blogista:';
$messages['about_myself'] = 'Kuka min� olen?';
$messages['permalink_title'] = 'Pysyv� linkki arkistoon';
$messages['permalink'] = 'Pysyv� linkki';
$messages['posted_by'] = 'Kirjoitti';
$messages['reply'] = 'Vastaa';

// kommentinlis�yssivu
$messages['add_comment'] = 'Lis�� kommentti';
$messages['comment_topic'] = 'Aihe';
$messages['comment_text'] = 'Teksti';
$messages['comment_username'] = 'Nimesi';
$messages['comment_email'] = 'S�hk�postiosoitteesi';
$messages['comment_url'] = 'Kotisivusi';
$messages['comment_send'] = 'L�het�';
$messages['comment_added'] = 'Kommentti lis�tty!';
$messages['comment_add_error'] = 'Virhe kommenttia lis�tess�';
$messages['article_does_not_exist'] = 'Artikkelia ei ole olemassa';
$messages['no_posts_found'] = 'Yht��n viesti� ei l�ytynyt';
$messages['user_has_no_posts_yet'] = 'K�ytt�j� ei ole lis�nnyt yht��n viesti�';
$messages['back'] = 'Takaisin';
$messages['post'] = 'viesti';
$messages['trackbacks_for_article'] = 'Trackbackit artikkeliin: ';
$messages['trackback_excerpt'] = 'Excerpt';
$messages['trackback_weblog'] = 'Weblog';
$messages['search_results'] = 'Hakutulokset';
$messages['search_matching_results'] = 'Seuraavat viestit osuvat hakutuloksiisi: ';
$messages['search_no_matching_posts'] = 'Yht��n sopivaa viesti� ei l�ytynyt';
$messages['read_more'] = '(Lis��...)';
$messages['syndicate'] = 'Syndikaatti';
$messages['main'] = 'P��sivu';
$messages['about'] = 'Tietoa';
$messages['download'] = 'Lataa';

////// Virheviestit /////
$messages['error_fetching_article'] = 'Artikkelia ei l�ytynyt';
$messages['error_fetching_articles'] = 'Artikkeleita ei voitu noutaa';
$messages['error_trackback_no_trackback'] = 'Trackbackeja ei l�ytynyt t�lle artikkelille';
$messages['error_incorrect_article_id'] = 'Artikkelin identifiointi ei ole oikea';
$messages['error_incorrect_blog_id'] = 'Blogin identifiointi ei ole oikea';
$messages['error_comment_without_text'] = 'Sinun pit�isi ainakin tuottaa v�h�n teksti�';
$messages['error_comment_without_name'] = 'Sinun pit�isi ainakin antaa lempinimesi tai nimesi';
$messages['error_adding_comment'] = 'Kommenttia lis�tess� tuli virhe';
$messages['error_incorrect_parameter'] = 'V��r� parametri';
$messages['error_parameter_missing'] = 'Yksi parametri puuttuu pyynn�st�';
$messages['error_comments_not_enabled'] = 'Kommentointi on otettu pois k�yt�st�';
$messages['error_incorrect_search_terms'] = 'Hakutermisi eiv�t olleet kunnollisia';
$messages['error_no_search_results'] = 'Hakusi ei tuottanut tulosta';
$messages['error_no_albums_defined'] = 'T�ss� blogissa ei ole albumeja';

/////////////////                                          //////////////////
///////////////// Admin-paneeli														 //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Kirjautuminen';
$messages['welcome_message'] = 'Tervetuloa pLogiin';
$messages['error_incorrect_username_or_password'] = 'V��r� k�ytt�j�nimi tai salasana';
$messages['error_dont_belong_to_any_blog'] = 'Sinulle ei ole viel� asetettu mit��n blogia';
$messages['logout_message'] = 'Olet onnistuneesti kirjautunut ulos';
$messages['logout_message_2'] = 'Klikkaa <a href="%1$s">t�st�</a> menn�ksesi %2$s</a>';
$messages['error_access_forbidden'] = 'Sis��np��sy kielletty. Kirjaudu ensin sis��n';
$messages['username'] = 'K�ytt�j�nimi';
$messages['password'] = 'Salasana';

// dashboard
$messages['dashboard'] = 'Kojelauta';
$messages['recent_articles'] = 'Viimeisimm�t viestit';
$messages['recent_comments'] = 'Viimeisimm�t kommentit';
$messages['recent_trackbacks'] = 'Viimeisimm�t trackbackit';
$messages['blog_statistics'] = 'Blogin statistiikka';
$messages['total_posts'] = 'Viestien kokonaism��r�';
$messages['total_comments'] = 'Kommenttien kokonaism��r�';
$messages['total_trackbacks'] = 'Trackbackien kokonaism��r�';
$messages['total_viewed'] = 'Luettuja viestej�';
$messages['in'] = 'In';

// menu options
$messages['newPost'] = 'Uusi viesti';
$messages['Manage'] = 'Hallitse';
$messages['managePosts'] = 'Hallitse viestej�';
$messages['editPosts'] = 'Viestit';
$messages['editArticleCategories'] = 'Kategoriat';
$messages['newArticleCategory'] = 'Uusi kategoria';
$messages['manageLinks'] = 'Hallitse linkkej�';
$messages['editLinks'] = 'Linkit';
$messages['newLink'] = 'Uusi linkki';
$messages['editLink'] = 'Muokkaa linkki�';
$messages['editLinkCategories'] = 'Linkkikategoriat';
$messages['newLinkCategory'] = 'Uusi linkkikategoria';
$messages['editLinkCategory'] = 'Muokkaa linkkikategorioita';
$messages['manageCustomFields'] = 'Hallitse omia kentti�';
$messages['blogCustomFields'] = 'Omat kent�t';
$messages['newCustomField'] = 'Uusi oma kentt�';
$messages['resourceCenter'] = 'Resurssit';
$messages['resources'] = 'Resurssit';
$messages['newResourceAlbum'] = 'Uusi albumi';
$messages['newResource'] = 'Uusi resurssi';
$messages['controlCenter'] = 'Asetukset';
$messages['manageSettings'] = 'Asetukset';
$messages['blogSettings'] = 'Blogin asetukset';
$messages['userSettings'] = 'K�ytt�j�asetukset';
$messages['pluginCenter'] = 'Pluginkeskus';
$messages['Stats'] = 'Statistiikkaa';
$messages['manageBlogUsers'] = 'Hallitse k�ytt�ji�';
$messages['newBlogUser'] = 'Uusi blogin k�ytt�j�';
$messages['showBlogUsers'] = 'Blogin k�ytt�j�t';
$messages['manageBlogTemplates'] = 'Hallitse Blogin ulkoasuja';
$messages['newBlogTemplate'] = 'Uusi ulkoasu';
$messages['blogTemplates'] = 'Blogin ulkoasut';
$messages['adminSettings'] = 'Administration';
$messages['Users'] = 'K�ytt�j�t';
$messages['createUser'] = 'Luo k�ytt�j�';
$messages['editSiteUsers'] = 'Sivuston k�ytt�j�t';
$messages['Blogs'] = 'Hallitse blogeja';
$messages['createBlog'] = 'Tee uusi blogi';
$messages['editSiteBlogs'] = 'Blogit';
$messages['Locales'] = 'Hallitse kieli�';
$messages['newLocale'] = 'Uusi kieli';
$messages['siteLocales'] = 'Sivuston kielet';
$messages['Templates'] = 'Hallitse ulkoasuja';
$messages['newTemplate'] = 'Uusi ulkoasu';
$messages['siteTemplates'] = 'Sivuston ulkoasut';
$messages['GlobalSettings'] = 'Globaalit asetukset';
$messages['editSiteSettings'] = 'Yleist�';
$messages['summarySettings'] = 'Yhteenveto';
$messages['templateSettings'] = 'Ulkoasut';
$messages['urlSettings'] = 'URLit';
$messages['emailSettings'] = 'S�hk�posti';
$messages['uploadSettings'] = 'Uploadit';
$messages['helpersSettings'] = 'Ulkoiset avustajat';
$messages['interfacesSettings'] = 'K�ytt�liittym�t';
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
$messages['text_help'] = 'Viestin teksti, t�m� n�kyy aina etusivulla';
$messages['extended_text'] = 'Jatkettu teksti';
$messages['extended_text_help'] = 'Viestin jatkettu teksti. T�m� voi n�ky� asetuksista riippuen joko p��sivulla tai viestin omalla sivulla. Katso blogin asetuksista lis�� informaatiota';
$messages['post_slug'] = 'Slug';
$messages['post_slug_help'] = 'Slugia k�ytet��n luomaan kauniita pysyvi� linkkej�';
$messages['date'] = 'P�iv�';
$messages['post_date_help'] = 'P�iv� jolloin viesti julkaistaan';
$messages['status'] = 'Status';
$messages['post_status_help'] = 'Valitse yksi statuksista';
$messages['post_status_published'] = 'Julkaistu';
$messages['post_status_draft'] = 'Luonnos';
$messages['post_status_deleted'] = 'Poistettu';
$messages['categories'] = 'Kategoriat';
$messages['post_categories_help'] = 'Valitse yksi tai useampi kategoria';
$messages['post_comments_enabled_help'] = 'Salli kommentit';
$messages['send_notification_help'] = 'Ilmoitus uusista kommenteista';
$messages['send_trackback_pings_help'] = 'L�het� trackback';
$messages['send_xmlrpc_pings_help'] = 'L�het� XMLRPC pingi';
$messages['save_draft_and_continue'] = 'Tallenna luonnos';
$messages['preview'] = 'Esikatselu';
$messages['add_post'] = 'L�het�';
$messages['error_saving_draft'] = 'Luonnoksen tallentamisessa tapahtui virhe';
$messages['draft_saved_ok'] = 'Luonnos talletettiin onnistuneesti';
$messages['error_sending_request'] = 'Pyynn�n l�hett�misess� tapahtui virhe';
$messages['error_no_category_selected'] = 'Valitse ainakin yksi kategoria';
$messages['error_missing_post_topic'] = 'Kirjoita viestin otsikko';
$messages['error_missing_post_text'] = 'Kirjoita jotain teksti� viestiin';
$messages['error_adding_post'] = 'Viestin lis��misess� tapahtui virhe';
$messages['post_added_not_published'] = 'Viesti lis�ttiin onnistuneesti, mutta ei julkaistu';
$messages['post_added_ok'] = 'Viesti lis�ttiin onnistuneesti';
$messages['send_notifications_ok'] = 'Ilmoitus l�hetet��n aina kun uusi kommentti tai trackback ilmestyy';

// send trackbacks
$messages['error_sending_trackbacks'] = 'Trackbackin l�hett�misess� tapahtui virhe';
$messages['send_trackbacks_help'] = 'Valitse ne URLit, jonne haluat l�hett�� trackbackin. Huomioi, ett� valitsemasi sivustot tukevat trackbacki�';
$messages['send_trackbacks'] = 'L�het� trackback';
$messages['ping_selected'] = 'Pingi valittu';
$messages['trackbacks_sent_ok'] = 'Trackback l�hetetty onnistuneesti';

// posts page
$messages['show_by'] = 'N�yt�';
$messages['category'] = 'Kategoria';
$messages['author'] = 'Julkaisija';
$messages['post_status_all'] = 'Kaikki';
$messages['author_all'] = 'Kaikki';
$messages['search_terms'] = 'Hakutermit';
$messages['show'] = 'N�yt�';
$messages['delete'] = 'Poista';
$messages['actions'] = 'Toiminnot';
$messages['all'] = 'Kaikki';
$messages['category_all'] = 'Kaikki';
$messages['error_incorrect_article_id'] = 'V��r� artikkelin identifiointi';
$messages['error_deleting_article'] = 'Virhen viestin "%s" poistamisessa';
$messages['article_deleted_ok'] = 'Viesti "%s" poistettiin onnistuneesti';
$messages['articles_deleted_ok'] = '%s viesti(�) poistettu onnistuneesti';
$messages['error_deleting_article2'] = 'Viestin "%s" poistamisessa oli ongelmia';

// edit post page
$messages['update'] = 'P�ivit�';
$messages['editPost'] = 'Muokkaa viesti�';
$messages['error_fetching_post'] = 'Viestin noutamisessa tapahtui virhe';
$messages['post_updated_ok'] = 'Viesti "%s" p�ivitetty onnistuneesti';
$messages['error_updating_post'] = 'Viestin p�ivityksess� tapahtui virhe';
$messages['notification_added'] = 'Saat ilmoituksen uusista kommenteista tai trackbackeist�';
$messages['notification_removed'] = 'Ilmoituksia viesteist� tai trackbackeist� ei l�hetet�';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = 'Kaikki';
$messages['comment_status_spam'] = 'Spammia';
$messages['comment_status_nonspam'] = 'Ei Spammia';
$messages['error_fetching_comments'] = 'Viestin kommenttien hakemisessa tapahtui virhe';
$messages['error_deleting_comments'] = 'Kommenttien poistamisessa tapahtui virhe tai yht��n kommenttia ei oltu valittu';
$messages['comment_deleted_ok'] = 'Kommentti "%s" poistettiin onnistuneesti';
$messages['comments_deleted_ok'] = '%s kommenttia poistettu onnistuneesti';
$messages['error_deleting_comment'] = 'Kommenttia "%s" poistaessa tapahtui virhe';
$messages['error_deleting_comment2'] = 'Kommenttia %s poistaessa tapahtui virhe';
$messages['editComments'] = 'Kommentit';
$messages['mark_as_spam'] = 'Merkitse spammiksi';
$messages['mark_as_no_spam'] = 'Poista spam-merkint�';
$messages['error_incorrect_comment_id'] = 'Kommentin identifiointi oli v��r�';
$messages['error_marking_comment_as_spam'] = 'Kommentin merkitsemiss� spammiksi tapahtui virhe';
$messages['comment_marked_as_spam_ok'] = 'Kommentti merkittiin spammiksi onnistuneesti';
$messages['error_marking_comment_as_nonspam'] = 'Spam-merkinn�n poistamisessa tapahtui virhe';
$messages['comment_marked_as_nonspam_ok'] = 'Kommentti merkittiin tavalliseksi kommentiksi';

// viestin trackbackit
$messages['blog'] = 'Blog';
$messages['excerpt'] = 'Excerpt';
$messages['error_fetching_trackbacks'] = 'Trackbackin hakemisessa tapahtui virhe';
$messages['error_deleting_trackbacks'] = 'Trackbackin poistamisessa tapahtui virhe tai yht��n valintaa ei oltu tehty';
$messages['error_deleting_trackback'] = 'Trackbackin "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_trackback2'] = 'Trackbackin tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['trackback_deleted_ok'] = 'Trackback "%s" poistettiin onnistuneesti';
$messages['trackbacks_deleted_ok'] = '%s trackbackia poistettiin onnistuneesti';
$messages['editTrackbacks'] = 'Trackbacks';

// Viestin statistiikka
$messages['referrer'] = 'Viittaajaa';
$messages['hits'] = 'Osumaa';
$messages['error_no_items_selected'] = 'Yht��n valintaa ei tehty poistamista varten';
$messages['error_deleting_referrer'] = 'Viittaajan "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_referrer2'] = 'Viittaajan tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['referrer_deleted_ok'] = 'Viittaaja "%s" poistettiin onnistuneesti';
$messages['referrers_deleted_ok'] = '%s viittajaa poistettu onnistuneesti';

// Kategoriat
$messages['posts'] = 'Viesti�';
$messages['show_in_main_page'] = 'N�yt� etusivulla';
$messages['error_incorrect_category_id'] = 'Kategorian identifiointi ei ole oikein tai yht��n valitaa ei tehty';
$messages['error_category_has_articles'] = 'Kategoriaa "%s" k�ytt�� joku viesti. Ole hyv� ja editoi viestej�, poista sen j�lkeen kategoria.';
$messages['category_deleted_ok'] = 'Kategoria "%s" poistettiin onnistuneesti';
$messages['categories_deleted_ok'] = '%s kategoriaa poistettu onnistuneesti';
$messages['error_deleting_category'] = 'Kategorian "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_category2'] = 'Kategorian tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['yes'] = 'Kyll�';
$messages['no'] = 'Ei';

// uusi kategoria
$messages['name'] = 'Nimi';
$messages['category_name_help'] = 'Kategorian nimi';
$messages['description'] = 'Sis�llys';
$messages['category_description_help'] = 'Mit� kategoria pit�� sis�ll��n?';
$messages['show_in_main_page_help'] = 'N�ytet��nk� t�ss� kategoriassa olevat viestit p��sivulla vai vain silloin kun t�t� kategoriaa selataan?';
$messages['error_empty_name'] = 'Sinun t�ytyy antaa nimi';
$messages['error_empty_description'] = 'Sinun t�ytyy antaa selostus';
$messages['error_adding_article_category'] = 'Kategorian lis��misess� tapahtui virhe. Ole hyv� ja tarkasta antamasi tiedot';
$messages['category_added_ok'] = 'Kategoria "%s" lis�ttiin onnistuneesti blogiin';
$messages['add'] = 'Lis��';
$messages['reset'] = 'Tyhjenn�';

// p�ivit� kategoriaa
$messages['error_updating_article_category'] = 'Kategorian p�ivitt�misess� tapahtui virhe';
$messages['error_fetching_category'] = 'Kategorian noutamisessa tapahtui virhe';
$messages['article_category_updated_ok'] = 'Kategoria p�ivitettiin onnistuneesti';

// Linkit
$messages['feed'] = 'Feedit';
$messages['error_no_links_selected'] = 'Linkin identifiointi oli v��r� tai yht��n ei oltu valittu';
$messages['error_incorrect_link_id'] = 'Linkin identifiointi oli v��r�';
$messages['error_removing_link'] = 'Linkin "%s" poistamisessa tapahtui virhe';
$messages['error_removing_link2'] = 'Linkin tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['link_deleted_ok'] = 'Linkki "%s" poistettiin onnistuneesti';
$messages['links_deleted_ok'] = '%s linkki� poistettiin onnistuneesti.';

// Uusi linkki
$messages['link_name_help'] = 'Linkin nimi';
$messages['link_url_help'] = 'Linkin URL-osoite (http://jne...)';
$messages['link_description_help'] = 'Linkin lyhyt selostus';
$messages['link_feed_help'] = 'Linkki johonkin RSS tai Atom -feediin voidaan my�s toteuttaa';
$messages['link_category_help'] = 'Valitse yksi linkkikategorioista';
$messages['error_adding_link'] = 'Linkin lis��misess� tapahtui virhe. Ole hyv� ja tarkasta antamasi tiedot';
$messages['error_invalid_url'] = 'Osoite ei ole kunnollinen';
$messages['link_added_ok'] = 'Linkki "%s" lis�ttiin onnistuneesti';

// Linkin p�ivitys
$messages['error_updating_link'] = 'Linkin p�ivitt�misess� tapahtui virhe. Tarkasta antamasi tiedot ja yrit� uudelleen';
$messages['error_fetching_link'] = 'Linkin hakemisessa tapahtui virhe';
$messages['link_updated_ok'] = 'Linkki "%s" p�ivitettiin onnistuneesti';

// linkkikategoriat
$messages['links'] = 'Linkit';
$messages['error_invalid_link_category_id'] = 'Linkkikategorian tunnus ei ollut oikea tai linkkikategoriaa ei oltu valittu';
$messages['error_links_in_link_category'] = 'Linkkikategoria "%s" on k�yt�ss�. Editoi linkkej� ja kokeile uudestaan';
$messages['error_removing_link_category'] = 'Linkkikategorian "%s" poistamisessa tapahtui virhe';
$messages['link_category_deleted_ok'] = 'Linkkikategoria "%s" poistettiin onnistuneesti';
$messages['link_categories_deleted_ok'] = '%s linkkikategoriaa poistettu onnistuneesti';
$messages['error_removing_link_category2'] = 'Linkkikategoria tunnuksella "%s" poistaminen ei onnistunut';

// uusi linkkikategoria
$messages['link_category_name_help'] = 'Linkkikategorian nimi';
$messages['error_adding_link_category'] = 'Linkkikategorian lis��misess� tapahtui virhe';
$messages['link_category_added_ok'] = 'Linkkikategoria "%s" lis�ttiin onnistuneesti';

// Linkkikategorian editointi
$messages['error_updating_link_category'] = 'Linkkikategorian p�ivityksess� tapahtui virhe. Ole hyv� ja tarkasta antamasi tiedot';
$messages['link_category_updated_ok'] = 'Linkkikategoriay "%s" p�ivitettiin onnistuneesti';
$messages['error_fetching_link_category'] = 'Linkkikategorian noutamisessa tapahtui virhe';

// omat kent�t
$messages['type'] = 'Tyyppi';
$messages['hidden'] = 'Piilotettu';
$messages['fields_deleted_ok'] = '%s kentt�� poistettu onnistuneesti';
$messages['field_deleted_ok'] = 'Kentt� "%s" poistettu onnistuneesti';
$messages['error_deleting_field'] = 'Kent�n "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_field2'] = 'Kent�n tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['error_incorrect_field_id'] = 'Kent�n tunnus ei ole oikea';

// Uusi kustomoitu kentt�
$messages['field_name_help'] = 'Tunnus jota k�ytet��n viittamaan t�m�n kent�n arvoon viestiss�';
$messages['field_description_help'] = 'Lyhyt kuvaus t�st� kent�st�, joka n�ytet��n viestej� muokatessa tai lis�tess�';
$messages['field_type_help'] = 'Valitse yksi olemassa olevista kentt�tyypeist�';
$messages['field_hidden_help'] = 'Jos kentt� on piilotettu, sit� ei n�ytet� viestej� lis�tess� tai muokatessa. Pluginit k�ytt�v�t yleens� t�t� ominaisuutta';
$messages['error_adding_custom_field'] = 'Virhe lis�tess� kentt��, ole hyv� ja tarkasta antamasi tiedot';
$messages['custom_field_added_ok'] = 'Kentt� "%s" lis�tty onnistuneesti';
$messages['text_field'] = 'Tekstikentt�';
$messages['text_area'] = 'Tekstialue';
$messages['checkbox'] = 'Checkbox';
$messages['date_field'] = 'P�iv�m��r�n valinta';

// Kustomoidun kent�n editointi
$messages['error_fetching_custom_field'] = 'Kent�n hakemisessa tapahtui virhe';
$messages['error_updating_custom_field'] = 'Kent�n p�ivitt�misess� tapahtui virhe. Ole hyv� ja tarkasta antamasi tiedot ja yrit� uudelleen';
$messages['custom_field_updated_ok'] = 'Kentt� "%s" p�ivitettiin onnistuneesti';

// resources
$messages['root_album'] = 'Juurialbumi';
$messages['num_resources'] = 'Resurssien m��r�';
$messages['total_size'] = 'Kokonaiskoko';
$messages['album'] = 'Albumi';
$messages['error_incorrect_album_id'] = 'Albumin tunnus ei ole oikea';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'pLog ei pystynyt tekem��n tarvittavia kansioita resurssien asentamista varten. T�m� voi johtua useista syist�, kuten PHP:n ajamisesta SAFE MODEssa tai k�ytt�j�ll�si ei ole oikeuksia tehd� noita kansioita jne. Voit yritt�� tehd� operaation manuaalisesti tekem�ll� seuraavat kansiot: <br/><br/>%s<br/><br/>Jos n�m� kansiot ovat jo olemassa, tarkasta ett� web serverin k�ytt�j� voi lukea ja kirjoittaa niihin';
$messages['items_deleted_ok'] = '%s kohdetta poistettu onnistuneesti';
$messages['error_album_has_children'] = 'Albumi "%s" sis�lt�� jotain. Ole hyv� ja tyhjenn� albumi ja yrit� uudestaan';
$messages['item_deleted_ok'] = '"%s" poistettu onnistuneesti';
$messages['error_deleting_album'] = 'Albumin "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_album2'] = 'Albumin tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_resource'] = 'Resurssin "%s" poistamisessa tapahtui virhe';
$messages['error_deleting_resource2'] = 'Resurssin tunnuksella "%s" poistamisessa tapahtui virhe';
$messages['error_no_resources_selected'] = 'Yht��n resurssia ei valittu poistamista varten';
$messages['resource_deleted_ok'] = 'Resurssi "%s" poistettiin onnistuneesti';
$messages['album_deleted_ok'] = 'Albumi "%s" poistettiin onnistuneesti';
$messages['add_resource'] = 'Lis�� resurssi';
$messages['add_resource_preview'] = 'Lis�� esikatselu';
$messages['add_resource_medium'] = 'Lis�� median esikatselu';
$messages['add_album'] = 'Lis�� albumi';

// Uusi albumi
$messages['album_name_help'] = 'Lyhyt nimi uudelle albumille';
$messages['parent'] = 'Parent';
$messages['no_parent'] = 'No parent';
$messages['parent_album_help'] = 'K�yt� t�t� saadaksesi albumeja albumien sis��n ja j�rjest��sesi paremmin tiedostosi';
$messages['album_description_help'] = 'Pidempi selostus albumin sis�ll�st�';
$messages['error_adding_album'] = 'Albumin lis��misess� tapahtui virhe. Ole hyv� ja tarkasta antamasi tiedot ja yrit� uudelleen';
$messages['album_added_ok'] = 'Albumi "%s" lis�ttiin onnistuneesti';

// Albumin editointi
$messages['error_incorrect_album_id'] = 'Albumin tunnus ei ole oikea';
$messages['error_fetching_album'] = 'Albumin noutamisessa tapahtui virhe';
$messages['error_updating_album'] = 'Albumin p�ivitt�misess� tapahtui virhe. Ole hyv� ja tarkasta antamasi tiedot ja yrit� uudelleen';
$messages['album_updated_ok'] = 'Albumi "%s" p�ivitetty onnistuneesti';
$messages['show_album_help'] = 'Albumi ei n�y blogin albumilistassa, jos se otetaan pois k�yt�st�';

// new resource
$messages['file'] = 'Tiedosto';
$messages['resource_file_help'] = 'Tiedosto joka lis�t��n nykyiseen blogiin. K�yt� "Lis�� monta" -linkki� lis�t�ksesi useamman tiedoston samaan aikaan';
$messages['add_field'] = 'Lis�� monta';
$messages['resource_description_help'] = 'Pidempi selostus tiedoston sis�ll�st�';
$messages['resource_album_help'] = 'Valitse albumi, johon t�m� tiedosto lis�t��n';
$messages['error_no_resource_uploaded'] = 'Yht��n tiedostoa ei valittu lis�tt�v�ksi';
$messages['resource_added_ok'] = 'Resurssi "%s" lis�ttiin onnistuneesti';
$messages['error_resource_forbidden_extension'] = 'Tiedostoa ei lis�tty, koska se on kielletty tiedostotyyppi';
$messages['error_resource_too_big'] = 'Tiedostoa ei lis�tty, koska se on liian iso';
$messages['error_uploads_disabled'] = 'Tiedostoa ei lis�tty, koska lis��minen on otettu pois k�yt�st�';
$messages['error_quota_exceeded'] = 'Tiedostoa ei lis�tty, koska tiedostoja varten varattu levytila on t�ynn�';
$messages['error_adding_resource'] = 'Tiedoston lis��misess� tapahtui virhe';

// Resurssien editointia
$messages['editResource'] = 'Muokkaa resurssia';
$messages['resource_information_help'] = 'Alapuolella on jotain tietoa resurssista';
$messages['information'] = 'Informaatiota';
$messages['size'] = 'Koko';
$messages['format'] = 'Tyyppi';
$messages['dimensions'] = 'Ulottuvuus';
$messages['bits_per_sample'] = 'Bitti� n�ytteess�';
$messages['sample_rate'] = 'N�ytem��r�';
$messages['number_of_channels'] = 'Kanavien m��r�';
$messages['legnth'] = 'Pituus';
$messages['thumbnail_format'] = 'Esikatselukuvan tyyppi';
$messages['regenerate_preview'] = 'Muodosta esikatselu uudelleen';
$messages['error_fetching_resource'] = 'Resurssin noutamisessa tapahtui virhe';
$messages['error_updating_resource'] = 'Resurssin p�ivitt�misess� tapahtui virhe';
$messages['resource_updated_ok'] = 'Resurssi "%s" p�ivitettiin onnistuneesti';

// blogin asetukset
$messages['blog_link'] = 'Blogin linkki';
$messages['blog_link_help'] = 'Pysyv� linkki blogiin';
$messages['blog_name_help'] = 'Blogin otsikko';
$messages['blog_description_help'] = 'Blogin sis�ll�n pidempi kuvaus';
$messages['language'] = 'Kieli';
$messages['blog_language_help'] = 'Blogin k�ytt�m� kieli sek� julkisella ett� hallintapuolella';
$messages['max_main_page_items'] = 'Viestien m��r� p��sivulla';
$messages['max_main_page_items_help'] = 'Viestin m��r�, joka n�ytet��n aina p��sivulla';
$messages['max_recent_items'] = 'Viimeisimpien viestien m��r�';
$messages['max_recent_items_help'] = 'Viimeisimmiksi merkattujen viestien maksimim��r�, joka n�ytet��n p��sivulla';
$messages['template'] = 'Ulkoasu';
$messages['choose'] = 'Valitse';
$messages['blog_template_help'] = 'Blogin k�ytt�m� ulkoasu. T�m� lista sis�lt�� globaalit ulkoasut ja kaikki ulkoasut, jotka on asennettu vain t�t� blogia varten';
$messages['use_read_more'] = 'K�yt� "Lis��..." -linkki� viesteiss�';
$messages['use_read_more_help'] = 'Jos valittuna, vain teksti-alueelle kirjoitettu teksti n�kyy p��sivulla. Jatketun tekstin n�ytt�miseksi lis�t��n "Lis��..." -linkki viestien per��n';
$messages['enable_wysiwyg'] = 'K�yt� visuaalista editoria viestien kirjoittamisessa';
$messages['enable_wysiwyg_help'] = 'Ottaa k�ytt��n tehokkaan visuaalisen editorin. Editori toimii vain Internet Explorer 5.5 -selaimella tai Mozilla 1.3 -selaimella tai uudemmilla versioilla';
$messages['enable_comments'] = 'Hyv�ksy kommentointi vakiona';
$messages['enable_comments_help'] = 'Hyv�ksy kommentointi kaikkiin viesteihin vakiona. Kommentointi voidaan silti ottaa pois k�yt�st� tai sallia erikseen jokaista viesti� kohden viesti� kirjoittaessa tai editoitaessa';
$messages['show_future_posts'] = 'N�yt� tulevat viestit kalenterissa';
$messages['show_future_posts_help'] = 'N�ytet��nk� ennakkoon kirjoitetut viestit kalenterissa kaikille k�ytt�jille vai ei?';
$messages['comments_order'] = 'Kommenttien j�rjestys';
$messages['comments_order_help'] = 'Kommenttien n�ytt�misj�rjestys viestin omalla sivulla';
$messages['oldest_first'] = 'Vanhin ensin';
$messages['newest_first'] = 'Uusin ensin';
$messages['categories_order'] = 'Kategorioitten j�rjestys';
$messages['categories_order_help'] = 'J�rjestys, jossa kategoriat n�ytet��n p��sivulla';
$messages['most_recent_updated_first'] = 'Viimeisimm�ksi p�ivitetty ensin';
$messages['alphabetical_order'] = 'Aakkosj�rjestyksess�';
$messages['reverse_alphabetical_order'] = 'K��nnetyss� aakkosj�rjestyksess� (��kk�sj�rjestyksess�)';
$messages['most_articles_first'] = 'Eniten viestej� sis�lt�v� ensin';
$messages['link_categories_order'] = 'Linkkikategorioiden j�rjestys';
$messages['link_categories_order_help'] = 'J�rjestys, jossa linkkikategoriat n�ytet��n p��sivulla';
$messages['most_links_first'] = 'Eniten linkkej� sis�lt�v� ensin';
$messages['most_links_last'] = 'Eniten linkkej� sis�lt�v� viimeisen�';
$messages['time_offset'] = 'Aikaero';
$messages['time_offset_help'] = 'Aikaero tunneissa, joka lis�t��n dynaamisesti jokaiseen p�iv��n ja kellonaikaan blogissa';
$messages['close'] = 'Sulje';
$messages['select'] = 'Valitse';
$messages['error_updating_settings'] = 'Blogin asetusten p�ivitt�misess� tapahtui virhe. Ole hyv� ja tarkasta antamasi tiedot ja yrit� uudelleen';
$messages['error_invalid_number'] = 'Numero ei ole kunnollinen';
$messages['error_incorrect_time_offset'] = 'Aikaero ei ole kunnollinen';
$messages['blog_settings_updated_ok'] = 'Blogin asetukset p�ivitetty onnistuneesti';
$messages['hours'] = 'Tuntia';

// K�ytt�j�asetukset
$messages['username_help'] = 'Julkinen k�ytt�j�nimi. T�t� ei voi vaihtaa';
$messages['full_name'] = 'Koko nimi';
$messages['full_name_help'] = 'T�ydellinen nimi';
$messages['password_help'] = 'Kirjoita uusi salasana';
$messages['confirm_password'] = 'Vahvista salasana';
$messages['email'] = 'S�hk�postiosoite';
$messages['email_help'] = 'S�hk�postiosoite, jonne ilmoitukset l�hetet��n';
$messages['bio'] = 'Tietoja itsest�si';
$messages['bio_help'] = 'Voit lis�t� t�h�n pidemm�n selostuksen itsest�si';
$messages['picture'] = 'Kuva';
$messages['user_picture_help'] = 'Valitse kuva esitt�m��n itse�si blogiin lis��miesi kuvien joukosta';
$messages['error_invalid_password'] = 'Salasana ei ole kunnollinen, tarkasta ettei se oli liian lyhyt';
$messages['error_passwords_dont_match'] = 'Valitettavasti salasanat eiv�t t�sm��';
$messages['error_incorrect_email_address'] = 'S�hk�postiosoite ei ole kunnollinen';
$messages['error_updating_user_settings'] = 'K�ytt�j�asetusten p�ivitt�misess� tapahtui virhe. Ole hyv� tarkasta antamasi tiedot';
$messages['user_settings_updated_ok'] = 'K�ytt�j�asetukset p�ivitetty onnistuneesti';
$messages['resource'] = 'Resurssi';

// Pluginkeskus
$messages['identifier'] = 'Tunnus';
$messages['error_plugins_disabled'] = 'Valitettavasti pluginit eiv�t ole k�yt�ss�';

// Blogin k�ytt�j�t
$messages['revoke_permissions'] = 'Mit�t�i oikeudet';
$messages['error_no_users_selected'] = 'Yht��n k�ytt�j�� ei valittu';
$messages['user_removed_from_blog_ok'] = 'K�ytt�j�ll� "%s" ei ole en�� oikeuksia t�h�n blogiin';
$messages['users_removed_from_blog_ok'] = '%s k�ytt�j�ll� ei ole en�� oikeuksia t�h�n blogiin';
$messages['error_removing_user_from_blog'] = 'K�ytt�j�n "%s" oikeuksien poistamisessa tapahtui virhe';
$messages['error_removing_user_from_blog2'] = 'K�ytt�j�n tunnuksella "%s" oikeuksien poistamisessa tapahtui virhe';

// Uusi blogin k�ytt�j�
$messages['new_blog_username_help'] = 'Uuden k�ytt�j�n k�ytt�j�nimi, jolle haluat antaa oikeudet t�h�n blogiin. Uudella k�ytt�j�ll� on oikeus ainoastaan Hallitse- ja Resurssiosioihin';
$messages['send_notification'] = 'L�het� ilmoitus';
$messages['send_user_notification_help'] = 'L�het� s�hk�posti-ilmoitus t�lle k�ytt�j�lle';
$messages['notification_text'] = 'Ilmoitusteksti';
$messages['notification_text_help'] = 'Teksti, joka lis�t��n ilmoitusviestiin';
$messages['error_adding_user'] = 'K�ytt�j�n oikeuksien my�nt�misess� tapahtui virhe. Ole hyv� ja tarkasta antamasi tiedot';
$messages['error_empty_text'] = 'Sinun t�ytyy kirjoittaa teksti�';
$messages['error_adding_user'] = 'K�ytt�j�n lis��misess� tapahtui virhe. Ole hyv� ja tarkasta antamasi tiedot';
$messages['error_invalid_user'] = 'K�ytt�j�� "%s" ei ole olemassa tai h�n ei ole validi';
$messages['user_added_to_blog_ok'] = 'K�ytt�j�lle "%s" annettiin oikeudet t�h�n blogiin onnistuneesti';

// Blogin ulkoasut
$messages['error_no_templates_selected'] = 'Yht��n ulkoasua ei ole valittu';
$messages['error_template_is_current'] = 'Ulkoasua "%s" ei voida poistaa, koska se on k�yt�ss�';
$messages['error_removing_template'] = 'Ulkoasun "%s" poistamisessa tapahtui virhe';
$messages['template_removed_ok'] = 'Ulkoasu "%s" poistettiin onnistuneesti';
$messages['templates_removed_ok'] = '%s ulkoasua poistettiin onnistuneesti';

// Uusi blogin ulkoasu
$messages['template_installed_ok'] = 'Ulkoasu "%s" lis�ttiin onnistuneesti';
$messages['error_installing_template'] = 'Ulkoasun "%s" asentamisessa tapahtui virhe';
$messages['error_missing_base_files'] = 'Joitakin ulkoasun tiedostoista puuttuu';
$messages['error_add_template_disabled'] = 'Ulkoasuja ei voida lis�t�, koska lis��minen on otettu pois k�yt�st� t�ll� sivustolla';
$messages['error_must_upload_file'] = 'Ulkoasupakettia ei lis�tty';
$messages['error_uploads_disabled'] = 'Lis��minen on otettu pois k�yt�st� t�ll� sivustolla';
$messages['error_no_new_templates_found'] = 'Uusia ulkoasuja ei l�ytynyt';
$messages['error_template_not_inside_folder'] = 'Ulkoasun k�ytt�mien tiedostojen on oltava samannimisen kansion sis�ll� kuin ulkoasun nimi';
$messages['error_missing_base_files'] = 'Joitakin ulkoasun perustiedostoja puuttuu';
$messages['error_unpacking'] = 'Tiedoston purkamisessa tapahtui virhe';
$messages['error_forbidden_extensions'] = 'Ulkoasu sis�lsi kiellettyj� tiedostotyyppej�';
$messages['error_creating_working_folder'] = 'V�liaikaisen kansion tekeminen paketin purkamista varten ep�onnistui';
$messages['error_checking_template'] = 'Ulkoasun %s tarkastamisessa tapahtui virhe';
$messages['template_package'] = 'Ulkoasupaketti';
$messages['blog_template_package_help']  = 'K�yt� t�t� vaihtoehtoa lis�t�ksesi uuden ulkoasun, joka on k�yt�ss� vain omassa blogissasi. Jos et pysty lis��m��n t�ll� vaihtoehdolla uutta ulkoasua, lis�� ulkoasu k�sin ja laita se <b>%s</b>, joka on kansio, jossa blogisi ulkoasut ovat. Klikkaa "<b>Etsi ulkoasuja</b>" nappulaa. pLog tutkii kansion ja lis�� l�yt�m�ns� uudet ulkoasut automaattisesti';
$messages['scan_templates'] = 'Etsi ulkoasuja';

// Sivuston k�ytt�j�t
$messages['user_status_active'] = 'Aktiivinen';
$messages['user_status_disabled'] = 'Ei k�yt�ss�';
$messages['user_status_all'] = 'Kaikki';
$messages['user_status_unconfirmed'] = 'Vahvistamaton';
$messages['error_invalid_user2'] = 'K�ytt�j�� tunnuksella "%s" ei ole olemassa';
$messages['error_deleting_user'] = 'K�ytt�j�n "%s" statuksen muuttamisessa tapahtui virhe';
$messages['user_deleted_ok'] = 'K�ytt�j� "%s" otettu pois k�yt�st� onnistuneesti';
$messages['users_deleted_ok'] = '%s k�ytt�j�� otettu pois k�yt�st� onnistuneesti';

// Luo k�ytt�j�
$messages['user_added_ok'] = 'K�ytt�j� "%s" lis�tty onnistuneesti';
$messages['error_incorrect_username'] = 'K�ytt�j�nimi ei ole korrekti tai on jo k�yt�ss�';
$messages['user_status_help'] = 'K�ytt�j�n t�m�nhetkinen status';
$messages['user_blog_help'] = 'Blogi johon t�m� k�ytt�j� alunperin asetettiin';
$messages['none'] = 'Tyhj�';

// K�ytt�j�n muokkaus
$messages['error_invalid_user'] = 'K�ytt�j�n tunnus ei ole oikea tai k�ytt�j�� ei ole olemassa';
$messages['error_updating_user'] = 'K�ytt�j�n asetusten p�ivitt�misess� tapahtui virhe. Ole hyv� ja tarkasta antamasi tiedot';
$messages['blogs'] = 'Blogit';
$messages['user_blogs_help'] = 'Blogit jotka k�ytt�j� omistaa tai h�nell� on kirjoitusoikeus';
$messages['site_admin'] = 'Administrator';
$messages['site_admin_help'] = 'Onko k�ytt�j�ll� p��k�ytt�j�oikeudet ja saako saa n�hd� "Administration" -alueen ja suorittaa p��k�ytt�j�teht�vi�';
$messages['user_updated_ok'] = 'K�ytt�j� "%s" p�ivitettiin onnistuneesti';

// Sivuston blogit
$messages['blog_status_all'] = 'Kaikki';
$messages['blog_status_active'] = 'Aktiivinen';
$messages['blog_status_disabled'] = 'Passiivinen';
$messages['blog_status_unconfirmed'] = 'Vahvistamaton';
$messages['owner'] = 'Omistaja';
$messages['quota'] = 'Quota';
$messages['bytes'] = 'bitti�';
$messages['error_no_blogs_selected'] = 'Yht��n blogia ei valittu otettavaksi pois k�yt�st�';
$messages['error_blog_is_default_blog'] = 'Blogia "%s" ei voida poistaa, koska se on asetettu vakioblogiksi';
$messages['blog_deleted_ok'] = 'Blogi "%s" otettiin pois k�yt�st� onnistuneesti';
$messages['blogs_deleted_ok'] = '%s blogia poistettiin onnistuneesti';
$messages['error_deleting_blog'] = 'Blogin "%s" k�yt�st� poistamisessa tapahtui virhe';
$messages['error_deleting_blog2'] = 'Blogin tunnuksella "%s" k�yt�st� poistamisessa tapahtui virhe';

// Luo blogi
$messages['error_adding_blog'] = 'Blogin lis��misess� tapahtui virhe. Ole hyv� ja tarkasta antamasi tiedot';
$messages['blog_added_ok'] = 'Blogi "%s" lis�ttiin onnistuneesti';

// Blogin muokkaus
$messages['blog_status_help'] = 'Blogin status';
$messages['blog_owner_help'] = 'K�ytt�j� joka asetetaan blogin omistajaksi. H�nell� on t�ydet oikeudet blogin asetuksiin';
$messages['users'] = 'K�ytt�j�t';
$messages['blog_quota_help'] = 'Resurssiquota bittein�. Aseta nollaksi, niin quota on rajaton tai j�t� tyhj�ksi asettaakseni blogin k�ytt�m��n globaalia quotaa';
$messages['blog_users_help'] = 'K�ytt�j�t joilla on oikeuksia t�h�n blogiin. Valitse k�ytt�j� vasemmalta ja siirr� oikealle listalle antaaksesi k�ytt�j�lle oikeudet t�h�n blogiin';
$messages['edit_blog_settings_updated_ok'] = 'Blogi "%s" p�ivitetty onnistuneesti';
$messages['error_updating_blog_settings'] = 'Blogin "%s" p�ivityksess� tapahtui virhe';
$messages['error_incorrect_blog_owner'] = 'K�ytt�j�, joka valittiin blogin omistajaksi ei ole validi';
$messages['error_fetching_blog'] = 'Blogin noutamisessa tapahtui virhe';
$messages['error_updating_blog_settings2'] = 'Blogin p�ivitt�misess� tapahtui virhe. Ole hyv� ja tarkasta antamasi tiedot';
$messages['add_or_remove'] = 'Lis�� tai poista k�ytt�ji�';

// Sivuston kielet
$messages['locale'] = 'Kielet';
$messages['locale_encoding'] = 'Encoodaus';
$messages['locale_deleted_ok'] = 'Kieli "%s" poistettiin onnistuneesti';
$messages['error_no_locales_selected'] = 'Yht��n kielt� ei valittu poistettavaksi';
$messages['error_deleting_only_locale'] = 'Kielt� ei voida poistaa, koska se on ainoa j�ljell� oleva';
$messages['locales_deleted_ok']= '%s kielt� poistettiin onnistuneesti';
$messages['error_deleting_locale'] = 'Kielen "%s" poistamisessa tapahtui virhe';
$messages['error_locale_is_default'] = 'Kielt� "%s" ei voida poistaa, koska se on asetettu vakiokieleksi uusia blogeja varten';

// Lis�� kieli
$messages['error_invalid_locale_file'] = 'Kielitiedosto ei ole validi';
$messages['error_no_new_locales_found'] = 'Uusia kielitiedostoja ei l�ytynyt';
$messages['locale_added_ok'] = 'Kieli "%s" lis�ttiin onnistuneesti';
$messages['error_saving_locale'] = 'Uuden kielen tallentamisessa tapahtui virhe';
$messages['scan_locales'] = 'Etsi kieli�';
$messages['add_locale_help'] = 'K�yt� t�t� vaihtoehtoa lis�t�ksesi uusia kielitiedostoja. Jos lis��minen ei ole mahdollista t�t� vaihtoehtoa k�ytt�en, lis�� kielitiedosto k�sin kansioon <b>./locales/</b>, joka on kansio, jonne kielitiedostot tallennetaan. Klikkaa "<b>Etsi kieli�</b>" nappulaa. pLog tutkii kansion ja lis�� l�yt�m�ns� kielet listaan';

// Sivuston ulkoasut
$messages['error_template_is_default'] = 'Ulkoasua "%s" ei voida poistaa, koska se on asetettu vakioulkoasuksi uusia blogeja varten';

// Lis�� ulkoasu
$messages['global_template_package_help'] = 'K�yt� t�t� vaihtoehtoa lis�t�ksesi uuden ulkoasun, joka on kaikkien blogien k�yt�ss� koko sivustolla. Jos lis��minen ei onnistu k�ytt�en t�t� vaihtoehtoa, lis�� se k�sin <b>%s</b> -kansioon, joka on kansio minne globaalit ulkoasut tallennetaan ja klikkaa "<b>Etsi ulkoasuja</b>" nappulaa. pLog tutkii kansion ja lis�� l�yt�m�ns� uudet ulkoasut listaan';

// Globaalit asetukset
$messages['site_config_saved_ok'] = 'Sivuston asetukset tallennettu onnistuneesti';
$messages['error_saving_site_config'] = 'Sivuston asetuksien tallentamisessa tapahtui virhe';
/// general settings
$messages['help_comments_enabled'] = 'Kommentointi p��ll� uusissa blogeissa [Vakio = Kyll�]';
$messages['help_beautify_comments_text'] = 'Jos p��ll�, k�ytt�jien kirjoittamat kommentit "kaunistetaan" lis��m�ll� kappalejako ja linkitys hyperlinkkeihin [Vakio = Kyll�]';
$messages['help_temp_folder'] = 'pLogin k�ytt�m� v�liaikainen temp-kansio. K�yt� web-serveripuun (public_html) ulkopuolella olevaa kansiota parannetun turvallisuuden saavuttamiseksi [Vakio = ./tmp]';
$messages['help_base_url'] = 'PerusURL, jonne pLog on asennettu';
$messages['help_subdomains_enabled'] = 'Kytke p��lle alidomainit. Katso dokumentoinnista lis�informaatiota alidomaineista [Vakio = Ei]';
$messages['help_subdomains_base_url'] = 'Kun alidomainit ovat p��ll�, t�t� perusURL:l�� k�ytet��n base_urlin sijasta. K�yt� {blogname} saadaksesi blogin nimen ja {username} saadaksesi k�ytt�j�n nimen, joka omistaa blogin generoidaksesi linkin blogiin (esim. http://{blogname}.yourdomain.com)';
$messages['help_include_blog_id_in_url'] = 'Tarvitaan vain kun alidomainit ovat p��ll� ja "normaalit" URLit ovat p��ll�. Pakottaa sis�isesti generoidut URLit olemaan ilmane "blogId" -parameteria. �l� vaihda, ellet tied� mit� teet [Vakio = Kyll�]';
$messages['help_script_name'] = 'Jos sinun t�ytyy muuttaa index.php joksikin muuksi [Vakio = index.php]';
$messages['help_show_posts_max'] = 'P��sivulla n�ytett�vien viestien maksimim��r�. Koskee vain uusia blogeja [Vakio = 15]';
$messages['help_recent_posts_max'] = 'Viimeisimpin� n�ytettyjen viestien lukum��r� p��sivulla. Koskee vain uusia blogeja [Vakio = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Ominaisuus joka sallii luonnosten tallentamisen Javascriptin ja XmlHttpRequestin kautta [Vakio = Kyll�]';
$messages['help_locale_folder'] = 'Kielitiedostojen tallennuspaikka [Vakio = ./locale]';
$messages['help_default_locale'] = 'Vakiokieli uusille blogeille [Vakio = en_UK]';
$messages['help_default_blog_id'] = 'Blogi, joka n�ytet��n jos muuta ei ole m��ritelty [Vakio = 1]';
$messages['help_default_time_offset'] = 'Vakioaikaero uusille blogeille [Vakio = 0]';
$messages['help_html_allowed_tags_in_comments'] = 'V�lily�nnill� erotettu lista HTML-tageista, jotka sallitaan kommenteissa [Vakio = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'Tallennetaanko viittaajat (referers) tietokantaan vai ei?. Aseta pois p��lt� paremman suorituskyvyn saamiseksi [Vakio = Kyll�]';
$messages['help_show_more_enabled'] = 'K�ytet��nk� "Lis��..." -ominaisuutta uusissa blogeissa? [Vakio = Kyll�]';
$messages['help_update_article_reads'] = 'K�ytet��nk� laskuria laskemaan kertoja kun artikkeli on p�ivitetty tai luettu? Aseta pois p��lt� paremman suorituskyvyn saamiseksi [Vakio = Kyll�]';
$messages['help_update_cached_article_reads'] = 'K�ytet��nk� laskuria laskemaan viestin lukukertoja vaikka v�limuisti olisi p��ll�? [Vakio = Kyll�]';
$messages['help_xmlrpc_ping_enabled'] = 'L�hetet��nk� XMLRPC pingej� sivuille, jotka tukevat t�t� ominaisuutta? [Vakio = Kyll�]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Asetetaanko t�m� ominaisuus p��lle vai pois p��lt� vakiona, kun viestej� p�ivitet��n tai lis�t��n? [Vakio = Kyll�]';
$messages['help_xmlrpc_ping_hosts'] = 'URL, joka osoittaa XMLRPC -k�ytt�liittym��n sivuilla, jotka tukevat XMLRPC ping -spesifikaatioita. Aseta jokainen URL omalle rivilleen [Vakio = http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = 'Otetaanko tulevat trackbackit vastaan vai ei? [Vakio = Kyll�]';
$messages['help_htmlarea_enabled'] = 'K�ytet��nk� WYSIWYG-editoria uusissa blogeissa? [Vakio = Kyll�]';
$messages['help_plugin_manager_enabled'] = 'K�ytet��nk� plugineita vai ei? [Vakio = Kyll�]';
$messages['help_minimum_password_length'] = 'Salasanojen minimipituus [Vakio = 4]';
$messages['help_xhtml_converter_enabled'] = 'Jos laitetaan p��lle, pLog yritt�� muuntaa HTML-koodin kunnolliseksi XHTML-koodiksi [Vakio = Kyll�]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'Jos kytketty p��lle, pLog yritt�� aggressiivisemmin tehd� HTML-koodista XHTML-koodia, mutta koodi on taipuvainen virheisiin [Vakio = Ei]';
$messages['help_session_save_path'] = 'K�yt� t�t� asetusta vaihtaaksesi kansiota, jonne pLog tallentaa istunnon tiedot k�ytt�en PHP-funktiota session_save_path() Tarkasta, ett� webserveri voi kirjoittaa kansioon. J�t� tyhj�ksi k�ytt��ksesi PHP:n vakioistuntokansiota [Vakio = (tyhj�)]';
// summary settings
$messages['help_summary_page_show_max'] = 'Yhteenvetosivulla n�ytett�vien kohteiden m��r�. T�m� asetus kontrolloi kaikkia kohteita yhteenvetosivulla (viimeisimm�t viestit, aktiivisimmat blogit jne.) [Vakio = 10]';
$messages['help_summary_blogs_per_page'] = 'Blogien m��r� per yksi sivu blogilistassa [Vakio = 25]';
$messages['help_forbidden_usernames'] = 'K�ytt�j�nimet, joita ei hyv�ksyt� k�ytt�j�� rekister�it�ess� erotettuna v�lily�nnill� [Vakio = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = 'Vain yksi blogi per yksi s�hk�postiosoite [Vakio = Ei]';
$messages['help_summary_show_agreement'] = 'N�yt� k�ytt�ehdot ja hyv�ksyt� se kaikill� uusilla k�ytt�jill� [Vakio = Kyll�]';
$messages['help_need_email_confirm_registration'] = 'Pakota uudet k�ytt�j�t aktivoimaan tunnuksensa klikkaamalla heille l�hetetyn s�hk�postiviestin linkki� [Vakio = Yes]';
$messages['help_summary_disable_registration'] = 'Saavatko k�ytt�j�t rekister�id� uusia blogeja t�lle sivustolle? [Vakio = Kyll�]';
// ulkoasut
$messages['help_template_folder'] = 'Kansio jonne ulkoasut tallennetaan [Vakio = ./templates]';
$messages['help_default_template'] = 'Vakioulkoasu uusille blogeille [Vakio = standardi]';
$messages['help_users_can_add_templates'] = 'Salli k�ytt�jien lis�t� omia ulkoasuja [Vakio = Kyll�]';
$messages['help_template_compile_check'] = 'Jos poissa p��lt� Smarty tarkastaa joka kerta, jos ulkoasutiedostot ovat muuttuneet. Jos Smarty havaitsee muutoksen, k�ytet��n uudempaa versiota. Ota t�m� pois k�yt�st� paremman suorituskyvyn saavuttamiseksi [Vakio = Kyll�]';
$messages['help_template_cache_enabled'] = 'Ota k�ytt��n ulkoasuv�limuisti. Jos t�m� on kytketty p��lle k�ytet��n v�limuistista haettua versiota sivuista. Dataa ei haeta v�limuistista ja ulkoasuja ei tarvitse muodostaa uudestaan. [Vakio = Kyll�]';
$messages['help_template_cache_lifetime'] = 'V�limuistin elinaika sekunteina. Aseta -1:ksi niin v�limuisti ei vanhene koskaan. Jos asetettu 0:ksi v�limuistia ei k�ytet�, mutta on suositeltavaa asettaa template_cache_enabled pois p��lt� ottaaksesi v�limuistin pois p��lt� [Vakio = 0]';
$messages['help_template_http_cache_enabled'] = 'Salli tuki ehdollisille HTTP-pyynn�ille. Jos p��ll� pLog ottaa "If-Modified-Since" HTTP headerin huomioon ja l�hett�� sis�ll�n vain jos sit� todella tarvitaan. Salli k�ytt� s��st��ksesi kaistaa [Vakio = Ei]';
$messages['help_allow_php_code_in_templates'] = 'Sallii upotetun natiivin PHP-koodin Smarty ulkoasuissa sulkujen {php}...{/php} sis�ll� [Vakio = Ei]';
// URLit
$messages['help_request_format_mode'] = 'Valitse yksi saatavilla olevista URL-formaateista. Jos k�yt�t kustomoituja URL-osoitteita, konfiguroi asetukset alapuolella [Vakio = Tavanomainen]';
$messages['plain'] = 'Tavanomainen';
$messages['search_engine_friendly'] = 'Hakukoneyst�v�llinen';
$messages['custom_url_format'] = 'Kustomoidut URLit';
$messages['help_permalink_format'] = 'Kiinteiden linkkien tyyli k�ytett�ess� kustomoituja URLeja [Vakio = /blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = 'Linkkien, jotka viittaavat kategorioihin, tyyli k�ytett�ess� kustomoituja URLeja [Vakio = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'Linkkien, jotka viittaavat blogeihin, tyyli k�ytett�ess� kustomoituja URLeja [Vakio = /blog/{blogname}$]';
$messages['help_archive_link_format'] = 'Linkkien, jotka viittaavat arkistoihin, tyyli k�ytett�ess� kustomoituja URLeja [Vakio = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'Linkkien, jotka viittaavat tietyn k�ytt�j�n viesteihin, tyyli k�ytett�ess� kustomoituja URLeja [Vakio = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'Linkkien, jotka viittaavat trackbacksivulle, tyyli k�ytett�ess� kustomoituja URLeja [Vakio = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'Linkkien, jotka viittaavat kustomoituun staattiseen ulkoasusivuun, tyyli k�ytett�ess� kustomoituja URLeja [Vakio = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'Linkkien, jotka viittaavat albumeihin, tyyli k�ytett�ess� kustomoituja URLeja [Vakio = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'Linkkien, jotka viittaavat resurssisivuihin (jotka sis�lt�v�t tiedostoja), tyyli k�ytett�ess� kustomoituja URLeja [Vakio = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'Linkkien, jotka viittaavat resurssien esikatseluun, tyyli k�ytett�ess� kustomoituja URLeja [Vakio = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'Linkkien, jotka viittaavat keskikokoisiin resurssien esikatseluihin, tyyli k�ytett�ess� kustomoituja URLeja [Vakio = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'Linkkien, jotka viittaavat tiedostoihin, tyyli k�ytett�ess� kustomoituja URLeja [Vakio = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// S�hk�posti
$messages['help_check_email_address_validity'] = 'Tarkistettaessa s�hk�postiosoitetta tee muutamia perustarkastuksia selvitt��ksesi onko MX record olemassa annetulla domain-nimell� ja onko s�hk�postiosoite oikeasti olemassa oleva postilaatikko [Vakio = Ei]';
$messages['help_email_service_enabled'] = 'L�hetet��nk� s�hk�postiviestej� vai ei? [Vakio = Kyll�]';
$messages['help_post_notification_source_address'] = 'S�hk�postiosoite, joka n�kyy s�hk�postiviestin saajalla l�hett�j�n�, kun pLog l�hett�� viestej� [Vakio = noreply@your.host.com]';
$messages['help_email_service_type'] = 'Mit� systeemi� k�ytet��n s�hk�postiviestien l�hett�miseen [Vakio = PHP]';
$messages['help_smtp_host'] = 'Jos k�ytet��n SMTP:t� s�hk�postin l�hetykseen, aseta t�m� SMTP-serveriksi, jota k�ytet��n viestien l�hett�miseen [Vakio = (tyhj�)]';
$messages['help_smtp_port'] = 'Jos SMTP-serveri k�ytt�� jotain muuta porttia kuin 25, muuta t�m� arvo vastaamaan k�ytetty� porttia [Vakio = (tyhj�)]';
$messages['help_smtp_use_authentication'] = 'Tarvitseeko STMP-serveri perusautentikointia? [Vakio = Ei]';
$messages['help_smtp_username'] = 'Jos SMTP-serveri vaatii autentikointia, kirjoita t�h�n k�ytt�j�tunnus [Vakio = (tyhj�)]';
$messages['help_smtp_password'] = 'Jos SMTP-serveri vaatii autentikointia, kirjoita t�h�n k�ytt�j�tunnuksen salasana [Vakio = (tyhj�)]';
// avustajat
$messages['help_path_to_tar'] = 'Kansiopolku tar-ty�kaluun, tarvitaan purkamaan ulkoasutiedostoja p��tteell� .tar.gz tai tar.bz2 [Vakio = /bin/tar]';
$messages['help_path_to_gzip'] = 'Kansiopolku gzip-ty�kaluun, tarvitaan purkamaan ulkoasutiedostoja p��tteell� .tar.gz [Vakio = /bin/gzip]';
$messages['help_path_to_bz2'] = 'Kansiopolku bzip2-ty�kaluun, tarvitaan purkamaan ulkoasutiedostoja p��tteell� .tar.bz2 [Vakio = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = 'Kansiopolku unzip-ty�kaluun, tarvitaan purkamaan ulkoasutiedostoja p��tteell� .zip [Vakio = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'K�yt� mukana tullutta PHP:n natiivia purkamaan zip-tiedostot [Vakio = Ei]';
// Lis��miset (uploads)
$messages['help_uploads_enabled'] = 'Sallitaanko k�ytt�jien lis�t� tiedostoja. T�m� koskettaa resurssiosuutta, kustomoitujen ulkoasujen ja kielien lis��mist� [Vakio = Kyll�]';
$messages['help_maximum_file_upload_size'] = 'Tiedoston maksimikoko bittein�. T�m� koko ei ole ikin� suurempi kuin PHP:n oma rajoitus [Vakio = 2000000]';
$messages['help_upload_forbidden_files'] = 'V�lily�nnill� erotettu lista tiedostotyypeist�, joiden lis��mist� ei sallita. Voit k�ytt�� jokereita: \'*\' ja \'?\' [Vakio = *.php *.php3 *.php4 *.phtml]';
// K�ytt�liittym�t
$messages['help_xmlrpc_api_enabled'] = 'Salli tai est� XMLRPC:n yhteys blogeihin [Vakio = Kyll�]';
$messages['help_rdf_enabled'] = 'Salli tietojen yhdist�minen Atom tai RSS -feedien kautta [Vakio = Kyll�]';
$messages['help_default_rss_profile'] = 'Tietojen yhdist�misess� k�ytet��n perusversiota RSS tai Atom -feedeist� ellei toisin m��ritell� [Vakio = RSS 1.0]';
// Turvallisuus
$messages['help_security_pipeline_enabled'] = 'Ota security pipeline ja kaikki siihen liittyv�t filtterit k�ytt��n. T�m� vaikuttaa my�s plugineihin, jotka rekister�iv�t uusia filttereit� [Vakio = Kyll�]';
$messages['help_ip_address_filter_enabled'] = 'Ota IP-osoitefiltteri k�ytt��n. Security pipelinen on oltava p��ll� t�m�n ominaisuuden toimimiseksi. [Vakio = Kyll�]';
$messages['help_content_filter_enabled'] = 'Ota regular expression-based sis�lt�filtteri k�ytt��n. Security pipelinen on oltava p��ll� t�m�n ominaisuuden toimimiseksi. [Vakio = Kyll�]';
$messages['help_maximum_comment_size'] = 'Kommenttien maksimikoko bittein�. Aseta 0:ksi ottaakseni t�m�n ominaisuuden pois k�yt�st� [Vakio = 0]';
// bayesian filtteri
$messages['help_bayesian_filter_enabled'] = 'Ota Bayesian filtteri k�ytt��n paremman automaattisen spam-filtter�innin saavuttamiseksi [Vakio = Kyll�]';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'Maksimikynnys, jota ennen kommenttia ei lasketa spammiksi [Vakio = 0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'Minimikynnys, jonka ylitt�vi� viestej� ei lasketa spammiksi [Vakio = 0.2]';
$messages['help_bayesian_filter_min_length_token'] = 'Lyhin sanan merkkim��r�, jolloin Bayesian filtteri alkaa toimia [Vakio = 3]';
$messages['help_bayesian_filter_max_length_token'] = 'Pisin sanan merkkim��r�, jolloin Bayesian filtteri viel� tutkii sanan [Vakio = 100]';
$messages['help_bayesian_filter_number_significant_tokens'] = 'Merkityksellisten merkkien m��r� [Vakio = 15]';
$messages['help_bayesian_filter_spam_comments_action'] = 'Mit� tehd��n spammiksi merkatuille kommenteille? K�yt� "Poista" -asetusta vain, jos filtteri on opetettu oikein [Vakio = Pid�]';
$messages['keep_spam_comments'] = 'Pid� tietokannassa merkattuna spammiksi';
$messages['throw_away_spam_comments'] = 'Poista (�l� tallenna)';
// Resurssit
$messages['help_resources_enabled'] = 'Ota k�ytt��n resurssit? [Vakio = Kyll�]';
$messages['help_resources_folder'] = 'Kansio, jossa resursseja s�ilytet��n. Aseta webserveripuun ulkopuolelle (public_html) paremman turvallisuuden saavuttamiseksi [Vakio = ./gallery]';
$messages['help_thumbnail_method'] = 'Mill� metodilla esikatsekuvat muodostetaan? Jos k�ytet��n PHP:t�, tuki GD:lle vaaditaan [Vakio = PHP]';
$messages['help_path_to_convert'] = 'Convert-ty�kalun kansiopolku (ImageMagick-paketti). Vaaditaan, jos esikatselukuvan muodostamiseksi valittu "ImageMagick" [Vakio = /usr/bin/convert]';
$messages['help_thumbnail_format'] = 'Miss� formaatissa esikatselukuvat tallennetaan? [Vakio = sama kuin kuva]';
$messages['help_thumbnail_height'] = 'Pienien esikatselukuvien korkeus [Vakio = 120]';
$messages['help_thumbnail_width'] = 'Pienien esikatselukuvien leveys [Vakio = 120]';
$messages['help_medium_size_thumbnail_height'] = 'Keskikokoisten esikatselukuvien korkeus [Vakio = 480]';
$messages['help_medium_size_thumbnail_width'] = 'Keskikokoisten esikatselukuvien leveys [Vakio = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'S�ilyt� kuvasuhde esikatselukuvia generoidessa. Saattaa muodostaa suurempia esikatselukuvia kuin yl�puolella on m��ritelty, mutta laatu on parempi [Vakio = Kyll�]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'Pakota pLog k�ytt�m��n vain GD1-funktioita [Vakio = Ei]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'Kuvien pehment�mist� varten k�ytett�v� algoritmi. K�ytet��n vain, kun esikatselukuvien muodostamismetodi on GD [Vakio = PHP Imagecopyresampled]';
$messages['help_resources_quota'] = 'Globaali resurssiquota blogeille bittein� (esim. 5242880 Bitti� = 5MT), tai k�yt� 0:llaa rajoittamana quotana [Vakio = 0]';
$messages['help_resource_server_http_cache_enabled'] = 'Ota k�ytt��n tuki headerille: "If-Modified-Since" HTTP:n ehdollisille pyynn�ille. S��st�� siirtokaistaa [Vakio = Ei]';
$messages['help_resource_server_http_cache_lifetime'] = 'Aika mikrosekunneissa, jolloin asiakkaiden pit�isi k�ytt�� resurssien v�limuistissa olevaa versiota [Vakio = 9999999]';
$messages['same_as_image'] = 'Sama kuin alkuper�inen kuva';
// Haku
$messages['help_search_engine_enabled'] = 'Ota hakukone k�ytt��n [Vakio = Kyll�]';
$messages['help_search_in_custom_fields'] = 'Hae kustomoiduista kentist� [Vakio = Kyll�]';
$messages['help_search_in_comments'] = 'Hae kommenteista [Vakio = Kyll�]';

// Puhdistaminen
$messages['purge'] = 'Poista';
$messages['cleanup_spam'] = 'Poista spammit';
$messages['cleanup_spam_help'] = 'T�m� poistaa kaikki kommentit, jotka k�ytt�j�t ovat merkanneet spammiksi. Poistettuja kommentteja ei ole mahdollista palauttaa';
$messages['spam_comments_purged_ok'] = 'Spam-kommentit poistettu onnistuneesti';
$messages['cleanup_posts'] = 'Siivoa viestit';
$messages['cleanup_posts_help'] = 'T�m� poistaa kaikki viestit, jotka k�ytt�j�t ovat poistaneet (merkitty poistetuiksi). Poistettuja viestej� ei ole mahdollista palauttaa';
$messages['posts_purged_ok'] = 'Viestien siivoaminen onnistui';

/// yhteenveto///
// etusivu
$messages['summary'] = 'Yhteenveto';
$messages['register'] = 'Rekister�idy';
$messages['summary_welcome'] = 'Tervetuloa!';
$messages['summary_most_active_blogs'] = 'Aktiivisimmat blogit';
$messages['summary_most_commented_articles'] = 'Kommentoiduimmat viestit';
$messages['summary_most_read_articles'] = 'Luetuimmat viestit';
$messages['password_forgotten'] = 'Unohditko salasanasi?';
$messages['summary_newest_blogs'] = 'Uusimmat blogit';
$messages['summary_latest_posts'] = 'Viimeisimm�t viestit';
$messages['summary_search_blogs'] = 'Etsi blogeista';

// blogilista
$messages['updated'] = 'P�ivitetty';
$messages['total_reads'] = 'Yhteens�';

// blogiprofile
$messages['blog'] = 'Blogi';
$messages['latest_posts'] = 'Viimeisimm�t viestit';

// registration
$messages['register_step0_title'] = 'K�ytt�ehtosopimus';
$messages['agreement'] = 'Sopimus'; 
$messages['decline'] = 'En hyv�ksy';
$messages['accept'] = 'Hyv�ksyn';
$messages['read_service_agreement'] = 'Ole yst�v�llinen ja lue palvelun k�ytt�ehdot ja klikkaa "hyv�ksy", jos hyv�ksyt k�ytt�ehdot';
$messages['register_step1_title'] = 'Luo k�ytt�j� [1/4]';
$messages['register_step1_help'] = 'Ensimm�iseksi sinun t�ytyy tehd� uusi k�ytt�j� saadaksesi blogin. T�m� k�ytt�j� omistaa blogin ja h�nell� on oikeus k�ytt�� kaikkia blogin toimintoja';
$messages['register_next'] = 'Seuraava';
$messages['register_back'] = 'Edellinen';
$messages['register_step2_title'] = 'Luo blogi [2/4]';
$messages['register_blog_name_help'] = 'Uuden blogisi nimi';
$messages['register_step3_title'] = 'Valitse ulkoasu [3/4]';
$messages['step1'] = 'Kohta 1';
$messages['step2'] = 'Kohta 2';
$messages['step3'] = 'Kohta 3';
$messages['register_step3_help'] = 'Valitse yksi ulkoasuista blogisi vakioulkoasuksi. Sen voi aina vaihtaa toiseen, jos kyll�styt t�h�n vaihtoehtoon';
$messages['error_must_choose_template'] = 'Ole hyv� ja valitse yksi ulkoasu';
$messages['select_template'] = 'Valitse ulkoasu';
$messages['register_step5_title'] = 'Onnittelut! [4/4]';
$messages['finish'] = 'Valmis';
$messages['register_need_confirmation'] = 'S�hk�postiviesti on l�hetetty antamaasi s�hk�postiosoitteeseen. Se sis�lt�� aktivointilinkin. Ole hyv� ja klikkaa linkki� kun saat s�hk�postiviestin. T�m�n j�lkeen k�ytt�j�tunnuksesi on aktivoitu';
$messages['register_step5_help'] = 'Onnittelut, k�ytt�j�tunnuksesi ja blogisi on onnistuneesti luotu!';
$messages['register_blog_link'] = 'Jos haluat katsoa uutta blogiasi, p��set sinne t�st� linkist�: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'Jos haluat kirjoittaa v�litt�m�sti ensimm�isen viestin <a href="admin.php">klikkaa t�st�</a>';
$messages['register_error'] = 'Prosessin jossain vaiheessa tapahtui virhe';
$messages['error_registration_disabled'] = 'Valitettavasti t�m� sivusto ei salli uusia blogirekister�intej�';
// registration article topic and text
$messages['register_default_article_topic'] = 'Onnittelut!';
$messages['register_default_article_text'] = 'Jos pystyt lukemaan t�m�n viestin, se tarkoittaa, ett� rekister�intiprosessi onnistui ja voit aloittaa blogaamisen';
$messages['register_default_category'] = 'Yleist�';
// confirmation email
$messages['register_confirmation_email_text'] = 'Ole hyv� klikkaa linkki� aktivoidaksesi tunnuksesi:

%s

Hauskaa p�iv�njatkoa';
$messages['error_invalid_activation_code'] = 'Valitettavasti aktivointikoodi oli v��r�';
$messages['blog_activated_ok'] = 'Onnittelut, k�ytt�j�tunnuksesi ja blogisi on aktivoitu!';
// unohditko salasanasi?
$messages['reset_password'] = 'Nollaa salasana';
$messages['reset_password_username_help'] = 'K�ytt�j�n nimi, jonka salasanan haluat nollata';
$messages['reset_password_email_help'] = 'S�hk�postiosoite, jota k�ytettiin k�ytt�j�n rekister�intiin';
$messages['reset_password_help'] = 'Jos et muista salanasaasi, k�yt� t�t� lomaketta salasanan nollaukseen. Kirjoita k�ytt�j�n nimi ja s�hk�postiosoite, jota k�ytettiin k�ytt�j�n rekister�intiin';
$messages['error_resetting_password'] = 'Salasanan nollauksessa tapahtui virhe. Tarkasta antamasi tiedot ja yrit� uudelleen';
$messages['reset_password_error_incorrect_email_address'] = 'S�hk�postiosoite ei ole moitteeton tai se ei ole sama, jota k�ytettiin k�ytt�j�n rekister�intiin';
$messages['password_reset_message_sent_ok'] = 'S�hk�postiviesti l�hetettiin sinulle. Se sis�lt�� linkin, jota klikkaamalla voit nollata salasanasi';
$messages['error_incorrect_request'] = 'URLin parametrit eiv�t ole oikeat';
$messages['change_password'] = 'Aseta uusi salasana';
$messages['change_password_help'] = 'Kirjoita ja vahvista uusi salasanasi';
$messages['new_password'] = 'Uusi salasana';
$messages['new_password_help'] = 'Kirjoita t�h�n uusi salasanasi';
$messages['password_updated_ok'] = 'Salasanasi on p�ivitetty onnistuneesti';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'T�m� sivu n�ytt�� paljaalta ja tyylitt�m�lt�, koska et k�yt� sopivaa selainta. N�hd�ksesi sen parhaassa muodossaan <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">p�ivit�</a> selaimesi tukemaan webstandardeja. Se on ilmaista ja helppoa.';
$messages['jump_to_navigation'] = 'Navigoi.';
$messages['comment_email_never_display'] = 'Rivi ja kappalejaot automaattisesti, s�hk�postiosoitetta ei n�ytet� ikin�.';
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
