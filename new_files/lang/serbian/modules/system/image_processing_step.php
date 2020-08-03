<?php
/* -----------------------------------------------------------------------------------------
   $Id: image_processing_step.php 2992 2012-06-07 16:59:49Z web28 $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
   (c) 2003	 nextcommerce (invoice.php,v 1.6 2003/08/24); www.nextcommerce.org
   (c) 2006 XT-Commerce (image_processing_step.php 950 2005-05-14; www.xt-commerce.com
   --------------------------------------------------------------
   Contribution
   image_processing_step (step-by-step Variante B) by INSEH 2008-03-26

   new javascript reload / only missing image/ max images  by web28 2011-03-17

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_STEP_IMAGE_PROCESS_TEXT_DESCRIPTION', 'Sve slike u ovim direktorijumima<br /><br />
/images/product_images/popup_images/<br />
/images/product_images/info_images/<br />
/images/product_images/thumbnail_images/ <br /> <br /> se obra&#273;uju.<br /> <br />
U ovu svrhu, skripta koristi samo ograni&#269;eni broj %s slika i poziva se kasnije ponovo.<br /> <br />');
define('MODULE_STEP_IMAGE_PROCESS_TEXT_TITLE', 'Imageprocessing - slike proizvoda');
define('MODULE_STEP_IMAGE_PROCESS_STATUS_DESC','Status modula');
define('MODULE_STEP_IMAGE_PROCESS_STATUS_TITLE','Status');
define('IMAGE_EXPORT','Kliknite na dugme "Start" da biste zapo&#269;eli obradu. Ovaj proces mo&#382;e potrajati neko vreme-ne prekidaj svaki slu&#269;aj!');
define('IMAGE_EXPORT_TYPE','<hr noshade><strong>Grupna obrada:</strong>');

define('IMAGE_STEP_INFO','Slike kreirane: ');
define('IMAGE_STEP_INFO_READY',' - Zavr&#353;eno!');
define('TEXT_MAX_IMAGES','Maks. slike za svako punjenje');
define('TEXT_ONLY_MISSING_IMAGES','Kreiranje samo onih slika koje nedostaju');
define('MODULE_STEP_READY_STYLE_TEXT', '<div class="ready_info">%s</div>');
define('MODULE_STEP_READY_STYLE_BACK', MODULE_STEP_READY_STYLE_TEXT);
define('TEXT_LOWER_FILE_EXT','Konvertujte oznaku tipa datoteke u mala slova. Primer: <b> JPG -> jpg</b>');
define('IMAGE_COUNT_INFO','Broj slika u %s: %s komada. ');

define('TEXT_LOGFILE','Omogu&#263;i evidentiranje, korisno za otklanjanje gre&#353;aka. Datoteka evidencije se &#269;uva u fascikli/log u osnovnom direktorijumu.');

?>