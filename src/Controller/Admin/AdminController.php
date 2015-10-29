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
            'loginRedirect' => [
                'controller' => 'Actividad',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
                'home'
            ]
        ]);
    }
}