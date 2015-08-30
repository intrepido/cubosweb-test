<?php
App::uses('AppController', 'Controller');
/**
 * Drivers Controller
 *
 * @property Driver $Driver
 */
class DriversController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Driver->recursive = 0;
		$this->set('drivers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Driver->id = $id;
		if (!$this->Driver->exists()) {
			throw new NotFoundException(__('Invalid driver'));
		}
		$this->set('driver', $this->Driver->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Driver->create();
			if ($this->Driver->save($this->request->data)) {
				$this->Session->setFlash(__('The driver has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Driver->id = $id;
		if (!$this->Driver->exists()) {
			throw new NotFoundException(__('Invalid driver'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Driver->save($this->request->data)) {
				$this->Session->setFlash(__('The driver has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Driver->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Driver->id = $id;
		if (!$this->Driver->exists()) {
			throw new NotFoundException(__('Invalid driver'));
		}
		if ($this->Driver->delete()) {
			$this->Session->setFlash(__('Driver deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Driver was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
