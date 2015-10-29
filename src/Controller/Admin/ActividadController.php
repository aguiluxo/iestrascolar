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
    public $uses = ["Actividad", 'Destacado',];
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

    public function isAuthorized($user = null)
    {
        // Todos los usuarios registrados pueden añadir actividades
        if ($this->request->action === "add") {
            return true;
        }

        //Propietario de actividad puede editarla y borrarla
        if (in_array($this->request->action, ['edit', 'delete'])) {
            $actividadId = (int)$this->request->params['pass'][0];
            if ($this->Actividad->esPropietario($actividadId, $user['id'])) {
                return true;
            }
        }
        return false;
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

        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->request->data['user_id'] = $this->Auth->user('id');


             $trimestres = $this->_getFechasTrimestres();
             $trimestre = $this->_getTrimestre($trimestres, $this->request->data);
            $this->request->data['trimestre'] = $trimestre;
        }

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

    private function _guardaDestacado($idActividad, $icono)
     {

        $destacadoTable = TableRegistry::get('Destacado');
        $destacado = $destacadoTable->newEntity();
        $destacado->actividad_id = $idActividad;
        $destacado->icono = $icono;
        $destacadoTable->save($destacado);
    }

    private function _getFechasTrimestres($fecha = null)
    {
        $this->loadModel('Trimestre');
        $trimestres = $this->Trimestre->find('all', [
            'field' => ['fecha_inicio']
        ]);
        return $trimestres;

    }

    private function _getTrimestre($fechasTrimestres,$fecha)
    {
        $primerTrimestre = $fechasTrimestres->first()->fecha_inicio;
        $segundoTrimestre = $fechasTrimestres->next()->fecha_inicio;
        $tercerTrimestre = $fechasTrimestres->last()->fecha_inicio;
        debug($segundoTrimestre);die();
            debug($fechasTrimestres->first());die();
           if ($fecha >= $fechasTrimestres->first()->fecha_inicio && $fecha < $fechasTrimestres[1]->fecha_inicio) {
               return 1;
           }
           if ($fecha >= $fechasTrimestres[1]->fecha_inicio && $fecha < $fechasTrimestres[2]->fecha_inicio){
            return 2;
           }
           if ($fecha >= $fechasTrimestres[2]->fecha_inicio){
            return 3;
        }
        return null;
    }
}
