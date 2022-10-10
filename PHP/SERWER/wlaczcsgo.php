<?php
session_start();
if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true)&&($_SESSION['premium']=="Tak"))
{
exec('D:');
exec('start D:\XAMPP\htdocs\PHP\SERWER\URUCHAMIANIE\servercsgo.lnk');
sleep(15);
};
header('Location: http://nerdownia.ddns.net/csgo.php');
?>