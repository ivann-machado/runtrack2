<?php 
$array = [200, 204, 173, 98, 171, 404, 459];
foreach ($array as $key => $value) {
	if ($value % 2 == 0) {
		echo " $value est paire.<br>";
	} else {
		echo "$value est impaire.<br>";
	}
}
?>