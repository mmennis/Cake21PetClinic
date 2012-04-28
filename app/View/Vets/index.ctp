<h1>Vets</h1>
<table>
	<tr>
		<th>Name</th>
		<th>Specialties</th>
	</tr>
	<?php foreach($vets as $vet):?>
		<tr>
			<td><?php echo $vet['Vet']['first_name']." ".$vet['Vet']['last_name']; ?></td>
			<td>Whatever</td>
		</tr>
	<?php endforeach; ?>
</table>