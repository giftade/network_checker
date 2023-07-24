<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controller\LocationController;
use Classes\Router;

$router = new Router();

$router->get('/', [new LocationController(), 'index']);
$router->get('/about', [new LocationController(), 'about']);
$router->get('/searchpage', [new LocationController(), 'searchpage']);
$router->post('/search', [new LocationController(), 'search']);
$router->resolve();
