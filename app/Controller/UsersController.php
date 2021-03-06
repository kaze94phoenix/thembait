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
            $this->Paginator->settings = array(
                    'conditions'=>array(
                        'User.occupation_id'=>'4'
                    )
                );
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
        public function login()
{
	$this->layout = 'login';
	if($this->request->is('post')) {
		if($this->Auth->login()) {
			return $this->redirect($this->Auth->loginRedirect);
		}
		$this->Session->setFlash('Invalid login data!');
	}
}

public function logout()
{
	$this->Auth->logout();
	
	return $this->redirect($this->Auth->logoutRedirect);
}
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}
public function signup(){
    $this->layout='login';
    if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		
		$this->set(compact('usertypes', 'occupations'));
}

public function indexMembros(){
    $this->Paginator->settings = array(
                    'conditions'=>array(
                        'NOT'=>array(
                            'User.occupation_id'=>'4'
                        )
                    )
                );
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$usertypes = $this->User->Usertype->find('list', array(
                    'fields'=>'Usertype.designation'
                ));
		$occupations = $this->User->Occupation->find('list',array(
                    'fields'=>array(
                        'Occupation.designation'
                    ),
                    'conditions'=>array(
                        'NOT'=>array(
                            'Occupation.id'=>'4'
                        )
                    )
                ));
		$this->set(compact('usertypes', 'occupations'));
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
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$usertypes = $this->User->Usertype->find('list');
		$occupations = $this->User->Occupation->find('list');
		$this->set(compact('usertypes', 'occupations'));
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
			$this->Session->setFlash(__('The user has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
