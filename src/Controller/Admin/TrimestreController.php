<?php
namespace App\Controller\Admin;


/**
 * Trimestre Controller
 *
 * @property \App\Model\Table\TrimestreTable $Trimestre
 */
class TrimestreController extends AdminController
{


    public function index()
    {
        $this->set('trimestre', $this->paginate($this->Trimestre));
        $this->set('_serialize', ['trimestre']);
    }

    public function view($id = null)
    {
        $trimestre = $this->Trimestre->get($id, [
            'contain' => []
        ]);
        $this->set('trimestre', $trimestre);
        $this->set('_serialize', ['trimestre']);
    }


    public function edit($id = null)
    {
        $trimestre = $this->Trimestre->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trimestre = $this->Trimestre->patchEntity($trimestre, $this->request->data);
            if ($this->Trimestre->save($trimestre)) {
                $this->Flash->success(__('El trimestre ha sido modificado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El trimestre no ha podido ser modificado.'));
            }
        }
        $this->set(compact('trimestre'));
        $this->set('_serialize', ['trimestre']);
    }

}
