<?php 
$heigth = 10;
$width = 20;
echo '<div style="width: ' . $width*10 . 'px; height: ' . $heigth*10 . 'px; border: solid 1px; display: block;">';
/*for ($x = 0; $x < $width; $x++) { 
	for ($y = 0; $y < $heigth; $y++) { 
		if ($x === 0 || $x === $width - 1 || $y === 0 || $y === $heigth - 1) {
			if ($x === 0 && $y === 0) { 
				echo '&boxdr;';
			}
			elseif ($x === 0 && $y === $heigth - 1) {
				echo '&boxdl;';
			}
			elseif ($x === $width - 1 && $y === 0) {
				echo '&boxur;';
			}
			elseif ($x === $width - 1 && $y === $heigth - 1) {
				echo '&boxul;';
			}
			elseif ($x === 0) {
				echo '&macr;';
			}
			elseif ($x === $width - 1) {
				echo '&lowbar;';
			}
			else {
				echo '&vert;';
			}
		}
		else {
			echo '-.';
		}
	}
	echo '<br>';
}*/
?>