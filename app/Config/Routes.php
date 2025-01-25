<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('/home', 'Home::index');
});
$routes->get('/projects', 'Projects::index');
$routes->get('/codeigniterproject', 'Projects::codeigniterproject');
$routes->get('/contact', 'Contact::index');
