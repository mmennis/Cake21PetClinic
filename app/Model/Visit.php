<?php 

class Visit extends AppModel {
	
	public $belongsTo = array(
		'Pet' => array(
			'classname' => 'Pet'
		)
	);
	
}