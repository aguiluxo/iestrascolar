<?php
use Cake\Routing\Router;

Router::plugin('Slider', function ($routes) {

    $routes->connect('/', ['controller' => 'Slider', 'action' => 'index']);
    $routes->connect('/add', ['controller' => 'Slider' , 'action' => 'edit']);

    $routes->fallbacks('InflectedRoute');
});
