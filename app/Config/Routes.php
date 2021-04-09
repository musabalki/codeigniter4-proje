<?php

namespace Config;

// Create a new instance of our RouteCollection class.
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
$routes->setDefaultController('Home');
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


$routes->get('/', 'Frontend\Home::index');
$routes->get('/blog/single', 'Frontend\Blog::single');
$routes->get('/blog/category', 'Frontend\Blog::category');


$routes->get('/blog/single/(:any)', 'Frontend\Blog::single/$1');





$routes->get('/admin/login', 'Backend\Auth::login');
$routes->get('/admin/logout', 'Backend\Auth::logout');
$routes->get('/admin/dashboard', 'Backend\Dashboard::index');




/*
$routes->get('/admin/dashboard', 'Backend\Dashboard::index');
$routes->post('/admin/dashboard', 'Backend\Dashboard::index');
$routes->put('/admin/dashboard', 'Backend\Dashboard::index');
$routes->delete('/admin/dashboard', 'Backend\Dashboard::index');
$routes->match(['get','post'],'/admin/dashboard', 'Backend\Dashboard::index');
*/


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