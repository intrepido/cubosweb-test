<?php
App::uses('Estadistica', 'Model');

/**
 * Estadistica Test Case
 *
 */
class EstadisticaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estadistica',
		'app.startup',
		'app.founder'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Estadistica = ClassRegistry::init('Estadistica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Estadistica);

		parent::tearDown();
	}

}
