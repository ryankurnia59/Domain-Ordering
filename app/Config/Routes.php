<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Route;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Route for domain availability check
$routes->match(['get', 'post'], '/domain/check', 'Domain::checkAvailability');

// Route for payment process
$routes->get('/domain/payment', 'Domain::payment');
$routes->post('/domain/confirm', 'Domain::confirmOrder');

// Route for user login
$routes->get('/login', 'User::login');
$routes->post('/user/authenticate', 'User::authenticate');
$routes->get('/logout', 'User::logout');

// Route for invoice
$routes->get('/invoice', 'Domain::invoice');

// Routes for static pages (example)
$routes->get('/about', 'Pages::about');
$routes->get('/contact', 'Pages::contact');

// Add more routes as needed

// Ensure default route is added at the end
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Domain');
$routes->setDefaultMethod('index');

return $routes;
