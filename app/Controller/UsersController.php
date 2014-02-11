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
 * index method
 *
 * @return void
 */
	public function index() {
		$s = $this->Session->read('Auth');
		$id=$s['User']['id'];
		$this->User->recursive = 0;
		$users=$this->User->find('all',
			array(
				'conditions' => array('User.id !='=>$id)
				)
			);
		$this->set('users', $users);
	}
/**
 * logout method
 *
 * @return void
 */
	public function login() {
		$user=$this->Session->read('Auth');
		if(isset($user['User']))
		{
			$this->redirect('/backoffice');
		}
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
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			$d=$this->request->data;
			if ($this->User->save($d)) {
				$this->Session->setFlash(__('L\'utilisateur a été ajouté.'),'notif',array('type'=>'success'));
				return $this->redirect(array('action' => 'index'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('L\'utilisateur n\'existe pas '));
		}
		if ($this->request->is(array('post', 'put'))) {
			$d=$this->request->data;
			if ($this->User->save($d)) {
				$this->Session->setFlash(__('L\'utilisateur a été modifié.'),'notif',array('type'=>'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Une erreur est survenu. Merci de vérifier les informations et de valider à nouveau.'),'notif',array('type'=>'error'));
			}
		} else {
			$users=$this->User->find('first',
			array(
				'conditions' => array('User.id '=>$id)
				)
			);
			$this->request->data=$users;
			$this->set('users', $users);
		}
	}

	/**
	 * profile method
	 *
	 * @return void
	 *
	 */
	public function profile() {
		if ($this->request->is(array('post', 'put'))) {
			$d=$this->request->data;
			if ($this->User->save($d)) {
				$this->Session->setFlash(__('L\'utilisateur a été modifié.'),'notif',array('type'=>'success'));
				return $this->redirect('/backoffice');
			} else {
				$this->Session->setFlash(__('Une erreur est survenu. Merci de vérifier les informations et de valider à nouveau.'),'notif',array('type'=>'error'));
			}
		} else {
			$s = $this->Session->read('Auth');
			$id=$s['User']['id'];
			$options = array(
				'conditions' => 
					array(
						'User.' . $this->User->primaryKey => $id
					),
				'fields' =>
					array(
						'id',
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
			throw new NotFoundException(__('Cet utilisateur n\'existe pas'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('L\'utilisateur a été supprimé.'),'notif',array('type'=>'success'));
		} else {
			$this->Session->setFlash(__('Une erreur est survenu. Merci de vérifier les informations et de valider à nouveau.'),'notif',array('type'=>'error'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}