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
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'date_work' => array('type' => 'date', 'null' => false, 'default' => null),
		'observations' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'total_hours' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idBitacora', 'project_id'), 'unique' => 1),
			'fk_jobs_logs_categories1_idx' => array('column' => 'category_id', 'unique' => 0),
			'fk_jobs_logs_projects1_idx' => array('column' => 'project_id', 'unique' => 0)
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
			'username' => 'Lorem ipsum dolor sit amet',
			'project_id' => 1,
			'category_id' => 1,
			'date' => '2017-04-01 00:12:30',
			'date_work' => '2017-04-01',
			'observations' => 'Lorem ipsum dolor sit amet',
			'total_hours' => 1
		),
	);

}
