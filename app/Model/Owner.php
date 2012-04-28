<?php 

class Owner extends AppModel {
	
	public $recursive = 2;
	
	public $hasMany = array(
		'Pet' => array(
			'className' => 'Pet',
		)
	);
	
}