$(function() { //dom ready

	$('#main_content_slideshow').cycle({

		next: '#clients_slideshow_next',
		prev: '#clients_slideshow_prev'
		
	});



	
	$('#gallery').find('.images').cycle({
		next: '#next',
		prev: '#previous'	
	});
	
	// Header slogan transparency
	$('#header_slogan p').fadeTo(0, 0.8);

});
