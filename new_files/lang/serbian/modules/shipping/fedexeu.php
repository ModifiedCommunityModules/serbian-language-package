<?php
/* -----------------------------------------------------------------------------------------
   $Id: fedexeu.php 5121 2013-07-18 11:38:19Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce( fedexeu.php,v 1.01 2003/02/18 03:25:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (fedexeu.php,v 1.5 2003/08/1); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   fedex_europe_1.02        	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/



define('MODULE_SHIPPING_FEDEXEU_TEXT_TITLE', 'FedEx Express Evropa');
define('MODULE_SHIPPING_FEDEXEU_TEXT_DESCRIPTION', 'FedEx Express Evropa');
define('MODULE_SHIPPING_FEDEXEU_TEXT_WAY', 'Dopremiti u');
define('MODULE_SHIPPING_FEDEXEU_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_FEDEXEU_INVALID_ZONE', 'Na &#382;alost, nije mogu&#263;e dopremiti u ovu zemlju');
define('MODULE_SHIPPING_FEDEXEU_UNDEFINED_RATE', 'Tro&#353;kovi prosle&#273;ivanja ne mogu biti izra&#269;unati za momenat');

define('MODULE_SHIPPING_FEDEXEU_STATUS_TITLE' , 'FedEx Express Europe');
define('MODULE_SHIPPING_FEDEXEU_STATUS_DESC' , 'Ho&#263;e&#353; da ponudi&#353; FedEx Express Europe transport?');
define('MODULE_SHIPPING_FEDEXEU_HANDLING_TITLE' , 'Naknada za rukovanje');
define('MODULE_SHIPPING_FEDEXEU_HANDLING_DESC' , 'Ru&#269;ni tro&#353;ak za ovaj na&#269;in isporuke u evrima');
define('MODULE_SHIPPING_FEDEXEU_TAX_CLASS_TITLE' , 'Poreska stopa');
define('MODULE_SHIPPING_FEDEXEU_TAX_CLASS_DESC' , 'Koristite slede&#263;u poresku klasu za naknadu za isporuku.');
define('MODULE_SHIPPING_FEDEXEU_ZONE_TITLE' , 'Zona isporuke');
define('MODULE_SHIPPING_FEDEXEU_ZONE_DESC' , 'Ako je zona izabrana, omogu&#263;ite samo ovaj na&#269;in isporuke za tu zonu.');
define('MODULE_SHIPPING_FEDEXEU_SORT_ORDER_TITLE' , 'Redosled sortiranja');
define('MODULE_SHIPPING_FEDEXEU_SORT_ORDER_DESC' , 'Redosled sortiranja prikaza.');
define('MODULE_SHIPPING_FEDEXEU_ALLOWED_TITLE' , 'Dozvoljene zone isporuke');
define('MODULE_SHIPPING_FEDEXEU_ALLOWED_DESC' , 'Unesite zone <b>odvojeno</b> koje ovaj moduo mo&#382;e da koristi (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_1_TITLE' , 'Zona Evrope 1 zemalja');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_1_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 1 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_1_TITLE' , 'Tabela za isporuku za zonu 1 do 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_1_DESC' , 'Tabela za isporuku za zonu 1, zasnovana na  <b>\'PAK\'</b> do 2,50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_1_TITLE' , 'Tabela za isporuku za zonu 1 do 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_1_DESC' , 'Tabela za isporuku za zonu 1, zasnovana na  <b>\'ENV\'</b> do 60 DIN A4 strane i 0.50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_1_TITLE' , 'Tabela za isporuku za zonu 1 do 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_1_DESC' , 'Tabela za isporuku za zonu 1, zasnovana na  <b>\'BOX\'</b> do 10 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_1_TITLE' , 'Dodatna naknada do 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_1_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_1_TITLE' , 'Dodatna naknada do 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_1_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_1_TITLE' , 'Dodatna naknada do 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_1_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_2_TITLE' , 'Zona Evrope 2 zemalja');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_2_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 2 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_2_TITLE' , 'Tabela za isporuku za zonu 2 do 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_2_DESC' , 'Tabela za isporuku za zonu 2, zasnovana na  <b>\'PAK\'</b> do 2,50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_2_TITLE' , 'Tabela za isporuku za zonu 2 do 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_2_DESC' , 'Tabela za isporuku za zonu 2, zasnovana na  <b>\'ENV\'</b> do 60 DIN A4 strane i 0.50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_2_TITLE' , 'Tabela za isporuku za zonu 2 do 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_2_DESC' , 'Tabela za isporuku za zonu 2, zasnovana na  <b>\'BOX\'</b> do 10 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_2_TITLE' , 'Dodatna naknada do 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_2_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_2_TITLE' , 'Dodatna naknada do 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_2_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_2_TITLE' , 'Dodatna naknada do 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_2_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_3_TITLE' , 'Zona Evrope 3 zemalja');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_3_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 3 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_3_TITLE' , 'Tabela za isporuku za zonu 3 do 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_3_DESC' , 'Tabela za isporuku za zonu 3, zasnovana na  <b>\'PAK\'</b> do 2,50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_3_TITLE' , 'Tabela za isporuku za zonu 3 do 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_3_DESC' , 'Tabela za isporuku za zonu 3, zasnovana na  <b>\'ENV\'</b> do 60 DIN A4 strane i 0.50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_3_TITLE' , 'Tabela za isporuku za zonu 3 do 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_3_DESC' , 'Tabela za isporuku za zonu 3, zasnovana na  <b>\'BOX\'</b> do 10 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_3_TITLE' , 'Dodatna naknada do 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_3_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_3_TITLE' , 'Dodatna naknada do 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_3_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_3_TITLE' , 'Dodatna naknada do 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_3_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_4_TITLE' , 'Zona Evrope A zemalja');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_4_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone world A (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_4_TITLE' , 'Tabela za isporuku za zonu A do 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_4_DESC' , 'Tabela za isporuku za zonu A, zasnovana na  <b>\'PAK\'</b> do 2,50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_4_TITLE' , 'Tabela za isporuku za zonu A do 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_4_DESC' , 'Tabela za isporuku za zonu A, zasnovana na  <b>\'ENV\'</b> do 60 DIN A4 strane i 0.50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_4_TITLE' , 'Tabela za isporuku za zonu A do 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_4_DESC' , 'Tabela za isporuku za zonu A, zasnovana na  <b>\'BOX\'</b> do 10 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_4_TITLE' , 'Dodatna naknada do 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_4_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_4_TITLE' , 'Dodatna naknada do 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_4_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_4_TITLE' , 'Dodatna naknada do 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_4_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_5_TITLE' , 'Zona Evrope B zemalja');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_5_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone world B (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_5_TITLE' , 'Tabela za isporuku za zonu B do 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_5_DESC' , 'Tabela za isporuku za zonu B, zasnovana na  <b>\'PAK\'</b> do 2,50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_5_TITLE' , 'Tabela za isporuku za zonu B do 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_5_DESC' , 'Tabela za isporuku za zonu B, zasnovana na  <b>\'ENV\'</b> do 60 DIN A4 strane i 0.50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_5_TITLE' , 'Tabela za isporuku za zonu B do 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_5_DESC' , 'Tabela za isporuku za zonu B, zasnovana na  <b>\'BOX\'</b> do 10 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_5_TITLE' , 'Dodatna naknada do 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_5_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_5_TITLE' , 'Dodatna naknada do 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_5_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_5_TITLE' , 'Dodatna naknada do 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_5_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_6_TITLE' , 'Zona Evrope C zemalja');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_6_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone world C (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_6_TITLE' , 'Tabela za isporuku za zonu C do 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_6_DESC' , 'Tabela za isporuku za zonu C, zasnovana na  <b>\'PAK\'</b> do 2,50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_6_TITLE' , 'Tabela za isporuku za zonu C do 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_6_DESC' , 'Tabela za isporuku za zonu C, zasnovana na  <b>\'ENV\'</b> do 60 DIN A4 strane i 0.50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_6_TITLE' , 'Tabela za isporuku za zonu C do 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_6_DESC' , 'Tabela za isporuku za zonu C, zasnovana na  <b>\'BOX\'</b> do 10 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_6_TITLE' , 'Dodatna naknada do 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_6_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_6_TITLE' , 'Dodatna naknada do 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_6_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_6_TITLE' , 'Dodatna naknada do 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_6_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_7_TITLE' , 'Zona Evrope D zemalja');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_7_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone world D (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_7_TITLE' , 'Tabela za isporuku za zonu D do 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_7_DESC' , 'Tabela za isporuku za zonu D, zasnovana na  <b>\'PAK\'</b> do 2,50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_7_TITLE' , 'Tabela za isporuku za zonu D do 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_7_DESC' , 'Tabela za isporuku za zonu D, zasnovana na  <b>\'ENV\'</b> do 60 DIN A4 strane i 0.50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_7_TITLE' , 'Tabela za isporuku za zonu D do 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_7_DESC' , 'Tabela za isporuku za zonu D, zasnovana na  <b>\'BOX\'</b> do 10 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_7_TITLE' , 'Dodatna naknada do 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_7_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_7_TITLE' , 'Dodatna naknada do 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_7_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_7_TITLE' , 'Dodatna naknada do 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_7_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_8_TITLE' , 'Zona Evrope E zemalja');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_8_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone world E (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_8_TITLE' , 'Tabela za isporuku za zonu E do 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_8_DESC' , 'Tabela za isporuku za zonu E, zasnovana na  <b>\'PAK\'</b> do 2,50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_8_TITLE' , 'Tabela za isporuku za zonu E do 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_8_DESC' , 'Tabela za isporuku za zonu E, zasnovana na  <b>\'ENV\'</b> do 60 DIN A4 strane i 0.50 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_8_TITLE' , 'Tabela za isporuku za zonu E do 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_8_DESC' , 'Tabela za isporuku za zonu E, zasnovana na  <b>\'BOX\'</b> do 10 kg nosivosti.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_8_TITLE' , 'Dodatna naknada do 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_8_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_8_TITLE' , 'Dodatna naknada do 30 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_8_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_8_TITLE' , 'Dodatna naknada do 50 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_8_DESC' , 'Extra naknada za svaki dodatni 0,5 kg u EUR');
?>