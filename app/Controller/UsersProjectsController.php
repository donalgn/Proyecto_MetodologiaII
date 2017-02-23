<?php
App::uses('AppController', 'Controller');
/**
 * UsersProjects Controller
 *
 * @property UsersProject $UsersProject
 * @property PaginatorComponent $Paginator
 */
class UsersProjectsController extends AppController {

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
		$this->UsersProject->recursive = 0;
		$this->set('usersProjects', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsersProject->exists($id)) {
			throw new NotFoundException(__('Invalid users project'));
		}
		$options = array('conditions' => array('UsersProject.' . $this->UsersProject->primaryKey => $id));
		$this->set('usersProject', $this->UsersProject->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsersProject->create();
			if ($this->UsersProject->save($this->request->data)) {
				$this->Flash->success(__('The users project has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The users project could not be saved. Please, try again.'));
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
		if (!$this->UsersProject->exists($id)) {
			throw new NotFoundException(__('Invalid users project'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsersProject->save($this->request->data)) {
				$this->Flash->success(__('The users project has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The users project could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UsersProject.' . $this->UsersProject->primaryKey => $id));
			$this->request->data = $this->UsersProject->find('first', $options);
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
		$this->UsersProject->id = $id;
		if (!$this->UsersProject->exists()) {
			throw new NotFoundException(__('Invalid users project'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UsersProject->delete()) {
			$this->Flash->success(__('The users project has been deleted.'));
		} else {
			$this->Flash->error(__('The users project could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
