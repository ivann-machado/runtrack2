<?php
$db = mysqli_connect('localhost', 'root', '', 'jour09');
$etudiant = mysqli_query($db, 'SELECT * FROM `etudiants` WHERE `prenom` LIKE "T%"');

if (mysqli_num_rows($etudiant) > 0): ?>
	<table border='1'>
		<thead>
			<th>Prenom</th>
			<th>Nom</th>
			<th>Naissance</th>
			<th>Sexe</th>
			<th>Email</th>
		</thead>
		<tbody>
			<?php while ($row = mysqli_fetch_assoc($etudiant)): ?>
				<tr>
					<td><?php echo $row['prenom']; ?></td>
					<td><?php echo $row['nom']; ?></td>
					<td><?php echo $row['naissance']; ?></td>
					<td><?php echo $row['sexe']; ?></td>
					<td><?php echo $row['email']; ?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
<?php else: ?>

	<p>0 resultat</p>

<?php endif;
mysqli_close($db);
?>