<?php

/* Outputs header. shows selected menu item corresponding to indices below
 * 
 * -2 everything else
 * -1 index
 * 0 why it's effective
 * 1 how it works
 * 2 the results
 * 3 our clients
 * 4 about us
 * 5 contact
 */
function top($page_index, $header_tagline){
	
	$pages = array(
		"howitworks.php" => "how it works",
		"whyitseffective.php" => "why it's effective",
		"results.php" => "the results",
		"ourclients.php" => "our clients",
		"aboutus.php" => "about us",
		"contact.php" => "contact"
	);
	
	?>
	
	<div id="new_header">
	
		<!-- logo -->
		<a href="/">
			<img id="logo" src="images/header/logo.jpg" />
		</a>
		
		<div id="yellow_header">
		
		
		<?php 
		
		#show header UI specific to home page cause it's huuuge!
		if( $page_index === -1 ) {
			?>
			
			<p>
				We offer a <strong>smart</strong> and <strong>personable</strong> alternative to ho-hum advertising.<br />
				By developing <strong>targeted</strong>, high-visibility routes, your message <strong>connects</strong> with<br />
				your customer. The result is <strong>cost-effective</strong>, eco-friendly, and <strong>memorable</strong>.
			</p>
			
			<?php
			
		} else {
			
			?>
			
			<h2><?= $header_tagline ?></h2>
			
			<?php
		}
		?>
		
		</div><!-- yellow header -->
		
		<!-- nav -->
		<ul id="topnav">
			<?php
			$counter = 0;
			$last_index = count($pages) - 1;
			
			foreach($pages as $uri => $name){
				
				$class = ($page_index == $counter) ? 'class="selected"' : '';
				
				
				if ($counter == $last_index) {
					if($class){
						$class = 'class = "last_menu_item selected"';
					} else {
						$class = 'class = "last_menu_item"';
					}
				}
				
				$counter++;
				
				?>
				
				<li><a <?= $class ?> href="<?= $uri ?>"><?= $name ?></a></li>
				
				<?php
			}
			
			
			?>
		</ul> 

	</div><!--new header-->
	
	<?php
	
}

function footer($content){
	
	#	parameter $content
	#	array: list of image urls
	#	1: show contact info (for home page)
	
	$id = "footer_upper";
	if($content === 1 ){
		$id = "footer_upper_home";
	}
	
	?>
	<div id="footer">
		<div id="footer_white"></div>
		
		<div id="<?= $id ?>">
		
			<?php
			#array of image URIs
			if(is_array($content)){
				foreach($content as $image_url){

				?>	
				
				<img src="<?= $image_url ?>" alt="Biking Billboards" />
				
				<?php	
				
				}#end for loop
				
			#html as a string
			}elseif($content === 1 ){
			
				?>
				<p>
					<a href="mailto:info@bikingbillboards.com">info@bikingbillboards.com</a><br />
					<span><a href="tel:2062572017">206.257.2017</a></span>
				</p>
			
				<?php
			}
			?>
		
		</div><!-- footer upper -->
		
		<div id="footer_lower">
			<?php
				#outputs current year in footer
				date_default_timezone_set('America/Los_Angeles');
				$year = date("Y");
			?>
			<p>&copy; <?= $year ?> Biking Billboards, LLC <span>|</span> <a href="tel:2062572017">206.257.2017</a> <span>|</span> <a href="http://www.milepost59.com/" target="_blank">Design by Milepost59</a></p>
		</div>
	</div><!-- footer -->
	
	
	
	
	
	<?php
	
}

?>
















