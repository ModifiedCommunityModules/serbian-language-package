<?php

/* Default Messages */
define('MODULE_PAYMENT_BILLPAY_TEXT_TITLE', 'BillPay - Faktura');
define('MODULE_PAYMENT_BILLPAY_TEXT_DESCRIPTION', 'BillPay - Fakturq');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_MESSAGE', 'BillPay Poruka o gre&#353;ci');
define('MODULE_PAYMENT_BILLPAY_TEXT_INFO', '<div style="margin-top:6px"><img src="https://www.billpay.de/wp-content/uploads/2011/04/LogoSmall_0.png" alt="BillPay Logo" title="BillPay Logo" /></div>');

define('MODULE_PAYMENT_BILLPAY_ALLOWED_TITLE' , 'Dozvoljene zemlje');
define('MODULE_PAYMENT_BILLPAY_ALLOWED_DESC' , 'Unesite zemlje (npr. Da, DE) je dozvoljeno da koriste ovaj na&#269;in pla&#263;anja. Ako je prazno, sve zemlje su dozvoljene');

define('MODULE_PAYMENT_BILLPAY_LOGGING_TITLE' , 'Apsolutna putanja za datoteku evidencije');
define('MODULE_PAYMENT_BILLPAY_LOGGING_DESC' , '"Platni modul" &#263;e zapisati sve komunikacije sa serverom za pla&#263;anje i naplatu na datoteku. Ako je prazno, koristi&#263;e podrazumevanu putanju (/includes/external/billpay/log).');

define('MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY' , 'Podaci obezbe&#273;eni za BillPay');
define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_TITLE' , 'Trgovac ID');
define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_DESC' , MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY);

define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_TITLE' , 'Status podrazumevanog naloga');
define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_DESC' , 'Bi&#263;e kreirane sve porud&#382;bine koje su napravljene sa ovim na&#269;inom pla&#263;anja i koje je odobreno pla&#263;anjem pla&#263;anjem, sa ovim statusom. (podrazumevana postavka:  "pla&#263;anje na &#269;ekanju ")');

define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_TITLE' , 'ID portala');
define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_DESC' , MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY);

define('MODULE_PAYMENT_BILLPAY_GS_SECURE_TITLE' , 'API lozinka');
define('MODULE_PAYMENT_BILLPAY_GS_SECURE_DESC' , MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY);

define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_TITLE', 'Javni API klju&#269;');
define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_DESC', MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY);

define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_TITLE' , 'Redosled prikaza');
define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_DESC' , 'Redosled prikazivanja. Prvo se prikazuje najmanji broj.');

define('MODULE_PAYMENT_BILLPAY_STATUS_TITLE' , 'Omogu&#263;en');
define('MODULE_PAYMENT_BILLPAY_STATUS_DESC' , '&#382;elite li da omogu&#263;ite ovaj na&#269;in pla&#263;anja?');

define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_TITLE' , 'Omogu&#263;i probni re&#382;im');
define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_DESC' , 'U probnom re&#382;imu prikazuju se detaljne poruke o gre&#353;ci. Treba ga deaktivirati u proizvodnom okru&#382;enju.');

define('MODULE_PAYMENT_BILLPAY_ZONE_TITLE' , 'Poreska zona');
define('MODULE_PAYMENT_BILLPAY_ZONE_DESC' , '');

define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_TITLE' , 'API baza URL adresa');
define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_DESC' , 'Podaci obezbe&#273;eni za pla&#263;anje. Upozorenje: URL adrese za Live i test sisteme su razli&#269;ite.');

define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_TITLE' , 'Test-API URL adresa');
define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_DESC' , 'Podaci obezbe&#273;eni za pla&#263;anje. Upozorenje: URL adrese za Live i test sisteme su razli&#269;ite.');

define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_TITLE' , 'Evidentiranje je omogu&#263;eno');
define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_DESC' , 'Ako je omogu&#263;eno, sva komunikacija &#263;e biti napisana u datoteci evidencije.');

define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_TITLE', 'Minimalna vrednost za porud&#382;binu');
define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_DESC', 'Za porud&#382;bine ispod ove vrednosti, ovaj na&#269;in pla&#263;anja &#263;e biti sakriven.');

define('MODULE_PAYMENT_BILLPAY_LOGPATH_TITLE', 'Putanja vo&#273;enja evidencije');
define('MODULE_PAYMENT_BILLPAY_LOGPATH_DESC', '');

define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_TITLE', 'X_FORWARDED_FOR dozvoljeno');
define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_DESC', 'Aktivirajte ovu funkciju ako va&#353;a prodavnica koristi sistem za oblak');

// Payment selection texts
define('MODULE_PAYMENT_BILLPAY_TEXT_BIRTHDATE', 'Datum ro&#273;enja');


define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE', 'Odredite datum ro&#273;enja na stranici naloga.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_GENDER', 'Molimo vas da postavite svoj rod na stranici naloga.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_TITLE', 'Unesite naslov');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE_AND_GENDER', 'Molimo vas da postavite datum ro&#273;enja i Rod na stranici naloga.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_PHONE', 'Unesite Va&#353; broj telefona.');
define('MODULE_PAYMENT_BILLPAY_TEXT_NOTE', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_REQ', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_GENDER', 'Pol');
define('MODULE_PAYMENT_BILLPAY_TEXT_SALUTATION', 'Oslovljavanje');
define('MODULE_PAYMENT_BILLPAY_TEXT_MALE', 'Mu&#353;karac');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEMALE', '&#382;ena');
define('MODULE_PAYMENT_BILLPAY_TEXT_MR', 'G');
define('MODULE_PAYMENT_BILLPAY_TEXT_MRS', 'G-&#273;a');

define('JS_BILLPAY_EULA', '* Prihvatite EULA da biste nastavili.\n\n');
define('JS_BILLPAY_DOBDAY', '* Odredite datum ro&#273;enja na stranici naloga.\n\n');
define('JS_BILLPAY_DOBMONTH', JS_BILLPAY_DOBDAY);
define('JS_BILLPAY_DOBYEAR', JS_BILLPAY_DOBDAY);
define('JS_BILLPAY_GENDER', '* Molimo vas da postavite svoj rod na stranici naloga.\n\n');

define('JS_BILLPAY_CODE', '* Navedite &#353;ifru ra&#269;una u banci.\n\n');
define('JS_BILLPAY_NUMBER', '* Navedite broj ra&#269;una u banci.\n\n');
define('JS_BILLPAY_NAME', '* Navedite ime nosioca izabranog ra&#269;una u banci.\n\n');
define('JS_BILLPAY_PHONE', '* Navedite va&#353; broj telefona.\n\n');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_EULA', '* Prihvatite EULA da biste nastavili.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB', 'Unijeli ste neta&#269;an datum ro&#273;enja!');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DEFAULT', 'Unutra&#353;nja gre&#353;ka, odaberite drugi na&#269;in pla&#263;anja.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_SHORT', 'Unutra&#353;nja gre&#353;ka, odaberite drugi na&#269;in pla&#263;anja.');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_CREATED_COMMENT', 'Faktura kreirana.');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_COMMENT', 'Narud&#382;ba je otkazana od strane BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DUEDATE', 'Nije mogu&#263;e zapo&#269;eti pla&#263;anje jer je datum dospe&#263;a prazan.');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_CODE', '* Ispravite &#353;ifru ra&#269;una u banci.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NUMBER', '* Ispravite broj ra&#269;una u banci.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NAME', '* Ispravite ime nosioca izabranog ra&#269;una u banci.');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_PHONE', '* Navedite va&#353; broj telefona.');

define('MODULE_PAYMENT_BILLPAY_TEXT_CREATE_INVOICE', 'Kreiraj fakturu za pla&#263;anje Pla&#263;ajte odmah?');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_ORDER', 'Otka&#382;i pla&#263;anje na naplatu?');

define('MODULE_PAYMENT_BILLPAY_TEXT_ACCOUNT_HOLDER', 'Nosilac naloga');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN', 'IBAN');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK_NAME', 'Banka');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC', 'BIC');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_REFERENCE', 'Broj fakture');
define('MODULE_PAYMENT_BILLPAY_TEXT_PHONE', 'Broj telefona');

define('MODULE_PAYMENT_BILLPAY_TEXT_BANKDATA', 'Navedite detalje o ra&#269;unu u banci.');

define('MODULE_PAYMENT_BILLPAY_DUEDATE_TITLE', 'Datum dospe&#263;a');

define('MODULE_PAYMENT_BILLPAY_TEXT_PURPOSE', 'Kori&#353;&#263;enje');

define('MODULE_PAYMENT_BILLPAY_TEXT_ADD', 'plus');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE', 'Naknadu');

define('MODULE_PAYMENT_BILLPAY_TEXT_SANDBOX', 'Nalazite se u "sandbox" re&#382;imu:');
define('MODULE_PAYMENT_BILLPAY_TEXT_CHECK', 'Nalazite se u re&#382;imu prihvatanja:');
define('MODULE_PAYMENT_BILLPAY_UNLOCK_INFO', 'Informacije sa servera u&#382;ivo');


define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_TITLE', 'Tip kupaca');
define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_DESC', '&#382;elite da ponudite na&#269;in pla&#263;anja za privatne klijente (B2C), poslovne (B2B) ili obe (obe)?');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_NAME_TEXT', 'Ime preduze&#263;a');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_TEXT', 'Zakonski oblik');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_SELECT_HTML', "");
define('MODULE_PAYMENT_BILLPAY_B2B_CHOOSE_CLIENT_TEXT', 'Tip klijenta');
define('MODULE_PAYMENT_BILLPAY_B2B_PRIVATE_CLIENT_TEXT', 'Privatni klijent');
define('MODULE_PAYMENT_BILLPAY_B2B_BUSINESS_CLIENT_TEXT', 'Poslovni klijent');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_FIELD_EMPTY', 'Unesite ime preduze&#263;a');
define('MODULE_PAYMENT_BILLPAY_B2B_LEGAL_FORM_FIELD_EMPTY', 'Unesite zakonski oblik');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_EMPTY', 'Molimo navedite ime vlasnika');
define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_EMPTY', 'Molimo navedite ime vlasnika');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_EMPTY', 'Navedite porez na dodatu broj');

define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_TEXT', 'Registarski broj');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_TEXT', 'Poreski ID');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_TEXT', 'Ime vlasnika');
define('MODULE_PAYMENT_BILLPAY_B2B_CONTACT_PERSON_TEXT', 'Kontakt osoba');

define('MODULE_ORDER_TOTAL_BILLPAY_FEE_FROM_TOTAL', 'iznosa fakture');

define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_TITLE', 'Lokalno kodiranje');
define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_DESC', 'Da li va&#353;a lokacija koristi lokalno kodiranje (osim UTF-8)?');

define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER', 'Nalog nije aktiviran putem pla&#263;anja. Aktivirajte porud&#382;binu neposredno pre nego &#353;to je Dispe&#269;er u koji ste postavili odgovaraju&#263;i status.');
define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER_WARNING', '<strong style="color:red"> Upozorenje: pla&#263;anje jo&#353; uvek nije po&#269;elo pla&#263;anjem pla&#263;anjem!</strong><br/>');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDRESS', 'Ova adresa nije dozvoljena na porud&#382;binama sa BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRODUCT', 'Ova proizvod nije dozvoljena na porud&#382;binama sa BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PAYMENT', 'Ova pla&#263;anje nije dozvoljena na porud&#382;binama sa BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CURRENCY', 'Ova kurs nije dozvoljena na porud&#382;binama sah BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_GENERAL', 'Ne mo&#382;ete ovo da uradite zbog na&#269;ina pla&#263;anja za naplatu.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_HIGHER_QUANTITY', 'Ne mo&#382;ete naru&#269;iti vi&#353;e proizvoda nego kod originalnog redosleda BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_QUANTITY', 'Ne mo&#382;ete naru&#269;iti negativnu koli&#269;inu proizvoda sa BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_TAX', 'Pode&#353;avanje poreske stope za porud&#382;binu nije dozvoljeno.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRICE', 'Pode&#353;avanje cene za porud&#382;binu nije dozvoljeno.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ID', 'Prilago&#273;avanje ID-a proizvoda za nalog nije dozvoljeno.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ZERO_REDUCTION', 'Smanjenje nulte redukcije za porud&#382;binu nije dozvoljeno.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_REDUCTION', 'Negativna redukcija za red nije dozvoljena.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_SHIPPING', 'Negativna isporuka za porud&#382;binu nije dozvoljena.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_INCREASED_SHIPPING', 'Pove&#263;ana isporuka za porud&#382;binu nije dozvoljena.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDED_SHIPPING', 'Dodato isporuku za porud&#382;binu nije dozvoljeno.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_FORBIDDEN', 'Ova radnja nije dozvoljena na porud&#382;binama za pla&#263;anje.');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_NOT_PROCESSED', 'Pa&#382;nja! Adaptacija porud&#382;bina bez poreskih artikala se ne &#353;alje automatski da bi se pla&#263;ala zbog gre&#353;ke u softveru pogona. Ru&#269;no korigujte iznos u usluzi za pla&#263;anje pla&#263;anja (https://admin.billpay.de)!');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_ERROR_CUSTOMER_CARE', 'Adaptacija reda sa Pla&#263;kom za pla&#263;anje nije uspela. Odmah se obratite korisni&#269;koj slu&#382;bi (haendler@billpay.de)!');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADJUST_CHARGEABLE', 'Prilago&#273;avanje opcije za pla&#263;eni proizvod nije dozvoljeno.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADD_CHARGEABLE', 'Prilago&#273;avanje opcije za pla&#263;eni proizvod nije dozvoljeno.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_REMOVE_CHARGEABLE', 'Prilago&#273;avanje opcije za pla&#263;eni proizvod nije dozvoljeno.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CONTACT_BILLPAY', 'Do&#353;lo je do gre&#353;ke. Obratite se korisni&#269;koj slu&#382;bi za pla&#263;anje (haendler@billpay.de).');



define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_PARTIAL_CANCEL', 'Delimi&#269;ni otkazivanje je uspe&#353;no poslato na BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_EDIT_CART_CONTENT', 'Ure&#273;ivanje sadr&#382;aja korpe je uspe&#353;no poslato na BillPay.');

define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_TEST' , 'Probni re&#382;im');
define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_LIVE' , 'Live-mode');


// -- Order States
// waiting for prepayment or decision
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_EN' , 'BillPay neobra&#273;eno');
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_DE' , 'BillPay nije dovr&#353;eno');

// ready to activate
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_EN' , 'BillPay odobreno');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_DE' , 'BillPay odobreno');

// invoice created
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_EN' , 'BillPay Aktiviran');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_DE' , 'BillPay Aktiviran');

// order cancelled or timed out from pending
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_EN' , 'BillPay Otkazao');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_DE' , 'BillPay Otkazao');

// error in order
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_EN' , 'BillPay Gre&#353;ka!');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_DE' , 'BillPay Gre&#353;ka!');
// -- end of Order States


define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_DESC', 'BillPay - &#269;ekanje na interno');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_DESC', 'BillPay - Odobrio');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_DESC', 'BillPay - Aktiviran');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_DESC', 'BillPay - Otkazao');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_DESC', 'BillPay - Zbog gre&#353;ke, ova porud&#382;bina zahteva ru&#269;nu ispravku. Obratite se podr&#353;ci za pla&#263;anje ');

define('MODULE_PAYMENT_BILLPAY_SALUTATION_MALE', MODULE_PAYMENT_BILLPAY_TEXT_MR);
define('MODULE_PAYMENT_BILLPAY_SALUTATION_FEMALE', MODULE_PAYMENT_BILLPAY_TEXT_MRS);

define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO',              'Prenesite ukupan iznos sa brojem transakcije pla&#263;anja na naplatu (%1$s) u okviru roka otplate od %2$02s.%3$02s.%4$04s na slede&#263;i nalog:');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_NO_DUEDATE',   'Prenesite ukupan iznos sa brojem transakcije pla&#263;anja na naplatu (%1 $ s) u okviru roka otplate koji je napisan na fakturi na slede&#263;i ra&#269;un:');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO1', 'Odlu&#269;ili ste se da kupite na ra&#269;unu uz pla&#263;anje. Molimo vas da platite ukupnu sumu do kraja ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO2', ' na slede&#263;i nalog: ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO3', 'Datum prijema sa fakturom');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_MAIL', '<br/>Prenesite ukupan iznos, u kome se navodi broj transakcije fakturisanja u svrhu kori&#353;&#263;enja (%s) na slede&#263;i nalog do datuma uplate koju primite sa fakturom:');

define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO1', 'Za ovu porud&#382;binu po fakturi, izgradnju ');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO2', ' Prikupljene');

// Plugin 1.7
define('MODULE_PAYMENT_BILLPAY_THANK_YOU_TEXT', 'Hvala vam &#353;to ste izabrali fakturisanje za pla&#263;anje prilikom kupovine.');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT', 'Prenesite %1$s%2$s za %3$s, koji navodi referencu na slede&#263;i nalog:');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT_ADD_CH', 'Isplate na &#353;alteru za Post Office-u &#263;e biti dodatni tro&#353;kovi. Prilikom isplate preko slip depozita, prenesite dodatnih %1$s%2$s.');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE', 'Primaocu pla&#263;anja');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE_CH', '&#353;vajcarska filijala (Regensdorf)');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN_CH', 'Broj ra&#269;una');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC_CH', 'BC Broj ');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK', 'Banka');
define('MODULE_PAYMENT_BILLPAY_TEXT_TOTAL_AMOUNT', 'Iznos');
define('MODULE_PAYMENT_BILLPAY_UPDATE_AVAILABLE', 'Dostupna je verzija %2$s komponente za pla&#263;anje pla&#263;anja na naplatu (trenutno je instalirana: %1$s). Kliknite na dugme <a href="%3$s">ovde</a> da skine&#353;.');