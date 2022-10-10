<?php
session_start();
if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true)&&($_SESSION['premium']=="Tak"))
{
	exec('shutdown -s -t 1');
	header('LOCATION: wylserwer.php');
}
else
{
	header('LOCATION: ../trescdostepnapremium.php');
	exit();		
};
?>