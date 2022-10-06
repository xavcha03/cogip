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

    /**
     * Delete a type of company with an ID
     */
    public function deleteType($idType){
        $query = "DELETE FROM types WHERE id = :idType";
        $stm = $this->db->prepare($query);
        $stm->bindParam(":idType", $idType);
        $stm->execute();
    }


    /**
     * Display all type
     */
    public function getAllType(){
        $query = "SELECT * FROM types";
        $stm = $this->db->prepare($query);
        $stm->execute();

        $result = $stm->fetchAll();
        return $result;
    }




}
