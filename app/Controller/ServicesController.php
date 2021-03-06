<?php
App::uses('AppController', 'Controller');
/**
 * Services Controller
 *
 * @property Service $Service
 * @property PaginatorComponent $Paginator
 */
class ServicesController extends AppController {

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
		$this->Service->recursive = 0;
		$services	=	$this->Service->find('all');
		$this->set('services', $services);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Service->create();
			$d	=	$this->request->data;
			$d['Services']['slug']	=	$d['Services']['name'];
			if ($this->Service->save($d)) {
				$this->Session->setFlash(__('Le service a été ajouté.'),	'notif',	array('type'	=>	'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Une erreur est survenu. Merci de vérifier les informations et de valider à nouveau.'),	'notif',	array('type'	=>	'error'));
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
		if (!$this->Service->exists($id)) {
			throw new NotFoundException(__('Le service n\'existe pas'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('Le service a été modifié.'),	'notif',	array('type'	=>	'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Une erreur est survenu. Merci de vérifier les informations et de valider à nouveau.'),	'notif',	array('type'	=>	'error'));
			}
		} else {
			$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));
			$this->request->data = $this->Service->find('first', $options);
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
		$this->Service->id = $id;
		if (!$this->Service->exists()) {
			throw new NotFoundException(__('Le service n\'existe pas'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Service->delete()) {
			$this->Session->setFlash(__('Le service a été correctement supprimé.'),	'notif',	array('type'	=>	'success'));
		} else {
			$this->Session->setFlash(__('Une erreur est survenu. Merci de vérifier les informations et de valider à nouveau.'),	'notif',	array('type'	=>	'error'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}