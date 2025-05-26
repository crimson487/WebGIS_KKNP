<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setAutoRoute(false);  // Pastikan auto routing aktif

// Route default
$routes->get('/', 'Home::index');
$routes->get('home/viewMap', 'Home::viewMap');
$routes->get('home/baseMap', 'Home::baseMap');
$routes->get('home/marker', 'Home::marker');
$routes->get('home/geojson', 'Home::geojson');
$routes->get('home/peta', 'Home::peta');
$routes->get('peta/petaTipologi', 'Peta::petaTipologi');