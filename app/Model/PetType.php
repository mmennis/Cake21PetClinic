<?php 

class PetType extends AppModel {
	
	public $hasMany = array(
		'Pet' => array(
			'className' => 'Pet',
		)
	);
}