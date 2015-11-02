<?php
namespace App\Model\Table;

use App\Model\Entity\ActividadCurso;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActividadCurso Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Actividad
 * @property \Cake\ORM\Association\BelongsTo $Curso
 */
class ActividadCursoTable extends Table
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

        $this->table('actividad_curso');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Actividad', [
            'foreignKey' => 'actividad_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Curso', [
            'foreignKey' => 'curso_id',
            'joinType' => 'INNER'
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
            ->add('participacion', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('participacion');

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
        $rules->add($rules->existsIn(['actividad_id'], 'Actividad'));
        $rules->add($rules->existsIn(['curso_id'], 'Curso'));
        return $rules;
    }

    public function getActividadesPorCurso($idCurso)
    {
        return $this->find()
        ->where([
            'curso_id' => $idCurso
        ])
        ->count();
    }
}
