<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evaluacion Entity.
 *
 * @property int $id_actividad
 * @property int $participacion
 * @property string $objetivos
 * @property int $valoracion
 * @property bool $repetir
 * @property string $mejoras
 * @property string $incidencias
 * @property int $id
 */
class Evaluacion extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
