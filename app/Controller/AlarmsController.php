<?php
App::uses('AppController', 'Controller');
/**
 * Alarms Controller
 *
 * @property Alarm $Alarm
 * @property PaginatorComponent $Paginator
 */
class AlarmsController extends AppController {

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
		$this->Alarm->recursive = 0;
		$this->set('alarms', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Alarm->exists($id)) {
			throw new NotFoundException(__('Invalid alarm'));
		}
		$options = array('conditions' => array('Alarm.' . $this->Alarm->primaryKey => $id));
		$this->set('alarm', $this->Alarm->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Alarm->create();
			if ($this->Alarm->save($this->request->data)) {
				$this->Flash->success(__('The alarm has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The alarm could not be saved. Please, try again.'));
			}
		}
		$projects = $this->Alarm->Project->find('list',array('fields' => array('project_id', 'proyecto')));
		$this->set(compact('projects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Alarm->exists($id)) {
			throw new NotFoundException(__('Invalid alarm'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Alarm->save($this->request->data)) {
				$this->Flash->success(__('The alarm has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The alarm could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Alarm.' . $this->Alarm->primaryKey => $id));
			$this->request->data = $this->Alarm->find('first', $options);
		}
		$projects = $this->Alarm->Project->find('list',array('fields' => array('project_id', 'proyecto')));
		$this->set(compact('projects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Alarm->id = $id;
		if (!$this->Alarm->exists()) {
			throw new NotFoundException(__('Invalid alarm'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Alarm->delete()) {
			$this->Flash->success(__('The alarm has been deleted.'));
		} else {
			$this->Flash->error(__('The alarm could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        
}
