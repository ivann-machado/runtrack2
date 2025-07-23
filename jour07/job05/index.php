<?php 
function occurences(string $str, string $char): int {
    if (strlen($char) === 1) {
        
        return substr_count(strtolower($str), $char);
    }
    else {
        return 0;
    }
}

echo occurences('Bonjour', 'b');
?>