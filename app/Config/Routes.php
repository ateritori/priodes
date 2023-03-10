<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Beranda::index');

$routes->get('/kriteria', 'Kriteria::index', ['filter' => 'role:admin']);
$routes->get('/kriteria/tambah', 'Kriteria::create', ['filter' => 'role:admin']);
$routes->get('/kriteria/simpan', 'Kriteria::save', ['filter' => 'role:admin']);
$routes->get('/kriteria/edit/(:num)', 'Kriteria::edit/$1', ['filter' => 'role:admin']);
$routes->get('/kriteria/update/(:num)', 'Kriteria::update/$1', ['filter' => 'role:admin']);
$routes->delete('/kriteria/delete/(:num)', 'Kriteria::delete/$1', ['filter' => 'role:admin']);

$routes->get('/kriteria/sub/(:num)', 'Subkriteria::index/$1', ['filter' => 'role:admin']);
$routes->get('/kriteria/sub/create/(:num)', 'Subkriteria::create/$1', ['filter' => 'role:admin']);
$routes->get('/kriteria/sub/save/(:num)', 'Subkriteria::save/$1', ['filter' => 'role:admin']);
$routes->get('/kriteria/sub/edit/(:num)', 'Subkriteria::edit/$1', ['filter' => 'role:admin']);
$routes->get('/kriteria/sub/update/(:num)', 'Subkriteria::update/$1', ['filter' => 'role:admin']);
$routes->delete('/kriteria/sub/delete/(:num)', 'Subkriteria::delete/$1', ['filter' => 'role:admin']);

$routes->get('/alternatif', 'Alternatif::index', ['filter' => 'role:admin']);
$routes->get('/alternatif/(:num)', 'Alternatif::rinci/$1', ['filter' => 'role:admin']);
$routes->get('/alternatif/create', 'Alternatif::create', ['filter' => 'role:admin']);
$routes->get('/alternatif/save', 'Alternatif::save', ['filter' => 'role:admin']);
$routes->get('/alternatif/edit/(:num)', 'Alternatif::edit/$1', ['filter' => 'role:admin']);
$routes->get('/alternatif/update/(:num)', 'Alternatif::update/$1', ['filter' => 'role:admin']);
$routes->delete('/alternatif/delete/(:num)', 'Alternatif::delete/$1', ['filter' => 'role:admin']);

$routes->get('/penilaian', 'Penilaian::index', ['filter' => 'role:user']);
$routes->get('/penilaian/(:num)', 'Penilaian::create/$1', ['filter' => 'role:user']);
$routes->get('/penilaian/save/(:num)', 'Penilaian::save/$1', ['filter' => 'role:user']);
$routes->get('/penilaian/edit/(:num)', 'Penilaian::edit/$1', ['filter' => 'role:user']);
$routes->get('/penilaian/update/(:num)', 'Penilaian::update/$1', ['filter' => 'role:user']);

$routes->get('/analisis', 'Analisis::index');
$routes->get('/hasil', 'Hasil::index');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
