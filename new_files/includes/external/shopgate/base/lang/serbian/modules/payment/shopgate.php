<?php
/**
 * Shopgate GmbH
 *
 * URHEBERRECHTSHINWEIS
 *
 * Dieses Plugin ist urheberrechtlich geschützt. Es darf ausschließlich von Kunden der Shopgate GmbH
 * zum Zwecke der eigenen Kommunikation zwischen dem IT-System des Kunden mit dem IT-System der
 * Shopgate GmbH über www.shopgate.com verwendet werden. Eine darüber hinausgehende Vervielfältigung, Verbreitung,
 * öffentliche Zugänglichmachung, Bearbeitung oder Weitergabe an Dritte ist nur mit unserer vorherigen
 * schriftlichen Zustimmung zulässig. Die Regelungen der §§ 69 d Abs. 2, 3 und 69 e UrhG bleiben hiervon unberührt.
 *
 * COPYRIGHT NOTICE
 *
 * This plugin is the subject of copyright protection. It is only for the use of Shopgate GmbH customers,
 * for the purpose of facilitating communication between the IT system of the customer and the IT system
 * of Shopgate GmbH via www.shopgate.com. Any reproduction, dissemination, public propagation, processing or
 * transfer to third parties is only permitted where we previously consented thereto in writing. The provisions
 * of paragraph 69 d, sub-paragraphs 2, 3 and paragraph 69, sub-paragraph e of the German Copyright Act shall remain unaffected.
 *
 * @author Shopgate GmbH <interfaces@shopgate.com>
 */

define('MODULE_PAYMENT_SHOPGATE_TEXT_TITLE', 'Tr&#382;ni punkt');
define('MODULE_PAYMENT_SHOPGATE_TEXT_DESCRIPTION', 'Tr&#382;ni punkt - Mobilna kupovina.');
define('MODULE_PAYMENT_SHOPGATE_TEXT_INFO', 'Porud&#382;bine su ve&#263; pla&#263;ene u &#353;openu.');

define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_SHIPPING', 'Isporuke');
define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_SUBTOTAL', 'Podzbir');
define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_PAYMENTFEE', 'Naknade za pla&#263;anje');
define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_TOTAL', 'Ukupno');

define('MODULE_PAYMENT_SHOPGATE_TEXT_EMAIL_FOOTER', "");
define('MODULE_PAYMENT_SHOPGATE_STATUS_TITLE', 'Aktiviran je modul za platni prelaz:');

define('MODULE_PAYMENT_SHOPGATE_STATUS_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_ALLOWED_TITLE', '');
define('MODULE_PAYMENT_SHOPGATE_ALLOWED_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_PAYTO_TITLE', '');
define('MODULE_PAYMENT_SHOPGATE_PAYTO_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_SORT_ORDER_TITLE', 'Redosled sortiranja prikaza');
define('MODULE_PAYMENT_SHOPGATE_SORT_ORDER_DESC', 'Redosled sortiranja prikaza. Prvo prikazuje najni&#382;a.');
define('MODULE_PAYMENT_SHOPGATE_ZONE_TITLE', '');
define('MODULE_PAYMENT_SHOPGATE_ZONE_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_ORDER_STATUS_ID_TITLE', 'Status');
define('MODULE_PAYMENT_SHOPGATE_ORDER_STATUS_ID_DESC', 'Postavite status porud&#382;bina koje je uvezao ovaj modul na:');
define('MODULE_PAYMENT_SHOPGATE_ERROR_READING_LANGUAGES', 'Gre&#353;ka prilikom konfigurisanja jezi&#269;kih postavki.');
define('MODULE_PAYMENT_SHOPGATE_ERROR_LOADING_CONFIG', 'Gre&#353;ka pri u&#269;itavanju konfiguracije.');
define(
'MODULE_PAYMENT_SHOPGATE_ERROR_SAVING_CONFIG',
    'Gre&#353;ka pri &#269;uvanju konfiguracije. ' .
    'Proverite dozvole (777) za fasciklu ' .
    '&quot;/shopgate_library/config&quot; komponente za pakovanje.'
);

define("MODULE_PAYMENT_SHOPGATE_LABEL_NEW_PRODUCTS", "Novi proizvodi");
define("MODULE_PAYMENT_SHOPGATE_LABEL_SPECIAL_PRODUCTS", "Posebni proizvodi");
defined('SHOPGATE_ORDER_CUSTOM_FIELD') OR define('SHOPGATE_ORDER_CUSTOM_FIELD', 'Prilago&#273;eno polje ovog naloga:');

define("SHOPGATE_COUPON_ERROR_NEED_ACCOUNT", "Treba da se prijavite da biste koristili ovaj kupon");
define("SHOPGATE_COUPON_ERROR_RESTRICTED_PRODUCTS", "Ovaj kupon je ograni&#269;en na posebne proizvode");
define("SHOPGATE_COUPON_ERROR_RESTRICTED_CATEGORIES", "Ovaj kupon je ograni&#269;en na posebne kategorije");
define("SHOPGATE_COUPON_ERROR_MINIMUM_ORDER_AMOUNT_NOT_REACHED", "Ovaj kupon ima minimalnu koli&#269;inu porud&#382;bine koja nije dostignuta");
