<?php
$str = 'Les choses que l\'on possede finissent par nous posseder.';
$i = 0;
$print = '';
while (isset($str[$i])) {
		$print = $str[$i] . $print;
	$i++;
}
echo $print;
?>