<?php
define('ATTENTION_TITLE','! PA&#381;NJA !');
// text for Warnings:
if (!defined('APS_INSTALL')) { //DokuMan - use alternative text for TEXT_FILE_WARNING when using APS package installation
  define('TEXT_FILE_WARNING_WRITABLE','<b>UPOZORENJE:</b><br />Slede&#263;i fajlovi su upisivi. Molimo promenite dozvole za slede&#263;e fajlove da budu <b>(444)</b> u unix, <b>(samo &#269;itanje)</b> u Win32.');
} else {
  define('TEXT_FILE_WARNING_WRITABLE','<b>UPOZORENJE:</b><br />Slede&#263;e datoteke su upisne. Promenite dozvole ovih datoteka iz bezbednosnih razloga. <b>(444)</b> u unix, <b>(samo &#269;itanje)</b> u Win32.<br />U slu&#269;aju da je ovaj softver instalirao softverski paket va&#353;eg webhoster, mogu&#263;e je da &#263;e dozvole za datoteku biti druga&#269;ije pode&#353;ene (HostEurope: <b>CHMOD 400</b> ili <b>CHMOD 440</b>)');
}
define('TEXT_FILE_WARNING','<b>UPOZORENJE:</b><br />Slede&#263;e datoteke moraju biti upisne. Promenite dozvole ovih datoteka. <b>(777)</b> u unix, <b>(samo &#269;itanje)</b> u Win32.');
define('TEXT_FOLDER_WARNING','<b>UPOZORENJE:</b><br />Slede&#263;e fascikle moraju biti upisne. Promenite dozvole ovih fascikli. <b>(777)</b> u unix, <b>(&#269;itanje-pisanje)</b> u Win32.');
define('REPORT_GENERATED_FOR','Izve&#353;taj za:');
define('REPORT_GENERATED_ON','Generi&#353;e na:');
define('FIRST_VISIT_ON','Prvu posetu:');
define('HEADING_QUICK_STATS','Brze statistike');
define('VISITS_TODAY','Poseta danas:');
define('UNIQUE_TODAY','Jedinstveno danas:');
define('DAILY_AVERAGE','Dnevni prosek:');
define('TOTAL_VISITS','Ukupno poseta:');
define('TOTAL_UNIQUE','Ukupno jedinstvenih:');
define('TOP_REFFERER','Glavni ra&#269;unarski sistem:');
define('TOP_ENGINE','Najbolji pretra&#382;iva&#269;:');
define('DAY_SUMMARY','Rezime za 30 dana:');
define('VERY_LAST_VISITORS','Zadnjih 10 posetilaca:');
define('TODAY_VISITORS','Posetioci dana&#353;njeg dana:');
define('LAST_VISITORS','Poslednjih 100 posetilaca:');
define('ALL_LAST_VISITORS','Svi posetioci:');
define('DATE_TIME','Datum/vreme:');
define('IP_ADRESS','IP Adresa:');
define('OPERATING_SYSTEM','Operacijskog sustava:');
define('REFFERING_HOST','Referentni host:');
define('ENTRY_PAGE','Po&#269;etna strana:');
define('HOURLY_TRAFFIC_SUMMARY','Rezime saobra&#263;aja po satu');
define('WEB_BROWSER_SUMMARY','Rezime Web pregleda&#269;a');
define('OPERATING_SYSTEM_SUMMARY','Rezime operativnog sistema');
define('TOP_REFERRERS','Top 10 posrednici');
define('TOP_HOSTS','Top 10 Hosts');
define('LIST_ALL','Izlistaj sve');
define('SEARCH_ENGINE_SUMMARY','Rezime sistema za pretra&#382;ivanje');
define('SEARCH_ENGINE_SUMMARY_TEXT',' ( Procenat je baziran na ukupnim posetama koje su se odnosile na pretra&#382;iva&#269;ima. )');
define('SEARCH_QUERY_SUMMARY','Rezime upita za pretragu');
define('SEARCH_QUERY_SUMMARY_TEXT',' ) ( Procenat je zasnovan na ukupnoj niski upita pretrage. )');
define('REFERRING_URL','URL adresa za odlaganje');
define('HITS','Hits');
define('PERCENTAGE','Procenat');
define('HOST','Host');
// NEU HINZUGEFUEGT 04.12.2008 - Neue Startseite im Admin BOF
// BOF - vr 2010-04-01 -  Added missing definitions, see below
// define('HEADING_TITLE', 'Orders');
// EOF - vr 2010-04-01 -  Added missing definitions
define('HEADING_TITLE_SEARCH', 'Broj narud&#382;be:');
define('HEADING_TITLE_STATUS', 'Status:');
define('TABLE_HEADING_AFTERBUY', 'Posle kupovine'); //Dokuman - 2009-05-27 - added missing definition
define('TABLE_HEADING_CUSTOMERS', 'Kupci');
define('TABLE_HEADING_ORDER_TOTAL', 'Ukupna vrednost');
define('TABLE_HEADING_DATE_PURCHASED', 'Datum narud&#382;be');
define('TABLE_HEADING_STATUS', 'Status');
//define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_QUANTITY', 'Koli&#269;ina');
define('TABLE_HEADING_PRODUCTS_MODEL', 'br. proizvoda');
define('TABLE_HEADING_PRODUCTS', 'Proizvod');
define('TABLE_HEADING_TAX', 'PDV');
define('TABLE_HEADING_TOTAL', 'Ukupna suma');
define('TABLE_HEADING_DATE_ADDED', 'dodato na:');
define('ENTRY_CUSTOMER', 'Korisnik:');
define('TEXT_DATE_ORDER_CREATED', 'Datum naru&#269;ivanja:');
define('TEXT_INFO_PAYMENT_METHOD', 'Na&#269;in pla&#263;anja:');
define('TEXT_VALIDATING','Nije proverena');
define('TEXT_ALL_ORDERS', 'Sve narud&#382;be');
define('TEXT_NO_ORDER_HISTORY', 'Istorija porud&#382;bina nije dostupna');
define('TEXT_DATE_ORDER_LAST_MODIFIED','Poslednja promena');
// BOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
define('TOTAL_CUSTOMERS','Ukupno klijenata');
define('TOTAL_SUBSCRIBERS','Pretplata na bilten');
define('TOTAL_PRODUCTS_ACTIVE','Aktivni proizvodi');
define('TOTAL_PRODUCTS_INACTIVE','Neaktivni proizvodi');
define('TOTAL_PRODUCTS','Ukupni proizvodi');
define('TOTAL_SPECIALS','Specialni');
// EOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
// BOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
define('UNASSIGNED', 'Nedodeljeni');
define('TURNOVER_TODAY', 'Promet danas');
define('TURNOVER_YESTERDAY', 'Promet ju&#269;e');
define('TURNOVER_THIS_MONTH', 'ovog meseca');
define('TURNOVER_LAST_MONTH', 'pro&#353;log meseca (sve)');
define('TURNOVER_LAST_MONTH_PAID', 'pro&#353;log meseca (pla&#263;eno)');
define('TOTAL_TURNOVER', 'Ukupan promet');
// EOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
// BOF - vr 2010-04-01 -  Added missing definitions
// main heading
define('HEADING_TITLE', 'Dobro do&#353;li u admin Area');
// users online
define('TABLE_CAPTION_USERS_ONLINE', 'Na mre&#382;i');
define('TABLE_CAPTION_USERS_ONLINE_HINT', '***Molimo vas da kliknete korisni&#269;ko ime za vi&#353;e detalja***');
define('TABLE_HEADING_USERS_ONLINE_SINCE', 'Na mre&#382;i od');
define('TABLE_HEADING_USERS_ONLINE_NAME', 'Ime');
define('TABLE_HEADING_USERS_ONLINE_LAST_CLICK', 'Zadnji klik');
define('TABLE_HEADING_USERS_ONLINE_INFO', 'Informacije');
define('TABLE_CELL_USERS_ONLINE_INFO', 'Vi&#353;e...');
// new customers
define('TABLE_CAPTION_NEW_CUSTOMERS', 'Korisnik');
define('TABLE_CAPTION_NEW_CUSTOMERS_COMMENT', '(Zadnjih 15)');
define('TABLE_HEADING_NEW_CUSTOMERS_LASTNAME', 'Prezime');
define('TABLE_HEADING_NEW_CUSTOMERS_FIRSTNAME', 'Ime');
define('TABLE_HEADING_NEW_CUSTOMERS_REGISTERED', 'Registrovan');
define('TABLE_HEADING_NEW_CUSTOMERS_EDIT', 'Izmeni');
define('TABLE_HEADING_NEW_CUSTOMERS_ORDERS', 'Narud&#382;be');
define('TABLE_CELL_NEW_CUSTOMERS_EDIT', 'Izmeni...');
define('TABLE_CELL_NEW_CUSTOMERS_DELETE', 'Izbri&#353;i...');
define('TABLE_CELL_NEW_CUSTOMERS_ORDERS', 'Prika&#382;i...');
// new orders
define('TABLE_CAPTION_NEW_ORDERS', 'Narud&#382;be');
define('TABLE_CAPTION_NEW_ORDERS_COMMENT', '(Zadnjih 20)');
define('TABLE_HEADING_NEW_ORDERS_ORDER_NUMBER', 'Narud&#382;ba #');
define('TABLE_HEADING_NEW_ORDERS_ORDER_DATE', 'Datum narud&#382;be');
define('TABLE_HEADING_NEW_ORDERS_CUSTOMERS_NAME', 'Ime korisnika');
define('TABLE_HEADING_NEW_ORDERS_EDIT', 'Izmeni');
define('TABLE_HEADING_NEW_ORDERS_DELETE', 'Izbri&#353;i');
// newsfeed
define('TABLE_CAPTION_NEWSFEED', 'Poseti');
// birthdays
define('TABLE_CAPTION_BIRTHDAYS', 'Ro&#273;endan');
define('TABLE_CELL_BIRTHDAYS_TODAY', 'Korisnici kojima je ro&#273;endan danas');
define('TABLE_CELL_BIRTHDAYS_THIS_MONTH', 'Nadolaze&#263;i ro&#273;endani korisnika u ovom mesecu');
// EOF - vr 2010-04-01 -  Added missing definitions
define('HEADING_CAPTION_STATISTIC', 'Statistika');
// security check
// DB Version check
define('ERROR_DB_VERSION_UPDATE', 'UPOZORENJE: Va&#353;a baza podataka treba da se a&#382;urira, molimo vas da pokrenete <a href="'.DIR_WS_CATALOG.'_installer/">instalaciju</a>:');
define('ERROR_DB_VERSION_UPDATE_INFO', 'Baza podataka treba da se a&#382;urira sa verzje %s na %s.');
// EMail check
define('ERROR_EMAIL_CHECK', '<strong>UPOZORENJE:</strong> Slede&#263;a e-adresa izgleda neta&#269;no:');
define('ERROR_EMAIL_CHECK_INFO', '%s: &lt;%s&gt;');
// security check DB FILE permission
define('WARNING_DB_FILE_PRIVILEGES', '<strong>UPOZORENJE:</strong> Privilegije datoteka su omogu&#263;ene u bazi podataka &rsquo;'.DB_DATABASE.'&lsquo; za korisnika &rsquo;'.DB_SERVER_USERNAME.'&lsquo;!');
// register_globals check
define('WARNING_REGISTER_GLOBALS', '<strong>UPOZORENJE:</strong> Ova funkcija je <strong>NEODOBRENA</strong> za PHP 5.3.0 i <strong>UKLONJENA</strong> za PHP 5.4.0. Molim vas, kontaktirajte va&#353;eg hostera da deaktivirate &quot;register_globals&quot;.');
// domain check
define('WARNING_DOMAIN_INVALID', '<strong>UPOZORENJE:</strong> Nije mogu&#263;e proveriti valjanost va&#353;eg domena (mogu&#263;i razlozi: neva&#382;e&#263;i format ili interovano ime domena (IDN))');
?>