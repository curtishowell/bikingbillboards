jQuery(document).ready(function(){

	$('#main_content_slideshow').cycle({
		/*
		fx: 'scrollHorz',
		timeout: 0,
		speed: 500,
		delay: 0,
		next: '#next',
		prev: '#prev'
		*/
	});
	
	$('#gallery').find('.images').cycle({
		next: '#next',
		prev: '#previous'	
	});
	
	// Header slogan transparency
	$('#header_slogan p').fadeTo(0, 0.8);

});