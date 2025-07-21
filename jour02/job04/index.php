<?php 
for ($i=0; $i <= 100 ; $i++) { 
	$display = null;
		if ($i !== 0 && $i % 3 === 0) {
			$display .= 'Fizz';
		}
		if  ($i != 0 && $i % 5 === 0) {
			$display .= 'Buzz';
		}
		if (!$display) {
			$display = $i;
		}
	echo $display . '<br>';
}
?>