<?php

	$x = 4;
	function assignx() {
		$x = 0;
		printf("\$x inside function is %d <br />", $x);
	}
	assignx();
	printf("\$x outside of function is %d <br />", $x);
	
?>

<?php
	$value1 = "Hello";
	$value2 =& $value1; //$value1 and $value2 both equal "Hello"
	$value2 = "Goodbye"; // $value1 and $value2 both equal "Goodbye"
?>

<?php

	//multiply a value by 10 and return it to the caller
	function x10 ($value) {
		$value = $value * 10;
		return $value;
?>