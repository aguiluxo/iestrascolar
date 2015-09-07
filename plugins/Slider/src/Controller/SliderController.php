<?php

namespace Slider\Controller;

use Slider\Controller\AppController;

use Cake\Controller\Controller;

class SliderController extends AppController
{


    public $components = [
        'Crud.Crud' => [
            'actions' => ['Crud.Index', 'Crud.Edit','add' => ['className' => 'Crud.Addd', 'view' => 'edit']]
        ]
    ];


}