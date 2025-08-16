<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/login', 'Auth::login');
$routes->post('/login-post', 'Auth::loginPost');
$routes->get('/register', 'Auth::register');
$routes->post('/register-post', 'Auth::registerPost');


$routes->group('dashboard', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Dashboard::index');
    $routes->get('edit/(:num)', 'Dashboard::edit/$1');
    $routes->post('update/(:num)', 'Dashboard::update/$1');
    $routes->get('delete/(:num)', 'Dashboard::delete/$1');
});

 $routes->get('logout', 'Auth::logout');

