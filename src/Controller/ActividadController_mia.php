<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ActividadController extends AppController
{
    public $components = [
    // Enable CRUD actions
    'Crud.Crud' => [
       // All actions but delete() will be implemented
    'actions' => [
        // The controller action 'index' will map to the IndexCrudAction
        // 'index' => 'Crud.Index',
        // The controller action 'add' will map to the AddCrudAction
        // 'add'   => 'Crud.Add',
        // The controller action 'edit' will map to the EditCrudAction
        // 'edit'  => 'Crud.Edit',
        // The controller action 'view' will map to the ViewCrudAction
    // 'view'  => 'Crud.View'
    ]
    ]
    ];
    public function beforeFilter(Event $event){
       parent::beforeFilter($event);
       $this->set('pagina','actividades');
   }

   public function index()
   {
    if (isset($this->request->query['search'])) {
        $search = $this->request->query['search'];
        $options = array(
            'conditions' => array(
                'OR' => array(
                    'Actividad.titulo LIKE' => '%'. $search . '%'
                    )
                )
            );
        $resultados = $this->Actividad->find('all', $options);
        if ($resultados->count()>0) {
            $this->set('actividad',$this->paginate($resultados));
        }
    }else{
        $this->set('actividad', $this->paginate($this->Actividad));
        $this->set('_serialize', ['actividad']);
    }
}

public function view($id = null){
    $actividad = $this->Actividad->get($id, [
        'contain' => ['Curso', 'Financiador', 'Profesor', 'Evaluacion']
        ]);
    $this->set('actividad', $actividad);
    $this->set('_serialize', ['actividad']);
}

public function add()
{
    $actividad = $this->Actividad->newEntity();
    if ($this->request->is('post')) {
        $actividad = $this->Actividad->patchEntity($actividad, $this->request->data);
        if ($this->Actividad->save($actividad)) {
            $this->Flash->success(__('La actividad ha sido guardada correctamente.'));
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('La actividad no ha podido ser guardada. Por favor, inténtalo de nuevos'));
        }
    }
    $curso = $this->Actividad->Curso->find('list', ['limit' => 200]);
    $financiador = $this->Actividad->Financiador->find('list', ['limit' => 200]);
    $profesor = $this->Actividad->Profesor->find('list', ['limit' => 200]);
    $this->set(compact('actividad', 'curso', 'financiador', 'profesor'));
    $this->set('_serialize', ['actividad']);
}

    /**
     * Edit method
     *
     * @param string|null $id Actividad id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actividad = $this->Actividad->get($id, [
            'contain' => ['Curso', 'Financiador', 'Profesor']
            ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actividad = $this->Actividad->patchEntity($actividad, $this->request->data);
            if ($this->Actividad->save($actividad)) {
                $this->Flash->success(__('La actividad ha sido editada correctamente.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La actividad no ha podido ser guardada. Por favor, inténtalo de nuevos'));
            }
        }
        $curso = $this->Actividad->Curso->find('list', ['limit' => 200]);
        $financiador = $this->Actividad->Financiador->find('list', ['limit' => 200]);
        $profesor = $this->Actividad->Profesor->find('list', ['limit' => 200]);
        $this->set(compact('actividad', 'curso', 'financiador', 'profesor'));
        $this->set('_serialize', ['actividad']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Actividad id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actividad = $this->Actividad->get($id);
        if ($this->Actividad->delete($actividad)) {
            $this->Flash->success(__('The actividad has been deleted.'));
        } else {
            $this->Flash->error(__('The actividad could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
