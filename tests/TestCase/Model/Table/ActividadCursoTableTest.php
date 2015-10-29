<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActividadCursoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActividadCursoTable Test Case
 */
class ActividadCursoTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actividad_curso',
        'app.actividad',
        'app.destacado',
        'app.profesor',
        'app.actividad_profesor',
        'app.curso'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ActividadCurso') ? [] : ['className' => 'App\Model\Table\ActividadCursoTable'];
        $this->ActividadCurso = TableRegistry::get('ActividadCurso', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ActividadCurso);

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
