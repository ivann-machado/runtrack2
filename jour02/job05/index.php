<?php 
for ($i = 1; $i <= 1000 ; $i++) {
	$isPrime = true; 
	for ($a = 2; $a < $i; $a++) {
        if ($i % $a == 0) {
            $isPrime = false; 
        }
    }
    if ($isPrime) {
    	echo $i . "</br>";
    }
}
?>