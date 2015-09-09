<?php

namespace Slider\Controller;

use Slider\Controller\AppController;

use Cake\Controller\Controller;

class SliderController extends AppController
{


    public $components = [
        'Crud.Crud' => [
            'actions' => [
                'index' => ['className' => 'Crud.Index', 'view' => 'index'],
                'edit' => ['className' => 'Crud.Edit', 'view' => 'edit'],
                'add' => ['className' => 'Crud.Add', 'view' => 'edit']
            ]
        ]
    ];

}