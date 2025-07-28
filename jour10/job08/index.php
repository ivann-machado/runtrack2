<?php
$db = mysqli_connect('localhost', 'root', '', 'jour09');
$salles = mysqli_query($db, 'SELECT SUM(capacite) AS "capacite_totale" FROM `salles`');

if (mysqli_num_rows($salles) > 0): ?>
	<table border='1'>
		<thead>
			<th>Capacité totale</th>
		</thead>
		<tbody>
				<tr>
					<td><?php echo mysqli_fetch_assoc($salles)['capacite_totale']; ?></td>
				</tr>
		</tbody>
	</table>
<?php else: ?>

	<p>0 resultat</p>

<?php endif;
mysqli_close($db);
?>