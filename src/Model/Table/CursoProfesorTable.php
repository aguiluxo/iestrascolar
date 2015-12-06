<?php
namespace App\Model\Table;

use App\Model\Entity\CursoProfesor;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CursoProfesor Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Curso
 * @property \Cake\ORM\Association\BelongsTo $Profesor
 */
class CursoProfesorTable extends Table
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

        $this->table('curso_profesor');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Curso', [
            'foreignKey' => 'curso_id'
        ]);
        $this->belongsTo('Profesor', [
            'foreignKey' => 'profesor_id'
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['curso_id'], 'Curso'));
        $rules->add($rules->existsIn(['profesor_id'], 'Profesor'));
        return $rules;
    }
}
