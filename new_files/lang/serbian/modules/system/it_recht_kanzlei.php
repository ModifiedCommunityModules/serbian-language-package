<?php
/* -----------------------------------------------------------------------------------------
   $Id: it_recht_kanzlei.php 11998 2019-07-23 16:07:31Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

require_once(DIR_FS_CATALOG.'api/it-recht-kanzlei/classes/class.api_it_recht_kanzlei.php');
$api_it_recht_kanzlei = new api_it_recht_kanzlei();

define('MODULE_API_IT_RECHT_KANZLEI_TEXT_TITLE', 'IT-Recht Kanzlei AGB-Schnittstelle v'.$api_it_recht_kanzlei->modulversion);
define('MODULE_API_IT_RECHT_KANZLEI_TEXT_DESCRIPTION', 'IT-Recht Kanzlei - Automatsko a&#382;uriranje za automatske tekstove<br/><br/><b>Pa&#382;nja:</b> Pre koriš&#263;enja modula, dodela stranica sadr&#382;aja se mora u&#269;initi.<hr noshade>');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_TITLE', 'Status');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_DESC', 'Status modula');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_TITLE', 'Auth-Token');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_DESC', 'Auth-Token morate re&#263;i IT-Recht Kanzlei.');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_TITLE', 'API Verzija');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_DESC', 'Ovo bi trebalo da se promeni samo ako vam je re&#269;eno da je ona prava. (Podrazumevano: 1.0)');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_TITLE', '<hr noshade>Uslovi pravnog teksta');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_DESC', 'Odredite na kojoj stranici &#263;e ovaj zakonski tekst biti automatski umetnut.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_TITLE', 'Privatnost u pravnom tekstu');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_DESC', 'Odredite na kojoj stranici &#263;e ovaj zakonski tekst biti automatski umetnut.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_TITLE', 'Privatnost u pravnom tekstu');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_DESC', 'Odredite na kojoj stranici &#263;e ovaj zakonski tekst biti automatski umetnut.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_TITLE', 'Privatnost u pravnom tekstu');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_DESC', 'Odredite na kojoj stranici &#263;e ovaj zakonski tekst biti automatski umetnut.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_TITLE', '<hr noshade>Izbor termina PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_DESC', 'Uputstvo da li &#263;e uslovi pravnog teksta biti dostupni u PDF formatu..');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_TITLE', 'Izbor smernica za privatnost PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_DESC', 'Uputstvo da li &#263;e pravni tekst smernica za privatnost biti raspolo&#382;iv u PDF formatu.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_TITLE', 'Odabir opoziva PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_DESC', 'Uputstvo da li pravni tekst opoziva da bude dostupan kao PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_TITLE', '<hr noshade>Lokacija PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_DESC', 'Navedite lokaciju PDF pravnih tekstova.');

?>