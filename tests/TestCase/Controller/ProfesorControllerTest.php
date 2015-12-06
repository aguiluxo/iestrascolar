<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ProfesorController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ProfesorController Test Case
 */
class ProfesorControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.profesor',
        'app.departamento',
        'app.users',
        'app.actividad',
        'app.destacado',
        'app.curso',
        'app.actividad_curso',
        'app.curso_profesor',
        'app.actividad_profesor'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
