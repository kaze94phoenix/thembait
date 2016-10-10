<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = array(
		'Auth',
		'Session','Acl','RequestHandler'
		);

	public $helpers = array(
		'Session',
		'Form',
                'Html',
                'Js'
		);

public function beforeFilter(){
		//$this->layout = 'bootstrap';
		$this->layout = 'thembas';
                $this->Auth->authenticate = array(
			AuthComponent::ALL =>array(
				'UserModel'=>'User',
				'fields'=>array(
					'username'=>'username',
					'password'=>'password'
					)
				),
			'Form',
			);

		$this->Auth->authorize = "Controller";

		$this->Auth->loginAction = array(
			'plugin'=>null,
			'controller'=>'users',
			'action'=>'login'
			);

		$this->Auth->logoutRedirect = array(
			'plugin'=>null,
			'controller'=>'users',
			'action'=>'login'
			);

		$this->Auth->loginRedirect = array(
			'plugin'=>null,
			'controller'=>'projects',
			'action'=>'index'
			);

		$this->Auth->error=__('Erro , nao estas permitido a aceder este recurso');

		$this->Auth->allowedActions = array('login','display','add','signup');
	}
        public function isAuthorized($user=null)
	{
//// verifica o recurso solicitado
//    $aco = 'controllers/'.$this->params['controller'];
//
//    //Informando qual é meu grupo
//    $aro = $this->Auth->user('role_id');
//        
//    //Retornando a validação do privilégio solicitante - recurso/privilegio
//    return $this->Acl->check($aro, $aco, $this->params['action']);
     return true;
	}    

}
