<?php
/* -----------------------------------------------------------------------------------------
   $Id: ups.php 11585 2019-03-21 11:50:23Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(UPS.php,v 1.4 2003/02/18 04:28:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (UPS.php,v 1.5 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   German Post (Deutsche Post WorldNet)
   Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at
   Changes for personal use: Copyright (C) 2004 Comm4All, Bernd Blazynski | http://www.comm4all.com & http://www.cheapshirt.de

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/


define('MODULE_SHIPPING_UPS_TEXT_TITLE', 'Standard ujedinjenih paket usluga');
define('MODULE_SHIPPING_UPS_TEXT_DESCRIPTION', 'Standard ujedinjenih paket usluga - Shipping Module');
define('MODULE_SHIPPING_UPS_TEXT_WAY', 'Otpremi domxml_version()');
define('MODULE_SHIPPING_UPS_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_UPS_TEXT_FREE', 'Besplatni minimalni redosled isporuke: EUR ' . ((defined('MODULE_SHIPPING_UPS_FREEAMOUNT')) ? MODULE_SHIPPING_UPS_FREEAMOUNT : ''));
define('MODULE_SHIPPING_UPS_TEXT_LOW', 'Od EUR ' . ((defined('MODULE_SHIPPING_UPS_FREEAMOUNT')) ? MODULE_SHIPPING_UPS_FREEAMOUNT : '') . ' vrednost porud&#382;bine isporu&#269;ujemo va&#353;u narud&#382;bu po smanjenim tro&#353;kovima isporuke!');
define('MODULE_SHIPPING_UPS_INVALID_ZONE', 'Na &#382;alost, nije mogu&#263;e otpremiti u ovu zemlju');
define('MODULE_SHIPPING_UPS_UNDEFINED_RATE', 'Tro&#353;kovi isporuke se ne mogu izra&#269;unati za momenat');

define('MODULE_SHIPPING_UPS_STATUS_TITLE' , 'UPS Standard');
define('MODULE_SHIPPING_UPS_STATUS_DESC' , '&#381;elite li da ponudite isporuku sa standardom UPS-a?');
define('MODULE_SHIPPING_UPS_HANDLING_TITLE' , 'Naknada za rukovanje');
define('MODULE_SHIPPING_UPS_HANDLING_DESC' , 'Taksa za rukovanje u evrima');
define('MODULE_SHIPPING_UPS_TAX_CLASS_TITLE' , 'Taksa');
define('MODULE_SHIPPING_UPS_TAX_CLASS_DESC' , 'Izaberite poresku stopu za isporuku.');
define('MODULE_SHIPPING_UPS_ZONE_TITLE' , 'Zona isporuke');
define('MODULE_SHIPPING_UPS_ZONE_DESC' , 'Ako odaberete zonu koja se koristi samo ove zone za isporuku.');
define('MODULE_SHIPPING_UPS_SORT_ORDER_TITLE' , 'Redosled prikaza');
define('MODULE_SHIPPING_UPS_SORT_ORDER_DESC' , 'Prvo prikazani najmanji.');
define('MODULE_SHIPPING_UPS_ALLOWED_TITLE' , 'Pojedina&#269;ne zone isporuke');
define('MODULE_SHIPPING_UPS_ALLOWED_DESC' , 'Unesite zone <b>odvojeno</b> koje ovaj moduo mo&#382;e da koristi (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_TITLE' , 'Besplatan transport za nacionalne naloge');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_DESC' , 'Minimalna vrednost porud&#382;bine za besplatnu nacionalnu isporuku i manju isporuku u inostranstvu.');

define('MODULE_SHIPPING_UPS_COUNTRIES_1_TITLE' , 'UPS Standard zone 1 zemlje');
define('MODULE_SHIPPING_UPS_COUNTRIES_1_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 1 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPS_COST_1_TITLE' , 'Tabela za isporuku UPS-a u standardnoj zoni 1');
define('MODULE_SHIPPING_UPS_COST_1_DESC' , 'Isporuka na destinacije u zoni 1 na osnovu niza te&#382;ina porud&#382;bine. Primer: 4:5.15,... Te&#382;ina/ukupna vrednost manja ili jednaka 4 ko&#353;ta&#263;e 5,15 za zone 1 odredi&#353;ta.');

define('MODULE_SHIPPING_UPS_COUNTRIES_2_TITLE' , 'UPS Standard zone 3 zemlje');
define('MODULE_SHIPPING_UPS_COUNTRIES_2_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 3 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPS_COST_2_TITLE' , 'Tabela za isporuku UPS-a u standardnoj zoni 3');
define('MODULE_SHIPPING_UPS_COST_2_DESC' , 'Isporuka u zonu 3 odredi&#353;ta na osnovu niza te&#382;ina porud&#382;bine. Primer: 4:13.75,... Te&#382;ina/ukupna vrednost manja ili jednaka 4 ko&#353;ta&#263;e 13,75 za zone 3 destinacije.');

define('MODULE_SHIPPING_UPS_COUNTRIES_3_TITLE' , 'UPS Standard zone 31 zemlje');
define('MODULE_SHIPPING_UPS_COUNTRIES_3_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 31 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPS_COST_3_TITLE' , 'Tabela za isporuku UPS-a u standardnoj zoni 31');
define('MODULE_SHIPPING_UPS_COST_3_DESC' , 'Isporuka u zonu 31 destinacija na osnovu niza te&#382;ina porud&#382;bine. Primer: 4:23.50,... Te&#382;ina/ukupna vrednost manja ili jednaka 4 ko&#353;ta&#263;e 23,50 za zonu 31 destinacija.');

define('MODULE_SHIPPING_UPS_COUNTRIES_4_TITLE' , 'UPS Standard zone 4 zemlje');
define('MODULE_SHIPPING_UPS_COUNTRIES_4_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 4 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPS_COST_4_TITLE' , 'Tabela za isporuku UPS-a u standardnoj zoni 4');
define('MODULE_SHIPPING_UPS_COST_4_DESC' , 'Tarife za isporuku u zonu 4 odredi&#353;ta na osnovu niza te&#382;ina porud&#382;bine. Primer: 4:25.40,... Te&#382;ina/ukupna vrednost manja ili jednaka 4 ko&#353;tala bi 25,40 u zoni 4 destinacije.');

define('MODULE_SHIPPING_UPS_COUNTRIES_5_TITLE' , 'UPS Standard zone 41 zemlje');
define('MODULE_SHIPPING_UPS_COUNTRIES_5_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 41 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPS_COST_5_TITLE' , 'Tabela za isporuku UPS-a u standardnoj zoni 41');
define('MODULE_SHIPPING_UPS_COST_5_DESC' , 'Tarife za isporuku u zonu 41 odredi&#353;ta na osnovu niza te&#382;ina naru&#269;enja. Primer: 4:30.00,... Te&#382;ina/ukupna vrednost manja ili jednaka 4 ko&#353;ta&#263;e 30,00 za zonu 41 destinacija.');

define('MODULE_SHIPPING_UPS_COUNTRIES_6_TITLE' , 'UPS Standard zone 5 zemlje');
define('MODULE_SHIPPING_UPS_COUNTRIES_6_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 5 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPS_COST_6_TITLE' , 'Tabela za isporuku UPS-a u standardnoj zoni 5');
define('MODULE_SHIPPING_UPS_COST_6_DESC' , 'Isporuka na destinacije u zoni 5 na osnovu niza te&#382;ina porud&#382;bine. Primer: 4:34.35,... Te&#382;ina/ukupna vrednost manja ili jednaka 4 ko&#353;ta&#263;e 34,35 za zone 5 odredi&#353;ta.');

define('MODULE_SHIPPING_UPS_COUNTRIES_7_TITLE' , 'UPS Standard zone 6 zemlje');
define('MODULE_SHIPPING_UPS_COUNTRIES_7_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 6 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPS_COST_7_TITLE' , 'Tabela za isporuku UPS-a u standardnoj zoni 6');
define('MODULE_SHIPPING_UPS_COST_7_DESC' , 'Cene isporuke u zonu 6 odredi&#353;ta na osnovu niza te&#382;ina porud&#382;bine. Primer: 4:37.10,... Te&#382;ina/ukupna vrednost manja ili jednaka 4 ko&#353;ta&#263;e 37,10 za zonu 6 destinacija.');
?>