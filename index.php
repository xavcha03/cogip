<?php

use Bramus\Router\Router;

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/Core/Helper.php';
require_once __DIR__.'/Routes/Routes.php';

//Create Router instance
$router = new Router;

//Define routes
$router->get('/home',function(){echo "HomePage";});
$router->get('/invoices',function(){echo "invoices";});
$router->get('/contacts',function(){echo "contacts";});
$router->post('/contacts',function(){echo "traitement du post";});
$router->get('/companies',function(){echo "companies";});
$router->post('/companies',function(){echo "companies";});
$router->get('/show-invoice',function(){echo "afficher une facture";});
$router->get('/show-contact',function(){echo "Afficher les contacts";});
$router->get('/dashboard',function(){echo "Afficher le dashboard";});

//Run router
$router->run();


