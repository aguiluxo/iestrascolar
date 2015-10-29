<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActividadProfesorFixture
 *
 */
class ActividadProfesorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'actividad_profesor';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'actividad_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'profesor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'actividad_id' => ['type' => 'index', 'columns' => ['actividad_id'], 'length' => []],
            'profesor_id' => ['type' => 'index', 'columns' => ['profesor_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'actividad_profesor_ibfk_2' => ['type' => 'foreign', 'columns' => ['profesor_id'], 'references' => ['profesor', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'actividad_profesor_ibfk_1' => ['type' => 'foreign', 'columns' => ['actividad_id'], 'references' => ['actividad', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
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
            'profesor_id' => 1,
            'created' => '2015-10-29 18:57:54',
            'modified' => '2015-10-29 18:57:54'
        ],
    ];
}
