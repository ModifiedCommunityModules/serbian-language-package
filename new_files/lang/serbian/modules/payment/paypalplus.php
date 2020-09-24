<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalplus.php 11170 2018-05-30 14:28:24Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_TITLE' => 'PayPal Plus',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ADMIN_TITLE' => 'PayPal Plus sa PayPal Express',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_INFO' => 'Izaberite jedan od na&#269;ina pla&#263;anja koji su navedeni ovde tako &#353;to &#263;ete kliknuti na.',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_DESCRIPTION' => 'PayPal Plus - &#269;etiri najpopularnija na&#269;ina pla&#263;anja nema&#269;kih kupaca: PayPal, direct debit, kreditna kartica i faktura.<br/>Mo&#382;ete prona&#263;i vi&#353;e informacija o PayPal Plus <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/paypal-plus">ovde</a>.',
  'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_TITLE' => 'Dozvoljene zone',
  'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_DESC' => 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))',
  'MODULE_PAYMENT_PAYPALPLUS_STATUS_TITLE' => 'Dozvoli PayPal Plus',
  'MODULE_PAYMENT_PAYPALPLUS_STATUS_DESC' => '&#382;elite li da prihvatite PayPal, kreditno zadu&#382;enje, direktno pla&#263;anje po pla&#263;anju u fakturi?',
  'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_TITLE' => 'Redosled sortiranja',
  'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_DESC' => 'Redosled sortiranja prikaza. Prvo &#263;e biti prikazano najni&#382;i broj',
  'MODULE_PAYMENT_PAYPALPLUS_ZONE_TITLE' => 'Zona pla&#263;anja',
  'MODULE_PAYMENT_PAYPALPLUS_ZONE_DESC' => 'Ako je odabrana zona, na&#269;in pla&#263;anja bit &#263;e va&#382;e&#263;i samo za ovu zonu.',
  'MODULE_PAYMENT_PAYPALPLUS_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Napravi PayPal nalog sad.</strong></a>',

  'MODULE_PAYMENT_PAYPALPLUS_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">PA&#381;NJA:</font></strong> Podesite PayPal konfiguraciju u okviru "Partnerski Moduli" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Konfiguracija"</strong></a>!',

  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_HEADING' => 'Bele&#353;ka',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_MESSAGE' => 'PayPal pla&#263;anje je otkazano',

  'MODULE_PAYMENT_PAYPALPLUS_INVOICE' => 'Pla&#263;ajte po fakturi',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>