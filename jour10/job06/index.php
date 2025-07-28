<?php
$db = mysqli_connect('localhost', 'root', '', 'jour09');
$etudiant = mysqli_query($db, 'SELECT COUNT(id) AS "nbEtudiants" FROM `etudiants`');

if (mysqli_num_rows($etudiant) > 0): ?>
	<table border='1'>
		<thead>
			<th>Nombre d'étudiants</th>
		</thead>
		<tbody>
				<tr>
					<td><?php echo mysqli_fetch_assoc($etudiant)['nbEtudiants']; ?></td>
				</tr>
		</tbody>
	</table>
<?php else: ?>

	<p>0 resultat</p>

<?php endif;
mysqli_close($db);
?>