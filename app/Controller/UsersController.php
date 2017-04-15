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

      public $paginate = array(
           'limit' => 20,
        'order' => array(
            'Post.title' => 'asc'
        )
    );
        
        public function beforeFilter() {
            parent::beforeFilter();
          //  $this->Auth->userScope = array('User.enable_user' == 'Y');
            $this->Auth->allow('login');
          }
          
          public function login(){
              if($this->request->is('post')){
                    if($this->Auth->login()){
                     if ($this->Auth->user('enable_user') == 'Y')
                      return $this->redirect($this->Auth->redirectUrl('Home'));
                  }
                  $this->Session->setFlash('Usuario y/o constraseña son incorrectos','default',array('class' => 'alert alert-danger'));
                          
              }
             
          }

        public function logout(){
            return $this->redirect($this->Auth->logout());
}
        
/**
 * index method
 *
 * @return void
 */
	public function index() {
            
		$this->User->recursive = 0;
                 $this->Paginator->settings = $this->paginate;
		$this->set('users', $this->Paginator->paginate());
	}

        
        public function home() {

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
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$profiles = $this->User->Profile->find('list',array('fields' => array('profile_id', 'perfil'), 
                    'conditions'=>array('Profile.enable_profile like'=>'%Y%'),));
		$this->set(compact('profiles'));
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
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$profiles = $this->User->Profile->find('list',array('fields' => array('profile_id', 'perfil')));
		$this->set(compact('profiles'));
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
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
         
}
