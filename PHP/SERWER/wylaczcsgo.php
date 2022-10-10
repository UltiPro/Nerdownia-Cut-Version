<?php
session_start();
if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true)&&($_SESSION['premium']=="Tak"))
{
exec('taskkill -IM "servercsgo.exe" -T -F');
};
header('Location: http://nerdownia.ddns.net/csgo.php');
?>