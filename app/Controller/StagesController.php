<?php
App::uses('AppController', 'Controller');
/**
 * Stages Controller
 *
 * @property Stage $Stage
 * @property PaginatorComponent $Paginator
 */
class StagesController extends AppController {

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
		$this->Stage->recursive = 0;
		$this->set('stages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Stage->exists($id)) {
			throw new NotFoundException(__('Invalid stage'));
		}
		$options = array('conditions' => array('Stage.' . $this->Stage->primaryKey => $id));
		$this->set('stage', $this->Stage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Stage->create();
			if ($this->Stage->save($this->request->data)) {
				$this->Session->setFlash(__('The stage has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stage could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Stage->exists($id)) {
			throw new NotFoundException(__('Invalid stage'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Stage->save($this->request->data)) {
				$this->Session->setFlash(__('The stage has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stage could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Stage.' . $this->Stage->primaryKey => $id));
			$this->request->data = $this->Stage->find('first', $options);
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
		$this->Stage->id = $id;
		if (!$this->Stage->exists()) {
			throw new NotFoundException(__('Invalid stage'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Stage->delete()) {
			$this->Session->setFlash(__('The stage has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The stage could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
