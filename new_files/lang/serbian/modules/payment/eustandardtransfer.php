<?php
/* -----------------------------------------------------------------------------------------
   $Id: eustandardtransfer.php 11934 2019-07-20 07:36:03Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ptebanktransfer.php,v 1.4.1 2003/09/25 19:57:14); www.oscommerce.com
   (c) 2003 xtCommerce www.xt-commerce.com

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_TITLE', 'EU-standardni bankovni transfer');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_DESCRIPTION', 
          '<br />Najjeftiniji i najjednostavniji na&#269;in pla&#263;anja unutar EU je transfer u EU – standardni bankovni prenos pomo&#263;u IBAN i BIC.' .
          '<br />Koristite slede&#263;e detalje da biste preneli ukupnu vrednost porud&#382;bine:<br />' .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM') ? '<br />Ime banke: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH')  ? '<br />Korisnik: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM')  ? '<br />&#353;ifra banke: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM')  ? '<br />Br. naloga.: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN') ? '<br />IBAN: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC') ? '<br />BIC/SWIFT: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC : '') .
          '<br />Namena pla&#263;anja: %s'.
          '<br /><br />Va&#353;a porud&#382;bina ne&#263;e biti isporu&#269;ena dok ne dobijemo uplatu u okviru navedenog naloga.<br />');

  if (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS') && MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS == 'True') {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Prenesite sve fakture na na&#353; ra&#269;un u banci. Primi&#263;ete podatke o ra&#269;unu u poslednjem koraku odjave.');
  } else {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Prenesite sve fakture na na&#353; ra&#269;un u banci. Podatke o nalogu &#263;ete primati e-po&#353;tom kada va&#353;a porud&#382;bina bude potvr&#273;ena.');
  }
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_TITLE', 'Dozvoljavanje pla&#263;anja u banci');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_DESC', '&#382;elite li da prihvatite uplate u banci za prenos?');
  
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_TITLE', 'Korisnik');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_DESC', 'Nalog korisnika.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_TITLE', 'Ime banke');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_DESC', 'Va&#353;e puno ime banke');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_TITLE', '&#352;ifra banke');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_DESC', '&#352;ifra banke na va&#353;em ra&#269;unu.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_TITLE', 'Br. ra&#269;una u banci');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_DESC', 'Broj va&#353;eg ra&#269;una.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_TITLE', 'Ra&#269;un u banci IBAN');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_DESC', 'ID me&#273;unarodnog ra&#269;una.<br />(Pitajte banku ako to ne znate)');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_TITLE', 'Bank Bic');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_DESC', 'International Bank ID.<br />(Pitajte banku ako to ne znate)');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_TITLE', 'Redosled sortiranja modula za prikazy');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_DESC', 'Redosled sortiranja prikaza. Prvo prikazuje najni&#382;a.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_TITLE', 'Dozvoljene zone');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_DESC', 'Unesite zone <b>zasebno</b> kojima bi trebalo dozvoliti kori&#353;&#263;enje ovog modula (npr. AT,DE (ostavi prazno ako &#382;elite da dozvolite sve zone))');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_TITLE', 'Zone pla&#263;anja');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_DESC', 'Status naloga izvr&#353;enih ovim modulom za pla&#263;anje postavite na ovu vrednost.');
  
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_TITLE', 'Postavi status porud&#382;bine');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_DESC', 'Postavite status naloga koji su napravljeni sa ovim modulom za pla&#263;anje na ovu vrednost.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_TITLE', 'Prika&#382;i podatke iz banke');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_DESC', 'Prika&#382;i bankovne podatke o uspehu odjave?');
?>