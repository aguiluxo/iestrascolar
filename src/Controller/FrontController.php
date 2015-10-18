<?php
namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;

class FrontController extends AppController{

	public function beforeFilter(Event $event){
		parent::beforeFilter($event);
		$this->layout = "default";

	}
	public function index(){
        $this->loadModel('Actividad');

		$destacadas=$this->Actividad->find('all',[
			'conditions' => ['Actividad.destacado' => 1],
			'limit' => '3'
		]);


		$proximas=$this->Actividad->find('all',[
			'order' => ['Actividad.fecha_inicio' => 'asc'],
			'limit' => '4'
		]);
		$this->set('actividades_destacadas',$destacadas);
		$this->set('actividades_proximas',$proximas);
		$this->set('pagina', 'index');

	}
}