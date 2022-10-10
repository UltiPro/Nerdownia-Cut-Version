<?php
session_start();
if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true)&&($_SESSION['premium']=="Tak"))
{
exec('taskkill -IM "SCPSL.exe" -T -F');
exec('taskkill -IM "LocalAdmin.exe" -T -F');
};
header('Location: http://nerdownia.ddns.net/scp.php');
?>