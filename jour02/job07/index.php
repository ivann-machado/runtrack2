<?php 
$height = 5;
echo '<div style="text-align: center; min-width: 20px; margin: auto; display: block;">';
for ($i = 0; $i < $height; $i++) { 
	echo '/';
	if ($i && $i < $height - 1) {
		echo str_repeat(' . ', $i);
	}
	else {
		echo str_repeat('_.', $i);
	}
	echo '\\<br/>';
}
echo '</div>';
?>