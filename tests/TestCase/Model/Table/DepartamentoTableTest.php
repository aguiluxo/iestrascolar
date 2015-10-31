<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartamentoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartamentoTable Test Case
 */
class DepartamentoTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.departamento',
        'app.profesor',
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
        $config = TableRegistry::exists('Departamento') ? [] : ['className' => 'App\Model\Table\DepartamentoTable'];
        $this->Departamento = TableRegistry::get('Departamento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Departamento);

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
}
