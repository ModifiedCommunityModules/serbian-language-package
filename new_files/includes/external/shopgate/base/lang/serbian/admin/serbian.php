<?php
/**
 * Shopgate GmbH
 *
 * URHEBERRECHTSHINWEIS
 *
 * Dieses Plugin ist urheberrechtlich geschützt. Es darf ausschließlich von Kunden der Shopgate GmbH
 * zum Zwecke der eigenen Kommunikation zwischen dem IT-System des Kunden mit dem IT-System der
 * Shopgate GmbH über www.shopgate.com verwendet werden. Eine darüber hinausgehende Vervielfältigung, Verbreitung,
 * öffentliche Zugänglichmachung, Bearbeitung oder Weitergabe an Dritte ist nur mit unserer vorherigen
 * schriftlichen Zustimmung zulässig. Die Regelungen der §§ 69 d Abs. 2, 3 und 69 e UrhG bleiben hiervon unberührt.
 *
 * COPYRIGHT NOTICE
 *
 * This plugin is the subject of copyright protection. It is only for the use of Shopgate GmbH customers,
 * for the purpose of facilitating communication between the IT system of the customer and the IT system
 * of Shopgate GmbH via www.shopgate.com. Any reproduction, dissemination, public propagation, processing or
 * transfer to third parties is only permitted where we previously consented thereto in writing. The provisions
 * of paragraph 69 d, sub-paragraphs 2, 3 and paragraph 69, sub-paragraph e of the German Copyright Act shall remain unaffected.
 *
 * @author Shopgate GmbH <interfaces@shopgate.com>
 */


### Plugin ###
define('SHOPGATE_CONFIG_EXTENDED_ENCODING', 'Kodiranje sistema pogona');
define('SHOPGATE_CONFIG_EXTENDED_ENCODING_DESCRIPTION', 'Odaberite kodiranje sistema pogona. Ovo je obi&#269;no  "ISO-8859-15 " za verzije pre 1,06.');

### Menu ###
define('BOX_SHOPGATE', 'Shopgate');
define('BOX_SHOPGATE_INFO', '&#352;ta je Shopgate');
define('BOX_SHOPGATE_HELP', 'Pomo&#263; pri instalaciji');
define('BOX_SHOPGATE_CONFIG', 'Pode&#353;avanja');

### Links ###
define('SHOPGATE_LINK_HOME', 'https://www.shopgate.com/en/?partner=30051');
define('SHOPGATE_LINK_WIKI', 'https://support.shopgate.com/hc/en-us/articles/202911763');

### Configuration ###
define('SHOPGATE_CONFIG_TITLE', 'SHOPGATE');
define('SHOPGATE_CONFIG_ERROR', 'GRE&#352;KA:');
define('SHOPGATE_CONFIG_ERROR_SAVING', 'Gre&#353;ka pri &#269;uvanju konfiguracije. ');
define('SHOPGATE_CONFIG_ERROR_LOADING', 'Gre&#353;ka pri u&#269;itavanju konfiguracije. ');
define('SHOPGATE_CONFIG_ERROR_READ_WRITE', 'Proverite dozvole (777) za fasciklu "/shopgate_library/config" za dodatnu komponentu za ulaz.');
define('SHOPGATE_CONFIG_ERROR_INVALID_VALUE', 'Proverite unos u slede&#263;a polja: ');
define('SHOPGATE_CONFIG_ERROR_DUPLICATE_SHOP_NUMBERS', 'Postoji vi&#353;e konfiguracija sa istim brojem pogona. To mo&#382;e izazvati velika nepredvi&#273;ene probleme!');
define('SHOPGATE_CONFIG_INFO_MULTIPLE_CONFIGURATIONS', 'Konfiguracije za vi&#353;e tr&#382;i&#353;nih mesta su aktivne.');
define('SHOPGATE_CONFIG_SAVE', 'Sa&#269;uvaj');
define('SHOPGATE_CONFIG_GLOBAL_CONFIGURATION', 'Globalna konfiguracija');
define('SHOPGATE_CONFIG_USE_GLOBAL_CONFIG', 'Koristi globalnu konfiguraciju za ovaj jezik.');
define('SHOPGATE_CONFIG_MULTIPLE_SHOPS_BUTTON', 'Pode&#353;avanje Shopgate na vi&#353;e prodavnica');
define(
'SHOPGATE_CONFIG_LANGUAGE_SELECTION',
    'U Shopgate je potrebna prodavnica za svako tr&#382;i&#353;te koje je ograni&#269;eno na jedan jezik i valutu. Ovde mo&#382;ete mapirati konfigurisane jezike na Shopgate u razli&#269;itim '
    .
    'marketima. Odaberite jezik i unesite akreditive va&#353;e prodavnice za kupovinu na odgovaraju&#263;em marketu. Ako nemate prodavnicu za kupovinu odre&#273;enog jezika '
    .
    'bice kori&#353;&#263;enja globalna verzija'
);

### Connection Settings ###
define('SHOPGATE_CONFIG_CONNECTION_SETTINGS', 'Postavke veze');

define('SHOPGATE_CONFIG_CUSTOMER_NUMBER', 'Broj kupca');
define('SHOPGATE_CONFIG_CUSTOMER_NUMBER_DESCRIPTION', 'Broj kupca mo&#382;ete prona&#263;i u odeljku "integracija" u prodavnici.');

define('SHOPGATE_CONFIG_SHOP_NUMBER', 'Broj pogona');
define('SHOPGATE_CONFIG_SHOP_NUMBER_DESCRIPTION', 'Mo&#382;ete na&#263;i broj prodavnice u odeljku "integracija" va&#353;e prodavnice.');

define('SHOPGATE_CONFIG_APIKEY', 'API klju&#269;');
define('SHOPGATE_CONFIG_APIKEY_DESCRIPTION', 'API klju&#269; mo&#382;ete prona&#263;i u odeljku "integracija" "" u prodavnici.');

### Mobile Redirect ###
define('SHOPGATE_CONFIG_MOBILE_REDIRECT_SETTINGS', 'Mobilna preusmeravanje');

define('SHOPGATE_CONFIG_ALIAS', 'Pseudonim pogona');
define('SHOPGATE_CONFIG_ALIAS_DESCRIPTION', 'Pseudonim mo&#382;ete prona&#263;i u odeljku "integracija" u prodavnici.');

define('SHOPGATE_CONFIG_CNAME', 'Prilago&#273;ena URL adresa za mobilnu Web stranicu (CNAME) sa http://');
define(
'SHOPGATE_CONFIG_CNAME_DESCRIPTION',
    'Unesite prilago&#273;enu URL adresu (koju je definisao CNAME) za va&#353;u mobilnu Web lokaciju. URL mo&#382;ete prona&#263;i u odeljku "integracija" u prodavnici '
    .
    'Nakon &#353;to aktivirate ovu opciju u "postavkama" &equals; &gt; "Mobilna Web lokacija/Web App" odeljak.'
);

define('SHOPGATE_CONFIG_REDIRECT_LANGUAGES', 'Preusmereni jezici');
define(
'SHOPGATE_CONFIG_REDIRECT_LANGUAGES_DESCRIPTION',
'Odaberite jezike koji bi trebalo preusmeriti na ovu prodavnicu u prodavnici. Mora biti izabran najmanje jedan jezik. Pritisnite taster CTRL da biste izabrali vi&#353;e stavki.'
);

### Export ###
define('SHOPGATE_CONFIG_EXPORT_SETTINGS', 'Izvoz kategorija i proizvoda');

define('SHOPGATE_CONFIG_LANGUAGE', 'Jezik');
define('SHOPGATE_CONFIG_LANGUAGE_DESCRIPTION', 'Odaberite jezik na kojem kategorije i proizvodi treba da budu izvezeni.');

define('SHOPGATE_CONFIG_EXTENDED_CURRENCY', 'Valute');
define('SHOPGATE_CONFIG_EXTENDED_CURRENCY_DESCRIPTION', 'Izbor valute za izvoz proizvoda.');

define('SHOPGATE_CONFIG_EXTENDED_COUNTRY', 'Zemlja');
define('SHOPGATE_CONFIG_EXTENDED_COUNTRY_DESCRIPTION', 'Odaberite zemlju za koju bi trebalo izvesti Va&#353;e proizvode');

define('SHOPGATE_CONFIG_EXTENDED_TAX_ZONE', 'Poreska zona za tr&#382;ni kapije');
define('SHOPGATE_CONFIG_EXTENDED_TAX_ZONE_DESCRIPTION', 'Odaberite va&#382;e&#263;u poresku zonu za tr&#382;ni punkt.');

define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER', 'Redosled sortiranja po kategorijama');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_ON', 'Da');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_OFF', 'Ne');
define(
'SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_DESCRIPTION',
'Odaberite  "da " Ako je redosled sortiranja kategorija u va&#353;oj mobilnoj radnji naopa&#269;ke.'
);

define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER', 'Redosled sortiranja u obrnutom proizvodu');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_ON', 'Da');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_OFF', 'Ne');
define(
'SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_DESCRIPTION',
'Odaberite "da" Ako je redosled sortiranja proizvoda u va&#353;oj mobilnoj radnji okrenut naopa&#269;ke.'
);

define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION', 'Opis proizvoda');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESC_ONLY', 'Samo opis');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_SHORTDESC_ONLY', 'Samo kratak opis');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESC_SHORTDESC', 'Opis i kratak opis');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_SHORTDESC_DESC', 'Kratak opis i opis');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESCRIPTION', 'Izaberite metod koji &#263;e se koristiti za izradu opisa za mobilnu prodavnicu.');

define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP', 'Cenovna grupa za tr&#382;ni kapije');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP_DESCRIPTION', 'Odaberite va&#382;e&#263;u cenovnu grupu za prodajni prelaz (grupa kupaca za koju se uzimaju informacije o ceni za izvoz proizvoda).');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP_OFF', '-- Deaktiviran --');

define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY', 'Izvoz kategorije  "Nova "');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_DESCRIPTION', 'Ovaj prodajni sistem vam omogu&#263;ava da sve nove proizvode prika&#382;ete u virtualnoj kategoriji. Pomo&#263;u ove opcije mogu&#263;e je izvesti nove proizvode u realnoj kategoriji. Zato mo&#382;ete da koristite polje za unos da biste promenili ID kategorije.');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_ON', 'Da');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_OFF', 'Ne');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_MAX_ID', 'Trenutno najvi&#353;a kategorija-ID u &#353;opu');

define('SHOPGATE_CONFIG_EXPORT_OPTIONS_AS_INPUT_FIELD', 'Opcije proizvoda za izvoz kao polja za unos');
define('SHOPGATE_CONFIG_EXPORT_OPTIONS_AS_INPUT_FIELD_DESCRIPTION', 'Dodajte ID-ove opcije (pogledajte  "Opcije proizvoda ") koje treba izvesti kao ulazna polja. Primer: 1, 2, 3');

define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY', 'Izvoz kategorije "posebna"');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_DESCRIPTION', 'Ovaj prodajni sistem vam omogu&#263;ava da prika&#382;ete sve specijalne proizvode u virtualnoj kategoriji. Pomo&#263;u ove opcije mogu&#263;e je izvesti nove proizvode u realnoj kategoriji. Zato mo&#382;ete da koristite polje za unos da biste promenili ID kategorije.');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_ON', 'Da');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_OFF', 'Ne');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_MAX_ID', 'Trenutno najvi&#353;a kategorija-ID u &#353;opu');
define('SHOPGATE_PLUGIN_FIELD_AVAILABLE_TEXT_AVAILABLE_ON_DATE', 'Dostupna na #DATE#');

### Orders Import ###
define('SHOPGATE_CONFIG_ORDER_IMPORT_SETTINGS', 'Uvoz porud&#382;bina');
defined('SHOPGATE_ORDER_CUSTOM_FIELD') OR define('SHOPGATE_ORDER_CUSTOM_FIELD', 'Prilago&#273;eno polje ove Shopgate narud&#382;be:');

define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_GROUP', 'Grupa kupaca');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_GROUP_DESCRIPTION', 'Odaberite grupu kupaca za kupgate (grupu kupaca kojoj &#263;e svi kupci iz gosta biti postavljeni na uvoz porud&#382;bina).');

define('SHOPGATE_CONFIG_EXTENDED_SHIPPING', 'Na&#269;in isporuke');
define('SHOPGATE_CONFIG_EXTENDED_SHIPPING_DESCRIPTION', 'Izaberite na&#269;in isporuke za uvoz porud&#382;bina. Ovo &#263;e se koristiti za obra&#269;unavanje poreza za tro&#353;kove isporuke.');
define('SHOPGATE_CONFIG_EXTENDED_SHIPPING_NO_SELECTION', '-- bez selekcije --');

define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_APPROVED', 'Isporuka nije blokirana');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_APPROVED_DESCRIPTION', 'Izaberite status porud&#382;bina koje nisu blokirane za isporuku po Shopgate-u.');

define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_BLOCKED', 'Isporuka je blokirana');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_BLOCKED_DESCRIPTION', 'Izaberite status porud&#382;bina koje su blokirane za isporuku po Shopgate-u.');

define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SENT', 'Isporu&#269;ena');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SENT_DESCRIPTION', 'Izaberite status koji primenjujete na porud&#382;bine koje su isporu&#269;ene.');

define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED', 'Otkazao');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED_NOT_SET', '- Status nije postavljen -');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED_DESCRIPTION', 'Izaberite status za porud&#382;bine koje su otkazane.');

define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL', 'Poruka sa potvrdom');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_ON', 'Da');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_OFF', 'Ne');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_DESCRIPTION', 'Nakon uspe&#353;nog dovr&#353;avanja naloga za proizvodnju, poruka sa potvrdom &#263;e biti poslata kupcu. ako su proizvodi koji su u mogu&#263;nosti da preuzmu, veza je uklju&#269;ena u ovu po&#353;tu.');

define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING', 'Prika&#382;i imena za na&#269;ine pla&#263;anja');
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_DESCRIPTION', "Pojedina&#269;na imena za na&#269;ine pla&#263;anja koja se koriste za uvoz porud&#382;bina. Definisano od strane ' = ' i razdvojen ';'.<br/>(Example: PREPAY=Prepay;SHOPGATE=Handled by Shopgate)<br/>");
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_LINK', 'https://support.shopgate.com/hc/en-us/articles/202911763-Connecting-to-modified-eCommerce#4.4');
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_LINK_DESCRIPTION', "Povezivanje sa stranicom za podr&#353;ku");

### System Settings ###
define('SHOPGATE_CONFIG_SYSTEM_SETTINGS', 'Postavke sistema');

define('SHOPGATE_CONFIG_SERVER_TYPE', 'Shopgate server');
define('SHOPGATE_CONFIG_SERVER_TYPE_LIVE', 'U&#382;ivo');
define('SHOPGATE_CONFIG_SERVER_TYPE_PG', 'Igrali&#353;te');
define('SHOPGATE_CONFIG_SERVER_TYPE_CUSTOM', 'Prilago&#273;ene');
define('SHOPGATE_CONFIG_SERVER_TYPE_CUSTOM_URL', 'URL adresa prilago&#273;ena Shopgate serveru');
define('SHOPGATE_CONFIG_SERVER_TYPE_DESCRIPTION', 'Odaberite server za Shopgate sa kojim &#263;ete se povezati.');
?>