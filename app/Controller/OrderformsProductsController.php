<?php
App::uses('AppController', 'Controller');
/**
 * OrderformsProducts Controller
 *
 * @property OrderformsProduct $OrderformsProduct
 * @property PaginatorComponent $Paginator
 */
class OrderformsProductsController extends AppController {

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
		$this->OrderformsProduct->recursive = 0;
		$this->set('orderformsProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OrderformsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid orderforms product'));
		}
		$options = array('conditions' => array('OrderformsProduct.' . $this->OrderformsProduct->primaryKey => $id));
		$this->set('orderformsProduct', $this->OrderformsProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrderformsProduct->create();
			if ($this->OrderformsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The orderforms product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orderforms product could not be saved. Please, try again.'));
			}
		}
		$orderforms = $this->OrderformsProduct->Orderform->find('list');
		$products = $this->OrderformsProduct->Product->find('list');
		$this->set(compact('orderforms', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OrderformsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid orderforms product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OrderformsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The orderforms product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orderforms product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrderformsProduct.' . $this->OrderformsProduct->primaryKey => $id));
			$this->request->data = $this->OrderformsProduct->find('first', $options);
		}
		$orderforms = $this->OrderformsProduct->Orderform->find('list');
		$products = $this->OrderformsProduct->Product->find('list');
		$this->set(compact('orderforms', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OrderformsProduct->id = $id;
		if (!$this->OrderformsProduct->exists()) {
			throw new NotFoundException(__('Invalid orderforms product'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OrderformsProduct->delete()) {
			$this->Session->setFlash(__('The orderforms product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The orderforms product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
