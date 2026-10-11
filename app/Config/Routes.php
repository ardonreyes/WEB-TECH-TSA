<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'TMS::welcomePage');
$routes->get('/tasks', 'TMS::tasksPage');
$routes->get('/profile', 'TMS::profilePage');
$routes->get('/about', 'TMS::aboutPage');
