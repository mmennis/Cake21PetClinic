<?php
App::uses('AppController', 'Controller');
/**
 * Vets Controller
 *
 * @property Vet $Vet
 */
class VetsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Time');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vet->recursive = 2;
		$this->set('vets', $this->Vet->find('all'));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vet->id = $id;
		if (!$this->Vet->exists()) {
			throw new NotFoundException(__('Invalid vet'));
		}
		$this->set('vet', $this->Vet->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vet->create();
			if ($this->Vet->save($this->request->data)) {
				$this->Session->setFlash(__('The vet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		}
		$specialties = $this->Vet->Specialty->find('list');
		$this->set(compact('specialties'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Vet->id = $id;
		if (!$this->Vet->exists()) {
			throw new NotFoundException(__('Invalid vet'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vet->save($this->request->data)) {
				$this->Session->setFlash(__('The vet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vet->read(null, $id);
		}
		$specialties = $this->Vet->Specialty->find('list');
		$this->set(compact('specialties'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Vet->id = $id;
		if (!$this->Vet->exists()) {
			throw new NotFoundException(__('Invalid vet'));
		}
		if ($this->Vet->delete()) {
			$this->Session->setFlash(__('Vet deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vet was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Vet->recursive = 0;
		$this->set('vets', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Vet->id = $id;
		if (!$this->Vet->exists()) {
			throw new NotFoundException(__('Invalid vet'));
		}
		$this->set('vet', $this->Vet->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Vet->create();
			if ($this->Vet->save($this->request->data)) {
				$this->Session->setFlash(__('The vet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		}
		$specialties = $this->Vet->Specialty->find('list');
		$this->set(compact('specialties'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Vet->id = $id;
		if (!$this->Vet->exists()) {
			throw new NotFoundException(__('Invalid vet'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vet->save($this->request->data)) {
				$this->Session->setFlash(__('The vet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vet->read(null, $id);
		}
		$specialties = $this->Vet->Specialty->find('list');
		$this->set(compact('specialties'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Vet->id = $id;
		if (!$this->Vet->exists()) {
			throw new NotFoundException(__('Invalid vet'));
		}
		if ($this->Vet->delete()) {
			$this->Session->setFlash(__('Vet deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vet was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
