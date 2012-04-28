<?php 

class Specialty extends AppModel {
	
	public $hasAndBelongsTo = array(
		'Vet' =>
			array
			(
				'classname' => 'Vet',
				'joinTable' => 'vet_specialties',
				'foreignKey' => 'specialty_id',
				'associationForeignKey' => 'vet_id',
				'unique' => true
			)
	);
}