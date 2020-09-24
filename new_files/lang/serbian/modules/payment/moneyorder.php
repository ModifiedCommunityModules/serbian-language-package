<?php
/* -----------------------------------------------------------------------------------------
   $Id: moneyorder.php 12038 2019-07-30 10:00:53Z GTB $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneyorder.php,v 1.8 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (moneyorder.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', '&#268;ek/nalog za novac');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Dugovanja:&nbsp;' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? nl2br(MODULE_PAYMENT_MONEYORDER_PAYTO) : '') . '<br />Namena pla&#263;anja: %s<br /><br />Po&#353;alji na:<br /><br />' . nl2br(STORE_OWNER) . '<br /><br />' . 'Va&#353;a narud&#382;ja se ne&#263;e isporu&#269;iti dok ne dobijemo pla&#263;anje!');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Dugovanja: ". (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . "\nNamena pla&#263;anja: %s\n\nPo&#353;alji na:\n" . STORE_OWNER . "\n\n" . 'Va&#353;a narud&#382;ja se ne&#263;e isporu&#269;iti dok ne dobijemo pla&#263;anje');
  if (defined('MODULE_PAYMENT_MONEYORDER_SUCCESS') && MODULE_PAYMENT_MONEYORDER_SUCCESS == 'True') {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO','Naru&#269;ujemo va&#353;u narud&#382;bi nakon prijema uplate. Primi&#263;ete podatke o ra&#269;unu u poslednjem koraku odjave.');
  } else {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO','Naru&#269;ujemo va&#353;u narud&#382;bi nakon prijema uplate. Podatke o nalogu &#263;ete primati e-po&#353;tom kada va&#353;a porud&#382;bina bude potvr&#273;ena.');
  }
  define('MODULE_PAYMENT_MONEYORDER_STATUS_TITLE' , 'Omogu&#263;i modul za proveru/naru&#269;ivanje novca');
  define('MODULE_PAYMENT_MONEYORDER_STATUS_DESC' , '&#381;elite li da prihvatite uplate za &#269;ek/isplatu novca?');
  define('MODULE_PAYMENT_MONEYORDER_ALLOWED_TITLE' , 'Dozvoljene zone');
  define('MODULE_PAYMENT_MONEYORDER_ALLOWED_DESC' , 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');
  define('MODULE_PAYMENT_MONEYORDER_PAYTO_TITLE' , 'Dugovanja:');
  define('MODULE_PAYMENT_MONEYORDER_PAYTO_DESC' , 'Kome bi trebalo pla&#263;ati isplate?');
  define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_TITLE' , 'Redosled sortiranja prikaza.');
  define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_DESC' , 'Redosled sortiranja prikaza. Prvo prikazuje najni&#382;a.');
  define('MODULE_PAYMENT_MONEYORDER_ZONE_TITLE' , 'Zone pla&#263;anja');
  define('MODULE_PAYMENT_MONEYORDER_ZONE_DESC' , 'Ako je odabrana zona, omogu&#263;ite samo ovaj na&#269;in pla&#263;anja za tu zonu.');
  define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_TITLE' , 'Postavi status porud&#382;bine');
  define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_DESC' , 'Postavite status naloga koji su napravljeni sa ovim modulom za pla&#263;anje na ovu vrednost');
  define('MODULE_PAYMENT_MONEYORDER_SUCCESS_TITLE' , 'Prika&#382;i podatke iz banke');
  define('MODULE_PAYMENT_MONEYORDER_SUCCESS_DESC' , 'Prika&#382;i bankovne podatke o uspehu odjave?');
?>