<?php
$data=date("Y-m-d");
$czas=date("H:i");
$dane = ";";
$dane .= $data." ".$czas."; ";
$dane .= $_SERVER['HTTP_USER_AGENT'].'; '; 
$dane .= 'REMOTE_ADDR='.$_SERVER['REMOTE_ADDR'].'; '; 
/*$dane .=
'HTTP_X_FORWARDED_FOR='.$_SERVER['HTTP_X_FORWARDED_FOR'].'; '; 

$dane .=
'REMOTE_HOST='.$_SERVER['REMOTE_HOST'].'; '; 
*/
$dane .=
'REQUEST_URI='.$_SERVER['REQUEST_URI'].'; '; 
/* $dane .=
'HTTP_REFERER='.$_SERVER['HTTP_REFERER'].'; ';*/
$dane .= 'HTTP_ACCEPT_LANGUAGE='.$_SERVER["HTTP_ACCEPT_LANGUAGE"];
@file_put_contents("odwiedziny+sp9ryc+.txt",$dane."\n",FILE_APPEND); 
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>

<script src="dist/snowfall.jquery.min.js"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-5199564-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-5199564-9');
</script>
        <!-- Google tag (gtag.js) -->
        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=G-V8EQZWEH0Z"
        ></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "G-V8EQZWEH0Z");
        </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>CV Ryszard CZEKAJ</title>
        <meta
            name="keywords"
            content="freelance, zaawansowane programowanie, strony internetowe, PHP, HTML, CSS"
        >
        <meta
            name="description"
            content="CV Ryszard Czekaj - Freelancer - Programistyka - PHP - Projektowanie rozwiązań IT"
        >
        <meta content="google" name="robots">
        <meta content="RYCHoo Ryszard Czekaj" name="author">
        <link
            rel="icon"
            href="https://RYCHoo.TheUnixPlace.COM/logo.ico"
            type="image/x-icon"
        >
        <link href="style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
            rel="stylesheet"
        >
    </head>
    <body>
<script type='text/javascript'>
	$(document).ready(function(){
		$(document).snowfall({flakeCount:100, maxSpeed:5, maxSize:5});
});
</script>

<a href="http://rychOO.netify.APP/index_2023.html">@</a>
        <div class="wrapper">
            <main>
            <div align="right" class="gte" id="google_translate_element"></div>
        <script
            type="text/javascript"
            src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
        ></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement(
                    { pageLanguage: "pl" },
                    "google_translate_element"
                );
            }
        </script>
                <div class="main-description">
<a href="https://nwtime.org/news/index.html">RSS Feed for U2!</a>
                    <h2 class="job-title">Back End Developer</h2>
                    <h1>szer. mgr pwd Ryszard W. CZEKAJ SAGE HO</h1>
                    <p class="description">
                        Nauczyciel techniki z&nbsp;wykształcenia, informatyk,
                        programista, złota rączka z&nbsp;zamiłowania. Praktyczna
                        znajomość budowy i&nbsp;administracji sieci
                        komputerowych poparta uzyskaniem w&nbsp;1997 roku
                        koncesji Ministera Łączności na świadczenie usług
                        telekomunikacyjnych nr&nbsp;274/97/I. Umiejętność pracy
                        w&nbsp;grupie w&nbsp;środowisku międzynarodowym. Obsługa
                        elektronarzędzi, maszyn i&nbsp;urządzeń, prace montażowe
                        również urządzeń elektrycznych, lutowanie.
                        Samodzielność, odporność na stres, terminowość
                        i&nbsp;skrupulatność. Programista stron WWW
                        w&nbsp;języku PHP. Ostatnio konsultant techniczny w branży TETRA, DMRassociation.org, P-25.
                    </p>
                </div>
                <div class="projects">
                    <h2 class="header-primary">Projekty</h2>
                    <ol class="list-primary">
                        <li class="list-primary-item">
                            <a href="http://thundertransport.pl"
                                >http://thundertransport.pl</a
                            ><span class="list-primary-item"
                                >..............</span
                            >[<span class="list-primary-item"
                                >HTML, JavaScript, PHP</span
                            >]
                        </li>
                        <li class="list-primary-item">
                            <a href="https://followmyfashion.com"
                                >https://followmyfashion.com</a
                            ><span class="list-primary-item">........</span
                            >[<span class="list-primary-item"
                                >HTML, JavaScript, PHP</span
                            >]
                        </li>
                        <li class="list-primary-item">
                            <a href="http://www.runningcalendar.eu"
                                >http://www.runningcalendar.eu</a
                            ><span class="list-primary-item">.</span>[<span
                                class="list-primary-item"
                                >HTML, PHP</span
                            >]
                        </li>
                        <li class="list-primary-item">
                            <a href="http://www.github.com/rychoo/"
                                >http://www.github.com/rychoo/</a
                            ><span class="list-primary-item">..</span>[<span
                                class="list-primary-item"
                                >HTML, PHP, C</span
                            >]
                        </li>
                        <li class="list-primary-item">
                            <a href="http://rychoo.theunixplace.com/fortfiglet/"
                                >fortfiglet</a
                            >
                            wersje:
                            <a href="http://rychoo.theunixplace.com/pl">pl</a>
                            <a href="http://rychoo.theunixplace.com/us">us</a>
                            <a href="http://rychoo.theunixplace.com/uk">uk</a>
                            <a href="http://rychoo.theunixplace.com/ro">ro</a>
                            <a href="http://rychoo.theunixplace.com/ru">ru</a>
                            <a href="http://rychoo.theunixplace.com/tw">tw</a>
                            <a href="http://rychoo.theunixplace.com/it">it</a
                            ><span class="list-primary-item"> ......</span
                            >[<span class="list-primary-item"
                                >HTML,
                                <a
                                    href="https://github.com/rychoo/GeoNerd/blob/master/fortfiglet.php"
                                    >PHP</a
                                >,
                                <a
                                    href="https://github.com/rychoo/GeoNerd/blob/master/fortfiglet.c"
                                    >C</a
                                ></span
                            >]
                        </li>
                    </ol>
                </div>
                <div>
                    <h2 class="header-primary">Doświadczenie zawodowe</h2>

                    <h3 class="job-position">
                        Full Stack Developer
                        <span class="highligth">Freelance</span>
                    </h3>
                    <p class="job-date">01.2004 - nadal</p>
                    <ul class="job-list">
                        <li>Programowanie stron HTML i&nbsp;CSS</li>
                        <li>Programowanie w&nbsp;PHP</li>
                        <li>Umieszczanie Google Maps na stronach</li>
                    </ul>
                </div>
                <div>
                    <h3 class="job-position">Technical Consultant, Software Integrator</h3>
                    <p class="job-date">11.2023 - 07.2024</p>
                    <ul class="job-list">
                        <li>
                            Praca hybrydowa dla Page Communication Gliwice
                            <a href="https://pagecomm.com.pl/">
                                https://pagecomm.com.pl/</a
                            >
				& IP&nbsp;Connect Rybnik
				<a href="https://IPconnect.pl/">
				https://ipconnect.pl
				</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="job-position">Back End Developer</h3>
                    <p class="job-date">10.2010 - 08.2022</p>
                    <ul class="job-list">
                        <li>
                            Programowanie w PHP z&nbsp;użyciem CakePHP
                            i&nbsp;innych technologii dla DD1Studio
                            <a href=" http://www.dd1studio.com/">
                                http://www.dd1studio.com/</a
                            >
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="job-position">
                        Pracownik fizyczny Axell, Holandia
                    </h3>
                    <p class="job-date">07.2009 - 12.2009</p>
                    <ul class="job-list">
                        <li>
                            Sprzątanie placu i&nbsp;przykrywanie kontenerów
                            z&nbsp;odpadami, Van Happen Containers
                            <a href="http://www.vanhappencontainers.nl/"
                                >http://www.vanhappencontainers.nl/</a
                            >
                        </li>
                        <li>
                            Rozładowywanie tirów i&nbsp;kompletowanie zamówień
                            na AGD, De Rooy
                            <a href="http://www.derooy.com/"
                                >http://www.derooy.com/</a
                            >
                        </li>
                        <li>Praca przy produkcji poszyć dachowych, Opstalan</li>
                        <li>
                            Praca w&nbsp;fabryce sera koziego, Kaasmakerij de
                            Jong
                            <a href="http://www.goatcheese.nl/"
                                >http://www.goatcheese.nl/</a
                            >
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="job-position">
                        Pracownik fizyczny World Wide Staffing, Holandia,
                        <span class="highligth">SoFi&nbsp;2679.53.185</span>
                    </h3>
                    <p class="job-date">10.2007 - 12.2007</p>
                    <ul class="job-list">
                        <li>
                            Praca przy obrabiarkach drewna, Elephant Dekker
                            <a href="http://www.dekkerhout.nl/"
                                >http://www.dekkerhout.nl/</a
                            >"
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="job-position">
                        Pracownik fizyczny JobServer, Dania,
                        <span class="highligth">CPR:&nbsp;030270-2683</span>
                    </h3>
                    <p class="job-date">06.2006 - 03.2007</p>
                    <ul class="job-list">
                        <li>
                            Montowanie konstrukcji stalowych do wyposażenia
                            świniarni i&nbsp;budowa silosów na zboże, DanSystem
                            Industri
                            <a href="http://www.dansystemindustri.dk/"
                                >http://www.dansystemindustri.dk/</a
                            >
                        </li>
                        <li>
                            Kompletowanie zamówień na paletach w&nbsp;hurtowni
                            mrożonek, Frigoscandia
                            <a href="http://www.frigoscandia.dk/"
                                >http://www.frigoscandia.dk/</a
                            >
                        </li>
                        <li>
                            Kompletowanie kół i&nbsp;wyważanie, T.&nbsp;Hansen
                            Gruppen
                            <a href="http://www.thansen.dk/"
                                >http://www.thansen.dk/</a
                            >
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="job-position">
                        Specjalista ds. systemów informatycznych, AKSEL-NET,
                        44-207 Rybnik, ul.&nbsp;Lipowa&nbsp;17
                        <a href="http://www.aksel.com.pl/"
                            >http://www.aksel.com.pl/</a
                        >
                    </h3>
                    <p class="job-date">06.2002 - 12.2003</p>
                    <ul class="job-list">
                        <li>Administracja sieci</li>
                        <li>Tworzenie i&nbsp;wdrażanie projektów</li>
                        <li>
                            Programowanie w&nbsp;Delphi i&nbsp;C&nbsp;aplikacji
                            dyspozytorskich dla radiotelefonów Kenwood
                            i&nbsp;Motorola
                        </li>
                        <li>Webmaster</li>
                    </ul>
                </div>
                <div>
                    <h3 class="job-position">
                        Nauczyciel, Zespół Szkół Liceum Ogólnokształcące, 44-280
                        Rydułtowy, ul.&nbsp;Skalna&nbsp;1
                        <a href="http://www.zsp1rydultowy.internetdsl.pl/"
                            >http://www.zsp1rydultowy.internetdsl.pl/</a
                        >
                    </h3>
                    <p class="job-date">09-2000 - 08.2001</p>
                    <ul class="job-list">
                        <li>Nauczanie informatyki w&nbsp;szkole średniej</li>
                    </ul>
                </div>
                <div>
                    <h3 class="job-position">
                        Własna działalność gospodarcza , ”RYCHo Ryszard Czekaj
                        Usługi Informatyczne i&nbsp;Internetowe” , 40-005
                        Katowice, Aleja Korfantego&nbsp;8/145
                        <span class="highligth"
                            >NIP:&nbsp;647-149-85-92 REGON 273553687 EKD 7220
                            804290 6420 KGN 671</span
                        >
                    </h3>
                    <p class="job-date">06.1997 - 02.2000</p>
                    <ul class="job-list">
                        <li>
                            Praca dla Ośrodka Szkolenia Informatycznego DEMO
                            s.c. w Katowicach
                            <a href="http://www.demo.pl/"
                                >http://www.demo.pl/</a
                            >
                        </li>
                        <li>
                            Stworzenie i&nbsp;kierowanie działem internetowym:
                            www.demo.pl w&nbsp;oparciu o&nbsp;FreeBSD
                        </li>
                        <li>
                            Nauczanie sieci komputerowych w&nbsp;prywatnej
                            szkole policealnej ”PPSIE NOVUM”
                        </li>
                        <li>Prowadzenie kursów zawodowych</li>
                    </ul>
                </div>
                <div>
                    <h3 class="job-position">
                        Nauczyciel, Zespół Szkół Elektronicznych, 41-200
                        Sosnowiec, ul.&nbsp;Jagiellońska&nbsp;13
                        <a href="http://elektronik.zse.edu.pl/"
                            >http://elektronik.zse.edu.pl/</a
                        >
                    </h3>
                    <p class="job-date">09.1995 - 08.1996</p>
                    <ul class="job-list">
                        <li>
                            Nauczanie informatyki w&nbsp;szkole średniej
                            i&nbsp;policealnej
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="header-primary">Edukacja</h2>
                    <h3>
                        Magister Wychowania Technicznego specjalność Informatyka
                        Nauczycielska
                        <span class="highligth">Nr&nbsp;3815/WT/96</span>
                    </h3>
                    <p class="education-date">1990 – 1996</p>
                    <h4>
                        Uniwersytet Śląski w Katowicach
                        <a href="http://www.us.edu.pl/">http://www.us.edu.pl/</a
                        >, <br>
                        Wydział Techniki w Sosnowcu
                        <a href="http://www.wiinom.us.edu.pl/"
                            >http://www.wiinom.us.edu.pl/</a
                        >
                    </h4>
                    <h3>
                        Szkoła średnia, „I LO Wodzisław Śląski”,
                        <a href="http://lo1-wodzislaw.pl/"
                            >http://lo1-wodzislaw.pl/</a
                        >
                    </h3>
                    <p class="education-date">1985 – 1990</p>
                    <h4>Klasa matematyczno-fizyczna</h4>
                    <h3>
                        Szkoła podstawowa,
                        <a href="https://zsp7.edupage.org/about/"
                            >https://zsp7.edupage.org/about/</a
                        >
                    </h3>
                    <p class="education-date">1976 – 1985</p>
                    <h4>
                        I&nbsp;miejsce na Olimpiadzie Wiedzy Technicznej na
                        szczeblu wojwódzkim
                    </h4>
                </div>
                <div>
                    <h2>Praca magisterska</h2>
                    <h3>
                        „Emulacja drukarki i plotera w trybie graficznym”
                        <a href="http://rychoo.theunixplace.com/mgr/"
                            >http://rychoo.theunixplace.com/mgr/</a
                        >
                    </h3>
                    <p>
                        promotorzy: prof. dr hab. inż. Dariusz Badura & mgr
                        Ireneusz Gościniak
                    </p>
                    <p class="article">
                        Zaprojektowanie kompletnego oprogramowania emulującego
                        drukarkę i&nbsp;ploter z&nbsp;ich rozmaitymi językami
                        sterowania na ekranie graficznym, wykonane
                        z&nbsp;pierwszym 32–bitowym kompilatorem Borlanda dla MS
                        Windows w&nbsp;C++. W&nbsp;części pisemnej pracy opis
                        współczesnych urządzeń oraz studium obiektowej metody
                        analizy i&nbsp;interpretacji języka urządzenia
                        z&nbsp;wykorzystaniem własnych sterowników
                        w&nbsp;plikach tekstowych.
                    </p>
                </div>
            </main>
            <aside>
                <img
                    class="cv-photo"
                    src="http://rychoo.theunixplace.com/Bonifacy.home/Pictures/Camera%20Roll/WIN_20240319_13_48_29_Pro.jpg"
                    alt="Fotografia Ryszarda Czekaj@"
                    width="370"
                >
                <div class="contact-block">
                    <h2 class="header-secondary">Kontakt</h2>
                    <p class="contact-links">
                        <span class="bold">telefon</span>
                        <a class="contact-links" href="tel:+420604242416"
                            >+420 604 242 416</a
                        ><br>
                        <span class="bold">e-mail</span>
                        <a
                            class="contact-links"
                            href="mailto:GeoNerd.EU@gmail.com"
                            >GeoNerd.eu@gmail.com</a
                        >
<br>
			<span class="bold">adres do e-Doręczeń: </span>
			AE:PL-64026-47500-IHUSG-10<br>
 	<span class="bold">IDSISC && EORI: </span>
 	PL700203077510000
                    </p>
                </div>
                <div class="tech-skills-block">
                    <h2 class="header-secondary">Umiejętności techniczne</h2>
                    <ul class="list-secondary">
                        <li><span class="list-secondary-item">HTML5</span></li>
                        <li><span class="list-secondary-item">CSS3</span></li>
                        <li><span class="list-secondary-item">PHP</span></li>
                        <li><span class="list-secondary-item">SQL - MySQL, PostgreSQL, FirebirdSQL</span></li>
                        <li>
                            <span class="list-secondary-item">assembler</span>
                        </li>
                        <li><span class="list-secondary-item">BASIC</span></li>
                        <li><span class="list-secondary-item">C/C++</span></li>
                        <li>
                            <span class="list-secondary-item"
                                >Delphi (Pascal)</span
                            >
                        </li>
                        <li>
                            <span class="list-secondary-item">MS Windows</span>
                        </li>
                        <li>
                            <span class="list-secondary-item"
                                >FreeBSD, NetBSD, Linux</span
                            >
                        </li>
                        <li><span class="list-secondary-item">Mac OS</span></li>
                        <li>
                            <span class="list-secondary-item"
                                >TCP/IP Networking</span
                            >
                        </li>
                        <li>
                            <span class="list-secondary-item"
                                >Ostatnie
                                <a
                                    class="contact-links"
                                    href="https://ipv6.he.net/certification/"
                                    >certyfikaty</a
                                >
                                <a class="contact-links" href="sage.pdf"
                                    >Sage</a
                                >
                                Hurricane Electric IPv6<br>
                                <img
                                    src="//ipv6.he.net/certification/create_badge.php?pass_name=underdot&amp;badge=3"
                                    style="
                                        border: 0;
                                        width: 250px;
                                        height: 194px;
                                    "
                                    alt="IPv6 Certification Badge for underdot"
                                ><br>
                                Moje
                                <a
                                    class="contact-links"
                                    href="https://rychoo.theunixplace.com/doc/Dyplomy/"
                                    >dyplomy</a
                                ><br>
                                <a href="https://goit.global/pl/">
                                    <img src="http://rychOO.TheUNiXplace.com/certificate.png"
                                    style="
                                    border: 0;
                                    width: 250px;
                                    "
                                    alt="CERTIFICATE Ryszard Czekaj GoIT English HTML">
                                </a>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="soft-skill-block">
                    <h2 class="header-secondary">Umiejętności miękkie</h2>
                    <ul class="list-secondary">
                        <!--                        <li><span class="list-secondary-item">Scrum</span></li>
                        <li><span class="list-secondary-item">Agile</span></li>
                        <li><span class="list-secondary-item">GTD</span></li>
                        <li>
                            <span class="list-secondary-item">Teamwork</span>
                        </li>
                    -->
                        <li>
                            <span class="list-secondary-item"
                                >Dobra organizacja pracy</span
                            >
                        </li>
                        <li>
                            <span class="list-secondary-item"
                                >Umiejętność analitycznego myślenia</span
                            >
                        </li>
                        <li>
                            <span class="list-secondary-item"
                                >Samodzielność</span
                            >
                        </li>
                        <li>
                            <span class="list-secondary-item"
                                >Umiejętność pracy w zespole</span
                            >
                        </li>
                        <li>
                            <span class="list-secondary-item"
                                >Skupienie na celu</span
                            >
                        </li>
                        <li>
                            <span class="list-secondary-item"
                                >Umiejętność zarządzania czasem,
                                terminowość</span
                            >
                        </li>
                        <li>
                            <span class="list-secondary-item"
                                >Chęć do nauki, samorozwoju</span
                            >
                        </li>
                        <li>
                            <span class="list-secondary-item">Kreatywność</span>
                        </li>
                        <li>
                            <span class="list-secondary-item"
                                >Motywacja do pracy</span
                            >
                        </li>
                        <li>
                            <span class="list-secondary-item"
                                >Elastyczność</span
                            >
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
        <footer>
            <a
                href="https://www.4coins.pl/dotacja/?payment=ca1367a49ee124bb77ea5a1f9ac13f32"
                title="bitcoin"
                ><img
                    src="https://www.4coins.pl/payments/grants/pl/2-171x67-dark.png"
                    style="border: 0"
                    alt="bitcoin"
            ></a>
<div>
<a href="/usage/">Statystyki strony</a>
</a>
  &amp;&amp;
<a href="/phpsysinfo/">System na którym działam</a> 8-&gt;
            <a href="https://rychOO.TheUNiXplace.com/GeoNerd/eu/"
                ><img
                    src="https://RYCHoo.TheUnixPlace.com/L4/lynxfrnd.gif"
                    alt="[This page is lynx friendly]"
            ></a>
        </footer>
<!-- #
PKO BANK POLSKI 	WWW.PKOBP.PL
DATE 	TIME 	ATM 	SEQ NO
23/01/24 	12:52 	S1KA4644 	1065

ATM LOCATION: RYBNIK
UL. CHROBREGO 1

CARD NUMBER 	************37
AID: 	A0000000031010

BALANCE INQUIRY
LEDGER BALANCE 	314.20
AVAILABLE BALANCE 	1,225.76,669

CALL CENTER(TOTAL CALL COST WILL BE THAT
OF A SINGLE BILLING IMPULSE OF LOCAL
CALL):800 302 302; +48 81 535 60 60

80616000120043946608 NFZ KATOWICE - WF12 - WSzW [16]
www.nfz.gov.pl

Nr KRS: 0000126722
NIP: 954-250-03-24
REGON: 277-886-339
rob sp9ryc
.

bigstar.pl: 9-970010-471408
.

ssh NATO.int
Login: sp9ryc
Password: *********
#Hi

Prąd, gaz, czynsz, telefon...
Tutaj zapłacisz wszystkie rachunki.
W Żabce się opłaca!
żabka   blisko szybko wygodnie   ZIELONE OKIENKO

Karta identyfikacji Klienta         www.zabka.pl

[verte]

PODPIS KLIENTA
Ubezpieczamy Państwa płatności
Pewnie i bezpiecznie
Karta jest własnością Firmy Żabka SA
W przypadku jej znalezienia należy przekazać ją do Żabka Polska SA,ul. Ogrodowa 12, 61-821 Poznań.
Karta nie jest kartą płatniczą, kredytową, bankomatową oraz nie zastępuje żadnej innej formy płatności.

||| ||| |||
2_400010_716614

<sp9ryc>
Cze!
---
.

puesc.gov.pl
IDSISC: PL700203077510000
EORI: PL700203077510000
DB 4400509
.

BANK PEKAO SA
WWW.PEKAO.COM.PL
INFOLINIA 801 365 365
DATE 	TIME 	ATM NUMBER
05/03/2024 	12:29:20 	R1260226
ATM CASH WITHDRAWAL RECEIPT
CARD NO 	TRANS NO 	AMOUNT PLN
*****83756 	9339 	500.00
AID: 	A0000000000000 	UNKNOWN AID
THANK YOU FOR VISIT
...
DDoS
...
BANK PEKAO SA
WWW.PEKAO.COM.PL
INFOLINIA 801 365 365
DATE 	TIME 	ATM NUMBER
05/03/2024 	12:40:20 	R1260226
ATM BALANCE INQUIRY RECEIPT
CARD NO 	TRANS NO 	AMOUNT PLN
*****29007 	9345
AVAILABLE BALANCE 	0.00
AID: 	A0000000000000 	unknown AID
THANK YOU FOR VISIT
.

netia.pl
Zwycięstwa pl. 8
50.0073061005729 N, 18.4700941498838 E

Państwo Stanowe UUID: 123e4567-e89b-12d3-a456-426614174000
.

BANK PEKAO SA
WWW.PEKAO.COM.PL
INFOLINIA 801 365 365
DATA 	GODZ 	BANKOMAT NR
18/03/2024 	16:05:20 	R1260226
POTWIERDZENIE WPŁATY
NR KARTY 	NR TRANS 	KWOTA
*****90115 	2370 	100.00
SPECYFIKACJA BANKNOTOW
100 PLN * 001 = 100.00
AID: A0000000041010 MASTERCARD
DZIĘKUJEMY I ZAPRASZAMY

...

Planet
 	cash
DATE 	TIME 	ATM 	TRAN
2024/03/19 	07:28:54 	RNET2552 	773
CASH WITHDRAWAL
CARD: ************3756
AMOUNT: 100.00 PLN
AVAILABLE FUNDS: PLEASE SELECT
 	BALANCE INQUIRY TRANSACTION
****************************************
 	THANK YOU
****************************************
 	24 HOUR CALL CENTER
 	801 501 601
.

ZAHIR
KEBAB
Wodzislaw Slaski 01
44-300 Wodzislaw Slaski, ul. Jana Pawla II 9a
ZAHIR & ZAHID Sp. z o.o. Sp. K.
90-057 Lodz, ul. Sienkiewicza 85/87
NIP 6222804989 	nr:87582
 	P_A_R_A_G_O_N F_I_S_K_A_L_N_Y
Chicken Nuggets 	1 	x17,90 	17,90B
Opis:+>Czosnek (0,00)
SPRZEDAZ OPODATKOWANA B 	17,90
PTU B 8% 	1,33
SUMA PTU 	1,33
S_U_M_A PLN 	17,90
ROZLICZENIE PLATNOSCI
GOTOWKA 	50,00 PLN
RESZTA GOTOWKA 	32,10 PLN
00043 #Pos 1231234 	2024-03-30 15:33
Nr zamowienia: 	628-904
 	Na miejscu/Dine in
Numer: #628-87733

...

PKO BANK POLSKI 	WWW.PKOBP.PL
DATE 	TIME 	ATM 	SEQ NO
30/03/24 	15:24 	S1KA0743 	2948
ATM LOACATION WODZISLAW SL.
UL. 26 MARCA 94
CARD NUMBER ************3756
AID: A0000000031010
BALANCE INQUIRY
LEDGER BALANCE 	-911.18
AVAILABLE BALANCE 	13.61
CALL CENTER(TOTAL CALL COST WILL BE THAT
OF A SINGLE BILLING IMPULSE OF LOCAL
CALLL):800 302 302; +48 81 535 60 60
.

-->
    </body>
</html>
