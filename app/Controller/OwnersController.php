<?php 

class OwnersController extends AppController {
	public $helpers = array('Html', 'Form');
	
	public function index() {
		$this->set('owners', $this->Owner->find('all'));
	}
	
	public function view($id = null) {
		$this->Owner->id = $id;
		$this->set('owner', $this->Owner->read());
	}
	
}