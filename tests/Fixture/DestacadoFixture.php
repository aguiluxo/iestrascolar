<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DestacadoFixture
 *
 */
class DestacadoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'destacado';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'actividad_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'icono' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => 'fa fa-laptop', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'destacado_actividad_pk' => ['type' => 'index', 'columns' => ['actividad_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'destacado_actividad_pk' => ['type' => 'foreign', 'columns' => ['actividad_id'], 'references' => ['actividad', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'icono' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
