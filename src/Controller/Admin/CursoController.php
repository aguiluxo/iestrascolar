<?php
namespace App\Controller\Admin;
use Cake\Event\Event;

/**
 * Curso Controller
 *
 * @property \App\Model\Table\CursoTable $Curso
 */
class CursoController extends AdminController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->set("menuActivo", 'cursos');
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('curso', $this->paginate($this->Curso));
        $this->set('_serialize', ['curso']);
    }

    /**
     * View method
     *
     * @param string|null $id Curso id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $curso = $this->Curso->get($id, [
            'contain' => ['Actividad']
        ]);
        $this->set('curso', $curso);
        $this->set('_serialize', ['curso']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $curso = $this->Curso->newEntity();
        if ($this->request->is('post')) {
            $curso = $this->Curso->patchEntity($curso, $this->request->data);
            if ($this->Curso->save($curso)) {
                $this->Flash->success(__('The curso has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The curso could not be saved. Please, try again.'));
            }
        }
        $actividad = $this->Curso->Actividad->find('list', ['limit' => 200]);
        $this->set(compact('curso', 'actividad'));
        $this->set('_serialize', ['curso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Curso id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $curso = $this->Curso->get($id, [
            'contain' => ['Actividad']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $curso = $this->Curso->patchEntity($curso, $this->request->data);
            if ($this->Curso->save($curso)) {
                $this->Flash->success(__('The curso has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The curso could not be saved. Please, try again.'));
            }
        }
        $actividad = $this->Curso->Actividad->find('list', ['limit' => 200]);
        $this->set(compact('curso', 'actividad'));
        $this->set('_serialize', ['curso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Curso id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $curso = $this->Curso->get($id);
        if ($this->Curso->delete($curso)) {
            $this->Flash->success(__('The curso has been deleted.'));
        } else {
            $this->Flash->error(__('The curso could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
