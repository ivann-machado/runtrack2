<?php 
$bool = true;
$int = 42;
$float = 3.14;
$str = 'Yeet';
echo '<table border="1">';
echo '<tr><th>Type</th><th>Name</th><th>Value</th></tr>';
echo '<tr><td>Boolean</td><td>$bool</td><td>' . ($bool ? 'true' : 'false') . '</td></tr>';
echo '<tr><td>Integer</td><td>$int</td><td>' . $int . '</td></tr>';
echo '<tr><td>Float</td><td>$float</td><td>' . $float . '</td></tr>';
echo '<tr><td>String</td><td>$str</td><td>' . $str . '</td></tr>';
echo '</table>';
?>