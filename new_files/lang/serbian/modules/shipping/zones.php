<?php
/* -----------------------------------------------------------------------------------------
   $Id: zones.php 11585 2019-03-21 11:50:23Z GTB $   

    modified eCommerce Shopsoftware
    http://www.modified-shop.org

    Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(zones.php,v 1.3 2002/04/17); www.oscommerce.com 
   (c) 2003	 nextcommerce (zones.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2003  xt-commerce.com (zones.php  2005-04-29); www.xt-commerce.com

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_ZONES_TEXT_TITLE', 'Stope zona');
define('MODULE_SHIPPING_ZONES_TEXT_DESCRIPTION', 'Stopa bazirana na zoni');
define('MODULE_SHIPPING_ZONES_TEXT_WAY', 'Isporuka u:');
define('MODULE_SHIPPING_ZONES_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_ZONES_INVALID_ZONE', 'Nijedna isporuka nije dostupna izabranoj zemlji!');
define('MODULE_SHIPPING_ZONES_UNDEFINED_RATE', 'U ovom trenutku nije mogu&#263;e utvrditi stopu isporuke.');

define('MODULE_SHIPPING_ZONES_STATUS_TITLE' , 'Omogu&#263;i metod zona');
define('MODULE_SHIPPING_ZONES_STATUS_DESC' , '&#381;elite li da ponudite isporuku sa stopom zone?');
define('MODULE_SHIPPING_ZONES_ALLOWED_TITLE' , 'Dozvoljene zone');
define('MODULE_SHIPPING_ZONES_ALLOWED_DESC' , 'Unesite zone <b>odvojeno</b> koje ovaj moduo mo&#382;e da koristi (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_TITLE' , 'Poreska klasa');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_DESC' , 'Koristite slede&#263;u poresku klasu za naknadu za isporuku.');
define('MODULE_SHIPPING_ZONES_ZONE_TITLE' , 'Zona isporuke');
define('MODULE_SHIPPING_ZONES_ZONE_DESC' , 'Ako odaberete zonu koja se koristi samo ove zone za isporuku.');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_TITLE' , 'Redosled sortiranja');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_DESC' , 'Redosled sortiranja prikaza.');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_TITLE' , 'Broj zona');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_DESC' , 'Broj zona koje treba koristiti');
define('MODULE_SHIPPING_ZONES_DISPLAY_TITLE' , 'Omogu&#263;i prikaz');
define('MODULE_SHIPPING_ZONES_DISPLAY_DESC' , '&#381;elite li da prika&#382;ete, ako odredi&#353;te isporuke nije mogu&#263;e ili ako se tro&#353;kovi isporuke ne mogu izra&#269;unati?');

if (defined('MODULE_SHIPPING_ZONES_NUMBER_ZONES')) {
  for ($module_shipping_zones_i = 1; $module_shipping_zones_i <= MODULE_SHIPPING_ZONES_NUMBER_ZONES; $module_shipping_zones_i ++) {
    define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$module_shipping_zones_i.'_TITLE' , '<hr/>Zone '.$module_shipping_zones_i.' dr&#382;ave');
    define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$module_shipping_zones_i.'_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo zone '.$module_shipping_zones_i.' (Unesi WORLD za ostatak sveta.).');
    define('MODULE_SHIPPING_ZONES_COST_'.$module_shipping_zones_i.'_TITLE' , 'Zone '.$module_shipping_zones_i.' tabela isporuka');
    define('MODULE_SHIPPING_ZONES_COST_'.$module_shipping_zones_i.'_DESC' , 'Cene isporuke u zonu '.$module_shipping_zones_i.' destinacije na osnovu grupe maksimalnih te&#382;ina porud&#382;bine. Primer: 3:8.50,7:10.50,... Te&#382;ina manje od ili jednako 3 ko&#353;ta&#263;e 8,50 za zonu '.$module_shipping_zones_i.' destinacije.');
    define('MODULE_SHIPPING_ZONES_HANDLING_'.$module_shipping_zones_i.'_TITLE' , 'Zone '.$module_shipping_zones_i.' naknada za rukovanje');
    define('MODULE_SHIPPING_ZONES_HANDLING_'.$module_shipping_zones_i.'_DESC' , 'Naknada za ovu zonu isporuke');
  }
}
?>