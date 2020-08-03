<?php
/* -----------------------------------------------------------------------------------------
   $Id: invoice.php 1101 2005-07-24 14:51:13Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
   (c) 2003	 nextcommerce (invoice.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_INVOICE_TEXT_DESCRIPTION', 'Faktura');
define('MODULE_PAYMENT_INVOICE_TEXT_TITLE', 'Faktura');
define('MODULE_PAYMENT_INVOICE_TEXT_INFO','');
define('MODULE_PAYMENT_INVOICE_STATUS_TITLE' , 'Omogu&#263;ivanje modula za fakture');
define('MODULE_PAYMENT_INVOICE_STATUS_DESC' , '&#382;elite li da prihvatite fakture kao uplate?');
define('MODULE_PAYMENT_INVOICE_ORDER_STATUS_ID_TITLE' , 'Postavi status porud&#382;bine');
define('MODULE_PAYMENT_INVOICE_ORDER_STATUS_ID_DESC' , 'Postavite status naloga koji su napravljeni sa ovim modulom za pla&#263;anje na ovu vrednost.');
define('MODULE_PAYMENT_INVOICE_SORT_ORDER_TITLE' , 'Redosled sortiranja prikaza.');
define('MODULE_PAYMENT_INVOICE_SORT_ORDER_DESC' , 'Redosled sortiranja prikaza. Lowest is displayed first.');
define('MODULE_PAYMENT_INVOICE_ZONE_TITLE' , 'Zone pla&#263;anja');
define('MODULE_PAYMENT_INVOICE_ZONE_DESC' , 'Ako je zona izabrana, omogu&#263;ite samo ovaj na&#269;in pla&#263;anja za tu zonu.');
define('MODULE_PAYMENT_INVOICE_ALLOWED_TITLE' , 'Dozvoljene zone');
define('MODULE_PAYMENT_INVOICE_ALLOWED_DESC' , 'Unesite zone <b>zasebno</b> kojima bi trebalo dozvoliti kori&#353;&#263;enje ovog modula (npr. AT,DE (ostavi prazno ako &#382;elite da dozvolite sve zone))');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_TITLE' , 'Minimalne porud&#382;bine');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_DESC' , 'Minimalne porud&#382;bine za kupca da biste prikazali ovaj na&#269;in pla&#263;anja.');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_STATUS_ID_TITLE' , 'Status naloga za obra&#269;un');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_STATUS_ID_DESC' , 'Ovde izaberite status izlaznih porud&#382;bina, koje bi trebalo smatrati za broj koji je unet u "minimalna porud&#382;bina".');
define('MODULE_PAYMENT_INVOICE_MAX_AMOUNT_TITLE' , 'Maksimalni iznos');
define('MODULE_PAYMENT_INVOICE_MAX_AMOUNT_DESC' , 'Unesite maksimalni iznos za pla&#263;anje po fakturi.');
?>