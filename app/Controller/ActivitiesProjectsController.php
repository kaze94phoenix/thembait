<?php
App::uses('AppController', 'Controller');
/**
 * ActivitiesProjects Controller
 *
 * @property ActivitiesProject $ActivitiesProject
 * @property PaginatorComponent $Paginator
 */
class ActivitiesProjectsController extends AppController {

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
		$this->ActivitiesProject->recursive = 0;
		$this->set('activitiesProjects', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActivitiesProject->exists($id)) {
			throw new NotFoundException(__('Invalid activities project'));
		}
		$options = array('conditions' => array('ActivitiesProject.' . $this->ActivitiesProject->primaryKey => $id));
		$this->set('activitiesProject', $this->ActivitiesProject->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActivitiesProject->create();
			if ($this->ActivitiesProject->save($this->request->data)) {
				$this->Session->setFlash(__('The activities project has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activities project could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$projects = $this->ActivitiesProject->Project->find('list');
		$activities = $this->ActivitiesProject->Activity->find('list');
		$this->set(compact('projects', 'activities', 'stages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActivitiesProject->exists($id)) {
			throw new NotFoundException(__('Invalid activities project'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActivitiesProject->save($this->request->data)) {
				$this->Session->setFlash(__('The activities project has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activities project could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ActivitiesProject.' . $this->ActivitiesProject->primaryKey => $id));
			$this->request->data = $this->ActivitiesProject->find('first', $options);
		}
		$projects = $this->ActivitiesProject->Project->find('list');
		$activities = $this->ActivitiesProject->Activity->find('list');
		$stages = $this->ActivitiesProject->Stage->find('list');
		$this->set(compact('projects', 'activities', 'stages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActivitiesProject->id = $id;
		if (!$this->ActivitiesProject->exists()) {
			throw new NotFoundException(__('Invalid activities project'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ActivitiesProject->delete()) {
			$this->Session->setFlash(__('The activities project has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The activities project could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
