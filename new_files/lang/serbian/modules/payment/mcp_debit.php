<?php
/**
 *
 * @package    micropayment
 * @copyright  Copyright (c) 2015 Micropayment GmbH (http://www.micropayment.de)
 * @author     micropayment GmbH <shop-plugins@micropayment.de>
 */
require_once('mcp_service.php');
define('MODULE_PAYMENT_MCP_DEBIT_TEXT_DESCRIPTION', 'micropayment&trade; debitni modul
<br /><br />
veze<br />
<b>alati</b><br />
<a target="_new" href="../callback/micropayment/cleanup.php">
    <input type="button" value="clear old orders">
</a><br />
<br />
<b>Eksterni</b><br />
<a href="http://ecommerce.micropayment.de/download/modified/micropayment_modified-shop_2.x.pdf?version=2.1.0">
    <input type="button" value="Manual">
</a>&nbsp;
<a target="_new" href="https://r120.micropayment.de">
    <input type="button" value="Micropayment register">
    </a>
');
define('MODULE_PAYMENT_MCP_DEBIT_TEXT_TITLE', 'micropayment&trade; debit');
define('MODULE_PAYMENT_MCP_DEBIT_TEXT_TITLE_EXTERN', 'Debit');
define('MODULE_PAYMENT_MCP_DEBIT_TEXT_INFO', '
<div style="margin:10px;">
<div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div><div style="float:left;">
<b>Molimo vas da na ruci imate detalje o debitnoj kartici.</b><br />
Da biste zaklju&#269;ili va&#353;u narud&#382;binu, sada &#263;ete biti prosle&#273;eni na&#353;em dobavlja&#269;u usluga pla&#263;anja, micropayment&trade;.<br /><br />
&#10004; sigurno &nbsp; &#10004; jednostavno &nbsp; &#10004; nije potrebna registracija
</div>
');

define('MODULE_PAYMENT_MCP_DEBIT_STATUS_TITLE','Debit');
define('MODULE_PAYMENT_MCP_DEBIT_STATUS_DESC','Debit modul od micropayment&trade;');
define('MODULE_PAYMENT_MCP_DEBIT_MINIMUM_AMOUNT_TITLE','Minimalan iznos');
define('MODULE_PAYMENT_MCP_DEBIT_MINIMUM_AMOUNT_DESC','Minimalan iznos za ovaj na&#269;in pla&#263;anja');
define('MODULE_PAYMENT_MCP_DEBIT_MAXIMUM_AMOUNT_TITLE','Maksimalni iznos');
define('MODULE_PAYMENT_MCP_DEBIT_MAXIMUM_AMOUNT_DESC','Maksimalni iznos za ovaj na&#269;in pla&#263;anja');
define('MODULE_PAYMENT_MCP_DEBIT_SORT_ORDER_TITLE','Postavljanje');
define('MODULE_PAYMENT_MCP_DEBIT_SORT_ORDER_DESC','Postavljanje u selekciji na&#269;ina pla&#263;anja');
define('MODULE_PAYMENT_MCP_DEBIT_ALLOWED_TITLE','Izbor zemlje');
define('MODULE_PAYMENT_MCP_DEBIT_ALLOWED_DESC','Dozvoli porud&#382;bine samo iz ovih zemalja (lista sa zarezom DE,EN)');

?>