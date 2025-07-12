<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Page::login');
$routes->get('/register', 'Page::register');
$routes->get('/faq', 'Page::faq');