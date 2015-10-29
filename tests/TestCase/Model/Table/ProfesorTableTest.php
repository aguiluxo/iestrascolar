<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfesorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfesorTable Test Case
 */
class ProfesorTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.profesor',
        'app.departmento',
        'app.users',
        'app.actividad',
        'app.destacado',
        'app.curso',
        'app.actividad_curso',
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
        $config = TableRegistry::exists('Profesor') ? [] : ['className' => 'App\Model\Table\ProfesorTable'];
        $this->Profesor = TableRegistry::get('Profesor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Profesor);

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
