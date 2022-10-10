<?php
	session_start();
	
	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{
		header('LOCATION: ../index.php');
		exit();
	};
	
	include("zarejestruj.php");
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<meta name="robots" content="index">
	<meta name="googlebot" content="noarchive;">
	<meta name="description" content="Strona nerdów - Rejestracja!!!">
	<meta name="keywords" content="Serwery, Gry, Kursy, Rejestracja">
	<meta name="author" content="Patryk Wójtowicz">
	<title>Nerdownia - Zarejestruj Się</title>	
	<link rel="shortcut icon" href="../PICTURES/menu/iconaN.png" />
	<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
	<link rel="stylesheet" href="../CSS/responsive.css" type="text/css" />		
	<link rel="stylesheet" href="../CSS/rejestracja.css" type="text/css" />		
	<script type="text/javascript" src="../JS/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../JS/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="../JS/timer.js"></script>
	<script type="text/javascript" src="../JS/scrollgora.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body onload="odliczanie(); grecaptcha.ready();">
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
				<fieldset class="registrationbox">
				<form method="post" class="registrationform"> 
				<label><span class="tekstlewo">LOGIN:</span> <div class="br"></br></div><input type="text" name="login" value="<?php if(isset($_SESSION['fr_login'])) echo $_SESSION['fr_login']; unset($_SESSION['fr_login']) ?>" class="boxtext" /> <br /></label> 
				<label><span class="tekstlewo">ADRES E-MAIL:</span> <div class="br"></br></div><input type="text" name="email" value="<?php if(isset($_SESSION['fr_email'])) echo $_SESSION['fr_email']; unset($_SESSION['fr_email']) ?>" class="boxtext" /> <br /></label> 
				<label><span class="tekstlewo">HASŁO:</span> <div class="br"></br></div><input type="password" name="haslo1" value="<?php if(isset($_SESSION['fr_haslo1'])) echo $_SESSION['fr_haslo1']; unset($_SESSION['fr_haslo1']) ?>" class="boxtext" /> <br /></label> 
				<label><span class="tekstlewo">POWTÓRZ HASŁO:</span> <div class="br"></br></div><input type="password" name="haslo2" value="<?php if(isset($_SESSION['fr_haslo2'])) echo $_SESSION['fr_haslo2']; unset($_SESSION['fr_haslo2']) ?>" class="boxtext" /> <br /></label> 
				<label><span class="tekstlewo">NICK:</span> <div class="br"></br></div><input type="text" name="nick" value="<?php if(isset($_SESSION['fr_nick'])) echo $_SESSION['fr_nick']; unset($_SESSION['fr_nick']) ?>" class="boxtext" /> <br /></label> 
				<label><span class="tekstlewo">Akceptuję Regulamin:</span> <div class="br"></br></div><input type="checkbox" name="regulamin" value="<?php if(isset($_SESSION['fr_regulamin'])) echo "checked"; unset($_SESSION['fr_login']) ?>"/> <br /></label> 
				<div class="g-recaptcha" data-sitekey="6LeRO6QUAAAAAMrh9LgnU2N0-AU4dCJrVEdAq6ie" id="recaptchapolozenie"></div>
				<input type="submit" value="Zarejestruj się" class="zarejestruj" /> 
				</form>
				<?php
				if(isset($_SESSION['e_login'])) echo '<span class="error">'.$_SESSION['e_login'].'</span><br />';
				unset($_SESSION['e_login']);
				if(isset($_SESSION['e_email'])) echo '<span class="error">'.$_SESSION['e_email'].'</span><br />';
				unset($_SESSION['e_email']);
				if(isset($_SESSION['e_haslo'])) echo '<span class="error">'.$_SESSION['e_haslo'].'</span><br />';
				unset($_SESSION['e_haslo']);
				if(isset($_SESSION['e_nick'])) echo '<span class="error">'.$_SESSION['e_nick'].'</span><br />';
				unset($_SESSION['e_nick']);
				if(isset($_SESSION['e_regulamin'])) echo '<span class="error">'.$_SESSION['e_regulamin'].'</span><br />';
				unset($_SESSION['e_regulamin']);
				if(isset($_SESSION['e_captcha'])) echo '<span class="error">'.$_SESSION['e_captcha'].'</span><br />';
				unset($_SESSION['e_captcha']);
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