<?php
/* -----------------------------------------------------------------------------------------
   $Id$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

$klarna_code = 'KLARNA_DIRECTDEBIT';
include(DIR_FS_CATALOG.'lang/serbian/modules/payment/klarna.php');

$lang_array['MODULE_PAYMENT_'.$klarna_code.'_TEXT_TITLE'] = 'Klarna direktno zadu&zcaron;ivanje';
$lang_array['MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_MESSAGE'] = 'Otkazano je plac&#x301;anje direktnim zadu&zcaron;enjem.';

foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
