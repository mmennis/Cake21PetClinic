<h1>Owners</h1>
<table>
	<tr>
		<th>Name</th>
		<th>Street Address</th>
		<th>City</th>
		<th>Telephone</th>
		<th>Pets</th>
	</tr>
	
	<?php foreach ($owners as $owner ): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($owner['Owner']['first_name']." ".$owner['Owner']['last_name'], 
					array('controller' => 'owners', 'action' => 'view', $owner['Owner']['id']));
			?>
		</td>
		<td><?php echo $owner['Owner']['address']; ?></td>
		<td><?php echo $owner['Owner']['city']; ?></td>
		<td><?php echo $owner['Owner']['telephone']; ?></td>
		<td>
			<?php foreach ($owner['Pet'] as $pet): ?>
				<?php echo $pet['name']; ?>			
			<?php endforeach; ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
