<?php

namespace App\Model;

use App\Core\Model;

class UserModel extends Model
{
    public function getAllUsers(){
        $query = 
        "SELECT users.id AS id, 
        users.first_name AS first_name,
        last_name,
        email,
        password,
        users.created_at AS created_at,
        users.updated_at AS updated_at,
        roles.name AS users 
        FROM users
        LEFT JOIN roles
        ON users.role_id = roles.id 
        ";
        $stm = $this->db->prepare($query);
        $stm->execute();

        $result = $stm->fetchAll();
        return $result;
    }

    public function addUser($user)
    {
        $query = "INSERT INTO users (first_name, role_id , last_name, email, password, created_at, updated_at)
        VALUES (:first_name, :role_id , :last_name, :email, password, NOW(), NOW())";
        $stm = $this->db->prepare($query);
        $stm->bindParam(':first_name', $user["first_name"]);
        $stm->bindParam(':last_name', $user["last_name"]);
        $stm->bindParam(':email', $user["email"]);
        $stm->bindParam(':password', $user["password"]);
        $stm->bindParam(':role_id ', $user["role_id "]);

        $stm->execute();

        header("Location:/dashboard/signup");
    }

    public function listUser()
    {
        $query =
            "SELECT 
        users.*, roles.name AS roleName
        FROM users
        LEFT JOIN roles
        ON users.role_id  = users.id
        ";
        $stm = $this->db->prepare($query);
        $stm->execute();
        return $stm->fetchAll();
    }


    public function deleteUser($userID)
    {
        $query = "DELETE FROM users WHERE id = :id";
        $stm = $this->db->prepare($query);
        $stm->bindParam(":id", $userID);
        $stm->execute();
        header("Location:/dashboard/signup");
    }

    public function countUsers()
    {
        $query = "SELECT COUNT(*) FROM users";
        $stm = $this->db->prepare($query);
        $stm->execute();
        return $stm->fetch()[0];
    }
}