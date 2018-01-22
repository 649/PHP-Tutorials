<?php
	
	STATIC $somevar; 
	//Static variables keep their value even after a function exits
	
	function keep_track() {
		static $count = 0;
		$count++;
		echo $count;
		echo "<br />";
	}
	keep_track();
	keep_track();
	keep_track();
	//Value stays 1 even when function is called numerous times
	
?>