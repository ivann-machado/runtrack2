<?php 
$str = 'I\'m sorry Dave I\'m afraid I can\'t do that';
// $vowels = preg_replace('/[^aeiou]/i', '', $str);
// echo $vowels;
$vowelsArray =  ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$i = 0;
$print = '';
while (isset($str[$i])) {
	$isVowel = false;
	foreach ($vowelsArray as $key => $value) {
		if ($str[$i] === $value) {
			$isVowel = true;
		}
	}
	if ($isVowel) {
		$print .= $str[$i];
	}
	$i++;
}
echo $print;
?>