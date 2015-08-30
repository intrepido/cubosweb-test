<?php
App::uses('Founder', 'Model');

/**
 * Founder Test Case
 *
 */
class FounderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.founder',
		'app.startup'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Founder = ClassRegistry::init('Founder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Founder);

		parent::tearDown();
	}

}
