<?php 
function leetSpeak(string $str): string {
	$leetA = ['a' => '4', 'b' => '8', 'e' => '3', 'g' => '9', 'l' => '1', 'o' => '0', 's' => '5', 't' => '7'];
	$i = 0;
	while (isset($str[$i])) {
		if (array_key_exists(strtolower($str[$i]), $leetA)) {
			$str[$i] = $leetA[strtolower($str[$i])];
		}
		$i++;
	}
	return $str;
}

echo leetSpeak('AALLEETleet');
?>