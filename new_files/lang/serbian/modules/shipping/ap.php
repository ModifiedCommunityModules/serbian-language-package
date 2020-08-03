<?php
/* -----------------------------------------------------------------------------------------
   $Id: ap.php 11585 2019-03-21 11:50:23Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ap.php,v 1.02 2003/02/18); www.oscommerce.com 
   (c) 2003	 nextcommerce (ap.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   austrian_post_1.05       	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
   

define('MODULE_SHIPPING_AP_TEXT_TITLE', 'Austrijska po&#353;ta AG');
define('MODULE_SHIPPING_AP_TEXT_DESCRIPTION', 'Austrijska po&#353;ta AG - Otprema &#353;irom sveta');
define('MODULE_SHIPPING_AP_TEXT_WAY', 'Dostavljanje u');
define('MODULE_SHIPPING_AP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_AP_INVALID_ZONE', 'Na &#382;alost, nije mogu&#263;e uputiti u ovu zemlju');
define('MODULE_SHIPPING_AP_UNDEFINED_RATE', 'Tro&#353;kovi prosle&#273;ivanja ne mogu biti izra&#269;unati za momenat');

define('MODULE_SHIPPING_AP_STATUS_TITLE' , 'Austrijska po&#353;ta AG');
define('MODULE_SHIPPING_AP_STATUS_DESC' , '&#381;elite da ponudite austrijska po&#353;ta za transport?');
define('MODULE_SHIPPING_AP_ALLOWED_TITLE' , 'Dozvoljene zone');
define('MODULE_SHIPPING_AP_ALLOWED_DESC' , 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');
define('MODULE_SHIPPING_AP_TAX_CLASS_TITLE' , 'Poreska klasa');
define('MODULE_SHIPPING_AP_TAX_CLASS_DESC' , 'Koristite slede&#263;u poresku klasu za naknadu za isporuku.');
define('MODULE_SHIPPING_AP_ZONE_TITLE' , 'Zona isporuke');
define('MODULE_SHIPPING_AP_ZONE_DESC' , 'Ako je zona izabrana, omogu&#263;ite samo ovaj na&#269;in isporuke za tu zonu.');
define('MODULE_SHIPPING_AP_SORT_ORDER_TITLE' , 'Redosled sortiranja');
define('MODULE_SHIPPING_AP_SORT_ORDER_DESC' , 'Redosled sortiranja prikaza.');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_TITLE' , 'Broj zona');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_DESC' , 'Broj zona za kori&#353;&#263;enje');
define('MODULE_SHIPPING_AP_DISPLAY_TITLE' , 'Omogu&#263;i prikaz');
define('MODULE_SHIPPING_AP_DISPLAY_DESC' , '&#381;elite li da prika&#382;ete, ako odredi&#353;te isporuke nije mogu&#263;e ili ako se tro&#353;kovi isporuke ne mogu izra&#269;unati?');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_TITLE' , 'Broj zona');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_DESC' , 'Broj zona koje treba koristiti');
define('MODULE_SHIPPING_AP_DISPLAY_TITLE' , 'Omogu&#263;i prikaz');
define('MODULE_SHIPPING_AP_DISPLAY_DESC' , '&#381;elite li da prika&#382;ete, ako odredi&#353;te isporuke nije mogu&#263;e ili ako se tro&#353;kovi isporuke ne mogu izra&#269;unati?');

if (defined('MODULE_SHIPPING_AP_NUMBER_ZONES')) {
  for ($module_shipping_ap_i = 1; $module_shipping_ap_i <= MODULE_SHIPPING_AP_NUMBER_ZONES; $module_shipping_ap_i ++) {
    define('MODULE_SHIPPING_AP_COUNTRIES_'.$module_shipping_ap_i.'_TITLE' , '<hr/>Zone '.$module_shipping_ap_i.' zemalja');
    define('MODULE_SHIPPING_AP_COUNTRIES_'.$module_shipping_ap_i.'_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo zone '.$module_shipping_ap_i.' (Unesite WORLD za ostatak sveta.).');
    define('MODULE_SHIPPING_AP_COST_'.$module_shipping_ap_i.'_TITLE' , 'Zone '.$module_shipping_ap_i.' tabela isporuke');
    define('MODULE_SHIPPING_AP_COST_'.$module_shipping_ap_i.'_DESC' , 'Cene isporuke u zonu '.$module_shipping_ap_i.'  &#263;e se pomno&#382;iti sa brojem stavki u porud&#382;bini koja koristi ovaj na&#269;in isporuke.');
    define('MODULE_SHIPPING_AP_HANDLING_'.$module_shipping_ap_i.'_TITLE' , 'Zone '.$module_shipping_ap_i.' cene napla&#263;ivanja');
    define('MODULE_SHIPPING_AP_HANDLING_'.$module_shipping_ap_i.'_DESC' , 'Naknada za ovu zonu isporuke');
  }
}
?>