<?php 

class VetsController extends AppController {
	
	public function index() {
		$this->set('vets', $this->Vet->find('all'));
	}
	
}