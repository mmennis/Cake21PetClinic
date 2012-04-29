<h2>Owner Information</h2>

<table>
	<tr>
		<th>Name</th>
		<td><b><?php echo h($owner['Owner']['first_name'])." ".h($owner['Owner']['last_name']); ?></b></td>
	</tr>
	<tr>
		<th>Address</th>
		<td><?php echo $owner['Owner']['address']; ?></td>
	</tr>
	<tr>
		<th>City</th>
		<td><?php echo $owner['Owner']['city']; ?></td>
	</tr>
	<tr>
		<th>Telephone</th>
		<td><?php echo $owner['Owner']['telephone']; ?></td>
	</tr>
</table>

<h2>Pets and Visits</h2>

<?php foreach($owner['Pet'] as $pet): ?>
	<table width="94%">
		<tr>
			<td valign="top">
				<table>
					<tr>
						<th>Name</th>
						<td><?php echo $pet['name']; ?></td>
					</tr>
					<tr>
						<th>Birthdate</th>
						<td><?php echo $this->Time->niceShort($pet['birth_date']); ?></td>
					</tr>
					<tr>
						<th>Type</th>
						<td><?php echo $pet['PetType']['name'];?></td>
					</tr>
				</table>
			</td>
			<!-- 
			<td>
				<?php print_r($pet);?>
			</td>
			 -->
			<td valign="top">
				<table>
					<tr>
						<thead>
							<th>Visit Date</th>
							<th>Description</th>
						</thead>
						<?php foreach($pet['Visit'] as $visit):?>
						<tr>
							<td><?php echo $this->Time->niceShort($visit['visit_date']); ?></td>
							<td><?php echo $visit['description']; ?></td>
						</tr>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
		</tr>
	</table>
<?php endforeach; ?>