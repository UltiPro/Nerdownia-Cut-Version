function email()
{
	document.getElementById("email").innerHTML='<div onclick="emailout()"><fieldset class="fieldsetkontakt5dwa"><div id="emailtop">Ultiprogames@<br>gmail.com<br>onet.pl</div></fieldset></div>';
}

function emailout()
{
	document.getElementById("email").innerHTML='<div onclick="email()"><fieldset class="fieldsetkontakt5"></fieldset></div>';
}

function tel()
{
	document.getElementById("tel").innerHTML='<div onclick="telout()"><fieldset class="fieldsetkontakt6dwa"><div id="teltop">Tel.<br>+48 721 447 260</div></fieldset></div>';
}

function telout()
{
	document.getElementById("tel").innerHTML='<div onclick="tel()"><fieldset class="fieldsetkontakt6"></fieldset></div>';
}

function pokaznick() {
	document.getElementById('nick-table').style.display="inline-block";
	document.getElementById('konto-tak').style.opacity="0.7";
	document.getElementById('label-tak').style.color="lightgrey";
	document.getElementById('konto-nie').style.opacity="1";
	document.getElementById('label-nie').style.color="white";
}

function schowajnick() {
	document.getElementById('nick-table').style.display="none";
	document.getElementById('konto-tak').style.opacity="1";
	document.getElementById('label-tak').style.color="white";
	document.getElementById('konto-nie').style.opacity="0.7";
	document.getElementById('label-nie').style.color="lightgrey";
}