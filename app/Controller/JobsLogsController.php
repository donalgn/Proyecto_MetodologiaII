<?php
App::uses('AppController', 'Controller');
/**
 * JobsLogs Controller
 *
 * @property JobsLog $JobsLog
 * @property PaginatorComponent $Paginator
 */
class JobsLogsController extends AppController {


    
	public $components = array('Paginator');
        
     
        
       public $paginate = array(
                        'limit' => 20,
               'order' => array(
            'Post.title' => 'asc'
        )
    );

/**
 * index method
 *
 * @return void
 * 
 * 
 */
	public function index() {
                $this->JobsLog->query("call proyectos");
                 $this->JobsLog->query("call Porcentaje");
                  $this->JobsLog->query("call Review");
                 $this->mail();
                $this->JobsLog->recursive = 0;
                
                          
        $this->Paginator->settings = $this->paginate;
	$this->set('jobsLogs', $this->Paginator->paginate(array('username' => $this->Auth->user('username'))));
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
           $usuario_id =  $this->Auth->user('user_id');
		if ($this->request->is('post')) {
			$this->JobsLog->create();
			if ($this->JobsLog->save($this->request->data)) {
				$this->Flash->success(__('The jobs log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The jobs log could not be saved. Please, try again.'));
			}
		}
                
                  $this->set('usuario_id', $this->Auth->user('user_id'));
		$projects = $this->JobsLog->Project->find('list', array(
                'recursive' => -1,
                'fields' => array('project_name'),
                'joins' => array(
                     array(
                         'table' => 'Users_Projects',
                         'alias' => 'p',
                         'type' => 'INNER',
                         'foreignKey' => 'projects_id',
                         'conditions'=> array(
                         'Project.project_id = p.project_id',
                     
                        )
                         
            )
        ),
        'conditions'=>array( 'p.user_id'=>$usuario_id
        
                    
        )));
               // $projects = Hash::extract($proyecto, 'Project.{n}.project_name');
                
                             
		$categories = $this->JobsLog->Category->find('list',array('fields' => array('category_id', 'categoria')));
		$this->set(compact('projects', 'categories'));
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
             $usuario_id =  $this->Auth->user('user_id');
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
		 $this->set('usuario_id', $this->Auth->user('user_id'));
		$projects = $this->JobsLog->Project->find('list', array(
                'recursive' => -1,
                'fields' => array('project_name'),
                'joins' => array(
                     array(
                         'table' => 'Users_Projects',
                         'alias' => 'p',
                         'type' => 'INNER',
                         'foreignKey' => 'projects_id',
                         'conditions'=> array(
                         'Project.project_id = p.project_id',
                     
                        )
                         
            )
        ),
        'conditions'=>array( 'p.user_id'=>$usuario_id
        
                    
        )));
               // $projects = Hash::extract($proyecto, 'Project.{n}.project_name');
                
                             
		$categories = $this->JobsLog->Category->find('list',array('fields' => array('category_id', 'categoria')));
		$this->set(compact('projects', 'categories'));
                $this->set('usuario', $this->Auth->user('username'));
                
                
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
                 $this->JobsLog->query("call borrar($id)");
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
     
        public function mail(){
            $this->loadModel('Alarm');
                       
         $p = $this->JobsLog->Project->find('all', array(
                 'joins' => array(
                     array(
                         'table' => 'alarms',
                         'alias' => 'a',
                         'type' => 'INNER',
                         'foreignKey' => 'projects_id',
                         'conditions'=> array(
                         'Project.project_id = a.project_id','a.review = 1','a.send = 0'                        
                           )
                         
            )
        ),
        'conditions'=>array( 'project.percentaje = a.percentage'
        
                    
        ))); 
         
        $this->set('prueba', $p);
        
         $this->loadModel('User');
           
           // $correo = $this->User->find('list',array('fields' => array('mail'),
       //  'conditions'=> array('User.user_id'=>$alarma)));

         $string = '';
         $string1 = '';
        foreach ($p as $value) {
          $string = $value ['User']['mail'];
          $string1 = $value ['Project']['project_name'];    
               
        $Email = new CakeEmail('gmail');
        App::uses('CakeEmail','Netwrok/Email');
        
         $Email ->bcc($string);
         $Email->from('laborregister@gmail.com');
          $Email->send('Su alarma configurada para el proyecto:'.' '.$string1.' '.'ha alcanzado el porcentaje programado.');
           
         
                
        }
            $this->JobsLog->query("call send");
  }
            
            
           
           
            
              
          
            
   
        

            
            
           
        
        
}
