<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypallink.php 11030 2017-12-08 07:50:06Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALLINK_TEXT_TITLE' => 'PayPal Link',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_DESCRIPTION' => 'PayPal kao vezu pla&#263;anja za kupca nakon &#353;to je nalog dovr&#353;en. Odlu&#269;ite se gde kupac prima zahtev za isplatu.',
  'MODULE_PAYMENT_PAYPALLINK_ALLOWED_TITLE' => 'Dozvoljene zone',
  'MODULE_PAYMENT_PAYPALLINK_ALLOWED_DESC' => 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))',
  'MODULE_PAYMENT_PAYPALLINK_STATUS_TITLE' => 'Dozvolite PayPal Link',
  'MODULE_PAYMENT_PAYPALLINK_STATUS_DESC' => '&#381;elite li prihvatiti PayPal vezu?',
  'MODULE_PAYMENT_PAYPALLINK_SORT_ORDER_TITLE' => 'Redosled sortiranja',
  'MODULE_PAYMENT_PAYPALLINK_SORT_ORDER_DESC' => 'Redosled sortiranja prikaza. Prvo &#263;e biti prikazano najni&#382;i broj',
  'MODULE_PAYMENT_PAYPALLINK_ZONE_TITLE' => 'Zone pla&#263;anja',
  'MODULE_PAYMENT_PAYPALLINK_ZONE_DESC' => 'Ako je odabrana zona, na&#269;in pla&#263;anja bit &#263;e va&#382;e&#263;i samo za ovu zonu.',
  'MODULE_PAYMENT_PAYPALLINK_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Kreiraj PayPal nalog sada.</strong></a>',

  'MODULE_PAYMENT_PAYPALLINK_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">PA&#381;NJA:</font></strong> Podesite PayPal konfiguraciju u okviru "Partnerski Moduli" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Konfiguracija"</strong></a>!',

  'MODULE_PAYMENT_PAYPALLINK_TEXT_ERROR_HEADING' => 'Bele&#353;ka',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_ERROR_MESSAGE' => 'PayPal pla&#263;anje je otkazano',
  
  'MODULE_PAYMENT_PAYPALLINK_TEXT_SUCCESS' => 'Platite sada sa PayPal. Kliknite na slede&#263;u vezu:<br/> %s',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_COMPLETED' => 'Hvala ti &#353;to si platio sa PayPal.',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>