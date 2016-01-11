<?php
namespace App\Model\Table;

use App\Model\Entity\Actividad;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

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
        $this->displayField('titulo');
        $this->primaryKey('id');

        $this->addBehavior('Search.Search');
        $this->addBehavior('Timestamp');
        $this->addBehavior('Proffer.Proffer', [
            'imagen' => [// The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'imagen_dir', // The name of the field to store the folder
                'thumbnailSizes' => [// Declare your thumbnails
                    'carousel' => [// Define the prefix of your thumbnail
                        'w' => 219, // Width
                        'h' => 134, // Height
                        'crop' => false, // Crop will crop the image as well as resize it
                        'jpeg_quality' => 100,
                        'png_compression_level' => 9,
                    ],

                    'galeria' => [
                        'w' => '180',
                        'h' => '90',
                        'crop' => false,
                    ],
                ],
                'thumbnailMethod' => 'Gmagick', // Options are Imagick, Gd or Gmagick
            ],
        ]);

        $this->hasOne('Destacado', [
            'dependent' => true,
            'foreignKey' => 'actividad_id',
            'dependent' => true,
        ]);

        $this->hasOne('Evaluacion', [
            'dependent' => true,
            'foreignKey' => 'actividad_id',
            'dependent' => true,
        ]);

        $this->belongsTo('Departamento');

        $this->belongsToMany('Curso', [
            'foreignKey' => 'actividad_id',
            'targetForeignKey' => 'curso_id',
            'joinTable' => 'actividad_curso',
        ]);
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
        $validator->add('titulo', 'unique', [
            'rule' => 'validateUnique',
            'provider' => 'table',
            'message' => 'Ya existe una actividad con el mismo nombre ne nuestra base de datos',
        ]);
        $validator
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->allowEmpty('descripcion');

        // $validator
        //     ->add('fecha_ini', 'valid', ['rule' => 'datetime'])
        //     ->allowEmpty('fecha_ini');

        $validator
        // ->add('fecha_fin', 'valid', ['rule' => 'datetime'])
        ->allowEmpty('fecha_fin');

        $validator
            ->add('financiacion', 'valid', ['rule' => 'boolean'])
            ->requirePresence('financiacion', 'create');

        $validator
            ->allowEmpty('attachment');

        $validator
            ->allowEmpty('attachment_dir');

        $validator
            ->allowEmpty('imagen_dir');

        $validator
            ->allowEmpty('imagen');

        return $validator;
    }

    public function searchConfiguration()
    {
        $search = new Manager($this);
        $search
            ->like('q', [
                'before' => true,
                'after' => true,
                'field' => [$this->aliasField('titulo'), $this->aliasField('descripcion')],
            ])
            ->compare('fecha_de', [
                'field' => $this->aliasField('fecha_ini'),
                'filterEmpty' => true,
            ])
            ->compare('fecha_a', [
                'operator' => '<=',
                'field' => $this->aliasField('fecha_ini'),
                'filterEmpty' => true,
            ])
            ->value('trimestre', [
                'field' => $this->aliasField('trimestre'),
                'filterEmpty' => true,
            ])
            ->value('departamentos', [
                'field' => $this->aliasField('departamento_id'),
                'filterEmpty' => true,
            ])
            ->callback('cursos', [
                'callback' => function (Query $query, array $args) {
                    return $query
                    ->distinct($this->aliasField('id'))
                    ->matching('Curso', function (Query $query) use ($args) {
                        return $query
                        ->where([
                            $this->Curso->target()->aliasField('id') . ' IN' => $args['cursos'],
                        ]);
                    });
                },
            ]);

        return $search;
    }

    public function esPropietario($actividadId, $userId)
    {
        return $this->exists(['id' => $actividadId, 'user_id' => $userId]);
    }
}
