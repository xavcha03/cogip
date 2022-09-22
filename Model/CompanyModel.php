<?php

namespace App\Model;

use App\Core\Model;
use DateTime;

class CompanyModel extends Model
{
    /**
     * Add a new type of company in database
     */
    public function addType($type)
    {
        //Création de la requete
        $query = "INSERT INTO types (name, created_at, updated_at) VALUES (:name, NOW(), NOW())";
        //Préparation
        $stm = $this->db->prepare($query);
        //Ajout des données
        $stm->bindParam(":name", $type);
        //execution de la requete
        $isDone = $stm->execute();
        return $isDone;
    }
}
