<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_coupon.php 11640 2019-03-28 10:38:31Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(t_coupon.php,v 1.1.2.2 2003/05/15); www.oscommerce.com
   (c) 2006 XT-Commerce (ot_coupon.php 899 2005-04-29)

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:

   Credit Class/Gift Vouchers/Discount Coupons (Version 5.10)
   http://www.oscommerce.com/community/contributions,282
   Copyright (c) Strider | Strider@oscworks.com
   Copyright (c  Nick Stanko of UkiDev.com, nick@ukidev.com
   Copyright (c) Andre ambidex@gmx.net
   Copyright (c) 2001,2002 Ian C Wilson http://www.phesis.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_ORDER_TOTAL_COUPON_TITLE', 'Kupona za popust');
  define('MODULE_ORDER_TOTAL_COUPON_HEADER', 'Poklon vau&#269;eri/Sni&#382;ni kuponi');
  define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', 'Kupona za popust');
  define('MODULE_ORDER_TOTAL_COUPON_USER_PROMPT', '');
  define('ERROR_NO_INVALID_REDEEM_COUPON', 'Neva&#382;e&#263;i kuponski kod');
  //BOF - DokuMan - 2010-08-31 - constants already defined in english.php
  //define('ERROR_INVALID_STARTDATE_COUPON', 'This coupon is not available yet');
  //define('ERROR_INVALID_FINISDATE_COUPON', 'This coupon has expired');
  //define('ERROR_INVALID_USES_COUPON', 'This coupon could only be used ');  
  //define('TIMES', ' times.');
  //define('ERROR_INVALID_USES_USER_COUPON', 'You have used the coupon the maximum number of times allowed per customer.'); 
  //define('REDEEMED_COUPON', 'a coupon worth ');  
  //EOF - DokuMan - 2010-08-31 - constants already defined in english.php
  define('REDEEMED_MIN_ORDER', 'po nare&#273;enju ');  
  define('REDEEMED_RESTRICTIONS', ' [Primenjuju se ograni&#269;enja po kategorijama proizvoda]');  
  define('TEXT_ENTER_COUPON_CODE', 'Unos &#353;ifre za preuzimanje&nbsp;&nbsp;');
  
  define('MODULE_ORDER_TOTAL_COUPON_STATUS_TITLE', 'Prika&#382;i ukupno');
  define('MODULE_ORDER_TOTAL_COUPON_STATUS_DESC', '&#382;elite li da prika&#382;ete vrednost kupona za popust?');
  define('MODULE_ORDER_TOTAL_COUPON_SORT_ORDER_TITLE', 'Redosled sortiranja');
  define('MODULE_ORDER_TOTAL_COUPON_SORT_ORDER_DESC', 'Redosled prikaza.');
  define('MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING_TITLE', 'Uklju&#269;i isporuku');
  define('MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING_DESC', 'Uklju&#269;i isporuku u obra&#269;un');
  define('MODULE_ORDER_TOTAL_COUPON_INC_TAX_TITLE', 'Uklju&#269;i porez');
  define('MODULE_ORDER_TOTAL_COUPON_INC_TAX_DESC', 'Uklju&#269;i porez u obra&#269;un.');
  define('MODULE_ORDER_TOTAL_COUPON_CALC_TAX_TITLE', 'Ponovo Izra&#269;unaj porez');
  define('MODULE_ORDER_TOTAL_COUPON_CALC_TAX_DESC', 'Ponovo Izra&#269;unaj porez');
  define('MODULE_ORDER_TOTAL_COUPON_TAX_CLASS_TITLE', 'Poreska klasa');
  define('MODULE_ORDER_TOTAL_COUPON_TAX_CLASS_DESC', 'Koristi slede&#263;u poresku klasu prilikom tretmana kupona za popust kao potra&#382;ivanje.');
  //BOF - web28 - 2010-06-20 - no discount for special offers
  define('MODULE_ORDER_TOTAL_COUPON_SPECIAL_PRICES_TITLE', 'Popust za specijalne ponude');
  define('MODULE_ORDER_TOTAL_COUPON_SPECIAL_PRICES_DESC', 'Dozvoljeni popust za specijalne ponude');
  //EOF - web28 - 2010-06-20 - no discount for special offers
?>