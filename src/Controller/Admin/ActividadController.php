<?php
namespace App\Controller\Admin;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Actividad Controller
 *
 * @property \App\Model\Table\ActividadTable $Actividad
 */
class ActividadController extends AdminController
{
    public $uses = ["Actividad", 'Destacado'];
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



    public function edit($id) {
       $this->Crud->on('afterSave', function(\Cake\Event\Event $event) {
            if ($event->subject->created) {
            }
            else{
                  if ($this->request->data['destacada'] == '1') {

                    $idActividad = $event->subject->entity->id;

                    $icono = $this->request->data['Destacado']['icono'];

                    $destacados = TableRegistry::get('Destacado');
                    $destacado = $destacados->find('all')->where(['actividad_id' => $idActividad])->first();
                    $destacado->icono = $icono;
                    $destacados->save($destacado);
                }
            }
        });
        return $this->Crud->execute();
    }

    public function add()
    {

        $this->Crud->on('afterSave', function(\Cake\Event\Event $event) {
            if ($event->subject->created) {
                if ($this->request->data['destacada'] == '1') {
                    $idActividad = $event->subject->entity->id;
                    $icono = $this->request->data['Destacado']['icono'];
                    $this->_guardaDestacado($idActividad, $icono);
                }
            }
        });
        return $this->Crud->execute();
    }

    private function _guardaDestacado($idActividad, $icono) {

        $destacadoTable = TableRegistry::get('Destacado');
        $destacado = $destacadoTable->newEntity();
        $destacado->actividad_id = $idActividad;
        $destacado->icono = $icono;
        $destacadoTable->save($destacado);
    }
}
