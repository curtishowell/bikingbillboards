

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
	top(2, "simple and effective advertising");
?>

  
  <div id="main_content">


	<div id="main_content_left">

		<?php
			//slideshow("howitworks");
		?>
		<img src="images/howitworks/sidebar.jpg" alt="Biking Billboards" />

	</div>


    <div id="main_content_right">
      <div id="story">
		
			<h1>How it all works:</h1>
			<p>We offer a smart and personable alternative to ho-hum advertising. <br />
			By developing targeted, high-visibility routes, your message connects with <br />
			your customer. The result is cost-effective, eco-friendly, and memorable.</p>
			
			<div class="trailer_section">
				<img src="images/trailer-bullets/1.png" alt="1" />
				<p>
					<strong>Set Clear Goals</strong><br />
					First, we set clear goals for your campaign.<br />
					It's the best way to make a real difference.
				</p>			
			</div>
			
			<div class="trailer_section">
				<img src="images/trailer-bullets/2.png" alt="2" />
				<p>
					<strong>Plan the Route</strong><br />
					Second, we plan customized routes and schedules<br />
					that maximize your exposure.
				</p>			
			</div>
			
			<div class="trailer_section">
				<img src="images/trailer-bullets/3.png" alt="3" />
				<p>
					<strong>Create your Billboard</strong><br />
					Third, we can help you create a great ad.<br />
					It can make the difference between recall and action.
				</p>			
			</div>
			
			<div class="trailer_section">
				<img src="images/trailer-bullets/4.png" alt="4" />
				<p>
					<strong>Launch the Fleet</strong><br />
					Our smart, friendly riders make excellent Brand Ambassadors,<br />
					and they're experts at getting your message in front your audience.
				</p>			
			</div>

      </div>
      <!--story-->
      
    </div>
    <!--main_content_right--> 
  </div>
  <!--main_content-->
  
	
	<?php
		footer(
			array(
				"images/footer/how-it-works/biker-riding.jpg",
				"images/footer/how-it-works/biker-helmet.jpg",
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