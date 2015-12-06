<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CursoProfesorFixture
 *
 */
class CursoProfesorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'curso_profesor';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'curso_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'profesor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'curso_id' => ['type' => 'index', 'columns' => ['curso_id'], 'length' => []],
            'profesor_id' => ['type' => 'index', 'columns' => ['profesor_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'curso_profesor_ibfk_1' => ['type' => 'foreign', 'columns' => ['curso_id'], 'references' => ['curso', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'curso_profesor_ibfk_2' => ['type' => 'foreign', 'columns' => ['profesor_id'], 'references' => ['profesor', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'curso_id' => 1,
            'profesor_id' => 1
        ],
    ];
}
