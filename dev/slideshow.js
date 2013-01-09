var slideshowindex = 0;

//array of slideshow images
var images;

//slideshow timer
var imagetimer = false;

//slideshow interval: 5 seconds
var interval = 5000;

Event.observe(window, 'load', function(){
	// show more text shows morecontent div
	if($("showmore")){
		$("showmore").observe("click", function(){
			$("showmore").addClassName("hidden");
			$("morecontent").removeClassName("hidden");
		});
	}

	
	//slideshow
	if($(controls)){
		$("controlback").observe("click", slideshowBack);
		$("controlpause").observe("click", slideshowPause);
		$("controlplay").observe("click", slideshowPlay);
		$("controlforward").observe("click", slideshowForward);
		
		images = $$(".slideshow");
		slideshowPlay();		
	}
});

function slideshowBack(){
	prev();
	
	slideshowPause();
}


function slideshowForward(){
	next();
	
	slideshowPause();
}

function slideshowPlay(){
		if(!imagetimer){
			imagetimer = setInterval(next, interval);
			$("controlpause").removeClassName("hidden");
			$("controlplay").addClassName("hidden");
		}
}

function slideshowPause(){
	if(imagetimer){
        clearInterval(imagetimer);
		imagetimer = null;
		$("controlpause").addClassName("hidden");
		$("controlplay").removeClassName("hidden");
	}
}

function next(){
	slideshowindex = (slideshowindex + 1) % images.length;
	$("slideshowdisplay").addClassName("hidden");
	$("slideshowdisplay").id = "";
	images[slideshowindex].id = ("slideshowdisplay");
	images[slideshowindex].removeClassName("hidden");
}

function prev(){
	if(slideshowindex == 0){
		slideshowindex = images.length - 1;
	} else {
		slideshowindex--;
	}
	$("slideshowdisplay").addClassName("hidden");
	$("slideshowdisplay").id = "";
	images[slideshowindex].id = "slideshowdisplay";
	images[slideshowindex].removeClassName("hidden");
}