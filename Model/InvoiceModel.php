<?php

namespace App\Model;

use App\Core\Model;
use DateTime;

class InvoiceModel extends Model
{
    public function addInvoices($invoice)
    {
        //Création de la requete
        $query = "INSERT INTO invoices (ref, id_company, created_at, updated_at) 
        VALUES (:ref, :id_company, NOW(), NOW())";
        //Préparation
        $stm = $this->db->prepare($query);
        //Ajout des données
        $stm->bindParam(":ref", $invoice['ref']);
        $stm->bindParam(":id_company", $invoice['id_company']);
        //execution de la requete
        $isDone = $stm->execute();
        return $isDone;
    }
}
