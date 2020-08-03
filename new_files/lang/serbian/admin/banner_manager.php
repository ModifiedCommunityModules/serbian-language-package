<?php
/* --------------------------------------------------------------
   $Id: banner_manager.php 10153 2016-07-27 07:55:34Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(banner_manager.php,v 1.25 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (banner_manager.php,v 1.4 2003/08/14); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Menad&#382;er reklamnog banera');

define('TABLE_HEADING_BANNERS', 'Baner');
define('TABLE_HEADING_GROUPS', 'Grupe');
define('TABLE_HEADING_STATISTICS', 'Prikazi / Klikovi');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Akcije');
define('TABLE_HEADING_LANGUAGE', 'Jezik');

define('TEXT_BANNERS_TITLE', 'Naslov banera:');
define('TEXT_BANNERS_URL', 'URL banera:');
define('TEXT_BANNERS_URL_NOTE', 'Targetiranje URL-a posle kilkanja banera.'); 
define('TEXT_BANNERS_GROUP', 'Grupa banera:');
define('TEXT_BANNERS_NEW_GROUP', 'Odaberite postoje&#263;u grupu reklamnog natpisa (ako postoji) ili unesite novu grupu reklamnog natpisa ispod.');
define('TEXT_BANNERS_NEW_GROUP_NOTE', 'Da biste prikazali reklamni natpis u predlo&#353;ku, predlo&#382;ak mora biti produ&#382;en<br/>Primer: Reklamni natpis grupe , reklamni natpis se mo&#382;e prikazati u predlo&#353;ku u index.html sa ${BANNER}');
define('TEXT_BANNERS_IMAGE', 'Slika:');
define('TEXT_BANNERS_IMAGE_LOCAL', 'Odaberite &#382;eljenu sliku klikom na dugme "Pregledaj" ili odaberi postoje&#263;i reklamni natpis ispod.<br /><strong>Dozvoljene oznake tipa datoteke:</strong> jpg, jpeg, jpe, gif, png, bmp, tiff, tif, bmp, swf, cab');
define('TEXT_BANNERS_IMAGE_TARGET', 'Meta slike (Sa&#269;uvaj u):');
define('TEXT_BANNERS_HTML_TEXT', 'HTML tekst:');
define('TEXT_BANNERS_HTML_TEXT_NOTE', 'Ovde mo&#382;ete uneti direktno HTML kod koji ste dobili od servisa podru&#382;nice da biste prikazali reklamni natpis.');
define('TEXT_BANNERS_EXPIRES_ON', 'Isti&#269;e na:');
define('TEXT_BANNERS_OR_AT', ', ili kod');
define('TEXT_BANNERS_IMPRESSIONS', 'utisci/prikazi.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Zakazan za:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Napomene sa reklamima:</b><ul><li>Kori&#353;&#263;enje slike ili HTML teksta za reklamni natpis-ne oboje.</li><li>HTML tekst ima prioritet nad slikom</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Bele&#353;ke sa slikom:</b><ul><li>Otpremanje direktorijuma mora da ima odgovaraju&#263;e korisni&#269;ke dozvole (upisne) postavke!</li><li>Nemojte popunjavati polje \'Sa&#269;uvaj u\' ako ne otpremate sliku na webserver (tj, koristite lokalnu (serverstranu) sliku).</li><li>The \'Sa&#269;uvaj u\' polje mora biti postoje&#263;i direktorijum sa zavr&#353;nim kosa crta (eg, banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Bele&#353;ka za isticanje:</b><ul><li>Samo jedno od dva polja treba proslediti</li><li>Ako reklamni natpis ne isti&#269;e automatski, onda ostavite ova polja prazna</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Bele&#353;ka za zakazivanje:</b><ul><li>Ako je raspored postavljen, reklamni natpis &#263;e biti aktiviran na taj dan.</li><li>Svi planirani natpisi su ozna&#269;eni kao deaktivni do njihovog datuma, na koji &#263;e onda biti ozna&#269;eni kao aktivni.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'Datum dodavanja:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Zakazan za: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Isti&#269;e na: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Isti&#269;e na: <b>%s</b> otisak');
define('TEXT_BANNERS_STATUS_CHANGE', 'Promena statusa: %s');

define('TEXT_BANNERS_DATA', 'P<br />Obr />D<br />A<br />C<br />I');
define('TEXT_BANNERS_LAST_3_DAYS', 'Poslednja 3 dana');
define('TEXT_BANNERS_BANNER_VIEWS', 'Prikazi reklamnog natpisa');
define('TEXT_BANNERS_BANNER_CLICKS', 'Klikovi na reklamni natpisa');

define('TEXT_INFO_DELETE_INTRO', '&#381;elite li zaista da izbri&#353;ete ovaj reklamni natpis?');
define('TEXT_INFO_DELETE_IMAGE', 'Izbri&#353;i sliku reklamnog natpisa');

define('SUCCESS_BANNER_INSERTED', 'Uspe&#353;an: reklamni natpis je umetnut.');
define('SUCCESS_BANNER_UPDATED', 'Uspeh: reklamni natpis je a&#382;uriran.');
define('SUCCESS_BANNER_REMOVED', 'Uspeh: reklamni natpis je uklonjen.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Uspeh: status reklamnog natpisa je a&#382;uriran.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Gre&#353;ka: potreban je naslov reklamnog natpisa.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Gre&#353;ka: obavezna grupa natpisa.');
define('ERROR_BANNER_IMAGE_HTML_REQUIRED', 'Gre&#353;ka: potrebna je slika reklamnog natpisa ili HTML tekst.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Gre&#353;ka: ciljni direktorijum ne postoji: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Gre&#353;ka: ciljni direktorijum nije upisivi: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Gre&#353;ka: slika ne postoji.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Gre&#353;ka: nije mogu&#263;e ukloniti sliku.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Gre&#353;ka: nepoznata zastavica statusa.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Gre&#353;ka: direktorijum grafikona ne postoji. Molimo kreirajte \'graphs\' direktorijum unutar direktorijuma \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Gre&#353;ka: grafikoni dijagrama nisu upisivi.');

// BOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT
define('TEXT_BANNERS_DATE_FORMAT', 'YYYY-MM-DD');
// EOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT

define('TEXT_BANNERS_LANGUAGE', 'Jezik:');
define('TEXT_BANNERS_LANGUAGE_NOTE', 'Izaberite jezik na kojem bi trebalo prikazati reklamni natpis?');
define('TEXT_NO_FILE', '-- nema datoteka --');
?>