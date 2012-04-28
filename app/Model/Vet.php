<?php 

class Vet extends AppModel {
	
	public $hasAndBelongsToMany = array(
		'Specialty' => 
			array(
				'classname' => 'Specialty',
				'joinTable' => 'vet_specialties',
				'foreignKey' => 'vet_id',
				'associationForeignKey' => 'specialty_id',
				'unique' => true	
			)		
	);
}