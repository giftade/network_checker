<?php

namespace App\Controller;

require __DIR__ . "/../../vendor/autoload.php";

use Classes\Router;
use Database\connection;

class LocationController  
{
   private $connection;

    public function index (Router $router) {
        $connection = new Connection();
        
        $router->renderView('Home');
    }

    public function search() {
        $this->connection = new connection();

        $location = $_POST['location'];
        $sql = "SELECT * FROM locations WHERE `name` = `$location` ";
        $this->connection->query($sql);

        var_dump($location);
    }



}