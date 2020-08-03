<?php

 
define('HTML_PARAMS','dir="ltr" xml:lang="sr" xmlns="http://www.w3.org/1999/xhtml"');
@setlocale(LC_TIME, 'sr_SR.UTF-8', 'sr_SR@euro', 'sr_SR', 'sr-SR', 'sr', 'sr_SR.ISO_8859-1', 'Serbian','sr_SR.ISO_8859-15');

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y');  // this is used for strftime()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DOB_FORMAT_STRING', 'dd/mm/jjjj');
 
function xtc_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

require_once(DIR_FS_INC.'auto_include.inc.php');
foreach(auto_include(DIR_WS_LANGUAGES.'serbian/extra/','php') as $file) require ($file);

define('TITLE', STORE_NAME);
define('HEADER_TITLE_TOP', 'Glavna stranica');
define('HEADER_TITLE_CATALOG', 'Kataloga');

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency when changing language, 
// instead of staying with the applications default currency
define('LANGUAGE_CURRENCY', 'EUR');

define('MALE', 'G.');
define('FEMALE', 'G.-&#273;a');

/*
 *
 *  BOXES
 *
 */

// text for gift voucher redeeming
define('IMAGE_REDEEM_GIFT','Iskoristite poklon vau&#269;er!');

define('BOX_TITLE_STATISTICS','Statistika:');
define('BOX_ENTRY_CUSTOMERS','Kupci:');
define('BOX_ENTRY_PRODUCTS','Proizvoda:');
define('BOX_ENTRY_REVIEWS','Kritike:');
define('TEXT_VALIDATING','Nije proverena');

// manufacturer box text
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Po&#269;etna');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Vi&#353;e proizvoda');

define('BOX_HEADING_ADD_PRODUCT_ID','Dodaj u korpu');
  
define('BOX_LOGINBOX_STATUS','Grupa kupaca:');     
define('BOX_LOGINBOX_DISCOUNT','Popust na proizvod');
define('BOX_LOGINBOX_DISCOUNT_TEXT','Popust');
define('BOX_LOGINBOX_DISCOUNT_OT','');

// reviews box text in includes/boxes/reviews.php
define('BOX_REVIEWS_WRITE_REVIEW', 'Ocenite ovaj proizvod!');
define('BOX_REVIEWS_NO_WRITE_REVIEW', 'Nije mogu&#263;e oceniti.');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s od 5 zvezdica!');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Izaberite');

// javascript messages
define('JS_ERROR', 'Nedostaju potrebne informacije!\n Molimo vas da popunite potpuno.\n\n');

define('JS_REVIEW_TEXT', '* Tekst mora da sadr&#382;i najmanje ' . REVIEW_TEXT_MIN_LENGTH . ' znakova.\n');
define('JS_REVIEW_RATING', '* Unesite svoju kritiku.\n');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Molimo odaberite na&#269;in pla&#263;anja za va&#353;u narud&#382;bi.\n');
define('JS_ERROR_SUBMITTED', 'Ova stranica je ve&#263; potvr&#273;ena. Kliknite na dugme "u redu" i sa&#269;ekajte dok se proces ne zavr&#353;i.');
define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Molimo odaberite na&#269;in pla&#263;anja za va&#353;u narud&#382;bi.');
define('JS_ERROR_NO_SHIPPING_MODULE_SELECTED', '* Odaberite na&#269;in isporuke za va&#353;u porud&#382;binu.\n');
define('JS_ERROR_CONDITIONS_NOT_ACCEPTED', '* Na&#382;alost, ne mo&#382;emo prihvatiti va&#353;u narud&#382;ju \n osim ako ne potvrdite da ste pro&#269;itali na&#353;e uslove i uslove!\n\n');
define('JS_ERROR_REVOCATION_NOT_ACCEPTED', '* Na&#382;alost, ne mo&#382;emo prihvatiti va&#353;u narud&#382;ju \n osim ako ne prihvatate da pravo povla&#269;enja isti&#269;e za virtuelne proizvode!\n\n');
define('JS_ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', '* Na&#382;alost, ne mo&#382;emo prihvatiti va&#353;u narud&#382;ju \n osim ako ne potvrdite na&#353;e obave&#353;tenje o privatnosti!\n\n');
define('JS_REVIEW_AUTHOR', '* Unesite va&#353;e ime.\n\n');

/*
 *
 * ACCOUNT FORMS
 *
 */

define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER_ERROR', 'Odaberite oslovljavanje.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME_ERROR', 'Va&#353;e ime mora da sadr&#382;i najmanje  ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' znakova.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME_ERROR', 'Va&#353;e prezime mora da sadr&#382;i najmanje ' . ENTRY_LAST_NAME_MIN_LENGTH . ' znakova.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Datum ro&#273;enja mora biti unet u sljede&#263;em obliku DD/MM/GGGG (e.g. 21/05/1970) '); //Dokuman - 2009-06-03 - correct english date format
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (npr. 21/05/1970)'); //Dokuman - 2009-06-03 - correct english date format
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Va&#353;a e-adresa mora da sadr&#382;i najmanje  ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' znakova.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Uneta va&#353;a e-adresa je neta&#269;na ili je ve&#263; registrovana.');
define('ENTRY_EMAIL_ERROR_NOT_MATCHING', 'Unete e-adrese se ne podudaraju.'); // Hetfield - 2009-08-15 - confirm e-mail at registration
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'E-adresa koju ste uneli ve&#263; postoji u na&#353;oj bazi podataka-molim vas ispravite je');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS_ERROR', 'Ulica/br. mora da se sastoji od najmanje ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' znakova.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE_ERROR', 'Va&#353; po&#353;tanski broj mora da sadr&#382;i najmanje ' . ENTRY_POSTCODE_MIN_LENGTH . ' znakova.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY_ERROR', 'Grad mora da se sastoji od najmanje ' . ENTRY_CITY_MIN_LENGTH . ' znakova.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE_ERROR', 'Va&#353;e stanje mora da se sastoji od najmanje ' . ENTRY_STATE_MIN_LENGTH . ' znakova.');
define('ENTRY_STATE_ERROR_SELECT', 'Odaberite va&#353;e stanje sa spiska.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY_ERROR', 'Odaberite svoju zemlju.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Va&#353; broj telefona mora da sadr&#382;i najmanje ' . ENTRY_TELEPHONE_MIN_LENGTH . ' znakova.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_PASSWORD_ERROR', 'Va&#353;a lozinka mora da sadr&#382;i najmanje ' . ENTRY_PASSWORD_MIN_LENGTH . ' znakova.');
define('ENTRY_PASSWORD_ERROR_MIN_LOWER', 'Lozinka mora sadr&#382;avati najmanje %s malih slova');
define('ENTRY_PASSWORD_ERROR_MIN_UPPER', 'Lozinka mora sadr&#382;avati najmanje %s velikih slova');
define('ENTRY_PASSWORD_ERROR_MIN_NUM', 'Lozinka mora da sadr&#382;i najmanje %s brojeva');
define('ENTRY_PASSWORD_ERROR_MIN_CHAR', 'Lozinka mora da sadr&#382;i najmanje %s znakova koji nisu aplhanumeric');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Lozinke se ne podudaraju.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR','Va&#353;a trenutna lozinka ne sme biti prazna.');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Va&#353;a nova lozinka mora da sadr&#382;i najmanje ' . ENTRY_PASSWORD_MIN_LENGTH . ' znakova.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Lozinke se ne podudaraju.');

/*
 *
 *  RESULT PAGES
 *
 */

define('TEXT_RESULT_PAGE', 'Strane:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Prika&#382;i <strong>%d</strong> od <strong>%d</strong> (od ukupno <strong>%d</strong> proizvoda)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Prika&#382;i <strong>%d</strong> od <strong>%d</strong> (od ukupno <strong>%d</strong> narud&#382;bi)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Prika&#382;i <strong>%d</strong> od <strong>%d</strong> (od ukupno <strong>%d</strong> ocena)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Prika&#382;i <strong>%d</strong> od <strong>%d</strong> (od ukupno <strong>%d</strong> novih proizvoda)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Prika&#382;i <strong>%d</strong> od <strong>%d</strong> (od ukupno <strong>%d</strong> specijalnih ponuda)');

/*
 *
 * SITE NAVIGATION
 *
 */

define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Prethodna stranica');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Slede&#263;a stranica');
define('PREVNEXT_TITLE_PAGE_NO', 'stranica %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Prethodne %d strane');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Slede&#263;e %d strane');

/*
 *
 * PRODUCT NAVIGATION
 *
 */

define('PREVNEXT_BUTTON_PREV', '&laquo;');
define('PREVNEXT_BUTTON_NEXT', '&raquo;');

/*
 *
 * IMAGE BUTTONS
 *
 */

define('IMAGE_BUTTON_ADD_ADDRESS', 'Nova adresa');
define('IMAGE_BUTTON_BACK', 'Nazad');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Promeni adresu');
define('IMAGE_BUTTON_CHECKOUT', 'Kupovina');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Kupi');
define('IMAGE_BUTTON_CONTINUE', 'Dalje');
define('IMAGE_BUTTON_DELETE', 'Obrisati');
define('IMAGE_BUTTON_LOGIN', 'Prijaviti se');
define('IMAGE_BUTTON_IN_CART', 'Dodati u korpu');
define('IMAGE_BUTTON_SEARCH', 'Tra&#382;i');
define('IMAGE_BUTTON_UPDATE', 'A&#382;uriranje');
define('IMAGE_BUTTON_UPDATE_CART', 'A&#382;uriraj korpu');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Ispi&#353;i evaluaciju');
define('IMAGE_BUTTON_ADMIN', 'Administrator');
define('IMAGE_BUTTON_PRODUCT_EDIT', 'Uredi proizvod');
define('IMAGE_BUTTON_SEND', 'Po&#353;alji'); //DokuMan - 2010-03-15 - Added button description for contact form
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Nastavi kupovinu'); //Hendrik - 2010-11-12 - used in default template ...shopping_cart.html
define('IMAGE_BUTTON_CHECKOUT_STEP2', 'Pre&#273;ite na korak 2');
define('IMAGE_BUTTON_CHECKOUT_STEP3', 'Pre&#273;ite na korak 3');

define('SMALL_IMAGE_BUTTON_DELETE', 'Obri&#353;i');
define('SMALL_IMAGE_BUTTON_EDIT', 'Izmeni');
define('SMALL_IMAGE_BUTTON_VIEW', 'Pogledaj');

define('ICON_ARROW_RIGHT', 'Poka&#382;i vi&#353;e');
define('ICON_CART', 'Dodaj u korpu');
define('ICON_SUCCESS', 'Uspeh');
define('ICON_WARNING', 'Upozorenje');
define('ICON_ERROR', 'Gre&#353;ka');

define('TEXT_PRINT', '&#352;tampaj'); //DokuMan - 2009-05-26 - Added description for 'account_history_info.php'

define('BUTTON_RESET', 'Poni&#353;ti');
define('BUTTON_UPDATE', 'A&#382;uriranje');
/*
 *
 *  GREETINGS
 *
 */

define('TEXT_GREETING_PERSONAL', 'Drago mi je &#353;to te opet vidim <span class="greetUser">%s!</span>    

&#381;elite li da pogledate na&#353;e <a href="%s">nove proizvode</a>?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Ako niste %s , molimo vas da se <a href="%s">prijavite</a>  sa va&#353;im nalogom.</small>');
define('TEXT_GREETING_GUEST', 'Dobrodo&#353;ao  <span class="greetUser">posetioce!</span> Da li &#382;elite da se <a href="%s">prijavite</a>? ili &#382;elite da napravite novi <a href="%s">nalog</a>?');

define('TEXT_SORT_PRODUCTS', 'Sortiranje stavki je ');
define('TEXT_DESCENDINGLY', 'opadaju&#263;i');
define('TEXT_ASCENDINGLY', 'rastu&#263;i');
define('TEXT_BY', ' posle ');

define('TEXT_OF_5_STARS', '%s od 5 zvezdica!');
define('TEXT_REVIEW_BY', 'od %s');
define('TEXT_REVIEW_WORD_COUNT', '%s re&#269;i');
define('TEXT_REVIEW_RATING', 'Ocena: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Datum dodavanja: %s');
define('TEXT_NO_REVIEWS', 'Jo&#353; nema kritika.');
define('TEXT_NO_NEW_PRODUCTS', 'Nema novih proizvoda za poslednji '.MAX_DISPLAY_NEW_PRODUCTS_DAYS.' dana. Umesto toga, pokaza&#263;emo vam najnovije proizvode.'); 
define('TEXT_UNKNOWN_TAX_RATE', 'Nepoznata poreska stopa');

/*
 *
 * WARNINGS
 *
 */

define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Upozorenje: instalacioni direktorijum je jo&#353; uvek dostupan na: %s. Izbri&#353;ite ovaj direktorijum iz bezbednosnih razloga!');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Upozorenje: izmenjeni softver "Ekommerce" mo&#382;e da upisuje u katalog konfiguracije: %s. To predstavlja mogu&#263;i rizik za sigurnost-ispravite prava korisnika pristupa za ovaj direktorijum!');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Upozorenje: Directorijum za sesije ne postoji: ' . xtc_session_save_path() . '. Sesije ne&#263;e raditi dok ovaj direktorijum ne bude kreiran!');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Upozorenje: modificirani eCommerce Shopsoftware nema mogu&#263;nost upisa u sesijski direktorijum: ' . xtc_session_save_path() . '. Sesije ne&#263;e radoto dok prava korisnika na direktorijum ne budu promenjena!');
define('WARNING_SESSION_AUTO_START', 'Upozorenje: session.auto_start je aktivirano (dozvoljeno) - Molimo deaktivirajte (ukinuti dozvolu) ovaj PHP funkciju u php.ini i resetujte va&#353; poslu&#382;itelj!');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Upozorenje: Direktorijum za preuzimanje &#269;lanaka ne postoji: ' . DIR_FS_DOWNLOAD . '. Ova funkcija ne&#263;e raditi dok ovaj direktorijum ne bude kreiran!');

define('SUCCESS_ACCOUNT_UPDATED', 'Va&#353; nalog je uspe&#353;no a&#382;uriran.');
define('SUCCESS_PASSWORD_UPDATED', 'Va&#353;a lozinka je uspe&#353;no promenjena!');
define('ERROR_CURRENT_PASSWORD_NOT_MATCHING', 'Uneta lozinka se ne podudara sa uskladi&#353;tenom lozinkom. Poku&#353;ajte ponovo.');
define('TEXT_MAXIMUM_ENTRIES', '<strong>Referenca:</strong> Mo&#382;ete odabrati %s unosa u va&#353;em adresaru!');
define('SUCCESS_ADDRESS_BOOK_ENTRY_DELETED', 'Izabrana stavka je uspe&#353;no izbrisana.');
define('SUCCESS_ADDRESS_BOOK_ENTRY_UPDATED', 'Va&#353; adresar je uspe&#353;no a&#382;uriran!');
define('WARNING_PRIMARY_ADDRESS_DELETION', 'Nije mogu&#263;e izbrisati standardnu po&#353;tansku adresu. Kreirajte drugu adresu i prvo je defini&#353;ite kao standardnu po&#353;tansku adresu. Onda ova stavka mo&#382;e da se izbri&#353;e.');
define('ERROR_NONEXISTING_ADDRESS_BOOK_ENTRY', 'Ova stavka adresara nije dostupna.');
define('ERROR_ADDRESS_BOOK_FULL', 'Va&#353;a adresna knjiga je puna. Da biste dodali nove adrese, najpre izbri&#353;ite prethodne.');
define('ERROR_CHECKOUT_SHIPPING_NO_METHOD', 'Nije izabran nijedan na&#269;in isporuke.');
define('ERROR_CHECKOUT_SHIPPING_NO_MODULE', 'Nema dostupnog na&#269;ina isporuke.');

//  conditions check

define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Proverite da li ste pro&#269;itali na&#353;e uslove da biste nastavili sa va&#353;om porud&#382;binom.');
define('ERROR_REVOCATION_NOT_ACCEPTED', 'Molim vas prihvatite da pravo povla&#269;enja isti&#269;e za virtuelne proizvode.');
define('ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', 'Proverite da li ste pro&#269;itali na&#353;e obave&#353;tenje o privatnosti.');

define('SUB_TITLE_OT_DISCOUNT','Popusti:');

define('NOT_ALLOWED_TO_SEE_PRICES','Nemate dozvolu da vidite cene ');
define('NOT_ALLOWED_TO_SEE_PRICES_TEXT','Nemate dozvolu da vidite cene, molim vas kreirajte nalog.');

define('TEXT_DOWNLOAD','Preuzimanje');
define('TEXT_VIEW','Prikaz');

define('TEXT_BUY', '1 x \'');
define('TEXT_NOW', '\' narud&#382;ba');
define('TEXT_GUEST','Gost');
define('TEXT_SEARCH_ENGINE_AGENT','Pretra&#382;iva&#269;');

/*
 *
 * ADVANCED SEARCH
 *
 */

define('TEXT_AC_ALL_CATEGORIES', 'Sve');
define('TEXT_ALL_CATEGORIES', 'Sve kategorije');
define('TEXT_ALL_MANUFACTURERS', 'Svi proizvo&#273;a&#269;i');
define('JS_AT_LEAST_ONE_INPUT', '* Jedno od slede&#263;ih polja mora biti popunjeno:\n    Klju&#269;ne re&#269;i\n    Datum dodavanja od\n    Datum dodavanja do\n    Cenu preko\n    Cena do\n');
define('AT_LEAST_ONE_INPUT', 'Jedno od slede&#263;ih polja mora biti popunjeno:<br />klju&#269;ne re&#269;i koje &#269;ine najmanje 3 znaka<br />Cenu preko<br />Cena do<br />');
define('TEXT_SEARCH_TERM','Va&#353;a pretraga: ');
define('JS_INVALID_FROM_DATE', '* Neva&#382;e&#263;i od datuma\n');
define('JS_INVALID_TO_DATE', '* Do datuma neva&#382;e&#263;e\n');
define('JS_TO_DATE_LESS_THAN_FROM_DATE', '* Od datuma mora biti ve&#263;i ili iste veli&#269;ine kao i do trenutnog datuma\n');
define('JS_PRICE_FROM_MUST_BE_NUM', '* Cena preko, mora biti broj\n');
define('JS_PRICE_TO_MUST_BE_NUM', '* Cena do, mora biti broj\n');
define('JS_PRICE_TO_LESS_THAN_PRICE_FROM', '* Cena do koje mora biti ve&#263;a ili ista veli&#269;ina kao cena preko.\n');
define('JS_INVALID_KEYWORDS', '* Neva&#382;e&#263;i klju&#269; za pretra&#382;ivanje\n');
define('TEXT_LOGIN_ERROR', '<strong>GRE&#352;KA:</strong> Ukucali ste \'adresu e-po&#353;te\' i/ili \'lozinku\' koje se ne poklapaju.');
//define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<span class="color_error_message"><strong>WARNING:</strong></span> The e-mail address entered is not registered. Please try again.'); // Not used anymore as we do not give a hint that an e-mail address is or is not in the database!
define('TEXT_PASSWORD_SENT', 'Nova lozinka je poslana e-po&#353;tom.');
define('TEXT_PRODUCT_NOT_FOUND', 'Proizvod nije prona&#273;en!');
define('TEXT_MORE_INFORMATION', 'Za vi&#353;e informacija, molimo vas da posetite <a href="%s" onclick="window.open(this.href); return false;">po&#269;etnu stranu</a> ovog proizvoda.');
define('TEXT_DATE_ADDED', 'Ovaj proizvod je dodat na&#353;em katalogu %s.');
define('TEXT_DATE_AVAILABLE', '<span class="color_error_message">O&#269;ekuje se da &#263;e ovaj proizvod ponovo biti na lageru %s </span>');
define('SUB_TITLE_SUB_TOTAL', 'Podzbir:');

define('OUT_OF_STOCK_CANT_CHECKOUT', 'Proizvodi koji su ozna&#269;eni ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' , nisu dostupni u tra&#382;noj koli&#269;ini.<br />Smanjite koli&#269;inu za ozna&#269;ene proizvode. Hvala vam');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Proizvodi koji su ozna&#269;eni ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' , nisu dostupni u tra&#382;noj koli&#269;ini. < br/> Mi &#263;emo da obnovimo proizvode koji su trenutno van zaliha u najkra&#263;em mogu&#263;em roku. Delimi&#269;na dostava po zahtevu.');

define('MINIMUM_ORDER_VALUE_NOT_REACHED_1', 'Potrebno je da dostigne minimalnu vrednost porud&#382;bine za: ');
define('MINIMUM_ORDER_VALUE_NOT_REACHED_2', ' <br />Pove&#263;ajte vrednost porud&#382;bine za najmanje: ');
define('MAXIMUM_ORDER_VALUE_REACHED_1', 'Naru&#269;ili ste vi&#353;e od dozvoljene sume: ');
define('MAXIMUM_ORDER_VALUE_REACHED_2', '<br /> Smanjite porud&#382;binu na najmanje: ');

define('ERROR_INVALID_PRODUCT', 'Odabrani proizvod nije prona&#273;en!');
define('JS_KEYWORDS_MIN_LENGTH', 'Termin za pretragu mora sadr&#382;ati najmanje ' . (int)SEARCH_MIN_LENGTH . ' znakova.\n');

/*
 *
 * NAVBAR TITLE
 *
 */

define('NAVBAR_TITLE_ACCOUNT', 'Va&#353; nalog');
define('NAVBAR_TITLE_1_ACCOUNT_EDIT', 'Va&#353; nalog');
define('NAVBAR_TITLE_2_ACCOUNT_EDIT', 'Promena li&#269;nih podataka');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY', 'Va&#353; nalog');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY', 'Dovr&#353;ene porud&#382;bine');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY_INFO', 'Va&#353; nalog');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY_INFO', 'Dovr&#353;ene porud&#382;bine');
define('NAVBAR_TITLE_3_ACCOUNT_HISTORY_INFO', 'Broj porud&#382;bine %s');
define('NAVBAR_TITLE_1_ACCOUNT_PASSWORD', 'Va&#353; nalog');
define('NAVBAR_TITLE_2_ACCOUNT_PASSWORD', 'Promeni lozinku');
define('NAVBAR_TITLE_1_ADDRESS_BOOK', 'Va&#353; nalog');
define('NAVBAR_TITLE_2_ADDRESS_BOOK', 'Adresar');
define('NAVBAR_TITLE_1_ADDRESS_BOOK_PROCESS', 'Va&#353; nalog');
define('NAVBAR_TITLE_2_ADDRESS_BOOK_PROCESS', 'Adresar');
define('NAVBAR_TITLE_ADD_ENTRY_ADDRESS_BOOK_PROCESS', 'Nova stavka');
define('NAVBAR_TITLE_MODIFY_ENTRY_ADDRESS_BOOK_PROCESS', 'Promeni stavku');
define('NAVBAR_TITLE_DELETE_ENTRY_ADDRESS_BOOK_PROCESS', 'Izbri&#353;i stavku');
define('NAVBAR_TITLE_ADVANCED_SEARCH', 'Napredno pretra&#382;ivanje');
define('NAVBAR_TITLE1_ADVANCED_SEARCH', 'Napredno pretra&#382;ivanje');
define('NAVBAR_TITLE2_ADVANCED_SEARCH', 'Rezultati pretrage');
define('NAVBAR_TITLE_1_CHECKOUT_CONFIRMATION', 'Kupovina');
define('NAVBAR_TITLE_2_CHECKOUT_CONFIRMATION', 'Potvrda');
define('NAVBAR_TITLE_1_CHECKOUT_PAYMENT', 'Kupovina');
define('NAVBAR_TITLE_2_CHECKOUT_PAYMENT', 'Na&#269;in pla&#263;anja');
define('NAVBAR_TITLE_1_PAYMENT_ADDRESS', 'Kupovina');
define('NAVBAR_TITLE_2_PAYMENT_ADDRESS', 'Promena adrese fakturisanja');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING', 'Kupovina');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING', 'Informacije o isporuci');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING_ADDRESS', 'Kupovina');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING_ADDRESS', 'Promeni adresu za isporuku');
define('NAVBAR_TITLE_1_CHECKOUT_SUCCESS', 'Kupovina');
define('NAVBAR_TITLE_2_CHECKOUT_SUCCESS', 'Uspeh');
define('NAVBAR_TITLE_CREATE_ACCOUNT', 'Kreiraj nalog');
define('NAVBAR_TITLE_LOGIN', 'Prijavljivanje');
define('NAVBAR_TITLE_LOGOFF','Do vi&#273;enja');
define('NAVBAR_TITLE_PRODUCTS_NEW', 'Novi proizvodi');
define('NAVBAR_TITLE_SHOPPING_CART', 'Korpa za kupovinu');
define('NAVBAR_TITLE_SPECIALS', 'Specijalne ponude');
define('NAVBAR_TITLE_COOKIE_USAGE', 'Kori&#353;&#263;enje kola&#269;i&#263;a');
define('NAVBAR_TITLE_PRODUCT_REVIEWS', 'Kritike');
define('NAVBAR_TITLE_REVIEWS_WRITE', 'Mi&#353;ljenja');
define('NAVBAR_TITLE_REVIEWS','Kritike');
define('NAVBAR_TITLE_SSL_CHECK', 'Napomena o bezbednosti');
define('NAVBAR_TITLE_CREATE_GUEST_ACCOUNT','Adresa klijenta');
define('NAVBAR_TITLE_PASSWORD_DOUBLE_OPT','Lozinka je zaboravljena?');
define('NAVBAR_TITLE_NEWSLETTER','Bilten');
define('NAVBAR_GV_REDEEM', 'Iskoristite vau&#269;er');
define('NAVBAR_GV_SEND', 'Po&#353;alji vau&#269;er');
define('NAVBAR_TITLE_DOWNLOAD', 'Preuzimanja');

/*
 *
 *  MISC
 *
 */

define('TEXT_NEWSLETTER','&#381;elite da ostanete a&#382;urni?<br />Nema problema, primite bilten za najnovija a&#382;uriranja.');
define('TEXT_EMAIL_INPUT','Va&#353;a e-adresa je registrovana u na&#353;em sistemu.<br />Poslata je e-poruka sa vezom za potvrdu. Kliknite na vezu da biste dovr&#353;ili registraciju!');

define('TEXT_WRONG_CODE','Bezbednosni kod koji ste uneli nije ispravan. Poku&#353;ajte ponovo. < br/> Obrazac ne razlikuje velika i mala slova.');
define('TEXT_EMAIL_EXIST_NO_NEWSLETTER','Ova e-adresa je registrovana ali jo&#353; nije aktivirana!');
define('TEXT_EMAIL_EXIST_NEWSLETTER','Ova e-adresa je ve&#263; registrovana za bilten!');
define('TEXT_EMAIL_NOT_EXIST','Ova e-adresa nije registrovana za bilten!');
define('TEXT_EMAIL_DEL','Va&#353;a e-adresa je uspe&#353;no izbrisana iz na&#353;ih biltena-baza podataka.');
define('TEXT_EMAIL_DEL_ERROR','Do&#353;lo je do gre&#353;ke, va&#353;a e-adresa nije uklonjena iz na&#353;e baze podataka!');
define('TEXT_EMAIL_ACTIVE','Va&#353;a e-adresa je uspe&#353;no registrovana za bilten!');
define('TEXT_EMAIL_ACTIVE_ERROR','Do&#353;lo je do gre&#353;ke, va&#353;a e-adresa nije registrovana za bilten!');
define('TEXT_EMAIL_SUBJECT','Va&#353; bilten nalog');

define('TEXT_CUSTOMER_GUEST','Gost');

define('TEXT_LINK_MAIL_SENDED','Va&#353; novi zahtev za lozinku mora biti potvr&#273;en. < br/> e-po&#353;ta sa vezom za potvrdu je poslata. Kliknite na vezu da biste dovr&#353;ili va&#353; zahtev. <br/> <br/> Veza sa potvrdom je %s minuta va&#382;e&#263;a.');
define('TEXT_PASSWORD_MAIL_SENDED','Za nekoliko minuta dobi&#263;ete e-poruku sa novom lozinkom.<br />Promenite lozinku nakon prvog prijavljivanja.');
define('TEXT_CODE_ERROR','Bezbednosni kod koji ste uneli nije ispravan.<br />Poku&#353;ajte ponovo.');
define('TEXT_EMAIL_ERROR','Uneta adresa e-po&#353;te nije ta&#269;na.<br />Poku&#353;ajte ponovo.');
define('TEXT_NO_ACCOUNT','Va&#353; zahtev za novu lozinku je ili neva&#382;e&#263;i ili je isteklo.<br />Poku&#353;ajte ponovo.');
define('HEADING_PASSWORD_FORGOTTEN','Obnova lozinke?');
define('TEXT_PASSWORD_FORGOTTEN','Promenite lozinku u tri laka koraka.');
define('TEXT_EMAIL_PASSWORD_FORGOTTEN','Poruka za potvrdu za obnavljanje lozinke');
define('TEXT_EMAIL_PASSWORD_NEW_PASSWORD','Novu lozinku');
define('ERROR_MAIL','Proverite podatke unete u obrazac');

define('CATEGORIE_NOT_FOUND','Kategorija nije prona&#273;ena');

define('GV_FAQ', 'poklon vau&#269;er Pitanja i odgovori');
define('ERROR_NO_REDEEM_CODE', 'Niste uneli &#353;ifru za preuzimanje.');
define('ERROR_NO_INVALID_REDEEM_GV', 'Neva&#382;e&#263;i kod vau&#269;era');
define('TABLE_HEADING_CREDIT', 'Krediti raspolo&#382;ivi');
define('EMAIL_GV_TEXT_SUBJECT', 'Poklon od %s');
define('MAIN_MESSAGE', 'Odlu&#269;io si da po&#353;alje&#353; poklon vau&#269;era vrednosti %s do %s kome je adresa e-po&#353;te %s<br /><br />Slede&#263;i tekst &#263;e biti uklju&#269;en u e-poruku:<br /><br />Dragi/a %s<br /><br />Dobili ste poklon vau&#269;er u vrednosti %s od %s');
define('REDEEMED_AMOUNT','Va&#353; poklon vau&#269;era je uspe&#353;no dodat na va&#353; nalog. Iznos poklon vau&#269;era: %s');
define('REDEEMED_COUPON','Va&#353; vau&#269;er vam je uspe&#353;no zaslu&#382;an na ra&#269;unu i bi&#263;e automatski unov&#269;eni na va&#353;em kupovini.');

define('ERROR_INVALID_USES_USER_COUPON','Ovaj vau&#269;er se jedino mo&#382;e iskoristiti');
define('ERROR_INVALID_USES_COUPON','Ovaj vau&#269;er se jedino mo&#382;e iskoristiti ');
define('TIMES',' puta.');
define('ERROR_INVALID_STARTDATE_COUPON','Va&#353; kupon jo&#353; nije dostupan.');
define('ERROR_INVALID_FINISDATE_COUPON','Tvoj vau&#269;er je ve&#263; istekao.');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON', 'Ovaj kupon se mo&#382;e iskoristiti samo sa minimalnom vredno&#353;&#263;u porud&#382;bine %s!');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON_ADD','<br/>Morate ponovo uneti kuponski kod kada dostignete na minimalnu vrednost porud&#382;bine!');
define('ERROR_COUPON_REQUIRES_ACCOUNT', 'Za iskori&#353;&#263;avanje vau&#269;era potreban vam je ra&#269;un kupca.');
define('PERSONAL_MESSAGE', '%s pi&#353;e:');

define('TEXT_LINK_TITLE_INFORMATION', 'Informacije');

/*
 *
 * CUOPON POPUP
 *
 */

define('TEXT_CLOSE_WINDOW', 'Zatvori prozor [x]');
define('TEXT_COUPON_HELP_HEADER', 'Va&#353; vau&#269;er/kupon je uspe&#353;no iskori&#353;ten.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Ime vau&#269;era/kupona : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Vrednost ovog vau&#269;era/kupona je %s manje va&#353;e slede&#263;e narud&#382;be');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Treba da potro&#353;i&#353; bar %s da bi mogao da koristi&#353; vau&#269;er.');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Ovaj vau&#269;er vam daje besplatnu isporuku po narud&#382;bi');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Opis vau&#269;era : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Ovaj vau&#269;er je va&#382;e&#263;i od: %s do %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Ograni&#269;enja proizvoda/kategorije');
define('TEXT_COUPON_HELP_CATEGORIES', 'Kategorija');
define('TEXT_COUPON_HELP_PRODUCTS', 'Proizvoda');
define('ERROR_ENTRY_AMOUNT_CHECK', 'Neva&#382;e&#263;i iznos');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Neva&#382;e&#263;a adresa e-po&#353;te');
define('TEXT_COUPON_PRODUCTS_RESTRICT', 'Va&#353; vau&#269;er/kupon je ograni&#269;en na neke proizvode.');
define('TEXT_COUPON_CATEGORIES_RESTRICT', 'Va&#353; vau&#269;er/kupon je ograni&#269;en na neke kategorije.');

// VAT Reg No
define('ENTRY_VAT_TEXT','* samo za zemlje &#269;lanice EU'); // anmerkung: besser wenn laden im EU ausland ist
define('ENTRY_VAT_ERROR', 'Odabrani poreski broj nije va&#382;e&#263;i ili ne mo&#382;e biti verifikovan u ovom trenutku! Unesite va&#382;e&#263;i poreski broj ili ostavite ovo polje prazno.');
define('MSRP','MSRP');
define('YOUR_PRICE','va&#353;a cena ');
define('UNIT_PRICE','jedini&#269;na cena ');
define('ONLY',' Samo sad ');
define('FROM','od ');
define('YOU_SAVE','vi sa&#269;uvate ');
define('INSTEAD','Na&#353;a prethodna cena ');
define('TXT_PER',' po ');
define('TAX_INFO_INCL','%s PDV uklj.');
define('TAX_INFO_EXCL','%s PDV neuklj.');
define('TAX_INFO_ADD','%s PDV plus.');
define('SHIPPING_EXCL','neuklj.');
define('SHIPPING_INCL','uklj.');
define('SHIPPING_COSTS','Tro&#353;kovi isporuke'); 

define('SHIPPING_TIME','Vreme isporuke: ');
define('MORE_INFO','[Vi&#353;e]');

define('ENTRY_PRIVACY_ERROR','Potvrdite da ste pro&#269;itali na&#353;e smernice za privatnost!');
define('TEXT_PAYMENT_FEE','Naknada za isplatu');

define('_MODULE_INVALID_SHIPPING_ZONE', 'Na&#382;alost, mi ne dostavljamo na odabranu zemlju.');
define('_MODULE_UNDEFINED_SHIPPING_RATE', 'Tro&#353;kovi isporuke ne mogu se izra&#269;unati u ovom trenutku, molimo vas da nas kontaktirate.');

define('NAVBAR_TITLE_1_ACCOUNT_DELETE', 'Va&#353; nalog');
define('NAVBAR_TITLE_2_ACCOUNT_DELETE', 'Izbri&#353;ite nalog');	

//contact-form error messages
define('ERROR_EMAIL','<p><b>Va&#353;a e-mail adresa: </b> nijedan ili neva&#382;e&#263;i unos!!</p>');
define('ERROR_VVCODE','<p><b>Bezbednosni kod: </b> bez podudaranja unesite Va&#353; bezbednosni kod ponovo!</p>');
define('ERROR_MSG_BODY','<p><b>Va&#353;a poruka: </b> nema unosa!</p>');

//Table Header checkout_confirmation.php
define('HEADER_QTY', 'Broj');
define('HEADER_ARTICLE', 'Artikla');    
define('HEADER_SINGLE', 'Pojedina&#269;na cena');
define('HEADER_TOTAL','Ukupno');
define('HEADER_MODEL', 'Model');

### PayPal API Modul
define('NAVBAR_TITLE_PAYPAL_CHECKOUT','PayPal-poru&#269;ivanje');
define('PAYPAL_ERROR','PayPal prekid');
define('PAYPAL_NOT_AVIABLE','PayPal nije dostupan.<br />Izaberite drugi na&#269;in pla&#263;anja <br />ili poku&#353;ajte ponovo kasnije.<br />');
define('ERROR_ADDRESS_NOT_ACCEPTED', 'Molim vas Potvrdite va&#353;u adresu da bismo mogli da obra&#273;ujemo va&#353;u narud&#382;bi.');
define('PAYPAL_FEHLER','PayPal je prijavio gre&#353;ku prilikom obrade uplate. <br/> porud&#382;bina je uskladi&#353;tena, ali ne mo&#382;e da se obradi. <br/> Unesite novu porud&#382;binu. <br/> Hvala na razumevanju.<br />');
define('PAYPAL_WARTEN','PayPal je prijavio gre&#353;ku prilikom obrade uplate. <br/> Prijavite se na PayPal i platite porud&#382;binu. <br/> ispod vidite uskladi&#353;tenu porud&#382;binu. <br/> Hvala na razumevanju.<br />');
define('PAYPAL_NEUBUTTON','Ponovo pritisnite taster da biste platili porud&#382;binu. <br/> bilo koje drugo dugme &#263;e otkazati.');
define('PAYPAL_GS','Kupon');
define('PAYPAL_TAX','poreska');
define('PAYPAL_EXP_WARN','Bele&#353;ka! Mogu&#263;e je da &#263;e tro&#353;kovi prosle&#273;ivanja u radionici biti izra&#269;unati samo na kraju.');
define('PAYPAL_EXP_VORL','Privremeni tro&#353;kovi prosle&#273;ivanja');
define('PAYPAL_EXP_VERS','12.90');
define('PAYPAL_ADRESSE','Zemlja u tvojoj PayPal adresi nije registrovana u na&#353;oj radnji.<br />Molimo vas da nas kontaktirate.<br />Hvala na razumevanju.<br />Iz PayPal primljene zemlje: ');
define('PAYPAL_AMMOUNT_NULL','Zbir porud&#382;bine koji se mo&#382;e o&#269;ekivati (bez dispe&#269;era) je direktan 0. < br/> tako da PayPal Express nije dostupan. < br/> Izaberite drugi na&#269;in pla&#263;anja. < br/> Hvala na razumevanju.<br />');
### PayPal API Modul

define('BASICPRICE_VPE_TEXT','Samo na ovom volumenu ');
define('GRADUATED_PRICE_MAX_VALUE', 'iz');
define('_SHIPPING_TO', 'isporuka ');

define('ERROR_SQL_DB_QUERY','&#382;ao nam je, ali do&#353;lo je do gre&#353;ke u bazi podataka na ovoj stranici!');
define('ERROR_SQL_DB_QUERY_REDIRECT','Bi&#263;ete preusmereni na na&#353;u po&#269;etnu stranicu u %s sekundi!');

define('TEXT_AGB_CHECKOUT','Molimo vas uzmite u obzir na&#353;e op&#353;te termine i uslove %s i smernice privatnosti %s.');
define('TEXT_REVOCATION_CHECKOUT', ', Smernica otkazivanja %s');
define('DOWNLOAD_NOT_ALLOWED', '<h1>Zabranjeno</h1>Ovaj server nije mogao da potvrdi da ste ovla&#353;&#263;eni da pristupite zahtevanom dokumentu. Ili ste dobili pogre&#353;ne akreditive (npr. neispravna lozinka) ili va&#353; pregleda&#269; ne razume kako da obezbedi potrebne akreditive.');

define('TEXT_INFO_DETAILS', ' Detalji');
define('TEXT_SAVED_BASKET', 'Molimo vas da proverite va&#353;u korpu za kupovinu. Postoje proizvodi iz poslednje posete.');
//define('TEXT_PRODUCTS_QTY_REDUCED', 'Maximum quantity for the last added / updated article reached. The quantity was reduced automatically.'); // Now we use MAX_PROD_QTY_EXCEEDED

define('ERROR_REVIEW_TEXT', 'Tekst mora da se sastoji od najmanje ' . REVIEW_TEXT_MIN_LENGTH . ' znakova.');
define('ERROR_REVIEW_RATING', 'Unesite svoju kritiku.');
define('ERROR_REVIEW_AUTHOR', 'Unesite svoje ime.');

define('GV_NO_PAYMENT_INFO', '<div class="infomessage">Porud&#382;binu mo&#382;ete platiti u potpunosti sa svojim kreditom. Ako ne &#382;elite da preuzmete ravnote&#382;u, obri&#353;ite ga, a zatim izaberite na&#269;in pla&#263;anja!</div>');
define('GV_ADD_PAYMENT_INFO', '<div class="errormessage">Va&#353; kredit nije dovoljan ili se ne mo&#382;e koristiti za sve ra&#269;unovodstvene funkcije za kompletno pla&#263;anje porud&#382;bine. Izaberite metod pla&#263;anja pored!</div>');

define('_SHIPPING_FREE','Besplatan transport');

define('TEXT_CONTENT_NOT_FOUND', 'Stranica nije prona&#273;ena!');
define('TEXT_SITE_NOT_FOUND', 'Stranica nije prona&#273;ena!');

// error message for exceeded product quantity, noRiddle
define('MAX_PROD_QTY_EXCEEDED', 'Maksimalni dozvoljeni broj ' .MAX_PRODUCTS_QTY. ' od <span style="font-style:italic;">"%s"</span> je prekora&#269;en. Broj je automatski smanjen na dozvoljeni koli&#269;ina.');

define('IMAGE_BUTTON_CONTENT_EDIT', 'Ure&#273;ivanje sadr&#382;aja');
define('PRINTVIEW_INFO', '&#352;tampanje lista sa podacima');
define('PRODUCTS_REVIEW_LINK', 'Napi&#353;i kritiku');

define('TAX_INFO_SMALL_BUSINESS', 'Kona&#269;na cena &sect; 19 UStG.');
define('TAX_INFO_SMALL_BUSINESS_FOOTER', 'Zbog malog poslovnog statusa u skladu sa &sect; 19 UStG., ne napla&#263;ujemo porez na promet');

define('NEED_CHANGE_PWD', 'Promenite lozinku.');
define('TEXT_REQUEST_NOT_VALID', 'Ova veza nije va&#382;e&#263;a. Napravite novi zahtev za lozinku.');

define('NAVBAR_TITLE_WISHLIST', 'Lista &#382;eljenih proizvoda');
define('TEXT_TO_WISHLIST', 'Dodaj u listu &#382;eljenih proizvoda');
define('IMAGE_BUTTON_TO_WISHLIST', 'Dodaj u listu &#382;eljenih proizvoda');

define('GUEST_REDEEM_NOT_ALLOWED', 'Gosti ne mogu da iskoriste bilo kakve vau&#269;ere.');
define('GUEST_VOUCHER_NOT_ALLOWED', 'Vau&#269;eri se ne mogu kupiti od strane gosta.');

define('TEXT_FILTER_SETTING_DEFAULT', 'Stavke po stranici');
define('TEXT_FILTER_SETTING', '%s stavki po stranici');
define('TEXT_FILTER_SETTING_ALL', 'Prika&#382;i sve stavke');
define('TEXT_SHOW_ALL', ' (Prika&#382;i sve)');
define('TEXT_FILTER_SORTING_DEFAULT', 'Pore&#273;aj ...');
define('TEXT_FILTER_SORTING_ABC_ASC', 'A do Z');
define('TEXT_FILTER_SORTING_ABC_DESC', 'Z do A');
define('TEXT_FILTER_SORTING_PRICE_ASC', 'Cena po rastu&#263;em redosledu');
define('TEXT_FILTER_SORTING_PRICE_DESC', 'Cena po opadaju&#263;em redosledu');
define('TEXT_FILTER_SORTING_DATE_DESC', 'Prvo najnoviji proizvodi');
define('TEXT_FILTER_SORTING_DATE_ASC', 'Prvo najstariji proizvodi');
define('TEXT_FILTER_SORTING_ORDER_DESC', 'Najprodavaniji proizvodi');

define('NAVBAR_TITLE_ACCOUNT_CHECKOUT_EXPRESS_EDIT', 'Postavke za brzu nabavku');
define('SUCCESS_CHECKOUT_EXPRESS_UPDATED', 'Postavke za brzo nabavku su sa&#269;uvane .');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_ADDRESS', 'Izaberite adresu za isporuku');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_MODULE', 'Izaberite na&#269;in isporuke');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_ADDRESS', 'Izaberite adresu fakturisanja');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_MODULE', 'Izaberite na&#269;in pla&#263;anja');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK', 'Moja brza kupovina');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK_MORE', 'Vi&#353;e informacija o brzom kupovini &raquo;');
define('TEXT_CHECKOUT_EXPRESS_CHECK_CHEAPEST', 'Izaberi uvek najjeftiniji na&#269;in isporuke');

define('AC_SHOW_PAGE', 'Stranice ');
define('AC_SHOW_PAGE_OF', ' iz ');

define('FREE_SHIPPING_INFO', 'Besplatni minimalni redosled isporuke: %s');

define('MANUFACTURER_NOT_FOUND', 'Proizvo&#273;a&#269; nije prona&#273;en');
define('ENTRY_TOKEN_ERROR', 'Proverite podatke.');

define('IMAGE_BUTTON_CONFIRM', 'Potvrdite'); // Needed for PayPal

// ***************************************************
//  Kontodaten-Prüfung
// ***************************************************
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_0', 'Detalji banke Ok.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1', 'Broj ra&#269;una i/ili broj banke nisu va&#382;e&#263;i ili se ne podudaraju!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2', 'Broj ra&#269;una se ne mo&#382;e automatski testirati.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_3', 'Broj naloga nije mogu&#263;e testirati.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_4', 'Broj ra&#269;una nije mogu&#263;e testirati! Proverite podatke ponovo.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_5', 'Ovaj broj usmeravanja ne postoji, ispravite va&#353; unos.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_8', 'Gre&#353;ka u &#353;ifri banke ili nijedna &#353;ifra banke nije navedena!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_9', 'Nije naveden broj naloga!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_10', 'Nemate navedene vlasnike ra&#269;una.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_128', 'Unutra&#353;nja gre&#353;ka prilikom provere detalja banke.');

// Fehlermeldungen alle IBAN-Nummern 
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1000', 'U IBAN je kod zemlje (prvo 
  i drugo mesto) je nepoznat.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1010', 'IBAN pogre&#353;na du&#382;ina: previ&#353;e ta&#269;aka upisano.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1020', 'IBAN pogre&#353;na du&#382;ina: premalo ta&#269;aka upisano.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1030', 'IBAN nije ekvivalentan sa tim koji je uspostavljen za format zemlje.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1040', 'Proveriti brojke IBAN (ta&#269;ke 3 i 4) jer nisu ta&#269;ne -> gre&#353;ka u kucanju u IBAN.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1050', 'BIC ima neodgovaraju&#263; format.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1060', 'BIC pogre&#353;na du&#382;ina: Previ&#353;e znakova upisano. 8 ili 11 znakova je potrebno.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1070', 'BIC pogre&#353;na du&#382;ina: Premalo znakova upisano. 8 ili 11 znakova je potrebno.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1080', 'BIC pogre&#353;na du&#382;ina: Previ&#353;e znakova upisano. 8 ili 11 znakova je potrebno.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1200', 'IBAN iz definisane zemlje (prvo i drugo mesto IBAN-a) nisu prihva&#263;eni.');

// Fehlermeldungen für deutsche Kontonummern 
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2001', 'U IBAN je uklju&#269;en broj ra&#269;una (ta&#269;ka 13 do 22) i/ili broj usmeravanja (ta&#269;ki 5 do 12) neva&#382;e&#263;i ili se ne podudaraju me&#273;usobno.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2002', 'U IBAN je uklju&#269;en broj ra&#269;una (ta&#269;ka 13 do 22) ne mo&#382;e se automatski testirati.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2003', 'U IBAN je uklju&#269;en broj ra&#269;una (ta&#269;ka 13 do 22) ne postoji definisan izbor cifara.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2004', 'U IBAN je uklju&#269;en broj ra&#269;una (ta&#269;ka 13 do 22) ne mo&#382;e se testirati!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2005', 'Broj banke (ta&#269;ka 5 do 12 IBAN) nepostoje&#263;i!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2008', 'Gre&#353;ka u banci (ta&#269;ka 5 do 12 IBAN) ili nije naveden broj banke!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2009', 'Nema broja ra&#269;una (ta&#269;ka 13 do 22 IBAN)!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2010', 'Nisu nazna&#269;eni vlasnici naloga.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2020', 'BIC je neva&#382;e&#263;i: ne postoji banka sa ovim BIC-em.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2128', 'Unutra&#353;nja gre&#353;ka prilikom provere detalja banke.');

define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_UNKNOWN', 'Nepoznata gre&#353;ka prilikom provere detalja banke.');

define('PRODUCT_REVIEWS_SUCCESS', 'Hvala vam na pregledu.');
define('PRODUCT_REVIEWS_SUCCESS_WAITING', 'Hvala vam na pregledu. Ovo &#263;e biti provereno pre objavljivanja.');

define('TITLE_PRODUCTS_NEW', 'Novi proizvodi');
define('TITLE_SPECIALS', 'Specijalna ponuda');

define('SITEMAP_ERROR_400', 'Gre&#353;ka 400: Lo&#353; zahtev.');
define('SITEMAP_ERROR_401', 'Gre&#353;ka 401: Neovla&#353;&#263;enog.');
define('SITEMAP_ERROR_403', 'Gre&#353;ka 403: Zabranjeno.');
define('SITEMAP_ERROR_404', 'Gre&#353;ka 404: Nije prona&#273;eno!');
define('SITEMAP_ERROR_500', 'Gre&#353;ka 500: Unutra&#353;nja gre&#353;ka servera.');
?>