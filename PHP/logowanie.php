<?php
	session_start();
	
	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{
		header('LOCATION: ../index.php');
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<meta name="robots" content="index">
	<meta name="googlebot" content="noarchive;">
	<meta name="description" content="Strona nerdów - Logowanie!!!">
	<meta name="keywords" content="Serwery, Gry, Kursy, Logowanie">
	<meta name="author" content="Patryk Wójtowicz">
	<title>Nerdownia - Zaloguj Się</title>	
	<link rel="shortcut icon" href="../PICTURES/menu/iconaN.png" />
	<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
	<link rel="stylesheet" href="../CSS/responsive.css" type="text/css" />		
	<link rel="stylesheet" href="../CSS/logowanie.css" type="text/css" />			
	<script type="text/javascript" src="../JS/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../JS/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="../JS/timer.js"></script>
	<script type="text/javascript" src="../JS/scrollgora.js"></script>
</head>
<body onload="odliczanie();">
	<div class="strona">
		<a href="#" class="scrollgora"></a>
<!-- Menu -->
<header>
	<div class="menugora">
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
<div class="tresc">
<main>
<div class="statycznetlo"><img src="..\PICTURES\LOGOWANIE\tlo.jpg" class="szerokosctla"></div>
	<header>
		<article>	
			<section>
				<fieldset class="loginbox">
				<form action="zaloguj.php" method="post" class="loginform">
				<label>LOGIN: <input type="text" name="login" class="boxtext" /></label> <br />
				<label>HASŁO: <input type="password" name="haslo" class="boxtext" /></label> <br />
				<input type="submit" value="Zaloguj się" class="zaloguj" />  
				</form>
				<?php
				if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
				unset($_SESSION['blad']);
				?>
				</fieldset>
			</section>	
		</article>
	</header>
</main>
</div>
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