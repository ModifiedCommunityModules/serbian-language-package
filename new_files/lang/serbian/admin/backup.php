<?php
/* --------------------------------------------------------------
   $Id: backup.php 10762 2017-06-07 11:57:15Z web28 $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(backup.php,v 1.21 2002/06/15); www.oscommerce.com
   (c) 2003	 nextcommerce (backup.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Upravlja&#269; rezervnom kopijom baze podataka');

define('TABLE_HEADING_TITLE', 'Naslov');
define('TABLE_HEADING_FILE_DATE', 'Datum');
define('TABLE_HEADING_FILE_SIZE', 'Veli&#269;ina');
define('TABLE_HEADING_ACTION', 'Akcija');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nova kopija');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Vrati u prethodno stanje lokalno');
define('TEXT_INFO_NEW_BACKUP', 'Nemojte prekidati proces pravljenja rezervne kopije koji mo&#382;e potrajati nekoliko minuta.');
define('TEXT_INFO_UNPACK', '<br /><br />(nakon &#353;to raspakuje&#353; fajl iz arhive)');
define('TEXT_INFO_RESTORE', 'Ne prekidate proces restauracije.<br /><br />&#353;to je ve&#263;a rezervna kopija, ovo je du&#382;a ova obrada!<br /><br />Ako je mogu&#263;e, koristite MySQL klijenta.<br /><br />Na primer:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Ne prekidate proces restauracije.<br /><br />&#353;to je ve&#263;a rezervna kopija, ovo je du&#382;a ova obrada!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Otpremljena datoteka mora biti datoteka sa sirovim SQL-om (tekst) datoteka.');
define('TEXT_INFO_DATE', 'Datum:');
define('TEXT_INFO_SIZE', 'Veli&#269;ina:');
define('TEXT_INFO_COMPRESSION', 'Kompresija:');
define('TEXT_INFO_USE_GZIP', 'Koristi GZIP');
define('TEXT_INFO_USE_ZIP', 'Koristi ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Bez kompresije (&#268;ist SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Samo preuzimanje (Ne skladi&#353;ti na server strani)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Najbolje kroz HTTPS vezu');
define('TEXT_DELETE_INTRO', '&#382;elite li zaista da izbri&#353;ete ovu rezervnu kopiju?');
define('TEXT_NO_EXTENSION', 'Niko');
define('TEXT_BACKUP_DIRECTORY', 'Katalog rezervnih kopija:');
define('TEXT_LAST_RESTORATION', 'Poslednje obnavljanje:');
define('TEXT_FORGET', '(<u>Zaboravi</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Gre&#353;ka: Katalog rezervnih kopija ne postoji.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Gre&#353;ka: Imenik rezervnih kopija nije upisivi.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Gre&#353;ka: Veza za preuzimanje nije prihvatljiva.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Uspeh: Poslednji datum restauracije je obrisan.');
define('SUCCESS_DATABASE_SAVED', 'Uspeh: Baza podataka je sa&#269;uvana.');
define('SUCCESS_DATABASE_RESTORED', 'Uspeh: Baza podataka je vra&#263;ena.');
define('SUCCESS_BACKUP_DELETED', 'Uspeh: Pravljenje rezervne kopije je uklonjeno.');
define('SUCCESS_BACKUP_UPLOAD', 'Uspeh: Rezervna kopija datoteke je otpremljena.');

//TEXT_COMPLETE_INSERTS
define('TEXT_COMPLETE_INSERTS', "<b>Dovr&#353;ite 'INSERT'</b><br> - polja za imena su dodana svaki red INSERT (uve&#263;ana rezervna kopija)");

define('TEXT_INFO_TABLES_IN_BACKUP', '<br />' . "\n" .'<b>Tabele u ovoj rezervnoj kopiji:</b>' . "\n");
define('TEXT_INFO_NO_INFORMATION', 'Informacije nisu mogu&#263;e');
//UTF-8 convert
define('TEXT_CONVERT_TO_UTF', 'Konvertuj bazu podataka u UTF-8');
define('TEXT_IMPORT_UTF', 'Obnovi UTF-8 bazu podataka');

//TEXT_REMOVE_COLLATE
define('TEXT_REMOVE_COLLATE', "<b>Bez enkodovanja 'COLLATE' i 'DEFAULT CHARSET'</b><br> - Izjave o kodiranju ne&#263;e biti umetnute. Korisno prilikom prelaska na drugo kodiranje baze podataka.");

//TEXT_REMOVE_ENGINE
define('TEXT_REMOVE_ENGINE', "<b>Bez skladi&#353;nih sistema 'ENGINE'</b><br> - Izve&#353;taji skladi&#353;nog sistema (MyISAM,InnoDB) nisu uba&#269;eni.");
?>