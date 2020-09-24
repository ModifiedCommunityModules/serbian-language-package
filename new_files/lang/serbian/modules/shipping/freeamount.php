<?php
/* -----------------------------------------------------------------------------------------
   $Id: freeamount.php 12469 2019-12-09 13:17:15Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce( freeamount.php,v 1.01 2002/01/24 03:25:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (freeamount.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   freeamountv2-p1         	Autor:	dwk

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_FREEAMOUNT_TEXT_TITLE', 'Besplatna dostava');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_DESCRIPTION', 'Besplatna dostava w/ Minimalni iznos porud&#382;bine');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_WAY', 'Minimalna narud&#382;ba za besplatnu dostavu: %s');
define('MODULE_SHIPPING_FREEAMOUNT_INVALID_ZONE', 'Na &#382;alost, nije mogu&#263;e uputiti u ovu zemlju');

define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_TITLE' , 'Dozvoljene zone');
define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_DESC' , 'Unesite zone <b>odvojeno</b> koje ovaj moduo mo&#382;e da koristi (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_TITLE' , 'Omogu&#263;i besplatnu isporuku uz minimalnu kupovinu');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_DESC' , '&#381;elite li da ponudite besplatnu isporuku?');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_TITLE' , 'Zona isporuke');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_DESC' , 'Ako odaberete zonu koja se koristi samo ove zone za isporuku.');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_TITLE' , 'Redosled prikaza');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_DESC' , 'Najni&#382;a &#263;e biti prikazana prvo.');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_TITLE' , 'Broj zona');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_DESC' , 'Broj zona koje treba koristiti');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_TITLE' , 'Omogu&#263;i prikaz');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_DESC' , '&#381;elite li da prika&#382;ete, ako odredi&#353;te isporuke nije mogu&#263;e ili ako se tro&#353;kovi isporuke ne mogu izra&#269;unati?');

if (defined('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES')) {
  for ($module_shipping_freeamount_i = 1; $module_shipping_freeamount_i <= MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES; $module_shipping_freeamount_i ++) {
    define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_'.$module_shipping_freeamount_i.'_TITLE' , '<hr/>Zone '.$module_shipping_freeamount_i.' zemalja');
    define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_'.$module_shipping_freeamount_i.'_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo zone '.$module_shipping_freeamount_i.' (Unesite WORLD za ostatak sveta.).');
    define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_'.$module_shipping_freeamount_i.'_TITLE' , 'Zone '.$module_shipping_freeamount_i.' minimalne cene');
    define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_'.$module_shipping_freeamount_i.'_DESC' , 'Minimalni iznos porud&#382;bine koji je nabavljen za zonu '.$module_shipping_freeamount_i.' pre nego sto je dostava besplatna.');
  }
}
?>