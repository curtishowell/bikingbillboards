<?php
 $baseURL = substr($_SERVER["SERVER_NAME"],strrpos($_SERVER["SERVER_NAME"],"/"));
 $pageURL = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/"));
  
 if(strstr($baseURL,"texas")) //Check if the URL has the string "texas" in it
 {
 	header( "HTTP/1.1 301 Moved Permanently" ); 
 	
 	if(strstr($pageURL,"index")) //Check if we are on the index page of the site
 	{
 		header( "Location: http://www.bikingbillboards.com" ); 
 	}else{
 		header( "Location: http://www.bikingbillboards.com".$pageURL ); 
 	}
 	
	die();
 }
?>