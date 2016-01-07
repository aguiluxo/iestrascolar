<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * Departamento Controller
 *
 * @property \App\Model\Table\DepartamentoTable $Departamento
 */
class DepartamentoController extends AdminController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->set("menuActivo", 'departamentos');
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('departamento', $this->paginate($this->Departamento));
        $this->set('_serialize', ['departamento']);
    }

    /**
     * View method
     *
     * @param string|null $id Departamento id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departamento = $this->Departamento->get($id, [
            'contain' => [],
        ]);
        $this->set('departamento', $departamento);
        $this->set('_serialize', ['departamento']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departamento = $this->Departamento->newEntity();
        if ($this->request->is('post')) {
            $departamento = $this->Departamento->patchEntity($departamento, $this->request->data);
            if ($this->Departamento->save($departamento)) {
                $this->Flash->success(__('The departamento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The departamento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('departamento'));
        $this->set('_serialize', ['departamento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Departamento id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departamento = $this->Departamento->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departamento = $this->Departamento->patchEntity($departamento, $this->request->data);
            if ($this->Departamento->save($departamento)) {
                $this->Flash->success(__('The departamento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The departamento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('departamento'));
        $this->set('_serialize', ['departamento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Departamento id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departamento = $this->Departamento->get($id);
        if ($this->Departamento->delete($departamento)) {
            $this->Flash->success(__('The departamento has been deleted.'));
        } else {
            $this->Flash->error(__('The departamento could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
