<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<meta name="robots" content="index">
	<meta name="googlebot" content="noarchive;">
	<meta name="description" content="Strona nerdów !!!">
	<meta name="keywords" content="Serwery, Gry, Kursy">
	<meta name="author" content="Patryk Wójtowicz">
	<title>Nerdownia</title>	
	<link rel="shortcut icon" href="PICTURES/menu/iconaN.png" />
	<link rel="stylesheet" href="CSS/style.css" type="text/css" />
	<link rel="stylesheet" href="CSS/responsive.css" type="text/css" />		
	<link rel="stylesheet" href="CSS/index.css" type="text/css" />			
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
<div class="statycznetlo"><img src="PICTURES\INDEX\tlo.jpg" class="szerokosctla"></div>
	<div class="tresc">
		<article>
			<div class="indextresc">
				<section>
					<div class="lewemenu">
						<div class="lewemenutekst">
							<div class="ramkalewemenutekst"><br /></div>
							<hr />
							<header>
								<div id="tytulindex">
									Witam na stronie nerdów, poświęconej graniu multi, graniu single oraz programowaniu.
								</div>
							</header>
							<hr />
							Dostęp do stron Serwerów, Gier oraz Kontaktu posiadają wszyscy użytkownicy.<br />
							<hr />
							Dostęp do stron Kursy, Tajne posiadają tylko użytkownicy zalogowani.
							<hr />
							<div class="ramkalewemenutekst"><br /></div>
						</div>
					</div>
				</section>
				<section>
					<div class="aktualnosci">
						<ul>
							<b><h3>Aktualności</h3>
								<li class="fsizeakt"><i class="czasakt">21/09/2019 </i>- Postawiono server Minecraft 1.14.4 - By Greges</li><br />
								<li class="fsizeakt"><i class="czasakt">22/07/2019 </i>- Dodanie formularza kontaktowego</li><br />
								<li class="fsizeakt"><i class="czasakt">18/05/2019 </i>- Stworzenie systemu rejestracji</li><br />
								<li class="fsizeakt"><i class="czasakt">16/05/2019 </i>- Postawiono server Garry's Mod</li><br />
								<li class="fsizeakt"><i class="czasakt">12/05/2019 </i>- Dodano Tajne Treści</li><br />
								<li class="fsizeakt"><i class="czasakt">11/05/2019 </i>- Dodano Kursy C++</li><br />
								<li class="fsizeakt"><i class="czasakt">11/05/2019 </i>- Dodano Kursy JS i PHP</li><br />
								<li class="fsizeakt"><i class="czasakt">11/05/2019 </i>- Dodano Kursy HTML i CSS</li><br />
								<li class="fsizeakt"><i class="czasakt">11/04/2019 </i>- Postawiono server TS3</li><br />
								<li class="fsizeakt"><i class="czasakt">08/04/2019 </i>- Postawiono server SCP</li><br />
								<li class="fsizeakt"><i class="czasakt">06/04/2019 </i>- Postawiono server CS 1.6</li><br />
								<li class="fsizeakt"><i class="czasakt">04/04/2019 </i>- Postawiono server CS:GO</li><br />
								<li class="fsizeakt"><i class="czasakt">01/04/2019 </i>- Stworzenie systemu logowania na stronie</li><br />
								<li class="fsizeakt"><i class="czasakt">31/03/2019 </i>- Dodanie strony spisu Aktualności</li><br />
								<li class="fsizeakt"><i class="czasakt">28/03/2019 </i>- Dodanie strony Kontaktu</li><br />
								<li class="fsizeakt"><i class="czasakt">26/03/2019 </i>- Dodanie Responsywności strony</li><br />
								<li class="fsizeakt"><i class="czasakt">25/03/2019 </i>- Dodano Mini grę - Wisielec</li><br />
								<li class="fsizeakt"><i class="czasakt">23/03/2019 </i>- Postawiono 3 server Minecraft</li><br />
								<li class="fsizeakt"><i class="czasakt">22/03/2019 </i>- Postawiono 2 server Minecraft</li><br />
								<li class="fsizeakt"><i class="czasakt">21/03/2019 </i>- Postawiono server Minecraft</li><br />
								<li class="fsizeakt"><i class="czasakt">20/03/2019 </i>- Postawiono stronę</li><br />
								<br />
						</b></ul>
					<a href="http://nerdownia.ddns.net/aktualnosci.php"><div class="aktwiencej">Więcej</div></a>
					</div>
					<div class="aktualnoscimniejsze">
						<ul>
							<b><h3>Aktualności</h3>
								<li class="fsizeakt"><i class="czasakt">21/09/2019 </i>- Postawiono server Minecraft 1.14.4 - By Greges</li><br />
								<li class="fsizeakt"><i class="czasakt">22/07/2019 </i>- Dodanie formularza kontaktowego</li><br />
								<li class="fsizeakt"><i class="czasakt">18/05/2019 </i>- Stworzenie systemu rejestracji</li><br />
								<li class="fsizeakt"><i class="czasakt">16/05/2019 </i>- Postawiono server Garry's Mod</li><br />
								<li class="fsizeakt"><i class="czasakt">12/05/2019 </i>- Dodano Tajne Treści</li><br />
								<li class="fsizeakt"><i class="czasakt">11/05/2019 </i>- Dodano Kursy C++</li><br />
								<li class="fsizeakt"><i class="czasakt">11/05/2019 </i>- Dodano Kursy JS i PHP</li><br />
								<li class="fsizeakt"><i class="czasakt">11/05/2019 </i>- Dodano Kursy HTML i CSS</li><br />
								<li class="fsizeakt"><i class="czasakt">11/04/2019 </i>- Postawiono server TS3</li><br />
								<li class="fsizeakt"><i class="czasakt">08/04/2019 </i>- Postawiono server SCP</li><br />
								<br />
						</b></ul>
					<a href="http://nerdownia.ddns.net/aktualnosci.php"><div class="aktwiencej">Więcej</div></a>
					</div>
				</section>
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