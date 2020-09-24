<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_ps_fee.php 10553 2017-01-11 13:45:14Z web28 $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_cod_fee.php,v 1.02 2003/02/24); www.oscommerce.com
   (C) 2001 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers ; http://www.themedia.at & http://www.oscommerce.at
   (c) 2006 XT-Commerce (ot_ps_fee.php 899 2005-04-29 02)

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


  define('MODULE_ORDER_TOTAL_PS_FEE_TITLE', 'Li&#269;na dostava');
  define('MODULE_ORDER_TOTAL_PS_FEE_DESCRIPTION', 'Obra&#269;un li&#269;nog tro&#353;ka isporuke');

  define('MODULE_ORDER_TOTAL_PS_FEE_STATUS_TITLE','Li&#269;na dostava');
  define('MODULE_ORDER_TOTAL_PS_FEE_STATUS_DESC','Obra&#269;un li&#269;nog tro&#353;ka isporuke');

  define('MODULE_ORDER_TOTAL_PS_FEE_SORT_ORDER_TITLE','Redosled sortiranja');
  define('MODULE_ORDER_TOTAL_PS_FEE_SORT_ORDER_DESC','Redosled sortiranja prikaza');

  define('MODULE_ORDER_TOTAL_PS_FEE_TAX_CLASS_TITLE','Poreska klasa');
  define('MODULE_ORDER_TOTAL_PS_FEE_TAX_CLASS_DESC','Odaberite klasu poreza.');

  function define_shipping_titles_ps() {
    $module_keys = str_replace('.php','',MODULE_SHIPPING_INSTALLED);
    $installed_shipping_modules = explode(';',$module_keys);
    //support for ot_shipping
    $installed_shipping_modules[] = 'free';

    if (count($installed_shipping_modules) > 0) {
      foreach($installed_shipping_modules as $shipping_code) {
        $module_type = 'shipping';
        $file = $shipping_code.'.php';
        $shipping_code = strtoupper($shipping_code);
        $title = '';

        if (defined('DIR_FS_LANGUAGES') && file_exists(DIR_FS_LANGUAGES . 'english/modules/' . $module_type . '/' . $file)) {
          include_once(DIR_FS_LANGUAGES . 'english/modules/' . $module_type . '/' . $file);
          $title = constant('MODULE_SHIPPING_'.$shipping_code.'_TEXT_TITLE');
        }
        //support for ot_shipping
        $title = $shipping_code == 'FREE' ? 'Besplatan transport (ukupni modul porud&#382;bine ot_shipping)' : $title;
        
        $shipping_code = ($shipping_code == 'FREEAMOUNT') ? 'FREEAMOUNT_FREE' : 'FEE_' . $shipping_code;

        define('MODULE_ORDER_TOTAL_PS_'.$shipping_code.'_TITLE',$title);
        define('MODULE_ORDER_TOTAL_PS_'.$shipping_code.'_DESC','&lt;ISO2-Code&gt;:&lt;Preis&gt;, ....<br />
        00 kao ISO2-Code omogu&#263;ava isporuku PS u svim zemljama. Ako
        00 se koristi morate ga uneti kao poslednji argument. Ako
        Br.: 9.99 se unosi u transport PS u inostrane zemlje ne&#263;e biti izra&#269;unat
        (nije mogu&#263;e). Da biste isklju&#269;ili samo jednu zemlju, nemojte unositi tro&#353;kove za ovu zemlju.
        Primer: DE:4.00,CH:,00:9.99<br />-> Obja&#353;njenje: isporuka u DE: 4&euro; / Isporuka CH: Nije mogu&#263;e
        /Isporuka u ostatak sveta: 9,99&euro;');
      }
    }
  }
  define_shipping_titles_ps();
?>