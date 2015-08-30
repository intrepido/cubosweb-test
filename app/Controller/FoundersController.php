<?php
App::uses('AppController', 'Controller');
/**
 * Founders Controller
 *
 * @property Founder $Founder
 */
class FoundersController extends AppController {

	public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		if ($this->RequestHandler->isAjax()) {
			$this->Founder->recursive = 0;

			$this->autoRender = FALSE;
			return json_encode($this->paginate());
		}
		else{
			$this->Founder->recursive = 0;
			$this->set('founders', $this->paginate());
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Founder->id = $id;
		if (!$this->Founder->exists()) {
			throw new NotFoundException(__('Invalid founder'));
		}
		$this->set('founder', $this->Founder->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Founder->create();
			if ($this->Founder->save($this->request->data)) {
				$this->Session->setFlash(__('The founder has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The founder could not be saved. Please, try again.'));
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
		$this->Founder->id = $id;
		if (!$this->Founder->exists()) {
			throw new NotFoundException(__('Invalid founder'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Founder->save($this->request->data)) {
				$this->Session->setFlash(__('The founder has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The founder could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Founder->read(null, $id);
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
		$this->Founder->id = $id;
		if (!$this->Founder->exists()) {
			throw new NotFoundException(__('Invalid founder'));
		}
		if ($this->Founder->delete()) {
			$this->Session->setFlash(__('Founder deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Founder was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
