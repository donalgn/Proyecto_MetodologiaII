<?php
App::uses('AppController', 'Controller');
/**
 * JobsLogs Controller
 *
 * @property JobsLog $JobsLog
 * @property PaginatorComponent $Paginator
 */
class JobsLogsController extends AppController {

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
		$this->JobsLog->recursive = 0;
		$this->set('jobsLogs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JobsLog->exists($id)) {
			throw new NotFoundException(__('Invalid jobs log'));
		}
		$options = array('conditions' => array('JobsLog.' . $this->JobsLog->primaryKey => $id));
		$this->set('jobsLog', $this->JobsLog->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobsLog->create();
			if ($this->JobsLog->save($this->request->data)) {
				$this->Flash->success(__('The jobs log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The jobs log could not be saved. Please, try again.'));
			}
		}
		$categories = $this->JobsLog->Category->find('list',array('fields' => array('category_id', 'categoria'),
                    'conditions'=>array('Category.enable_category like'=>'%Y%')));
                
		$this->set(compact('categories'));
               
                $this->loadModel('UsersProject');
                $this->set('proyectos', $this->UsersProject->find('list',array('fields'=>array('user_project_id'))));
               $this->set('usuario', $this->Auth->user('username'));
               
               
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->JobsLog->exists($id)) {
			throw new NotFoundException(__('Invalid jobs log'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->JobsLog->save($this->request->data)) {
				$this->Flash->success(__('The jobs log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The jobs log could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobsLog.' . $this->JobsLog->primaryKey => $id));
			$this->request->data = $this->JobsLog->find('first', $options);
		}
		$categories = $this->JobsLog->Category->find('list',array('fields' => array('category_id', 'categoria'),
                    'conditions'=>array('Category.enable_category like'=>'%Y%')));
		$this->set(compact('categories'));
               
                $this->loadModel('Project');
                $this->set('proyectos', $this->Project->find('list',array('fields'=>array('project_name'),
                     'conditions'=>array('Project.active like'=>'%Y%'))));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->JobsLog->id = $id;
		if (!$this->JobsLog->exists()) {
			throw new NotFoundException(__('Invalid jobs log'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->JobsLog->delete()) {
			$this->Flash->success(__('The jobs log has been deleted.'));
		} else {
			$this->Flash->error(__('The jobs log could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
