<?php
$lang_array = array(
  'TEXT_PAYPAL_PROFILE_HEADING_TITLE' => 'PayPal Profil',
  'TEXT_PAYPAL_PROFILE_STATUS' => 'Podrazumevano:',
  'TEXT_PAYPAL_PROFILE_STATUS_INFO' => 'Da li je ovo podrazumevani profil?<br/><br/><b>Bele&#353;ka:</b> Mo&#382;ete da dodelite profil koji zavisi od jezika za svaki modul.',
  'TEXT_PAYPAL_PROFILE_NAME' => 'Interno ime:',
  'TEXT_PAYPAL_PROFILE_NAME_INFO' => '',
  'TEXT_PAYPAL_PROFILE_BRAND' => 'Prika&#382;i ime:',
  'TEXT_PAYPAL_PROFILE_BRAND_INFO' => 'Ovo ime &#263;e biti prikazano klijentima u PayPal (Maksimalno 127 znakova)',
  'TEXT_PAYPAL_PROFILE_LOGO' => 'Logo URL:',
  'TEXT_PAYPAL_PROFILE_LOGO_INFO' => 'Kompletna URL adresa (Max. 127 znakova)<br/><br/><b>Bele&#353;ka:</b> Da bi se logotip pojavio, URL adresa mora po&#269;eti sa https://',
  'TEXT_PAYPAL_PROFILE_LOCALE' => 'Jezik:',
  'TEXT_PAYPAL_PROFILE_LOCALE_INFO' => '',
  'TEXT_PAYPAL_PROFILE_PAGE' => 'Strana:',
  'TEXT_PAYPAL_PROFILE_PAGE_INFO' => '<b>Podrazumevani:</b> Prijavljivanje<br/><br/>Za naplatu akt transfera bez naloga kupca je unapred izabran.',
  'TEXT_PAYPAL_PROFILE_ADDRESS' => 'Zamena adrese:',
  'TEXT_PAYPAL_PROFILE_ADDRESS_INFO' => 'Da li je adresa koju obezbe&#273;uje PayPal preuzeta?',
  'TEXT_PAYPAL_PROFILE_INFO' => 'Nijedan PayPal profil nije dostupan.<br/><br/>Koristite PayPal profil da biste:<ul><li>promenili prikazano ime Paypal naloga</li><li>koristi sliku u PazPal-u</li><li>setuj landingpage na PayPal-u</li></ul>',  
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>