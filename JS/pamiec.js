var karty_lista =  ["ciri.png","geralt.png","jaskier.png","jaskier.png","iorweth.png","triss.png","geralt.png","yen.png","ciri.png","triss.png","yen.png","iorweth.png"];

var karty = new Array();

for(var i = 12; i>0; i--)
{
	var rand_id = Math.floor(Math.random() *i);
    karty.push(karty_lista[rand_id]);
    karty_lista.splice(rand_id,1);
}

var k0 = document.getElementById('k0');
var k1 = document.getElementById('k1');
var k2 = document.getElementById('k2');
var k3 = document.getElementById('k3');

var k4 = document.getElementById('k4');
var k5 = document.getElementById('k5');
var k6 = document.getElementById('k6');
var k7 = document.getElementById('k7');

var k8 = document.getElementById('k8');
var k9 = document.getElementById('k9');
var k10 = document.getElementById('k10');
var k11 = document.getElementById('k11');

k0.addEventListener("click", function() { odslonKarte(0); });
k1.addEventListener("click", function() { odslonKarte(1); });
k2.addEventListener("click", function() { odslonKarte(2); });
k3.addEventListener("click", function() { odslonKarte(3); });

k4.addEventListener("click", function() { odslonKarte(4); });
k5.addEventListener("click", function() { odslonKarte(5); });
k6.addEventListener("click", function() { odslonKarte(6); });
k7.addEventListener("click", function() { odslonKarte(7); });

k8.addEventListener("click", function() { odslonKarte(8); });
k9.addEventListener("click", function() { odslonKarte(9); });
k10.addEventListener("click", function() { odslonKarte(10); });
k11.addEventListener("click", function() { odslonKarte(11); });

var jednaWidoczna=false;
var tury=0;
var widoczny_nr;
var blokada=false;
var ilepar=6;

function odslonKarte(nr)
{
	var opacityWartosc=$('#k'+nr).css('opacity');
	
	if(opacityWartosc!=0&&blokada==false)
	{
		blokada=true;
		
		var obraz = "url(../PICTURES/PAMIEC/"+karty[nr]+")";
		
		$('#k'+nr+'').css('background-image', obraz);
		$('#k'+nr+'').removeClass("karta");
		$('#k'+nr+'').addClass("kartaA");
		
		if(jednaWidoczna==false)
		{
			jednaWidoczna=true;
			widoczny_nr=nr;
			blokada=false;
		}
		else
		{
			if(karty[widoczny_nr]==karty[nr])
			{
				setTimeout(function() { schowaj2Karty(nr, widoczny_nr) },750);
			}
			else
			{
				setTimeout(function() { przywroc2Karty(nr, widoczny_nr) },1000);
			}
			
			tury++;
			$('.wynik').html("Wynik: "+tury);
			
			jednaWidoczna=false;
		}
	}
}

function schowaj2Karty(nr1, nr2)
{
	$('#k'+nr1).css('opacity', '0');
	$('#k'+nr2).css('opacity', '0');
	
	ilepar--;
	
	if(ilepar==0)
	{
		$('.pole').html('<h1>Wygrałeś!<br/>Ukończono w <span style="color:#E9B64A;">'+tury+'</span> tur!</h1><br/><span id="spangwint" onclick="window.location.reload();">Jeszcze Raz?</span>');
	}
	
	blokada=false;
}
function przywroc2Karty(nr1, nr2)
{
	$('#k'+nr1).css('background-image', 'url(../PICTURES/PAMIEC/karta.png)');
	$('#k'+nr1).addClass("karta");
	$('#k'+nr1).removeClass("kartaA");
	
	$('#k'+nr2).css('background-image', 'url(../PICTURES/PAMIEC/karta.png)');
	$('#k'+nr2).addClass("karta");
	$('#k'+nr2).removeClass("kartaA");
	
	blokada=false;
}