

<?php 
	include("redirect.php");
	include("common_functions.php") 
?>

<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6 lt-ie9 lt-ie8 lt-ie7 ie" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 lt-ie9 lt-ie8 ie" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 lt-ie9 ie" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8" />
<title>Our Clients :: Biking Billboards</title>
<link rel="stylesheet" href="css/style.css" />

<link rel="icon" 
      type="image/png" 
      href="images/favicon/favicon.png" />

<!-- Addition by Carter Appleton -->
<meta name="description" content="How Biking Billboards works: simple, smart, customized, friendly..."/>
<script language="javascript" src="js/googleanalytics.js"></script>
<!-- End Addition -->

</head>
<body>
<div id="container">

<?php
	top(3, "committed to our clients");
?>

  
  <div id="main_content">
    



	<div id="main_content_left">

		<div id="client_logos">

			<img src="images/clients/client-logos/pemco.jpg" />
			<img src="images/clients/client-logos/t-mobile.jpg" />
			<img src="images/clients/client-logos/salesforce.jpg" />
			<img src="images/clients/client-logos/washington-health-plan-finder.jpg" />
			<img src="images/clients/client-logos/anheuser-busch.jpg" />
			<img src="images/clients/client-logos/national-geographic-events.jpg" />
			<img src="images/clients/client-logos/uw.jpg" />
			<img src="images/clients/client-logos/seattle-u.jpg" />
			<img src="images/clients/client-logos/seattle-symphony.jpg" />
			<img src="images/clients/client-logos/woodland-park-zoo.jpg" />
			<img src="images/clients/client-logos/robbins-brothers.jpg" />
			<img src="images/clients/client-logos/obliteride.jpg" />
			<img src="images/clients/client-logos/indie-flix.jpg" />
			<img src="images/clients/client-logos/moonstruck.jpg" />
			<img src="images/clients/client-logos/condo-internet.jpg" />
			<img src="images/clients/client-logos/unico.jpg" />
			<img src="images/clients/client-logos/molbaks.jpg" />
			<img src="images/clients/client-logos/sprague.jpg" />
			<img src="images/clients/client-logos/verity.jpg" />
			<img src="images/clients/client-logos/youthcare.jpg" />
			<img src="images/clients/client-logos/eltana.jpg" />
			<img src="images/clients/client-logos/portage-bay.jpg" />
			<img src="images/clients/client-logos/boom.jpg" />
			<img src="images/clients/client-logos/blue-c.jpg" />
			<img src="images/clients/client-logos/smcu.jpg" />



<!-- removed 1/29/2014
			<img src="images/clients/client-logos/night-kitchen.jpg" />
			<img src="images/clients/client-logos/edgeview.jpg" />
-->

		</div>

		
	</div>
    
	<div id="main_content_right">
      <div id="story">



      	<div id="client_images">

      		<div id="clients_slideshow_prev" class="nav_arrows">
      			<img src="images/clients/nav-arrows/nav-arrow-left.png" />
      		</div>

      			<div id="slideshow_wrapper">

	      			<div id="main_content_slideshow">
						

						<?php

							//add one random photo to the slideshow, more to be added by js

							//directory where the images are stored for the slideshow
							$folder="images/clients/client-images";

							$image_array = scandir("$folder");

							//randomize the oder of the images in the directory
							shuffle($image_array);
							
							foreach ($image_array as $filename) {
								if(strpos ($filename, ".") != 0) {
									?>
									
									<img src="<?= $folder ?>/<?= $filename ?>" alt="Biking Billboards slideshow image" />
									
									<?php
									break;
								}
							}
							
						?>
								
					</div><!-- main_content_slideshow -->
				</div><!-- slideshow_wrapper -->

      		<div id="clients_slideshow_next" class="nav_arrows">
      			<img src="images/clients/nav-arrows/nav-arrow-right.png" />
      		</div>

      	</div><!-- client_images -->

      </div> <!--story-->
      
    </div>
    <!--main_content_right--> 
  </div>
  <!--main_content-->
  
	
	<?php
		footer(
			array(
				"images/footer/clients/helmet.jpg",
				"images/footer/clients/giveaway.jpg",
				"images/footer/common/city.jpg"
			)
		);
	?>
  
</div> <!--container-->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script> 
<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script> 
<script src="js/jquery-cycle/jquery.cycle.min.js"></script> 
<script src="js/script.js"></script>
<script src="js/load-slideshow-images.js"></script>

<!--[if lt IE 7 ]>
    <script src="js/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");</script>
  <![endif]-->

</body>
</html>