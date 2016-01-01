<?php
namespace App\Controller\Admin;

use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\ORM\TableRegistry;
use mpdf;

/**
 * Actividad Controller
 *
 * @property \App\Model\Table\ActividadTable $Actividad
 */
class ActividadController extends AdminController
{
    public $uses = ["Actividad", 'Destacado', 'Curso'];
    public $helpers = ['Munruiz'];

    public $components = [
        'Crud.Crud' => [
            'actions' => [
                // 'index' => ['className' => 'Crud.Index', 'view' => 'index', 'contain' => 'Curso'],
                'edit' => ['className' => 'Crud.Edit', 'view' => 'edit'],
                'add' => ['className' => 'Crud.Add', 'view' => 'edit'],
                'view' => ['className' => 'Crud.View', 'view' => 'view'],
                'Crud.Delete',
                'Search.Prg',
            ],
        ],
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->set('menuActivo', 'actividad');

        $this->Crud->on('afterSave', function (\Cake\Event\Event $event) {
            if ($event->subject->created) {
                $email = new Email();
                $email->template('default')
                ->emailFormat('html')
                ->to('alvaro89mr@gmail.com')
                ->from('alvaro89mr@gmail.com')
                ->viewVars(['actividad' => $this->request->data])
                ->send();
                $this->_compruebaMaximoActividadesPorCurso($this->request->data['curso']['_ids']);
                if ($this->request->data['destacada'] == '1') {
                    $idActividad = $event->subject->entity->id;
                    $this->_guardaDestacado($idActividad);
                }
            }

        });

    }

    public function isAuthorized($user = null)
    {
        // Todos los usuarios registrados pueden añadir actividades
        if ($this->request->action === "add") {
            return true;
        }

        //Propietario de actividad puede editarla y borrarla
        if (in_array($this->request->action, ['edit', 'delete'])) {
            $actividadId = (int) $this->request->params['pass'][0];
            if ($this->Actividad->esPropietario($actividadId, $user['id'])) {
                return true;
            }
        }
        return false;
    }
    public function index()
    {
        $cursos = $this->Actividad->Curso->find('list', ['limit' => 200]);
        $departamentos = $this->Actividad->Departamento->find('list', ['limit' => 20]);
        if ($this->request->data) {

            $query = $this->Actividad
                          ->find('search', $this->Actividad->filterParams($this->request->data))
                          ->contain('Curso');
            $this->set('actividad', $this->paginate($query));

        } else {
          $actividad = $this->Actividad->find()->contain('Curso');
           $this->set('actividad', $this->paginate($actividad));
        }
        $this->set('cursos', $cursos);
        $this->set('departamentos', $departamentos);

    }

    public function add()
    {

        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->request->data['user_id'] = $this->Auth->user('id');
        }

        $curso = $this->Actividad->Curso->find('list', ['limit' => 200]);
        $this->set(compact('curso'));
        $profesores = $this->Actividad->Profesor->find('list', ['limit' => 200]);
        $this->set(compact('profesores'));
        return $this->Crud->execute();
    }

    public function edit($id = null)
    {
        $actividad = $this->Actividad->get($id, [
            'contain' => ['Curso', 'Profesor'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actividad = $this->Actividad->patchEntity($actividad, $this->request->data);

            if ($this->request->data['destacada'] == '0') {
                $idActividad = $id;
                $destacados = TableRegistry::get('Destacado');
                $destacado = $destacados->find('all')->where(['actividad_id' => $id])->first();
                if ($destacado) {
                    $destacados->delete($destacado);
                }
            } else if ($this->request->data['destacada'] == '1') {
                $this->_guardaDestacado($id);
            }
            if ($this->Actividad->save($actividad)) {
                $this->Flash->success(__('La actividad ha sido modificada.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La actividad no ha podido ser editada. Por favor, prueba de nuevo'));
            }
        }
        $curso = $this->Actividad->Curso->find('list', ['limit' => 200]);
        $profesores = $this->Actividad->Profesor->find('list', ['limit' => 200]);
        $this->set(compact('actividad', 'curso', 'profesores'));
        $this->set('_serialize', ['actividad']);
    }

    public function view($id = null)
    {
        $actividad = $this->Actividad->get($id, [
            'contain' => ['Curso', 'Profesor', 'Destacado'],
        ]);
        $this->set('actividad', $actividad);
        $this->set('_serialize', ['actividad']);
    }

    // public function edit($id) {
    //     $curso = $this->Actividad->Curso->find('list', ['limit' => 200]);
    //     $profesores = $this->Actividad->Profesor->find('list', ['limit' => 200]);
    //     $this->set(compact('curso'));
    //     $this->set(compact('profesores'));
    //     return $this->Crud->execute();
    // }

    public function generaInforme()
    {
        $actividades = json_decode($this->request->data('actividades'));
        $this->viewBuilder()->layout("listado_pdf");
        $this->set('actividades', $actividades);
        $this->set('_serialize', ['actividad']);
    }

    private function _guardaDestacado($idActividad)
    {
        $destacadoTable = TableRegistry::get('Destacado');
        $destacado = $destacadoTable->newEntity();
        $destacado->actividad_id = $idActividad;
        $destacado->icono = "fa fa-laptop";
        $destacadoTable->save($destacado);
    }

    private function _compruebaMaximoActividadesPorCurso($cursos)
    {
        $listaCursos = "";
        $this->loadModel('ActividadCurso');
        $this->loadModel('Curso');

        foreach ($cursos as $key => $curso) {
            $numeroActividades = $this->ActividadCurso->getActividadesPorCurso($curso);
            if ($numeroActividades > 5) {
                $listaCursos = $this->Curso->find()->where(['id' => $curso])->first();
                // $email = new Email('default');
                // $email->to('alvaro89mr@gmail.com', 'Toexample')
                // ->subject('Prueba')
                // ->send('My mesanej');
                $this->Flash->error(__('El siguiente curso ha superado las cinco actividades anuales:' . $listaCursos->nombre));
            }
        }
    }
}
