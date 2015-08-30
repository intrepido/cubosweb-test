<?php
App::uses('Licencium', 'Model');

/**
 * Licencium Test Case
 *
 */
class LicenciumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Licencium = ClassRegistry::init('Licencium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Licencium);

		parent::tearDown();
	}

}
