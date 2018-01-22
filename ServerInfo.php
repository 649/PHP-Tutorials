<?php
	foreach ($_SERVER as $var => $value) {
		echo "$var => $value <br />";
	} // $_SERVER is a Superglobal variable
	
	// Superglobal variables are predefined variables in PHP
	
	printf("Your IP address is: %s", $_SERVER['REMOTE_ADDR']);
	//Prints out IP Address from Superglobal variable $_SERVER
	
	printf("Your browser is: %s", $_SERVER['HTTP_USER_AGENT']);
	//Prints out the user agent of the client

	//To use predefined variable arrays, track_vars must be enabled in php.ini file
?>