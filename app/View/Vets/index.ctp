<h1>Vets</h1>
<table>
	<tr>
		<th>Name</th>
		<th>Specialties</th>
	</tr>
	<?php foreach($vets as $vet):?>
		<tr>
			<td><?php echo $vet['Vet']['first_name']." ".$vet['Vet']['last_name']; ?></td>
			<td>
			<!--  
			<?php print_r($vet['Specialty'])?>
			-->
			<?php foreach($vet['Specialty'] as $specialty): ?>
			<?php echo $specialty['name']; ?>
			<?php endforeach; ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>