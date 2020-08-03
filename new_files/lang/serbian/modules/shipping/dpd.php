<?php
/*------------------------------------------------------------------------------
   v 1.0
   XTC-DPD Shipping Module - Contribution for XT-Commerce http://xt-commerce.com
   modified by http://www.hwangelshop.de

   Copyrigt (c) 2004 cigamth
   ------------------------------------------------------------------------------
   $Id: dpd.php 2666 2012-02-23 11:38:17Z dokuman $

   XTC-GLS Shipping Module - Contribution for XT-Commerce http://www.xt-commerce.com
   modified by http://www.hhgag.com

   Copyright (c) 2004 H.H.G.
   -----------------------------------------------------------------------------
   based on:
   (c) 2003 Deutsche Post Module
   Original written by Marcel Bossert-Schwab (webmaster@wernich.de), Version 1.2b
   Addon Released under GLSL V2.0 by Gunter Sammet (Gunter@SammySolutions.com)

   Contribution based on:

   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2002 - 2003 osCommerce

   Released under the GNU General Public License

   ---------------------------------------------------------------------------*/
define('MODULE_SHIPPING_DPD_TEXT_TITLE', 'DPD Dynamic Parcel Distribution');
define('MODULE_SHIPPING_DPD_TEXT_DESCRIPTION', 'DPD Dynamic Parcel Distribution - Modul za isporuku &#353;irom sveta');
define('MODULE_SHIPPING_DPD_TEXT_WAY', 'Dostavi u');
define('MODULE_SHIPPING_DPD_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_DPD_INVALID_ZONE', '&#382;ao mi je, ovaj nosa&#269; ne mo&#382;e da se isporu&#269;i u ovu zemlju');
define('MODULE_SHIPPING_DPD_UNDEFINED_RATE', 'Tro&#353;kovi isporuke se trenutno ne mogu izra&#269;unati.');
define('MODULE_SHIPPING_DPD_FREE_SHIPPING', 'Besplatna dostava');
define('MODULE_SHIPPING_DPD_SUBSIDIZED_SHIPPING', 'Mi smo subvencionisani transport.');

define('MODULE_SHIPPING_DPD_STATUS_TITLE', 'DPD Dynamic Parcel Distribution');
define('MODULE_SHIPPING_DPD_STATUS_DESC', 'Da li biste &#382;eleli da ponudite isporuku sa DPD Dynamic Parcel Distribution?');
define('MODULE_SHIPPING_DPD_HANDLING_TITLE', 'Naknada za rukovanje');
define('MODULE_SHIPPING_DPD_HANDLING_DESC', 'Naknada za rukovanje za ovaj metod transporta');
define('MODULE_SHIPPING_DPD_ALLOWED_TITLE' , 'Dozvoljene zone');
define('MODULE_SHIPPING_DPD_ALLOWED_DESC' , 'Molimo vas da unesete zone <b>odvojeno</b> koje &#263;e mo&#263;i da koriste ovaj moduo (npr. AT,DE (ostavite prazno ako &#382;elite da dozvolite sve zone))');
define('MODULE_SHIPPING_DPD_SORT_ORDER_TITLE', 'Redosled sortiranja');
define('MODULE_SHIPPING_DPD_SORT_ORDER_DESC', 'Redosled sortiranja prikaza. Prvo prikazuje najni&#382;a.');
define('MODULE_SHIPPING_DPD_TAX_CLASS_TITLE', 'Poreska klasa');
define('MODULE_SHIPPING_DPD_TAX_CLASS_DESC', 'Koristite slede&#263;u poresku klasu za naknadu za isporuku.');
define('MODULE_SHIPPING_DPD_ZONE_TITLE', 'Zona isporuke');
define('MODULE_SHIPPING_DPD_ZONE_DESC', 'Ako je zona izabrana, omogu&#263;ite samo ovaj na&#269;in isporuke za tu zonu.');

?>