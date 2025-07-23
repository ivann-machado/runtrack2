<?php 
function bonjour(bool $jour = true): void {
	if ($jour) {
		echo 'Bonjour';
	}
	else {
		echo 'Bonsoir';
	}
}

bonjour();
bonjour(false);
bonjour(true);
?>