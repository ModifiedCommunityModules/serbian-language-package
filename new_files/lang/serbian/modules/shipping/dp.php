<?php
/* -----------------------------------------------------------------------------------------
   $Id: dp.php 11585 2019-03-21 11:50:23Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(dp.php,v 1.4 2003/02/18 04:28:00); www.oscommerce.com
   (c) 2003 nextcommerce (dp.php,v 1.5 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   German Post (Deutsche Post WorldNet)         	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   enhanced on 2010-12-08 18:17:30Z franky_n
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_DP_TEXT_TITLE', 'Nema&#269;ki post');
define('MODULE_SHIPPING_DP_TEXT_DESCRIPTION', 'Nema&#269;ki post - Modul za isporuku &#353;irom svijeta');
define('MODULE_SHIPPING_DP_TEXT_WAY', 'Dostaviti u');
define('MODULE_SHIPPING_DP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_DP_INVALID_ZONE', 'Na &#382;alost, nije mogu&#263;e uputiti u ovu zemlju');
define('MODULE_SHIPPING_DP_UNDEFINED_RATE', 'Tro&#353;kovi isporuke se ne mogu izra&#269;unati za momenat');

define('MODULE_SHIPPING_DP_STATUS_TITLE' , 'Nema&#269;ki post Svetska mre&#382;a');
define('MODULE_SHIPPING_DP_STATUS_DESC' , '&#382;elite li da ponudite isporuku sa Nema&#269;kom post Svetskom mre&#382;om?');
define('MODULE_SHIPPING_DP_HANDLING_TITLE' , 'Naknada za rukovanje');
define('MODULE_SHIPPING_DP_HANDLING_DESC' , 'Taksa za rukovanje u evrima');
define('MODULE_SHIPPING_DP_TAX_CLASS_TITLE' , 'Taksa');
define('MODULE_SHIPPING_DP_TAX_CLASS_DESC' , 'Izaberite poresku stopu za isporuku.');
define('MODULE_SHIPPING_DP_ZONE_TITLE' , 'Zona isporuke');
define('MODULE_SHIPPING_DP_ZONE_DESC' , 'Ako odaberete ovu zonu, samo ova zona &#263;e se koristiti.');
define('MODULE_SHIPPING_DP_SORT_ORDER_TITLE' , 'Redosled prikaza');
define('MODULE_SHIPPING_DP_SORT_ORDER_DESC' , 'Najni&#382;i prvo.');
define('MODULE_SHIPPING_DP_ALLOWED_TITLE' , 'Pojedina&#269;ne zone isporuke');
define('MODULE_SHIPPING_DP_ALLOWED_DESC' , 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_TITLE' , 'Broj zona');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_DESC' , 'Broj zona koje treba koristiti');
define('MODULE_SHIPPING_DP_DISPLAY_TITLE' , 'Omogu&#263;i prikaz');
define('MODULE_SHIPPING_DP_DISPLAY_DESC' , '&#382;elite li da prika&#382;ete, ako odredi&#353;te isporuke nije mogu&#263;e ili ako se tro&#353;kovi isporuke ne mogu izra&#269;unati?');

if (defined('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES')) {
  for ($module_shipping_dp_i = 1; $module_shipping_dp_i <= MODULE_SHIPPING_DP_NUMBER_ZONES; $module_shipping_dp_i ++) {
    define('MODULE_SHIPPING_DP_COUNTRIES_'.$module_shipping_dp_i.'_TITLE' , '<hr/>DP Zone '.$module_shipping_dp_i.' zemalja');
    define('MODULE_SHIPPING_DP_COUNTRIES_'.$module_shipping_dp_i.'_DESC' , 'Lista tvokaraktnog ISO koda dr&#382;ava, odvojenih zarezom koji su deo zone '.$module_shipping_dp_i.' (Unesite WORLD za ostatak sveta.).');
    define('MODULE_SHIPPING_DP_COST_'.$module_shipping_dp_i.'_TITLE' , 'DP Zona '.$module_shipping_dp_i.' tabele transporta');
    define('MODULE_SHIPPING_DP_COST_'.$module_shipping_dp_i.'_DESC' , 'Cene isporuke u zonu '.$module_shipping_dp_i.' destinacije na osnovu niza te&#382;ina porud&#382;bine. Primer: 3:8.50, 7:10.50, 99999:12.00... Te&#382;inu ve&#263;e od 0 i manje od 3 ko&#353;ta&#263;e 8,50, manje od 7 ko&#353;ta&#263;e 10,50 za zonu '.$module_shipping_dp_i.' destinacije.');
  }
}
?>