<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * Profesor Controller
 *
 * @property \App\Model\Table\ProfesorTable $Profesor
 */
class ProfesorController extends AdminController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->set('menuActivo', 'profesores');
    }

    public function isAuthorized($user = null)
    {
        if ($this->request->action === "add" || $this->request->action === "index") {
            return true;
        }

        if (in_array($this->request->action, ['edit', 'delete'])) {
            $profesorId = (int) $this->request->params['pass'][0];
            if ($this->Profesor->esPropietario($profesorId, $user['id']) || $user['role'] == 'dace') {
                return true;
            }
        }
        return false;
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departamento'],
        ];
        $this->set('profesor', $this->paginate($this->Profesor));
        $this->set('_serialize', ['profesor']);
    }

    /**
     * View method
     *
     * @param string|null $id Profesor id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profesor = $this->Profesor->get($id, [
            'contain' => ['Departamento', 'Actividad', 'Curso'],
        ]);
        $this->set('profesor', $profesor);
        $this->set('_serialize', ['profesor']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profesor = $this->Profesor->newEntity();
        if ($this->request->is('post')) {
            $profesor = $this->Profesor->patchEntity($profesor, $this->request->data);
            if ($this->Profesor->save($profesor)) {
                $this->Flash->success(__('El profesor ha sido añadido.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El profesor no ha podido ser añadido. Por favor, prueba de nuevo.'));
            }
        }
        $departamento = $this->Profesor->Departamento->find('list', ['limit' => 200]);
        $curso = $this->Profesor->Curso->find('list', ['limit' => 200]);
        $this->set(compact('profesor', 'departamento', 'curso'));
        $this->set('_serialize', ['profesor']);
        $this->render('edit');
    }

    /**
     * Edit method
     *
     * @param string|null $id Profesor id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profesor = $this->Profesor->get($id, [
            'contain' => ['Curso'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profesor = $this->Profesor->patchEntity($profesor, $this->request->data);
            if ($this->Profesor->save($profesor)) {
                $this->Flash->success(__('El profesor ha sido modificado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El profesor no ha podido ser modificado. Por favor, prueba de nuevo.'));
            }
        }
        $departamento = $this->Profesor->Departamento->find('list', ['limit' => 200]);
        $curso = $this->Profesor->Curso->find('list', ['limit' => 200]);
        $this->set(compact('profesor', 'departamento', 'curso'));
        $this->set('_serialize', ['profesor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Profesor id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profesor = $this->Profesor->get($id);
        if ($this->Profesor->delete($profesor)) {
            $this->Flash->success(__('El profesor ha sido borrado.'));
        } else {
            $this->Flash->error(__('El profesor no ha podido ser borrado.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
