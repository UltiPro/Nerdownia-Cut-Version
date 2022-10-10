<?php
include("PHP/SERWER/statusprogramow2.php");
$status=$statusmine;
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<meta name="robots" content="index">
	<meta name="googlebot" content="noarchive;">
	<meta name="description" content="Strona nerdów - Minecraft!!!">
	<meta name="keywords" content="Serwery, Gry, Kursy, Minecraft">
	<meta name="author" content="Patryk Wójtowicz">
	<title>Nerdownia - Minecraft</title>		
	<link rel="shortcut icon" href="PICTURES/menu/iconaN.png" />
	<link rel="stylesheet" href="CSS/style.css" type="text/css" />
	<link rel="stylesheet" href="CSS/responsive.css" type="text/css" />		
	<link rel="stylesheet" href="CSS/minecraft.css" type="text/css" />		
	<script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="JS/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="JS/timer.js"></script>
	<script type="text/javascript" src="JS/scrollgora.js"></script>
	<script type="text/javascript" src="JS/sliderminecraft.js"></script>
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
	<div class="tresc" >
	<!-- LEWY -->
		<article>
			<div class="lewy">
				<header>
					<div>
						SERWERY MINECRAFT
					</div>
				</header>
			<br />
<!-- 1.6.4 -->
				<br /><br />
				<section>
					<fieldset class="fieldset-last">
						<legend><b>Minecraft 1.15 - Ulti World</b></legend>
					<ul>
						<li>Minecraft Version: <b>1.15</b></li>
						<li>Typ Serwera: <b>Survival</b></li>
						<li>Adres IP: <b>nerdownia.ddns.net</b></li>
						<li>Administracja: <b>Ulti</b></li>
						<li>Texture Pack: <b>W paczce</b></li>
						<li>Status Serwera: <b><?php if($status=="Online") echo '<span style="color:#66ff33">'.$status.'</span>'; else echo '<span style="color:red">'.$status.'</span>'; ?></b></li>						
					</ul>
	<?php 
		if($status=="Online") echo '<a href="http://nerdownia.ddns.net:25566" target="blank" class="mapa3d"><fieldset class="mapa3dstyl"><legend>MAPA 3D</legend></fieldset></a><br />';
	?>
	<a href="FTP/Minecraft 1.15 Ulti.rar" class="pobierz"><fieldset class="pobierzstyl"><legend>POBIERZ</legend></fieldset></a>
	<br />	
		<?php if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true)&&($_SESSION['premium']=="Tak"))
		{
		echo '<div class="uruchamianietekst">Zarządzanie Serverem:</div><br />';
		if($status=="Offline") echo '<a href="PHP/SERWER/wlaczmine.php" class="wlacz">Włącz</a>';
		if($status=="Online") echo '<a href="PHP/SERWER/RCON/1.15/index.php" class="wylacz" target="blank">Konsola - Zarządzanie</a>';
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
							> Gra wymaga wsparcia oprogramowania Java w wersji 64 bitowej.<br />
							Do pobrania: <a href="https://www.java.com/pl/download/" target="blank" class="odsylacze">>TUTAJ<</a><br />
							<hr />
							> Orginalną wersję gry można zakupić na stronie: <a href="https://www.minecraft.net/pl-pl/" target="blank" class="odsylacze">>MINECRAFT.NET<</a><br />
							<hr />
							> Servery posiadają własną Mape 3D świata!!!<br />
							(Która jest włączona jedynie przy włączonym serverze gry.)<br />
							(<span style="color:red;">Guzik do mapy pokaże się nad POBIERZ gdy serwer będzie w trybie Online</span>.)<br />
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