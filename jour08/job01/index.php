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
session_start();
if (isset($_POST['reset'])) {
	$_SESSION['nbvisites'] = 0;
}
$_SESSION['nbvisites'] = isset($_SESSION['nbvisites']) ? $_SESSION['nbvisites'] + 1 : 1;

echo $_SESSION['nbvisites'];
?>