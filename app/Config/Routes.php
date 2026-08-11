<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('/home', 'Home::home', ['filter' => 'auth']);
$routes->get('/booking', 'Booking::booking', ['filter' => 'auth']);
$routes->post('booking/store', 'Booking::store', ['filter' => 'auth']);
$routes->get('booking/success/(:num)', 'Booking::success/$1', ['filter' => 'auth']);
$routes->get('booking/cancel/(:num)', 'Booking::cancel/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'booking/my-bookings', 'Booking::myBookings', ['filter' => 'auth']);

$routes->group('booking', ['filter' => 'admin'], function($routes) {
    $routes->get('list', 'Booking::list');
    $routes->get('edit/(:num)', 'Booking::edit/$1');
    $routes->post('update/(:num)', 'Booking::update/$1');
    $routes->post('quick-update/(:num)', 'Booking::quickUpdate/$1');
    $routes->get('delete/(:num)', 'Booking::delete/$1');
});

$routes->get('auth/login', 'Auth::login');
$routes->get('auth/register', 'Auth::register');
$routes->post('auth/createAccount', 'Auth::createAccount');
$routes->post('auth/authenticate', 'Auth::authenticate');
$routes->get('auth/logout', 'Auth::logout');

$routes->get('dashboard', 'Dashboard::index', ['filter' => 'admin']);