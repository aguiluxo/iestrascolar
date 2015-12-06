<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CursoProfesorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CursoProfesorTable Test Case
 */
class CursoProfesorTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.curso_profesor',
        'app.curso',
        'app.actividad',
        'app.destacado',
        'app.actividad_curso',
        'app.profesor',
        'app.departamento',
        'app.users',
        'app.actividad_profesor'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CursoProfesor') ? [] : ['className' => 'App\Model\Table\CursoProfesorTable'];
        $this->CursoProfesor = TableRegistry::get('CursoProfesor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CursoProfesor);

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
