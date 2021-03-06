<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Orderform $Orderform
 */
class Product extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo	=	array(
		'Orderform' => array(
			'className' => 'Orderform',
			'foreignKey' => 'orderform_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function beforeSave($options = array()) {
		if (!empty($this->data['Product']['name'])) {
			$this->data['Product']['slug'] = strtolower(Inflector::slug($this->data['Product']['name'], '-'));
		}
		return true;
	}
}
