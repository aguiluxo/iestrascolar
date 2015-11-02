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


    public function profile()
    {
        $session = $this->request->session();
    }



}