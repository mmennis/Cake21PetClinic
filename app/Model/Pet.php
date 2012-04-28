<?php 

class Pet extends AppModel {
	
	public $belongsTo = array(
		'PetType' => array(
			'classname' => 'PetType'
		),
		'Owner' => array(
			'classname' => 'Owner'
		)
	);
	
	public $hasMany = array(
		'Visit' => array(
			'classname' => 'Visit'
		)
	);
	
}