<?php

	integer printf(string format [, mixed args])
	printf("Bar inventory: %d bottles of tonic water.", 100);
	printf("%d bottles of tonic water cost $%f", 100, 43.20);
	
	// %b : Integer presented as a binary number
	// %c : Integer presented as a character corresponding to that ASCII value
	// %d : Integer presented as a signed decimal number
	// %f : Floating-point number presented as a floating-point number
	// %o : Integer presented as an octal number
	// %s : String presented as a string
	// %u : Integer presented as a unsigned decimal number
	// %x : Integer presented as a lowercase hexadecimal number
	// %X : Integer presented as a uppercase hexadecimal number
?>

<?php

	string sprintf(string format [, mixed arguments])
	$cost = sprintf("$%.2f", 43.2); // $cost = $43.20
	
?>