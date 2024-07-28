<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'CustomerController::index');
$routes->get('/customer', 'CustomerController::index');
$routes->get('/customer/add', 'CustomerController::add');
$routes->post('/customer/create', 'CustomerController::create');
$routes->get('/customer/edit/(:num)', 'CustomerController::edit/$1');
$routes->post('/customer/update/(:num)', 'CustomerController::update/$1');
$routes->get('/customer/delete/(:num)', 'CustomerController::delete/$1');
