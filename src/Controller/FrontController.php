<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\I18n;

class FrontController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout("default");
    }
    public function index()
    {
        $this->loadModel('Actividad');
        $this->loadModel('Destacado');
        $this->loadModel('Slider');

        $slider = $this->Slider->find('all', [
            'order' => ['Slider.orden' => 'asc'],
        ]);

        $destacadas = $this->Destacado->find('all', [
            'limit' => '3',
            'order' => ['Destacado.modified' => 'desc'],
            'contain' => 'Actividad',
        ]);

        $proximas = $this->Actividad->find('all', [
            'order' => ['Actividad.fecha_ini' => 'asc'],
            'limit' => '10',
        ]);
        $this->set('actividades_destacadas', $destacadas);
        $this->set('actividades_proximas', $proximas);
        $this->set('slider', $slider);
        $this->set('pagina', 'index');
    }

    public function cambiaIdioma($idioma)
    {
        I18n::locale($idioma);
        $this->redirect($this->request->referer());
    }
}
