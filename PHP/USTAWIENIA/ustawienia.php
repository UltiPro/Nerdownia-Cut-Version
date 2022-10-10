<?php

	session_start();
	
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location: ../trescdostepna.php');
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<meta name="robots" content="index">
	<meta name="googlebot" content="noarchive;">
	<meta name="description" content="Strona nerdów - Ustawienia!!!">
	<meta name="keywords" content="Serwery, Gry, Kursy, Ustawienia">
	<meta name="author" content="Patryk Wójtowicz">
	<title>Nerdownia - Ustawienia Konta</title>	
	<link rel="shortcut icon" href="../../PICTURES/menu/iconaN.png" />
	<link rel="stylesheet" href="../../CSS/style.css" type="text/css" />
	<link rel="stylesheet" href="../../CSS/responsive.css" type="text/css" />	
	<link rel="stylesheet" href="../../CSS/ustawienia.css" type="text/css" />		
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
				echo "<a href='../wyloguj.php' class='wyloguj'>Wyloguj się!</a>";
			echo "</div>";
		echo "</div>";
	}	
	else
	{
		echo "<div class='loginbox'>";
			echo "<a href='../PHP/logowanie.php' class='log'>Zaloguj Się</a>";
			echo "<a href='../PHP/rejestracja.php' class='rej'>Zarejestruj Się</a>";
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
<div class="statycznetlo"><img src="..\..\PICTURES\USTAWIENIA\tlo.jpg" class="szerokosctla"></div>
	<div class="trescust">
	<!-- LEWY -->
		<article>
				<header>
					<section>
						<fieldset>
							<legend>Zmień Hasło</legend>
							<form method="post" action="changepassword.php">
								<label>Stare Hasło: <input type="password" name="sh" onfocus="this.style.border='1px solid red'" onblur="this.style.border='1px solid green'" required></label><br/>
								<label>Nowe Hasło: <input type="password" name="nh1" onfocus="this.style.border='1px solid red'" onblur="this.style.border='1px solid green'" required></label><br/>
								<label>Powtórz nowy Hasło: <input type="password" name="nh2" onfocus="this.style.border='1px solid red'" onblur="this.style.border='1px solid green'" required></label><br/>
								<input type="submit" value="Zmień Hasło !!!"/>
							</form>
							<?php if(isset($_SESSION['bladusthasla'])) echo "<span id='bladusthasla'>".$_SESSION['bladusthasla']."</span>"; unset($_SESSION['bladusthasla']); ?>
						</fieldset>
						<fieldset>
							<legend>Zmień E-Mail</legend>
							<form method="post" action="changeemail.php">
								<label>Nowy E-Mail: <input type="email" name="e1" onfocus="this.style.border='1px solid red'" onblur="this.style.border='1px solid green'" placeholder="np.jan-nowak@wp.pl" required></label><br/>
								<label>Powtórz nowy E-Mail: <input type="email" name="e2" onfocus="this.style.border='1px solid red'" onblur="this.style.border='1px solid green'" placeholder="--.--" required></label><br/>
								<input type="submit" value="Zmień E-Mail !!!"/>
							</form>
							<?php if(isset($_SESSION['bladustemail'])) echo "<span id='bladustemail'>".$_SESSION['bladustemail']."</span>"; unset($_SESSION['bladustemail']);?>
						</fieldset>
						<?php
						if($_SESSION['premium']=="Nie")
						{
						echo<<<END
						<fieldset>
							<legend>Aktywuj Premium</legend>
							<form method="POST" action="getpremium.php">
								<label><legend>Wprowadź Kod Premium:</legend><input type="text" name="kp" onfocus="this.style.border='1px solid red'" onblur="this.style.border='1px solid green'" required/></label><br />
								<input type="submit" value="Aktywuj!!!"/>
							</form>
END;
						if(isset($_SESSION['bladustprem'])) echo "<span id='bladustprem'>".$_SESSION['bladustprem']."</span>"; unset($_SESSION['bladustprem']);
						echo '</fieldset>';
						}
						?>
					</section>
				</header>
		</article>
	<aside>
		<article>
			<header>
				<div>
					*W razie jakich kolwiek problemów, prosimy o kontakt w zakładce KONTAKT.
				</div>
			</header>
		</article>
	</aside>
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