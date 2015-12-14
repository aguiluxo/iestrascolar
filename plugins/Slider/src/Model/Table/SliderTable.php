<?php

namespace Slider\Model\Table;

use Cake\ORM\Table;

class SliderTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('slider');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Proffer.Proffer', [
            'imagen' => [    // The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'imagen_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'miniatura' => [   // Define the prefix of your thumbnail
                        'w' => 126, // Width
                        'h' => 47, // Height
                        'crop' => true,  // Crop will crop the image as well as resize it
                        'jpeg_quality'  => 100,
                        'png_compression_level' => 9
                    ],
                    'slider' => [     // Define a second thumbnail
                        'w' => '960',
                        'h' => '390',
                        'crop' => true,
                    ],
                    'normal' => [
                        'w' => '960',
                        'h' => '200',
                        'crop' => true,
                    ]
                ],
                'thumbnailMethod' => 'Gmagick'  // Options are Imagick, Gd or Gmagick
            ]
        ]);
    }

       public function validationDefault(Validator $validator)
    {

        $validator
            ->requirePresence('imagen', 'create')
            ->allowEmpty('imagen','update');

        return $validator;
    }



}