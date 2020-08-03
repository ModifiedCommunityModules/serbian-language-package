<?php
/* -----------------------------------------------------------------------------------------
   $Id: chp.php 5123 2013-07-18 11:49:11Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(chp.php,v 1.01 2003/02/18 03:30:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (chp.php,v 1.4 2003/08/1); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   swiss_post_1.02       	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/


define('MODULE_SHIPPING_CHP_TEXT_TITLE', '&#352;vajcarska po&#353;ta');
define('MODULE_SHIPPING_CHP_TEXT_DESCRIPTION', '&#352;vajcarska po&#353;ta');
define('MODULE_SHIPPING_CHP_TEXT_WAY', 'Dopremi do');
define('MODULE_SHIPPING_CHP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_CHP_INVALID_ZONE', 'Na &#382;alost, nije mogu&#263;e uputiti u ovu zemlju');
define('MODULE_SHIPPING_CHP_UNDEFINED_RATE', 'Tro&#353;kovi prosle&#273;ivanja ne mogu biti izra&#269;unati za momenat');

define('MODULE_SHIPPING_CHP_STATUS_TITLE' , '&#352;vajcarska po&#353;ta');
define('MODULE_SHIPPING_CHP_STATUS_DESC' , '&#381;elite li da ponudite isporuku sa &#353;vajcarskom po&#353;tom?');
define('MODULE_SHIPPING_CHP_HANDLING_TITLE' , 'Naknada za rukovanje');
define('MODULE_SHIPPING_CHP_HANDLING_DESC' , 'Naknada za rukovanje u CHF');
define('MODULE_SHIPPING_CHP_TAX_CLASS_TITLE' , 'Porez');
define('MODULE_SHIPPING_CHP_TAX_CLASS_DESC' , 'Izaberite poresku stopu za isporuku.');
define('MODULE_SHIPPING_CHP_ZONE_TITLE' , 'Zona isporuke');
define('MODULE_SHIPPING_CHP_ZONE_DESC' , 'Ako odaberete zonu koja se koristi samo ove zone za isporuku.');
define('MODULE_SHIPPING_CHP_SORT_ORDER_TITLE' , 'Redosled prikaza');
define('MODULE_SHIPPING_CHP_SORT_ORDER_DESC' , 'najni&#263;i se prikazuju prvi.');
define('MODULE_SHIPPING_CHP_ALLOWED_TITLE' , 'Pojedina&#269;ne zone isporuke');
define('MODULE_SHIPPING_CHP_ALLOWED_DESC' , 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');

define('MODULE_SHIPPING_CHP_COUNTRIES_1_TITLE' , 'Zemlje zone 0');
define('MODULE_SHIPPING_CHP_COUNTRIES_1_DESC' , 'Unutra&#353;nja zona');
define('MODULE_SHIPPING_CHP_COST_ECO_1_TITLE' , 'Tabela dostave zone 0 do 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_1_DESC' , 'Tabela dostave unutra&#353;nje zone, bazirana na <b>\'ECO\'</b> do 30 kg transportne te&#382;ine.');
define('MODULE_SHIPPING_CHP_COST_PRI_1_TITLE' , 'Tabela dostave zone 0 do 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_1_DESC' , 'Tabela dostave unutra&#353;nje zone, bazirana na <b>\'PRI\'</b> do 30 kg transportne te&#382;ine.');

define('MODULE_SHIPPING_CHP_COUNTRIES_2_TITLE' , 'Zemlje zone 1');
define('MODULE_SHIPPING_CHP_COUNTRIES_2_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo zone 1 (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHP_COST_ECO_2_TITLE' , 'Tabela dostave zone 1 do 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_2_DESC' , 'Tabela dostave zone 1, bazirana na <b>\'ECO\'</b> do 30 kg transportne te&#382;ine.');
define('MODULE_SHIPPING_CHP_COST_PRI_2_TITLE' , 'Tabela dostave zone 1 do 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_2_DESC' , 'Tabela dostave zone 1, bazirana na <b>\'PRI\'</b> do 30 kg transportne te&#382;ine.');
define('MODULE_SHIPPING_CHP_COST_URG_2_TITLE' , 'Tabela dostave zone 1 do 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_2_DESC' , 'Tabela dostave zone 1, bazirana na <b>\'URG\'</b> do 30 kg transportne te&#382;ine.');

define('MODULE_SHIPPING_CHP_COUNTRIES_3_TITLE' , 'Zemlje zone 2');
define('MODULE_SHIPPING_CHP_COUNTRIES_3_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo zone 2 (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHP_COST_ECO_3_TITLE' , 'Tabela dostave zone 2 do 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_3_DESC' , 'Tabela dostave zone 2, bazirana na <b>\'ECO\'</b> do 30 kg transportne te&#382;ine.');
define('MODULE_SHIPPING_CHP_COST_PRI_3_TITLE' , 'Tabela dostave zone 2 do 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_3_DESC' , 'Tabela dostave zone 2, bazirana na <b>\'PRI\'</b> do 30 kg transportne te&#382;ine.');
define('MODULE_SHIPPING_CHP_COST_URG_3_TITLE' , 'Tabela dostave zone 2 do 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_3_DESC' , 'Tabela dostave zone 2, bazirana na <b>\'URG\'</b> do 30 kg transportne te&#382;ine.');

define('MODULE_SHIPPING_CHP_COUNTRIES_4_TITLE' , 'Zemlje zone 3');
define('MODULE_SHIPPING_CHP_COUNTRIES_4_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo zone 3 (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHP_COST_ECO_4_TITLE' , 'Tabela dostave zone 3 do 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_4_DESC' , 'Tabela dostave zone 3, bazirana na <b>\'ECO\'</b> do 30 kg transportne te&#382;ine.');
define('MODULE_SHIPPING_CHP_COST_PRI_4_TITLE' , 'Tabela dostave zone 3 do 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_4_DESC' , 'Tabela dostave zone 3, bazirana na <b>\'PRI\'</b> do 30 kg transportne te&#382;ine.');
define('MODULE_SHIPPING_CHP_COST_URG_4_TITLE' , 'Tabela dostave zone 3 do 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_4_DESC' , 'Tabela dostave zone 3, bazirana na <b>\'URG\'</b> do 30 kg transportne te&#382;ine.');

define('MODULE_SHIPPING_CHP_COUNTRIES_5_TITLE' , 'Zemlje zone 4');
define('MODULE_SHIPPING_CHP_COUNTRIES_5_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo zone 4 (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHP_COST_ECO_5_TITLE' , 'Tabela dostave zone 4 do 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_5_DESC' , 'Tabela dostave zone 4, bazirana na <b>\'ECO\'</b> do 30 kg transportne te&#382;ine.');
define('MODULE_SHIPPING_CHP_COST_PRI_5_TITLE' , 'Tabela dostave zone 4 do 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_5_DESC' , 'Tabela dostave zone 4, bazirana na <b>\'PRI\'</b> do 30 kg transportne te&#382;ine.');
define('MODULE_SHIPPING_CHP_COST_URG_5_TITLE' , 'Tabela dostave zone 4 do 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_5_DESC' , 'Tabela dostave zone 4, bazirana na <b>\'URG\'</b> do 30 kg transportne te&#382;ine.');

define('MODULE_SHIPPING_CHP_COUNTRIES_6_TITLE' , 'Zemlje zone 4');
define('MODULE_SHIPPING_CHP_COUNTRIES_6_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo zone 4 (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHP_COST_ECO_6_TITLE' , 'Tabela dostave zone 4 do 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_6_DESC' , 'Tabela dostave zone 4, bazirana na <b>\'ECO\'</b> do 30 kg transportne te&#382;ine.');
define('MODULE_SHIPPING_CHP_COST_PRI_6_TITLE' , 'Tabela dostave zone 4 do 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_6_DESC' , 'Tabela dostave zone 4, bazirana na <b>\'PRI\'</b> do 30 kg transportne te&#382;ine.');
define('MODULE_SHIPPING_CHP_COST_URG_6_TITLE' , 'Tabela dostave zone 4 do 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_6_DESC' , 'Tabela dostave zone 4, bazirana na <b>\'URG\'</b> do 30 kg transportne te&#382;ine.');

define('MODULE_SHIPPING_CHP_COUNTRIES_7_TITLE' , 'Zemlje zone 5');
define('MODULE_SHIPPING_CHP_COUNTRIES_7_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo zone 5 (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHP_COST_ECO_7_TITLE' , 'Tabela dostave zone 5 do 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_7_DESC' , 'Tabela dostave zone 5, bazirana na <b>\'ECO\'</b> do 30 kg transportne te&#382;ine.');
define('MODULE_SHIPPING_CHP_COST_PRI_7_TITLE' , 'Tabela dostave zone 5 do 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_7_DESC' , 'Tabela dostave zone 5, bazirana na <b>\'PRI\'</b> do 30 kg transportne te&#382;ine.');
define('MODULE_SHIPPING_CHP_COST_URG_7_TITLE' , 'Tabela dostave zone 5 do 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_7_DESC' , 'Tabela dostave zone 5, bazirana na <b>\'URG\'</b> do 30 kg transportne te&#382;ine.');
?>