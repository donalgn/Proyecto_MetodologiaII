<?php
/**
 * JobsLog Fixture
 */
class JobsLogFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idBitacora' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'date_work' => array('type' => 'date', 'null' => false, 'default' => null),
		'observations' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'total_hours' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_project_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idBitacora', 'category_id', 'project_id', 'user_id'), 'unique' => 1),
			'fk_jobs_logs_categories1_idx' => array('column' => 'category_id', 'unique' => 0),
			'fk_jobs_logs_users_projects1_idx' => array('column' => array('user_project_id', 'project_id', 'user_id'), 'unique' => 0)
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
			'idBitacora' => 1,
			'date' => '2017-03-28 21:35:14',
			'date_work' => '2017-03-28',
			'observations' => 'Lorem ipsum dolor sit amet',
			'total_hours' => 1,
			'category_id' => 1,
			'user_project_id' => 1,
			'project_id' => 1,
			'user_id' => 1
		),
	);

}
