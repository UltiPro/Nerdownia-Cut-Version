jQuery(function($)
{
	$.scrollTo(0);
	$('.scrollgora').click(function() { $.scrollTo($('.strona'), 1000); });
}
);
$(window).scroll(function()
{
	if($(this).scrollTop()>0) $('.scrollgora').fadeIn();
	else $('.scrollgora').fadeOut();		
}
);
