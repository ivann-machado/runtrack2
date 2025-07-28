<?php
$db = mysqli_connect('localhost', 'root', '', 'jour09');
$salles = mysqli_query($db, 'SELECT nom, capacite FROM salles');

if (mysqli_num_rows($salles) > 0): ?>
	<table border='1'>
		<thead>
			<th>Nom</th>
			<th>Capacité</th>
		</thead>
		<tbody>
			<?php while ($row = mysqli_fetch_assoc($salles)): ?>
				<tr>
					<td><?php echo $row['nom'] ?></td>
					<td><?php echo $row['capacite']; ?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
<?php else: ?>

	<p>0 resultat</p>

<?php endif;
mysqli_close($db);
?>