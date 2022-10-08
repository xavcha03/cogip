<?php

namespace App\Model;

use App\Core\Model;

class InvoiceModel extends Model
{
    public function addInvoice($invoiceData)
    {
        $query = "INSERT INTO invoices (ref, id_company, created_at, updated_at) VALUES(:ref, :id_company, NOW(), NOW())";
        $stm = $this->db->prepare($query);

        $stm->bindParam(':ref', $invoiceData['reference']);
        $stm->bindParam(':id_company', $invoiceData['company_id']);

        $stm->execute();

    }

    public function listInvoice()
    {
        $query =
            "SELECT 
            invoices.*, companies.name AS companyName
            FROM invoices
            LEFT JOIN companies
            ON invoices.id_company = companies.id
            ";
        $stm = $this->db->prepare($query);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function deleteInvoice($id)
    {
        $query = "DELETE FROM invoices WHERE id = :id";
        $stm = $this->db->prepare($query);
        $stm->bindParam(":id", $id);
        $stm->execute();
        header("Location:/dashboard/invoice/list");
    }

    public function countInvoices()
    {
        $query = "SELECT COUNT(*) FROM invoices";
        $stm = $this->db->prepare($query);
        $stm->execute();
        return $stm->fetch()[0];
    }
}
