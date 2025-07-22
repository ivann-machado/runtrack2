<?php 
$str = 'On n’est pas le meilleur quand on le croit mais quand on le sait';
$dic = ['Consonnes' => 0, 'Voyelles' => 0];
$vowelsArray =  ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$i = 0;
while (isset($str[$i])) {
    $isVowel = false;
    foreach ($vowelsArray as $key => $value) {
        if ($str[$i] === $value) {
            $isVowel = true;
        }
    }
    if ($isVowel) {
        $dic['Voyelles']++;
    }
    elseif (ctype_alpha($str[$i])) {
        $dic['Consonnes']++;
    }
    $i++;
}
// print_r($dic);

echo '<table border="1">';
echo '<tr><th>Consonnes</th><th>Voyelles</th></tr>';
echo '<tr><td>' . $dic['Consonnes'] . '</td><td>' . $dic['Voyelles'] . '</td></tr>';
echo '</table>';
?>