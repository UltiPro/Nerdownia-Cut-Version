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
	<meta name="description" content="Strona nerdów - Tajne ekipka!!!">
	<meta name="keywords" content="Serwery, Gry, Kursy, Tajne Ekipka">
	<meta name="author" content="Patryk Wójtowicz">
	<title>Nerdownia - Tajne, Ekipka</title>	
	<link rel="shortcut icon" href="../../PICTURES/menu/iconaN.png" />
	<link rel="stylesheet" href="../../CSS/style.css" type="text/css" />
	<link rel="stylesheet" href="../../CSS/responsive.css" type="text/css" />	
	<link rel="stylesheet" href="../../CSS/tajne.css" type="text/css" />			
	<script type="text/javascript" src="../../JS/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../JS/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="../../JS/timer.js"></script>
	<script type="text/javascript" src="../../JS/scrollgora.js"></script>
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
						<video controls class="nagranie">
							<source src="../../VIDEO/TAJNE/1.mp4">
							<p>Twoja Przeglądarka nie obsługuje tego typu plików. Zelecana przeglądarka GOOGLE CHROME</p>
						</video>
						<video controls class="nagranie">
							<source src="../../VIDEO/TAJNE/2.mp4">
							<p>Twoja Przeglądarka nie obsługuje tego typu plików. Zelecana przeglądarka GOOGLE CHROME</p>
						</video>
						<video controls class="nagranie">
							<source src="../../VIDEO/TAJNE/3.mp4">
							<p>Twoja Przeglądarka nie obsługuje tego typu plików. Zelecana przeglądarka GOOGLE CHROME</p>
						</video>
						<video controls class="nagranie">
							<source src="../../VIDEO/TAJNE/4.mp4">
							<p>Twoja Przeglądarka nie obsługuje tego typu plików. Zelecana przeglądarka GOOGLE CHROME</p>
						</video>
						<video controls class="nagranie">
							<source src="../../VIDEO/TAJNE/5.mp4">
							<p>Twoja Przeglądarka nie obsługuje tego typu plików. Zelecana przeglądarka GOOGLE CHROME</p>
						</video>
						<video controls class="nagranie">
							<source src="../../VIDEO/TAJNE/6.mp4">
							<p>Twoja Przeglądarka nie obsługuje tego typu plików. Zelecana przeglądarka GOOGLE CHROME</p>
						</video>
						<video controls class="nagranie">
							<source src="../../VIDEO/TAJNE/7.mp4">
							<p>Twoja Przeglądarka nie obsługuje tego typu plików. Zelecana przeglądarka GOOGLE CHROME</p>
						</video>
						<video controls class="nagranie">
							<source src="../../VIDEO/TAJNE/8.mp4">
							<p>Twoja Przeglądarka nie obsługuje tego typu plików. Zelecana przeglądarka GOOGLE CHROME</p>
						</video>
						<video controls class="nagranie">
							<source src="../../VIDEO/TAJNE/9.mp4">
							<p>Twoja Przeglądarka nie obsługuje tego typu plików. Zelecana przeglądarka GOOGLE CHROME</p>
						</video>
						<video controls class="nagranie">
							<source src="../../VIDEO/TAJNE/10.mp4">
							<p>Twoja Przeglądarka nie obsługuje tego typu plików. Zelecana przeglądarka GOOGLE CHROME</p>
						</video>
						<video controls class="nagranie">
							<source src="../../VIDEO/TAJNE/11.mp4">
							<p>Twoja Przeglądarka nie obsługuje tego typu plików. Zelecana przeglądarka GOOGLE CHROME</p>
						</video>
						<video controls class="nagranie">
							<source src="../../VIDEO/TAJNE/12.mp4">
							<p>Twoja Przeglądarka nie obsługuje tego typu plików. Zelecana przeglądarka GOOGLE CHROME</p>
						</video>
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