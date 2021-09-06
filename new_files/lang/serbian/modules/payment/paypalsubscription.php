<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypallink.php 12400 2019-11-08 13:28:49Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_TITLE' => 'Pretplata na PayPal',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_DESCRIPTION' => 'PayPal kao veza za plac&#x301;anje koja je kupcu dostupna tek nakon &scaron;to je narud&zcaron;ba poslata. Odlu&ccaron;ite sami gde c&#x301;e kupac primiti zahtev za plac&#x301;anje.',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ALLOWED_TITLE' => 'Dozvoljene zone',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ALLOWED_DESC' => '<b>Pojedina&ccaron;no</b> unesite zone koje bi trebalo da budu dozvoljene za ovaj modul. (npr. AT, DE (ako je prazno, sve zone su dozvoljene))',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_STATUS_TITLE' => 'Aktivirajte PayPal pretplatu',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_STATUS_DESC' => 'Da li &zcaron;elite da prihvatite plac&#x301;anja putem PayPal pretplate?',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_SORT_ORDER_TITLE' => 'Redosled prikaza',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_SORT_ORDER_DESC' => 'Redosled prikazivanja. Najpre se prikazuje najmanja cifra',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ZONE_TITLE' => 'Zona plac&#x301;anja',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ZONE_DESC' => 'Ako je izabrana zona, na&ccaron;in plac&#x301;anja va&zcaron;i samo za tu zonu.',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Ovde otvorite PayPal nalog.</strong></a>',

  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">PA&Zcaron;NJA:</font></strong> Unesite pode&scaron;avanja pod „Partnerski modul“ -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal konfiguracija"</strong></a>',

  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ERROR_HEADING' => 'Hinweis',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ERROR_MESSAGE' => 'PayPal Zahlung wurde abgebrochen',  
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>