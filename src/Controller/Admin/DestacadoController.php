<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * Destacado Controller
 *
 * @property \App\Model\Table\DestacadoTable $Destacado
 */
class DestacadoController extends AdminController
{

public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->set('menuActivo', 'destacados');
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Actividad']
        ];
        $this->set('destacado', $this->paginate($this->Destacado));
        $this->set('_serialize', ['destacado']);
    }

    /**
     * View method
     *
     * @param string|null $id Destacado id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $destacado = $this->Destacado->get($id, [
            'contain' => ['Actividad']
        ]);
        $this->set('destacado', $destacado);
        $this->set('_serialize', ['destacado']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $destacado = $this->Destacado->newEntity();
        if ($this->request->is('post')) {
            $destacado = $this->Destacado->patchEntity($destacado, $this->request->data);
            if ($this->Destacado->save($destacado)) {
                $this->Flash->success(__('The destacado has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The destacado could not be saved. Please, try again.'));
            }
        }
        $actividad = $this->Destacado->Actividad->find('list', ['limit' => 200]);
        $this->set(compact('destacado', 'actividad'));
        $this->set('_serialize', ['destacado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Destacado id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $destacado = $this->Destacado->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $destacado = $this->Destacado->patchEntity($destacado, $this->request->data);
            if ($this->Destacado->save($destacado)) {
                $this->Flash->success(__('The destacado has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The destacado could not be saved. Please, try again.'));
            }
        }
        $actividad = $this->Destacado->Actividad->find('list', ['limit' => 200]);
        $this->set(compact('destacado', 'actividad'));
        $this->set('_serialize', ['destacado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Destacado id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $destacado = $this->Destacado->get($id);
        if ($this->Destacado->delete($destacado)) {
            $this->Flash->success(__('The destacado has been deleted.'));
        } else {
            $this->Flash->error(__('The destacado could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
