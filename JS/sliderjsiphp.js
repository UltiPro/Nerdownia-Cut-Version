var numer=Math.floor(Math.random()*2)+1;
var timer1=0;
var timer2=0;
function ustawslajd(nrslajdu)
{
	clearTimeout(timer1);
	clearTimeout(timer2);
	numer=nrslajdu-1;
		 
	schowaj();
	setTimeout("zmienslajd()",0);
	}
	function schowaj()
	{
	$("#slider").fadeOut(500);
	}
	function zmienslajd()
	{
	numer++; if(numer>2) numer=1;
		 
	var plik="<img src=\"PICTURES/KURSY/tlojsiphp"+numer+".jpg\" id='slajdyrozmiar' />";
		 
	document.getElementById("slider").innerHTML=plik;
	$("#slider").fadeIn(500);
		 
		 
	timer1=setTimeout("zmienslajd()",10000);
	timer2=setTimeout("schowaj()",9500);
}