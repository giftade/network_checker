<?php

namespace App\Controller;

require __DIR__ . "/../../vendor/autoload.php";

use Classes\Router;
// use Database\connection;

class LocationController
{
    private $connection;

    public function index(Router $router)
    {
        // $connection = new Connection();

        $router->renderView('Home');
    }


    public function search()
    {
        $networkType = $_POST['networkType'];
        $serviceProvider = $_POST['serviceProvider'];
        $searchTerm = $_POST['searchTerm'];


        $response = array(
            'networkType' => $networkType,
            'serviceProvider' => $serviceProvider,
            'searchTerm' => $searchTerm
        );

        // Send the response as JSON
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}
