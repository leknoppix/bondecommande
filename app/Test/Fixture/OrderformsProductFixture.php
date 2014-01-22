<?php
/**
 * OrderformsProductFixture
 *
 */
class OrderformsProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'key' => 'primary'),
		'orderform_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255),
		'amount' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'price' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'tva' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '12,4'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'orderform_id' => 1,
			'product_id' => 1,
			'amount' => 'Lorem ip',
			'price' => 'Lorem ip',
			'tva' => 1
		),
	);

}
