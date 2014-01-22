<?php
/**
 * OrderformFixture
 *
 */
class OrderformFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'service_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255),
		'etat' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
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
			'user_id' => 1,
			'customer_id' => 1,
			'date' => '2014-01-15',
			'name' => 'Lorem ipsum dolor sit amet',
			'service_id' => 1,
			'etat' => 'Lorem ipsum dolor sit ame'
		),
	);

}
