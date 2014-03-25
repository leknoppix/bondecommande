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

	public function beforeSave($options=array()) {
		$this->data['Orderform']['user_id'] = CakeSession::read('Auth.User.id');
		list($jour, $mois, $annee) = explode('/', $this->data['Orderform']['date1']);
		$this->data['Orderform']['date'] = $annee . '-' . $mois . '-' . $jour;
		list($jour, $mois, $annee) = explode('/', $this->data['Orderform']['date2']);
		$this->data['Orderform']['datelivraison'] = $annee . '-' . $mois . '-' . $jour;
		return true;
	}

	public function afterFind($results, $primary=false) {
		list($annee1, $mois1, $jour1) = explode('-', $results[0]['Orderform']['date']);
		$results[0]['Orderform']['date1'] = $jour1 . '/' . $mois1 . '/' . $annee1;
		list($annee2, $mois2, $jour2) = explode('-', $results[0]['Orderform']['datelivraison']);
		$results[0]['Orderform']['date2'] = $jour2 . '/' . $mois2 . '/' . $annee2;
		return $results;
	}
}
