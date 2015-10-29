<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CursoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CursoTable Test Case
 */
class CursoTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.curso',
        'app.actividad',
        'app.destacado',
        'app.profesor',
        'app.actividad_profesor',
        'app.actividad_curso'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Curso') ? [] : ['className' => 'App\Model\Table\CursoTable'];
        $this->Curso = TableRegistry::get('Curso', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Curso);

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
