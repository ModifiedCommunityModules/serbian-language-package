<?php
/* -----------------------------------------------------------------------------------------
   $Id: exclude_payment.php 12545 2020-01-24 08:01:50Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_EXCLUDE_PAYMENT_TEXT_TITLE', 'Na&#269;ini pla&#263;anja u zavisnosti od na&#269;ina isporuke');
define('MODULE_EXCLUDE_PAYMENT_TEXT_DESCRIPTION', '');
define('MODULE_EXCLUDE_PAYMENT_STATUS_TITLE' , 'Status');
define('MODULE_EXCLUDE_PAYMENT_STATUS_DESC' , 'Omogu&#263;i modul?');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_TITLE' , 'Broj na&#269;ina isporuke');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_DESC' , 'Broj opcija isporuke koje treba konfigurisati.');

if (defined('MODULE_EXCLUDE_PAYMENT_NUMBER')) {
  for ($module_exclude_payment_i = 1; $module_exclude_payment_i <= (int)MODULE_EXCLUDE_PAYMENT_NUMBER; $module_exclude_payment_i ++) {
    define('MODULE_EXCLUDE_PAYMENT_SHIPPING_'.$module_exclude_payment_i.'_TITLE' , '<hr noshade>'.$module_exclude_payment_i.'. na&#269;in isporuke');
    define('MODULE_EXCLUDE_PAYMENT_SHIPPING_'.$module_exclude_payment_i.'_DESC' , 'Izaberite na&#269;in isporuke na koji &#273;elite da izuzmete na&#269;in pla&#263;anja.');
    define('MODULE_EXCLUDE_PAYMENT_PAYMENT_'.$module_exclude_payment_i.'_TITLE' , $module_exclude_payment_i.'. isklju&#269;eni na&#269;in pla&#263;anja');
    define('MODULE_EXCLUDE_PAYMENT_PAYMENT_'.$module_exclude_payment_i.'_DESC' , 'Izaberite na&#269;in pla&#263;anja koji &#382;elite da izuzmete.');
  }
}
?>