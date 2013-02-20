

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
	top(1, "strong customer connections");
?>

  
  <div id="main_content">
    <div id="main_content_left">
	
	
		<?php
			//slideshow("whyitseffective");
		?>

		<img src="images/whyitseffective/sidebar.jpg" alt="Biking Billboards" />


	</div><!-- main_content_left -->


    <div id="main_content_right">
      <div id="story">

		<p>
			<strong>Captive Consumers</strong><br />
			We go to places where your customers congregate.
		</p>
		
		<p>
			<strong>Brand Ambassadors</strong><br />
			Our riders are stewards for your brand- friendly, smart and always on the lookout<br />
			for ways to engage with consumers and maximize the impact of your message.
		</p>
		
		<p>
			<strong>Specialized Route Planning</strong><br />
			Using demographic information, our own database of local events, <br />
	          and street-wise knowledge, we design high-visibility routes for every campaign.
		</p>
		

		
		<p>
			<strong>Cost-Effective</strong><br />
			We can reach a lot of people at a low cost.
		</p>
		
		<p>
			<strong>Eco-Friendly</strong><br />
			Our riders burn calories not fossil fuels. <br />
			It's good for the earth, and consumers pay attention.
		</p>
		
		<p>
			<strong>Unforgettable</strong><br />
			When your ad rolls through a crowd behind a bike, it's unique and disruptive.<br />
			When our Brand Ambassadors directly engage with hundreds of people- handing<br />
			out samples, flyers, coupons and brand messages- your ad is unforgettable.
		</p>
		

      </div>
      <!--story-->
      
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