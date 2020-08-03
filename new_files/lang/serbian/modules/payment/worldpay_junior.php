<?php
/* -----------------------------------------------------------------------------------------
   $Id: worldpay_junior.php 4762 2013-05-10 16:12:34Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2008 osCommerce(worldpay_junior.php 1807 2008-01-13 ); www.oscommerce.com

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_DESCRIPTION', '<img src="images/icon_popup.gif" border="0">&nbsp;<a href="http://www.worldpay.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Posetite web stranicu WorldPay</a>');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_WARNING_DEMO_MODE', 'U pregledu: Transakcija izvedena u demo na&#269;inu.');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_SUCCESSFUL_TRANSACTION', 'Transakcija pla&#263;anja je uspešno izvršena!');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_UNSUCCESSFUL_TRANSACTION', 'Vaše pla&#263;anje je bilo neuspešno!');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_CONTINUE_BUTTON', 'Kliknite ovde da biste nastavili na %s');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_TITLE', 'WorldPay Junior');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_DESC', 'Worldpay moduo za pla&#263;anje');
  
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_STATUS_TITLE', 'Dozvoli WorldPay Moduo');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_STATUS_DESC', 'Da li želiš da prihvatiš WorldPay kao na&#269;in pla&#263;anja?');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ALLOWED_TITLE' , 'Dozvoljene zone');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ALLOWED_DESC' , 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_INSTALLATION_ID_TITLE', 'Worldpay ID instaliranje');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_INSTALLATION_ID_DESC', 'Vaš WorldPay ID za instaliranje');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_CALLBACK_PASSWORD_TITLE', 'Lozinka za odgovor na pla&#263;anje');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_CALLBACK_PASSWORD_DESC', 'Lozinka koja je poslata nazad u odgovoru povratnog poziva (navedeno u WorldPay polju sistem za upravljanje kupcima)');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_MD5_PASSWORD_TITLE', 'MD5 tajna za transakcije lozinke');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_MD5_PASSWORD_DESC', 'MD5 tajna lozinka za šifrovanje koja se koristi za proveru odziva na transakciju sa (navedeno u WorldPay polju sistem za upravljanje kupcima)');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TRANSACTION_METHOD_TITLE', 'Na&#269;in transakcije');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TRANSACTION_METHOD_DESC', 'Na&#269;in obrade koji &#263;e se koristiti za svaku transakciju');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TESTMODE_TITLE', 'Režim testiranja');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TESTMODE_DESC', 'Obrada transakcija u režimu testiranja?');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_SORT_ORDER_TITLE', 'Redosled sortiranja prikaza.');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_SORT_ORDER_DESC', 'Redosled sortiranja prikaza. Prvo prikazuje najniža.');

  //define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREAUTH_TITLE', 'Pre-Auth'); // Wird nicht benutzt
  //define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREAUTH_DESC', 'The mode you are working in (A = Pay Now, E = Pre Auth). Ignored if Use PreAuth is False.'); // Wird nicht benutzt

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ZONE_TITLE', 'Zone pla&#263;anja');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ZONE_DESC', 'Ako je zona izabrana, omogu&#263;ite samo ovaj na&#269;in pla&#263;anja za tu zonu.');
  
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREPARE_ORDER_STATUS_ID_TITLE', 'Postavi status pripreme porudžbine');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREPARE_ORDER_STATUS_ID_DESC', 'Postavite status pripremljenih porudžbina sa ovim modulom za pla&#263;anje na ovu vrednost');
  
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ORDER_STATUS_ID_TITLE', 'Postavi status porudžbine');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ORDER_STATUS_ID_DESC', 'Postavite status naloga koji su napravljeni sa ovim modulom za pla&#263;anje na ovu vrednost');
?>