<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Slider Entity.
 *
 * @property int $id
 * @property int $orden
 * @property string $imagen
 * @property string $imagen_dir
 * @property string $texto_fecha
 * @property string $texto_tipo
 * @property string $texto_info
 * @property string $texto_clave
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Slider extends Entity
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
