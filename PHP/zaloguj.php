<?php

	session_start();
	
	if((!isset($_POST['login']))||(!isset($_POST['haslo'])))
	{
		header('Location: ../index.php');
		exit();
	}

	require_once "polaczenie.php";
	
	$polaczenie=@new mysqli($host, $db_user, $db_password, $db_name);
	
	if($polaczenie->connect_errno!=0)
	{
		header('Location: errorsql.php');
		exit();
	}
	else
	{
		$login=$_POST['login'];
		$haslo=$_POST['haslo'];
		
		$login=htmlentities($login, ENT_QUOTES, "UTF-8");
		
		if($rezultat=@$polaczenie->query(sprintf("SELECT * FROM nerdzi WHERE user='%s'",mysqli_real_escape_string($polaczenie,$login))))
		{
			$ilu_userow=$rezultat->num_rows;
			if($ilu_userow>0)
			{
				$wiersz=$rezultat->fetch_assoc();
				
				if(password_verify($haslo, $wiersz['pass']))
				{
					$_SESSION['zalogowany']=true;
					
					$_SESSION['Id']=$wiersz['Id'];
					$_SESSION['nazwa']=$wiersz['nazwa'];
					$_SESSION['email']=$wiersz['email'];
					$_SESSION['premium']=$wiersz['premium'];

					unset($_SESSION['blad']);
					$rezultat->free_result();
					header('Location: ../index.php');
				}
				else
				{
					$_SESSION['blad']='<span class="error">Nieprawidłowy login lub hasło!</span>';
					header('Location: logowanie.php');
				}
			}
			else
			{
				$_SESSION['blad']='<span class="error">Nieprawidłowy login lub hasło!</span>';
				header('Location: logowanie.php');
			}
		}
		$polaczenie->close();
	}
	
?>