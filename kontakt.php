<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<meta name="robots" content="index">
	<meta name="googlebot" content="noarchive;">
	<meta name="description" content="Strona nerdów - Kontakt !!!">
	<meta name="keywords" content="Serwery, Gry, Kursy, Kontakt">
	<meta name="author" content="Patryk Wójtowicz">
	<title>Nerdownia - Kontakt</title>	
	<link rel="shortcut icon" href="PICTURES/menu/iconaN.png" />
	<link rel="stylesheet" href="CSS/style.css" type="text/css" />
	<link rel="stylesheet" href="CSS/responsive.css" type="text/css" />	
	<link rel="stylesheet" href="CSS/kontakt.css" type="text/css" />		
	<script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="JS/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="JS/timer.js"></script>
	<script type="text/javascript" src="JS/scrollgora.js"></script>
	<script type="text/javascript" src="JS/kontakt.js"></script>
</head>
<body onload="odliczanie();">
	<div class="strona">
		<a href="#" class="scrollgora"></a>
<!-- Menu -->
<header>
	<div class="menugora">
<?php
	session_start();
	
	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{
		echo "<div class='loginbox'>";	
			echo "<div class='tekstloged'>";
				echo "Witaj <span class='colorloginu'>".$_SESSION['nazwa']."</span> !<br />";
				echo "Email: <span class='colorloginu'>".$_SESSION['email']."</span><br/>";
				echo "Premium: <span class='colorloginu'>".$_SESSION['premium']."</span><br/>";
				echo "<a href='PHP/USTAWIENIA/ustawienia.php' class='ustawienia'>Ustawienia!</a>";
				echo "<a href='PHP/wyloguj.php' class='wyloguj'>Wyloguj się!</a>";
			echo "</div>";
		echo "</div>";
	}	
	else
	{
		echo "<div class='loginbox'>";
			echo "<a href='PHP/logowanie.php' class='log'>Zaloguj Się</a>";
			echo "<a href='PHP/rejestracja.php' class='rej'>Zarejestruj Się</a>";
		echo "</div>";
	}
?>
		<div class="tytul"><h1><a href="http://nerdownia.ddns.net/" class="odnosnikimenu">Nerdownia</a></h1></div>
		<h3 class="zegar"><div id="zegar"></div></h3>
	<div class="oddzialka"></div>
<nav>
<?php include("PHP/MENU/menu.php"); ?>
</nav>
	<div class="oddzialka2"></div>
	</div>
</header>
<!-- KONIECMENU -->
<!-- TREŚĆ -->
<main>
<div class="statycznetlo"><img src="PICTURES\KONTAKT\tlo.jpg" class="szerokosctla"></div>
	<div class="tresc">
		<article>
			<div class="kontakt">
				<header>
					<div class="kontakty">
						KONTAKT
					</div>
				</header>
				<section>
					<div class="kontakty2">
						<a href="https://www.facebook.com/patryk.ulti" target="blank"><fieldset class="fieldsetkontakt1"></fieldset></a>
					</div>
				<div id="koniecfloatleft3"></div>
					<div class="kontakty2">
						<a href="https://www.youtube.com/channel/UCZFsZ1eNDyU-L2gIRp53jZQ?view_as=subscriber" target="blank"><fieldset class="fieldsetkontakt2"></fieldset></a>
					</div>
				<div id="koniecfloatleft3"></div>
					<div class="kontakty2">
						<a href="https://steamcommunity.com/id/ulti_pro/" target="blank"><fieldset class="fieldsetkontakt3"></fieldset></a>
					</div>
				<div id="koniecfloatleft2"></div>
					<div id="email" class="kontakty2">
						<div onclick="email()">
							<fieldset class='fieldsetkontakt5'></fieldset>
						</div>
					</div>
				<div id="koniecfloatleft3"></div>
					<div id="tel" class="kontakty2">
						<div onclick="tel()">
							<fieldset class='fieldsetkontakt6'></fieldset>
						</div>
					</div>
				</section>
				<br />
				<section>
					<a href="PHP/kontaktform.php" target="blank" class="formularz">Formularz Kontaktowy? KLIKNIJ</a>
				</section>
				<div id="koniecfloatleft"></div>
			</div>
		</article>
	</div>
</main>
<!-- KONIEC TREŚĆ -->
<footer>
	<div class="menudulopacity9"></div>
	<div class="menudulopacity8"></div>
	<div class="menudulopacity7"></div>
	<div class="menudulopacity6"></div>
	<div class="menudulopacity5"></div>
	<div class="menudulopacity4"></div>
	<div class="menudulopacity3"></div>
	<div class="menudulopacity2"></div>
	<div class="menudulopacity1"></div>
</footer>
	</div>
</body>
</html>