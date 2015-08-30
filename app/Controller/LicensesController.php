<?php
App::uses('AppController', 'Controller');
/**
 * Licenses Controller
 *
 * @property License $License
 */
class LicensesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->License->recursive = 0;
		$this->set('licenses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->License->id = $id;
		if (!$this->License->exists()) {
			throw new NotFoundException(__('Invalid license'));
		}
		$this->set('license', $this->License->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->License->create();
			if ($this->License->save($this->request->data)) {
				$this->Session->setFlash(__('The license has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The license could not be saved. Please, try again.'));
			}
		}
		$drivers = $this->License->Driver->find('list');
		$this->set(compact('drivers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->License->id = $id;
		if (!$this->License->exists()) {
			throw new NotFoundException(__('Invalid license'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->License->save($this->request->data)) {
				$this->Session->setFlash(__('The license has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The license could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->License->read(null, $id);
		}
		$drivers = $this->License->Driver->find('list');
		$this->set(compact('drivers'));
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
		$this->License->id = $id;
		if (!$this->License->exists()) {
			throw new NotFoundException(__('Invalid license'));
		}
		if ($this->License->delete()) {
			$this->Session->setFlash(__('License deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('License was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
