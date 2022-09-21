<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\CompaniesController;

$router = new Router(); 

$router->get('/', function () {
    (new HomeController)->index();
});
$router->post('/dashboard/companies/type', function () {
    (new CompaniesController)->addType();
});
$router->get('/invoice', function () {
    (new CompaniesController)->addType();
});

$router->run();
