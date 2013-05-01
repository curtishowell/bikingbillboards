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
	var videoEmbed = '<iframe src="http://fast.wistia.net/embed/iframe/pqyhr9z28y?autoPlay=true&controlsVisibleOnLoad=true&version=v1&videoHeight=540&videoWidth=960&volumeControl=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" width="960" height="540"></iframe>'
	$('#main_content_home').prepend(videoEmbed)
}