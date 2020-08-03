<?php
$lang_array = array(
  'TEXT_PAYPAL_ORDERS_HEADING' => 'Detalji PayPal-a',
  'TEXT_PAYPAL_NO_INFORMATION' => 'nisu dostupni detalji pla&#263;anja',
  // transaction
  'TEXT_PAYPAL_TRANSACTION' => 'Detalji pla&#263;anja',
  'TEXT_PAYPAL_TRANSACTION_ACCOUNT_OWNER' => 'Vlasnik ra&#269;una:',
  'TEXT_PAYPAL_TRANSACTION_ADDRESS' => 'Adresa za dostavu:',
  'TEXT_PAYPAL_TRANSACTION_METHOD' => 'Pla&#263;anje:',
  'TEXT_PAYPAL_TRANSACTION_EMAIL' => 'E-mail adresa:',
  'TEXT_PAYPAL_TRANSACTION_ACCOUNT_STATE' => 'Status ra&#269;una:',
  'TEXT_PAYPAL_TRANSACTION_INTENT' => 'Namera:',
  'TEXT_PAYPAL_TRANSACTION_STATE' => 'Status:',
  // transactions
  'TEXT_PAYPAL_TRANSACTIONS_STATUS' => 'Transakcije',
  'TEXT_PAYPAL_TRANSACTIONS_PAYMENT' => 'Pla&#263;anje:',
  'TEXT_PAYPAL_TRANSACTIONS_REASON' => 'Razlog:',
  'TEXT_PAYPAL_TRANSACTIONS_STATE' => 'Status:',
  'TEXT_PAYPAL_TRANSACTIONS_TOTAL' => 'Iznos:',
  'TEXT_PAYPAL_TRANSACTIONS_VALID' => 'va&#382;i za:',
  'TEXT_PAYPAL_TRANSACTIONS_ID' => 'ID:',
  // instruction
  'TEXT_PAYPAL_INSTRUCTIONS' => 'Nov&#269;ani nalog',
  'TEXT_PAYPAL_INSTRUCTIONS_CHECKOUT' => 'Prenesite iznos od %s najmanje na %s na slede&#263;i ra&#269;un:',
  'TEXT_PAYPAL_INSTRUCTIONS_CHECKOUT_SHORT' => 'Prenesite iznos od %s na slede&#263;i ra&#269;un:',
  'TEXT_PAYPAL_INSTRUCTIONS_AMOUNT' => 'Iznos:',
  'TEXT_PAYPAL_INSTRUCTIONS_REFERENCE' => 'Upotreba:',
  'TEXT_PAYPAL_INSTRUCTIONS_PAYDATE' => 'Pla&#263;a se:',
  'TEXT_PAYPAL_INSTRUCTIONS_ACCOUNT' => 'Ra&#269;un:',
  'TEXT_PAYPAL_INSTRUCTIONS_HOLDER' => 'Dr&#382;a&#269;:',
  'TEXT_PAYPAL_INSTRUCTIONS_IBAN' => 'IBAN:',
  'TEXT_PAYPAL_INSTRUCTIONS_BIC' => 'BIC:',
  // refund
  'TEXT_PAYPAL_REFUND' => 'Povrat novca',
  'TEXT_PAYPAL_REFUND_LEFT' => 'Iznos mogu&#263;eg povrata novca: ',
  'TEXT_PAYPAL_REFUND_COMMENT' => 'Komentari&#353;i:<br />(max 127 znakova)',
  'TEXT_PAYPAL_REFUND_AMOUNT' => 'Iznos:',
  'TEXT_PAYPAL_REFUND_SUBMIT' => 'Povrat novca',
  // capture
  'TEXT_PAYPAL_CAPTURE' => 'Snimite',
  'TEXT_PAYPAL_CAPTURE_LEFT' => 'Iznos mogu&#263;ih uhvata: ',
  'TEXT_PAYPAL_CAPTURE_IS_FINAL' => 'Kona&#269;no snimanje:',
  'TEXT_PAYPAL_CAPTURE_AMOUNT' => 'Iznos:',
  'TEXT_PAYPAL_CAPTURE_SUBMIT' => 'Snimite',
  'TEXT_PAYPAL_CAPTURED' => 'Pla&#263;anje je zabele&#382;eno',
  // error
  'TEXT_PAYPAL_ERROR_AMOUNT' => 'Unesite va&#382;e&#263;i iznos',
  'TEXT_PAYPAL_ERROR_ALREADY_PAID' => 'Ve&#263; smo primili va&#353;u uplatu. Hvala puno!',
  // diverse
  'MODULE_PAYMENT_PAYPAL_TEXT_ORDER' => 'Va&#353;a narud&#382;ba u '.STORE_NAME,
  // status
  'TEXT_PAYPAL_NO_STATUS_CHANGE' => 'nema promene statusa',
  // template
  'TEXT_PAYPALINSTALLMENT_HEADING' => 'Lako pla&#263;ajte u mese&#269;nim ratama',
  'TEXT_PAYPALINSTALLMENT_DESCRIPTION' => 'Kao deo postupka naru&#269;ivanja mo&#382;ete odabrati svoju otplatu i odgovaraju&#263;i plan financiranja. Va&#353;a je prijava u potpunosti online i bi&#263;e zavr&#353;ena u nekoliko koraka ovde u trgovini.',
  'TEXT_PAYPALINSTALLMENT_RATING_PLAN' => 'Financiranje od %s sa %s ratama Pokre&#263;e PayPal',
  'TEXT_PAYPALINSTALLMENT_RATING_PLAN_SHORT' => 'Finansiranje iz %s u mesecu sa',
  'TEXT_PAYPALINSTALLMENT_LEGAL' => 'Reprezentativni primer prema &sect; 6a PAngV',
  'TEXT_PAYPALINSTALLMENT_NOMINAL_RATE' => 'Nominalna stopa',
  'TEXT_PAYPALINSTALLMENT_APR' => 'Efektivna kamatna stopa',
  'TEXT_PAYPALINSTALLMENT_TOTAL_COST' => 'Ukupni iznos',
  'TEXT_PAYPALINSTALLMENT_TOTAL_NETTO' => 'Neto iznos zajma',
  'TEXT_PAYPALINSTALLMENT_TOTAL_INTEREST' => 'Kamata',
  'TEXT_PAYPALINSTALLMENT_MONTHLY_PAYMENT' => 'Mese&#269;ne rate svakog od njih',
  'TEXT_PAYPALINSTALLMENT_NOTICE' => 'Dostupno financiranje od %s do %s vrednosti korpe sa',
  'TEXT_PAYPALINSTALLMENT_NOTICE_PRODUCT' => 'Mo&#382;ete i finansirati ovaj proizvod!',
  'TEXT_PAYPALINSTALLMENT_NOTICE_CART' => 'Mo&#382;ete i finansirati ovu korpu!',
  'TEXT_PAYPALINSTALLMENT_NOTICE_PAYMENT' => 'Mo&#382;ete i finansirati ovaj nalog!',
  'TEXT_PAYPALINSTALLMENT_CREDITOR' => 'Zajmoprimalac',
  'TEXT_PAYPALINSTALLMENT_INFO_LINK' => 'Informacije o mogu&#263;im cenama',
);
// define 
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>