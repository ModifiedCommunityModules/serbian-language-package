<?php
/* -----------------------------------------------------------------------------------------
   $Id: gls.php 5121 2013-07-18 11:38:19Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(dp.php,v 1.4 2003/02/18 04:28:00); www.oscommerce.com 
   (c) 2003	nextcommerce (dp.php,v 1.5 2003/08/13); www.nextcommerce.org
   (c) 2009	shd-media (gls.php 899 27.05.2009);

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   GLS (German Logistic Service) based on DP (Deutsche Post)        
   (c) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at
    
   GLS contribution made by shd-media (c) 2009 shd-media - www.shd-media.de
   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_GLS_TEXT_TITLE', 'GLS');
define('MODULE_SHIPPING_GLS_TEXT_DESCRIPTION', 'GLS - Evropski modul za isporuku');
define('MODULE_SHIPPING_GLS_TEXT_WAY', 'isporu&#269;iti na');
define('MODULE_SHIPPING_GLS_POSTCODE_INFO_TEXT', 'uklju&#269;i ostrvnu doplatu');
define('MODULE_SHIPPING_GLS_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_GLS_INVALID_ZONE', 'Na &#382;alost, nije mogu&#263;e isporu&#269;iti u ovu zemlju');
define('MODULE_SHIPPING_GLS_UNDEFINED_RATE', 'Tro&#353;kovi isporuke ne mogu se izra&#269;unati u ovom trenutku');

define('MODULE_SHIPPING_GLS_STATUS_TITLE' , 'GLS');
define('MODULE_SHIPPING_GLS_STATUS_DESC' , '&#381;elite li da ponudite isporuku preko GLS-a?');
define('MODULE_SHIPPING_GLS_HANDLING_TITLE' , 'Naknada za rukovanje');
define('MODULE_SHIPPING_GLS_HANDLING_DESC' , 'Naknada za ovu vrstu isporuke u evrima');
define('MODULE_SHIPPING_GLS_TAX_CLASS_TITLE' , 'Poreska stopa');
define('MODULE_SHIPPING_GLS_TAX_CLASS_DESC' , 'Izaberite poresku stopu za ovu vrstu isporuke');
define('MODULE_SHIPPING_GLS_ZONE_TITLE' , 'Zona isporuke');
define('MODULE_SHIPPING_GLS_ZONE_DESC' , 'Ako odaberete zonu, vrsta isporuke &#263;e biti ponu&#273;ena samo u ovoj zoni.');
define('MODULE_SHIPPING_GLS_SORT_ORDER_TITLE' , 'Redosled prikazivanja');
define('MODULE_SHIPPING_GLS_SORT_ORDER_DESC' , 'Manje &#263;e biti prvo prikazane.');
define('MODULE_SHIPPING_GLS_ALLOWED_TITLE' , 'Pojedina&#269;ne zone isporuke');
define('MODULE_SHIPPING_GLS_ALLOWED_DESC' , 'Unesite zone <b>jednu po jednu</b>, u kojoj bi one trebalo da budu mogu&#263;e, npr.: AT,DE');

define('MODULE_SHIPPING_GLS_COUNTRIES_1_TITLE' , 'GLS zona 1 zemalja');
define('MODULE_SHIPPING_GLS_COUNTRIES_1_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 1 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_GLS_COST_1_TITLE' , 'Tabela za isporuku GLS-a u zoni 1');
define('MODULE_SHIPPING_GLS_COST_1_DESC' , 'Isporuka na destinacije u zoni 1 na osnovu niza te&#382;ina porud&#382;bine. Primer: 0-3:8.50, 3-7:10.50,... Te&#382;inu ve&#263;e od 0 i manje od ili jednako 3 ko&#353;ta&#263;e 8,50 za destinacije 1 zone.');

define('MODULE_SHIPPING_GLS_COUNTRIES_2_TITLE' , 'GLS zona 2 zemalja');
define('MODULE_SHIPPING_GLS_COUNTRIES_2_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 2 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_GLS_COST_2_TITLE' , 'Tabela za isporuku GLS-a u zoni 2');
define('MODULE_SHIPPING_GLS_COST_2_DESC' , 'Isporuka na destinacije u zoni 2 na osnovu niza te&#382;ina porud&#382;bine. Primer: 0-3:8.50, 3-7:10.50,... Te&#382;inu ve&#263;e od 0 i manje od ili jednako 3 ko&#353;ta&#263;e 8,50 za zonu 2 odredi&#353;ta.');

define('MODULE_SHIPPING_GLS_COUNTRIES_3_TITLE' , 'GLS zona 3 zemalja');
define('MODULE_SHIPPING_GLS_COUNTRIES_3_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 3 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_GLS_COST_3_TITLE' , 'Tabela za isporuku GLS-a u zoni 3');
define('MODULE_SHIPPING_GLS_COST_3_DESC' , 'Isporuka u zonu 3 odredi&#353;ta na osnovu niza te&#382;ina porud&#382;bine. Primer: 0-3:8.50, 3-7:10.50,... Te&#382;inu ve&#263;e od 0 i manje od ili jednako 3 ko&#353;ta&#263;e 8,50 za zone 3 destinacije.');

define('MODULE_SHIPPING_GLS_COUNTRIES_4_TITLE' , 'GLS zona 4 zemalja');
define('MODULE_SHIPPING_GLS_COUNTRIES_4_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 4 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_GLS_COST_4_TITLE' , 'Tabela za isporuku GLS-a u zoni 4');
define('MODULE_SHIPPING_GLS_COST_4_DESC' , 'Tarife za isporuku u zonu 4 odredi&#353;ta na osnovu niza te&#382;ina porud&#382;bine. Primer: 0-3:8.50, 3-7:10.50,... Te&#382;inu ve&#263;e od 0 i manje od ili jednako 3 ko&#353;ta&#263;e 8,50 u zonu 4 odredi&#353;ta.');

define('MODULE_SHIPPING_GLS_COUNTRIES_5_TITLE' , 'GLS zona 5 zemalja');
define('MODULE_SHIPPING_GLS_COUNTRIES_5_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 5 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_GLS_COST_5_TITLE' , 'Tabela za isporuku GLS-a u zoni 5');
define('MODULE_SHIPPING_GLS_COST_5_DESC' , 'Isporuka na destinacije u zoni 5 na osnovu niza te&#382;ina porud&#382;bine. Primer: 0-3:8.50, 3-7:10.50,... Te&#382;inu ve&#263;e od 0 i manje od ili jednako 3 ko&#353;ta&#263;e 8,50 za zone 5 odredi&#353;ta.');

define('MODULE_SHIPPING_GLS_COUNTRIES_6_TITLE' , 'GLS zona 6 zemalja');
define('MODULE_SHIPPING_GLS_COUNTRIES_6_DESC' , 'Lista dvokaraktna ISO koda za zemlje razdvojeno zarezom koje su deo zone 6 (Unesite WORLD za ceo svet.).');
define('MODULE_SHIPPING_GLS_COST_6_TITLE' , 'Tabela za isporuku GLS-a u zoni 6');
define('MODULE_SHIPPING_GLS_COST_6_DESC' , 'Cene isporuke u zonu 6 odredi&#353;ta na osnovu niza te&#382;ina porud&#382;bine. Primer: 0-3:8.50, 3-7:10.50,... Te&#382;inu ve&#263;e od 0 i manje od ili jednako 3 ko&#353;ta&#263;e 8,50 za zone 6 destinacija.');

define('MODULE_SHIPPING_GLS_POSTCODE_TITLE' , 'GLS ostrvska doplata - po&#353;tanski broj');
define('MODULE_SHIPPING_GLS_POSTCODE_DESC' , 'Oblasti po&#353;tanskog broja');
define('MODULE_SHIPPING_GLS_POSTCODE_EXTRA_COST_TITLE' , 'GLS ostrvska doplata - cena');
define('MODULE_SHIPPING_GLS_POSTCODE_EXTRA_COST_DESC' , 'Ostrvska doplata: Unesite iznos, koliko bi trebalo da se doda tro&#353;kovima isporuke, kada se adresa za isporuku nalazi na jednoj od nema&#269;kih ostrva.');
?>