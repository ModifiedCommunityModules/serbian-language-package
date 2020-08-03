<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_payment.php 11584 2019-03-21 10:35:17Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (C) 2007 Estelco - Ebusiness & more - http://www.estelco.de
   (C) 2004 IT eSolutions Andreas Zimmermann - http://www.it-esolutions.de

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK', ' <a onclick="window.open(\'popup_help.php?type=order_total&modul=ot_payment&lng=english\', \'HELP\', \'scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600\'); return false" target="_blank" href="popup_help.php?type=order_total&modul=ot_payment&lng=english"><b>[HELP]</b></a>');
define('MODULE_ORDER_TOTAL_PAYMENT_HELP_TEXT', '<h2>Popust na vrstu pla&#263;anja &amp; vi&#353;ak</h2>
Ako je potrebno vi&#353;e opsega zahtevanih popusta (podrazumevano je <b>3</b>), vrednost promenljive $num (jezi&#269;kih datoteka) i $this->num (datoteka modula) mora da se promeni u &#382;eljenu vrednost.
Novija uve&#263;a zahteva deinstalaciju/ponovnu instalaciju modula ili ru&#269;nu korekciju baze podataka!
<hr>
<h3>Skala polja popusta</h3>
<p class="red">Napomena: adresa za isporuku je klju&#269;na za &#353;ifre zemlje. Ako bi popust/vi&#353;ak tro&#353;ka trebalo da va&#382;i za sve zemlje, &#353;ifra 00 mora da se koristi ili pozivni broj zemlje mora biti potpuno izostavljen (uklju&#269;uju&#263;i &quot;|&quot;)!</p>
<h4>Za popuste koristi slede&#263;u funkciju za obele&#382;avanje:</h4>
<pre>   <span class="blue">DE</span>|<span class="green">100</span>:<span class="red">4</span>,<span class="green">200</span>:<span class="red">5</span></pre>
<p>Meaning:</p>
<p>Za kupce iz <span class="blue">Nema&#269;ka</span>  sa volumenom za porud&#382;binu iz <span class="green">100&euro;</span> popust od <span class="red">4%</span> &#263;e biti odobren od <span class="green">200&euro;</span> popust od <span class="red">5%</span> &#263;e biti odobren.</p>
<pre>   <span class="green">100</span>:<span class="red">2</span>,<span class="green">200</span>:<span class="red">3</span></pre>
<p>Zna&#269;enje:</p>
<p>Za kupce iz svih zemalja sa volumenima porud&#382;bine od <span class="green">100&euro;</span>  popust od <span class="red">2%</span>&#263;e biti odobren, od <span class="green">200&euro;</span> popust od <span class="red">3%</span> &#263;e biti odobren.</p>
<h4>Za vi&#353;ak naplate koristite slede&#263;u notaciju:</h4>
<pre>   <span class="blue">DE</span>|<span class="green">100</span>:<span class="red">-3</span></pre>
<p>Zna&#269;enje:</p>
<p>Za kupce iz <span class="blue">Nema&#269;ka</span> sa volumenom za porud&#382;binu iz <span class="green">100&euro;</span> popust od <span class="red">3%</span>  &#263;e biti dodat.</p>
<h4>Primer za PayPal</h4>
1. Skala popusta
<pre>   <span class="blue">DE</span>|<span class="green">0</span>:<span class="red">-1.9</span>&amp;<span class="lila">-0.35</span></pre>
2. Skala popusta
<pre>   <span class="blue">00</span>|<span class="green">0</span>:<span class="red">-3.4</span>&amp;<span class="lila">-0.35</span></pre>
<p>Zna&#269;enje:</p>
<p>Za kupce iz <span class="blue">Nema&#269;ka</span> sa volumenom za porud&#382;binu iz <span class="green">0&euro;</span> (npr. uvek) vi&#353;ak <span class="red">1,9%</span> plus <span class="lila">0,35&euro;</span> &#263;e biti dodat.</p>
<p>Za kupce iz <span class="blue">sve druge zemlje (00=sve)</span> sa volumenom za porud&#382;binu iz <span class="green">0&euro;</span> vi&#353;ak od <span class="red">3,4%</span> plus <span class="lila">0,35&euro;</span> &#263;e biti dodat.</p>
<p>Va&#382;no je redosled stavki (sve ostale zemlje uvek na kraju) i to  &quot;Multiple calculation &quot; postavljeno na &quot;neta&#269;no&quot;, u suprotnom &#263;e biti dodato i vi&#353;ak optu&#382;nice.</p>
<h4>Primer za fiksne iznose</h4>
<pre>   <span class="green">0</span>:<span class="red">0</span>&amp;<span class="lila">-2</span></pre>
<p>Zna&#269;enje:</p>
<p>Za kupce iz svih zemalja sa volumenima porud&#382;bine od  <span class="green">0&euro;</span> (npr. uvek) vi&#353;ak od <span class="red">0%</span> (Zna&#269;i bez naknade za vi&#353;ak) plus <span class="lila">2,00&euro;</span> (Fiksna naknada za vi&#353;ak) bi&#263;e dodata.</p>
<hr>
<h3>Vrsta pla&#263;anja polja</h3>
<p>Unesite <b> interni kôd kori&#353;&#263;enja </b> vrste uplate, npr. <b> nalog za proizvodnju </b> za &#269;ek/novac ili <b> "bakalac" </b> za gotovinsku isporuku. Vi&#353;e vrsta pla&#263;anja mora biti razdvojen zarezom. </p>
Pogledajte i module -&gt; Platni sistemi -&gt; Kolone &quot; Ime modula (za internu upotrebu)&quot;.<br/><br/>
<hr>
<h3>Prika&#382;i u pla&#263;anju pri odjavu tokom procesa porud&#382;bine</h3>
Ako bi odgovaraju&#263;i popust trebalo da bude prikazan tokom procesa porud&#382;bine kada se mora izabrati uplata, podesite opciju &quot;Prika&#382;i u pla&#263;anju types&quot; u&quot;ta&#269;no&quot;. <br/><br/>
Dalja jedna mo&#382;e sa opcijom "Tip prikaza u procesu porud&#382;bine na selekciji pla&#263;anja" Postavi vrstu predstavljenosti:
<p> -- podrazumevani: procenat ili iznos, zavisno od stavki u Skali popusta</p>
<p> -- Cena: uvek prikazuje stvarni iznos</p>'
);

define('MODULE_ORDER_TOTAL_PAYMENT_TITLE', 'Popust na vrstu pla&#263;anja &amp; vi&#353;ak');
define('MODULE_ORDER_TOTAL_PAYMENT_DESCRIPTION', 'Popust na vrstu pla&#263;anja &amp; vi&#353;ak'.MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK);

define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_TITLE', 'Prika&#382;i popust');
define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_DESC', '&#382;elite li da omogu&#263;ite popust na porud&#382;binu');

define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_TITLE', '<hr>Redosled sortiranja');
define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_DESC', 'Redosled sortiranja prikaza');

if (defined('MODULE_ORDER_TOTAL_PAYMENT_NUMBER')) {
  for ($j=1; $j<=MODULE_ORDER_TOTAL_PAYMENT_NUMBER; $j++) {
    define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_TITLE', $j . '. Procenat popusta');
    define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_DESC', 'Iznos popusta (zemlje | vrednost: procenat & naknada)');
    define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_TITLE', $j . '. Vrsta pla&#263;anja');
    define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_DESC', 'Vrsta pla&#263;anja za dobijanje popusta');
  }
}

define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_TITLE', '<hr>Uklju&#269;i isporuku');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_DESC', 'Uklju&#269;i isporuku u obra&#269;un');

define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_TITLE', '<hr>Uklju&#269;i porez');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_DESC', 'Uklju&#269;i porez u obra&#269;un');

define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_TITLE', '<hr>Obra&#269;un poreza');
define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_DESC', 'Ponovo Izra&#269;unaj porez na diskontani iznos');

define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_TITLE', '<hr>Dozvoljene zone');
define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_DESC' , 'Unesite zone <b> zasebno </b> kojima bi trebalo dozvoliti kori&#353;&#263;enje ove NB (e. g. na, DE (ostavi prazno ako &#382;elite da dozvolite sve zone))');

define('MODULE_ORDER_TOTAL_PAYMENT_DISCOUNT', 'Popusta');
define('MODULE_ORDER_TOTAL_PAYMENT_FEE', 'Naknadu');

define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_TITLE','<hr>Poreska klasa');
define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_DESC','Koristite slede&#263;u poresku klasu za niske naknade za porud&#382;binu.');

define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_TITLE','<hr>Vi&#353;e ra&#269;unanja');
define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_DESC','Da li je mogu&#263;e vi&#353;e ra&#269;unanja? Ako &#263;e se neta&#269;no izra&#269;unavanje zaustaviti nakon prvog pode&#353;avanja.');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_TITLE', '<hr>Prika&#382;i u tipovima pla&#263;anja');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_DESC', 'Prikaz tokom procesa odjave pri odjavu');

define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_TITLE', '<hr>Na&#269;in prikazivanja tipova pla&#263;anja');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_DESC', 'Prikaz u procesu poru&#269;ivanja na lokaciji < br/>-default: procenat ili iznos, u zavisnosti od ulaza po popustu < br/>-cena: uvek &#263;e prikazivati stvarni iznos');

define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_TITLE', 'Tip isplate brojeva');
define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_DESC', 'Broj popusta na vrstu pla&#263;anja &amp; vi&#353;ak');
?>