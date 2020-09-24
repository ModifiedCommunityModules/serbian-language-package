<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalcart.php 11030 2017-12-08 07:50:06Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALCART_TEXT_TITLE' => 'PayPal Express',
  'MODULE_PAYMENT_PAYPALCART_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALCART_TEXT_DESCRIPTION' => 'PayPal Express poru&#269;ivanje-PayPal dugme u korpi za kupovinu i na stranici &#269;lanka za maksimalnu konverziju. <br/> Vi&#353;e informacija o PayPal Express pre&#269;ici mo&#382;ete na&#263;i <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/express-checkout">ovde</a>.',
  'MODULE_PAYMENT_PAYPALCART_ALLOWED_TITLE' => 'Dozvoljene zone',
  'MODULE_PAYMENT_PAYPALCART_ALLOWED_DESC' => 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))',
  'MODULE_PAYMENT_PAYPALCART_STATUS_TITLE' => 'Omogu&#263;i PayPal Express',
  'MODULE_PAYMENT_PAYPALCART_STATUS_DESC' => 'Da li &#382;eli&#353; da prihvati&#353; isplate PayPal Express?',
  'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_TITLE' => 'Redosled sortiranja',
  'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_DESC' => 'Redosled sortiranja prikaza. Prvo &#263;e biti prikazano najni&#382;i broj',
  'MODULE_PAYMENT_PAYPALCART_ZONE_TITLE' => 'Zone pla&#263;anja',
  'MODULE_PAYMENT_PAYPALCART_ZONE_DESC' => 'Ako je odabrana zona, na&#269;in pla&#263;anja bit &#263;e va&#382;e&#263;i samo za ovu zonu.',
  'MODULE_PAYMENT_PAYPALCART_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Kreiraj PayPal nalog sada.</strong></a>',

  'MODULE_PAYMENT_PAYPALCART_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">PA&#381;NJA:</font></strong> Podesite PayPal konfiguraciju u okviru "Partnerski Moduli" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Konfiguracija"</strong></a>!',

  'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_HEADING' => 'Bele&#353;ka',
  'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_MESSAGE' => 'PayPal pla&#263;anje je otkazano',

  'TEXT_PAYPAL_CART_ACCOUNT_CREATED' => 'Kreirali smo nalog kupca sa va&#353;om PayPal adresom e-po&#353;te. Mo&#382;ete kasnije zatra&#382;iti lozinku za novi nalog kupca koriste&#263;i funkciju "zaboravljena lozinka".',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>