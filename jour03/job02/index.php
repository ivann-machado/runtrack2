<?php 
$str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';
// $chars = str_split($str);
$print ='';
$i = 0;
/*foreach ($chars as $char) {
	if ($i === 0 || $i % 2 === 0) {
			$print .= $char;
		}
		$i++;
}*/
while (isset($str[$i])) {
	if ($i === 0 || $i % 2 === 0) {
		$print .= $str[$i];
	}
	$i++;
}
echo $print;
?>