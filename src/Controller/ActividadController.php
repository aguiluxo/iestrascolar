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
        $this->loadModel('Slider');
        $slider = $this->Slider->find('all', [
            'order' => ['Slider.orden' => 'asc'],
        ]);
        $this->set('slider', $slider);
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
    public function vistaActividades($id = null)
    {
        $this->viewBuilder()->layout('');

        $actividad = $this->Actividad->get($id, [
            'contain' => ['Curso', 'Profesor'],
        ]);
        $coordenadas = $this->getMapDataFromAddress($actividad->direccion);
        $this->set('coordenadas', $coordenadas);
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

            $actividad = $this->Actividad->get($evento->id, [
                'contain' => ['Curso', 'Profesor'],
            ]);
            $cursos = "";
            foreach ($actividad->curso as $curso) {
                $cursos .= " " . $curso->nombre;
            }
            $url = "javascript:modalLaunchActividad({$evento->id}, '{$evento->titulo}','{$evento->descripcion}')";
            $calendario[] = array(
                'id' => $evento->id,
                'title' => $evento->titulo . " ({$fecha_ini} - {$fecha_fin})",
                'start' => strtotime($evento->fecha_ini) . '000',
                'end' => strtotime($evento->fecha_fin) . '000',
                'class' => "event-success",
                'url' => $url,
                'cursos' => $cursos,
            );
        }
        return $calendario;
        $calendario[] = array(
            'id' => $evento['Programacion']['id'],
            'title' => $piloto['Piloto']['nombrecompleto'] . ' - ' . $evento['Programacion']['titulo'] . " ({$fecha_comienzo} - {$fecha_fin})",
            'start' => strtotime($evento['Programacion']['fecha_comienzo']) . '000',
            'end' => strtotime($evento['Programacion']['fecha_fin']) . '000',
            'class' => $this->Programacion->getClaseEventoCalendario($evento['Programacion']['tipo']),
            'url' => $url,
        );

    }
    public function quees()
    {

        $eventos = $this->curso->find()->where($conditions)->contain('Curso');
        foreach ($eventos as $evento) {
            debug($evento);
        }
    }

    public $data_url = 'http://maps.googleapis.com/maps/api/geocode/json?sensor=false&address=';

    public function getMapDataFromAddress($address = null)
    {
        if (!$address) {
            return false;
        }

        try {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $this->data_url . $this->prepareAddress($address));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $result = curl_exec($ch);
            curl_close($ch);

        } catch (Exception $e) {
            throw new GoogleMapManagerException(_('No se han podido obtener los datos del mapa'));
            return false;
        }
        $data = $this->getGeometryDataFromJson($result);
        return $data;
    }

    public function prepareAddress($address)
    {
        if (!is_string($address)) {
            if (is_array($address)) {
                $address = implode(',', $address);
            } else {
                $address = strval($address);
            }
        }
        $address = str_replace(' ', '+', $address);
        return $address;
    }

/**
 * Obtener los datos del mapa del JSON
 * geometry = data->results[0]->geometry
 */
    public function getGeometryDataFromJson($string)
    {
        $data = json_decode($string);
        if (json_last_error() == '') {
            if (empty($data->results[0]->geometry)) {
                return false;
            }
            $geometry = $data->results[0]->geometry;
            return [
                'lat' => number_format($geometry->location->lat, 7),
                'lng' => number_format($geometry->location->lng, 7),
                'viewport_ne_lat' => number_format($geometry->viewport->northeast->lat, 7),
                'viewport_ne_lng' => number_format($geometry->viewport->northeast->lng, 7),
                'viewport_sw_lat' => number_format($geometry->viewport->southwest->lat, 7),
                'viewport_sw_lng' => number_format($geometry->viewport->southwest->lng, 7),
            ];
        } else {
            return false;
        }
    }

/**
 * Obtener los datos de un mapa en formato "objeto de Javascript"
 */
    public function getJSMapData($page_map)
    {
        $output = '{';

        $output .= 'lat: ' . $page_map['lat'] . ',';
        $output .= 'lng: ' . $page_map['lng'] . ',';
        $output .= 'viewport_ne_lat: ' . $page_map['viewport_ne_lat'] . ',';
        $output .= 'viewport_ne_lng: ' . $page_map['viewport_ne_lng'] . ',';
        $output .= 'viewport_sw_lat: ' . $page_map['viewport_sw_lat'] . ',';
        $output .= 'viewport_sw_lng: ' . $page_map['viewport_sw_lng'];

        $output .= '}';
        return $output;
    }
}
// llama a getMapDataFromAddress($direccion) y te devuelve un array con las coord. la dierccion se la pasas normal q el ya la convierte con los +
