<?php
/* -----------------------------------------------------------------------------------------
   $Id: chronopost.php 5121 2013-07-18 11:38:19Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(chronopost.php,v 1.0 2002/04/01 07:07:45); www.oscommerce.com 
   (c) 2003	 nextcommerce (chronopost.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions: 
   chronopost-1.0.1       	Autor:	devteam@e-network.fr | www.oscommerce-fr.info

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
   


define('MODULE_SHIPPING_CHRONOPOST_TEXT_TITLE', 'Zonske stope Chronopost-a');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_DESCRIPTION', 'Cene na osnovu zona Chronopost-a');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_WAY', 'Dostavljanje u');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_CHRONOPOST_INVALID_ZONE', 'Chronopost Nijedna isporuka nije dostupna izabranoj zemlji');
define('MODULE_SHIPPING_CHRONOPOST_UNDEFINED_RATE', 'Chronopost U ovom trenutku nije mogu&#263;e utvrditi stopu isporuke');

define('MODULE_SHIPPING_CHRONOPOST_STATUS_TITLE' , 'Aktiviraj Chronopost');
define('MODULE_SHIPPING_CHRONOPOST_STATUS_DESC' , 'Da li &#382;elite da aktivirate dostavu preko Chronopost-a? (Ta&#269;no, Neta&#269;no)');
define('MODULE_SHIPPING_CHRONOPOST_HANDLING_TITLE' , 'Stope');
define('MODULE_SHIPPING_CHRONOPOST_HANDLING_DESC' , 'Cene za dostavu preko chronopost-a');
define('MODULE_SHIPPING_CHRONOPOST_TAX_CLASS_TITLE' , 'Poreska klasa');
define('MODULE_SHIPPING_CHRONOPOST_TAX_CLASS_DESC' , 'Koristite slede&#263;u poresku klasu za naknadu za isporuku.');
define('MODULE_SHIPPING_CHRONOPOST_ZONE_TITLE' , 'Zona isporuke');
define('MODULE_SHIPPING_CHRONOPOST_ZONE_DESC' , 'Ako je zona izabrana, omogu&#263;ite samo ovaj na&#269;in isporuke za tu zonu.');
define('MODULE_SHIPPING_CHRONOPOST_SORT_ORDER_TITLE' , 'Redosled sortiranja');
define('MODULE_SHIPPING_CHRONOPOST_SORT_ORDER_DESC' , 'Redosled sortiranja prikaza.');
define('MODULE_SHIPPING_CHRONOPOST_ALLOWED_TITLE' , 'Pojedina&#269;ne zone isporuke');
define('MODULE_SHIPPING_CHRONOPOST_ALLOWED_DESC' , 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_1_TITLE' , 'Chronopost Zona 1 (dr&#382;ava)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_1_DESC' , 'Umetnite zarez izme&#273;u 2 ISO koda zemlje koji su dio iste zone (unesite WORLD za ostatak sveta).');
define('MODULE_SHIPPING_CHRONOPOST_COST_1_TITLE' , 'Chronopost Zona 1 (te&#382;ina:stope)');
define('MODULE_SHIPPING_CHRONOPOST_COST_1_DESC' , 'Stope hronoposta za odredi&#353;ta zone 1. Na&#269;elo: raspon te&#382;ine (u gramima) nakon &#269;ega slijedi tarifa (eura s porezom). Primer: 0-2000: 28.71.2000-5000: 34.38, ... Paketi te&#382;ine manje od 2kg naplatit &#263;e se 28,71 EUR, uklju&#269;uju&#263;i porez za odredi&#353;ta u DE');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_2_TITLE' , 'Chronopost Zona 2 (dr&#382;ava)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_2_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo iste zone (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_2_TITLE' , 'Chronopost Zona 2 (te&#382;ina:stope)');
define('MODULE_SHIPPING_CHRONOPOST_COST_2_DESC' , 'Stope hronoposta za odredi&#353;ta zone 2. Na&#269;elo: raspon te&#382;ine (u gramima) nakon &#269;ega slijedi tarifa (eura s porezom). Primer: 0-2000: 28.71.2000-5000: 34.38, ... Paketi te&#382;ine manje od 2kg naplatit &#263;e se 28,71 EUR, uklju&#269;uju&#263;i porez za odredi&#353;ta u DE');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_3_TITLE' , 'Chronopost Zona 3 (dr&#382;ava)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_3_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo iste zone (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_3_TITLE' , 'Chronopost Zona 3 (te&#382;ina:stope)');
define('MODULE_SHIPPING_CHRONOPOST_COST_3_DESC' , 'Stope hronoposta za odredi&#353;ta zone 3. Na&#269;elo: raspon te&#382;ine (u gramima) nakon &#269;ega slijedi tarifa (eura s porezom). Primer: 0-2000: 28.71.2000-5000: 34.38, ... Paketi te&#382;ine manje od 2kg naplatit &#263;e se 28,71 EUR, uklju&#269;uju&#263;i porez za odredi&#353;ta u DE');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_4_TITLE' , 'Chronopost Zona 4 (dr&#382;ava)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_4_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo iste zone (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_4_TITLE' , 'Chronopost Zona 4 (te&#382;ina:stope)');
define('MODULE_SHIPPING_CHRONOPOST_COST_4_DESC' , 'Stope hronoposta za odredi&#353;ta zone 4. Na&#269;elo: raspon te&#382;ine (u gramima) nakon &#269;ega slijedi tarifa (eura s porezom). Primer: 0-2000: 28.71.2000-5000: 34.38, ... Paketi te&#382;ine manje od 2kg naplatit &#263;e se 28,71 EUR, uklju&#269;uju&#263;i porez za odredi&#353;ta u DE');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_5_TITLE' , 'Chronopost Zona 5 (dr&#382;ava)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_5_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo iste zone (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_5_TITLE' , 'Chronopost Zona 5 (te&#382;ina:stope)');
define('MODULE_SHIPPING_CHRONOPOST_COST_5_DESC' , 'Stope hronoposta za odredi&#353;ta zone 5. Na&#269;elo: raspon te&#382;ine (u gramima) nakon &#269;ega slijedi tarifa (eura s porezom). Primer: 0-2000: 28.71.2000-5000: 34.38, ... Paketi te&#382;ine manje od 2kg naplatit &#263;e se 28,71 EUR, uklju&#269;uju&#263;i porez za odredi&#353;ta u DE');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_6_TITLE' , 'Chronopost Zona 6 (dr&#382;ava)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_6_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo iste zone (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_6_TITLE' , 'Chronopost Zona 6 (te&#382;ina:stope)');
define('MODULE_SHIPPING_CHRONOPOST_COST_6_DESC' , 'Stope hronoposta za odredi&#353;ta zone 6. Na&#269;elo: raspon te&#382;ine (u gramima) nakon &#269;ega slijedi tarifa (eura s porezom). Primer: 0-2000: 28.71.2000-5000: 34.38, ... Paketi te&#382;ine manje od 2kg naplatit &#263;e se 28,71 EUR, uklju&#269;uju&#263;i porez za odredi&#353;ta u DE');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_7_TITLE' , 'Chronopost Zona 7 (dr&#382;ava)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_7_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo iste zone (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_7_TITLE' , 'Chronopost Zona 7 (te&#382;ina:stope)');
define('MODULE_SHIPPING_CHRONOPOST_COST_7_DESC' , 'Stope hronoposta za odredi&#353;ta zone 7. Na&#269;elo: raspon te&#382;ine (u gramima) nakon &#269;ega slijedi tarifa (eura s porezom). Primer: 0-2000: 28.71.2000-5000: 34.38, ... Paketi te&#382;ine manje od 2kg naplatit &#263;e se 28,71 EUR, uklju&#269;uju&#263;i porez za odredi&#353;ta u DE');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_8_TITLE' , 'Chronopost Zona 8 (dr&#382;ava)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_8_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo iste zone (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_8_TITLE' , 'Chronopost Zona 8 (te&#382;ina:stope)');
define('MODULE_SHIPPING_CHRONOPOST_COST_8_DESC' , 'Stope hronoposta za odredi&#353;ta zone 8. Na&#269;elo: raspon te&#382;ine (u gramima) nakon &#269;ega slijedi tarifa (eura s porezom). Primer: 0-2000: 28.71.2000-5000: 34.38, ... Paketi te&#382;ine manje od 2kg naplatit &#263;e se 28,71 EUR, uklju&#269;uju&#263;i porez za odredi&#353;ta u DE');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_9_TITLE' , 'Chronopost Zona 9 (dr&#382;ava)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_9_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo iste zone (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_9_TITLE' , 'Chronopost Zona 9 (te&#382;ina:stope)');
define('MODULE_SHIPPING_CHRONOPOST_COST_9_DESC' , 'Stope hronoposta za odredi&#353;ta zone 9. Na&#269;elo: raspon te&#382;ine (u gramima) nakon &#269;ega slijedi tarifa (eura s porezom). Primer: 0-2000: 28.71.2000-5000: 34.38, ... Paketi te&#382;ine manje od 2kg naplatit &#263;e se 28,71 EUR, uklju&#269;uju&#263;i porez za odredi&#353;ta u DE');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_10_TITLE' , 'Chronopost Zona 10 (dr&#382;ava)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_10_DESC' , 'Lista razdvojena zarezima dva znaka ISO kodovi zemlje koji su deo iste zone (Unesite WORLD za ostatak sveta.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_10_TITLE' , 'Chronopost Zona 10 (te&#382;ina:stope)');
define('MODULE_SHIPPING_CHRONOPOST_COST_10_DESC' , 'Stope hronoposta za odredi&#353;ta zone 10. Na&#269;elo: raspon te&#382;ine (u gramima) nakon &#269;ega slijedi tarifa (eura s porezom). Primer: 0-2000: 28.71.2000-5000: 34.38, ... Paketi te&#382;ine manje od 2kg naplatit &#263;e se 28,71 EUR, uklju&#269;uju&#263;i porez za odredi&#353;ta u DE');
?>