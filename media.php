

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
	top(4, "committed to our clients");
?>

  
  <div id="main_content">
    



	<div id="main_content_left">

		<div id="media_links">

			<h2>Biking Billboards in the News</h2>

			<!--<p><strong>Biking Billboards in the News</strong></p>-->
			<p><a target="_blank" href="http://www.seattlebusinessmag.com/article/mothers-invention?page=0,0">Seattle Business Magazine</a></p>
			<p><a target="_blank" href="http://www.komonews.com/news/local/Seattle-tunnel-project-could-push-rats-roaches-into-nearby-buildings-169554916.html">Komo News</a></p>
			<p><a target="_blank" href="http://marketingnw.com/blog/newsmakers-6/">Marketing Northwest</a></p>
			<p><a target="_blank" href="http://www.mybmedia.com/1/post/2012/05/mompreneurs-make-every-day-better.html">Minding Your Business</a></p>

			<h2>Social Media</h2>
			<p>
				<a target="_blank" href="https://www.facebook.com/pages/Biking-Billboards/142350522475556"><img src="images/media/facebook.jpg" alt="Biking Billboards Facebook" /></a>

				<a target="_blank" href="https://twitter.com/BikingBillboard"><img src="images/media/twitter.jpg" alt="Biking Billboards Twitter" /></a>

				<a target="_blank" href="http://instagram.com/bikingbillboards"><img src="images/media/instagram.jpg" alt="Biking Billboards Instagram" /></a>
			</p>

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