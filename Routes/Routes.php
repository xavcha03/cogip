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
    (new CompaniesController)->callFormCompany();
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
$router->get('dashboard/companies/deleteType/(\d+)', function ($idType) {

    (new CompaniesController)->deleteType($idType);
});
//display Company type form
$router->get('/dashboard/companies/type', function () {
    (new CompaniesController)->displayForm();
});
//display Company all Type
$router->get('/dashboard/companies/allType', function () {
    (new CompaniesController)->displayType();
});
$router->get('/dashboard/companies/list', function(){
    (new CompaniesController)->displayCompanies();
});
//
$router->post('/dashboard/companies/postCompanies', function () {
    (new CompaniesController)->addCompany();
});
$router->get('/dashboard/companies/delete/(\d+)', function ($companyId) {
    (new CompaniesController)->deleteCompany($companyId);
});
$router->get('/dashboard/companies', function () {
    (new CompaniesController)->updateCompany();
});

$router->run();
