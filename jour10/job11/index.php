<?php
$db = mysqli_connect('localhost', 'root', '', 'jour09');
$salles = mysqli_query($db, 'SELECT AVG(capacite) AS "capacite_moyenne" FROM `salles`');

if (mysqli_num_rows($salles) > 0): ?>
	<table border='1'>
		<thead>
			<th>Capacité moyenne</th>
		</thead>
		<tbody>
				<tr>
					<td><?php echo mysqli_fetch_assoc($salles)['capacite_moyenne']; ?></td>
				</tr>
		</tbody>
	</table>
<?php else: ?>

	<p>0 resultat</p>

<?php endif;
mysqli_close($db);
?>