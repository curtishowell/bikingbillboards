

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
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<title>Contact Us :: Biking Billboards</title>
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
	top(6, "ready to launch the fleet");
?>
  
  <div id="main_content">

    <div id="main_content_left">
		<div id="contact_details">
			
			<h2>
				Get your message rolling.<br />
				Contact us today.
			</h2>
			
			<p id="emailButton">
			<a>
				<img src="images/contact/mail.png" /><span>Contact us</span></a>
			</p>

			<p>
				<a href="tel:2062572017"><img src="images/contact/people.jpg" /><span>Call us at 206.257.2017</span></a>
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
	<div id="main_content_center">
		<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

			<input type=hidden name="oid" value="00DU0000000IN0B">
			<!-- <input type=hidden name="retURL" value="http://hidden-waters-9268.herokuapp.com/contact.php#thankyou"> -->
			<input type=hidden name="retURL" value="http://www.bikingbillboards.com/contact.php#thankyou">
			
			<select hidden="hidden" id="lead_source" name="lead_source"><option value="">--None--</option><option value="Advertisement">Advertisement</option>
				<option value="Web" selected="selected">Web</option>
			</select>
				
			<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
			 <!-- these lines if you wish to test in debug mode.                          -->
			 <!-- <input type="hidden" name="debug" value=1>                              -->
			 <!-- <input type="hidden" name="debugEmail" value="jvillars19@gmail.com">                                    -->
			<!--  ----------------------------------------------------------------------  -->
			<div>
				<div id="first_name">
					<label for="first_name">First Name *</label>
					<input maxlength="40" name="first_name" size="20" type="text" />
				</div>
				<div id="last_name">
					<label for="last_name">Last Name *</label>
					<input maxlength="80" name="last_name" size="20" type="text" />
				</div>
				
				
				<div id="phone">
					<label for="phone">Phone *</label>
					<input maxlength="40" name="phone" size="20" type="text" />
				</div>
				<div id="email">
					<label for="email">Email *</label>
					<input maxlength="80" name="email" size="20" type="text" />
				</div>
				
				
				<div id="company">
					<label for="company">Company Name *</label>
					<input  maxlength="40" name="company" size="20" type="text" />
				</div>
				<div id="street">
					<label for="street">Company Address</label>
					<textarea name="street"></textarea>
				</div>
				<div id="city">
					<label for="city">City</label>
					<input   maxlength="40" name="city" size="20" type="text" />
				</div>
				<div id="state">
					<label for="state">State/Province</label>
					<input maxlength="20" name="state" size="20" type="text" />
				</div>
				<div id="zip">
					<label for="zip">Zip</label>
					<input maxlength="20" name="zip" size="20" type="text" />
				</div>
				
				<div id="revenue">
					<label for="revenue">Annual Revenue</label>
					$<input name="revenue" size="20" type="text" />
				</div>
				<div id="employees">
					<label for="employees"># of Employees</label>
					<input name="employees" size="20" type="text" value="" />
				</div>
				<div id="industry">
					<label for="industry">Industry</label>
					<select name="industry">
						<option value="">--None--</option>
						<option value="Agriculture">Agriculture</option>
						<option value="Apparel">Apparel</option>
						<option value="Banking">Banking</option>
						<option value="Biotechnology">Biotechnology</option>
						<option value="Chemicals">Chemicals</option>
						<option value="Communications">Communications</option>
						<option value="Construction">Construction</option>
						<option value="Consulting">Consulting</option>
						<option value="Education">Education</option>
						<option value="Electronics">Electronics</option>
						<option value="Energy">Energy</option>
						<option value="Engineering">Engineering</option>
						<option value="Entertainment">Entertainment</option>
						<option value="Environmental">Environmental</option>
						<option value="Finance">Finance</option>
						<option value="Food &amp; Beverage">Food &amp; Beverage</option>
						<option value="Government">Government</option>
						<option value="Healthcare">Healthcare</option>
						<option value="Hospitality">Hospitality</option>
						<option value="Insurance">Insurance</option>
						<option value="Machinery">Machinery</option>
						<option value="Manufacturing">Manufacturing</option>
						<option value="Media">Media</option>
						<option value="Not For Profit">Not For Profit</option>
						<option value="Other">Other</option>
						<option value="Recreation">Recreation</option>
						<option value="Real Estate">Real Estate</option>
						<option value="Retail">Retail</option>
						<option value="Shipping">Shipping</option>
						<option value="Technology">Technology</option>
						<option value="Telecommunications">Telecommunications</option>
						<option value="Transportation">Transportation</option>
						<option value="Utilities">Utilities</option>
					</select>
				</div>
				
				<div id = "description">
					<label for="description">Comments</label>
					<textarea name="description"></textarea>
				</div>
				<input type="submit" name="submit">
			</div>
			

		</form>
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script> 
<script src="js/jquery-cycle/jquery.cycle.min.js"></script> 
<script src="js/script.js"></script> 


<script type="text/javascript" src="js/noty/jquery.noty.js"></script>
<script type="text/javascript" src="js/noty/layouts/top.js"></script>
<script type="text/javascript" src="js/noty/themes/default.js"></script>
<script src="js/addForm.js"></script>
<!--[if lt IE 7 ]>
    <script src="js/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");</script>
  <![endif]-->

</body>
</html>