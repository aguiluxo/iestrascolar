<?php
namespace App\Model\Table;

use App\Model\Entity\Curso;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Curso Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Actividad
 */
class CursoTable extends Table
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

        $this->table('curso');
        $this->displayField('nombre');
        $this->primaryKey('id');

        $this->belongsToMany('Actividad', [
            'foreignKey' => 'curso_id',
            'targetForeignKey' => 'actividad_id',
            'joinTable' => 'actividad_curso'
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');


        $validator
            ->add('alumnos', 'valid', ['rule' => 'numeric'])
            ->requirePresence('alumnos', 'create')
            ->notEmpty('alumnos');

        return $validator;
    }

}
