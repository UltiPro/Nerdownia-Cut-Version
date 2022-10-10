<?php

	session_start();
	
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location: szablon.php');
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<meta name="robots" content="index">
	<meta name="googlebot" content="noarchive;">
	<meta name="description" content="Strona nerdów - Tajne Gify i Obrazki!!!">
	<meta name="keywords" content="Serwery, Gry, Kursy, Tajne, Gify i Obrazki">
	<meta name="author" content="Patryk Wójtowicz">
	<title>Nerdownia - Tajne, Gify i Obrazki</title>	
	<link rel="shortcut icon" href="../../PICTURES/menu/iconaN.png" />
	<link rel="stylesheet" href="../../CSS/style.css" type="text/css" />
	<link rel="stylesheet" href="../../CSS/responsive.css" type="text/css" />		
	<link rel="stylesheet" href="../../CSS/tajne.css" type="text/css" />			
	<script type="text/javascript" src="../../JS/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../JS/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="../../JS/timer.js"></script>
	<script type="text/javascript" src="../../JS/scrollgora.js"></script>
	<script type="text/javascript" src="../../JS/tajne.js"></script>
</head>
<body onload="odliczanie();">
	<div class="strona">
		<a href="#" class="scrollgora"></a>
<!-- Menu -->
<header>
	<div class="menugora">
<?php
	
	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{
		echo "<div class='loginbox'>";	
			echo "<div class='tekstloged'>";
				echo "Witaj <span class='colorloginu'>".$_SESSION['nazwa']."</span> !<br />";
				echo "Email: <span class='colorloginu'>".$_SESSION['email']."</span><br/>";
				echo "Premium: <span class='colorloginu'>".$_SESSION['premium']."</span><br/>";
				echo "<a href='../USTAWIENIA/ustawienia.php' class='ustawienia'>Ustawienia!</a>";
				echo "<a href='../wyloguj.php' class='wyloguj'>Wyloguj się!</a>";
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
<?php include("../MENU/menu.php"); ?>
</nav>
	<div class="oddzialka2"></div>
	</div>
</header>
<!-- KONIECMENU -->
<!-- TREŚĆ -->
<main>
<div class="statycznetlo"><img src="../../PICTURES\TAJNE\tlo.jpg" class="szerokosctla"></div>
	<div class="tresc">
		<article>
			<header>
				<section>
					<div class="midtext">
						<figure class="gifyzdj">
						<img src="../../PICTURES/TAJNE/1.jpeg" class="ramkaobrazkowgifow" id="zdj1trans"/>
						<figcaption>Legendarny Kot Ryszardowa</figcaption>
						</figure>
						<br /><br />
						<figure class="gifyzdj">
						<img src="../../PICTURES/TAJNE/2.gif" class="ramkaobrazkowgifow"/>
						<figcaption>Dobra ziomek nie wydam cię...</figcaption>
						</figure>
						<br /><br />
						<figure class="gifyzdj">
						<div class="nienajezdzajmyszka" onmouseover="nienajezdzaj()" onmouseout="nienajezdzajback()"></div>
						<figcaption id="trescnienajezdzajmyszka">Nie najeżdżaj myszką!!!</figcaption>
						</figure>
						<figure class="gifyzdj">
						<div class="foto4-div">
							<img src="../../PICTURES/TAJNE/4.jpg" / class="foto4-div-scale">
							<p class="foto4-div-text">Bo ta gra nigdy nie umrze.</p>
						</div>
						<figcaption>Pamiętaj o tej grze...</figcaption>
						</figure><br/><br/><br/>
						<figure class="gifyzdj">
						<img src="../../PICTURES/TAJNE/5.jpg" class="ramkaobrazkowgifow" id="zdj1trans"/>
						<figcaption>...</figcaption>
						</figure>
					</div>
				</section>
			</header>
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