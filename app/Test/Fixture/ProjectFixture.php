<?php
/**
 * Project Fixture
 */
class ProjectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'project_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'extra_hours' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'active' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'start_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'finish_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'total_time' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'time_worked' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'percentaje' => array('type' => 'string', 'null' => true, 'default' => '0%', 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'profile_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('project_id', 'user_id', 'profile_id'), 'unique' => 1),
			'fk_projects_users1_idx' => array('column' => array('user_id', 'profile_id'), 'unique' => 0)
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
			'project_id' => 1,
			'project_name' => 'Lorem ipsum dolor sit amet',
			'extra_hours' => 'Lorem ipsum dolor sit ame',
			'active' => 'Lorem ipsum dolor sit ame',
			'start_date' => '2017-04-11',
			'finish_date' => '2017-04-11',
			'total_time' => 1,
			'time_worked' => 1,
			'percentaje' => 'Lo',
			'user_id' => 1,
			'profile_id' => 1
		),
	);

}
