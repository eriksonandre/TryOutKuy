<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pages/login', 'Pages::login');
$routes->get('/', 'Pages::register');
$routes->get('/', 'Pages::faq');