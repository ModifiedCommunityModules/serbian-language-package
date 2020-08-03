<?php
/* --------------------------------------------------------------
   $Id: categories.php 12455 2019-12-03 16:04:19Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(categories.php,v 1.22 2002/08/17); www.oscommerce.com
   (c) 2003	 nextcommerce (categories.php,v 1.10 2003/08/14); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   --------------------------------------------------------------*/
 
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TEXT_EDIT_STATUS', 'Status activnosti');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('HEADING_TITLE', 'Kategorija');
define('HEADING_TITLE_SEARCH', 'Pretra&#382;i: ');
define('HEADING_TITLE_GOTO', 'Idi na:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Kategorije / Proizvodi');
define('TABLE_HEADING_ACTION', 'Akcija');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_STARTPAGE', 'TOP');
define('TABLE_HEADING_STOCK','Lager');
define('TABLE_HEADING_SORT','Sortiranje');
define('TABLE_HEADING_EDIT','Izmene');
// BOF - Tomcraft - 2010-04-07 - Added definition for products model
define('TABLE_HEADING_PRODUCTS_MODEL','Model proizvoda');
// EOF - Tomcraft - 2010-04-07 - Added definition for products model

// BOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
define('TABLE_HEADING_IMAGE','Slika');
// EOF - Hendrik - 2010-08-11 - Thumbnails in admin products list

define('TEXT_ACTIVE_ELEMENT','Aktivan element');
define('TEXT_INFORMATIONS','Informacije');
define('TEXT_MARKED_ELEMENTS','Obele&#382;eni elementi');
define('TEXT_INSERT_ELEMENT','Novi elementi');

define('TEXT_WARN','Upozorenje lagera:');
define('TEXT_WARN_MAIN','Glavni proizvod');
define('TEXT_NEW_PRODUCT', 'Novi proizvod u &quot;%s&quot;');
define('TEXT_EDIT_PRODUCT', 'Izmeni proizvod u &quot;%s&quot;');
define('TEXT_CATEGORIES', 'Kategorije:');
define('TEXT_PRODUCTS', 'Proizvodi:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Cena:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Klasa poreza:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Prose&#269;na ocena:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Lager:');
define('TEXT_PRODUCTS_DISCOUNT_ALLOWED_INFO', 'Maksimalno dozvoljeno sni&#382;enje:');
define('TEXT_DATE_ADDED', 'Datum dodavanja:');
define('TEXT_DATE_AVAILABLE', 'Datum dostupnosti:');
define('TEXT_LAST_MODIFIED', 'Zadnje izmene:');
define('TEXT_IMAGE_NONEXISTENT', 'Slika ne postoji');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Molimo vas da dodate novu kategoriju ili proizvod u <br />&nbsp;<br /><b>%s</b>');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Za vi&#353;e informacija, molimo vas posetite <a href="http://%s" target="_blank"><u>web stranicu</u></a> ovog proizvoda.');
define('TEXT_PRODUCT_DATE_ADDED', 'Ovaj proizvod je dodat u na&#353; katalog na %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Ovaj proizvod &#263;e biti na lageru %s.');

define('TEXT_EDIT_INTRO', 'Molimo vas da napravite sve potrebne promene');
define('TEXT_EDIT_CATEGORIES_ID', 'ID kategorije:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Ime kategorije:');
define('TEXT_EDIT_CATEGORIES_HEADING_TITLE', 'Zaglavnje kategorije:');
define('TEXT_EDIT_CATEGORIES_DESCRIPTION', 'Opis kategorije:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Ime kategorije:');

define('TEXT_EDIT_SORT_ORDER', 'Pozicija u redosledu:');

define('TEXT_INFO_COPY_TO_INTRO', 'Molimo vas da izaberete novu kategoriju u koju &#382;elite da kopirate ovaj proizvod');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Trenutna kategorija:');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nova kategorija u &quot;%s&quot;');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Izmeni kategoriju &quot;%s&quot;');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Izbri&#353;i kategoriju');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Premesti kategoriju');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Izbri&#353;i kategoriju');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Premesti proizvod');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopiraj u');
define('TEXT_INFO_HEADING_MOVE_ELEMENTS', 'Premesti element');
define('TEXT_INFO_HEADING_DELETE_ELEMENTS', 'Izbri&#353;i element');

define('TEXT_DELETE_CATEGORY_INTRO', 'Da li ste sigurni da &#382;elite da izbri&#353;ete ovu kategoriju?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Da li ste sigurni da &#382;elite da izbri&#353;ete ovaj proizvod?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>Upozorenje:</b> %s sub-kategorija je jo&#353; uvek povezano sa ovom kategorijom!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>Upozorenje:</b> %s proizvoda je jo&#353; uvek povezano sa ovom kategorijom!');

define('TEXT_MOVE_WARNING_CHILDS', '<b>Info:</b> %s sub-kategorija je jo&#353; uvek povezano sa ovom kategorijom!');
define('TEXT_MOVE_WARNING_PRODUCTS', '<b>Info:</b> %s proizvoda je jo&#353; uvek povezano sa ovom kategorijom!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Molimo vas da izaberete koje kategorije &#382;elite u <b>%s</b> da smestite');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Molimo vas da izaberete koje kategorije &#382;elite u <b>%s</b> da smestite');
define('TEXT_MOVE', 'Prenesi <b>%s</b> u:');
define('TEXT_MOVE_ALL', 'Prenesi sve u:');

define('TEXT_NEW_CATEGORY_INTRO', 'Molimo vas popunite informacije za novu kategoriju.');
define('TEXT_CATEGORIES_NAME', 'Ime kategorije:');
define('TEXT_CATEGORIES_IMAGE', 'Slika kategorije:');

define('TEXT_META_TITLE', 'Meta naslov:');
define('TEXT_META_DESCRIPTION', 'Meta opis:');
define('TEXT_META_KEYWORDS', 'Meta klju&#269;ne re&#269;i:');

define('TEXT_SORT_ORDER', 'Pozicija u redosledu:');

define('TEXT_PRODUCTS_STATUS', 'Status proizvoda:');
define('TEXT_PRODUCTS_STARTPAGE', 'Prika&#382;i na po&#269;etnoj stani:');
define('TEXT_PRODUCTS_STARTPAGE_YES', 'Da');
define('TEXT_PRODUCTS_STARTPAGE_NO', 'Ne');
define('TEXT_PRODUCTS_STARTPAGE_SORT', 'Pozicija u redosledu (po&#269;etna strana):');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Datum dostupnosti:');
// BOF - Hetfield - 2010-01-28 - Changing product available in correctly names for status
define('TEXT_PRODUCT_AVAILABLE', 'Aktivno');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Neaktivno');
// EOF - Hetfield - 2010-01-28 - Changing product available in correctly names for status
define('TEXT_PRODUCTS_MANUFACTURER', 'Proizvo&#273;a&#269; proizvoda:');
define('TEXT_PRODUCTS_MANUFACTURER_MODEL', 'Broj modela proizvo&#273;a&#269;a (MPN):');
define('TEXT_PRODUCTS_NAME', 'Ime proizvoda:');
define('TEXT_PRODUCTS_HEADING_TITLE', 'Naslov proizvoda:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Opis proizvoda:');
define('TEXT_PRODUCTS_QUANTITY', 'Lager proizvoda:');
define('TEXT_PRODUCTS_MODEL', 'Model proizvoda:');
define('TEXT_PRODUCTS_IMAGE', 'Slika proizvoda:');
define('TEXT_PRODUCTS_URL', 'URL proizvoda:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(bez prefiksa http://)</small>');
define('TEXT_PRODUCTS_PRICE', 'Cena proizvoda:');
define('TEXT_PRODUCTS_WEIGHT', 'Tezina proizvoda:');
define('TEXT_PRODUCTS_EAN','GTIN/EAN');
define('TEXT_PRODUCT_LINKED_TO','Povezano sa:');
define('TEXT_DELETE', 'Izbri&#353;i');
define('EMPTY_CATEGORY', 'Prazna kategorija');

define('TEXT_HOW_TO_COPY', 'Metoda za kopiranje proizvoda:');
define('TEXT_COPY_AS_LINK', 'Veza');
define('TEXT_COPY_AS_DUPLICATE', 'Dupliraj');

define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Gre&#353;ka: Ne mo&#382;e se povezati proizvod u istom direktorijumu.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Gre&#353;ka: Direktorijum za slike kataloga nije upisiv: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Gre&#353;ka: Direktorijum za slike kataloga nepostoji: ' . DIR_FS_CATALOG_IMAGES);

define('TEXT_PRODUCTS_DISCOUNT_ALLOWED','Maksimalno dozvoljeno sni&#382;enje:');
define('HEADING_PRICES_OPTIONS','<b>Opcije cene</b>');
define('HEADING_PRODUCT_IMAGES','<b>Slike proizvoda</b>');
define('TEXT_PRODUCTS_WEIGHT_INFO','<small>(kg)</small>');
define('TEXT_PRODUCTS_SHORT_DESCRIPTION','Kratak opis:');
define('TEXT_PRODUCTS_KEYWORDS', 'Dodatna re&#269; za pretragu:');
define('TXT_STK','Kom: ');
define('TXT_PRICE',' :');
define('TXT_NETTO','Neto cena: ');
define('TXT_STAFFELPREIS','Rastu&#263;a cena');

define('HEADING_PRODUCTS_MEDIA','<b>Medija proizvoda</b>');
define('TABLE_HEADING_PRICE','Cena');

define('TEXT_FSK18','FSK 18:');
define('TEXT_CHOOSE_INFO_TEMPLATE_CATEGORIE','&#353;ema za izlistavanje kategorija');
define('TEXT_CHOOSE_INFO_TEMPLATE_LISTING','&#353;ema za izlistavanje proizvoda');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
//define('TEXT_PRODUCTS_SORT','Sorting:');
define('TEXT_PRODUCTS_SORT','Pozicija u redosledu:');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TEXT_EDIT_PRODUCT_SORT_ORDER','Sortiranje proizvoda');
define('TXT_PRICES','Cena');
define('TXT_NAME','Ime proizvoda');
define('TXT_ORDERED','Naru&#269;eni proizvodi');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TXT_SORT','Pozicija u redosledu');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TXT_WEIGHT','Te&#382;ina');
define('TXT_QTY','Na lageru');
// BOF - Tomcraft - 2009-09-12 - add option to sort by date and products model
define('TXT_DATE','Datum dostupnosti');
define('TXT_MODEL','Model proizvoda');
// EOF - Tomcraft - 2009-09-12 - add option to sort by date and products model

define('TEXT_MULTICOPY','Multikopiranje');
define('TEXT_MULTICOPY_DESC','Kopiraj elemente u slede&#263;e kategorije (Ako je jedna ku&#263;ica izabrana, pojedina&#269;na pode&#353;avanja &#263;e biti izostavljena.)');
define('TEXT_SINGLECOPY','Pojedina&#269;no');
define('TEXT_SINGLECOPY_DESC','Kopiraj elemente u naredne kategorije');
define('TEXT_SINGLECOPY_CATEGORY','Kategorija:');

define('TEXT_PRODUCTS_VPE','Jedinica');
define('TEXT_PRODUCTS_VPE_VISIBLE','Prika&#382;i jedini&#269;nu cenu:');
define('TEXT_PRODUCTS_VPE_VALUE',' Vrednost:');

define('CROSS_SELLING_1','Unakrsno prodavanje');
define('CROSS_SELLING_2','za proizvod');
define('CROSS_SELLING_SEARCH','Pretra&#382;i proizvod:');
define('BUTTON_EDIT_CROSS_SELLING','Unakrsno prodavanje');
define('HEADING_DEL','Brisanje');
define('HEADING_ADD','Dodaj?');
define('HEADING_GROUP','Grupa');
define('HEADING_SORTING','Sortiranje');
define('HEADING_MODEL','Model');
define('HEADING_NAME','Proizvod');
define('HEADING_CATEGORY','Kategorija');
define('HEADING_IMAGE','Slika');

// BOF - Tomcraft - 2009-11-06 - Use variable TEXT_PRODUCTS_DATE_FORMAT
define('TEXT_PRODUCTS_DATE_FORMAT', 'JJJJ-MM-TT');
// EOF - Tomcraft - 2009-11-06 - Use variable TEXT_PRODUCTS_DATE_FORMAT

// BOF - web28 - 2010-08-03 - add metatags max charakters info
define('TEXT_CHARACTERS','karakteri');
// EOF - web28 - 2010-08-03 - add metatags max charakters info

define('TEXT_ATTRIBUTE_COPY', 'Tako&#273;e kopiraj atribute proizvoda');
define('TEXT_ATTRIBUTE_COPY_INFO', 'Tako&#273;e kopiraj atribute proizvoda<br />Preporu&#269;uje se samo za pojedina&#269;no kopiranje (1 predmet)');

define('TEXT_PRODUCTS_ORDER_DESCRIPTION','Opis narud&#382;be');

define('TEXT_HOW_TO_LINK', '<b>Prikaz stranice nakoj kopiranja / uvezivanja</b>');
define('TEXT_HOW_TO_LINK_INFO', 'Ekran za unos predmeta <br/> (Za vi&#353;e &#269;lanaka do zadnjih na popisu)');

define('TEXT_SET_GROUP_PERMISSIONS', 'Naslijedite dozvole grupe korisnika za sve podmape i proizvode?');

define('HEADING_TITLE_ONLY_INACTIVE_PRODUCTS', 'Prika&#382;i samo neaktivne proizvode');

// BOF - Timo Paul (mail[at]timopaul[dot]biz) - 2014-01-17 - duplicate products content and links
define('TEXT_CONTENT_COPY', 'Tako&#273;er kopirajte sadr&#382;aj proizvoda');
define('TEXT_CONTENT_COPY_INFO', 'Kopiraj i sadr&#382;aj proizvoda<br />Preporu&#269;uje se samo za pojedina&#269;nu kopiju (1 predmet)');
define('TEXT_LINKS_COPY', 'Tako&#273;e kopiraj veze proizvoda');
define('TEXT_LINKS_COPY_INFO', 'Tako&#273;e Kopiraj veze proizvoda<br />Preporu&#269;uje se samo za pojedina&#269;nu kopiju (1 predmet)');
// EOF - Timo Paul (mail[at]timopaul[dot]biz) - 2014-01-17 - duplicate products content and links

define('TEXT_GRADUATED_PRICES_INFO', 'Broj ulaznih polja za gradivnih cena mo&#382;e biti "<b>Konfiguracija-admin Opcije oblast-broj gradivnih cena</b>" za korekciju.');
define('TEXT_CATEGORY_SETTINGS', 'Postavke kategorije:');

define('ERROR_QTY_SAVE_CHANGED', 'Prilikom ure&#273;ivanja proizvoda, zalihe su promenjene i nisu sa&#269;uvane.');

define('TEXT_NO_MOVE_POSSIBLE', 'Nije mogu&#263;e premestiti proizvod.');

define('TEXT_IN', 'u:');

define('TEXT_PRODUCTS_ATTRIBUTES_RECALCULATE', 'Ponovi obra&#269;un atributa prilikom promene poreske stope');

define('HEADING_TITLE_CAT_BREADCRUMB', ' u &quot;%s&quot;');

define('TEXT_PRODUCTS_TAGS', 'Funkcije proizvoda');

define('TEXT_GRADUATED_PRICES_GROUP_INFO', 'Grupa kupaca trenutno nema dozvolu da pregleda gradivnih cena. Ovo se mo&#382;e promeniti u postavkama grupe kupaca u bilo kom trenutku.');

define('TEXT_NO_FILE', 'Nema postoje&#263;e datoteke predlo&#353;ka!');

define('ERROR_COPY_METHOD_NOT_SPECIFIED', 'Metod kopiranja nije naveden.');
define('ERROR_COPY_METHOD_NOT_ALLOWED', 'Metod kopiranja "Veza" nije dozvoljen u kategorijama.');

define('TEXT_TAGS_COPY', 'Kopiranje i karakteristike proizvoda');
define('TEXT_TAGS_COPY_INFO', 'Kopiraj i karakteristike proizvoda<br />Preporu&#269;uje se za pojedina&#269;no kopiranje (1 predmet)');

define('TEXT_PRODUCTS_LAST_MODIFIED', 'Zadnji put promenjeno:');
?>