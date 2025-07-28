<?php
$db = mysqli_connect('localhost', 'root', '', 'jour09');
$salles = mysqli_query($db, 'SELECT * FROM `salles` ORDER BY capacite ASC');

if (mysqli_num_rows($salles) > 0): ?>
	<table border='1'>
		<thead>
			<th>Id</th>
			<th>Nom</th>
			<th>Id étage</th>
			<th>Capacite</th>
		</thead>
		<tbody>
			<?php while ($row = mysqli_fetch_assoc($salles)): ?>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['nom']; ?></td>
					<td><?php echo $row['id_etage']; ?></td>
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