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
    
    public function addCompany($company)
    {
        //Création de la requete
        $query = "INSERT INTO companies (name, 	type_id, country, tva, created_at, updated_at) 
        VALUES (:name, :type_id, :country, :tva, NOW(), NOW())";
        //Préparation
        $stm = $this->db->prepare($query);
        //Ajout des données
        $stm->bindParam(":name", $company['name']);
        $stm->bindParam(":type_id", $company['type_id']);
        $stm->bindParam(":country", $company['country']);
        $stm->bindParam(":tva", $company['tva']);
        //execution de la requete
        $isDone = $stm->execute();
        return $isDone;
    }

    
    public function deleteCompany($companyId)
    {
        //Création de la requete
        $query = "DELETE FROM companies where id = :id";
        //Préparation
        $stm = $this->db->prepare($query);
        $stm->bindParam(":id", $companyId);
        //execution de la requete
        $isDone = $stm->execute();
        return $isDone;
    }




    public function updateCompany($company)
    {
        //Création de la requete
        $query = "UPDATE companies set
        name='name', type_id='type_id', country='country', tva='tva', where id='id'";
        //Préparation
        $stm = $this->db->prepare($query);
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

    public function getAllCompanies(){
        $query = 
        "SELECT companies.id AS id, 
        companies.name AS name,
        country,
        tva,
        companies.created_at AS created_at,
        companies.updated_at AS updated_at,
        types.name AS companiesType 
        FROM companies
        LEFT JOIN types
        ON companies.type_id = types.id 
        ";
        $stm = $this->db->prepare($query);
        $stm->execute();

        $result = $stm->fetchAll();
        return $result;
    }


    public function getAllCotact(){
        
    }

}
