<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CursoFixture
 *
 */
class CursoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'curso';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'letra' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'alumnos' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'nombre' => 'Lorem ipsum dolor sit amet',
            'letra' => 'Lorem ipsum dolor sit ame',
            'alumnos' => 1
        ],
    ];
}
