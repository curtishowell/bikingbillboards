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
<title>Biking Billboards Bicycle Advertising</title>
<link rel="stylesheet" href="css/style.css" />

<link rel="icon" 
      type="image/png" 
      href="images/favicon/favicon.png" />

<!-- Addition by Carter Appleton -->
<meta name="description" content="We're a smart and personable alternative to ho-hum advertising. Highly visible and cost-effective, we are Biking Billboards." />
<meta name="google-site-verification" content="Ciq608hf1y3Inem_I8jWXZpk1X5ncc6q4EBQKhu7NO0" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script> 
<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>

<script language="javascript" src="js/googleanalytics.js"></script>
<script type="text/javascript" src="js/homepage.js"></script>

<!-- End Addition -->

</head>
<body>
<div id="container">

  
	<?php
		top(-1, "");
	?>
	
	
	<div id="main_content_home">
		
		<!-- displayed with code
		<iframe src="http://player.vimeo.com/video/41461573?title=0&byline=0&portrait=0&autoplay=1" width="960" height="430" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		-->
		
		<div id="main_content_slideshow"> 
		
			<img src="images/index/carousel-1.jpg" alt="slideshow"/>
			<img src="images/index/carousel-2.jpg" alt="slideshow"/>
			<img src="images/index/carousel-3.jpg" alt="slideshow"/>
			<img src="images/index/carousel-4.jpg" alt="slideshow"/>
			<img src="images/index/carousel-5.jpg" alt="slideshow"/>
			<img src="images/index/carousel-6.jpg" alt="slideshow"/>
						
		</div><!-- slideshow -->
		
		<div id="video_play_button">
			<img src="images/index/play-video.png">
		</div>
		
	</div>




  <!--main_content-->
  

	<?php
		footer(
			1
		);
	?>
  
</div>
<!--container--> 

 
<script src="js/jquery-cycle/jquery.cycle.min.js"></script> 
<script src="js/script.js"></script> 

<!--[if lt IE 7 ]>
    <script src="js/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");</script>
  <![endif]-->

</body>
</html>