<html>
<body>

<?php
if (isset($_GET['nombre']) && is_numeric($_GET['nombre'])) {
	$nombre = (int)$_GET['nombre'];
	if ($nombre % 2 === 0) {
		echo 'Nombre pair';
	} else {
		echo 'Nombre impair';
	}
}

?>
<form action="./" method="get">
    <fieldset>
        <legend>Formulaire</legend>
            <p>
                <label>Nombre :</label>
                <input name="nombre" type="text"/>
                <input type="submit" name="submit" value="Submit" />
            </p>
    </fieldset>
</form>
</body>
</html>