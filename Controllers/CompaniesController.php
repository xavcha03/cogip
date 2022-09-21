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

    /**
     * Supprimer un type d'entreprise
     */
    public function deleteType()
    {
    }
}
