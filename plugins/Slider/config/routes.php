<?php
use Cake\Routing\Router;

Router::plugin('Slider', function ($routes) {

    $routes->connect('/', ['controller' => 'Slider', 'action' => 'index']);
    $routes->connect('/slider/:action/*', ['controller' => 'Slider']);

    $routes->fallbacks('InflectedRoute');
});
