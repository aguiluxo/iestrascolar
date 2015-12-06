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
 * @property \Cake\ORM\Association\BelongsTo $Departamento
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
        $this->displayField('nombre');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Proffer.Proffer', [
            'imagen' => [    // The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'imagen_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'miniatura' => [   // Define the prefix of your thumbnail
                        'w' => 50, // Width
                        'h' => 50, // Height
                        'crop' => false,  // Crop will crop the image as well as resize it
                        'jpeg_quality'  => 100,
                        'png_compression_level' => 9
                    ],
                    'estirada' => [     // Define a second thumbnail
                        'w' => '1400',
                        'h' => '370',
                        'crop' => true,
                    ],
                    'normal' => [
                        'w' => '600',
                        'h' => '600',
                        'crop' => false,
                    ]
                ],
                'thumbnailMethod' => 'Gmagick'  // Options are Imagick, Gd or Gmagick
            ]
        ]);

        $this->belongsTo('Departamento', [
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
        $this->belongsToMany('Curso', [
            'foreignKey' => 'profesor_id',
            'targetForeignKey' => 'curso_id',
            'joinTable' => 'curso_profesor'
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
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email', __('Email requerido'))
            ->add('email', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table',
                'message' => __('Este email ya está registrado')
            ]);
        $validator->notEmpty('password', __('Contraseña requerida'));

        $validator->add('role', 'inList', [
                'rule' => ['inList', ['superadmin','admin', 'profesor']],
                'message' =>  __('Por favor, introduce un rol válido')
            ]);

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['departamento_id'], 'Departamento'));
        // $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
