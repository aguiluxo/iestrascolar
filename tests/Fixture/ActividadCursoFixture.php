<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActividadCursoFixture
 *
 */
class ActividadCursoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'actividad_curso';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'actividad_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'curso_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'participacion' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'actividad_id' => ['type' => 'index', 'columns' => ['actividad_id'], 'length' => []],
            'curso_id' => ['type' => 'index', 'columns' => ['curso_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'actividad_curso_ibfk_1' => ['type' => 'foreign', 'columns' => ['actividad_id'], 'references' => ['actividad', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'actividad_curso_ibfk_2' => ['type' => 'foreign', 'columns' => ['curso_id'], 'references' => ['curso', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'actividad_id' => 1,
            'curso_id' => 1,
            'participacion' => 1
        ],
    ];
}
