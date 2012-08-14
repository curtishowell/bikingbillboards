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
<title>About Us</title>
<link rel="stylesheet" href="css/style.css" />

<!-- Addition by Carter Appleton -->
<meta name="description" content="How to contact Biking Billboards, a smart and personable alternative to ho-hum advertising."/>
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
      <p>ready to launch the fleet</p>
    </div>
    <div id="header_nav">
      <ul class="clearfix">
        <!-- Changes by Carter Appleton to support a php based system instead of html
        <li><a href="whyitseffective.html">why it's effective</a></li>
        <li><a href="howitworks.html">how it works</a></li>
        <li><a href="results.html">the results</a></li>
        <li><a href="aboutus.html">about us</a></li>
        <li><a class="active" href="contact.html">contact</a></li>
        -->
        <li><a href="whyitseffective.php">why it's effective</a></li>
        <li><a href="howitworks.php">how it works</a></li>
        <li><a href="results.php">the results</a></li>
        <li><a href="aboutus.php">about us</a></li>
        <li><a class="active" href="contact.php">contact</a></li>
      </ul>
    </div>
    <!--header nav--> 
  </div>
  <!--header-->
  
  <div id="main_content">
    <div id="main_content_left"><img src="images/contact_01.jpg" width="320" height="430" alt="contact"></div>
    <!--maincontent left-->
    
    <div id="main_content_right">
      <div id="contact_icons"><img src="images/contact_icons_03.gif" width="60" height="120" alt="contact icons"> </div>
      <!--portraits-->
      
      <div class="contact_info">
        <h1>Get Your Message Rolling!<br>
          Call today.</h1>
        <br>
        <br>
        <p><a href="mailto:info@bikingbillboards.com">info@bikingbillboards.com</a></p>
        <br>
        <br>
        <br>
        <p><strong>206.257.2017</strong></p>
      </div>
      <!--contact--> 
      
    </div>
    <!--main_content_right--> 
    
  </div>
  <!--main_content-->
  
  <div id="footer">
    <div id="footer_top"><img src="images/contact_02.jpg" width="960" height="131" alt="contact us footer"></div>
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