<?php
App::uses('AppController', 'Controller');
/**
 * Projects Controller
 *
 * @property Project $Project
 * @property PaginatorComponent $Paginator
 */
class ProjectsController extends AppController {

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
            if ($this->Session->read('Auth.User.usertype_id')==='2'):
		$this->Project->recursive = 0;
		$this->set('projects', $this->Paginator->paginate());
                endif;
            if ($this->Session->read('Auth.User.usertype_id')==='1'):
                $this->Paginator->settings = array(
                    'conditions'=>array(
                        'Project.user_id'=>$this->Session->read('Auth.User.id')
                    )
                );
            $this->Project->recursive = 0;
		$this->set('projects', $this->Paginator->paginate());
            endif;
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
            $this->loadModel('Activity');
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$this->set('project', $this->Project->find('first', $options));
                $progress = $this->Project->ActivitiesProject->find('list',array(
                    'fields'=>array(
                        'ActivitiesProject.activity_id'
                    ),
                    'conditions'=>array(
                        'ActivitiesProject.project_id'=>$id
                    )
                ));
                $projectCount = $this->Project->ActivitiesProject->find('count',array(
                    'conditions'=>array(
                        'ActivitiesProject.project_id'=>$id
                    )
                ));
                $aux=array();
                foreach ($progress as $progress):
                    array_push($aux,array_sum($this->Activity->find('list',array(
                        'fields'=>array(
                            'Activity.progress'
                        ),
                        'conditions'=>array(
                            'Activity.id'=>$progress
                        )
                    ))));
                endforeach;
                $this->set('progress', (array_sum($aux)/$projectCount));
                
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Project->create();
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Project->User->find('list');
		$activities = $this->Project->Activity->find('list');
		$this->set(compact('users', 'activities'));
	}
public function preregister(){
    if ($this->request->is('post')) {
			$this->Project->create();
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
			$this->request->data = $this->Project->find('first', $options);
		}
		$users = $this->Project->User->find('list');
		$activities = $this->Project->Activity->find('list');
		$this->set(compact('users', 'activities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Project->delete()) {
			$this->Session->setFlash(__('The project has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The project could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
