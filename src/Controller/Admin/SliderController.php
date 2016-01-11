<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class SliderController extends AdminController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->set('menuActivo', 'slider');
    }

    public function isAuthorized($user = null)
    {
        if ($this->request->action === "add" || $this->request->action === "index" || $this->request->action === "edit"
            || $this->request->action === "delete") {
            return true;
        }
        return false;
    }
    public function index()
    {
        $this->paginate = [
            'order' => [
                'orden' => 'asc',
            ],
        ];
        $this->set('slider', $this->paginate($this->Slider));
        $this->set('_serialize', ['slider']);
    }

    public function add()
    {
        $slider = $this->Slider->newEntity();
        if ($this->request->is('post')) {
            $cantidad = $this->Slider->find()->count();
            $this->request->data['orden'] = $cantidad + 1;
            $slider = $this->Slider->patchEntity($slider, $this->request->data);

            if ($this->Slider->save($slider)) {
                $this->Flash->success(__('El slider ha sido guardado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El slider no ha podido ser guardado. Comprueba los datos introducidos.'));
            }
        }
        $this->set(compact('slider'));
        $this->set('_serialize', ['slider']);
        $this->render('edit');
    }

    public function edit($id = null)
    {
        $slider = $this->Slider->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $slider = $this->Slider->patchEntity($slider, $this->request->data);
            if ($this->Slider->save($slider)) {
                $this->Flash->success(__('El slider ha sido guardado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El slider no ha podido ser guardado. Comprueba los datos introducidos.'));
            }
        }
        $this->set(compact('slider'));
        $this->set('_serialize', ['slider']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $slider = $this->Slider->get($id);
        if ($this->Slider->delete($slider)) {
            $this->Flash->success(__('Slider borrado.'));
        } else {
            $this->Flash->error(__('El slider no ha podido ser borrado.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function subir($id = null)
    {
        if ($id) {
            $slider = $this->Slider->find()->where(['id' => $id])->first();
            $orden = $slider->orden;
            $slider_anterior = $this->Slider->find()->where(['orden' => ($orden - 1)])->first();
            if ($orden != 1) {
                $slider->orden = $orden - 1;
                $slider_anterior->orden = $orden;
                $this->Slider->save($slider);
                $this->Slider->save($slider_anterior);
            }
        }
        return $this->redirect(['action' => 'index']);
    }

    public function bajar($id = null)
    {
        if ($id) {
            $slider = $this->Slider->find()->where(['id' => $id])->first();
            $orden = $slider->orden;
            $slider_posterior = $this->Slider->find()->where(['orden' => ($orden + 1)])->first();
            if ($orden != $this->Slider->find()->count()) {
                $slider->orden = $orden + 1;
                $slider_posterior->orden = $orden;
                $this->Slider->save($slider);
                $this->Slider->save($slider_posterior);
            }
        }
        return $this->redirect(['action' => 'index']);
    }
}
