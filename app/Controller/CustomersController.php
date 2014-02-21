<?php
App::uses('AppController', 'Controller');
/**
 * Customers Controller
 *
 * @property Customer $Customer
 * @property PaginatorComponent $Paginator
 */
class CustomersController extends AppController {

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
		$this->Customer->recursive = 0;
		$customers=$this->Customer->find('all',array('order'=>'name'));
		$this->set('customers', $customers);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Customer->create();
			if ($this->Customer->save($this->request->data)) {
					$this->Session->setFlash(__('Le fournisseur a été ajouté'),'notif',array('type'=>'success'));
					return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Une erreur est survenu. Merci de vérifier les informations et de valider à nouveau.'),'notif',array('type'=>'error'));
			}
		}
	}
/**
 * add method
 *
 * @return void
 */
	public function addiframe($type = null) {
		$this->layout='iframe';
		if ($this->request->is('post')) {
			$this->Customer->create();
			if ($this->Customer->save($this->request->data)) {
					$this->request->data['Customer']['id']=$this->Customer->id;
			} else {
				$this->Session->setFlash(__('Une erreur est survenu. Merci de vérifier les informations et de valider à nouveau.'),'notif',array('type'=>'error'));
			}
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
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Le fournisseur n\'existe pas'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('Le fournisseur a été modifié.'),'notif',array('type'=>'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Une erreur est survenu. Merci de vérifier les informations et de valider à nouveau.'),'notif',array('type'=>'error'));
			}
		} else {
			$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
			$this->request->data = $this->Customer->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Customer->id = $id;
		if (!$this->Customer->exists()) {
			throw new NotFoundException(__('Le fournisseur n\'existe pas'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Customer->delete()) {
			$this->Session->setFlash(__('Le fournisseur a été supprimé.'),'notif',array('type'=>'success'));
		} else {
			$this->Session->setFlash(__('Une erreur est survenu. Merci de vérifier les informations et de valider à nouveau.'),'notif',array('type'=>'error'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
