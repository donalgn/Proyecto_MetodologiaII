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
		'idProyectos' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Nombre_Proyecto' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Horas_Extras' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Activacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Fecha_Inicio' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'Fecha_Final' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'Tiempo_Total' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'Tiempo_Trabajado' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idProyectos', 'unique' => 1)
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
			'idProyectos' => 1,
			'Nombre_Proyecto' => 'Lorem ipsum dolor sit amet',
			'Horas_Extras' => 'Lorem ipsum dolor sit ame',
			'Activacion' => 'Lorem ipsum dolor sit ame',
			'Fecha_Inicio' => '2017-02-22 21:07:37',
			'Fecha_Final' => '2017-02-22 21:07:37',
			'Tiempo_Total' => 1,
			'Tiempo_Trabajado' => 1
		),
	);

}
