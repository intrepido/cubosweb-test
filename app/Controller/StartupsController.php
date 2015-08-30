<?php
App::uses('AppController', 'Controller');
/**
 * Startups Controller
 *
 * @property Startup $Startup
 */
class StartupsController extends AppController {

	public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		if ($this->RequestHandler->isAjax()) {
			$this->Startup->recursive = 0;

			$this->autoRender = FALSE;
			return json_encode($this->paginate());
		}
		else{
			$this->Startup->recursive = 0;
			$this->set('startups', $this->paginate());
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
		$this->Startup->id = $id;
		if (!$this->Startup->exists()) {
			throw new NotFoundException(__('Invalid startup'));
		}
		$this->set('startup', $this->Startup->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Startup->create();
			if ($this->Startup->save($this->request->data)) {
				$this->Session->setFlash(__('The startup has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The startup could not be saved. Please, try again.'));
			}
		}
		$founders = $this->Startup->Founder->find('list');
		$this->set(compact('founders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Startup->id = $id;
		if (!$this->Startup->exists()) {
			throw new NotFoundException(__('Invalid startup'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Startup->save($this->request->data)) {
				$this->Session->setFlash(__('The startup has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The startup could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Startup->read(null, $id);
		}
		$founders = $this->Startup->Founder->find('list');
		$this->set(compact('founders'));
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
		$this->Startup->id = $id;
		if (!$this->Startup->exists()) {
			throw new NotFoundException(__('Invalid startup'));
		}
		if ($this->Startup->delete()) {
			$this->Session->setFlash(__('Startup deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Startup was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
