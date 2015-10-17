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
    public $uses = "Actividad";
    public $helpers = ['Munruiz'];

    public $components = [
        'Crud.Crud' => [
            'actions' => [
                'index' => ['className' => 'Crud.Index', 'view' => 'index'],
                'edit' => ['className' => 'Crud.Edit', 'view' => 'edit'],
                'add' => ['className' => 'Crud.Add', 'view' => 'edit'],
                'Crud.Delete',
                'Search.Prg',
            ],
        ],
    ];

    public function beforeFilter(Event $event)
    {
        $this->layout = "default_admin";
        parent::beforeFilter($event);
    }

    public function index()
    {
        if ($this->request->data){
        $query = $this->Actividad
                      ->find('search', $this->Actividad->filterParams($this->request->data));
        $this->set('actividad', $this->paginate($query));

        }else{
            return $this->Crud->execute();
        }

    }

    // public function add()
    // {
    //     if ($this->request->is('post')) {
    //        debug($this->request->data);die();
    //     }
    //     return $this->Crud->execute();
    // }
}
