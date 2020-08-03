<?php
/* -----------------------------------------------------------------------------------------
   $Id: janolaw.php 2011-11-24 modified-shop $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
   (c) 2003   nextcommerce (invoice.php,v 1.6 2003/08/24); www.nextcommerce.org
   (c) 2005 XT-Commerce - community made shopping http://www.xt-commerce.com ($Id: billiger.php 950 2005-05-14 16:45:21Z mz $)
   (c) 2008 Gambio OHG (billiger.php 2008-11-11 gambio)

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_JANOLAW_TEXT_TITLE', 'janolaw usluge hostinga');
define('MODULE_JANOLAW_TEXT_DESCRIPTION', '<a href="https://www.janolaw.de/internetrecht/agb/agb-hosting-service/modified/index.html?partnerid=8764#menu" target="_blank"><img src="images/janolaw/janolaw_185x35.png" border=0></a><br /><br />Nema&#269;ka  portal janolaw nudi prilago&#273;ena re&#353;enja za va&#353;a zakonska pitanja-od telefonske linije do individualnih ugovora sa garantnom garancijom. Pomo&#262;u AGB hostinga usluge za Internet prodavnice mo&#382;ete da podesite uslove pravnog osnovnog dokumenta, uslove, odricanje odgovornosti i izjavu o privatnosti koja je prilago&#273;ena va&#353;oj prodavnici i da je neprestano a&#382;urirate u timu janolaw. Vi&#353;e za&#353;tite nije mogu&#262;e.<br /><br /><a href="https://www.janolaw.de/internetrecht/agb/agb-hosting-service/modified/index.html?partnerid=8764#menu" target="_blank"><strong><u>Click here for the offer<u></strong></a>');
define('MODULE_JANOLAW_USER_ID_TITLE', '<hr noshade>Korisni&#269;ki ID');
define('MODULE_JANOLAW_USER_ID_DESC', 'Va&#353; korisni&#269;ki ID');
define('MODULE_JANOLAW_SHOP_ID_TITLE', 'ID prodavnice');
define('MODULE_JANOLAW_SHOP_ID_DESC', 'Va&#353; ID prodavnice');
define('MODULE_JANOLAW_STATUS_DESC', 'Omogu&#262;i modul?');
define('MODULE_JANOLAW_STATUS_TITLE', 'Status');
define('MODULE_JANOLAW_TYPE_TITLE', '<hr noshade>Sa&#269;uvaj u');
define('MODULE_JANOLAW_TYPE_DESC', 'Skladi&#353;tenje u datoteci ili u bazi podataka?');
define('MODULE_JANOLAW_FORMAT_TITLE', 'Tip formata');
define('MODULE_JANOLAW_FORMAT_DESC', 'Sa&#269;uvaj kao tekst ili HTML');
define('MODULE_JANOLAW_UPDATE_INTERVAL_TITLE', '<hr noshade>A&#382;uriraj interval');
define('MODULE_JANOLAW_UPDATE_INTERVAL_DESC', 'Koliko &#269;esto treba da se a&#382;uriraju podaci?');
define('MODULE_JANOLAW_ERROR', 'Proverite dodelu dokumenata.');

define('MODULE_JANOLAW_TYPE_DATASECURITY_TITLE', '<hr noshade>Obave&#353;tenje o privatnosti za pravno tekst');
define('MODULE_JANOLAW_TYPE_DATASECURITY_DESC', 'Precizirajte sadr&#382;aj ovog pravnog teksta koji treba umetnuti');
define('MODULE_JANOLAW_PDF_DATASECURITY_TITLE', 'PDF za skidanje');
define('MODULE_JANOLAW_PDF_DATASECURITY_DESC', '&#269;uvanje dokumenta i dodaj vezu za dokument?<br/><b>Bitno:</b> Ovo radi samo sa HTML verzijom!');
define('MODULE_JANOLAW_MAIL_DATASECURITY_TITLE', 'Prilog e-po&#353;te');
define('MODULE_JANOLAW_MAIL_DATASECURITY_DESC', 'Po&#353;alji PDF kao prilog sa potvrdom porud&#382;bine?');

define('MODULE_JANOLAW_TYPE_TERMS_TITLE', 'Uslovi kori&#353;&#262;enja pravnog teksta');
define('MODULE_JANOLAW_TYPE_TERMS_DESC', 'Precizirajte sadr&#382;aj ovog pravnog teksta koji treba umetnuti');
define('MODULE_JANOLAW_PDF_TERMS_TITLE', 'PDF za skidanje');
define('MODULE_JANOLAW_PDF_TERMS_DESC', '&#269;uvanje dokumenta i dodaj vezu za dokument?<br/><b>Bitno:</b> Ovo radi samo sa HTML verzijom!');
define('MODULE_JANOLAW_MAIL_TERMS_TITLE', 'Prilog e-po&#353;te');
define('MODULE_JANOLAW_MAIL_TERMS_DESC', 'Po&#353;alji PDF kao prilog sa potvrdom porud&#382;bine?');

define('MODULE_JANOLAW_TYPE_LEGALDETAILS_TITLE', 'Legalan tekst &#353;tampe');
define('MODULE_JANOLAW_TYPE_LEGALDETAILS_DESC', 'Precizirajte sadr&#382;aj ovog pravnog teksta koji treba umetnuti');
define('MODULE_JANOLAW_PDF_LEGALDETAILS_TITLE', 'PDF za skidanje');
define('MODULE_JANOLAW_PDF_LEGALDETAILS_DESC', '&#269;uvanje dokumenta i dodaj vezu za dokument?<br/><b>Bitno:</b> Ovo radi samo sa HTML verzijom!');
define('MODULE_JANOLAW_MAIL_LEGALDETAILS_TITLE', 'Prilog e-po&#353;te');
define('MODULE_JANOLAW_MAIL_LEGALDETAILS_DESC', 'Po&#353;alji PDF kao prilog sa potvrdom porud&#382;bine?');

define('MODULE_JANOLAW_TYPE_REVOCATION_TITLE', 'Pravni tekst desno od opoziva');
define('MODULE_JANOLAW_TYPE_REVOCATION_DESC', 'Precizirajte sadr&#382;aj ovog pravnog teksta koji treba umetnuti');
define('MODULE_JANOLAW_PDF_REVOCATION_TITLE', 'PDF za skidanje');
define('MODULE_JANOLAW_PDF_REVOCATION_DESC', '&#269;uvanje dokumenta i dodaj vezu za dokument?<br/><b>Bitno:</b> Ovo radi samo sa HTML verzijom!');
define('MODULE_JANOLAW_MAIL_REVOCATION_TITLE', 'Prilog e-po&#353;te');
define('MODULE_JANOLAW_MAIL_REVOCATION_DESC', 'Po&#353;alji PDF kao prilog sa potvrdom porud&#382;bine?');

define('MODULE_JANOLAW_TYPE_WITHDRAWAL_TITLE', 'Legal text Withdrawal form');
define('MODULE_JANOLAW_TYPE_WITHDRAWAL_DESC', 'Precizirajte sadr&#382;aj ovog pravnog teksta koji treba umetnuti<br/><br/><b>Bitno:</b> Ovo funkcioni&#353;e iz verzije 3. Promene mogu biti napravljene u Janolaw.');
define('MODULE_JANOLAW_PDF_WITHDRAWAL_TITLE', 'PDF za skidanje');
define('MODULE_JANOLAW_PDF_WITHDRAWAL_DESC', '&#269;uvanje dokumenta i dodaj vezu za dokument?<br/><b>Bitno:</b> Ovo radi samo sa HTML verzijom!');
define('MODULE_JANOLAW_MAIL_WITHDRAWAL_TITLE', 'Prilog e-po&#353;te');
define('MODULE_JANOLAW_MAIL_WITHDRAWAL_DESC', 'Po&#353;alji PDF kao prilog sa potvrdom porud&#382;bine?');
define('MODULE_JANOLAW_WITHDRAWAL_COMBINE_TITLE', 'Kombinovani opoziv sa obrascem za povla&#269;enje');
define('MODULE_JANOLAW_WITHDRAWAL_COMBINE_DESC', 'Kreiraj kombinovani opoziv sa obrascem za oduzimanje');
?>