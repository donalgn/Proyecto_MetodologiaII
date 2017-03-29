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
		'user_project_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'enable_user_project' => array('type' => 'string', 'null' => true, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('user_project_id', 'project_id', 'user_id'), 'unique' => 1),
			'fk_project_has_user_user_idx' => array('column' => 'user_id', 'unique' => 0),
			'fk_project_has_user_project_idx' => array('column' => 'project_id', 'unique' => 0)
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
			'user_project_id' => 1,
			'project_id' => 1,
			'user_id' => 1,
			'enable_user_project' => 'Lorem ipsum dolor sit ame'
		),
	);

}
