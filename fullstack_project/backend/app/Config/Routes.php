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
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// $routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

$routes->group('', ['filter' => 'authGuard'], static function ($routes) {
    $routes->get('/dashboard', 'Dashboard::index', ['filter' => 'authGuard']);
    $routes->get('/', 'Dashboard::index', ['filter' => 'authGuard']);
    $routes->presenter('products', ['filter' => 'authGuard']);
});

$routes->get('/reports/stafflist', 'ReportsController::stafflist', ['filter' => 'authGuard']);
$routes->get('/reports/allstaff', 'ReportsController::allstaff', ['filter' => 'authGuard']);
$routes->get('/reports/orderlist', 'ReportsController::orderlist', ['filter' => 'authGuard']);
$routes->get('/reports/orderquery', 'ReportsController::orderQuery', ['filter' => 'authGuard']);

$routes->get('/users/signup', 'SignupController::index');
$routes->post('/users/store', 'SignupController::store', ['filter' => 'authGuard']);
$routes->get('/users/signin', 'SigninController::index');
$routes->post('/users/login', 'SigninController::auth');
$routes->get('/users/logout', 'SigninController::logout');
$routes->get('/frontend/products', 'Frontend::ProductsList');
$routes->get('/frontend/users', 'Frontend::UsersList');
#################
$routes->get('/qb', 'Qb::index');
$routes->get('/qbtest', 'Qbtest::index');
###########
$routes->get('/test', 'TestController::index');
$routes->get('/about', 'TestController::about');
$routes->get('/list', 'TestController::productList');


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
