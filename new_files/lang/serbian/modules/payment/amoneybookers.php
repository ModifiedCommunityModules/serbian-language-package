<?php

/* -----------------------------------------------------------------------------------------
   $Id: amoneybookers.php 85 2007-01-14 15:19:44Z mzanier $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2006 xt:Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneybookers.php,v 1.01 2003/01/20); www.oscommerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   Moneybookers v1.0                       Autor:    Gabor Mate  <gabor(at)jamaga.hu>

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_TITLE', 'Bezbedno pla&#263;anje putem Skrill');
//define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_DESCRIPTION', 'Skrill<br /><br /><img src="images/icon_arrow_right.gif"> <b><a href="http://www.xt-commerce.com/index.php?option=com_content&task=view&id=76&lang=en" target="_blank">Help / Explanation</a></b>');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_DESCRIPTION', 'Skrill');
define('MODULE_PAYMENT_AMONEYBOOKERS_NOCURRENCY_ERROR', 'Nije instalirana valuta prihva&#263;ena u Skrill!');
define('MODULE_PAYMENT_AMONEYBOOKERS_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO','');
define('MODULE_PAYMENT_AMONEYBOOKERS_ERRORTEXT2', '&error=Do&#353;lo je do pogre&#353;ke tijekom va&#353;eg pla&#263;anja na Skrill!');
define('MODULE_PAYMENT_AMONEYBOOKERS_ORDER_TEXT', 'Datum narud&#382;be: ');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_ERROR', 'Pogre&#353;ka pla&#263;anja!');
define('MODULE_PAYMENT_AMONEYBOOKERS_CONFIRMATION_TEXT', 'Hvala na narud&#382;bi!');
define('MODULE_PAYMENT_AMONEYBOOKERS_TRANSACTION_FAILED_TEXT', 'Va&#353;a platna transakcija na Skrillu nije uspjela. Poku&#353;ajte ponovo ili odaberite drugu opciju pla&#263;anja!');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_2', '<b>100% sigurnost</b> - Sve su transakcije podataka sigurne pomo&#263;u Skrill-ove najsuvremenije sigurnosne tehnologije');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_3', '<b>100% za&#353;tita podataka</b> - Va&#353;i osobni podaci bit &#263;e pohranjeni u Skrillu i ne&#263;e se prenositi u trgovinu');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_4', '<b>Maksimalna udobnost</b> - Jednom kada imate Skrill ra&#269;un, trebat &#263;e vam samo adresa e-po&#353;te i zaporka za sve budu&#263;e transakcije');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_5', '<b>&#353;iroko prihva&#263;anje</b> - Uz Skrill mo&#382;ete platiti u nekoliko tisu&#263;a trgovina');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_1', '<br /><br />Odmah platite...');

define('MB_TEXT_MBDATE', 'Poslednja promena:');
define('MB_TEXT_MBTID', 'TR ID:');
define('MB_TEXT_MBERRTXT', 'Status:');

define('MODULE_PAYMENT_AMONEYBOOKERS_PROCESSED_STATUS_ID_TITLE', 'Status porud&#382;bine-obra&#273;eno');
define('MODULE_PAYMENT_AMONEYBOOKERS_PROCESSED_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_PENDING_STATUS_ID_TITLE', 'Status porud&#382;bine - zakazano');
define('MODULE_PAYMENT_AMONEYBOOKERS_PENDING_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_CANCELED_STATUS_ID_TITLE', 'Status porud&#382;bine - otkazano');
define('MODULE_PAYMENT_AMONEYBOOKERS_CANCELED_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS__TMP_STATUS_ID_TITLE', 'Status porud&#382;bine - Temp');
define('MODULE_PAYMENT_AMONEYBOOKERS__TMP_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_ICONS_TITLE', 'Icone');
define('MODULE_PAYMENT_AMONEYBOOKERS_ICONS_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_TITLE', 'Omogu&#263;iti  Skrill');
//define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_DESC', 'Do you want to accept payments through Skrill?<br /><br /><img src="images/icon_arrow_right.gif"> <b><a href="http://www.xt-commerce.com/index.php?option=com_content&task=view&id=76&lang=en" target="_blank">Help / Explanation</a></b>');
define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_DESC', '&#382;elite li da prihvatite uplate kroz Skrill?');
define('MODULE_PAYMENT_AMONEYBOOKERS_EMAILID_TITLE', 'E-adresa');
define('MODULE_PAYMENT_AMONEYBOOKERS_EMAILID_DESC', 'E-adresa koju ste registrovali sa Skrill. <font color="#ff0000">* Required</font>');
define('MODULE_PAYMENT_AMONEYBOOKERS_PWD_TITLE', 'Skrill Tajna re&#269;');
define('MODULE_PAYMENT_AMONEYBOOKERS_PWD_DESC', 'Tajna rije&#269; mo&#382;e se prona&#263;i u va&#353;em Skrill profilu (ovo nije va&#353;a lozinka!)');
define('MODULE_PAYMENT_AMONEYBOOKERS_MERCHANTID_TITLE', 'Trgovac ID');
define('MODULE_PAYMENT_AMONEYBOOKERS_MERCHANTID_DESC', 'Trgovac ID va&#353;eg Skrill naloga <font color="#ff0000">* Required</font>');
define('MODULE_PAYMENT_AMONEYBOOKERS_SORT_ORDER_TITLE', 'Redosled sortiranja prikaza.');
define('MODULE_PAYMENT_AMONEYBOOKERS_SORT_ORDER_DESC', 'Redosled sortiranja prikaza. Prvo prikazuje najni&#382;a.');
define('MODULE_PAYMENT_AMONEYBOOKERS_CURRENCY_TITLE', 'Valuta transakcije');
define('MODULE_PAYMENT_AMONEYBOOKERS_CURRENCY_DESC', 'Ako je korisni&#269;ka valuta koja nije dostupna u Skrillu, ta &#263;e se valuta koristiti za pla&#263;anje.');
define('MODULE_PAYMENT_AMONEYBOOKERS_LANGUAGE_TITLE', 'Jezik transakcije');
define('MODULE_PAYMENT_AMONEYBOOKERS_LANGUAGE_DESC', 'Ako jezik korisnika nije dostupan u Skrillu, ovaj &#263;e se jezik koristiti za pla&#263;anje.');
define('MODULE_PAYMENT_AMONEYBOOKERS_ZONE_TITLE', 'Zona pla&#263;anja');
define('MODULE_PAYMENT_AMONEYBOOKERS_ZONE_DESC', 'Ako je odabrana zona, omogu&#263;ite samo ovaj na&#269;in pla&#263;anja za tu zonu.');
define('MODULE_PAYMENT_AMONEYBOOKERS_ALLOWED_TITLE' , 'Dozvoljene zone');
define('MODULE_PAYMENT_AMONEYBOOKERS_ALLOWED_DESC' , 'Unesite zone <b> zasebno </b> kojima bi trebalo dozvoliti kori&#353;&#263;enje ovaj modul (npr. AT, DE (ostavi prazno ako &#382;elite da dozvolite sve zone))');
?>