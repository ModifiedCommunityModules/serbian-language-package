<?php
/* -----------------------------------------------------------------------------------------
   $Id$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

if (defined('_VALID_XTC')) {
  define('MODULE_SHIPCLOUD_TEXT_TITLE', 'shipcloud - nova generacija paketnog transporta');
  define('MODULE_SHIPCLOUD_TEXT_DESCRIPTION', '&#353;tampaj Print parcel labels directly out of the Shop.');
  define('MODULE_SHIPCLOUD_STATUS_TITLE', 'Status');
  define('MODULE_SHIPCLOUD_STATUS_DESC', 'Aktiviraj moduo?');
  define('MODULE_SHIPCLOUD_API_TITLE', '<hr noshade>API');
  define('MODULE_SHIPCLOUD_API_DESC', 'API klju&#269; za shipcloud');
  define('MODULE_SHIPCLOUD_PARCEL_TITLE', '<hr noshade>Veli&#269;ina paketa');
  define('MODULE_SHIPCLOUD_PARCEL_DESC', 'Molimo vas da defini&#353;ete veli&#269;inu paketa ovako: du&#382;ina, &#353;irina, visina;<br/>Mo&#382;ete definisati vi&#353;e veli&#269;ina razdvojeno pomo&#263;u ta&#269;ke zareza(;). primer: 20,40,30;15,20,20;');
  define('MODULE_SHIPCLOUD_COMPANY_TITLE', '<hr noshade>Detalji korisnika<br/>');
  define('MODULE_SHIPCLOUD_COMPANY_DESC', 'Kompanija:');
  define('MODULE_SHIPCLOUD_FIRSTNAME_TITLE', '');
  define('MODULE_SHIPCLOUD_FIRSTNAME_DESC', 'Ime:');
  define('MODULE_SHIPCLOUD_LASTNAME_TITLE', '');
  define('MODULE_SHIPCLOUD_LASTNAME_DESC', 'Prezime:');
  define('MODULE_SHIPCLOUD_ADDRESS_TITLE', '');
  define('MODULE_SHIPCLOUD_ADDRESS_DESC', 'Adresa:');
  define('MODULE_SHIPCLOUD_POSTCODE_TITLE', '');
  define('MODULE_SHIPCLOUD_POSTCODE_DESC', 'Po&#353;tanski broj:');
  define('MODULE_SHIPCLOUD_CITY_TITLE', '');
  define('MODULE_SHIPCLOUD_CITY_DESC', 'Grad:');
  define('MODULE_SHIPCLOUD_TELEPHONE_TITLE', '');
  define('MODULE_SHIPCLOUD_TELEPHONE_DESC', 'Telefon:');
  define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_TITLE', '');
  define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_DESC', 'IBAN:');
  define('MODULE_SHIPCLOUD_ACCOUNT_BIC_TITLE', '');
  define('MODULE_SHIPCLOUD_ACCOUNT_BIC_DESC', 'BIC:');
  define('MODULE_SHIPCLOUD_BANK_NAME_TITLE', '<hr noshade>Detalji banke<br/>');
  define('MODULE_SHIPCLOUD_BANK_NAME_DESC', 'Banka:');
  define('MODULE_SHIPCLOUD_BANK_HOLDER_TITLE', '');
  define('MODULE_SHIPCLOUD_BANK_HOLDER_DESC', 'Vlasnik:');
  define('MODULE_SHIPCLOUD_LOG_TITLE', '<hr noshade>Log');
  define('MODULE_SHIPCLOUD_LOG_DESC', 'datoteka evidencije je uskladi&#353;tena u fascikli / log.');
  define('MODULE_SHIPCLOUD_EMAIL_TITLE', '<hr noshade>Obave&#353;tenje e-po&#353;tom');
  define('MODULE_SHIPCLOUD_EMAIL_DESC', 'Obavesti korisnika pomo&#263;u e-po&#353;te?');
  define('MODULE_SHIPCLOUD_EMAIL_TYPE_TITLE', '<hr noshade>Obave&#353;tenja');
  define('MODULE_SHIPCLOUD_EMAIL_TYPE_DESC', 'Da li korisnik treba da bude obave&#353;ten od strane prodavnice ili shipcloud-a?<br><Bele&#353;ka:</b>Za obave&#353;tenje iz prodavnice morate postaviti Web kuku na ovu URL adresu: '.xtc_catalog_href_link('callback/shipcloud/callback.php', '', 'SSL', false).' u shipcloud-u.');
}

define('SHIPMENT.TRACKING.SHIPCLOUD_LABEL_CREATED', 'Isporuka kreirana u shipcloud-u');
define('SHIPMENT.TRACKING.LABEL_CREATED', 'Nalepnica je kreirana');
define('SHIPMENT.TRACKING.PICKED_UP', 'Po&#353;iljka je pokupljena od strane nosioca');
define('SHIPMENT.TRACKING.TRANSIT', 'Po&#353;iljka je u prenosu');
define('SHIPMENT.TRACKING.OUT_FOR_DELIVERY', 'Spremno za dostavu');
define('SHIPMENT.TRACKING.DELIVERED', 'Dostavljeno');
define('SHIPMENT.TRACKING.AWAITS_PICKUP_BY_RECEIVER', '&#268;eka se na preuzimanje od strane prima&#269;a');
define('SHIPMENT.TRACKING.CANCELED', 'Nalepnica je obrisana');
define('SHIPMENT.TRACKING.DELAYED', 'Dostava &#263;e biti odlo&#382;ena');
define('SHIPMENT.TRACKING.EXCEPTION', 'Postoji problem sa transportom');
define('SHIPMENT.TRACKING.NOT_DELIVERED', 'Nije dostavljeno');
define('SHIPMENT.TRACKING.NOTIFICATION', 'Unutra&#353;nje obave&#353;tenje o prevozniku: pra&#263;enje doga&#273;aja u okviru isporuke &#263;e nositi vi&#353;e slo&#382;enih informacija.');
define('SHIPMENT.TRACKING.UNKNOWN', 'Status nepoznat');
?>