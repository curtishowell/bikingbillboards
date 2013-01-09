<?php include("redirect.php") ?>

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

<!-- Addition by Carter Appleton -->
<meta name="description" content="How Biking Billboards works: simple, smart, customized, friendly..."/>
<script language="javascript" src="js/googleanalytics.js"></script>
<!-- End Addition -->

</head>
<body>
<div id="container">
  <div id="header"> 
    <!-- Changes by Carter Appleton to support a php based system instead of html
  	<a id="logo" href="index.html">BikingBillboards</a>
  	<a id="client_login" href="login.html">Client Login</a>
  	-->
  	<a id="logo" href="index.php">BikingBillboards</a>
  	<a id="client_login" href="login.php">Client Login</a>
    <div id="header_slogan">
      <p>simple and effective advertising</p>
    </div>
    <div id="header_nav">
      <ul class="clearfix">
        <!-- Changes by Carter Appleton to support a php based system instead of html
        <li><a href="whyitseffective.html">why it's effective</a></li>
        <li><a class="active" href="howitworks.html">how it works</a></li>
        <li><a href="results.html">the results</a></li>
        <li><a href="aboutus.html">about us</a></li>
        <li><a href="contact.html">contact</a></li>
        -->
        <li><a href="whyitseffective.php">why it's effective</a></li>
        <li><a class="active" href="howitworks.php">how it works</a></li>
        <li><a href="results.php">the results</a></li>
        <li><a href="aboutus.php">about us</a></li>
        <li><a href="contact.php">contact</a></li>
      </ul>
    </div>
    <!--header nav--> 
  </div>
  <!--header-->
  
  <div id="main_content">
    <div id="main_content_left"><img src="images/howitworks_01.jpg" width="320" height="430" alt="how it works"></div>
    <div id="main_content_right">
      <div id="story">
        <p>First, we <strong>set clear goals</strong> for your campaign.<br>
          It's the best way to make <strong> a real difference.</strong></p>
        <br>
        <p>Second, we plan <strong>customized routes and schedules</strong> <br>that <strong>maximize your exposure.</strong></p>
        <br>
        <p>Third, we can help you <strong>create a great ad.</strong><br>
          It can make the difference between <strong>recall and action.</strong></p>
        <br>
        <p>Fourth, we <strong>launch the fleet.</strong> <br>
          Our <strong>smart, friendly riders </strong> make excellent brand ambassadors, <br>and they're experts at <strong>getting your message in front your audience.</strong></p>
        <br>
        <p>Take a look:<br>
        </p>
      </div>
      <!--story-->
      
      <div class="the_fleet_animation"><img src="images/thefleet_animation2.gif" width="530" height="140" alt="the fleet animation"></div>
    </div>
    <!--main_content_right--> 
  </div>
  <!--main_content-->
  
  <div id="footer">
    <div id="footer_top"><img src="images/howitworks_02.jpg" width="960" height="131" alt="how it works footer"></div>
    <div id="footer_bottom">
      <p>&copy; 2011 Biking Billboards, LLC  |  206.257.2017  |  <a href="http://www.mattdelcomyn.com/">site design: matt delcomyn</a></p>
    </div>
  </div>
  <!--footer--> 
  
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