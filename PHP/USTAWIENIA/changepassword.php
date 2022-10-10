<?php

	session_start();
	
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location: ../trescdostepna.php');
		exit();
	}
	
	$sh=$_POST['sh'];
	$nh1=$_POST['nh1'];
	$nh2=$_POST['nh2'];
	$Id=$_SESSION['Id'];
	
	if($nh1==$nh2&&strlen($nh1)>=6&&strlen($nh1)<=20)
	{
		require_once "../polaczenie.php";
		
		$polaczenie=@new mysqli($host, $db_user, $db_password, $db_name);
		
		if($rezultat=@$polaczenie->query("SELECT * FROM nerdzi WHERE Id='".$Id."'"))
		{
		
		$wiersz=$rezultat->fetch_assoc();
		
			if(password_verify($sh, $wiersz['pass']))
			{
				$nh1_hash=password_hash($nh1, PASSWORD_DEFAULT);
				mysqli_query($polaczenie,"UPDATE nerdzi SET pass='".$nh1_hash."' WHERE Id=".$Id."");
				$_SESSION['bladusthasla']="Gratulacje hasło zostało zmienione!<br/>Proszę się ponownie zalogować!";
				header('Location: ustawienia.php');
			}
			else
			{
				$_SESSION['bladusthasla']="Stare hasło się nie zgadza!<br/>Proszę sprubować ponownie!";
				header('Location: ustawienia.php');
			}
		}
	}
	else if(strlen($nh1)<6||strlen($nh1)>20)
	{
		$_SESSION['bladusthasla']="Hasło powinno mieścić się od 6 do 20 znaków!<br/>Proszę sprubować ponownie!";
		header('Location: ustawienia.php');	
	}
	else
	{
		$_SESSION['bladusthasla']="Nowe hasła nie zgadzają się!<br/>Proszę sprubować ponownie!";
		header('Location: ustawienia.php');
	}
	
	unset($sh);
	unset($nh1);
	unset($nh2);
	mysqli_close($polaczenie);
?>
