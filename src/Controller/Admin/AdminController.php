<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class AdminController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout("default_admin");
    }
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'authError' => __('No estás autorizado a acceder a esta sección'),
            'flash' => [],
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Profesor',
                    'fields' => ['username' => 'email'],
                ],
            ],
            'loginRedirect' => [
                'controller' => 'Admin',
                'action' => 'index',
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
            ],
        ]);
    }

    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'dace') {
            return true;
        }
        if ($this->request->action === "index" || $this->request->action === "add" || $this->request->action === "logout") {
            return true;
        }

        // Default deny
        return false;
    }
    public function index()
    {
        $this->set('menuActivo', 'index');
    }
}
