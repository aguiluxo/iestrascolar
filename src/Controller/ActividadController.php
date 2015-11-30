<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Response;

/**
 * Actividad Controller
 *
 * @property \App\Model\Table\ActividadTable $Actividad
 */
class ActividadController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->set('pagina', 'actividades');
    }
    public function index()
    {
        $this->paginate = [

        ];
        $this->set('actividad', $this->paginate($this->Actividad));
        $this->set('_serialize', ['actividad']);
    }

    /**
     * View method
     *
     * @param string|null $id Actividad id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actividad = $this->Actividad->get($id, [
            'contain' => ['Curso', 'Profesor', 'Destacado'],
        ]);
        $this->set('actividad', $actividad);
        $this->set('_serialize', ['actividad']);
    }

    public function calendario()
    {
        $this->set('pagina', 'calendario');
    }

    /* Función AJAX que envía la programación comprendida entre dos fechas */
    public function getProgramacion()
    {
        // $this->request->onlyAllow('ajax');

        $conditions = array();

        $from = $this->request->query['from'];
        $to = $this->request->query['to'];

        //Hago substr ya que el plugin del calendario añade 000 al final, que no es necesario para el calculo de fechas
        $conditions[] = array(
            'fecha_ini >=' => date('Y-m-d', substr($from, 0, -3)) . ' 00:00:00',
            'fecha_fin <=' => date('Y-m-d', substr($to, 0, -3)) . ' 23:59:59',
        );

        $eventos = $this->Actividad->find()->where($conditions);

        $calendario = $this->_getCalendario($eventos);
        $this->autoRender = false;
        $this->response->type('json');
        $data = array('status' => 'o', 'status_message' => 'ok');
        $this->response->body(json_encode(array(
            'success' => 1,
            'result' => $calendario,
        )));
        $this->response->send();
        exit();

    }

    /* Formatea los eventos al formato de Bootstrap calendar */
    private function _getCalendario($eventos)
    {
        $calendario = array();

        foreach ($eventos as $k => $evento) {

            $fecha_ini = date('H:i', strtotime($evento->fecha_ini));
            $fecha_fin = date('H:i', strtotime($evento->fecha_fin));
            $url = "javascript:modalLaunchActividad({$evento->id}, '{$evento->titulo}','{$evento->descripcion}')";
            $calendario[] = array(
                'id' => $evento->id,
                'title' => $evento->titulo . " ({$fecha_ini} - {$fecha_fin})",
                'start' => strtotime($evento->fecha_ini) . '000',
                'end' => strtotime($evento->fecha_fin) . '000',
                'class' => "event-success",
                'url' => $url,
            );
        }
        return $calendario;

    }
}
