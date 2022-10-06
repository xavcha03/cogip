<?php

namespace App\Core;

use PDO;
use Exception;

class Model
{

    public $db;


    public function __construct()
    {
        $dbName = $_ENV['DB_NAME'];
        $dbUser = $_ENV['DB_USER'];
        $dbPass = $_ENV['DB_PASS'];


        try {
            $this->db = new PDO('mysql:host=localhost;dbname=' . $dbName . ';charset=utf8', $dbUser, $dbPass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
