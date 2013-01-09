$(function() { //dom ready
	
	$('#video_play_button').click(function(){
		$('#video_play_button').fadeOut('fast')
		$('#main_content_slideshow').fadeOut('fast', removeSlideshow)
	})
	
	
	
})

function removeSlideshow(){
	$('#main_content_slideshow').remove()
	addVideo()
}

function addVideo(){
	var videoEmbed = '<iframe src="http://player.vimeo.com/video/41461573?title=0&byline=0&portrait=0&autoplay=1" width="960" height="430" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'
	$('#main_content_home').prepend(videoEmbed)
}