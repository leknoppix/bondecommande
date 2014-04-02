<?php
App::uses('AppModel', 'Model');
/**
 * Customer Model
 *
 */
class Numberorder extends AppModel {
	
	public function beforeSave($options = array()) {
		if (!empty($this->data['Numberorder']['year']) && !empty($this->data['Numberorder']['num'])) {
			$this->data['Numberorder']['new_num'] = $this->data['Numberorder']['year'] . '-' . str_pad($this->data['Numberorder']['num'], 6, '0', STR_PAD_LEFT);
		}
		return true;
	}	
}
