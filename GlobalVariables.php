<?php
	//Global Variables first method
	$somevar = 15;
	
	function addit() {
		global $somevar;
		$somevar++;
		echo "Somevar is $somevar";
	}
	addit(); //somevar = 16
	
?>

<?php
	//Global Variables second method
	$somevar = 15;
	
	function addit() {
		$GLOBALS["somevar"]++;
	}
	
	addit();
	echo "Somevar is ".$GLOBALS["somevar"]; // somevar = 16
?>