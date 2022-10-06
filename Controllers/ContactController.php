<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\CompanyModel;

class ContactController extends Controller
{

    //Display add contact
    public function addForm()
    {
        //Get all contact in BDD
        $model = new CompanyModel();
        $companies = $model->getAllCompanies();
        $this->view('dashboard/contact/addform', ["companies" => $companies]);

}

public function addContact(){
    $contact = [];
    $contact["name"] = 
}





}