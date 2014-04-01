<?php
App::uses('AppModel', 'Model');
/**
 * Orderform Model
 *
 * @property User $User
 * @property Customer $Customer
 * @property Service $Service
 * @property Product $Product
 */
class Orderform extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Service' => array(
			'className' => 'Service',
			'foreignKey' => 'service_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'orderform_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public function beforeSave($options = array()) {
		App::uses('CakeTime', 'Utility');
		$this->data['Orderform']['invoice'] = CakeTime::format($this->data['Orderform']['invoice'],  '%Y-%m-%d');
		$this->data['Orderform']['shipped'] = CakeTime::format($this->data['Orderform']['shipped'],  '%Y-%m-%d');
		$this->data['Orderform']['user_id'] = CakeSession::read('Auth.User.id');
		return true;
	}

	public function afterFind($results, $primary = false) {
		App::uses('CakeTime', 'Utility');
		foreach ($results as $key => $val) {
			$results[$key]['Orderform']['invoice'] = CakeTime::format($results[$key]['Orderform']['invoice'],  '%d-%m-%Y');
			$results[$key]['Orderform']['shipped'] = CakeTime::format($results[$key]['Orderform']['shipped'],  '%d-%m-%Y');
		}
		return $results;
	}
}
