<?php
/**
 * ProjectsHasUser Fixture
 */
class ProjectsHasUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'projects_id_project' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'users_id_user' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'enable_user_project' => array('type' => 'string', 'null' => true, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('projects_id_project', 'users_id_user'), 'unique' => 1),
			'fk_project_has_user_user_idx' => array('column' => 'users_id_user', 'unique' => 0),
			'fk_project_has_user_project_idx' => array('column' => 'projects_id_project', 'unique' => 0)
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
			'projects_id_project' => 1,
			'users_id_user' => 1,
			'enable_user_project' => 'Lorem ipsum dolor sit ame'
		),
	);

}
