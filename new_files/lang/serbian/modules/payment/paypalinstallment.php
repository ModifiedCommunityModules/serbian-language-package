<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalinstallment.php 11168 2018-05-30 13:54:19Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_TITLE' => 'Ratenzahlung bazirano na PayPal',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_DESCRIPTION' => 'Instaliranje na bazi PayPal<br/>Mo&#382;ete na&#269;i jos informacija o instalaciji na bazi PazPal-a <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/installments">ovde</a>.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ALLOWED_TITLE' => 'Dozvoljene zone',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ALLOWED_DESC' => 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_STATUS_TITLE' => 'Omogu&#263;i Ratenzahlung na bazi PayPal',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_STATUS_DESC' => 'Da li &#382;elite da omogu&#263;ite Ratenzahlung na bazi PayPal pla&#263;anja?',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_SORT_ORDER_TITLE' => 'Redosled sortiranja',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_SORT_ORDER_DESC' => 'Redosled sortiranja prikaza. Prvo &#263;e biti prikazano najni&#382;i broj',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ZONE_TITLE' => 'Zone pla&#263;anja',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ZONE_DESC' => 'Ako je odabrana zona, na&#269;in pla&#263;anja bit &#263;e va&#382;e&#263;i samo za ovu zonu.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Kreiraj PayPal nalog sada.</strong></a>',

  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">PA&#381;NJA:</font></strong> Podesite PayPal konfiguraciju u okviru "Partnerski Moduli" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Konfiguracija"</strong></a>!',

  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_HEADING' => 'Bele&#353;ka',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_MESSAGE' => 'PayPal pla&#263;anje je otkazano',

  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_CHECKBOX' => 'Prihvatam da &#263;e moji podaci biti deljeni sa PayPal-om.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_CHECKBOX' => 'Prihvatite da &#263;e va&#353;i podaci biti deljeni sa PayPal-om.',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>