<html>
<head>
	<meta charset="utf-8"/>
	<title>Jour 06 - Job 05</title>
	<link rel="stylesheet" href="<?php echo isset($_GET['style']) ? $_GET['style'] : 'style1';?>.css"/>
<body>
	<form action="./" method="get">
		<fieldset>
			<legend>Changement de style</legend>
			<p>
				<label>Style :</label>
				<select name="style">
					<option value="style1">Style 1</option>
					<option value="style2"<?php echo (isset($_GET['style']) && $_GET['style'] === 'style2') ? ' selected' : ''; ?>>Style 2</option>
					<option value="style3"<?php echo (isset($_GET['style']) && $_GET['style'] === 'style3') ? ' selected' : ''; ?>>Style 3</option>
				</select>
				<button type="submit">Envoyer</button>
			</p>
		</fieldset>
	</form>
</body>
</html>