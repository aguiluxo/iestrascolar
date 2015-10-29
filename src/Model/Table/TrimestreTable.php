<?php
namespace App\Model\Table;

use App\Model\Entity\Trimestre;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trimestre Model
 *
 */
class TrimestreTable extends Table
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

        $this->table('trimestre');
        $this->displayField('id');
        $this->primaryKey('id');

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
            ->add('trimestre', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('trimestre');

        $validator
            ->add('fecha_inicio', 'valid', ['rule' => 'date'])
            ->allowEmpty('fecha_inicio');

        $validator
            ->add('fecha_fin', 'valid', ['rule' => 'date'])
            ->allowEmpty('fecha_fin');

        return $validator;
    }
}
