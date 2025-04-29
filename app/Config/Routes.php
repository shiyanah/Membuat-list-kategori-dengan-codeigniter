
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index', ['filter' => 'auth']);

$routes->get('/hash', 'Home::password');
$routes->get('/user-profile', 'Home::profile');
$routes->get('/page-faq', 'Home::faq');

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('/produk', 'Home::produk', ['filter' => 'auth']);
$routes->get('/kategori', 'Home::kategori', ['filter' => 'auth']);
