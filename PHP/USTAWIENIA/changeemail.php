<?php

	session_start();
	
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location: ../trescdostepna.php');
		exit();
	}
	
	$e1=$_POST['e1'];
	$e2=$_POST['e2'];
	$Id=$_SESSION['Id'];
	
	if($e1==$e2)
	{
		require_once "../polaczenie.php";
		
		$polaczenie=@new mysqli($host, $db_user, $db_password, $db_name);
		
		if($polaczenie->connect_errno!=0)
		{
			header('Location: ../errorsql.php');
			exit();
		}
		else
		{
			$rezultat=$polaczenie->query("SELECT id FROM nerdzi WHERE email='$e1'");
			
			$ile_takich_maili=$rezultat->num_rows;
			if($ile_takich_maili>0)
			{
				$_SESSION['bladustemail']="Istnieje już konto o takim adresie email!";
				header('Location: ustawienia.php');
			}
			else
			{
				mysqli_query($polaczenie,"UPDATE nerdzi SET email='".$e1."' WHERE Id=".$Id."");
				$_SESSION['bladustemail']="Gratulacje zmieniłeś E-Mail!<br/>Proszę zalogować się ponownie!";
				header('Location: ustawienia.php');
			}
		}
	}
	else
	{
		$_SESSION['bladustemail']="E-Mail'e nie zgadzają się!<br/>Proszę sprubować ponownie!";
		header('Location: ustawienia.php');
	}
	
	unset($e1);
	unset($e2);
	mysqli_close($polaczenie);
	exit();
?>
