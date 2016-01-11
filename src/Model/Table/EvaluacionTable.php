<?php
namespace App\Model\Table;

use App\Model\Entity\Evaluacion;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Evaluacion Model
 *
 */
class EvaluacionTable extends Table
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

        $this->table('evaluacion');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Actividad');

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
            ->add('participacion', 'valid', ['rule' => 'numeric'])
            ->requirePresence('participacion', 'create')
            ->notEmpty('participacion');

        $validator
            ->allowEmpty('objetivos');

        $validator
            ->add('valoracion', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('valoracion');

        $validator
            ->add('repetir', 'valid', ['rule' => 'boolean'])
            ->requirePresence('repetir', 'create')
            ->notEmpty('repetir');

        $validator
            ->allowEmpty('mejoras');

        $validator
            ->allowEmpty('incidencias');

        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        return $validator;
    }
}
