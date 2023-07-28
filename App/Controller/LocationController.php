<?php

namespace App\Controller;

require __DIR__ . "/../../vendor/autoload.php";

use Classes\Router;
use Database\connection;

class LocationController
{
    private $connection;

    public function index(Router $router)
    {
        // $connection = new Connection();

        $router->renderView('Home');
    }

    public function about(Router $router)
    {
        // $connection = new Connection();
        $router->renderView('About');
    }

    public function searchpage(Router $router) {
        $router->renderView('SearchPage');
    }


    public function search()
    {
        $networkType = $_POST['networkType'];
        $serviceProvider = $_POST['serviceProvider'];
        $searchTerm = $_POST['searchTerm'];

        $connection = new Connection();
        $sql = "SELECT * FROM network_info
        WHERE `network_type` = '{$networkType}'
        AND `network_provider` = '{$serviceProvider}'
        AND `location` = '{$searchTerm}'";
        $result = $connection->query($sql);
        $data = $result->fetch_assoc();


        $response = array(
            'networkType' => $networkType,
            'serviceProvider' => $serviceProvider,
            'searchTerm' => $searchTerm,
            'data' => $data
        );

        if ($response['data'] == null) {
            $response  = array(
                'networkType' => $networkType,
                'serviceProvider' => $serviceProvider,
                'searchTerm' => $searchTerm,
                'data' => "No data for this location found",
            );

            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        }
        // Send the response as JSON
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}
