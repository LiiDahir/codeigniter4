<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');


$routes->group('/Login', function($routes) {
    $routes->get('index', 'Login::index');
    $routes->post('authenticate', 'Login::authenticate');
    $routes->get('signup', 'Login::signup');
    $routes->get('forget', 'Login::forget');
});


$routes->get('/dashboard', 'Dashboard::index');
$routes->group('/dashboard',function($routes){
    $routes->get('index', 'Dashboard::index');
});


$routes->get('/', 'StudentsController::create');
$routes->group('/Student',function($routes){
    $routes->get('/Student/add', 'StudentsController::create');
    $routes->get('/Student/list', 'StudentsController::add');
    $routes->get('/Student/edit', 'StudentsController::add');
    $routes->get('/Student/update', 'StudentsController::add');
    $routes->get('/Student/delete', 'StudentsController::add');

});


