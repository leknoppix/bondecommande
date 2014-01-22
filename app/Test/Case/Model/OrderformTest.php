<?php
App::uses('Orderform', 'Model');

/**
 * Orderform Test Case
 *
 */
class OrderformTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.orderform',
		'app.user',
		'app.customer',
		'app.service',
		'app.product',
		'app.orderforms_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Orderform = ClassRegistry::init('Orderform');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Orderform);

		parent::tearDown();
	}

}
