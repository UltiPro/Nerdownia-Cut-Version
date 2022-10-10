<?php
	if(isset($_POST['email']))
	{
		//Udana walidacja? Tak!
		$wszystko_OK=true;
		
		//Sprawdź poprawność login'u.
		$login=$_POST['login'];
		
		if((strlen($login)<3)||(strlen($login)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Login musi posiadać od 3 do 20 znaków!";
		}
		if(ctype_alnum($login)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Login może składać się tylko z liter i cyfr. (Bez polskich znaków)";
		}
		
		//Sprawdź poprawność adresu email.
		$email=$_POST['email'];
		$emailB=filter_var($email,FILTER_SANITIZE_EMAIL);
		
		if((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false)||($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres email!";	
		}
		
		//Sprawdź hasła.
		$haslo1=$_POST['haslo1'];
		$haslo2=$_POST['haslo2'];
		
		if((strlen($haslo1)<6)||strlen($haslo1)>20)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 6 do 20 znaków!";		
		}
		if($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";		
		}
		
		$haslo_hash=password_hash($haslo1, PASSWORD_DEFAULT);
		
		//Sprawdź nick.
		$nick=$_POST['nick'];
		
		if((strlen($nick)<3)||strlen($nick)>20)
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nick musi składać się od 3 do 20 znaków!";		
		}
		
		//Sprawdź checkbox.
		
		if(!isset($_POST['regulamin']))
		{
			$wszystko_OK=false;
			$_SESSION['e_regulamin']="Musisz zaakceptować regulamin!";		
		}
		
		//recaptcha
		$sekretnykod="6LeRO6QUAAAAABXyTmymBBMm4Ci78lm7f7TIJShx";
		
		$sprawdz=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekretnykod.'&response='.$_POST['g-recaptcha-response']);
		
		$odpowiedzgoogle=json_decode($sprawdz);
		
		if($odpowiedzgoogle->success==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_captcha']="Potwierdź że nie jesteś botem!";		
		}
		
		//Zapamietaj wprowadzone dane
		$_SESSION['fr_login']=$login;
		$_SESSION['fr_email']=$email;
		$_SESSION['fr_haslo1']=$haslo1;
		$_SESSION['fr_haslo2']=$haslo2;
		$_SESSION['fr_nick']=$nick;
		if(isset($_POST['regulamin'])) $_SESSION['fr_regulamin']=true;
		
		//Srpawdzenie SQL
		require_once "polaczenie.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try
		{
			$polaczenie=@new mysqli($host, $db_user, $db_password, $db_name);
			if($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Email istnienie
				$rezultat=$polaczenie->query("SELECT id FROM nerdzi WHERE email='$email'");
				if(!$rezultat)throw new Exception($polaczenie->error);
				
				$ile_takich_maili=$rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_email']="Istnieje już konto o takim adresie email!";		
				}
				//Login istnienie
				$rezultat=$polaczenie->query("SELECT id FROM nerdzi WHERE user='$login'");
				if(!$rezultat)throw new Exception($polaczenie->error);
				
				$ile_takich_loginow=$rezultat->num_rows;
				if($ile_takich_loginow>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_login']="Ten login jest już zajęty!";		
				}
				//Nick istnienie
				$rezultat=$polaczenie->query("SELECT id FROM nerdzi WHERE nazwa='$nick'");
				if(!$rezultat)throw new Exception($polaczenie->error);
				
				$ile_takich_nickow=$rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_nick']="Ten nick jest już zajęty!";		
				}
				
				//Wszystko OK
				if($wszystko_OK==true)
				{
					//Dodaj do bazy
					if($polaczenie->query("INSERT INTO nerdzi VALUES (NULL, '$login', '$haslo_hash', '$email', '$nick', 'Nie')"))
					{
						$_SESSION['udanarejestracja']=true;
						header('Location: udanarejestracja.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
				}
				
				$polaczenie->close();
			}
		}
		catch(Exception $e)
		{
			echo '<span style="color:red">Błąd serwera! Proszę zarejestrować się później!</span>';
			echo '<br />Informacja deweloperska'.$e;
		}
	};
?>