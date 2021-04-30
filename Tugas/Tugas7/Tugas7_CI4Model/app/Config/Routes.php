<?php

namespace Config;

// Create a new instance of our RouteCollection class.
use App\Controllers\MahasiswaController;

$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('MahasiswaController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'MahasiswaController::index', ['as' => 'Mahasiswa.index']);
$routes->get('mahasiswa/new', 'MahasiswaController::new', ['as' => 'Mahasiswa.new']);
$routes->post('mahasiswa', 'MahasiswaController::create', ['as' => 'Mahasiswa.create']);
$routes->get('mahasiswa/(:segment)', 'MahasiswaController::show/$1', ['as' => 'Mahasiswa.show']);
$routes->get('mahasiswa/(:segment)/edit', 'MahasiswaController::edit/$1', ['as' => 'Mahasiswa.edit']);
$routes->put('mahasiswa/(:segment)', 'MahasiswaController::update/$1', ['as' => 'Mahasiswa.update']);
$routes->delete('mahasiswa/(:segment)', 'MahasiswaController::delete/$1', ['as' => 'Mahasiswa.delete']);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
