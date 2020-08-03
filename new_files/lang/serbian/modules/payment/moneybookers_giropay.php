<?php
/* -----------------------------------------------------------------------------------------
   $Id: moneybookers_giropay.php 3598 2012-09-06 06:22:36Z dokuman $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_TEXT_TITLE', 'Giropay');
$_var = 'Giropay via Skrill';
if (_PAYMENT_MONEYBOOKERS_EMAILID=='') {
  $_var.='<br /><br /><b><font color="red">Prvo podesite skrill.com konfiguraciju! (Napr. Konfiguracija -> Partneri -> Skrill.com)!</font></b>';
}
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_TEXT_DESCRIPTION', $_var);
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_NOCURRENCY_ERROR', 'Ne postoji Skrill prihva&#263;ena valuta!');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_TEXT_INFO','');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_ERRORTEXT2', '&error=Do&#353;lo je do gre&#353;ke tokom isplate Skrill!');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_ORDER_TEXT', 'Datum porud&#382;bine: ');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_TEXT_ERROR', 'Gre&#353;ka u pla&#263;anju!');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_CONFIRMATION_TEXT', 'Hvala na narud&#382;bi!');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_TRANSACTION_FAILED_TEXT', 'Transakcija pla&#263;anja u Skrill nije uspela. Poku&#353;ajte ponovo ili izaberite drugu opciju pla&#263;anja!');


define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_STATUS_TITLE', 'Omogu&#263;i Skrill');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_STATUS_DESC', '&#382;elite li da prihvatite uplate kroz Skrill?');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_SORT_ORDER_TITLE', 'Redosled sortiranja prikaza.');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_SORT_ORDER_DESC', 'Redosled sortiranja prikaza. Prvo prikazuje najni&#382;a.');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_ZONE_TITLE', 'Zone pla&#263;anja');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_ZONE_DESC', 'Ako je zona izabrana, omogu&#263;ite samo ovaj na&#269;in pla&#263;anja za tu zonu.');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_ALLOWED_TITLE' , 'Dozvoljene zone');
define('MODULE_PAYMENT_MONEYBOOKERS_GIROPAY_ALLOWED_DESC' , 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');
?>