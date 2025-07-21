<?php 
/*for ($i=0; $i <= 1337 ; $i++) { 

}*/
$i = 0;
while ($i <= 1337) {
	if ($i == 42) {
		echo '<b><u>' . $i . '</u></b><br>';
	}
	else {
		echo $i . '<br>';
	}
	$i++;
}
?>