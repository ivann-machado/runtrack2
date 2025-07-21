<?php 
for ($i=0; $i <= 100 ; $i++) { 
	switch ($i) {
		case 42:
			echo 'La Plateforme_<br>';
			break;
		case 0 <= $i && $i <= 20:
			echo "<i>{$i}</i><br>";
			break;
		case 25 <= $i && $i <= 50:
			echo "<u>{$i}</u><br>";
			break;
		
		default:
			echo $i . '<br>';
			break;
	}
}
?>