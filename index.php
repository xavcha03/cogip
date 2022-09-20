<?php

use Bramus\Router\Router;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/Core/Helper.php';
require_once __DIR__ . '/Routes/Routes.php';

//Create Router instance
$router = new Router;

//Define routes


$router->post('/dashboard', function () {
    echo "Add a new invoice";
});
//Run router
$router->run();
