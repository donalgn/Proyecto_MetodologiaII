<?php
/**
 * UsersProject Fixture
 */
class UsersProjectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'users_id_user' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'projects_idProyectos' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'enable' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => array('users_id_user', 'projects_idProyectos'), 'unique' => 1),
			'fk_users_projects_users1_idx' => array('column' => 'users_id_user', 'unique' => 0),
			'fk_users_projects_projects1_idx' => array('column' => 'projects_idProyectos', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'users_id_user' => 'Lorem ipsum dolor ',
			'projects_idProyectos' => 1,
			'enable' => 1
		),
	);

}
