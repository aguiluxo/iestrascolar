<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActividadProfesorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActividadProfesorTable Test Case
 */
class ActividadProfesorTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actividad_profesor',
        'app.actividad',
        'app.destacado',
        'app.users',
        'app.curso',
        'app.actividad_curso',
        'app.profesor',
        'app.departmento'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ActividadProfesor') ? [] : ['className' => 'App\Model\Table\ActividadProfesorTable'];
        $this->ActividadProfesor = TableRegistry::get('ActividadProfesor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ActividadProfesor);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
