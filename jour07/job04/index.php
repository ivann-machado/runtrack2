<?php 
function calcule(int $a, string $operation, int $b): int {
	switch ($operation) {
		case '+':
			return $a + $b;
		case '-':
			return $a - $b;
		case '*':
			return $a * $b;
		case '/':
			if ($b == 0) {
				return 0;
			}
			return $a / $b;
		case '%':
			if ($b == 0) {
				return 0;
			}
			return $a % $b;
		default:
			return 0;
	}
}

echo calcule(10, '*', 10);
?>