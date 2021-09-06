<?php
/* -----------------------------------------------------------------------------------------
   $Id: semknox_system.php 13231 2021-01-26 07:56:21Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_SEMKNOX_SYSTEM_TEXT_TITLE', 'Site Search 360 Pretraga proizvoda');
  define('MODULE_SEMKNOX_SYSTEM_TEXT_DESCRIPTION', 'Revolucionarno pretra&zcaron;ivanje nove generacije proizvoda za va&scaron;e poslovanje s potpuno automatskom obradom podataka.');
  define('MODULE_SEMKNOX_SYSTEM_STATUS_TITLE', 'Status modula');
  define('MODULE_SEMKNOX_SYSTEM_STATUS_DESC', 'Site Search 360 aktivirajte pretragu proizvoda');
  define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_TITLE', 'Standardni CSS');
  define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_DESC', 'Da li želite da učitate podrazumevani CSS Site Search 360?');
  define('MODULE_SEMKNOX_SYSTEM_COLOR_TITLE', 'Glavna boja');
  define('MODULE_SEMKNOX_SYSTEM_COLOR_DESC', 'Unesite glavnu boju za naslov i dugmad (ovo podešavanje radi samo ako je učitan standardni CSS).');
  
  $languages = xtc_get_languages();
  foreach ($languages as $language) {
    define('MODULE_SEMKNOX_SYSTEM_API_'.$language['id'].'_TITLE', '['.strtoupper($language['code']).'] API Key');
    define('MODULE_SEMKNOX_SYSTEM_API_'.$language['id'].'_DESC', 'API klju&ccaron; za '.strtoupper($language['code']).'');

    define('MODULE_SEMKNOX_SYSTEM_PROJECT_'.$language['id'].'_TITLE', '['.strtoupper($language['code']).'] Project ID');
    define('MODULE_SEMKNOX_SYSTEM_PROJECT_'.$language['id'].'_DESC', 'ID projekta za '.strtoupper($language['code']).'');
  }