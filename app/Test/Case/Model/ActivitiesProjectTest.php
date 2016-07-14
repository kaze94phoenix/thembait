<?php
App::uses('ActivitiesProject', 'Model');

/**
 * ActivitiesProject Test Case
 *
 */
class ActivitiesProjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activities_project',
		'app.project',
		'app.user',
		'app.usertype',
		'app.occupation',
		'app.occupations_user',
		'app.answer',
		'app.complaint',
		'app.activity',
		'app.stage'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActivitiesProject = ClassRegistry::init('ActivitiesProject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActivitiesProject);

		parent::tearDown();
	}

}
