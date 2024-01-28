<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Books::view');
$routes->get('/edit/(:any)', 'Books::edit/$1');
$routes->post('/update', 'Books::update');
$routes->get('/add', 'Books::add');
$routes->post('/save', 'Books::save');
$routes->get('/delete/(:any)', 'Books::delete/$1');
