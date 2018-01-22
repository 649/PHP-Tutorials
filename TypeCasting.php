<?php
	
	//TypeCasting is when one data type is converted to another
	$score = (double) 13; // $score = 13.0
	$score = (int) 14.8; // $score = 14 (Always rounded down)
	$sentence = "This is a sentence";
	echo (int) $sentence; // returns 0
?>

<?php

	$model = "Toyota";
	$obj = (object) $model;
	
	print $obj->scalar; // returns "Toyota"
	
?>

<?php

	$total = 5; //an integer
	$count = "15"; //a string
	$total += $count; //$total = 20 (an integer)
	
?>