<?php

@setlocale(LC_TIME, 'sr_SR.UTF-8', 'sr_SR@euro', 'sr_SR', 'sr-SR', 'sr', 'sr_SR.ISO_8859-1', 'Serbian','sr_SR.ISO_8859-15');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y');  // this is used for strftime()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function xtc_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

require_once(DIR_FS_INC.'auto_include.inc.php');
foreach(auto_include(DIR_FS_LANGUAGES.'serbian/extra/admin/','php') as $file) require ($file);

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="en"');

// page title
define('TITLE', defined('PROJECT_VERSION') ? PROJECT_VERSION : 'undefined');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administracija');
define('HEADER_TITLE_SUPPORT_SITE', 'Podr&#382;i sajt');
define('HEADER_TITLE_ONLINE_CATALOG', 'Katalog na mre&#382;i');
define('HEADER_TITLE_ADMINISTRATION', 'Administracija');

// text for gender
define('MALE', 'G.');
define('FEMALE', 'G.-&#273;a');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/gggg');

// configuration box text in includes/boxes/configuration.php

define('BOX_HEADING_CONFIGURATION','Konfiguracija');
define('BOX_HEADING_MODULES','Moduli');
define('BOX_HEADING_PARTNER_MODULES','Partnerski moduli');
define('BOX_HEADING_ZONE','Zone/porez');
define('BOX_HEADING_CUSTOMERS','Kupci');
define('BOX_HEADING_PRODUCTS','Katalog');
define('BOX_HEADING_STATISTICS','Statistika');
define('BOX_HEADING_TOOLS','Alati');
define('BOX_HEADING_LOCALIZATION', 'Jezici/valute');
define('BOX_HEADING_TEMPLATES','Predlo&#353;ci');
define('BOX_HEADING_LOCATION_AND_TAXES', 'Lokacija/porez');
define('BOX_HEADING_CATALOG', 'Katalog');

define('BOX_CONTENT','Upravlja&#269; sadr&#382;ajem');
define('TEXT_ALLOWED', 'Dozvola');
define('TEXT_ACCESS', 'Oblast koja se mo&#382;e koristiti');
define('BOX_CONFIGURATION', 'Op&#353;te opcije');
define('BOX_CONFIGURATION_1', 'Moja prodavnica');
define('BOX_CONFIGURATION_2', 'Minimalne vrednosti');
define('BOX_CONFIGURATION_3', 'Maksimalne vrednosti');
define('BOX_CONFIGURATION_4', 'Opcije slike');
define('BOX_CONFIGURATION_5', 'Detalji o kupcu');
define('BOX_CONFIGURATION_6', 'Opcije modula');
define('BOX_CONFIGURATION_7', 'Opcije isporuke');
define('BOX_CONFIGURATION_8', 'Opcije liste proizvoda');
define('BOX_CONFIGURATION_9', 'Opcije lagera');
define('BOX_CONFIGURATION_10', 'Opcije prijavljivanja');
define('BOX_CONFIGURATION_11', 'Opcije ke&#353;iranja');
define('BOX_CONFIGURATION_12', 'Opcije E-po&#353;te');
define('BOX_CONFIGURATION_13', 'Opcije skidanja');
define('BOX_CONFIGURATION_14', 'Kompresija');
define('BOX_CONFIGURATION_15', 'SESIJA');
define('BOX_CONFIGURATION_16', 'Meta-oznake/pretra&#382;iva&#269;i');
define('BOX_CONFIGURATION_17', 'Dodatni moduli');
define('BOX_CONFIGURATION_18', 'Br. reg. za PDV');
define('BOX_CONFIGURATION_19', 'Partner');
define('BOX_CONFIGURATION_22', 'Opcije pretra&#382;ivanja');
define('BOX_CONFIGURATION_24', 'Google, Matomo &amp; Facebook');
define('BOX_CONFIGURATION_25', 'Captcha');
define('BOX_CONFIGURATION_31', 'Skrill');
define('BOX_CONFIGURATION_40', 'Opcije iska&#269;u&#263;eg prozora');
define('BOX_CONFIGURATION_1000', 'Moj administrator');

define('BOX_MODULES', 'Moduli pla&#263;anja/transporta/fakturisanja');
define('BOX_PAYMENT', 'Metode pla&#263;anja');
define('BOX_SHIPPING', 'Metode transporta');
define('BOX_ORDER_TOTAL', 'Ukupno naru&#269;ivanje');
define('BOX_CATEGORIES', 'Kategorije/Proizvodi');
define('BOX_PRODUCTS_ATTRIBUTES', 'Opcije proizvoda');
define('BOX_MANUFACTURERS', 'Proizvo&#273;a&#269;i');
define('BOX_REVIEWS', 'Kritike proizvoda');
define('BOX_CAMPAIGNS', 'Kampanje');
define('BOX_XSELL_PRODUCTS', 'Unakrsni marketing');
define('BOX_SPECIALS', 'Specijalne cene');
define('BOX_PRODUCTS_EXPECTED', 'O&#269;ekivane ponude');
define('BOX_CUSTOMERS', 'Korisnici');
define('BOX_ACCOUNTING', 'Dozvole administratora');
define('BOX_CUSTOMERS_STATUS','Grupe korisnika');
define('BOX_ORDERS', 'Narud&#382;be');
define('BOX_COUNTRIES', 'Zemlje');
define('BOX_ZONES', 'Zone');
define('BOX_GEO_ZONES', 'Poreske zone');
define('BOX_TAX_CLASSES', 'Poreske klase');
define('BOX_TAX_RATES', 'Poreska stopa');
define('BOX_HEADING_REPORTS', 'Izve&#353;taji');
define('BOX_PRODUCTS_VIEWED', 'Pregledni proizvodi');
define('BOX_STOCK_WARNING','Informacije o akcijama');
define('BOX_PRODUCTS_PURCHASED', 'Prodate proizvode');
define('BOX_STATS_CUSTOMERS', 'Statistika prodaje');
define('BOX_BACKUP', 'Upravlja&#269; bazama podataka');
define('BOX_BANNER_MANAGER', 'Menad&#382;er za reklamne natpise');
define('BOX_CACHE', 'Kontrola ke&#353;a');
define('BOX_DEFINE_LANGUAGE', 'Jezi&#269;ke definicije');
define('BOX_FILE_MANAGER', 'Menad&#382;er datoteka');
define('BOX_MAIL', 'Centar e-po&#353;te');
define('BOX_NEWSLETTERS', 'Menad&#382;er za obave&#353;tenja');
define('BOX_SERVER_INFO', 'Informacije o serveru');
define('BOX_WHOS_ONLINE', 'Ko je na mre&#382;i');
define('BOX_TPL_BOXES','Meni sortiranja');
define('BOX_CURRENCIES', 'Valute');
define('BOX_LANGUAGES', 'Jezik');
define('BOX_ORDERS_STATUS', 'Status narud&#382;be');
define('BOX_ATTRIBUTES_MANAGER','Menad&#382;er atributa');
define('BOX_MODULE_NEWSLETTER','Bilten');
define('BOX_SHIPPING_STATUS','Status isporuke');
define('BOX_SALES_REPORT','Izve&#353;taj o prodaji');
define('BOX_MODULE_EXPORT','Izvozni module');
define('BOX_MODULE_SYSTEM','Sistemski moduli');
define('BOX_HEADING_GV_ADMIN', 'Vau&#269;eri/kuponi');
define('BOX_GV_ADMIN_QUEUE', 'Poklon vau&#269;er u redu');
define('BOX_GV_ADMIN_MAIL', 'Poklon vau&#269;er za po&#353;tu');
define('BOX_GV_ADMIN_SENT', 'Poklon vau&#269;er poslat');
define('BOX_COUPON_ADMIN','Administrator kupona');
define('BOX_TOOLS_BLACKLIST','Kreditna kartica-Crna lista');
define('BOX_IMPORT','Uvoz/Izvoz'); 
define('BOX_PRODUCTS_VPE','Jedinica za pakovanje');
define('BOX_CAMPAIGNS_REPORT','Izve&#353;taj o kampanji');
define('BOX_ORDERS_XSELL_GROUP','Grupe unakrsne prodaje');
define('BOX_REMOVEOLDPICS','Uklanjanje starih slika'); // Remove old pictures - franky_n - 20110105
define('BOX_JANOLAW','janolaw AGB Hosting'); // Tomcraft - 2011-06-17 - Added janolaw AGB hosting service
define('BOX_HAENDLERBUND','Slu&#382;ba janolaw AGB HostingHandler'); // Tomcraft - 2012-12-08 - Added haendlerbund AGB interface
define('BOX_SHOP','Prodavnica');
define('BOX_LOGOUT','Odjavi se');
define('BOX_CREDITS','Krediti');
define('BOX_UPDATE','Proveri verziju');
define('BOX_GV_CUSTOMERS','Korisni&#269;ki krediti');
define('BOX_IT_RECHT_KANZLEI', 'IT advokatsko dru&#353;tvo');
define('BOX_PROTECTEDSHOPS', 'Za&#353;ti&#263;ene prodavnice - AGB Servis');
define('BOX_CLEVERREACH', 'CleverReach');
define('BOX_SUPERMAILER', 'SuperMailer');
define('BOX_OFFLINE', 'Kupovnina van mre&#382;e');
define('BOX_LOGS', 'Log datoteke');
define('BOX_SHIPCLOUD', 'shipcloud');
define('BOX_SHIPCLOUD_PICKUP', 'shipcloud - pokupiti');
define('BOX_PRODUCTS_TAGS', 'Funkcije proizvoda');
define('BOX_TRUSTEDSHOPS', 'Pouzdane prodavnice');
define('BOX_NEWSLETTER_RECIPIENTS', 'Primaoci biltena');
define('BOX_DSGVO_EXPORT', 'GDPR Izvoz');
define('BOX_SUPPORT', 'Podr&#353;ka');
define('BOX_CACHING', 'Ke&#353;iranje');
define('BOX_COOKIE_CONSENT', 'Pode&scaron;avanja kola&ccaron;i&cacute;a');
define('BOX_SEMKNOX', 'Site Search 360 Pretraga proizvoda');

define('TXT_GROUPS','<b>Grupe</b>:');
define('TXT_SYSTEM','Sistem');
define('TXT_CUSTOMERS','Korisnici/Narud&#382;be');
define('TXT_PRODUCTS','Proizvodi/Kategorije');
define('TXT_STATISTICS','Statistika');
define('TXT_TOOLS','Alati');
define('TEXT_ACCOUNTING','Dozvola za admina za:');

/******* SHOPGATE **********/
if (is_file(DIR_FS_CATALOG.'includes/external/shopgate/base/lang/serbian/admin/serbian.php')) {
  include_once (DIR_FS_CATALOG.'includes/external/shopgate/base/lang/serbian/admin/serbian.php');
}
/******* SHOPGATE **********/

// javascript messages
define('JS_ERROR', 'Do&#353;lo je do gre&#353;ke tokom procesa va&#353;eg obrasca!\nIzvr&#353;ite slede&#263;e ispravke:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Novom atributu proizvoda potrebna je cena\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Novi atribut proizvoda treba prefiks cene (+/-)\n');

define('JS_PRODUCTS_NAME', '* Novi proizvod treba ime\n');
define('JS_PRODUCTS_DESCRIPTION', '* Novi proizvod treba opis\n');
define('JS_PRODUCTS_PRICE', '* Novi proizvod treba vrednost cene\n');
define('JS_PRODUCTS_WEIGHT', '* Novi proizvod treba vrednost te&#382;ine\n');
define('JS_PRODUCTS_QUANTITY', '* Novi proizvod treba vrednost te&#382;ine\n');
define('JS_PRODUCTS_MODEL', '* Novi proizvod treba vrednost modela\n');
define('JS_PRODUCTS_IMAGE', '* Novi proizvod treba vrednost za sliku\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Nova cena za ovaj proizvod mora biti dodeljena\n');

define('JS_GENDER', '* \'Oslovljavanje\' mora biti izabrano.\n');
define('JS_FIRST_NAME', '* \'Ime\' mora da sadr&#382;i barem ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' znakova.\n');
define('JS_LAST_NAME', '* \'Prezime\' mora da sadr&#382;i barem ' . ENTRY_LAST_NAME_MIN_LENGTH . ' znakova.\n');
define('JS_DOB', '* \'Datum ro&#273;enja\' mora biti u formatu: xx/xx/xxxx (dan/mesec/godina).\n');
define('JS_EMAIL_ADDRESS', '* \'Adresa E-po&#353;te\' mora da sadr&#382;i najmanje ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' znakova.\n');
define('JS_ADDRESS', '* \'Adresa ulice\' mora da sadr&#382;i najmanje ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' znakova.\n');
define('JS_POST_CODE', '* \'Po&#353;tanski broj\' mora da sadr&#382;i najmanje ' . ENTRY_POSTCODE_MIN_LENGTH . ' znakova.\n');
define('JS_CITY', '* \'Grad\' mora da sadr&#382;i najmanje ' . ENTRY_CITY_MIN_LENGTH . ' znakova.\n');
define('JS_STATE', '* \'Dr&#382;ava\' mora biti izabrana.\n');
define('JS_STATE_SELECT', '-- Izaberi iznad --');
define('JS_ZONE', '* \'Dr&#382;ava\' stavka mora biti izabrana sa liste za ovu zemlju.');
define('JS_COUNTRY', '* \'Zemlja\' vrednost mora biti izabrana.\n');
define('JS_TELEPHONE', '* \'Broj telefona\' mora da sadr&#382;i najmanje ' . ENTRY_TELEPHONE_MIN_LENGTH . ' znakova.\n');
define('JS_PASSWORD', '* \'Lozinka\' i \'potvrda\' stavke moraju da se podudaraju i imaju najmanje ' . ENTRY_PASSWORD_MIN_LENGTH . ' znakova.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Broj narud&#382;be %s ne postoji!');

define('CATEGORY_PERSONAL', 'Li&#269;no');
define('CATEGORY_ADDRESS', 'Adresa');
define('CATEGORY_CONTACT', 'Kontakt');
define('CATEGORY_COMPANY', 'Kompanija');
define('CATEGORY_OPTIONS', 'Vi&#353;e opcija');

define('ENTRY_GENDER', 'Oslovljavanje:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">potrebno</span>');
define('ENTRY_FIRST_NAME', 'Ime:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' znakova</span>');
define('ENTRY_LAST_NAME', 'Prezime:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_LAST_NAME_MIN_LENGTH . ' znakova</span>');
define('ENTRY_DATE_OF_BIRTH', 'Datum ro&#273;enja:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(npr. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Adresa e-po&#353;te:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' znakova</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Neva&#382;e&#263;a adresa e-po&#353;te! (Trenutno ne podr&#382;avamo Nema&#269;ke umlate u e-adresama.)</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Ova e-adresa ve&#263; postoji!</span>');
define('ENTRY_COMPANY', 'Ime preduze&#263;a:');
define('ENTRY_STREET_ADDRESS', 'Adresa ulice:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' znakova</span>');
define('ENTRY_SUBURB', 'Dodatak adresi:');
define('ENTRY_POST_CODE', 'Po&#353;tanski broj:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_POSTCODE_MIN_LENGTH . ' znakova</span>');
define('ENTRY_CITY', 'Grad:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_CITY_MIN_LENGTH . ' znakova</span>');
define('ENTRY_STATE', 'Dr&#382;ava:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">potrebno</font></small>');
define('ENTRY_COUNTRY', 'Country:');
define('ENTRY_TELEPHONE_NUMBER', 'Telephone Number:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_TELEPHONE_MIN_LENGTH . ' znakova</span>');
define('ENTRY_FAX_NUMBER', 'Broj faksa:');
define('ENTRY_NEWSLETTER', 'Bilten:');
define('ENTRY_CUSTOMERS_STATUS', 'Status kupca:');
define('ENTRY_NEWSLETTER_YES', 'Pretpla&#263;en');
define('ENTRY_NEWSLETTER_NO', 'Nepretla&#263;en');
define('ENTRY_MAIL_ERROR','&nbsp;<span class="errorText">Odaberite opciju</span>');
define('ENTRY_PASSWORD','Lozinka (generisana)');
define('ENTRY_PASSWORD_ERROR','&nbsp;<span class="errorText">min. ' . ENTRY_PASSWORD_MIN_LENGTH . ' znakova</span>');
define('ENTRY_MAIL_COMMENTS','Dodatni tekst e-po&#353;te:');

define('ENTRY_MAIL','Po&#353;alji e-poruku sa lozinkom?');
define('YES','Da');
define('NO','Ne');
define('SAVE_ENTRY','Sa&#269;uvate promene?');
define('TEXT_CHOOSE_INFO_TEMPLATE','Predlo&#382;ak za detalje o proizvodu');
define('TEXT_CHOOSE_OPTIONS_TEMPLATE','Predlo&#382;ak za opcije proizvoda');
define('TEXT_SELECT','-- Odaberite --');

// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Icons
define('ICON_ARROW_RIGHT','Ozna&#269;ena');
define('ICON_BIG_WARNING','Pa&#382;nja!');
define('ICON_CROSS', 'Neta&#269;no');
define('ICON_CURRENT_FOLDER', 'Trenutna fascikla');
define('ICON_DELETE', 'Izbri&#353;i');
define('ICON_EDIT','Izmeni');
define('ICON_ERROR', 'Gre&#353;ka');
define('ICON_FILE', 'Datoteka');
define('ICON_FILE_DOWNLOAD', 'Skini');
define('ICON_FOLDER', 'Fascikla');
define('ICON_LOCKED', 'Zaklju&#269;ano');
define('ICON_POPUP','Pregled reklamnog natpisa');
define('ICON_PREVIOUS_LEVEL', 'Prethodni nivo');
define('ICON_PREVIEW', 'Pregled');
define('ICON_STATISTICS', 'Statistika');
define('ICON_SUCCESS', 'Uspeh');
define('ICON_TICK', 'Ta&#269;no');
define('ICON_UNLOCKED', 'Otklju&#269;ano');
define('ICON_WARNING', 'Upozorenje');
// EOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Strana %s od %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Banera)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Zemalja)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Korisnika)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Valuta)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Jezika)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Proizvo&#273;a&#269;a)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Biltena)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Narud&#382;bi)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Status narud&#382;bi)');
define('TEXT_DISPLAY_NUMBER_OF_XSELL_GROUP', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Grupe unakrsne kupovine)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_VPE', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Jedinica za pakovanje)');
define('TEXT_DISPLAY_NUMBER_OF_SHIPPING_STATUS', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Statusa za dostavu)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Proizvoda)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> o&#269;ekivanih proizvoda)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Kritika)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> proizvoda sa specijalnom cenom)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> klasa poreza)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> poreznih zona)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Rejtinga poreza)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> zona)');
define('TEXT_DISPLAY_NUMBER_OF_WHOS_ONLINE', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Korisnika koji su na mre&#382;i)');

define('PREVNEXT_BUTTON_PREV', '&laquo;');
define('PREVNEXT_BUTTON_NEXT', '&raquo;');

define('TEXT_DEFAULT', 'Podrazumevano');
define('TEXT_SET_DEFAULT', 'Postavi kao podrazumevanu vrednost');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Potrebno</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Gre&#353;ka: trenutno nije postavljen podrazumevani skup valuta. Podesite jedan na: Administracioni alat-> Localizacija-> Valute');

define('TEXT_CACHE_CATEGORIES', 'Meni sa kategorijama');
define('TEXT_CACHE_MANUFACTURERS', 'Meni sa proizvo&#273;a&#269;ima');
define('TEXT_CACHE_ALSO_PURCHASED', 'Tako&#273;e kupljeni modul');

define('TEXT_NONE', '--ni&#353;ta--');
define('TEXT_AUTO_PROPORTIONAL', '--automatski proporcionalni--');
define('TEXT_AUTO_MAX', '--auto maksimalno--');
define('TEXT_TOP', 'Vrh');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Gre&#353;ka: odredi&#353;te ne postoji.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Gre&#353;ka: odredi&#353;te nije upisno.');
define('ERROR_FILE_NOT_SAVED', 'Gre&#353;ka: otpremanje datoteke nije sa&#269;uvano.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Gre&#353;ka: tip otpremanja datoteke nije dozvoljen.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Uspe&#353;no: otpremanje datoteke je uspe&#353;no sa&#269;uvano.');
define('WARNING_NO_FILE_UPLOADED', 'Upozorenje: nije otpremljena datoteka.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Gre&#353;ka: datoteka nije uklonjena.');

define('DELETE_ENTRY','Izbri&#353;i stavku?');
define('TEXT_PAYMENT_ERROR','<b>UPOZORENJE:</b> Molimo aktivirajte <a href="%s">metod pla&#263;anja</a>!');
define('TEXT_SHIPPING_ERROR','<b>UPOZORENJE:</b> Molimo aktivirajte <a href="%s">metod isporuke</a>!');
define('TEXT_PAYPAL_CONFIG','<b>UPOZORENJE:</b> Konfiguri&#353;ite postavke pla&#263;anja PayPal za "Live mode" ovde: <a href="%s"><strong>Partner -> PayPal</strong></a>.'); //DokuMan - 2012-05-31 - show warning if PayPal payment module activated, but not configured for live mode yet
define('TEXT_DUPLICATE_CONFIG_ERROR','<b>UPOZORENJE:</b> Duplikat konfiguracijskog klju&#269;a: ');

define('TEXT_NETTO','net: ');

define('ENTRY_CID','ID korisnika:');
define('IP','IP narud&#382;be:');
define('CUSTOMERS_MEMO','Bele&#353;ke:');
define('DISPLAY_MEMOS','Prika&#382;i/Upi&#353;i');
define('TITLE_MEMO','Bele&#353;ke korinika');
define('ENTRY_LANGUAGE','Jezik:');
define('CATEGORIE_NOT_FOUND','Kategorija nije prona&#273;ena!');

// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Image Icons
define('IMAGE_RELEASE', 'Iskoristite poklon vau&#269;era');
define('IMAGE_ICON_STATUS_GREEN_STOCK','na lageru');
define('IMAGE_ICON_STATUS_GREEN','aktivno');
define('IMAGE_ICON_STATUS_GREEN_LIGHT','aktiviraj');
define('IMAGE_ICON_STATUS_RED','neaktivno');
define('IMAGE_ICON_STATUS_RED_LIGHT','deaktiviraj');
define('IMAGE_ICON_INFO','obele&#382;i');
// EOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons

define('_JANUARY', 'Januar');
define('_FEBRUARY', 'Februar');
define('_MARCH', 'Mart');
define('_APRIL', 'April');
define('_MAY', 'Maj');
define('_JUNE', 'Jun');
define('_JULY', 'Jul');
define('_AUGUST', 'Avgust');
define('_SEPTEMBER', 'Septembar');
define('_OCTOBER', 'Oktobar');
define('_NOVEMBER', 'Novembar');
define('_DECEMBER', 'Decembar');

// Beschreibung f&uuml;r Abmeldelink im Newsletter
define('TEXT_NEWSLETTER_REMOVE', 'Da biste zavr&#353;ili pretplatu na bilten, kliknite ovde:');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> poklon vau&#269;era)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> kupona)');
define('TEXT_VALID_PRODUCTS_LIST', 'Izlistavanje proizvoda');
define('TEXT_VALID_PRODUCTS_ID', 'ID proizvoda');
define('TEXT_VALID_PRODUCTS_NAME', 'Ime proizvoda');
define('TEXT_VALID_PRODUCTS_MODEL', 'Model proizvoda');

define('TEXT_VALID_CATEGORIES_LIST', 'Lista kategorija');
define('TEXT_VALID_CATEGORIES_ID', 'ID kategorija');
define('TEXT_VALID_CATEGORIES_NAME', 'Ime kategorija');

define('TXT_ALL','Sve');

// UST ID
define('HEADING_TITLE_VAT','ID PDV-a');
define('ENTRY_VAT_ID','ID PDV-a');
define('ENTRY_CUSTOMERS_VAT_ID', 'ID PDV-a:');
define('TEXT_VAT_FALSE','<span class="messageStackError">&#268;ekirano/PDV je neva&#382;e&#263;i!</span>');
define('TEXT_VAT_TRUE','<span class="messageStackSuccess">&#268;ekirano/PDV je va&#382;e&#263;i!</span>');
define('TEXT_VAT_UNKNOWN_COUNTRY','<span class="messageStackError">Ne&#353;tiklirano/nepoznata zemlja!</span>');
define('TEXT_VAT_INVALID_INPUT','<span class="messageStackError">Ne&#353;tiklirano/obezbe&#273;ena &#353;ifra zemljista je neva&#382;e&#263;a ili je broj PDV-a prazan!</span>');
define('TEXT_VAT_SERVICE_UNAVAILABLE','<span class="messageStackError">Ne&#353;tiklirano/Usluga SOAP nije dostupna, poku&#353;ajte ponovo kasnije!</span>');
define('TEXT_VAT_MS_UNAVAILABLE','<span class="messageStackError">Ne&#353;tiklirano/Dr&#382;avna slu&#382;ba za &#269;lanstvo nije dostupna, poku&#353;ajte ponovo kasnije ili sa drugom dr&#382;avom &#269;lanicom!</span>');
define('TEXT_VAT_TIMEOUT','<span class="messageStackError">Ne&#353;tiklirano/Dr&#382;avna slu&#382;ba za &#269;lanstvo ne mo&#382;e biti dostignuta na vreme, poku&#353;ati ponovo kasnije ili sa drugom dr&#382;avom &#269;lanicom!</span>');
define('TEXT_VAT_SERVER_BUSY','<span class="messageStackError">Ne&#353;tiklirano/Usluga ne mo&#382;e da obradi va&#353; zahtev. Poku&#353;ajte ponovo kasnije!</span>');
define('TEXT_VAT_NO_PHP5_SOAP_SUPPORT','<span class="messageStackError">Ne&#353;tiklirano/Va&#353; sistem nema PHP5 podr&#353;ku SOAP!</span>');
define('TEXT_VAT_CONNECTION_NOT_POSSIBLE','<span class="messageStackError">Gre&#353;ka: veza sa webuslugom nije mogu&#263;a (SOAP-gre&#353;ka)!</span>');

define('ERROR_GIF_MERGE','Nema podr&#353;ke za Gd-biblioteka, GIF-podr&#353;ka, objedinjavanje nije uspelo');
define('ERROR_GIF_UPLOAD','Nema podr&#353;ke za Gd-biblioteka, GIF-podr&#353;ka, proces nije uspeo');

define('TEXT_REFERER','Referer: ');

// BOF - Tomcraft - 2009-06-17 Google Sitemap
define('BOX_GOOGLE_SITEMAP', 'Google Mapa sajta');
// EOF - Tomcraft - 2009-06-17 Google Sitemap

// BOF - Tomcraft - 2009-10-03 - Paypal Express Modul
define('BOX_PAYPAL','PayPal');
// EOF - Tomcraft - 2009-10-03 - Paypal Express Modul

// BOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4
define('_PAYMENT_MONEYBOOKERS_EMAILID_TITLE','Skrill adresa e-po&#353;te');
define('_PAYMENT_MONEYBOOKERS_EMAILID_DESC','Adresa e-po&#353;te koja je registrovana pomo&#263;u Skrill-a.<br />Ako ne posedujete Skrill nalog mo&#382;ete jedan nabaviti bespalatno na <a href="https://account.skrill.com/signup/page1" target="_blank">Skrill.com</a>.');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_TITLE','ID trgovca');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_DESC','Va&#353; Skrill ID trgovca');
define('_PAYMENT_MONEYBOOKERS_PWD_TITLE','Skrill tajna re&#269;');
define('_PAYMENT_MONEYBOOKERS_PWD_DESC','Tajna re&#269; mo&#382;e da se na&#273;e u va&#353;em Skrill profilu (ovo nije va&#353;a lozinka!). Ona mora da bude samo od malih slova i brojeva. < br/> da biste aktivirali obradu u programu Skrill: po&#353;aljite e-poruku, uklju&#269;uju&#263;i va&#353;u e-adresu i ime domena u okviru prodavnica<br />Na: <a href="mailto:ecommerce@skrill.com?subject=modified eCommerce Shopsoftware: Activation of Skrill Quick Checkout">ecommerce@skrill.com</a>');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_TITLE','status porud&#382;bine – privremeni redosled');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_DESC','Privremena porud&#382;bina se kreira nakon prosle&#273;ivanja  "Po&#353;alji nalog" tokom procesa porud&#382;bine. Ako do&#273;e do problema sa ovim statusom, mo&#382;ete da na&#273;ete porud&#382;binu.');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_TITLE','status naloga-pla&#263;anje u redu');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_DESC','Ako je sve u redu i transakcija potvr&#273;ena od strane Skrill.');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_TITLE','status porud&#382;bine-pla&#263;anje na &#269;ekanju');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_DESC','Ako neko nema ravnote&#382;u na svom Skrill ra&#269;unu. Pla&#263;anje je u toku dok se ne dobije re&#353;enje.');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_TITLE','status naloga-uplata je otkazana');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_DESC','Ako je pla&#263;anje (kreditnom karticom) odbijeno.');
define('MB_ERROR_NO_MERCHANT','Nema Skrill naloga povezanog sa ovom e-adresom.');
define('MB_MERCHANT_OK','Skrill ra&#269;un OK, trgovac %s primljen i sa&#269;uvan.');
define('MB_INFO','<img src="../images/icons/moneybookers/MBbanner.jpg"><br /><br />Mo&#382;ete da prihvatite kreditne kartice, prebitne bele&#353;ke, prenos na mre&#382;i, Giropay i druga velika lokalna pla&#263;anja nakon jednog pojedina&#269;nog aktiviranja. Ne treba vam da imate ugovor sa svakim procesorskim pla&#263;anjem ako idete sa Skrill. Sve se radi sa <a href="https://account.skrill.com/signup/page1" target="_blank"><b>besplatnom Skrill nalogu</b></a>. Dodatne opcije pla&#263;anja su besplatne, a ne postoje <b> nadoknade ili tro&#353;kove aktivacije</b>.<br /><br /><b>Va&#353;a prednost:</b><br />- vi&#353;e prodaje prihvatanjem svih ve&#263;ih isplata<br />- smanjeni tro&#353;kovi i napor-samo jedan ugovor<br />- laka obrada za va&#353;e kupce-direktna isplata bez potrebe za kreiranje dodatnog naloga<br />- jedan klik aktivacija i integracija < br/> -Dobri <a href="https://www.skrill.com/en/fees/" target="_blank"><b>uslovi</b></a><br />- obave&#353;tenje o trenutnoj uplati i dokaz o detaljima kupaca<br />- Nema dodatnih tro&#353;kova, &#269;ak ni u inostranstvu<br />- 11 mil. kupaca &#353;irom sveta');
// EOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4

// BOF - Tomcraft - 2009-11-02 - set global customers-group-permissions
define('BOX_CUSTOMERS_GROUP','CG-autorizacije');
// EOF - Tomcraft - 2009-11-02 - set global customers-group-permissions

// BOF - Tomcraft - 2009-11-02 - New admin top menu
define('TEXT_ADMIN_START', 'Po&#269;etna');
define('BOX_HEADING_CONFIGURATION2','Npr. Konfiguracija');
// EOF - Tomcraft - 2009-11-02 - New admin top menu

//BOF - web28 - 2010-04-10 - ADMIN SEARCH BAR
define('ASB_QUICK_SEARCH_CUSTOMER','Pretraga klijenata...');
define('ASB_QUICK_SEARCH_ORDER','Nalozi za pretragu...');
define('ASB_QUICK_SEARCH_ORDER_ID','ID porud&#382;bine za pretra&#382;ivanje...');
define('ASB_QUICK_SEARCH_ARTICLE','Pretra&#382;i proizvode/kategorije...');
define('ASB_QUICK_SEARCH_EMAIL', 'Pretraga e-adresa...');
define('ASB_QUICK_SEARCH_ARTICLE_ID','Tra&#382;i proizvode/kategorije ID...');
//EOF - web28 - 2010-04-10 - ADMIN SEARCH BAR

//BOF - web28 - 2010.05.30 - accounting - set all checkboxes , countries - set all flags
define('BUTTON_SET','Proveri sve');
define('BUTTON_UNSET','Opozovi sve');
//EOF - web28 - 2010.05.30 - accounting - set all checkboxes 

//BOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics
define('TEXT_ROWS','Red');
define('TABLE_HEADING_RESET','Poni&#353;ti statisti&#269;ke podatke');
//EOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics

//BOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW
define('BUTTON_CLOSE_WINDOW' , 'Zatvori prozor');
//EOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW

//BOF - hendrik - 2011-05-14 - independent invoice number and date
define('ENTRY_INVOICE_NUMBER',  'Broj fakture:'); 
define('ENTRY_INVOICE_DATE',    'Datum fakture:'); 
//EOF - hendrik - 2011-05-14 - independent invoice number and date 

//BOF - web28 - 2010-07-06 - added missing error text
define('ENTRY_VAT_ERROR', '&nbsp;<span class="errorText">VAN OPSEGA PDV Reg.</span>');
//EOF - web28 - 2010-07-06 - added missing error text

define ('CONFIG_INT_VALUE_ERROR', '"%s" Gre&#353;ka: uno&#353;enje brojeva je zanemareno %s');
define ('CONFIG_MAX_VALUE_WARNING', '"%s" UPOZORENJE: %s unos je zanemaren [maksimum: %s]');
define ('CONFIG_MIN_VALUE_WARNING', '"% s" UPOZORENJE: %s unos je zanemaren [minimum: %s]');

define ('WHOS_ONLINE_TIME_LAST_CLICK_INFO', 'Prika&#382;i period u sekundama: %s nakon ovoga vremena, stavke &#263;e biti izbrisane.');

define('TEXT_GLOBAL_PRODUCTS_MODEL', 'Model proizvoda');

define ('TEXT_INFO_MODULE_RESTORE', '&#381;elite li da vratite sa&#269;uvane postavke u prethodno stanje?<br /><br /><b>UPOZORENJE</b>: Ovo &#263;e zameniti sve trenutne postavke!');
define ('TEXT_INFO_MODULE_REMOVE', '&#381;elite li da deinstalirate modul?<br /><br /><b>UPOZORENJE</b>: Sve postavke modula se tako&#273;e bri&#353;u!');
define ('TEXT_INFO_MODULE_BACKUP', '&#381;elite li da napravite rezervnu kopiju postavki modula?');
define ('MODULE_BACKUP_CONFIRM', 'Uspe&#353;no je napravljena kopija postavki modula!');
define ('MODULE_RESTORE_CONFIRM', 'Postavke modula su uspe&#353;no vra&#263;ene u prethodno sa&#269;uvano stanje!');
define ('MODULE_UPDATE_CONFIRM', 'Postavke modula su uspe&#353;no a&#382;urirane!');

/* magnalister v1.0.0 */
define('BOX_HEADING_MAGNALISTER', 'magnalister');
define('BOX_MAGNALISTER', 'magnalister administrator');
/* END magnalister */

define('CHARS_LEFT', 'karaktera ostalo');
define('CHARS_MAX', 'od maks.');

define('DISPLAY_PER_PAGE', 'Prikaz po stranici: ');

define('SPECIALS_DATE_START_TT', 'Ponude po&#269;inju u 00:00:00');
define('SPECIALS_DATE_END_TT', 'Ponude isti&#269;u u pono&#263; (23:59:59)');

define('BOX_PARCEL_CARRIERS', 'Nosa&#269;i paketa');
define('TEXT_DISPLAY_NUMBER_OF_CARRIERS', 'Prikaz <b>%d</b> do <b>%d</b> (od <b>%d</b> nosa&#269;a)');

define('RSS_FEED_TITLE', 'Latest informations from modified eCommerce Shopsoftware Blog');
define('RSS_FEED_DESCRIPTION', 'Poslednje informacije od eCommerce Shopsoftware foruma za podr&#353;ku');
define('RSS_FEED_LINK', 'http://www.modified-shop.org/blog');
define('RSS_FEED_ALTERNATIVE', 'Na&#382;alost, najnovije vesti ne mogu biti prikazane u RSS feedu. Molimo posetite na&#353; blog u <a href="'.RSS_FEED_LINK.'">www.modified-shop.org/blog</a> za dobijanje va&#382;nih informacija o slede&#263;im temama: <ul><li>Va&#382;no a&#382;uriranje i popravke</li><li>Pro&#353;irenja funkcije</li><li>uprave</li><li>Vesti</li><li>Tra&#269;eve</li></ul>');
define('RSS_FEED_NOT_REACHABLE', 'Najva&#382;nije vesti dugo nisu mogle biti a&#382;urirane. <br> Ne propustite va&#382;ne vesti, ponude i jo&#353; mnogo toga. Posetite nas <a target="_blank" href="https://www.modified-shop.org/blog">www.modified-shop.org/blog</a><br>');
define('TEXT_DISPLAY_NUMBER_OF_NEWSFEED', 'Prikazivanje <b>%d</b> do <b>%d</b> (od <b>%d</b> Vesti)');

define('CFG_TXT_YES', 'Da');
define('CFG_TXT_NO', 'Ne');
define('CFG_TXT_OR', 'ili');
define('CFG_TXT_AND', 'i');
define('CFG_TXT_ASC', 'rastu&#263;i');
define('CFG_TXT_DESC', 'opadaju&#263;i');
define('CFG_TXT_PRODUCTS_NAME', 'Ime proizvoda');
define('CFG_TXT_PRODUCTS_MODEL', 'Model proizvoda');
define('CFG_TXT_DATE_EXPECTED', 'Datum o&#269;ekivanja');
define('CFG_TXT_ACCOUNT', 'Nalog');
define('CFG_TXT_GUEST', 'Gost');
define('CFG_TXT_BOTH', 'oboje');
define('CFG_TXT_NONE', 'nista');
define('CFG_TXT_ADMIN', 'administrator');
define('CFG_TXT_ALL', 'sve');
define('CFG_TXT_WEIGHT', 'Te&#382;ina');
define('CFG_TXT_PRICE', 'Cena');
define('CFG_TXT_ITEM', 'Proizvod');
define('CFG_TXT_WHOS_ONLINE', 'Na mre&#382;i');
define('CFG_TXT_ORDERS', 'Narud&#382;be');
define('CFG_TXT_CUSTOMERS', 'Korisnici');
define('CFG_TXT_SALES_REPORT', 'Statistike');
define('CFG_TXT_BLOG', 'Blog');

define('CSRF_TOKEN_MANIPULATION', 'CSRFToken manipulacije (Zbog bezbednosnih aspekata nije dozvoljeno vi&#353;e raditi u oblasti admin u razli&#269;itim karticama pregleda&#269;a.)');
define('CSRF_TOKEN_NOT_DEFINED', 'CSRFToken nije definisan (Zbog bezbednosnih aspekata nije dozvoljeno vi&#353;e raditi u oblasti admin u razli&#269;itim karticama pregleda&#269;a.)');

define('TEXT_ACCOUNTING_INFO','Glavnog administratora [1] nije mogu&#263;e li&#353;iti prava pristupa.');

define('JAVASCRIPT_DISABLED_INFO', 'Izgleda da je JavaScript onemogu&#263;en u pregleda&#269;u. Omogu&#263;ite JavaScript da biste mogli da koristite sve funkcije ove lokacije i sav sadr&#382;aj lokacije');

define('BOX_MODULE_TYPE', 'Moduli za pro&#353;irenja klasa');

define('MULTIPLE_INSTALLATION', '<span style="color:red">[Vi&#353;estruka instalacija: %s]</span>');

define('FILEUPLOAD_INPUT_TXT', 'Nema datoteke');
define('FILEUPLOAD_BTN_TXT', 'Tra&#382;i');

define('CHECK_LABEL_PRICE', 'proveri cenu');

define('TEXT_PAYPAL_TAB_CONFIG', 'PayPal Konfiguracija');
define('TEXT_PAYPAL_TAB_PROFILE', 'PayPal Profil');
define('TEXT_PAYPAL_TAB_WEBHOOK', 'PayPal Webhook');
define('TEXT_PAYPAL_TAB_MODULE', 'PayPal Proizvoda');
define('TEXT_PAYPAL_TAB_INFO', 'PayPal Informacije');

define('TEXT_DEFAULT_SORT_ORDER_TITLE', 'Sortiranje narud&#382;bi');
define('TEXT_DEFAULT_SORT_ORDER_DESC', 'Redosled procesuiranja. Prvo se izvr&#353;ava najmanji broj.');
define('TEXT_DEFAULT_STATUS_TITLE', 'Omogu&#263;i modul?');
define('TEXT_DEFAULT_STATUS_DESC', 'Status modula');

define('TEXT_HOUR', 'sat');
define('TEXT_HOURS', 'sati');

define('DELETE_LOGS_SUCCESSFUL', 'Logdatoteke su uspe&#353;no izbrisane.');

define('BOX_BLACKLIST_LOGS', 'Crna lista logova');

define('CONTINUE_WITHOUT_SAVE', 'Nesa&#269;uvane promene &#263;e biti odba&#269;ene.');

define('TEXT_SORT_ASC','rastu&#263;e');
define('TEXT_SORT_DESC','opadaju&#263;e');

define('MSRP','MSRP');
define('YOUR_PRICE','va&#353;a cena ');
define('UNIT_PRICE','cena po komadu ');
define('ONLY',' Sada samo ');
define('FROM','iz ');
define('YOU_SAVE','Vi &#269;ete sa&#269;uvati ');
define('INSTEAD','Na&#353;a prethodna cena ');
define('PULL_DOWN_DEFAULT', 'Izaberite');
?>