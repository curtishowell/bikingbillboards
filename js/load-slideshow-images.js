$(function() { //dom ready

	$.ajax({
		url: "slideshow-images-service.php",
		
		success: function(result){
			var imageArray = result.split("\n");

			//folder where all images are contained
			var folder = "images/clients/client-images/"

			var existingImage = $('#main_content_slideshow').children()[0]
			var existingImageURL = $(existingImage).attr('src')

			for(i in imageArray){
				var filename = imageArray[i]

				//make sure it's not an empty element
				if(filename){
					
					var imageURL = folder + filename

					//if the image wasn't the image rendered on the server, add it
					if(imageURL != existingImageURL) {
						
						var newImage = $(document.createElement('img'))
						newImage.attr('src', imageURL)
						newImage.attr('alt', 'Biking Billboards slideshow image')


						$('#main_content_slideshow').append(newImage)
					}
					
				}

			}
		}
	});

});