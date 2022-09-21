<?php

namespace App\Core;

use PDO;
use Exception;

class Model
{

    public $db;
    public function __construct()
    {

        try {
            $this->db = new PDO('mysql:host=localhost;dbname=cogip;charset=utf8', 'root', '123456');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
