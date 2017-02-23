<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Use database config
 *
 * @var string
 * 
 * 
 */
	public $useDbConfig = 'Registro';
        
        
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_user';
        
     

}
