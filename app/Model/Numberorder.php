<?php
App::uses('AppModel', 'Model');
/**
 * Customer Model
 *
 */
class Numberorder extends AppModel {

	public function afterFind($results, $primary = false)
	{
		foreach ($results as $key => $val)
		{
			$year=$val['Numberorder']['year'];
			$num=$val['Numberorder']['num']+1;
			$results[$key]['Numberorder']['newnum'] = $year.'-'.str_pad($num,6,'0',STR_PAD_LEFT);
	    }
	    return $results;
	}
}