<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_gv.php 11640 2019-03-28 10:38:31Z GTB $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_gv.php,v 1.1.2.1 2003/05/15); www.oscommerce.com

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

  define('MODULE_ORDER_TOTAL_GV_TITLE', 'Poklon vau&#269;eri');
  define('MODULE_ORDER_TOTAL_GV_HEADER', 'Poklon vau&#269;eri');
  define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', 'Poklon vau&#269;eri');
  define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', 'Da biste koristili saldo poklon-vau&#269;era na ra&#269;unu  ->&nbsp;');
  define('TEXT_ENTER_GV_CODE', 'Unos &#353;ifre za preuzimanje&nbsp;&nbsp;');
  
  define('MODULE_ORDER_TOTAL_GV_STATUS_TITLE', 'Prika&#382;i ukupno');
  define('MODULE_ORDER_TOTAL_GV_STATUS_DESC', '&#382;elite li da prika&#382;ete poklon Vau&#269;erovu vrednost?');
  define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_TITLE', 'Redosled sortiranja');
  define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_DESC', 'Redosled sortiranja prikaza');
  define('MODULE_ORDER_TOTAL_GV_QUEUE_TITLE', 'Nabavke u redu &#269;ekanja');
  define('MODULE_ORDER_TOTAL_GV_QUEUE_DESC', '&#382;elite li da u redu kupujete poklon vau&#269;era?');
  define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_TITLE', 'Uklju&#269;i isporuku');
  define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_DESC', 'Uklju&#269;i isporuku u obra&#269;un');
  define('MODULE_ORDER_TOTAL_GV_INC_TAX_TITLE', 'Uklju&#269;i porez');
  define('MODULE_ORDER_TOTAL_GV_INC_TAX_DESC', 'Uklju&#269;i porez u obra&#269;un.');
  define('MODULE_ORDER_TOTAL_GV_CALC_TAX_TITLE', 'Ponovo Izra&#269;unaj porez');
  define('MODULE_ORDER_TOTAL_GV_CALC_TAX_DESC', 'Ponovo Izra&#269;unaj porez');
  define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_TITLE', 'Poreska klasa');
  define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_DESC', 'Koristi slede&#263;u poresku klasu kada tretiramo poklon vau&#269;era kao kreditnu bele&#353;ku.');
  define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_TITLE', 'Kredit sa PDV-om');
  define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_DESC', 'Dodaj porez u kupljeni poklon-Vau&#269;erski kada se kreditira na ra&#269;un');
?>