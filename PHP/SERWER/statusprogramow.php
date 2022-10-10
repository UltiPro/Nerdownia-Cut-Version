<?php
if(strstr(exec('tasklist /fi "imagename eq SCPSL.exe"'), "SCPSL.exe"))
{
	$SCPSLstatus="Online";
}
else
{
	$SCPSLstatus="Offline";
};
?>
