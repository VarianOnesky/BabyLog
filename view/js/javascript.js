// JavaScript Document
$(function() {
	$('.lightbox').lightBox();
    $('#slider').nivoSlider({
			effect:'fade',
			customChange: function(){
				Cufon.replace('.nivo-caption');
			}
	});
	$('.button').each(function(){
		$(this).after(unescape('%3Cspan class="button"%3Eaa%3C/span%3E'));
		$(this).hide();
		$(this).next('span.button').text($(this).val()).click(function(){
			$(this).prev('input.button').click();
		});
	});
	Cufon.replace('h1'); 
	Cufon.replace('h3'); // Works without a selector engine
	Cufon.replace('.button'); 
	Cufon.replace('.special_font'); 
	Cufon.replace('h2 a', {
	hover: true
	}); 
	Cufon.replace('h2'); 
	Cufon.replace('#navigation a', {
	hover: true
	});
});