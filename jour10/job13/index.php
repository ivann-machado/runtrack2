<?php
$db = mysqli_connect('localhost', 'root', '', 'jour09');
$salles = mysqli_query($db, 'SELECT `salles`.`nom` AS "nom_salle", `etage`.`nom` AS "nom_etage" FROM `salles` LEFT JOIN `etage` ON `salles`.`id_etage` = `etage`.`id`');

if (mysqli_num_rows($salles) > 0): ?>
	<table border='1'>
		<thead>
			<th>Nom</th>
			<th>Id étage</th>
		</thead>
		<tbody>
			<?php while ($row = mysqli_fetch_assoc($salles)):?>
				<tr>
					<td><?php echo $row['nom_salle']; ?></td>
					<td><?php echo $row['nom_etage']; ?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
<?php else: ?>

	<p>0 resultat</p>

<?php endif;
mysqli_close($db);
?>