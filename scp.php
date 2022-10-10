<?php
get_defined_vars(include("PHP/SERWER/statusprogramow.php"));
$status=$SCPSLstatus;
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<meta name="robots" content="index">
	<meta name="googlebot" content="noarchive;">
	<meta name="description" content="Strona nerdów - SCP!!!">
	<meta name="keywords" content="Serwery, Gry, Kursy, SCP">
	<meta name="author" content="Patryk Wójtowicz">
	<title>Nerdownia - SCP</title>	
	<link rel="shortcut icon" href="PICTURES/menu/iconaN.png" />
	<link rel="stylesheet" href="CSS/style.css" type="text/css" />
	<link rel="stylesheet" href="CSS/responsive.css" type="text/css" />		
	<link rel="stylesheet" href="CSS/scp.css" type="text/css" />			
	<script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="JS/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="JS/timer.js"></script>
	<script type="text/javascript" src="JS/scrollgora.js"></script>
	<script type="text/javascript" src="JS/sliderscp.js"></script>
</head>
<body onload="odliczanie(); zmienslajd();">
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
<div id="slider"></div>
	<div class="tresc">
	<!-- LEWY -->
		<article>
			<div class="lewy">
				<header>
					<div>
						Serwery SCP:Secret Laboratory
					</div>
				</header>
				<section>
					<fieldset class="fieldset">
						<legend>SCP</legend>
						<ul>
							<li>Wersja Gry: Najnowsza</li>
							<li>Typ Serwera: Zwykły tryb</li>
							<li>Adres IP: nerdownia.ddns.net</li>
							<li>Administracja: Ulti, Hooberto, xNikon, dwiXu</li>
							<li>Status Servera: <?php if($status=="Online") echo '<span style="color:#66ff33">'.$status.'</span>'; else echo '<span style="color:red">'.$status.'</span>'; ?></li>
						</ul>
						<?php if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true)&&($_SESSION['premium']=="Tak"))
						{
						echo '<div class="uruchamianietekst">Zarządzanie Serverem:</div><br />';
						if($status=="Offline") echo '<a href="PHP/SERWER/wlaczscp.php" class="wlacz">Włącz</a>';
						if($status=="Online") echo '<a href="PHP/SERWER/wylaczscp.php" class="wylacz">Wyłącz</a>';
						echo '<div class="clearboth"></div>';
						};
						?>
					</fieldset>
				</section>
			</div>
		</article>
	<!-- KONIEC LEWY -->
	<!-- PRAWY -->
	<aside>
		<article>
			<div class="prawy">
				<header>
					<section>
						<div class="info"><fieldset class="infofieldset">
							<legend><b>Informacje o grze</b></legend>
							<div class="infotext">
							> Orginalną wersję gry można pobrać ze strony: <a href="https://store.steampowered.com/app/700330/SCP_Secret_Laboratory/" target="blank" class="odsylacze">>STEAM<</a><br />
							<hr />
							> W razie jakich kolwiek problemów porszę zgłaszać wszystko w zakładce Kontakt.<br />
							</div>
						</fieldset></div>
					</section>
				</header>
			</div>
		</article>
	</aside>
	<!-- KONIEC PRAWY -->
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
<?php

?>