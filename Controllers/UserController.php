<?php

namespace App\Controllers;

use App\Core\Controller;
// use App\Model\CompanyModel;
use App\Model\UserModel;

class UserController extends Controller
{
    //----------USERS
    //Display add user
    public function callFormUser()
    {
        //Get all contact in BDD
        $model = new UserModel();
        $users = $model->getAllUsers();
        
        $this->view('dashboard/admin/addFormUser', ["users" => $users]);
    }


    public function addUser()
    {
        $user = [];
        $user["first_name"] = $_POST["first_name"];
        $user["role_id"] = $_POST["role_id"];
        $user["last_name"] = $_POST["last_name"];
        $user["email"] = $_POST["email"];
        $user["password"] = $_POST["password"];
        dd($user);

        $model = new UserModel();
        $model->addUser($user);

        header("Location:/dashboard/admin");
    }

    public function listUser()
    {
        $model = new UserModel();
        $users = $model->listUser();
        $this->view('dashboard/admin/listUsers', ['users' => $users]);
    }

    public function deleteUser($userID)
    {
        $model = new UserModel();
        $model->deleteUser($userID);
        header('location:/dashboard/admin/listUsers');
    }

    //----------ROLES
    public function callFormRoles()
    {
        //Get all contact in BDD
        $model = new UserModel();
        $roles = $model->getAllRoles();
        
        $this->view('dashboard/admin/allRole', ["roles" => $roles]);
    }

    public function addRole()
    {
        //get data from form
        $role = $_POST['typeCompany'];

        $model = new UserModel();
        $model->addRole($role);
        header('Location:/dashboard/admin/allRole');
    }
}