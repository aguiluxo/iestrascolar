<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;


/**
 * Profesor Entity.
 *
 * @property int $id
 * @property int $departamento_id
 * @property \App\Model\Entity\Departamento $departamento
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $nombre
 * @property string $email
 * @property int $telefono
 * @property string $imagen_dir
 * @property string $imagen
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Actividad[] $actividad
 */
class Profesor extends Entity
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
        protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
