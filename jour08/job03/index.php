<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="post">
		<fieldset>
			<input type="text" name="prenom" placeholder="Entrez votre prénom" required>
			<button type="submit">Envoyer</button>
		</fieldset>
	</form>
	<form action="" method="post">
		<fieldset>
			<button type="submit" name="reset">Reset</button>
		</fieldset>
	</form>
</body>
</html>
<?php 
session_start();
if (isset($_POST['reset']) && isset($_SESSION['prenom'])) {
	$_SESSION['prenom'] = [];
}
else {
	isset($_SESSION['prenom']) ? array_unshift($_SESSION['prenom'], $_POST['prenom']) : $_SESSION['prenom'] = [];
	foreach ($_SESSION['prenom'] as $key => $value) {
		echo "$value<br>";
	}
}
// print_r($_SESSION['prenom']);
?>