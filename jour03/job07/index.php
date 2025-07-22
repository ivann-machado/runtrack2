<?php 
$str ='Certaines choses changent, et d\'autres ne changeront jamais.';
$firstChar = $str[0];
$i = 0;
while (isset($str[$i])) {
	if (isset($str[$i + 1])) {
		$str[$i] = $str[$i + 1];
	}
	else {
		$str[$i] = strtolower($firstChar);
	}
	$i++;
}
$str[0] = strtoupper($str[0]);
echo $str;
?>