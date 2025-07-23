<?php
function gras(string $str): string {
	$words = explode(' ', trim($str));
	foreach ($words as $key => $word) {
		if ($word[0] === strtoupper($word[0])) {
			$words[$key] = '<b>' . $word . '</b>';
		}
	}
	return implode(' ', $words);
}

function cesar(string $str, int $shift = 2): string {
	$cesarStr = '';
	for ($i = 0; $i < strlen($str); $i++) {
		$char = $str[$i];
		if (ctype_alpha($char)) {
			$base = ctype_upper($char) ? 'A' : 'a';
			$cesarStr .= chr((ord($char) - ord($base) + $shift) % 26 + ord($base));
		} else {
			$cesarStr .= $char;
		}
	}
	return $cesarStr;
}
function plateforme(string $str): string {
	$words = explode(' ', trim($str));
	foreach ($words as $key => $word) {
		if (str_ends_with($word, 'me')) {
			$words[$key] .= '_';
		}
	}
	return implode(' ', $words);
}

?>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Jour 07 - Job 07</title>
	<link rel="stylesheet" href="./style1.css"/>
</head>
<body>
	<form action="./" method="get">
		<fieldset>
			<legend></legend>
			<label>Texte :</label>
			<input type="text" name="str" value="<?php echo isset($_GET['str']) ? htmlspecialchars($_GET['str']) : ''; ?>"/>
			<label>Fonction :</label>
			<select name="fonction">
				<option value="gras">Gras</option>
				<option value="cesar"<?php echo (isset($_GET['fonction']) && $_GET['fonction'] === 'cesar') ? ' selected' : ''; ?>>Caesar</option>
				<option value="plateforme"<?php echo (isset($_GET['fonction']) && $_GET['fonction'] === 'plateforme') ? ' selected' : ''; ?>>Plateforme</option>
			</select>
			<button type="submit">Envoyer</button>
		</fieldset>
	</form>
	<?php
	if (isset($_GET['str']) && isset($_GET['fonction'])) {
		$str = htmlspecialchars($_GET['str']);
		$fonction = $_GET['fonction'];

		switch ($fonction) {
			case 'gras':
			echo gras($str);
			break;
			case 'cesar':
			echo cesar($str, 1);
			break;
			case 'plateforme':
			echo plateforme($str);
			break;
		}
	}
	?>
</body>
</html>