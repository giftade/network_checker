<?php

namespace App\Controller;

require __DIR__ . "/../../vendor/autoload.php";

use Classes\Router;


class LocationController  
{
    public function index (Router $router) {

        $router->renderView('Home');
    }




}