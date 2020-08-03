<?php
/* -----------------------------------------------------------------------------------------
   $Id: banktransfer.php 12337 2019-10-30 06:50:10Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(banktransfer.php,v 1.9 2003/02/18 19:22:15); www.oscommerce.com 
   (c) 2003	 nextcommerce (banktransfer.php,v 1.5 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   OSC German Banktransfer v0.85a       	Autor:	Dominik Guder <osc@guder.org>
   
   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_TITLE', 'Banktransfer');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_DESCRIPTION', 'Banktransfer pl&#263;anje');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_INFO','');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK', 'Banktransfer');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EMAIL_FOOTER', ((defined('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE')) ? 'Napomena: formular za potvrdu faksa mo&#382;ete preuzeti odavde: ' . HTTP_SERVER . DIR_WS_CATALOG . MODULE_PAYMENT_BANKTRANSFER_URL_NOTE : ''));
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_INFO', ((defined('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY') && MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY != 'True') ? 'Imajte u vidu da direktan debitna bez IBAN/BI&#263; <b> je dostupna samo </b> sa <b> nema&#269;kog bankovnog ra&#269;una </b>. Navo&#273;enjem IBAN/BI&#263; mo&#382;ete koristiti sistem direktnog dugovanja <b> &#353;irom EU</b>.<br/>' : '') . 'Polja ozna&#269;ena sa (*) su obavezna. Za nema&#269;ki IBAN koji odre&#273;uje da je BIC opcionalan.<br/><br/>');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER', 'Vlasnik poslovnog kontakta:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER_EMAIL', 'Vlasnik naloga e-po&#353;te:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NUMBER', 'Broj ra&#269;una / IBAN:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_IBAN', 'IBAN:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BLZ', '&#353;ifra banke / BIC:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BIC', 'BIC:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NAME', 'Ime banke:');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_FAX', 'Pla&#263;anje na banku bi&#263;e potvr&#273;ena faksom');

// Note these MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_X texts appear also in the URL, so no html-entities are allowed here
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR', 'Gre&#353;ka:');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_1', 'Broj ra&#269;una i &#353;ifra banke se ne podudaraju! Provjerite ponovo.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_2', 'Nema dostupnog metoda provere za ovu &#353;ifru banke!');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_3', 'Broj naloga ne mo&#382;e biti proveren!');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_4', 'Broj ra&#269;una ne mo&#382;e biti proveren! Provjerite ponovo.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_5', '&#353;ifra banke nije prona&#273;ena! Provjerite ponovo.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_8', 'Uneti neispravan pozivni broj banke ili nijedan broj banke nije unet.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_9', 'Broj ra&#269;una nije nazna&#269;en.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_10', 'Nije nazna&#269;en nijedan vlasnik naloga.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_11', 'Nije ozna&#269;eno BIC.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_12', 'Nijedan va&#382;e&#263;i IBAN nije nagovestio.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_13', 'Neva&#382;e&#263;a E-adresa za informisanje vlasnika ra&#269;una.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_14', 'Nema va&#382;e&#263;e zemlje za SEPA.');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE', 'Bele&#353;ke:');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE2', 'Ako ne &#382;elite da po&#353;aljete podatke <br/> naloga preko interneta, mo&#382;ete da preuzmete na&#353;e ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE3', 'Obrazac faksa');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE4', ' i poslali smo je nazad do nas.');

define('JS_BANK_BLZ', '* Unesite &#353;ifru banke!\n\n');
define('JS_BANK_NAME', '* Molimo unesite svoje ime i banku!\n\n');
define('JS_BANK_NUMBER', '* Unesite broj va&#353;eg ra&#269;una!\n\n');
define('JS_BANK_OWNER', '* Unesite ime vlasnika naloga!\n\n');
define('JS_BANK_OWNER_EMAIL', '* Unesite E-adresu vlasnika poslovnog kontakta!\n\n');

define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_TITLE' , 'Kori&#353;&#263;enje tra&#382;enja baze podataka za &#353;ifru banke?');
define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_DESC', 'Koristite bazu podataka za proveru valjanosti &#353;ifre banke. Podrazumevani: ("true")?<br/>Uverite se da su &#353;ifre banke u bazi podataka a&#382;urne!<br/><br/>Na "false" (standardno) koristi se datoteka blz. csv koja sadr&#382;i mogu&#263;e zastarele stavke!');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_TITLE' , 'Fax-URL');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_DESC' , 'Datoteku potvrde faksa. Mora se nalaziti u katalogu-dir');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_TITLE' , 'Dozvoli potvrdu faksa');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_DESC' , '&#382;elite li da dozvolite potvrdu faksa?');
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_TITLE' , 'Redosled sortiranja prikaza');
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_DESC' , 'Redosled sortiranja prikaza. Prvo prikazuje najni&#382;a.');
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_TITLE' , 'Postavi status porud&#382;bine');
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_DESC' , 'Postavite status naloga koji su napravljeni sa ovim modulom za pla&#263;anje na ovu vrednost');
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_TITLE' , 'Zone pla&#263;anja');
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_DESC' , 'Ako je zona izabrana, omogu&#263;ite samo ovaj na&#269;in pla&#263;anja za tu zonu.');
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_TITLE' , 'Dozvoljene zone');
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_DESC' , 'Unesite zone <b> zasebno </b> kojima bi trebalo dozvoliti kori&#353;&#263;enje ove module (npr. AT, DE (ostavi prazno ako &#382;elite da dozvolite sve zone))');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_TITLE' , 'Dozvoli Banktransfer pla&#263;anje');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_DESC' , '&#382;elite li da prihvatite banktransfer pla&#263;anje?');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_TITLE' , 'Minimalne porud&#382;bine');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_DESC' , 'Minimalne porud&#382;bine za kupca da biste prikazali ovu opciju.');
define('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY_TITLE', 'IBAN Mode');
define('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY_DESC', '&#382;elite li da prihvatite samo za uplate IBAN Banksa?');

// SEPA
define('MODULE_PAYMENT_BANKTRANSFER_CI_TITLE', 'Identifikacioni broj (CI)');
define('MODULE_PAYMENT_BANKTRANSFER_CI_DESC', 'Unesite svoj SEPA-ID');
define('MODULE_PAYMENT_BANKTRANSFER_REFERENCE_PREFIX_TITLE', 'Prefiks za referencu (opciono)');
define('MODULE_PAYMENT_BANKTRANSFER_REFERENCE_PREFIX_DESC', 'Unesite prefiks za referencu na smrt');
define('MODULE_PAYMENT_BANKTRANSFER_DUE_DELAY_TITLE', 'Zrelost');
define('MODULE_PAYMENT_BANKTRANSFER_DUE_DELAY_DESC', 'Unesite period (u danima) za izvr&#353;avanje banktransfer');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EXTENDED_DESCRIPTION', '<strong><font color="red">UPOZORENJE:</font></strong> A&#382;urirajte &#353;ifre nema&#269;kih bankarskih brojeva!');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_UPDATE_SUCCESS', 'A&#382;urirani kodovi banke: ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_UPDATE_ERROR', 'Nije mogu&#263;e a&#382;urirati &#353;ifre banke.');
?>