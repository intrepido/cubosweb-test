<?php
App::uses('Chofere', 'Model');

/**
 * Chofere Test Case
 *
 */
class ChofereTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.chofere'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Chofere = ClassRegistry::init('Chofere');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Chofere);

		parent::tearDown();
	}

}
