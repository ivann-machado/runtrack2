<?php 
if (!isset($_COOKIE['prenom'])) {
	setcookie('prenom', '');
}
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
	$_COOKIE['prenom'] = $_POST['prenom'];
}
else if (isset($_POST['deco'])) {
	$_COOKIE['prenom'] = null;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php if (!isset($_COOKIE['prenom'])): ?>
	<form action="" method="post">
		<fieldset>
			<input type="text" name="prenom" placeholder="Entrez votre prénom" required>
			<button type="submit">Envoyer</button>
		</fieldset>
	</form>
<?php else: ?>
	<p>Bonjour <?php echo $_COOKIE['prenom'] ?> !</p>
	<form action="" method="post">
		<fieldset>
			<button type="submit" name="deco">Déconnexion</button>
		</fieldset>
	</form>
<?php endif; ?>
</body>
</html>