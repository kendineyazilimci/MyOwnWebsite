<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/anasayfa', 'Home::index');
$routes->group('/projelerim', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/', 'Projects::index');
    $routes->get('mesajlasmasitesi', 'Projects::codeigniterproject');
});
$routes->get('/iletisim', 'Contact::index');
$routes->get('/hakkimda', 'About::index');
