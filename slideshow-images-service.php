<?php

$folder="images/clients/client-images";

$image_array = scandir("$folder");

//randomize the oder of the images in the directory
shuffle($image_array);

foreach ($image_array as $filename) {
	if(strpos ($filename, ".") != 0) {
		
		echo $filename . "\n";

	}
}

?>