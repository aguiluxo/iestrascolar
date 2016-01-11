<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * Evaluacion Controller
 *
 * @property \App\Model\Table\EvaluacionTable $Evaluacion
 */
class EvaluacionController extends AdminController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->set('menuActivo', 'evaluacion');
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $evaluacion = $this->Evaluacion->newEntity();
        if ($this->request->is('post')) {
            $evaluacion = $this->Evaluacion->patchEntity($evaluacion, $this->request->data);
            if ($this->Evaluacion->save($evaluacion)) {
                $actividad = $this->loadModel('Actividad');
                $query = $actividad->query();
                $query->update()
                      ->set(['esta_evaluada' => true])
                      ->where(['id' => $id])
                      ->execute();
                $this->Flash->success(__('La evaluación ha sido guardada.'));
                return $this->redirect(['controller' => 'Actividad', 'action' => 'index']);
            } else {
                $this->Flash->error(__('No se ha podido guardar la evaluación.'));
            }
        }
        $this->set(compact('evaluacion'));
        $this->set('_serialize', ['evaluacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Evaluacion id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evaluacion = $this->Evaluacion->get(['actividad_id' => $id], [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evaluacion = $this->Evaluacion->patchEntity($evaluacion, $this->request->data);
            if ($this->Evaluacion->save($evaluacion)) {
                $this->Flash->success(__('La evaluación ha sido guardada.'));
                return $this->redirect(['controller' => 'Actividad', 'action' => 'index']);
            } else {
                $this->Flash->error(__('No se ha podido guardar la evaluación.'));
            }
        }
        $this->set(compact('evaluacion'));
        $this->set('_serialize', ['evaluacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Evaluacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */

}
