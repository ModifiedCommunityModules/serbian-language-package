<?php
  /* --------------------------------------------------------------
   $Id: cookie_consent.js.php $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2019 [www.modified-shop.org]
   --------------------------------------------------------------
   Released under the GNU General Public License
   --------------------------------------------------------------*/

  define('MODULE_COOKIE_CONSENT_STATUS_TITLE', 'Status modula');
  define('MODULE_COOKIE_CONSENT_STATUS_DESC', 'Aktivirati modul?');
  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_TITLE', 'Postavite &ccaron;itljiv kola&ccaron;ic&#x301;');
  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DESC', '');

  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DETAIL', 'Ako koristite Google menad&zcaron;er oznaka ili drugi softver, oni mogu umetati skripte i postavljati kola&ccaron;ic&#x301;e samo ako posetilac to dozvoli. Dodatni, &ccaron;itljivi kola&ccaron;ic&#x301; mo&zcaron;e se postaviti tako da upravitelj oznaka mo&zcaron;e pro&ccaron;itati zahtev korisnika.<br /><br />Pode&scaron;avanje u Google menad&zcaron;eru oznaka: <br/> Idite u meni "Promenljive" i pod "Korisni&ccaron;ki definisane promenljive" dodajte novu promenljivu. Na primer, imenujte ovaj „Cookieconsent“. <br/> Zatim kliknite na "Podesiti varijablu" i izaberite tip "Kola&ccaron;ic&#x301; prve strane". Unesite naziv kola&ccaron;ic&#x301;a "MODOilTrack".<br /><br />Tada mo&zcaron;ete koristiti svoj "Okida&ccaron;" za ure&dstrok;ivanje.<br />Podesite tip okida&ccaron;a "Prikaz stranice" i izaberite opciju "Neki prikazi stranice".<br />Kao uslov unesite: <em>"Cookieconsent"</em> (naziv promenljive) sadr&zcaron;i <em> ["1": true] </em>. Vrednost sadr&zcaron;ana po kola&ccaron;ic&#x301;u mo&zcaron;e se pronac&#x301;i u konfiguraciji pristanka za kola&ccaron;ic&#x301;.<br /><br />Ilustrovana uputstva mo&zcaron;ete pronac&#x301;i ovde: <a href="https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/" target="_blank">https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/</a>');

  define('MODULE_COOKIE_CONSENT_EXTENDED_DESCRIPTION', '<strong><font color="red">PA&Zcaron;NJA:</font></strong> Unesite pode&scaron;avanja pod "Konfiguracija" -> <a href="'.xtc_href_link(FILENAME_COOKIE_CONSENT).'"><strong>"Cookie Consent"</strong></a>');
  define('MODULE_COOKIE_CONSENT_MORE_INFO', 'Vi&scaron;e informacija:');