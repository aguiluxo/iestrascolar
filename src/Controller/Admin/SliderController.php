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

    public function index()
    {
        $this->set('slider', $this->paginate($this->Slider));
        $this->set('_serialize', ['slider']);
    }



    public function add()
    {
        $slider = $this->Slider->newEntity();
        if ($this->request->is('post')) {
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
            'contain' => []
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
}
