<html>
<body>
<form action="./" method="get">
    <fieldset>
        <legend>Formulaire</legend>
            <p>
                <label>Largeur :</label>
                <input name="largeur" type="text"/>
                <label>Hauteur :</label>
                <input name="hauteur" type="text"/>
                <input type="submit"/>
            </p>
    </fieldset>
</form>
<?php
if (isset($_GET['hauteur']) && is_numeric($_GET['hauteur']) && isset($_GET['largeur']) && is_numeric($_GET['largeur'])) {
	$width = (int)$_GET['largeur'];
	$height = (int)$_GET['hauteur'];
	echo '<div class="toit" style="width: 0; height: 0; border-left: ' . $width . 'px solid transparent; border-right: ' . $width . 'px solid transparent; border-bottom: ' . $height*2 . 'px solid #555;"></div>';
	echo '<div style="width: ' . $width * 2 . 'px; height: ' . $height * 2 . 'px; border: solid 1px; display: block;">';

	// echo '<table border="1" style="border-collapse: collapse;">';
	// for ($i = 0; $i < $height; $i++) {
	// 	echo '<tr>';
	// 	for ($j = 0; $j < $i; $j++) {
	// 			echo '<td style="background-color: black; width: 20px; height: 20px;"></td>';
	// 	}
	// 	echo '</tr>';
	// }
	// for ($i = 0; $i < $height; $i++) {
	// 	echo '<tr>';
	// 	for ($j = 0; $j < $width; $j++) {
	// 			echo '<td style="background-color: black; width: 20px; height: 20px;"></td>';
	// 	}
	// 	echo '</tr>';
	// }
	// echo '</table>';
}

?>
</body>
</html>