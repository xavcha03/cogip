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
$router->delete('/dashboard/companies/type', function () {
    (new CompaniesController)->deleteType();
});
$router->get('/dashboard/companies/type', function () {
    (new CompaniesController)->updateType();
});
$router->get('/invoice', function () {
    (new CompaniesController)->addType();
});
$router->post('/dashboard/companies', function () {
    (new CompaniesController)->addCompany();
});
$router->delete('/dashboard/companies', function () {
    (new CompaniesController)->deleteCompany();
});
$router->get('/dashboard/companies', function () {
    (new CompaniesController)->updateCompany();
});

$router->run();
