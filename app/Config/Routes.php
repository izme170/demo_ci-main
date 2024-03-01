<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// User controller get method
$routes->get('/', 'UserController::listUsers');
$routes->get('/user/add', 'UserController::addUser');
$routes->get('/user/edit/(:num)', 'UserController::editUser/$1');
$routes->get('/user/delete/(:num)', 'UserController::deleteUser/$1');

// User controller post method
$routes->post('/storeUser', 'UserController::addUser');

// User controller put method
$routes->put('/updateUser/(:num)', 'UserController::editUser/$1');
$routes->delete('/deleteUser/(:num)', 'UserController::deleteUser/$1');

