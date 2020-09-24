<?php
$lang_array = array(
  'TEXT_PAYPAL_CONFIG_HEADING_TITLE' => 'PayPal konfiguracija',
  'TEXT_PAYPAL_CONFIG_SECRET_LIVE' => 'U&#382;ivo tajno:',
  'TEXT_PAYPAL_CONFIG_CLIENT_LIVE' => 'ID klijenta u&#382;ivo:',
  'TEXT_PAYPAL_CONFIG_CLIENT_LIVE_INFO' => 'Podaci aplikacije PayPal ili obnovi ih.',
  'TEXT_PAYPAL_CONFIG_SECRET_SANDBOX' => 'Tajna Sandbox:',
  'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX' => 'ID klijentovog Sandbox-a:',
  'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX_INFO' => 'Podaci aplikacije PayPal ili obnovi ih.',
  'TEXT_PAYPAL_APPINATOR_LIVE' => 'Zatra&#382;i podatke u&#382;ivo',
  'TEXT_PAYPAL_APPINATOR_SANDBOX' => 'Zatra&#382;i sandbox podatke',
  'TEXT_PAYPAL_CONFIG_MODE' => 'Mod:',
  'TEXT_PAYPAL_CONFIG_MODE_INFO' => '',
  'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX' => 'Prefiks za ID narud&#382;be:',
  'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX_INFO' => 'Arbitrarn niz slova (prefiks), koja se postavlja ispred svakog broja porud&#382;bine i koristi se za generisanje broja PayPal fakture. <br/> Ovo omogu&#263;ava vi&#353;e operacija &#269;uvanja sa samo jednim aplikacijom PayPal. Neusagla&#353;enost u vezi sa brojevima porud&#382;bina se izbegava. Svaka porud&#382;bina ima svoje brojeve faktura u okviru PayPal ra&#269;una.',
  'TEXT_PAYPAL_CONFIG_TRANSACTION' => 'Transakcije:',
  'TEXT_PAYPAL_CONFIG_TRANSACTION_INFO' => 'Izabrali vrstu transakcije.<br/><br/><b>Bele&#353;ka:</b> Sa PayPal plus i sa ratama za PayPal uvek se vr&#353;i prodaja.',
  'TEXT_PAYPAL_CONFIG_CAPTURE' => 'Hvataj ru&#269;no:',
  'TEXT_PAYPAL_CONFIG_CAPTURE_INFO' => 'Ru&#269;no hvatanje isplata u PayPal?<br/><br/><b>Bele&#353;ka:</b> Zato je neophodno da transakcija bude postavljena na ovla&#353;&#263;enje.',
  'TEXT_PAYPAL_CONFIG_CART' => 'Kolica:',
  'TEXT_PAYPAL_CONFIG_CART_INFO' => 'Prenesi detalje o korpi za PayPal?<br/><br/><b>Bele&#353;ke:</b> Ova postavka mo&#382;e izazvati probleme prilikom kori&#353;&#263;enja ot-modula pod  "moduli "->  "redosled po redu ", koji daje popust ili vi&#353;ak ( "popust [ot_discount]", "Kupon za popust [ot_coupon]", "Pokon vau&#269;eri [ot_gv]", "Na&#269;in pla&#263;anja sa popustom &amp; vi&#353;ak [ot_payment]", npr.).<br/>Preporu&#269;eno pode&#353;avanje: "ne"',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY' => 'Kreditni baner:',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY_INFO' => 'Prika&#382;i kreditni baner?<br/><br/><b>Bele&#353;ka:</b> Isplata PayPal je dostupna samo ako je va&#353; PayPal nalog odobren.',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR' => 'Boja banera:',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR_INFO' => 'Odaberi boju za reklamni natpis.',
  'TEXT_PAYPAL_CONFIG_STATE_SUCCESS' => 'Status uspeh:',
  'TEXT_PAYPAL_CONFIG_STATE_SUCCESS_INFO' => 'Status za uspe&#353;nu narud&#382;bu',
  'TEXT_PAYPAL_CONFIG_STATE_REJECTED' => 'Status odba&#269;en:',
  'TEXT_PAYPAL_CONFIG_STATE_REJECTED_INFO' => 'Status za odba&#269;enu narud&#382;bu',
  'TEXT_PAYPAL_CONFIG_STATE_PENDING' => 'Status neobra&#273;eno:',
  'TEXT_PAYPAL_CONFIG_STATE_PENDING_INFO' => 'Status nakon uspe&#353;nog poretka, to jo&#353; nije potvr&#273;eno od strane PayPal',
  'TEXT_PAYPAL_CONFIG_STATE_CAPTURED' => 'Status uhva&#263;en:',
  'TEXT_PAYPAL_CONFIG_STATE_CAPTURED_INFO' => 'Status za uhva&#263;enu porud&#382;binu',
  'TEXT_PAYPAL_CONFIG_STATE_REFUNDED' => 'Status ponovo finansiran:',
  'TEXT_PAYPAL_CONFIG_STATE_REFUNDED_INFO' => 'Status za refinansirane porud&#382;bine',
  'TEXT_PAYPAL_CONFIG_STATE_TEMP' => 'Status temp:',
  'TEXT_PAYPAL_CONFIG_STATE_TEMP_INFO' => 'Status za nepotvr&#273;ene porud&#382;bine',
  'TEXT_PAYPAL_CONFIG_LOG' => 'Zapisnik:',
  'TEXT_PAYPAL_CONFIG_LOG_INFO' => 'Da li &#263;e se zapisnik napisati?',
  'TEXT_PAYPAL_CONFIG_LOG_LEVEL' => 'Nivo zapisnika:',
  'TEXT_PAYPAL_CONFIG_LOG_LEVEL_INFO' => '<b>Bele&#353;ka:</b> U re&#382;imu "u&#382;ivo", ona se samo prijavljuje na nivo informacija.',
  'BUTTON_PAYPAL_STATUS_INSTALL' => 'Status naloga za instalaciju',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
// orders status
$PAYPAL_INST_ORDER_STATUS_TMP_NAME = 'PayPal otkazan';
$PAYPAL_INST_ORDER_STATUS_SUCCESS_NAME = 'PayPal uspe&#353;no';
$PAYPAL_INST_ORDER_STATUS_PENDING_NAME = 'PayPal &#269;ekanje';
$PAYPAL_INST_ORDER_STATUS_CAPTURED_NAME = 'PayPal uhva&#263;eno';
$PAYPAL_INST_ORDER_STATUS_REFUNDED_NAME = 'PayPal refundirano';
$PAYPAL_INST_ORDER_STATUS_REJECTED_NAME = 'PayPal odba&#269;eno';
$PAYPAL_INST_ORDER_STATUS_ACCEPTED_NAME = 'PayPal prihva&#263;eno';
?>