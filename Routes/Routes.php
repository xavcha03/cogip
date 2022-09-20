<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\CompanieController;

$router = new Router();

$router->get('/', function () {
    (new HomeController)->index();
});
$router->post('/dashboard/companies/type', function () {
    (new CompanieController)->addType();
});

$router->run();
