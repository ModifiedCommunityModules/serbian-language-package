<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalpluslink.php 11030 2017-12-08 07:50:06Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_TITLE' => 'PayPal Plus Veza',
  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_DESCRIPTION' => 'PayPal kao vezu pla&#263;anja za kupca nakon &#353;to je nalog dovr&#353;en. Odlu&#269;ite se gde kupac prima zahtev za pla&#263;anje. <br/> PayPal plus-&#269;etiri najpopularnija na&#269;ina pla&#263;anja nema&#269;kih kupaca: PayPal, direktna dugovanja, kreditna kartica i faktura. <br/> Mo&#382;ete na&#263;i vi&#353;e informacija o PayPal plus <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/paypal-plus">ovde</a>.',
  'MODULE_PAYMENT_PAYPALPLUSLINK_ALLOWED_TITLE' => 'Dozvoljene zone',
  'MODULE_PAYMENT_PAYPALPLUSLINK_ALLOWED_DESC' => 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))',
  'MODULE_PAYMENT_PAYPALPLUSLINK_STATUS_TITLE' => 'Dozvoli PayPal Plus Link',
  'MODULE_PAYMENT_PAYPALPLUSLINK_STATUS_DESC' => '&#381;elite li prihvatiti PayPal plus vezu pla&#263;anje?',
  'MODULE_PAYMENT_PAYPALPLUSLINK_SORT_ORDER_TITLE' => 'Redosled sortiranja',
  'MODULE_PAYMENT_PAYPALPLUSLINK_SORT_ORDER_DESC' => 'Redosled sortiranja prikaza. Prvo &#263;e biti prikazano najni&#382;i broj',
  'MODULE_PAYMENT_PAYPALPLUSLINK_ZONE_TITLE' => 'Zone pla&#263;anja',
  'MODULE_PAYMENT_PAYPALPLUSLINK_ZONE_DESC' => 'Ako je zona izabrana, na&#269;in pla&#263;anja &#263;e va&#382;iti samo za ovu zonu.',
  'MODULE_PAYMENT_PAYPALPLUSLINK_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Kreiraj PayPal nalog sada.</strong></a>',

  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">PA&#381;NJA:</font></strong> Podesite PayPal konfiguraciju u okviru "Partnerski Moduli" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Konfiguracija"</strong></a>!',

  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_ERROR_HEADING' => 'Bele&#353;ka',
  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_ERROR_MESSAGE' => 'PayPal pla&#263;anje je otkazano',
  
  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_SUCCESS' => 'Platite sada sa PayPal. Kliknite na slede&#263;u vezu:<br/> %s',
  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_COMPLETED' => 'Hvala ti &#353;to si platio PayPal.',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>