<?php
App::uses('OrderformsProduct', 'Model');

/**
 * OrderformsProduct Test Case
 *
 */
class OrderformsProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.orderforms_product',
		'app.orderform',
		'app.user',
		'app.customer',
		'app.service',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrderformsProduct = ClassRegistry::init('OrderformsProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrderformsProduct);

		parent::tearDown();
	}

}
