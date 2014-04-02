<?php
App::uses('AppController', 'Controller');
/**
 * Orderforms Controller
 *
 * @property Orderform $Orderform
 * @property PaginatorComponent $Paginator
 */
class OrderformsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Orderform->recursive = 0;
		$this->set('orderforms', $this->Orderform->find('all', array('order' => 'Orderform.id DESC')));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Orderform->exists($id)) {
			throw new NotFoundException(__('Ce bon de commande n\'existe pas.'));
		}
		
		$options = array('conditions' => array('Orderform.' . $this->Orderform->primaryKey => $id));
		$this->set('orderform', $this->Orderform->find('first', $options));
	}

	public function pdf($id = null) {
		Configure::write('debug',	0);
		$this->response->type('pdf');
		$this->layout	=	'pdf';
		if (!$this->Orderform->exists($id)) {
			throw new NotFoundException(__('Ce bon de commande n\'existe pas.'));
		}
		$options = array('conditions' => array('Orderform.' . $this->Orderform->primaryKey => $id));
		$this->set('orderform', $this->Orderform->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->loadModel('Numberorder');
		$numbers = $this->Numberorder->find(
				'first',
				array(
					'fields' => array('id','year', 'num', 'new_num'),
					'conditions' => array('year' => date('Y'))
				)
			);
		//Cas d'une nouvelle année
		if (!$numbers) {
			$this->Numberorder->create();
			$this->Numberorder->save(
				array(
					'year'	=>	date('Y'),
					'num'	=>	'000001'
				)
			);
			$numbers['Numberorder']['new_num']	=	date('Y')	.	'-'	.	str_pad('1',	6,	'0',	STR_PAD_LEFT);
		}
		if ($this->request->is('post')) {
			$this->request->data['Orderform']['numorder']	=	$numbers['Numberorder']['new_num'];
			$this->Numberorder->save(
				array(
					'id' => $numbers['Numberorder']['id'],
					'year'	=>	date('Y'),
					'num' => str_pad($numbers['Numberorder']['num'] + 1,	6,	'0',	STR_PAD_LEFT)
				)
			);
			$this->Orderform->create();
			
			// Change date format
			if $this->request->data['Orderform']['invoice'] != '' {
				$datetime_invoice = Datetime::createFromFormat('j-M-Y', $this->request->data['Orderform']['invoice']);
				$this->request->data['Orderform']['invoice'] = $datetime_invoice->format('Y-m-d H:i:s');
			}
			
			// Change date format
			if $this->request->data['Orderform']['shipped'] {
				$datetime_shipped = Datetime::createFromFormat('j-M-Y', $this->request->data['Orderform']['shipped']);
				$this->request->data['Orderform']['invoice'] = $datetime_shipped->format('Y-m-d H:i:s');
			}
			
			if ($this->Orderform->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('Le bon de commande a été enregistré. Vous pouvez générer le bon de commande'),	'notif',	array('type'	=>	'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Une erreur est survenu. Merci de vérifier les informations et de valider à nouveau.'),	'notif',	array('type'	=>	'error'));
			}
		} else {
			$customers = $this->Orderform->Customer->find('list',	array('order'	=>	'name'));
			$services = $this->Orderform->Service->find('list',	array('order'	=>	'name'));
			$products = $this->Orderform->Product->find('list');
			$this->set(compact('customers', 'services', 'products',	'numbers'));
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Orderform->exists($id)) {
			throw new NotFoundException(__('Ce bon de commande n\'existe pas.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Orderform->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('Le bon de commande a été modifié.'),	'notif',	array('type'	=>	'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Une erreur est survenu. Merci de vérifier les informations et de valider à nouveau.'),	'notif',	array('type'	=>	'error'));
			}
		} else {
			$options = array('conditions' => array('Orderform.' . $this->Orderform->primaryKey => $id));
			$this->request->data = $this->Orderform->find('first', $options);
		}
		$customers = $this->Orderform->Customer->find('list');
		$services = $this->Orderform->Service->find('list');
		$products = $this->Orderform->Product->find('all',
			array(
				'conditions' => array('Orderform.' . $this->Orderform->primaryKey => $id)
			)
		);
		$this->set(compact('users', 'customers', 'services', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Orderform->id = $id;
		if (!$this->Orderform->exists()) {
			throw new NotFoundException(__('Ce bon de commande n\'existe pas.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Orderform->delete()) {
			$this->Session->setFlash(__('Le bon de commande a été supprimé'),	'notif',	array('type'	=>	'success'));
		} else {
			$this->Session->setFlash(__('Une erreur est survenu. Merci de vérifier les informations et de valider à nouveau.'),	'notif',	array('type'	=>	'error'));
		}
		return $this->redirect(array('action'	=>	'index'));
	}
}
