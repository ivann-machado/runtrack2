<?php
$db = mysqli_connect('localhost', 'root', '', 'jour09');
$etage = mysqli_query($db, 'SELECT SUM(superficie) AS "superficie_totale" FROM `etage`');

if (mysqli_num_rows($etage) > 0): ?>
	<table border='1'>
		<thead>
			<th>Superficie totale</th>
		</thead>
		<tbody>
				<tr>
					<td><?php echo mysqli_fetch_assoc($etage)['superficie_totale']; ?></td>
				</tr>
		</tbody>
	</table>
<?php else: ?>

	<p>0 resultat</p>

<?php endif;
mysqli_close($db);
?>