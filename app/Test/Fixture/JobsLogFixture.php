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
		'Observacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Fecha' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'Hora_Inicio' => array('type' => 'time', 'null' => false, 'default' => null, 'length' => 6),
		'Hora_Final' => array('type' => 'time', 'null' => false, 'default' => null, 'length' => 6),
		'users_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'projects_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'categories_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idBitacora', 'users_id', 'projects_id', 'categories_id'), 'unique' => 1),
			'fk_jobs_logs_users_projects1_idx' => array('column' => array('users_id', 'projects_id'), 'unique' => 0),
			'fk_jobs_logs_categories1_idx' => array('column' => 'categories_id', 'unique' => 0)
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
			'Observacion' => 'Lorem ipsum dolor sit amet',
			'Fecha' => '2017-02-22 21:06:45',
			'Hora_Inicio' => '21:06:45',
			'Hora_Final' => '21:06:45',
			'users_id' => 'Lorem ipsum dolor ',
			'projects_id' => 1,
			'categories_id' => 1
		),
	);

}
