<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalclassic.php 11170 2018-05-30 14:28:24Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_TITLE' => 'PayPal',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ADMIN_TITLE' => 'PayPal sa PayPal Express',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_DESCRIPTION' => 'Nakon &#353;to "potvrdite" va&#353; &#263;e biti rutet za PayPal da biste platili narud&#382;binu. <br/> ponovo u prodavnici dobi&#263;ete svoju porud&#382;binu-po&#353;tu. <br/> PayPal je bezbedniji na&#269;in za pla&#263;anje na mre&#382;i. Va&#353;e detalje dr&#382;imo na sigurnom od drugih i mo&#382;emo vam pomo&#263;i da vratite novac ako ne&#353;to ikada krene naopako.',
  'MODULE_PAYMENT_PAYPALCLASSIC_ALLOWED_TITLE' => 'Dozvoljene zone',
  'MODULE_PAYMENT_PAYPALCLASSIC_ALLOWED_DESC' => 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))',
  'MODULE_PAYMENT_PAYPALCLASSIC_STATUS_TITLE' => 'Dozvoli PayPal',
  'MODULE_PAYMENT_PAYPALCLASSIC_STATUS_DESC' => '&#382;elite li prihvatiti isplatu isplata?',
  'MODULE_PAYMENT_PAYPALCLASSIC_SORT_ORDER_TITLE' => 'Redosled sortiranja',
  'MODULE_PAYMENT_PAYPALCLASSIC_SORT_ORDER_DESC' => 'Redosled sortiranja prikaza. Prvo &#263;e biti prikazano najni&#382;i broj',
  'MODULE_PAYMENT_PAYPALCLASSIC_ZONE_TITLE' => 'Zone pla&#263;anja',
  'MODULE_PAYMENT_PAYPALCLASSIC_ZONE_DESC' => 'Ako je odabrana zona, na&#269;in pla&#263;anja bit &#263;e va&#382;e&#263;i samo za ovu zonu.',
  'MODULE_PAYMENT_PAYPALCLASSIC_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Kreiraj PayPal nalog sada.</strong></a>',

  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">PA&#381;NJA:</font></strong> Podesite PayPal konfiguraciju u okviru "Partnerski Moduli" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Konfiguracija"</strong></a>!',

  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ERROR_HEADING' => 'Bele&#353;ka',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ERROR_MESSAGE' => 'PayPal pla&#263;anje je otkazano',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>