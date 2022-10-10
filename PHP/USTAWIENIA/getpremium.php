<?php

	session_start();
	
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location: ../trescdostepna.php');
		exit();
	}
	
	$kp=$_POST['kp'];
	$Id=$_SESSION['Id'];
	
	require_once "../polaczenie.php";
	
	$polaczenie=@new mysqli($host, $db_user, $db_password, $db_name);
	$polaczeniedwa=@new mysqli($host, $db_user, $db_password, $db_namedwa);
		
	if($polaczenie->connect_errno!=0&&$polaczeniedwa->connect_errno!=0)
	{
		header('Location: ../errorsql.php');
		exit();
	}
	else
	{
		if($rezultat=@$polaczeniedwa->query("SELECT * FROM kody WHERE Kod='".$kp."'"))
		{
		$liczba_wierszy=mysqli_num_rows($rezultat);
		
			if($liczba_wierszy>0)
			{
				mysqli_query($polaczenie,"UPDATE nerdzi SET premium='Tak' WHERE Id=".$Id."");
				mysqli_query($polaczeniedwa,"DELETE FROM kody WHERE kod='".$kp."'");
				$_SESSION['bladustprem']="Gratulacje otrzymałeś status Premium!<br/>Proszę się ponownie zalogować!";
				header('Location: ustawienia.php');
			}
			else
			{
				$_SESSION['bladustprem']="Nie poprawny kod Premium!<br/>Proszę sprawdzić ponownie!";
				header('Location: ustawienia.php');
			}
		}
	}
	
	unset($kp);
	mysqli_close($polaczenie);
	mysqli_close($polaczeniedwa);
	exit();
?>
