<?php

namespace App\Controllers;

use App\Core\Controller;
// use App\Model\CompanyModel;
use App\Model\UserModel;

class UserController extends Controller
{

    //Display add user
    public function addFormSignUp()
    {
        //Get all contact in BDD
        $model = new UserModel();
        $users = $model->getAllUsers();
        $this->view('dashboard/signup/addform', ["users" => $users]);
    }


    public function addUser()
    {
        $user = [];
        $user["first_name"] = $_POST["first_name"];
        $user["role_id "] = $_POST["role_id "];
        $user["last_name"] = $_POST["last_name"];
        $user["email"] = $_POST["email"];
        $user["password"] = $_POST["password"];

        $model = new UserModel();
        $model->addUser($user);

        header("Location:/dashboard/signup");
    }

    public function listUser()
    {
        $model = new UserModel();
        $users = $model->listUser();
        $this->view('dashboard/signup/listusers', ['users' => $users]);
    }

    public function deleteUser($userID)
    {
        $model = new UserModel();
        $model->deleteUser($userID);
        header('location:/dashboard/signup/list');
    }
}