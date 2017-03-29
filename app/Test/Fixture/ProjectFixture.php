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
		'start_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'finish_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'total_time' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'time_worked' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'project_id', 'unique' => 1)
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
			'start_date' => '2017-03-20 23:37:35',
			'finish_date' => '2017-03-20 23:37:35',
			'total_time' => 1,
			'time_worked' => 1
		),
	);

}
