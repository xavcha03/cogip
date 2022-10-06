<?php

namespace App\Model;

use App\Core\Model;

class ConfigModel extends Model
{

    public function installBdd()
    {
        $sqlFile = '../Resources/sql/cogip.sql';
        $result = $this->db->query("SET foreign_key_checks = 0");
        $result = $this->db->query("DROP TABLE IF EXISTS `companies`, `contact`, `invoices`, `permissions`, `roles`, `roles_permission`, `types`, `users`; ");
        $result = $this->db->query(file_get_contents($sqlFile));
        echo "<pre>";
        var_dump($result);
        echo "</pre>";
    }
}
