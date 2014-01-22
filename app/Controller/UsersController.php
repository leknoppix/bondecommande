<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}
/**
 * logout method
 *
 * @return void
 */
	public function login() {
		if ($this->request->is('post'))
		{
			if($this->Auth->login())
			{
				$this->Session->setFlash('Vous êtes à présent identifier.','notif',array('type'=>'success'));
				$this->redirect('/backoffice');
			}
			else
			{
				$this->Session->setFlash('Utilisateur ou mot de passe erroné','notif',array('type'=>'error'));
				//$this->redirect('/');
				$this->redirect('/');
			}
		}
	}
/**
 * logout method
 *
 * @return void
 */
	public function logout() {
		$this->redirect($this->Auth->logout());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			$d=$this->request->data;
			if(!empty($d['User']['password']))
			{
				$d['User']['password']=Security::hash($d['User']['password'],null,true);
			}
			if ($this->User->save($d)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}


	/**
	 * admin_edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$d=$this->request->data;
			if(!empty($d['User']['password']))
			{
				$d['User']['password']=Security::hash($d['User']['password'],null,true);
			}
			if ($this->User->save($d)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

	/**
	 * admin_profile method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_profile() {
		$s = $this->Session->read('Auth');
		$id=$s['User']['id'];
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array(
			'conditions' => 
				array(
					'User.' . $this->User->primaryKey => $id
				),
			'fields' =>
				array(
					'name',
					'nom',
					'username',
					'prenom',
					'mail',
					'telephone_fixe',
					'telephone_mobile',
					'adresse_postale',
					'code_postal',
					'ville',
					'signature'
				)
		);
		$this->request->data = $this->User->find('first', $options);
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}