<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Actividad Controller
 *
 * @property \App\Model\Table\ActividadTable $Actividad
 */
class ActividadController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $this->layout = "default_admin";
        parent::beforeFilter($event);
    }

    public $components = [
        'Crud.Crud' => [
            'actions' => [
                'index' => ['className' => 'Crud.Index', 'view' => 'index'],
                'edit' => ['className' => 'Crud.Edit', 'view' => 'edit'],
                'add' => ['className' => 'Crud.Add', 'view' => 'edit'],
            ],
        ],
    ];

    // public function add()
    // {
    //     debug($this->request->data);die();
    // }
}
