<?php
  /* --------------------------------------------------------------
   $Id: blacklist_logs.php 10584 2017-01-20 10:45:19Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Log crne liste'); 

define('TABLE_HEADING_IP', 'IP adresa');
define('TABLE_HEADING_BANNED', 'Vreme zabrane');
define('TABLE_HEADING_ACTION', 'Akcija');

define('TEXT_EDIT_ENTRY', 'Ure&#273;ivanje stavke');
define('TEXT_NEW_ENTRY', 'Nova stavka');
define('TEXT_ENTRY_IP', 'IP adresa');
define('TEXT_ENTRY_IP_INFO', 'Unesite IP adresu za blokiranje.');
define('TEXT_ENTRY_TIME', 'Vreme');
define('TEXT_ENTRY_TIME_INFO', 'Unesite datum i vreme potrebno je da IP adresa bude blokirana.');

define('TEXT_DELETE_INTRO', '&#381;elite li zaista da izbri&#353;ete ovu IP adresu?');

define('ERROR_LOG_DIRECTORY_DOES_NOT_EXIST', 'Gre&#353;ka: Direktorijum evidencije ne postoji. Postavite ovo u configure.php.');
define('ERROR_LOG_DIRECTORY_NOT_WRITEABLE', 'Gre&#353;ka: Direktorijum evidencije nije upisiv.');
?>