<?php
App::uses('JobsLog', 'Model');

/**
 * JobsLog Test Case
 */
class JobsLogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jobs_log',
		'app.project',
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JobsLog = ClassRegistry::init('JobsLog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JobsLog);

		parent::tearDown();
	}

}
