<?php
/* -----------------------------------------------------------------------------------------
   
   $Id: sitemaporg.php 
   XML-Sitemap.org for xt:Commerce SP2.1a
   by Mathis Klooss
   V1.2
   -----------------------------------------------------------------------------------------
      Original Script:
   $Id: gsitemaps.php 
   Google Sitemaps by hendrik.koch@gmx.de
   V1.1 August 2006
   -----------------------------------------------------------------------------------------
   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com 
   (c) 2003	 nextcommerce (invoice.php,v 1.6 2003/08/24); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SITEMAPORG_TEXT_DESCRIPTION', 'Standardnu definiciju mo&zcaron;ete pronac&#x301;i ovde: <a href="http://www.sitemaps.org/" target="_blank">www.sitemap.org</a>');
define('MODULE_SITEMAPORG_TEXT_TITLE', 'XML Sitemap.org');
define('MODULE_SITEMAPORG_FILE_TITLE' , '<hr />Naziv dokumenta');
define('MODULE_SITEMAPORG_FILE_DESC' , 'Unesite naziv datoteke ako &zcaron;elite da datoteku za izvoz sa&ccaron;uvate na serveru.<br />(direktorijum "export/")');
define('MODULE_SITEMAPORG_STATUS_DESC','Status modula');
define('MODULE_SITEMAPORG_STATUS_TITLE','Status');
define('MODULE_SITEMAPORG_ROOT_TITLE', '<hr /><b>Installation im osnovnom direktorijumu?</b>');
define('MODULE_SITEMAPORG_ROOT_DESC', 'Da li "sitemap" datoteku treba sa&ccaron;uvati u osnovnom direktorijumu?');
define('MODULE_SITEMAPORG_GZIP_TITLE', '<b>Koristiti kompresiju gzip?</b>');
define('MODULE_SITEMAPORG_GZIP_DESC', 'Zavr&scaron;etak ".gz" se automatski postavlja na kraj datoteke!');
define('MODULE_SITEMAPORG_EXPORT_TITLE', '<hr /><b>Preuzimanje?</b>');
define('MODULE_SITEMAPORG_EXPORT_DESC', 'Da li &zcaron;elite da preuzmete datoteku?');
define('MODULE_SITEMAPORG_CUSTOMERS_STATUS_TITLE', 'Grupa kupaca');
define('MODULE_SITEMAPORG_CUSTOMERS_STATUS_DESC','Ovde unesite koju grupu kupaca treba koristiti za izvoz sitemap.xml.');
define('MODULE_SITEMAPORG_LANGUAGE_TITLE', 'Jezik');
define('MODULE_SITEMAPORG_LANGUAGE_DESC','Ovde navedite na kom jeziku sitemap.xml treba da se izveze.');
?>