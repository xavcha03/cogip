<?php 

namespace App\Model;

use App\Core\Model;

class ContactModel extends Model{
    public function addContact($contact){
        $query = "INSERT INTO contact (name,company_id, email,phone, created_at, updated_at) VALUES (:name,:company_id, :email,:phone, NOW(), NOW())";
        $stm = $this->db->prepare($query);
        $stm->bindParam(':name', $contact["name"]);
        $stm->bindParam(':email', $contact["email"]);
        $stm->bindParam(':phone', $contact["phone"]);
        $stm->bindParam(':company_id', $contact["company_id"]);
         
        $stm->execute();

        header("Location:/dashboard/contact");
    
    }
}