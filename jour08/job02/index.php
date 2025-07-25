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
		<button type="submit" name="reset">Reset</button>
	</fieldset>
</form>
</body>
</html>
<?php 
if (!isset($_COOKIE['nbvisites'])) {
	setcookie('nbvisites', 0);
}
if (isset($_POST['reset'])) {
	$_COOKIE['nbvisites'] = 1;
}

setcookie('nbvisites', isset($_COOKIE['nbvisites']) ? $_COOKIE['nbvisites'] + 1 : 1);

echo $_COOKIE['nbvisites'];
?>