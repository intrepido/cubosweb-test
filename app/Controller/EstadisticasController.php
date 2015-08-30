<?php
App::uses('AppController', 'Controller');
/**
 * Estadisticas Controller
 *
 * @property Estadistica $Estadistica
 */
class EstadisticasController extends AppController {

	public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Estadistica->recursive = 0;
		$this->set('estadisticas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Estadistica->id = $id;
		if (!$this->Estadistica->exists()) {
			throw new NotFoundException(__('Invalid estadistica'));
		}
		$this->set('estadistica', $this->Estadistica->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Estadistica->create();
			if ($this->Estadistica->save($this->request->data)) {
				$this->Session->setFlash(__('The estadistica has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estadistica could not be saved. Please, try again.'));
			}
		}
		$startups = $this->Estadistica->Startup->find('list');
		$this->set(compact('startups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Estadistica->id = $id;
		if (!$this->Estadistica->exists()) {
			throw new NotFoundException(__('Invalid estadistica'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Estadistica->save($this->request->data)) {
				$this->Session->setFlash(__('The estadistica has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estadistica could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Estadistica->read(null, $id);
		}
		$startups = $this->Estadistica->Startup->find('list');
		$this->set(compact('startups'));
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
		$this->Estadistica->id = $id;
		if (!$this->Estadistica->exists()) {
			throw new NotFoundException(__('Invalid estadistica'));
		}
		if ($this->Estadistica->delete()) {
			$this->Session->setFlash(__('Estadistica deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Estadistica was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


	public function reporte() {
		if ($this->RequestHandler->isAjax()) {

			$this->Estadistica->recursive = 0;
			$db = $this->Estadistica->getDataSource();

			//Obtener lista de startups que tienen estadisticas.
			$startupsWhitEstadistics = $db->fetchAll(
				'SELECT Startups.* FROM Estadisticas JOIN Startups ON Estadisticas.startup_id=Startups.id GROUP BY Startups.name'
			);

			$finalArray = Array();
			//Obtener y crear lista con cada startup y su lista de estadisticas.
			foreach ($startupsWhitEstadistics as $startup) {
				array_push($finalArray, array( $startup , $db->fetchAll("SELECT Estadisticas.* FROM Estadisticas JOIN Startups ON Estadisticas.startup_id=Startups.id WHERE Estadisticas.startup_id=?",
					array($startup['Startups']['id']))));
			}

			$this->autoRender = FALSE;
			return json_encode($finalArray);
		}
	}

}
