<?php
$port="25565";
$sock=@fsockopen( $ip, $port, $num, $error, 3);
if(!$sock)
{
	$statusmine = "Offline";
}
else
{
	$statusmine = "Online";
	fclose($sock);
};
?>
