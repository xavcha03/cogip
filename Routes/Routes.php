<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\CompaniesController;
use App\Controllers\ConfigController;
use App\Controllers\ContactController;
use App\Controllers\DashBoardController;
use App\Controllers\InvoiceController;

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
$router->get('/dashboard/companies/list', function () {
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

//-------------------- CONFIG
$router->get('/install', function () {
    (new ConfigController)->install();
});

//---------------------CONTACT

$router->get('/dashboard/contact', function () {
    (new ContactController)->addForm();
});

$router->post('/dashboard/contact', function () {
    (new ContactController)->addContact();
});

$router->get('/dashboard/contact/list', function () {
    (new ContactController)->list();
});
$router->get('/dashboard/contact/delete/(\d+)', function ($contactId) {
    (new ContactController)->delete($contactId);
});


//------------------INVOICES
$router->get('/dashboard/invoice', function () {
    (new InvoiceController)->displayForm();
});
$router->post('/dashboard/invoice', function () {
    (new InvoiceController)->addInvoice();
});
$router->get('/dashboard/invoice/list', function () {
    (new InvoiceController)->list();
});
$router->get('/dashboard/invoice/delete/(\d+)', function ($invoiceId) {
    (new InvoiceController)->delete($invoiceId);
});


$router->run();
