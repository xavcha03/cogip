<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\CompaniesController;
use App\Controllers\DashBoardController;

$router = new Router();

//Home
$router->get('/', function () {
    (new HomeController)->index();
});
//acceuil
$router->get('/home', function () {
    (new HomeController)->test();
});

//



//------------- DashBoard
/**
 * dashboard Home
 */
$router->get('/dashboard', function () {
    (new DashBoardController)->statistiques();
});

/**
 * Formulaire d'ajout d'une entreprise
 */
$router->get('/dashboard/addcompany', function () {
    (new DashBoardController)->callFormCompany();
});












//-------------------Company Type

/**
 * Add a new company type
 */
$router->post('/dashboard/companies/type', function () {
    (new CompaniesController)->addType();
});

/**
 * Delete a company Type
 */
$router->delete('dashboard/companies/type', function () {
    (new CompaniesController)->deleteType();
});




$router->get('/updateProject', function () {
    (new CompaniesController)->addType();
});

$router->run();
