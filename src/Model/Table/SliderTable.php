<?php
namespace App\Model\Table;

use App\Model\Entity\Slider;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Slider Model
 *
 */
class SliderTable extends Table
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

        $this->table('slider');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Proffer.Proffer', [
            'imagen' => [    // The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'imagen_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'miniatura' => [   // Define the prefix of your thumbnail
                        'w' => 126, // Width
                        'h' => 47, // Height
                        'crop' => false,  // Crop will crop the image as well as resize it
                    ],
                    'slider' => [     // Define a second thumbnail
                        'w' => '960',
                        'h' => '390',
                        'crop' => false,
                    ],
                    'normal' => [
                        'w' => '960',
                        'h' => '200',
                    ]
                ],
                'thumbnailMethod' => 'Gmagick'  // Options are Imagick, Gd or Gmagick
            ]
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
            ->add('orden', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('orden');

        $validator
            ->requirePresence('imagen', 'create')
            ->allowEmpty('imagen', 'update');

        $validator
            ->allowEmpty('imagen_dir');

        $validator
            ->allowEmpty('texto_fecha');

        $validator
            ->allowEmpty('texto_tipo');

        $validator
            ->allowEmpty('texto_info');

        $validator
            ->allowEmpty('texto_clave');

        return $validator;
    }
}
