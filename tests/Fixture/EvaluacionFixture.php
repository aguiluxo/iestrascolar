<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EvaluacionFixture
 *
 */
class EvaluacionFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'evaluacion';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_actividad' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'participacion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'objetivos' => ['type' => 'string', 'length' => 250, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'valoracion' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'repetir' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'mejoras' => ['type' => 'string', 'length' => 250, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'incidencias' => ['type' => 'string', 'length' => 250, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'id' => ['type' => 'integer', 'length' => 100, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        '_indexes' => [
            'id_actividad' => ['type' => 'index', 'columns' => ['id_actividad'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'evaluacion_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_actividad'], 'references' => ['actividad', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_actividad' => 1,
            'participacion' => 1,
            'objetivos' => 'Lorem ipsum dolor sit amet',
            'valoracion' => 1,
            'repetir' => 1,
            'mejoras' => 'Lorem ipsum dolor sit amet',
            'incidencias' => 'Lorem ipsum dolor sit amet',
            'id' => 1
        ],
    ];
}
