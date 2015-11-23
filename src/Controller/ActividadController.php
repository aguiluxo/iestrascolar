<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Actividad Controller
 *
 * @property \App\Model\Table\ActividadTable $Actividad
 */
class ActividadController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('actividad', $this->paginate($this->Actividad));
        $this->set('_serialize', ['actividad']);
    }

    /**
     * View method
     *
     * @param string|null $id Actividad id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actividad = $this->Actividad->get($id, [
            'contain' => ['Users', 'Curso', 'Profesor', 'Destacado']
        ]);
        $this->set('actividad', $actividad);
        $this->set('_serialize', ['actividad']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actividad = $this->Actividad->newEntity();
        if ($this->request->is('post')) {
            $actividad = $this->Actividad->patchEntity($actividad, $this->request->data);
            if ($this->Actividad->save($actividad)) {
                $this->Flash->success(__('The actividad has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The actividad could not be saved. Please, try again.'));
            }
        }
        $users = $this->Actividad->Users->find('list', ['limit' => 200]);
        $curso = $this->Actividad->Curso->find('list', ['limit' => 200]);
        $profesor = $this->Actividad->Profesor->find('list', ['limit' => 200]);
        $this->set(compact('actividad', 'users', 'curso', 'profesor'));
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
            'contain' => ['Curso', 'Profesor']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actividad = $this->Actividad->patchEntity($actividad, $this->request->data);
            if ($this->Actividad->save($actividad)) {
                $this->Flash->success(__('The actividad has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The actividad could not be saved. Please, try again.'));
            }
        }
        $users = $this->Actividad->Users->find('list', ['limit' => 200]);
        $curso = $this->Actividad->Curso->find('list', ['limit' => 200]);
        $profesor = $this->Actividad->Profesor->find('list', ['limit' => 200]);
        $this->set(compact('actividad', 'users', 'curso', 'profesor'));
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

    public function calendario()
    {

    }
}
