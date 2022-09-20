<?php

namespace App\Controllers;

use App\Core\Controller;

class CompanieController extends Controller
{
    /*
    * Ajouter un type d'entreprise
    */
    public function addType()
    {
        $type = $_POST['companyType'];
        


        return $this->view('addType', ["type" => $type]);
    }
}
