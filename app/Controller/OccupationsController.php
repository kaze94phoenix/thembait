<?php
App::uses('AppController', 'Controller');
/**
 * Occupations Controller
 *
 * @property Occupation $Occupation
 * @property PaginatorComponent $Paginator
 */
class OccupationsController extends AppController {

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
		$this->Occupation->recursive = 0;
		$this->set('occupations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Occupation->exists($id)) {
			throw new NotFoundException(__('Invalid occupation'));
		}
		$options = array('conditions' => array('Occupation.' . $this->Occupation->primaryKey => $id));
		$this->set('occupation', $this->Occupation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Occupation->create();
			if ($this->Occupation->save($this->request->data)) {
				$this->Session->setFlash(__('The occupation has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The occupation could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Occupation->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Occupation->exists($id)) {
			throw new NotFoundException(__('Invalid occupation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Occupation->save($this->request->data)) {
				$this->Session->setFlash(__('The occupation has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The occupation could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Occupation.' . $this->Occupation->primaryKey => $id));
			$this->request->data = $this->Occupation->find('first', $options);
		}
		$users = $this->Occupation->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Occupation->id = $id;
		if (!$this->Occupation->exists()) {
			throw new NotFoundException(__('Invalid occupation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Occupation->delete()) {
			$this->Session->setFlash(__('The occupation has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The occupation could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
