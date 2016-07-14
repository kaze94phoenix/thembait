<?php
App::uses('AppController', 'Controller');
/**
 * OccupationsUsers Controller
 *
 * @property OccupationsUser $OccupationsUser
 * @property PaginatorComponent $Paginator
 */
class OccupationsUsersController extends AppController {

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
		$this->OccupationsUser->recursive = 0;
		$this->set('occupationsUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OccupationsUser->exists($id)) {
			throw new NotFoundException(__('Invalid occupations user'));
		}
		$options = array('conditions' => array('OccupationsUser.' . $this->OccupationsUser->primaryKey => $id));
		$this->set('occupationsUser', $this->OccupationsUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OccupationsUser->create();
			if ($this->OccupationsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The occupations user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The occupations user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->OccupationsUser->User->find('list');
		$occupations = $this->OccupationsUser->Occupation->find('list');
		$activities = $this->OccupationsUser->Activity->find('list');
		$this->set(compact('users', 'occupations', 'activities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OccupationsUser->exists($id)) {
			throw new NotFoundException(__('Invalid occupations user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OccupationsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The occupations user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The occupations user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('OccupationsUser.' . $this->OccupationsUser->primaryKey => $id));
			$this->request->data = $this->OccupationsUser->find('first', $options);
		}
		$users = $this->OccupationsUser->User->find('list');
		$occupations = $this->OccupationsUser->Occupation->find('list');
		$activities = $this->OccupationsUser->Activity->find('list');
		$this->set(compact('users', 'occupations', 'activities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OccupationsUser->id = $id;
		if (!$this->OccupationsUser->exists()) {
			throw new NotFoundException(__('Invalid occupations user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OccupationsUser->delete()) {
			$this->Session->setFlash(__('The occupations user has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The occupations user could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
