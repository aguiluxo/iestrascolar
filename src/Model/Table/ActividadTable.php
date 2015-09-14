<?php
namespace App\Model\Table;

use App\Model\Entity\Actividad;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actividad Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Profesor
 */
class ActividadTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('actividad');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Profesor', [
            'foreignKey' => 'actividad_id',
            'targetForeignKey' => 'profesor_id',
            'joinTable' => 'actividad_profesor',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->allowEmpty('descripcion');

        $validator
            ->add('fecha_ini', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('fecha_ini');

        $validator
            ->add('fecha_fin', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('fecha_fin');

        $validator
            ->add('financiacion', 'valid', ['rule' => 'boolean'])
            ->requirePresence('financiacion', 'create');

        $validator
            ->allowEmpty('attachment');

        $validator
            ->allowEmpty('attachment_dir');

        return $validator;
    }
}
