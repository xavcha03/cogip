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
    
    
    public function addCompany()
    {
        $company=[];
        $company['name'] = $_POST['name'];
        $company['country'] = $_POST['country'];
        $company['tva'] = $_POST['tva'];
        $company['type_id'] = $_POST['type_id'];
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
        if ($model->addCompany($company)) {
            return $this->view('addCompanyOk', ["company" => $company]);
        } else {
            return $this->view('addCompanyNotOK', ["company" => $company]);
        }
    }
    public function deleteCompany($companyId)
    {
        $company=[];
        
        $model = new CompanyModel();
        if ($model->deleteCompany($company)) {
            return $this->view('deleteCompanyOk', ["company" => $company]);
        } else {
            return $this->view('deleteCompanyNotOK', ["company" => $company]);
        }
    }
    public function updateCompany()
    {
        $company=[];
        $company['name'] = $_UPDATE['name'];
        $company['country'] = $_UPDATE['country'];
        $company['tva'] = $_UPDATE['tva'];
        $company['type_id'] = $_UPDATE['type_id'];
        
        $model = new CompanyModel();
        if ($model->updateCompany($company)) {
            return $this->view('updateCompanyOk', ["company" => $company]);
        } else {
            return $this->view('updateCompanyNotOK', ["company" => $company]);
        }
        $types = $model->getAllType();

        return $this->view('dashboard/companies/allType', ["types"=>$types]);
    }

}
