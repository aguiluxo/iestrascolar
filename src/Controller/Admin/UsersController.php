<?php

namespace App\Controller\Admin;

use Cake\Event\Event;

class UsersController extends AdminController
{

 public function initialize()
    {
        parent::initialize();
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('add');
        $this->set('menuActivo', 'usuario');
    }

    public function login()
    {
       if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuario o contraseña erroneos'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

     public function index()
     {
        $usuarios = $this->Users->find('all');

        $this->set('users',$this->paginate($usuarios));
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido guardado.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('No se ha podido crear el usuario.'));
        }
        $this->set('user', $user);
    }

}