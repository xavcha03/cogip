<?php

use Bramus\Router\Router;
use Symfony\Component\Dotenv\Dotenv;



require_once __DIR__ . '/vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

require_once __DIR__ . '/Core/Helper.php';
require_once __DIR__ . '/Routes/Routes.php';
