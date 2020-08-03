<?php
/* -----------------------------------------------------------------------------------------
   $Id: sofort_ideal.php 11380 2018-07-30 14:21:06Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

$sofort_code = 'SOFORT_IDEAL';

define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE', 'iDEAL');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION', '<b>iDEAL</b><br />Kada kupac izabere ovaj na&#269;in pla&#263;anja i njegovu banku, on &#263;e mu proslediti SOFORT GmbH na klupi. Tro&#353;i svoju uplatu i vratio se u sistem pogona. Nakon uspe&#353;nog potvrde o uplati, odvija se kroz SOFORT GmbH povratni poziv za sistem prodavnica umesto toga menja status pla&#263;anja naloga u skladu sa promjenama.<br/> SOFORT GmbH');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO', 'iDEAL.nl - pla&#263;anje na mre&#382;i za e-trgovinu u Holandiji. Za naplatu po idealu potreban vam je nalog sa jednom od navedenih banaka. Oni &#263;e prebaciti transfer direktno u va&#353;u banku. Usluge/roba se isporu&#269;uju ili isporu&#269;uju kada odmah budu dostupne!');

// checkout
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE', '
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="bottom">
	      <a onclick="javascript:window.open(\'http://www.ideal.nl\',\'Information\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
	    </td>
	  </tr>
	  <tr>
	    <td class="main">{{text}}</td>
	  </tr>
	</table>');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'iDeal');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT', '
  <ul>
    <li>Online pla&#263;anje za e-trgovinu u Holandiji</li>
    <li>Za naplatu po iDEAL-u potreban vam je nalog sa jednom od banaka koje su navedene</li>
    <li>Oni &#263;e prebaciti transfer direktno u va&#353;u banku</li>
    <li>Usluge/roba se isporu&#269;uju ili isporu&#269;uju kada odmah budu dostupne</li>
  </ul>');

define('MODULE_PAYMENT_'.$sofort_code.'_SELECTBOX', 'Odaberite svoju banku');

// admin
define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE', 'Aktiviraj iDeal Modul');
define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC', 'Aktiviraj/deaktiviraj iDeal');

include(DIR_FS_CATALOG.'lang/english/modules/payment/sofort_payment.php');

?>