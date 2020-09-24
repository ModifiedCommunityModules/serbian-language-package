<?php
/* -----------------------------------------------------------------------------------------
   $Id: item.php 11585 2019-03-21 11:50:23Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(item.php,v 1.6 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (item.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_ITEM_TEXT_TITLE', 'Po artiklu');
define('MODULE_SHIPPING_ITEM_TEXT_DESCRIPTION', 'Po artiklu');
define('MODULE_SHIPPING_ITEM_TEXT_WAY', 'Najbolji na&#269;in');
define('MODULE_SHIPPING_ITEM_INVALID_ZONE', 'Na &#382;alost, nije mogu&#263;e dopremiti u ovu zemlju');

define('MODULE_SHIPPING_ITEM_STATUS_TITLE' , 'Omogu&#263;i isporuku artikla');
define('MODULE_SHIPPING_ITEM_STATUS_DESC' , '&#381;elite li da ponudite po stopi isporuke po artiklu?');
define('MODULE_SHIPPING_ITEM_ALLOWED_TITLE' , 'Dozvoljene zone');
define('MODULE_SHIPPING_ITEM_ALLOWED_DESC' , 'Unesite zone <b>odvojeno</b> koje ovaj moduo mo&#382;e da koristi (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_TITLE' , 'Poreska klasa');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_DESC' , 'Koristite slede&#263;u poresku klasu za naknadu za isporuku.');
define('MODULE_SHIPPING_ITEM_ZONE_TITLE' , 'Zona transporta');
define('MODULE_SHIPPING_ITEM_ZONE_DESC' , 'Ako je zona izabrana, omogu&#263;ite samo ovaj na&#269;in isporuke za tu zonu.');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_TITLE' , 'Redosled sortiranja');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_DESC' , 'Redosled sortiranja prikaza.');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_TITLE' , 'Broj zona');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_DESC' , 'Broj zona za kori&#353;&#263;enje');
define('MODULE_SHIPPING_ITEM_DISPLAY_TITLE' , 'Omogu&#263;i prikaz');
define('MODULE_SHIPPING_ITEM_DISPLAY_DESC' , '&#381;elite li da prika&#382;ete, ako odredi&#353;te isporuke nije mogu&#263;e ili ako se tro&#353;kovi isporuke ne mogu izra&#269;unati?');

if (defined('MODULE_SHIPPING_ITEM_NUMBER_ZONES')) {
  for ($module_shipping_item_i = 1; $module_shipping_item_i <= MODULE_SHIPPING_ITEM_NUMBER_ZONES; $module_shipping_item_i ++) {
    define('MODULE_SHIPPING_ITEM_COUNTRIES_'.$module_shipping_item_i.'_TITLE' , '<hr/>Zone '.$module_shipping_item_i.' zemlje');
    define('MODULE_SHIPPING_ITEM_COUNTRIES_'.$module_shipping_item_i.'_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo zone '.$module_shipping_item_i.' (Unesi WORLD za ostatak sveta.).');
    define('MODULE_SHIPPING_ITEM_COST_'.$module_shipping_item_i.'_TITLE' , 'Zone '.$module_shipping_item_i.' tabela isporuka');
    define('MODULE_SHIPPING_ITEM_COST_'.$module_shipping_item_i.'_DESC' , 'Cene isporuke u zonu '.$module_shipping_item_i.' &#263;e se pomno&#382;iti sa brojem stavki u porud&#382;bini koja koristi ovaj na&#269;in isporuke.');
    define('MODULE_SHIPPING_ITEM_HANDLING_'.$module_shipping_item_i.'_TITLE' , 'Zone '.$module_shipping_item_i.' naknada za rukovanje');
    define('MODULE_SHIPPING_ITEM_HANDLING_'.$module_shipping_item_i.'_DESC' , 'Naknada za ovu zonu isporuke');
  }
}
?>