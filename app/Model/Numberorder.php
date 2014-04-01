<?php
App::uses('AppModel', 'Model');
/**
 * Customer Model
 *
 */
class Numberorder extends AppModel {
	
	public function beforeSave($options = array()) {
		if (!empty($this->data['Numberorder']['year']) && !empty($this->data['Numberorder']['num'])) {
			$this->data['Numberorder']['newnum'] = $year . '-' . str_pad($number, 6, '0', STR_PAD_LEFT);
		}
		return true;
	}	
}
