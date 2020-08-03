<?php
/* -----------------------------------------------------------------------------------------
   $Id: upse.php 4200 2013-01-10 19:47:11Z Tomcraft1980 $   

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



define('MODULE_SHIPPING_UPSE_TEXT_TITLE', 'United Parcel Service Express');
define('MODULE_SHIPPING_UPSE_TEXT_DESCRIPTION', 'United Parcel Service Express - Modul za isporuku');
define('MODULE_SHIPPING_UPSE_TEXT_WAY', 'Slanje na');
define('MODULE_SHIPPING_UPSE_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_UPSE_INVALID_ZONE', 'Na &#382;alost, nije mogu&#263;e uputiti u ovu zemlju');
define('MODULE_SHIPPING_UPSE_UNDEFINED_RATE', 'Tro&#353;kovi isporuke se ne mogu izra&#269;unati za momenat');

define('MODULE_SHIPPING_UPSE_STATUS_TITLE' , 'UPS Express');
define('MODULE_SHIPPING_UPSE_STATUS_DESC' , '&#381;elite li da ponudite isporuku sa UPS Expressom?');
define('MODULE_SHIPPING_UPSE_HANDLING_TITLE' , 'Naknada za rukovanje');
define('MODULE_SHIPPING_UPSE_HANDLING_DESC' , 'Taksa za rukovanje u evrima');
define('MODULE_SHIPPING_UPSE_TAX_CLASS_TITLE' , 'Porez');
define('MODULE_SHIPPING_UPSE_TAX_CLASS_DESC' , 'Izaberite poresku stopu za isporuku.');
define('MODULE_SHIPPING_UPSE_ZONE_TITLE' , 'Zona isporuke');
define('MODULE_SHIPPING_UPSE_ZONE_DESC' , 'Ako odaberete zonu koja se koristi samo ove zone za isporuku.');
define('MODULE_SHIPPING_UPSE_SORT_ORDER_TITLE' , 'Redosled prikaza');
define('MODULE_SHIPPING_UPSE_SORT_ORDER_DESC' , 'Najni&#382;e prvo.');
define('MODULE_SHIPPING_UPSE_ALLOWED_TITLE' , 'Pojedina&#269;ne zone isporuke');
define('MODULE_SHIPPING_UPSE_ALLOWED_DESC' , 'Unesite zone <b>odvojeno</b> koje ovaj moduo mo&#382;e da koristi (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');




/* UPS Express

*/

define('MODULE_SHIPPING_UPSE_COUNTRIES_1_TITLE' , 'UPS Express zona 1 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_1_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 1 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPSE_COST_1_TITLE' , 'Tabela za isporuku UPS-a u zoni 1');
define('MODULE_SHIPPING_UPSE_COST_1_DESC' , 'Isporuka na destinacije u zoni 1 na osnovu niza te&#382;ina porud&#382;bine. Primer: 0,5:22.7,... Te&#382;ina/ukupna vrednost manja ili jednaka 0,5 ko&#353;ta&#263;e 22,70 za zone 1 destinacije.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_2_TITLE' , 'UPS Express zona 2 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_2_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 1 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPSE_COST_2_TITLE' , 'Tabela za isporuku UPS-a u zoni 2');
define('MODULE_SHIPPING_UPSE_COST_2_DESC' , 'Isporuka na destinacije u zoni 2 na osnovu niza te&#382;ina porud&#382;bine. Primer: 0,5:51.55,... Te&#382;ina/ukupna vrednost manja ili jednaka sa 0,5 ko&#353;ta&#263;e 51,55 za zonu 2 destinacije.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_3_TITLE' , 'UPS Express zona 3 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_3_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 3 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPSE_COST_3_TITLE' , 'Tabela za isporuku UPS-a u zoni 3');
define('MODULE_SHIPPING_UPSE_COST_3_DESC' , 'Isporuka u zonu 3 odredi&#353;ta na osnovu niza te&#382;ina porud&#382;bine. Primer: 0,5:60.70,... Te&#382;ina/ukupna vrednost manja ili jednaka sa 0,5 ko&#353;ta&#263;e 60,70 za zonu 3 odredi&#353;ta.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_4_TITLE' , 'UPS Express zona 4 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_4_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 4 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPSE_COST_4_TITLE' , 'Tabela za isporuku UPS-a u zoni 4');
define('MODULE_SHIPPING_UPSE_COST_4_DESC' , 'Tarife za isporuku u zonu 4 odredi&#353;ta na osnovu niza te&#382;ina porud&#382;bine. Primer: 0,5:66.90,... Te&#382;ina/ukupna vrednost manja ili jednaka sa 0,5 ko&#353;ta&#263;e 66,90 za zonu 4 odredi&#353;ta.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_5_TITLE' , 'UPS Express zona 41 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_5_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 41 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPSE_COST_5_TITLE' , 'Tabela za isporuku UPS-a u zoni 41');
define('MODULE_SHIPPING_UPSE_COST_5_DESC' , 'Tarife za isporuku u zonu 41 odredi&#353;ta na osnovu niza te&#382;ina naru&#269;enja. Primer: 0,5:82.10,... Te&#382;ina/ukupna vrednost manja ili jednaka sa 0,5 ko&#353;ta&#263;e 82,10 za zone 41 destinacija.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_6_TITLE' , 'UPS Express zona 42 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_6_DESC' , 'ISO-kratice odvojene zarezom za zonu 42 (Unesite WORLD za ostatak svijeta.):');
define('MODULE_SHIPPING_UPSE_COST_6_TITLE' , 'Tabela za isporuku UPS-a u zoni 42');
define('MODULE_SHIPPING_UPSE_COST_6_DESC' , 'Tarife za isporuku u zonu 42 odredi&#353;ta na osnovu niza te&#382;ina naru&#269;enja. Primer: 0,5:82.90,... Te&#382;ina/ukupna vrednost manja ili jednaka sa 0,5 ko&#353;ta&#263;e 82,90 za zone 42 destinacija.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_7_TITLE' , 'UPS Express zona 5 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_7_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 5 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPSE_COST_7_TITLE' , 'Tabela za isporuku UPS-a u zoni 5');
define('MODULE_SHIPPING_UPSE_COST_7_DESC' , 'Isporuka na destinacije u zoni 5 na osnovu niza te&#382;ina porud&#382;bine. Primer: 0,5:59.00,... Te&#382;ina/ukupna vrednost manja ili jednaka 0,5 ko&#353;ta&#263;e 59,00 za zonu 5 odredi&#353;ta.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_8_TITLE' , 'UPS Express zona 6 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_8_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 6 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPSE_COST_8_TITLE' , 'Tabela za isporuku UPS-a u zoni 6');
define('MODULE_SHIPPING_UPSE_COST_8_DESC' , 'Cene isporuke u zonu 6 odredi&#353;ta na osnovu niza te&#382;ina porud&#382;bine. Primer: 0,5:84.50,... Te&#382;ina/ukupna vrednost manja ili jednaka 0,5 ko&#353;ta&#263;e 84,50 za zonu 6 destinacija.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_9_TITLE' , 'UPS Express zona 7 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_9_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 7 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPSE_COST_9_TITLE' , 'Tabela za isporuku UPS-a u zoni 7');
define('MODULE_SHIPPING_UPSE_COST_9_DESC' , 'Cene isporuke u zoni 7 na osnovu niza te&#382;ina porud&#382;bine. Primer: 0,5:71.85,... Te&#382;ina/ukupna vrednost manja ili jednaka 0,5 ko&#353;ta&#263;e 71,85 za zone 7 destinacija.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_10_TITLE' , 'UPS Express zona 8 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_10_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 8 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPSE_COST_10_TITLE' , 'Tabela za isporuku UPS-a u zoni 8');
define('MODULE_SHIPPING_UPSE_COST_10_DESC' , 'Isporuka na destinacije u zoni 8 na osnovu niza te&#382;ina porud&#382;bine. Primer: 0,5:80.05,... Te&#382;ina/ukupna vrednost manja ili jednaka sa 0,5 ko&#353;ta&#263;e 80,05 za zonu 8 destinacija.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_11_TITLE' , 'UPS Express zona 9 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_11_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 9 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPSE_COST_11_TITLE' , 'Tabela za isporuku UPS-a u zoni 9');
define('MODULE_SHIPPING_UPSE_COST_11_DESC' , 'Cene isporuke u zoni 9 na osnovu niza te&#382;ina porud&#382;bine. Primer: 0,5:85.20,... Te&#382;ina/ukupna vrednost manja ili jednaka 0,5 ko&#353;ta&#263;e 85,20 za zone 9 destinacija.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_12_TITLE' , 'UPS Express zona 10 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_12_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 10 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPSE_COST_12_TITLE' , 'Tabela za isporuku UPS-a u zoni 10');
define('MODULE_SHIPPING_UPSE_COST_12_DESC' , 'Isporuka u zonu 10 destinacija na osnovu niza te&#382;ina porud&#382;bine. Primer: 0,5:93.10,... Te&#382;ina/ukupna vrednost manja ili jednaka 0,5 ko&#353;ta&#263;e 93,10 za zonu 10 destinacija.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_13_TITLE' , 'UPS Express zona 11 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_13_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 11 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPSE_COST_13_TITLE' , 'Tabela za isporuku UPS-a u zoni 11');
define('MODULE_SHIPPING_UPSE_COST_13_DESC' , 'Isporuka na destinacije u zoni 11 na osnovu niza te&#382;ina porud&#382;bine. Primer: 0,5:103.50,... Te&#382;ina/ukupna vrednost manja ili jednaka sa 0,5 ko&#353;ta&#263;e 103,50 za zonu 11 destinacija.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_14_TITLE' , 'UPS Express zona 12 zemlje');
define('MODULE_SHIPPING_UPSE_COUNTRIES_14_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 12 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_UPSE_COST_14_TITLE' , 'Tabela za isporuku UPS-a u zoni 12');
define('MODULE_SHIPPING_UPSE_COST_14_DESC' , 'Cene isporuke u zonu 12 odredi&#353;ta na osnovu niza te&#382;ina porud&#382;bine. Primer: 0,5:105.20,... Te&#382;ina/ukupna vrednost manja ili jednaka 0,5 ko&#353;ta&#263;e 105,20 za zonu 12 destinacija.');
?>