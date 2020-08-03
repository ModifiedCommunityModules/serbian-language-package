<?php
$lang_array = array(
  'TEXT_PAYPAL_WEBHOOK_HEADING_TITLE' => 'PayPal Webhooks',
  'TEXT_PAYPAL_WEBHOOK_STATUS_NOT_DEFINED' => 'Nije konfigurisano',
  'TEXT_PAYPAL_WEBHOOK_INFO' => '<ul><li>Nijedan Webhooks omogućen.</li><li>Pomoću Webhhoks dobijate mogućnost ažuriranja za plaćanje i status narudžbi</li><li>Da biste koristili Webhooks, neophodno je da imate važeći SSL certifikat.</li></ul>',
  'TEXT_PAYPAL_WEBHOOK_CREDENTIAL_INFO' => 'Nema slobodnih Webhooks. Proverite svoje akreditive.',
  'TABLE_HEADING_URL' => 'URL',
  'TABLE_HEADING_WEBHOOK' => 'Webhook',
  'TABLE_HEADING_STATUS' => 'Status',
  'TABLE_HEADING_DESCRIPTION' => 'Opis',  
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>