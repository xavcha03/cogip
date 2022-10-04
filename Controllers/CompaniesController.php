<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\CompanyModel;

class CompaniesController extends Controller
{
    /*
    * Ajouter un type d'entreprise
    */
    public function addType()
    {
        $type = $_POST['companyType'];

        $model = new CompanyModel();
        if ($model->addType($type)) {
            return $this->view('addTypeOk', ["type" => $type]);
        } else {
            return $this->view('addTypeNotOK', ["type" => $type]);
        }
    }
    public function deleteType()
    {
        $type=[];
        
        $model = new CompanyModel();
        if ($model->deleteType($type)) {
            return $this->view('deleteCompanyOk', ["type" => $type]);
        } else {
            return $this->view('deleteCompanyNotOK', ["type" => $type]);
        }
    }
    public function updateType()
    {
        $type = $_UPDATE['companyType'];
        
        $model = new CompanyModel();
        if ($model->updateCompany($type)) {
            return $this->view('updateCompanyOk', ["type" => $type]);
        } else {
            return $this->view('updateCompanyNotOK', ["type" => $type]);
        }
    }
    public function addCompany()
    {
        $company=[];
        $company['name'] = $_POST['name'];
        $company['country'] = $_POST['country'];
        $company['tva'] = $_POST['tva'];
        $company['type_id'] = $_POST['type_id'];


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
    }
}
