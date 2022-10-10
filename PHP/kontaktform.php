<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<meta name="robots" content="index">
	<meta name="googlebot" content="noarchive;">
	<meta name="description" content="Strona nerdów - Kontakt - Formularz!!!">
	<meta name="keywords" content="Serwery, Gry, Kursy, Kontakt, Formularz">
	<meta name="author" content="Patryk Wójtowicz">
	<title>Nerdownia - Kontakt Formularz</title>	
	<link rel="shortcut icon" href="../PICTURES/menu/iconaN.png" />
	<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
	<link rel="stylesheet" href="../CSS/responsive.css" type="text/css" />	
	<link rel="stylesheet" href="../CSS/kontakt.css" type="text/css" />		
	<script type="text/javascript" src="../JS/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../JS/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="../JS/timer.js"></script>
	<script type="text/javascript" src="../JS/scrollgora.js"></script>
	<script type="text/javascript" src="../JS/kontakt.js"></script>
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
				echo "<a href='USTAWIENIA/ustawienia.php' class='ustawienia'>Ustawienia!</a>";
				echo "<a href='wyloguj.php' class='wyloguj'>Wyloguj się!</a>";
			echo "</div>";
		echo "</div>";
	}	
	else
	{
		echo "<div class='loginbox'>";
			echo "<a href='logowanie.php' class='log'>Zaloguj Się</a>";
			echo "<a href='rejestracja.php' class='rej'>Zarejestruj Się</a>";
		echo "</div>";
	}
?>
		<div class="tytul"><h1><a href="http://nerdownia.ddns.net/" class="odnosnikimenu">Nerdownia</a></h1></div>
		<h3 class="zegar"><div id="zegar"></div></h3>
	<div class="oddzialka"></div>
<nav>
<?php include("MENU/menu.php"); ?>
</nav>
	<div class="oddzialka2"></div>
	</div>
</header>
<!-- KONIECMENU -->
<!-- TREŚĆ -->
<main>
<div class="statycznetlo"><img src="..\PICTURES\KONTAKT\tlo.jpg" class="szerokosctla"></div>
	<div class="tresc">
		<article>
			<div class="formularz-box">
				<section>
					<form action="PHP/kontaktemail.php" method="post">
						<div class="formularz-pole">
							<label class="imieinazwisko">Imię<br /><input type="text" name="imie" placeholder="*Wymagane" onfocus="this.placeholder=''" onblur="this.placeholder='*Wymagane'" required></label>
							<label class="imieinazwisko">Nazwisko<br /><input type="text" name="nazwisko" placeholder="*Wymagane" onfocus="this.placeholder=''" onblur="this.placeholder='*Wymagane'" required></label><br /><br />
							<label>Adres E-mail <input type="email" name ="email" id="emailinput" placeholder="*Wymagane" onfocus="this.placeholder=''" onblur="this.placeholder='*Wymagane'" required></label><br />
							<label>Opisz Problem<br /><textarea name="problem" placeholder="*Maksymalnie 250 słów..." maxlength="250" required></textarea></label><br />
							<div style="margin-bottom: -10px;">Możesz załączyć screen'a/gifa z danego problemu:</div><br />
							<label><input type="file" name="plik" accept="image/x-png,image/gif'a,image/jpeg" id="wyslij-plik"></label><br />
							<label>Data napotkania problemu <input type="date" name="data" id="datatable" min="2019-01-01" required></label><br />
							<fieldset class="formularz-fieldset">
							<legend>Czy posiadasz konto na stronie?</legend>
							<label onclick="pokaznick()" id="label-tak"><input type="radio" name="konto" id="konto-tak" value="posiada"> Tak <input type="text" name="nick" placeholder="Podaj nick" id="nick-table" onfocus="this.placeholder=''" onblur="this.placeholder='Podaj nick'"></label><br />
							<label onclick="schowajnick()" id="label-nie"><input type="radio" name="konto" id="konto-nie" value="nieposiada" checked> Nie</label>
							</fieldset>
							<input type="submit" value="Wyślij!" class="formularz-button">
						</div>
					</form>
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