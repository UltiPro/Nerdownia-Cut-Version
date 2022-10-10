<?php
$ip="nerdownia.ddns.net";
$port="27015";
$sock=@fsockopen( $ip, $port, $num, $error, 3);
if(!$sock)
{
	$statuscsgo = "Offline";
}
else
{
	$statuscsgo = "Online";
	fclose($sock);
};
?>
