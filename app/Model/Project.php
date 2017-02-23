<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 */
class Project extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'Registro';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idProyectos';

}
