<?php
/**
 *
 * @package    micropayment
 * @copyright  Copyright (c) 2015 Micropayment GmbH (http://www.micropayment.de)
 * @author     micropayment GmbH <shop-plugins@micropayment.de>
 */

define('MODULE_PAYMENT_MCP_SERVICE_STATUS_TITLE','Status');
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_DESC','Dozvoli micropayment&trade; moduo');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_TITLE','Postavljanje');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_DESC','Pozicija u listi');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_TITLE','<div style="color:#850000;font-style: italic;">Slede&#263;e postavke konfiguracije se koriste globalno za sve micropayment&trade; module pla&#263;anja i treba da budemo pode&#353;eni samo jednom</div><br />ID naloga');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_DESC','ID naloga od micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_TITLE','Klju&#269; naloga');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_DESC','Klju&#269; naloga od micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_TITLE','&#353;ifra projekta');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_DESC','&#353;ifra projekta od micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_TITLE','Tekst pla&#263;anja');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_DESC','Ova opcija je prikazana na redu fakture i naslova stranice u prozoru uplate. Kod &#269;uvara mesta #ORDER# mogu&#263;e je automatski integrisati ID porud&#382;bine u fakturu ili prozor za pla&#263;anje. Npr. "Narud&#382;ba: #ORDER#" bi prikazalo "Narud&#382;ba: 0000023"');

define('MODULE_PAYMENT_MCP_SERVICE_THEME_TITLE','Tema');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_DESC','Tema za prozore pla&#263;anja, podrazumevana vrednost je x1');

define('MODULE_PAYMENT_MCP_SERVICE_GFX_TITLE','Kod logoa');
define('MODULE_PAYMENT_MCP_SERVICE_GFX_DESC','Ovde unesite kod logoa');

define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_TITLE','Parametar slike u pozadini');
define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_DESC','Ovde unesite parametar slike u pozadini.');

define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_TITLE','Boja pozadine');
define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_DESC','Ovde unesite boju pozadine u HEX zapisu.');

define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_TITLE','Ime bezbednosnog polja');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_DESC','Da biste dobili ve&#263;u bezbednost u komunikaciji sa servera na serveru, unesite ime koje samo vi znate znate.');

define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_TITLE','Vrednost bezbednosnog polja');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_DESC','Unesite privatni bezbednosni kod koji ne bi trebalo da bude prosle&#273;en kupcima. Na mikroplatnom &trade; server &#263;e obraditi ovu &#353;ifru sa svakim obave&#353;tenjem o pobolj&#353;avanju bezbednosti.');

define('MODULE_PAYMENT_MCP_SERVICE_SUCCESS_TRANSACTION','Porud&#382;bina je pla&#263;ena. &#353;ifra za potvrdu identiteta je: %s');
define('MODULE_PAYMENT_MCP_SERVICE_IP_NOT_ALLOWED','IP-adresa je neva&#382;e&#263;a.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_TERMINATED','Zahtev je neva&#382;e&#263;i.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_UNKNOWN_ORDER_ID','Ova porud&#382;bina ne postoji');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_SECRET_FIELD_MISSMATCH','Pogre&#353;no polje bezbednosti!');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_AMOUNT_MISSMATCH','Zbir ne odgovara pla&#263;enim iznosima! Trenutno: %s dospeli saldo: %s');
define('MODULE_PAYMENT_MCP_SERVICE_PAYIN_MESSAGE','%s %s je pla&#263;en.');
define('MODULE_PAYMENT_MCP_SERVICE_UNKNOWN_FUNCTION','Nepoznata funkcija');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AUTH_CODE','Neva&#382;e&#263;a &#353;ifra potvrde identiteta');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AMOUNT_VALUE','Neva&#382;e&#263;i iznos');

define('MODULE_PAYMENT_MCP_SERVICE_PENDING_PAYMENT','Uplata na &#269;ekanju. Automatsko otkazivanje %s');
define('MODULE_PAYMENT_MCP_PREPAY_EXPIRED','Bez prijema uplate, automatsko otkazivanje');

define('MODULE_PAYMENT_MCP_SERVICE_REFUND_COMMENT','Povra&#263;aj sredstava je podignut.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_TITLE','Status naloga: u obradi');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_DESC','Kupac pla&#263;a porud&#382;binu');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_TITLE','Status naloga: pla&#263;en');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_DESC','Kupac je uspe&#353;no pla&#263;en.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_TITLE','Status naloga: otkazano/gre&#353;ka');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_DESC','Ako do&#273;e do knji&#382;enja unazad, ovaj status je postavljen');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_TITLE','Status naloga: Refinansirana');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_DESC','Ako je podignut povra&#263;aj, ovaj status je postavljen.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_TITLE','Status naloga: pregled pla&#263;anja');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_DESC','Ovaj status je postavljen ako je do&#353;lo do problema i potrebno je redigovati pla&#263;anje');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_TITLE','Status naloga: neusagla&#353;enost');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_DESC','logi&#269;an tok pla&#263;anja je prekinut. Pregledajte ovaj redosled.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_TITLE',' Status naloga: Prepla&#263;anje-delimi&#269;no pla&#263;anje');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_DESC','Ova porud&#382;bina jo&#353; nije u potpunosti pla&#263;ena');

define('MODULE_PAYMENT_MCP_SERVICE_NEW_VERSION','%s<div class="mcp_notice_register">Nova verzija mikroplatnog modula &trade; platne module su omogu&#263;eni. <a href="http://ecommerce.micropayment.de/modifiedshop/?lang=EN" target="_new">Klikni ovde za skidanje.</a></div>');

define('MODULE_PAYMENT_MCP_SERVICE_NO_ACCOUNT','%s<div class="mcp_notice_register">Da bi se obezbedila funkcionalnost mikropla&#263;anja &trade; platnih modula, prvo registrujte nalog i kreirajte projekat. <a href="https://%s.micropayment.de" target="blank">Kliknite ovde da biste se registrovali.</a></div>');
define('MODULE_PAYMENT_MCP_SERVICE_CSS','
<style type="text/css">
.mcp_notice_register {
    margin-bottom: 5px;
    background-image: url("../images/micropayment/logo_small.png");
	background-position: 10px 10px;
	background-color: #ffdede;
    background-repeat: no-repeat;
    background-size: 100px;
    height: 40px;
	padding-left:130px;
	padding-top: 18px;
	border: 1px #cdcdcd solid;
}
</style>
');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_GERMAN_TITLE','Pla&#263;anje &#269;eka');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_GERMAN_TITLE','Akontacija/avansna uplata, delimi&#269;na uplata');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_GERMAN_TITLE','u toku');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_GERMAN_TITLE','Otkazao');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_GERMAN_TITLE','Provera redosleda');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_GERMAN_TITLE','Doga&#273;aj-problem!');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ENGLISH_TITLE','pla&#263;anje na &#269;ekanju');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ENGLISH_TITLE','pretplata, plata');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ENGLISH_TITLE','Obrada');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ENGLISH_TITLE','Otkazao');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ENGLISH_TITLE','Pregled pla&#263;anja');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ENGLISH_TITLE','doga&#273;aj-konflikt!');

define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_TITLE','Brisanje nepla&#263;enih porud&#382;bina');
define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_DESC','Koliko dana mo&#382;e da bude porud&#382;bina sa statusom  "uplata na &#269;ekanju " pre brisanja dugmeta  "Obri&#353;i stare porud&#382;bine ". Va&#382;no: porud&#382;bine za akontaciju/avansnu uplatu ne&#263;e biti izbrisane.');