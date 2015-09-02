<?php
use Cake\Routing\Router;

Router::plugin('Slider', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
