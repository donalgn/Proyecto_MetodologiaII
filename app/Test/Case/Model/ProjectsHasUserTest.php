<?php
App::uses('ProjectsHasUser', 'Model');

/**
 * ProjectsHasUser Test Case
 */
class ProjectsHasUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.projects_has_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectsHasUser = ClassRegistry::init('ProjectsHasUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectsHasUser);

		parent::tearDown();
	}

}
