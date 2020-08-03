<?php
/* -----------------------------------------------------------------------------------------
   $Id: table.php 11585 2019-03-21 11:50:23Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project (earlier name of osCommerce)
   (c) 2002-2003 osCommerce (table.php,v 1.6 2003/02/16); www.oscommerce.com 
   (c) 2003 nextcommerce (table.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 XT-Commerce

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_TABLE_TEXT_TITLE', 'Stopa tablice');
define('MODULE_SHIPPING_TABLE_TEXT_DESCRIPTION', 'Stopa tablice');
define('MODULE_SHIPPING_TABLE_TEXT_WAY', 'Najbolji na&#269;in (%01.2f kg)');
define('MODULE_SHIPPING_TABLE_TEXT_WEIGHT', 'Te&#382;ina');
define('MODULE_SHIPPING_TABLE_TEXT_AMOUNT', 'Iznos');
define('MODULE_SHIPPING_TABLE_INVALID_ZONE', 'Nijedna isporuka nije dostupna izabranoj zemlji!');
define('MODULE_SHIPPING_TABLE_UNDEFINED_RATE', 'U ovom trenutku nije mogu&#263;e utvrditi stopu isporuke.');

define('MODULE_SHIPPING_TABLE_STATUS_TITLE' , 'Omogu&#263;i tabelarni metod');
define('MODULE_SHIPPING_TABLE_STATUS_DESC' , '&#381;elite li da ponudite isporuku kursa tabele?');
define('MODULE_SHIPPING_TABLE_ALLOWED_TITLE' , 'Dozvoljene zone');
define('MODULE_SHIPPING_TABLE_ALLOWED_DESC' , 'Unesite zone <b>odvojeno</b> koje ovaj moduo mo&#382;e da koristi (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');
define('MODULE_SHIPPING_TABLE_MODE_TITLE' , 'Metod tabele');
define('MODULE_SHIPPING_TABLE_MODE_DESC' , 'Tro&#353;ak isporuke se zasniva na ukupnoj vrednosti porud&#382;bine ili ukupnoj te&#382;ini artikala koji su poru&#269;eni.');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_TITLE' , 'Poreska klasa');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_DESC' , 'Koristite slede&#263;u poresku klasu za naknadu za isporuku.');
define('MODULE_SHIPPING_TABLE_ZONE_TITLE' , 'Zona isporuke');
define('MODULE_SHIPPING_TABLE_ZONE_DESC' , 'Ako je zona izabrana, omogu&#263;ite samo ovaj na&#269;in isporuke za tu zonu.');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_TITLE' , 'Redosled sortiranja');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_DESC' , 'Redosled sortiranja prikaza.');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_TITLE' , 'Broj zona');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_DESC' , 'Broj zona koje treba koristiti');
define('MODULE_SHIPPING_TABLE_DISPLAY_TITLE' , 'Omogu&#263;i prikaz');
define('MODULE_SHIPPING_TABLE_DISPLAY_DESC' , '&#381;elite li da prika&#382;ete, ako odredi&#353;te isporuke nije mogu&#263;e ili ako se tro&#353;kovi isporuke ne mogu izra&#269;unati?');

if (defined('MODULE_SHIPPING_TABLE_NUMBER_ZONES')) {
  for ($module_shipping_table_i = 1; $module_shipping_table_i <= MODULE_SHIPPING_TABLE_NUMBER_ZONES; $module_shipping_table_i ++) {
    define('MODULE_SHIPPING_TABLE_COUNTRIES_'.$module_shipping_table_i.'_TITLE' , '<hr/>Zone '.$module_shipping_table_i.' zemlje');
    define('MODULE_SHIPPING_TABLE_COUNTRIES_'.$module_shipping_table_i.'_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo zone '.$module_shipping_table_i.' (Unesi WORLD za ostatak sveta.).');
    define('MODULE_SHIPPING_TABLE_COST_'.$module_shipping_table_i.'_TITLE' , 'Zone '.$module_shipping_table_i.' tabela isporuka');
    define('MODULE_SHIPPING_TABLE_COST_'.$module_shipping_table_i.'_DESC' , 'Cene isporuke u zonu '.$module_shipping_table_i.' destinacije na osnovu grupe maksimalnih te&#382;ina ili ukupnih porud&#382;bina. Primer: 3:8.50, 7:10.50,... Te&#382;ina/ukupna vrednost manja ili jednaka 3 ko&#353;ta&#263;e 8,50 za zonu '.$module_shipping_table_i.' destinacije.');
    define('MODULE_SHIPPING_TABLE_HANDLING_'.$module_shipping_table_i.'_TITLE' , 'Zone '.$module_shipping_table_i.' naknada za rukovanje');
    define('MODULE_SHIPPING_TABLE_HANDLING_'.$module_shipping_table_i.'_DESC' , 'Naknada za ovu zonu isporuke');
  }
}
?>