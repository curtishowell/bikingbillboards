

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
<title>How it Works</title>
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
	top(5);
?>
  
  <div id="main_content">

    <div id="main_content_left">
		<div id="contact_details">
			
			<h2>
				Get your message rolling.<br />
				Contact us today.
			</h2>
			
			<p>
			<a href="mailto:info@bikingbillboards.com">
				<img src="images/contact/mail.jpg" />
				Email us
			</a>
			</p>
			
			<p>
			<a href="tel:2062572017">
				<img src="images/contact/people.jpg" />
				Call us at 206.257.2017
			</a>
			</p>
			
			<p class="address">
			<a href="http://goo.gl/USV3o" target="_blank">
				<strong>Office:</strong> 5001 25th Avenue NE<br />
				Suite 101E, Seattle, WA 98105
			</a>
			</p>
			
			<p class="address">
				<strong>Mailing:</strong> 4416 54th Avenue NE<br />
				Seattle, WA 98105
			</p>
			
		</div>
	</div>
	
    <div id="main_content_right">
		
		<img id="front_door_image" src="images/contact/front-door.jpg" alt="Biking Billboards world headquarters front door entrance" />
      
    </div>
    <!--main_content_right--> 
  </div>
  <!--main_content-->
  
	
	<?php
		footer(
			array(
				"images/footer/contact/smile.jpg",
				"images/footer/contact/coupon.jpg",
				"images/footer/common/city.jpg"
			)
		);
	?>
  
</div>
<!--container--> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script> 
<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script> 
<script src="js/jquery-cycle/jquery.cycle.min.js"></script> 
<script src="js/script.js"></script> 

<!--[if lt IE 7 ]>
    <script src="js/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");</script>
  <![endif]-->

</body>
</html>