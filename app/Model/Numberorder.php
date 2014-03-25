<?php
App::uses('AppModel', 'Model');
/**
 * Customer Model
 *
 */
class Numberorder extends AppModel {

	public function afterFind($results, $primary = false) {
		foreach ($results as $orderIndex => $order) {
			$year = $order['Numberorder']['year'];
			$number = $order['Numberorder']['num'] + 1;
			$results[$orderIndex]['Numberorder']['num'] = str_pad($number, 6, '0', STR_PAD_LEFT);
			$results[$orderIndex]['Numberorder']['newnum'] = $year . '-' . str_pad($number, 6, '0', STR_PAD_LEFT);
		}
		return $results;
	}
}
