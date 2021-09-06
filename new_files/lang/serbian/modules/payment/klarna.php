<?php
/* -----------------------------------------------------------------------------------------
   $Id: klarna.php 13152 2021-01-12 11:53:34Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

$lang_array = array(
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_TITLE' => '',
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_DESCRIPTION' => 'Pre nego &scaron;to mo&zcaron;ete da podesite na&ccaron;ine plac&#x301;anja Klarna, morate da otvorite ra&ccaron;un za prodavca kod Klarne. Tada c&#x301;ete dobiti informacije i pristupne podatke koji su vam potrebni za pode&scaron;avanje. Ako vec&#x301; imate broj korisnika Klarne, ali to nije Kkkkkkk, po&scaron;aljite e -poruku na <a href="mailto:vertrieb@klarna.com">vertrieb@klarna.com</a>.<br /><br />
    <img src="../lang/german/admin/images/icon.gif" border="0" />
    <a href="https://www.klarna.com/de/verkaeufer/" target="_blank" style="text-decoration: underline; font-weight: bold;">Sada otvorite Klarna nalog ovde.</a>
    <img src="images/icon_popup.gif" border="0" />',
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_INFO' => '',
  'MODULE_PAYMENT_'.$klarna_code.'_ALLOWED_TITLE' => 'Dozvoljene zone',
  'MODULE_PAYMENT_'.$klarna_code.'_ALLOWED_DESC' => '<b> Pojedina&ccaron;no </b> unesite zone koje bi trebalo da budu dozvoljene za ovaj modul. (npr. AT, DE (ako je prazno, sve zone su dozvoljene))',
  'MODULE_PAYMENT_'.$klarna_code.'_STATUS_TITLE' => 'Aktivirajte modul',
  'MODULE_PAYMENT_'.$klarna_code.'_STATUS_DESC' => 'Da li &zcaron;elite da prihvatite plac&#x301;anja pomoc&#x301;u ovog modula?',
  'MODULE_PAYMENT_'.$klarna_code.'_SORT_ORDER_TITLE' => 'Redosled prikaza',
  'MODULE_PAYMENT_'.$klarna_code.'_SORT_ORDER_DESC' => 'Redosled prikazivanja. Najpre se prikazuje najmanja cifra',
  'MODULE_PAYMENT_'.$klarna_code.'_ZONE_TITLE' => 'Zona plac&#x301;anja',
  'MODULE_PAYMENT_'.$klarna_code.'_ZONE_DESC' => 'Ako je izabrana zona, na&ccaron;in plac&#x301;anja va&zcaron;i samo za tu zonu.',
  'MODULE_PAYMENT_'.$klarna_code.'_ORDER_STATUS_ID_TITLE' => 'Defini&scaron;ite status porud&zcaron;bine',
  'MODULE_PAYMENT_'.$klarna_code.'_ORDER_STATUS_ID_DESC' => 'Narud&zcaron;be napravljene pomoc&#x301;u ovog modula postavite na ovaj status',
  'MODULE_PAYMENT_'.$klarna_code.'_CAPTURE_TITLE' => 'Aktivirati',
  'MODULE_PAYMENT_'.$klarna_code.'_CAPTURE_DESC' => 'Da li nalog treba da se aktivira automatski?',

  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_HEADING' => 'Klarna',
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_MESSAGE' => 'Plac&#x301;anje je otkazano.',

  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_VERSION' => '<b>Verzija modula</b><br/>',

  'MODULE_PAYMENT_KLARNA_MERCHANT_ID_TITLE' => 'Korisni&ccaron;ko ime',
  'MODULE_PAYMENT_KLARNA_MERCHANT_ID_DESC' => 'Korisni&ccaron;ko ime za Klarna API',
  'MODULE_PAYMENT_KLARNA_SHARED_SECRET_TITLE' => 'Lozinka',
  'MODULE_PAYMENT_KLARNA_SHARED_SECRET_DESC' => 'Lozinka za Klarna API',
  'MODULE_PAYMENT_KLARNA_MODE_TITLE' => 'Modus',
  'MODULE_PAYMENT_KLARNA_MODE_DESC' => 'Klarna modus',
);
