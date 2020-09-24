<?php
/* -----------------------------------------------------------------------------------------
   $Id: easycredit.php 11083 2018-03-13 09:54:38Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_EASYCREDIT_TEXT_TITLE' => 'ratenkauf od easyCredit',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_INFO' => '',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_DESCRIPTION' => '',
  'MODULE_PAYMENT_EASYCREDIT_ALLOWED_TITLE' => 'Dozvoljene zone',
  'MODULE_PAYMENT_EASYCREDIT_ALLOWED_DESC' => 'Unesite zone <b>zasebno</b> kojima bi trebalo dozvoliti kori&#353;&#263;enje ovog modula (npr. AT,DE (ostavi prazno ako &#382;elite da dozvolite sve zone))',
  'MODULE_PAYMENT_EASYCREDIT_STATUS_TITLE' => 'Aktiviranje modula',
  'MODULE_PAYMENT_EASYCREDIT_STATUS_DESC' => '&#382;elite li da prihvatite isplate ratenkauf od easyCredit akzeptieren?',
  'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_TITLE' => 'Sekvenca prikaza',
  'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_DESC' => 'Redosled prikaza. Prva je prikazana najmanja cifra.',
  'MODULE_PAYMENT_EASYCREDIT_ZONE_TITLE' => 'Zone pla&#263;anja',
  'MODULE_PAYMENT_EASYCREDIT_ZONE_DESC' => 'Ako je odabrana zona, na&#269;in pla&#263;anja vredi samo za ovu zonu.',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_TITLE' => 'Status privremene porud&#382;bine',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_DESC' => 'Ozna&#269;avanje statusa porud&#382;bine za nepotvr&#273;ene porud&#382;bine.',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_TITLE' => 'Uspe&#353;an status porud&#382;bine',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_DESC' => 'Ozna&#269;avanje statusa porud&#382;bine za uspe&#353;ne porud&#382;bine.',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_TITLE' => 'ID internet prodavnice ',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_DESC' => 'Prona&#263;i&#263;ete svoj ID internet prodavnice u easyCredit interfejsa kupca u pod-predmetnom administracijskom delu prodavnice.',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_TITLE' => 'API-lozinka',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_DESC' => 'Promenite sami lozinku internet prodavnice u easyCredit interfejsa kupca u pod-predmetnom administracijskom delu prodavnice.',
  'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_TITLE' => 'Log level',
  'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_DESC' => 'Navedite nivo evidencije. Podrazumevana vrednost:  "Gre&#353;ka "',

  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_HEADING' => 'Bele&#353;ka',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_MESSAGE' => 'Isplata je otkazana',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_CHECKBOX' => 'Prihvatite sve neophodne sporazume za iznajmljivanje kupovine od strane easzCredit',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_LEGAL' => 'Unapred ugovorne informacije o rate za kupovinu mo&#382;ete na&#263;i ovde',

  'TEXT_EASYCREDIT_TBAID' => 'Identifikacija aktivnosti',
  'TEXT_EASYCREDIT_RATING_PLAN' => 'Finansiranje od %s u %s instalacija sa ratenkauf by easyCredit',
  'TEXT_EASYCREDIT_RATING_PLAN_SHORT' => 'Finansiranje od %s mese&#269;no',
  'TEXT_EASYCREDIT_RATING_PLAN_CALC' => 'vi&#353;e informacija o nastavku kupovine',
  'TEXT_EASYCREDIT_LEGAL' => 'Primer predstavnika u skladu sa &sect; 6a PAngV',
  'TEXT_EASYCREDIT_NOMINAL_RATE' => 'Stopa dugovanja p.a. fiksna za ceo pojam',
  'TEXT_EASYCREDIT_EFFECTIVE_RATE' => 'godi&#353;nja procentualna stopa',
  'TEXT_EASYCREDIT_TOTAL_COST' => 'Ukupan iznos',
  'TEXT_EASYCREDIT_TOTAL_NETTO' => 'Neto iznos kredita',
  'TEXT_EASYCREDIT_TOTAL_INTEREST' => 'Iznos kamata',
  'TEXT_EASYCREDIT_MONTHLY_PAYMENT' => 'mese&#269;ne rate u iznosu od',
  'TEXT_EASYCREDIT_LAST_PAYMENT' => 'Zavr&#353;na rata',  
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>