<?php
/* -----------------------------------------------------------------------------------------
   $Id: sofort_payment.php 11651 2019-03-28 17:10:07Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
 	 based on:
	  (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
	  (c) 2002-2003 osCommerce - www.oscommerce.com
	  (c) 2001-2003 TheMedia, Dipl.-Ing Thomas Plänkers - http://www.themedia.at & http://www.oscommerce.at
	  (c) 2003 XT-Commerce - community made shopping http://www.xt-commerce.com
    (c) 2010 Payment Network AG - http://www.payment-network.com

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE', 'Internetski bankovni prenos.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION', 'Internetski bankovni prenos. je besplatan, T&Uuml;V na&#269;in pla&#263;anja pla&#263;anja od SOFORT GmbH.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO', 'You can pay with the T&Uuml;V certificirani sustav internetskog bankarstva. od SOFORT GmbH.');

// checkout
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE', '
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="bottom">
	      <a onclick="javascript:window.open(\'https://images.sofort.com/en/su/landing.php\',\'Customerinformationen\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
	    </td>
	  </tr>
	  <tr>
	    <td class="main">{{text}}</td>
	  </tr>
	</table>');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'Internetski bankovni prenos.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT', '
  <ul>
    <li>Jednostavno i sigurno.</li>
  </ul>');

// admin
defined('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE') OR define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE', 'Aktiviraj online transfer u banci.');
defined('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC') OR define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC', 'Aktivira/deaktiviraj online transfer.');
define('MODULE_PAYMENT_'.$sofort_code.'_ALLOWED_TITLE', 'Dozvoljene zone');
define('MODULE_PAYMENT_'.$sofort_code.'_ALLOWED_DESC', 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_ORDER_TITLE', 'Privremenu porud&#382;binu');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_ORDER_DESC', '&#381;elite li da kreirate privremenu porud&#382;binu?');
define('MODULE_PAYMENT_'.$sofort_code.'_LOGGING_TITLE', 'Vo&#273;enje evidencije o aktiviranju');
define('MODULE_PAYMENT_'.$sofort_code.'_LOGGING_DESC', 'Aktivira/deaktivira evidentiranje <br/> Logfiles se &#269;uvaju u /log');
define('MODULE_PAYMENT_'.$sofort_code.'_KEY_TITLE', 'Klju&#269; za konfiguraciju');
define('MODULE_PAYMENT_'.$sofort_code.'_KEY_DESC', 'Klju&#269; za konfiguraciju mo&#382;e se prona&#263;i u onlajn prenosu.');
define('MODULE_PAYMENT_'.$sofort_code.'_SORT_ORDER_TITLE', 'Redosled prikaza');
define('MODULE_PAYMENT_'.$sofort_code.'_SORT_ORDER_DESC', 'Redosled prikazivanja. Prvi je prikazan najmanji broj');
define('MODULE_PAYMENT_'.$sofort_code.'_ZONE_TITLE', 'Zone pla&#263;anja');
define('MODULE_PAYMENT_'.$sofort_code.'_ZONE_DESC', 'Ako je izabrana zona, na&#269;in pla&#263;anja va&#382;i samo za tu zonu.');
define('MODULE_PAYMENT_'.$sofort_code.'_CURRENCY_TITLE', 'Valuta transakcije');
define('MODULE_PAYMENT_'.$sofort_code.'_CURRENCY_DESC', 'Prijem u evro Bank transfer. Postavku');
define('MODULE_PAYMENT_'.$sofort_code.'_ORDER_STATUS_ID_TITLE', 'Potvr&#273;ena porud&#382;bina');
define('MODULE_PAYMENT_'.$sofort_code.'_ORDER_STATUS_ID_DESC', 'Status naloga nakon prijema porud&#382;bine, poslat je unapred tokom uspe&#353;ne potvrde o pla&#263;anju');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_STATUS_ID_TITLE', 'Status privremene porud&#382;bine');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_STATUS_ID_DESC', 'Nalog za jo&#353; uvek dovr&#353;ene transakcije');
define('MODULE_PAYMENT_'.$sofort_code.'_UNC_STATUS_ID_TITLE', 'Da biste proverili status porud&#382;bine');
define('MODULE_PAYMENT_'.$sofort_code.'_UNC_STATUS_ID_DESC', 'Status naloga je primljen u neta&#269;noj potvrdi uplate nakon prijema porud&#382;bine');
define('MODULE_PAYMENT_'.$sofort_code.'_REC_STATUS_ID_TITLE', 'Status naloga nakon pla&#263;anja');
define('MODULE_PAYMENT_'.$sofort_code.'_REC_STATUS_ID_DESC', 'Status naloga nakon &#353;to se novac kreditira na va&#353; ra&#269;un.');
define('MODULE_PAYMENT_'.$sofort_code.'_REF_STATUS_ID_TITLE', 'Status naloga nakon povra&#263;aja sredstava');
define('MODULE_PAYMENT_'.$sofort_code.'_REF_STATUS_ID_DESC', 'Status naloga nakon &#353;to je do&#353;lo do povra&#263;aja sredstava.');
define('MODULE_PAYMENT_'.$sofort_code.'_LOSS_STATUS_ID_TITLE', 'Status naloga ako nije stigao novac');
define('MODULE_PAYMENT_'.$sofort_code.'_LOSS_STATUS_ID_DESC', 'Status naloga ako se na nalog ne kreditira novac.');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_1_TITLE', 'Red za kori&#353;&#263;enje 1');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_1_DESC', 'Ako se ne kreira privremena porud&#382;bina, broj porud&#382;bine nije dostupan. Stoga bi trebalo da bude stavljen na -TRANSACTION-');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_2_TITLE', 'Red za kori&#353;&#263;enje 2');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_2_DESC', 'U upotrebi (najvi&#353;e 27 znakova) treba zameniti slede&#263;im &#269;uvarima mesta:<br /> {{order_id}}<br />{{order_date}}<br />{{customer_id}}<br />{{customer_name}}<br />{{customer_company}}<br />{{customer_email}}');
define('MODULE_PAYMENT_'.$sofort_code.'_IMAGE_TITLE', 'Grafski/tekst za pla&#263;anje');
define('MODULE_PAYMENT_'.$sofort_code.'_IMAGE_DESC', 'Grafic/tekst o uplati isplate');
define('MODULE_PAYMENT_'.$sofort_code.'_KS_STATUS_TITLE', 'Aktivirana za&#353;tita klijenata');
define('MODULE_PAYMENT_'.$sofort_code.'_KS_STATUS_DESC', 'Aktiviraj za&#353;titu klijenta za prenos u banci online.');
define('MODULE_PAYMENT_'.$sofort_code.'_USER_ID_TITLE', 'Broj kupca');
define('MODULE_PAYMENT_'.$sofort_code.'_USER_ID_DESC', 'Broj kupca na mre&#382;i transfer.');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_ID_TITLE', 'Broj projekta');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_ID_DESC', 'Broj odgovornog projekta u neposrednom navigaciji kori&#353;&#263;enje online banke transfer. za uplatu pripada');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_PASS_TITLE', 'Lozinka projekta');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_PASS_DESC', 'Prona&#273;i ovo u okviru postavke na Internet Bank transfer.');
define('MODULE_PAYMENT_'.$sofort_code.'_NOTIFY_PASS_TITLE', 'Lozinka za obave&#353;tenja');
define('MODULE_PAYMENT_'.$sofort_code.'_NOTIFY_PASS_DESC', 'Prona&#273;i ovo u okviru postavke na Internet Bank transfer.');
define('MODULE_PAYMENT_'.$sofort_code.'_HASH_ALGORITHM_TITLE', 'Hash-Algorithmus:');
define('MODULE_PAYMENT_'.$sofort_code.'_HASH_ALGORITHM_DESC', 'Prona&#273;i ovo u okviru postavke na Internet Bank transfer.');
define('MODULE_PAYMENT_'.$sofort_code.'_DESCRIPTION_INSTALL', '<br/><br/>&#382;elite li da instalirate odgovaraju&#263;i status porud&#382;bine?<br/>Trenutno pode&#353;ene statuse zamenjuju se.');

// status
defined('TEXT_NO_STATUSUPDATE') OR define('TEXT_NO_STATUSUPDATE', 'bez a&#382;uriranja statusa');

// error
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_ERROR_HEADING', 'Tokom procesa prijavljena je slede&#263;a gre&#353;ka:');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_ERROR_MESSAGE', 'Nije mogu&#263;e pla&#263;anje na &#382;alost ili ju je korisnik otkazao. Izaberite drugi na&#269;in pla&#263;anja.');

// callback
defined('TEXT_SOFORT_NOT_CREDITED_YET') OR define('TEXT_SOFORT_NOT_CREDITED_YET', 'Uspje&#353;no zavr&#353;eni transfer online Bank.');
defined('TEXT_SOFORT_NOT_CREDITED') OR define('TEXT_SOFORT_NOT_CREDITED', 'Nije primljen novac na nalog');
defined('TEXT_SOFORT_LOSS') OR define('TEXT_SOFORT_LOSS', 'Verifikuj porud&#382;binu');
defined('TEXT_SOFORT_RECEIVED') OR define('TEXT_SOFORT_RECEIVED', 'Primljeno novca na ra&#269;un');
defined('TEXT_SOFORT_CREDITED') OR define('TEXT_SOFORT_CREDITED', TEXT_SOFORT_RECEIVED);
defined('TEXT_SOFORT_REFUNDED') OR define('TEXT_SOFORT_REFUNDED', 'Novac je refinansirana u potpunosti');
defined('TEXT_SOFORT_CANCELED') OR define('TEXT_SOFORT_CANCELED', 'Online bankovni transfer otkazana');
defined('TEXT_SOFORT_WAIT_FOR_MONEY') OR define('TEXT_SOFORT_WAIT_FOR_MONEY', '&#268;ekanje na naplatu');
defined('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED') OR define('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED', 'Online bakovni transfer. Vremensko ograni&#269;enje');
defined('TEXT_SOFORT_REJECTED') OR define('TEXT_SOFORT_REJECTED', 'Online bakovni transfer. odbijeno');
defined('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED') OR define('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED', TEXT_SOFORT_NOT_CREDITED_YET);

define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_TRANSACTION', "Gre&#353;ka tokom HTTP obave&#353;tenja\nProverite transakciju i obave&#353;tenja\Transakcija-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_PAYMENT', "Novac jo&#353; nije primljen\Transakcija-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_UNEXPECTED_STATUS', "Gre&#353;ka (SU204): Neo&#269;ekivan status\Transakcija-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_SUCCESS_TRANSACTION', "Pla&#263;anje uspe&#353;no\Transakcija-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_SUCCESS_PAYMENT', "Novac primljen\Transakcija-ID: %s");

// order status
$SOFORT_INST_ORDER_STATUS_TMP_NAME = 'Priv';
$SOFORT_INST_ORDER_STATUS_UNC_NAME = '&#268;ekanje';
$SOFORT_INST_ORDER_STATUS_LOSS_NAME = '&#268;ekanje';
$SOFORT_INST_ORDER_STATUS_REC_NAME = 'Primljena uplata';
$SOFORT_INST_ORDER_STATUS_REF_NAME = 'Refundirano';
$SOFORT_INST_ORDER_STATUS_ORDER_NAME = 'Pla&#263;anje';
?>