<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\CompanyModel;
use App\Model\ContactModel;

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
    $contact["name"] = $_POST["name"];
    $contact["company_id"] = $_POST["company_id"];
    $contact["email"] = $_POST["email"];
    $contact["phone"] = $_POST["phone"];

    $model = new ContactModel();
    $model->addContact($contact);

    
}





}