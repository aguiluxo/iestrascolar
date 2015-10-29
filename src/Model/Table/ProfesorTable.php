<?php
namespace App\Model\Table;

use App\Model\Entity\Profesor;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profesor Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Departmento
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsToMany $Actividad
 */
class ProfesorTable extends Table
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

        $this->table('profesor');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Departmento', [
            'foreignKey' => 'departamento_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Actividad', [
            'foreignKey' => 'profesor_id',
            'targetForeignKey' => 'actividad_id',
            'joinTable' => 'actividad_profesor'
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
            ->requirePresence('apellidos', 'create')
            ->notEmpty('apellidos');

        $validator
            ->add('telefono', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('telefono');

        $validator
            ->allowEmpty('imagen_dir');

        $validator
            ->allowEmpty('imagen');

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
        $rules->add($rules->existsIn(['departamento_id'], 'Departmento'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
