<?php
	session_start();

	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{

	}
	else
	{
		header('LOCATION: PHP/trescdostepna.php');
		exit();		
	};
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<meta name="robots" content="index">
	<meta name="googlebot" content="noarchive;">
	<meta name="description" content="Strona nerdów - HTML i CSS!!!">
	<meta name="keywords" content="Serwery, Gry, Kursy, HTML, CSS">
	<meta name="author" content="Patryk Wójtowicz">
	<title>Nerdownia - HTML i CSS</title>	
	<link rel="shortcut icon" href="PICTURES/menu/iconaN.png" />
	<link rel="stylesheet" href="CSS/style.css" type="text/css" />
	<link rel="stylesheet" href="CSS/responsive.css" type="text/css" />		
	<link rel="stylesheet" href="CSS/kursy.css" type="text/css" />			
	<script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="JS/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="JS/timer.js"></script>
	<script type="text/javascript" src="JS/scrollgora.js"></script>
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
<div class="statycznetlo"><img src="PICTURES\KURSY\tlohtmlicss.jpg" class="szerokosctla"></div>
	<div class="tresc">
	<!-- LEWY -->
		<article>
			<div class="lewy">
				<header>
					<div class="rodzajkursu">
						Dostępne Kursy
					</div>
				</header>
				<section>
					<div>
					<?php
					if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true)&&($_SESSION['premium']=="Tak"))
					{
						echo '<a href="FTP/KURS PODSTAWOWY HTML.rar" class="kursa"><fieldset class="kurs"><legend>Podstawowy</legend></fieldset></a>';
						echo '<a href="FTP/HTML i CSS.rar" class="kursa"><fieldset class="kurs"><legend>HTML i CSS</legend></fieldset></a>';
						echo '<a href="FTP/HTML 5.rar" class="kursa"><fieldset class="kurs"><legend>HTML5</legend></fieldset></a>';
					}
					else
					{
						echo '<fieldset class="kursbrakprem"><legend>Podstawowy</legend><span class="kursbrakpremtekst">Dostępny tylko dla użytkowników Premium</span></fieldset>';
						echo '<fieldset class="kursbrakprem"><legend>HTML i CSS</legend><span class="kursbrakpremtekst">Dostępny tylko dla użytkowników Premium</span></fieldset>';
						echo '<fieldset class="kursbrakprem"><legend>HTML5</legend><span class="kursbrakpremtekst">Dostępny tylko dla użytkowników Premium</span></fieldset>';
					}
					?>
						<br />
						<a href="https://www.youtube.com/watch?v=k2IydkL3EOs&list=PLOYHgt8dIdox9Qq3X9iAdSVekS_5Vcp5r&index=2" target="blank" class="kursa"><fieldset class="kursyt"><legend>YT - HTML</legend></fieldset></a>
						<a href="https://www.youtube.com/watch?v=RJEKMbD_kEk&list=PLOYHgt8dIdow6b2Qm3aTJbKT2BPo5iybv&index=1" target="blank" class="kursa"><fieldset class="kursyt"><legend>YT - CSS</legend></fieldset></a>
					</div>
				</section>
			</div>
		</article>
	<!-- KONIEC LEWY -->
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