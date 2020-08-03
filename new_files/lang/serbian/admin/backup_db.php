<?php
/*
  $Id: backup.php,v 1.16 2002/03/16 21:30:02 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Menad&#382;er za kreiranje kopije baze podataka');

define('TEXT_INFO_DO_BACKUP', 'Kreirana je kopija baze podataka!');
define('TEXT_INFO_DO_BACKUP_OK', 'Uspe&#353;no je kreirana kopija baze podataka!');
define('TEXT_INFO_DO_GZIP', 'Kopija je upakovana!');
define('TEXT_INFO_WAIT', 'Molimo sa&#269;ekajte!');

define('TEXT_INFO_DO_RESTORE', 'Baza podata je obnovljena!');
define('TEXT_INFO_DO_RESTORE_OK', 'Baza podataka je uspe&#353;no obnovljena!');
define('TEXT_INFO_DO_GUNZIP', 'Baza podataka je otpakovana!');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Gre&#353;ka: Direktorijum kopije ne postoji. Molimo popravite gre&#353;ku u va&#353;em configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Gre&#353;ka: Nije mogu&#263;e pisati u katalog rezervne kopije.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Gre&#353;ka: Veza za preuzimanje nije prihvatljiva.');
define('ERROR_DECOMPRESSOR_NOT_AVAILABLE', 'Gre&#353;ka: Nije dostupan odgovaraju&#263;i nepakker.');
define('ERROR_UNKNOWN_FILE_TYPE', 'Gre&#353;ka: Nepoznat tip datoteke.');
define('ERROR_RESTORE_FAILES', 'Gre&#353;ka: Vra&#263;anje u prethodno stanje nije uspelo.');
define('ERROR_DATABASE_SAVED', 'Gre&#353;ka: Nije mogu&#263;e napraviti rezervnu kopiju baze podataka.');
define('ERROR_TEXT_PATH', 'Gre&#353;ka: Putanja do mysqldamp nije prona&#273;ena ili data!');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Uspe&#353;ano: Poslednji datum restauracije je obrisan.');
define('SUCCESS_DATABASE_SAVED', 'Uspe&#353;ano: Rezervna kopija baze podataka.');
define('SUCCESS_DATABASE_RESTORED', 'Uspe&#353;ano: Baza podataka je vra&#263;ena.');
define('SUCCESS_BACKUP_DELETED', 'Uspe&#353;ano: Pravljenje rezervne kopije je uklonjeno.');

define('TEXT_BACKUP_UNCOMPRESSED', 'Rezervna kopija datoteke je raspakovana: ');

define('TEXT_SIMULATION', '<br>(Simulacija sa datotekom za evidenciju)');

?>