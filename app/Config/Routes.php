<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('register', 'AuthController::register');
$routes->post('register', 'AuthController::store');
$routes->get('verify/(:any)', 'AuthController::verify/$1');
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::authenticate');
$routes->get('board', 'EmployeeController::board');
$routes->post('resultboard', 'EmployeeController::resultboard');
$routes->get('fetch', 'EmployeeController::fetch');
$routes->post('log', 'AdLogController::index');
$routes->get('adminlogin', 'AdLogController::adminlogin');
$routes->get('managerreg', 'ManagerController::managerreg');
$routes->post('manvalid', 'ManagerController::index');
$routes->get('verifying/(:any)', 'ManagerController::verify/$1');
$routes->get('managerlogin', 'ManagerController::managerlogin');
$routes->post('lastlogin', 'ManagerController::lastlogin');

$routes->get('employee/edit', 'AuthController::edit');
$routes->post('employee/update', 'AuthController::update');
$routes->get('landingpage', 'AuthController::landingpage');
$routes->post('ad', 'AuthController::ad');
$routes->get('adlogview', 'AuthController::adlogview');
$routes->post('users/update', 'AuthController::updateField');
//$routes->post('users/addColumn', 'AuthController::addColumn');
//$routes->post('users/updateField', 'AuthController::updateField');
$routes->post('/users/insert', 'AuthController::insert');

$routes->get('personaldetails/edit', 'AuthController::detailedit');
$routes->post('personaldetails/update', 'AuthController::detailupdate');

$routes->get('skilledit', 'AuthController::skilledit');
$routes->post('skillupdate', 'AuthController::skillupdate');

$routes->get('users/view', 'AuthController::view');
$routes->post('users/insert', 'AuthController::insert');
$routes->post('users/update', 'AuthController::update');


$routes->get('/users/all', 'AuthController::all');

$routes->get('/users/view/(:num)', 'AuthController::view/$1');
$routes->get('/users/all', 'AuthController::all');
$routes->post('addmodal', 'AuthController::addmodal');

//delete
$routes->post('users/delete/(:num)', 'AuthController::delete/$1');

















