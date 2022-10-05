<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\CompanyModel;

class CompaniesController extends Controller
{
    //Display add companie form
    public function callFormCompany()
    {
        //Get all types in BDD
        $model = new CompanyModel();
        $types = $model->getAllType();

        //Display view
        $this->view('dashboard/companies/addform', ["types" => $types]);
    }


    /*
    * Ajouter un type d'entreprise
    */
    public function addType()
    {
        //get data from form
        $type = $_POST['typeCompany'];

        $model = new CompanyModel();
        $model->addType($type);
        
        
    }

    /**
     * Supprimer un type d'entreprise
     */
    public function deleteType($idType)
    {
        $model = new CompanyModel();
        $model->deleteType($idType);
        header('Location:/dashboard/companies/allType');
    }

    //Display Form add company
    public function displayForm(){
        return $this->view('dashboard/companies/typeForm', []);
    }

    //Display allType
    public function displayType(){
        $model = new CompanyModel();
        $types = $model->getAllType();

        return $this->view('dashboard/companies/allType', ["types"=>$types]);
    }

}
